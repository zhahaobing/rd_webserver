<?php
	/*echo "<a href='' class='current'><h1 align='left'>会议纪要:<pre>http://192.168.179.130/srv/meeting_sum.git</h1></a><br />";
	echo "<a href='' class='current'><h1 align='left'>研发部资料汇总:&nbsp&nbsp&nbsphttp://192.168.179.130/srv/meeting_sum.git</h1></a><br />";
	echo "<a href='' class='current'><h1 align='left'>研发部培训资料:http://192.168.179.130/srv/meeting_sum.git</h1></a><br />";
	echo "<a href='' class='current'><h1 align='left'>行政部资料:http://192.168.179.130/srv/meeting_sum.git</h1></a><br />";*/
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>


    <link href="css/all.css" rel="stylesheet" type="text/css">
    <link href="js/editor/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="js/editor/css/froala_editor.min.css" rel="stylesheet" type="text/css">
</head>

<body style="background-color: #e6ecf5">
	<ul>
		<!--<li><a href='' class='current'><h1 align='left'>公共知识库:http://192.168.2.100/srv/public_library.git</h1></a><br /></li>
  	<li><a href='' class='current'><h1 align='left'>会议纪要:http://192.168.2.100/srv/meeting_sum.git</h1></a><br /></li>
  	<li><a href='' class='current'><h1 align='left'>研发部资料汇总:&nbsp&nbsp&nbsphttp://192.168.2.100/srv/rd_data.git</h1></a><br /></li>-->
  	<!--<li><a href='' class='current'><h1 align='left'>研发部培训资料:http://192.168.2.100/srv/rd_train.svn</h1></a><br /></li>-->
  	<li><a href='' class='current'><h1 align='left'>历年来BOMSVN版本库:svn://192.168.1.43/boms</h1></a><br /></li>
        <li><a href='' class='current'><h1 align='left'>4G模块GIT版本库:http://192.168.1.43:1001/4gdtu.git</h1></a><br /></li>
        <a href='' class='current'><h1 align='left'>行政部通知:http://192.168.2.100/srv/administrative_sum.svn</h1></a><br /></li>
        <li><a href='' class='current'><h1 align='left'>研发部网页版本库:svn://192.168.1.100/rd_web/trunk</h1></a><br /></li>
        <li><a href="https://192.168.2.100:443" target="_blank" class='current'><h1 align='left'>Gitlab首页:http://192.168.1.43:8000</h1></a><br /></li>

    </ul>
	
	<p>
    <tr>
    	<td align="center" class="notes"><font color="red">(1)若建立SVN版本库，版本库命名请用.svn结束！</font></td><br />
  		<td align="center" class="notes"><font color="red">(2)若建立GIT仓库，版本库命名请用.git结束！</font></td><br />
  		<td align="center" class="notes"><font color="red">(3)更多功能，敬请期待！</font></td>
  	</tr>
  </p>
  
<script  src="js/jquery/jQuery-2.2.0.min.js"></script>
<script src="js/editor/js/froala_editor.min.js"></script>

<script src="js/editor/js/plugins/tables.min.js"></script>
<script src="js/editor/js/plugins/lists.min.js"></script>
<script src="js/editor/js/plugins/colors.min.js"></script>
<script src="js/editor/js/plugins/media_manager.min.js"></script>
<script src="js/editor/js/plugins/font_family.min.js"></script>
<script src="js/editor/js/plugins/font_size.min.js"></script>
<script src="js/editor/js/plugins/block_styles.min.js"></script>
<script src="js/editor/js/plugins/video.min.js"></script>
<script src="js/date/js/laydate.js"></script>
<script>
    $(function(){
        $('#editor').editable({inlineMode: false, alwaysBlank: true})
    });
</script>
<script >
    /*$.validator.setDefaults({
        submitHandler: function() {
            alert("修改成功");
        }
    });
    $().ready(function() {
        $("#form_demo").validate();
    });*/
</script>
<script>
    !function(){
        laydate.skin('danlan');//
        laydate({elem: '#demo'});
        laydate({elem: '#demo1'});//
    }();
</script>
</body>
</html>
