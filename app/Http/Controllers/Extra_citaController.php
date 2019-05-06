<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateExtra_citaRequest;
use App\Http\Requests\UpdateExtra_citaRequest;
use App\Repositories\Extra_citaRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class Extra_citaController extends AppBaseController
{
    /** @var  Extra_citaRepository */
    private $extraCitaRepository;

    public function __construct(Extra_citaRepository $extraCitaRepo)
    {
        $this->extraCitaRepository = $extraCitaRepo;
    }

    /**
     * Display a listing of the Extra_cita.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->extraCitaRepository->pushCriteria(new RequestCriteria($request));
        $extraCitas = $this->extraCitaRepository->all();

        return view('extra_citas.index')
            ->with('extraCitas', $extraCitas);
    }

    /**
     * Show the form for creating a new Extra_cita.
     *
     * @return Response
     */
    public function create()
    {
        return view('extra_citas.create');
    }

    /**
     * Store a newly created Extra_cita in storage.
     *
     * @param CreateExtra_citaRequest $request
     *
     * @return Response
     */
    public function store(CreateExtra_citaRequest $request)
    {
        $input = $request->all();

        $extraCita = $this->extraCitaRepository->create($input);

        Flash::success('Extra Cita saved successfully.');

        return redirect(route('extraCitas.index'));
    }

    /**
     * Display the specified Extra_cita.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $extraCita = $this->extraCitaRepository->findWithoutFail($id);

        if (empty($extraCita)) {
            Flash::error('Extra Cita not found');

            return redirect(route('extraCitas.index'));
        }

        return view('extra_citas.show')->with('extraCita', $extraCita);
    }

    /**
     * Show the form for editing the specified Extra_cita.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $extraCita = $this->extraCitaRepository->findWithoutFail($id);

        if (empty($extraCita)) {
            Flash::error('Extra Cita not found');

            return redirect(route('extraCitas.index'));
        }

        return view('extra_citas.edit')->with('extraCita', $extraCita);
    }

    /**
     * Update the specified Extra_cita in storage.
     *
     * @param  int              $id
     * @param UpdateExtra_citaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateExtra_citaRequest $request)
    {
        $extraCita = $this->extraCitaRepository->findWithoutFail($id);

        if (empty($extraCita)) {
            Flash::error('Extra Cita not found');

            return redirect(route('extraCitas.index'));
        }

        $extraCita = $this->extraCitaRepository->update($request->all(), $id);

        Flash::success('Extra Cita updated successfully.');

        return redirect(route('extraCitas.index'));
    }

    /**
     * Remove the specified Extra_cita from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $extraCita = $this->extraCitaRepository->findWithoutFail($id);

        if (empty($extraCita)) {
            Flash::error('Extra Cita not found');

            return redirect(route('extraCitas.index'));
        }

        $this->extraCitaRepository->delete($id);

        Flash::success('Extra Cita deleted successfully.');

        return redirect(route('extraCitas.index'));
    }
}
