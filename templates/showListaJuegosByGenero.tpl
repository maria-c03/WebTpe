{include file="header.tpl" }


{foreach from=$listaJuegosByGenero item=$juegoByGenero}
    <div class="card">
        <h5 class="card-header">{$juegoByGenero->nombre}</h5>
        <div class="card-body">
            <h5 class="card-title">Descripcion</h5>
            <p class="card-text">{$juegoByGenero->descripcion}.</p>
            <h5 class="card-title">Precio</h5>
            <p class="card-text">${$juegoByGenero->precio}</p>
            <h5 class="card-title">Genero</h5>
            <p class="card-text">{$genero->nombre}</p>
        </div>
    </div>
{/foreach}

{include file="footer.tpl" }