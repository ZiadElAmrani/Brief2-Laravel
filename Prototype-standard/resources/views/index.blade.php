<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="cont">
        <h1>Promotions:</h1>
        <div>
            <a href="{{ route('insert-promotion') }}">Ajouter Promotion</a>
            <input id="search_prom" type="text" placeholder="rechercher">
        </div>

        <table>
            <thead>
                <th>Nom</th>
                <th>Action</th>
            </thead>
            <tbody id="search_table">
                @foreach ($data as $row)
                    <tr>
                        <td>{{ $row->name }}</td>
                        <td>
                            {{-- <a href="{{ route('edit-promotion', ['id' => $row->id]) }}">Edit</a> --}}
                            <a href="{{ route('delete-promotion') }}?id={{ $row->id }}">Delete</a>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
</body>
</html>