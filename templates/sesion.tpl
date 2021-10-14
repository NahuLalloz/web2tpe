{if isset($mail)}
    <a href="logout">
        <button class="colorbackground">Salir</button>
    </a>
{else}
    <a href="login">
        <button type="button" class="colorbackground">Iniciar Sesión</button>
    </a>
{/if}