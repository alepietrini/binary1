<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        

        <link rel="icon" href="<?= base_url('assets/librerias/images/favicon.png') ?>" type="image/gif">

        <link href="<?= base_url('assets/librerias/css/bootstrap.min.css') ?>" rel="stylesheet" type="text/css"/>
        <link href="<?= base_url('assets/librerias/css/bootstrap-theme.css') ?>" rel="stylesheet" type="text/css"/>
        <link href="<?= base_url('assets/librerias/css/select2.css') ?>"  rel="stylesheet" type="text/css"/>
        <link href="http://netdna.bootstrapcdn.com/font-awesome/3.0.2/css/font-awesome.css" rel="stylesheet">
        <link href="<?= base_url('assets/librerias/css/style-is-loading.css') ?>" rel="stylesheet" type="text/css"/>
        <link href="<?= base_url('assets/librerias/css/bootstrap-datepicker.min.css') ?>" rel="stylesheet" type="text/css"/>
        <link href="<?= base_url('assets/librerias/css/bootstrap-datepicker3.min.css') ?>" rel="stylesheet" type="text/css"/>
        
        <link href="<?= base_url('assets/librerias/css/prettify.css') ?>" rel="stylesheet" type="text/css"/> 
        <link href="<?= base_url('assets/librerias/css/jquery.notific8.min.css') ?>" rel="stylesheet" type="text/css"/>
        
        <!--<link href="<?= base_url('assets/librerias/css/dataTables.bootstrap.css') ?>" rel="stylesheet" type="text/css"/>-->
         <link href="https://cdn.datatables.net/1.10.9/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css"/> 
        <link href="https://cdn.datatables.net/tabletools/2.2.4/css/dataTables.tableTools.min.css" rel="stylesheet" type="text/css"/>
        <style type="text/css">
            
            .form-control[disabled], .form-control[readonly], fieldset[disabled] .form-control {
                background-color: #fff;
                opacity: 1;
            }
            
            .detalles .nav-tabs > li.active > a, .nav-tabs > li.active > a:focus, .nav-tabs > li.active > a:hover {
            /*border-color: #fff #fff transparent;*/
            color: #35aa47;
            border-top: green 3px solid;
            border-radius: 0;
            }
            .navbar-default {
                background-image: none;
                background-repeat: no-repeat;
                box-shadow: none;
                background-color:inherit;
                border: none;
            }
            .navbar-default .navbar-nav > li > a {
                color: #527A00;                
                font-size: 16px;
            }
            
            .navbar-default .navbar-nav > .open > a, .navbar-default .navbar-nav > .active > a {
                background-image:none;
                background-repeat: no-repeat;
                box-shadow: none;
            }
            .navbar-default .navbar-nav > .open > a, .navbar-default .navbar-nav > .open > a:focus, .navbar-default .navbar-nav > .open > a:hover {
                background-color: #fff;
                color: #006600;
                font-weight: 700;
            }
            
            .navbar-default .navbar-nav li>a:focus, .navbar-default .navbar-nav li>a:hover
            {
                background-color: #fff;
                color: #006600;
                font-weight: 700;
            }
            
            .dropdown-menu li>a:focus, .dropdown-menu li>a:hover
            {
                background-image: none;
                background-color: #fff;
                color: #006600;
                font-weight: 700;
            }
            
            
            .navbar-default .navbar-nav > .active > a, .navbar-default .navbar-nav > .active > a:focus, .navbar-default .navbar-nav > .active > a:hover {
                background-color: #fff;
                color: #006600;
                font-weight: 700;
            }
            .image-itca-vector{
                background-image:url("<?= base_url('assets/librerias/images/fondo-academos.jpg') ?>");
                background-position: center top;
                background-size: 1170px 700px;
                max-width: 1170px; 
                height: 700px; 
                margin: 0 auto;
            }
