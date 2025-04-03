<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<div class="container">
    <?php if ($typKomponent !== null) : ?>
        <h2 class="title">Přidat novou kategorii pro: <?= $typKomponent->typKomponent ?></h2>
        <form method="post" action="<?= base_url('typ-komponent/' . $typKomponent->url . '/kategorie') ?>" class="form-horizontal">
            <!-- ... -->
        </form>
    <?php else : ?>
        <h2 class="title">Typ komponentu nebyl nalezen.</h2>
    <?php endif; ?>
</div>

<?= $this->endSection() ?>