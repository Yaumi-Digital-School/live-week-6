$(document).ready(function () {
    $(".task-checkbox").click(function () {
        taskId = $(this).val();
        window.location.href = "/todo/edit/" + taskId;
    });
});
// $(document).ready(function () {
//     $(".btn-remove").click(function () {
//         taskId = $(this).val();
//         window.location.href = "remove_task.php?task_id=" + taskId;
//     });
// });
