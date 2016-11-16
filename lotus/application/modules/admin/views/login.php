    <title>LOGIN</title>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title></title>

        <!--<link rel="icon" href="<?= base_url('assets/librerias/images/favicon.png') ?>" type="image/gif">-->

        <link href="<?= base_url('assets/librerias/css/bootstrap.min.css') ?>" rel="stylesheet" type="text/css"/>
        <link href="<?= base_url('assets/librerias/css/bootstrap-theme.css') ?>" rel="stylesheet" type="text/css"/>
        <link href="<?= base_url('assets/librerias/css/select2.css') ?>"  rel="stylesheet" type="text/css"/>
        <link href="http://netdna.bootstrapcdn.com/font-awesome/3.0.2/css/font-awesome.css" rel="stylesheet">
        <link href="<?= base_url('assets/librerias/css/style-is-loading.css') ?>" rel="stylesheet" type="text/css"/>
        <link href="<?= base_url('assets/librerias/css/bootstrap-datepicker.min.css') ?>" rel="stylesheet" type="text/css"/>
        <link href="<?= base_url('assets/librerias/css/bootstrap-datepicker3.min.css') ?>" rel="stylesheet" type="text/css"/>
        <link href="<?= base_url('assets/librerias/css/prettify.css') ?>" rel="stylesheet" type="text/css"/>
        <link href="<?= base_url('assets/librerias/css/jquery.notific8.min.css') ?>" rel="stylesheet" type="text/css"/>
        <link href="<?= base_url('assets/librerias/css/dataTables.bootstrap.css') ?>" rel="stylesheet" type="text/css"/>
        <style type="text/css">
            
            .form-control[disabled], .form-control[readonly], fieldset[disabled] .form-control {
                background-color: #fff;
                opacity: 1;
            }
            
            
            .image-itca-vector{
                background-image:url("<?= base_url('assets/librerias/images/responsive-lotus.jpg') ?>");
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
            .shadow-gris{
                
               box-shadow: 3px 3px 12px #333;
            }
            
            .pull-right *
            {
                display: inline-block;
            }
            
            span.required{
                color: #a94442;
                font-weight: 700;
            }
           
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

            form li a {
                background-color: #fff;  
            }

        *::after, *::before {
            box-sizing: border-box;
        }
        *::after, *::before {
            box-sizing: border-box;
        }
       .form-control:not(textarea) {
           height: 25px;
       }
       
       div#button{
           margin: 0 auto;
       }

       .inputRegistro{
            width: 200px;
       }

       .logo_mini
       {
            background-image:url("<?= base_url('assets/librerias/images/logo_academos_mini.png') ?>");
            background-position: center top;
            margin: 0 auto;
            width: 220px;
            height: 167px
       }

            .panel-heading, .modal-header
        {
            background-color: #56B156;
            color: #ffffff;
        }

        .badge
        {
            background-color: #ffffff;
            color: #56B156;
        }

        input[type=text],select
        {
            text-transform: none;
            height: 30px !important;
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
       
    </head>
    <body  onresize="mostrarLogoMini()">
    <!--Login-->
        <div id="contenido" class="shadow-gris image-itca-vector" style="padding-top: 120px; ">
            <div class="panel" style='max-width:400px; margin:60 auto;border-color:#26a139;' >
                <div class="panel-heading" style="text-align: center;  background-color: #26a139; color: #fff">
                    <h3 class="panel-title">Entrar al sistema</h3>
                </div>
                <div class="panel-body">
                    <form name="login" method="post" action="<?php echo base_url(); ?>index.php/admin/login/index">
                        <span style="color: #a94442;"> <?php if(isset($error)) {echo $error;} ?></span>

                        <div class="form-group form-group-sm">
                            <label for="usuario">Usuario</label>
                            <div class="input-group">
                                <span class="input-group-addon left"><span class="glyphicon glyphicon-user"></span></span>
                                <input type="text" name="usuario" id="usuario" class="form-control" placeholder="Usuario" required autofocus>
                            </div>
                        </div>
                        <div class="form-group form-group-sm">
                            <label for="clave">Clave</label>
                            <div class="input-group">
                                <span class="input-group-addon left"><span class="glyphicon glyphicon-lock"></span></span>
                                <input type="password" name="clave" id="clave" class="form-control" placeholder="Clave" required>
                            </div>
                        </div>
                        <div id="button" style="max-width: 290px;">
                            <button id="enviar" class="btn btn-sm btn-success" type="submit"">Entrar</button>
                            <button id="bRegistroAsesor" class="btn btn-sm btn-success" type="button" data-toggle="modal" data-target="#modalregistroAsesoraB" onclick="inicializarCampos()">Registrate como Asesora de Belleza</button>
                        </div>
                    </form>
                
               </div>
           `</div>

            <div class="logo_mini" id="logo_mini" style="display: none">
                
            </div>  
        </div>

        <!--Registro de Belleza-->
        <div class="modal fade" id="modalregistroAsesoraB" tabindex="-1" role="dialog" 
            aria-labelledby="registroAsesoraBModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="registroAsesoraBModalLabel">Registro Asesora de Belleza</h4>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <table>
                                <colgroup>
                                    <col width="50px"/>
                                    <col width="170px"/>
                                    <col width="100px"/>
                                    <col width="160px"/>
                                </colgroup>
                                <tbody>
                                    <tr>
                                        <td></td>
                                        <td>
                                            <label class="control-label required" for="for_pnombreAsesor"> Primer Nombre
                                            <span class="required"> * </span></label>
                                        </td>
                                        <td>
                                            <input id="ipNombreAsesor" class="form-control inputRegistro" type="text" name="ipNombreAsesor" maxlength="15">
                                        </td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>
                                            <label class="control-label" for="for_snombreAsesor">Segundo Nombre
                                        </td>
                                        <td>
                                            <input id="isNombreAsesor" class="form-control inputRegistro" type="text" name="isNombreAsesor" maxlength="15">
                                        </td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>
                                            <label class="control-label required" for="for_pApellidoAsesor"> Primer Apellido
                                            <span class="required"> * </span></label>
                                        </td>
                                        <td>
                                            <input id="ipApellidoAsesor" class="form-control inputRegistro" type="text" name="ipApellidoAsesor" maxlength="15">
                                        </td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>
                                            <label class="control-label" for="for_sAellidoAsesor">Segundo Apellido
                                        </td>
                                        <td>
                                            <input id="isApellidoAsesor" class="form-control inputRegistro" type="text" name="isApellidoAsesor" maxlength="15">
                                        </td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>
                                            <label class="control-label required" for="for_fNacimientoAsesor">Fecha de Nacimiento <span class="required"> * </span></label>
                                        </td>
                                        <td class='input-group'>
                                       
                                            <span class="input-group-addon left">
                                            <span class="glyphicon glyphicon-calendar"></span></span>
                                            <input id="ifNacimientoAsesor" class="form-control dp"  placeholder="yyyy-mm-dd" type="text" name="ifNacimientoAsesor">
                                            
                                        </td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>
                                            <label class="control-label required" for="for_CedulaAsesor">Cédula <span class="required"> * </span></label>
                                        </td>
                                        <td>
                                            <input id="icedula" class="form-control inputRegistro" type="text" 
                                            name="icedula" maxlength="10">
                                        </td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>
                                            <label class="control-label required" for="for_TlfFijoAsesor">Teléfono fijo </label>
                                        </td>
                                        <td>
                                            <input id="itlfFijo" class="form-control inputRegistro" type="text" 
                                            name="itlfFijo" maxlength="9">
                                        </td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>
                                            <label class="control-label required" for="for_tlfCelularAsesor">Celular <span class="required"> * </span></label>
                                        </td>
                                        <td>
                                            <input id="itlfCelular" class="form-control inputRegistro" type="text" 
                                            name="itlfCelular" maxlength="10">
                                        </td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>
                                            <label class="control-label required" for="for_paisAsesor">País </label>
                                        </td>
                                        <td>
                                            <label class="control-label required" for="for_paisAsesor">Ecuador</label>
                                        </td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>
                                            <label class="control-label required" for="for_provinciaAsesor">Provincia <span class="required"> * </span></label>
                                        </td>
                                        <td>
                                            <select id="sProvincia" class="form-control">
                                                <option value="">-Seleccionar-</option>
                                            </select>
                                        </td>
                                        <td></td>
                                    </tr>

                                    <tr>
                                        <td></td>
                                        <td>
                                            <label class="control-label required" for="for_ciudadAsesor">Ciudad <span class="required"> * </span></label>
                                        </td>
                                        <td>
                                            <select id="sCiudad" class="form-control">
                                                <option value="">-Seleccionar-</option>
                                            </select>
                                        </td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>
                                            <label class="control-label required" for="for_DireccionAsesor">Direccion <span class="required"> * </span></label>
                                        </td>
                                        <td>
                                            <input id="iDireccion" class="form-control inputRegistro" type="text" 
                                            name="iDireccion" maxlength="100">
                                        </td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>
                                            <label class="control-label required" for="for_emailAsesor">E-Mail</label>
                                        </td>
                                        <td>
                                            <input id="ieMail" class="form-control inputRegistro" type="text" 
                                            name="ieMail" maxlength="50">
                                        </td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>
                                            <label class="control-label required" for="for_referidoAsesor">Código del Referido</label>
                                        </td>
                                        <td>
                                            <input id="ireferido" class="form-control inputRegistro" type="text" 
                                            name="ireferido" maxlength="5">
                                        </td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>
                                            <label class="control-label required" for="for_LiderAsesor">Código del Lider 
                                            </label>
                                        </td>
                                        <td>
                                            <input id="ilider" class="form-control inputRegistro" type="text" 
                                            name="ilider" maxlength="5">
                                        </td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>
                                            <label class="control-label required" for="for_tipoContactoAsesor">Tipo de Contacto <span class="required"> * </span></label>
                                        </td>
                                        <td>
                                            <label class="">E-Mail</label>
                                            <input id="rtipContactoMail" class="" type="radio" 
                                            name="rTipoContacto">
                                            <label class="">Teléfono</label>
                                            <input id="rtipContactoTlf" class="" type="radio" 
                                            name="rTipoContacto">
                                        </td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>
                                            <button id="bCrearAsesor" type="button" class="btn btn-primary">Crear</button>
                                            <button id="bCancelarAsesor" type="button" class="btn btn-default">Cancelar</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>        

                        </div>
                    </div>
                </div>
            </div>
        </div>


<div style=" text-align:center; font-family:Verdana, Geneva, sans-serif; position:relative; top:25px; font-size:10px;">.:: BINARY ::. &copy; Todos los derechos reservados</div>

 <script src="<?= base_url('assets/application/js/validation-extended.js') ?>" type="text/javascript"></script>
            <script type="text/javascript">  
            //DatePicker
            $('.dp').datepicker({format: "yyyy-mm-dd",
                language: 'es',
                autoclose: true,
                forceParse: true,
                enableOnReadonly: true
            });
            //Declaracion de Variables
            var valProvincia = null;
            var tipoContacto = null;
            var id_cliente = null;
/*************************************88Metodos get y set***********************************************/

            //Primer Nombre
            function getpNombreAsesor(){
                return $('#ipNombreAsesor').val();
            }
            //Segundo Nombre
            function getsNombreAsesor(){
                return $('#isNombreAsesor').val();
            }
            //Apelliodo Paterno
            function getApellidoP(){
                return $('#ipApellidoAsesor').val();
            } 
            //Apelliodo Materno
            function getApellidoM(){
                return $('#isApellidoAsesor').val();
            }
            //Fecha de nacimiento
            function getFechaNaciomientoAsesor(){
                return $('#ifNacimientoAsesor').val();
            }
            //Cedula
            function getCedulaAsesor(){
                return $('#icedula').val();
            }
            //Telefono Fijo
            function getTlfFijoAsesor(){
                return $('#itlfFijo').val();
            }
            //Telefono Celular
            function getTlfCelularAsesor(){
                return $('#itlfCelular').val();
            }
            //Provincia
            function getProvincia(){
                return valProvincia;
            }

            function setProvincia(valor){
                valProvincia = valor;
            }
            //Ciudad/Canton
            function getCiudad(){
                return $("#sCiudad option:selected" ).val();
            }
            //Direccion
            function getDireccion(){
                return $('#iDireccion').val();
            }
            //E-mail
            function getEmailAsesor(){
                return $('#ieMail').val();
            }

            //Referido por
            function getCodReferido(){
                return $('#ireferido').val();
            }
            //Lider
            function getCodLider(){
                return $('#ilider').val();
            }
            //Rol
            /*function getRolAsesor(){
                return $("#sRol option:selected" ).val();
            }*/
            //Tipo Contacto
            function getTipoContacto(){
                //1: Email
                //2: Telefono
                return tipoContacto;
            }
            function setTipoContacto(valor){
                tipoContacto = valor;
            }
            //Fecha actual
            function getFechaActual(){
                var d = new Date();

                var year = d.getFullYear();
                var month = d.getMonth()+1;
                var day = d.getDate();

                var fechaActual = year+'-'+month+'-'+day;

                return fechaActual;
            }
            //Id_Cliente
            function getIdCliente(){
                return id_cliente;
            }
            function setIdCliente(valor){
                id_cliente = valor;
            }
            //
            $(function(){            
            var params = {
                
                onInit: function(data) {
                },
                onCreate: function(notification, data) {
                },
                onClose: function(notification, data) {
                }
                };
               <?php if(isset($mostrarMensajeConfirmacion)) {?>
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
                  
                  function chequearValidacionYEnviarFormulario() {

                            var form = $("form[name=login]");
                            form.validate();
                            if (form.valid() == true)
                            {
                               
                                form.submit();
                            }

                        }
                        $("#enviar").click(chequearValidacionYEnviarFormulario);
                    
            });


            function mostrarLogoMini()
            {
                      if (getSize()<768) 
                      {
                        document.getElementById("logo_mini").setAttribute("style","display:block");
                      }
                      else
                      {
                        document.getElementById("logo_mini").setAttribute("style","display:none");
                      }
            }

            function getSize() 
            {
              var myWidth = 0, myHeight = 0;
              if( typeof( window.innerWidth ) == 'number' ) {
                //No-IE
                myWidth = window.innerWidth;
                myHeight = window.innerHeight;
              } else if( document.documentElement && ( document.documentElement.clientWidth || document.documentElement.clientHeight ) ) {
                //IE 6+
                myWidth = document.documentElement.clientWidth;
                myHeight = document.documentElement.clientHeight;
              } else if( document.body && ( document.body.clientWidth || document.body.clientHeight ) ) {
                //IE 4 compatible
                myWidth = document.body.clientWidth;
                myHeight = document.body.clientHeight;
              }
              return myWidth;
            } 

            //Metodo para limpiar campos
            function inicializarCampos(){

                $('#ipNombreAsesor').val('');
                $('#isNombreAsesor').val('');
                $('#ipApellidoAsesor').val('');
                $('#isApellidoAsesor').val('');
                $('#ifNacimientoAsesor').val('');
                $('#icedula').val('');
                $('#itlfFijo').val('');
                $('#itlfCelular').val('');
                $('#sProvincia').val('');
                $('#sCiudad').val('');
                $('#iDireccion').val('');
                $('#ieMail').val('');
                $('#ireferido').val('');
                $('#ilider').val('');
                $('#sRol').val('');
                $("#rtipContactoMail").prop("checked", false);
                $("#rtipContactoTlf").prop("checked", false);

                obtenerRoles();

            }

            //Metodo para obtener las provincias
            function obtenerProvincias(){
                //$( "#myselect option:selected" ).text();
                   //
                /*var url = "<?php echo base_url(); ?>index.php/cliente/registroAsesor/registroAsesoraBelleza";
                window.open(url ,'_self');*/
                  $.isLoading({
                           text: "Cargando",
                           position: "overlay"
                          });

                  $.ajax({
                         type: 'POST',
                         async:false,
                         dataType: 'json',
                         data: {},
                         url: '<?php echo base_url(); ?>index.php/cliente/registroAsesor/obtenerProvincias',
                         success: function (data) 
                         {     
                            $.isLoading("hide");
                            $.each(data, function(i, reg){
                                $('#sProvincia').append($('<option>', {
                                    value: data[i].id_provincia,
                                    text: data[i].nombre_provincia
                                }));
                            })

                         }
                });  
                
            }

            //Metodo para obtener las ciudades
            function obtenerCiudades(idProvincia){
                    $.isLoading({
                           text: "Cargando",
                           position: "overlay"
                    });

                    $.ajax({
                         type: 'POST',
                         async:false,
                         dataType: 'json',
                         data: {idProvincia:idProvincia},
                         url: '<?php echo base_url(); ?>index.php/cliente/registroAsesor/obtenerCiudades',
                         success: function (data) 
                         {     
                            $.isLoading("hide");
                            $.each(data, function(i, reg){
                                $('#sCiudad').append($('<option>', {
                                    value: data[i].id_canton,
                                    text: data[i].nombre_canton
                                }));
                            })


                         }
                });  
            }


            //Metodo para obtener las ciudades
            function obtenerRoles(){
                    $.isLoading({
                           text: "Cargando",
                           position: "overlay"
                    });

                    $.ajax({
                         type: 'POST',
                         async:false,
                         dataType: 'json',
                         data: {},
                         url: '<?php echo base_url(); ?>index.php/cliente/registroAsesor/obtenerRoles',
                         success: function (data) 
                         {     
                            $.isLoading("hide");
                           /* $.each(data, function(i, reg){
                                $('#sRol').append($('<option>', {
                                    value: data[i].id_rol,
                                    text: data[i].nombre_rol
                                }));
                            })*/

                            obtenerProvincias();

                         }
                });  
            }

            //Metodo para crear a los asesores
            function registroAsesoresDeBelleza(){

                    $.isLoading({
                           text: "Cargando",
                           position: "overlay"
                    });

                    //Mensajes de notioficacion
                    var params = {                
                        onInit: function(data) {
                        },
                        onCreate: function(notification, data) {
                        },
                        onClose: function(notification, data) {
                        }
                    };

                    params.heading = 'Notificación';
                    params.theme = 'teal';
                    params.life = '2000';

                    $.ajax({
                         type: 'POST',
                         async:false,
                         dataType: 'json',
                         data: {pNombreAsesor:getpNombreAsesor(), sNombreAsesor:getsNombreAsesor(), 
                            apellidoPAsesor:getApellidoP(), apellidoMAsesor:getApellidoM(), 
                            fechaNacimientoAsesor:getFechaNaciomientoAsesor(), cedulaAsesor:getCedulaAsesor(), 
                            tlfFijoAsesor:getTlfFijoAsesor(), tlfCelularAsesor:getTlfCelularAsesor(), 
                            idProvincia:getProvincia(),idCiudad:getCiudad(), direccion:getDireccion(), 
                            email:getEmailAsesor(), referido:getCodReferido(), lider:getCodLider(), 
                            tipoContacto:getTipoContacto(), fechaActual:getFechaActual()},
                         url: '<?php echo base_url(); ?>index.php/cliente/registroAsesor/registroAsesoresDeBelleza',
                         success: function (data) 
                         {     
                           // $.isLoading("hide");
                            if (data == true){
                                buscarIdCliente();
                            }
                            else{
                                var text = 'Se presento un problema al registrar al asesor';
                                 // show notification
                                $.notific8(text, params);
                                $('#modalregistroAsesoraB').modal('hide');
                            }
                            
                           
                            

                         }
                }); 
            }

            //Validaciones de campos
            function validarCamposObligatorios(){

                var bandera = true;
                                    
                //Mensajes de notioficacion
                var params = {                
                    onInit: function(data) {
                    },
                    onCreate: function(notification, data) {
                    },
                    onClose: function(notification, data) {
                    }
                };

                params.heading = 'Notificación';
                params.theme = 'teal';
                params.life = '2000';

                if ((getpNombreAsesor() == '') || (getApellidoP() == '') || (getFechaNaciomientoAsesor() == '') ||
                    (getCedulaAsesor() == '') || (getTlfCelularAsesor() == '') ||
                    (getProvincia() == '') || (getCiudad() == '') || (getDireccion() == '') || 
                    (getTipoContacto() == '')){

                    bandera = false;
                }

                if (bandera == false){
                    var text = 'Los campos con (*) son obligatorios';
                    $.notific8(text, params);
                }

                return bandera;
            }

            //Validar si la cedula existe
            function validarCedulaAsesor(){
                $.isLoading({
                    text: "Cargando",
                    position: "overlay"
                });

                                //Mensajes de notioficacion
                var params = {                
                    onInit: function(data) {
                    },
                    onCreate: function(notification, data) {
                    },
                    onClose: function(notification, data) {
                    }
                };

                params.heading = 'Notificación';
                params.theme = 'teal';
                params.life = '2000';

                $.ajax({
                    type: 'POST',
                    async:false,
                    dataType: 'json',
                    data: {cedulaAsesor:getCedulaAsesor()},
                    url: '<?php echo base_url(); ?>index.php/cliente/registroAsesor/validarCedulaAsesor',
                    success: function (data) 
                    {     
                        $.isLoading("hide");
                        if (data == false){
                            validarFormatoEmail();
                            //
                        }
                        else{
                            var text = 'El número de cédula ingresado ya existe';
                            $.notific8(text, params);
                        }

                    }
                });  
            }

            //Validar email+Tipo de contacto
            function validarEmailTipoContacto(){

                var bandera = true;
                var params = {                
                    onInit: function(data) {
                    },
                    onCreate: function(notification, data) {
                    },
                    onClose: function(notification, data) {
                    }
                };

                params.heading = 'Notificación';
                params.theme = 'teal';
                params.life = '2000'

                if (($('#rtipContactoMail').is(':checked')) && (getEmailAsesor() == '')){
                    bandera = false;
                }

                if (bandera == false){
                    var text = 'El correo electrónico no ha sido ingresado';
                    $.notific8(text, params);
                }

                return bandera;

            }

            //Metodo para validar si existe la persona quien refirio
            function validarReferidoIngresado(){
                $.isLoading({
                    text: "Cargando",
                    position: "overlay"
                });

                //Mensajes de notioficacion
                var params = {                
                    onInit: function(data) {
                    },
                    onCreate: function(notification, data) {
                    },
                    onClose: function(notification, data) {
                    }
                };

                params.heading = 'Notificación';
                params.theme = 'teal';
                params.life = '2000';

                $.ajax({
                    type: 'POST',
                    async:false,
                    dataType: 'json',
                    data: {codReferido:getCodReferido()},
                    url: '<?php echo base_url(); ?>index.php/cliente/registroAsesor/validarReferidoIngresado',
                    success: function (data) 
                    {     
                        $.isLoading("hide");
                        if (data == true){
                            validarLiderIngresado();
                        }
                        else{
                            var text = 'El Código del Referido no existe';
                            $.notific8(text, params);
                        }

                    }
                });  
            }

            //Metodo para validar el codigo del Lider ingresado
            function validarLiderIngresado(){
                $.isLoading({
                    text: "Cargando",
                    position: "overlay"
                });

                //Mensajes de notioficacion
                var params = {                
                    onInit: function(data) {
                    },
                    onCreate: function(notification, data) {
                    },
                    onClose: function(notification, data) {
                    }
                };

                params.heading = 'Notificación';
                params.theme = 'teal';
                params.life = '2000';

                $.ajax({
                    type: 'POST',
                    async:false,
                    dataType: 'json',
                    data: {codLider:getCodLider()},
                    url: '<?php echo base_url(); ?>index.php/cliente/registroAsesor/validarLiderIngresado',
                    success: function (data) 
                    {     
                        $.isLoading("hide");
                        if (data == true){
                            if (validarCamposObligatorios()){
                                registroAsesoresDeBelleza();
                            }
                            
                            
                        }
                        else{
                            var text = 'El Código del Lider no existe';
                            $.notific8(text, params);
                        }

                    }
                });  
            }

            //Validacion correo electronico
            function validarFormatoEmail(){
                                //Mensajes de notioficacion
                var params = {                
                    onInit: function(data) {
                    },
                    onCreate: function(notification, data) {
                    },
                    onClose: function(notification, data) {
                    }
                };

                params.heading = 'Notificación';
                params.theme = 'teal';
                params.life = '2000';
               
                var regex =  /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;

                var correcto = regex.test(getEmailAsesor());

                if (getEmailAsesor() == ''){
                    if (validarEmailTipoContacto()){
                        if(getCodReferido() != ''){
                           validarReferidoIngresado();
                        }
                        else if (getCodLider() != ''){
                            validarLiderIngresado();
                        }
                        else{
                            if (validarCamposObligatorios()){
                                registroAsesoresDeBelleza();
                            }
                        }
                    }

                    
                }
                else{
                    if (correcto) {
                        if(getCodReferido() != ''){
                            validarReferidoIngresado();
                        }
                        else if (getCodLider() != ''){
                                validarLiderIngresado();
                        }
                        else{
                            if (validarCamposObligatorios()){
                                registroAsesoresDeBelleza();
                            }
                        }

                    } else {
                        var text = 'Formato de Correo electrónico inválido';
                        $.notific8(text, params);
                        
                    }
                }

            }



            //Buscar Id de Cliente para inyectar en la tabla de referidos
            function buscarIdCliente(){

               /* $.isLoading({
                    text: "Cargando",
                    position: "overlay"
                });*/

                var params = {                
                    onInit: function(data) {
                    },
                    onCreate: function(notification, data) {
                    },
                    onClose: function(notification, data) {
                    }
                };

                params.heading = 'Notificación';
                params.theme = 'teal';
                params.life = '2000';

                $.ajax({
                    type: 'POST',
                    async:false,
                    dataType: 'json',
                    data: {cedulaAsesor: getCedulaAsesor()},
                    url: '<?php echo base_url(); ?>index.php/cliente/registroAsesor/buscarIdCliente',
                    success: function (data) 
                    {     
                        //$.isLoading("hide");
                        if ((data != null) && (data != undefined) && (data != '')){
                            setIdCliente(data);
                            ingresarTablaReferidos(data);
                        } 
                        else{
                            var text = 'Se presento un problema al registrar al asesor';
                            $.notific8(text, params);
                        }
                        
                    }
                }); 
            }

            //Metodo para ingresar en la tabla tab_referido
            function ingresarTablaReferidos(idCliente){

                /* $.isLoading({
                    text: "Cargando",
                    position: "overlay"
                });*/

                var params = {                
                    onInit: function(data) {
                    },
                    onCreate: function(notification, data) {
                    },
                    onClose: function(notification, data) {
                    }
                };

                params.heading = 'Notificación';
                params.theme = 'teal';
                params.life = '2000';

                $.ajax({
                    type: 'POST',
                    async:false,
                    dataType: 'json',
                    data: {cedulaAsesor:getCedulaAsesor(),fechaActual:getFechaActual(),idCliente: idCliente},
                    url: '<?php echo base_url(); ?>index.php/cliente/registroAsesor/ingresarTablaReferidos',
                    success: function (data) 
                    {     
                        $.isLoading("hide");
                        if (data == true){
                            var text = 'Asesor Registrado correctamente';
                        }
                        else{
                            var text = 'Se presento un problema al registrar al asesor';
                            // show notification
                        }
                        $.notific8(text, params);
                        $('#modalregistroAsesoraB').modal('hide');
                        
                    }
                }); 
            }


            //Carga de pantalla
            window.onload = function alcargar()
            {
                mostrarLogoMini();
                


                $('#sProvincia').change(function(){
                    setProvincia($("#sProvincia option:selected" ).val());
                    obtenerCiudades(getProvincia());
                });

                $('#bCrearAsesor').click(function(){
                    validarCedulaAsesor()
                });

                //Obtengo el tipo de contacto dependiendo del seleccionado
                //Mail
               $('#rtipContactoMail').click(function(){
                    if ($('#rtipContactoMail').is(':checked')){
                        setTipoContacto(1);
                    }
                });
                //Telefono
                $('#rtipContactoMail').click(function(){
                    if ($('#rtipContactoTlf').is(':checked')){
                        setTipoContacto(2);
                    }
                });

                $('#bCancelarAsesor').click(function(){
                    inicializarCampos();
                    $('#modalregistroAsesoraB').modal('hide');
                })

                //Validaciones numericas
                $('#itlfFijo').keypress(function(key) {
                    if(key.charCode < 48 || key.charCode > 57) return false;
                });

                /*$('#itlfCelular').keydown(function(event) {
                    if(event.shiftKey)  {
                        event.preventDefault();
                    }
                    if (event.keyCode > 57 ){ 
                        if (event.keyCode < 96 || event.keyCode > 105) {
                            event.preventDefault();
                        }          
                    }
                });
                $('#itlfCelular').keypress(function(key) {
                    if(key.charCode < 48 || key.charCode > 57) return false;
                });

                //Validacion Referido y Lider
                $('#ireferido').keypress(function(key) {
                    if(key.charCode < 48 || key.charCode > 57) return false;
                });

                $('#ilider').keypress(function(key) {
                    if(key.charCode < 48 || key.charCode > 57) return false;
                });

                //Input textos
               /* $('#ipNombreAsesor').keypress(function(key) {
                    if((key.charCode < 97 || key.charCode > 122) && (key.charCode < 65 || key.charCode > 90) && (key.charCode != 45)) return false;
                });

                $('#isNombreAsesor').keypress(function(key) {
                    if((key.charCode < 97 || key.charCode > 122) && (key.charCode < 65 || key.charCode > 90) && (key.charCode != 45)) return false;
                });

                $('#ipApellidoAsesor').keypress(function(key) {
                    if((key.charCode < 97 || key.charCode > 122) && (key.charCode < 65 || key.charCode > 90) && (key.charCode != 45)) return false;
                });

                $('#isApellidoAsesor').keypress(function(key) {
                    if((key.charCode < 97 || key.charCode > 122) && (key.charCode < 65 || key.charCode > 90) && (key.charCode != 45)) return false;
                });*/

            };


            </script>
      </body>
</html>
