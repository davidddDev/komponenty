<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<style>
    .image {
    max-width: 50%;
    max-height: 50%;
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
    .house-icon {
    font-size: 24px;
    }
    .velky-drobecek {
        font-size: 24px;
    }
</style>

<div class="breadcrumb"> 
    <a href="<?= base_url('index')  // drobecky ?>" class="breadcrumb-link house-icon">&#x1F3E0;/</a>
    <a href="<?= $typKomponentUrl ?>" class="breadcrumb-link velky-drobecek"><?= $komponent->typKomponent->typKomponent ?></a>
</div>

<div class="container">
    <div class="row">
        <h1><?= $komponent->nazev ?></h1>
        <h3>Výrobce: <?= $komponent->vyrobce->vyrobce ?></h3>
        <h6>ID: <?= $komponent->id ?></h6>
        <h6>ID Výrobce: <?= $komponent->vyrobce_id ?></h6>
        <h6>Link na Alzu: <a href="<?= $komponent->odkaz ?>"><?= $komponent->odkaz ?></a></h6>
        <img src="<?= base_url('komponenty/' . $komponent->pic) ?>" alt="<?= $komponent->nazev ?>" class="image">
    </div>
</div>

<?= $this->endSection() ?>