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

    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">

    <title>Document</title>
</head>

<body>
    <section id="main_content">

        <div id="first_div">
            <a id="add_student_link" href="{{ route('add_student', ['id' => $promotion_data->id]) }}">Ajouter apprenant</a>
            <form class="editPromo_form" action="/edit/{{ $promotion_data->id }}" method="POST">
                @csrf
                {{-- <span>Nom de promotion</span> --}}
                <input type="text" name='name' value="{{ $promotion_data->name }}">
                <button type="submit">save</button>
            </form>
        </div>

        <div>
            <p>Brief assigner à la promotion </p>
           
            <ul>
                @foreach ($briefs[0] as $brief)
                <li>{{ $brief->brief_title}}</li>
                @endforeach
            </ul>
        
        </div>

        
        <div id="second_div">
            <table id="promotion_table" class="table table-striped table-borderless">
                <thead>
                    <th>nom</th>
                    <th>prénom</th>
                    <th>email</th>
                    <th>paramétres</th>
                </thead>
    
                <tbody>
                    @if ($promotion_data->nom != null)
                        @foreach ($promotion_data as $row)
                            <tr>
                                <td>{{ $row->prénom }}</td>
                                <td>{{ $row->nom }}</td>
                                <td>{{ $row->email }}</td>
                                <td>
                                    <a href="/edit_student_form/{{ $row->id_student }}">edit</a>
                                    <a href="/student_deleted/{{ $row->id_student }}">delete</a>
                                </td>
                            </tr>
                        @endforeach
                    @endif
    
                </tbody>
            </table>
        </div>
        
    </section>

</body>

</html>
