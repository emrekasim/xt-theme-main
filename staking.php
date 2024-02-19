<?php include "inc/header.php" ?>
<?php include "inc/navbar.php" ?>

<body>
    <!-- Start Staking Page -->
    <div class="app-body staking-body pt-5">
        <div class="app-banner pb-4 position-relative">
            <img src="resources/images/backgrounds/xtstarter-bg.png" alt="">
            <div class="app-content container">
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <img class="w-75" src="resources/images/pages/staking/banner-staking.png"
                            alt="Staking-bannar">
                    </div>
                    <div class="col-md-6 p-md-5">
                        <div class="p-4 bgx-white-light">
                            <div class="see-price text-end">
                                <button id="toggle-usdstar">
                                    <i class="fa-solid fa-eye wihte-color"></i>
                                </button>
                            </div>
                            <div class="text-start">
                                <p class="mb-1 gray-color-lite">Estimated Value</p>
                                <p class="wihte-color">≈ <span id="vlauestar" class="d-inline-block">******</span><span id="vlauenum" class="d-none">0.00000000</span><small> USD</small></p>
                                <p class="mt-2 mb-1 gray-color-lite">Cumulative Profit</p>
                                <p class="green-color">≈ <span id="profitstar" class="d-inline-block">******</span><span id="profitnum" class="d-none">0.00000000</span><small> USD</small></p>
                            </div>
                            <div class="mt-3 d-flex flex-wrap justify-content-start popup-buttons">
                                <button  type="button" class="btn btn-outline-warning wihte-color mb-3" data-bs-toggle="modal"                       data-bs-target="#transferModal">Transfer <i class="fa-solid fa-angle-right"></i></button>
                                <button  type="button" class="btn btn-outline-warning wihte-color mb-3">History <i
                                        class="fa-solid fa-angle-right"></i></button>
                                <button  type="button" class="btn btn-outline-warning wihte-color mb-3">Account <i
                                        class="fa-solid fa-angle-right"></i></button>
                                <button  type="button" class="btn btn-outline-warning wihte-color mb-3" data-bs-toggle="modal"                       data-bs-target="#incomeModal">Income <i
                                        class="fa-solid fa-angle-right"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Start Buy Section -->
            <div class="app-otc">
                <div class="otc-buy container">
                    <div class="row">
                        <div class="col-md-8">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="tab-all" data-bs-toggle="tab"
                                        data-bs-target="#tab-all-pane" type="button" role="tab"
                                        aria-controls="tab-all-pane" aria-selected="true">All</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="new-coin-staking" data-bs-toggle="tab"
                                        data-bs-target="#new-coin-staking-pane" type="button" role="tab"
                                        aria-controls="new-coin-staking-pane" aria-selected="false">New Coin Staking</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pos-staking" data-bs-toggle="tab"
                                        data-bs-target="#pos-staking-pane" type="button" role="tab"
                                        aria-controls="pos-staking-pane" aria-selected="false">PoS Staking</button>
                                </li>
                            </ul>
