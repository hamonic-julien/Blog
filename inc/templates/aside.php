        <aside class="col-lg-3">
          <!-- Champ de recherche: https://getbootstrap.com/docs/4.1/components/input-group/ -->
          <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Rechercher un article..." aria-label="Rechercher un article..." aria-describedby="basic-addon2">
            <div class="input-group-append">
              <button class="btn btn-outline-secondary" type="button">Allez</button>
            </div>
          </div>

          <!-- Catégories: https://getbootstrap.com/docs/4.1/components/card/#list-groups-->
          <div class="card">
            <h3 class="card-header">Catégories</h3>
            <ul class="list-group list-group-flush">
              <?php foreach ($categories as $catId=>$category) : ?>
              <li class="list-group-item"><a href="category.php?id=<?= $catId ?>"><?= $category->name ?></a></li>
              <?php endforeach; ?>
            </ul>
          </div>

          <!-- Auteurs: https://getbootstrap.com/docs/4.1/components/card/#list-groups -->
          <div class="card">
            <h3 class="card-header">Auteurs</h3>
            <ul class="list-group list-group-flush">
              <?php foreach ($authors as $authorId=>$author) : ?>
              <li class="list-group-item"><a href="author.php?id=<?= $authorId ?>"><?= $author->name ?></a></li>
              <?php endforeach; ?>
            </ul>
          </div>

        </aside>