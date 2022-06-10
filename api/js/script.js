const app = new Vue({
    el: "#root",
    data: {
        cardsArray: [],
        genresArray: ["Rock", "Pop", "Jazz", "Metal"],
        selectedGenre: "",
        displayCards: [],
    },
    created() {
        axios.get("http://localhost/php-ajax-dischi/api/server.php")
            .then((resp) => {
                console.log(resp);
                this.cardsArray = resp.data;
                this.displayCards = this.cardsArray;
            })
    },
    watch: {
        selectedGenre() {
            axios.get("http://localhost/php-ajax-dischi/api/server.php", {
                params: {
                    genre: this.selectedGenre,
                }
            })
                .then((resp) => {
                    this.displayCards = resp.data;
                })
        }
    },
})