<br>
<div class="container">
<h1 class="text-center">Players List</h1>

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
            <th scope="col">Name</th>
            <th scope="col">Address</th>
            <th scope="col">Retired</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody>

        @foreach($players as $player)
        <tr>
            <th scope="row">{{$player -> id}}</th>
            <td>{{$player -> name}}</td>
            <td>{{$player -> address}}</td>

            <td>
                @if($player -> retired == 1)
                <i class="bi bi-emoji-laughing-fill text-primary"></i>
                @else
                <i class="bi bi-emoji-frown-fill text-danger"></i>
                @endif
            </td>
            <td>
                <a href="/players/{{$player -> id}}"> <button type="button" class="btn btn-success">Show</button></a>
            </td><td>
                <a href="/players/{{$player -> id}}/edit"> <button type="button" class="btn btn-primary">Edit</button></a>
            </td>
            <td>
                <form action="{{url('players/' . $player->id)}}" method="POST">
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
<div class="container text-center">
<p>{{$players->links()}}</p>
</div>