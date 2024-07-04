<head></head>

<Body>
    <h1>Form</h1>


    <form action="{{url('/drinks')}}" method="POST">
    @csrf

    <label for="name">New drink</label>
    @error('name')
    <span style="background-color: red">{{ $message }} Er is wat fout gegaan</span>
    @enderror
    <input type="text" name="name" id="name" value="{{old('name')}}">

    <label for="name">price</label>
    @error('price')
    <span style="background-color: red">{{ $message }} Er is wat fout gegaan</span>
    @enderror
    <input type="text" name="price" id="price" value="{{old('price')}}">

    <label for="name">color	</label>
    @error('color	')
    <span style="background-color: red">{{ $message }} Er is wat fout gegaan</span>
    @enderror
    <input type="text" name="color" id="color" value="{{old('color')}}">

    <label for="name">inhoud in(ml)</label>
    @error('contents')
    <span style="background-color: red">{{ $message }} Er is wat fout gegaan</span>
    @enderror
    <input type="text" name="contents" id="contents" value="{{old('contents')}}">

    <label for="name">merk</label>
    @error('merk')
    <span style="background-color: red">{{ $message }} Er is wat fout gegaan</span>
    @enderror
    <input type="text" name="merk" id="merk" value="{{old('merk')}}">
    
    <input type="submit">
    </form>

</Body>