<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questions - SmartQuiz</title>

    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500&family=Patrick+Hand&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="../assets/css/styles.css">
</head>

<body>

    <!-- HEADER -->
    <header class="header">

        <a href="index.php" class="header__login-btn">
            Retour
        </a>

    </header>

    <!-- MAIN -->
    <main class="container">

        <h1 class="main-title">
            Questions 🎯
        </h1>

        <p style="text-align: center; margin-bottom: 30px; font-size: 22px;">
            Score : <?php echo $_SESSION['score']; ?> 🏆
        </p>

        <section class="quiz-list">

            <?php

            $currentQuestion = $questions[$_SESSION['current_question']] ?? null;

            if($currentQuestion) :

            ?>

                <div class="card">

                    <div class="card__content">

                        <h3 class="card__title">
                            <?php echo $currentQuestion['question']; ?>
                        </h3>

                        <!-- FORMULAIRE -->
                        <form method="POST">

                            <input
                                type="text"
                                name="user_answer"
                                placeholder="Ta réponse..."
                                style="margin-top: 15px; padding: 10px; width: 100%;"
                            >

                            <input
                                type="hidden"
                                name="correct_answer"
                                value="<?php echo $currentQuestion['answer']; ?>"
                            >

                        <button
                        type="submit"
                        name="submit_answer"
                        class="card__btn"
                        style="margin-top: 15px;"
                        >
                        Valider
                        </button>

                        </form>

                        <!-- RESULTAT -->
                        <?php

                        if($_SERVER['REQUEST_METHOD'] === 'POST') {

                            $userAnswer = strtolower(trim($_POST['user_answer']));
                            $correctAnswer = strtolower(trim($_POST['correct_answer']));

                            if($userAnswer === $correctAnswer) {

                                $_SESSION['score']++;

                                echo "<p style='color: green; margin-top: 15px;'>✅ Bonne réponse !</p>";

                            } else {

                                echo "<p style='color: red; margin-top: 15px;'>❌ Mauvaise réponse</p>";

                            }

                            $_SESSION['current_question']++;

                        }

                        ?>

                    </div>

                </div>

            <?php else : ?>

                <div class="card">

                    <div class="card__content">

                        <h2 class="card__title">
                            Quiz terminé 🎉
                        </h2>

                        <p style="margin-top: 20px;">
                            Score final :
                            <?php echo $_SESSION['score']; ?> 🏆
                        </p>

                        <a
                            href="index.php"
                            class="card__btn"
                            style="display: inline-block; margin-top: 20px;"
                        >
                            Retour à l'accueil
                        </a>

                    </div>

                </div>

            <?php endif; ?>

        </section>

    </main>

    <!-- FOOTER -->
    <footer class="footer">
        <p>© 2026 SmartQuiz</p>
    </footer>

</body>

</html>