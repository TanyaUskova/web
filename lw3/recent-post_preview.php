<div class="recent-post">
    <div class="recent-post__img" style="background-image: url(<?= $post['img_modifier']?>)">
    </div>
    <div class="recent-post__name">
        <h4 class="recent-post__title"><?= $post['title']?></h4>
        <h5 class="recent-post__subtitle"><?= $post['subtitle']?></h5>
    </div>
    <div class="recent-post__line"></div>
    <div class="recent-post__info">
        <div class="recent-post__speaker">
            <img class="recent-post__speaker-avatar" src="<?= $post['author_photo']?>" alt="<?= $post['author_name']?>">
            <span class="recent-post__speaker-name"><?= $post['author_name']?></span>
        </div>
        <span class="recent-post__date"><?= $post['date']?></span>
    </div>
</div>