<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Receptor
 * 
 * @property int $idReceptor
 * @property string|null $cnpj
 * @property string|null $atuacao
 * @property int $users_id
 * @property int|null $doacaos_iddoacao
 * 
 * @property Doacao|null $doacao
 * @property User $user
 * @property Collection|Necessidade[] $necessidades
 *
 * @package App\Models
 */
class Receptor extends Model
{
	protected $table = 'receptors';
	protected $primaryKey = 'idReceptor';
	public $timestamps = false;

	protected $casts = [
		'users_id' => 'int',
		'doacaos_iddoacao' => 'int'
	];

	protected $fillable = [
		'cnpj',
		'atuacao',
		'users_id',
		'doacaos_iddoacao'
	];

	public function doacao()
	{
		return $this->belongsTo(Doacao::class, 'doacaos_iddoacao');
	}

	public function user()
	{
		return $this->belongsTo(User::class, 'users_id');
	}

	public function necessidades()
	{
		return $this->hasMany(Necessidade::class, 'Receptor_idReceptor');
	}
}
