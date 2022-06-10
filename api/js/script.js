const app = new Vue({
    el: "#root",
    data: {
        cardsArray: [],
        genresArray: ["Rock", "Pop", "Jazz", "Metal"],
        selectedGenre: "",
    },
    created() {
        axios.get("http://localhost/php-ajax-dischi/api/server.php")
            .then((resp) => {
                console.log(resp);
                this.cardsArray = resp.data;
            })
    },
    computed: {
        displayCard() {
            let result = this.cardsArray;
            if (this.selectedGenre !== "") {
                result = this.cardsArray.filter(element => {
                    if (element.genre === this.selectedGenre) {
                        return true
                    }
                })
            }
            return result;
        }
    }
})