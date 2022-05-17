
    <br><br>
    <form method="POST" class="container" action="{{ url('players') }}">
    @csrf

    <h1>Add Player</h1>
    <div class="form-group">
        <label for="name">Name</label>
        <input
            type="text"
            id="name"
            name="name"
            autocomplete="name"
            placeholder="Type your name"
            class="form-control
            @error('name') is-invalid @enderror"
            value="{{ old('name') }}"
            required
            aria-describedby="nameHelp">

        <small id="nameHelp" class="form-text text-muted">We'll never share your data with anyone else.</small>

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
            autocomplete="address"
            placeholder="Type your address"
            class="form-control
            @error('address') is-invalid @enderror"
            value="{{ old('address') }}"
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
            autocomplete="description"
            placeholder="Type your Description"
            class="form-control @error('description') is-invalid @enderror"
            value="{{ old('description') }}"
            required
            aria-describedby="descriptionHelp"
            rows="3"></textarea>

        @error('description')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror 

    </div>
    <label>Retired?</label>
    <br>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="retired" id="retired" value="1">
        <label class="form-check-label" for="retired">Yes</label>
    </div>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="retired" id="notretired" value="0">
        <label class="form-check-label" for="notretired">No</label>
    </div>
    <br><br>
    <button type="submit" class="mt-2 mb-5 btn btn-primary">Create Player</button>
    </form>


