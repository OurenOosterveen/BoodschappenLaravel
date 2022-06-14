@extends('../layouts/app')

@section('content')
    <form action= {{ route("groceries.store") }} method="POST">
        @csrf
        <label for="name"> Boodschap </label>
        <input type="text" name="name" id="name">
    
        <label for="number"> Hoeveelheid </label>
        <input type="number" name="number" id="number" value=0 min=0>
        
        <label for="price"> Kosten per stuk </label>
        <input type="number" name="price" id="price" value=0 step="0.01" min=0>

        <label for="category_id"> Categorie </label>
        <select name="category_id" id="category_id">
            @foreach ($categories as $category)
            <option value={{ $category->id}}>{{ $category->name }}</option>
            @endforeach
        </select>
    
        <input type="submit" value="invoeren">

        @foreach ($errors->all() as $e)
            <li> {{ $e }}</li>
        @endforeach 
    </form>
@endsection