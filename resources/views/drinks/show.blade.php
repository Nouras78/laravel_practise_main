<x-layout>
<!DOCTYPE html>
<html>
<head>

</head>
<body>
    
    <h1>{{ $drink->name}}</h1>

    <p>price: {{ $drink->price}}</p>
    <p>color: {{ $drink->color}}</p>
    <p>contents: {{ $drink->contents}}</p>
    <p>merk: {{ $drink->merk}}</p>

    <a href="{{ url('/drinks/' . $drink->id . '/edit')}}" class="btn">
    changed the drink</a>

    <form action="{{ url('/drinks/' . $drink->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <input type="submit" value="Verwijder de drink">
        <br>
        <a href="{{ url('/drinks') }}" class="btn">Back to list</a>
    </form>
    
</body>
</html>


</x-layout>