<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url("node_modules/bootstrap/dist/css/bootstrap.min.css") ?>">
    <script src="<?= base_url("node_modules/bootstrap/dist/js/bootstrap.min.js") ?>"></script>
    <title>Velký projekt</title>
</head>
<body>

    <?= $this->include('layouts/navbar') ?> 

    <div class="container mt-4">
        <?= $this->renderSection('content') ?> 
    </div>

</body>
</html>
