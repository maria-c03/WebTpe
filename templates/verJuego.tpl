{include file="header.tpl" }
<div class="card col-lg-6 mt-4">
    <h5 class="card-header">{$detalleJuego->nombre}</h5>
    <div class="card-body">
        <h5 class="card-title">Descripcion</h5>
        <p class="card-text">{$detalleJuego->descripcion}.</p>
        <h5 class="card-title">Precio</h5>
        <p class="card-text">${$detalleJuego->precio}</p>
        <h5 class="card-title">Genero</h5>
        <p class="card-text">{$genero->nombre}</p> 
    </div>
</div>
{include file="footer.tpl" }