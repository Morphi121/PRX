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
    <section id="news">
      <h2>Новости</h2>
      <ul>
        <?php
        $news = get_news();
        foreach ($news as $new) {
          echo '<li>';
          echo '<article>';
          echo '<h3>' . $new['title'] . '</h3>';
          echo '<p>' . $new['content'] . '</p>';
          echo '<footer>';
          echo '<span>Автор: <a href="#">' . $new['author'] . '</a></span>';
          echo '<span>Дата: ' . $new['date'] . '</span>';
          echo '</footer>';
          echo '</article>';
          echo '</li>';
        }
        ?>
      </ul>
    </section>
  </main>
  <footer>
    <p>Copyright &copy; 2023 Форум</p>
  </footer>
</body>
</html>
