<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<style>
    body {
        font-family: Arial, sans-serif;
    }
    .container {
        max-width: 800px;
        margin: 40px auto;
    }
    .card {
        margin-bottom: 20px;
        border: 1px solid #ddd;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    .card-title {
        font-size: 18px;
        font-weight: bold;
        text-align: center;
        margin-top: 10px;
    }
    .card-body {
        padding: 20px;

    }
</style>

<div class="container">
    <div class="row">
        <h1><?= $typKomponent->typKomponent ?></h1>

        <div class="row">
            <?php foreach ($komponents as $komponent) : ?>
                <div class="col-md-12">
                    <div class="card">
                        <h2 class="card-title"><?= $komponent->nazev ?></h2>
                        <p><?= $komponent->odkaz ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>

<?= $this->endSection() ?>