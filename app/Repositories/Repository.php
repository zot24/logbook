<?php namespace Motty\Logbook\Repositories;

interface Repository
{
    /**
     * Retrieve all entities
     *
     * @param array $with
     * @return Illuminate\Database\Eloquent\Collection
     */
    public function all(array $with = array());

    /**
     * Find a single entity by key value
     *
     * @param string $key
     * @param string $value
     * @param array $with
     */
    public function getFirstBy($key, $value, array $with = array());

    /**
     * Find many entities by key value
     *
     * @param string $key
     * @param string $value
     * @param array $with
     */
    public function getManyBy($key, $value, array $with = array());

    /**
     * Return the errors
     *
     * @return Illuminate\Support\MessageBag
     */
    public function errors();
}
