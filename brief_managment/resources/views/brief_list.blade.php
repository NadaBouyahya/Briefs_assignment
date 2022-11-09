<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <form action="/insert_brief" method="POST">
        @csrf
        <input name="brief_title" type="text" placeholder="titre de brief">
        <input name="date_creation" type="date" placeholder="date de creation">
        <input name="date_livraison" type="date" placeholder="date de livraison">
        <input name="submit_brief" type="submit" value="enregistrer">
    </form>

    <table>
        <thead>
            <th>name</th>
            <th>parametres</th>
        </thead>

        <tbody>
            @foreach ($briefs as $brief)
                <tr>
                    <td>{{$brief->brief_title}}</td>
                    <td><a href="#">edit</a> <a href="#">delete</a></td>
                </tr>
            @endforeach
        </tbody>

    </table>
</body>
</html>