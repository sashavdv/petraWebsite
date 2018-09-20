<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AdminEventController extends Controller
{
    public function index(){
       /* if (!Auth::check()) {
            return redirect('login');
        }
*/
       return view('admin/events');
    }
    public function addEvent(Request $request){
        /*$table->increments('id');
        $table->dateTime('date');
        $table->text('title');
        $table->text('description_nl');
        $table->text('description_en');
        $table->double('price')->nullable();
        */
        if($request->post('status') == 'drop'){
            return redirect('admin/events');
        }else{
            if( $request->post('price')){
                Event::insert([
                    'date' =>  $request->post('date'),
                    'title' => $request->post('title'),
                    'description_nl' => $request->post('description_nl'),
                    'description_fr' => $request->post('description_fr'),
                ]);

                return redirect('/admin/events');
            }else{
                Event::insert([
                    'date' =>  $request->post('date'),
                    'title' => $request->post('title'),
                    'description_nl' => $request->post('description_nl'),
                    'description_fr' => $request->post('description_fr'),
                    'price' => $request->post('price'),
                ]);

                return redirect('admin/events');
            }
        }

    }
}
