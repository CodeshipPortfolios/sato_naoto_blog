<?php get_header();?>

<div  class="front-page">
<div class="catch-flaze">
    <div>
<p>浪漫あふるゝ<br>夜の街へ</p>
</div>
</div>


<div class="topmenu">
<div class="container">
<div class="link">
<a href="<?php echo get_permalink(get_page_by_title('ブログ')->ID);?>"><i class="fa fa-pencil"></i>ぶろぐ</a>
</div>
<div class="link">
    <a href="<?php echo get_permalink(get_page_by_title('サイトについて')->ID);?>"><i class="fa fa-info"></i>さいとにつひて</a>
</div>
<div class="link">
<a href="<?php echo get_permalink(get_page_by_title('お問い合わせ')->ID);?>"><i class="fa fa-envelope"></i>お問ひ合わせ</a>
</div>
</div>
</div>
</div>
<?php get_footer();?>