<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;
use Illuminate\Http\Request;
use DB;
use Session;

class placescontroller extends Controller
{

  public function  getplaces()
   {
    return DB::table('Places')->select('*')->get();
   }
 
  public function  getopinions(Request  $request)
   {
    return DB::table('Opinions')->select('*')->where('Places_id','=',$request->input('data.id'))->get();
   }

    public function  deleteopinion(Request  $request)
   {
    $sql="delete from Opinions where id='".$request->input('data.id')."'";
     DB::select($sql);
     return "eliminado";
   }

   public function places()
   {
    return View('places');
   }

   public function subirplaces(Request $request)
    {
      
      if ($request->hasFile('imagenes'))
      {
         $imagen= $request->file('imagenes');
         $nom= $imagen->getClientOriginalName();
         $ruta="images/reactions".$nom;
        
       

          $imagen->move("images/places",$nom);
          $sql="insert into Places (address,imagen,latitud,longitud) values('".$request->input('titulo')."','".$nom."','".$request->input('latitud')."','".$request->input('longitud')."')";
          DB::select($sql);      
       
          return "success";
         
       
      }
      else
      {
         return "error";
      }
      
   }


}