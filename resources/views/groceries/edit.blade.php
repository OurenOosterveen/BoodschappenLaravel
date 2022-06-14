@extends('../layouts/app')

@section('content')
    <form action={{ route("groceries.update", ['grocery' => $grocery->id]) }} method="post">
    @csrf
    @method('PATCH')

        <label for="name"> Boodschap </label>
        <input type="text" name="name" id="name" value={{ $grocery->name }}>
    
        <label for="number"> Hoeveelheid </label>
        <input type="number" name="number" id="number" value= {{ $grocery->number }} min=0>
        
        <label for="price"> Kosten per stuk </label>
        <input type="number" name="price" id="price" value={{ $grocery->price }} step="0.01" min=0>

        <label for="category_id"> Categorie </label>
        <select name="category_id" id="category_id">
            @foreach ($categories as $category)
            
            <option value={{$category->id}} {{ $category->id == $grocery->category_id ? 'selected' : ''}}>
                {{ $category->name }}
            </option>
            @endforeach
        </select>

        <input type="submit" value="Veranderen">

        @foreach ($errors->all() as $e)
            <li> {{ $e }}</li>
        @endforeach    
    </form>
@endsection