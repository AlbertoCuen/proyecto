<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Usuario;
use App\Proyecto;
use DB;
use App\usuarios_proyectos;

class ejemploController extends Controller
{
    public function index($nombre, $edad){
    	return view('home', compact('nombre', 'edad'));
    }

    public function mostrarUsuarios(){
    	$usuarios=Usuario::all();
    	return view('consultarUsuarios', compact('usuarios'));
    }

    public function eliminarUsuario($id){
    	Usuario::find($id)->delete();
    	return Redirect('/usuarios');
    }

    public function registrarUsuario(){
        return view('registrarUsuario');
    }

    public function guardarUsuario(Request $request){ //request es el objeto que trae los datos del formulario
        $usuario = new Usuario(); //Se crea un objeto para mandar la informacion ya que tiene los campos requeridos del formulario

        $usuario->nombre=$request->input('nombre');
        $usuario->edad=$request->input('edad');
        $usuario->correo=$request->input('correo');
        $usuario->save();

        return Redirect('/usuarios');
    }

    public function modificarUsuario($id){
        $usuario=Usuario::find($id);
        return view('modificarUsuario', compact('usuario'));
    }

    public function actualizarUsuario(Request $request, $id){
        $usuario=Usuario::find($id);
        $usuario->nombre = $request->input('nombre');
        $usuario->edad = $request->input('edad');
        $usuario->correo = $request->input('correo');
        $usuario->save();

        return Redirect('/usuarios');
    }

    public function asignarUsuarios(){
        $proyectos = Proyecto::all();
        return view('asignarUsuarios', compact('proyectos'));
    }

    public function seleccionarUsuarios(Request $request){
        $proyectos = Proyecto::all();
        $id = $request->input('proyectos');
        $lista = DB::table('usuarios_proyectos')->where('id_proyecto', '=', $id)->lists('id_usuarios');
        $usuarios = DB::table('usuarios')->whereNotIn('id', $lista)->orderBy('id', 'asc')->get();
        return view('seleccionarUsuarios', compact('proyectos', 'usuarios', 'id'));
    }

    public function actualizarUsuariosProyectos(Request $request, $id){
        $usuarios = $request->input('seleccionar');
        foreach ($usuarios as $u) {
            $registro = new usuarios_proyectos();
            $registro->id_usuarios = $u;
            $registro->id_proyecto = $id;
            $registro->save();
        }
        return Redirect('/asignarUsuarios');
        
    }

    public function pdfProyectos($id){
        $lista = DB::table('usuarios_proyectos')->where('id_proyecto', '=', $id)->lists('id_usuarios');
        $usuarios = DB::table('usuarios')->whereIn('id', $lista)->orderBy('id', 'asc')->get();
        $proyecto = Proyecto::find($id);
        $vista = view('pdfProyectos', compact('usuarios', 'proyecto'));
        $dompdf = \App::make('dompdf.wrapper');
        $dompdf->loadHTML($vista);
        return $dompdf->stream();
    }

}
