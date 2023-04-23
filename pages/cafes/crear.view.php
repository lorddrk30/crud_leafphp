<?php view('header');?>
<div class="card">
    <div class="card-header">
        Cafes
    </div>
    <div class="card-body">
       <form action="/cafes" method="post">

       <div class="mb-3">
         <label for="nombre" class="form-label">Nombre cafe</label>
         <input type="text"
           class="form-control" name="nombre" id="nombre" aria-describedby="helpId" placeholder="Nombre cafe">
       </div>
       <div class="mb-3">
         <label for="precio" class="form-label">precio</label>
         <input type="text"
           class="form-control" name="precio" id="precio" aria-describedby="helpId" placeholder="cafe precio">
       </div>
       <div class="mb-3">
         <label for="frase" class="form-label">frase</label>
         <input type="text"
           class="form-control" name="frase" id="frase" aria-describedby="helpId" placeholder="cafe frase">
       </div>
        
       <button type="submit" class="btn btn-primary">Guardar</button>
       <a class="btn btn-primary" href="/" role="button">Cancelar</a>

       </form>
    </div>
    <div class="card-footer text-muted">
        
    </div>
</div>

<?php view('footer');?>