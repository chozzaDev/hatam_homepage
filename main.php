<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>세상에서 가장 빠른 마켓 : hatam</title>
    <meta name="title" content="세상에서 가장 빠른 마켓 : hatam">
    <meta name="keywords" content="땡처리, 하탐">
    <meta name="description" content="세상에서 가장 빠른 마켓 땡처리 플랫폼">

    <!-- Open Graph data -->
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="세상에서 가장 빠른 마켓 : hatam"/>
    <meta property="og:title" content="세상에서 가장 빠른 마켓 땡처리 플랫폼"/>
    <meta property="og:description" content="세상에서 가장 빠른 마켓 땡처리 플랫폼"/>
    <meta property="article:author" content="HATAM"/>
    <meta property="og:url" content="https://hatam.kr"/>
    <meta property="og:image" content="https://hatam.kr/assets/images/og_img.png"/>

    <link rel="icon" href="favicon.ico"/>
    <link rel="shortcut icon" href="favicon.ico"/>
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900|Material+Icons" rel="stylesheet"
          type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/quasar@2.0.1/dist/quasar.prod.css" rel="stylesheet" type="text/css">
    <link href="/static/assets/css/font.css?lm=3" rel="stylesheet" type="text/css">
    <link href="/static/assets/css/desktop.css?lm=3" rel="stylesheet" type="text/css">
    <link href="/static/assets/css/mobile.css?lm=3" rel="stylesheet" type="text/css">
</head>
<body>
<div id="q-app">
    <q-dialog v-model="showVideo">
<!--        <q-video src="https://www.hatam.kr/static/mov/hatam_making.webm"-->
<!--        ></q-video>-->
        <video width="100%" height="50%" controls autoplay loop>
            <source src="/static/mov/hatam_making.webm" type="video/webm">
            <source src="/static/mov/hatam_making.mp4" type="video/mp4">
            <source src="/static/mov/hatam_making.ogv" type="video/ogg">
        </video>
    </q-dialog>
    <div class="column">
        <div class="row main_container justify-center">
            <div class="column justify-center">
                <div class="h_title">세상에서 가장 빠른 마켓<br>땡처리 플랫폼</div>
                <img class="h_logo" src="/static/assets/images/hatam_logo.png">
                <div class="row store_btn_container justify-between">
                    <img src="/static/assets/images/google_play_btn.png" @click="goGooglePlay">
                    <img src="/static/assets/images/app_store_btn.png" @click="goAppStore">
                </div>
            </div>
            <div class="column model_container justify-end">
                <div class="column talk_container justify-center content-center">
                    <div class="column">
                        <transition name="in-out-translate-fade" mode="out-in">
                            <div v-if="view" key="on">이제 중고거래도</div>
                            <div v-else key="off">오늘 영업종료전에</div>
                        </transition>
                        <!--                        <transition name="fade">-->
                        <!--                            <div v-if="!view">오늘 영업종료전에</div>-->
                        <!--                        </transition>-->
                        <div>저렴하게 빨리팔자</div>
                    </div>
                </div>
                <div class="h_model"></div>
            </div>
            <div class="row mobile_store_btn_container justify-between">
                <img src="/static/assets/images/google_play_btn.png" @click="goGooglePlay">
                <img src="/static/assets/images/app_store_btn.png" @click="goAppStore">
            </div>
        </div>
        <div class="column content-center">
            <div class="row justify-between content_container">
                <div class="content_text">
                    내 주변에 있는 매장들의 땡처리 행사를 확인하고,<br>
                    시세보다 싸고 빠르게 땡처리 물건을 거래하는<br>
                    땡처리 마켓에서 땡 잡을 기회를 잡으세요!<br>
                </div>
                <div class="h_play_mobile_text">메이킹 필름 바로가기</div>
                <div class="row making_btn justify-center content-center" @click="goMakingMovie"
                     @mouseover="showText = true" @mouseleave="showText = false">
                    <!--                    <img src="/static/assets/images/play.png" class="q-mr-sm h_play">-->
                    <transition name="in-out-translate-fade" mode="out-in">
                        <img v-if="!showText" src="/static/assets/images/play_mobile.png" class="q-mr-sm h_play">
                        <div class="h_play_hover" v-else>메이킹 필름 바로가기</div>
                    </transition>
                </div>
            </div>
            <div class="bottom_separator"></div>
            <div class="row h_footer justify-between">
                <div class="col-4 text-center column justify-end terms_mobile">
                    <div><a href="https://hatam.kr/terms/useTerms" target="_blank">이용약관</a> | <a
                            href="https://hatam.kr/terms/privacyTerms" target="_blank">개인정보처리방침</a> | <a
                            href="https://hatam.kr/terms/geoTerms" target="_blank">위치기반서비스 이용약관</a></div>
                </div>
                <div class="col-4 column justify-end">
                    <div class="h_bold q-mb-lg">(주)포르스</div>
                    <div><span class="h_bold">대표</span> 문한철</div>
                    <div><span class="h_bold">주소</span> 서울 서초구 마방로2길 12 보성빌딩 4F</div>
                    <div><span class="h_bold">사업자등록번호</span> 734-88-01982</div>
                    <div><span class="h_bold">고객문의</span> <a href="mailto:cs@hatam.kr">cs@hatam.kr</a>&nbsp;&nbsp;&nbsp;<span
                            class="h_bold">제휴문의</span> <a href="mailto:contact@hatam.kr">contact@hatam.kr</a></div>
                </div>
                <div class="col-4 text-center column justify-end terms">
                    <div><a class="h_bold" href="https://hatam.kr/terms/useTerms" target="_blank">이용약관</a> | <a
                            class="h_bold" href="https://hatam.kr/terms/privacyTerms" target="_blank">개인정보처리방침</a> | <a
                            href="https://hatam.kr/terms/geoTerms" class="h_bold" target="_blank">위치기반서비스
                        이용약관</a></div>
                </div>
                <div class="col-4 text-right column justify-end copyright">
                    <div>© 2021. fors Corp., Inc. All rights reserved</div>
                </div>

            </div>
        </div>
    </div>
