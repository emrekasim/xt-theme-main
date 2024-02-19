<?php include "inc/header.php" ?>
<?php include "inc/navbar.php" ?>

<body>
    <!-- Start Carousel Section -->
    <div class="app-body pt-5 mt-5">
        <div class="app-banner">
            <img src="resources/images/banner-bg.png" alt="">
            <div class="app-content container">
                <div class="row">
                    <div class="col-md-12 mt-2">
                        <h1>The World’s First Social Infused Exchange</h1>
                        <p class="mt-4">Best Selection of Cryptocurrencies, Go to XT.COM</p>
                    </div>
                    <div class="col-md-12 mt-4">
                        <div class="owl-carousel owl-theme">
                            <a href="">
                                <img src="resources/images/slider/slider-01.jpg" alt="slider-01">
                            </a>
                            <a href="">
                                <img src="resources/images/slider/slider-02.jpg" alt="slider-01">
                            </a>
                            <a href="">
                                <img src="resources/images/slider/slider-03.png" alt="slider-01">
                            </a>
                            <a href="">
                                <img src="resources/images/slider/slider-04.png" alt="slider-01">
                            </a>
                            <a href="">
                                <img src="resources/images/slider/slider-04.png" alt="slider-01">
                            </a>
                            <a href="">
                                <img src="resources/images/slider/slider-04.png" alt="slider-01">
                            </a>
                            <a href="">
                                <img src="resources/images/slider/slider-04.png" alt="slider-01">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Carousel Section -->
        <!-- Start Buy Section -->
        <div class="app-otc">
            <div class="otc-buy container">
                <div class="row">
                    <div class="offset-md-1 offset-xl-2 col-md-10 col-xl-8">
                        <form action="">
                            <div class="row">
                                <div class="col-md-3 otc-currency">
                                    <select name="USDT" id="crypto" class="selectpicker">
                                        <option value="tcrypto" data-content="<div class='img-pick'><img class='email' src='resources/images/cryptoicons/t-icon.png'></div>
                                                        <div class='curnc-pick'><span class='text-dark'>USDT</span>
                                                        <span class='text-secondary'>USDT</span></div>">
                                        </option>
                                        <option value="eth" data-content="<div class='img-pick'><img class='email' src='resources/images/cryptoicons/eth-icon.png'></div>
                                                        <div class='curnc-pick'><span class='text-dark'>ETH</span>
                                                        <span class='text-dark'>ETH</span></div>">
                                        </option>
                                        <option value="bitc" data-content="<div class='img-pick'><img class='email' src='resources/images/cryptoicons/bitc-icon.png'></div>
                                                        <div class='curnc-pick'><span class='text-dark'>BTC</span>
                                                        <span class='text-dark'>BTC</span></div>">
                                        </option>
                                    </select>
                                </div>
                                <div class="col otc-quantity">
                                    <input type="text" class="form-control">
                                </div>
                                <div class="col-md-2 otc-buy-btn">
                                    <button type="submit" class="btn">Buy now</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Buy Section -->
        <!-- Start Last Price Section -->
        <div class="app-price mt-5 px-3 px-md-0">
            <div class="last-price container p-0">
                <table class="table table-borderless mb-0">
                    <thead>
                        <tr>
                            <th class="col-md-3" scope="col">Name</th>
                            <th class="col-md-3" scope="col">Last Price</th>
                            <th class="d-none d-md-table-cell col-md-3" scope="col">24 Change</th>
                            <th class="d-none d-md-table-cell col-md-3" scope="col">Markets</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Just One tr For Loop -->
                        <tr  onclick="document.location = 'pages/login.php';">
                            <th class="col-md-3" scope="row">
                                <div class='img-pick'>
                                    <img class='email' src='resources/images/cryptoicons/t-icon.png'>
                                </div>
                                <div class='curnc-pick'>
                                    <span class='text-dark'>USDT/</span>
                                    <span class='text-secondary'>USDT</span>
                                </div>
                            </th>
                            <td class="col-md-3">
                                <div class="last-price-col">
                                    <span>2.336</span>
                                    <span> ≈ 2.42 USD </span>
                                    <p class="d-md-none mb-0 increase">+1.70%</p>
                                </div>
                            </td>
                            <td class="d-none d-md-table-cell increase">+1.70%</td>
                            <td class="d-none d-md-table-cell last-price-chart">
                                <img src="resources/images/for-testing/inc.png" alt="">
                            </td>
                        </tr>
                        <tr onclick="document.location = 'pages/login.php';">
                            <th class="col-md-3" scope="row">
                                <div class='img-pick'>
                                    <img class='email' src='resources/images/cryptoicons/eth-icon.png'>
                                </div>
                                <div class='curnc-pick'>
                                    <span class='text-dark'>ETH/</span>
                                    <span class='text-secondary'>USDT</span>
                                </div>
                            </th>
                            <td class="col-md-3">
                                <div class="last-price-col">
                                    <span>2.336</span>
                                    <span> ≈ 2.42 USD </span>
                                    <p class="d-md-none mb-0 decrease">-0.73%</p>
                                </div>
                            </td>
                            <td class="d-none d-md-table-cell decrease">-0.73%</td>
                            <td class="d-none d-md-table-cell last-price-chart">
                                <img src="resources/images/for-testing/dec.png" alt="">
                            </td>
                        </tr>
                        <tr onclick="document.location = 'pages/login.php';">
                            <th class="col-md-3" scope="row">
                                <div class="img-pick">
                                    <img src="resources/images/cryptoicons/bitc-icon.png">
                                </div>
                                <div class="curnc-pick">
                                    <span class="text-dark">BTC/</span>
                                    <span class="text-secondary">USDT</span>
                                </div>
                            </th>
                            <td class="col-md-3">
                                <div class="last-price-col">
                                    <span>2.336</span>
                                    <span> ≈ 2.42 USD </span>
                                    <p class="d-md-none mb-0 decrease">-1.35%</p>
                                </div>
                            </td>
                            <td class="d-none d-md-table-cell decrease">-1.35%</td>
                            <td class="d-none d-md-table-cell last-price-chart">
                                <img src="resources/images/for-testing/dec.png" alt="">
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="btn-group w-100 more-btn">
                    <a href="#" class="btn btn-primary" aria-current="page">View More</a>
                </div>
            </div>
        </div>
        <!-- End Last Price Section -->

        <!-- Start Last Features Section -->
        <div class="app-features bg-white mt-2 mt-md-4 text-center">
            <div class="otc-features container">
                <div class="row">
                    <div class="col-md-12 mb-5">
                        <h2>Stable Secure Aggregated</h2>
                    </div>
                    <div class="col-md-12 mt-5">
                        <div class="row">
                            <div class="col-md-4 px-4">
                                <img src="resources/images/icons/high-perf.svg" alt="">
                                <h5 class="mt-5">High-performance Matching Engine</h5>
                                <p>The self-developed transaction matching engine adopts advanced distributed cluster architecture and micro-service development methods. Support more than 3 million transactions per second concurrently.</p>
                            </div>
                            <div class="col-md-4 px-4">
                                <img src="resources/images/icons/financial-secur.svg" alt="">
                                <h5 class="mt-5">Financial Security</h5>
                                <p>Unbiased zero-knowledge proof privacy and confidentiality technology protects user privacy. Based on security designs such as multiple signatures, offline signatures, and layered architecture, it uses mature cold and hot wallet separation technologies.</p>
                            </div>
                            <div class="col-md-4 px-4">
                                <img src="resources/images/icons/trading-model.svg" alt="">
                                <h5 class="mt-5">Community Trading Model</h5>
                                <p>Build communities, directly connect customers, make traditional business management more open, and achieve a wider range of business connections.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Last Features Section -->
        <!-- Start Download APP Section -->
        <div class="app-download py-5">
            <div class="otc-download container">
                <div class="row">
                    <div class="col-md-8">
                        <img src="resources/images/pages/index/download-app.png" alt="">
                    </div>
                    <div class="col-md-4 download-links">
                        <h2 class="mb-5">Trade Anywhere</h2>
                        <h5 class="mb-1">Download XT APP</h5>
                        <p>Instant access to trading of various scenarios, anytime and anywhere</p>
                        <div class="download-link">
                            <a href="">
                                <img src="resources/images/pages/index/download-app-google.png" alt="">
                            </a>
                            <a href="">
                                <img src="resources/images/pages/index/download-app-android.png" alt="">
                            </a>
                            <a href="">
                                <img src="resources/images/pages/index/download-app-store.png" alt="">
                            </a>
                            <a href="">
                                <img src="resources/images/pages/index/download-app-win.png" alt="">
                            </a>
                        </div>
                        <div class="qcode mb-3">
                            <div class="qcode-link">
                                <i class="fa-solid fa-qrcode"></i>
                            </div>
                        </div>
                        <p class="mb-0">
                            <img src="resources/images/icons/true.png" alt="">
                            <span>24/7 Service</span>
                        </p>
                        <p>
                            <img src="resources/images/icons/true.png" alt="">
                            <span>Around-the-clock Operating Model</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Download APP Section -->
    </div>
    <?php include "inc/footer.php" ?>
</body>