<div class="register-box">
  <div class="register-logo">
    <a href="/admins"><b>高性能计算</b>俱乐部</a>
  </div>

  <div class="register-box-body">
    <p class="login-box-msg">社团注册</p>

    <form id="club_register" action="/admins/profile/new_cluber" method="post">
        {{ csrf_field() }}
      <div class="form-group has-feedback">
        <input name="name" type="text" class="form-control" placeholder="姓名" required="required">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input name="mobile" type="text" class="form-control" placeholder="手机号码" required="required">
        <span class="glyphicon glyphicon-phone form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input name="grade" type="text" class="form-control" placeholder="年级" required="required">
        <span class="glyphicon glyphicon-globe form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input name="college" type="text" class="form-control" placeholder="院系" required="required">
        <span class="glyphicon glyphicon-credit-card form-control-feedback"></span>
      </div>
      <div  class="form-group has-feedback">
        <input name="major" type="text" class="form-control" placeholder="专业" required="required">
        <span class="glyphicon glyphicon-book form-control-feedback"></span>
      </div>
       <div  class="form-group has-feedback">
        <input name="othermsg" type="text" class="form-control" placeholder="备注" required="required">
        <span class="glyphicon glyphicon-bookmark form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-6">
          <button type="reset" class="btn btn-primary btn-block btn-flat">取消</button>
        </div>
        <!-- /.col -->
        <div class="col-xs-6">
          <button type="submit" class="btn btn-primary btn-block btn-flat">注册</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

    <!-- <div class="social-auth-links text-center">
      <p>- OR -</p>
      <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign up using
        Facebook</a>
      <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign up using
        Google+</a>
    </div> -->

    <!-- <a href="login.html" class="text-center">I already have a membership</a> -->
  </div>
  <!-- /.form-box -->
</div>
<!-- /.register-box -->
<script type="text/javascript">
    $(function(){
        $('button[type="reset"]').click(function(){
            Modal.hide('club_register');
            $(this).hide();
            window.location.reload();
        });
        $('#club_register').ajaxForm(function(msg){
            if(msg.status==1){
                alert('注册成功');
                $(this).delay(2000,function(){
                window.location.reload();
                });
            }else{
                alert('注册失败，请检查是登录');
            }  
        });
    });
</script>