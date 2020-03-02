<?php

/**
 * Created by Reliese Model.
 */

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Evalution
 * 
 * @property int $id
 * @property string $uuid
 * @property float $tension_systolique
 * @property float $tension_diastolique
 * @property int $rythme_cardiaque
 * @property string $poids
 * @property string $etat_tension
 * @property string $taille
 * @property int $abonnes_id
 * @property string $deleted_at
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * 
 * @property Abonne $abonne
 *
 * @package App
 */
class Evalution extends Model
{
	use SoftDeletes;
	protected $table = 'evalutions';

	protected $casts = [
		'tension_systolique' => 'float',
		'tension_diastolique' => 'float',
		'rythme_cardiaque' => 'int',
		'abonnes_id' => 'int'
	];

	protected $fillable = [
		'uuid',
		'tension_systolique',
		'tension_diastolique',
		'rythme_cardiaque',
		'poids',
		'etat_tension',
		'taille',
		'abonnes_id'
	];

	public function abonne()
	{
		return $this->belongsTo(Abonne::class, 'abonnes_id');
	}
}
