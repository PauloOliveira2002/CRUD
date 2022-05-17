<br><br>

    <form class="container" method="POST" action="{{ url('players/' . $player->id) }}">
    @csrf
    @method('PUT')

    <h1>Edit Player {{$player -> id}} </h1>
    <div class="form-group">
        <label for="name">Name</label>
        <input
            type="text"
            id="name"
            name="name"
            value="{{$player -> name}}"
            class="form-control
            @error('name') is-invalid @enderror"
            required
            aria-describedby="nameHelp">

            @error('name')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror

    </div>

    <div class="form-group">
        <label for="address">Address</label>
        <input
            type="text"
            id="address"
            name="address"
            value="{{$player -> address}}"
            class="form-control"
            class="form-control
            @error('address') is-invalid @enderror"
            required
            aria-describedby="addressHelp">

            @error('address')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror

    </div>

    <div class="form-group">
        <label for="description">Description</label>
        <textarea
            type="description"
            id="description"
            name="description"
            class="form-control @error('description') is-invalid @enderror"
            required
            aria-describedby="descriptionHelp"
            rows="3">{{$player -> description}}</textarea>

            @error('description')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror 

    </div>

    <label>Retired?</label>
    <br>

    @if($player -> retired == 1)
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="retired" id="retired" value="1" checked>
        <label class="form-check-label" for="retired">Yes</label>
    </div>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="retired" id="notretired" value="0">
        <label class="form-check-label" for="notretired">No</label>
    </div>

    @else
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="retired" id="retired" value="1">
        <label class="form-check-label" for="retired">Yes</label>
    </div>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="retired" id="notretired" value="0" checked>
        <label class="form-check-label" for="notretired">No</label>
    </div>
    @endif

    <br><br>
    <button type="submit" class="mt-2 mb-5 btn btn-primary">Edit</button>
   
    </form>

