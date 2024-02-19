<!doctype html>
<html data-n-head-ssr>

<head>
    <title>XT Smart Chain</title>
    <meta data-n-head="ssr" charset="utf-8">
    <meta data-n-head="ssr" name="viewport"
        content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">
    <meta data-n-head="ssr" data-hid="description" name="description"
        content="ECOTX Smart Chain is a decentralized blockchain that aims to provide scalable and user-friendly applications to the world.">
    <link data-n-head="ssr" rel="icon" type="image/x-icon" href="/favicon.ico">
    <style>
        html {
            font-family: "Source Sans Pro", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
            font-size: 16px;
            word-spacing: 1px;
            -ms-text-size-adjust: 100%;
            -webkit-text-size-adjust: 100%;
            -moz-osx-font-smoothing: grayscale;
            -webkit-font-smoothing: antialiased;
            box-sizing: border-box;
            width: 100%;
            height: auto;
            background: #f3f3f3
        }

        li,
        ul {
            margin: 0;
            padding: 0;
            list-style: none;
            list-style-type: none
        }

        *,
        :after,
        :before {
            box-sizing: border-box;
            margin: 0
        }

        input::-webkit-inner-spin-button,
        input::-webkit-outer-spin-button {
            -webkit-appearance: none
        }

        a {
            text-decoration: none
        }

        ::-webkit-scrollbar-thumb {
            border-radius: 5px;
            box-shadow: inset 0 0 5px rgba(0, 0, 0, .2);
            -webkit-box-shadow: inset 0 0 5px rgba(0, 0, 0, .2);
            background: rgba(0, 0, 0, .2)
        }

        :focus {
            outline: 0
        }

        .main-container.mobileAbout-content {
            position: relative;
            padding: 5vw;
            height: 100%;
            overflow-y: scroll
        }

        .main-container.about-content {
            position: relative;
            width: 1000px;
            padding: 20px;
            margin: 0 auto
        }

        .about-title {
            width: 920px;
            padding-bottom: 30px;
            border-bottom: 1px solid #e6ecf1;
            color: #333;
            margin-bottom: 20px
        }

        .des-text {
            display: -webkit-box;
            word-break: break-all;
            width: 100%;
            color: #666
        }

        .mb10 {
            margin-bottom: 10px
        }

        .mb30 {
            margin-bottom: 30px
        }

        .des-text.des-title {
            font-size: 20px
        }

        .des-text.des-title,
        .des-text.des-title2,
        .des-title3 {
            font-weight: 700;
            color: #333
        }

        .des-title3 {
            font-size: 14px;
            text-indent: 15px
        }

        .des-text.des-tips {
            color: #333
        }

        .about-btns {
            display: flex;
            margin-top: 70px
        }

        .about-btns .next-btn {
            height: 77px;
            border: 1px solid #e6ecf1;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 20px;
            flex: 2;
            margin-right: 20px
        }

        .about-btns .next-btn:last-child {
            margin-right: 0
        }

        .about-btns .next-btn .next-text {
            color: #9daab6;
            font-size: 12px
        }

        .about-btns .next-btn .about-name {
            color: #242a31;
            font-size: 20px;
            font-weight: 700
        }

        .about-btns .next-btn .mobile-about-name {
            color: #242a31;
            font-size: 12px;
            font-weight: 700
        }

        .about-btns .next-btn .el-icon-back,
        .about-btns .next-btn .el-icon-right {
            color: #9daab6;
            font-size: 30px;
            font-weight: 700
        }

        .about-btns .next-btn:hover {
            border: 1px solid #ffbe42
        }

        .about-btns .next-btn:hover .el-icon-back,
        .about-btns .next-btn:hover .el-icon-right,
        .about-btns .next-btn:hover p {
            color: #ffbe42
        }

        .mobile-about-btns {
            margin-top: 70px
        }

        .mobile-container {
            padding: 6.667vw
        }

        .mobile-container .mobile-title {
            font-size: 6.933vw;
            font-weight: 600;
            padding-bottom: 8vw;
            border-bottom: 1px solid #e6ecf1;
            color: #333;
            margin-bottom: 5.333vw
        }

        .mobile-container .mobile-text {
            color: #666;
            font-size: 4.267vw
        }

        .mobile-container .mobile-text.mobile-mb30 {
            margin-bottom: 5.333vw
        }

        .mobile-container .mobile-text.mobile-mb10 {
            margin-bottom: 2.667vw
        }

        .mobile-container .mobile-text.mobile-des-title {
            font-size: 4.8vw;
            font-weight: 700;
            color: #333
        }

        .mobile-container .mobile-text.mobile-des-tips {
            color: #333
        }

        .mobile-container .mobile-next-btn {
            margin-top: 18.667vw;
            height: 20.533vw;
            border: 1px solid #e6ecf1;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 2.667vw
        }

        .mobile-container .mobile-next-btn .left {
            margin-right: 2.667vw
        }

        .mobile-container .mobile-next-btn .right {
            margin-left: 2.667vw
        }

        .mobile-container .mobile-next-btn .mobile-next-text {
            color: #9daab6;
            font-size: 3.2vw
        }

        .mobile-container .mobile-next-btn .mobile-about-name {
            color: #242a31;
            font-size: 4.267vw;
            font-weight: 700
        }

        .mobile-container .mobile-about-btns {
            display: flex;
            align-items: center;
            justify-content: space-between
        }

        .container-text {
            color: #666;
            font-size: 16px;
            margin-bottom: 20px
        }

        .mobile-content-text {
            color: #666;
            font-size: 16px;
            margin-bottom: .333vw;
            white-space: normal;
            word-break: break-all;
            word-wrap: break-word
        }

        .title1 {
            font-size: 24px;
            margin-bottom: 30px
        }

        .title1,
        .title2 {
            color: #333;
            font-weight: 700
        }

        .title2 {
            font-size: 20px;
            margin-bottom: 20px
        }

        .title2.mt20 {
            margin-top: 20px
        }

        .title3 {
            color: #333;
            font-size: 18px;
            font-weight: 700;
            margin-bottom: 20px
        }

        .title3.mt20 {
            margin-top: 20px
        }

        .title4 {
            color: #333;
            font-size: 16px;
            font-weight: 700;
            margin-bottom: 20px
        }

        .title4.mt20 {
            margin-top: 20px
        }

        .mobilePre-style,
        .pre-style {
            position: static;
            background-color: #f8f8f8;
            border: 1px solid #e7eaed;
            border-radius: 8px;
            color: #333;
            padding: 0 20px;
            margin-bottom: 20px
        }

        .mobilePre-style {
            margin-top: 20px
        }

        .code-style,
        .pcCode-style {
            white-space: normal;
            word-break: break-all;
            word-wrap: break-word
        }

        .pcCode-style {
            padding-top: 15px;
            padding-right: 70px
        }

        .dot,
        .pcCode-style {
            display: inline-block
        }

        .dot {
            width: 6px;
            height: 6px;
            background-color: #666;
            border-radius: 50%;
            vertical-align: middle;
            margin-right: 5px
        }

        .el-main {
            padding: 0
        }

        .home-all .banner {
            height: 700px;
            background: url('../resources/images/backgrounds/page-home-bckg.jpg') no-repeat 50%;
            background-size: cover;
            display: flex;
            align-items: center;
            justify-content: center
        }

        .home-all .banner .banner-con p {
            text-align: center;
            max-width: 680px;
            color: #fff
        }

        .home-all .banner .banner-con p:first-child {
            font-size: 36px;
            font-weight: 500
        }

        .home-all .banner .banner-con p:last-child {
            margin-top: 20px;
            font-size: 18px;
            font-weight: 400
        }

        .home-all .notice {
            height: 50px;
            background: #ffbe42
        }

        .home-all .about {
            width: 1200px;
            margin: 0 auto;
            padding: 64px 50px 59px;
            display: flex;
            justify-content: space-between
        }

        .home-all .about .about-detail {
            width: 554px
        }

        .home-all .about .about-detail .about-text1 {
            font-size: 24px;
            font-weight: 400;
            color: #333;
            line-height: 33px;
            margin-bottom: 19px
        }

        .home-all .about .about-detail .about-text2 {
            font-size: 14px;
            font-weight: 400;
            color: #666;
            line-height: 20px;
            margin-bottom: 12px
        }

        .home-all .about .about-img {
            width: 287px;
            height: 222px
        }

        .home-all .about .about-img img {
            height: 100%
        }

        .home-all .application {
            background: #fff
        }

        .home-all .application .application-con {
            width: 1200px;
            margin: 0 auto;
            padding: 45px 0
        }

        .home-all .application .application-con .application-title {
            font-size: 24px;
            font-weight: 400;
            color: #333;
            text-align: center
        }

        .home-all .application .application-con .application-ul {
            display: flex;
            align-items: center;
            justify-content: space-around
        }

        .home-all .application .application-con .application-ul li {
            margin-top: 30px;
            width: 460px;
            height: 360px;
            background: #fafafa;
            border-radius: 6px;
            padding: 30px;
            box-sizing: border-box;
            text-align: center;
            position: relative
        }

        .home-all .application .application-con .application-ul li .ul-img {
            margin: 35px 0
        }

        .home-all .application .application-con .application-ul li .ul-title {
            font-size: 14px;
            font-weight: 400;
            color: #333
        }

        .home-all .application .application-con .application-ul li .ul-other {
            font-size: 13px;
            font-weight: 400;
            color: #666;
            margin: 20px 0
        }

        .home-all .application .application-con .application-ul li .btns {
            position: absolute;
            bottom: 10px;
            left: 50%;
            margin-left: -50px;
            width: 100px;
            height: 38px;
            background: #2f3240;
            color: #fff;
            border-radius: 4px;
            border: 0;
            font-size: 14px;
            font-weight: 400;
            cursor: pointer;
            transition: .6s
        }

        .home-all .application .application-con .application-ul li .btns:hover {
            width: 130px;
            margin-left: -65px;
            background: #ffbe42
        }

    </style>
