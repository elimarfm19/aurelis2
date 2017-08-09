<!-- **************************************MENÚ SUPERIOR (COMPLETO)************************************* -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Aurelis</a>
            </div>

            <!-- **************************************MENÚ SUPERIOR (LADO DERECHO)************************************* -->
            <ul class="nav navbar-right top-nav">
                <!-- **************************************MENSAJES (MENÚ SUPERIOR)************************************* -->
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu message-dropdown">
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>1</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>2</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-footer">
                            <a href="#">Read All New Messages</a>
                        </li>
                    </ul>
                </li>
                <!-- **************************************FIN MENSAJES (MENÚ SUPERIOR)************************************* -->

                <!-- **************************************ALERTA (MENÚ SUPERIOR)************************************* -->
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu alert-dropdown">
                        <li>
                            <a href="#">Alert Name <span class="label label-default">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-primary">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-success">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-info">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-warning">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-danger">Alert Badge</span></a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">View All</a>
                        </li>
                    </ul>
                </li>
                <!-- **************************************FIN ALERTA (MENÚ SUPERIOR)************************************* -->

                <!-- **************************************USUARIO (MENÚ SUPERIOR)************************************* -->
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="../img/user.png" alt="UserImage" style="margin-top: -8px; width: 30px;height: 30px;">
                    <!-- <i class="fa fa-user"></i> --> Administrador <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="../php/logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
                <!-- **************************************FIN USUARIO (MENÚ SUPERIOR)************************************* -->
            </ul>
            <!-- **************************************FIN MENÚ SUPERIOR (LADO DERECHO)************************************* -->

        <!-- **************************************MENÚ VERTICAL************************************* -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="col-md-12" style="background-color: rgb(38,50,56); background-size: 100% 100%; background-position: center; pointer-events:none;">
                        <a target="_blank" ng-href="http://www.techsoluxy.com" ><img src="../img/imgReporte.png" alt="software a medida" class="responsive-img center-box"></a>
                    </li>
                    <li class="NavLateralDivider"></li>
                    <li class="active">
                        <a href="aurelis.php"><i class="fa fa-fw fa-dashboard"></i> Inicio</a>
                    </li>
                    <li class="NavLateralDivider"></li>
                    <li>
                        <a href="clientes.php"><i class="fa fa-fw fa-bar-chart-o"></i> Clientes</a>
                    </li>
                    <li class="NavLateralDivider"></li>
                    <li>
                        <a href="tables.html"><i class="fa fa-fw fa-table"></i> 3</a>
                    </li>
                    <li class="NavLateralDivider"></li>
                    <li>
                        <a href="forms.html"><i class="fa fa-fw fa-edit"></i> 4</a>
                    </li>
                    <li class="NavLateralDivider"></li>
                    <li>
                        <a href="bootstrap-elements.html"><i class="fa fa-fw fa-desktop"></i>5</a>
                    </li>
                    <li class="NavLateralDivider"></li>
                    <li>
                        <a href="bootstrap-grid.html"><i class="fa fa-fw fa-wrench"></i> 6</a>
                    </li>
                    <li class="NavLateralDivider"></li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i> 7 <i class="fa fa-fw fa-caret-down"></i></a>
                        <!-- **************************************SUBMENÚ************************************* -->
                        <ul id="demo" class="collapse">
                            <li>
                                <a href="#">7.1</a>
                            </li>
                            <li class="NavLateralDivider"></li>
                            <li>
                                <a href="#">7.2</a>
                            </li>
                        </ul>
                        <!-- **************************************FIN SUBMENÚ************************************* -->
                    </li>
                    <li class="NavLateralDivider"></li>
                </ul>
            </div>
        <!-- **************************************FIN MENÚ VERTICAL************************************* -->
        </nav>
    <!-- **************************************FIN MENÚ SUPERIOR (COMPLETO)************************************* -->

<style type="text/css">
    /* CSS PARA LINEAS DE DIVISION EN EL MENU VERTICAL */
        .NavLateralDivider {
            height: 0 !important;
            width: 100% !important;
            background-color: transparent;
            border: none;
            border-top: 1px solid rgba(0,0,0,0.9);
            border-bottom: 1px solid rgba(255,255,255,0.08);
            margin: 0 auto !important;
        }
</style>