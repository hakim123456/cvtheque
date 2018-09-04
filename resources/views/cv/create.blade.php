@extends('layouts.app')

@section ('content')


<div class="container">
    <div class="row">
        <div class="col-md-12">

<form action="{{url('cvs')}}" method="POST">

    {{Csrf_field()}}


    <div class="form-group">
        <label for=""> titre</label>
        <input type="text" class="form-control" name="titre" required>
    </div>
    <div class="form-group">
            <label for=""> Presentation</label>
            <textarea name="presentation"class="form-control" required> 
            </textarea>
        </div>
       
         <input type="submit" name="datepublish" class="btn btn-primary" value="Enregistrer">
                </div>
</form>
        
        </div>
    </div>
</div>



@endsection
