@extends('layouts.app')

@section('content')
<section>
    <div class="row" style="margin-bottom: 50px; margin-top: 50px;">
        <form class="custom-file" action="{{url('/upload/')}}" method="POST" enctype="multipart/form-data">
            <div class="container" style="margin-left: auto; margin-right: auto;">
                <div class="container col-md-4">

                    <div class="form-group">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <input type="file" class="form-control-file border" name="file">
                    </div>
                    <div class="container col-md-4" style="text-align:centers; margin-top: 10px;">
                        <input type="submit" name="submit" value="Upload" class="btn btn-primary">
                    </div>
                </div>
            </div>
        </form>
    </div>

    <div class="card-body">
        <div class="row">
            @isset($catalog)
            @foreach($catalog as $cata)
            <div class="col-md-3">
                <div class="card">
                    <img src="{{asset('/images/catalog/'.$cata->name_img)}}" width="200" height="150" class="container">

                    <h6>{{$cata->name_img}}</h6>

                    <div class="row">

                        <div class="col container">
                            <a href="{{ url('/file/delete/'.$cata->id_img)}}" onclick="return confirm('ลบรายการนี้ ใช่ หรือ ไม่??')" class="btn btn-danger" style="width: 100%">
                                <i class="fas fa-trash-alt" style="color: white"></i>
                            </a>
                        </div>

                    </div>

                    <br>

                </div>
            </div>

            @endforeach
            @endisset

        </div>

    </div>
</section>
@endsection