<h1 class="nombre-pagina">Recover Password</h1>
<p class="descripcion-pagina">Enter your new password below</p>

<?php 
    include_once __DIR__ . "/../templates/alertas.php";
?>

<?php if($error) return; ?>
<form class="formulario" method="POST">
    <div class="campo">
        <label for="password">Password</label>
        <input
            type="password"
            id="password"
            name="password"
            placeholder="Tu Nuevo Password"
        />
    </div>
    <input type="submit" class="boton" value="Save New Password">

</form>

<div class="acciones">
    <a href="/">¿Do you already have an account? Log in</a>
    <a href="/crear-cuenta">Do not you have an account yet? Create one</a>
</div>