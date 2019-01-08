<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTesisRequest;
use App\Http\Requests\UpdateTesisRequest;
use App\Repositories\TesisRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class TesisController extends AppBaseController
{
    /** @var  TesisRepository */
    private $tesisRepository;

    public function __construct(TesisRepository $tesisRepo)
    {
        $this->tesisRepository = $tesisRepo;
    }

    /**
     * Display a listing of the Tesis.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->tesisRepository->pushCriteria(new RequestCriteria($request));
        $teses = $this->tesisRepository->all();

        return view('teses.index')
            ->with('teses', $teses);
    }

    /**
     * Show the form for creating a new Tesis.
     *
     * @return Response
     */
    public function create()
    {
        return view('teses.create');
    }

    /**
     * Store a newly created Tesis in storage.
     *
     * @param CreateTesisRequest $request
     *
     * @return Response
     */
    public function store(CreateTesisRequest $request)
    {
        $input = $request->all();

        $tesis = $this->tesisRepository->create($input);

        Flash::success('Tesis saved successfully.');

        return redirect(route('teses.index'));
    }

    /**
     * Display the specified Tesis.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $tesis = $this->tesisRepository->findWithoutFail($id);

        if (empty($tesis)) {
            Flash::error('Tesis not found');

            return redirect(route('teses.index'));
        }

        return view('teses.show')->with('tesis', $tesis);
    }

    /**
     * Show the form for editing the specified Tesis.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $tesis = $this->tesisRepository->findWithoutFail($id);

        if (empty($tesis)) {
            Flash::error('Tesis not found');

            return redirect(route('teses.index'));
        }

        return view('teses.edit')->with('tesis', $tesis);
    }

    /**
     * Update the specified Tesis in storage.
     *
     * @param  int              $id
     * @param UpdateTesisRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTesisRequest $request)
    {
        $tesis = $this->tesisRepository->findWithoutFail($id);

        if (empty($tesis)) {
            Flash::error('Tesis not found');

            return redirect(route('teses.index'));
        }

        $tesis = $this->tesisRepository->update($request->all(), $id);

        Flash::success('Tesis updated successfully.');

        return redirect(route('teses.index'));
    }

    /**
     * Remove the specified Tesis from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $tesis = $this->tesisRepository->findWithoutFail($id);

        if (empty($tesis)) {
            Flash::error('Tesis not found');

            return redirect(route('teses.index'));
        }

        $this->tesisRepository->delete($id);

        Flash::success('Tesis deleted successfully.');

        return redirect(route('teses.index'));
    }
}
