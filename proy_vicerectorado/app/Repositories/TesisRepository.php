<?php

namespace App\Repositories;

use App\Models\Tesis;
use InfyOm\Generator\Common\BaseRepository;

class TesisRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'tesis',
        'facultad',
        'escuela',
        'fecha'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Tesis::class;
    }
}
