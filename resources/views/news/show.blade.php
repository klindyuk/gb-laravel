<h2><?=$item['title']; ?></h2>
<?=$item['text'];?>
<p><a href="<?=route('news.edit', ['id' => $item['id']])?>">Редактировать новость</a></p>
<p><a href="<?=route('category.show', ['id' => $item['category_id']])?>">К новостям категории</a></p>
<p><a href="<?=route('index')?>">На главную</a></p>