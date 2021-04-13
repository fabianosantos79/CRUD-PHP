<?php $render('header'); ?>

<button type="button" class="btn btn-primary btn-lg"><a class="btn btn-primary" type="submit"  href= "<?= $base;?>/adicionar">ADICIONAR</a></button>
<br /><br />

<table class="table table-bordered" width=80%>
    <thead class="thead-dark">
    <tr>
        <th scope="col">ID</th>
        <th scope="col">FOTO</th>
        <th scope="col">NOME</th>
        <th scope="col">E-MAIL</th>
        <th scope="col">EDITAR</th>
        <th scope="col">EXCLUIR</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($usuarios as $usuario): ?>
        <tr>
            <td scope="row"><?= $usuario['id']  ?></td>
            <td><img src="<?= $base; ?>/assets/images/foto.png" width= 50 /></td>
            <td><?= $usuario['nome']  ?></td>
            <td><?= $usuario['email']  ?></td>
            <td>
                <a href ="<?= $base; ?>/usuario/<?=$usuario['id']; ?>/editar"><img src="<?= $base; ?>/assets/images/document.png" width=30 /></a>
            </td>
            <td>
            <a href="<?= $base; ?>/usuario/<?= $usuario['id']; ?>/excluir" onclick = "return confirm('Tem certeza que deseja excluir?')"><img src="<?= $base; ?>/assets/images/trash.png" width=30 /></a>
            </td>
        </tr>
    <?php endforeach; ?>

    </tbody>

</table>

<?php $render('footer'); ?>