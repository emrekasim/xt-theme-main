<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>XT</title>
    <link rel="stylesheet" href="../resources/css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="../resources/css/bootstrap/bootstrap-select.min.css">
    <link rel="stylesheet" href="../resources/css/fontawesome/all.min.css">
    <link rel="stylesheet" href="../resources/css/style.css">
    <link rel="stylesheet" href="../resources/css/bootstrap/bootstrap-table.min.css">
</head>
<nav class="navbar navbar-expand-lg nav-pages">
    <div class="container-fluid">
        <div class="row w-100">
            <div class="col-md-9">
                <a class="navbar-brand" href="#">
                    <img src="../resources/images/xt-logo.png" alt="xt-logo">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Markets</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Trading
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li>
                                    <a class="dropdown-item" href="#">Standard Spot</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">Pro Spot</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">Standard Margin</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">Pro Margin</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Derivatives
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li>
                                    <a class="dropdown-item" href="#">USD-M Futures</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">USD-M Futures(Demo)</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">Coin-M Futures</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">Quanto Futures</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">Standard ETF</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">Pro ETF</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">ETF Ranking</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">ETF Index s</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled">Disabled</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="nvabar-right col-md-3 d-flex justify-content-end px-3">
                <div class="row text-center align-items-center">
                    <div class="col-md-2">
                        <a href="">Login</a>
                    </div>
                    <div class="col-md-3 main-btn">
                        <a href="">Sign up</a>
                    </div>
                    <div class="col-md-3">
                        <a href="">Download</a>
                    </div>
                    <div class="col-md-4">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            English/USD
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><label for="">Languges</label></li>
                            <li>
                                <a class="dropdown-item" href="#">English</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">Español</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>

