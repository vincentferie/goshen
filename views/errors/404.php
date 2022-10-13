<?php 
$content = <<<HTML
<!-- Main content Start -->
        <div class="main-content" style="margin-top: -5% !important; margin-bottom: -5% !important"> 
            <div class="page-error">
                <div class="container">
                    <div class="error-not-found shadow">
                        <div class="error-content">
                            <h2 class="title"><span>404</span>Page inexistante</h2>
                            <h1>😕</h1>
                            <div class="btn-part">
                                <a href="index" class="readon learn-more">Retour à la page d'accueil</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
        <!-- Main content End -->
HTML;

require '../views/layout.php';

