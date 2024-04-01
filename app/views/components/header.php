<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $data['title']; ?></title>
    <link href="<?= BASEURL; ?>css/bootstrap.css" rel="stylesheet" />
    <link href="<?= BASEURL; ?>css/style.css" rel="stylesheet" />
</head>
<body>
<ul class="nav justify-content-center p-3">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="<?= BASEURL; ?>home">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="<?= BASEURL; ?>about">About</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="<?= BASEURL; ?>mahasiswa">Mahasiswa</a>
  </li>
  <li class="nav-item">
    <a class="nav-link disabled" aria-disabled="true">Disabled</a>
  </li>
</ul>