<!-- Header Page -->
<?php
$title = "Api" ;
include('header.php'); ?>
<!-- End Header -->
<div class="container" style="margin-top:50px">
  <div class="row">
        <table class="table table-sm">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Auteur</th>
            <th scope="col">Content</th>
            <th scope="col">Date création</th>
            <th scope="col">Date de modification</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
        <?php 
          $a = 0;
          if(isset($article)):
            foreach ($article as $article): $a++; ?>
          <tr>
            <th scope="row"><?= $a; ?></th>
            <td><?= $article->getTitle(); ?></td>
            <td><?= $article->getAuthor(); ?></td>
            <td><?= $article->getContent(); ?></td>
            <td><?= $article->getCreated(); ?></td>
            <td><?= $article->getUpdated(); ?></td>
            <td><a href="update?id=<?= $article->getId(); ?>" class="btn btn-warning">Modifier</a> <a href="delete?id=<?= $article->getId(); ?>" class="btn btn-danger">Supprimer</a></td>
          </tr>
          <?php endforeach; endif; ?>
        
        </tbody>
      </table>
  </div>
</div>



  <!-- Footer Page -->
  <?php include('footer.php'); ?>
  <!-- End Footer -->