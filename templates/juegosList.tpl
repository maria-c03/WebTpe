{include file="header.tpl" }
{include file="addJuego.tpl"}


<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">Id juego</th>
            <th scope="col">Nombre</th>
            <th scope="col">Descripcion</th>
            <th scope="col">Precio</th>
            <th scope="col">Id genero</th>
            <th scope="col">Opciones</th>
        </tr>
    </thead>
    <tbody>
        {foreach from=$listaJuegos item=$juego}
            <tr>
                <th scope="row">{$juego->id_juego}</th>
                <td>{$juego->nombre}</td>
                <td>{$juego->descripcion} </td>
                <td>{$juego->precio}</td>
                <td>{$juego->id_genero}</td>
                <td><a href='change/{$juego->id_juego}' type='button' class='btn btn-success'>Modificar</a> <a href='remove/{$juego->id_juego}' type='button' class='btn btn-danger'>Borrar</a> <a href='show/{$juego->id_juego}' type='button' class='btn btn-info'>Mostrar</a></td>
            </tr>
        {/foreach}
    </tbody>
</table>
{include file="footer.tpl" }