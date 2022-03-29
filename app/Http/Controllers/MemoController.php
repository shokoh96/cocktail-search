<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Memo;

class MemoController extends Controller
{
    public function index()
    {
        $records = Memo::all();
        return view('records.index', ['records' => $records]);
    }

    public function create()
    {
        return view('records.create');
    }

    public function store(Request $request)
    {
        // dd($request);
        $records = new Memo;
        $records->name = $request->name;
        $records -> base = $request -> base;
        $records -> taste = $request -> taste;
        $records -> feature = $request -> feature;
        $records -> comment = $request -> comment;
        $records -> image = $request -> image;
        $records -> image2 = $request -> image2;
        $records -> image3 = $request -> image3;
        $records -> image4 = $request -> image4;
        $records -> user_id = Auth::id();
        $records->save();
        return redirect() -> route('records.index');
    }
}
