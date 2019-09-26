
<div class="box box-primary">
    <!-- <div class="box-header with-border">
         <h3 class="box-title">Add</h3>
     </div> -->
    <!-- /.box-header -->
    <!-- form start -->
    <form  action="{{url('/')}}/admin/prod/gallery/{{$data[0]->Id}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="box-body">
            <div class="form-group">
                <label><h4>Template Name:</h4>{{$data[0]->namee}}</label>
            </div>
            <div class="form-group">
                <label for="exampleInputFile">choose file</label>
                <input type="file"  value="" id="fot" required name="foto"  onchange="javascript:this.form.submit();">

                <button type="submit" class="btn btn-primary">Add</button>
                <br/> <br/>
                <img src="{{url('/')}}/fotos/{{$data[0]->foto}}" height="200">

            </div>


            @if(session()->get('success'))
                <div class="alert alert-success">
                    {{ session()->get('success') }}
                </div><br />
            @endif

            @foreach($gallerys as $rs)

                <img src="{{url('/')}}/fotos/{{$rs->images}}" height="100">
                <a href="{{url('/')}}/admin/prod/gallerydel/{{$rs->Id}}">

                    Delete</a>

            @endforeach

        </div>
    </form>

</div>