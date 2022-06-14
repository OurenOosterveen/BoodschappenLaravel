@extends('../layouts/app')

@section('content')
    <table>
        @foreach ($groceries as $grocery)
            <tr>
                <td> {{ $grocery->name }}</td>
                <td> {{ $grocery->price }}</td>
                <td> {{ $grocery->number }}</td>
                <td> {{ ($grocery->number * $grocery->price) }}</td>
                <td>
                    <a href={{route('groceries.edit', ['grocery' => $grocery->id])}}> Aanpassen </a>
                </td>
                <td>
                    <form action={{route('groceries.delete', ['grocery' => $grocery->id])}} method="post">
                        @csrf
                        @method("DELETE")
                        
                        <input type="submit" value="Verwijderen">
                    </form>
                </td>
            </tr>
        @endforeach
    </table>


@endsection