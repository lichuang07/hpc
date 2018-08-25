@extends('admin.layout.app')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      高性能俱乐部
      <small>new member</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Admin</a></li>
      <li><a href="#"> new</a></li>
      <li class="active"> Partner</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="callout callout-info">
      <h4>Tip!</h4>

      <p>此页面为从宣传主页join us获得的信息,并未根据此信息进行用户注册,进行社团注册应先注册用户,再点击个人中心社员注册 </p>
    </div>
    <!-- Default box -->
    @foreach($newInfo as $info)
    <div class="box">
      <div class="box-header with-border">
        <h3 class="box-title">姓名:{{$info->name}}</h3>

        <div class="box-tools pull-right">
          <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
            <i class="fa fa-minus"></i></button>
          <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
            <i class="fa fa-times"></i></button>
        </div>
      </div>
      <div class="box-body">
       	<div class="row">
       		<div class="row">
       			<div class="col-sm-1"></div>
       			<div class="col-sm-3">院系</div>
       			<div class="col-sm-3">联系方式</div>
       			<div class="col-sm-4">备注</div>
       			<div class="col-sm-1"></div>
       		</div>
       		<div class="row">
       			<div class="col-sm-1"></div>
       			<div class="col-sm-3">{{$info->yuan}}</div>
       			<div class="col-sm-3">{{$info->mobile}}</div>
       			<div class="col-sm-4">{{$info->msg}}</div>
       			<div class="col-sm-1"></div>
       		</div>
       	</div>
      </div>
      <!-- /.box-body -->
      <div class="box-footer">
        <hr>
      </div>
      <!-- /.box-footer-->
    </div>
    @endforeach
    <!-- /.box -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

@stop