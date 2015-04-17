<?php

class Controller_Home extends Controller
{

	/**
	 * The basic welcome message
	 *
	 * @access  public
	 * @return  Response
	 */
	public function action_index()
	{
		return Response::forge(View::forge('index'));
	}

	public function action_check()
	{
		$data = Input::post();

		// Debug::dump($data);exit();
		// Invited::open($request->all())
		//  	->save();

		return Response::forge(View::forge('success', $data));
	}

	public function action_404()
	{
		return Response::forge(View::forge('404.php'));
	}
}
