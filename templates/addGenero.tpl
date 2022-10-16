<form action="addGenero" method="post">
    <div class="form-group">
        <label>Nombre</label>
        <input type="text" class="form-control" name="nombreGenero" required>
    </div>
    <div class="form-group">
        <div class="form-group">
            <label>Descipcion</label>
            <textarea class="form-control" name="descripcionGenero" rows="3" required></textarea>
        </div>
    </div>
    <button type="submit" class="btn btn-success">Guardar</button>
    <button class="btn btn-danger"><a href="generos" class="cancelar">Cancelar</a></button>
</form>