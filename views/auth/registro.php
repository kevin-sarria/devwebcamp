<main class="auth">


    <h2 class="auth__heading"><?php echo $titulo; ?></h2>
    <p class="auth__texto">Registrate en DevWebCamp</p>

    <form class="formulario">

        <div class="formulario__campo">

            <label for="nombre" class="formulario__label">Nombre</label>
            <input
                type="text"
                name="nombre"
                id="nombre"
                placeholder="Tu Nombre"
                class="formulario__input"
            />

        </div>

        <div class="formulario__campo">

            <label for="apellido" class="formulario__label">Apellido</label>
            <input
                type="text"
                name="apellido"
                id="apellido"
                placeholder="Tu Apellido"
                class="formulario__input"
            />

        </div>

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

        <div class="formulario__campo">

            <label for="password2" class="formulario__label">Repetir Password</label>
            <input
                type="password"
                name="password2"
                id="password2"
                placeholder="Repetir Password"
                class="formulario__input"
            />

        </div>

        <input type="submit" value="Crear Cuenta" class="formulario__submit">

    </form>

    <div class="acciones">

        <a href="/login" class="acciones__enlace">¿Ya tienes cuenta? Iniciar Sesión</a>
        <a href="/olvide" class="acciones__enlace">¿Olvidaste tu password?</a>

    </div>

</main>