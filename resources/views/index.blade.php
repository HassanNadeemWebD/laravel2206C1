<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$pageTitle}}</title>
</head>

<body>
    @php
        // $name = '<h1> Ali Ahmed </h1>';
        $age = '';
        
        $arr = [1, 2, 3, 4, 5, 6, 76, 11, 22, 44, 33, 11];
    @endphp


    <h1>{{$pageTitle}}</h1>
    {{ $name }}


    {!! $name !!}

    {{-- @for ($i = 0; $i <= 100; $i++)
        <h3>{{ $i }}</h3>
    @endfor


    @foreach ($arr as $item)
        {{ $item }}
    @endforeach --}}

    @if ($age !== '')


        @if ($age >= 18)
            <h2>Eligible Age 18</h2>
        @elseif($age < 18)
            <h2>Ineligible Age less than 18</h2>
        @endif
    @else
        <h2>Invalid Age</h2>
    @endif

</body>

</html>
