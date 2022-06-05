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
                    {{-- <div class="alert alert-info">
                        <b>Note!</b> Not all browsers support HTML5 type input.
                    </div> --}}
                    <div class="form-group">
                        <label>分類名稱</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>slug</label>
                        <input type="text" class="form-control">
                    </div>
                </div>
                <div class="card-footer text-right">
                    <button class="btn btn-primary mr-1" type="submit">新增</button>
                    <button class="btn btn-secondary" type="button" onclick="history.back()">取消</button>
                </div>
            </div>
        </div>
    </div>
@endsection
