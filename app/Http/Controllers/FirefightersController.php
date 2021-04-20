<?php

namespace App\Http\Controllers;

use App\Http\Requests\FirefighterStoreRequest;
use App\Models\Firefighter;
use Illuminate\Http\Request;

class FirefightersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $firefighters = Firefighter::all();
        return view('dashboard.firefighter.index')->with('firefighters', $firefighters);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FirefighterStoreRequest $request)
    {

        $firefighter = new Firefighter();

        $firefighter->name = $request->name;
        $firefighter->middle_name = $request->middle_name;
        $firefighter->surname = $request->surname;
        $firefighter->birth_date = $request->birth_date;
        $firefighter->user_id = $request->user_id;

        $firefighter->save();

        return redirect()->route('firefighter.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
