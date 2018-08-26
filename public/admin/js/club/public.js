
  $(function(){
    $('.box a[pid]').click(function(){
      var pid = $(this).attr('pid');
      if(confirm("删除此公告？")){
        $.get('/admins/club/del_public/'+pid, function(data,status){
          if(data.status==1){
            alert(data.msg);
            window.location.reload();
          }else{
            alert(data.msg);
          }
        });
      }
    });
  });