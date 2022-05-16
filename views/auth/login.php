<h1 class="nombre-pagina">Login</h1>
<p class="descripcion-pagina">Sign in with your information</p>

<?php 
    include_once __DIR__ . "/../templates/alertas.php";
?>

<form class="formulario" method="POST" action="/">
    <div class="campo">
        <label for="email">Email</label>
        <input
            type="email"
            id="email"
            placeholder="Tu Email"
            name="email"
        />
    </div>

    <div class="campo">
        <label for="password">Password</label>
        <input 
            type="password"
            id="password"
            placeholder="Tu Password"
            name="password"
        />
    </div>

    <input type="submit" class="boton" value="Login">
</form>

<div class="acciones">
    <a href="/crear-cuenta">Do not you have an account yet? Create one</a>
    <a href="/olvide">you forgot your password?</a>
</div>