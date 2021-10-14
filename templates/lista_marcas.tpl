{include file="head.tpl"}
{include file="back.tpl"}

<form action="registrarusuario" method="POST">
    <div class="form-register">
        <input type="text" class="form-control" name="mail" placeholder="MAIL" required>
        <input type="password" class="form-control" name="contraseña" placeholder="Contraseña" required>
        <button type="submit" class="btn btn-ingreso">Registrarse</button>

    </div>
</form>


{include file="footer.tpl"}