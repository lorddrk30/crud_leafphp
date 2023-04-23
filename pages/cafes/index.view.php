<?php view('header');?>
contenido de cafes
<div class="card">
    <div class="card-header">
    <a name="" id="" class="btn btn-primary" href="/cafes/crear" role="button">Agregar</a>
    </div>
    <div class="card-body">
    <main class="container">
<div class="table-responsive">
    <table class="table table-primary">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">cafe</th>
                <th scope="col">precio</th>
                <th scope="col">Frase</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <?php foreach($cafes as $cafe): ?>
                <td scope="row"><?php echo $cafe['id']; ?></td>
                <td><?php echo $cafe['nombre_cafe'];?></td>
                <td><?php echo $cafe['precio'];?></td>
                <td><?php echo $cafe['eslogan'];?></td>
                
                <td><a name="" id="" class="btn btn-info" href="/cafes/editar/<?php echo $cafe['id']; ?>" role="button">Editar</a>| <a name="" id="" class="btn btn-danger" href="/cafes/<?php echo $cafe['id']; ?>" role="button">Borrar</a></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

</main>
    </div>
    <div class="card-footer text-muted">
       
   
    </div>
</div>



<?php view('footer');?>