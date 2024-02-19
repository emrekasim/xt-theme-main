<?php include "inc/header.php" ?>
<?php include "inc/navbar.php" ?>

<body>

    <!-- Start Signup Page -->
    <div class="app-body login-body pt-4">
        <div class="login-container container">
            <div class="row justify-content-center">
                <div class="col-xs-12 col-sm-10 col-md-8 col-lg-6 col-xl-5">
                    <div class="login"> 
                        <h4 class="mb-4">Sign up Account</h4>
                        <form class="sign-up">
                            <div class="mb-3">
                                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="add-email-tab" data-bs-toggle="pill"
                                            data-bs-target="#add-email" type="button" role="tab" aria-controls="add-email"
                                            aria-selected="true">Email</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="add-phone-tab" data-bs-toggle="pill"
                                            data-bs-target="#add-phone" type="button" role="tab"
                                            aria-controls="add-phone" aria-selected="false">Phone</button>
                                    </li>
                                </ul>
                                <div class="tab-content" id="pills-tabContent">
                                    <div class="tab-pane fade show active" id="add-email" role="tabpanel"
                                        aria-labelledby="add-email-tab">
                                        <div class="form-floating">
                                            <span class="input-group-text" id="basic-addon1">
                                                <i class="fa-regular fa-envelope"></i>
                                            </span>
                                            <input type="email" class="form-control" id="email-address"
                                                aria-describedby="emailHelp" placeholder="Email Address">
                                            <label for="email-address" class="ms-5">Email Address</label>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="add-phone" role="tabpanel"
                                        aria-labelledby="add-phone-tab">
                                        <div class="input-group">
                                            <select class="selectpicker countrypicker" data-live-search="true" data-flag="true"></select>
                                        </div>
                                        <div class="form-floating">
                                            <span class="input-group-text" id="basic-addon2">
                                                <img src="resources/images/icons/login/user.svg" alt="">
                                            </span>
                                            <input type="phone" class="form-control" id="phone-number"
                                                aria-describedby="emailHelp" placeholder="Phone Number">
                                            <label for="phone-number" class="ms-5">Phone Number</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="form-floating">
                                    <span class="input-group-text" id="basic-addon2">
                                        <img src="resources/images/icons/login/padlock.svg" alt="">
                                    </span>
                                    <input type="password" class="form-control" id="setpassword" placeholder="Set Password">
                                    <label for="setpassword" class="ms-5">Set Password</label>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="form-floating">
                                    <span class="input-group-text" id="basic-addon2">
                                        <img src="resources/images/icons/login/padlock.svg" alt="">
                                    </span>
                                    <input type="password" class="form-control" id="confirmpassword" placeholder="Confirm Password">
                                    <label for="confirmpassword" class="ms-5">Confirm Password</label>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="form-floating">
                                    <span class="input-group-text" id="basic-addon2">
                                        <img src="resources/images/icons/login/numeric.svg" alt="">
                                    </span>
                                    <input type="password" class="form-control" id="verification-code"
                                        placeholder="Verification Code">
                                    <label for="verification-code" class="ms-5">Verification Code</label>
                                    <button>Get Code</button>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="form-floating">
                                    <span class="input-group-text" id="basic-addon2">
                                        <img src="resources/images/icons/login/invitation-code.svg" alt="">
                                    </span>
                                    <input type="password" class="form-control" id="invitation-code"
                                        placeholder="Invitation Code(Optional)">
                                    <label for="invitation-code" class="ms-5">Invitation Code(Optional)</label>
                                </div>
                            </div>
                            <div class="mb-3 other-choice">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="gridCheck">
                                    <label class="form-check-label" for="gridCheck">
                                        <span>I have read and agree to</span>
                                        <a href="">《User Agreement》</a>
                                        <span>and</span>
                                        <a href="">《Privacy Clause》</a>
                                    </label>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Signup Page -->

    <?php include "inc/footer.php" ?>
</body>