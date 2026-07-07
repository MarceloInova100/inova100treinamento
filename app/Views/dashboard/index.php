<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<h2>Dashboard</h2>

<div class="row">

    <div class="col-md-3">
        <div class="card text-center">
            <div class="card-body">
                <h3>120</h3>
                <p>Participantes</p>
            </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="card text-center">
            <div class="card-body">
                <h3>75</h3>
                <p>Presentes Hoje</p>
            </div>
        </div>
    </div>

</div>

<?= $this->endSection() ?>