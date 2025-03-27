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
    .btn-primary {
        background-color: #337ab7;
        color: #fff;
        border: none;
        padding: 10px 20px;
        font-size: 16px;
        cursor: pointer;
    }
    .btn-primary:hover {
        background-color: #23527c;
    }
    .title {
        margin-top: 20px;
        margin-bottom: 10px;
    }
</style>

<div class="container">
    <div class="row">
        <h1 class="title" style="text-align: center";>Typy komponentů</h1>
        <?php foreach ($typKomponents as $typKomponent) : ?>
            <div class="col-md-6">
                <div class="card">
                
                    <h2 class="card-title"><?= $typKomponent->typKomponent ?></h2>
                    <a href="<?= base_url('typ-komponent/' . $typKomponent->url) ?>" class="btn btn-primary">Zobrazit komponenty</a>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
<div class="abytonebylousebe" style="margin: 20px;">
    <?= anchor(base_url('taby'), 'Taby', 'class="btn btn-primary"') ?>  
    <?= anchor(base_url(''), 'Přidat novou kategorii', 'class="btn btn-primary"') ?>
</div>


<?= $this->endSection() ?>