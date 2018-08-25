
  $(function(){
    $('#unAudit tr').click(function(){
      var uid = $(this).attr('uid');
      var status=$(this).children('td[status]').attr('status');
      if(status==1){
        if(confirm('是否通过审核？')){
          $.get('/admins/club/register_confirm/'+uid, function(data,status){
            if(data.status==1){
              alert('已通过审核');
              window.location.reload();
            }
          });
        }
      }else{
        alert('已注册');
      }
    });
    $('#audited a').click(function(){
      var uid = $(this).attr('uid');
      var method = $(this).attr('method');
      if(method==1){
        if(confirm('是否要设为管理员？')){
          $.get('/admins/manage/set_admin/'+uid, function(data,status){
            if(data.status==1){
              alert(data.msg);
              window.location.reload();
            }else{
              alert(data.msg);
            }
          });
        }
      }else{
        alert('暂空');
      }
    });
  });