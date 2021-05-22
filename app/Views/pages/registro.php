<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
<div class="container">
    <div class="columns is-centered m-3">
        <div class="column is-desktop is-half">
            <?php if(isset($success)) { ?>
                <div class="notification <?php if($success) { echo 'is-success'; } else { echo 'is-danger'; } ?>">
                    <?php if($success) { echo 'Usuario registrado con éxito'; } else { echo 'Ocurrió un error al registrar usuario'; } ?>
                </div>
            <?php } ?>
            <div class="title is-4">Registro de usuario</div>
            <form action="" method="POST">  
                <div class="field">
                    <label class="label">Nombre</label>
                    <div class="control">
                        <input 
                            class="input <?php if(isset($errors['nombre'])) { ?>is-danger<?php }?>"
                            name="nombre" 
                            type="text" 
                            placeholder="Ingrese su nombre"
                            value="<?php if(isset($data['nombre'])) { echo $data['nombre']; }?>"
                            maxlength="45"
                            required
                        >
                    </div>
                    <?php if(isset($errors['nombre'])) { ?><p class="help is-danger"><?=$errors['nombre']?></p><?php } ?>
                </div>
                <div class="field">
                    <label class="label">Apellido</label>
                    <div class="control">
                        <input 
                            class="input <?php if(isset($errors['apellido'])) { ?>is-danger<?php }?>" 
                            type="text" 
                            name="apellido" 
                            placeholder="Ingrese su apellido"
                            value="<?php if(isset($data['apellido'])) { echo $data['apellido']; }?>"
                            maxlength="45"
                            required
                        >
                    </div>
                    <?php if(isset($errors['apellido'])) { ?><p class="help is-danger"><?=$errors['apellido']?></p><?php } ?>
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
                    <label class="label">Password</label>
                    <div class="control has-icons-left">
                        <input 
                            class="input <?php if(isset($errors['password'])) { ?>is-danger<?php }?>" 
                            type="password" 
                            name="password" 
                            placeholder="Ingrese una contraseña"
                            value="<?php if(isset($data['password'])) { echo $data['password']; }?>"
                            id="password"
                            maxlength="45"
                            required
                        >
                        <span class="icon is-small is-left">
                            <i class="fas fa-key"></i>
                        </span>
                    </div>
                    <label class="checkbox">
                        <input type="checkbox" onclick="showPassword(this, 'password')"/> Mostrar password
                    </label>
                    <?php if(isset($errors['password'])) { ?><p class="help is-danger"><?=$errors['password']?></p><?php } ?>
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