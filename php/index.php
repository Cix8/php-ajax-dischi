<?php
include_once __DIR__ . "/../database.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <header>
        <div class="logo-container">
            <i class="fab fa-spotify"></i>
        </div>
    </header>

    <main>
        <div class="container">
            <ul>
                <?php foreach ($database as $card) { ?>
                    <li>
                        <div class="inner-container">
                            <div class="poster">
                                <img src="<?php echo $card["poster"] ?>" alt="<?php echo $card["title"] ?>">
                            </div>
                            <div class="title">
                                <h4><?php echo strtoupper($card["title"]) ?></h4>
                            </div>
                            <div class="author">
                                <span><?php echo $card["author"] ?></span>
                            </div>
                            <div class="year">
                                <small><?php echo $card["year"] ?></small>
                            </div>
                        </div>
                    </li>
                <?php } ?>
            </ul>
        </div>
    </main>

</body>

</html>