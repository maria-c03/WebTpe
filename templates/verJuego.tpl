{include file="header.tpl" }
<div class="card">
    <h5 class="card-header">{$juegoInformacion->nombre}</h5>
    <div class="card-body">
        <h5 class="card-title">Descripcion</h5>
        <p class="card-text">{$juegoInformacion->descripcion}.</p>
        <h5 class="card-title">Precio</h5>
        <p class="card-text">${$juegoInformacion->precio}</p>
        <h5 class="card-title">Genero</h5>
        <p class="card-text">{$juegoInformacion->nombreGenero}</p> 
    </div>
</div>
{include file="footer.tpl" }