/*            .row{
                margin: 0;
            }*/
             #contenido{                
                max-width: 1170px;
                margin: 0 auto;
            }            
            nav{
                max-width: 1300px;
                margin: 0 auto;
            } 
            .shadow-gris{
                
               box-shadow: 3px 3px 12px #333;
            }
            
         
            div.opciones a{
                display: block;
                line-height: 1.5 em;
            }
            input,textarea{
                text-transform:uppercase;
            }  
            input[type=email]{
                text-transform:lowercase !important;
            }

            .pull-right *
            {
                display: inline-block;
            }
            
            span.required{
                color: #a94442;
                font-weight: 700;
            }
            
            .tab-pane {
                margin: 10px;
            }
            
            
            /*TRABAJO CON FORMULARIOA*/
            
            /*para las secciones de los formularios*/
            .form-section {
                border-bottom: 1px solid #298A08;
                margin: 30px 0 25px;
                padding-bottom: 5px;                
                font-weight: 500;
                color:#38610B;
            }
            /*para q los widgets no sean tan grandes*/
            
          
           
            span.input-group-addon.left{
                border-right: 0px;
                color: grey;
            }
            span.input-group-addon.left + input{
                border-left: 0px;
            }        

            label {
                font-weight: 300;
            }
            .progress{
                height: 5px;
            }


            form li a {
                background-color: #fff;  
            }
            .nav-pills > li.active > a, .nav-pills > li.active > a:focus, .nav-pills > li.active > a:hover {
                background-color: white;
                color: black;
            }
            .step .number {
                background-color: #eee;
                border-radius: 50% !important;
                display: inline-block;
                font-size: 16px;
                font-weight: 300;
                height: 30px;
                margin-right: 10px;
                padding: 5px;
                text-align: center !important;
                width: 30px;
            }

            .active .step .number {
                background-color: #35aa47;
                color: #fff;
            }
            .done .step .number {
                background-color: #f2ae43;
                color: #fff;
            }
            .done .step span.glyphicon-ok {            
                color: #f2ae43;
                display: inline-block !important;
            }

            
            .confirmation-tab-value{
                text-transform: uppercase;
            }
            .confirmation-tab-label{
                text-transform: none !important;
            }
            .jquery-notific8-notification{
                border-radius: 10px 10px 10px 10px
            }
            
            /*datatable styles*/   
        #resultadoBusqueda_wrapper>div:first-child {
            /*background-color: #f5f5f5;*/
            border-bottom: 1px solid transparent;
            border-top-left-radius: 3px;
            border-top-right-radius: 3px;
            padding: 5px 5px;
            /*display: none;*/
        }
   
        #resultadoBusqueda_wrapper>div:last-child {
            background-color: #f5f5f5;
            border-bottom: 1px solid transparent;
            border-top-left-radius: 3px;
            border-top-right-radius: 3px;
            padding: 5px 5px;
        }
        .pagination > li > a, .pagination > li > span {
    background-color: #f5f5f5;
    border: 1px solid #ddd;
    
}

