@extends('seances.layout')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Modifier Seance</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('seances.index') }}"> Retour</a>
            </div>
        </div>
    </div>
   
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Erreur!</strong> SVP veuillez saisir les bonnes informations svp<br><br>
            <ul>
            @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
  
    <form action="{{ route('seances.update',$seance->id) }}" method="POST">
        @csrf
    
        @method('PUT')
    
         <div class="row">
               
               
            
                <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>tauxHoraire:</strong>
                        <input type="text" name="tauxHoaire" class="form-control" value="{{$seance->tauxHoaire}}" placeholder="tauxHoaire">
                        </div>
                    </div>
                    
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>duree:</strong>
                            <input type="text" name="duree" class="form-control"  value="{{$seance->duree}}" placeholder="duree">
                        </div>
                    </div>
                    
                   
                    
                        
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
   
    </form>
@endsection