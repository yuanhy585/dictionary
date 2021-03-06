<?php

namespace App\Http\Controllers;

use App\Lexis;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class WordController extends Controller
{

    public function index(Request $request)
    {

        $inputs = $request->has('select')?json_decode($request->input('select'),true):$request->all();

        $words = Lexis::whereHas('user',function($query) use ($inputs){
            if(isset($inputs['findByUserName'])){
                $query->where('name','LIKE','%'.$inputs['findByUserName'].'%');
            }
        })
        ->paginate(5);

        $a = $inputs;

        return view('word.index', compact('words','a'));
    }

    public function create()
    {
        return view('word.create');
    }

    public function store(Request $request)
    {
        $inputs = $request -> all();

        $word = new Lexis();

        $word->spelling = $inputs['spelling'];
        $word->part_of_speech = $inputs['part_of_speech'];
        $word->pronunciation = $inputs['pronunciation'];
        $word->meaning = $inputs['meaning'];
        $word->user_id = $inputs['user_id'];

        $word->save();

        return redirect('/word');
    }

    public function show($id)
    {
        $word = Lexis::where('id', $id)->first();

        return view('word.show', compact('word'));
    }

    public function edit($id)
    {
        $word = Lexis::where('id',$id)->first();

        return view('word.edit', compact('word'));
    }

    public function update(Request $request, $id)
    {
        $word = Lexis::where('id',$id)->first(); // 此处若用get（）则会在save（）时报错

        $inputs = $request -> all();

        $word->spelling = $inputs['spelling'];
        $word->pronunciation = $inputs['pronunciation'];
        $word->meaning = $inputs['meaning'];

        $word->save();

        return redirect('/word');
    }

    public function destroy($id)
    {
        $word = Lexis::where('id',$id)->first();
        $word->delete();

        return back();
    }

    public function qr_code()
    {
        return view('word.QrCode');
    }

}
