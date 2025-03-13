<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<style>
    .image-small {
        width: 800px;
        height: 600px;
    }
    .breadcrumb {
        padding: 10px;
        background-color: #f5f5f5;
        border-bottom: 1px solid #ccc;
    }
    .breadcrumb a {
        text-decoration: none;
        color: #337ab7;
    }
    .breadcrumb-link {
    text-decoration: none;
    color: #337ab7;
    }
</style>

<div class="breadcrumb">
    <a href="<?= base_url('index') ?>" class="breadcrumb-link">Domů</a> /
    <a href="<?= $typKomponentUrl ?>" class="breadcrumb-link"><?= $komponent->typKomponent->typKomponent ?></a>
</div>

<div class="container">
    <div class="row">
        <h1><?= $komponent->nazev ?></h1>
        <img src="<?= base_url('komponenty/' . $komponent->pic) ?>" alt="<?= $komponent->nazev ?>" class="image-small">
        <p>ID: <?= $komponent->id ?></p>
        <p>ID Výrobce: <?= $komponent->vyrobce_id ?></p>

        <p>Link na Alzu: <a href="<?= $komponent->odkaz ?>"><?= $komponent->odkaz ?></a></p>
        <p>Výrobce: <?= $komponent->vyrobce->vyrobce ?></p>
    </div>
</div>

<?= $this->endSection() ?>