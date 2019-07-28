      <!-- Je crée une nouvelle ligne dans ma grille virtuelle: https://getbootstrap.com/docs/4.1/layout/grid/-->
      <div class="row">

        <!-- Par défaut (= sur mobile) mon element <main> prend toutes les colonnes (=12)
        MAIS au dela d'une certaine taille, il n'en prendra plus que 9
        https://getbootstrap.com/docs/4.1/layout/grid/#grid-options -->
        <main class="col-lg-9">

          <h2>Catégorie <?= $currentCategory->name ?></h2>

          <?php foreach ($articles as $currentId=>$currentArticle) : ?>
          <!-- Je dispose une card: https://getbootstrap.com/docs/4.1/components/card/ -->
          <article class="card">
            <div class="card-body">
              <h2 class="card-title"><a href="article.php?id=<?= $currentId ?>"><?= $currentArticle->title ?></a></h2>
              <p class="card-text"><?= $currentArticle->content ?></p>
              <p class="infos">
                Posté par <a href="#" class="card-link"><?= $currentArticle->author ?></a> le <time><?= $currentArticle->getDateFr() ?></time> dans <a href="#" class="card-link">#<?= str_replace(' ', '', $currentArticle->category) ?></a>
              </p>
            </div>
          </article>
          <?php endforeach; ?>

          <!-- Je met un element de navigation: https://getbootstrap.com/docs/4.1/components/pagination/ -->
          <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-between">
              <li class="page-item"><a class="page-link" href="#"><i class="fas fa-arrow-left"></i> Previous</a></li>
              <li class="page-item"><a class="page-link" href="#">Next <i class="fas fa-arrow-right"></i></a></li>
            </ul>
          </nav>

        </main>

        <?php require './inc/templates/aside.php'; ?>
      </div><!-- /.row -->


