<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Doador
 * 
 * @property int $iddoador
 * @property string|null $cpf ou cnpj
 * @property string|null $atuacao
 * @property int $users_id
 * 
 * @property User $user
 * @property Collection|Disponabilidade[] $disponabilidades
 * @property Collection|Doacao[] $doacaos
 *
 * @package App\Models
 */
class Doador extends Model
{
	protected $table = 'doadors';
	protected $primaryKey = 'iddoador';
	public $timestamps = false;

	protected $casts = [
		'users_id' => 'int'
	];

	protected $fillable = [
		'cpf',
		'atuacao',
		'users_id'
	];

	public function user()
	{
		return $this->belongsTo(User::class, 'users_id');
	}

	public function disponabilidades()
	{
		return $this->hasMany(Disponabilidade::class, 'doador_iddoador');
	}

	public function doacaos()
	{
		return $this->hasMany(Doacao::class, 'doadors_iddoador');
	}
}
