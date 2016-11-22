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
        <form id="formRegistroB">
            <div class="modal fade" id="modalregistroAsesoraB" tabindex="-1" role="dialog" 
            aria-labelledby="registroAsesoraBModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="registroAsesoraBModalLabel">Registro Asesora de Belleza (Hombres y Mujeres mayores de 18 años)</h4>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <table>
                                <colgroup>
                                    <col width="50px"/>
                                    <col width="180px"/>
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
                                        <td  id="tdFechaNacimiento" class='input-group'>
                                       
                                            <span class="input-group-addon left">
                                            <span class="glyphicon glyphicon-calendar"></span></span>
                                            <input id="ifNacimientoAsesor" class="form-control dp"  placeholder="yyyy-mm-dd" type="text" name="ifNacimientoAsesor">
                                            
                                        </td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>
                                            <label class="control-label required" for="for_TipDocumentoAsesor">Tipo de Documento <span class="required"> * </span></label>
                                        </td>
                                        <td>
                                            <select id="stipoDocumento" class="form-control">
                                            </select>
                                        </td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>
                                            <label class="control-label required" for="for_NroDocumentoAsesor">Número de Documento <span class="required"> * </span></label>
                                        </td>
                                        <td>
                                            <input id="iNroDocumentoAsesor" class="form-control inputRegistro" type="text" 
                                            name="iNroDocumentoAsesor"                                         <?php if(form_error('iNroDocumentoAsesor') != '' ){?>
                                                aria-describedby="iNroDocumentoAsesor-error"
                                            <?php } ?>
                                                required="required" class="form-control"/> 

  

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
                                            name="itlfFijo" maxlength="12">
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
                                            name="itlfCelular" maxlength="12">
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
                                            name="ireferido" maxlength="16"/>
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
                                            name="ilider" maxlength="16"/>
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
                                </tbody>
                            </table>        

                        </div>
                        <br>
                        <div class="panel-footer">
                            <div class="pull-right">
                                <button type='button' style="min-width: 80px;" 
                                class='btn btn-default btn-sm' id="bCancelarAsesor">SALIR</button>
                                <button id="bRegistrarAsesor" type="button" class="formulario_personas_guardar btn-success btn btn-sm">REGISTRAR</button>
                            </div>
                            <div class="clearfix"></div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
            
        </form>
        


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
            var id_tipo_documento = null;
            var id_referido = null;
            var id_lider = null;
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
            //Tipo de Documento
            function getTipoDocumento(){
                return $("#stipoDocumento option:selected" ).val();
            }
            //Cedula
            function getNroDocumentoAsesor(){
                return $('#iNroDocumentoAsesor').val();
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
            //Id_tipo_Documento
            function getIdTipoDocumento(){
                return id_tipo_documento;
            }
            function setIdTipoDocumento(valor){
                id_tipo_documento = valor;
            }
            //Id_referido
            function getIdReferido(){
                return id_referido;
            }
            function setIdReferido(valor){
                id_referido = valor;
            }
            //Id_Lider
            function getIdLider(){
                return id_lider;
            }
            function setIdLider(valor){
                id_lider = valor;
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
                $('#ifNacimientoAsesor').mask('0000-00-00');
                $('#iNroDocumentoAsesor').val('');
                $('#itlfFijo').mask("00-000-0000", {placeholder: "00-000-0000"});
                $('#itlfCelular').mask("00-0000-0000", {placeholder: "00-0000-0000"});
                $('#sProvincia').val('');
                $('#sCiudad').val('');
                $('#iDireccion').val('');
                $('#ieMail').val('');
                $('#ireferido').val('');
                $('#ilider').val('');
                $('#stipoDocumento').val('');
                $("#rtipContactoMail").prop("checked", false);
                $("#rtipContactoTlf").prop("checked", false);
                $('#sCiudad').append($('<option>', {
                    value: '',
                    text: '-Seleccionar-'
                }));

                $('#formRegistroB')[0].reset();

                obtenerTipoDocumentos();
                

            }

            //Metodo que valida la existencia del nro de documento en Ecuador
            function chequearValidacionesNroDocumentos() {

                var form = $("#formRegistroB");
                form.validate();
                if (form.valid() == true)
                {
                   return true;
                    //form.submit();
                }
                else{
                    return false;
                }

            }

            //Metodo para obtener las provincias
            function obtenerProvincias(){
                  /*$.isLoading({
                           text: "Cargando",
                           position: "overlay"
                          });*/
                $('#sProvincia').empty();
                $('#sProvincia').append($('<option>', {
                    value: '',
                    text: '-Seleccionar-'
                }));


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
                    $('#sCiudad').empty();
                    $('#sCiudad').append($('<option>', {
                        value: '',
                        text: '-Seleccionar-'
                    }));

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
                    /*$.isLoading({
                           text: "Cargando",
                           position: "overlay"
                    });*/

                    $.ajax({
                         type: 'POST',
                         async:false,
                         dataType: 'json',
                         data: {},
                         url: '<?php echo base_url(); ?>index.php/cliente/registroAsesor/obtenerRoles',
                         success: function (data) 
                         {     
                            //$.isLoading("hide");
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
            function registroAsesoresDeBelleza(idSuperLider){

                    $.isLoading({
                           text: "Cargando",
                           position: "overlay"
                    });

                    //Mensajes de notioficacion
                    var superLider = null;
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
                    
                    //Valido si el Codigo del lider es nulo o no para asignar a la variable
                    if ((getCodLider() == '') || (getCodLider() == null)){
                        superLider = idSuperLider;
                    }
                    else{
                        superLider = getIdLider();
                    }


                    $.ajax({
                         type: 'POST',
                         async:false,
                         dataType: 'json',
                         data: {pNombreAsesor:getpNombreAsesor(), sNombreAsesor:getsNombreAsesor(), 
                            apellidoPAsesor:getApellidoP(), apellidoMAsesor:getApellidoM(), 
                            fechaNacimientoAsesor:getFechaNaciomientoAsesor(), 
                            tipoDocumento:getIdTipoDocumento(),nroDocumentoAsesor:getNroDocumentoAsesor(), 
                            tlfFijoAsesor:getTlfFijoAsesor(), tlfCelularAsesor:getTlfCelularAsesor(), 
                            idProvincia:getProvincia(),idCiudad:getCiudad(), direccion:getDireccion(), 
                            email:getEmailAsesor(), referido:getIdReferido(), lider:superLider, 
                            tipoContacto:getTipoContacto(), fechaActual:getFechaActual()},
                         url: '<?php echo base_url(); ?>index.php/cliente/registroAsesor/registroAsesoresDeBelleza',
                         success: function (data) 
                         {     
                           $.isLoading("hide");
                            if (data == true){
                                buscarIdCliente();
                                //ingresarTablaReferidos();
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
                    (getTipoDocumento() == '') || (getNroDocumentoAsesor() == '') || (getTlfCelularAsesor() == '') ||
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
            function validarNroDocumentoAsesor(){
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
                    data: {nroDocumentoAsesor:getNroDocumentoAsesor()},
                    url: '<?php echo base_url(); ?>index.php/cliente/registroAsesor/validarNroDocumentoAsesor',
                    success: function (data) 
                    {     
                        $.isLoading("hide");
                        if (data == false){
                            if (chequearValidacionesNroDocumentos() == true){
                                validarFormatoEmail();
                            }
                            else{
                                var text = 'Núnmero de documento inválido';
                                $.notific8(text, params);
                            }
                            
                            
                            //
                        }
                        else{
                            var text = 'El número de documento ingresado ya existe';
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
                        if ((data != '') && (data != null) && (data != undefined)){
                            setIdReferido(data);
                            if (getCodLider() != ''){
                                validarLiderIngresado();
                            }
                            else{
                                buscarIdSuperLider('S');
                            }
                            
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
                        if ((data != '') && (data != null) && (data != undefined)){
                            setIdLider(data);
                            if (validarCamposObligatorios()){
                                if (getCodLider() == ''){
                                    buscarIdSuperLider('S');
                                }
                                else{
                                    registroAsesoresDeBelleza(null);
                                }
                                
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
                                if (getCodLider() == ''){
                                    buscarIdSuperLider('S');
                                    
                                }
                                else{
                                    registroAsesoresDeBelleza(null);
                                }
                                
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
                                if (getCodLider() == ''){
                                    buscarIdSuperLider('S');
                                }
                                else{
                                    registroAsesoresDeBelleza(null);
                                }
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

                $.isLoading({
                    text: "Cargando",
                    position: "overlay"
                });

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
                    data: {nroDocumentoAsesor: getNroDocumentoAsesor()},
                    url: '<?php echo base_url(); ?>index.php/cliente/registroAsesor/buscarIdCliente',
                    success: function (data) 
                    {     
                        $.isLoading("hide");
                        if ((data != null) && (data != undefined) && (data != '')){
                            setIdCliente(data); //Asigno el valor Id_cliente 
                            if (getCodReferido() != ''){
                                ingresarTablaReferidos();
                            }
                            else{
                                crearCredencialesVendedor();
                            }

                        } 
                        else{
                            //$.isLoading("hide");
                            var text = 'Se presento un problema al registrar al asesor';
                            $.notific8(text, params);
                        }
                        
                    }
                }); 
            }

            //Metodo para ingresar en la tabla tab_referido
            function ingresarTablaReferidos(){

                 $.isLoading({
                    text: "Cargando",
                    position: "overlay"
                });

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
                    data: {nroDocumentoAsesor:getNroDocumentoAsesor(),fechaActual:getFechaActual(),codReferido: getIdReferido()},
                    url: '<?php echo base_url(); ?>index.php/cliente/registroAsesor/ingresarTablaReferidos',
                    success: function (data) 
                    {     
                        $.isLoading("hide");
                        if (data == true){
                            crearCredencialesVendedor();
                            //var text = 'Asesor Registrado correctamente';
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

            //Metodo para buscar quien es el super lider
            function buscarIdSuperLider(mcaSuperLider){
                
                 $.isLoading({
                    text: "Cargando",
                    position: "overlay"
                });

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
                    data: {mcaSuperLider:mcaSuperLider},
                    url: '<?php echo base_url(); ?>index.php/cliente/registroAsesor/buscarIdSuperLider',
                    success: function (data) 
                    {     
                       $.isLoading("hide");
                        if ((data != '') && (data != null) && (data != undefined)){
                            if (validarCamposObligatorios()){
                                registroAsesoresDeBelleza(data);
                            }
                            
                        }
                        else{
                            
                            var text = 'Se presento un problema al registrar al asesor';
                            $.notific8(text, params);
                            $('#modalregistroAsesoraB').modal('hide');
                        }
                       
                        
                    }
                });
            }

            //Metodo para la creacion de credenciales {
            function crearCredencialesVendedor(){

                 $.isLoading({
                    text: "Cargando",
                    position: "overlay"
                });
                var nombreCompleto = null;
                //Codicionamiento
                if ((getsNombreAsesor() != '') && getApellidoM() != ''){
                    nombreCompleto = getpNombreAsesor()+' '+getsNombreAsesor()+' '+getApellidoP()+' '
                    +getApellidoM();
                }
                else if ((getsNombreAsesor() != '') && (getApellidoM() == '')){
                    nombreCompleto = getpNombreAsesor()+' '+getsNombreAsesor()+' '+getApellidoP();
                }
                else if ((getsNombreAsesor() == '') && (getApellidoM() != '')){
                    nombreCompleto = getpNombreAsesor()+' '+getApellidoP()+' '+getApellidoM();
                }
                else if ((getsNombreAsesor() == '') && (getApellidoM() == '')){
                    nombreCompleto = getpNombreAsesor()+' '+getApellidoP();
                }

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
                    data: {nroDocumentoAsesor:getNroDocumentoAsesor(),idCliente:getIdCliente(), 
                        nombreCompleto:nombreCompleto},
                    url: '<?php echo base_url(); ?>index.php/cliente/registroAsesor/crearCredencialesVendedor',
                    success: function (data) 
                    {     
                        $.isLoading("hide");
                       if (data == true){
                            var text = 'Asesor Registrado correctamente';
                       }
                       else
                       {
                            var text = 'Se presento un problema al registrar al asesor';
                       }

                       $.notific8(text, params);
                       $('#modalregistroAsesoraB').modal('hide');
                        
                    }
                });
            }

            //Metodo para cargar los tipos de documentos
            function obtenerTipoDocumentos(){
                $.isLoading({
                    text: "Cargando",
                    position: "overlay"
                });

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

                //        
                $('#stipoDocumento').empty();                    
                $('#stipoDocumento').append($('<option>', {
                    value: '',
                    text: '-Seleccionar-'
                }));

                $.ajax({
                    type: 'POST',
                    async:false,
                    dataType: 'json',
                    data: {},
                    url: '<?php echo base_url(); ?>index.php/cliente/registroAsesor/obtenerTipoDocumentos',
                    success: function (data) 
                    {     
                        //$.isLoading("hide");
                        $.each(data, function(i, reg){
                            $('#stipoDocumento').append($('<option>', {
                                value: data[i].tipo_documento,
                                text: data[i].nombre_tipo_documento
                            }));
                        })

                        obtenerRoles();
                       
                        
                    }
                });
            }

            /*EVENTOS RELACIONADOS CON LA VALIDACION DEL TIPO DE DOCUMENTO*/
            function asignarValidacionANroDocumento(target) {
            /*RUC*/
                if (target.val() == 'RUC')
                {
                    $('#iNroDocumentoAsesor').removeAttr('cedula');
                    $('#iNroDocumentoAsesor').removeAttr('pasaporte');
                    $('#iNroDocumentoAsesor').attr('digits', true);
                    $('#iNroDocumentoAsesor').attr('maxlength', 13);
                    $('#iNroDocumentoAsesor').attr('minlength', 13);
                    $('#iNroDocumentoAsesor').attr('ruc', true);
                }
                /*REFUGIADO*/
                if (target.val() == 'R')
                {
                    $('#iNroDocumentoAsesor').removeAttr('cedula');
                    $('#iNroDocumentoAsesor').removeAttr('ruc');
                    $('#iNroDocumentoAsesor').removeAttr('pasaporte');
                    $('#iNroDocumentoAsesor').removeAttr('digits');
                    $('#iNroDocumentoAsesor').removeAttr('minlength');
                    $('#iNroDocumentoAsesor').attr('maxlength', 16);
                }
                /*PASAPORTE*/
                if (target.val() == 'P')
                {
                    $('#iNroDocumentoAsesor').removeAttr('cedula');
                    $('#iNroDocumentoAsesor').removeAttr('ruc');
                    $('#iNroDocumentoAsesor').removeAttr('digits');
                    $('#iNroDocumentoAsesor').attr('pasaporte', '^[A-Za-zÑñ]{1}[0-9]{6}$');
                    $('#iNroDocumentoAsesor').attr('maxlength', 7);
                    $('#iNroDocumentoAsesor').attr('minlength', 7);
                }
                /*CEDULA*/
                if (target.val() == 'C')
                {

                    $('#iNroDocumentoAsesor').removeAttr('pasaporte');
                    $('#iNroDocumentoAsesor').removeAttr('ruc');
                    $('#iNroDocumentoAsesor').attr('cedula', true);
                    $('#iNroDocumentoAsesor').attr('maxlength', 10);
                    $('#iNroDocumentoAsesor').attr('minlength', 10);
                    $('#iNroDocumentoAsesor').attr('digits', true);
                }

            }

            //Metodo para buscar el Id del tipo de documento
            function buscarIdTipoDocumento(){
                $.isLoading({
                    text: "Cargando",
                    position: "overlay"
                });

                $.ajax({
                    type: 'POST',
                    async:false,
                    dataType: 'json',
                    data: {tipoDocumento:getTipoDocumento()},
                    url: '<?php echo base_url(); ?>index.php/cliente/registroAsesor/buscarIdTipoDocumento',
                    success: function (data) 
                    {     
                        $.isLoading("hide");
                        setIdTipoDocumento(data);
                    }
                });
            }

            //Metodo para calcular Edad
            function calcularEdad(){
                fecha = new Date();

                var arregloFechaNaci = getFechaNaciomientoAsesor().split('-');
                //alert(parseInt(fecha.getFullYear() - arregloFechaNaci[0]));
                if ((parseInt(fecha.getFullYear() - arregloFechaNaci[0])) <= 18){
                    return false;
                    if (parseInt((fecha.getMonth()+1) - arregloFechaNaci[1]) <= 0){
                        if (parseInt((fecha.getMonth()+1) - arregloFechaNaci[1]) == 0){
                            if (parseInt(fecha.day - arregloFechaNaci[2]) <= 0){
                                return false;
                            }
                            else{
                                return true;
                            }
                        }
                        else if(parseInt((fecha.getMonth()+1) - arregloFechaNaci[1]) < 0){
                            return false;
                        }
                        else{
                            return true;
                        }
                    }
                    else{
                        return true;
                    }
                }
                else{
                    return true;
                }
            }


            //Carga de pantalla
            window.onload = function alcargar()
            {
                mostrarLogoMini();
                


                $('#sProvincia').change(function(){
                    setProvincia($("#sProvincia option:selected" ).val());
                    obtenerCiudades(getProvincia());
                });

                $('#bRegistrarAsesor').click(function(){   
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

                    if (calcularEdad()){
                        validarNroDocumentoAsesor();
                    }  
                    else{
                        var text = 'Los asesores deben ser mayores de 18 años';
                        $.notific8(text, params);
                    }
                    //
                });

                //Obtengo el tipo de contacto dependiendo del seleccionado
                //Mail
               $('#rtipContactoMail').click(function(){
                    if ($('#rtipContactoMail').is(':checked')){
                        setTipoContacto(1);
                    }
                });
                //Telefono
                $('#rtipContactoTlf').click(function(){
                    if ($('#rtipContactoTlf').is(':checked')){
                        setTipoContacto(2);
                    }
                });

                $('#bCancelarAsesor').click(function(){
                    
                    $('#ipNombreAsesor').val('');
                    $('#isNombreAsesor').val('');
                    $('#ipApellidoAsesor').val('');
                    $('#isApellidoAsesor').val('');
                    $('#ifNacimientoAsesor').mask('0000-00-00');
                    $('#iNroDocumentoAsesor').val('');
                    $('#itlfFijo').mask("00-000-0000", {placeholder: "00-000-0000"});
                    $('#itlfCelular').mask("00-0000-0000", {placeholder: "00-0000-0000"});
                    $('#sProvincia').val('');
                    $('#iDireccion').val('');
                    $('#ieMail').val('');
                    $('#ireferido').val('');
                    $('#ilider').val('');
                    $('#stipoDocumento').val('');
                    $("#rtipContactoMail").prop("checked", false);
                    $("#rtipContactoTlf").prop("checked", false);
                    $('#sCiudad').append($('<option>', {
                        value: '',
                        text: '-Seleccionar-'
                    }));

                    $('#formRegistroB')[0].reset();

                    $('#modalregistroAsesoraB').modal('hide');
                })


                //Validaciones numericas
                /*$('#itlfFijo').keypress(function(key) {
                    if(key.charCode < 48 || key.charCode > 57) return false;
                });*?

                /*$('#itlfCelular').keydown(function(event) {
                    if(event.shiftKey)  {
                        event.preventDefault();
                    }
                    if (event.keyCode > 57 ){ 
                        if (event.keyCode < 96 || event.keyCode > 105) {
                            event.preventDefault();
                        }          
                    }
                });*/
                /*$('#itlfCelular').keypress(function(key) {
                    if(key.charCode < 48 || key.charCode > 57) return false;
                });*/

                //Validacion Referido y Lider
                /*$('#ireferido').keypress(function(key) {
                    //alert(key.charCode);
                    if((key.charCode < 48) && (key.charCode != 0)){
                        return false;
                    } 
                    if (key.charCode > 57){
                        return false;
                    } 
                });

                $('#ilider').keypress(function(key) {
                    //alert(key.charCode);
                    if((key.charCode < 48) && (key.charCode != 0)){
                        return false;
                    } 
                    if (key.charCode > 57){
                        return false;
                    } 
                });*/

                $('#stipoDocumento').change(function () {
                    if (getTipoContacto() != ''){
                        buscarIdTipoDocumento();
                        asignarValidacionANroDocumento($(this));
                }
                
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
