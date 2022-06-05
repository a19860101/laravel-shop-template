@extends('admin.template.master')
@section('page-title')
商品編輯
@endsection

@section('main-title')
    商品編輯
@endsection
@section('main')
    <div class="row">
        <div class="col-6">
            <div class="card">
                <div class="card-header">
                    <h4>商品編輯</h4>
                </div>
                <div class="card-body">
                    {{-- <div class="alert alert-info">
                        <b>Note!</b> Not all browsers support HTML5 type input.
                    </div> --}}
                    <div class="form-group">
                        <label>商品名稱</label>
                        <input type="text" class="form-control" value="{{$product->title}}">
                    </div>
                    <div class="form-group">
                        <label>商品分類</label>
                        <select class="form-control">
                            <option>Option 1</option>
                            <option>Option 2</option>
                            <option>Option 3</option>
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
                        <input type="text" class="form-control" value="{{$product->price}}">
                    </div>
                    <div class="form-group">
                        <label>特價</label>
                        <input type="text" class="form-control" value="{{$product->sale}}">
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
                    <button class="btn btn-primary mr-1" type="submit">儲存</button>
                    <button class="btn btn-secondary" type="button" onclick="history.back()">取消</button>
                </div>
            </div>
        </div>
    </div>
@endsection
