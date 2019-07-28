      <!-- Je crée une nouvelle ligne dans ma grille virtuelle: https://getbootstrap.com/docs/4.1/layout/grid/-->
      <div class="row">

        <!-- Par défaut (= sur mobile) mon element <main> prend toutes les colonnes (=12)
        MAIS au dela d'une certaine taille, il n'en prendra plus que 9
        https://getbootstrap.com/docs/4.1/layout/grid/#grid-options -->
        <main class="col-lg-9">

          <!-- Je dispose une card: https://getbootstrap.com/docs/4.1/components/card/ -->
          <article class="card">
            <div class="card-body">
              <h2 class="card-title"><?= $article->title ?></h2>
              <p class="card-text"><?= $article->content ?></p>
            </div>
          </article>

          <a href="./" class="btn btn-sm btn-dark">Retour à l'accueil</a>

        </main>

        <?php require './inc/templates/aside.php'; ?>
      </div><!-- /.row -->


