@extends('admin.template.master')
@section('page-title')
新增商品
@endsection

@section('main-title')
新增商品
@endsection
@section('main')
    <div class="row">
        <div class="col-6">
            <div class="card">
                <div class="card-header">
                    <h4>新增商品</h4>
                </div>
                <div class="card-body">
                    {{-- <div class="alert alert-info">
                        <b>Note!</b> Not all browsers support HTML5 type input.
                    </div> --}}
                    <div class="form-group">
                        <label>商品名稱</label>
                        <input type="text" class="form-control" >
                    </div>
                    <div class="form-group">
                        <label>商品分類</label>
                        <select class="form-control">
                            @foreach($categories as $category)
                            <option value="{{$category->id}}">{{$category->title}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">商品標籤</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>商品封面</label>
                        <input type="file" class="form-control">
                    </div>
                    {{-- <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control">
                    </div> --}}
                    <div class="form-group">
                        <label>商品敘述</label>
                        <textarea class="form-control" style="height:200px"></textarea>
                    </div>
                    <div class="form-group">
                        <label>價格</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>特價</label>
                        <input type="text" class="form-control">
                    </div>


                    <div class="form-group">
                        <label class="d-block">Checkbox</label>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">
                                Checkbox 1
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="defaultCheck3">
                            <label class="form-check-label" for="defaultCheck3">
                                Checkbox 2
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Date</label>
                        <input type="date" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>上架日期</label>
                        <input type="datetime-local" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>下架日期</label>
                        <input type="datetime-local" class="form-control">
                    </div>


                    <div class="form-group">
                        <label class="d-block">Radio</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" checked>
                            <label class="form-check-label" for="exampleRadios1">
                                Radio 1
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" checked>
                            <label class="form-check-label" for="exampleRadios2">
                                Radio 2
                            </label>
                        </div>
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
