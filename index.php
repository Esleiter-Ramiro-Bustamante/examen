
<!DOCTYPE html>
<html lang="es">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-tap-highlight" content="no">
    <meta name="description" content="Materialize is a Material Design Admin Template,It&#39;s modern, responsive and based on Material Design by Google. ">
    <meta name="keywords" content="materialize, admin template, dashboard template, flat admin template, responsive admin template,">

    
    </style>
    <title>Hostland</title>

    <!-- Favicons-->
    <link rel="icon" href="img/logo.png" sizes="32x32">
    <!-- Favicons-->
    <link rel="apple-touch-icon-precomposed" href="http://demo.geekslabs.com/materialize-v1.0/images/favicon/apple-touch-icon-152x152.png">
    <!-- For iPhone -->
    <meta name="msapplication-TileColor" content="#00bcd4">
    <meta name="msapplication-TileImage" content="images/favicon/mstile-144x144.png">
    <!-- For Windows Phone -->


    <!-- CORE CSS-->
      
    <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/font-awesome-4.7.0/css/font-awesome.css">
    
</head>
<script src="../js/sweetalert2.js"></script> 
 <link rel="stylesheet" type="text/css" href="../css/sweetalert2.css">
<body>
<nav>
    <div class="nav-wrapper blue">
      <a href="#" class="brand-logo">Hostland Bienvenido <?php session_start();
                                                        if (isset($_SESSION['u_usuario'])) {
                                                          echo ' ' . $_SESSION['u_usuario'];

                                                        } else {
                                                          header("Location:login.php");
                                                        } ?> </a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="closesesion"><i class="fa fa-power-off fa-2x white-text" title="salir"></i></a></li>
       
      </ul>
    </div>
  </nav>

 
<?php 
  require ('bd.php');
  

   
    ////////////////////////////////////////////////////////////////////////////
$fc = date("Y-m-d H:i:s");

//////////////////////////////////////////////////////////////////////////////////

$tc = 0;
$ip = getenv('REMOTE_ADDR');

//********************************************************************* */
$r = $_SESSION['u_usuario'];
$obj = new bd();
$conexion = $obj->conexion();
$sql = mysqli_query($conexion, "SELECT id_usuario FROM login WHERE usuario='$r'");
while ($mostrar = mysqli_fetch_row($sql)) {
  $is = $mostrar[0];


}
$ids = $is;


//********************************************************************** */

$c = new bd();
$conexion = $c->conexion();
$conexion->query("INSERT INTO acceso(fecha,tipo_acceso,ip,id_usuario) 
VALUES ('$fc','$tc','$ip','$ids')");
mysqli_close($conexion);   



              
//*********************************************************************** */

    ?> 
   

<center> <h3 >LISTA ACCESOS <br>
   
</h3> </center>
  <div class="container">
    <div class="row">
    <div class="col s12">
   
    
   
    
    
     
      
       <table class="highlight responsive-table">
       
        <thead>
          <tr>
           <th>ID Acesso</th>
              <th>Fecha</th>
              <th>Tipo Acceso</th>
              <th>IP</th>
              <th>Usuario</th>
          </tr>
        </thead>
  <?php 
  require_once "metodos/metodoUs.php";
  $obj = new metodoUs();


  $sql = "SELECT * FROM acceso";
  $datos = $obj->mostrarReg ($sql);

  foreach ($datos as $key) {
    ?>
        <tbody class="centered">
          <tr>
            <th><?php echo $key['id_acceso']; ?></th>
             <th><?php echo $key['fecha']; ?></th>
              <th><?php echo $key['tipo_acceso']; ?></th>
             <th><?php echo $key['ip']; ?></th>
            <th><?php echo $key['id_usuario']; ?></th>
          </tr>
          
        </tbody>
          <?php 
        }
        ?>
      </table>
            
    </div>
    </div>
    
    </div>





 <script type="text/javascript" src="../js/jquery-3.2.1.min.js"></script>
    <!--materialize js-->
    <script type="text/javascript" src="../js/materialize.js"></script>  

    <script>
       
       // Initialize collapse button
  $(".button-collapse").sideNav();
  // Initialize collapsible (uncomment the line below if you use the dropdown variation)
  //$('.collapsible').collapsible();
   </script>

  
</body>
</html>