<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Login</title>

    @include('partials/css')

</head>

<body class="animsition">
    <div class="jumbotron big-banner" style="height: 800px;">
        
           
                <div class="container">
                    <div class="login-wrap">
                        <div class="login-content">
                            <div class="login-logo">
                                <a href="#">
                        <img src="{{ asset('admin/images/icon/logo.png')}}" alt="CoolAdmin">
                        </a>
                    </div>
                    <div class="login-form">
                        <form action="{{route('register')}}" method="post">
                            @csrf
                            <div class="form-group">
                                <label>Nama</label>
                                <input class="au-input au-input--full" type="text" name="name" placeholder="Nama">
                            </div>
                            <div class="form-group">
                                <label>Email Address</label>
                                <input class="au-input au-input--full" type="email" name="email" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input class="au-input au-input--full" type="password" name="password" placeholder="Password">
                            </div>
                            <div class="form-group">
                                <label>Password Confirmation</label>
                                <input class="au-input au-input--full" type="password" name="password_confirmation" placeholder="Password">
                            </div>
                            <div class="login-checkbox">
                                <label>
                                    <input type="checkbox" name="aggree">Agree the terms and policy
                                </label>
                            </div>
                            <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">register</button>
                           
                        </form>
                        <div class="register-link">
                            <p>
                                Already have account?
                                <a href="{{route('login')}}">Login</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
            
        

    

    @include('partials/script');

</body>

</html>
<!-- end document-->