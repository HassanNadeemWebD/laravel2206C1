<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <title>Document</title>
</head>

<body class="container">
    {{-- <pre>
@php
    print_r($students[0]['email']);
@endphp
</pre> --}}
    <h1>Students</h1>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>FirstName</th>
                <th>LastName</th>
                <th>DOB</th>
                <th>Gender</th>
                <th>Email</th>
                <th>Contact</th>
                <th>Update/Delete</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($students as $data)
                <tr>
                    <td>{{ $data['studentID'] }}</td>
                    <td>{{ $data['firstName'] }}</td>
                    <td>{{ $data['lastName'] }}</td>
                    <td>{{ $data['dob'] }}</td>
                    <td>{{ $data['gender'] }}</td>
                    <td>{{ $data['email'] }}</td>
                    <td>{{ $data['contact'] }}</td>
                    <td>
                        <a href="/edit/{{ $data['studentID'] }}"><button class="btn btn-primary">Update</button></a>
                        <a href="/delete/{{ $data['studentID'] }}"><button class="btn btn-danger">delete</button></a>


                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>

</body>

</html>
