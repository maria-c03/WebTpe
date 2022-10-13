{include file="header.tpl" }

<form action="modifyGenero/{$generoData->id_genero}" method="post">
<div class="form-group">
<label>Nombre</label>
<input type="text" class="form-control" name="nombreGenero" value="{$generoData->nombre}">
</div>
<div class="form-group">
<div class="form-group">
<label>Descipcion</label>
<textarea class="form-control" name="descripcionGenero" rows="3">{$generoData->descripcion}</textarea>
</div>
</div>
<button type="submit" class="btn btn-success">Guardar</button>
</form>

{include file="footer.tpl" }