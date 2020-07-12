<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\page;
use App\note;
use DB;
class noteController extends Controller
{
    //


    public function store( Request $request, page $page){
    	$this->validate($request,[
    		'ftext'=>'required |min:5'
    		]);
    	$note = new note;
    	$note->text = $request->ftext;
    	$page->notes()->save($note);

    	return back();
    }

    public function edit( note $note){
    	return view('notes.edit',compact('note'));
    }
    
    public function update( Request $request, note $note){

    	$note->update($request->all());
    	return redirect('pages/'. $note->page_id);
    }
    public function delete(note $note)
    {
    	$note->delete();
    	return back();
    }
}
