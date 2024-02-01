<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\forms;

class FormController extends Controller
{
    public function index(){
        $pro = forms::get();
        return view('forms.index',['forms'=>$pro]);
    }

    public function create(){
        return view('forms.create');
    }

    public function store(Request $request){
        
        $pro = new forms;
        $pro->name = $request->name;
        $pro->email = $request->email;
        $pro->password = $request->password;
        $pro->save();
        return back();
    }

    public function edit($id){
        $pro = forms::where('id',$id)->first();
        return view('forms.edit',['form'=>$pro]);
    }

    public function update(Request $request,$id){

        $pro = forms::where('id',$id)->first();
        $pro->name = $request->name;
        $pro->email = $request->email;
        $pro->password = $request->password;
        $pro->save();
        return back();
    }

    public function delete($id){
        
        $pro = forms::where('id',$id)->first();
        $pro->delete();
        return back();
    }
}
