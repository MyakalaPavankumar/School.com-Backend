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
}
