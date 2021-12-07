<?php

namespace App\Repositories;

use App\Models\Client;
use App\Repositories\BaseRepository;
//use Your Model

/**
 * Class ClientRepository.
 */
class ClientRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nome',
        'telefone',
        'cpf',
        'placa'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    public function consultaFinalPlaca($placa)
    {
        return $this->allQuery(['placa',$placa])->get();
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Client::class;
    }
}
