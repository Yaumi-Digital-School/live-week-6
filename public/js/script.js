$(document).ready(function() {
    $('.task-checkbox').click(function() {
        taskId = $(this).val();
        window.location.href = "/todo/update?task_id=" + taskId;
    })
})