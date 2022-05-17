@extends ('master.main')

@section('content')

    @component('components.pets.pet-form-create', ['players' => $players])
    @endcomponent

@endsection
