@extends('layouts.member')
@section('content')
    <div class="card">
        <div class="card-header">
            会员时长
        </div>
        <div class="card-body">
            <h5 class="text-secondary mb-0">
                @if($subscribe)
                    你的会员到期时间为
                    <span class="text-info">
                        @if($subscribe->end_time>\Carbon\Carbon::createFromDate(2030,1,1)) 永不过期
                            @else
                            {{$subscribe->end_time}}
                        @endif
                    </span>
                @else
                    <span class="text-secondary">
                      <i class="fa fa-info-circle" aria-hidden="true"></i>  你还没有订阅会员，订阅后可学习所有视频 !
                  </span>
                @endif
            </h5>
        </div>
        <div class="card-footer">
            @if($subscribe)
                <a href="{{route('edu.shop.index')}}" class="btn btn-outline-primary btn-sm">延长会员周期，继续提升技术</a>
            @else
                <a href="{{route('edu.shop.index')}}" class="btn btn-outline-primary btn-sm">订阅会员成为技术高手</a>
            @endif
        </div>
    </div>
@endsection