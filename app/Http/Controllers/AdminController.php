<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App;

class AdminController extends Controller
{
    //

    public function indexx()
    {

        $data=DB::select('select * from slider');
        return view('admin.home',compact('data'));
    }

    public function list()
    {
        $data=DB::select('select * from slider');
        $da=App\User::paginate(2);
        return view('admin.templist',compact('data','da'));
    }

    public function index()
    {
        $datas=DB::select('select * from model');
        return view('admin.modellist',compact('datas'));
    }


    public function create()
    {

        $models = DB::select('SELECT * FROM model ORDER by nam');



        return view('admin.addtemp',['models'=>$models]);
    }

    public function store(Request $request)
    {
        if($request->hasfile('foto'))
        {
            $file = $request->file('foto');
            $name=time().$file->getClientOriginalName();
            $file->move(public_path().'/fotos',$name);

        }


        DB::table('slider')->insert([
            ['namee'=>$request->get('namee'),

                'description'=>$request->description,
                'model_id'=>$request->model_id,

                'foto'=> $name]
        ]);


        return redirect('admin/templates')->with('success', 'Template Saved');


    }


    public function edit($id)
    {

        $models = DB::select('SELECT * FROM model ORDER by nam');


        $data=DB::select('select s.*,m.nam as model
        from slider s,model m
        where  s.model_id= m.Id and s.Id=?',[$id]);

        return view('admin.edittemp',compact('data','models'));

    }

    public function update(Request $request, $id)
    {

        if($request->hasfile('foto'))
        {
            $file = $request->file('foto');
            $name=time().$file->getClientOriginalName();
            $file->move(public_path().'/fotos',$name);

        }


        DB::table('slider')->where('Id',$id)->update(
            ['namee'=>$request->get('namee'),

                'description'=>$request->description,
                'model_id'=>$request->model_id,
                'foto'=> $name

            ]);


        return redirect('admin/templates')->with('success',$request->namee.'Updated Successfully');

    }

    public function destroy($id)
    {


       DB::select('delete from slider where id=?',[$id]);
        return redirect("admin/templates")->with('success','Deleted Successfully');

    }



    public function galleryform($id)
    {

        $gallerys = DB::select('SELECT * FROM tempgallery where temp_id=?',[$id]);

        $data = DB::select('SELECT * FROM slider where Id=?',[$id]);

        return view('admin.galleryadd',compact('data','gallerys'));

    }


    public function gallerydelete($id)
    {


        DB::select('DELETE  FROM tempgallery where Id=?',[$id]);
        return redirect("admin/prod/gallery/".$id)->with('success','Deleted Successfully');



    }



    public function galleryadd(Request $request)
    {
        if($request->hasfile('foto'))
        {
            $file = $request->file('foto');
            $name=time().$file->getClientOriginalName();
            $file->move(public_path().'/fotos/',$name);

        }


        DB::table('tempgallery')->insert(
            ['temp_id'=>$request->id,
                'images'=> $name
            ]);


        return redirect("admin/prod/gallery/".$request->id)->with('success', 'gallery Saved');

    }



    public function message()
    {
        $dat=DB::select('select * from message');
        return view('admin.listmessage',['dat'=>$dat]);
    }



    public function messageedit($id)
    {
        $data=DB::select('select * from message where id='.$id);
        return view('admin.messageedit',['data'=>$data]);
    }


    public function messageupdate(Request $request, $id)
    {

        DB::table('message')->where('Id',$id)->update(
            ['notes'=>$request->get('notes'),
                'status'=>'read'

            ]);


        return redirect('admin/messages')->with('success',$request->namee.'The Message Read Successfully');

    }



}
