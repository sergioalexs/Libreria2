<?php namespace Libreria;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model {

	//

	protected $table = 'categorias';


	protected $fillable = ['c_nombre'];

}
