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
 * Class Activite
 * 
 * @property int $id
 * @property string $uuid
 * @property string $libelle
 * @property string $description
 * @property string $nom
 * @property float $montant
 * @property float $avance
 * @property Carbon $datedebut
 * @property Carbon $datefin
 * @property int $moniteurs_id
 * @property string $deleted_at
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * 
 * @property Moniteur $moniteur
 * @property Collection|Abonne[] $abonnes
 * @property Collection|Seance[] $seances
 *
 * @package App
 */
class Activite extends Model
{
	use SoftDeletes;
	protected $table = 'activites';

	protected $casts = [
		'montant' => 'float',
		'avance' => 'float',
		'moniteurs_id' => 'int'
	];

	protected $dates = [
		'datedebut',
		'datefin'
	];

	protected $fillable = [
		'uuid',
		'libelle',
		'description',
		'nom',
		'montant',
		'avance',
		'datedebut',
		'datefin',
		'moniteurs_id'
	];

	public function moniteur()
	{
		return $this->belongsTo(Moniteur::class, 'moniteurs_id');
	}

	public function abonnes()
	{
		return $this->belongsToMany(Abonne::class, 'abonnes_activites', 'activites_id', 'abonnes_id');
	}

	public function seances()
	{
		return $this->hasMany(Seance::class, 'activites_id');
	}
}
