const app = new Vue({
    el: "#root",
    data: {
        cardsArray: [],
    },
    created() {
        axios.get("http://localhost/php-ajax-dischi/api/server.php")
        .then((resp) => {
            console.log(resp);
            this.cardsArray = resp.data;
        })
    },
})