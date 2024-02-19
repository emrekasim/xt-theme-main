<?php include "inc/header.php" ?>
<?php include "inc/navbar.php" ?>

<body>
    <!-- Start Staking Page -->
    <div class="app-body wallet-body pt-5">
        <div class="app-banner d-flex flex-wrap align-content-end">
            <div class="app-content container">
                <div class="row justify-content-center py-3">
                    <div class="col-md-6 d-flex flex-wrap align-content-center">
                        <div class="w-100 text-start">
                            <h5 class="d-inline-block gray-color-semi">Total Asset</h5>
                            <button id="toggle-usdstar" class="bg-transparent border-0">
                                <i class="fa-solid fa-eye text-white"></i>
                            </button>
                        </div>
                        <p class="w-100 text-start text-white font-s22">
                            <span id="vlauestar" class="d-inline-block">****</span><span id="vlauenum"
                                class="d-none">0.00</span><b> USD</b>
                            <span id="profitstar" class="d-inline-block">******</span><span id="profitnum"
                                class="d-none gray-color-semi">0.00000000</span><b> BTC</b>
                        </p>
                    </div>
                    <div class="col-md-6 p-md-5">
                        <div class="">
                            <div class="mt-3 d-flex justify-content-end popup-buttons">
                                <button type="button" class="btn bgx-main wihte-color" data-bs-toggle="modal"
                                    data-bs-target="#DepositModal">Deposit <i
                                        class="fa-solid fa-angle-right"></i></button>
                                <button type="button" class="btn bgx-button-gray wihte-color" data-bs-toggle="modal"
                                    data-bs-target="#withdrawModal">Withdraw <i
                                        class="fa-solid fa-angle-right"></i></button>
                                <button type="button" class="btn bgx-button-gray wihte-color" data-bs-toggle="modal"
                                    data-bs-target="#transferModal"> Transfer  <i
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
                                    <button class="nav-link active" id="tab-Wallet" data-bs-toggle="tab"
                                        data-bs-target="#tab-Wallet-pane" type="button" role="tab"
                                        aria-controls="tab-Wallet-pane" aria-selected="true">Wallet</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="new-coin-staking" data-bs-toggle="tab"
                                        data-bs-target="#new-coin-staking-pane" type="button" role="tab"
                                        aria-controls="new-coin-staking-pane" aria-selected="false">Spot</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pos-staking" data-bs-toggle="tab"
                                        data-bs-target="#pos-staking-pane" type="button" role="tab"
                                        aria-controls="pos-staking-pane" aria-selected="false">Margin</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pos-staking" data-bs-toggle="tab"
                                        data-bs-target="#pos-staking-pane" type="button" role="tab"
                                        aria-controls="pos-staking-pane" aria-selected="false">Fiat</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pos-staking" data-bs-toggle="tab"
                                        data-bs-target="#pos-staking-pane" type="button" role="tab"
                                        aria-controls="pos-staking-pane" aria-selected="false">Futures</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pos-staking" data-bs-toggle="tab"
                                        data-bs-target="#pos-staking-pane" type="button" role="tab"
                                        aria-controls="pos-staking-pane" aria-selected="false">Finance</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pos-staking" data-bs-toggle="tab"
                                        data-bs-target="#pos-staking-pane" type="button" role="tab"
                                        aria-controls="pos-staking-pane" aria-selected="false">Pool</button>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-4 main-color d-flex align-items-center justify-content-around font-s14">
                            <a href="" class="text-reset text-decoration-none">
                                <span> Deposit & Withdrawal History </span>
                            </a>
                            <a href="" class="text-reset text-decoration-none">
                                <span> Fund History </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="starter-content">
            <div class="app-content coin-staking container">
                <div class="row">
                    <!-- Start PoS Staking Section -->
                    <div class="col-md-12 mt-5 mb-1 text-start">
                        <h6 class="d-inline-block gray-color me-2">Wallet assets</h6>
                        <p class="dark-color font-s22 fw-normal">0.00 USD <span class="gray-color font-s14"> ≈
                                0.00000000 BTC</span></p>
                    </div>
                    <div class="col-md-12 p-4 mb-5 pos-staking">
                        <div class="table-responsive">
                            <table class="table" data-toggle="table" data-pagination="true" data-search="true">
                                <thead>
                                    <tr>
                                        <th class="col-md-3" data-sortable="true" data-field="coin">Coin</th>
                                        <th class="col-md-2" data-sortable="true" data-field="total">Total</th>
                                        <th class="col-md-3" data-sortable="true" data-field="estimated">Estimated USD</th>
                                        <th class="col-md-2" data-field="available">Available</th>
                                        <th class="col-md-2" data-field="frozen">Frozen</th>
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
                                                <span class="text-dark font-s12">USDT</span>
                                                <p class="text-secondary mb-0 font-s12"><a href="" class="text-reset">XT.com
                                                        Token</a></p>
                                            </div>
                                        </th>
                                        <td>
                                            <span>0</span>
                                        </td>
                                        <td>
                                            <span>0</span>
                                        </td>
                                        <td>
                                            <span>0</span>
                                        </td>
                                        <td>
                                            <span>0</span>
                                        </td>
                                        <td class="d-flex border-0">
                                            <button type="button" class="btn main-color" data-bs-toggle="modal"
                                            data-bs-target="#DepositModal">Deposit</button>
                                            <button type="button" class="btn main-color" data-bs-toggle="modal"
                                                data-bs-target="#withdrawModal">Withdraw</button>
                                            <button type="button" class="btn main-color" data-bs-toggle="modal"
                                                data-bs-target="#transferModal">Transfer</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="d-flex align-items-center justify-content-start">
                                            <div class="img-pick w-25 text-center">
                                                <img class="w-50" src="resources/images/cryptoicons/bitc-icon.png">
                                            </div>
                                            <div class="curnc-pick">
                                                <span class="text-dark font-s12">USDT</span>
                                                <p class="text-secondary mb-0 font-s12"><a href="" class="text-reset">XT.com
                                                        Token</a></p>
                                            </div>
                                        </th>
                                        <td>
                                            <span>0</span>
                                        </td>
                                        <td>
                                            <span>0</span>
                                        </td>
                                        <td>
                                            <span>0</span>
                                        </td>
                                        <td>
                                            <span>0</span>
                                        </td>
                                        <td class="d-flex border-0">
                                            <button type="button" class="btn main-color" data-bs-toggle="modal"
                                                data-bs-target="#DepositModal">Deposit</button>
                                            <button type="button" class="btn main-color" data-bs-toggle="modal"
                                                data-bs-target="#withdrawModal">Withdraw</button>
                                            <button type="button" class="btn main-color" data-bs-toggle="modal"
                                                data-bs-target="#transferModal">Transfer</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="d-flex align-items-center justify-content-start">
                                            <div class="img-pick w-25 text-center">
                                                <img class="w-50" src="resources/images/cryptoicons/eth-icon.png">
                                            </div>
                                            <div class="curnc-pick">
                                                <span class="text-dark font-s12">USDT</span>
                                                <p class="text-secondary mb-0 font-s12"><a href="" class="text-reset">XT.com
                                                        Token</a></p>
                                            </div>
                                        </th>
                                        <td>
                                            <span>0</span>
                                        </td>
                                        <td>
                                            <span>0</span>
                                        </td>
                                        <td>
                                            <span>0</span>
                                        </td>
                                        <td>
                                            <span>0</span>
                                        </td>
                                        <td class="d-flex border-0">
                                            <button type="button" class="btn main-color" data-bs-toggle="modal"
                                            data-bs-target="#DepositModal">Deposit</button>
                                            <button type="button" class="btn main-color" data-bs-toggle="modal"
                                                data-bs-target="#withdrawModal">Withdraw</button>
                                            <button type="button" class="btn main-color" data-bs-toggle="modal"
                                                data-bs-target="#transferModal">Transfer</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="d-flex align-items-center justify-content-start">
                                            <div class="img-pick w-25 text-center">
                                                <img class="w-50" src="resources/images/cryptoicons/t-icon.png">
                                            </div>
                                            <div class="curnc-pick">
                                                <span class="text-dark font-s12">USDT</span>
                                                <p class="text-secondary mb-0 font-s12"><a href="" class="text-reset">XT.com
                                                        Token</a></p>
                                            </div>
                                        </th>
                                        <td>
                                            <span>0</span>
                                        </td>
                                        <td>
                                            <span>0</span>
                                        </td>
                                        <td>
                                            <span>0</span>
                                        </td>
                                        <td>
                                            <span>0</span>
                                        </td>
                                        <td class="d-flex border-0">
                                            <button type="button" class="btn main-color" data-bs-toggle="modal"
                                            data-bs-target="#DepositModal">Deposit</button>
                                            <button type="button" class="btn main-color" data-bs-toggle="modal"
                                                data-bs-target="#withdrawModal">Withdraw</button>
                                            <button type="button" class="btn main-color" data-bs-toggle="modal"
                                                data-bs-target="#transferModal">Transfer</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="d-flex align-items-center justify-content-start">
                                            <div class="img-pick w-25 text-center">
                                                <img class="w-50" src="resources/images/cryptoicons/bitc-icon.png">
                                            </div>
                                            <div class="curnc-pick">
                                                <span class="text-dark font-s12">USDT</span>
                                                <p class="text-secondary mb-0 font-s12"><a href="" class="text-reset">XT.com
                                                        Token</a></p>
                                            </div>
                                        </th>
                                        <td>
                                            <span>0</span>
                                        </td>
                                        <td>
                                            <span>0</span>
                                        </td>
                                        <td>
                                            <span>0</span>
                                        </td>
                                        <td>
                                            <span>0</span>
                                        </td>
                                        <td class="d-flex border-0">
                                            <button type="button" class="btn main-color" data-bs-toggle="modal"
                                            data-bs-target="#DepositModal">Deposit</button>
                                            <button type="button" class="btn main-color" data-bs-toggle="modal"
                                                data-bs-target="#withdrawModal">Withdraw</button>
                                            <button type="button" class="btn main-color" data-bs-toggle="modal"
                                                data-bs-target="#transferModal">Transfer</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="d-flex align-items-center justify-content-start">
                                            <div class="img-pick w-25 text-center">
                                                <img class="w-50" src="resources/images/cryptoicons/eth-icon.png">
                                            </div>
                                            <div class="curnc-pick">
                                                <span class="text-dark font-s12">USDT</span>
                                                <p class="text-secondary mb-0 font-s12"><a href="" class="text-reset">XT.com
                                                        Token</a></p>
                                            </div>
                                        </th>
                                        <td>
                                            <span>0</span>
                                        </td>
                                        <td>
                                            <span>0</span>
                                        </td>
                                        <td>
                                            <span>0</span>
                                        </td>
                                        <td>
                                            <span>0</span>
                                        </td>
                                        <td class="d-flex border-0">
                                            <button type="button" class="btn main-color" data-bs-toggle="modal"
                                            data-bs-target="#DepositModal">Deposit</button>
                                            <button type="button" class="btn main-color" data-bs-toggle="modal"
                                                data-bs-target="#withdrawModal">Withdraw</button>
                                            <button type="button" class="btn main-color" data-bs-toggle="modal"
                                                data-bs-target="#transferModal">Transfer</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- End PoS Staking Section -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Staking Page -->
    <!-- Start Deposit Modal -->
    <div class="modal fade" id="DepositModal" tabindex="-1" aria-labelledby="DepositModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="DepositModalLabel">Deposit</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="">
                        <div class="row">
                            <div class="col-12 mb-3">
                                <label for="cointype" class="form-label mb-1 font-s12 opdark">Coin</label>
                                <select id="cointype" class="form-select border-0">
                                    <option selected>USD</option>
                                    <option>XT</option>
                                </select>
                            </div>
                            <div class="col-12 mb-3">
                                <label for="networkType" class="form-label mb-1 font-s12 opdark">Network</label>
                                <select id="networkType" class="form-select border-0">
                                    <option value="selectNetwork" class="gray-color-semi" disabled selected>Please choose the network</option>
                                    <option value="USDT-BSC">USDT-BSC</option>
                                    <option value="USDT-FIO">USDT-FIO</option>
                                </select>
                            </div>
                            <div id="network" class="col-12 text-center d-inline-block">
                                <img class="w-50 my-3" src="resources/images/pages/wallet/debosit-choose.png" alt="">
                                <p class="gray-color-semi font-s12">Please choose the network before obtaining the recharge address</p>
                            </div>
                            <div id="deposit-address" class="col-md-12 d-none flex-wrap">
                                <div class="w-50 d-flex flex-wrap align-content-start px-3">
                                    <h6 class="gray-color-semi">Deposit Address</h6>
                                    <span class="text-break">0x896899922b87915b6484c346bd8e20f952a01f9e</span>
                                    <button><i class="fa-solid fa-copy"></i></button>
                                </div>
                                <div class="w-50 d-flex flex-wrap justify-content-center">
                                    <img class="w-50" src="resources/images/pages/wallet/qr-code.png" alt="">
                                    <a href="#">Address Block Information</a>
                                </div>
                                <hr class="w-100">
                                <div class="w-100">
                                    <h6 class="gray-color-semi">Deposit Instruction</h6>
                                    <ul>
                                        <li>3 confirmation required for USDT deposits and 3 confirmations required for withdrawals.</li>
                                        <li>The minimum deposit amount is 50 USDT and smaller deposits will not be credited.</li>
                                        <li>Please send only USDT to this deposit address. Any other assets deposited to this address will result in the permanent loss.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End Deposit Modal -->
    <!-- Start Withdraw Modal -->
    <div class="modal fade" id="withdrawModal" tabindex="-1" aria-labelledby="withdrawModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="withdrawModalLabel">Withdraw</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body py-0">
                    <div class="row">
                        <div class="col-md-6 p-4">
                            <form action="">
                                <div class="row">
                                    <div class="col-12 mb-3">
                                        <label for="coinType" class="form-label mb-1 font-s12 opdark">Coin</label>
                                        <select id="coinType" class="selectpicker d-block w-100" data-live-search="true">
                                            <option selected>USD</option>
                                            <option>XT</option>
                                        </select>
                                    </div>
                                    <div class="col-12 mb-3">
                                        <label for="networkType" class="form-label mb-1 font-s12 opdark">Network</label>
                                        <select id="networkType" class="selectpicker d-block w-100" data-live-search="true" placeholder="Please choose the network">
                                            <option >USDT-BSC</option>
                                            <option>USDT-FIO</option>
                                        </select>
                                    </div>
                                    <div id="address" class="col-12 mb-3">
                                        <label for="addressSelect" class="form-label mb-1 font-s12 opdark">Address</label>
                                        <select id="addressSelect" class="selectpicker d-block w-100" placeholder="Address">
                                        </select>
                                    </div>
                                    <div class="col-12 mb-3">
                                        <label class="form-label mb-1 font-s12 opdark" for="autoSizingInputGroup">Amount</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control font-s14" id="autoSizingInputGroup" placeholder="Minimum50">
                                            <button class="btn main-color font-s14">All</button>
                                            <div class="input-group-text fw-bolder font-s14">USDT</div>
                                        </div>
                                        <div class="py-1">
                                            <span for="inputState" class="font-s14 opdark">Available: <small class="main-color">0</small> USDT <a href="#" class="main-color text-decoration-none">Transfer</a></span>
                                        </div>
                                    </div>
                                    <div class="col-12 mb-3">
                                        <label class="form-label mb-1 font-s12 opdark" for="autoSizingInputGroup">Security Password</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control font-s14" id="autoSizingInputGroup" placeholder="Security Password">
                                            <button class="btn main-color font-s14">Forgot password</button>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <p class="font-s14 gray-color-semi mb-1">Receive Amount</p>
                                        <p class="mb-1"><span>-</span>USDT</p>
                                        <p class="font-s14 gray-color-semi">Network Fees：<span>-</span> USDT</p>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="autoSizingCheck">
                                            <label class="form-check-label font-s12 gray-color-lite" for="autoSizingCheck">
                                                <span> I agree to use internal transfer to enjoy 0 transfer fee and quick transfer service.</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-12 mt-4">
                                        <button type="submit" class="btn btn-primary w-100 bgx-main border-0" disabled="">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-md-6 bg-light p-4">
                            <h6 class="gray-color-lite">Deposit Instruction</h6>
                            <ul class="px-3 opdark font-s12">
                                <li>24-hour Available Amount： 500/500 USDT</li>
                                <li>Deposit and withdrawal to XT address with 0 fees,fast and furious service</li>
                                <li>3 confirmation required for usdt deposits and 3 confirmations required for withdrawals.</li>
                                <li>Do not withdraw directly to a crowdfund or ICO address, as your account will not be credited with tokens from such sales.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Withdraw Modal -->
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
    <!-- Start Add Address Modal -->
    <div class="modal fade" id="addressModal" tabindex="-1" aria-labelledby="addressModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="addressModalLabel">Add Address</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="">
                        <div class="row">
                            <div class="col-12 mb-3">
                                <label for="inputState" class="form-label mb-1 font-s12 opdark">Coin</label>
                                <select id="inputState" class="form-select">
                                    <option selected>USD</option>
                                    <option>XT</option>
                                </select>
                            </div>
                            <div class="col-12 mb-3">
                                <label for="inputState" class="form-label mb-1 font-s12 opdark">Network</label>
                                <select id="inputState" class="form-select">
                                    <option class="gray-color-semi" disabled selected>Please choose the network</option>
                                    <option >USDT-BSC</option>
                                    <option>USDT-FIO</option>
                                </select>
                            </div>
                            <div class="col-12 mb-3">
                                <label for="inputState" class="form-label mb-1 font-s12 opdark">Alias (Address Note)</label>
                                <input type="text" class="form-control" id="inputState" placeholder="Alias, e.g. Tony's XT">
                            </div>
                            <div class="col-12 mb-3">
                                <label for="inputState" class="form-label mb-1 font-s12 opdark">Withdrawal Address</label>
                                <input type="text" class="form-control" id="inputState" placeholder="Withdrawal Address">
                                <input type="text" class="form-control" id="inputState" placeholder="Security Password">
                                <input type="text" class="form-control" id="inputState" placeholder="Dynamic Verification Code">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End Add Address Modal -->
    <?php include "inc/footer.php" ?>
</body>