<?php require_once("header.php"); ?>
    <main>
        <section class="main_top">
            <div class="col-lg-6 main_photo"></div>
            <div class="col-lg-6 main_photo"></div>
            <div class="col-lg-6 main_photo"></div>
            <div class="col-lg-6 main_photo"></div>
        </section>
        <section class="main_content container">
            <div class="row">
                <div class="main_content_article col-lg-12">

                    <div class="text-right">
                        <h1 class="text-left">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h1>
                        <em>data</em>
                        <em>data</em>
                    </div>
                    <br>
                    <div class="main_content_article_text">
                        <p><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui, quos, tempore. Beatae dolore eaque ex
            fugit illum impedit molestias mollitia odio vel velit. Autem cum deleniti deserunt placeat,
            similique vitae.</span><span>A atque consequuntur eligendi eos natus quam, repudiandae sed ullam! Error
            perferendis possimus provident recusandae ullam vel. Eum expedita officia perspiciatis. Corporis
            exercitationem facilis laborum quis repellendus sint tempore velit?</span><span>Consectetur, fuga
            laudantium molestias nihil possimus praesentium reprehenderit? A, ad aliquid animi ducimus earum hic in
            necessitatibus quo. Ducimus earum fugiat id incidunt ipsum laudantium libero, officiis quis quos
            voluptatum!</span><span>Assumenda at delectus dicta dolor, dolore dolorem excepturi, fugit itaque maxime
            officiis praesentium quas quis saepe unde vitae voluptates voluptatum. Commodi fugiat ipsa molestiae nemo,
            non qui repellendus sit voluptates.</span><span>Alias blanditiis consectetur consequatur consequuntur
            cupiditate doloribus eligendi esse est, impedit laboriosam maxime neque numquam, placeat provident quae
            quisquam reiciendis saepe totam veniam vitae. Ad consequuntur dolorum minus nam perspiciatis?</span>
                        </p>
                        <div class="main_content_article_views text-left vcenter">
                            <i class="material-icons vcenter">&#xE417;</i><strong>999</strong>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 main_content_articles">
                    <?php foreach ($articles as $article): ?>
                        <div class="col-lg-7">
                            <? if (isset($article['photo'])): ?>
                                <img class="photo_article" src="<?= $article['photo'] ?>" alt="<?= $article['title'] ?>"/>
                            <? endif; ?>
                        </div>
                        <div class="col-lg-5 main_content_articles_title">
                            <h2><?= $article['title'] ?></h2>
                            <em>Создано: <?= $article['created_at'] ?></em>
                            <em>Обновлено: <?= $article['updated_at'] ?></em>
                            <p><?= articles_intro($article['content']) ?></p>
                            <a href="article.php?id=<?= $article['id'] ?>">read more</a>
                        </div>
                    <?php endforeach ?>
                </div>
            </div>
        </section>
    </main>
<?php require_once("footer.php"); ?>




