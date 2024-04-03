<?php

namespace App\Http\Controllers;

use App\Models\Test;
use Illuminate\Http\Request;
use DB;

class TestController extends Controller
{
    public function index()
    {
        $data = Test::get();

        return view('test', ['data' => $data]);
    }

    public function create()
    {
        return view('test_create');
        
    }

    public function store(Request $request)
    {
        
        DB::table('tests')->insert([
            'name' => $request->name,
            ]);
       
        return redirect('/test');
        
    }
    public function edit($id)
    {
        $data = Test::find($id);

        return view('test_edit', ['data' => $data]);
        
    }

    public function update(Request $request)
    {
    // update data 
    DB::table('tests')->where('id',$request->id)->update([
    'name' => $request->name,
    ]);
    // alihkan halaman ke halaman test
    return redirect('/test');
    }

    public function destroy($id)
    {

        DB::table('tests')->where('id',$id)->delete();
    
    return redirect('/test');
    }
}
