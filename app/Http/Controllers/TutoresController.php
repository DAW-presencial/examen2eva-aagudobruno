<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tutor;

class TutoresController extends Controller
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
        return view('main');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'companyName'=>['required','max:20'],
            'docType'=>['required','max:30'],
            'dni'=>['required','regex:/^[0-9]{8}[A-Z]$/','unique:tutors,dni'],
            'tutorName'=>['required','max:20'],
            'tutorSurname1'=>['required','max:30'],
            'tutorSurname1'=>['required','max:30','nullable'],
            'dniCountry'=>['required','max:20'],
            'province'=>['required','max:20'],
            'municipi'=>['required','max:20'],
            'status'=>'required',
            'tlf'=>['required','numeric','digits:9'],
            'email'=>['required','email'],
        ]);
        $model = new Tutor ([
            'companyName' => request()->get('companyName'),
            'docType' => request()->get('docType'),
            'dni' => request()->get('dni'),
            'tutorName' => request()->get('tutorName'),
            'tutorSurname1' => request()->get('tutorSurname1'),
            'tutorSurname2' => request()->get('tutorSurname2'),
            'dniCountry' => request()->get('dniCountry'),
            'province' => request()->get('province'),
            'municipi' => request()->get('municipi'),
            'status' => request()->get('status'),
            'tlf' => request()->get('tlf'),
            'email' => request()->get('email'),
        ]);
        $model->save();
        return redirect('/')->with('success', 'Contact updated!');
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
