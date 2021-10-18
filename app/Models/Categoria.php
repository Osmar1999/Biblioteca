<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
	use HasFactory;
	
    public $timestamps = true;

    protected $table = 'categorias';

    protected $fillable = ['categoria_nombre'];
	
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function libros()
    {
        return $this->hasMany('App\Models\Libro', 'categoria_id', 'id');
    }
    
}
