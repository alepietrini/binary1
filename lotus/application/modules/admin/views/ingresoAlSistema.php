<style type="text/css">
            
            .form-control[disabled], .form-control[readonly], fieldset[disabled] .form-control {
                background-color: #fff;
                opacity: 1;
            }
            
            
            .image-fondo-lotus{
                background-image:url("<?= base_url('assets/librerias/images/fondo-lotus.jpg') ?>");
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
<title>Lotus</title>
<form name="formulario_personas" method="post" action="<?php echo base_url(); ?>index.php/clientes/clientes/procesarFormularioGestionBasicaPN<?php if(isset($ID_CLIENTE) && $ID_CLIENTE != NULL){ echo "/".$ID_CLIENTE ;} ?>" enctype="multipart/form-data">
	<div class="image-fondo-lotus">
		
	</div>

	    

    
</form>