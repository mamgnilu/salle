@extends('moniteurs.layout')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Modifier Moniteur</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('moniteurs.index') }}">Retour</a>
            </div>
        </div>
    </div>
   
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Warning!</strong> Please check input field code<br><br>
            <ul>
            @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
  
    <form action="{{ route('moniteurs.update',$moniteur->id) }}" method="POST">
        @csrf
    
        @method('PUT')
    
         <div class="row">
               
               
            
                <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>nom:</strong>
                        <input type="text" name="nom" class="form-control" value="{{$moniteur->nom}}" placeholder="nom">
                        </div>
                    </div>
                    
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>prenom:</strong>
                            <input type="text" name="prenom" class="form-control"  value="{{$moniteur->prenom}}" placeholder="prenom">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>telephone:</strong>
                            <input type="int" name="telephone" class="form-control" value="{{$moniteur->telephone}}" placeholder="telephone">
                        </div>
                    </div>
                    
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>adresse:</strong>
                            <input type="text" name="adresse" class="form-control"  value="{{$moniteur->adresse}}"placeholder="adresse">
                        </div>
                    </div>
                   
                    
                        
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
   
    </form>
@endsection