<?php
$page = 'blog';


?>
<!-- Breadcrumbs Start -->
<div class="rs-breadcrumbs img4">
    <div class="breadcrumbs-inner text-center">
        <h1 class="page-title">Actualités</h1>
        <ul>
            <li>
                <a class="active" href="index">Catégorie</a>
            </li>
            <li><?= $params['tag']->name  ?></li>
        </ul>
    </div>
</div>
<!-- Breadcrumbs End -->

<!-- Blog Section Start -->
<div class="rs-inner-blog pt-120 pb-120 md-pt-90 md-pb-90">

    <h2 class="text-center pb-80" > Thématique: <span style="color:#be1d2c"> <?= strtoupper($params['tag']->name)  ?> </span> </h2>

    <div class="container">
        <div class="row">
            <div class="col-lg-12 pr-35 md-pr-15">
                <div class="row">
                    <?php foreach ($params['tag']->getPosts() as $article): ?>
                    <div class="col-lg-12 mb-50">

                        <div class="blog-item">
                            <div class="blog-img">
                                <a href="article/<?= $article->id ?>">
                                    <img src="https://picsum.photos/1200/670" alt="">
                                </a>
                            </div>
                            <div class="blog-content">
                                <h3 class="blog-title"><a href="article/1"><?= $article->title ?></a>
                                </h3>
                                <div class="blog-meta">
                                    <ul class="btm-cate">
                                        <li>
                                            <div class="blog-date">
                                                <i class="fa fa-calendar-check-o"></i> <?= $article->getCreatedAt() ?>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="author">
                                                <i class="fa fa-user-o"></i> <?= $article->author ?>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="blog-desc">
                                    <?= $article->getExcerpt() ?>
                                </div>
                                <div class="blog-button inner-blog">
                                   <?= $article->getButton() ?>
                                </div>
                            </div>
                        </div>

                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Blog Section End -->

</div>
<!-- Main content End -->