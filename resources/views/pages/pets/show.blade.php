
@extends ('master.main')

@section('content')

    @component('components.pets.pet-form-show' , ['pet' => $pet])
    @endcomponent

@endsection