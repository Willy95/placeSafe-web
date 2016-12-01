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

class reaccionescontroller extends Controller
{
	public function verificarreaccion($reaccion)
   {
      $sql="select *from reactions where name='".$reaccion."'";
      $resulrado=DB::select($sql);
      if ($resulrado!=null)
      {
        return "existe";
      }
   }

  public function subirreacciones(Request $request)
    {
      
      if ($request->hasFile('imagenes'))
      {
         $imagen= $request->file('imagenes');
         $nom= $imagen->getClientOriginalName();
         $ruta="images/reactions".$nom;
        
            $sql="select *from Reactions where name='".$request->input('nombre')."'";
            $resulrado=DB::select($sql);
        if ($resulrado!=null)
         {
            return "existe";
         }
         else
         {

            $imagen->move("images/reactions",$nom);
            $sql="insert into Reactions (name,image) values('".$request->input('nombre')."','".$ruta."')";
            DB::select($sql);      
       
            return "success";
         }
       
      }
      else
      {
         return "error";
      }
      
   }

   public function mostrarreacciones(Request $request)
   {
    $r=DB::table('Reactions')->select('*')->get();
    return $r;
   }


   public function actualizarreaccionsinimagen(Request $request)
   {
    $sql="Update Reactions set name='".$request->input('data.nombre')."' where id='".$request->input('data.id')."'";
   $e =DB::select($sql);
    return $sql;
   }
 
   public function actualizarreaccionconimagen(Request $request)
    {
      
      if ($request->hasFile('imagenes'))
      {
         $imagen= $request->file('imagenes');
         $nom= $imagen->getClientOriginalName();
         $ruta="Images/Reactions/".$nom;
        
       

        $imagen->move("Images/Reactions/",$nom);
        $sql="Update Reactions set name='".$request->input('nombre')."' , image='".$ruta."' where id='".$request->input('id')."'";
        DB::select($sql);      
       
            return "success";
      }
      else
      {
         return "error";
      }
      
   }

}