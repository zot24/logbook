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
     * Display a specific aircraft by id
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $aircraft = $this->repository->find($id);
        return view('aircrafts.show', compact('aircraft'));
    }

    /**
     * Display the form to edit a specific record
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $aircraft = $this->repository->find($id);
        return view('aircrafts.edit', compact('aircraft'));
    }

    /**
     * Update an existing aircraft
     *
     * @param AircraftRequest $request
     * @param  int  $id
     * @return Response
     */
    public function update(AircraftRequest $request, $id)
    {
        $aircraft = $this->repository->update($id, $request->all());

        if ($aircraft) {
            return redirect()->route('aircrafts.index')->with('message', 'The aircraft $aircraft->registration_number has been updated!');
        }

        return redirect()->route('aircrafts.edit', $id)->withInput()->withErrors($this->repository->errors());
    }

    /**
     * Display the form to delete a aircraft
     *
     * @param int $id
     * @return View
     */
    public function delete($id)
    {
        $aircraft = $this->repository->find($id);
        return view('aircrafts.delete', compact('aircraft'));
    }

    /**
     * Remove the specified aircraft
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $aircraft = $this->repository->delete($id);
        return redirect()->route('aircrafts.index')->with('message', "The aircraft $aircraft->registration_number has been deleted!");
    }
}
