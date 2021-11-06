<?php

namespace App\Http\Controllers;

use App\Models\Vehicule;
use Illuminate\Http\Request;

class VehiculeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vehicules = Vehicule::all();
        return view('vehicule.index', compact('vehicules'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $vehicule = new Vehicule();
        return view('vehicule.create', compact('vehicule'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $vehicule = Vehicule::create($this->validator());

        $this->storeImage($vehicule);

        return redirect()->route('vehicule.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Vehicule $vehicule)
    {
        return view('vehicule.show' , compact('vehicule'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Vehicule $vehicule)
    {
        return view('vehicule.edit', compact('vehicule'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Vehicule $vehicule)
    {
        $vehicule->update($this->validator());

        $this->storeImage($vehicule);

        return redirect()->route('vehicule.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vehicule $vehicule)
    {
        //
        $vehicule->delete();

        return redirect()->route('vehicule.index');
    }

    private function validator(){

        return request()->validate([
            'name' => 'required|min:3',
            'marque' => 'required',
            'type' => 'required',
            'couleur' => 'required',
            'carburant'=>'required',
            'image' => 'sometimes|image|max:5000'
        ]);

    }
    private function storeImage(Vehicule $vehicule){

        if (request('image')) {
            $vehicule->update([
                'image'=> request('image')->store('avatars', 'public'),
            ]);
        }
    }
}
