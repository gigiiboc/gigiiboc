import './assets/base.css'
import './assets/intro.css'
import './assets/main.css'
import './assets/header.css'

import { createApp } from 'vue'
import App from './App.vue'
import router from './router'

const app = createApp(App)

app.use(router)

app.mount('#app')
