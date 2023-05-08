const { createApp } = Vue

createApp({
    data() {
        return {
            pathTasks: './server.php',
            tasks: [],
        }
    },
    mounted() {
        axios
            .get(this.pathTasks)
            .then(response => {
                console.log(response.data);
                this.tasks = response.data
            })
            .catch(error => {
                console.error(error.message);
            })
    },
}).mount('#app')