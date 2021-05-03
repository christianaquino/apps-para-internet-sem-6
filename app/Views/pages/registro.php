<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
<div class="container m-3">
<form action="" method="POST">  
    <div class="field">
        <label class="label">Nombre</label>
        <div class="control">
            <input class="input" type="text" placeholder="Ingrese su nombre">
        </div>
    </div>
    <div class="field">
        <label class="label">Apellido</label>
        <div class="control">
            <input class="input" type="text" placeholder="Ingrese su apellido">
        </div>
    </div>
    <div class="field">
        <label class="label">Email</label>
        <div class="control has-icons-left has-icons-right">
            <input class="input is-danger" type="email" placeholder="Ingrese su email" value="">
                <span class="icon is-small is-left">
                    <i class="fas fa-envelope"></i>
                </span>
            <span class="icon is-small is-right">
                <i class="fas fa-exclamation-triangle"></i>
            </span>
        </div>
        <p class="help is-danger">This email is invalid</p>
    </div>
    
    <div class="field">
        <label class="label">Password</label>
        <div class="control has-icons-left">
            <input class="input" type="password" placeholder="Ingrese una contraseña">
            <span class="icon is-small is-left">
                    <i class="fas fa-key"></i>
            </span>
        </div>
    </div>

    <div class="field is-grouped">
        <div class="control">
            <button class="button is-link">Enviar</button>
        </div>
        <div class="control">
            <a href="<?=site_url('/') ?>" class="button is-link is-light">Cancelar</a>
        </div>
    </div>
</form>
</div>

<?= $this->endSection() ?>