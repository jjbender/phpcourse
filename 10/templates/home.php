<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Epic Blog</title>
</head>
<body>
<p> Добавить:
    1) личный профиль пользователя
    2) история изменений
    3) комментирование
    4) распределение прав, редактирование только своей части
    5) авторизация через социальные сети??
    
    
   
        <ul>
        <?php foreach($messages AS $post): ?>
            <li>
                <?= $post['message'] ?> <br>
                <a href="index.php?action=messages&method=edit&id=<?= $post['id'] ?>">Редактировать</a>
                <a href="index.php?action=messages&method=delete&id=<?= $post['id'] ?>">Удалить</a>
            </li>
        <?php endforeach; ?>
    </ul>
    <a href="index.php?action=messages&method=add">Добавить сообщение</a>
    
<a href="index.php?action=account&method=logout">Sign out</a>
 <a href="index.php?action=account&method=register">Sign in</a>
    
</body>
</html>