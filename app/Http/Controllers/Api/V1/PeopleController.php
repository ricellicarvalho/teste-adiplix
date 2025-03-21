<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\People;
use Illuminate\Http\Request;
use App\Http\Requests\StorePeopleRequest; 


class PeopleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //return People::paginate(5); // 5 por página   
        return People::all();
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
    public function store(StorePeopleRequest $request)
    {
        $people = People::create($request->validated());
        return response()->json($people, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(People $people)
    {
        return response()->json($people);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(People $people)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StorePeopleRequest $request, People $people)
    {
        $people->update($request->validated());
        return response()->json($people);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(People $people)
    {
        $people->delete();
        return response()->json(['message' => 'A Pessoa foi excluídaaa com sucesso!']);
    }
}
