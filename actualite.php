  <?php

 
  require_once __DIR__. "/lib/article.php";
  require_once __DIR__. "/lib/menu.php";
 

  require_once __DIR__. "/templates/header.php";


$error = false;

if (isset($_GET["id"])) {
    $id = $_GET["id"];
    $article = getArticleById($pdo, $id);

    if ($article) {
        $imagePath = getArticleImage($article["image"]);
        $mainMenu["actualite.php"] = ["head_title" => $article["title"], "meta_description" => $article["description"], "exclude" => true];
    } else {
        $error = true;
    }    
} else {
    $error = true;
}


?>

 <section class="container py-5">
    <article class="row flex-lg-row-reverse align-items-center g-5 py-5">
      <div class="col-10 col-sm-8 col-lg-6">
        <img src="./uploads/<?=$article["image"]?>" class="d-block mx-lg-auto img-fluid" alt="logo" width="500">
      </div>
      <div class="col-lg-6">
        <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3"><?=$article["title"]?></h1>
        <p class="lead"><?=$article["description"]?></p>
      </div>
    </article>
  </section>

<?php
  
  require_once __DIR__. "/templates/footer.php";
?>
