<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Disponabilidade
 * 
 * @property int $iddisponabilidade
 * @property int $doador_iddoador
 * @property int|null $dataCadastro
 * @property int|null $quantidade
 * @property Carbon|null $validade
 * @property int $items_iditem
 * 
 * @property Doador $doador
 * @property Item $item
 *
 * @package App\Models
 */
class Disponabilidade extends Model
{
	protected $table = 'disponabilidades';
	protected $primaryKey = 'iddisponabilidade';
	public $timestamps = false;

	protected $casts = [
		'doador_iddoador' => 'int',
		'dataCadastro' => 'int',
		'quantidade' => 'int',
		'validade' => 'datetime',
		'items_iditem' => 'int'
	];

	protected $fillable = [
		'doador_iddoador',
		'dataCadastro',
		'quantidade',
		'validade',
		'items_iditem'
	];

	public function doador()
	{
		return $this->belongsTo(Doador::class, 'doador_iddoador');
	}

	public function item()
	{
		return $this->belongsTo(Item::class, 'items_iditem');
	}
}
