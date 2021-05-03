<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
<div class="container m-3">
<form action="" method="POST">
<div class="field">
    <label class="label">Nombre</label>
    <div class="control">
        <input class="input" type="text" name="nombre" placeholder="Ingrese su nombre">
    </div>
    </div>
    <div class="field">
    <label class="label">Email</label>
    <div class="control has-icons-left has-icons-right">
        <input class="input is-danger" type="email" name="email" placeholder="Ingrese su email" value="">
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
    <label class="label">Mensaje</label>
    <div class="control">
        <textarea class="textarea" name="mensaje" placeholder="Ingrese su mensaje"></textarea>
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
</div>
</form>
<?= $this->endSection() ?>