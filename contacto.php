<?php include "template/cabecera.php";

if (isset($_POST['fname'])){
    $nombres=htmlentities($_POST['fname']);
    $email_cliente=htmlentities($_POST['email']);
    $telefono=htmlentities($_POST['phone']);
    $subject=utf8_decode($_POST['subject']);
    $mensaje=htmlentities($_POST['message']);

    
/*SIGUE RECOLECTANDO DATOS PARA FUNCION MAIL*/
$message = '';
$message .= '<p>Hola, ha sido registrado un nuevo mensaje desde el formulario de contacto del sitio web, según el detalle siguiente:</p> ';
$message .= '<p>Cliente: '.$nombres.'</p> ';
$message .= '<p>Email: '.$email_cliente.'</p> ';
$message .= '<p>Teléfono: '.$telefono.'</p> ';
$message .= '<p>Mensaje: '.$mensaje.'</p> ';




$header = "MIME-Version: 1.0\r\n";
$header .= "Content-type: text/html; charset=UTF-8\r\n";
$header .= "From: ". $nombres . " <" . $email_cliente . ">\r\n";
$email='';//Ingresa tu dirección de correo

        
if (mail($email,$subject,$message,$header))
{
    echo 'success';
}	 
else 
{
    echo 'No se pudo enviar el mensaje.';
}
/*FINALIZA RECOLECTANDO DATOS PARA FUNCION MAIL*/


}

?>

<div class="container-md-12">
<div class="card">
    <div class="card-header">
        Contactanos
    </div>
    <div class="card-body">
    <section id="contact-form-section" class="form-content-wrap">
		<div class="container">
			<div class="row">
				<div class="tab-content">
					<div class="col-md-12">
						<div class="item-wrap">
							<div class="row">
								
							
                            
								<div class="col-md-12">
								
						         
								<form id="contactForm" name="contactform" data-toggle="validator" class="popup-form">
												<div class="row">
													<div id="msgContactSubmit" class="hidden"></div>
													
													<div class="form-group col-sm-6">
														<div class="help-block with-errors"></div>
														<input name="fname" id="fname" placeholder="Tu nombre*" class="form-control" type="text" required data-error="Por favor ingresa tu nombre"> 
														<div class="input-group-icon"><i class="fa fa-user"></i></div>
													</div><!-- end form-group -->
													<div class="form-group col-sm-6">
														<div class="help-block with-errors"></div>
														<input name="email" id="email" placeholder="Tu E-mail*" pattern=".*@\w{2,}\.\w{2,}" class="form-control" type="email" required data-error="Por favor ingresa un correo electrónico válido">
														<div class="input-group-icon"><i class="fa fa-envelope"></i></div>
													</div><!-- end form-group -->
													<div class="form-group col-sm-6">
														<div class="help-block with-errors"></div>
														<input name="phone" id="phone" placeholder="Teléfono*" class="form-control" type="text" required data-error="Por favor ingresa tu número de teléfono">
														<div class="input-group-icon"><i class="fa fa-phone"></i></div> 
													</div><!-- end form-group -->
													<div class="form-group col-sm-6">
														<div class="help-block with-errors"></div>
														<input name="subject" id="subject" placeholder="Asunto*" class="form-control" type="text" required data-error="Por favor ingresa el asunto">
														<div class="input-group-icon"><i class="fa fa-book"></i></div> 
													</div><!-- end form-group -->
													<div class="form-group col-sm-12">
														<div class="help-block with-errors"></div>
														<textarea rows="3" name="message" id="message" placeholder="Escribe tu comentario aquí*" class="form-control" required data-error="Por favor ingresa un mensaje"></textarea>
														<div class="textarea input-group-icon"><i class="fa fa-pencil"></i></div>
													</div><!-- end form-group -->
													
													<div class="form-group last col-sm-12">
														<button type="submit" id="submit" class="btn btn-custom"><i class='fa fa-envelope'></i> Enviar</button>
													</div><!-- end form-group -->	
											
													
													<div class="clearfix"></div>
												</div><!-- end row -->
											</form><!-- end form -->
											
											
									
									
								  
								
								</div>
							</div><!--End row -->
							
						
								
							
							<!-- Popup end -->
							
						</div><!-- end item-wrap -->
					</div><!--End col -->
				</div><!--End tab-content -->
			</div><!--End row -->
		</div><!--End container -->
	</section>
    </div>
    
</div>
</div>
<br>

<?php include "template/footer.php";?>