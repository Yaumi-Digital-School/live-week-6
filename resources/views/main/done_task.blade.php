<!-- Section Task yang sudah Complete -->
<div class="section-task-done">
  <h4>Completed</h4>
  @foreach ($tasks as $task)
    @if ($task['is_done'] == 1)
      <div class="task-item" style="margin: 20px 0; border: solid 1px cornflowerblue">
        <input 
          type="checkbox" 
          name="todos_item[]" 
          class="task-checkbox" 
          value="{{ $task['id'] }}" checked
          id="todo-{{ $task['id'] }}" />

        <span class="mark-done">
          {{ $task['name'] }}
        </span>
        {{-- <button type="submit" class="btn-remove" value="<?php //echo $task['id']; ?>">- Del</button>
        --}}
      </div>
    @endif
  @endforeach
</div>