<?php namespace Motty\Logbook\Http\Controllers;

use Motty\Logbook\Http\Requests\AircraftRequest;
use Motty\Logbook\Repositories\Aircraft\AircraftRepositoryInterface;

class AircraftsController extends Controller
{
    /**
     * The Record repository
     *
     * @var AircraftRepositoryInterface
     */
    protected $repository;

    public function __construct(AircraftRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    /**
     * Display a listing of the user's aircrafts
     *
     * @return Response
     */
    public function index()
    {
        $aircrafts = $this->repository->all();
        return view('aircrafts.index', compact('aircrafts'));
    }

    /**
     * Show the form for creating a new resource
     *
     * @return Response
     */
    public function create()
    {
        return view('aircrafts.create');
    }

    /**
     * Store a newly created aircraft in the database
     *
     * @param AircraftRequest $request
     * @return Response
     */
    public function store(AircraftRequest $request)
    {

        $input = $request->all();
        $input['user_id'] = \Auth::id();
        $aircraft = $this->repository->create($input);

        if ($aircraft) {
            return redirect()->route('aircrafts.index')->with('message', 'The aircraft has been created!');
        }

        return redirect()->route('aircrafts.create')->withInput()->withErrors($this->repository->errors());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }

}
