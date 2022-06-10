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

    <div id="root">
        <header>
            <div class="logo-container">
                <i class="fab fa-spotify"></i>
            </div>
            <div class="select-container">
                <select id="genres" v-model="selectedGenre">
                    <option value="" selected>Seleziona un genere</option>
                    <option v-for="genre in genresArray" :value="genre">{{ genre }}</option>
                </select>
            </div>
        </header>

        <main>
            <div class="container">
                <ul>
                    <li v-for="card in displayCards">
                        <div class="inner-container">
                            <div class="poster">
                                <img :src="card.poster" :alt="card.title">
                            </div>
                            <div class="title">
                                <h4>{{ card.title.toUpperCase() }}</h4>
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
    </div>

    <script src="js/script.js"></script>
</body>

</html>