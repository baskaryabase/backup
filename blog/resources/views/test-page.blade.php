<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
                          <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/{version}/css/bootstrap-combined.min.css" rel="stylesheet"> 

<button data-toggle="modal" data-target="#login_modal">modal</button>
 <!-- Modal -->
  <div class="modal fade" id="login_modal" role="dialog">
    <div align="center" class="modal-dialog">
    
      <!-- Modal content-->
<div class="modal-content login-width">
        
        <!-- <div class="modal-body">
          -->
          
<div style="padding-top: 0px;" class="modal-body">
 
 <button style="padding-top: 10px;" type="button" class="close" data-dismiss="modal">&times;</button>
 
   <div style="margin-bottom: -35px;" class="row">
    <div class="">

      <div class="panel panel-login">
        <div class="panel-body">
          <div class="row">
            <div class="col-lg-12">
            <div class="panel-heading">
          <div class="row">
            <div class="col-xs-6 tabs">
              <a href="#" class="active" id="login-form-link">
              <div style="border-radius: 0 0 0 4px;" id="a" class="login focus">LOGIN</div></a>
            </div>
            <div class="col-xs-6 tabs">
              <a href="#" id="register-form-link"><div id="b" class="register ">REGISTER</div></a>
            </div>
          </div>
        </div>
              <form id="login-form"  role="form" style="display: block;">
                <h2>LOGIN</h2>
                  <div class="form-group">
                    <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="">
                  </div>
                  <div class="form-group">
                    <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
                  </div>
                  <div class="col-xs-6 form-group pull-left checkbox">
                    <input id="checkbox1" type="checkbox" name="remember">
                    <label for="checkbox1">Remember Me</label>   
                  </div>
                  <div class="col-xs-6 form-group pull-right">     
                        <input type="button" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Log In">
                  </div>
                  <div class="col-xs-12">
                    <center>forgot password?<a id="forgot-btn" href="#">click here...</a></center>
                  </div>
              </form>


              <form id="register-form"  role="form" style="display: none;">
                <h2>REGISTER</h2>
                  <div class="form-group">
                    <input type="text" name="username" id="fullname" tabindex="1" class="form-control" placeholder="Fullname" value="">
                  </div>
                  <div class="form-group">
                    <input type="email" name="email" id="emailaddress" tabindex="1" class="form-control" placeholder="Email Address" value="">
                  </div>
                  <div class="form-group">
                    <input type="password" name="password" id="register_password" tabindex="2" class="form-control" placeholder="Password">
                  </div>
                  <div class="form-group">
                    <input type="password" name="confirm-password" id="confirmpassword" tabindex="2" class="form-control" placeholder="Confirm Password">
                  </div>
                  <div class="form-group">
                    <div class="row">
                      <div class="col-sm-6 col-sm-offset-3">
                        <input type="button" name="register-submit" id="register-submit" tabindex="4" class="form-control btn btn-register" value="Register Now">
                      </div>
                    </div>
                  </div>
                  <div class="form-group width-btn">
                    <a class="btn btn-block btn-social btn-facebook">
                     <i class="fa fa-facebook"></i> Sign in with Facebook
                    </a>
                     <a class="btn btn-block btn-social btn-linkedin">
                      <i class="fa fa-linkedin"></i> Sign in with LinkedIn
                     </a>
                  </div>
              </form>

              
              <form id="forgot-password"  role="form" style="display: none;">
                <h2>Forgot Password</h2>
                  <div class="form-group">
                    <input type="email" name="username" id="email_id" tabindex="1" class="form-control" placeholder="Please Enter email id" value="">
                    <div style="padding-top: 20px;" class="col-sm-6 col-sm-offset-3">
                        <input type="button" name="forgot-password-submit" id="forgot-password-submit" tabindex="4" class="form-control btn btn-register" value="Submit">
                      </div>
                  </div>
              </form>


            </div> 
          </div>
        </div>
        
      </div>
    </div>
  </div>
</div>



