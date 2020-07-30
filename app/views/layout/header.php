<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- CSS Dependencies -->
    <link rel="stylesheet" href="<?= BASE_URL; ?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= BASE_URL; ?>/css/shards.min.css">
    <title><?= $data['tittle']; ?></title>
</head>
<body>

<!-- Navbar Section -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
  <a class="navbar-brand" href="<?= BASE_URL; ?>">PHP MVC</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="<?= BASE_URL; ?>">Home <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="<?= BASE_URL; ?>/Example">CRUD Example</a>
      <a class="nav-item nav-link" href="<?= BASE_URL; ?>/About">About</a>
    </div>
  </div>
  </div>
</nav>