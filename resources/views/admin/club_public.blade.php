@extends('admin.layout.app')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      公告管理
      <small>Preview</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#">club</a></li>
      <li class="active">public</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <!-- left column -->
      <div class="col-md-6">
        @if($publics->count())
        @foreach($publics as $info)
        <div class="box">
          <div class="box-header with-border">
            <h3 class="box-title">标题:{{$info->title}}</h3>

            <div class="box-tools pull-right">
              <a pid="{{$info->id}}" class="btn btn-flat">删除</a>
              <!-- <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fa fa-minus"></i></button>
              <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                <i class="fa fa-times"></i></button> -->
            </div>
          </div>
          <div class="box-body">
            <div class="row">
                <div class="col-md-12 text-center">
                  <p>{{$info->body}}</p>
                </div>
            </div>
          </div>
          <!-- /.box-body -->
          <div class="box-footer">
            发布人:{{$info->nickname}}
          </div>
          <!-- /.box-footer-->
        </div>
        @endforeach
        @else
          <div>
            <hr>
            暂无公告
          </div>
        @endif
      </div>
      <!--/.col (left) -->
      <!-- right column -->
      <div class="col-md-6">
        <!-- Horizontal Form -->
        <div class="box box-info">
          <div class="box-header with-border">
            <h3 class="box-title">发布公告</h3>
          </div>
          <!-- /.box-header -->
        </div>
        <!-- /.box -->
        <!-- general form elements disabled -->
        <div class="box box-warning">
          <div class="box-header with-border">
            <h3 class="box-title">编写公告</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <form role="form" action="/admins/club/new_publics" method="post">
              {{csrf_field()}}
              <!-- text input -->
              <div class="form-group">
                <label>标题</label>
                <input type="text" name="title" class="form-control" placeholder="Enter ...">
              </div>

              <!-- textarea -->
              <div class="form-group">
                <label>内容</label>
                <textarea class="form-control" name="body" rows="6" placeholder="Enter ..."></textarea>
              </div>
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">发布</button>
              </div>
              @if(isset($msg) && $msg['status']==1)
              <div class="alert alert-success">
                <a href="#" class="close" data-dismiss="alert">
                  &times;
                </a>
                <strong>{{$msg['msg']}}</strong>
              </div>
              @endif
              <!-- input states -->
              <!-- <div class="form-group has-success">
                <label class="control-label" for="inputSuccess"><i class="fa fa-check"></i> Input with success</label>
                <input type="text" class="form-control" id="inputSuccess" placeholder="Enter ...">
                <span class="help-block">Help block with success</span>
              </div>
              <div class="form-group has-warning">
                <label class="control-label" for="inputWarning"><i class="fa fa-bell-o"></i> Input with
                  warning</label>
                <input type="text" class="form-control" id="inputWarning" placeholder="Enter ...">
                <span class="help-block">Help block with warning</span>
              </div>
              <div class="form-group has-error">
                <label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i> Input with
                  error</label>
                <input type="text" class="form-control" id="inputError" placeholder="Enter ...">
                <span class="help-block">Help block with error</span>
              </div> -->

              <!-- checkbox -->
              <!-- <div class="form-group">
                <div class="checkbox">
                  <label>
                    <input type="checkbox">
                    Checkbox 1
                  </label>
                </div>

                <div class="checkbox">
                  <label>
                    <input type="checkbox">
                    Checkbox 2
                  </label>
                </div>

                <div class="checkbox">
                  <label>
                    <input type="checkbox" disabled>
                    Checkbox disabled
                  </label>
                </div>
              </div> -->

              <!-- radio -->
              <!-- <div class="form-group">
                <div class="radio">
                  <label>
                    <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                    Option one is this and that&mdash;be sure to include why it's great
                  </label>
                </div>
                <div class="radio">
                  <label>
                    <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                    Option two can be something else and selecting it will deselect option one
                  </label>
                </div>
                <div class="radio">
                  <label>
                    <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3" disabled>
                    Option three is disabled
                  </label>
                </div>
              </div> -->

              <!-- select -->
              <!-- <div class="form-group">
                <label>Select</label>
                <select class="form-control">
                  <option>option 1</option>
                  <option>option 2</option>
                  <option>option 3</option>
                  <option>option 4</option>
                  <option>option 5</option>
                </select>
              </div>
              <div class="form-group">
                <label>Select Disabled</label>
                <select class="form-control" disabled>
                  <option>option 1</option>
                  <option>option 2</option>
                  <option>option 3</option>
                  <option>option 4</option>
                  <option>option 5</option>
                </select>
              </div> -->

              <!-- Select multiple-->
              <!-- <div class="form-group">
                <label>Select Multiple</label>
                <select multiple class="form-control">
                  <option>option 1</option>
                  <option>option 2</option>
                  <option>option 3</option>
                  <option>option 4</option>
                  <option>option 5</option>
                </select>
              </div>
              <div class="form-group">
                <label>Select Multiple Disabled</label>
                <select multiple class="form-control" disabled>
                  <option>option 1</option>
                  <option>option 2</option>
                  <option>option 3</option>
                  <option>option 4</option>
                  <option>option 5</option>
                </select>
              </div> -->

            </form>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </div>
      <!--/.col (right) -->
    </div>
    <!-- /.row -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@stop