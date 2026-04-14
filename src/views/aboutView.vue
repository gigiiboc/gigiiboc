<template>
  <div class="content">
    <div id="about">
      <div class="content-box">
        <!-- <div class="content1">
          <h2>about</h2>
          <div class="info">
            <dl>
              <dt>웹표준</dt>
              <dd>
                불과 몇년 전만 하더라도 테이블 코딩과 플래시가 사이트의 주를 이루고, 브라우져간의
                호환이 되지 않는 요소들의 사용으로 많은 문제점들이 있었습니다. 웹표준은 어떤
                브라우저에서나 동일하게 볼수있도록 하는 표준안으로, 의미에 맞는 요소들을 사용하며,
                어느 브라우져에서든 사용자가 편리하게 홈페이지를 이용할수 있도록 합니다.
              </dd>
            </dl>
            <dl>
              <dt>모바일 웹</dt>
              <dd>
                현재 우리나라 스마트폰 사용자가 85% 이상이며, 모바일웹은 시간과 장소에 구애받지 않고
                이용할 수 있는 큰 장점이 있습니다. 휴대기기에 최적화 되어 로딩속도가 빠르며,
                사용자가 방문한 잠깐 사이에도 정보를 효과적으로 제공할수 있습니다. 저렴한
                제작비용으로 최대의 정보전달 효과를 내는 모바일웹은 필수 입니다.
              </dd>
            </dl>
            <dl>
              <dt>반응형 웹</dt>
              <dd>
                반응형 웹은 태블릿PC와 스마트폰 사용이 급증하면서 트랜드로 자리 잡았습니다. 다양한
                기기 해상도에 맞게 최적화된 레이아웃 및 컨텐츠로 변동됩니다. 모바일, 태블릿, PC의
                홈페이지를 하나의 운영으로 제작 및 관리가 편리하며, 하나의 URL을 가져 검색엔진의
                인덱싱과 노출에 유리한 장점이 있습니다.
              </dd>
            </dl>
          </div>
        </div> -->
        <div class="content2">
          <h2>About me</h2>
          <div class="info">
            <!-- <dl>
              <dt>NAME & BIRTH</dt>
              <dd>NAME : Park Woo-Ho</dd>
              <dd>BIRTH : 1987.04.29</dd>
            </dl> -->
            <dl>
              <dt>HISTORY</dt>
              <dd class="through"><span>2014.11 ~ 2016.02</span> 웹에이전시 타운넷</dd>
              <dd class="through"><span>2016.07 ~ 2026.04</span> (주)아이뱅크 디지털웍스</dd>
            </dl>
            <dl>
              <dt>SKILL</dt>
              <dd>html5</dd>
              <dd>CSS3</dd>
              <dd>javascript</dd>
              <dd>vue.js</dd>
              <dd>cross browsing</dd>
            </dl>
            <dl>
              <dt>CONTACT US</dt>
              <!-- <dd>PHONE : <a href="tel:01036821336" title="연락처 등록">+82 010 3682 1336</a></dd> -->
              <dd>
                E-MAIL :
                <a href="mailto:gigiiboc@gmail.com" title="이메일 보내기">gigiiboc@gmail.com</a>
              </dd>
            </dl>
          </div>
        </div>
      </div>
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
#about {
  width: 100%;
  overflow: hidden;
}
#about:before {
  content: '';
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: #f7f7f7 url(@/assets/images/intro_bg.jpg) no-repeat 0 12%;
  z-index: -1;
}
#about h2 {
  font-size: 70px;
  color: #083352;
  margin-bottom: 60px;
  letter-spacing: -3px;
  text-shadow: 1px 0px 0px #000;
}
#about dt {
  font-size: 20px;
  font-weight: bold;
  margin-bottom: 20px;
  letter-spacing: -2px;
}
#about dd {
  font-size: 14px;
  line-height: 1.8;
  letter-spacing: -0.5px;
}
#about .content1,
#about .content2 {
  margin: 100px auto;
}
#about .info {
  overflow: hidden;
}
#about .content1 dl {
  padding: 30px 0;
  border-bottom: 1px dotted #d1d1d1;
  margin-bottom: -1px;
  box-sizing: content-box;
}
#about .content2 .title-img {
  width: 100%;
  height: 200px;
  background: url(/img/profile.jpg) no-repeat center center;
  margin: 90px 0 40px;
}
#about .content2 dl {
  min-height: 230px;
  float: left;
  width: 40%;
  padding: 30px 5%;
  border-right: 1px dotted #d1d1d1;
  margin: 0 -1px 5% 0;
  box-sizing: content-box;
}
#about .content2 dd.through {
  text-decoration: line-through;
}
@media all and (max-width: 1000px) {
  .content-box {
    width: 100%;
    margin: 0 auto;
    padding: 40px 20px;
    min-height: 400px;
  }
  #about h2 {
    font-size: 60px;
    letter-spacing: -2px;
    margin: 30px 0 60px;
  }
}
@media all and (max-width: 600px) {
  #about h2 {
    font-size: 50px;
    letter-spacing: -1px;
  }
  #about .content1,
  #about .content2 {
    margin: 60px auto;
  }
  #about .content2 .title-img {
    width: 114%;
    margin: 90px -7% 40px;
  }
  #about .content2 dl {
    min-height: inherit;
    width: 100%;
    padding: 30px 0;
    border-right: none;
    border-bottom: 1px dotted #d1d1d1;
    margin: 0 0 -1px 0;
  }
}
</style>
