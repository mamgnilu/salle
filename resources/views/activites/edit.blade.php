@extends('activites.layout')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Modifier Activite</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('activites.index') }}"> Retour</a>
            </div>
        </div>
    </div>
   
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Erreur!</strong> SVP! veuillez saisir les informations correctement<br><br>
            <ul>
            @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
  
    <form action="{{ route('activites.update',$activite->id) }}" method="POST">
        @csrf
    
        @method('PUT')
    
         <div class="row">
               
               
            
                <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>libelle:</strong>
                        <input type="text" name="libelle" class="form-control" value="{{$activite->libelle}}" placeholder="libelle">
                        </div>
                    </div>
                    
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>description:</strong>
                            <input type="text" name="description" class="form-control"  value="{{$activite->description}}" placeholder="description">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>nom:</strong>
                            <input type="text" name="nom" class="form-control" value="{{$activite->nom}}" placeholder="nom">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>montant:</strong>
                            <input type="double" name="montant" class="form-control" value="{{$activite->montant}}" placeholder="montant">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>avance:</strong>
                            <input type="double" name="avance" class="form-control" value="{{$activite->avance}}" placeholder="avance">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>datedebut:</strong>
                            <input type="date" name="datedebut" class="form-control"  value="{{$activite->datedebut}}"placeholder="datedebut">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>datefin:</strong>
                            <input type="date" name="datefin" class="form-control"  value="{{$activite->datefin}}"placeholder="datefin">
                        </div>
                    </div>
                    
                   
                    
                        
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
   
    </form>
@endsection