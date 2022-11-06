<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="/student_saved/{{$student->id}}" method="POST">
        @csrf
    
        <label for="lname">nom:</label> <input type="text" name="lname" value="{{$student->nom}}">
        <label for="fname">prénom:</label> <input type="text" name="fname" value="{{$student->prénom}}">
        <label for="email">email:</label> <input type="text" name="email" value="{{$student->email}}">
        <input type="hidden" name="promo_id" value="{{$student->promo_id}}">
    
        <input type="submit" name="submit" value="enregistrer">
    
    </form>
</body>
</html>