<?php

namespace App\Http\Controllers;
use App\Author;
use App\Event;
use App\Period;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    
    public function authorSearch(Request $request){

        $search = $request->table_search;

        if (is_null($search))
        {
           //return view('admin.author.index');		   
           return 0 ;

        }else{
            $posts = Author::where('name','LIKE',"%{$search}%")
                           ->get();

            return view('admin.author.indexSearch',compact('posts'));
        }
    

    }


    public function eventSearch(Request $request){

        $search = $request->table_search;
        
        if (is_null($search))
        {
           //return view('admin.author.index');		   
           return 0 ;

        }else{
            $events = Event::where('date', "LIKE", "%{$search}%")
                           ->get();

            return view('admin.event.indexSearch',compact('events'));
        }
    

    }


    public function periodSearch(Request $request){

        $search = $request->table_search;
        
        if (is_null($search))
        {
           //return view('admin.author.index');		   
           return 0 ;

        }else{
            $periods = Period::where('name', "LIKE", "%{$search}%")
                           ->get();

            return view('admin.period.indexSearch',compact('periods'));
        }
    

    }

}