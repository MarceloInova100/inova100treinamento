
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?= $title ?? 'Controle de Presença' ?></title>

    <link
        href="https://cdn.tstrap@5.3.3/dist/css/bootstrap.min.css
</head>

<body>

    <?= $this->include('layouts/header') ?>

    <div class="container-fluid">
        <div class="row">

            <div class="col-md-2 p-0">
                <?= $this->include('layouts/menu') ?>
            </div>

            <div class="col-md-10 p-4">
                <?= $this->renderSection('content') ?>
            </div>

        </div>
    </div>

    <?= $this->include('layouts/footer') ?>

</body>
</html>