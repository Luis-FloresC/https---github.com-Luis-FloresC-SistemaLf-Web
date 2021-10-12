
<?php 

include "template/cabecera.php";
if($_POST)
{
    header('inicio.php');
}


?>



<div class="container">
    <div class="row">
        <div class="col-md-4">
            <br>
            <div class="card">
                <div class="card-header">
                    Login
                </div>
                <div class="card-body">
                <form Method="post">
                        <div class = "form-group">
                        <label for="exampleInputEmail1">Usuario</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Escriba su Usuario">
                        <small id="emailHelp" class="form-text text-muted">Nunca compartiremos tu información con nadie más.</small>
                        </div>
                        <div class="form-group">
                        <label for="exampleInputPassword1">Contraseña</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Escriba su contraseña">
                        </div>
                        <br>
                        <button type="submit" class="btn btn-primary">Iniciar Sesión</button>
                </form> 
                </div>
            </div>
        </div>
    </div>
</div>


<?php include "template/footer.php";?>