// ******** VUE ********
const { createApp } = Vue;
createApp({
    data() {
        return {
            discList: [],
            // tutti i nostri dati
        }
    },

    mounted() {
        console.log('Hello Vue!');
        axios.get('server.php').then((res) => {
            console.log(res.data);
            this.discList = res.data;
        });
    },


}).mount("#app");
// ******** VUE ********