<script type="text/javascript">
  $(function() {
    $('#login-form-link').click(function(e) {
      $("#login-form").delay(100).fadeIn(100);
    $("#register-form").fadeOut(100);
    $("#forgot-password").delay(100).fadeOut(100);
    $('#register-form-link').removeClass('active');
    $("#a").addClass('focus');
    $('#b').removeClass('focus');
    $(this).addClass('active');
    e.preventDefault();
  });
  $('#forgot-btn').click(function(e) {
      $("#forgot-password").delay(100).fadeIn(100);
    $("#login-form").fadeOut(100);
    $('#login-form-link').removeClass('active');
    $(this).addClass('active');
    e.preventDefault();
  });
  $('#register-form-link').click(function(e) {
    $("#register-form").delay(100).fadeIn(100);
    $("#login-form").fadeOut(100);
    $("#forgot-password").delay(100).fadeOut(100);
    $('#login-form-link').removeClass('active');
    $(this).addClass('active');
    $("#a").removeClass('focus');
    $('#b').addClass('focus')
    e.preventDefault();
  });

});

</script>

<style type="text/css">
	@media screen and (min-width: 480px){
.width{
  width: 400px;
}

}
@media screen and (min-width: 767px){
.width-btn{
  width: 250px;
}
}
.social_signup {
    display: inline-block;
    margin-top: 1.3em;
    height: 100%;
}


@-webkit-keyframes HeroBG {
  0% {
    background-position: 0 0;
  }
  50% {
    background-position: 100% 0;
  }
  100% {
    background-position: 0 0;
  }
}

@keyframes HeroBG {
  0% {
    background-position: 0 0;
  }
  50% {
    background-position: 100% 0;
  }
  100% {
    background-position: 0 0;
  }
}


.panel {
  border-radius: 5px;
}
label {
  font-weight: 300;
}
.panel-login {
   border: none;
  -webkit-box-shadow: 0px 0px 49px 14px rgba(188,190,194,0.39);
  -moz-box-shadow: 0px 0px 49px 14px rgba(188,190,194,0.39);
  box-shadow: 0px 0px 49px 14px rgba(188,190,194,0.39);
  }
.panel-login .checkbox input[type=checkbox]{
  margin-left: 0px;
}
.panel-login .checkbox label {
  padding-left: 25px;
  font-weight: 300;
  display: inline-block;
  position: relative;
}
.panel-login .checkbox {
 padding-left: 20px;
}
.panel-login .checkbox label::before {
  content: "";
  display: inline-block;
  position: absolute;
  width: 17px;
  height: 17px;
  left: 0;
  margin-left: 0px;
  border: 1px solid #cccccc;
  border-radius: 3px;
  background-color: #fff;
  -webkit-transition: border 0.15s ease-in-out, color 0.15s ease-in-out;
  -o-transition: border 0.15s ease-in-out, color 0.15s ease-in-out;
  transition: border 0.15s ease-in-out, color 0.15s ease-in-out;
}
.panel-login .checkbox label::after {
  display: inline-block;
  position: absolute;
  width: 16px;
  height: 16px;
  left: 0;
  top: 0;
  margin-left: 0px;
  padding-left: 3px;
  padding-top: 1px;
  font-size: 11px;
  color: #555555;
}
.panel-login .checkbox input[type="checkbox"] {
  opacity: 0;
}
.panel-login .checkbox input[type="checkbox"]:focus + label::before {
  outline: thin dotted;
  outline: 5px auto -webkit-focus-ring-color;
  outline-offset: -2px;
}
.panel-login .checkbox input[type="checkbox"]:checked + label::after {
  font-family: 'FontAwesome';
  content: "\f00c";
}
.panel-login>.panel-heading .tabs{
  padding: 0;
}
.panel-login h2{
  font-size: 20px;
  font-weight: 300;
  margin: 30px;
}
.panel-login>.panel-heading {
  color: #000;
  background-color: transparent;
  border-color: #fff;
  text-align:center;
  border-bottom-left-radius: 5px;
  border-bottom-right-radius: 5px;
  border-top-left-radius: 0px;
  border-top-right-radius: 0px;
  border-bottom: 0px;
  padding: 0px 15px;
}
.panel-login .form-group {
  padding: 0 30px;
}
.panel-login>.panel-heading .login {
  padding: 20px 30px;
  border-bottom-leftt-radius: 5px;
}

