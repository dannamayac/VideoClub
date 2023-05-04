<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Pelicula
 * 
 * @property int $id
 * @property string $nombre
 * @property string $sinopsis
 * @property int|null $precio_unitario
 * @property string $tipo
 * @property string $genero
 * @property Carbon|null $fecha_estreno
 * @property string|null $imagen
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Collection|Alquiler[] $alquilers
 *
 * @package App\Models
 */
class Pelicula extends Model
{
	protected $table = 'pelicula';

	protected $casts = [
		'precio_unitario' => 'int',
		'fecha_estreno' => 'datetime'
	];

	protected $fillable = [
		'nombre',
		'sinopsis',
		'precio_unitario',
		'tipo',
		'genero',
		'fecha_estreno',
		'imagen'
	];

	public function alquilers()
	{
		return $this->hasMany(Alquiler::class, 'id_peliculas');
	}
}
