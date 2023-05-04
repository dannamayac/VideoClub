<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Alquiler
 * 
 * @property int $id
 * @property int $id_cliente
 * @property int $id_peliculas
 * @property int|null $valor_total
 * @property Carbon|null $fecha_inicio
 * @property Carbon|null $fecha_fin
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Cliente $cliente
 * @property Pelicula $pelicula
 *
 * @package App\Models
 */
class Alquiler extends Model
{
	protected $table = 'alquiler';

	protected $casts = [
		'id_cliente' => 'int',
		'id_peliculas' => 'int',
		'valor_total' => 'int',
		'fecha_inicio' => 'datetime',
		'fecha_fin' => 'datetime'
	];

	protected $fillable = [
		'id_cliente',
		'id_peliculas',
		'valor_total',
		'fecha_inicio',
		'fecha_fin'
	];

	public function cliente()
	{
		return $this->belongsTo(Cliente::class, 'id_cliente');
	}

	public function pelicula()
	{
		return $this->belongsTo(Pelicula::class, 'id_peliculas');
	}
}
