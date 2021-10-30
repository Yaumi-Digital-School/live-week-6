<!-- INSERT YOUR TODO CODE HERE -->
<html>

<head>
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
</head>

<body>
    <div class="main-app">
        <div class="container">
            <h1 class="title">Todo App OOP</h1>

            <!-- Section Input Task -->
            <div class="section-input">
                <form action="add_task.php" method="POST">
                    <input type="text" class="task-input" id="input-field" name="input_task" placeholder="Tambahkan task baru" />
                    <button type="submit" class="btn-add-task">+ Add</button>
                </form>
            </div>

            <!-- Section Task yang belum Complete -->
            <div class="section-task">
                <!-- TODO: Section task hanya berisi task yang belum done (is_done = 0) -->
                <?php foreach ($tasks as $task) {
                    if ($task->isDone == 0) {
                ?>
                        <div class="task-item">
                            <input type="checkbox" name="todos_item[]" class="task-checkbox" value="<?php echo $task->id ?>" id="todo-<?php echo $task->id ?>" />

                            <span class="<?php if ($task->isDone == 1) echo "mark-done" ?>"><?php echo $task->name; ?></span>
                            </span>
                            <form action="remove_task.php" method="POST">
                                <button type="submit" name="remove" value="<?php echo $task->id ?>" class="remove-button">X</button>
                            </form>
                        </div>
                <?php }
                }
                ?>
            </div>

            <!-- Section Task yang sudah Complete -->
            <div class="section-task-done">
                <h4>Completed</h4>
                <?php foreach ($tasks as $task) {
                    if ($task->isDone == 1) { ?>
                        <div class="task-item" style="margin: 20px 0; border: solid 1px cornflowerblue">
                            <input type="checkbox" name="todos_item[]" class="task-checkbox" value="<?php echo $task->id ?>" checked id="todo-<?php echo $task->id ?>" />
                            <span class="mark-done"><?php echo $task->name; ?></span>
                            <form action="remove_task.php" method="POST">
                                <button type="submit" name="remove" value="<?php echo $task->id ?>" class="remove-button">X</button>
                            </form>
                        </div>
                <?php }
                }
                ?>
            </div>
        </div>
    </div>
    </div>
</body>

</html>