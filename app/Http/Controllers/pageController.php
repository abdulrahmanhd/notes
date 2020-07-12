<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\note;
use App\page;
class pageController extends Controller
{
    //
    public function pageshow(){
    	$allpages= DB::table('pages')->get();
    	return view('pages.pageshow', compact('allpages'));
    }
    ////////////////////////
    public function pageone(page $page){
        
        return view('pages.onepage', compact('page'));
    }

//////////////////////////

    public function store( Request $request){
    	$page = new page;
    	$page->title = $request->ftitle;
    	$page->save();

    	return back();
    }
    public function delete(page $page)
    {
        if(count($page->notes)){
            return view('pages.deleteall',compact('page'));
        }else{
        $page->delete();
        return back();            
        }
    }
    public function deleteall(page $page)
    {
        $page->delete();
        $page->notes()->delete();
        return redirect('../../pages');            
        
    }





/////////////////////////////////////////////
}
