
<?php

$currentPage = basename($_SERVER["SCRIPT_NAME"]);

?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?=$mainMenu[$currentPage]["meta_description"] ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/override-bootstrap.css">
    <title><?=$mainMenu[$currentPage]["head_title"]?></title>
</head>
<body>
    <header>
        <section class="d-flex justify-content-center py-3">
            <div class="col-md-4 mb-2 mb-md-0">
                <a href="/" class="d-inline-flex link-body-emphasis text-decoration-none">
                <img src="./assets/images/logo-tech-trendz.png" alt="logo tech trendz" width="200">
                </a>
            </div>
             <ul class="nav nav-pills col-12 col-md-auto mb-2 justify-content-center mb-md-0">
                <?php foreach ($mainMenu as $key => $menuItem) { 
                    if (!array_key_exists("exclude", $menuItem)) {
                    ?>
                    <li class="nav-item"><a href="<?=$key; ?>" class="nav-link px-2 <?php 
                        if ($key === $currentPage) { echo "active"; }
                        //echo ($key === $currentPage) ? "active" : "";
                        
                        ?>"><?=$menuItem["menu_title"]; ?></a></li>
                <?php } 
                    }
                ?>
            </ul>
            <div class="col-md-4 text-end">
                <button type="button" class="btn btn-outline-primary me-2">Se connecter</button>
                <button type="button" class="btn btn-primary">S'inscrire</button>
            </div>
        </section>
  </header>
  <main>


