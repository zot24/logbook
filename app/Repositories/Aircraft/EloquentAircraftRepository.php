<?php namespace Motty\Logbook\Repositories\Aircraft;

use Exception;
use Illuminate\Support\MessageBag;
use Illuminate\Database\Eloquent\Model;
use Motty\Logbook\Repositories\Crudable;
use Motty\Logbook\Repositories\Repository;
use Motty\Logbook\Repositories\AbstractEloquentRepository;

class EloquentAircraftRepository extends AbstractEloquentRepository implements Repository, Crudable, AircraftRepositoryInterface
{
    /**
     * @var Illuminate\Database\Eloquent\Model
     */
    protected $model;

    /**
     * Construct
     *
     * @param Model $model
     */
    public function __construct(Model $model)
    {
        parent::__construct(new MessageBag);

        $this->model = $model;
    }

    /**
     * Create the model
     *
     * @param array $data
     * @return Illuminate\Database\Eloquent\Model
     */
    public function create(array $data)
    {
        return $this->model->create($data);
    }

    /**
     * Update the model
     *
     * @param int $id
     * @param array $data
     * @return Illuminate\Database\Eloquent\Model
     * @throws Exception
     */
    public function update($id, array $data)
    {
        return $this->find($id)->update($data);
    }

    /**
     * Delete the model
     *
     * @param int $id
     * @return boolean
     * @throws Exception
     */
    public function delete($id)
    {
        return $this->find($id)->delete($id);
    }
}
