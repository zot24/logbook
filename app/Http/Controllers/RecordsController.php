<?php namespace Motty\Logbook\Http\Controllers;

use Motty\Logbook\Http\Requests\RecordRequest;
use Motty\Logbook\Repositories\Record\RecordRepositoryInterface;

class RecordsController extends Controller
{
    /**
     * The Record repository
     *
     * @var RecordRepositoryInterface
     */
    protected $repository;

    public function __construct(RecordRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    /**
     * Display a listing of the user's records
     *
     * @return View
     */
    public function index()
    {
        $records = $this->repository->all();
        return view('records.index', compact('records'));
    }

    /**
     * Display the form to create a new record
     *
     * @return View
     */
    public function create()
    {
        return view('records.create');
    }

    /**
     * Store a new record
     *
     * @param RecordRequest $request
     * @return Redirect
     */
    public function store(RecordRequest $request)
    {
        $input = $request->all();
        $input['user_id'] = \Auth::id();
        $record = $this->repository->create($input);

        if ($record) {
            return redirect()->route('records.index')->with('message', 'The record has been created!');
        }

        return redirect()->route('records.create')->withInput()->withErrors($this->repository->errors());
    }

    /**
     * Display a specific record by id
     *
     * @param int $id
     * @return View
     */
    public function show($id)
    {
        $record = $this->repository->find($id);
        return view('records.show', compact('record'));
    }

    /**
     * Display the form to edit a specific record
     *
     * @param int $id
     * @return View
     */
    public function edit($id)
    {
        $record = $this->repository->find($id);
        return view('records.edit', compact('record'));
    }

    /**
     * Update an existing record
     *
     * @param RecordRequest $request
     * @param int $id
     * @return Redirect
     */
    public function update(RecordRequest $request, $id)
    {
        $record = $this->repository->update($id, $request->all());

        if ($record) {
            return redirect()->route('records.index')->with('message', 'The record $record->name has been updated!');
        }

        return redirect()->route('records.edit', $id)->withInput()->withErrors($this->repository->errors());
    }

    /**
     * Display the form to delete a record
     *
     * @param int $id
     * @return View
     */
    public function delete($id)
    {
        $record = $this->repository->find($id);
        return view('records.delete', compact('record'));
    }

    /**
     * Remove the specific record
     *
     * @param int $id
     * @return Redirect
     */
    public function destroy($id)
    {
        $record = $this->repository->delete($id);
        return redirect()->route('records.index')->with('message', "The record $record->id has been deleted!");
    }
}
