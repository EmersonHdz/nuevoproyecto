<h1 class="nombre-pagina">Create Account</h1>
<p class="descripcion-pagina">Fill out the following form to create an account</p>

<?php 
    include_once __DIR__ . "/../templates/alertas.php";
?>

<form class="formulario" method="POST" action="/crear-cuenta">
  
    <div class="campo">
        <label for="nombre">Name</label>
        <input
            type="text"
            id="nombre"
            name="nombre"
            placeholder="Name"
            value="<?php echo s($usuario->nombre); ?>"
        />
    </div>

    <div class="campo">
        <label for="apellido">Surname</label>
        <input
            type="text"
            id="apellido"
            name="apellido"
            placeholder="Surname"
            value="<?php echo s($usuario->apellido); ?>"
        />
    </div>

    <div class="campo">
        <label for="telefono">Telephone</label>
        <input
            type="tel"
            id="telefono"
            name="telefono"
            placeholder="Telephone"
            value="<?php echo s($usuario->telefono); ?>"
        />
    </div>

    <div class="campo">
        <label for="email">E-mail</label>
        <input
            type="email"
            id="email"
            name="email"
            placeholder="Tu E-mail"
            value="<?php echo s($usuario->email); ?>"
        />
    </div>

    <div class="campo">
        <label for="password">Password</label>
        <input
            type="password"
            id="password"
            name="password"
            placeholder="Password"
        />
    </div>

    <input type="submit" value="Create Account" class="boton">


</form>

<div class="acciones">
    <a href="/">¿Do you already have an account? Log in</a>
    <a href="/olvide">forgot your password?</a>
</div>