<br><br>

<form class="container" method="POST" action="{{ url('pets/' . $pet->id) }}">
    @csrf
    @method('PUT')

    <h1>Edit Pet {{$pet -> id}} </h1>
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" id="name" name="name" value="{{$pet -> name}}" class="form-control
            @error('name') is-invalid @enderror" required aria-describedby="nameHelp">

        @error('name')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror

    </div>

    <div class="form-group">
        <label for="color">Color</label>
        <input type="text" id="color" name="color" value="{{$pet -> color}}" class="form-control" class="form-control
            @error('color') is-invalid @enderror" required aria-describedby="colorHelp">

        @error('color')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror

    </div>

    <div class="form-group">
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <label class="input-group-text" for="PlayerSelect">Player</label>
            </div>
            <select class="custom-select" id="PlayerSelect" name="player_id">
                <option value="{{$pet -> player -> id}}" selected>{{$pet -> player -> name}}</option>
                @foreach($players as $player)
                <option value="{{$player -> id}}">{{$player -> name}}</option>
                @endforeach
            </select>
        </div>
    </div>

    <button type="submit" class="mt-2 mb-5 btn btn-primary">Edit Pet</button>

</form>