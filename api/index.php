<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.27.2/axios.min.js" integrity="sha512-odNmoc1XJy5x1TMVMdC7EMs3IVdItLPlCeL5vSUPN2llYKMJ2eByTTAIiiuqLg+GdNr9hF6z81p27DArRFKT7A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>

    <link rel="stylesheet" href="../css/style.css">
</head>

<body>

    <header>
        <div class="logo-container">
            <i class="fab fa-spotify"></i>
        </div>
    </header>

    <main id="root">
        <div class="container">
            <ul>
                <li v-for="card in cardsArray">
                    <div class="inner-container">
                        <div class="poster">
                            <img :src="card.poster" :alt="card.title">
                        </div>
                        <div class="title">
                            <h4>{{ card.title }}</h4>
                        </div>
                        <div class="author">
                            <span>{{ card.author }}</span>
                        </div>
                        <div class="year">
                            <small>{{ card.year }}</small>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </main>

    <script src="js/script.js"></script>
</body>

</html>