</head>

<body>
    <div data-server-rendered="true">
        <div>
            <section class="el-container is-vertical" >
                <main class="el-main" >
                    <div class="home-all"  >
                        <div class="banner" >
                            <div class="banner-con" >
                                <p >Welcome to the world of ECOTX Smart Chain</p>
                                <p >XT Smart Chain is a decentralized blockchain that aims to provide
                                    scalable and user-friendly applications to the world.</p>
                            </div>
                        </div>
                        <div class="notice" >
                            <div data-v-0ed2c553 >
                                <div class="beginLoad" data-v-0ed2c553>
<!--                                     <div class="el-icon-loading" data-v-0ed2c553></div>
 -->                                </div>
                            </div>
                        </div>
                        <div class="about" >
                            <div class="about-detail" >
                                <p class="about-text1" >About ECOTX Smart Chain</p>
                                <p class="about-text2" >Eco Tech will create a decentralized network that monitors the supply of businesses and organizations with non-renewable energy and the illegal consumption that occurs in the process.</p>
                                <p class="about-text2" >Sensors can be set up to monitor the consumption of businesses and organizations that use non-renewable energy.</p>
                                <p class="about-text2" >The network can track this data and enter it directly into a smart contract.</p>
                                <p class="about-text2" >The smart contract could be set up to impose fines or warnings on these facilities, and it would also give warnings to cities exposed to potential pollution due to corporate misuse.</p>
                            </div>
                            <div class="about-img" ><img src="../resources/images/icons/ECOTX.png" alt
                                    ></div>
                        </div>
                        <div class="application" >
                            <div class="application-con" >
                                <div class="application-title" >COIN PROJECT</div>
                                <div class="application-ul" >
                                    <li >
                                        <p class="ul-img" ><img
                                                src="../resources/images/icons/network.png" height="56" alt
                                                ></p>
                                        <p class="ul-title" >On the scientific side:</p>
                                        <p class="ul-other" >Establishment of a decentralized network that monitors the
                                            supply of companies and institutions with non-renewable
                                            energy and monitors the illegal consumption that occurs.
                                            Sensors can be set up to monitor the consumption of busines-
                                            ses and organizations that use non-renewable energy.
                                            The network can track this data and enter it directly into a
                                            smart contract.
                                            The smart contract can be set up to implement fines or issue
                                            warnings to these facilities and also alerts will be issued to
                                            cities exposed to potential pollution due to corporate misuse.
                                            Working to find alternatives to non-renewable energy with
                                            the same efficiency.</p>
                                    </li>
                                    <li >
                                        <p class="ul-img" ><img
                                                src="../resources/images/icons/human.png" height="56" alt
                                                ></p>
                                        <p class="ul-title" >On the human side:</p>
                                        <p class="ul-other" >Support charities around the world that help women
                                            and children in need.
                                        </p>
                                    </li>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </section>
        </div>
    </div>
</body>

</html>
