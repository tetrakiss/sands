<?php

namespace App\Http\Controllers;

use App\Models\Bayer;
use Illuminate\Http\Request;

class BayerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return Bayer::latest();
 
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
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required'
           
        ]);
       // Bayer::create($request->post());
       // return $request->post();
        try{
            Bayer::create($request->post());
            return response()->json([
                'message'=>'Новый баер успешно добавлен'
            ]);
        }catch(\Exception $e){
            \Log::error($e->getMessage());
            return response()->json([
                'error'=>'Произошла ошибка при добавлении'
            ],500);
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Bayer  $bayer
     * @return \Illuminate\Http\Response
     */
    public function show(Bayer $bayer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Bayer  $bayer
     * @return \Illuminate\Http\Response
     */
    public function edit(Bayer $bayer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Bayer  $bayer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bayer $bayer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bayer  $bayer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bayer $bayer)
    {
        //
    }
}
