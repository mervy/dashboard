<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $this->e($title) ?></title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <div class="container">

        <?php $this->insert('partials::navbar') ?>

        <?= $this->section('content') ?>

    </div>
</body>

</html>