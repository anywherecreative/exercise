<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exercise;
use Illuminate\Support\Facades\Session;


class ExerciseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('exercises.index')->withExercises(Exercise::where('enabled',true)->get());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('exercises.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'name'        => 'required',
        ];

        $this->validate($request, $rules);
        try {
            $exercise = new Exercise();
            $exercise->name = $request->name;
            $exercise->save();
            Session::flash( 'message', __( 'Exercise Saved Successfully!' ) );
            Session::flash( 'alert-class', 'alert-success' ); // Common: values: .alert-success, .alert-danger | Other Possible:
            return Redirect(route('exercises.index'));
        }
        catch(Exception $e) {
            Log::critical( __METHOD__ . ' | ' . $e->getMessage() );
            Session::flash('message', __('Unable to save exercise!'));
            Session::flash('alert-class', 'alert-danger');
            return redirect()->back()->withInput($request);
        }

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
