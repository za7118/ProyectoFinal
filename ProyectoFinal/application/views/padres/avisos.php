 <div class="col-sm-9 col-lg-9" style="text-align: center;">
<H1 style="position: relative;top: 10px;font-size: 55px;font-weight: bold;font-family: algerian;color:blue;">Avisos</h1>    

<table class="table" style="position: relative;top:50px;border-style: solid;">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Aviso</th>
      <th scope="col">Fecha</th>
    </tr>
  </thead>
  <tbody>
    foreach ($datos as $p){ ?>
    <tr>
      <td><?php echo $p->aviso ?></td>
      <td><?php echo $p->fecha?></td>
    </tr>
  </tbody>
</table>

<?php } ?>

</br>
<br>
<br>
<br>
<br>
<br>
      </div>
    </div>
  </div>