<template>
  <div class="content">
    <div id="contactus">
      <div class="content-box">준비중</div>
    </div>
  </div>
</template>

<style scoped>
.content {
  width: 100%;
  overflow: hidden;
}
.content-box {
  position: relative;
  width: 80%;
  max-width: 1600px;
  margin: 5% auto;
  padding: 10%;
  overflow: hidden;
  background: rgba(255, 255, 255, 0.9);
}

/* 소개 */
#contactus {
  width: 100%;
  overflow: hidden;
}
#contactus:before {
  content: '';
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: #f7f7f7 url(@/assets/images/intro_bg.jpg) no-repeat 0 84%;
  z-index: -1;
}
@media all and (max-width: 1000px) {
  .content-box {
    width: 100%;
    margin: 0 auto;
    padding: 40px 20px;
    min-height: 400px;
  }
}
</style>
