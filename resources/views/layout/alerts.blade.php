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

@if(session('updateProduct'))
  <div  class="alert alert-success" dir="rtl">
    بروزرسانی محصول با موفقیت ا نجام شد
  </div>
@endif

@if (session("deleteProduct"))
  <div class="alert alert-danger" dir="rtl">
    محصول مورد نظر حذف شد
  </div>
@endif

@if(session("addProduct"))
  <div class="alert alert-success" dir="rtl">
    یک محصول با موفقیت اضافه شد 
  </div>
@endif

