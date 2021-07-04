<?php

namespace App\Http\Controllers;
use App\Models\req;
use Validator;
use Illuminate\Http\Request;

class reqController extends Controller
{
    function index()
    {
        $req = req::all();
        return view ("req.index")
            ->with ('req',$req);
    }

    function show()
    {
        return view ('req.insert');
    }

    function insert(Request $req)
    {
        
        $validation = Validator::make($req->all(),[

            'id' =>'required',
            'user_name'=>'required',
          'description' =>'required',
           'request_type' =>'required',
            'status' =>'required'
    ]);

    if($validation ->fails())
    {
        return back()->with ('errors',$validation->errors());
    }
        $user = new req();

        $user->id = $req->id;
        $user->user_name = $req->user_name;
        $user->request_type = $req->request_type;
        $user->description = $req->description;
        $user->status = $req->status;

        $user->save();

        return redirect ('/requestView');

    }

    function editview()
    {
        $req = req::all();
        return view ('req.editView')
            ->with ('req',$req);

    }

    function edit ($id)
    {
        $req = req::find ($id);
        return view ('req.edit')
                ->with ('req',$req);
    }

    function update(Request $req, $id)
    {


        $validation = Validator::make($req->all(),[

                'id' =>'required',
                'user_name'=>'required',
              'description' =>'required',
               'request_type' =>'required',
                'status' =>'required'
        ]);

        if($validation ->fails())
        {
            return back()->with ('errors',$validation->errors());
        }
        $user = req::find ($id);
        $user->id = $req->id;
        $user->user_name= $req->user_name;
        $user->description = $req->description;
        $user->request_type = $req->request_type;
        $user->status = $req->status;

        $user->save();
        return redirect ('/requestView');
    }

    function detailsView()
    {
        $req = req::all();
        return view ('req.view')
        ->with ('req',$req);
    }


    function details($id)
    {
        $req = req::find ($id);
        return view('req.details')
               -> with ('req',$req);
    }

    function deleteview()
    {
        $req = req::all();
        return view ("req.deleteView")
        ->with ('req',$req);;
    }


    function delete($id)
    {
        $req = req::find ($id);
        return view('req.delete')
               -> with ('req',$req);
    }

    function destroy($id)
    {
        req::destroy($id);
        return redirect('/requestView');
    }
}
