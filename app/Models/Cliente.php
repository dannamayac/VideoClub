<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Cliente
 * 
 * @property int $id
 * @property string $nombre
 * @property string $apellido
 * @property int|null $cedula
 * @property string $correo
 * @property int $telefono
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Collection|Alquiler[] $alquilers
 *
 * @package App\Models
 */
class Cliente extends Model
{
	protected $table = 'cliente';

	protected $casts = [
		'cedula' => 'int',
		'telefono' => 'int'
	];

	protected $fillable = [
		'nombre',
		'apellido',
		'cedula',
		'correo',
		'telefono'
	];

	public function alquilers()
	{
		return $this->hasMany(Alquiler::class, 'id_cliente');
	}
}
