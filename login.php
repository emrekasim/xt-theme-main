<?php include "inc/header.php" ?>
<?php include "inc/navbar.php" ?>

<body>

    <!-- Start login Page -->
    <div class="app-body login-body pt-4">
        <div class="login-container container">
            <div class="row justify-content-center">
                <div class="col-xs-12 col-sm-10 col-md-8 col-lg-6 col-xl-5">
                    <div class="login">
                        <h4 class="mb-5">Welcome to log in</h4>
                        <form>
                            <div class="mb-3">
                                <div class="form-floating">
                                    <span class="input-group-text" id="basic-addon2">
                                        <img src="resources/images/icons/login/user.svg" alt="">
                                    </span>
                                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Phone Number/Email Address">
                                    <label for="setpassword" class="ms-5">Phone Number/Email Address</label>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="form-floating">
                                    <span class="input-group-text" id="basic-addon2">
                                        <img src="resources/images/icons/login/padlock.svg" alt="">
                                    </span>
                                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Login Password">
                                    <label for="setpassword" class="ms-5">Login Password</label>
                                </div>
                            </div>
                            <div class="mb-3 other-choice d-flex justify-content-between">
                                <p class="mb-0">No account yet?<a href="">Sign Up Now</a></p>
                                <a href="">Forgot password?</a>
                            </div>
                            <button type="submit" class="btn w-100 bgx-main">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End login Page -->

    <?php include "inc/footer.php" ?>
</body>