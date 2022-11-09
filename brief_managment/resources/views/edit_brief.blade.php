<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="/updated_brief/{{$brief->id_brief}}" method="POST">
        @csrf
        <input name="brief_title" type="text" value="{{$brief->brief_title}}">
        <input name="date_creation" type="date" value="{{$brief->creation_date}}" >
        <input name="date_livraison" type="date" value="{{$brief->livrasion_date}}">
        <input name="modifier_brief" type="submit" value="modifier">
    </form>
</body>
</html>