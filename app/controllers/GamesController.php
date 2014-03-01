<?php

class GamesController extends BaseController {

	protected $game;

	public function __construct(Game $game)
	{
		$this->game = $game;
	}
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$games = Game::all();
		return View::make('games.index', compact('games'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('games.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		
		if ( !$this->game->fill($input)->isValid() )
		{
			return Redirect::back()->withInput()->withErrors($this->game->errors);
		}

		$this->game->save();

		return Redirect::action('games.index');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */

	public function show($id)
	{

		return View::make('games.delete')->with('game', $this->game->find($id));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$game = Game::find($id);
		return View::make('games.edit', compact('game'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$currentGame = Game::find($id);
		$currentGame->title = Input::get('title');
		$currentGame->publisher = Input::get('publisher');
		$currentGame->complete = Input::has('complete');
		$currentGame->save();

		return Redirect::action('games.index');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$game = Game::findOrFail($id);
		$game->delete();

		return Redirect::action('games.index');
	}

}
