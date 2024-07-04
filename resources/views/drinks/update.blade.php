<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Drink</title>
</head>
<body>
    <h1>Edit Drink</h1>

    <form action="{{ url('/drinks/' . $drink->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="name">Name</label>
        @error('name')
        <span style="background-color: red">{{ $message }}</span>
        @enderror
        <input type="text" name="name" id="name" value="{{ old('name', $drink->name) }}" required>

        <label for="price">Price</label>
        @error('price')
        <span style="background-color: red">{{ $message }}</span>
        @enderror
        <input type="text" name="price" id="price" value="{{ old('price', $drink->price) }}" required>

        <label for="color">Color</label>
        @error('color')
        <span style="background-color: red">{{ $message }}</span>
        @enderror
        <input type="text" name="color" id="color" value="{{ old('color', $drink->color) }}" required>

        <label for="contents">Contents (ml)</label>
        @error('contents')
        <span style="background-color: red">{{ $message }}</span>
        @enderror
        <input type="text" name="contents" id="contents" value="{{ old('contents', $drink->contents) }}" required>

        <label for="merk">Merk</label>
        @error('merk')
        <span style="background-color: red">{{ $message }}</span>
        @enderror
        <input type="text" name="merk" id="merk" value="{{ old('merk', $drink->merk) }}" required>
        
        <button type="submit">Update Drink</button>
    </form>

    <a href="{{ url('/drinks') }}">Back to list</a>
</body>
</html>
