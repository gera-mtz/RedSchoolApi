<?php

namespace App\Repositories;

use App\Models\tags;
use App\Repositories\BaseRepository;

/**
 * Class tagsRepository
 * @package App\Repositories
 * @version June 29, 2019, 2:26 am UTC
*/

class tagsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'tag',
        'escuela_id'
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

    /**
     * Configure the Model
     **/
    public function model()
    {
        return tags::class;
    }
}
