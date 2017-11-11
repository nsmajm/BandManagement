
@extends('layout.master')

@section('title')
    User Uploaded Song Details
@endsection
@section('maincontent')

    <div class=" row" >
            @foreach($post as $content)

                <div class="col-md-3" style="padding-bottom: 30px;border: 1px solid #efefef">
                    <a href="#"> <img src="/uploads/{{$content->filepicture}}" alt="" class="img-thumbnail"style="height: 257px !important;"></a>
                    <div class="description">
                      <a class="pull-left" href="#">{{$content->username}}</a>
                        <a class="pull-right" href="#">{{$content->category}}</a>
                        <hr>
                       <div class="title">
                           <h4><a href="#">{{$content->filename}}</a></h4>
                       </div>
                    </div>
                </div>

    @endforeach
    </div>
@endsection