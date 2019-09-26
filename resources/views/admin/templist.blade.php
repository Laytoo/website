@extends('layouts.admin.indexadmin')
@section('title','List of Template')


@section('content')
    <section class="content-header">
        <h1>
            List of Template

        </h1>
        <ol class="breadcrumb">
            <li><a href="{{url('/')}}/admin"><i class="fa fa-dashboard"></i> Home page</a></li>
            <li><a href="#">Templates</a></li>
            <!-- <li class="active">Blank page</li>-->
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="box">
            <div class="box-header with-border">
                <i class="far fa-images animated infinite rollIn fa-lg" ></i>
                <h3 class="box-title"><a href="{{url('/')}}/admin/prod/add"
                                         class="btn  btn-primary btn-sm" >Add Template</a></h3>
            </div>

     <!--       <div class="col-md-4">
                <form action="{{url('/')}}/admin/search" method="get"   >
                    <div class="input-group">
                        <input type="search" name="search" class="form-control">
                        <span class="input-group-prepend">
                                <button type="submit" class="btn btn-primary" style="">search</button>
                            </span>
                    </div>
                </form>
            </div> -->


            @if(session()->get('success'))
                <div class="alert alert-success">
                    {{ session()->get('success') }}
                </div><br />
        @endif
        <!-- /.box-header -->
            <div class="box-body">
                <table class="table table-bordered">
                    <tbody><tr>



                        <th>ID</th>
                        <th>Name</th>
                        <th>Model</th>
                        <th>Description</th>
                        <th>fotos</th>
                        <th>Gallery</th>
                        <th>Update</th>
                        <th>Delete</th>

                    </tr>
                    @foreach($data as $prod)
                        <tr>
                            <td>{{$prod -> Id}}</td>
                            <td>{{$prod->namee}}</td>
                            <td>{{$prod->model_id}}</td>
                            <td>{{$prod->description}}</td>

                            <td><img src="{{url('/')}}/fotos/{{$prod->foto}} " height= "50" ></td>

                            <td> <a href="{{url('/')}}/admin/prod/gallery/{{$prod->Id}}"onclick="return !window.open(this.href,
                             '','top=100 left 200 width=700,height=600')">Gallery</a></td>

                            <td ><a href="{{url('/')}}/admin/prod/edit/{{$prod->Id}}"  class="btn btn-block btn-success btn-sm" >
                                    Edit</a></td>


                            <td>
                                <a href="{{url('/')}}/admin/prod/delete/{{$prod->Id}}"
                                   class="btn btn-block btn-danger btn-sm"> Delete</a>


                            </td>



                        </tr>
                    @endforeach


                    </tbody>
                </table>
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix">
                <ul class="pagination pagination-sm no-margin pull-right">
                    <li><a href="#">«</a></li>
                    <li><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">»</a></li>
                </ul>
            </div>
        </div>

        <!-- /.box -->

    </section>
    <!-- /.content -->

@endsection
<!-- /.box -->


<!-- /.content -->
