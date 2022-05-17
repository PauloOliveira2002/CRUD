
    <br><br>
    
    <div class="container">
    <h1>Pet {{$pet -> id}} Info</h1>
    <div class="form-group">
        <label for="name">Name</label>
        <input
            type="text"
            placeholder="{{$pet -> name}}"
            class="form-control"
            disabled>

    </div>
    <div class="form-group">
        <label for="color">Color</label>
        <input
            type="text"
            placeholder="{{$pet -> color}}"
            class="form-control"
            disabled>

    </div>
    
    <div class="form-group">
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <label class="input-group-text" for="PlayerSelect">Player</label>
            </div>
            <select class="custom-select" id="PlayerSelect" name="playerpets" disabled>
                <option selected>{{$pet -> player -> name}}</option>
            </select>
        </div>
    </div>

    <a href="/pets"><button type="submit" class="mt-2 mb-5 btn btn-primary">Back</button></a>
   
</div>

