
@extends('layouts.admin.indexadmin')
@section('title','Add Template')


@section('content')
    <section class="content-header">
        <h1>
            Add Template

        </h1>
        <ol class="breadcrumb">
            <li><a href="{{url('/')}}/admin"><i class="fa fa-dashboard"></i> Home page</a></li>
            <li><a href="#">Add Template</a></li>
        </ol>
    </section>
    <div class="box box-primary">
        <!-- <div class="box-header with-border">
             <h3 class="box-title">Add</h3>
         </div> -->
        <!-- /.box-header -->
        <!-- form start -->
        <form  action="{{url('/')}}/admin/prod/save" method="post" enctype="multipart/form-data">
            @csrf
            <div class="box-body">
                <div class="form-group">
                    <label>Name of Template</label>
                    <input type="text" required name="namee" class="form-control" id="name" placeholder="Enter Name">
                </div>

                <div class="form-group">
                    <label >Description</label>
                    <input type="text" name="description" class="form-control" id="desc" placeholder="description">
                </div>


                <div class="form-group">
                    <label>Model</label>
                    <select class="form-control" name="model_id" required>
                        @foreach($models as $md)
                            <option value="{{$md->Id}}">{{$md->nam}}</option>
                        @endforeach
                    </select>
                </div>



                <div class="form-group">
                    <label for="exampleInputFile">choose file</label>
                    <input type="file" id="fot" name="foto">

                    <p class="help-block">Choose Photos File</p>
                </div>

            </div>
            <!-- /.box-body -->

            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
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