.panel-login>.panel-heading .register {
  padding: 20px 30px;
  background: #fff;
  color: #000;
  border-bottom-right-radius: 5px;
}

.panel-login>.panel-heading a{
  text-decoration: none;
  color: #666;
  font-weight: 300;
  font-size: 16px;
  -webkit-transition: all 0.1s linear;
  -moz-transition: all 0.1s linear;
  transition: all 0.1s linear;
}
.panel-login>.panel-heading a#register-form-link {
  color: #fff;
  width: 100%;
  text-align: right;
}
.panel-login>.panel-heading a#login-form-link {
  width: 100%;
  text-align: left;
}

.panel-login input[type="text"],.panel-login input[type="email"],.panel-login input[type="password"] {
  height: 45px;
  border: 0;
  font-size: 16px;
  -webkit-transition: all 0.1s linear;
  -moz-transition: all 0.1s linear;
  transition: all 0.1s linear;
  -webkit-box-shadow: none;
  box-shadow: none;
  border-bottom: 1px solid #e7e7e7;
  border-radius: 0px;
  padding: 6px 0px;
}
.panel-login input:hover,
.panel-login input:focus {
  outline:none;
  -webkit-box-shadow: none;
  -moz-box-shadow: none;
  box-shadow: none;
  border-color: #ccc;
}
.btn-login {
  background-color: #8ec33f;
  outline: none;
  color: #2D3B55;
  font-size: 14px;
  height: auto;
  font-weight: normal;
  padding: 14px 0;
  text-transform: uppercase;
  border: none;
  border-radius: 0px;
  box-shadow: none;
}
.btn-login:hover,
.btn-login:focus {
  color: #fff;
  background-color: #f57f20;
}
.forgot-password {
  text-decoration: underline;
  color: #888;
}
.forgot-password:hover,
.forgot-password:focus {
  text-decoration: underline;
  color: #666;
}

.btn-register {
  background-color: #8ec33f;
  outline: none;
  color: #2D3B55;
  font-size: 14px;
  height: auto;
  font-weight: normal;
  padding: 14px 0;
  text-transform: uppercase;
  border: none;
  border-radius: 0px;
  box-shadow: none;
}
.btn-register:hover,
.btn-register:focus {
  color: #fff;
  background-color: #f57f20;
}
.focus{
  background: #f57f20 !important;
  color: #fff !important;
}
.btn-facebook{color:#fff;background-color:#3b5998;border-color:rgba(0,0,0,0.2)}.btn-facebook:hover,.btn-facebook:focus,.btn-facebook:active,.btn-facebook.active,.open .dropdown-toggle.btn-facebook{color:#fff;background-color:#30487b;border-color:rgba(0,0,0,0.2)}
.btn-linkedin{color:#fff;background-color:#007bb6;border-color:rgba(0,0,0,0.2)}.btn-linkedin:hover,.btn-linkedin:focus,.btn-linkedin:active,.btn-linkedin.active,.open .dropdown-toggle.btn-linkedin{color:#fff;background-color:#005f8d;border-color:rgba(0,0,0,0.2)}
.btn-linkedin:active,.btn-linkedin.active,.open .dropdown-toggle.btn-linkedin{background-image:none}
.btn-linkedin.disabled,.btn-linkedin[disabled],fieldset[disabled] .btn-linkedin,.btn-linkedin.disabled:hover,.btn-linkedin[disabled]:hover,fieldset[disabled] .btn-linkedin:hover,.btn-linkedin.disabled:focus,.btn-linkedin[disabled]:focus,fieldset[disabled] .btn-linkedin:focus,.btn-linkedin.disabled:active,.btn-linkedin[disabled]:active,fieldset[disabled] .btn-linkedin:active,.btn-linkedin.disabled.active,.btn-linkedin[disabled].active,fieldset[disabled] .btn-linkedin.active{background-color:#007bb6;border-color:rgba(0,0,0,0.2)}

.btn-social{position:relative;padding-left:44px;text-align:left;white-space:nowrap;overflow:hidden;text-overflow:ellipsis}.btn-social :first-child{position:absolute;left:0;top:0;bottom:0;width:32px;line-height:34px;font-size:1.6em;text-align:center;border-right:1px solid rgba(0,0,0,0.2)}

</style>
