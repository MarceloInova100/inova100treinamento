<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<h1>Gestores</h1>

<p>Lista de gestores cadastrados.</p>

<a href="<?= base_url('/gestor/novo') ?>" class="btn btn-primary">
    Novo Gestor
</a>

<?= $this->endSection() ?>