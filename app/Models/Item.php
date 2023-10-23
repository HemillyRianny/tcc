<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Item
 * 
 * @property int $iditem
 * @property string|null $nome
 * @property string|null $descricao
 * @property string|null $foto
 * 
 * @property Collection|Disponabilidade[] $disponabilidades
 * @property Collection|Doacao[] $doacaos
 * @property Collection|Necessidade[] $necessidades
 *
 * @package App\Models
 */
class Item extends Model
{
	protected $table = 'items';
	protected $primaryKey = 'iditem';
	public $timestamps = false;

	protected $fillable = [
		'nome',
		'descricao',
		'foto'
	];

	public function disponabilidades()
	{
		return $this->hasMany(Disponabilidade::class, 'items_iditem');
	}

	public function doacaos()
	{
		return $this->belongsToMany(Doacao::class, 'doacaos_items', 'items_iditem', 'doacaos_iddoacao');
	}

	public function necessidades()
	{
		return $this->hasMany(Necessidade::class, 'items_iditem');
	}
}
