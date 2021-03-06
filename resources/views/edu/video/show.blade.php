@extends('layouts.web')
@section('menu')
    @include('edu.layouts._menu')
@endsection
@section('content')
    <div class="container mt-0">
        <div class="{{route_class()}}">
            <div class="row mb-3">
                <div class="col-12">
                    @include('edu.video.layouts._play')
                    {{--@can('view',$video->lesson)--}}
                        {{--@include('edu.video.layouts._play')--}}
                        {{--@else--}}
                        {{--@include('edu.video.layouts._cant_play')--}}
                    {{--@endcan--}}
                </div>
            </div>
            {{--评论--}}
            <div class="row">
                <div class="col-12 col-lg-12">
                    @include('common.comment',['model'=>$video])
                </div>
            </div>
        </div>
    </div>
@endsection
@push('js')
    <script>
        //课程目录
        function category() {
            $("#category").toggle();
        }
        require(['hdjs'], function (hdjs) {
            hdjs.video('video');
            hdjs.scrollTo('body', '#video', 1000, {queue: true});
        });
    </script>
@endpush
