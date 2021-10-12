


<?php include "template/cabecera.php"; ?>

<br>
<br>
<div class="container">
<figure class="figure">
<br>
  <img src="img/Banner.jpg" class="figure-img img-fluid rounded text-center" alt="...">
  <figcaption class="figure-caption">A caption for the above image.</figcaption>
</figure>  
  <h1 class="h1">Historia</h1> <br>
  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora ipsam, quae amet dolore blanditiis, quibusdam quisquam provident nobis est odio vero doloremque quidem non, quasi minus totam delectus laboriosam eius!</p>
</div>

<div class="container">
    <h2>Productos Tecnologicos</h2>
    <br>
<div class="row">
  <div class="col-md-4">
    <a href="pulpitrock.jpg" class="thumbnail">
     
      <img src="img/product1.jpg" alt="Pulpit Rock" style="width:200px;height: auto">
      <button type="button" class="btn btn-primary">Mas Información</button>
    </a>
  </div>
  <div class="col-md-4">
    <a href="moustiers-sainte-marie.jpg" class="thumbnail">
    
      <img src="img/product2.jpg" alt="Moustiers Sainte Marie" style="width:200px;height:auto">
      <button type="button" class="btn btn-primary">Mas Información</button>
    </a>
  </div>
  <div class="col-md-4">
    <a href="cinqueterre.jpg" class="thumbnail">
      
      <img src="img/product3.jpg" alt="Cinque Terre" style="width:200px;height:auto">
      <button type="button" class="btn btn-primary">Mas Información</button>
    </a>
  </div>
</div>
</div>
<?php $url = "http//:".$_SERVER['HTTP_HOST']."/Productos.php"?>
      
<br>
<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-3">Fluid jumbo heading</h1>
    <p class="lead"><?php echo $_SERVER['SERVER_NAME']; ?></p>
    <hr class="my-2">
    <p><?php echo "{$url}";?></p>
    <p class="lead">
      <a class="btn btn-primary btn-lg" href="Jumbo action link" role="button">Jumbo action name</a>
    </p>
  </div>
</div>


  

<?php include "template/footer.php"; ?>