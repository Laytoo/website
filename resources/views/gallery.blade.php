






<section class="hero-wrap js-fullheight"  data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
            <div class="col-md-12 ftco-animate pb-5 mb-3 text-center">
                <h1 class="mb-3 bread"> </h1>
                <p class="breadcrumbs">
                    <img src="{{url('/')}}/fotos/{{$data[0]->images}}" height="500" >
                   <table>
                    <tr>
                        <th>name</th>
                        <th>dsc</th>
                        <th>id</th>
                    </tr>

                    <tr>
                        @foreach($data as $dt)
                            <td>{{$dt->nam}}</td>
                            <td>{{$dt->description}}</td>
                            <td>{{$dt->Id}}</td>
                    </tr>
                    @endforeach
                </table>

                    <span class="mr-2"><a href="{{url('/')}}">Home <i class="ion-ios-arrow-forward"></i></a></span>
                    <span class="mr-2"><a href="blog.html"> ss<i class="ion-ios-arrow-forward"></i></a></span>
                    <span>ds<i class="ion-ios-arrow-forward"></i></span></p>

            </div>
        </div>
    </div>
</section>