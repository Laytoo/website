
@extends('layouts.admin.indexadmin')
@section('title','Edit Template')
@section('keywords','test words')
@section('description','about us')

@section('content')
    <section class="content-header">
        <h1>
            Edit Template

        </h1>
        <ol class="breadcrumb">
            <li><a href="{{url('/')}}/admin"><i class="fa fa-dashboard"></i> Home Page</a></li>
            <li><a href="{{url('/')}}/admin/templates"><i class="fa fa-dashboard"></i>Template List</a></li>

            <li><a href="#">Edit Template</a></li>
        </ol>
    </section>
    <div class="box box-primary">

        <form  action="{{url('/')}}/admin/prod/update/{{$data[0]->Id}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="box-body">
                <div class="form-group">
                    <label>Name of Template</label>
                    <input type="text" name="namee" class="form-control" value="{{$data[0]->namee}}" id="name" placeholder="Enter Name">
                </div>

                <div class="form-group">
                    <label >Description</label>
                    <input type="text" name="description" value="{{$data[0]->description}}" class="form-control" id="desc" placeholder="description">
                </div>


                <!-- <div class="form-group">
                     <label >Keywords</label>
                     <input type="text" name="keywords"class="form-control" id="exampleInputPassword1" placeholder="Keywords">
                 </div> -->


                <div class="form-group">
                    <label>Model</label>
                    <select class="form-control" name="model_id">
                        <option selected value="{{$data[0]->model_id}}">{{$data[0]->model}}</option>
                        @foreach($models as $md)
                            <option value="{{$md->Id}}">{{$md->nam}}</option>
                        @endforeach
                    </select>
                </div>



                <div class="form-group">
                    <label for="exampleInputFile">choose file</label>
                    <input type="file"  value="{{$data[0]->foto}}" id="fot" name="foto">

                    <p class="help-block">Choose Photos File</p>
                </div>
                <img src="{{url('/')}}/fotos/{{$data[0]->foto}}" height="100">
            </div>
            <!-- /.box-body -->

            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </form>
        <a href="{{url('/')}}/admin/templates"><button  class="btn btn-primary" >Cancel</button></a>


    </div>
@endsection

@section('java')
    <script src="{{url('/')}}/admin/bower_components/ckeditor/ckeditor.js"></script>

    <script>
        $(function () {
            // Replace the <textarea id="editor1"> with a CKEditor
            // instance, using default configuration.
            CKEDITOR.replace('note')
            //bootstrap WYSIHTML5 - text editor
            // $('.textarea').wysihtml5()
        })
    </script>
@endsection
