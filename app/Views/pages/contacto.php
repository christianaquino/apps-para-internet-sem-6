<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
<div class="container">
    <div class="columns is-centered m-3">
        <div class="column is-desktop is-half">
        <?php if(isset($success)) { ?>
            <div class="notification <?php if($success) { echo 'is-success'; } else { echo 'is-danger'; } ?>">
                    <?php if($success) { echo 'Mensaje guardado con éxito'; } else { echo 'Ocurrió un error al guardar su mensaje'; } ?>
                </div>
            <?php } ?>
        <div class="title is-4">Contacto</div>
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
                                <input class="input" type="email" name="email" placeholder="Ingrese su email" value="">
                                <span class="icon is-small is-left">
                                    <i class="fas fa-envelope"></i>
                                </span>
                            </div>
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
            </form>
        </div>
    </div>
</div>
<?= $this->endSection() ?>