<body>

    <!-- Start Security Page -->
    <div class="app-body security-body pt-4">
        <div class="market-container container">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <h6>Basic Information</h6>
                        </div>
                        <div class="row ps-5">
                            <div class="col-md-2 font-s14">
                                <p class="gray-color-semi mb-1">Real Name</p>
                                <p class="mb-0"><a href="#" class="main-color">Unverified</a></p>
                            </div>
                            <div class="col-md font-s14">
                                <p class="gray-color-semi mb-1">Phone Number</p>
                                <button type="button" class="btn p-0 font-s14 border-0" data-bs-toggle="modal"
                                        data-bs-target="#phoneModal">Unverified</button>
                            </div>
                            <div class="col-md font-s14">
                                <p class="gray-color-semi mb-1">Email Address</p>
                                <p class="mb-0"><a href="#" class="text-decoration-none text-dark">osama.alburak@gmail.com</a></p>
                            </div>
                            <div class="col-md-2 font-s14">
                                <p class="gray-color-semi mb-1">VIP rate</p>
                                <p class="mb-0"><a href="#" class="main-color">VIP0</a></p>
                            </div>
                            <div class="col-md-2 font-s14">
                                <p class="gray-color-semi mb-1">Identify Verification</p>
                                <p class="mb-0"><a href="#" class="main-color">Unverified</a></p>
                            </div>
                            <div class="col-md-12 gray-color-semi font-s14 mt-4">
                                <p>Last Login Time:2022-05-21 06:26:15 <span class="ms-4">IP:78.180.235.87</span></p>
                            </div>
                        </div>
                        <div class="col-md-12 my-5">
                            <h6>Security Verification</h6>
                        </div>
                        <div class="col-md-12">
                            <div class="email-verification d-flex flex-nowrap justify-content-between align-items-center mb-3">
                                <div class="email-info d-flex flex-nowrap justify-content-between">
                                    <div class="img-pick text-center">
                                        <img class="w-50" src="../resources/images/pages/security-verification/email-verification.png" alt="">
                                    </div>
                                    <div>
                                        <p class="font-s16">Email Address<span class="font-s12 ms-4">osama.alburak@gmail.com</span></p>
                                        <p class="font-s12 gray-color-semi">Used for security verification while you are withdrawing coins, retrieving your passwords, modifying security settings and managing API</p>
                                    </div>
                                </div>
                                <div>
                                    <p class="font-s12 gray-color-semi mb-0">Non-modifiable</p>
                                </div>
                            </div>
                            <div class="phone-verification d-flex flex-nowrap justify-content-between align-items-center mb-3">
                                <div class="phone-info d-flex flex-nowrap justify-content-between">
                                    <div class="img-pick text-center">
                                        <img class="w-50" src="../resources/images/pages/security-verification/phone-verification.png" alt="">
                                    </div>
                                    <div>
                                        <p class="font-s16">Phone Number<span class="font-s12 ms-4 text-danger">Unverified</span></p>
                                        <p class="font-s12 gray-color-semi">Used for security verification while you are withdrawing coins, retrieving your passwords, modifying security settings and managing API</p>
                                    </div>
                                </div>
                                <div>
                                    <p class="mb-0"><button type="button" class="btn p-0 font-s12 main-color border-0" data-bs-toggle="modal"
                                        data-bs-target="#phoneModal">Authenticate</button></p>
                                </div>
                            </div>
                            <div class="google-verification d-flex flex-nowrap justify-content-between align-items-center mb-3">
                                <div class="google-info d-flex flex-nowrap justify-content-between">
                                    <div class="img-pick text-center">
                                        <img class="w-50" src="../resources/images/pages/security-verification/google-verification.png" alt="">
                                    </div>
                                    <div>
                                        <p class="font-s16">Google Authenticator（Recommend）<span class="font-s12 ms-4">Not Set</span></p>
                                        <p class="font-s12 gray-color-semi">Used for security verification while you are withdrawing coins, retrieving your passwords, modifying security settings and managing API.</p>
                                    </div>
                                </div>
                                <div>
                                    <p class="font-s12 main-color mb-0">Set</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 my-5">
                            <h6>Password Setting</h6>
                        </div>
                        <div class="col-md-12">
                            <div class="login-passowrd d-flex flex-nowrap justify-content-between align-items-center mb-3">
                                <div class="login-info d-flex flex-nowrap justify-content-between">
                                    <div class="img-pick text-center">
                                        <img class="w-50" src="../resources/images/pages/security-verification/login-password.png" alt="">
                                    </div>
                                    <div>
                                        <p class="font-s16">Login Password<span class="font-s12 ms-4"></span></p>
                                        <p class="font-s12 gray-color-semi">Used for security verification while you are logging in or modifying your password.</p>
                                    </div>
                                </div>
                                <div>
                                    <p class="mb-0"><button type="button" class="btn p-0 font-s12 main-color border-0" data-bs-toggle="modal"
                                        data-bs-target="#loginPassModal">Modify</button></p>
                                </div>
                            </div>
                            <div class="security-password d-flex flex-nowrap justify-content-between align-items-center mb-3">
                                <div class="security-info d-flex flex-nowrap justify-content-between">
                                    <div class="img-pick text-center">
                                        <img class="w-50" src="../resources/images/pages/security-verification/security-password.png" alt="">
                                    </div>
                                    <div>
                                        <p class="font-s16">Security Password<span class="font-s12 ms-4 text-danger">Unverified</span></p>
                                        <p class="font-s12 gray-color-semi">Used for security verification while you are withdrawing coins, modifying security settings and managing API.</p>
                                    </div>
                                </div>
                                <div>
                                    <p class="font-s12 main-color mb-0"><button type="button" class="btn p-0 font-s12 main-color border-0" data-bs-toggle="modal"
                                        data-bs-target="#securityPassModal">Modify</button></p>
                                </div>
                            </div>
                            <div class="anti-phishing d-flex flex-nowrap justify-content-between align-items-center mb-3">
                                <div class="anti-info d-flex flex-nowrap justify-content-between">
                                    <div class="img-pick text-center">
                                        <img class="w-50" src="../resources/images/pages/security-verification/anti-phishing.png" alt="">
                                    </div>
                                    <div>
                                        <p class="font-s16">Anti-Phishing Code<span class="font-s12 ms-4"></span></p>
                                        <p class="font-s12 gray-color-semi">The email sent to you contains an anti-phishing code to prevent fake emails.</p>
                                    </div>
                                </div>
                                <div>
                                    <p class="font-s12 main-color mb-0">Set</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 my-5">
                            <h6>Security Policy</h6>
                        </div>
                        <div class="col-md-12">
                            <div class="login-Policy d-flex flex-nowrap justify-content-between align-items-center mb-3">
                                <div class="login-Policy-info d-flex flex-nowrap justify-content-between">
                                    <div class="img-pick text-center">
                                        <img class="w-50" src="../resources/images/pages/security-verification/login-policy.png" alt="">
                                    </div>
                                    <div>
                                        <p class="font-s16">Login Policy<span class="font-s12 ms-4"></span></p>
                                        <p class="font-s12 gray-color-semi">Current Settings: Login Password+Remote login verification</p>
                                    </div>
                                </div>
                                <div>
                                    <p class="font-s12 mb-0 main-color">Modify</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 mt-5 mb-1">
                            <h6>Login Log</h6>
                        </div>
                        <div class="col-md-12 font-s12">
                            <table
                                data-toggle="table"
                                data-pagination="true">
                                <thead>
                                    <tr>
                                        <th data-field="id">Time</th>
                                        <th data-field="action-type">Action Type</th>
                                        <th data-field="operating-terminal">Operating Terminal</th>
                                        <th data-field="iP-address">IP Address/City</th>
                                        <th data-field="result">Result</th>
                                        <th data-field="description">Description</th>
                                    </tr>
                                </thead>
                                <tbody class="font-s14">
                                    <tr>
                                        <td><span>2022-05-21 09:26:14</span></td>
                                        <td><span>Login</span></td>
                                        <td><span>web</span></td>
                                        <td><span>78.180.235.87(Istanbul)</span></td>
                                        <td><span>Success</span></td>
                                        <td><span>Login</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <div class="app-footer pt-2 pt-md-4">
            <div class="footer-container container">
                <div class="row">
                    <div class="d-none d-md-block col-md-3">
                        <img src="resources/images/ecotx-logo.png" alt="footer-logo">
                        <p>© 2022 XT.COM</p>
                        <p>The World’s First Social Infused Exchange</p>
                    </div>
                    <div class="col-md-9">
                        <div class="row">
                            <div class="col-md-3">
                                <a class="btn btn-link d-flex d-md-none px-0 justify-content-between" data-bs-toggle="collapse" href="#technical-sup" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">
                                    <h6 class="d-inline-block me-1">Technical Support</h6>
                                    <i class="fa-solid fa-sort-down"></i>
                                </a>
                                <div class="d-md-block collapse multi-collapse" id="technical-sup">
                                    <h6 class="d-none d-md-block">Technical Support</h6>
                                    <ul>
                                        <li>
                                            <a href="">APP Download</a>
                                        </li>
                                        <li>
                                            <a href="">API Documentation</a>
                                        </li>
                                        <li>
                                            <a href="">FAQ</a>
                                        </li>
                                        <li>
                                            <a href="">Submit A Ticket</a>
                                        </li>
                                        <li>
                                            <a href="">Clear Cache</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <a class="btn btn-link d-flex d-md-none px-0 justify-content-between" data-bs-toggle="collapse" href="#about-us" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">
                                    <h6 class="d-inline-block me-1">About Us</h6>
                                    <i class="fa-solid fa-sort-down"></i>
                                </a>
                                <div class="d-md-block collapse multi-collapse" id="about-us">
                                    <h6 class="d-none d-md-block">About Us</h6>
                                    <ul>
                                        <li>
                                            <a href="">About XT.com</a>
                                        </li>
                                        <li>
                                            <a href="">Join us</a>
                                        </li>
                                        <li>
                                            <a href="">Announcement</a>
                                        </li>
                                        <li>
                                            <a href="">Fee</a>
                                        </li>
                                        <li>
                                            <a href="">Asset Intro</a>
                                        </li>
                                        <li>
                                            <a href="">Schedule</a>
                                        </li>
                                        <li>
                                            <a href="">XT Media Toolkit</a>
                                        </li>
                                        <li>
                                            <a href="">Official verification channel</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <a class="btn btn-link d-flex d-md-none px-0 justify-content-between" data-bs-toggle="collapse" href="#terms" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">
                                    <h6 class="d-inline-block me-1">Terms</h6>
                                    <i class="fa-solid fa-sort-down"></i>
                                </a>
                                <div class="d-md-block collapse multi-collapse" id="terms">
                                    <h6 class="d-none d-md-block">Terms</h6>
                                    <ul>
                                        <li>
                                            <a href="">Privacy</a>
                                        </li>
                                        <li>
                                            <a href="">User Agreement</a>
                                        </li>
                                        <li>
                                            <a href="">Law Enforcement Requests</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <a class="btn btn-link d-flex d-md-none px-0 justify-content-between" data-bs-toggle="collapse" href="#contact-us" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">
                                    <h6 class="d-inline-block me-1">Contact Us</h6>
                                    <i class="fa-solid fa-sort-down"></i>
                                </a>
                                <div class="d-md-block collapse multi-collapse" id="contact-us">
                                    <h6 class="d-inline-block me-1">Contact Us</h6>
                                    <div class="footer-social">
                                        <img src="" alt="">
                                    </div>
                                    <ul>
                                        <li>
                                            <a href="">Customer Support: support@xt.com</a>
                                        </li>
                                        <li>
                                            <a href="">Listing Application: listing@xt.com</a>
                                        </li>
                                        <li>
                                            <a href="">Business Cooperation: business@xt.com</a>
                                        </li>
                                        <li>
                                            <a href="">IDO/IGO Application: xtstarter@xt.com</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="col-md-1">
                        <p>Partners</p>
                    </div>
                    <div class="col-md-11">

                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Start Modals Section -->

    <!-- Start Phone Number Modal -->
    <div class="modal fade securityModal" id="phoneModal" tabindex="-1" aria-labelledby="phoneModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="modal-title" id="phoneModalLabel">Bind Phone Number</h6>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="sign-up">
                        <div class="mb-3">
                            <div class="input-group">
                                <input type="phone" class="form-control" id="phone-number"
                                    aria-describedby="emailHelp" placeholder="Phone Number">
                                <select class="input-group-text selectpicker countrypicker w-25" data-live-search="true" data-flag="true"></select>
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="input-group">
                                <input type="password" class="form-control" id="verification-code"
                                    placeholder="Verification Code">
                                <button class="btn main-color">Get Code</button>
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="input-group">
                                <input type="email" class="form-control" id="email-code"
                                    placeholder="Email Verification Code">
                                <button class="btn main-color">Get Code</button>
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="input-group">
                                <input type="password" class="form-control" id="security-code"
                                    placeholder="Security Password">
                                <button class="btn main-color">forget_password</button>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary" disabled>Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End Phone Number Modal -->

    <!-- Start Login Password Modal -->
    <div class="modal fade securityModal" id="loginPassModal" tabindex="-1" aria-labelledby="loginPassModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header p-4">
                    <h6 class="modal-title" id="loginPassModalLabel">ModifyLogin Password</h6>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-4">
                    <form class="sign-up">
                        <div class="mb-3">
                            <div class="input-group">
                                <input type="password" class="form-control" id="verification-code"
                                    placeholder="OldLogin Password">
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="input-group">
                                <input type="password" class="form-control" id="verification-code"
                                    placeholder="NewLogin Password">
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="input-group">
                                <input type="password" class="form-control" id="email-code"
                                    placeholder="ConfirmLogin Password">
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="input-group">
                                <input type="text" class="form-control" id="security-code"
                                    placeholder="Get Code">
                                <button class="btn main-color">Get Code</button>
                            </div>
                        </div>
                        <div class="mb-3 other-choice">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="gridCheck">
                                <label class="form-check-label" for="gridCheck">
                                    <span class="font-s12 gray-color-semi">I acknowledge that after changing the login password, I will be logged out of the account. I need to use the new password to log in again, withdrawals and fiat currency sales are prohibited within 24 hours.</span>
                                </label>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary" disabled>Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End Login Password Modal -->

    <!-- Start Security Password Modal -->
    <div class="modal fade securityModal" id="securityPassModal" tabindex="-1" aria-labelledby="securityPassModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header p-4">
                    <h6 class="modal-title" id="securityPassModalLabel">ModifySecurity Password</h6>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-4">
                    <form class="sign-up">
                        <div class="mb-3">
                            <div class="input-group">
                                <input type="password" class="form-control" id="verification-code"
                                    placeholder="OldSecurity Password">
                                    <button class="btn main-color">Forgot password?</button>
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="input-group">
                                <input type="password" class="form-control" id="verification-code"
                                    placeholder="NewSecurity Password">
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="input-group">
                                <input type="password" class="form-control" id="email-code"
                                    placeholder="ConfirmSecurity Password">
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="input-group">
                                <input type="text" class="form-control" id="security-code"
                                    placeholder="Get Code">
                                <button class="btn main-color">Get Code</button>
                            </div>
                        </div>
                        <div class="mb-3 other-choice">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="gridCheck">
                                <label class="form-check-label" for="gridCheck">
                                    <span class="font-s12 gray-color-semi">I acknowledge that withdrawals and fiat currency sales are prohibited within 24 hours after Change security password</span>
                                </label>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary" disabled>Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End Security Password Modal -->

    <!-- End Modals Section -->
    <script src="../resources/js/jquery-3.6.0.min.js"></script>
    <script src="../resources/js/bootstrap.bundle.js"></script>
    <script src="../resources/js/bootstrap-select.min.js"></script>
    <script src="../resources/js/owl.carousel.min.js"></script>
    <script src="../resources/js/index.js"></script>
    <script src="../resources/js/bootstrap-table.min.js"></script>
    <script src="../resources/js/bootstrap-select-country.min.js"></script>
</body>