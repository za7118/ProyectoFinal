 <div class="col-sm-9 col-lg-9" style="text-align: center;">
<H1 style="position: relative;top: 10px;font-size: 55px;font-weight: bold;font-family: algerian;color:blue;">Agregar alumnos</h1>    
<p style="position: relative;top: 3%;font-size: 20px;font-weight: bold;">Ingresa todos los datos correctamente</p> 
<br>
<div class="nav-tabs-responsive">
  <div class="card">
    <ul class="nav nav-tabs">
      <li class="nav-item">
        <a href="#account" class="nav-link active" data-toggle="tab">
          <i class="fa fa-lock mr-2"></i>Datos alumno(a)
        </a>
      </li>
      <li class="nav-item">
        <a href="#personal" class="nav-link" data-toggle="tab">
          <i class="fa fa-user-circle-o mr-2"></i>Datos padre o tutor
        </a>
      </li>
      <li class="nav-item">
        <a href="#payment" class="nav-link" data-toggle="tab">
          <i class="fa fa-credit-card mr-2"></i> Datos generales
        </a>
      </li>
    </ul>
    <div id="tabContent" class="tab-content">
      <div id="account" class="tab-pane show active">
        <a href="#account-collapse" class="nav-link-collapse" data-toggle="collapse">
          <i class="fa fa-lock mr-2"></i>Llenar datos
        </a>
        <div id="account-collapse" class="collapse show" data-parent="#tabContent">
          <div class="card-body">
            <form style="position: relative;top:20px;" method="post" action="insertaral">
  <div class="form-row">
    <div class="form-group col-md-6" style="text-align: left;">
      <label for="inputEmail4">Nombre(s):</label>
      <input type="text" class="form-control" name='nombreal' placeholder="Nombre completo" required="">
    </div>
    <div class="form-group col-md-6" style="text-align: left;">
      <label for="inputPassword4">Apellidos:</label>
      <input type="text" class="form-control" name='apellidosal' placeholder="Apellido paterno y materno" required="">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6" style="text-align: left;">
    <label for="inputPassword4">Fecha Nacimiento:</label>
      <input type="date" class="form-control" name='fechan'  required="">
    </div>  
    <div class="form-group col-md-6" style="text-align: left;">
     <label for="inputEmail4">Curp:</label>
      <input type="text" class="form-control" name='curp' placeholder="Ingrese curp" required="">
      <a href="https://consultas.curp.gob.mx/CurpSP/gobmx/inicio.jsp;" target="_blank" onclick="window.open(this.href, this.target, 'width=1000,height=1000'); return false;"> Buscar Curp</a>
    </div>
  </div>

<!-- findatos -->
          </div>
        </div>
      </div>
      <div id="personal" class="tab-pane">
        <a href="#personal-collapse" class="nav-link-collapse" data-toggle="collapse">
          <i class="fa fa-user-circle-o mr-2"></i> Llenar datos
        </a>
        <div id="personal-collapse" class="collapse" data-parent="#tabContent">
          <div class="card-body">

 <div class="form-row">
    <div class="form-group col-md-6" style="text-align: left;">
      <label for="inputEmail4">Nombre(s):</label>
      <input type="text" class="form-control" name='nombret' placeholder="Nombre completo" required="">
    </div>
    <div class="form-group col-md-6" style="text-align: left;">
      <label for="inputPassword4">Apellidos:</label>
      <input type="text" class="form-control" name='apellidost' placeholder="Apellido paterno y materno" required="">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6" style="text-align: left;">
    <label for="inputPassword4">Numero telefonico:</label>
      <input type="tel" class="form-control" placeholder="Telefono celular" name='tel'  required="" onkeypress='return event.charCode >= 48 && event.charCode <= 57' maxlength="10">
    </div>  
    <div class="form-group col-md-6" style="text-align: left;">
     <label for="inputState">Parentesco:</label>
      <select id="inputState" class="form-control" name='paren'>
        <option selected>Seleccionar </option>
        <option>Madre</option>
        <option>Padre</option>
        <option>Abuelo(a)</option>
        <option>Otro</option>
      </select>
    </div>
  </div>

            <!-- Personal content -->
          </div>
        </div>
      </div>
      <div id="payment" class="tab-pane">
        <a href="#payment-collapse" class="nav-link-collapse" data-toggle="collapse">
          <i class="fa fa-credit-card mr-2"></i> Llenar datos
        </a>
        <div id="payment-collapse" class="collapse" data-parent="#tabContent">
          <div class="card-body">

            <div class="form-row">
    <div class="form-group col-md-12" style="text-align: left;">
    <label for="inputPassword4">Dirección:</label>
      <input type="text" class="form-control" name='direc' placeholder="Avenida,numero,colonia" required="">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6" style="text-align: left;">
      <label for="inputCity">Ciudad:</label>
      <input type="text" class="form-control" name='ciudad' placeholder="Población">
    </div>
    <div class="form-group col-md-4" style="text-align: left;">
      <label for="inputState">Estado:</label>
      <select id="inputState" class="form-control" name='estado'>
        <option selected>Choose...</option>
        <option>...</option>
      </select>
    </div>
    <div class="form-group col-md-2" style="text-align: left;">
      <label for="inputZip">Código Postal:</label>
      <input type="text" class="form-control" name='cp' placeholder=" ej 43998">
    </div>
  </div>
  <div class="form-group">
  </div>
            <!-- Payment content -->
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="form-group">
  <br>
  <button type="submit" class="btn btn-primary mr-1">
    Guardar
  </button>
  <button type="button" class="btn btn-secondary">
    Cancelar
  </button>
</form>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
      </div>
    </div>
  </div>
