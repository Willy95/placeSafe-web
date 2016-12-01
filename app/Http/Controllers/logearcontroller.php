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


class logearcontroller extends Controller
{


	public function cerrarsesion()
  {
    Session::forget('usuario');
    return View('index_new');
  }

  public function logear(Request $request)
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

  
   }

	}