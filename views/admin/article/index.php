<h1 class="title mt-5 text-center">
    Administration des articles
</h1>

     <table class="table table-hover">
       <thead>
         <tr>
           <th>#</th>
           <th>Titre</th>
           <th>Publié le</th>
           <th>Action</th>
         </tr>
       </thead>
       <tbody>
         <?php foreach ($params['articles'] as $article): ?>
         <tr>
           <td scope="row"><?= $article->id ?></td>
           <td><?= $article->title ?></td>
           <td><?= $article->getCreatedAt() ?></td>
           <td>
             <a href="/admin/article/edit/<?= $article->id ?>" class="btn btn-warning">
               <i class="fa fa-pencil" aria-hidden="true"></i>
               Modifier
             </a>
            <form action="articles/delete/<?= $article->id ?>" method="POST" class="d-inline">
              <button class="btn btn-danger" type="submit"> <i class="fa fa-trash" aria-hidden="true"></i> Supprimer</button>
            </form>
           </td>
         </tr>
         <?php endforeach; ?>
       </tbody>
     </table>