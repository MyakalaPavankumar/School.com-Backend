<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SubjectModel;
use Auth;
class SubjectController extends Controller
{
    public function list()
    {
        $data['_header_title']="Subject List";
        $data['getRecord']=SubjectModel::getRecord();
        return view('admin.subject.list',$data);
    }

    public function add()
    {
        $data['_header_title']="Add New Subject";
        return view('admin.subject.add',$data);
    }

    public function insert(Request $request)
    {
        $save=new SubjectModel;
        $save->name=trim($request->name);
        $save->type=trim($request->type);
        $save->status=trim($request->status);
        $save->Created_by=Auth::user()->id;
        $save->save();
        return redirect('admin/subject/list')->with('success','Subject Successfully Created');

    }


    public function edit($id)
    {
        $data['getRecord']=SubjectModel::getSingle($id);
        if(!empty($data['getRecord']))
        {
            $data['_header_title']="Edit Class ";
            return view('admin.subject.edit',$data);
        }
        else
        {
            abort(404);
        }
        
    }
    public function update($id,Request $request){
        
        $save= SubjectModel::getSingle($id);
        $save->name=trim($request->name);
        $save->type=trim($request->type);
        $save->status=trim($request->status);
       
        $save->save();

        return redirect('admin/subject/list')->with('success',"Subject Successfully Updated");
    }
    public function delete($id,Request $request){
        
        $save= SubjectModel::getSingle($id);
        $save->is_delete=1;
       
        $save->save();

        return redirect()->back()->with('success',"Subject Successfully Deleted   ");
    }
}
