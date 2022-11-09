<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="/insert_task/{{$id_brief_task}}" method="POST">
        @csrf
        <input name="task_title" type="text" placeholder="titre de task">
        <input name="task_descrip" type="text" placeholder="description">
        <input name="task_start_time" type="date" placeholder="début de task">
        <input name="task_end_time" type="date" placeholder="end task">
        <input name="brief_id" type="hidden" value="{{$id_brief_task}}">
        <input name="submit_task" type="submit" value="enregistrer">
    </form>
</body>
</html>