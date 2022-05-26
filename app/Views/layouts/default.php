<!doctype html>
<html>

<head>
    <title>My Layout</title>
</head>

<body>
    <h1>Layout</h1>
    <?= $this->renderSection('content') ?>



    <script src="javascripts/lib/jquery-3.6.0.js"></script>
    <?= $this->renderSection('javascript') ?>
</body>

</html>