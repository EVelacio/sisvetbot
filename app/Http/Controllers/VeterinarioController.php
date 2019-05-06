<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateVeterinarioRequest;
use App\Http\Requests\UpdateVeterinarioRequest;
use App\Repositories\VeterinarioRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class VeterinarioController extends AppBaseController
{
    /** @var  VeterinarioRepository */
    private $veterinarioRepository;

    public function __construct(VeterinarioRepository $veterinarioRepo)
    {
        $this->veterinarioRepository = $veterinarioRepo;
    }

    /**
     * Display a listing of the Veterinario.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->veterinarioRepository->pushCriteria(new RequestCriteria($request));
        $veterinarios = $this->veterinarioRepository->all();

        return view('veterinarios.index')
            ->with('veterinarios', $veterinarios);
    }

    /**
     * Show the form for creating a new Veterinario.
     *
     * @return Response
     */
    public function create()
    {
        return view('veterinarios.create');
    }

    /**
     * Store a newly created Veterinario in storage.
     *
     * @param CreateVeterinarioRequest $request
     *
     * @return Response
     */
    public function store(CreateVeterinarioRequest $request)
    {
        $input = $request->all();

        $veterinario = $this->veterinarioRepository->create($input);

        Flash::success('Veterinario saved successfully.');

        return redirect(route('veterinarios.index'));
    }

    /**
     * Display the specified Veterinario.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $veterinario = $this->veterinarioRepository->findWithoutFail($id);

        if (empty($veterinario)) {
            Flash::error('Veterinario not found');

            return redirect(route('veterinarios.index'));
        }

        return view('veterinarios.show')->with('veterinario', $veterinario);
    }

    /**
     * Show the form for editing the specified Veterinario.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $veterinario = $this->veterinarioRepository->findWithoutFail($id);

        if (empty($veterinario)) {
            Flash::error('Veterinario not found');

            return redirect(route('veterinarios.index'));
        }

        return view('veterinarios.edit')->with('veterinario', $veterinario);
    }

    /**
     * Update the specified Veterinario in storage.
     *
     * @param  int              $id
     * @param UpdateVeterinarioRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateVeterinarioRequest $request)
    {
        $veterinario = $this->veterinarioRepository->findWithoutFail($id);

        if (empty($veterinario)) {
            Flash::error('Veterinario not found');

            return redirect(route('veterinarios.index'));
        }

        $veterinario = $this->veterinarioRepository->update($request->all(), $id);

        Flash::success('Veterinario updated successfully.');

        return redirect(route('veterinarios.index'));
    }

    /**
     * Remove the specified Veterinario from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $veterinario = $this->veterinarioRepository->findWithoutFail($id);

        if (empty($veterinario)) {
            Flash::error('Veterinario not found');

            return redirect(route('veterinarios.index'));
        }

        $this->veterinarioRepository->delete($id);

        Flash::success('Veterinario deleted successfully.');

        return redirect(route('veterinarios.index'));
    }
}
