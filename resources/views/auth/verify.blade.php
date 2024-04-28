<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Password Reset</div> <br>
                  <div class="card-body">
                    <h3> If you've lost your password or wish to reset it, click button below to get started. If you did not 
                        request a password reset, you can safely ignored this email. Only a person with access to your 
                        email can reset your account password. </h3>
                    <br>
                   @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                           {{ __(' Forgot your Password? A fresh verification link has been sent to your email address.') }}
                       </div>
                   @endif
                   <a href="{{ url('/reset-password/'.$token) }}">  <button class="btn btn-primary btn-lg"> Reset Password </button></a>
               </div>
           </div>
       </div>
   </div>
</div>
