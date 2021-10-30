<script>
  $(document).ready(function () {
    $('.task-checkbox').click(function () {
      taskId = $(this).val();
      window.location.href = "{{ route('todo.change') }}?task_id=" + taskId;
    })
  })
</script>