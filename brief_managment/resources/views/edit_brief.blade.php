<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ URL::asset('css/style_brief.css') }}">
    <title>Document</title>
</head>

<body>
    <form action="/updated_brief/{{ $brief->id_brief }}" method="POST">
        @csrf
        <input name="brief_title" type="text" value="{{ $brief->brief_title }}">
        <input name="date_creation" type="date" value="{{ $brief->creation_date }}">
        <input name="date_livraison" type="date" value="{{ $brief->livrasion_date }}">
        <input name="modifier_brief" type="submit" value="modifier">
    </form>
   
    <div class="add_task">
        <h2>Brief Tasks</h2>
        <a href="/add_task_view/{{$brief->id_brief}}">ajouter task</a>    
        
        {{-- <input type="submit" value="ajouter task"> --}}

    </div>
    

    <div class="task_content">

            @if (count($brief->task) > 0)
                @foreach ($brief->task as $brief_tasks)
                <div class="task_details">
                    <span class="briefTask_title">{{ $brief_tasks->task_title }}</span>
                    <p>{{$brief_tasks->task_description}}</p>
                    <p> <b>from</b> : <span>{{$brief_tasks->task_start_time}}</span> <b>to</b> : <span>{{$brief_tasks->task_end_time}}</p>
                    {{-- <button type="submit" name="update_task">modifier</button> --}}
                    <a class="" href="/">modifier</a>
                </div>
                @endforeach
            @endif


       
    </div>

</body>

</html>