*::after, *::before {
    box-sizing: border-box;
}
*::after, *::before {
    box-sizing: border-box;
}
.pagination > li:first-child > a, .pagination > li:first-child > span {
    border-bottom-left-radius: 4px;
    border-top-left-radius: 4px;
    margin-left: 0;
}
.pagination > .disabled > a, .pagination > .disabled > a:focus, .pagination > .disabled > a:hover, .pagination > .disabled > span, .pagination > .disabled > span:focus, .pagination > .disabled > span:hover {
    background-color: #f5f5f5;
}
/*.pagination > li > a:focus, .pagination > li > a:hover, .pagination > li > span:focus, .pagination > li > span:hover {
    background-color: #0B3B0B;
    color: #fff;
    
}*/
        
        .pagination > .active > a, .pagination > .active > a:focus, .pagination > .active > a:hover, .pagination > .active > span, .pagination > .active > span:focus, .pagination > .active > span:hover {
            background-color: #3e8f3e;
            border-color: #3e8f3e;
            color: #fff;
            cursor: default;
            z-index: 2;
        }
       .form-control:not(textarea) {
           height: 25px;
       }
          
       div.checkbox{
           margin-top:21px ;
       }
       
    
    .bs-callout {
        -moz-border-bottom-colors: none;
        -moz-border-left-colors: none;
        -moz-border-right-colors: none;
        -moz-border-top-colors: none;
        border-color: #eee;
        border-image: none;
        border-radius: 3px;
        border-style: solid;
        border-width: 1px 1px 1px 5px;
        margin: 20px 0;
        padding: 10px;
        overflow: hidden;
    }
    .bs-callout-green {
    border-left-color: #002E00 !important;
    }
    .bs-callout-green span.confirmation-tab-label {
    color: #002E00;
    }
    .bs-callout-green h4 {
        margin-bottom: 5px;
        margin-top: 0;
        color:#002E00;
    }
    
    .bs-callout-orange {
    border-left-color: #298A08 !important;
    }
    .bs-callout-orange span.confirmation-tab-label {
    color: #f0ad4e;
    }
    .bs-callout-orange h4 {
        margin-bottom: 5px;
        margin-top: 0;
        color:#f0ad4e;
    }
    
    .planes-table > thead > tr > th {
    border-bottom: 2px solid #B18904;
    vertical-align: bottom;
    }
    
    /*GESTION DE ROLES CSS*/
    .list-group-item.active, .list-group-item.active:hover, .list-group-item.active:focus {
        background-image: linear-gradient(to bottom, #088A08 0%, #0B610B 100%);
    }
    .list-group-item {
    border: 1px solid #fff;
    }
            /*  bhoechie tab */
            div.bhoechie-tab-container{
              z-index: 10;
              background-color: #ffffff;
              padding: 0 !important;
              border-radius: 4px;
              -moz-border-radius: 4px;
              border:1px solid #ddd;
              margin-top: 20px;
              margin-left: 15px;
              /*-webkit-box-shadow: 0 6px 12px rgba(0,0,0,.175);*/
              /*box-shadow: 0 6px 12px rgba(0,0,0,.175);*/
              /*-moz-box-shadow: 0 6px 12px rgba(0,0,0,.175);*/
              background-clip: padding-box;
              opacity: 0.97;
              filter: alpha(opacity=97);
            }
            div.bhoechie-tab-menu{
              padding-right: 0;
              padding-left: 0;
              padding-bottom: 0;
            }
            div.bhoechie-tab-menu div.list-group{
              margin-bottom: 0;
            }
            div.bhoechie-tab-menu div.list-group>a{
              margin-bottom: 0;
            }
            div.bhoechie-tab-menu div.list-group>a .glyphicon,
            div.bhoechie-tab-menu div.list-group>a .fa {
              color: #0B610B;
            }
            div.bhoechie-tab-menu div.list-group>a:first-child{
              border-top-right-radius: 0;
              -moz-border-top-right-radius: 0;
            }
            div.bhoechie-tab-menu div.list-group>a:last-child{
              border-bottom-right-radius: 0;
              -moz-border-bottom-right-radius: 0;
            }
            div.bhoechie-tab-menu div.list-group>a.active,
            div.bhoechie-tab-menu div.list-group>a.active .glyphicon,
            div.bhoechie-tab-menu div.list-group>a.active .fa{
              background-color: #0B610B;
              background-image: #0B610B;
              color: #ffffff;
            }
            div.bhoechie-tab-menu div.list-group>a.active:after{
              content: '';
              position: absolute;
              left: 100%;
              top: 50%;
              margin-top: -13px;
              border-left: 0;
              border-bottom: 13px solid transparent;
              border-top: 13px solid transparent;
              border-left: 10px solid #0B610B;
            }

            div.bhoechie-tab-content{
              background-color: #ffffff;
              /* border: 1px solid #eeeeee; */
              padding-left: 20px;
              padding-top: 10px;
            }

            div.bhoechie-tab div.bhoechie-tab-content:not(.active){
              display: none;
            }
            
            div.forma-pago input.form-control, div.forma-pago select.form-control{
                padding: 2px 6px !important;
                height: 26px !important;
                font-size: 12px !important;
            }
            
            #reciboCajaModal , #reciboCajaModal .modal-dialog{
                width: 90%;
            }

            textarea
            {
                resize: none;
            }
        </style>

        <script src="<?= base_url('assets/librerias/js/jquery-ui.min.js') ?>" type="text/javascript"></script>
        <script src="<?= base_url('assets/librerias/js/bootstrap.min.js') ?>" type="text/javascript"></script>
        <script src="<?= base_url('assets/librerias/js/jquery.isloading.min.js') ?>" type="text/javascript"></script>
        <script src="<?= base_url('assets/librerias/js/jquery.validate.min.js') ?>" type="text/javascript"></script>
        <script src="<?= base_url('assets/librerias/js/additional-methods.min.js') ?>" type="text/javascript"></script>
        <script src="<?= base_url('assets/librerias/js/idiomas/jqueryValidator/messages_es.js') ?>" type="text/javascript"></script>
        <script src="<?= base_url('assets/librerias/js/idiomas/jqueryValidator/methods_es_CL.min.js') ?>" type="text/javascript"></script>
        <script src="<?= base_url('assets/librerias/js/jquery.mask.min.js') ?>" type="text/javascript"></script>
        <script src="<?= base_url('assets/librerias/js/bootstrap-datepicker.min.js') ?>" type="text/javascript"></script>
        <script src="<?= base_url('assets/librerias/js/idiomas/datepicker/bootstrap-datepicker.es.min.js') ?>"  charset="UTF-8" type="text/javascript"></script>
        <script src="<?= base_url('assets/librerias/js/jquery.bootstrap.wizard.min.js') ?>" type="text/javascript"></script>
        <script src="<?= base_url('assets/librerias/js/prettify.js') ?>" type="text/javascript"></script>
        <script src="<?= base_url('assets/librerias/js/jquery.notific8.min.js') ?>" type="text/javascript"></script>
        <script src="<?= base_url('assets/librerias/js/jquery.dataTables.min.js') ?>" type="text/javascript"></script>
        <script src="<?= base_url('assets/librerias/js/dataTables.bootstrap.js') ?>" type="text/javascript"></script>
<script src='https://www.google.com/recaptcha/api.js?hl=es'></script>

    </head>
    <body>
        
       
