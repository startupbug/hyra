

<div class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 clearfix col-center signup_form">
                <!--<div class="signup_form_text">
                    <p>Sign up for your account</p>
                </div>-->
                <div class="signup_form_box_register">
                	<h3 class="login_heading">LOGO HERE</h3>
                    <hr>
                    <p class="register_content">fields are marked with (*) are mandatory</p>
                    <form id="Sign_up_form" id="registration_form"">
                        <div class="form-group">
                            <label>Name *</label>
                            <input type="text" class="form-control required fullname"
                                   data-errormessage-value-missing="Name of entity is required!" id="">
                        </div>
                        <div class="form-group">
                            <label>Email *</label>
                            <input type="email" class="form-control required email"
                                   data-errormessage-value-missing="Email of entity is required!">
                        </div>
                        <div class="form-group">
                            <label>Phone *</label>
                            <input type="text" class="form-control required"
                                   data-errormessage-value-missing="Phone of entity is required!">
                        </div>
                        <div class="form-group">
                            <label>DOB *</label>
                            <input type="date" class="form-control required"
                                   data-errormessage-value-missing="Date Of Birth of entity is required!">
                        </div>
                        <div class="form-group">
                            <label>Blank id *</label>
                            <input type="text" class="form-control required email"
                                   data-errormessage-value-missing="Phone of entity is required!">
                        </div>
                       
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control required">
                        </div>
                        <div class="form-group">
                            <label>Confirm Password</label>
                            <input type="password" class="form-control" required equalto="#pwd">
                        </div>
                        <div class="form-group">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox"> Please accept <a href="#!terms_condition"><span>Terms and Conditions</span></a>
                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="button_register"><a href="signin.php" class="btn btn-default all_r_login">ALREADY ACCOUNT / LOGIN</a>
                            <!--<a href="#" class="btn btn-default sinup_btn">SIGNUP NOW</a>-->
                            <button type="submit" class="btn login_now">SIGNUP NOW</button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

