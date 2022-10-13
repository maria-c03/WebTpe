{include file="header.tpl" }

<form action="modify/{$juegoData->id_juego}" method="post">
    <div class="form-group">
        <label>Nombre</label>
        <input type="text" class="form-control" name="nombreJuego" value="{$juegoData->nombre}">
    </div>
    <div class="form-group">
        <div class="form-group">
            <label>Descipcion</label>
            <textarea class="form-control" name="descripcionJuego" rows="3">{$juegoData->descripcion}</textarea>
        </div>
        <label>Precio</label>
        <input type="text" class="form-control" name="precioJuego" value="{$juegoData->precio}">
    </div>
    <div class="form-group">
        <label>Genero</label>
        <select class="form-control" name="idGeneroJuego">
            <option selected>{$juegoData->id_genero}</option>
            {foreach from=$listaIdGenero item=$idGenero}
                <option>{$idGenero->id_genero}</option>
            {/foreach}
        </select>
    </div>
    <button type="submit" class="btn btn-success">Guardar</button>
</form>
{include file="footer.tpl" }