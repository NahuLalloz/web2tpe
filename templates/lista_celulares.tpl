{include file="head.tpl"}
{include file="back.tpl"}
<h1 class="titulo">Celulares en venta</h1>
    <div class="table-admin" >
        <table >
        <thead>
            <tr>
                <th>Celular</th>
                <th>Marca</th>
                <th>Precio</th>
                <th>Stock</th>
                <th>Imagen demostrativa</th>
            </tr>
        </thead>
        <tbody>
        {foreach from=$lista item=cel}
            <tr>
                <td>{$cel->color}</td>
                <td>{$cel->nombre}</td>
                <td>{$cel->caracteristicas}</td>
                <td>{$cel->id_producto}</td>
                <td>
                    <img src="publico/images/nodisponible.png" alt="Imagen no disponible" class="imagen-tabla">
                </td>
            </tr>
        {/foreach}
        </tbody>
    </table>
    </div>
{include file="footer.tpl"}