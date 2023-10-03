<?php

namespace App\Http\Controllers;

use App\Models\Participate;
use App\Models\User;
use Illuminate\Http\Request;

class ParticipateController extends Controller
{
    public function index(){
        $participates = response()->json(Participate::all());
        return $participates;
    }
    public function show($id){
        $participates = response()->json(Participate::find($id));
        return $participates;
    }

    public function destroy($id){
        Participate::find($id)->delete();
    }

    public function store(Request $request){
        $participate = new Participate();
        $participate->present = $request->present;
        $participate->event_id = $request->event_id;
        $participate->user_id = $request->user_id;
        $participate->save();
    }

    public function update(Request $request, $id){
        $participate = Participate::find($id);
        $participate->present = $request->present;
        $participate->event_id = $request->event_id;
        $participate->user_id = $request->user_id;
        $participate->save();
    }
    public function new(){
        $users = User::all();
        return view('participate.new', ['users' => $users]);

    }
    public function editView($id){
        $users = User::all();
        $participate = Participate::find($id);
        return view('participate.edit', ['users'=> $users, 'participate' => $participate]);

    }
    public function listView(){
        $participates = Participate::all();
        return view('participate.list', ['participates' => $participates]);
    }
}
