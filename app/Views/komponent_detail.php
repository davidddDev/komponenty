<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<style>
body {
  background-color: #2f2f2f;
  color: #fff;
}

.breadcrumb {
  padding: 10px;
  background-color: #333;
  border-bottom: 1px solid #444;
  border-radius: 10px;
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
  color: #fff;
}

.velky-drobecek {
  font-size: 24px;
  color: #fff;
}

.container {
  background-color: #444;
  padding: 20px;
  margin: 40px auto;
  max-width: 800px;
  border: 1px solid #555;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
  border-radius: 10px;
}

.row {
  padding: 20px;
}

h1, h3, h6 {
  color: #fff;
}

.image {
  max-width: 50%;
  max-height: 50%;
  border: 1px solid #555;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
  border-radius: 10px;
}

a {
  color: #337ab7;
}

a:hover {
  color: #23527c;
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