<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @foreach ($data as $row)

<form action="{{url('update')}}/{{$row->id}}" method="post">
    @csrf
    <input type="text" value="{{$row->name}}" name="name">
    <button>Update</button>
</form>
<button><a href="{{url("Studentadd")}}/{{$row->id}}">add student</button>

@endforeach
</body>
</html>