<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Necessidade
 * 
 * @property int $idnecessidade
 * @property int $Receptor_idReceptor
 * @property int|null $dataCadastro
 * @property int|null $status
 * @property int|null $quantidade
 * @property int $items_iditem
 * 
 * @property Receptor $receptor
 * @property Item $item
 *
 * @package App\Models
 */
class Necessidade extends Model
{
	protected $table = 'necessidades';
	protected $primaryKey = 'idnecessidade';
	public $timestamps = false;

	protected $casts = [
		'Receptor_idReceptor' => 'int',
		'dataCadastro' => 'int',
		'status' => 'int',
		'quantidade' => 'int',
		'items_iditem' => 'int'
	];

	protected $fillable = [
		'Receptor_idReceptor',
		'dataCadastro',
		'status',
		'quantidade',
		'items_iditem'
	];

	public function receptor()
	{
		return $this->belongsTo(Receptor::class, 'Receptor_idReceptor');
	}

	public function item()
	{
		return $this->belongsTo(Item::class, 'items_iditem');
	}
}
