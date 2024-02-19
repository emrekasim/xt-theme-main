<?php include "inc/header.php" ?>
<?php include "inc/navbar.php" ?>

<body>
    <!-- Start Staking Page -->
    <div class="app-body staking-body pt-5">
        <div class="app-banner pt-5 pb-4 position-relative">
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
                                <p class="wihte-color">≈ <span class="stakingstar d-inline-block">******</span><span class="stakingnumber d-none">0.00000000</span><small> USD</small></p>
                                <p class="mt-2 mb-1 gray-color-lite">Cumulative Profit</p>
                                <p class="green-color">≈ <span class="stakingstar d-inline-block">******</span><span class="stakingnumber d-none">0.00000000</span><small> USD</small></p>
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
        </div>
        <div class="staking-history-content">
            <div class="app-content staking-history container">
                <div class="row">
                    <!-- Start PoS Staking Section -->
                    <div class="col-md-12 mb-3 mt-0 text-start">
                        <h4 class="d-inline-block dark-color me-2">My Subscriptions</h4>
                        <span class="gray-color-semi">Income of the investment products will be distributed trough daily airdrop. Click Income to view.</span>
                    </div>
                    <div class="col-md-12 p-4 mb-5 history-tabs">
                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="activities-tab" data-bs-toggle="pill" data-bs-target="#activities-home" type="button" role="tab" aria-controls="activities-home" aria-selected="true">Activities</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Fixed Savings</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Flexible Savings</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-disabled-tab" data-bs-toggle="pill" data-bs-target="#pills-disabled" type="button" role="tab" aria-controls="pills-disabled" aria-selected="false">New Coin Staking</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-disabled-tab" data-bs-toggle="pill" data-bs-target="#pills-disabled" type="button" role="tab" aria-controls="pills-disabled" aria-selected="false">PoS Staking</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-disabled-tab" data-bs-toggle="pill" data-bs-target="#pills-disabled" type="button" role="tab" aria-controls="pills-disabled" aria-selected="false">Cloud Mining</button>
                            </li>
                        </ul>
                        <div class="tab-content mt-4" id="activities-tabContent">
                            <div class="tab-pane fade show active" id="activities-home" role="tabpanel" aria-labelledby="activities-tab" tabindex="0">
                                <div class="row mb-3">
                                    <div class="col-md-4">
                                        <div class="count-item bg-white d-flex align-items-center">
                                            <img class="h-75 me-2" src="resources/images/pages/staking/staking-est.png" alt="staking-est">
                                            <div class="w-75">
                                                <p class="text-start fw-bolder font-s14 gray-color-semi mb-0">Estimated Value <span class="main-color">0.00000000USDT</span></p>
                                                <p class="text-start text-dark mb-0">0.00000000USD</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="count-item bg-white d-flex align-items-center">
                                            <img class="h-75 me-2" src="resources/images/pages/staking/staking-cmu.png" alt="staking-est">
                                            <div class="w-75">
                                                <p class="text-start fw-bolder font-s14 gray-color-semi mb-0">Cumulative Profit <span class="main-color">0.00000000USDT</span></p>
                                                <p class="text-start text-dark mb-0">0.00000000USD</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="count-item bg-white d-flex align-items-center">
                                            <img class="h-75 me-2" src="resources/images/pages/staking/staking-yes.png" alt="staking-est">
                                            <div class="w-75">
                                                <p class="text-start fw-bolder font-s14 gray-color-semi mb-0">Yesterday Earnings <span class="main-color">0.00000000USDT</span></p>
                                                <p class="text-start text-dark mb-0">0.00000000USD</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table"
                                    data-toggle="table"
                                    data-pagination="true"
                                    data-search="true">
                                        <thead>
                                            <tr>
                                                <th class="col-md-3" data-field="name">Product Name</th>
                                                <th class="col-md-2" data-sortable="true" data-field="purchased">Purchased</th>
                                                <th class="col-md-3" data-sortable="true" data-field="est">Est.APY</th>
                                                <th class="col-md-2" data-sortable="true" data-field="profit">Cumulative Profit</th>
                                                <th class="col-md-2" data-sortable="true" data-field="earnings">Yesterday Earnings</th>
                                                <th class="col-md-2" data-sortable="true" data-field="duration">Duration</th>
                                                <th class="col-md-2" data-sortable="true" data-field="status">Status</th>
                                                <th class="col-md-2" data-sortable="true" data-field="operation">Operation</th>
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
                                                <td>
                                                    <span>50XTZ</span>
                                                </td>
                                                <td>
                                                    <span>50XTZ</span>
                                                </td>
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
                                                <td>
                                                    <span>50XTZ</span>
                                                </td>
                                                <td>
                                                    <span>50XTZ</span>
                                                </td>
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
                                                <td>
                                                    <span>50XTZ</span>
                                                </td>
                                                <td>
                                                    <span>50XTZ</span>
                                                </td>
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
                                                <td>
                                                    <span>50XTZ</span>
                                                </td>
                                                <td>
                                                    <span>50XTZ</span>
                                                </td>
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
                                                <td>
                                                    <span>50XTZ</span>
                                                </td>
                                                <td>
                                                    <span>50XTZ</span>
                                                </td>
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
                                                <td>
                                                    <span>50XTZ</span>
                                                </td>
                                                <td>
                                                    <span>50XTZ</span>
                                                </td>
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
                                                <td>
                                                    <span>50XTZ</span>
                                                </td>
                                                <td>
                                                    <span>50XTZ</span>
                                                </td>
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
                                                <td>
                                                    <span>50XTZ</span>
                                                </td>
                                                <td>
                                                    <span>50XTZ</span>
                                                </td>
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
                                                <td>
                                                    <span>50XTZ</span>
                                                </td>
                                                <td>
                                                    <span>50XTZ</span>
                                                </td>
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
                                                <td>
                                                    <span>50XTZ</span>
                                                </td>
                                                <td>
                                                    <span>50XTZ</span>
                                                </td>
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
                                                <td>
                                                    <span>50XTZ</span>
                                                </td>
                                                <td>
                                                    <span>50XTZ</span>
                                                </td>
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
                                                <td>
                                                    <span>50XTZ</span>
                                                </td>
                                                <td>
                                                    <span>50XTZ</span>
                                                </td>
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
                                                <td>
                                                    <span>50XTZ</span>
                                                </td>
                                                <td>
                                                    <span>50XTZ</span>
                                                </td>
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
                                                <td>
                                                    <span>50XTZ</span>
                                                </td>
                                                <td>
                                                    <span>50XTZ</span>
                                                </td>
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
                            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">...</div>
                            <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab" tabindex="0">...</div>
                            <div class="tab-pane fade" id="pills-disabled" role="tabpanel" aria-labelledby="pills-disabled-tab" tabindex="0">...</div>
                            <div class="tab-pane fade" id="pills-disabled" role="tabpanel" aria-labelledby="pills-disabled-tab" tabindex="0">...</div>
                            <div class="tab-pane fade" id="pills-disabled" role="tabpanel" aria-labelledby="pills-disabled-tab" tabindex="0">...</div>
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
    <!-- End Transfer Modal -->
    <?php include "inc/footer.php" ?>
</body>