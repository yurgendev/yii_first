<?php
use yii\helpers\Url;
?>
<!--main content start-->
<div class="main-content">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <article class="post">
                    <div class="post-thumb">
                        <a href="<?= Url::toRoute(['site/view', 'id' => $article->id]); ?>"><img src="<?= $article->getImage(); ?>" alt=""></a>
                    </div>
                    <div class="post-content">
                        <header class="entry-header text-center text-uppercase">
                            <h6><a href="<?= Url::toRoute(['site/category', 'id' => $article->category->id]); ?>"><?= htmlspecialchars($article->category->title); ?></a></h6>
                            <h1 class="entry-title"><a href="<?= Url::toRoute(['site/view', 'id' => $article->id]); ?>"><?= htmlspecialchars($article->title); ?></a></h1>
                        </header>
                        <div class="entry-content">
                            <p><?= htmlspecialchars($article->content); ?></p>
                        </div>
                        <div class="social-share">
                            <span class="social-share-title pull-left text-capitalize">By Author <?= $article->getDate(); ?></span>
                        </div>
                    </div>
                </article>

                <!-- Поле для комментариев -->
                <div class="leave-comment"><!--leave comment-->
                    <h4>Leave a reply</h4>
                    <form class="form-horizontal contact-form" role="form" method="post" action="#">
                        <div class="form-group">
                            <div class="col-md-12">
                                <textarea class="form-control" rows="6" name="message"
                                          placeholder="Write Message"></textarea>
                            </div>
                        </div>
                        <a href="#" class="btn send-btn">Post Comment</a>
                    </form>
                </div><!--end leave comment-->

            </div>
            <?=$this->render('/partials/sidebar', [
                'popular' => $popular,
                'recent' => $recent,
                'categories' => $categories,
            ])?>
        </div>
    </div>
</div>
<!-- end main content-->