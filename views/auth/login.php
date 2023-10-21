<main class="auth">
    <h2 class="auth__heading"><?php echo $titulo;?>
    </h2>
    <p class="auth__text">Inicia sesion en devwebcamp</p>

    <form action="" class="formulario">
        <div class="formulario__campo">
            <label for="" class="formulario__label">Email</label>
            <input type="email" class="formulario__input"
            placeholder="Tu email"
            name="email">
        </div>
        <div class="formulario__campo">
            <label for="" class="formulario__label">Password</label>
            <input type="password" class="formulario__input"
            placeholder="Tu password"
            name="password">
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