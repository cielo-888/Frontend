<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Cita
 *
 * @property $id
 * @property $id_medico
 * @property $id_paciente
 * @property $fecha_cita
 * @property $tipo_cita
 *
 * @property DetallesEncuestum[] $detallesEncuestas
 * @property Medico $medico
 * @property Paciente $paciente
 * @property Reporte[] $reportes
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Cita extends Model
{
    
    static $rules = [
		'id_medico' => 'required',
		'id_paciente' => 'required',
		'fecha_cita' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_medico','id_paciente','fecha_cita','tipo_cita'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function detallesEncuestas()
    {
        return $this->hasMany('App\Models\DetallesEncuestum', 'id_cita', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function medico()
    {
        return $this->hasOne('App\Models\Medico', 'id', 'id_medico');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function paciente()
    {
        return $this->hasOne('App\Models\Paciente', 'id', 'id_paciente');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function reportes()
    {
        return $this->hasMany('App\Models\Reporte', 'id_cita', 'id');
    }
    

}
