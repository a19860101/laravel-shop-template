@extends('admin.template.master')
@section('page-title')
    新增分類
@endsection

@section('main-title')
    新增分類
@endsection
@section('main')
    <div class="row">
        <div class="col-6">
            <div class="card">
                <div class="card-header">
                    <h4>新增分類</h4>
                </div>
                <div class="card-body">
                    <form action="{{route('adminCategoryStore')}}" method="post" enctype="multipart/form-data">
                        @csrf
                    {{-- <div class="alert alert-info">
                        <b>Note!</b> Not all browsers support HTML5 type input.
                    </div> --}}
                    <div class="form-group">
                        <label>分類名稱</label>
                        <input type="text" class="form-control" name="title">
                    </div>
                    <div class="form-group">
                        <label for="">分類封面</label>
                        <input type="file" class="form-control" name="cover">
                    </div>
                    <div class="form-group">
                        <label>slug</label>
                        <input type="text" class="form-control" name="slug">
                    </div>
                    <input type="submit" class="btn btn-primary mr-1" value="新增分類">
                    <input type="button" class="btn btn-secondary" value="取消" onclick="history.back()">
                </div>
            </div>
        </div>
    </div>
@endsection