<!-- APERTURA DE CAJA -->
<div class="modal fade" tabindex="-1" role="dialog" id="modal_apertura_caja">
  <div class="modal-dialog">

    <div class="modal-content">

      <div class="modal-header">

        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Apertura de Caja</h4>
      </div>

      <div class="modal-body">
          <div class="form-group">
              <label>Ingrese saldo de apertura: </label>
              <input type="text" class="form-control" value="0.00" id="saldo_inicial_modal" style="width: 70px; text-align:center" onblur="verificar_('saldo_inicial_modal')" onclick="click_('saldo_inicial_modal')" onkeyup="entrada_('saldo_inicial_modal')">  
          </div>
         
      </div>


      
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary" id="guardar_apertura_caja" >Guardar</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!-- INGRESO DE EFECTIVO -->
<div class="modal fade" tabindex="-1" role="dialog" id="modal_ingresar_efectivo">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Ingreso de efectivo en caja </h4>
      </div>
      <div class="modal-body">
          <div class="container">
              <lable>Ingrese el monto: </lable><input class="form-control" type="text" value="0.00" id="monto_ingreso_efectivo" style="width: 70px; text-align:center" onblur="verificar_('monto_ingreso_efectivo')" onclick="click_('monto_ingreso_efectivo')" onkeyup="entrada_('monto_ingreso_efectivo')"> <br><br>
               <lable>Descripción del ingreso: </lable><br>
                <textarea id="descripcion_ingreso" style="width: 45%" ></textarea> 
          </div>
         
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary" id="guardar_ingreso_efectivo" >Guardar</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!-- EGRESO DE EFECTIVO -->
<div class="modal fade" tabindex="-1" role="dialog" id="modal_egresar_efectivo">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Egreso a caja </h4>
      </div>
      <div class="modal-body">
          <div class="container">
               <div id="radio_tipo_egreso">
                    <label class="radio-inline">
                      <input type="radio" name="opcion" value="1" id="radio1" >Egreso efectivo
                    </label>
                    <label class="radio-inline">
                      <input type="radio" name="opcion"  value="2" id="radio2">Encerar cheque
                    </label>
                    <label class="radio-inline">
                      <input type="radio" name="opcion"  value="3" id="radio3">Encerar caja
                    </label>
               </div><br>
              
              <div id="contenedor_egreso_efectivo" style="display:none;">
                   <lable>Monto a egresar: </lable><input class="form-control" type="text" value="0.00" id="monto_egreso_efectivo" style="width: 70px; text-align:center"  onblur="verificar_('monto_egreso_efectivo')" onclick="click_('monto_egreso_efectivo')" onkeyup="entrada_('monto_egreso_efectivo')"> <br><br>
                   <lable>Descripción del egreso: </lable><br>
                   <textarea id="descripcion_egreso" style="width: 45%" ></textarea> 
               </div>
          </div>
         
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary" id="guardar_egreso_efectivo" >Guardar</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
       
<!-- aplicar recargos -->
<div class="modal fade" tabindex="-1" role="dialog" id="modal_aplicar_recargos">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Aplicar Recargos</h4>
      </div>
      <div class="modal-body">
          <div class="form-group">
              <label>Ingrese valor de recargo: </label>
              <input type="text" class="form-control" value="0.00" id="tb_valor_recargo" style="width: 70px; text-align:center" onblur="verificar_('tb_valor_recargo')" onclick="click_('tb_valor_recargo')" onkeyup="entrada_('tb_valor_recargo')">  
          </div>
         
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary" id="guardar_aplicar_recargos" >Guardar</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
       
        
        
            <nav class="navbar navbar-default" role="navigation">
<!--                 El logotipo y el icono que despliega el menú se agrupan
                     para mostrarlos mejor en los dispositivos móviles -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse"
                            data-target=".navbar-ex1-collapse">
                        <span class="sr-only">Desplegar navegación</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" style="margin-top: -15px" href="<?php echo base_url(); ?>index.php/index/index"><img src="<?= base_url('assets/librerias/images/logo-academos-menu.png') ?>"></a>
                </div>
