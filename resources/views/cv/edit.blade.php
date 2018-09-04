@extends('layouts.app')

@section ('content')


<div class="container">
    <div class="row">
        <div class="col-md-12">

<form action="{{url('cvs/'.$cv->id)}}" method="POST">
    <input type="hidden" name="_method" value="PUT">

    {{Csrf_field()}}


    <div class="form-group">
        <label for=""> titre</label>
        <input type="text" class="form-control" name="titre" value=" {{$cv->titre}}">
    </div>
    <div class="form-group">
            <label for=""> Presentation</label>
            <textarea name="presentation"class="form-control">
              {{$cv->presentation}}     
            </textarea>
        </div>
       
         <input type="submit" name="datepublish" class="btn btn-danger" value="Modifier">
                </div>
</form>
        
        </div>
    </div>
</div>



@endsection
