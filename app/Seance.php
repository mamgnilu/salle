<?php

/**
 * Created by Reliese Model.
 */

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Seance
 * 
 * @property int $id
 * @property string $uuid
 * @property int $tauxHoaire
 * @property Carbon $duree
 * @property int $activites_id
 * @property string $deleted_at
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * 
 * @property Activite $activite
 *
 * @package App
 */
class Seance extends Model
{
	use SoftDeletes;
	protected $table = 'seances';

	protected $casts = [
		'tauxHoaire' => 'int',
		'activites_id' => 'int'
	];

	protected $dates = [
		'duree'
	];

	protected $fillable = [
		'uuid',
		'tauxHoaire',
		'duree',
		'activites_id'
	];

	public function activite()
	{
		return $this->belongsTo(Activite::class, 'activites_id');
	}
}
