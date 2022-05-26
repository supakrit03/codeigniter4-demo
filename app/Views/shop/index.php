<?= $this->extend('layouts/default') ?>



<?= $this->section('content') ?>
<h1>Hello World!</h1>
<div id="counter"></div>
<button id="counter-btn">increment</button>

<?= $this->endSection() ?>


<?= $this->section('javascript') ?>
<script src="javascripts/app/shop/index.js"></script>
<?= $this->endSection() ?>