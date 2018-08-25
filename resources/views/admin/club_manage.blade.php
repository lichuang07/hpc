@extends('admin.layout.app')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      社团管理
      <small>社员管理</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Admin</a></li>
      <li><a href="#">club</a></li>
      <li class="active">manage</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="callout callout-info">
      <p>点击未注册信息行进行注册审核 </p>
    </div>
    <div  class="row">
      <div class="col-xs-12">
        <div id='unAudit' class="box">
          <div class="box-header">
            <h3 class="box-title">未审核注册信息</h3><small class="label pull-right bg-red">{{$unAudit->count()}}</small>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <table id="example2" class="table table-bordered table-hover">
              <thead>
              <tr>
                <th>姓名</th>
                <th>昵称</th>
                <th>手机</th>
                <th>邮箱</th>
                <th>年级</th>
                <th>院系</th>
                <th>专业</th>
                <th>状态</th>
                <th>备注</th>
              </tr>
              </thead>
              <tbody>
                @foreach($unAudit as $info)
              <tr uid="{{$info->id}}">
                <td>{{$info->truename}}</td>
                <td>{{$info->nickname}}</td>
                <td>{{$info->mobile}}</td>
                <td>{{$info->email}}</td>
                <td>{{$info->grade}}</td>
                <td>{{$info->college}}</td>
                <td>{{$info->major}}</td>
                <td status={{$info->status}}>
                  @switch($info->status)
                    @case(1)
                      <span>审核中</span>
                      @break
                    @case(2)
                       <span>已注册</span>
                      @break
                    @case(3)
                       <span>２</span>
                      @break
                    @case(4)
                       <span>３</span>
                      @break
                    @default
                      <span>尚未进行社团注册</span>
                    @endswitch
                </td>
                <td>{{$info->othermsg}}</td>
              </tr>
              @endforeach
              </tbody>
              <!-- <tfoot>
              <tr>
                <th>Rendering engine</th>
                <th>Browser</th>
                <th>Platform(s)</th>
                <th>Engine version</th>
                <th>CSS grade</th>
              </tr>
              </tfoot> -->
            </table>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->

        <div id='audited' class="box">
          <div class="box-header">
            <h3 class="box-title">社员管理</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
              <tr>
                <th>姓名</th>
                <th>院系</th>
                <th>专业</th>
                <th>手机</th>
                <th>权限</th>
                <th>操作</th>
                <th>确认</th>
              </tr>
              </thead>
              <tbody>
               @foreach($audited as $info)
              <tr uid="{{$info->id}}">
                <td>{{$info->truename}}</td>
                <td>{{$info->college}}</td>
                <td>{{$info->major}}</td>
                <td>{{$info->mobile}}</td>
                <td status={{$info->admin}}>
                  @switch($info->admin)
                    @case(1)
                      <span>管理员</span>
                      @break
                    @case(2)
                       <span>社员</span>
                      @break
                    @case(3)
                       <span></span>
                      @break
                    @case(4)
                       <span>未审核</span>
                      @break
                    @default
                      <span>尚未进行社团注册</span>
                    @endswitch
                </td>
                <td>
                  <div class="btn-group">
                  <button type="button" class="btn btn-default btn-flat">操作</button>
                  <button type="button" class="btn btn-default btn-flat dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <span class="caret"></span>
                    <span class="sr-only">Toggle Dropdown</span>
                  </button>
                  <ul class="dropdown-menu" role="menu">
                    <li><a uid="{{$info->id}}" method="1" href="#">设为管理员</a></li>
                    <li><a uid="{{$info->id}}" method="" href="#">暂无</a></li>
                    <li><a uid="{{$info->id}}" method="" href="#">暂无</a></li>
                    <li class="divider"></li>
                    <!-- <li><a href="#">Separated link</a></li> -->
                  </ul>
                </div>
                </td>
                <td>{{$info->othermsg}}</td>
              </tr>
              @endforeach
              </tbody>
              <!-- <tfoot>
              <tr>
                <th>Rendering engine</th>
                <th>Browser</th>
                <th>Platform(s)</th>
                <th>Engine version</th>
                <th>CSS grade</th>
              </tr>
              </tfoot> -->
            </table>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

@stop
