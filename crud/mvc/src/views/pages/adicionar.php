<?php $render('header'); ?>

<h2>Adicionar Usuário</h2>
<form method="POST" action="<?= $base; ?>/adicionar">
    <div class="form-group">
        <label>
        Nome:<br />
        <input type="text" name="nome" class="form-control form-control-lg" />
        </label>
        <br />
        <label>
        Email:<br />
        <input type="email" name="email" class="form-control form-control-lg"  />
        </label>
        
    </div>
     <button type="submit" class="btn btn-primary">Cadastrar</button>
</form>

<?php $render('footer'); ?>