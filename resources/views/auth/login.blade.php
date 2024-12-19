@extends("frontend.master")

@section("title", "Log In - ".config("app.name"))
@section("content")
<section class="login p-0 py-5">
	<div class="wm-mini-header">
        <span class="wm-blue-transparent"></span>
         <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="wm-mini-title">
                           <h1>Profile Login</h1> 
                    </div>
                  
                </div>
            </div>
        </div>    
    </div>
    <div class="wm-main-content">

        <!--// Main Section \\-->
        <div class="wm-main-section">
            <div class="container">
                <div class="row">
                 
                    <div class="col-md-12">
                        <div class="wm-student-settings-info">							
                        
                            <div class="wm-student-dashboard-form wm-student-dashboard">
                                
                                <div class="wm-full-title ">
                                    <h2>Login</h2>
                                </div>
                                    <div class="login-content">
                                        @if ($errors->any())
                                        <div class="alert alert-danger rounded-0">
                                        @foreach ($errors->all() as $error)
                                            <p>{{ $error }}</p>
                                        @endforeach
                                        </div>
                                        @endif
                                        <form  action="{{ route("auth.login") }}" class="sign-form widget-form" method="POST">
                                            @csrf
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Email or Username*" name="email_or_username" value="{{ old("email_or_username") }}"/>
                                            </div>
                                            <div class="form-group">
                                                <input type="password" class="form-control" placeholder="Password*" name="password"/>
                                            </div>
                                            {{-- <div class="sign-controls form-group">
                                                <div class="custom-control custom-checkbox">
                                                <input type="checkbox" name="remember" value="1" class="custom-control-input" id="rememberMe">
                                                    <label class="custom-control-label" for="rememberMe">Remember Me</label>
                                                </div>
                                            </div> --}}
                                            <div class="form-group">
                                                <input type="submit" class="btn-custom">
                                            Don't have an account? <a href="{{ route("auth.signup") }}" class="btn-link">Create One</a>
                                            </div>
                                        
                                        </form>
                                    </div>
                              
                            </div>
                        </div>
                    </div>					
                </div>
            </div>
        </div>
        <!--// Main Section \\-->

    </div>
      <!--// Mini Header \\-->

    <!--// Main Content \\-->
   

    </div>
    <!--// Main Content \\-->
      
    </div>
</section>
@endsection
