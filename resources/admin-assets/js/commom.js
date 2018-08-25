/*
    创建 Modal 相关方法
*/
var Modal = {
    create:function(name,title,content,callback,arg,backdrop){

        if(typeof(title)=='undefined' || title === ''){
            title = "对话框";
        }
        var call = "onclick='Modal.hide(\""+name+"\");'";
        if(typeof(callback)!='undefined' && callback !== ''){
            call = "onclick='"+callback+"();Modal.hide(\""+name+"\")'";
            if(typeof(arg) != 'undefined' && arg !== ''){
                call = "onclick='"+callback+"(\""+arg+"\");Modal.hide(\""+name+"\")'";
            }
        }

        var html = "<div id='"+name+"-modal' tabindex='-1' role='dialog' aria-hidden='true' class='temp-modal modal fade'> ";
            html += "<div class='modal-dialog'>";
            html += "<div class='modal-content'>";
            html += "<div class='modal-header'>";
            html += "<button type='button' class='close' data-dismiss='modal' onclick='Modal.hide(\""+name+"\")'>&times;</button>";
            html += "<h4>"+title+"</h4>";
            html += "</div>";
            html += "<div class='modal-body'>"+content+"</div>";
            html += "<div class='modal-footer'>";
            html += "<button class='btn btn-default' data-dismiss='modal' onclick='Modal.hide(\""+name+"\")'>取消</button>";
            html += "<button class='btn btn-primary'"+call+">确定</button>";
            html += "</div></div></div></div>";

        $('#'+name+'-modal').remove();
        $('.temp-modal').remove();
        $("body").append(html);
        $('#'+name+'-modal').modal({backdrop:backdrop});
    },

    remote:function(name, remote_uri){
        if(typeof(name)=='undefined' || name === ''){
            name = "test";
        }
        var modal_name = name+'-modal';

        var html = "<div id='"+modal_name+"' tabindex='-1' role='dialog' aria-hidden='true' class='temp-modal modal fade'></div>";


        $('#'+modal_name).remove();
        $('.temp-modal').remove();
        $("section.content").append(html);
        $('#'+modal_name).modal({show:true, backdrop:'static'});
        $.get(remote_uri, function(data) {
            $('#'+modal_name).append(data);
        });
    },

    hide:function(name){
        $('#'+name+'-modal').modal('hide');
        $('#'+name+'-modal').remove();
    }
};
// --------------------------------------------------------------------
