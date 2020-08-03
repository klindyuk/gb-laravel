<h2><?=$category['title']?></h2>
<ul>
<?php foreach ($news as $item) : ?>
<li>
    <a href="<?=route('news.show', ['id' => $item['id']]);?>"><?=$item['title'];?></a>
</li>
<?php endforeach; ?>

</ul>
<p><a href="<?=route('news.create');?>">Добавить новость</a></p>