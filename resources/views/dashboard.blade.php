@extends('layouts.main')

@section('title', 'Dashborda')

@section('content')

<div class="col-md-10 off-set-md-1 dashboard-title-container">
    <h1>Meus Eventos</h1>
</div>

<div class="col-md-10 off-set-md-1 dashboard-events-container">

    @if(count($events) > 0)

    @else
        <p>Você ainda tem eventos, <a href="/events/create">Criar evento</a> </p>

    @endif


</div>


@endsection