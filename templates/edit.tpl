{include file="head.tpl"}   
{include file="back.tpl"}
{include file="sesion.tpl"}
        <table class="tableListaCelular">
            <thead>
                <tr>
                    <th colspan="7">Listado de celulares</th>
                </tr>
                <tr class="fila-indicador">
                    <th>Celular</th>
                    <th>Nombre</th>
                    <th>Precio</th>
                    <th>Marca</th>
                    <th>Img</th>
                    <th>Eliminar</th>
                    <th>Editar</th>

                </tr>
            </thead>
            <tbody>
            {foreach from=$lista_celulares item=marca}
                <tr id={$celular->id_producto}>
                    <td>{$celular->nombre}</td>
                    <td>{$celular->precio}</td>
                    <td>{$celular->color}</td>
                    <td>{$celular->marcaNom}</td>
                    <td><img  class="imagen-caractCel" src="publico/images/nodisponible.png" alt="Imagen no disponible"></td>
                     <td>
                        <a href="eliminarCelular/{$celular->id_producto}">
                            <button type="button" class="btn-info btn  ">Borrar</button>
                        </a>
                    </td>
                    <td>
                        <a>
                            <button type="button" class="btn-info btn btnEditarCel-js" id={$celular->id_producto}>Editar</button>
                        </a>
                    </td>
            {/foreach}
            </tbody>
        </table>
    <div class="table-admin">
        <table class="table-admin">
            <thead>
                <tr>
                    <th colspan="3">Listado de Marcas</th>
                </tr>
            </thead>
            <tbody>
            {foreach from=$lista_marca item=cel}
                <tr id={$cel->id_marca}>
                    <td class="nombre-cel" >{$cel->marcaNom}</td>
                    <td>
                    <a>
                        <button type="button" class="btn btn-info btnEditar-js" id={$cel->id_marca}>Editar</button>
                    </a>
                    </td>
                    <td>
                        <a href="borrarMarca/{$cel->id_marca}">
                            <button type="button" class="btn btn-info">Borrar</button>
                        </a>
                    </td>
                </tr>
            {/foreach}
            {include file="editarMarca.tpl"}
            {include file="editarCelulares	.tpl"}
                <tr> 
                    <td colspan="3">
                        <form action="agregarMarca" method="POST">
                            <input type="text" name="nombre-cel" required>
                            <input type="submit" value="Insertar" class="btn-ingreso btn-info" >
                        </form>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
          <div class="box-celularnuevo">
            <label class="titulo-agregar">AGREGAR CELULAR</label>
            
            <form action="addCelular" method="POST" class='form-celularnuevo' enctype="multipart/form-data" required >
                <input type="text" name="nombre" placeholder="Nombre" required>
                <textarea name="precio" placeholder="Precio" required></textarea>
                <input type="text" name="caracteristicas" placeholder="Caracteristicas" required>
               
                <select class="opciones" name="marca" required>
                 <option value="" disable>Seleccione una opción</option>
                {foreach from=$lista_marcas item=cel}
                    <option value={$cel->id_marca}>{$cel->marcaNom}</option>
                {/foreach}
                </select>
                <input type="submit" value="Insertar" class="btn btn-ingreso">
        </form>
</div>

<script src="public/js/editarCelular.js"></script>
<script src="public/js/editarMarca.js"></script>
{include file="footer.tpl"}