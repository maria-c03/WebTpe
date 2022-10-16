{include file="header.tpl" }

<form action="modify/{$juegoData->id_juego}" method="post">
    <div class="form-group">
        <label>Nombre</label>
        <input type="text" class="form-control" name="nombreJuego" value="{$juegoData->nombre}" required>
    </div>
    <div class="form-group">
        <div class="form-group">
            <label>Descipcion</label>
            <textarea class="form-control" name="descripcionJuego" rows="3" required>{$juegoData->descripcion}</textarea>
        </div>
        <label>Precio</label>
        <input type="text" class="form-control" name="precioJuego" value="{$juegoData->precio}" required>
    </div>
    <div class="form-group">
        <label>Genero</label>
        <select class="form-control" name="idGeneroJuego">
            <option value="{$juegoData->id_genero}" selected>{$juegoData->nombreGenero}</option>
            {foreach from=$listaGeneros item=$listaGenero}
                <option value="{$listaGenero->id_genero}">{$listaGenero->nombre}</option>
            {/foreach}
        </select>
    </div>
    <button type="submit" class="btn btn-success">Guardar</button>
    <button class="btn btn-danger"><a href="juegos" class="cancelar">Cancelar</a></button>
</form>
{include file="footer.tpl" }