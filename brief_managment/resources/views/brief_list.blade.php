<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <title>brief</title>
</head>

<body>

    <form action="/insert_brief" method="POST">
        @csrf
        <input name="brief_title" type="text" placeholder="titre de brief">
        <input name="date_creation" type="date" placeholder="date de creation">
        <input name="date_livraison" type="date" placeholder="date de livraison">
        <input name="submit_brief" type="submit" value="enregistrer">
    </form>

    <table class="table">
        <thead>
            <th>titre de brief</th>
            <th>date de creation</th>
            <th>date de livraison</th>
            <th>parametres</th>
        </thead>

        <tbody>
            @foreach ($briefs as $brief)
                <tr>
                    <td>{{ $brief->brief_title }}</td>
                    <td>{{ $brief->creation_date }}</td>
                    <td>{{ $brief->livrasion_date }}</td>
                    <td><a href="/edit_brief/{{$brief->id_brief}}">edit</a>
                         <a href="/delete_brief/{{$brief->id_brief}}">delete</a>
                        <a href="/index_students/{{$brief->id_brief}}">Assigner</a>
                    </td>
                </tr>
            @endforeach
        </tbody>

    </table>
</body>

</html>
