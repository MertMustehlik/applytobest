@extends('admin.admin-temp')
@section('title') Admin Panel/Settings - Apply @endsection
@section('css')
<!-- Google Font: Source Sans Pro -->
<link rel="stylesheet" href="{{asset('admin/https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback')}}">
<!-- Font Awesome -->
<link rel="stylesheet" href="{{asset('admin/plugins/fontawesome-free/css/all.min.css')}}">
<!-- Theme style -->
<link rel="stylesheet" href="{{asset('admin/dist/css/adminlte.min.css')}}">
@endsection

@section('master')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Settings Page</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Settings</h3>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                </div>
            </div>
            <div class="card-body">
                <!-- form start -->
                <form action="{{route('admin-settings-post')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                        @if($errors->all())
                            @foreach ($errors->all() as $message)
                                <div class="alert alert-warning" style="background-color: #fff190; border: #fff190;">{{$message}}</div>
                            @endforeach
                        @endif
                        @if(session('success'))
                            <div class="alert alert-success">{{session('success')}}</div>
                        @endif
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Favicon</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="exampleInputFile" name="favicon">
                                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Phone</label>&nbsp
                            @if($datas->phoneDurum == 1)
                                <a href="{{route('admin-settings-durum',['phoneDurum',1])}}" class="badge badge-success">Active</a>
                            @else
                                <a href="{{route('admin-settings-durum',['phoneDurum',2])}}" class="badge badge-danger">Passive</a>
                            @endif
                            <input type="number" class="form-control" id="exampleInputEmail1" placeholder="Enter phone" value="{{$datas->phone}}" name="phone">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Mail</label>&nbsp
                            @if($datas->mailDurum == 1)
                                <a href="{{route('admin-settings-durum',['mailDurum',1])}}" class="badge badge-success">Active</a>
                            @else
                                <a href="{{route('admin-settings-durum',['mailDurum',2])}}" class="badge badge-danger">Passive</a>
                            @endif
                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter mail" value="{{$datas->mail}}" name="mail">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Linkedin Url</label>&nbsp
                            @if($datas->linkedinDurum == 1)
                                <a href="{{route('admin-settings-durum',['linkedinDurum',1])}}" class="badge badge-success">Active</a>
                            @else
                                <a href="{{route('admin-settings-durum',['linkedinDurum',2])}}" class="badge badge-danger">Passive</a>
                            @endif
                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter linkedin url" value="{{$datas->linkedin}}" name="linkedin">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Whatsapp Number</label>&nbsp
                            @if($datas->whatsappDurum == 1)
                                <a href="{{route('admin-settings-durum',['whatsappDurum',1])}}" class="badge badge-success">Active</a>
                            @else
                                <a href="{{route('admin-settings-durum',['whatsappDurum',2])}}" class="badge badge-danger">Passive</a>
                            @endif
                            <input type="number" class="form-control" id="exampleInputEmail1" placeholder="Enter whatsapp number" value="{{$datas->whatsapp}}" name="whatsapp">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Instagram Url</label>&nbsp
                            @if($datas->instagramDurum == 1)
                                <a href="{{route('admin-settings-durum',['instagramDurum',1])}}" class="badge badge-success">Active</a>
                            @else
                                <a href="{{route('admin-settings-durum',['instagramDurum',2])}}" class="badge badge-danger">Passive</a>
                            @endif
                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter instagram url" value="{{$datas->instagram}}" name="instagram">
                        </div>
                        <button type="submit" class="btn btn-success">Update</button>
                    </div>
                    <!-- /.card-body -->
                </form>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                &nbsp
            </div>
            <!-- /.card-footer-->
        </div>
        <!-- /.card -->

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection

@section('js')
<!-- jQuery -->
<script src="{{asset('admin/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('admin/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- bs-custom-file-input -->
<script src="{{asset('admin/plugins/bs-custom-file-input/bs-custom-file-input.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('admin/dist/js/adminlte.min.js')}}"></script>
<!-- Page specific script -->
<script>
    $(function() {
        bsCustomFileInput.init();
    });
</script>
@endsection