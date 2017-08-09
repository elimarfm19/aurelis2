<?php 

  // MODAL PARA MOSTRAR INFORMACIÓN DEL EQUIPO DESARROLLADOR EN EL FOOTER
  include 'modalEquipoD.php';
?>
  // FOOTER DE LA PÁGINA
    <footer class="navbar navbar-fixed-bottom navbar-inverse">
      <div class="footerDivider"></div>
        <p align="center" style="color: white;">Copyright ©
        <a target="_blank" ng-href="http://www.techsoluxy.com" class="text-right">Techsoluxy, C.A.</a>
          Aurelis - 2017. Todos los derechos reservados.
        <a target="_blank" href="humans.txt" data-toggle="modal" data-target="#equipoD" >Equipo desarrollador.</a>
        </p>
      <div class="footerDivider"></div>
  </footer>

<!-- CSS PARA LINEAS DE DIVISION PARA EL FOOTER -->
 <style type="text/css">
    .footerDivider {
        height: 0 !important;
        width: 100% !important;
        background-color: transparent;
        border: none;
        border-top: 1px solid rgba(0,0,0,0.9);
        border-bottom: 1px solid rgba(255,255,255,0.08);
        margin: 6px auto !important;
    }
</style>