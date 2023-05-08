const { createApp } = Vue

createApp({
    data() {
        return {
            pathTasks: './server.php',
            tasks: [],
            new_task: '',
        }
    },
    methods: {

        add_task() {
            console.log('add task', this.new_task);
            this.tasks.push(this.new_task);
            console.log(this.tasks);
        }
    },
    mounted() {
        axios
            .get(this.pathTasks)
            .then(response => {
                console.log(response.data);
                this.tasks = response.data;
            })
            .catch(error => {
                console.error(error.message);
            })
    },
}).mount('#app')