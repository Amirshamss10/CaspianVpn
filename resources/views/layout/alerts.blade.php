@if (session('welcome'))
  <div class="alert alert-success">
    welcome to our website
  </div>
@endif

@if(session('wrongCredentials'))
    <div class="alert alert-danger">
        user or password was wrong
    </div>
@endif


@if(session('registered'))
  <div class='alert alert-success'>
  Your registration was successful
  </div>
@endif 


@if (session('hasVerifyEmail'))
<div class="alert alert-danger">
  Please confirm your email, We have sent you an email with a link!
  <a href=<?php echo 'http://'.$_SERVER['HTTP_HOST']. '/auth/email/send-verification'?> > Click!</a>
</div>
@endif

@if(session('verificationEmailSent')) 
  <div class='alert alert-success'>
    Check Your Email Box {{ auth()->user()->email }}
  </div>
@endif


@if(session('emailHasVerified'))
  <div class="alert alert-success">
  Your account has been successfully authenticated
  </div>
@endif

@if(session('resetLinkSent'))
  <div class="alert alert-success">
  Password recovery email sent successfully
  </div>
@endif


@if(session('resetLinkfailed'))
  <div class="alert alert-danger">
  Failed to send password recovery email
  </div>
@endif 

@if(session('cantChangePassword'))
  <div class="alert alert-danger">
  There was a problem changing the password
  </div>
@endif 

@if(session('PasswordChange'))
  <div class="alert alert-success">
    Password changed successfully
  </div>
@endif 

@if(session('changePasswordFailed'))
  <div class="alert alert-danger">
  Old Password Doesn't match!   
  </div>
@endif 

@if(session('changePassword'))
  <div class="alert alert-success">
  Password changed successfully
  </div>
@endif 

@if(session("CreatePortal"))
  <div class="alert alert-success">
    <p style="color:red">    این توکن را در  ذخیره کنید چون تنها یک بار نمایش داده میشود</p>
    {{ session("CreatePortal") }}
  </div>
@endif 
