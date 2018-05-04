@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Tableau de bord</div>
                <div class="card-body">
                    <h2>Mission en cours</h1>
                    <ul>
                        @foreach($missions as $mission)
                            <li>Mission {{$mission->id}} - {{ $mission->description }} - Agent {{$mission->id_users}} 
                            {{$mission->state}}</li>
                        @endforeach
                    </ul>
                    <h2>Cible enregistré</h2>
                    <ul>
                        @foreach($targets as $target)
                            <li>Cible {{$target->id}} {{$target->name}} </li>
                        @endforeach
                    </ul> 
                    <h2>Agents</h2>
                    <ul>
                        @foreach($agents as $agent)
                            <li>Agent {{$agent->name}} </li>
                        @endforeach
                    </ul> 
                    <h2>Master</h2>
                    <ul>
                        @foreach($masters as $master)
                            <li>Master {{$master->name}} </li>
                        @endforeach
                    </ul> 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
