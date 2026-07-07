<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<div class="d-flex justify-content-between mb-3">

    <h2>Gestores</h2>

     ?>"
       class="btn btn-success">
        Novo Gestor
    </a>

</div>

<table class="table table-striped">

    <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>E-mail</th>
            <th>Perfil</th>
            <th>Ações</th>
        </tr>
    </thead>

    <tbody>
    <?php foreach($gestores as $gestor): ?>

        <tr>

            <td><?= $gestor['id'] ?></td>
            <td><?= $gestor['nome'] ?></td>
            <td><?= $gestor['email'] ?></td>
            <td><?= $gestor['perfil'] ?></td>

            <td>

                ('gestor/editar/'.$gestor['id']) ?>"
                    class="btn btn-warning btn-sm">
                    Editar
                </a>

            </td>

        </tr>

    <?php endforeach; ?>
    </tbody>

</table>

<?= $this->endSection() ?>