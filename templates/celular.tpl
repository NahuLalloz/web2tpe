{include file="head.tpl" }
 {include file ="back.tpl"}
<div>
   <input type="text" name="celular" value="{$celular->id_producto}" class="hidden-windows">
    <h1 class="titulo tit-info">{$celular->nombre}</h1>
    <div>
      <img class="img" src="public/images/img-noDisponible.png" alt="Imagen no disponible">
    </div>
    <label class="font">Color: {$celular->color}</label>
    <h2 class="titulo">Precio</h2>
    <p class="font">{$celular->precio}</p>
    <h3 class="titulo">Marca</h3>
    <p class="font">{$celular->marcaNom}</p>
</div>
{include file="footer.tpl"}