{include file="header.tpl" }
{include file="addGenero.tpl" }

<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">Id genero</th>
            <th scope="col">Nombre</th>
            <th scope="col">Descripcion</th>
            <th scope="col">Opciones</th>

        </tr>
    </thead>
    <tbody>
        {foreach from=$listaGeneros item=$genero}
            <tr>
                <th scope="row">{$genero->id_genero}</th>
                <td>{$genero->nombre}</td>
                <td>{$genero->descripcion} </td>
                <td>
                    <a href='changeGenero/{$genero->id_genero}' type='button' class='btn btn-success'>Modificar</a> 
                    <a href='juegosByGenero/{$genero->id_genero}' type='button' class='btn btn-info'>Mostrar Juegos</a> 
                    <a href='removeGenero/{$genero->id_genero}' type='button' class='btn btn-danger'>Borrar</a> 
                </td>
            </tr>
        {/foreach}
    </tbody>
</table>

{include file="footer.tpl" }
