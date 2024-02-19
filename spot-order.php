<?php include "inc/header.php" ?>
<?php include "inc/navbar.php" ?>

<body>

    <!-- Start Buy Section -->
    <div class="app-body spot-order-body pt-5">
        <div class="all-prices tabs-top w-100 bg-white pt-4">
            <div class="market-container container">
                <!-- Start Main Tab -->
                <ul class="nav nav-pills" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active font-s22" id="spot-order" data-bs-toggle="pill"
                            data-bs-target="#spot-order-pane" type="button" role="tab" aria-controls="spot-order-pane"
                            aria-selected="true">Home</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link font-s22" id="leverage-order" data-bs-toggle="tab"
                            data-bs-target="#leverage-order-pane" type="button" role="tab" aria-controls="leverage-order-pane"
                            aria-selected="false">Profile</button>
                    </li>
                </ul>
            </div>
        </div>
        <div class="market-container container">
            <div class="row">
                <div class="col-md-12">
                    <div class="all-prices">
                        <!-- Start Main Tab contant -->
                        <div class="tab-content first-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="spot-order-pane" role="tabpanel" aria-labelledby="spot-order"
                                tabindex="0">
                                <!-- Start Sub Tab -->
                                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="open-orders-tab" data-bs-toggle="pill"
                                            data-bs-target="#open-orders" type="button" role="tab" aria-controls="pills-home"
                                            aria-selected="true">Open Orders</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="order-history-tab" data-bs-toggle="pill"
                                            data-bs-target="#order-history" type="button" role="tab" aria-controls="pills-profile"
                                            aria-selected="false">Order History</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="trade-history-tab" data-bs-toggle="pill"
                                            data-bs-target="#trade-history" type="button" role="tab" aria-controls="pills-profile"
                                            aria-selected="false">Trade History</button>
                                    </li>
                                </ul>
                                <div class="tab-content" id="pills-tabContent">
                                    <div class="tab-pane fade show active" id="open-orders" role="tabpanel"
                                        aria-labelledby="open-orders-tab">
                                        <div class="table-responsive">
                                            <table
                                                data-toggle="table"
                                                data-pagination="true"
                                                data-search="true">
                                                <thead>
                                                    <tr>
                                                        <th data-field="id">Time</th>
                                                        <th data-field="name">Market/Type</th>
                                                        <th data-field="price">Traded Price/Order Price</th>
                                                        <th data-field="price">Volume/Order Qty.</th>
                                                        <th data-field="price">Turnover/Order Price</th>
                                                        <th data-field="price">Status</th>
                                                        <th data-field="price">
                                                        <div class="dropdown">
                                                            <button class="btn main-color p-0" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                                                Cancel Orders <i class="fa-solid fa-caret-down"></i>
                                                            </button>
                                                            <ul class="dropdown-menu">
                                                                <li><a class="dropdown-item active" href="#" aria-current="true">Cancel Sell Orders </a></li>
                                                                <li><a class="dropdown-item" href="#">Cancel Buy Orders </a></li>
                                                                <li><a class="dropdown-item" href="#">Cancel All Orders </a></li>
                                                            </ul>
                                                            </div>
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th>
                                                            <span>XT/</span>
                                                            <span>USDT</span>
                                                        </th>
                                                        <td>
                                                            <span>2.1250/</span>
                                                            <span>2.2 USD</span>
                                                        </td>
                                                        <td>
                                                            <span>-3.09%</span>
                                                        </td>
                                                        <td>
                                                            <span>2.2427</span>
                                                        </td>
                                                        <td>
                                                            <span>1.9008</span>
                                                        </td>
                                                        <td>
                                                            <span>31702.9</span>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                                </table>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="order-history" role="tabpanel"
                                        aria-labelledby="order-history-tab">HI</div>
                                    <div class="tab-pane fade" id="trade-history" role="tabpanel"
                                    aria-labelledby="trade-history-tab">tow</div>

                                </div>
                            <!-- End Sub Tab -->
                            </div>
                            <div class="tab-pane fade" id="leverage-order-pane" role="tabpanel" aria-labelledby="leverage-order"
                                tabindex="0">fhfghfg</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include "inc/footer.php" ?>
</body>