<title>Lideres</title>
<!DOCTYPE html>
<html>
<head>
	<title></title>
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
</head>
<body>

</body>


<form name="formRegistroLider" method="post" action="" enctype="multipart/form-data" id="formRegistroLider">
	<div class="image-fondo-lotus">
		<div>
			<table>
				<colgroup>
                    <col width="50px"/>
                    <col width="200px"/>
                    <col width="50px"/>
                    <col width="200px"/>
                    <col width="50px"/>
                    <col width="200px"/>
                    <col width="50px"/>
                    <col width="200px"/>
                </colgroup>
				<tbody>
                    <br>
                    <tr>
                        <td></td>
                        <td><label class="control-label required" for="for_pnombreLider"> Primer Nombre
                            <span class="required"> * </span></label>
                        </td>
                        <td></td>
                        <td><label class="control-label required" for="for_snombreLider"> Segundo Nombre
                            </label>
                        </td>
                        <td></td>
                        <td><label class="control-label required" for="for_pApellidoLider"> Primer Apellido
                            <span class="required"> * </span></label>
                        </td>
                        <td></td>
                        <td><label class="control-label required" for="for_sApellidoLider"> Segundo Apellido
                            </label>
                        </td>
                    </tr>   
                    <tr>
                        <td></td>
                        <td><input id="ipNombreLider" class="form-control inputRegistro" type="text" name="ipNombreLider" maxlength="15">
                        </td>
                        <td></td>
                        <td><input id="isNombreLider" class="form-control inputRegistro" type="text" name="isNombreLider" maxlength="15">
                        </td>
                        <td></td>
                        <td><input id="ipApellidoLider" class="form-control inputRegistro" type="text" name="ipApellidoLider" maxlength="15">
                        </td>
                        <td></td>
                        <td><input id="isApellidoLider" class="form-control inputRegistro" type="text" name="isApellidoLider" maxlength="15"></td>
                    </tr>   
                    <br>
                    <tr>
                        <td></td>
                        <td><label class="control-label required" for="for_fNacimientoLider">Fecha de Nacimiento 
                        <span class="required"> * </span></label></td>
                        <td></td>
                        <td><label class="control-label required" for="for_TipDocumentoLider">Tipo de Documento 
                        <span class="required"> * </span></label></td>
                        <td></td>
                        <td><label class="control-label required" for="for_nroDocumentoLider">Número de Documento <span class="required"> * </span></label></td>
                        <td></td>
                        <td><label class="control-label required" for="for_TlfFijoLider">Teléfono Fijo </label>
                        </td>
                    </tr>   
                    <tr>
                        <td></td>
                        <td class='input-group'><span class="input-group-addon left">
                            <span class="glyphicon glyphicon-calendar"></span></span>
                            <input id="ifNacimientoLider" class="form-control dp"  placeholder="yyyy-mm-dd" type="text" name="ifNacimientoLider"></td>
                        <td></td>
                        <td><select id="stipoDocumentoLider" class="form-control">
                            </select>
                        </td>
                        <td></td>
                        <td><input id="iNroDocumentoLider" class="form-control inputRegistro" type="text" 
                            name="iNroDocumentoLider"></td>
                        <td></td>
                        <td><input id="itlfFijoLider" class="form-control inputRegistro" type="text" 
                            name="itlfFijo" maxlength="9"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><label class="control-label required" for="for_tlfCelularLider">Télefono Celular <span class="required"> * </span></label></td>
                        <td></td>
                        <td><label class="control-label required" for="for_paisLider">País </label></td>
                        <td></td>
                        <td><label class="control-label required" for="for_provinciaLider">Provincia <span class="required"> * </span></label></td>
                        <td></td>
                        <td><label class="control-label required" for="for_ciudadLider">Ciudad <span class="required"> * </span></label></td>
                    </tr> 
                    <tr>
                        <td></td>
                        <td><input id="itlfCelularLider" class="form-control inputRegistro" type="text" 
                            name="itlfCelularLider" maxlength="10"></td>
                        <td></td>
                        <td><input id="ipaisLider" class="form-control inputRegistro" type="text" 
                            name="ipaisLider" maxlength="10" value="Ecuador" disabled="disabled"></td>
                        <td></td>
                        <td><select id="sProvinciaLider" class="form-control">
                            </select></td>
                        <td></td>
                        <td><select id="sCiudadLider" class="form-control">
                            </select></td>    
                    </tr> 
                    <tr>
                        <td></td>
                        <td><label class="control-label required" for="for_DireccionLider">Dirección <span class="required"> * </span></label></td>
                        <td></td>
                        <td><label class="control-label required" for="for_emailLider">E-Mail<span class="required"> * </span></label></td>
                        <td></td>
                        <td><label class="control-label required" for="for_referidoLider">Código del Referido
                        </label></td>
                        <td></td>
                        <td><label class="control-label required" for="for_LiderLiderr">Código del Lider 
                            </label></td>
                    </tr>  
                    <tr>
                        <td></td>
                        <td><input id="iDireccionLider" class="form-control inputRegistro" type="text" 
                            name="iDireccionLider" maxlength="100"></td>
                        <td></td>
                        <td><input id="ieMailLider" class="form-control inputRegistro" type="text" 
                            name="ieMailLider" maxlength="50"></td>
                        <td></td>
                        <td><input id="ireferidoLider" class="form-control inputRegistro" type="text" 
                            name="ireferidoLider" maxlength="5"></td>
                        <td></td>
                        <td><input id="iliderLider" class="form-control inputRegistro" type="text" 
                            name="ilider" maxlength="5"></td>
                    </tr>                  
                </tbody>
			</table>
			
		</div>
		<br>
		<div class="panel-footer">
            <div class="pull-right">
                <a type='button' style="min-width: 80px;" class='btn btn-default btn-sm' 
                href="<?php echo base_url(); ?>index.php/index/index">SALIR</a>
                <button id="bRegistrarLider" type="button" class="formulario_personas_guardar btn-success btn btn-sm">REGISTRAR</button>
            </div>
            <div class="clearfix"></div>


		</div>

	</div>
