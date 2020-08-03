<h2>Редактировать новость</h2>
<form action="#">
<input type="text" name="title" placeholder="Заголовок" value="<?=$item['title']; ?>">
<br>
<textarea name="text" id="text" cols="30" rows="10"><?=$item['text']; ?></textarea>
<br>
<input type="submit">
</form>
<p>
<a href="<?=route('index')?>">На главную</a>
</p>