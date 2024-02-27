<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComputerController extends Controller
{
    private static function getData(){
        return [
            ["id" => 1, "brand" => "Dell","origin" => "koria"],
            ["id" => 2,"brand" => "hp","origin" => "usa"],
        ["id" => 3,"brand" => "siemens","origin" => "germany"]
        ];
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('computers.index',[
            'computers' => self::getData(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $computers =self::getData();
        $index = array_search($id,array_column($computers,'id'));
        return view('computers.show',['computer' => $computers[$index]]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
