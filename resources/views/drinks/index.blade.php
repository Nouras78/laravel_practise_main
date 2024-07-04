
<x-layout>
<!DOCTYPE html>
<html>
<head>
    <title>Drinks Menu</title>
</head>
<body>
    <h1>Drinks Menu</h1>

    <ul>
        @foreach ($drinks as $drink)
            <li>
                <a href="{{ url('/drinks/' . $drink->id) }}">{{ $drink->name }}</a>
            </li>
        @endforeach
    </ul>
</body>
</html>
</x-layout>