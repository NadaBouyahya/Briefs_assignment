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
    <title>list des promotions</title>
</head>

<body>
    <section id="main_content">
        <h1>Les Promotions</h1>
        <div id="first_div">
            <input type="text" id="search" placeholder="rechercher apprenant">
            <a href="{{ route('add_promotion') }}">Ajouter promotion</a>
        </div>

        <div id="second_div">
            <table id="promotion_table" class="table table-striped table-borderless">
                <thead>
                    <th>Promotion</th>
                    <th>Parametres</th>
                </thead>

                <tbody id="promotion_data">
                    @foreach ($promotions as $row)
                        <tr>
                            <td>{{ $row->name }}</td>
                            <td id="promotions_setting">
                                <a href="/edit_form/{{ $row->id }}">edit</a>
                                <a href="/delet_promo/{{ $row->id }}">delete</a>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>


        {{-- <ul id="data_list">
        @foreach ($promotions as $row)
            <li> {{ $row->name }} <a href="/edit_form/{{ $row->id }}">edit</a> <a href="/delet_promo/{{ $row->id }}">delete</a></li>
        @endforeach
    </ul> --}}
    </section>
    <script src="{{ URL::asset('js/script.js') }}"></script>
</body>

</html>
