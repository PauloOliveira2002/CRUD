@extends ('master.main')

@section('content')

    @component('components.pets.pet-form-edit' , ['pet' => $pet , 'players' => $players])
    @endcomponent

@endsection