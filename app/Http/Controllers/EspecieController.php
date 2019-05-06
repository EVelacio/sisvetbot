<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateEspecieRequest;
use App\Http\Requests\UpdateEspecieRequest;
use App\Repositories\EspecieRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class EspecieController extends AppBaseController
{
    /** @var  EspecieRepository */
    private $especieRepository;

    public function __construct(EspecieRepository $especieRepo)
    {
        $this->especieRepository = $especieRepo;
    }

    /**
     * Display a listing of the Especie.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->especieRepository->pushCriteria(new RequestCriteria($request));
        $especies = $this->especieRepository->all();

        return view('especies.index')
            ->with('especies', $especies);
    }

    /**
     * Show the form for creating a new Especie.
     *
     * @return Response
     */
    public function create()
    {
        return view('especies.create');
    }

    /**
     * Store a newly created Especie in storage.
     *
     * @param CreateEspecieRequest $request
     *
     * @return Response
     */
    public function store(CreateEspecieRequest $request)
    {
        $input = $request->all();

        $especie = $this->especieRepository->create($input);

        Flash::success('Especie saved successfully.');

        return redirect(route('especies.index'));
    }

    /**
     * Display the specified Especie.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $especie = $this->especieRepository->findWithoutFail($id);

        if (empty($especie)) {
            Flash::error('Especie not found');

            return redirect(route('especies.index'));
        }

        return view('especies.show')->with('especie', $especie);
    }

    /**
     * Show the form for editing the specified Especie.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $especie = $this->especieRepository->findWithoutFail($id);

        if (empty($especie)) {
            Flash::error('Especie not found');

            return redirect(route('especies.index'));
        }

        return view('especies.edit')->with('especie', $especie);
    }

    /**
     * Update the specified Especie in storage.
     *
     * @param  int              $id
     * @param UpdateEspecieRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateEspecieRequest $request)
    {
        $especie = $this->especieRepository->findWithoutFail($id);

        if (empty($especie)) {
            Flash::error('Especie not found');

            return redirect(route('especies.index'));
        }

        $especie = $this->especieRepository->update($request->all(), $id);

        Flash::success('Especie updated successfully.');

        return redirect(route('especies.index'));
    }

    /**
     * Remove the specified Especie from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $especie = $this->especieRepository->findWithoutFail($id);

        if (empty($especie)) {
            Flash::error('Especie not found');

            return redirect(route('especies.index'));
        }

        $this->especieRepository->delete($id);

        Flash::success('Especie deleted successfully.');

        return redirect(route('especies.index'));
    }
}
