<!DOCTYPE html>

<html lang="es">
<!--================================================================================
	 Materialize - Material Design 

	
	
================================================================================ -->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-tap-highlight" content="no">
    <meta name="description" content="Materialize is a Material Design Admin Template,It&#39;s modern, responsive and based on Material Design by Google. ">
    <meta name="keywords" content="materialize, admin template, dashboard template, flat admin template, responsive admin template,">
    <title>Inicio</title>

    <!-- Favicons-->
    <link rel="icon" href="img/ita.png" sizes="32x32">
    <!-- Favicons-->
    <link rel="apple-touch-icon-precomposed" href="http://demo.geekslabs.com/materialize-v1.0/images/favicon/apple-touch-icon-152x152.png">
    <!-- For iPhone -->
    <meta name="msapplication-TileColor" content="#00bcd4">
    <meta name="msapplication-TileImage" content="images/favicon/mstile-144x144.png">
    <!-- For Windows Phone -->


    <!-- CORE CSS-->
      
    <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/font-awesome-4.7.0/css/font-awesome.css">
    <link href="css/style.min.css" type="text/css" rel="stylesheet" media="screen,projection">
    <!-- Custome CSS-->
    <link href="css/custom.min.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="css/page-center.css" type="text/css" rel="stylesheet" media="screen,projection">

    <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
    
    <link href="css/perfect-scrollbar.css" type="text/css" rel="stylesheet" media="screen,projection">

</head>

<style type="text/css">
 body {
    display: flex;
    min-height: 100vh;
    flex-direction: column;
    height: 100%;
  }
  html {
    display: table;
    margin: auto;
}
body {
    display: table-cell;
    vertical-align: middle;
    background: url('img/fondo.jpg');
    background-size: cover;
    background-attachment: fixed;
}
.margin {
  margin: 0 !important;
}

  main {
    flex: 1 0 auto;
  }

</style>
<body >

    <!-- Start Page Loading -->

    <!-- End Page Loading -->


<br>
<br>
<br>
    <div id="login-page" class="row">
        <div class="col s12 z-depth-4 card-panel">
            <form action="users.php" class="login-form" method="POST" >
                <div class="row">
                    <div class="input-field col s12 center">
                        <img src="img/logo.png" width="100" class="circle responsive-img valign profile-image-login z-depth-5">
                        <p class="center login-form-text">Inicio de Sesion</p>
                    </div>
                </div>
                <div class="row margin">
                    <div class="input-field col s12">
                        
                        <i class="fa fa-user-circle prefix" aria-hidden="true"></i>
                        <input id="username" type="text" name="usuario" autofocus>
                        <label for="username" class="center-align">Usuario</label>
                    </div>
                </div>
                <div class="row margin">
                    <div class="input-field col s12">
                         
                        <i class="fa fa-lock prefix" aria-hidden="true"></i>
                        <input id="password" type="password" name="pass">
                        <label for="password" >Password</label>
                    </div>
                </div>
                
                <div class="row">
                    <div class="input-field col s12">
                        
                        <input type="submit" value="Iniciar" class="btn waves-effect waves-light col s12">
                    </div>
                </div>
               

            </form>
        </div>
    </div>



    <!-- ================================================
    Scripts
    ================================================ -->

    <!-- jQuery Library -->
    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    <!--materialize js-->
    <script type="text/javascript" src="js/materialize.js"></script>
   
    <script type="text/javascript" src="js/perfect-scrollbar.min.js"></script>

    <!--plugins.js - Some Specific JS codes for Plugin Settings-->
    <script type="text/javascript" src="js/plugins.min.js"></script>
    <!--custom-script.js - Add your own theme custom JS-->
    <script type="text/javascript" src="js/custom-script.js"></script>



    <div class="hiddendiv common"></div>
    
   


</body>

</html>