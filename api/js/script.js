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
            if (this.selectedGenre !== "") {
                axios.get("http://localhost/php-ajax-dischi/api/server.php")
                    .then((resp) => {
                        this.displayCards = resp.data.filter(element => {
                            if (element.genre === this.selectedGenre) {
                                return true;
                            }
                        });
                    })
            } else {
                this.displayCards = this.cardsArray;
            }
        }
    },
})