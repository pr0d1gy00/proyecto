<main class="auth">
    <h2 class="auth__heading"><?php echo $titulo;?>
    </h2>
    <p class="auth__text">Registrate en devwebcamp</p>

    <form action="" class="formulario">
    <div class="formulario__campo">
            <label for="" class="formulario__label">Nombre</label>
            <input type="text" class="formulario__input"
            placeholder="nombre"
            name="nombre">
        </div>
        <div class="formulario__campo">
            <label for="" class="formulario__label">Apellido</label>
            <input type="text" class="formulario__input"
            placeholder="apellido"
            name="apellido">
        </div>
        <div class="formulario__campo">
            <label for="" class="formulario__label">Email</label>
            <input type="email" class="formulario__input"
            placeholder="Tu email"
            name="email">
        </div>
        <div class="formulario__campo">
            <label for="password" class="formulario__label">Password</label>
            <input type="password" class="formulario__input"
            placeholder="Tu password"
            id="password"
            name="password">
        </div>
        <div class="formulario__campo">
            <label for="password2" class="formulario__label">Repetir password</label>
            <input type="password" class="formulario__input"
            placeholder="Repetir password"
            id="password2"
            name="password2">
        </div>

        <input type="submit" class="formulario__submit" value="Iniciar Sesion">

    </form>
    <div class="acciones">
        <a href="/registro"
        class="acciones__enlace">Aun no tienes cuenta? Obtener una</a>
        <a href="/olvide"
        class="acciones__enlace">Olvidaste tu password?</a>
    </div>
</main>