<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\cv;

class Cvcontoller extends Controller
{
    public function index() {
// lister les cv 
$listcv = Cv::all();
return view('cv.index', ['cvs' =>$listcv]);
    }
    public function create() {
// creer des cv 
  return view('cv.create');
    }
    public function store(Request $request) {
      $cv = new cv();
      $cv->titre= $request->input('titre'); 
      $cv->presentation = $request->input('presentation');
      $cv->save();
    return redirect ('cvs') ;
// entregister un cv

    }
    public function edit($id) {
        $cv = cv :: find($id);
        return view ('cv.edit', ['cv' => $cv]) ;
// permet de récupérer un cv et le mettre dans un formulaire
    }
    public function update(Request $request, $id) {
//permet de modifier un cv
$cv = cv::find($id);
$cv->titre = $request->input('titre');
$cv->presentation = $request->input('presentation');
  $cv->save();
return redirect('cvs'); } 

     public function destroy(Request $request, $id) {
// permet de supprimer un cv 
    }

}
