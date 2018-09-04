@extends('layouts.app')
@section ('content')
<div class="container">
        <div class="row">
            <div class="col-md-12">


              <h1> La liste de mes cv  
               </h1>
               <div class="pull-right"> 
                   <a href="{{url('cvs/create') }} "class="btn btn-primary">Nouveau cv </a>
                    </div>
               <table class="table">
                 <head>
                    <tr>
                       <th>Titre </th>
                       <th>Présentation</th>
                       <th>Date de creation </th>
                       <th>Action</th>
                     </tr>
                   
                 </head>
                 <body>
                     @foreach ($cvs as $cv )
                        <tr>
                           <td> {{$cv->titre }} </td>
                           <td>{{$cv->presentation}}</td>
                           <td>{{$cv->created_at}}</td>
                           <td>

<form action="{{url('cvs/'.$cv->id)}}" method="post">
{{csrf_field()}}
{{method_field('DELETE')}}

<a href="" class="btn btn-success">Afficher </a>
<a href="{{url('cvs/'.$cv->id.'/edit')}}" class="btn btn-warning"> Modifier </a>
<button type="submit" class="btn btn-danger"> Supprimer </button>
</form>



                           </td>
                         </tr>
                       @endforeach
                        </body>

                   
                 </table>
         </div>
    </div>
</div>
@endsection

