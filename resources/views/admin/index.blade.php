@extends('admin.layout.app')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      高性能俱乐部
      <small>暂时还没有想好</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#">Layout</a></li>
      <li class="active">Collapsed Sidebar</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="callout callout-info">
      <h4>Tip!</h4>

      <p>此页面暂时放首页填写报名信息的同学信息,还没有做用户管理,所以都可以到这个页面-_-</p>
    </div>
    <!-- Default box -->
    <div class="box">
    	@foreach($newInfo as $info)
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
      @endforeach
      <!-- /.box-footer-->
    </div>
    <!-- /.box -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

@stop