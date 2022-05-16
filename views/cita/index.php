<h1 class="nombre-pagina">New Appointment</h1>
<p class="descripcion-pagina">Choose your services</p>

<?php 
    include_once __DIR__ . '/../templates/barra.php';
?>

<div id="app">
    <nav class="tabs">
        <button class="actual" type="button" data-paso="1">Services</button>
        <button type="button" data-paso="2">Information Appointment</button>
        <button type="button" data-paso="3">Resume</button>
    </nav>

    <div id="paso-1" class="seccion">
        <h2>Services</h2>
        <p class="text-center">Choose your services below</p>
        <div id="servicios" class="listado-servicios"></div>
    </div>
    <div id="paso-2" class="seccion">
        <h2>Your information and Appointment</h2>
        <p class="text-center">Enter your information and date of your appointment</p>

        <form class="formulario">
            <div class="campo">
                <label for="nombre">Name</label>
                <input
                    id="nombre"
                    type="text"
                    placeholder="Name"
                    value="<?php echo $nombre; ?>"
                    disabled
                />
            </div>

            <div class="campo">
                <label for="fecha">Date</label>
                <input
                    id="fecha"
                    type="date"
                    min="<?php echo date('Y-m-d', strtotime('+1 day') ); ?>"
                />
            </div>

            <div class="campo">
                <label for="hora">Time</label>
                <input
                    id="hora"
                    type="time"
                />
            </div>
            <input type="hidden" id="id" value="<?php echo $id; ?>" >

        </form>
    </div>
    <div id="paso-3" class="seccion contenido-resumen">
        <h2>Resumen</h2>
        <p class="text-center">Verify that the information is correct</p>
    </div>

    <div class="paginacion">
        <button 
            id="anterior"
            class="boton"
        >&laquo; Previous</button>

        <button 
            id="siguiente"
            class="boton"
        >Next &raquo;</button>
    </div>
</div>

<?php 
    $script = "
        <script src='//cdn.jsdelivr.net/npm/sweetalert2@11'></script>
        <script src='build/js/app.js'></script>
    ";
?>