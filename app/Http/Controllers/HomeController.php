<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App;
class HomeController extends Controller
{
    //
    public function index()
    {
        $data=DB::select('select * from slider ');
        $about=DB::select('select * from aboutus ');
        $service=DB::select('select * from services ');
        $contact=DB::select('select * from contactus ');


        return view('home',compact('data','about','service','contact'));
    }

    public function lan($lang)
    {
        App::setLocale($lang);

        $data=DB::select('select * from slider ');
        $about=DB::select('select * from aboutus ');
        $service=DB::select('select * from services ');
        $contact=DB::select('select * from contactus ');
        return view('home',compact('data','about','service','contact'));
    }


    public  function  savemessage(Request $request)
    {


        DB::table('message')->insert([
            ['namee'=>$request->get('namee'),
                'email'=>$request->get('email'),
                'subject'=>$request->get('subject'),
                'msg'=>$request->get('msg'),

                ]
        ]);

        return redirect('/')->with('success','We Received Your Message Thank You..');
    }


    public function tempdetail($id)
    {
        $temp=DB::select('select * from tempgallery where temp_id=?',[$id]);
        $template=DB::select('select * from slider where id=?',[$id]);
      //  $gallerydet=DB::select('select i.*,g.* from img i,tempgallery g where g.Id=i.gallery_id');
        $gallerydet=DB::select('select i.*,g.temp_id from img i ,tempgallery g where i.gallery_id=g.Id');
        return view('detail',compact('temp','template','gallerydet'));
    }


    public function gallery($id)
    {
        $data=DB::select('select * from tempgallery where id=?',[$id]);


        return view('gallery',compact('data'));
    }
}
