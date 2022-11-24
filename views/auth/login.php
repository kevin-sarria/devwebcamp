<main class="auth">


    <h2 class="auth__heading"><?php echo $titulo; ?></h2>
    <p class="auth__texto">Inicia Sesion en DevWebCamp</p>

    <?php
        require_once __DIR__ . '/../templates/alertas.php';
    ?>

    <form class="formulario" method="POST">

        <div class="formulario__campo">

            <label for="email" class="formulario__label">Email</label>
            <input
                type="email"
                name="email"
                id="email"
                placeholder="Tu Email"
                class="formulario__input"
            />

        </div>

        <div class="formulario__campo">

            <label for="password" class="formulario__label">Password</label>
            <input
                type="password"
                name="password"
                id="password"
                placeholder="Tu Password"
                class="formulario__input"
            />

        </div>

        <input type="submit" value="Iniciar Sesion" class="formulario__submit">

    </form>

    <div class="acciones">

        <a href="/registro" class="acciones__enlace">¿Aún no tienes cuenta? Obtener Una</a>
        <a href="/olvide" class="acciones__enlace">¿Olvidaste tu password?</a>

    </div>

</main>



