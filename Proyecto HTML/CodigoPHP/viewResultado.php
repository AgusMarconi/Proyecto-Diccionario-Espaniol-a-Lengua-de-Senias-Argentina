<?php if($palabras!=null){ ?>
<div class="table-responsive">
    <table class="table table-primary">
        <thead>
            <tr>
                <th scope="col">Video</th>
                <th scope="col">Imagen</th>
                <th scope="col">Palabra</th>
                <th scope="col">Descripción</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($palabras as $palabra){?>
            <tr class="">
                <td><?php echo $palabra['video'];?></td>
                <td><?php echo $palabra['imagen'];?></td>
                <td><?php echo $palabra['nombre'];?></td>
                <td><?php echo $palabra['descripcion'];?></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
<?php }?>



