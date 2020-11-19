<div class="login-form-area mg-t-30 mg-b-40">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-4"></div>
			<form id="adminpro-form" class="adminpro-form" action="insertar-revendedor.php" method="post">
				<div class="login-form-area mg-t-30 mg-b-15">
					<div class="container-fluid">
						<div class="row">
							<div class="col-lg-3"></div>
							<form id="adminpro-register-form" class="adminpro-form">
								<div class="col-lg-6">
									<div class="login-bg">
										<div class="row">
											<div class="col-lg-12">
												<div class="logo">
													<a href="#"><img src="reclutar_logo.jpg" alt="" />
                                                </a>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-lg-12">
												<div class="login-title">
													<h1>Expandi tu Negocio al Maximo, Empesa HOY</h1>
												</div>
											</div>
										</div>
                                        <div class="row">
											<div class="col-lg-4">
												<div class="login-input-head">
													<p>e-mail </p>
												</div>
											</div>
											<div class="col-lg-8">
												<div class="login-input-area">
													<input type="email" name="e_mail" required>
													<i class="fa fa-envelope login-user" aria-hidden="true"></i>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-lg-4">
												<div class="login-input-head">
													<p>Nombre</p>
												</div>
											</div>
											<div class="col-lg-8">
												<div class="login-input-area">
													<input type="text" name="nombre" required>
													<i class="fa fa-user login-user"></i>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-lg-4">
												<div class="login-input-head">
													<p>Apellido</p>
												</div>
											</div>
											<div class="col-lg-8">
												<div class="login-input-area">
													<input type="text" name="apellido" required>
													<i class="fa fa-user login-user"></i>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-lg-4">
												<div class="login-input-head">
													<p>DNI</p>
												</div>
											</div>

											<div class="col-lg-8">
												<div class="login-input-area">
													<input type="text" name="dni" required>
													<i class="fa fa-user login-user"></i>
												</div>
											</div>
										</div>
										<div class="row" style="">
											<div class="col-lg-4">
												<div class="login-input-head">
													<p>Fecha Nacimiento</p>
												</div>
											</div>
											<br>
											<div class="col-lg-8">
												<div class="login-input-area">
													<input type="date" name="fecha_nacimiento" id="start" required>

												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-lg-4">
												<div class="login-input-head">
													<p>Domicilio</p>
												</div>
											</div>
											<div class="col-lg-8">
												<div class="login-input-area">
													<input type="text" name="domicilio" >
													<i class="fa fa-user login-user"></i>
												</div>
											</div>
										</div>
									
										
										<div class="row">
											<div class="col-lg-4">
												<div class="login-input-head">
													<p>Telefono </p>
												</div>
											</div>
											<div class="col-lg-8">
												<div class="login-input-area">
													<input type="text" name="telefono"/>
													<i class="fa fa-phone login-user" aria-hidden="true"></i>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-lg-4">
												<div class="login-input-head">
													<p>Contraseña</p>
												</div>
											</div>
											<div class="col-lg-8">
												<div class="login-input-area">
													<input type="password" name="contrasenia" required>
													<i class="fa fa-lock login-user"></i>
												</div>
											</div>
										</div>
								
										<div class="row">
												<div class="col-lg-4">
													<div class="login-input-head">
														<p>Pregunta Secreta</p>
													</div>
												</div>
												<div class="col-lg-7">
													<div class="interested-input-area">
														<select name="pregunta_secreta" required>
															<option value="none" selected="" disabled="">Selecciona una pregunta</option>
															<option value="¿Cúal es el nombre de tu primer mascota?">¿Cúal es el nombre de tu primer mascota?</option>
															<option value="¿Cúal es tu color favorito?">¿Cúal es tu color favorito?</option>
															<option value="¿Cúal es el nombre de tu primer novio/a?">¿Cúal es el nombre de tu primer novio/a?</option>
														
															
														</select>
													</div>
												</div>
											</div>
										<div class="row">
											<div class="col-lg-4">
												<div class="login-input-head">
													<p>Respuesta</p>
												</div>
											</div>
											<div class="col-lg-8">
												<div class="login-input-area">
													<input type="text" name="respuesta_secreta" required>
													<i class="fa fa-user login-user"></i>
												</div>
											</div>
										</div>
                                        <div class="row">
												<div class="col-lg-4">
													<div class="login-input-head">
														<p>Referente</p>
													</div>
												</div>
												<div class="col-lg-7">
													<div class="interested-input-area">
														<select name="referente" required>
															<option value="none" selected="" disabled="">Selecciona quien referencia la incorporacion</option>
															<?php
                                                            include("validar-referente.php");
														
                                                                ?>
														</select>
													</div>
												</div>
											</div>
									
											<br>
											<div class="row">
												<div class="col-lg-4"></div>

												&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
												<a href="pantalla-principal.php?menu=bienvenida">
                                                <button type="button" class="btn btn-custon-four btn-primary"   >&nbsp;&nbsp;Atras &nbsp;&nbsp;</button>
                                                </a>
												&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
												<a href="pantalla-principal.php?menu=bienvenida">
                                                <button type="submit" class="btn btn-custon-four btn-primary">&nbsp;&nbsp;Incorporar&nbsp;&nbsp; </button></a>
											
												<br><br><br>

											</div>
										
									</div>
								</div>
						   </div>
						</div>
					</form>
					<div class="col-lg-3"></div>
				</div>
			</form>
			<div class="col-lg-4"></div>
		</div>
	</div>