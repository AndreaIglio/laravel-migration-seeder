<?php

namespace App\Http\Controllers;

use App\ClassRooms;
use Illuminate\Http\Request;

class ClassRoomsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $classrooms = ClassRooms::all();
        return view('class_rooms.index',compact('classrooms'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ClassRooms  $classRooms
     * @return \Illuminate\Http\Response
     */
    public function show(ClassRooms $classRooms)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ClassRooms  $classRooms
     * @return \Illuminate\Http\Response
     */
    public function edit(ClassRooms $classRooms)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ClassRooms  $classRooms
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ClassRooms $classRooms)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ClassRooms  $classRooms
     * @return \Illuminate\Http\Response
     */
    public function destroy(ClassRooms $classRooms)
    {
        //
    }
}
