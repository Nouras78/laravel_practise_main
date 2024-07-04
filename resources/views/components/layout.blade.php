<!DOCTYPE html>

<head>
    
</head>
<body>
    <nav>
        <li><a href="/">home</a></li>
        <li><a href="{{url('/drinks/create')}}">Add drink</a></li>
    </nav>

    {{$slot}}
</body>
</html>