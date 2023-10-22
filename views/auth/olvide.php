<main class="auth">
    <h2 class="auth__heading"><?php echo $titulo;?>
    </h2>
    <p class="auth__text">Recupera tu acceso a devwebcamp</p>

    <form action="" class="formulario">
        <div class="formulario__campo">
            <label for="" class="formulario__label">Email</label>
            <input type="email" class="formulario__input"
            placeholder="Tu email"
            name="email">
        </div>
        <input type="submit" class="formulario__submit" value="Enviar instrucciones">

    </form>
    <div class="acciones">
        <a href="/registro"
        class="acciones__enlace">Aun no tienes cuenta? Obtener una</a>
        <a href="/login"
        class="acciones__enlace">Ya tienes cuenta? Iniciar sesion</a>
    </div>
</main>