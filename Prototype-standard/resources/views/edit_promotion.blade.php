<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('update-promotion', ['id' => $data[0]->id_prom]) }}" method="POST">
        @csrf
        <label>Nom: <input type="text" name="name" value="{{ $data[0]->nom_prom }}"></label>
        <input type="hidden" name="id" value="{{ $data[0]->id_prom }}">
        <input type="submit" name="edit_promotion">
    </form>
</body>
</html>