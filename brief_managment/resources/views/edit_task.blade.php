<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="/updated_task/{{$task->id_task}}" method="POST">
        @csrf
        <input name="task_title" type="text" value="{{$task->task_title}}" >
        <input name="task_descrip" type="text" value="{{$task->task_description}}">
        <input name="task_start_time" type="date" value="{{$task->task_start_time}}">
        <input name="task_end_time" type="date" value="{{$task->task_end_time}}">
        <input name="brief_id" type="hidden" value="{{$task->briefTask_id}}">
        <input name="submit_task" type="submit" value="enregistrer">
    </form>
</body>
</html>