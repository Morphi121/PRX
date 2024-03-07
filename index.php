<?php
session_start();

if (!isset($_SESSION['user'])) {
  header('Location: login.php');
  exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Форум</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <h1>Форум</h1>
    <nav>
      <a href="index.php">Главная</a>
      <a href="news.php">Новости</a>
      <a href="chats.php">Чаты</a>
      <a href="profile.php">Личный кабинет</a>
    </nav>
  </header>
  <main>
    <section id="posts">
      <h2>Последние посты</h2>
      <ul>
        <?php
        $posts = get_posts();
        foreach ($posts as $post) {
          echo '<li>';
          echo '<article>';
          echo '<h3>' . $post['title'] . '</h3>';
          echo '<p>' . $post['content'] . '</p>';
          echo '<footer>';
          echo '<span>Автор: <a href="#">' . $post['author'] . '</a></span>';
          echo '<span>Дата: ' . $post['date'] . '</span>';
          echo '</footer>';
          echo '</article>';
          echo '</li>';
        }
        ?>
      </ul>
    </section>
    <section id="chat">
      <h2>Общий чат</h2>
      <ul>
        <?php
        $messages = get_messages();
        foreach ($messages as $message) {
          echo '<li>';
          echo '<div class="message">';
          echo '<span>' . $message['user'] . ':</span>';
          echo '<p>' . $message['content'] . '</p>';
          echo '</div>';
          echo '</li>';
        }
        ?>
      </ul>
      <form action="chat.php" method="post">
        <input type="text" name="message" placeholder="Введите сообщение">
        <button type="submit">Отправить</button>
      </form>
    </section>
  </main>
  <footer>
    <p>Copyright &copy; 2023 Форум</p>
  </footer>
</body>
</html>
```

**news.php**

```php
<?php
session_start();

if (!isset($_SESSION['user'])) {
  header('Location: login.php');
  exit;
}
?>
