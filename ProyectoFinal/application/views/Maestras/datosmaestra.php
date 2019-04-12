  <div class="container-fluid" style="height: 100%;">
    <div class="row" >
      <div class="col-sm-3 col-lg-3" style="">
        <br></br>
        <div class="card" style="background-color: #90CAF9;">
  <img src="<?php echo base_url();?>Assets/imagenes/maestra.png"  width="70%" height="200" position="center" style="display:block; margin-left: auto;
  margin-right: auto;">
  <?php foreach ($datos as $p){ ?>
  <div class="card-body">
    <h5 class="card-title" style="font-family: arial black;font-size: 15px;">DATOS DEL MAESTRO</h5>
    <p class="card-text" style="font-family: bz-modeler-font;">NOMBRE: <?php echo $p->nombre?></p>
    <p class="card-text" style="font-family: bz-modeler-font;">APELLIDOS: <?php echo $p->apellidoP ?></p>
    <p class="card-text" style="font-family: bz-modeler-font;">GRADO: <?php echo $p->grado?></p>
    <p class="card-text" style="font-family: bz-modeler-font;">GRUPO:<?php echo $p->grupo?></p>
  </div>
</div>
      <br>
</div>
<?php } ?>