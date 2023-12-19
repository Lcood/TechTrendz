 <article class="col-md-4 py-2">
            <div class="card w-100" >
                <img src="./uploads/<?=$article["image"]?>" class="card-img-top" alt="<?=$article["title"]?>">
                <div class="card-body">
                    <h5 class="card-title"><?=$article["title"]?></h5>
                    <p class="card-text"><?=$article["description"]?></p>
                    <a href="actualite.php?id=<?=$key?>" class="btn btn-primary">Lire la suite</a>
                </div>
            </div>
</article>