<!-- Section Task yang belum Complete -->
<div class="section-task">
  <!-- TODO: Section task hanya berisi task yang belum done (is_done = 0) -->
  @foreach($tasks as $task)
    @if ($task['is_done'] == 0)

      <div class="task-item">
        <input 
          type="checkbox" 
          name="todos_item[]"
          class="task-checkbox" 
          value="{{ $task['id'] }}" 
          id="todo-{{ $task['id'] }}" />
        <span class="@if ($task['is_done']) mark-done @endif">
          {{ $task['name'] }}
        </span>
        {{-- <button type="submit" class="btn-remove" value="<?php //echo $task['id']; ?>">- Del</button>
        --}}
      </div>

    @endif
  @endforeach
</div>