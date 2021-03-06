@extends('layouts.admin')
@section('content')
    <form action="{{route('edu.category.store')}}" method="post" class="{{route_class()}}">
        @csrf
        <div class="card">
            <div class="card-body">
                <ul class="nav nav-tabs nav-tabs-line nav-tabs-line-success nav-tabs-bold" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('edu.category.index')}}">分类列表</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="{{route('edu.category.create')}}">添加分类</a>
                    </li>
                </ul>
                @include('edu.category._category')
            </div>
            <div class="card-footer">
                <button class="btn btn-primary btn-sm" type="submit">保存提交</button>
            </div>
        </div>
    </form>
@endsection