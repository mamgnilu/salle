<?php

/**
 * Created by Reliese Model.
 */

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class User
 * 
 * @property int $id
 * @property string $uuid
 * @property string $nom
 * @property string $prenom
 * @property string $telephone
 * @property string $email
 * @property string $remember_token
 * @property Carbon $ddn
 * @property string $adresse
 * @property bool $role
 * @property string $password
 * @property string $deleted_at
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * 
 * @property Collection|Abonne[] $abonnes
 *
 * @package App
 */
class User extends Model
{
	use SoftDeletes;
	protected $table = 'users';

	protected $casts = [
		'role' => 'bool'
	];

	protected $dates = [
		'ddn'
	];

	protected $hidden = [
		'remember_token',
		'password'
	];

	protected $fillable = [
		'uuid',
		'nom',
		'prenom',
		'telephone',
		'email',
		'remember_token',
		'ddn',
		'adresse',
		'role',
		'password'
	];

	public function abonnes()
	{
		return $this->hasMany(Abonne::class, 'users_id');
	}
}
