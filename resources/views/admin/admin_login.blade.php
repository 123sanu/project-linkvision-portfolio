
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="Pickled Inkling">
        <link rel="shortcut icon" href="img/favicon.png">

        <title>Admin - Login</title>

        <!-- Bootstrap core CSS -->
		<link rel="icon" type="image/png" sizes="32x32" href="{{URL::to('public/home/resources/img/favicon-32x32.png')}}">
        <link href="{{URL::to('public/adminAsset/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
        <link href="{{URL::to('public/adminAsset/css/bootstrap-reset.css')}}" rel="stylesheet">
        <!--external css-->
        <link href="{{URL::to('public/adminAsset/assets/font-awesome/css/font-awesome.css')}}" rel="stylesheet" type="text/css">
        <!-- Custom styles for this template -->
        <link href="{{URL::to('public/adminAsset/css/style.css')}}" rel="stylesheet">
        <link href="{{URL::to('public/adminAsset/css/style-responsive.css')}}" rel="stylesheet" />
        <style type="text/css">


            .abc{	
                font-size:30px;   
                text-align:center; 
                font-family: 'Sigmar One', cursive;         
                font-weight: 700;
                color:#f58b3c;
                text-shadow: 0px 2px 1px rgba(0, 0, 0, 0.5);
                letter-spacing:2px;
                margin-bottom:20px;
                margin-top:20px;

            }



        </style>

    </head>

    <body class="login-body">

        <div class="container">


            {!! Form::open(['url' => 'auth-check','method'=>'post', 'class' => 'form-signin']) !!}

            <h2 class="form-signin-heading abc">Admin Login<br>

                <small class="abc" style="color:red;font-size:14px;margin-left: inherit;">
                    <?php
                    $exceptio = Session::get('exception');
                    if ($exceptio) {
                        echo $exceptio;
                        Session::put('exception', '');
                    }
                    ?>
                </small>
                <small class="abc" style="color:#fff;font-size:14px;margin-left: inherit;">
                    <?php
                    $confirm = Session::get('confirm');
                    if ($confirm) {
                        echo $confirm;
                        Session::put('confirm', '');
                    }
                    ?>
                </small>



            </h2>

            <div class="login-wrap">
                <input type="text" class="form-control" placeholder="Email ID" name="email" >
                <input type="password" class="form-control" placeholder="Password" name="password">
                <label class="checkbox">
                    <input type="checkbox" value="remember-me"> Remember me

                </label>
                <button class="btn btn-lg btn-login btn-block" type="submit">Log In</button>

                <div class="registration">
                    <!-- Don't have an account yet?
                     <a class="" href="registration.html">
                         Create an account
                     </a>-->
                </div>
            </div>
            {!! Form::close() !!}
        </div>



    </body>
</html>

