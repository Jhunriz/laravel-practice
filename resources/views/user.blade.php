<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User {{ $name }}</title>
</head>

<body>
    {{-- using the code {{$data['name']}} can call the value in to User --}}

    {{-- also using the ->with you can use the code {{$name}} to show data at UserController --}}
    <p> {{ $name }}</p>
    <p>{{ $age }}</p>
    <p>{{ $email }}</p>
    <p>{{ $id }}</p>


</body>

</html>
