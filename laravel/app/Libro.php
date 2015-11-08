<?php namespace Libreria;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use DB;

class Libro extends Model {

	//

	protected $table = 'libros';



    protected $fillable = ['nombre','autor','editorial','paginas','anyo','precio','portada','categoria_id'];
    

    public function setPortadaAttribute($portada){
    	
		if(! empty($portada)){
		$name = Carbon::now()->second.$portada->getClientOriginalName();
		$this->attributes['portada'] = $name;
		\Storage::disk('local')->put($name, \File::get($portada));
         }
    }



 
   public static function Libros(){
		return DB::table('libros')
			->join('categorias','categorias.id','=','libros.categoria_id')
			->select('libros.*', 'categorias.c_nombre')
			->get();
	}
}
