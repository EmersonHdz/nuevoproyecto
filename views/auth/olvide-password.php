<h1 class="nombre-pagina">Forgot Password</h1>
<p class="descripcion-pagina">Reset your password by typing your email below</p>

<?php 
    include_once __DIR__ . "/../templates/alertas.php";
?>

<form class="formulario" action="/olvide" method="POST">
    <div class="campo">
        <label for="email">Email</label>
        <input 
            type="email"
            id="email"
            name="email"
            placeholder="Tu Email"
        />
    </div>

    <input type="submit" class="boton" value="Send Instructions">
</form>

<div class="acciones">
    <a href="/">¿Do you already have an account? Log in</a>
    <a href="/crear-cuenta">Do not you have an account yet? Create one</a>
</div>