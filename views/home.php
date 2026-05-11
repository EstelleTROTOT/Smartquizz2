<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SmartQuiz</title>

  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500&family=Patrick+Hand&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="../assets/css/styles.css">
</head>

<body>

  <!-- HEADER -->
  <header class="header">
    <button class="header__login-btn">Connexion</button>
  </header>

  <!-- MAIN -->
  <main class="container">

    <!-- TITLE -->
    <h1 class="main-title">SmartQuiz 🎯</h1>

    <!-- HERO -->
    <section class="hero">
      <h2 class="hero__title">Choisis un thème 🎭</h2>
      <p class="hero__subtitle">
        Films, séries, animés… à toi de jouer !
      </p>
    </section>

    <!-- THEMES -->
    <section class="quiz-list">

      <?php foreach($themes as $theme) : ?>

        <div class="card">

          <img
            class="card__image"
            src="<?php echo $theme['image']; ?>"
            alt="<?php echo $theme['title']; ?>"
          >

          <div class="card__content">

            <h3 class="card__title">
              <?php echo $theme['title']; ?>
            </h3>

            <a href="index.php?theme=<?php echo $theme['id']; ?>" class="card__btn">Choisir</a>

          </div>

        </div>

      <?php endforeach; ?>

    </section>

  </main>

  <!-- FOOTER -->
  <footer class="footer">
    <p>© 2026 SmartQuiz</p>
  </footer>

</body>

</html>