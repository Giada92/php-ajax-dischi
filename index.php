<!-- Database -->
<?php include __DIR__ . "/db/database.php"; //var_dump($dischi); ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;500&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="css/style.css">
        <title>PHP dischi</title>
    </head>
    <body>
        <!-- Header -->
        <?php include __DIR__ . "/partials/header.php"; ?>
        <!-- /Header -->

        <!-- Copro della pagina -->
        <main>
            <section>
                <?php foreach($dischi as $disco) { //var_dump($disco) ;?>
                    <div class="disco">
                        <img src="<?= $disco["poster"] ?>" alt="">
                        <h4><?= $disco["title"] ?></h4>
                        <h5><?= $disco["author"] ?></h5>
                        <p><?= $disco["genre"] ?></p>
                        <p><?= $disco["year"] ?></p>
                    </div>
                <?php } ?>
            </section>
        </main>
        <!-- /Copro della pagina -->

        <!-- Footer -->
        <?php include __DIR__ . "/partials/footer.php"; ?>
        <!-- Footer -->
    </body>
</html>