<?php namespace LosCedros\Http\Controllers\API;

use LosCedros\Http\Requests;
use LosCedros\Libraries\Repositories\UbicacionesRepository;
use LosCedros\Models\Ubicaciones;
use Illuminate\Http\Request;
use Mitul\Controller\AppBaseController as AppBaseController;
use Response;

class UbicacionesAPIController extends AppBaseController
{
	/** @var  UbicacionesRepository */
	private $ubicacionesRepository;

	function __construct(UbicacionesRepository $ubicacionesRepo)
	{
		$this->ubicacionesRepository = $ubicacionesRepo;
	}

	/**
	 * Display a listing of the Ubicaciones.
	 * GET|HEAD /ubicaciones
	 *
	 * @return Response
	 */
	public function index()
	{
		$ubicaciones = $this->ubicacionesRepository->all();

		return $this->sendResponse($ubicaciones->toArray(), "Ubicaciones retrieved successfully");
	}

	/**
	 * Show the form for creating a new Ubicaciones.
	 * GET|HEAD /ubicaciones/create
	 *
	 * @return Response
	 */
	public function create()
	{
	}

	/**
	 * Store a newly created Ubicaciones in storage.
	 * POST /ubicaciones
	 *
	 * @param Request $request
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		if(sizeof(Ubicaciones::$rules) > 0)
			$this->validateRequestOrFail($request, Ubicaciones::$rules);

		$input = $request->all();

		$ubicaciones = $this->ubicacionesRepository->create($input);

		return $this->sendResponse($ubicaciones->toArray(), "Ubicaciones saved successfully");
	}

	/**
	 * Display the specified Ubicaciones.
	 * GET|HEAD /ubicaciones/{id}
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function show($id)
	{
		$ubicaciones = $this->ubicacionesRepository->apiFindOrFail($id);

		return $this->sendResponse($ubicaciones->toArray(), "Ubicaciones retrieved successfully");
	}

	/**
	 * Show the form for editing the specified Ubicaciones.
	 * GET|HEAD /ubicaciones/{id}/edit
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function edit($id)
	{
		// maybe, you can return a template for JS
//		Errors::throwHttpExceptionWithCode(Errors::EDITION_FORM_NOT_EXISTS, ['id' => $id], static::getHATEOAS(['%id' => $id]));
	}

	/**
	 * Update the specified Ubicaciones in storage.
	 * PUT/PATCH /ubicaciones/{id}
	 *
	 * @param  int              $id
	 * @param Request $request
	 *
	 * @return Response
	 */
	public function update($id, Request $request)
	{
		$input = $request->all();

		/** @var Ubicaciones $ubicaciones */
		$ubicaciones = $this->ubicacionesRepository->apiFindOrFail($id);

		$result = $this->ubicacionesRepository->updateRich($input, $id);

		$ubicaciones = $ubicaciones->fresh();

		return $this->sendResponse($ubicaciones->toArray(), "Ubicaciones updated successfully");
	}

	/**
	 * Remove the specified Ubicaciones from storage.
	 * DELETE /ubicaciones/{id}
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function destroy($id)
	{
		$this->ubicacionesRepository->apiDeleteOrFail($id);

		return $this->sendResponse($id, "Ubicaciones deleted successfully");
	}
}
