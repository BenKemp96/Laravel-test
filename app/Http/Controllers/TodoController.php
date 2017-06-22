<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Todo;

class TodoController extends Controller
{
	public function index()
	{
		$entries = Todo::all();
		return view('todo', ['entries' => $entries]);
	}

	public function create(Request $request)
	{
		if($request->isMethod('post')){
			$this->validate($request, [
                'description' => 'required'
            ]);
            $TodoEntry = new Todo;
            $TodoEntry->description = $request->input('description');
            $TodoEntry->save();
            return redirect('/');
        }
        return view('create');
	}

	public function edit($id, Request $request)
	{
		if($request->isMethod('post')){
			$this->validate($request, [
                'description' => 'required'
            ]);
            $TodoEntry = Todo::find($id);
            $TodoEntry->description = $request->input('description');
            $TodoEntry->save();
            return redirect('/');
        }
        $TodoEntry = Todo::find($id);
        return view('edit', ['TodoEntry' => $TodoEntry]);
	}

	public function delete($id)
	{
        $TodoEntry = Todo::find($id);
        $TodoEntry->delete();
        return redirect('/');
	}
}