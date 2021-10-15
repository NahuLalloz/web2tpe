{if isset($mail)}
    <a href="logout">
        <button class="lin colorbackground">Salir</button>
    </a>
{else}
    <a href="login">
        <button type="button" class="lin colorbackground">Iniciar Sesión</button>
    </a>
{/if}