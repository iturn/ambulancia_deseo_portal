<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Whish;

class WhishController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('whishes.index', [
            'whishes' => Whish::all()
        ]);
    }

    public function show(int $id)
    {
        return view('whishes.show', [
            'whish' => Whish::find($id)
        ]);
    }

    public function create()
    {
        return view('whishes.create', [
            'whish' => new Whish
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'description' => 'required|string'
        ]);

        Whish::create($this->getSafaParams($request->all()));

        return back();
    }

    public function update(int $id, Request $request)
    {
        $request->validate([
            'description' => 'required|string'
        ]);

        $wish = Whish::find($id);

        $wish->fill($this->getSafaParams($request->all()));

        $wish->save();

        return back();
    }

    private function getSafaParams($params)
    {

        return array_only($params, [
            'description',
        ]);
    }
}
