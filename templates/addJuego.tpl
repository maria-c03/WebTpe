<form action="add" method="post">
    <div class="form-group">
    <label>Nombre</label>
        <input type="text" class="form-control" name="nombreJuego">
    </div>
    <div class="form-group">
        <div class="form-group">
            <label >Descipcion</label>
            <textarea class="form-control" name="descripcionJuego" rows="3"></textarea>
        </div>
        <label >Precio</label>
        <input type="text" class="form-control" name="precioJuego">
    </div>
    <div class="form-group">
        <label >Genero</label>
        <select class="form-control" name="idGeneroJuego">
            {foreach from=$listaIdGenero item=$idGenero}
                <option>{$idGenero->id_genero}</option>
            {/foreach}
        </select>
    </div>
    <button type="submit" class="btn btn-success">Guardar</button>
</form>