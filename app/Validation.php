<?php

/**
 * Created by Reliese Model.
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Validation
 * 
 * @property int $id
 * @property bool $valide
 * @property int $seances_id
 * 
 * @property Seance $seance
 *
 * @package App
 */
class Validation extends Model
{
	protected $table = 'validations';
	public $timestamps = false;

	protected $casts = [
		'valide' => 'bool',
		'seances_id' => 'int'
	];

	protected $fillable = [
		'valide',
		'seances_id'
	];

	public function seance()
	{
		return $this->belongsTo(Seance::class, 'seances_id');
	}
}
