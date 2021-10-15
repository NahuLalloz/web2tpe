<div class="box-editar" >
    <div id="box-editarCelular" class="hidden-windows">
        <label class="titulo-editar">EDITAR CELULAR</label>       
       
        <form action="editarCelular" method="POST" class='form-editarCelulares' enctype="multipart/form-data" required>
            <label class="label-ingreso">Nombre:</label>
            <input type="text" name="nombreCelular" placeholder="Ingrese nombre"  class="input-editarCel" required>            
            <label class="label-ingreso">Precio</label>
            <input type="text" name="precio" placeholder="Ingrese precio"  class="input-editarCel" required>           
            <label class="label-ingreso">Stock</label>
            <input type="text" name="stock" placeholder="Ingrese stock"  class="input-editarCel" required>          
            <label class="label-ingreso">Marca</label>
                <select class="input-editarCel" name="marca-editar" required>
                 <option class="opcionExistente"></option>
                {foreach from=$lista_marcas item=cel}
                    <option value={$cel->id_marca}>{$cel->marcaNom}</option>
                {/foreach}
                </select>
            <div class="btns-guardar-cancelar">
                <button type="submit" class="btn-guardarCel" name="id-celular">Guardar</button>
                <button  type="button" class="btn-cancelarCel">Cancelar</button>
            </div>
        </form>
    </div>
</div>