
    <br><br>
    
    <div class="container">
    <h1>Player {{$player -> id}} Info</h1>
    <div class="form-group">
        <label for="name">Name</label>
        <input
            type="text"
            placeholder="{{$player -> name}}"
            class="form-control"
            disabled>

    </div>
    <div class="form-group">
        <label for="address">Address</label>
        <input
            type="text"
            placeholder="{{$player -> address}}"
            class="form-control"
            disabled>

    </div>
    <div class="form-group">
        <label for="description">Description</label>
        <textarea
            type="description"
            class="form-control"
            disabled
            rows="5">{{$player -> description}}</textarea>

    </div>
    <label>Retired?</label>
    <br>

    @if($player -> retired == 1)
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="retired" id="retired" value="1" checked disabled>
        <label class="form-check-label" for="retired">Yes</label>
    </div>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="retired" id="notretired" value="0" disabled>
        <label class="form-check-label" for="notretired">No</label>
    </div>

    @else
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="retired" id="retired" value="1" disabled>
        <label class="form-check-label" for="retired">Yes</label>
    </div>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="retired" id="notretired" value="0" checked>
        <label class="form-check-label" for="notretired">No</label>
    </div>
    @endif

    <br><br>
    <a href="/players"><button type="submit" class="mt-2 mb-5 btn btn-primary">Back</button></a>
   
</div>

