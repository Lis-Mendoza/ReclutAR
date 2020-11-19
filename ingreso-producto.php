<div class="login-form-area mg-t-30 mg-b-40">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-4"></div>
			<form id="adminpro-form" class="adminpro-form" action="insertar-producto.php" method="post">
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
													<h2>Expandí tu Negocio al Maximo</h2>
													<h1>Recordá que Muchos Venden Mejor que Uno!</h1>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-lg-4">
												<div class="login-input-head">
													<p>Nombre del Producto</p>
												</div>
											</div>
											<div class="col-lg-8">
												<div class="login-input-area">
													<i class="fa fa-briefcase login-user" aria-hidden="true"></i>
													<input type="text" name="nombre" required>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-lg-4">
												<div class="login-input-head">
													<p>Descripción del Producto </p>
												</div>
											</div>
											<div class="col-lg-8">
												<div class="login-input-area">
													<i class="fa fa-briefcase login-user" aria-hidden="true"></i>
													<input type="text" name="descripcion" required>
												</div>
											</div>
										</div>
										
										<br>
										<div class="form-group-inner">
											<div class="row">
												<div class="col-lg-4 ">
													<p>&nbsp;&nbsp;&nbsp;Foto del producto</p>
												</div>
												<div class="col-lg">
													<div class="file-upload-inner file-upload-inner-right ts-forms">
														<div class="input append-small-btn">
															<div class="col-lg-8 pull-right" >
																<input type="file" name="foto" onchange="document.getElementById.value = this.value;">
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										
                                        <div class="row" style="">
											<div class="col-lg-4">
												<div class="login-input-head">
													<p>Fecha de ingreso del producto</p>
												</div>
											</div>
											<br>
											<div class="col-lg-8">
												<div class="login-input-area">
													<input type="date" name="fecha_ingreso" id="start" required>

												</div>
											</div>
										</div>
										<div class="row" style="">
											<div class="col-lg-4">
												<div class="login-input-head">
													<p>Fecha de Vencimiento del producto</p>
												</div>
											</div>
											<br>
											<div class="col-lg-8">
												<div class="login-input-area">
													<input type="date" name="fecha_vencimiento" id="start" required>

												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-lg-4">
												<div class="login-input-head">
													<p>Percio de costo</p>
												</div>
											</div>
											<div class="col-lg-8">
												<div class="login-input-area">
													<i class="fa fa-briefcase login-user" aria-hidden="true"></i>
													<input type="text" name="precio_costo" required>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-lg-4">
												<div class="login-input-head">
													<p>Percio con Ganancia </p>
												</div>
											</div>
											<div class="col-lg-8">
												<div class="login-input-area">
													<i class="fa fa-briefcase login-user" aria-hidden="true"></i>
													<input type="text" name="precio_con_ganancia" required>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-lg-4">
												<div class="login-input-head">
													<p>Cantidad</p>
												</div>
											</div>
											<div class="col-lg-8">
												<div class="login-input-area">
													<i class="fa fa-briefcase login-user" aria-hidden="true"></i>
													<input type="text" name="cantidad" required>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-lg-4">
												<div class="login-input-head">
													<p>Stock Minimo </p>
												</div>
											</div>
											<div class="col-lg-8">
												<div class="login-input-area">
													<i class="fa fa-briefcase login-user" aria-hidden="true"></i>
													<input type="text" name="stock_minimo" required>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-lg-4">
												<div class="login-input-head">
													<p>Stock Maximo </p>
												</div>
											</div>
											<div class="col-lg-8">
												<div class="login-input-area">
													<i class="fa fa-briefcase login-user" aria-hidden="true"></i>
													<input type="text" name="stock_maximo" required>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-lg-4"></div>
											<div class="col-lg-8">
												<div class="login-button-pro">
													<div class="button-style-four btn-mg-b-10">
														<a href="pantalla-principal.php?menu=bienvenida">
                                                <button type="button" class="btn btn-custon-four btn-primary" > Cancelar </button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
															
                                                </a>
														<a href="pantalla-principal.php?menu=insertar-producto"><button type="submit" class="btn btn-custon-four btn-primary">Agregar Producto</button></a>
														<br><br><br>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</form>
							<div class="col-lg-3"></div>
						</div>
					</div>
				</div>
			</form>
			<div class="col-lg-4"></div>
		</div>
	</div>
</div>
<!-- login End-->