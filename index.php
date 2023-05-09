<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- /Bootstrap Style -->
    <link rel="stylesheet" href="./style.css">
    <!-- /my style -->
    <title>Todo List PHP</title>
</head>

<body>

    <div id="app">
        <div class="container pt-5">
            <h1 class="text-center mb-3 text-light">Todo List</h1>
            <div class="container w-50 text-center pb-5">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item" v-for="(task, index) in tasks">
                        <span :class="{ 'text-decoration-line-through': task.done }" @click="task_completed(task)">
                            {{task.text}}
                        </span>
                    </li>
                </ul>
                <!-- /tasks list -->
                <div class="m-3 d-flex gap-3">
                    <input type="text" v-model="new_task" @keyup.enter="add_task" class="form-control border-0"
                        id="add_task" placeholder="Add new Task">
                    <button type="submit" @click="add_task" class="btn btn-outline-warning">
                        Submit
                    </button>
                </div>
                <!-- /input task + button -->
            </div>
        </div>
    </div>



    <script src='https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js'></script>
    <!-- /axios -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
    <!-- /Bootstrap script -->
    <script src='https://unpkg.com/vue@3/dist/vue.global.js'></script>
    <!-- /vue script -->
    <script src="./app.js"></script>
    <!-- /my script -->

</body>

</html>