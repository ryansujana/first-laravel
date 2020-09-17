<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Form;
use DB;

class FormController extends Controller
{
     /* Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('backend.gallery.add-gallery');
    }

    public function store(Request $request)
    {


        $this->validate($request, [
                'title' => 'required',
                'filename' => 'required',
                'filename.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'

        ]);
        
        if($request->hasfile('filename'))
         {

            foreach($request->file('filename') as $image)
            {
                $name=$image->getClientOriginalName();
                $image->move(public_path().'/forms/', $name);  
                $data[] = $name;  
            }
         }

         $form= new Form();
         $form->title = $request->input('title');
         $form->filename=json_encode($data);
         
        
        $form->save();

        return back()->with('success', 'Your images has been successfully');
    }

    public function allGallery(){
        $data = DB::table('forms')->orderby('id','DESC')->get();
        return view ('backend.gallery.all-gallery',['data'=>$data]);
    }
}
