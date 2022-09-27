<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Event;


class CalenderController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function index(Request $request)
    {
   
        if($request->ajax()) {
        
             $data = Event::whereDate('start', '>=', $request->start)
                       ->whereDate('end',   '<=', $request->end)
                       ->get(['id', 'title','comments', 'start', 'end']);
   
             return response()->json($data);
        }
   
        return view('calender');
    }
  
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function ajax(Request $request)
    {
  
        switch ($request->type) {
           case 'add':
              $event = Event::create([
                  'title' => $request->title,
                  'comments' => $request->comments,
                  'start' => $request->start,
                  'end' => $request->end,
              ]);
  
              return response()->json($event);
             break;
   
           case 'update':
              $event = Event::find($request->id)->update([
                  'title' => $request->title,
                  'comments' => $request->comments,
                  'start' => $request->start,
                  'end' => $request->end,
              ]);
  
              return response()->json($event);
             break;
   
           case 'delete':
              $event = Event::find($request->id)->delete();
   
              return response()->json($event);
             break;
              
           default:
             # code...
             break;
        }
    }

}
