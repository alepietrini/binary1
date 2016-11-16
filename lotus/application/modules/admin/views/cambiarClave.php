<title>Admin</title>


    <div class="panel panel-success">

        <div class="panel-heading">Cambiar contraseña de usuario</div>
        <div class="panel-body">
 <div class="row" ><br><br> <input type="hidden" id="id_usuapass" value="<?php if ($this->session->userdata('loggeado')){echo $this->session->userdata('loggeado')['ID_USUARIO']; } ?>" /> </div>
            <div class="row" > 
                <div class="col-md-offset-4 col-sm-4 col-xs-12">
                     <div class="form-group form-group-sm">                
                            <label class="control-label required">Contraseña Anterior<span class="required"> * </span></label>                            
                            <input type="password" id="clave_old" required="required" class="form-control" placeholder="Contraseña anterior"/>                                    
                            <div id="msgpold" style="display:none;"><span class="help-block" style="color:red;"> Este campo es obligatorio</span></div>      
                        </div>
                </div>                     
            </div>
            <div class="row" > 
              <div class="col-md-offset-4  col-sm-4 col-xs-12">
                    <div class="form-group form-group-sm">
                        <label class="control-label required">Contraseña Nueva<span class="required"> * </span></label>  
                       <input type="password" id="clave_new1" required="required"class="form-control"placeholder="Contraseña nueva"/>                                    
                       <div id="msgp1" style="display:none;"><span class="help-block" style="color:red;"> Este campo es obligatorio</span></div>             
                        <div id="msgx"></div>
                    </div>
                </div>     
            </div>
            <div class="row" > 
              <div class="col-md-offset-4  col-sm-4 col-xs-12">
                    <div class="form-group form-group-sm">
                    <label class="control-label required" >Repita la Contraseña Nueva<span class="required"> * </span></label>
                        <input type="password" id="clave_new2" required="required" class="form-control" placeholder="Repita la contraseña nueva"/>         
                        <div id="msgp2" style="display:none;"><span class="help-block" style="color:red;"> Este campo es obligatorio</span></div> 
                    </div>
                </div>     
            </div>
            </div>
          
 <div class="row" ><br><br> </div>

        </div>
        <div class="panel-footer">                    
            <div class="pull-right">  
                 <button onclick="comprobarClave()" class="btn-success btn btn-sm">GUARDAR</button>

            </div>
            <div class="clearfix"> </div>

        </div>

    </div>
<script src="http://pajhome.org.uk/crypt/md5/2.2/md5-min.js"></script>
<script type="text/javascript">

function redireccionar(){
  window.location='<?php echo base_url(); ?>index.php/admin/login/logout';
} 


function comprobarClave(){

    var passold= $('#clave_old').val();
    var pass1=$('#clave_new1').val();
    var pass2=$('#clave_new2').val(); 
    var email=$('#email').val();
    //script a dónde se realizará la petición.
    var usuario = $('#id_usuapass').val();
    if( passold =="")
        {
        $('#msgpold').show();
        $('#msgpold').html();
        //$('#clave_old').focus();
        }
        else
            {
                $('#msgpold').hide();
            }
    if( pass1 =="")
        {
        $('#msgp1').show();
        //$('#clave_new1').focus();
        } 
         else
            {
                $('#msgp1').hide();
            }
    if( pass2 =="")
        {
        $('#msgp2').show();
        //$('#clave_new2').focus();
        }
         else
            {
                $('#msgp2').hide();
            }


var url = '<?php echo base_url(); ?>index.php/admin/usuario/verificarpassold'; // El 

    if( passold !="" && pass1 !="" && pass2 !=""){
                $.ajax({
                        type: "POST",
                        url: url,
                        dataType: 'json',
                        data: {usuario: usuario}, // Adjuntar los campos del formulario enviado.
                        success: function (data)
                        {
                           
                            console.log(data);
                            

                            var passoldmd5=hex_md5(passold);                           
                            var passoldx=data['CLAVE'];
                        
                            if(passoldmd5 === passoldx){
                                
                           

                                if(pass1===pass2){

                                    if(pass1.length >8){


                                                     var url1 = '<?php echo base_url(); ?>index.php/admin/usuario/updateClave';
                                                        $.ajax({
                                                        type: "POST",
                                                        url: url1,
                                                        dataType: 'json',
                                                        data: {usuario: usuario, pass:pass1}, // Adjuntar los campos del formulario enviado.
                                                        success: function (data)
                                                            {
                                                               
                                                                var params = {                
                                                                onInit: function(data) {
                                                                },
                                                                onCreate: function(notification, data) {
                                                                },
                                                                onClose: function(notification, data) {
                                                                }
                                                                };
                                                                var text = 'Se a modificado con éxito su contraseña';
                                                                params.heading = 'Notificación';
                                                                params.theme = 'teal';
                                                                params.life = '4000';
                                                                // show notification
                                                                $.notific8(text, params);
                                                                setTimeout ("redireccionar()", 1000);
                                                            }
                                                        }); 

                                                
                                            
                                                                                        


                                        }
                                         else
                                         {

                                            //parametros de  las notificaciones
                                            var params = {                
                                                onInit: function(data) {
                                                },
                                                onCreate: function(notification, data) {
                                                },
                                                onClose: function(notification, data) {
                                                }
                                                };
                                                var text = 'La contraseña debe tener minimo 8 caracteres alfanumericos!';
                                                params.heading = 'Notificación';
                                                params.theme = 'ruby';
                                                params.life = '4000';
                                                //------------------------------
                                                // show notification
                                                $.notific8(text, params);

                                                //-----------------
                                                $('#clave_new1').focus();
                                         }

                                    
                                }else
                                {
                                    var params = {                
                                    onInit: function(data) {
                                    },
                                    onCreate: function(notification, data) {
                                    },
                                    onClose: function(notification, data) {
                                    }
                                    };
                                    var text = 'Las contraseñas nuevas no coinciden!';
                                    params.heading = 'Notificación';
                                    params.theme = 'ruby';
                                    params.life = '4000';
                                    // show notification
                                    $.notific8(text, params); 
                                }
                            }
                            else
                            {
                                var params = {                
                                    onInit: function(data) {
                                    },
                                    onCreate: function(notification, data) {
                                    },
                                    onClose: function(notification, data) {
                                    }
                                    };
                                var text = 'La contraseña anterior no coincide con la ingresada. Verifique y vuelva a intentar!';
                                params.heading = 'Notificación';
                                params.theme = 'ruby';
                                params.life = '4000';
                                // show notification
                                $.notific8(text, params);
                            }
                        }

                    }); //fin del ajax
                
                }//fin de if si estan vacios
            }

     
</script>
