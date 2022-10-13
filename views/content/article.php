<?php 
$page = 'blog';

$article = $params['article'];

?>
<!-- Breadcrumbs Start -->
<div class="rs-breadcrumbs img4">
    <div class="breadcrumbs-inner text-center">
        <h1 class="page-title new-title pb-10">L'expertise comptable</h1>
        <ul>
            <li>
                <a class="active" href="index.php">Accueil</a>
            </li>
            <li><a class="active" href="blog.php">Actualités</a></li>
            <li><a class="active" href="index.php">L'expertise
                    comptable</a></li>
        </ul>
    </div>
</div>
<!-- Breadcrumbs End -->

<!-- Blog Section Start -->
<div class="rs-inner-blog pt-120 pb-120 md-pt-90 md-pb-90">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 pr-35 md-pr-15">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="blog-details">

                        <h1 class="mb-5 text-center" ><?= $article->title ?></h1>

                            <div class="bs-img mb-35">
                                <a href="#">
                                    <img src="https://picsum.photos/1280/800" alt="" class="rounded-lg 😏">
                                </a>
                            </div>
                            <div class="blog-full">
                                <ul class="single-post-meta">
                                    <li>
                                        <span class="p-date"><i class="fa fa-calendar-check-o"></i> <?= $article->created_at ?>
                                        </span>
                                    </li>
                                    <li>
                                        <span class="p-date"> <i class="fa fa-user-o"></i> <?= $article->author ?> </span>
                                    </li>
                                    <li> 
                                        <?php foreach ($article->getTags() as $tag): ?>
                                            <div class="comment-meta">
                                                <div class="btn-part">
                                                     <a class="readon reply" href="tags/<?= $tag->id ?>"> <?= $tag->name ?></a>
                                                </div>
                                            </div>
                                        <?php endforeach; ?>
                                    </li>
                                </ul>
                               
                                 <ul class="post-categories">
                                    
                                    <li>
                                        <a href="article/1"></a>
                                    </li>
                                    
                                </ul>
                                <p>
                                    <?= $article->content ?>
                                </p>
                            </div>
                            <div class="comment-body">
                                <div class="comment-meta">
                                    <div class="btn-part">
                                        <a class="readon reply" onclick="rtn()"> <i class="fa fa-arrow-left"
                                                aria-hidden="true"></i> Retour</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- Blog Section End -->

</div>