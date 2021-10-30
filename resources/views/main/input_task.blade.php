<!-- Section Input Task -->
<div class="section-input">
  <form action="{{route('todo.add')}}" method="POST">
      @csrf
      <input type="text" class="task-input" id="input-field" name="input_task"
          placeholder="Tambahkan task baru" />
      <button type="submit" class="btn-add-task">+ Add</button>
  </form>
</div>