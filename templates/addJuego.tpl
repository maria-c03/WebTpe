<form action="add" method="post">
    <div class="form-group">
    <label>Nombre</label>
        <input type="text" class="form-control" name="nombreJuego" required>
    </div>
    <div class="form-group">
        <div class="form-group">
            <label >Descipcion</label>
            <textarea class="form-control" name="descripcionJuego" rows="3" required></textarea>
        </div>
        <label >Precio</label>
        <input type="text" class="form-control" name="precioJuego" required>
    </div>
    <div class="form-group">
        <label >Genero</label>
        <select class="form-control" name="idGeneroJuego">
            {foreach from=$listaGenero item=$genero}
                <option value="{$genero->id_genero}">{$genero->nombre}</option>
            {/foreach}
        </select>
    </div>
    <button type="submit" class="btn btn-success">Guardar</button>
    <button class="btn btn-danger"><a href="juegos" class="cancelar">Cancelar</a></button>
</form>