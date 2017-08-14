<!DOCTYPE html>
<html>
<head>
  <title></title>
  <!-- CSS PESONALIZADO -->
  <link href="../css/estiloAurelis.css" rel="stylesheet">
</head>
<body>
  <?php 

    // MODAL PARA MOSTRAR INFORMACIÓN DEL EQUIPO DESARROLLADOR EN EL FOOTER
    include 'modalEquipoD.php';
  ?>
   <!-- FOOTER DE LA PÁGINA -->
    <footer class="navbar navbar-fixed-bottom navbar-inverse">
      <div class="footerDivider"></div>
        <p align="center" style="color: white;">Copyright ©
        <a target="_blank" ng-href="http://www.techsoluxy.com" class="text-right">Techsoluxy, C.A.</a>
          Aurelis - 2017. Todos los derechos reservados.
        <a target="_blank" href="humans.txt" data-toggle="modal" data-target="#equipoD" >Equipo desarrollador.</a>
        </p>
      <div class="footerDivider"></div>
  </footer>
</body>
</html>

