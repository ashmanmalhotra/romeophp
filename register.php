<?php include 'includes/header.php'; ?>
        <!-- Navigation-->
        <?php include 'includes/navigation.php'; ?>
        <!-- Page Header-->
        <header class="masthead" style="background-image: url('assets/img/register.jpg')">
            <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="page-heading">
                            <h1>Register</h1>
                            <span class="subheading">Fill in the form below to register.</span>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Main Content-->
        <main class="mb-4">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <p>Register with Us</p>
                        <div class="my-5">
                            <form id="contactForm" action="registeruser.php" method="post">
                                <div class="form-floating">
                                    <input class="form-control" name="fname" id="fname" type="text" placeholder="Enter your First Name..." data-sb-validations="required" />
                                    <label for="name">First Name</label>
                                    <div class="invalid-feedback" data-sb-feedback="fname:required">A First Name is required.</div>
                                </div>
                                <div class="form-floating">
                                    <input class="form-control" id="lname" name="lname" type="text" placeholder="Enter your Last Name..." data-sb-validations="required" />
                                    <label for="lname">Last Name</label>
                                    <div class="invalid-feedback" data-sb-feedback="lname:required">A Last Name is required.</div>
                                </div>                                
                                <div class="form-floating">
                                    <input class="form-control" id="username" name="username" type="text" placeholder="Enter Username..." data-sb-validations="required" />
                                    <label for="username">Username</label>
                                    <div class="invalid-feedback" data-sb-feedback="username:required">Username is the required field.</div>
                                </div>
                                <div class="form-floating">
                                    <input class="form-control" id="password" name="password" type="password" placeholder="Enter Password..." data-sb-validations="required" />
                                    <label for="password">Password</label>
                                    <div class="invalid-feedback" data-sb-feedback="password:required">Password is the required field.</div>
                                </div>
                                <div class="form-floating">
                                    <input class="form-control" id="email" name="email"  type="email" placeholder="Enter your email..." data-sb-validations="required,email" />
                                    <label for="email">Email address</label>
                                    <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                                    <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                                </div>
                                <br />
                                <!-- Submit Button-->
                                <button class="btn btn-primary text-uppercase" id="registerbutton" name="registerbutton" type="submit">Send</button>
                            </form>
                        </div>
                        <?php
                            if(isset($_SESSION['register_user_message'])){
                                echo "<p style='color:red;'>" . $_SESSION['register_user_message'] . "</>";
                                unset($_SESSION['register_user_message']);
                            }
                        ?>
                    </div>
                </div>
            </div>
        </main>
        <!-- Footer-->
        <?php include 'includes/footer.php'; ?>
        
        
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
        
    </body>
</html>
