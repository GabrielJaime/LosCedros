<?php namespace LosCedros\Http\Controllers;

use LosCedros\Http\Requests;
use LosCedros\Http\Requests\CreateUbicacionesRequest;
use LosCedros\Http\Requests\UpdateUbicacionesRequest;
use LosCedros\Libraries\Repositories\UbicacionesRepository;
use Flash;
use Mitul\Controller\AppBaseController as AppBaseController;
use Response;

class UbicacionesController extends AppBaseController
{

	/** @var  UbicacionesRepository */
	private $ubicacionesRepository;

	function __construct(UbicacionesRepository $ubicacionesRepo)
	{
		$this->middleware('auth');

		$this->ubicacionesRepository = $ubicacionesRepo;
	}

	/**
	 * Display a listing of the Ubicaciones.
	 *
	 * @return Response
	 */
	public function index()
	{
		$ubicaciones = $this->ubicacionesRepository->paginate(10);

		return view('ubicaciones.index')
			->with('ubicaciones', $ubicaciones);
	}

	/**
	 * Show the form for creating a new Ubicaciones.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('ubicaciones.create');
	}

	/**
	 * Store a newly created Ubicaciones in storage.
	 *
	 * @param CreateUbicacionesRequest $request
	 *
	 * @return Response
	 */
	public function store(CreateUbicacionesRequest $request)
	{
		$input = $request->all();

		$ubicaciones = $this->ubicacionesRepository->create($input);

		Flash::success('Ubicaciones saved successfully.');

		return redirect(route('ubicaciones.index'));
	}

	/**
	 * Display the specified Ubicaciones.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function show($id)
	{
		$ubicaciones = $this->ubicacionesRepository->find($id);

		if(empty($ubicaciones))
		{
			Flash::error('Ubicaciones not found');

			return redirect(route('ubicaciones.index'));
		}

		return view('ubicaciones.show')->with('ubicaciones', $ubicaciones);
	}

	/**
	 * Show the form for editing the specified Ubicaciones.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function edit($id)
	{
		$ubicaciones = $this->ubicacionesRepository->find($id);

		if(empty($ubicaciones))
		{
			Flash::error('Ubicaciones not found');

			return redirect(route('ubicaciones.index'));
		}

		return view('ubicaciones.edit')->with('ubicaciones', $ubicaciones);
	}

	/**
	 * Update the specified Ubicaciones in storage.
	 *
	 * @param  int              $id
	 * @param UpdateUbicacionesRequest $request
	 *
	 * @return Response
	 */
	public function update($id, UpdateUbicacionesRequest $request)
	{
		$ubicaciones = $this->ubicacionesRepository->find($id);

		if(empty($ubicaciones))
		{
			Flash::error('Ubicaciones not found');

			return redirect(route('ubicaciones.index'));
		}

		$this->ubicacionesRepository->updateRich($request->all(), $id);

		Flash::success('Ubicaciones updated successfully.');

		return redirect(route('ubicaciones.index'));
	}

	/**
	 * Remove the specified Ubicaciones from storage.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function destroy($id)
	{
		$ubicaciones = $this->ubicacionesRepository->find($id);

		if(empty($ubicaciones))
		{
			Flash::error('Ubicaciones not found');

			return redirect(route('ubicaciones.index'));
		}

		$this->ubicacionesRepository->delete($id);

		Flash::success('Ubicaciones deleted successfully.');

		return redirect(route('ubicaciones.index'));
	}
}
