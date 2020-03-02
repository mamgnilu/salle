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
 * Class Seance
 * 
 * @property int $id
 * @property string $uuid
 * @property int $tauxHoaire
 * @property float $montant
 * @property Carbon $duree
 * @property int $activites_id
 * @property string $deleted_at
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * 
 * @property Activite $activite
 * @property Collection|Validation[] $validations
 *
 * @package App
 */
class Seance extends Model
{
	use SoftDeletes;
	protected $table = 'seances';

	protected $casts = [
		'tauxHoaire' => 'int',
		'montant' => 'float',
		'activites_id' => 'int'
	];

	protected $dates = [
		'duree'
	];

	protected $fillable = [
		'uuid',
		'tauxHoaire',
		'montant',
		'duree',
		'activites_id'
	];

	public function activite()
	{
		return $this->belongsTo(Activite::class, 'activites_id');
	}

	public function validations()
	{
		return $this->hasMany(Validation::class, 'seances_id');
	}
}
