<?php

namespace App\Http\Controllers\API;

use App\Models\book;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BookController extends Controller
{
    //
          public function index()
    {
        //
        $book = book::all();
        return response()->json($book, 200);
        }
        public function store(Request $request)
    {
        //

                   request()->validate([
                      'title'=>'required',
                              
                             ]);
    
    
    
    
                     $book =  book::create([
             'title'=>request('title'),
                       
              ]);
    

              return response()->json($book, 200);
    
    
     }
    public function update(book $book)
    {
        //
      $succesful = book::find(1)->update();
        //$succesful=book::where('id', 1)->update();
    //   $successful =  $book->update([
    //         $book->title,
            
    //     ]);
        return response()->json(['success'=>$succesful]);
        
    
    
        

        }
        public function destroy(book $book)
        {
            //
            $succesful =book::find(1)->delete();
            
                // $successful = $book->delete();
            
                return response()->json(['success'=>$succesful]);
    }
    


    }
      

