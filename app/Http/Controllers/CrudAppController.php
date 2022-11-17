<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\crud_app;
use Illuminate\Support\Facades\Validator;

class CrudAppController extends Controller
{
    public function index(){
        return view('welcome');
    }
    public function Alllist(){
        return view('viewlist',['list' => crud_app::all()]);

    }
    
    public function save(Request $req){
        $req->validate(
            [
                'Batch' => 'required|unique:crud_apps,BatchNo',
                'Quantity' => 'required|integer',
                'Status' => 'required',
                'remarks' => 'required'
            ]
        );
        $todoObj = new crud_app();
        $todoObj->BatchNo =  $req->Batch;
        $todoObj->Quantity = $req->Quantity;
        $todoObj->Status = $req->Status;
        $todoObj->Remarks = $req->remarks;

        $todoObj->save();
        return redirect('/')->with('mssg','Successfully Added To The Database.');
    }
    public function Remove($id){
        $data = crud_app::find($id);
        $data->delete();
        return redirect('/list');
    }
    public function Edit($id){
        $editdata = crud_app::find($id);
        return view('Edit',['data' => $editdata]);
    }
    public function SaveEditedData(Request $data){
        $data->validate(
            [
                'Batch' => 'required|unique:crud_apps,BatchNo',
                'Quantity' => 'required|integer',
                'Status' => 'required',
                'remarks' => 'required'
            ]
        );
        $newdata = crud_app::find($data->id);
        $newdata->BatchNo=$data->Batch;
        $newdata->Quantity=$data->Quantity;
        $newdata->Status=$data->Status;
        $newdata->Remarks=$data->remarks;

        $newdata->save();
        return redirect('/list');
    }
}
