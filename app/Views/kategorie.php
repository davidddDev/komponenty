<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<div class="container">
    <h2 class="title">Přidat novou kategorii pro: <?= $typKomponent->typKomponent ?></h2>
    <form method="post" action="<?= base_url('typ-komponent/' . $typKomponent->url . '/kategorie') ?>" class="form-horizontal">
        <div class="form-group">
            <label for="nazev" class="col-sm-2 control-label">Název kategorie</label>
            <div class="col-sm-8">
                <input type="text" name="nazev" placeholder="Vložte název kategorie" class="form-control" required>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-12">
                <button type="submit" class="btn btn-success btn-lg">Přidat kategorii</button>
            </div>
        </div>
    </form>
</div>

<?= $this->endSection() ?>
