<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;

use Illuminate\Http\Request;
use App\Models\Activity;

class ActivityController extends Controller
{
    
    public function index(){
        // ddd('this is activities');

        $activities = Activity::all();

        // ddd($activities);

        return view('activities.index', [
            'activities' => $activities
        ]); 
        
    }

    public function show($id){
        
        $activity = Activity::find($id);
        
        return view('activities.show', [
            'activity' => $activity
        ]);
        
        // ddd($activity);
    }
    
    // FOR INSERT
    public function create(){
        // ddd('this  activities');

        return view('activities.create');
        
    }

    public function store(Request $request){

        // ddd($request->activity);

        // VALIDATION - after this go to the form and insert the following error message example in the form of this activity.
        $request->validate([
            'title' => 'required',
            'score' => 'required',
            'descriptions' => 'required'
        ]);

        // SAVING THE DATA FROM THE INPUT TO OUR DATABASE
        Activity::create([
            'title' => $request->title,
            'score' => $request->score,
            'descriptions' => $request->descriptions
        ]);

        // <!-- DISPLAYING THE SUCCESS MESSAGE RIGHT AFTER THE SUBMISSION -->
        return back()->with('success', 'The Submission is success!');

        // ddd($request->all());
    // ddd($request->title);

    }

   

    // DISPLAY IN EDIT FORM A PARTICULAR SERVICE
    public function edit($id){
        
        // ddd('this is the edit form');
        $activity = Activity::find($id);

        return view('activities.edit', [
            'activity' => $activity
        ]);
        
        
    }

    public function update($id, Request $request){
        // ddd('this is update');

        $request->validate([
            'title' => 'required',
            'score' => 'required',
            'descriptions' => 'required'
        ]);

        Activity::where('id', $id)
        ->update([
            'title' => $request->title,
            'score' => $request->score,
            'descriptions' => $request->descriptions
        ]);

        return back()->with('success', 'Edit Success!');

    }

    // DESTROY OR DELETE
    public function destroy($id){
        
    }
    
}