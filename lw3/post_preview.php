<div class="featured-post" style="background-image: url(<?= $post['img_modifier']?>)">
     <?php if (array_key_exists('tag', $post)): ?>
        <span class="featured-post__tag">ADVENTURE</span>   
    <?php endif; ?>
    <h4 class="featured-post__title"><?= $post['title']?></h4>
    <h5 class="featured-post__subtitle"><?= $post['subtitle']?></h5>
    <div class="featured-post__info">
        <div class="featured-post__speaker">
            <img class="featured-post__speaker-avatar" src="<?= $post['author_photo']?>" alt="<?= $post['author_name']?>">
            <span class="featured-post__speaker-name"><?= $post['author_name']?></span>
        </div>
        <span class="featured-post__date"><?= $post['date']?></span>
    </div>
</div>