<template>
  <Header></Header>
  <div class="container"><RouterView /></div>
</template>

<script setup lang="ts">
import { RouterView } from 'vue-router'
import Header from '@/components/Header.vue'
</script>

<style scoped>
.container {
  padding-left: 223px;
  width: 100%;
  overflow: hidden;
}
</style>
