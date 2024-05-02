<?php include('script.php'); ?>

<!DOCTYPE html >
<html>
<head>
    <meta charset="utf-8">
    <title>Acceuil</title>
    <link rel="stylesheet" href="styles.css">
</head>
    <?php initialize_data_base();?>
    <body>
        <header>

        </header>
        <main>
            <nav>
                <a href="connexion_page.html">Connexion</a>
                <a href="our_team.html">Our Team</a>
            </nav>
            <div id="interactive_map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d59344.459821222845!2d2.3413081488040053!3d48.86294134742834!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sfr!2sfr!4v1714641144233!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <section id="liste_devenement_selectione">
                    <?php select_all_event();?>
                    <?php echo "<p>efzef</p>"?>

            </section>
        </main>
        <footer>

        </footer>
    </body>
</html>