</div>
<script src="/static/assets/js/vue.js"></script>
<script src="/static/assets/js/quasar.umd.prod.js"></script>
<script src="/static/assets/js/ko-KR.umd.prod.js"></script>
<script>
    const app = Vue.createApp({
        setup() {
            return {}
        },
        data: function () {
            return {
                view: false,
                showText: false,
                showVideo: false
            }
        },
        mounted: function () {
            this.toggleText()
        },
        methods: {
            toggleText: function () {
                this.view = !this.view
                setTimeout(this.toggleText.bind(this), 3000)
            },
            goGooglePlay: function () {
                location.href = 'https://play.google.com/store/apps/details?id=kr.hatam.halftime'
            },
            goAppStore: function () {
                alert('준비중입니다.')
            },
            goMakingMovie: function () {
                this.showVideo = true
            }
        }
    })
    app.use(Quasar)
    Quasar.lang.set(Quasar.lang.koKR)
    app.mount('#q-app')
    // var app = new Vue({
    //     el: '#app',
    //     data: {
    //         view: false,
    //         showText: false
    //     },
    //     mounted: function () {
    //         this.toggleText()
    //     },
    //     methods: {
    //         toggleText: function () {
    //             this.view = !this.view
    //             setTimeout(this.toggleText.bind(this), 3000)
    //         },
    //         goGooglePlay: function () {
    //             location.href = 'https://play.google.com/store/apps/details?id=kr.hatam.halftime'
    //         },
    //         goAppStore: function () {
    //             alert('준비중입니다.')
    //         },
    //         goMakingMovie: function () {
    //             alert('준비중입니다.')
    //         }
    //     }
    // })
</script>
</body>
</html>
<script>
    import QDialog from "./assets/js/quasar.umd.min";
    export default {
        components: {QDialog}
    }
</script>