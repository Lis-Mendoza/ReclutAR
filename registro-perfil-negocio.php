<!-- cropper CSS
		============================================ -->
<link rel="stylesheet" href="css/cropper/cropper.min.css">
<div class="login-form-area mg-t-30 mg-b-40">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-4"></div>
      <form id="adminpro-form" class="adminpro-form" action="insertar-negocio.php" method="post">
      <div class="login-form-area mg-t-30 mg-b-15">
      <div class="container-fluid">
      <div class="row">
      <div class="col-lg-3"></div>
      <form id="adminpro-register-form" class="adminpro-form">
        <div class="col-lg-6">
          <div class="login-bg">
            <div class="row">
              <div class="col-lg-12">
                <div class="logo"> <a href="#"><img src="reclutar_logo.jpg" alt="" /> </a> </div>
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
                  <p>Nombre del negocio</p>
                </div>
              </div>
              <div class="col-lg-8">
                <div class="login-input-area"> <i class="fa fa-briefcase login-user" aria-hidden="true"></i>
                  <input type="text" name="nombre" required>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-4">
                <div class="login-input-head">
                  <p>Rubro</p>
                </div>
              </div>
              <div class="col-lg-8">
                <div class="interested-input-area">
                  <select name="rubro" required>
                    <option value="none" selected="" disabled="">Selecciona un rubro</option>
                    <option value="Ropa">Ropa</option>
                    <option value="Calzado">Calzado</option>
                    <option value="Bazar">Bazar</option>
                    <option value="Alimentos">Alimentos</option>
                    <option value="Servicios">Servicios</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-4">
                <div class="login-input-head">
                  <p>e-mail del Negocio</p>
                </div>
              </div>
              <div class="col-lg-8">
                <div class="login-input-area">
                  <input type="email" name="e_mail">
                  <i class="fa fa-envelope login-user" aria-hidden="true"></i> </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-4">
                <div class="login-input-head">
                  <p>Domicilio del Negocio</p>
                </div>
              </div>
              <div class="col-lg-8">
                <div class="login-input-area">
                  <input type="text" name="domicilio">
                  <i class="fa fa-user login-user"></i> </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-4">
                <div class="login-input-head">
                  <p>Telefono del Negocio</p>
                </div>
              </div>
              <div class="col-lg-8">
                <div class="login-input-area">
                  <input type="text" name="telefono" >
                  <i class="fa fa-phone login-user" aria-hidden="true"></i> </div>
              </div>
            </div>
            <br>
            <div class="form-group-inner">
              <div class="row">
                <div class="col-lg-4 ">
                  <p>&nbsp;&nbsp;&nbsp;Foto perfil del Negocio</p>
                </div>
                <div class="col-lg">
                  <div class="file-upload-inner file-upload-inner-right ts-forms">
                    <div class="input append-small-btn">
                      <div class="col-lg-8 pull-right" >
                        <input type="file" type="submit" name="foto" onchange="document.getElementById.value = this.value;">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row" style="">
              <div class="col-lg-4">
                <div class="login-input-head">
                  <p>Inicio de Actividad</p>
                </div>
              </div>
              <br>
              <div class="col-lg-8">
                <div class="login-input-area">
                  <input type="date" name="fecha_inicio" id="start" required>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-4">
                <div class="login-input-head">
                  <p>Monto minimo del negocio</p>
                </div>
              </div>
              <div class="col-lg-8">
                <div class="login-input-area"> <i class="fa fa-briefcase login-user" aria-hidden="true"></i>
                  <input type="text" name="minimo" required>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-4">
                <div class="login-input-head">
                  <p>Ganancia Revendedores</p>
                </div>
              </div>
              <div class="col-lg-8">
                <div class="interested-input-area">
                  <select name="porcentaje_revendedor" required>
                    <option value="none" selected="" disabled="">Selecciona el % de ganancia de tus revendedores</option>
                    <option value="10">10 %</option>
                    <option value="15">15 %</option>
                    <option value="20">20 %</option>
                    <option value="25">25 %</option>
                    <option value="30">30 %</option>
                    <option value="35">35 %</option>
                    <option value="40">40 %</option>
                    <option value="45">45 %</option>
                    <option value="50">50 %</option>
                    <option value="55">55 %</option>
                    <option value="60">60 %</option>
                    <option value="65">65 %</option>
                    <option value="70">70 %</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-4">
                <div class="login-input-head">
                  <p>Bono por ReclutAR</p>
                </div>
              </div>
              <div class="col-lg-8">
                <div class="interested-input-area">
                  <select name="bonificaciones" required>
                    <option value="none" selected="" disabled="">Selecciona el % por Incorporar del total de revendido </option>
                    <option value="5">5 %</option>
                    <option value="10">10 %</option>
                    <option value="15">15 %</option>
                    <option value="20">20 %</option>
                    <option value="25">25 %</option>
                    <option value="30">30 %</option>
                    <option value="35">35 %</option>
                    <option value="40">40 %</option>
                    <option value="45">45 %</option>
                    <option value="50">50 %</option>
                    <option value="55">55 %</option>
                    <option value="60">60 %</option>
                    <option value="65">65 %</option>
                    <option value="70">70 %</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-4"></div>
              <div class="col-lg-8">
                <div class="login-button-pro">
                  <div class="button-style-four btn-mg-b-10"> <a href="index.php?menu=registro-perfil">
                    <button type="button" class="btn btn-custon-four btn-primary" > Atras </button>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>
                    <button type="submit" class="btn btn-custon-four btn-primary">Terminar Registro</button>
                    </a> <br>
                    <br>
                    <br>
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
<!-- cropper JS
		============================================ --> 
<script src="js/cropper/cropper.min.js"></script> 
<script src="js/cropper/cropper-actice.js"></script>