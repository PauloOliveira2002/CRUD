
@extends ('master.main')

@section('content')

    @component('components.players.player-form-show' , ['player' => $player])
    @endcomponent

@endsection