<!--                             <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="tab-all-pane" role="tabpanel"
                                    aria-labelledby="tab-all" tabindex="0">All</div>
                                <div class="tab-pane fade" id="new-coin-staking-pane" role="tabpanel"
                                    aria-labelledby="new-coin-staking" tabindex="0">New Coin Staking</div>
                                <div class="tab-pane fade" id="pos-staking-pane" role="tabpanel"
                                    aria-labelledby="pos-staking" tabindex="0">PoS Staking</div>
                            </div> -->
                        </div>
                        <div class="col-md-4">
                            <div class="form-check h-100 d-flex align-items-center justify-content-end">
                                <input class="form-check-input me-2" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label text-white font-s14" for="flexCheckDefault">
                                    Show Available Subscription Only
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="starter-content">
            <div class="app-content coin-staking container">
                <div class="row">
                    <!-- Start New Coin Staking Section -->
                    <div class="col-md-12 text-start">
                        <h4 class="d-inline-block dark-color me-2">New Coin Staking</h4>
                        <span class="gray-color-semi">Pledge to deposit, easy to earn</span>
                    </div>
                    <div class="col-md-12 mt-4 new-coin-staking">
                        <div class="p-5 bgx-white position-relative">
                            <img class="position-absolute" src="resources/images/pages/staking/staking-hot.png" alt="">
                            <div class="coin-header d-flex justify-content-between">
                                <div class="coin-header-left d-flex text-start">
                                    <img src="resources/images/pages/staking/coin-img.jpg" alt="">
                                    <div class="coin-price">
                                        <h6 class="mb-1 fw-bold">CEJI</h6>
                                        <p class="gray-color-semi">current price: <span class="text-dark fw-bold">0.1199 ≈ USD</span></p>
                                    </div>
                                </div>
                                <div class="coin-header-right">
                                    <div id="countdown">
                                        <span id="clock"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="coin-desc d-flex">
                                <div class="w-75 text-start coin-desc-box">
                                    <p class="gray-color-semi">The creation energy join international (CEJI) project is a technology project that mixes all combustible waste and reproduces energy, and aims to build an ecosystem by combining technology and blockchain to build a CEJI platform.</p>
                                </div>
                                <div class="w-25 text-end">
                                    <a href="" class="btn">Trade</a>
                                    <a href="" class="btn"><i class="fa-solid fa-link"></i> Website</a>
                                </div>
                            </div>
                            <div class="coin-profit text-start">
                                <div class="coin-profit-item d-inline-block me-5">
                                    <span class="gray-color-semi">income released today:</span>
                                    <span class="dark-color-light fw-bolder">0CEJI</span>
                                </div>
                                <div class="coin-profit-item d-inline-block">
                                    <span class="gray-color-semi">total income released:</span>
                                    <span class="dark-color-light fw-bolder">30,000CEJI</span>
                                </div>
                            </div>
                            <div class="locking-progress text-start mt-4">
                                <p class="dark-color font-s12 mb-2">Locking progress</p>
                                <div class="progress w-25 d-inline-block">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <span>0/7</span>
                            </div>
                            <div class="staking-bottom d-flex flex-wrap justify-content-between mt-5">
                                <div class="staking-item-col mb-4 mb-lg-0">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#warmModal">
                                        <div class="staking-item p-3 d-flex flex-wrap">
                                            <div class="header-item d-flex align-content-center w-100">
                                                <img src="resources/images/pages/staking/coin-img.jpg" alt="">
                                                <h6 class="dark-color">CEJI</h6>
                                            </div>
                                            <div class="percent-item w-100">
                                                <p class="main-color mb-0 fw-bold font-s22">46928571.42 <small>%</small></p>
                                                <p class="gray-color-semi fw-semibold font-s12">Est. APY</p>
                                            </div>
                                            <div class="button-item d-flex w-100">
                                                <button class="btn w-75 me-2">Warm-up</button>
                                                <div class="w-25 d-inline-block text-end">
                                                    <button class="btn"><i class="fa-solid fa-share-nodes"></i></button>
                                                </div>
                                            </div>
                                            <div class="progress-item mt-4 w-100 text-start">
                                                <div class="progress w-75 mb-1 d-inline-block">
                                                    <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                                <span class="d-block fw-bolder dark-color font-s14">0/84,000</span>
                                            </div>
                                            <div class="income-released w-100 mt-3 text-start">
                                                <p class="mb-1 fw-bolder gray-color-semi font-s14">income released today ：</p>
                                                <p class="fw-bolder dark-color font-s14">0 CEJI</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="staking-item-col">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#warmModal">
                                        <div class="staking-item p-3 d-flex flex-wrap">
                                            <div class="header-item d-flex align-content-center w-100">
                                                <img src="resources/images/pages/staking/coin-img.jpg" alt="">
                                                <h6 class="dark-color">CEJI</h6>
                                            </div>
                                            <div class="percent-item w-100">
                                                <p class="main-color mb-0 fw-bold font-s22">46928571.42 <small>%</small></p>
                                                <p class="gray-color-semi fw-semibold font-s12">Est. APY</p>
                                            </div>
                                            <div class="button-item d-flex w-100">
                                                <button class="btn w-75 me-2">Warm-up</button>
                                                <div class="w-25 d-inline-block text-end">
                                                    <button class="btn"><i class="fa-solid fa-share-nodes"></i></button>
                                                </div>
                                            </div>
                                            <div class="progress-item mt-4 w-100 text-start">
                                                <div class="progress w-75 mb-1 d-inline-block">
                                                    <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                                <span class="d-block fw-bolder dark-color font-s14">0/84,000</span>
                                            </div>
                                            <div class="income-released w-100 mt-3 text-start">
                                                <p class="mb-1 fw-bolder gray-color-semi font-s14">income released today ：</p>
                                                <p class="fw-bolder dark-color font-s14">0 CEJI</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="staking-item-col">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#warmModal">
                                        <div class="staking-item p-3 d-flex flex-wrap">
                                            <div class="header-item d-flex align-content-center w-100">
                                                <img src="resources/images/pages/staking/coin-img.jpg" alt="">
                                                <h6 class="dark-color">CEJI</h6>
                                            </div>
                                            <div class="percent-item w-100">
                                                <p class="main-color mb-0 fw-bold font-s22">46928571.42 <small>%</small></p>
                                                <p class="gray-color-semi fw-semibold font-s12">Est. APY</p>
                                            </div>
                                            <div class="button-item d-flex w-100">
                                                <button class="btn w-75 me-2">Warm-up</button>
                                                <div class="w-25 d-inline-block text-end">
                                                    <button class="btn"><i class="fa-solid fa-share-nodes"></i></button>
                                                </div>
                                            </div>
                                            <div class="progress-item mt-4 w-100 text-start">
                                                <div class="progress w-75 mb-1 d-inline-block">
                                                    <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                                <span class="d-block fw-bolder dark-color font-s14">0/84,000</span>
                                            </div>
                                            <div class="income-released w-100 mt-3 text-start">
                                                <p class="mb-1 fw-bolder gray-color-semi font-s14">income released today ：</p>
                                                <p class="fw-bolder dark-color font-s14">0 CEJI</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="staking-item-col">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#warmModal">
                                        <div class="staking-item p-3 d-flex flex-wrap">
                                            <div class="header-item d-flex align-content-center w-100">
                                                <img src="resources/images/pages/staking/coin-img.jpg" alt="">
                                                <h6 class="dark-color">CEJI</h6>
                                            </div>
                                            <div class="percent-item w-100">
                                                <p class="main-color mb-0 fw-bold font-s22">46928571.42 <small>%</small></p>
                                                <p class="gray-color-semi fw-semibold font-s12">Est. APY</p>
                                            </div>
                                            <div class="button-item d-flex w-100">
                                                <button class="btn w-75 me-2">Warm-up</button>
                                                <div class="w-25 d-inline-block text-end">
                                                    <button class="btn"><i class="fa-solid fa-share-nodes"></i></button>
                                                </div>
                                            </div>
                                            <div class="progress-item mt-4 w-100 text-start">
                                                <div class="progress w-75 mb-1 d-inline-block">
                                                    <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                                <span class="d-block fw-bolder dark-color font-s14">0/84,000</span>
                                            </div>
                                            <div class="income-released w-100 mt-3 text-start">
                                                <p class="mb-1 fw-bolder gray-color-semi font-s14">income released today ：</p>
                                                <p class="fw-bolder dark-color font-s14">0 CEJI</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End New Coin Staking Section -->
                    <!-- Start PoS Staking Section -->
                    <div class="col-md-12 my-5 text-start">
                        <h4 class="d-inline-block dark-color me-2">PoS Staking</h4>
                        <span class="gray-color-semi">Save and earn. Principal guaranteed</span>
                    </div>
                    <div class="col-md-12 p-4 mb-5 bg-white pos-staking">
                        <div class="table-responsive">
                            <table class="table table-striped"
                            data-toggle="table"
                            data-pagination="true">
                            <thead>
                                <tr>
                                <th class="col-md-3" data-field="Coin">Coin</th>
                                <th class="col-md-2" data-sortable="true" data-field="est">Est. APY</th>
                                <th class="col-md-3" data-field="days">Duration (Days)</th>
                                <th class="col-md-2" data-field="amount">Min. Amount</th>
                                <th class="col-md-2" data-field="operation">Operation</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th class="d-flex align-items-center justify-content-start">
                                        <div class="img-pick w-25 text-center">
                                            <img class="w-50" src="resources/images/cryptoicons/t-icon.png">
                                        </div>
                                        <div class="curnc-pick">
                                            <span class="text-dark">USDT/</span>
                                            <span class="text-secondary">USDT</span>
                                        </div>
                                    </th>
                                    <td>
                                        <span class="increase-color">9.144%</span>
                                    </td>
                                    <td>
                                        <span class="btn btn-outline-warning">30</span>
                                    </td>
                                    <td>
                                        <span>50XTZ</span>
                                    </td>
                                    <td class="d-flex border-0">
                                        <button class="btn btn-warning me-2 px-4 border-0">Stake</button>
                                        <button class="btn btn-warning border-0"><i class="fa-solid fa-share-nodes"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <th class="d-flex align-items-center justify-content-start">
                                        <div class="img-pick w-25 text-center">
                                            <img class="w-50" src="resources/images/cryptoicons/bitc-icon.png">
                                        </div>
                                        <div class="curnc-pick">
                                            <span class="text-dark">USDT/</span>
                                            <span class="text-secondary">USDT</span>
                                        </div>
                                    </th>
                                    <td>
                                        <span class="increase-color">9.144%</span>
                                    </td>
                                    <td>
                                        <span class="btn btn-outline-warning">30</span>
                                    </td>
                                    <td>
                                        <span>50XTZ</span>
                                    </td>
                                    <td class="d-flex border-0">
                                        <button class="btn btn-warning me-2 px-4 border-0">Stake</button>
                                        <button class="btn btn-warning border-0"><i class="fa-solid fa-share-nodes"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <th class="d-flex align-items-center justify-content-start">
                                        <div class="img-pick w-25 text-center">
                                            <img class="w-50" src="resources/images/cryptoicons/eth-icon.png">
                                        </div>
                                        <div class="curnc-pick">
                                            <span class="text-dark">USDT/</span>
                                            <span class="text-secondary">USDT</span>
                                        </div>
                                    </th>
                                    <td>
                                        <span class="increase-color">9.144%</span>
                                    </td>
                                    <td>
                                        <span class="btn btn-outline-warning">30</span>
                                    </td>
                                    <td>
                                        <span>50XTZ</span>
                                    </td>
                                    <td class="d-flex border-0">
                                        <button class="btn btn-warning me-2 px-4 border-0">Stake</button>
                                        <button class="btn btn-warning border-0"><i class="fa-solid fa-share-nodes"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <th class="d-flex align-items-center justify-content-start">
                                        <div class="img-pick w-25 text-center">
                                            <img class="w-50" src="resources/images/cryptoicons/t-icon.png">
                                        </div>
                                        <div class="curnc-pick">
                                            <span class="text-dark">USDT/</span>
                                            <span class="text-secondary">USDT</span>
                                        </div>
                                    </th>
                                    <td>
                                        <span class="increase-color">9.144%</span>
                                    </td>
                                    <td>
                                        <span class="btn btn-outline-warning">30</span>
                                    </td>
                                    <td>
                                        <span>50XTZ</span>
                                    </td>
                                    <td class="d-flex border-0">
                                        <button class="btn btn-warning me-2 px-4 border-0">Stake</button>
                                        <button class="btn btn-warning border-0"><i class="fa-solid fa-share-nodes"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <th class="d-flex align-items-center justify-content-start">
                                        <div class="img-pick w-25 text-center">
                                            <img class="w-50" src="resources/images/cryptoicons/bitc-icon.png">
                                        </div>
                                        <div class="curnc-pick">
                                            <span class="text-dark">USDT/</span>
                                            <span class="text-secondary">USDT</span>
                                        </div>
                                    </th>
                                    <td>
                                        <span class="increase-color">9.144%</span>
                                    </td>
                                    <td>
                                        <span class="btn btn-outline-warning">30</span>
                                    </td>
                                    <td>
                                        <span>50XTZ</span>
                                    </td>
                                    <td class="d-flex border-0">
                                        <button class="btn btn-warning me-2 px-4 border-0">Stake</button>
                                        <button class="btn btn-warning border-0"><i class="fa-solid fa-share-nodes"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <th class="d-flex align-items-center justify-content-start">
                                        <div class="img-pick w-25 text-center">
                                            <img class="w-50" src="resources/images/cryptoicons/eth-icon.png">
                                        </div>
                                        <div class="curnc-pick">
                                            <span class="text-dark">USDT/</span>
                                            <span class="text-secondary">USDT</span>
                                        </div>
                                    </th>
                                    <td>
                                        <span class="increase-color">9.144%</span>
                                    </td>
                                    <td>
                                        <span class="btn btn-outline-warning">30</span>
                                    </td>
                                    <td>
                                        <span>50XTZ</span>
                                    </td>
                                    <td class="d-flex border-0">
                                        <button class="btn btn-warning me-2 px-4 border-0">Stake</button>
                                        <button class="btn btn-warning border-0"><i class="fa-solid fa-share-nodes"></i></button>
                                    </td>
                                </tr>
                            </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- End PoS Staking Section -->
                    <!-- Start Faq Section -->
                    <div class="col-md-12 my-5 text-start">
                        <h4 class="d-inline-block dark-color me-2">FAQs</h4>
                    </div>
                    <div class="col-md-12 mb-5">
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    1.What is new coin staking?
                                </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>ECOTX platform will obtain high-quality STAKING projects from time to time, and the project will issue a coin with fixed quota in return. Users can obtain the proceeds of the project party through the pledged asset.</p>
                                </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    2.What is ECOTX Sale Event?
                                </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>ECOTX will release sale events from time to time. Users can deposit assets by participating in the events and earn corresponding rewards. The rewards generated at the same time of interest calculation will be distributed on T+1 basis, and you will receive the savings assets as soon as the event expires.</p>
                                </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    3.How to subscribe ECOTX Fixed & Flexible Savings? 
                                </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>ECOTX Flexible Savings allows you to earn interest from the liquid assets deposited and supports subscription & redemption at any time and automatic transfer. After subscribing, you will receive Flexible Savings assets, and its interest calculation starts on the second day.Fixed Savings provides higher returns compared to the Flexible Savings and cannot be withdrawn during the locked period. You can deposit assets and gain earnings regularly, which provides a value-added service to users who hold idle digital assets.</p>
                                </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    4. Which tokens are supported by the savings activity?
                                </button>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>In just one of the products offered by ECOTX Savings, you can invest at least 50 kinds of coins to manage your assets which can be transferred from other accounts.</p>
                                </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    5.Why are the earnings of Hashrate Store floating?
                                </button>
                                </h2>
                                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Floating earnings of Hashrate Store is not fixed with its dividend based on actual earnings. A savings product of floating earnings always provides a higher rate of return.</p>
                                </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingSix">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                    6.How to view the Savings Product subscribed?
                                </button>
                                </h2>
                                <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Go to “Savings” in the top column, click on “History” to view “My Purchased Products”, including Savings, Fixed Savings,Flexible Savings, New Token Staking, POS lock-up, and Hashrate Store floating earnings.</p>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Faq Section -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Staking Page -->
    <!-- Start Transfer Modal -->
    <div class="modal fade" id="transferModal" tabindex="-1" aria-labelledby="transferModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="transferModalLabel">Transfer</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="">
                    <div class="row">
                        <div class="col-md">
                            <label for="inputState" class="form-label mb-1 font-s12 opdark">From</label>
                            <select id="inputState" class="form-select">
                                <option selected>Wallet Account</option>
                                <option>Spot Account</option>
                            </select>
                            <div class="bg-light py-1 px-2">
                                <span for="inputState" class="font-s12 opdark">Available: <small class="main-color">0</small> USDT</span>
                            </div>
                        </div>
                        <div class="transfer-switch col-md-1 p-0 d-flex justify-content-center align-items-center">
                            <button type="button" class="btn">
                                <i class="fa-solid fa-repeat"></i>
                            </button>
                        </div>
                        <div class="col-md">
                            <label for="inputState" class="form-label mb-1 font-s12 opdark">To</label>
                            <select id="inputState" class="form-select">
                                <option selected>Finance Account</option>
                                <option>Spot Account</option>
                            </select>
                            <div class="bg-light py-1 px-2">
                                <span for="inputState" class="font-s12 opdark">Available: <small class="main-color">0</small> USDT</span>
                            </div>
                        </div>
                        <div class="col-md-12 mt-4">
                            <label for="inputState" class="form-label mb-1 font-s12 opdark">Coin</label>
                            <select id="inputState" class="form-select">
                                <option selected>USDT</option>
                                <option>ECOTX</option>
                            </select>
                        </div>
                        <div class="col-md-12 mt-4">
                            <label for="inputState" class="form-label mb-1 font-s12 opdark">Transfer Amount</label>
                            <div class="input-group">
                                <input type="text" class="form-control border-end-0" id="autoSizingInputGroup" placeholder="Maximum 0 USDT">
                                <div class="input-group-text bg-white border-start-0">
                                    <button type="button" class="btn">All</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 mt-4">
                            <button type="submit" class="btn btn-primary w-100 bgx-main border-0" disabled>Submit</button>
                        </div>
                    </div>
                </form>
            </div>
            </div>
        </div>
    </div>
    <!-- End Transfer Modal -->
    <!-- Start Income Modal -->
    <div class="modal fade" id="incomeModal" tabindex="-1" aria-labelledby="incomeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="incomeModalLabel">Asset Income Analysis</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <ul class="nav nav-tabs border-0" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active px-0" id="asset-tab" data-bs-toggle="tab" data-bs-target="#asset-tab-pane" type="button" role="tab" aria-controls="asset-tab-pane" aria-selected="true">Asset Analysis</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link px-0" id="yesterday-tab" data-bs-toggle="tab" data-bs-target="#yesterday-tab-pane" type="button" role="tab" aria-controls="yesterday-tab-pane" aria-selected="false">Yesterday Earnings</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link px-0" id="cumulative-tab" data-bs-toggle="tab" data-bs-target="#cumulative-tab-pane" type="button" role="tab" aria-controls="cumulative-tab-pane" aria-selected="false">Cumulative Profit</button>
                        </li>
                    </ul>
                    <div class="tab-content mt-5" id="myTabContent">
                        <div class="tab-pane fade show active" id="asset-tab-pane" role="tabpanel" aria-labelledby="asset-tab" tabindex="0">
                            <div class="row">
                                <div class="col-md-6">
                                    <canvas id="myChart" width="400" height="400"></canvas>
                                </div>
                                <div class="col-md-6">
                                    <div class="d-flex align-items-center">
                                        <div class="me-2 fw-bolder dark-color-light">Estimated Value:</div>
                                        <div>
                                            <p class="mb-1 fw-bolder dark-color-light">0USDT</p>
                                            <p class="mb-0 gray-color-semi">0.00000000USD</p>
                                        </div>
                                    </div>
                                    <div class="mt-4">
                                        <table class="table table-bordered">
                                            <tbody class="text-center">
                                                <tr>
                                                    <th scope="row" class="col-md-5 fw-normal">Activities</th>
                                                    <td>
                                                        <p class="mb-0">0USDT (0%)</p>
                                                        <p class="mb-0 gray-color-semi">0.00000000USD</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="col-md-5 fw-normal">Fixed Savings</th>
                                                    <td>
                                                        <p class="mb-0">0USDT (0%)</p>
                                                        <p class="mb-0 gray-color-semi">0.00000000USD</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="col-md-5 fw-normal">Flexible Savings</th>
                                                    <td>
                                                        <p class="mb-0">0USDT (0%)</p>
                                                        <p class="mb-0 gray-color-semi">0.00000000USD</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="col-md-5 fw-normal">New Coin Staking</th>
                                                    <td>
                                                        <p class="mb-0">0USDT (0%)</p>
                                                        <p class="mb-0 gray-color-semi">0.00000000USD</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="col-md-5 fw-normal">PoS Staking</th>
                                                    <td>
                                                        <p class="mb-0">0USDT (0%)</p>
                                                        <p class="mb-0 gray-color-semi">0.00000000USD</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="col-md-5 fw-normal">Cloud Mining</th>
                                                    <td>
                                                        <p class="mb-0">0USDT (0%)</p>
                                                        <p class="mb-0 gray-color-semi">0.00000000USD</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="col-md-5 fw-normal">Balance</th>
                                                    <td>
                                                        <p class="mb-0">0USDT (0%)</p>
                                                        <p class="mb-0 gray-color-semi">0.00000000USD</p>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="yesterday-tab-pane" role="tabpanel" aria-labelledby="yesterday-tab" tabindex="0">Yesterday Earnings</div>
                        <div class="tab-pane fade" id="cumulative-tab-pane" role="tabpanel" aria-labelledby="cumulative-tab" tabindex="0">Cumulative Profit</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Income Modal -->
    <!-- Start Warm-up Modal -->
    <div class="modal fade" id="warmModal" tabindex="-1" aria-labelledby="warmModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="warmModalLabel">CEJI Staking</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body py-0">
                <div class="row">
                    <div class="col-md-6 p-4">
                        <div class="alert alert-warning font-s12">
                            <i class="fa-solid fa-exclamation"></i>
                            <span>XT will try its best to screen high-quality new currency staking pledge projects for users</span>
                        </div>
                        <div class="header-item d-flex align-content-center w-25 mt-2">
                            <img src="resources/images/pages/staking/coin-img.jpg" alt="">
                            <h6 class="dark-color">CEJI</h6>
                        </div>
                        <div class="progress-item mt-4 w-100 text-start d-flex justify-content-between">
                            <p class="font-s14 gray-color-semi w-25">Amount Subcribed</p>
                            <div class="w-75 d-flex flex-wrap">
                                <span class="w-100 text-end font-s12 increase-color">0% Sold</span>
                                <div class="progress w-100 mb-1 d-inline-block">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <span class="d-block w-100 dark-color font-s12 text-end">0/84,000</span>
                            </div>
                        </div>
                        <div class="mt-3">
                            <form action="">
                                <div class="col-auto">
                                    <label for="Subscribe" class="w-100 d-flex font-s12">
                                        <div class="d-inline-block w-25">
                                            <span>Subscribe</span>
                                        </div>
                                        <div class="d-inline-block w-75 text-end">
                                            <span>0 CEJI Available</span>
                                            <span style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                                                <ol class="breadcrumb mb-0 d-inline-block">
                                                    <li class="breadcrumb-item d-inline-block mb-1"><a href="#" class="main-color">Transfer</a></li>
                                                    <li class="breadcrumb-item d-inline-block mb-1 active" aria-current="page"><a href="" class="main-color">Buy</a></li>
                                                </ol>
                                            </span>
                                        </div>
                                    </label>
                                    <div class="input-group">
                                        <input type="text" class="form-control border-end-0" id="Subscribe" placeholder="Username" disabled>
                                        <div class="input-group-text font-s14 py-0 border-start-0">CEJI</div>
                                        <div class="input-group-text py-0">
                                            <button class="btn font-s14 main-color">Maximun</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-auto mt-4">
                                    <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="autoSizingCheck">
                                    <label class="form-check-label font-s12" for="autoSizingCheck">
                                        <span>I have read and agree to</span>
                                        <a href="" class="d-inline-block main-color">XT.COM’s Terms of Service</a>
                                    </label>
                                    </div>
                                </div>
                                <div class="mt-4 w-100 d-flex justify-content-between warm-buttons">
                                    <button type="button" class="btn btn-outline-dark main-color" data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-light" disabled>Save changes</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-6 bg-light p-4">
                        <div>
                            <h6>Pledge Details</h6>
                        </div>
                        <div class="mt-4">
                            <table class="table table-borderless w-100">
                                <tbody>
                                    <tr>
                                        <th>Reference APY</th>
                                        <td class="increase-color">46928571.42%</td>
                                    </tr>
                                    <tr>
                                        <th>Locking progress</th>
                                        <td>0/7Day(s)</td>
                                    </tr>
                                    <tr>
                                        <th>Subscription Limit</th>
                                        <td><span class="fw-bolder">8 - 8,400</span>(CEJI)</td>
                                    </tr>
                                    <tr>
                                        <th>Subscription Limit</th>
                                        <td><span class="fw-bolder">0/8,400</span>(CEJI)</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
    <!-- End Warm-up Modal -->
    <?php include "inc/footer.php" ?>
    <!-- Start Chart js fake code -->
    <script>
        var ctx = document.getElementById('myChart');
        var myChart = new Chart(ctx, {
            type: 'doughnut',
            data: {
                labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
                datasets: [{
                    label: '# of Votes',
                    data: [12, 19, 3, 5, 2, 3],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });
    </script>
    <!-- End Chart js fake code -->
</body>