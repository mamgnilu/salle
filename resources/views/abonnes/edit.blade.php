@extends('abonnes.layout')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Modifier abonnes</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('abonnes.index') }}"> Retour</a>
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
  
    <form action="{{ route('abonnes.update',$abonne->id) }}" method="POST">
        @csrf
    
        @method('PUT')
    
         <div class="row">
               
            
                <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>nom:</strong>
                        <input type="text" name="nom" class="form-control" value="{{$abonne->nom}}" placeholder="nom">
                        </div>
                    </div>
                    
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>prenom:</strong>
                            <input type="text" name="prenom" class="form-control"  value="{{$abonne->prenom}}" placeholder="prenom">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>telephone:</strong>
                            <input type="int" name="telephone" class="form-control" value="{{$abonne->telephone}}" placeholder="telephone">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>email:</strong>
                            <input type="email" name="email" class="form-control" value="{{$abonne->email}}" placeholder="email">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>ddn:</strong>
                            <input type="date" name="ddn" class="form-control" value="{{$abonne->ddn}}" placeholder="ddn">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>adresse:</strong>
                            <input type="text" name="adresse" class="form-control"  value="{{$abonne->adresse}}"placeholder="adresse">
                        </div>
                    </div>
                   <!-- <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>role:</strong>
                            <select name="role" class="form-control">
                                <option value="1">Admin</option>
                                <option value="0">Gestionnaire</option>
                            </select>
                           
                        </div>
                    </div>-->
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>password:</strong>
                            <input type="text" name="password" class="form-control" value="{{$abonne->password}}" placeholder="password">
                        </div>
                    </div>
                    
                        
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
   
    </form>
@endsection