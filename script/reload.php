
<!DOCTYPE html>
<html>
<head>
	<title></title>
	
	 <link rel="stylesheet" type="text/css" href="../css/sweetalert2.css">
	 <script src="../js/sweetalert2.js"></script> 
</head>
<body>

</body>
</html>
<?php 
$mensaje=htmlentities($_GET['msj']);
$tl=htmlentities($_GET['tl']);
$tp=htmlentities($_GET['tp']);
$p=htmlentities($_GET['p']);



switch ($p) {
	case 'im':  //impresion
		echo " <script> 	


		  swal({
		 title: '$tl',
			text: '$mensaje',
  timer: 5000,
  onOpen: function () {
    swal.showLoading()
  }
}).then(function () {
	
},
  // handling the promise rejection
  function (dismiss) {
   
      location.href='';
    
  }
);
		  </script>";
		break;
	case 'open': //

	echo " <script> swal({
			title: '$tl',
			text: '$mensaje',
			type: '$tp',
			confirmButtonColor: '#3085d6',
			confirmButtonText: 'Ok'
		  }).then(function () {
			location.href='../index.php';
		  }); </script>";
		
		break;
	case 'open1': //

		echo " <script> swal({
			title: '$tl',
			text: '$mensaje',
			type: '$tp',
			confirmButtonColor: '#3085d6',
			confirmButtonText: 'Ok'
		  }).then(function () {
			location.href='../index.php';
		  }); </script>";

		break;
		case 'close': //no ha seleccionado producto
	echo " <script> 	swal({
			title: '$tl',
			text: '$mensaje',
			type: '$tp',
			confirmButtonColor: '#3085d6',
			confirmButtonText: 'Ok'
		  }).then(function () {
			location.href='../login.php';
		  }); </script>";
		
		break;
	case 'error': //no ha seleccionado una cantidad
	echo " <script> 	swal({
			title: '$tl',
			text: '$mensaje',
			type: '$tp',
			confirmButtonColor: '#3085d6',
			confirmButtonText: 'Ok'
		  }).then(function () {
			location.href='../login.php';
		  }); </script>";
		
		break;
	case 'email': //no ha seleccionado una cantidad
		echo " <script> 	swal({
			title: '$tl',
			text: '$mensaje',
			type: '$tp',
			confirmButtonColor: '#3085d6',
			confirmButtonText: 'Ok'
		  }).then(function () {
			location.href='../index.php';
		  }); </script>";

		break;
		case 'pdf': //reporte pdf
	echo " <script> 	swal({
			title: '$tl',
			text: '$mensaje',
			type: '$tp',
			confirmButtonColor: '#3085d6',
			confirmButtonText: 'Ok'
		  }).then(function () {
			location.href='../prueba.php';
		  }); </script>";
		
		break;
		case 'sec': //cancelar venta
	echo " <script> 	swal({
			title: '$tl',
			text: '$mensaje',
			type: '$tp',
			confirmButtonColor: '#3085d6',
			confirmButtonText: 'Ok'
		  }).then(function () {
			location.href='../secret/inicio.php';
		  }); </script>";
		
		break;
		case 'errorasp': //no ha seleccionado una cantidad
	echo " <script> 	swal({
			title: '$tl',
			text: '$mensaje',
			type: '$tp',
			confirmButtonColor: '#3085d6',
			confirmButtonText: 'Ok'
		  }).then(function () {
			location.href='../index.php';
		  }); </script>";
		
		break;
	case 'sms': //no ha seleccionado una cantidad
		echo " <script> 	swal({
			title: '$tl',
			text: '$mensaje',
			type: '$tp',
			confirmButtonColor: '#3085d6',
			confirmButtonText: 'Ok'
		  }).then(function () {
			location.href='../index.php';
		  }); </script>";

		break;
	
}









 ?>