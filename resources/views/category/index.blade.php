<h2>Список категорий</h2>
<ul>
<?php foreach($categories as $cat): ?>
<li>
    <a href="<?=route('category.show', ['id' => $cat['id']]); ?>"><?=$cat['title'];?></a>
</li>
<?php endforeach; ?>
</ul>
<a href="<?=route('index'); ?>">Вернуться на главную</a>