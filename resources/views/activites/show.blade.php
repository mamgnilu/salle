@include('layout.header')
@extends('activites.layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> liste des activites</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('activites.index') }}"> Retour</a>
            </div>
        </div>
    </div>
   
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>nom:</strong>
                {{ $activite->nom }}
            </div>
        </div>
       
    </div>

    <a class="btn btn-primary" href="{{ route('seances.index') }}">ajouter une seance</a>
@endsection