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

class PrincipalIndex extends Controller
{
    function verIndex(){
      return view('index');
   }
   function verIndex2(){
      return view('index_new');
   }



 /* public function logear(Request $request)
  {
    $search = array(
      '@<script[^>]*?>.*?</script>@si',  
      '@<[\/\!]*?[^<>]*?>@si',            
      '@<style[^>]*?>.*?</style>@siU',    
      '@<![\s\S]*?--[ \t\n\r]*>@'        
    );

    $usuario=preg_replace($search, '', $request->input('usuarios.usuario'));
    $password=preg_replace($search, '', $request->input('usuarios.password'));
    $usuario=str_replace("'", '', $usuario);
    $password=str_replace("'", '',$password );
    

   
   
    $s = DB::table('users')
      ->join('admins','users.id','=','admins.users_id')
      ->select('users.nickname')
      ->where('users.nickname','=',$usuario)
      ->where('admins.password','=',$password)
      ->get();

      if ($s!=null)
      {
        Session::put('usuario',$usuario);
        return "success";
      }
      else
      {
        return "error";
      }

  
   }*/

     function comentarios(){
      $places=DB::table('Places')->select('*')->get();
      return view('comentarios')->with('places',$places);
   }
     function reacciones(){
      return view('reacciones');
   }
   function menu(){
      return view('menu');
   }


  /*public function verificarreaccion($reaccion)
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
      
   }*/

  /* public function  getplaces()
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
*/

 
}
