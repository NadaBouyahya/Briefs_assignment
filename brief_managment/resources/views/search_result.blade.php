<tbody id="promotion_data">
    @foreach ($promotion as $row)
        <tr>
            <td>{{ $row->name }}</td>
            <td id="promotions_setting">
                <a href="/edit_form/{{ $row->id }}">edit</a>
                <a href="/delet_promo/{{ $row->id }}">delete</a>
            </td>
        </tr>
    @endforeach

</tbody>



{{-- <ul id="data_list">
    @foreach ($promotion as $row)
        <li> {{ $row->name }} <a href="/edit_form/{{ $row->id }}">edit</a></li>
    @endforeach
</ul> --}}