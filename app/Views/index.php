<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<style>
body {
  background-color: #2f2f2f;
  color: #fff;
  font-family: Arial, sans-serif;
}

.container {
  background-color: #333;
  border: 1px solid #444;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
  padding: 20px;
  margin: 40px auto;
  max-width: 800px;
  border-radius: 10px;
}

.card {
  background-color: #444;
  border: 1px solid #555;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
  margin-bottom: 20px;
  padding: 20px;
  border-radius: 10px;
}

.card-title {
  color: #fff;
  font-size: 18px;
  font-weight: bold;
  text-align: center;
  margin-top: 10px;
}

.card-body {
  background-color: #555;
  padding: 20px;
}

.btn-primary {
  background-color: #337ab7;
  color: #fff;
  border: none;
  padding: 10px 20px;
  font-size: 16px;
  cursor: pointer;
  border-radius: 5px;
}

.btn-primary:hover {
  background-color: #23527c;
}

.title {
  color: #fff;
  margin-top: 20px;
  margin-bottom: 10px;
  text-align: center;
  font-size: 24px;
  font-weight: bold;
}

.abytonebylousebe {
  background-color: #333;
  padding: 10px;
  border: 1px solid #444;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
  margin: 13px;
  border-radius: 10px;
}

.btn-warning {
  background-color: #ff9900;
  color: #fff;
  border: none;
  padding: 10px 20px;
  font-size: 16px;
  cursor: pointer;
  border-radius: 5px;
}

.btn-success {
  background-color: #33cc33;
  color: #fff;
  border: none;
  padding: 10px 20px;
  font-size: 16px;
  cursor: pointer;
  border-radius: 5px;
}

.btn-lg {
  padding: 15px 30px;
  font-size: 18px;
}
</style>

<div class="container">
  <div class="row">
    <h1 class="title">Typy komponentů</h1>
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
<div class="abytonebylousebe">
  <?= anchor(base_url('taby'), 'Taby', 'class="btn btn-warning btn-lg"') ?>  
  <?= anchor(base_url(''), 'Přidat novou kategorii', 'class="btn btn-success btn-lg"') ?>
</div>

<?= $this->endSection() ?>