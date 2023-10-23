<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;
use Illuminate\Foundation\Auth\User as Authenticatable;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class User
 * 
 * @property int $id
 * @property string|null $name
 * @property string|null $telefone
 * @property string|null $email
 * @property string|null $password
 * @property string|null $email_verified_atSELECT
 * @property string|null $remember_token
 * @property string|null $Entidadecol
 * @property string|null $created_at
 * @property string|null $updated_at
 * 
 * @property Collection|Doador[] $doadors
 * @property Collection|Receptor[] $receptors
 *
 * @package App\Models
 */
class User extends Authenticatable
{
	protected $table = 'users';

	protected $hidden = [
		'password',
		'remember_token'
	];

	protected $fillable = [
		'name',
		'telefone',
		'email',
		'descricao',
		'endereco',
		'password',
		'email_verified_atSELECT',
		'remember_token',
		'Entidadecol'
	];

	public function doadors()
	{
		return $this->hasMany(Doador::class, 'users_id');
	}

	public function receptors()
	{
		return $this->hasMany(Receptor::class, 'users_id');
	}
}
