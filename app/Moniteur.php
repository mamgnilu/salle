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
 * Class Moniteur
 * 
 * @property int $id
 * @property string $uuid
 * @property string $nom
 * @property string $prenom
 * @property string $telephone
 * @property string $adresse
 * @property string $deleted_at
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * 
 * @property Collection|Activite[] $activites
 *
 * @package App
 */
class Moniteur extends Model
{
	use SoftDeletes;
	protected $table = 'moniteurs';

	protected $fillable = [
		'uuid',
		'nom',
		'prenom',
		'telephone',
		'adresse'
	];

	public function activites()
	{
		return $this->hasMany(Activite::class, 'moniteurs_id');
	}
}
