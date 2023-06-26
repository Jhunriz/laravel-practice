<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <ul>
    {{-- @foreach ($students as $student)
        <li>{{$student['first_name']}}  </li>
        <li>{{$student['last_name']}}</li>
        <li>{{$student['age']}}</li>
    @endforeach --}}
    @foreach ($students as $student)
        <li>{{$student->gender}}</li>
        <li>{{$student->gender_count}}</li>
    @endforeach
        
    </ul>
</body>
</html>