</form>


 <script src="<?= base_url('assets/application/js/validation-extended.js') ?>" type="text/javascript"></script>
    <script type="text/javascript">  
	    //DatePicker
	    $('.dp').datepicker({format: "yyyy-mm-dd",
	        language: 'es',
	        autoclose: true,
	        forceParse: true,
	        enableOnReadonly: true
	    });

	    /***************************************DECLARACION DE VARIABLES**************************************/
	    var valProvincia = null;
	    /***************************************GETTER Y SETTER***********************************************/
        //Primer Nombre
        function getpNombreLider(){
            return $('#ipNombreLider').val().toUpperCase();
        }
        //Segundo Nombre
        function getsNombreLider(){
            return $('#isNombreLider').val().toUpperCase();
        }
        //Apelliodo Paterno
        function getApellidoPLider(){
            return $('#ipApellidoLider').val().toUpperCase();
        } 
        //Apelliodo Materno
        function getApellidoMLider(){
            return $('#isApellidoLider').val().toUpperCase();
        }
        //Fecha de nacimiento
        function getFechaNaciomientoLider(){
            return $('#ifNacimientoLider').val();
        }
        //Tipo de Documento
        function getTipoDocumentoLider(){
            return $("#stipoDocumentoLider option:selected" ).val();
        }
        //Cedula
        function getNroDocumentoLider(){
            return $('#iNroDocumentoLider').val();
        }
        //Telefono Fijo
        function getTlfFijoLider(){
            return $('#itlfFijoLider').val();
        }
        //Telefono Celular
        function getTlfCelularLider(){
            return $('#itlfCelularLider').val();
        }
        //Provincia
        function getProvinciaLider(){
            return valProvincia;
        }

        function setProvinciaLider(valor){
            valProvincia = valor;
        }
        //Ciudad/Canton
        function getCiudadLider(){
            return $("#sCiudadLider option:selected" ).val();
        }
        //Direccion
        function getDireccionLider(){
            return $('#iDireccionLider').val().toUpperCase();
        }
        //E-mail
        function getEmailLider(){
            return $('#ieMailLider').val();
        }
        //Referido por
        function getCodReferidoLider(){
            return $('#ireferidoLider').val();
        }
        //Lider
        function getCodLiderLider(){
            return $('#iliderLider').val();
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

	    //Carga de pantalla
	    window.onload = function alcargar()
	    {
	    	inicializarCampos();

	        $('#sProvinciaLider').change(function(){
	            setProvinciaLider($("#sProvinciaLider option:selected" ).val());
	            obtenerCiudadesLider(getProvinciaLider());
	        });

	        $('#bRegistrarLider').click(function(){
	            validarNroDocumentoLider();
	        });

	        //Validaciones numericas
	        /*$('#itlfFijoLider').keypress(function(key) {
	            if(key.charCode < 48 || key.charCode > 57) return false;
	        });*/

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
	        /*$('#itlfCelularLider').keypress(function(key) {
	            if(key.charCode < 48 || key.charCode > 57) return false;
	        });*/

	        //Validacion Referido y Lider
	        $('#ireferidoLider').keypress(function(key) {
	            if(key.charCode < 48 || key.charCode > 57) return false;
	        });

	        $('#iliderLider').keypress(function(key) {
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
            $('#stipoDocumentoLider').change(function () {
                if (getTipoDocumentoLider() != ''){
                    buscarIdTipoDocumento();
                    asignarValidacionANroDocumento($(this));
                }
                
            });

	    };

	    //Metodo para inicializar los campos
        function inicializarCampos(){

	        $('#ipNombreLider').val('');
	        $('#isNombreLider').val('');
	        $('#ipApellidoLider').val('');
	        $('#isApellidoLider').val('');
	        $('#ifNacimientoLider').mask('0000-00-00');
	        $('#stipoDocumentoLider').val('');
	        $('#iNroDocumentoLider').val('');
	        $('#itlfFijoLider').mask("00-000-0000", {placeholder: "00-000-0000"})
	        $('#itlfCelularLider').mask("00-0000-0000", {placeholder: "00-0000-0000"})
	        $('#sCiudad').val('');
	        $('#sProvinciaLider').val('');
	        $('#sCiudadLider').val('');
	        $('#iDireccionLider').val('');
	        $('#ieMailLider').val('');
	        $('#sRireferidoLiderol').val('');
	        $('#iliderLider').val('');
            $('#sCiudadLider').append($('<option>', {
                value: '',
                text: '-SELECCIONAR-'
            }));

	        obtenerTipoDocumentosLider();
	    }

        //Metodo para cargar los tipos de documentos
        function obtenerTipoDocumentosLider(){
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
            $('#stipoDocumentoLider').empty();                        
            $('#stipoDocumentoLider').append($('<option>', {
                value: '',
                text: '-SELECCIONAR-'
            }));

            $.ajax({
                type: 'POST',
                async:false,
                dataType: 'json',
                data: {},
                url: '<?php echo base_url(); ?>index.php/cliente/registroLider/obtenerTipoDocumentosLider',
                success: function (data) 
                {     
                    //$.isLoading("hide");
                    $.each(data, function(i, reg){
                        $('#stipoDocumentoLider').append($('<option>', {
                            value: data[i].tipo_documento,
                            text: data[i].nombre_tipo_documento
                        }));
                    });

                    obtenerProvinciasLider();
                }
            });
        }

        //Metodo para obtener las provincias
        function obtenerProvinciasLider(){
                  /*$.isLoading({
                           text: "Cargando",
                           position: "overlay"
                          });*/
                $('#sProvinciaLider').empty();
                $('#sProvinciaLider').append($('<option>', {
	                value: '',
	                text: '-SELECCIONAR-'
           		 }));

                  $.ajax({
                         type: 'POST',
                         async:false,
                         dataType: 'json',
                         data: {},
                         url: '<?php echo base_url(); ?>index.php/cliente/registroLider/obtenerProvinciasLider',
                         success: function (data) 
                         {     
                            $.isLoading("hide");
                            $.each(data, function(i, reg){
                                $('#sProvinciaLider').append($('<option>', {
                                    value: data[i].id_provincia,
                                    text: data[i].nombre_provincia
                                }));
                            })

                         }
                });  
                
            }

            //Metodo para obtener las ciudades
            function obtenerCiudadesLider(idProvincia){
                    $.isLoading({
                           text: "Cargando",
                           position: "overlay"
                    });


                    $('#sCiudadLider').empty();
                    $('#sCiudadLider').append($('<option>', {
		                value: '',
		                text: '-SELECCIONAR-'
           		 	}));

                    $.ajax({
                         type: 'POST',
                         async:false,
                         dataType: 'json',
                         data: {idProvincia:idProvincia},
                         url: '<?php echo base_url(); ?>index.php/cliente/registroLider/obtenerCiudadesLider',
                         success: function (data) 
                         {     
                            $.isLoading("hide");
                            $.each(data, function(i, reg){
                                $('#sCiudadLider').append($('<option>', {
                                    value: data[i].id_canton,
                                    text: data[i].nombre_canton
                                }));
                            })


                         }
                });  
            }

            //Validar si la cedula existe
            function validarNroDocumentoLider(){
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
                    data: {nroDocumentoLider:getNroDocumentoLider()},
                    url: '<?php echo base_url(); ?>index.php/cliente/registroLider/validarNroDocumentoLider',
                    success: function (data) 
                    {     
                        $.isLoading("hide");
                        if (data == false){
                            validarFormatoEmailLider();
                            //
                        }
                        else{
                            var text = 'El número de cédula ingresado ya existe';
                            $.notific8(text, params);
                        }

                    }
                });
            }

                      //Validacion correo electronico
            function validarFormatoEmailLider(){
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

                var correcto = regex.test(getEmailLider());

                if (correcto) {
                    if(getCodReferidoLider() != ''){
                        validarReferidoIngresadoLider();
                    }
                    else if (getCodReferidoLider() != ''){
                            validarCodigoLiderIngresado();
                    }
                    else{
                        if (validarCamposObligatoriosLider()){
                            if (getCodLiderLider() == ''){
                                buscarIdSuperLider('S');
                            }
                            else{
                                registroLider(null);
                            }
                        }
                    }

                } else {
                    var text = 'Formato de Correo electrónico inválido';
                    $.notific8(text, params);
                    
                }

            }

            //Metodo para validar si existe la persona quien refirio
            function validarReferidoIngresadoLider(){
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
                    data: {codReferidoLider:getCodReferidoLider()},
                    url: '<?php echo base_url(); ?>index.php/cliente/registroLider/validarReferidoIngresadoLider',
                    success: function (data) 
                    {     
                        $.isLoading("hide");
                        if (data == true){
                        	if (getCodLiderLider() != ''){
                        		validarCodigoLiderIngresado();
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
            function validarCodigoLiderIngresado(){
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
                    data: {codLider:getCodLiderLider()},
                    url: '<?php echo base_url(); ?>index.php/cliente/registroLider/validarCodigoLiderIngresado',
                    success: function (data) 
                    {     
                        $.isLoading("hide");
                        if (data == true){
                            if (validarCamposObligatoriosLider()){
                                if (getCodLiderLider() == ''){
                                    buscarIdSuperLider('S');
                                }
                                else{
                                    registroLider(null);
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
                    url: '<?php echo base_url(); ?>index.php/cliente/registroLider/buscarIdSuperLider',
                    success: function (data) 
                    {     
                       $.isLoading("hide");
                        if ((data != '') && (data != null) && (data != undefined)){
                            registroLider(data);
                        }
                        else{
                            
                            var text = 'Se presento un problema al registrar al Lider';
                            $.notific8(text, params);
                            
                        }
                       
                        
                    }
                });
            }

                        //Validaciones de campos
            function validarCamposObligatoriosLider(){

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

                if ((getpNombreLider() == '') || (getApellidoPLider() == '') || (getFechaNaciomientoLider() == '') || (getTipoDocumentoLider() == '') || (getNroDocumentoLider() == '') || (getTlfCelularLider() == '') || (getProvinciaLider() == '') || (getCiudadLider() == '') || (getDireccionLider() == '') || 
                    (getEmailLider() == '')){

                    bandera = false;
                }

                if (bandera == false){
                    var text = 'Los campos con (*) son obligatorios';
                    $.notific8(text, params);
                }

                return bandera;
            }

            //Metodo para crear a los asesores
            function registroLider(idSuperLider){

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
                    if ((getCodLiderLider() == '') || (getCodLiderLider() == null)){
                        superLider = idSuperLider;
                    }
                    else{
                        superLider = getCodLiderLider();
                    }


                    $.ajax({
                         type: 'POST',
                         async:false,
                         dataType: 'json',
                         data: {pNombreLider:getpNombreLider(), sNombreLider:getsNombreLider(), 
                            apellidoPLider:getApellidoPLider(), apellidoMLider:getApellidoMLider(), 
                            fechaNacimientoLider:getFechaNaciomientoLider(), 
                            tipoDocumentoLider:getTipoDocumentoLider(),nroDocumentoLider:getIdTipoDocumento(), 
                            tlfFijoLider:getTlfFijoLider(), tlfCelularLider:getTlfCelularLider(), 
                            idProvincia:getProvinciaLider(),idCiudad:getCiudadLider(), 
                            direccion:getDireccionLider(), email:getEmailLider(), referido:getCodReferidoLider(), lider:superLider, fechaActual:getFechaActual()},
                         url: '<?php echo base_url(); ?>index.php/cliente/registroLider/registroLider',
                         success: function (data) 
                         {     
                           $.isLoading("hide");
                            if (data == true){
                                //buscarIdCliente();
                                
                                if (getCodReferidoLider() != ''){
                                	ingresarTablaReferidos();
                                }
                                else{
                                	var text = 'Lider Registrado correctamente';
                                	// show notification
                                	$.notific8(text, params);

                                    $('#formRegistroLider').attr('action','<?php echo base_url(); ?>index.php/cliente/registroLider/mostrarIngresoSistema');
                                    $('#formRegistroLider').submit();

                                	/*var url = "<?php echo base_url(); ?>index.php/cliente/registroLider/mostrarIngresoSistema";
									window.open(url ,'_self');*/
                                } 
                            }
                            else{  
                                var text = 'Se presento un problema al registrar al Lider';
                                // show notification
                                $.notific8(text, params);
                            }
                            
                            
                           
                            

                         }
                }); 
            }

            //Metodo para ingresar en la tabla tab_referido
            function ingresarTablaReferidos(idCliente){

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
                    data: {nroDocumentoLider:getNroDocumentoLider(),fechaActual:getFechaActual(),codReferido: getCodReferidoLider()},
                    url: '<?php echo base_url(); ?>index.php/cliente/registroLider/ingresarTablaReferidos',
                    success: function (data) 
                    {     
                        $.isLoading("hide");
                       if (data == true){
                            var text = 'Lider Registrado correctamente';
                       }
                       else
                       {
                            var text = 'Se presento un problema al registrar al Lider';
                       }

                       $.notific8(text, params);
 
                    }
                }); 
            }

    /*EVENTOS RELACIONADOS CON LA VALIDACION DEL TIPO DE DOCUMENTO*/
    function asignarValidacionANroDocumento(target) {
        /*RUC*/
        if (target.val() == 'RUC')
        {
            $('#iNroDocumentoLider').removeAttr('cedula');
            $('#iNroDocumentoLider').removeAttr('pasaporte');
            $('#iNroDocumentoLider').attr('digits', true);
            $('#iNroDocumentoLider').attr('maxlength', 13);
            $('#iNroDocumentoLider').attr('minlength', 13);
            $('#iNroDocumentoLider').attr('ruc', true);
        }
        /*REFUGIADO*/
        if (target.val() == 'R')
        {
            $('#iNroDocumentoLider').removeAttr('cedula');
            $('#iNroDocumentoLider').removeAttr('ruc');
            $('#iNroDocumentoLider').removeAttr('pasaporte');
            $('#iNroDocumentoLider').removeAttr('digits');
            $('#iNroDocumentoLider').removeAttr('minlength');
            $('#iNroDocumentoLider').attr('maxlength', 16);
        }
        /*PASAPORTE*/
        if (target.val() == 'P')
        {
            $('#iNroDocumentoLider').removeAttr('cedula');
            $('#iNroDocumentoLider').removeAttr('ruc');
            $('#iNroDocumentoLider').removeAttr('digits');
            $('#iNroDocumentoLider').attr('pasaporte', '^[A-Za-zÑñ]{1}[0-9]{6}$');
            $('#iNroDocumentoLider').attr('maxlength', 7);
            $('#iNroDocumentoLider').attr('minlength', 7);
        }
        /*CEDULA*/
        if (target.val() == 'C')
        {

            $('#iNroDocumentoLider').removeAttr('pasaporte');
            $('#iNroDocumentoLider').removeAttr('ruc');
            $('#iNroDocumentoLider').attr('cedula', true);
            $('#iNroDocumentoLider').attr('maxlength', 10);
            $('#iNroDocumentoLider').attr('minlength', 10);
            $('#iNroDocumentoLider').attr('digits', true);
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
            data: {tipoDocumento:getTipoDocumentoLider()},
            url: '<?php echo base_url(); ?>index.php/cliente/registroLider/buscarIdTipoDocumento',
            success: function (data) 
            {     
                $.isLoading("hide");
                setIdTipoDocumento(data); 
            }
        });
    }

    //Pagina de ingreso al sistema

   //asignarValidacionANroDocumento($('#iNroDocumentoLider'));
	</script>
</html>

