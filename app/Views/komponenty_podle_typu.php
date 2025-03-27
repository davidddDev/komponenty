<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<style>
body {
  background-color: #333;
  color: #fff;
  font-family: Arial, sans-serif;
}

.container {
  background-color: #444;
  max-width: 800px;
  margin: 40px auto;
  padding: 20px;
  border: 1px solid #555;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
  border-radius: 10px;
}

.card {
  margin-bottom: 20px;
  border: 1px solid #555;
  border-radius: 10px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
  background-color: #333;
  transition: all 0.3s ease;
}

.card:hover {
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.7);
}

.card-title {
  font-size: 18px;
  font-weight: bold;
  text-align: center;
  margin-top: 10px;
  color: #fff;
  text-shadow: 0 0 5px rgba(0, 0, 0, 0.5);
}

.card-body {
  padding: 20px;
  background-color: #333;
  border-bottom: 1px solid #555;
}

.btn-primary {
  background-color: #337ab7;
  color: #fff;
  border: none;
  padding: 10px 20px;
  font-size: 16px;
  cursor: pointer;
  border-radius: 5px;
  transition: all 0.3s ease;
}

.btn-primary:hover {
  background-color: #23527c;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
}

.title {
  margin-top: 20px;
  margin-bottom: 10px;
  color: #fff;
  text-align: center;
  font-size: 24px;
  font-weight: bold;
}

.pagination {
  background-color: #333;
  padding: 10px;
  border: 1px solid #555;
  border-radius: 10px;
}

.pagination a {
  color: #337ab7;
  text-decoration: none;
  transition: all 0.3s ease;
}

.pagination a:hover {
  color: #23527c;
  text-decoration: underline;
}
</style>

<div class="container">
  <div class="row">
    <h1 class="title" style="text-align: center;">Typy komponentů: <?= $typKomponent->typKomponent ?></h1>
    <?php foreach ($komponents as $komponent) : ?>
      <div class="col-md-12">
        <div class="card">
          <h2 class="card-title"><?= $komponent->nazev ?></h2>
          <a href="<?= site_url('komponent/' . $komponent->id) ?>" class="btn btn-primary">Detail</a>
        </div>
      </div>
    <?php endforeach; ?>
    <div class="pagination">
      <?= $pager->links() ?>
    </div>
  </div>
</div>

<?= $this->endSection() ?>