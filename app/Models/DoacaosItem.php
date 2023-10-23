<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class DoacaosItem
 * 
 * @property int $doacaos_iddoacao
 * @property int $items_iditem
 * 
 * @property Doacao $doacao
 * @property Item $item
 *
 * @package App\Models
 */
class DoacaosItem extends Model
{
	protected $table = 'doacaos_items';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'doacaos_iddoacao' => 'int',
		'items_iditem' => 'int'
	];

	public function doacao()
	{
		return $this->belongsTo(Doacao::class, 'doacaos_iddoacao');
	}

	public function item()
	{
		return $this->belongsTo(Item::class, 'items_iditem');
	}
}
