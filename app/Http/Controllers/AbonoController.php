<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateAbonoRequest;
use App\Http\Requests\UpdateAbonoRequest;
use App\Repositories\AbonoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class AbonoController extends AppBaseController
{
    /** @var  AbonoRepository */
    private $abonoRepository;

    public function __construct(AbonoRepository $abonoRepo)
    {
        $this->abonoRepository = $abonoRepo;
    }

    /**
     * Display a listing of the Abono.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->abonoRepository->pushCriteria(new RequestCriteria($request));
        $abonos = $this->abonoRepository->all();

        return view('abonos.index')
            ->with('abonos', $abonos);
    }

    /**
     * Show the form for creating a new Abono.
     *
     * @return Response
     */
    public function create()
    {
        return view('abonos.create');
    }

    /**
     * Store a newly created Abono in storage.
     *
     * @param CreateAbonoRequest $request
     *
     * @return Response
     */
    public function store(CreateAbonoRequest $request)
    {
        $input = $request->all();

        $abono = $this->abonoRepository->create($input);

        Flash::success('Abono saved successfully.');

        return redirect(route('abonos.index'));
    }

    /**
     * Display the specified Abono.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $abono = $this->abonoRepository->findWithoutFail($id);

        if (empty($abono)) {
            Flash::error('Abono not found');

            return redirect(route('abonos.index'));
        }

        return view('abonos.show')->with('abono', $abono);
    }

    /**
     * Show the form for editing the specified Abono.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $abono = $this->abonoRepository->findWithoutFail($id);

        if (empty($abono)) {
            Flash::error('Abono not found');

            return redirect(route('abonos.index'));
        }

        return view('abonos.edit')->with('abono', $abono);
    }

    /**
     * Update the specified Abono in storage.
     *
     * @param  int              $id
     * @param UpdateAbonoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateAbonoRequest $request)
    {
        $abono = $this->abonoRepository->findWithoutFail($id);

        if (empty($abono)) {
            Flash::error('Abono not found');

            return redirect(route('abonos.index'));
        }

        $abono = $this->abonoRepository->update($request->all(), $id);

        Flash::success('Abono updated successfully.');

        return redirect(route('abonos.index'));
    }

    /**
     * Remove the specified Abono from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $abono = $this->abonoRepository->findWithoutFail($id);

        if (empty($abono)) {
            Flash::error('Abono not found');

            return redirect(route('abonos.index'));
        }

        $this->abonoRepository->delete($id);

        Flash::success('Abono deleted successfully.');

        return redirect(route('abonos.index'));
    }
}
