<?php include('header.php'); ?>

<div class="container">
	<div class="row">
   <div class="col-md-4 col-md-offset-4 login">
    <h3 class="login_content">LOGO HERE</h3>
     <hr>
     <form id="signin_form">
      <div class="form-group_form">
        <label for="exampleInputName">Name</label>
        <input type="text" class="form-control required fullname" id="exampleInputName">
      </div>
      <div class="form-group_form">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control required" id="exampleInputPassword1"> 
      </div>


      <div class="form-group" role="group" aria-label="...">
        <div class="account_signin"><a href="#" class="btn btn-default_signup">NO ACCOUNT? SIGN UP NOW</a>     
        <!--<a  href="#" class="btn btn-default_login">LOGIN NOW</a>-->
        <button type="submit" class="btn login_now">LOGIN NOW</button>
      </div>
  </div>
    </form>
   
  </div>
</div>
</div>



<?php include('footer.php'); ?>