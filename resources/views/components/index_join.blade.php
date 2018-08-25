<link rel="stylesheet" type="text/css" href="css/popuo-box.css">
<!-- pop-up-box -->
<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
<script src="http://malsup.github.io/min/jquery.form.min.js"></script>
<!--//pop-up-box -->
<script>
    $(document).ready(function() {
        $('.popup-with-zoom-anim').magnificPopup({
            type: 'inline',
            fixedContentPos: false,
            fixedBgPos: true,
            overflowY: 'auto',
            closeBtnInside: true,
            preloader: false,
            midClick: true,
            removalDelay: 300,
            mainClass: 'my-mfp-zoom-in'
        });
        $('#join').ajaxForm(function(){
            $('button.mfp-close').click();
            $
        });                                             
    });
</script>
<h2 class=""></h2>
<p class="wow zoomIn animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: zoomIn;">在超算领域，E级系统的脚步已经向我们走来，人工智能领域今年的发展更是如日中天，这些应用对于计算能力的追求皆是永无止境，超算发展前途光明。高性能计算俱乐部是在中国海洋大学数学科学学院高性能实验室基础上，依托中国海洋大学数学创新实验基地，为积极配合发展学校高性能领域教育和文化传播而建立起来的校级社团。内容涵盖计算机软硬件及系统，超级计算和高性能计算等项目。 </p>
<div class="pop-up">
<a class="book popup-with-zoom-anim button-isi zoomIn animated" data-wow-delay=".5s" href="#small-dialog">join now</a>
<div id="small-dialog" class="book-form mfp-hide">
    <form id='join' action="/joinus" method="post">
        {{ csrf_field() }}
        <label>年级院系专业</label>
        <input id="yuan" name="yuan" type="text" required="required">
        <div class="form-left">
            <label>姓名</label>
            <input id="name" name="name" type="text" value="name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '佚名';}" required="required">
        </div>
        <div class="form-right">
            <label>备注</label>
            <input id="msg" name="msg" type="text" value="可不填" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}">
        </div>
        <div class="clearfix"> </div>
        <label>手机</label>
        <input id="mobile" name="mobile" type="text" value="Contact Info" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Contact';}" required="required">
        <input id='joinus' type="submit" value="Join Now">
    </form>
</div>
<a id='joinbtn' class='pull-right' href="#join-dialog">     </a>
<div id="join-dialog" class="book-form mfp-hide">
    <form>
        <label>信息提交成功！</label>
        
    </form>
</div>
</div>