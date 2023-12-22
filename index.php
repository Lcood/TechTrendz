<?php
  
  
  require_once __DIR__. "/lib/config.php";
  require_once __DIR__. "/lib/pdo.php";
  require_once __DIR__. "/lib/menu.php";
  require_once __DIR__. "/lib/menu.php";
  require_once __DIR__. "/lib/article.php";
  require_once __DIR__. "/templates/header.php";

  $articles = getArticles($pdo, 3);

?>

<section class="container py-5">
    <article class="row flex-lg-row-reverse align-items-center g-5 py-5">
      <div class="col-10 col-sm-8 col-lg-6">
        <img src="./assets/images/logo-tech-trendz.png" class="d-block mx-lg-auto img-fluid" alt="logo" width="500">
      </div>
      <div class="col-lg-6">
        <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3">Toute l'actu tech!</h1>
        <p class="lead">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quis rem libero accusantium, dolorum ad nisi architecto optio dicta at hic laudantium, dolorem earum. Dignissimos, esse debitis maxime enim totam excepturi!</p>
        <div class="d-grid gap-2 d-md-flex justify-content-md-start">
          <a href="actualites.php" class="btn btn-primary btn-lg px-4 me-md-2">Voir les actualités</a>
        </div>
      </div>
    </article>
  </section>

  <section class="container ">
    <article class="row text-center">
        <?php  foreach($articles as $key => $article) { 
          
          require __DIR__. "/templates/article_part.php"; 
        
        } ?>

    </article>
</section>

<?php
  
  require_once __DIR__. "/templates/footer.php";
?>