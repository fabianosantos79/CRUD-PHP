<?php $render('header'); ?>

<h2>Editar Usuário</h2>
<form method="POST" action="<?= $base; ?>/usuario/<?= $usuario['id'] ?>/editar">
    <div class="form-group">
    <label>
    Nome:<br />
    <input type="text" name="nome" value="<?= $usuario['nome']; ?>" class="form-control form-control-lg" /><br />
    </label>
    <br />
    <label>
    Email:<br />
    <input type="email" name="email" value="<?= $usuario['email']; ?>" class="form-control form-control-lg" /><br />
    </label>
    </div>
    <button type="submit" class="btn btn-primary">Salvar</button>
</form>

<?php $render('footer'); ?>