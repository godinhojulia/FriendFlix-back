<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Serie;

class SerieController extends Controller
{
  public function createSerie(Request $request){
    $serie = new Serie;
    $serie->name =$request->name;
    $serie->synopsis =$request->synopsis;
    $serie->save();
    return response()->json([$serie]);
  }
  public function listSerie(){
    $serie = Serie::all();
    return response()->json($serie);
    }
    public function showSerie($id){
      $serie = Serie::findOrFail($id);
      return response()->json([$serie]);
    }
    public function updateSerie(Request $request, $id){
      if($request->name)
        $serie->name = $request->name;
      if($request->synopsis)
          $serie->synopsis = $request->synopsis;
      $serie->save();

      return response()->json([$serie]);
    }
    public function deleteshow($id){
      Serie::destroy($id);
      return response()->json(['série deletada']);
    }
}
