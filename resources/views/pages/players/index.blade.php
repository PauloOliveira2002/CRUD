@extends ('master.main')

@section('content')

    @component('components.players.players-list', ['players' => $players])

    @endcomponent

@endsection