<!--
                 Agrupar los enlaces de navegación, los formularios y cualquier
                     otro elemento que se pueda ocultar al minimizar la barra -->
                <div class="collapse navbar-collapse navbar-ex1-collapse">
                    <ul class="nav navbar-nav">
                        <li class="active">                            
                            <a href="<?php echo base_url(); ?>index.php/index/index"><span class="glyphicon glyphicon-home"></span> INICIO</a>
                        </li>

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <span class="glyphicon glyphicon-user" aria-hidden="true"></span>CLIENTES<b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo base_url(); ?>index.php/clientes/clientes/mostrarFormularioGestionBasicaPN">Creación rápida de persona natural</a></li>
                                <li><a href="<?php echo base_url(); ?>index.php/clientes/clientes/mostrarFormularioGestionPN">Creación de estudiantes</a></li>
                                <li><a href="<?php echo base_url(); ?>index.php/clientes/clientes/mostrarFormularioGestionPND">Creación de docentes</a></li>
                                <li class="divider"></li>
                                <li><a href="<?php echo base_url(); ?>index.php/clientes/clientes/mostrarFormularioGestionPJ">Creación de clientes jurídicos</a></li>
                                <li class="divider"></li>
                                <li><a href="<?php echo base_url(); ?>index.php/clientes/clientes/busquedaAvanzada">Buscar cliente</a></li>
                            </ul>
                        </li>         

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <span class=" glyphicon glyphicon-briefcase" aria-hidden="true"></span> ACADÉMICO<b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu">


                                <li><a href="<?php echo base_url(); ?>index.php/academico/academico/configurarSistemaCalificacion">Sistema Calificación</a></li> 
                                <li><a href="<?php echo base_url(); ?>index.php/academico/academico/configurar">Configuración</a></li>
                                <li class="divider"></li>
                                <li><a href="<?php echo base_url(); ?>index.php/academico/academico/crearCarrera">Crear Carrera</a></li>
                                <li><a href="<?php echo base_url(); ?>index.php/academico/academico/editarCarrera">Buscar Carrera</a></li>
                                <li class="divider"></li>
                                <li><a href="<?php echo base_url(); ?>index.php/academico/academico/crearMateria">Crear Materia</a></li>
                                <li><a href="<?php echo base_url(); ?>index.php/academico/academico/editarMateria">Buscar Materia</a></li>
                                <li><a href="<?php echo base_url(); ?>index.php/academico/academico/buscar_doc_materia">Docente-Materia</a></li>
                                <li class="divider"></li>
                                <li><a href="<?php echo base_url(); ?>index.php/academico/academico/buscar_para_inscribir">Inscripción</a></li>
                                <li><a href="<?php echo base_url(); ?>index.php/academico/academico/buscar_para_matricular">Matrícula</a></li>
                                <li><a href="<?php echo base_url(); ?>index.php/academico/academico/buscar_para_convalidar_homologar">Convalidar/Homologar</a></li>
                                <li class="divider"></li> 
                                <li><a href="<?php echo base_url(); ?>index.php/academico/academico/busqueda_docente_para_calificar">Calificar</a></li>                
                            </ul>
                        </li>    

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <span class="glyphicon glyphicon-stats" aria-hidden="true"></span> REPORTES<b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo base_url(); ?>index.php/academico/academico/reporteDocentesPorMaterias">Docentes por Materia</a></li>
                                <li><a href="<?php echo base_url(); ?>index.php/academico/academico/reporteAlumnoAula">Alumnos por carrera</a></li>
                                <li class="divider"></li>
                                <li><a href="<?php echo base_url(); ?>index.php/academico/academico/reporteCuotaNivel">Cuotas Alumnos por Nivel</a></li>
                                <li><a href="<?php echo base_url(); ?>index.php/academico/academico/reportePagosNivel">Rubros Alumnos por Nivel</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Asistencia</a></li>
                                <li><a href="#">Notas detalladas</a></li>
                                <li><a href="#">Notas por período</a></li>
                                <li><a href="#">Notas total carrera</a></li> 
                                <li class="divider"></li> 
                                <li><a href="#">Inscripciones</a></li>
                                <li><a href="#">Matrículas</a></li>  
                                <li class="divider"></li>
                                <li><a href="#">Graduados</a></li>

                            </ul>
                        </li>

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <span class="glyphicon glyphicon-usd" aria-hidden="true"></span>CAJA<b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a data-toggle="modal" data-target="#modal_apertura_caja" href="">Abrir</a></li>
                                <li class="divider"></li>
                                <li><a onclick="estado_caja()" href="#">Estado</a></li>
                                <li><a href="<?php echo base_url(); ?>index.php/facturacion/facturacion/cajas_cerradas">Consultar cajas</a></li>
                                <li><a href="<?php echo base_url(); ?>index.php/facturacion/facturacion/recibos_de_caja">Consultar recibos</a></li>
                                <li><a href="#" data-target="#modal_ingresar_efectivo" data-toggle="modal">Ingresar</a></li>
                                <li><a href="#" data-target="#modal_egresar_efectivo" data-toggle="modal">Egresar</a></li>
                                <li class="divider"></li>
                                <li><a onclick="cerrar_caja()" href="#">Cerrar</a></li>
                            </ul>
                        </li>  

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> FACTURACIÓN<b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo base_url(); ?>index.php/facturacion/rubro/busquedaAvanzadaRubro">Buscar rubros</a></li>
                                <li><a href="<?php echo base_url(); ?>index.php/facturacion/rubro/mostrarFormularioGestionRubro">Configurar rubros</a></li>
                                <li><a href="<?php echo base_url(); ?>index.php/facturacion/rubro/priorizarRubros">Priorizar rubros</a></li>
                                
                                <li class="divider"></li>
                                <li><a href="<?php echo base_url(); ?>index.php/facturacion/cursosCempres/busquedaAvanzadaCursoCempres">Buscar cursos </a></li>
                                <li><a href="<?php echo base_url(); ?>index.php/facturacion/cursosCempres/mostrarFormularioGestionCursoCempres">Crear cursos</a></li>
                                <li class="divider"></li>
                                
                                <li><a href="<?php echo base_url(); ?>index.php/automatica/automatica/gestionarCheques">Gestionar cheques</a></li>
                                <li class="divider"></li>
                                
                                <!-- <li><a href="#" data-target="#modal_aplicar_recargos" data-toggle="modal" >Aplicar recargos</a></li>
                                <li class="divider"></li> -->
                                
                                <li><a href="<?php echo base_url(); ?>index.php/clientes/clientes/busquedaAvanzada/FACTURACION">Facturar</a></li>
                                <li><a href="<?php echo base_url(); ?>index.php/facturacion/facturacion/busquedaAvanzadaFactura">Buscar factura</a></li>
                            </ul>
                        </li>   

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> CONFIGURACIÓN<b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Crear usuario</a></li>
                                <li><a href="#">Buscar usuarios</a></li>
                                <li><a href="#">Crear roles</a></li>
                                <li><a href="#">Buscar roles</a></li>
                            </ul>
                        </li> 
                    </ul>

                   <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <?php if ($this->session->userdata('loggeado')){echo $this->session->userdata('loggeado')['USUARIO']; } ?>
                                <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu">
                              <li> <a href="<?php echo base_url(); ?>index.php/admin/usuario/CambiarClave/<?php if ($this->session->userdata('loggeado')){echo $this->session->userdata('loggeado')['ID_USUARIO']; } ?>">Cambiar contraseña <span class="glyphicon glyphicon-pencil"></a></li>
                              <li> <a href="<?php echo base_url(); ?>index.php/admin/login/logout">Cerrar sesión <span class="glyphicon glyphicon-lock"></a></li>
                            </ul>
                        </li>
                        
                    </ul>
                </div>
            </nav>
        <div id="contenido" class="shadow-gris">
            

