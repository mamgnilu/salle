<?php

/**
 * Created by Reliese Model.
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class AbonnesActivite
 * 
 * @property int $abonnes_id
 * @property int $activites_id
 * 
 * @property Abonne $abonne
 * @property Activite $activite
 *
 * @package App
 */
class AbonnesActivite extends Model
{
	protected $table = 'abonnes_activites';
	protected $primaryKey = 'abonnes_id';
	public $timestamps = false;

	protected $casts = [
		'activites_id' => 'int'
	];

	protected $fillable = [
		'activites_id'
	];

	public function abonne()
	{
		return $this->belongsTo(Abonne::class, 'abonnes_id');
	}

	public function activite()
	{
		return $this->belongsTo(Activite::class, 'activites_id');
	}
}
