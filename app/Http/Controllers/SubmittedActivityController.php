<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SubmittedActivity;


class SubmittedActivityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $submittedactivities = SubmittedActivity::all(); 

        // ddd($submittedactivities);

        return view('submittedactivities.index', [
            'submitted' => $submittedactivities
        ]);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $submittedactivity = SubmittedActivity::find($id); 

        // ddd($submittedactivity);

        return view('submittedactivities.show', [
            'submitted' => $submittedactivity
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('submittedactivities.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // ddd($request->submittedactivity);
        
        // FOR VALIDATION
        $request->validate([
        'subjects' => 'required',
        'title' => 'required',
        'students_name' => 'required',
        'activity_text' => 'required'
        ]);

        // TO STORE THE DATA IN THE DATABASE
        SubmittedActivity::create([
            'subjects' => $request->subjects,
            'title' => $request->title,
            'students_name' => $request->students_name,
            'activity_text' => $request->activity_text
        ]);


         // <!-- DISPLAYING THE SUCCESS MESSAGE RIGHT AFTER THE SUBMISSION -->
         return back()->with('success', 'The Submission is success!');
        // ddd($request->all());
    }

    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $submitted = SubmittedActivity::find($id);

        return view('submittedactivities.edit', [
            'submitted' => $submitted
        ]);

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

        $request->validate([
            'subjects' => 'required',
            'title' => 'required',
            'students_name' => 'required',
            'activity_text' => 'required'
            ]);
            
        SubmittedActivity::where('id', $id)
        ->update([
            'subjects' => $request->subjects,
            'title' => $request->title,
            'students_name' => $request->students_name,
            'activity_text' => $request->activity_text
        ]);

        return back()->with('success', 'Edit Successful!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        ddd('delete');
    }
}