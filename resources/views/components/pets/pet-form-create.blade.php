<br><br>
<form method="POST" class="container" action="{{ url('pets') }}">
    @csrf

    <h1>Add Pet</h1>
    <div class="form-group">
        <label for="name">Pet Name</label>
        <input type="text" id="name" name="name" autocomplete="name" placeholder="Type your Pet name" class="form-control
            @error('name') is-invalid @enderror" value="{{ old('name') }}" required aria-describedby="nameHelp">

        @error('name')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
    <div class="form-group">
        <label for="color">Pet Color</label>
        <input type="text" id="color" name="color" autocomplete="color" placeholder="Type your Pet color" class="form-control
            @error('pet') is-invalid @enderror" value="{{ old('color') }}" required aria-describedby="colorHelp">

        @error('pet')
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
                <option selected>Choose...</option>
                @foreach($players as $player)
                <option value="{{$player -> id}}">{{$player -> name}}</option>
                @endforeach
            </select>
        </div>
    </div>
    <button type="submit" class="mt-2 mb-5 btn btn-primary">Create Pet</button>
</form>