<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<div class="d-flex justify-content-between align-items-center mb-4">

    <h2>Gestores</h2>

    novo') ?>" class="btn btn-success">
        Novo Gestor
    </a>

</div>

<?php if (session()->getFlashdata('success')) : ?>

    <div class="alert alert-success">
        <?= session()->getFlashdata('success') ?>
    </div>

<?php endif; ?>

<div class="card">

    <div class="card-body">

        <table class="table table-striped table-hover">

            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>E-mail</th>
                    <th>Login</th>
                    <th>Perfil</th>
                    <th>Status</th>
                    <th width="180">Ações</th>
                </tr>
            </thead>

            <tbody>

                <?php if (!empty($gestores)) : ?>

                    <?php foreach ($gestores as $gestor) : ?>

                        <tr>

                            <td><?= esc($gestor['id']) ?></td>
                            <td><?= esc($gestor['nome']) ?></td>
                            <td><?= esc($gestor['email']) ?></td>
                            <td><?= esc($gestor['login']) ?></td>
                            <td><?= esc($gestor['perfil']) ?></td>
                            <td>
                                <?= $gestor['ativo'] == 'S' ? 'Ativo' : 'Inativo' ?>
                            </td>

                            <td>

                                gestor/editar/' . $gestor['id']) ?>"
                                   class="btn btn-warning btn-sm">
                                    Editar
                                </a>

                                /' . $gestor['id']) ?>"
                                   class="btn btn-danger btn-sm"
                                   onclick="return confirm('Deseja realmente excluir este gestor?')">
                                    Excluir
                                </a>

                            </td>

                        </tr>

                    <?php endforeach; ?>

                <?php else : ?>

                    <tr>
                        <td colspan="7" class="text-center">
                            Nenhum gestor cadastrado.
                        </td>
                    </tr>

                <?php endif; ?>

            </tbody>

        </table>

    </div>

</div>

<?= $this->endSection() ?>