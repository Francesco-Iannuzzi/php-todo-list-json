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

            const data = {
                new_task: this.new_task
            }

            axios.post(
                './storeTasks.php',
                data,
                {
                    headers: { 'Content-Type': 'multipart/form-data' }
                }).then(response => {
                    this.tasks = response.data
                })
                .catch(error => {
                    console.error(error.message);
                })

        },
        task_completed(element) {
            element.done = !element.done
        },
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