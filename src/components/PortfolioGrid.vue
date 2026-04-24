<template>
  <div ref="contentRef" class="content">
    <h1 class="hide">{{ heading }}</h1>

    <div ref="masonryRef" class="masonry">
      <div class="masonry-sizer" aria-hidden="true" />
      <figure
        v-for="item in visibleItems"
        :key="item.id"
        class="masonry-item"
        :class="{ 'is-visible': revealedIds.has(item.id) }"
        :data-id="item.id"
      >
        <div class="img">
          <img :src="resolvePublic(item.thumb)" :alt="item.alt" loading="lazy" decoding="async" />
        </div>
        <div class="info">
          <div>
            <h3 v-if="hasText(item.title)">{{ item.title }}</h3>
            <p v-if="hasText(item.date)" class="date">
              <span class="texthidden">프로젝트 진행 : </span>{{ item.date }}
            </p>
            <p v-if="hasText(item.skill)" class="skill">{{ item.skill }}</p>
            <p v-if="hasText(item.role)" class="role">{{ item.role }}</p>
            <ul v-if="item.links?.length">
              <li v-for="(link, i) in item.links" :key="i">
                <a
                  :href="resolvePublic(link.href)"
                  :class="linkAnchorClass(link.kind)"
                  :title="link.title"
                  :target="link.target"
                  :rel="link.target === '_blank' ? 'noopener noreferrer' : undefined"
                  @click="onLinkClick(link, item, $event)"
                >
                  <span class="texthidden">{{ link.title }}</span>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </figure>
    </div>

    <div v-if="hasMore" ref="sentinelRef" class="sentinel" aria-hidden="true" />

    <Teleport to="body">
      <div
        v-if="isModalOpen"
        class="image-modal"
        role="dialog"
        aria-modal="true"
        aria-label="이미지 크게 보기"
        @click="onModalBackdropClick"
      >
        <button type="button" class="image-modal-close" aria-label="닫기" @click="closeImageModal">
          ×
        </button>
        <img class="image-modal-img" :src="modalImageSrc" :alt="modalImageAlt" />
      </div>
    </Teleport>
  </div>
</template>

<script setup lang="ts">
import { computed, nextTick, onBeforeUnmount, onMounted, ref, watch } from 'vue'
import Masonry from 'masonry-layout'
import webPortfolio from '@/data/webPortfolio.json'

type PortfolioCategory = 'web' | 'responsive'
type PortfolioLinkKind = 'big-img' | 'file-list' | 'home' | 'pc-pub' | 'mobile-pub'

type PortfolioLink = {
  kind: PortfolioLinkKind
  href: string
  title: string
  target?: '_blank'
}

type PortfolioItem = {
  id: string
  category: PortfolioCategory
  thumb: string
  alt: string
  title: string
  date: string
  skill: string
  role: string
  links: PortfolioLink[]
}

const props = withDefaults(
  defineProps<{
    category: PortfolioCategory
    heading?: string
  }>(),
  {
    heading: '웹 작업 소개',
  },
)

function linkAnchorClass(kind: PortfolioLinkKind): string {
  const map: Record<PortfolioLinkKind, string> = {
    'big-img': 'big-img detail-photo',
    'file-list': 'file-list',
    home: 'home',
    'pc-pub': 'pc-pub',
    'mobile-pub': 'mobile-pub',
  }
  return map[kind]
}

const portfolioPool = (webPortfolio as PortfolioItem[]).filter(
  (item) => item.category === props.category,
)

function hasText(value: string | null | undefined): boolean {
  return typeof value === 'string' && value.trim().length > 0
}

