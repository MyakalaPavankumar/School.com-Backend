<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\ClassModel;
use App\Models\ClassSubjectModel;
use App\Models\SubjectModel;


class ClassSubjectController extends Controller
{
    public function list()
    {
        $data['_header_title']="Subject Assign List";
        $data['getRecord']=ClassSubjectModel::getRecord();
        return view('admin.assign_subject.list',$data);
    }
    public function add()
    {
        $data['getClass']= ClassModel::getClass();
        $data['getSubject']= SubjectModel::getSubject();
        $data['_header_title']="Add Assign Subject";
        return view('admin.assign_subject.add',$data);
    }
    public function insert(Request $request){
        if(!empty($request->subject_id)){
            foreach($request->subject_id as $subject_id)
            {
                $getAlreadyFirst = ClassSubjectModel::getAlreadyFirst($request->class_id,$subject_id);
                if(!empty($getAlreadyFirst)){
                    $getAlreadyFirst->status=$request->status;
                    $getAlreadyFirst->save();
                }
                else{
                    $save = new ClassSubjectModel();
                    $save->class_id = $request->class_id;
                    $save->subject_id = $subject_id;
                    $save->status = $request->status;
                    $save->created_by = Auth::user()->id;
                    $save->save();
                }
                
            }
            return redirect('admin/assign_subject/list')->with('success','Subject Successfully Assign  to class');

        }
        else{
            return redirect()->back()->with('error','Plaese try Again');
        }
    }

    public function delete($id,Request $request){
        
        $save= ClassSubjectModel::getSingle($id);
        $save->is_delete=1;
       
        $save->save();

        return redirect()->back()->with('success',"Class Successfully Deleted   ");
    }
}
