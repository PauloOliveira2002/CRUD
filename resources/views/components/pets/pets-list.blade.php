<br>
<div class="container">
<h1 class="text-center">Pets List</h1>

@if (session('status'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('status') }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif

<table class="table table-dark">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Pet Name</th>
            <th scope="col">Color</th>
            <th scope="col">Player</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody>

        @foreach($pets as $pet)
        <tr>
            <th scope="row">{{$pet -> id}}</th>
            <td>{{$pet -> name}}</td>
            <td>{{$pet -> color}}</td>
            <td>
                {{$pet -> player -> name}}
            </td>

            <td>
                <a href="/pets/{{$pet -> id}}"> <button type="button" class="btn btn-success">Show</button></a>
            </td><td>
                <a href="/pets/{{$pet -> id}}/edit"> <button type="button" class="btn btn-primary">Edit</button></a>
            </td>
            <td>
                <form action="{{url('pets/' . $pet->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
   
</table>

</div>
<div class="container">
<p>{{$pets->links()}}</p>
</div>