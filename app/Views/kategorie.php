<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<div class="container">
    <h2>Přidat novou kategorii</h2>
    <form method="post" action="<?= base_url('kategorie') ?>">
        <div class="form-group">
            <label for="nazev">Název kategorie</label>
            <input type="text" name="nazev" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Přidat</button>
    </form>
</div>

<?= $this->endSection() ?>
