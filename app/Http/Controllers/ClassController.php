<?php

namespace App\Http\Controllers;

use App\Models\ClassModel;
use Illuminate\Http\Request;
use Auth;

class ClassController extends Controller
{
    public function list()
    {
        $data['_header_title']="Class List";
        $data['getRecord']=ClassModel::getRecord();
        return view('admin.class.list',$data);
    }
    public function add()
    {
        $data['_header_title']="Add New Class";
        return view('admin.class.add',$data);
    }
    public function insert(Request $request)
    {
        $save=new ClassModel;
        $save->name=$request->name;
        $save->status=$request->status;
        $save->Created_by=Auth::user()->id;
        $save->save();
        return redirect('admin/class/list')->with('success','Class Successfully Created');

    }
    public function edit($id)
    {
        $data['getRecord']=ClassModel::getSingle($id);
        if(!empty($data['getRecord']))
        {
            $data['_header_title']="Edit Class ";
            return view('admin.class.edit',$data);
        }
        else
        {
            abort(404);
        }
        
    }
    public function update($id,Request $request){
        
        $save= ClassModel::getSingle($id);
        $save->name=$request->name;
        $save->status=$request->status;
       
        $save->save();

        return redirect('admin/class/list')->with('success',"Class Successfully Updated");
    }
    public function delete($id,Request $request){
        
        $save= ClassModel::getSingle($id);
        $save->is_delete=1;
       
        $save->save();

        return redirect()->back()->with('success',"Class Successfully Deleted   ");
    }
}
