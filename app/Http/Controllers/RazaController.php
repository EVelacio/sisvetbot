<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateRazaRequest;
use App\Http\Requests\UpdateRazaRequest;
use App\Repositories\RazaRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class RazaController extends AppBaseController
{
    /** @var  RazaRepository */
    private $razaRepository;

    public function __construct(RazaRepository $razaRepo)
    {
        $this->razaRepository = $razaRepo;
    }

    /**
     * Display a listing of the Raza.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->razaRepository->pushCriteria(new RequestCriteria($request));
        $razas = $this->razaRepository->all();

        return view('razas.index')
            ->with('razas', $razas);
    }

    /**
     * Show the form for creating a new Raza.
     *
     * @return Response
     */
    public function create()
    {
        return view('razas.create');
    }

    /**
     * Store a newly created Raza in storage.
     *
     * @param CreateRazaRequest $request
     *
     * @return Response
     */
    public function store(CreateRazaRequest $request)
    {
        $input = $request->all();

        $raza = $this->razaRepository->create($input);

        Flash::success('Raza saved successfully.');

        return redirect(route('razas.index'));
    }

    /**
     * Display the specified Raza.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $raza = $this->razaRepository->findWithoutFail($id);

        if (empty($raza)) {
            Flash::error('Raza not found');

            return redirect(route('razas.index'));
        }

        return view('razas.show')->with('raza', $raza);
    }

    /**
     * Show the form for editing the specified Raza.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $raza = $this->razaRepository->findWithoutFail($id);

        if (empty($raza)) {
            Flash::error('Raza not found');

            return redirect(route('razas.index'));
        }

        return view('razas.edit')->with('raza', $raza);
    }

    /**
     * Update the specified Raza in storage.
     *
     * @param  int              $id
     * @param UpdateRazaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateRazaRequest $request)
    {
        $raza = $this->razaRepository->findWithoutFail($id);

        if (empty($raza)) {
            Flash::error('Raza not found');

            return redirect(route('razas.index'));
        }

        $raza = $this->razaRepository->update($request->all(), $id);

        Flash::success('Raza updated successfully.');

        return redirect(route('razas.index'));
    }

    /**
     * Remove the specified Raza from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $raza = $this->razaRepository->findWithoutFail($id);

        if (empty($raza)) {
            Flash::error('Raza not found');

            return redirect(route('razas.index'));
        }

        $this->razaRepository->delete($id);

        Flash::success('Raza deleted successfully.');

        return redirect(route('razas.index'));
    }
}
