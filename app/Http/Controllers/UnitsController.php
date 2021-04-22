<?php

namespace App\Http\Controllers;

use App\Http\Requests\UnitStoreRequest;
use App\Models\Unit;
use App\Models\User;
use Illuminate\Http\Request;

class UnitsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.unit.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UnitStoreRequest $request)
    {
        $user = User::find($request->user_id);

        $user->unit()->create([
            'name' => "Ochotnicza Straż Pożarna " . $request->city,
            'city' => $request->city,
            'street' => $request->street,
            'number' => $request->number,
            'postcode' => $request->postcode,
            'nip' => $request->nip,
            'regon' => $request->regon
        ]);

        return redirect()->route('dashboard');
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
        return view('dashboard.unit.edit', ['unit' => Unit::find($id)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UnitStoreRequest $request, $id)
    {
        $unit = Unit::find($id);

        $unit->name = $request->name;
        $unit->city = $request->city;
        $unit->street = $request->street;
        $unit->number = $request->number;
        $unit->postcode = $request->postcode;
        $unit->nip = $request->nip;
        $unit->regon = $request->regon;

        $unit->save();

        return redirect()->route('dashboard');
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
