<?php

namespace App\Http\Controllers;
use App\Models\review;
use Validator;
use Illuminate\Http\Request;

class reviewController extends Controller
{
    function index()
    {
        $review = review::all();
        return view ("review.index")
            ->with ('review',$review);
    }

    function show()
    {
        return view ('review.insert');
    }

    function insert(Request $review)
    {
        
        $validation = Validator::make($review->all(),[

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
        $user = new review();

        $user->id = $review->id;
        $user->user_name = $review->user_name;
        $user->request_type = $review->request_type;
        $user->description = $review->description;
        $user->status = $review->status;

        $user->save();

        return redirect ('/reviewView');

    }

    function editview()
    {
        $review = review::all();
        return view ('review.editView')
            ->with ('review',$review);

    }

    function edit ($id)
    {
        $review = review::find ($id);
        return view ('review.edit')
                ->with ('review',$review);
    }

    function update(Request $review, $id)
    {


        $validation = Validator::make($review->all(),[

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
        $user = review::find ($id);
        $user->id = $review->id;
        $user->user_name= $review->user_name;
        $user->description = $review->description;
        $user->request_type = $review->request_type;
        $user->status = $review->status;

        $user->save();
        return redirect ('/reviewView');
    }

    function detailsView()
    {
        $req = review::all();
        return view ('review.view')
        ->with ('review',$review);
    }


    function details($id)
    {
        $req = review::find ($id);
        return view('review.details')
               -> with ('review',$review);
    }

    function deleteview()
    {
        $review = review::all();
        return view ("review.deleteView")
        -> with ('review',$review);;
    }


    function delete($id)
    {
        $review =review::find ($id);
        return view('review.delete')
               -> with ('review',$review);
    }

    function destroy($id)
    {
        review::destroy($id);
        return redirect('/reviewView');
    }
}
