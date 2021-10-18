<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Autore extends Model
{
	use HasFactory;
	
    public $timestamps = true;

    protected $table = 'autores';

    protected $fillable = ['autor_nombre'];
	
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function libros()
    {
        return $this->hasMany('App\Models\Libro', 'autor_id', 'id');
    }
    
}
