<template>
  <div id="background">
    <div class="bg01"></div>
    <div class="bg02"></div>
    <div class="bg03"></div>
  </div>
  <div id="intro">
    <h1 class="logo"><RouterLink to="/" title="홈으로">whw</RouterLink></h1>
    <ul>
      <li class="first">
        <RouterLink to="/introduction">
          <span class="icon intro-img"></span><span>introduction</span>
        </RouterLink>
      </li>
      <li class="second">
        <RouterLink to="/portfolio">
          <span class="icon portfolio-img"></span><span>portfolio</span>
        </RouterLink>
      </li>
    </ul>
  </div>
</template>

<script setup lang="ts">
import { RouterLink } from 'vue-router'
import { onMounted, onUnmounted } from 'vue'

let settime: ReturnType<typeof setInterval> | null = null
let introLoadHandler: (() => void) | null = null

onMounted(() => {
  // intro 표시 (페이지 리소스 로드 후 페이드인)
  const intro = document.getElementById('intro')
  if (intro) {
    intro.classList.remove('show')
    introLoadHandler = () => {
      setTimeout(() => {
        intro.classList.add('show')
      }, 30)
    }

    if (document.readyState === 'complete') {
      introLoadHandler()
    } else {
      window.addEventListener('load', introLoadHandler, { once: true })
    }
  }

  // 인트로 페이지 fadeIn은 CSS transition으로 대체 권장
  // 배경 슬라이드 로직
  const box = document.getElementById('background')
  if (!box) return

  const divs = box.querySelectorAll('div')
  if (divs.length < 2) return

  const initialLast = divs[divs.length - 1]
  if (!initialLast) return
  initialLast.classList.add('on')

  const fadeBg = () => {
    const children = box.querySelectorAll('div')
    const length = children.length
    if (length < 2) return
    const scdLast = children[length - 2]
    const last = children[length - 1]
    if (!scdLast || !last) return

    scdLast.classList.add('on')
    last.style.transition = 'opacity 3s'
    last.style.opacity = '0'

    setTimeout(() => {
      last.classList.remove('on')
      last.style.opacity = '1'
      last.style.transition = ''
      box.prepend(last)
    }, 3000)
  }

  settime = setInterval(fadeBg, 10000)
})

onUnmounted(() => {
  if (introLoadHandler) {
    window.removeEventListener('load', introLoadHandler)
    introLoadHandler = null
  }
  if (settime) {
    clearInterval(settime) // 컴포넌트 떠날 때 인터벌 정리
    settime = null
  }
})
</script>

<style scoped></style>
