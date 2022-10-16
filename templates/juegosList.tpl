{include file="header.tpl" }
{if ($isLoged == true)}
    {include file="addJuego.tpl"}
{/if}



<table class="table table-striped mt-4">
    <thead>
        <tr>
            <th scope="col" class="oculto">Id juego</th>
            <th scope="col">Nombre</th>
            <th scope="col">Descripcion</th>
            <th scope="col">Precio</th>
            <th scope="col">Genero</th>
            {if ($isLoged == true)}
                <th scope="col">Modificar</th>
            {/if}
            <th scope="col">Informacion</th>
            {if ($isLoged == true)}
                <th scope="col">Eliminar</th>
            {/if}
        </tr>
    </thead>
    <tbody>
        {foreach from=$listaJuegoInformacion item=$juegoInformacion}
            <tr>
                <th scope="row" class="oculto">{$juegoInformacion->id_juego}</th>
                <td>{$juegoInformacion->nombre}</td>
                <td>{$juegoInformacion->descripcion} </td>
                <td>{$juegoInformacion->precio}</td>
                <td>{$juegoInformacion->nombreGenero}</td> {*tiene que verse el nombre de la categoria no el id*}
                {if ($isLoged == true)}
                    <td>
                        <a href='change/{$juegoInformacion->id_juego}' type='button' class='btn btn-success'>Modificar</a>
                    </td>
                {/if}
                <td>
                    <a href='show/{$juegoInformacion->id_juego}' type='button' class='btn btn-info'>Ver mas</a>
                </td>
                {if $isLoged == true}
                    <td>
                        <a href='remove/{$juegoInformacion->id_juego}' type='button' class='btn btn-danger'>Borrar</a>
                    </td>
                {/if}
            </tr>
        {/foreach}
    </tbody>
</table>
{include file="footer.tpl" }