<?= $this->extend('layout-registros-medicos') ?>
<?= $this->section('content') ?>
<div class="container">
    <div class="columns is-centered m-3">
        <div class="column is-desktop is-half">
            <?php if(isset($success)) { ?>
                <div class="notification <?php if($success) { echo 'is-success'; } else { echo 'is-danger'; } ?>">
                    <?php if($success) { echo 'Usuario registrado con éxito'; } else { echo 'Ocurrió un error al registrar usuario'; } ?>
                </div>
            <?php } ?>
            <div class="title is-4">Nuevo registro médico</div>
            <form action="" method="POST">  
            <div class="field">
                    <label class="label">RUT</label>
                    <div class="control">
                        <input 
                            class="input"
                            name="rut" 
                            type="text" 
                            maxlength="45"
                            required
                        >
                    </div>
            </div>

                <div class="field">
                    <label class="label">Nombres</label>
                    <div class="control">
                        <input 
                            class="input <?php if(isset($errors['nombre'])) { ?>is-danger<?php }?>"
                            name="nombre" 
                            type="text" 
                            value="<?php if(isset($data['nombre'])) { echo $data['nombre']; }?>"
                            maxlength="45"
                            required
                        >
                    </div>
                    <?php if(isset($errors['nombre'])) { ?><p class="help is-danger"><?=$errors['nombre']?></p><?php } ?>
                </div>

                <div class="field">
                    <label class="label">Apellidos</label>
                    <div class="control">
                        <input 
                            class="input <?php if(isset($errors['apellido'])) { ?>is-danger<?php }?>" 
                            type="text" 
                            name="apellido" 
                            value="<?php if(isset($data['apellido'])) { echo $data['apellido']; }?>"
                            maxlength="45"
                            required
                        >
                    </div>
                    <?php if(isset($errors['apellido'])) { ?><p class="help is-danger"><?=$errors['apellido']?></p><?php } ?>
                </div>

                <div class="field">
                    <label class="label">Dirección</label>
                    <div class="control">
                        <input 
                            class="input"
                            name="direccion" 
                            type="text" 
                            maxlength="45"
                            required
                        >
                    </div>
                </div>

                <div class="field">
                    <label class="label">Ciudad</label>
                    <div class="control">
                        <input 
                            class="input"
                            name="ciudad" 
                            type="text" 
                            maxlength="45"
                            required
                        >
                    </div>
                </div>

                <div class="field">
                    <label class="label">Teléfono</label>
                    <div class="control">
                        <input 
                            class="input"
                            name="telefono" 
                            type="text" 
                            maxlength="45"
                            required
                        >
                    </div>
                </div>

                <div class="field">
                    <label class="label">Email</label>
                    <div class="control has-icons-left has-icons-right">
                        <input 
                            class="input <?php if(isset($errors['email'])) { ?>is-danger<?php }?>" 
                            type="email" 
                            name="email" 
                            placeholder="Ingrese su email" 
                            value="<?php if(isset($data['email'])) { echo $data['email']; }?>"
                            maxlength="45"
                            required
                        >
                        <span class="icon is-small is-left">
                            <i class="fas fa-envelope"></i>
                        </span>
                        <?php if(isset($errors['email'])) { ?>
                            <span class="icon is-small is-right">
                                <i class="fas fa-exclamation-triangle"></i>
                            </span>
                        <?php } ?>
                    </div>
                    <?php if(isset($errors['email'])) { ?><p class="help is-danger"><?=$errors['email']?></p><?php } ?>
                </div>


                <div class="field">
                    <label class="label">Fecha de Nacimiento</label>
                    <div class="control">
                        <input 
                            class="input"
                            name="fechaNac" 
                            type="text" 
                            maxlength="45"
                            required
                        >
                    </div>
                </div>

                <div class="field">
                    <label class="label">Estado Civil</label>
                    <div class="control">
                        <input 
                            class="input"
                            name="estadoCivil" 
                            type="text" 
                            maxlength="45"
                            required
                        >
                    </div>
                </div>
                
                <div class="field">
                    <label class="label">Comentarios</label>
                    <div class="control">
                        <input 
                            class="input"
                            name="comentarios" 
                            type="text" 
                            maxlength="45"
                            required
                        >
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