<?php include('template/cabecera.php'); ?>

<div class="card">
    <div class="card-header">
        <h1>Registro de Clientes</h1>
    </div>
    <div class="card-body">
        <form class="needs-validation" novalidate>
        <div class="form-row">
        <div class="col-md-4 mb-3">
        <label for="txtNombre">Primer Nombre</label>
        <input type="text" class="form-control" name="txtNombre" placeholder="Ingrese su nombre"  required>
        <div class="valid-feedback">
        Looks good!
        </div>
        </div>
        <div class="col-md-4 mb-3">
        <label for="txtApellido">Primer Apellido</label>
        <input type="text" class="form-control" name="txtApellido" placeholder="ingrese su apellido"  required>
        <div class="valid-feedback">
        Looks good!
        </div>
        </div>
        <div class="col-md-6 mb-3">
        <label for="txtEmail">Correo Electronico</label>
        <div class="input-group">
        <div class="input-group-prepend">
        <span class="input-group-text" id="inputGroupPrepend">@</span>
        </div>
        <input type="text" class="form-control" name="txtEmail" placeholder=" Email " 
        aria-describedby="inputGroupPrepend" required>
        <div class="invalid-feedback">
        por favor ingrese su correo Electronico.
        </div>
        </div>
        </div>
        </div>
        <div class="form-row">
        <div class="col-md-6 mb-3">
        <label for="txtSueldo">Sueldo</label>
        <input type="number" class="form-control" id="txtSueldo" placeholder="Sueldo" required>
        <div class="invalid-feedback">
        por favor ingrese un sueldo.
        </div>
        </div>
        <div class="col-md-3 mb-3">
        <label for="validationCustom04">Clasificación</label>
        <select name="cmbClasificacion" class="form-control" placeholder="Clasificacion" required >
            <option value="A">A</option>
            <option value="B">B</option>
            <option value="C">C</option>
        </select>
       
        <div class="invalid-feedback">
        por favor seleccione una opcion.
        </div>
        </div>
        
       
        <button class="btn btn-primary" type="submit">Guardar</button>
        </form>
        <script>
         // Example starter JavaScript for disabling form submissions if there are invalid fields
          (function () {
         'use strict'; 
        window.addEventListener('load', function () {
              // Fetch all the forms we want to apply custom Bootstrap validation styles to
              var forms = document.getElementsByClassName('needs-validation');
              // Loop over them and prevent submission
              var validation = Array.prototype.filter.call(forms, function (form) {
                form.addEventListener('submit', function (event) {
                  if (form.checkValidity() === false) {
                    event.preventDefault();
                    event.stopPropagation();
                  }
        form.classList.add('was-validated');
           }, false);
           });
          }, false);
         })();
        </script>
        
        
    </div>
  
</div>


<?php include('template/footer.php'); ?>