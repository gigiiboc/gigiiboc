<template>
  <div id="header">
    <div id="logo-bar">
      <h1 class="logo">
        <RouterLink to="/" title="홈으로">whw</RouterLink>
      </h1>
      <span class="top-open" :class="{ on: isMobileMenuOpen }" @click="toggleMobileMenu">
        <span class="line1"></span>
        <span class="line2"></span>
        <span class="line3"></span>
        <Transition name="mobile-menu-backdrop">
          <span
            v-show="isMobileMenuOpen"
            class="bg"
            aria-hidden="true"
            @click.stop="closeMobileMenu"
          ></span>
        </Transition>
      </span>
    </div>
    <ul id="gnb" :style="gnbStyle">
      <li :class="{ activated: isActive('/introduction') }">
        <RouterLink to="/introduction" class="menu" @click="closeMobileMenu">
          introduction
        </RouterLink>
      </li>
      <li
        :class="{ activated: isPortfolioActivated }"
        @mouseenter="onPortfolioEnter"
        @mouseleave="onPortfolioLeave"
      >
        <button v-if="isMobile" type="button" class="menu" @click="togglePortfolio">
          portfolio
        </button>
        <span v-else class="menu">portfolio</span>
        <!-- PC 서브 메뉴 -->
        <div class="sub-menu">
          <div ref="subMenuInnerRef" @mouseleave="onSubMenuLeave">
            <ul>
              <li
                :class="{ selected: isActive('/web'), hovered: hoveredSubMenuPath === '/web' }"
                @mouseenter="onSubMenuItemEnter('/web')"
              >
                <RouterLink to="/web">적응형웹</RouterLink>
              </li>
              <li
                :class="{
                  selected: isActive('/responsive'),
                  hovered: hoveredSubMenuPath === '/responsive',
                }"
                @mouseenter="onSubMenuItemEnter('/responsive')"
              >
                <RouterLink to="/responsive">반응형웹</RouterLink>
              </li>
            </ul>
            <span class="bg" :style="subMenuBgStyle"></span>
          </div>
        </div>
        <!-- 모바일 서브 메뉴 -->
        <div class="mobile-menu">
          <div>
            <ul :class="{ open: isPortfolioOpen }">
              <li>
                <RouterLink to="/web" @click="closeMobileMenu">적응형웹</RouterLink>
              </li>
              <li>
                <RouterLink to="/responsive" @click="closeMobileMenu">반응형웹</RouterLink>
              </li>
            </ul>
          </div>
        </div>
      </li>
      <li :class="{ activated: isActive('/contactus') }">
        <RouterLink to="/contactus" class="menu" @click="closeMobileMenu">contact us</RouterLink>
      </li>
    </ul>
  </div>
</template>

<script setup lang="ts">
import { computed, nextTick, onBeforeUnmount, onMounted, ref, watch } from 'vue'
import { RouterLink, useRoute } from 'vue-router'

const isMobileMenuOpen = ref(false)
const isPortfolioOpen = ref(false)
const windowWidth = ref(window.innerWidth)
const route = useRoute()
const isMobile = computed(() => windowWidth.value <= 1000)
const handleResize = () => {
  windowWidth.value = window.innerWidth
  if (windowWidth.value > 1000) {
    // PC 전환 시 모바일 메뉴 상태 초기화
    isMobileMenuOpen.value = false
  }
}
const toggleMobileMenu = () => {
  if (!isMobile.value) return
  const opening = !isMobileMenuOpen.value
  isMobileMenuOpen.value = opening
  if (!opening) {
    isPortfolioOpen.value = false
  } else if (isPortfolioRoute.value) {
    // 포트폴리오 하위 페이지에 있을 때 햄버거를 열면 하위 메뉴도 펼침
    isPortfolioOpen.value = true
  }
}
const closeMobileMenu = () => {
  isMobileMenuOpen.value = false
  isPortfolioOpen.value = false
}
const subMenuInnerRef = ref<HTMLElement | null>(null)
const subMenuBgY = ref(0)
const subMenuBgVisible = ref(false)
const hoveredSubMenuPath = ref<string | null>(null)
const subMenuBgStyle = computed(() => {
  return {
    transform: `translateY(${subMenuBgY.value}px)`,
    opacity: subMenuBgVisible.value ? '1' : '0',
  }
})
const syncSubMenuBgToRoute = async () => {
  await nextTick()
  const selectedLi = subMenuInnerRef.value?.querySelector('li.selected') as
    | HTMLElement
    | null
    | undefined
  if (!selectedLi) {
    subMenuBgVisible.value = false
    return
  }
  subMenuBgY.value = selectedLi.offsetTop
  subMenuBgVisible.value = true
}
const onSubMenuItemEnter = (path: string) => {
  hoveredSubMenuPath.value = path
}
const onSubMenuLeave = () => {
  hoveredSubMenuPath.value = null
  syncSubMenuBgToRoute()
}
const togglePortfolio = () => {
  // 모바일일 때만 클릭으로 토글
  if (!isMobile.value) return
  isPortfolioOpen.value = !isPortfolioOpen.value
}
const onPortfolioEnter = () => {
  // PC에서 호버 시 열림
  if (isMobile.value) return
  isPortfolioOpen.value = true
}
const onPortfolioLeave = () => {
  // PC에서 마우스가 나가면 닫힘
  if (isMobile.value) return
  isPortfolioOpen.value = false
}
const isActive = (path: string) => {
  return route.path === path
}
// 포트폴리오 페이지 판별: 라우터에서 portfolio 부모(meta) 기준으로 판단
const isPortfolioRoute = computed(() => route.matched.some((r) => r.meta?.section === 'portfolio'))
// 상위 메뉴 활성(표시)
// - 모바일: "현재 페이지" 기준으로만 활성 (하위 페이지면 portfolio도 활성)
// - PC: 호버로 열려있거나(토글) 하위 페이지면 활성
const isPortfolioActivated = computed(() =>
  isMobile.value ? isPortfolioRoute.value : isPortfolioOpen.value || isPortfolioRoute.value,
)
const gnbStyle = computed(() => {
  if (!isMobile.value) {
    return {}
  }
  return {
    top: isMobileMenuOpen.value ? '50px' : '-300px',
  }
})
onMounted(() => {
  window.addEventListener('resize', handleResize)
})

onBeforeUnmount(() => {
  window.removeEventListener('resize', handleResize)
})
watch(
  () => route.path,
  () => {
    syncSubMenuBgToRoute()
  },
  { immediate: true },
)
</script>

<style scoped></style>
