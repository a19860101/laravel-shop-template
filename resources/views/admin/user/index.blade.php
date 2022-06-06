@extends('admin.template.master')
@section('page-title')
會員管理
@endsection
@section('css-lib')
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/datatables.net-bs4/1.12.1/dataTables.bootstrap4.min.css"
        integrity="sha512-4IOvmZNJ0LXi2MjWUEZ5CYnjgwX3O84FY7thQroRr7/K0aj4ht/5QCPPw/5HtEBSMOI0ICknPMW5HiiSifC78w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/datatables.net-select-bs4/1.4.0/select.bootstrap4.min.css"
        integrity="sha512-WCZFsPGgrX2t0Io0uc8EkTreILrb4tpd2RRutfKUJrZPYuCuqWK+A6pm5MN/wcJg0PKpgKAXB65lqDW8WHe1kA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection
@section('main-title')
    會員管理
@endsection
@section('main')
    {{-- <h2 class="section-title">DataTables</h2>
    <p class="section-lead">
        We use 'DataTables' made by @SpryMedia. You can check the full documentation <a
            href="https://datatables.net/">here</a>.
    </p> --}}

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>會員列表</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped" id="table-1">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>會員email</th>
                                    <th>建立日期</th>
                                    <th>角色</th>
                                    <th>動作</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($users as $user)
                                <tr>
                                    <td>{{$user->id}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>{{$user->created_at}}</td>
                                    <td>
                                        {!! $user->role == 0 ? '<span class="badge badge-primary">管理員</span>':'<span class="badge badge-secondary">一般會員</span>'!!}
                                    </td>
                                    <td>
                                        @if(Auth::id() != $user->id)
                                        <form action="{{route('adminMemeberSetRole')}}" method="post">
                                            @csrf
                                            <input type="hidden" name="id" value="{{$user->id}}">

                                            <input type="submit" value="設定角色" class="btn btn-success">
                                        </form>
                                        @endif
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12">
        </div>
    </div>
@endsection
@section('js-lib')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables.net/1.12.1/jquery.dataTables.min.js"
        integrity="sha512-MOsicOaJyNWPgwMOE1q4sTPZK6KuUQTMBhkmzb0tFVSRxgx3VnGTwIyRme/IhBJQdWJkfTcIKozchO11ILrmSg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables.net-bs4/1.12.1/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables.net-select-bs4/1.4.0/select.bootstrap4.min.js"
        integrity="sha512-dc2FZrizXo7Qgp7fVmaxd9bDVoDAoDI8JfVR0MjkxUeJzPXa2M+R1nx7X0FVdlH6znGYo+BASCVsLnu5gTQQlQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
@endsection
