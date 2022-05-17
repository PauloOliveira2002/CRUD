@extends ('master.main')

@section('content')

    @component('components.pets.pets-list', ['pets' => $pets])

    @endcomponent

@endsection
