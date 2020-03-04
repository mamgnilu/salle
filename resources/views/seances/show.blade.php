@extends('seances.layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> liste des seances</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('seances.index') }}"> Retour</a>
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
        <a class="btn btn-primary" href="{{ route('seances.index',$seance->id) }}">ajouter</a>
    </div>
@endsection