{include file="header.tpl" }
{if ($isLoged == true)}
{include file="addGenero.tpl" }
{/if}

<table class="table table-striped mt-4">
    <thead>
        <tr>
            <th scope="col" class="oculto">Id genero</th>
            <th scope="col">Nombre</th>
            <th scope="col">Descripcion</th>
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
        {foreach from=$listaGeneros item=$genero}
            <tr>
                <th scope="row" class="oculto">{$genero->id_genero}</th>
                <td>{$genero->nombre}</td>
                <td>{$genero->descripcion} </td>
                {if ($isLoged == true)}
                    <td>
                        <a href='changeGenero/{$genero->id_genero}' type='button' class='btn btn-success'>Modificar</a>
                    </td>
                {/if}
                <td>
                    <a href='juegosByGenero/{$genero->id_genero}' type='button' class='btn btn-info'>Ver mas</a>
                </td>
                {if ($isLoged == true)}
                    <td>
                        <a href='removeGenero/{$genero->id_genero}' type='button' class='btn btn-danger'>Borrar</a>
                    </td>
                {/if}
            </tr>
        {/foreach}
    </tbody>
</table>

{include file="footer.tpl" }