<script type="text/javascript">  
            $(function(){            
            var params = {
                
                onInit: function(data) {
                },
                onCreate: function(notification, data) {
                },
                onClose: function(notification, data) {
                }
                };
               <?php if($this->session->flashdata('mostrarMensajeConfirmacion') && $this->session->flashdata('mostrarMensajeConfirmacion')) {?>
                var text = 'La operación ha sido realizada con éxito.';
                params.heading = 'Confirmación';
                params.theme = 'lime';
                // show notification
                $.notific8(text, params);
                <?php } ?>
                <?php if(isset($mostrarMensajeErrorValidacion)) {?>
                var text = 'Hay algunos campos de entrada con errores. Por favor rectífiquelos.';
                params.heading = 'Error';
                params.theme = 'ruby';
                // show notification
                $.notific8(text, params);
                <?php } ?>
            });
            
            
 
       
        $('#modal_ingresar_efectivo').on('hidden.bs.modal', function ()
        {
           $('#monto_ingreso_efectivo').val("0.00"); 
           $('#descripcion_ingreso').val("");
       });
       
        $('#modal_egresar_efectivo').on('hidden.bs.modal', function ()
        {
           $('#monto_egreso_efectivo').val("0.00"); 
           $('#descripcion_egreso').val("");
           
           $("#contenedor_egreso_efectivo").attr("style","display:none");
           
           document.getElementById("radio1").checked = 0;
           document.getElementById("radio2").checked = 0;
           document.getElementById("radio3").checked = 0;
       });
       
             function entrada_(id) 
           {
                 //CONFIGURO EL ALERT
                                   var data=null;
                                   var params = 
                                   {                
                                      onInit: function(data) {},
                                      onCreate: function(notification, data) {},
                                      onClose: function(notification, data) {}
                                   };                                
                           params.heading = 'Notificación';
                           params.theme = 'teal'; 
                           params.life = '4000';//4segundos

                           //si entra un caracter no numerico
                            var valor = $("#"+id).val().trim();
                            if(isNaN(valor))
                            {
                               // show notification
                               var text = 'El campo solo adminite valores numéricos.';
                               $.notific8(text, params);
                               $("#"+id).val("0.00");
                            }                  
           }
            
            
           function click_(id) 
           {
                $("#"+id).val("");
           }
           
           function verificar_(id)
           {
               var saldo_i = $("#"+id).val().trim();
               if(saldo_i=="")
                   $("#"+id).val("0.00");
               else
               {
                   $("#"+id).val(saldo_i);
               }
                  
           }
           
           function get_idusuario_loggeado()
           {
               var id="";
                               $.ajax({
                type: 'POST',
                async:false,
                dataType: 'json',
                url: '<?php echo base_url(); ?>index.php/facturacion/facturacion/get_usuario_sesion',
                success: function (data) 
                {     
                    id=data.id;
                }
             });
             return id;               
           }
           
           function existe_caja_abierta()
           {
               var abierta=true;
               $.ajax({
                type: 'POST',
                async:false,
                dataType: 'json',
                url: '<?php echo base_url(); ?>index.php/facturacion/facturacion/existe_caja_abierta',
                success: function (data) 
                {     
                    abierta = data.estado;
                }
             });
             return abierta;               
           }
           
           $('#guardar_apertura_caja').click(function()
           {
               if(existe_caja_abierta())
               {
                                                    //configurando el alert
                                                    var data=null;
                                                    var params = 
                                                                {                
                                                                    onInit: function(data) {},
                                                                    onCreate: function(notification, data) {},
                                                                    onClose: function(notification, data) {}
                                                                };                                
                                                    params.heading = 'Notificación';
                                                    params.theme = 'teal'; 
                                                    params.life = '6000';//4segundos
                                    var text = "Ya existe una caja abierta. Cierre la caja abierta y abra una nueva caja.";
                                    $.notific8(text, params);
                                    return;
               }
               else
               {
                var saldo_inicial = parseFloat($("#saldo_inicial_modal").val()).toFixed(2);
                var id=get_idusuario_loggeado();                
                
                            $.ajax({
                                async:false,
                                type: "POST",
                                url: '<?php echo base_url(); ?>index.php/facturacion/facturacion/abrir_caja',
                                dataType: 'json',
                                data: {id:id, saldo:saldo_inicial}, 
                                success: function (data_request)
                                {    
                                                        //configurando el alert
                                                        var data=null;
                                                        var params = 
                                                                    {                
                                                                        onInit: function(data) {},
                                                                        onCreate: function(notification, data) {},
                                                                        onClose: function(notification, data) {}
                                                                    };                                
                                                        params.heading = 'Notificación';
                                                        params.theme = 'teal'; 
                                                        params.life = '4000';//4segundos 

                                    $('#modal_apertura_caja').modal('hide');
                                    if(data_request)
                                    {
                                        var text = "Caja abierta.";
                                        $.notific8(text, params);                                        
                                    }
                                    else
                                    {
                                        var text = "Este dispositivo no tiene los permisos para abrir caja";
                                        $.notific8(text, params);   
                                    }                          
                                }
                            });   

               }
  
           });              
           
            function estado_caja()
            {
                //configurando el alert
                var data=null;
                var params = 
                {                
                    onInit: function(data) {},
                    onCreate: function(notification, data) {},
                    onClose: function(notification, data) {}
                };                                
                params.heading = 'Notificación';
                params.theme = 'teal'; 
                params.life = '4000';//4segundos

                if (existe_caja_abierta())
                {
                   var text = "Caja en estado: ABIERTA.";
                   $.notific8(text, params);
                }
                else
                {
                   var text = "Caja en estado: CERRADA.";
                   $.notific8(text, params); 
                }
            }
        
          $('#guardar_ingreso_efectivo').click(function()
           {
                 //configurando el alert
                                var data=null;
                                var params = 
                                            {                
                                                onInit: function(data) {},
                                                onCreate: function(notification, data) {},
                                                onClose: function(notification, data) {}
                                            };                                
                                params.heading = 'Notificación';
                                params.theme = 'teal'; 
                                params.life = '4000';//4segundos
                                              
                //valido que haya una caja abierta
                if(existe_caja_abierta()==false)
                {
                    // show notification
                    var text = 'Debe abrir la caja.';
                    $.notific8(text, params);
                    return;
                }   
                else
                {
                    var ingreso = parseFloat($('#monto_ingreso_efectivo').val().trim()).toFixed(2);
                    var descripcion_ingreso = $('#descripcion_ingreso').val().trim();

                    if(ingreso=="0.00" || ingreso=="")
                    {
                        // show notification
                        var text = 'El ingreso debe ser un valor mayor a cero.';
                        $.notific8(text, params);
                        return;
                    }

                    if(descripcion_ingreso=="")
                    {
                        // show notification
                        $('#descripcion_ingreso').val("");
                        var text = 'La descripcion del ingreso no puede estar vacía';
                        $.notific8(text, params);
                        return;
                    }

                            $.ajax({
                                async:false,
                                type: "POST",
                                url: '<?php echo base_url(); ?>index.php/facturacion/facturacion/ingresar_efectivo',
                                dataType: 'json',
                                data: {monto:ingreso, descripcion:descripcion_ingreso}, 
                                success: function ()
                                {                               
                                }
                            });  
                    
                    $('#modal_ingresar_efectivo').modal('hide');
                }
  
           });
            
          $('#guardar_egreso_efectivo').click(function()
           {
                 //configurando el alert
                                var data=null;
                                var params = 
                                            {                
                                                onInit: function(data) {},
                                                onCreate: function(notification, data) {},
                                                onClose: function(notification, data) {}
                                            };                                
                                params.heading = 'Notificación';
                                params.theme = 'teal'; 
                                params.life = '4000';//4segundos
                                              
                //valido que haya una caja abierta
                if(existe_caja_abierta()==false)
                {
                    // show notification
                    var text = 'Debe abrir la caja.';
                    $.notific8(text, params);
                    return;
                }   
                else
                {
                    var egreso = parseFloat($('#monto_egreso_efectivo').val().trim()).toFixed(2);
                    var descripcion_egreso = $('#descripcion_egreso').val().trim();
                    var valor = $('input:radio[name=opcion]:checked').val();
                    
                    if(valor!=1 && valor!=2 && valor!=3)
                    {
                        var text = 'Seleccione un tipo de egreso.';
                        $.notific8(text, params);
                        return;
                    }
                    
                    if( valor==1 && egreso!=0 && descripcion_egreso.trim()!="" )
                    {
                                $.ajax({
                                   async:false,
                                   type: "POST",
                                   url: '<?php echo base_url(); ?>index.php/facturacion/facturacion/egresar_efectivo',
                                   dataType: 'json',
                                   data: {monto:egreso, descripcion:descripcion_egreso}, 
                                   success: function (data)
                                   {    
                                     if(data.tiene_permiso)
                                     {
                                          if(data.disponible==false)
                                          {
                                            var text = 'Monto no disponible en caja.';
                                            $.notific8(text, params);
                                          }
                                          else
                                            $('#modal_egresar_efectivo').modal('hide');                                        
                                     }
                                     else
                                     {
                                        var text = 'Este dispositivo no tiene los permisos.';
                                        $.notific8(text, params);
                                     }
                                   }
                               });  

                                              
                    }
                    else if(valor==2) //encerar cheque
                    {
                                $.ajax({
                                   async:false,
                                   type: "POST",
                                   url: '<?php echo base_url(); ?>index.php/facturacion/facturacion/encerar_cheques',
                                   dataType: 'json',
                                   data: {}, 
                                   success: function (data)
                                   {  

                                    if(data.tiene_permiso)
                                    {
                                          if(data.disponible==false)
                                          {
                                            var text = 'Egreso NO válido: no hay cheques en la caja.';
                                            $.notific8(text, params);
                                          }
                                          else
                                            $('#modal_egresar_efectivo').modal('hide');
                                    }
                                     else
                                     {
                                        var text = 'Este dispositivo no tiene los permisos.';
                                        $.notific8(text, params);
                                     }

                                   }
                               });  
                    }
                    else if(valor==3) //encerar caja 
                    {
                                $.ajax({
                                   async:false,
                                   type: "POST",
                                   url: '<?php echo base_url(); ?>index.php/facturacion/facturacion/encerar_caja',
                                   dataType: 'json',
                                   data: {}, 
                                   success: function (data)
                                   {  
                                      if(data.tiene_permiso)
                                      {
                                          if(data.disponible==false)
                                          {
                                            var text = 'Egreso NO válido: la caja está vacía.';
                                            $.notific8(text, params);
                                          }
                                          else
                                            $('#modal_egresar_efectivo').modal('hide');
                                      } 
                                      else
                                      {
                                        var text = 'Este dispositivo no tiene los permisos.';
                                       $.notific8(text, params);
                                      } 

                                   }
                               });  
                    }
                    else
                    {
                        // show notification
                        $('#descripcion_egreso').val("");
                        var text = 'Debe llenar todos los datos.';
                        $.notific8(text, params);
                        return;
                    }

                }
  
           });
           
            $(function () 
            {
                $('#radio_tipo_egreso input[type=radio]').change(function(){
                    var valor = $(this).val();
                    if(valor==1)
                    {
                        var cont = document.getElementById("contenedor_egreso_efectivo");
                        cont.setAttribute("style","display: block");
                    }
                    else
                    {
                        var cont = document.getElementById("contenedor_egreso_efectivo");
                        cont.setAttribute("style","display: none");
                    }
                });
            }); 
        
            function cerrar_caja()
            {
                 //configurando el alert
                 var data=null;
                 var params = 
                 {                
                     onInit: function(data) {},
                     onCreate: function(notification, data) {},
                     onClose: function(notification, data) {}
                 };                                
                 params.heading = 'Notificación';
                 params.theme = 'teal'; 
                 params.life = '4000';//4segundos
                 if (existe_caja_abierta())
                 {
                     var urlCierre= "<?php echo base_url(); ?>index.php/facturacion/facturacion/cerrar_caja";
                     $(location).attr('href',urlCierre);
                 }
                 else
                 {
                    var text = "La caja está en estado: CERRADA.";
                    $.notific8(text, params); 
                 }     
            }
            
          $('#guardar_aplicar_recargos').click(function()
           {
                 //configurando el alert
                                var data=null;
                                var params = 
                                            {                
                                                onInit: function(data) {},
                                                onCreate: function(notification, data) {},
                                                onClose: function(notification, data) {}
                                            };                                
                                params.heading = 'Notificación';
                                params.theme = 'teal'; 
                                params.life = '4000';//4segundos
                                              
                //valido que el recargo no sea cero
                var valor_recargo = $("#tb_valor_recargo").val().trim();
                /* if(valor_recargo==0)
                {
                    var text = 'El valor del recargo debe ser mayor a cero';
                    $.notific8(text, params);
                    return;
                }*/
                
                
                //aplico recargos
                                $.ajax({
                                   async:false,
                                   type: "POST",
                                   url: '<?php echo base_url(); ?>index.php/automatica/automatica/aplicar_recargos',
                                   dataType: 'json',
                                   data: {valor_recargo:valor_recargo}, 
                                   success: function (data)
                                   {    
                                       if(data==false)
                                       {
                                            var text = 'No se puede aplicar recargo hasta el próximo mes';
                                            $.notific8(text, params);
                                       }
                                       else
                                       {
                                           window.location.reload();
                                       }
                                   }
                               });  
           });
           
         $('#modal_aplicar_recargos').on('hidden.bs.modal', function ()
         {            
             $("#tb_valor_recargo").val("");
         });

</script>

