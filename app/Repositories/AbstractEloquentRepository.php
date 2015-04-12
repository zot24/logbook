<?php namespace Motty\Logbook\Repositories;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use StdClass;
use Illuminate\Support\MessageBag;
use Motty\Logbook\Validators\ValidatorInterface;

abstract class AbstractEloquentRepository
{
    /**
     * @var Illuminate\Database\Eloquent\Model
     */
    protected $model;

    /**
     * @var Illuminate\Support\MessageBag
     */
    protected $errors;

    /**
     * Construct
     *
     * @param MessageBag $errors
     */
    public function __construct(MessageBag $errors)
    {
        $this->errors = $errors;
    }

    /**
     * Make a new instance of the entity to query on
     *
     * @param array $with
     */
    public function make(array $with = array())
    {
        return $this->model->with($with);
    }

    /**
     * Register Validators
     *
     * @param string $name
     * @param ValidatorInterface $validator
     */
    public function registerValidator($name, $validator)
    {
        $this->validators[$name] = $validator;
    }

    /**
     * Check to see if the input data is valid
     *
     * @param $name
     * @param array $data
     * @return boolean
     */
    public function isValid($name, array $data)
    {
        if ($this->validators[$name]->with($data)->passes()) {
            return true;
        }

        $this->errors = $this->validators[$name]->errors();
        return false;
    }

    /**
     * Return all users
     *
     * @param array $with
     * @return Illuminate\Database\Eloquent\Collection
     */
    public function all(array $with = array())
    {
        return $this->model->all();
    }

    /**
     * Find a single entity
     *
     * @param int $id
     * @param array $with
     * @return Illuminate\Database\Eloquent\Model
     */
    public function find($id, array $with = array())
    {
        $entity = $this->make($with);

        try {
            return $entity->findOrFail($id);
        } catch (ModelNotFoundException $e) {
            App::abort(404, $entity->getRouteKeyName() . ' not found');
        }
    }

    /**
     * Find a single entity by key value
     *
     * @param string $key
     * @param string $value
     * @param array $with
     */
    public function getFirstBy($key, $value, array $with = array())
    {
        return $this->make($with)->where($key, '=', $value)->first();
    }

    /**
     * Find many entities by key value
     *
     * @param string $key
     * @param string $value
     * @param array $with
     */
    public function getManyBy($key, $value, array $with = array())
    {
        return $this->make($with)->where($key, '=', $value)->get();
    }

    /**
     * Get Results by Page
     *
     * @param int $page
     * @param int $limit
     * @param array $with
     * @return StdClass Object with $items and $totalItems for pagination
     */
    public function getByPage($page = 1, $limit = 10, array $with = array())
    {
        $result = new StdClass;
        $result->page = $page;
        $result->limit = $limit;
        $result->totalItems = 0;
        $result->items = array();

        $query = $this->make($with);
        $model = $query->skip($limit * ($page - 1))->take($limit)->get();

        $result->totalItems = $this->model->count();
        $result->items = $model->all();

        return $result;
    }

    /**
     * Return all results that have a required relationship
     *
     * @param string $relation
     */
    public function has($relation, array $with = array())
    {
        $entity = $this->make($with);

        return $entity->has($relation)->get();
    }

    /**
     * Return all results that have a required relationship where a condition happens
     *
     * @param string $relation
     * @param        $key
     * @param        $operator
     * @param        $value
     * @param array  $with
     *
     * @return mixed
     */
    public function whereHas($relation, $key, $value, $operator = '=', array $with = array())
    {
        $entity = $this->make($with);

        return $entity->whereHas($relation, function ($q) use ($key, $value, $operator) {
            $q->where($key, $value, $operator);
        })->get();
    }

    /**
     * Return the errors
     *
     * @return Illuminate\Support\MessageBag
     */
    public function errors()
    {
        return $this->errors;
    }
}
