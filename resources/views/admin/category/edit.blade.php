@extends('admin.template.master')
@section('page-title')
    編輯分類
@endsection

@section('main-title')
    編輯分類
@endsection
@section('main')
    <div class="row">
        <div class="col-6">
            <div class="card">
                <div class="card-header">
                    <h4>編輯分類</h4>
                </div>
                <div class="card-body">
                    <form action="{{route('adminCategoryUpdate',[$category->id])}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('patch')
                    <div class="form-group">
                        <label>分類名稱</label>
                        <input type="text" class="form-control" name="title" value="{{$category->title}}">
                    </div>
                    <div class="form-group">
                        <label for="">分類封面</label>
                        <input type="file" class="form-control" name="cover">
                    </div>
                    <div class="form-group">
                        <label>slug</label>
                        <input type="text" class="form-control" name="slug" value="{{$category->slug}}">
                    </div>
                    <input type="submit" class="btn btn-primary mr-1" value="儲存">
                    <input type="button" class="btn btn-secondary" value="取消" onclick="history.back()">
                </div>
            </div>
        </div>
    </div>
@endsection
