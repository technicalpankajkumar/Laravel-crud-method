<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>retrive data</title>
</head>
<body>
    <table class="table ">
        <thead class="table-dark">
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Addresh</th>
                <th scope="col">Contact no.</th>
            </tr>
        </thead>
        <tbody>
       
            {{-- itrates multiple data
                
            @foreach ($data as $details)
            <tr>
                <td scope="row">{{$details->name}}</td>
                <td>{{$details->address}}</td>
                <td>{{$details->contact_no}}</td>
            </tr>
            @endforeach --}}

        {{-- itrate single data --}}
            <tr>
                <td scope='row'>{{$data->name}}</td>
                <td scope='row'>{{$data->address}}</td>
            </tr>
        </tbody>
    </table>

</body>
</html>