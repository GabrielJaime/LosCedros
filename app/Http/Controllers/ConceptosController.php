<?php namespace LosCedros\Http\Controllers;

use LosCedros\Http\Requests;
use LosCedros\Http\Requests\CreateConceptosRequest;
use LosCedros\Http\Requests\UpdateConceptosRequest;
use LosCedros\Libraries\Repositories\ConceptosRepository;
use Flash;
use Mitul\Controller\AppBaseController as AppBaseController;
use Response;

class ConceptosController extends AppBaseController
{

	/** @var  ConceptosRepository */
	private $conceptosRepository;

	function __construct(ConceptosRepository $conceptosRepo)
	{
		$this->middleware('auth');

		$this->conceptosRepository = $conceptosRepo;
	}

	/**
	 * Display a listing of the Conceptos.
	 *
	 * @return Response
	 */
	public function index()
	{
		$conceptos = $this->conceptosRepository->paginate(10);

		return view('conceptos.index')
			->with('conceptos', $conceptos);
	}

	/**
	 * Show the form for creating a new Conceptos.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('conceptos.create');
	}

	/**
	 * Store a newly created Conceptos in storage.
	 *
	 * @param CreateConceptosRequest $request
	 *
	 * @return Response
	 */
	public function store(CreateConceptosRequest $request)
	{
		$input = $request->all();

		$conceptos = $this->conceptosRepository->create($input);

		Flash::success('Conceptos saved successfully.');

		return redirect(route('conceptos.index'));
	}

	/**
	 * Display the specified Conceptos.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function show($id)
	{
		$conceptos = $this->conceptosRepository->find($id);

		if(empty($conceptos))
		{
			Flash::error('Conceptos not found');

			return redirect(route('conceptos.index'));
		}

		return view('conceptos.show')->with('conceptos', $conceptos);
	}

	/**
	 * Show the form for editing the specified Conceptos.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function edit($id)
	{
		$conceptos = $this->conceptosRepository->find($id);

		if(empty($conceptos))
		{
			Flash::error('Conceptos not found');

			return redirect(route('conceptos.index'));
		}

		return view('conceptos.edit')->with('conceptos', $conceptos);
	}

	/**
	 * Update the specified Conceptos in storage.
	 *
	 * @param  int              $id
	 * @param UpdateConceptosRequest $request
	 *
	 * @return Response
	 */
	public function update($id, UpdateConceptosRequest $request)
	{
		$conceptos = $this->conceptosRepository->find($id);

		if(empty($conceptos))
		{
			Flash::error('Conceptos not found');

			return redirect(route('conceptos.index'));
		}

		$this->conceptosRepository->updateRich($request->all(), $id);

		Flash::success('Conceptos updated successfully.');

		return redirect(route('conceptos.index'));
	}

	/**
	 * Remove the specified Conceptos from storage.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function destroy($id)
	{
		$conceptos = $this->conceptosRepository->find($id);

		if(empty($conceptos))
		{
			Flash::error('Conceptos not found');

			return redirect(route('conceptos.index'));
		}

		$this->conceptosRepository->delete($id);

		Flash::success('Conceptos deleted successfully.');

		return redirect(route('conceptos.index'));
	}
}
