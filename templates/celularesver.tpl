
{include file="head.tpl"}
{include file="header.tpl"}
{include file="sesion.tpl"}
{include file="back.tpl"}
<a href="showCelulares" class="">
    <button type="button" class="lin colorbackground">Lista de series</button>
</a>
{if isset($mail)}
    <a href="modificar">
    <button type="button" class="lin colorbackground">Modificar</button>
    </a>
{/if}
<section>
    <h1 class="titulo">{$titulo}</h1>
    <ul class="row">
        {foreach from=$lista_celulares item=celular}
            <li class="card text-white bg-secondary">
                <img class="card altura" src="publico/images/nodisponible.png" alt="Imagen no disponible">
                <div class="card-body">
                    <h5 class="card-title">{$celular->nombre}</h5>
                    <a href="caractCel/{$celular->id_producto}" class="btn btn-dark btn-lg">Ver caracteristicas del celular</a>
                </div>
            </li>
        {/foreach}
    </ul>
</section>

{include file="footer.tpl"}