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
 * Class Abonne
 * 
 * @property int $id
 * @property string $uuid
 * @property string $motivation
 * @property int $users_id
 * @property string $deleted_at
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * 
 * @property User $user
 * @property Collection|Activite[] $activites
 * @property Collection|Evalution[] $evalutions
 *
 * @package App
 */
class Abonne extends Model
{
	use SoftDeletes;
	protected $table = 'abonnes';

	protected $casts = [
		'users_id' => 'int'
	];

	protected $fillable = [
		'uuid',
		'motivation',
		'users_id'
	];

	public function user()
	{
		return $this->belongsTo(User::class, 'users_id');
	}

	public function activites()
	{
		return $this->belongsToMany(Activite::class, 'abonnes_activites', 'abonnes_id', 'activites_id');
	}

	public function evalutions()
	{
		return $this->hasMany(Evalution::class, 'abonnes_id');
	}
}