function resolvePublic(path: string): string {
  if (/^https?:\/\//i.test(path)) return path
  const base = import.meta.env.BASE_URL
  const normalized = path.replace(/^\//, '')
  return `${base}${normalized}`
}

const PAGE_SIZE = 6

const loadedCount = ref(Math.min(PAGE_SIZE, portfolioPool.length))
const visibleItems = computed(() => portfolioPool.slice(0, loadedCount.value))
const hasMore = computed(() => loadedCount.value < portfolioPool.length)
const isModalOpen = ref(false)
const modalImageSrc = ref('')
const modalImageAlt = ref('')

const contentRef = ref<HTMLElement | null>(null)
const masonryRef = ref<HTMLElement | null>(null)
const sentinelRef = ref<HTMLElement | null>(null)

let masonryInstance: Masonry | null = null
let masonryResizeObserver: ResizeObserver | null = null
let lastMasonryColCount = 0
let masonryResizeDebounce: ReturnType<typeof setTimeout> | null = null

function colCountFromContentWidth(width: number): number {
  if (width >= 1720) return 4
  if (width >= 1240) return 3
  if (width >= 760) return 2
  return 1
}

function applyMasonryCols() {
  const content = contentRef.value
  const grid = masonryRef.value
  if (!content || !grid) return
  const cols = colCountFromContentWidth(content.clientWidth)
  grid.style.setProperty('--masonry-cols', String(cols))
}

let layoutDebounce: ReturnType<typeof setTimeout> | null = null
function scheduleMasonryLayout() {
  if (layoutDebounce) clearTimeout(layoutDebounce)
  layoutDebounce = setTimeout(() => {
    layoutDebounce = null
    if (!masonryInstance) return
    masonryInstance.reloadItems()
    masonryInstance.layout()
  }, 48)
}

function bindMasonryImageLayouts() {
  masonryRef.value?.querySelectorAll<HTMLImageElement>('.masonry-item img').forEach((img) => {
    if (img.complete) return
    const onDone = () => scheduleMasonryLayout()
    img.addEventListener('load', onDone, { once: true })
    img.addEventListener('error', onDone, { once: true })
  })
}

function initOrRefreshMasonry() {
  applyMasonryCols()
  const grid = masonryRef.value
  if (!grid) return

  const content = contentRef.value
  const cols = content ? colCountFromContentWidth(content.clientWidth) : 1
  const colsChanged = lastMasonryColCount !== 0 && cols !== lastMasonryColCount

  if (colsChanged && masonryInstance) {
    masonryInstance.destroy()
    masonryInstance = null
  }

  if (!masonryInstance) {
    masonryInstance = new Masonry(grid, {
      itemSelector: '.masonry-item',
      columnWidth: '.masonry-sizer',
      gutter: 30,
      // false: 짧은 열에 다음 카드(일반 벽돌). true는 열을 돌아가며 넣어서 간격이 어색해질 수 있음
      horizontalOrder: false,
      percentPosition: true,
    })
  } else {
    masonryInstance.reloadItems()
  }
  masonryInstance.layout()
  bindMasonryImageLayouts()
  lastMasonryColCount = cols
}

const revealedIds = ref<Set<string>>(new Set())

let itemObserver: IntersectionObserver | null = null
let loadObserver: IntersectionObserver | null = null
const onGlobalKeyDown = (e: KeyboardEvent) => {
  if (e.key === 'Escape' && isModalOpen.value) {
    closeImageModal()
  }
}

function observeRevealTargets() {
  if (!itemObserver || !masonryRef.value) return
  masonryRef.value
    .querySelectorAll<HTMLElement>('.masonry-item:not([data-reveal-observed])')
    .forEach((el) => {
      el.setAttribute('data-reveal-observed', '')
      itemObserver!.observe(el)
    })
}

function setupItemObserver() {
  itemObserver = new IntersectionObserver(
    (entries) => {
      for (const e of entries) {
        if (!e.isIntersecting) continue
        const id = (e.target as HTMLElement).dataset.id
        if (!id) continue
        revealedIds.value = new Set(revealedIds.value).add(id)
        itemObserver?.unobserve(e.target)
      }
    },
    {
      root: null,
      rootMargin: '0px 0px 12% 0px',
      threshold: 0.01,
    },
  )
}

function loadMore() {
  if (!hasMore.value) return
  loadedCount.value = Math.min(loadedCount.value + PAGE_SIZE, portfolioPool.length)
}

function setupLoadObserver() {
  loadObserver = new IntersectionObserver(
    (entries) => {
      for (const e of entries) {
        if (e.isIntersecting) loadMore()
      }
    },
    { root: null, rootMargin: '240px 0px', threshold: 0 },
  )
}

function getScrollbarWidth(): number {
  return Math.max(0, window.innerWidth - document.documentElement.clientWidth)
}

function openImageModal(imagePath: string, altText: string) {
  modalImageSrc.value = resolvePublic(imagePath)
  modalImageAlt.value = altText
  isModalOpen.value = true
  const sb = getScrollbarWidth()
  document.body.style.overflow = 'hidden'
  if (sb > 0) {
    document.body.style.paddingRight = `${sb}px`
  }
}

function closeImageModal() {
  isModalOpen.value = false
  modalImageSrc.value = ''
  modalImageAlt.value = ''
  document.body.style.overflow = ''
  document.body.style.paddingRight = ''
}

function onModalBackdropClick(e: MouseEvent) {
  if (e.target === e.currentTarget) {
    closeImageModal()
  }
}

function onLinkClick(link: PortfolioLink, item: PortfolioItem, e: MouseEvent) {
  if (link.kind !== 'big-img') return
  e.preventDefault()
  const fallbackAlt = hasText(item.alt) ? item.alt : item.title
  openImageModal(link.href, fallbackAlt)
}

onMounted(async () => {
  window.addEventListener('keydown', onGlobalKeyDown)
  setupItemObserver()
  setupLoadObserver()
  await nextTick()
  initOrRefreshMasonry()
  if (contentRef.value) {
    masonryResizeObserver = new ResizeObserver(() => {
      if (masonryResizeDebounce) clearTimeout(masonryResizeDebounce)
      masonryResizeDebounce = setTimeout(() => {
        masonryResizeDebounce = null
        void nextTick(() => initOrRefreshMasonry())
      }, 80)
    })
    masonryResizeObserver.observe(contentRef.value)
  }
  observeRevealTargets()
  if (sentinelRef.value) loadObserver?.observe(sentinelRef.value)
})

watch(visibleItems, async () => {
  await nextTick()
  observeRevealTargets()
  initOrRefreshMasonry()
  if (sentinelRef.value && loadObserver) {
    loadObserver.disconnect()
    if (hasMore.value) loadObserver.observe(sentinelRef.value)
  }
})

onBeforeUnmount(() => {
  window.removeEventListener('keydown', onGlobalKeyDown)
  document.body.style.overflow = ''
  document.body.style.paddingRight = ''
  if (layoutDebounce) clearTimeout(layoutDebounce)
  layoutDebounce = null
  if (masonryResizeDebounce) clearTimeout(masonryResizeDebounce)
  masonryResizeDebounce = null
  masonryResizeObserver?.disconnect()
  masonryResizeObserver = null
  masonryInstance?.destroy()
  masonryInstance = null
  itemObserver?.disconnect()
  itemObserver = null
  loadObserver?.disconnect()
  loadObserver = null
})
</script>

<style scoped>
.content {
  container-type: inline-size;
  container-name: web-portfolio;
  padding-left: 130px;
  width: 100%;
  overflow: hidden;
}
@media all and (max-width: 1000px) {
  .content {
    padding-left: 0;
    width: 100%;
    overflow: hidden;
  }
}
.content:before {
  content: '';
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: #f7f7f7;
  z-index: -1;
}

.masonry {
  list-style: none;
  margin: 30px;
  padding: 0;
  position: relative;
  --masonry-cols: 1;
}

.masonry-sizer,
.masonry-item {
  box-sizing: border-box;
  width: calc((100% - (var(--masonry-cols) - 1) * 30px) / var(--masonry-cols));
}

.masonry-sizer {
  height: 0;
  margin: 0;
  overflow: hidden;
  visibility: hidden;
  pointer-events: none;
}

h1 {
  margin: 0 0 1.25rem;
  font-size: 1.5rem;
  font-weight: 600;
}

.hide {
  position: absolute;
  width: 1px;
  height: 1px;
  margin: -1px;
  padding: 0;
  overflow: hidden;
  clip: rect(0, 0, 0, 0);
  white-space: nowrap;
  border: 0;
}

/* Masonry gutter: 가로만 — 세로는 margin-bottom으로 간격 */
.masonry-item {
  margin: 0 0 30px 0;
  border-radius: 4px;
  box-shadow: 0 4px 18px rgba(0, 0, 0, 0.12);
  overflow: hidden;
  background: #fff;
  opacity: 0;
  transition: opacity 0.45s cubic-bezier(0.33, 1, 0.68, 1);
}

.masonry-item.is-visible {
  opacity: 1;
}

.masonry-item .img {
  position: relative;
  z-index: 0;
}

.masonry-item .img img {
  display: block;
  width: 100%;
  height: auto;
}

@media (min-width: 1001px) {
  .masonry-item .info {
    position: absolute;
    z-index: 1;
    inset: 0;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    min-height: 0;
    padding: 14px 16px;
    background: rgba(255, 255, 255, 0.98);
    text-align: center;
    font-size: 12px;
    color: #444;
    line-height: 1.45;
    overflow-y: auto;
    -webkit-overflow-scrolling: touch;
    opacity: 0;
    visibility: hidden;
    pointer-events: none;
    transition:
      opacity 0.28s ease,
      visibility 0.28s ease;
  }

  .masonry-item:hover .info,
  .masonry-item:focus-within .info {
    opacity: 1;
    visibility: visible;
    pointer-events: auto;
  }

  .masonry-item .info > div {
    flex: 0 1 auto;
    width: min(86%, 480px);
    max-width: 480px;
    text-align: left;
  }
}

@media (max-width: 1000px) {
  .masonry-item .info {
    position: relative;
    z-index: 1;
    padding: 14px 16px 16px;
    text-align: left;
    font-size: 12px;
    color: #444;
    line-height: 1.45;
    background: #fff;
  }
}

.masonry-item .info h3 {
  margin: 0 0 8px;
  font-size: 14px;
  font-weight: 600;
  color: #222;
  line-height: 1.35;
}

.masonry-item .date {
  margin: 0 0 6px;
}

.masonry-item .skill {
  margin: 0 0 8px;
}

.masonry-item .role {
  margin: 0 0 8px;
}

.masonry-item .info ul {
  margin: 30px 0 0;
  padding: 0;
  list-style: none;
  display: flex;
  flex-wrap: wrap;
  gap: 8px 12px;
}

.masonry-item .info ul li {
  margin: 0;
}

.masonry-item .info a.big-img,
.masonry-item .info a.home,
.masonry-item .info a.pc-pub,
.masonry-item .info a.mobile-pub,
.masonry-item .info a.file-list {
  display: inline-block;
  width: 33px;
  height: 33px;
  overflow: hidden;
  font-size: 0;
  line-height: 0;
  color: transparent;
  text-decoration: none;
  background-image: url(../assets/images/sprite-bg.png);
  background-repeat: no-repeat;
}

.masonry-item .info a.big-img {
  background-position: 0 -182px;
}
.masonry-item .info a.home {
  background-position: 0 -149px;
}
.masonry-item .info a.pc-pub {
  background-position: 0 -281px;
}
.masonry-item .info a.mobile-pub {
  background-position: 0 -215px;
}
.masonry-item .info a.file-list {
  background-position: 0 -248px;
}

.masonry-item .info a.big-img:hover {
  background-position: -33px -182px;
}
.masonry-item .info a.home:hover {
  background-position: -33px -149px;
}
.masonry-item .info a.pc-pub:hover {
  background-position: -33px -281px;
}
.masonry-item .info a.mobile-pub:hover {
  background-position: -33px -215px;
}
.masonry-item .info a.file-list:hover {
  background-position: -33px -248px;
}

.texthidden {
  position: absolute;
  width: 1px;
  height: 1px;
  margin: -1px;
  padding: 0;
  overflow: hidden;
  clip: rect(0, 0, 0, 0);
  white-space: nowrap;
  border: 0;
}

.sentinel {
  height: 1px;
  margin-top: 8px;
}

.image-modal {
  position: fixed;
  inset: 0;
  z-index: 9999;
  display: flex;
  align-items: center;
  justify-content: center;
  padding: 24px;
  background: rgba(0, 0, 0, 0.82);
}

.image-modal-img {
  max-width: min(1200px, calc(100vw - 48px));
  max-height: calc(100vh - 80px);
  width: auto;
  height: auto;
  object-fit: contain;
  box-shadow: 0 8px 28px rgba(0, 0, 0, 0.45);
  background: #fff;
}

.image-modal-close {
  position: fixed;
  top: 16px;
  right: 20px;
  z-index: 10000;
  width: 40px;
  height: 40px;
  border: 0;
  border-radius: 999px;
  background: rgba(255, 255, 255, 0.2);
  color: #fff;
  font-size: 28px;
  line-height: 1;
  cursor: pointer;
}

.image-modal-close:hover {
  background: rgba(255, 255, 255, 0.32);
}
</style>
