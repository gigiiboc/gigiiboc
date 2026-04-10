import { createRouter, createWebHistory } from 'vue-router'
import IntroView from '../views/IntroView.vue'
import HomeView from '../views/HomeView.vue'
import IntroductionView from '../views/IntroductionView.vue'
import WebView from '../views/WebView.vue'
import ResponsiveView from '../views/ResponsiveView.vue'
import ContactUsView from '../views/ContactUsView.vue'

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    { path: '/', component: IntroView }, // 메인 진입만 사이드바 없음
    {
      path: '/home',
      component: HomeView, // 사이드바 공통 레이아웃
      children: [
        // 자식 경로를 absolute(/...)로 두면 URL은 짧게 유지하면서도
        // matched에는 부모(레이아웃/그룹) 라우트가 포함된다.
        { path: '/introduction', component: IntroductionView, meta: { section: 'introduction' } },
        {
          path: '/portfolio',
          meta: { section: 'portfolio' },
          children: [
            { path: '/web', component: WebView },
            { path: '/responsive', component: ResponsiveView },
          ],
          redirect: '/web',
        },
        { path: '/contactus', component: ContactUsView, meta: { section: 'contact' } },
      ],
      redirect: '/introduction',
    },
  ],
})

export default router
