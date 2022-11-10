<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <table>
        <thead>
            <th>nom</th>
            <th>prénom</th>
            {{-- <th>promotion</th> --}}
            <th>Assigner brief</th>
        </thead>
        <tbody>
            @foreach ($AllStudents as $student)
                <tr>
                    <td>{{$student->nom}}</td>
                    <td>{{$student->prénom}}</td>
                    <td><a href="/assign_brief/{{$id_brief}}/{{$student->id}}">Attacher</a></td>
                    <td><a href="/detach_brief/{{$id_brief}}/{{$student->id}}">Déttacher</a></td>


                </tr>
            @endforeach

        </tbody>
    </table>
</body>

</html>
