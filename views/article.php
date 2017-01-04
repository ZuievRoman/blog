<?php require_once ("header.php"); ?>
        <div class="container">
            <h1>Блог для задания</h1>
            <div>
                <div class="article">
                    <h3><?=$article['title']?></h3>
                    <? if(isset($article['photo'])): ?>
                        <p><img src="<?=$article['photo']?>" alt="<?=$article['title']?>"/></p>
                    <? endif; ?>
                    <em>Создано: <?=$article['created_at']?></em>
                    <em>Обновлено: <?=$article['updated_at']?></em>
                    <p><?=$article['content']?></p>    
                </div>
                </div>
            </div>
<?php require_once ("footer.php"); ?>