<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<style>
body {font-family: Arial;}


.tab {
  overflow: hidden;
  border: 1px solid #ccc;
  background-color: #f1f1f1;
}


.tab button {
  background-color: inherit;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  transition: 0.3s;
  font-size: 17px;
}


.tab button:hover {
  background-color: #ddd;
}


.tab button.active {
  background-color: #ccc;
}

.tabcontent {
  display: none;
  padding: 10px;
  border: 1px solid #ccc;
  border-top: none;
}
</style>
</head>
<body>

<h2>Taby</h2>
<p>Zobrazení tabů</p>

<div class="tab">
    <?php foreach ($typKomponents as $typKomponent) : ?>
        <button class="tablinks" onclick="openCity(event, '<?= $typKomponent->typKomponent ?>' )"><?= $typKomponent->typKomponent ?></button>
    <?php endforeach; ?>
</div>

<?php foreach ($typKomponents as $typKomponent ) : ?>
        <div id="<?= $typKomponent->typKomponent ?>" class="tabcontent">
            <h3><?= $typKomponent->typKomponent ?></h3>

            <?php $komponents = $komponentModel->where('typKomponent_id', $typKomponent->idKomponent)->findAll(); ?>
            <?php foreach ($komponents as $komponent) : ?>
                <p><a href=" <?= base_url('komponent/' . $komponent->id) ?>" class="btn btn-primary"><?= $komponent->nazev ?></a></p>
            <?php endforeach; ?>
        </div>
<?php endforeach; ?>

<script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}
</script>
   
</body>

<?= $this->endSection() ?>