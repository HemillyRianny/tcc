<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Doacao
 * 
 * @property int $iddoacao
 * @property string|null $descricao
 * @property int $doadors_iddoador
 * 
 * @property Doador $doador
 * @property Collection|Item[] $items
 * @property Collection|Receptor[] $receptors
 *
 * @package App\Models
 */
class Doacao extends Model
{
	protected $table = 'doacaos';
	protected $primaryKey = 'iddoacao';
	public $timestamps = false;

	protected $casts = [
		'doadors_iddoador' => 'int'
	];

	protected $fillable = [
		'descricao',
		'doadors_iddoador'
	];

	public function doador()
	{
		return $this->belongsTo(Doador::class, 'doadors_iddoador');
	}

	public function items()
	{
		return $this->belongsToMany(Item::class, 'doacaos_items', 'doacaos_iddoacao', 'items_iditem');
	}

	public function receptors()
	{
		return $this->hasMany(Receptor::class, 'doacaos_iddoacao');
	}
}
