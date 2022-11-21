<main class="auth">


    <h2 class="auth__heading"><?php echo $titulo; ?></h2>
    <p class="auth__texto">Recupera tu acceso a DevWebCamp</p>

    <form class="formulario">

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

        <input type="submit" value="Enviar Instrucciones" class="formulario__submit">

    </form>

    <div class="acciones">

        <a href="/login" class="acciones__enlace">¿Ya tienes cuenta? Iniciar Sesión</a>
        <a href="/registro" class="acciones__enlace">¿Aún no tienes cuenta? Obtener Una</a>

    </div>

</main>



