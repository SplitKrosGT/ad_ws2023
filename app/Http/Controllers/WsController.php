<?php

namespace App\Http\Controllers;

use App\Models\Ws;
use Illuminate\Http\Request;

class WsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function store(Request $request)
    {
        $title_ad = $request->input('title_ad');
        $info_ad = $request->input('info_ad');
        $contact_name = $request->input('contact_name');
        $contact_phone = $request->input('contact_phone');
        $date_end = $request->input('date_end');

        $hero = new Ws();
        $hero->title_ad = $title_ad;
        $hero->info_ad = $info_ad;
        $hero->contact_name = $contact_name;
        $hero->contact_phone = $contact_phone;
        $hero->date_end = $date_end;
        $hero->save();
    }

    public function ad($ws_id) {

        $ws = Ws::find($ws_id);

        return response()->json($ws, 200);
    }

    public function edit(Request $request, $ws_id) {

        $title_ad = $request->input('title_ad');
        $info_ad = $request->input('info_ad');
        $contact_name = $request->input('contact_name');
        $contact_phone = $request->input('contact_phone');
        $date_end = $request->input('date_end');

        $ws = Ws::find($ws_id);
        $ws->title_ad = $title_ad;
        $ws->info_ad = $info_ad;
        $ws->contact_name = $contact_name;
        $ws->contact_phone = $contact_phone;
        $ws->date_end = $date_end;
        $ws->save();

        return response()->json($ws, 200);
    }

    public function delete($ws_id) { 

        $ws = Ws::find($ws_id);
        $ws->delete();

        return response()->json("Удалена задача с id " . $ws_id, 200);
    }

    public function ads() { 
        $ws = Ws::all();

        return response()->json($ws, 200);
    }
}
