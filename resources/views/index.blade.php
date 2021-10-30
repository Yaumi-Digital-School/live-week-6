<!-- INSERT YOUR TODO CODE HERE -->
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/style.css"/>
        <link rel="stylesheet"
              href="https://fonts.googleapis.com/css2?family=Open+Sans">

        <script src="https://code.jquery.com/jquery-3.6.0.min.js"
                integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
                crossorigin="anonymous"></script>
        <script src="js/script.js"></script>
    </head>
    <body>
        <div class="main-app">
            <div class="container">
                <h1 class="title">Todo App OOP</h1>

                <!-- Section Input Task -->
                <div class="section-input">
                    <form action="/todo/add" method="POST">
                        @csrf
                        <input type="text" class="task-input" id="input-field" name="input_task" placeholder="Tambahkan task baru"/>
                        <button type="submit" class="btn-add-task">+ Add</button>
                    </form>
                </div>

                <!-- Section Task yang belum Complete -->
                <div class="section-task">
                    <!-- TODO: Section task hanya berisi task yang belum done (is_done = 0) -->
                    @foreach ($tasks as $task) 
                        @if ($task['is_done'] == 0) 
                        <div class="task-item">
                                <input type=
                                       "checkbox"
                                       name="todos_item[]"
                                       class="task-checkbox"
                                       value="{{$task['id']}}"
                                       id="todo-{{$task['id']}}"/>
                                <span class="@if ($task['is_done'] == 1) {{mark-done}} @endif">{{$task['name']}}</span>
                                <!-- <button type="submit" class="btn-remove" value=" echo {{$task['id']}}">- Del</button> -->
                        </div>
                        @endif
                    @endforeach
    
                </div>

                <!-- Section Task yang sudah Complete -->
                <div class="section-task-done">
                    <h4>Completed</h4>
                    @foreach ($tasks as $task) 
                            @if ($task['is_done'] == 1) 
                        <div class="task-item" style="margin: 20px 0; border: solid 1px cornflowerblue">
                            <input type="checkbox"
                                   name="todos_item[]"
                                   class="task-checkbox"
                                   value=" {{$task['id']}}"
                                   checked
                                   id="todo-{{$task['id']}}"/>
                            <span class="mark-done"> {{$task['name']}}</span>
                            <!-- <button type="submit" class="btn-remove" value=" $task['id']; ?>">- Del</button> -->
                        </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </body>
</html>
