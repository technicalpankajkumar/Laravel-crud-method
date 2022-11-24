<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ORM CRUD</title>
</head>
<body>
    @foreach($data as $value )
     {{$value->name}}
     {{$value->contact_no}}
     {{$value->address}}
     <br>
    @endforeach
    
</body>
</html>