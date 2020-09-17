<?php
include_once("resources/functions.php");
//echo uuid();
session_start();
//$_SESSION['USERNAME'] = null;

//echo "USERNAME:" . $_SESSION['USERNAME'] . "<br />";

if(!isset($_SESSION['USERNAME']))
{
	//echo " <h1 align='center'>您还未登录,请点击这里登录!</h1>";
	//echo "<a href='javascript:showDialog()' class='current'><h1 align='center'>您还未登录,请点击这里登录!</h1></a>";
	//exit(-1);
}
else
{
	//连接数据库
	$db_name = "dipper_galaxy";//数据库名
	$connID=mysqli_connect("127.0.0.1","root","bdyh1234");
	mysqli_select_db($connID,$db_name);
	mysqli_query($connID,"set names utf8");
	
	$msg_query = "select * from user_table where tel_number=".$_SESSION['USERNAME'];
	$result = mysqli_query($connID, $msg_query);
	$myrow=mysqli_fetch_array($result);
	if($myrow)
	{
		$user_id = $myrow[0];//用户ID
		$username = $myrow[1];//用户名
		$userpasswd = $myrow[2];//用户密码
		$gender = $myrow[3];//性别 0:女，1:男
		$department = $myrow[4];//部门
		$tel_number = $myrow[5];//电话号码
		$email_addr = $myrow[6];//邮箱
		$task_group = $myrow[7];//工作小组
		$company = $myrow[8];//公司名
		$svn_username = $myrow[9];//SVN账号用户名
		$svn_passwd = $myrow[10];//SVN账号密码
		$git_username = $myrow[11];//GIT账号用户名
		$git_passwd = $myrow[12];//GIT账号密码
		//echo $myrow[2] . "<br />";
		//echo $myrow[1] . "<br />";
		//echo $myrow[3] . "<br />";	
		$_SESSION['USERNAME'] = $myrow[5];
	}
	else
	{
		$_SESSION['USERNAME'] = null;
	}
}

if(@$_POST['submit'] != "")
{
	$username_login = $_POST['username_login'];
	$userpasswd_login = $_POST['userpasswd_login'];
	//$_SESSION['USERNAME'] = $_POST['username_login'];
	
	//连接数据库
	$db_name = "dipper_galaxy";//数据库名
	$connID=@mysqli_connect("127.0.0.1","root","bdyh1234");
	@mysqli_select_db($connID,$db_name);
	@mysqli_query($connID,"set names utf8");
	
	$msg_query = "select * from user_table where tel_number=".$username_login;
	@$result = mysqli_query($connID, $msg_query);

    $log_result = 0;
	while($myrow=@mysqli_fetch_array($result))
	{
		if($userpasswd_login == $myrow[2]) //&& (strlen($userpasswd_login) == strlen($myrow[2])) )
		{
			$user_id = $myrow[0];//用户ID
			$username = $myrow[1];//用户名
			$userpasswd = $myrow[2];//用户密码
			$gender = $myrow[3];//性别 0:女，1:男
			$department = $myrow[4];//部门
			$tel_number = $myrow[5];//电话号码
			$email_addr = $myrow[6];//邮箱
			$task_group = $myrow[7];//工作小组
			$company = $myrow[8];//公司名
			$svn_username = $myrow[9];//SVN账号用户名
			$svn_passwd = $myrow[10];//SVN账号密码
			$git_username = $myrow[11];//GIT账号用户名
			$git_passwd = $myrow[12];//GIT账号密码
			//echo $myrow[2] . "<br />";
			//echo $myrow[1] . "<br />";
			//echo $myrow[3] . "<br />";	
			$_SESSION['USERNAME'] = $myrow[5];
            $log_result = 1;
            break;
		}
		else
		{
			//$_SESSION['USERNAME'] = null;
            $log_result = 0;
			//echo "登录名:" . $username_login . " 数据库:" . $myrow[5] . "<br />";
			//echo "登录密码:" . $userpasswd_login . " 数据库:" . $myrow[2] . "<br />";
		}
	}

    if($log_result == 1)
    {
        echo "<script>alert('登录成功!');</script>";
    }
    else
    {
        echo "<script>alert('用户名或密码错误!');</script>";
    }
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>个人信息维护</title>


    <link href="css/all.css" rel="stylesheet" type="text/css">
    <link href="js/editor/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="js/editor/css/froala_editor.min.css" rel="stylesheet" type="text/css">
		<link href="css/login.css" rel="stylesheet" type="text/css">
		
</head>

<body style="background-color: #e6ecf5">


<?php if(!isset($_SESSION['USERNAME'])) {
	echo "<a href='javascript:showDialog()' class='current'><h1 align='center'>您还未登录,请点击这里登录!</h1></a>";
?>
<!--登录对话框-->
<form name="form1" method="post" action="">
<div class="ui-mask" id="mask" onselectstart="return false"></div>   
<div class="ui-dialog" id="dialogMove" onselectstart='return false;'>
    <div class="ui-dialog-title" id="dialogDrag"  onselectstart="return false;" >
        登录通行证
        <a class="ui-dialog-closebutton" href="javascript:hideDialog();"></a>
    </div>
    <div class="ui-dialog-content">
        <div class="ui-dialog-l40 ui-dialog-pt15">
            <input class="ui-dialog-input ui-dialog-input-username" type="input" id="username_login" name="username_login" placeholder="手机/邮箱/用户ID" />
        </div>
        <div class="ui-dialog-l40 ui-dialog-pt15">
            <input class="ui-dialog-input ui-dialog-input-password" type="password" id="userpasswd_login" name="userpasswd_login" placeholder="密码" />
        </div>
        <div class="ui-dialog-l40">
            <a href="#">忘记密码</a>
        </div>
        <div>
            <input name="submit" type="submit" value="登录" class="ui-dialog-submit"; >
        </div>
        <div class="ui-dialog-l40">
            <a href="register.php">立即注册</a>
        </div>
    </div>
</div>
</form>
<?php } else {?>
<!--个人信息展示对话框-->
<form name="form2" method="post" action="">
<div class="book_con01">

    <h1 class="book_h01">个人详情</h1>
    <p class="book_p">
        <table class="book_table" border="1" cellpadding="10">
    <tr>
      <td>
        <label class="td_label">用户ID</label>
    	</td>
    	<td class="reead"><?php echo $user_id;?></td>
    	
    	<td><label class="td_label">手机号码</label></td>
        <td class="reead">
            <?php echo $tel_number;?>
        </td>
  	</tr>
    
    <tr>
        <td>
        <label class="td_label">姓名</label>
    </td>
        
        <td><input type="text" id="id_username" class="book_input03" value="<?php echo $username;?>"/></td>
        <td>
            <label class="td_label">性别</label>
        </td>
        <td>
        	<input type="text" id="id_gender" class="book_input03" value="<?php if($gender == 0) echo "女";else echo "男";?>" />
        </td>
    </tr>
    
    <tr>
        <td>
        <label class="td_label">用户密码</label>
    </td>
        
        <td><input type="password" id="id_userpasswd" class="book_input03" value="<?php echo $userpasswd;?>"/></td>
        <td>
            <label class="td_label">确认用户密码</label>
        </td>
        <td>
        	<input type="password" id="id_userpasswdcon" class="book_input03" value="<?php echo $userpasswd;?>" />
        </td>
    </tr>
    
    <tr><td><label class="td_label">工作单位</label></td>
        <td ><input type="text" id="id_company" class="book_input03" value = "<?php echo $company;?>" /></td>

        <td><label class="td_label">部门</label></td>
        <td >
            <input type="text" id="id_department" class="book_input03" value="<?php echo $department;?>"/>
        </td>

    </tr>
    <tr>
    	<td><label class="td_label">邮箱</label></td>
        <td>
					<input type="text" id="id_eamil" class="book_input03" value="<?php echo $email_addr;?>"/>
        </td>
    	<td><label class="td_label">工作小组</label></td>
    		<!--<td >
            <?php echo "--";?>
        </td>-->
        <td ><select>
            <option>服务器管理员</option>
            <option>技术产品战略组</option>
            <option>低压综保产品组</option>
            <option>系统信息平台组</option>
            <option>连续供电产品组</option>
            <option>硬件开发组</option>
            <option>嵌入式软件开发组</option>
            <option>系统软件开发组</option>
            <option>应用软件开发组</option>
        </select></td>
    </tr>
    <tr> <td><label class="td_label">GIT账号</label></td>
        <td class="reead">
            <?php echo $git_username;?>
        </td>
        <td><label class="td_label">SVN账号</label></td>
        <td class="reead">
            <?php echo $svn_username;?>
        </td>


    </tr>
		<tr> <td><label class="td_label">GIT密码</label></td>
        <td >
            <input type="password" id="id_gitpasswd" class="book_input03" value="<?php echo $git_passwd;?>" />
        </td>
        <td><label class="td_label">SVN密码</label></td>
        <td >
            <input type="password" id="id_svnpasswd" class="book_input03" value="<?php echo $svn_passwd;?>" />
        </td>
    </tr>

</table>
    </p>
    <p class="book_foot">
    	<input type="button" value="保存" style='font-size:40px' onclick="refreshText()"/>
    	<input type="button" value="重置" style='font-size:40px' onclick="refreshText()"/>
    	<input type="button" value="刷新" style='font-size:40px' onclick="refreshText()"/>
    	<!--<input type="button" value="关闭" style='font-size:40px' onclick="refreshText()"/>-->
    </p>
    <p>
    	<tr>
    		<td align="center" class="notes"><font color="red">(1)用户ID是用户的唯一标识，由系统自动创建且不可修改！</font></td><br />
  			<td align="center" class="notes"><font color="red">(2)如需更换手机号码，请联系管理员！</font></td><br />
  			<td align="center" class="notes"><font color="red">(3)更多功能，敬请期待！</font></td>
  		</tr>
  	</p>
</div>
</form>
<?php } ?>

<!-- added by zhahaobing for login 20190901 start+++ -->
<?php if(!isset($_SESSION['USERNAME'])) {?>
<script>
	var dialogInstace , onMoveStartId;  //  用于记录当前可拖拽的对象
//  获取元素对象  
function g(id){return document.getElementById(id);}
//  自动居中元素（el = Element）
function autoCenter( el ){
    var bodyW = document.documentElement.clientWidth;
    var bodyH = document.documentElement.clientHeight;
    var elW = el.offsetWidth;
    var elH = el.offsetHeight;
    el.style.left = (bodyW-elW)/2 + 'px';
    el.style.top = (bodyH-elH)/2 + 'px';
}
//  自动扩展元素到全部显示区域
function fillToBody( el ){
    el.style.width  = document.documentElement.clientWidth  +'px';
    el.style.height = document.documentElement.clientHeight + 'px';
}
//  Dialog实例化的方法
function Dialog( dragId , moveId ){
    var instace = {} ;
    instace.dragElement  = g(dragId);   //  允许执行 拖拽操作 的元素
    instace.moveElement  = g(moveId);   //  拖拽操作时，移动的元素
    instace.mouseOffsetLeft = 0;            //  拖拽操作时，移动元素的起始 X 点
    instace.mouseOffsetTop = 0;         //  拖拽操作时，移动元素的起始 Y 点
    instace.dragElement.addEventListener('mousedown',function(e){
        var e = e || window.event;
        dialogInstace = instace;
        instace.mouseOffsetLeft = e.pageX - instace.moveElement.offsetLeft ;
        instace.mouseOffsetTop  = e.pageY - instace.moveElement.offsetTop ;
        // instace.moveElement.style.zIndex = zIndex ++;
    })
    return instace;
}
//  在页面中侦听 鼠标弹起事件
document.onmouseup = function(e){
    dialogInstace = false;
    clearInterval(onMoveStartId);
}
//  在页面中侦听 鼠标移动事件
document.onmousemove = function(e) {
    var e = e || window.event;
    var instace = dialogInstace;
    if (instace) {
        var maxX = document.documentElement.clientWidth -  instace.moveElement.offsetWidth;
        var maxY = document.documentElement.clientHeight - instace.moveElement.offsetHeight ;
        instace.moveElement.style.left = Math.min( Math.max( ( e.pageX - instace.mouseOffsetLeft) , 0 ) , maxX) + "px";
        instace.moveElement.style.top  = Math.min( Math.max( ( e.pageY - instace.mouseOffsetTop ) , 0 ) , maxY) + "px";
    }
    if(e.stopPropagation) {
        e.stopPropagation();
    } else {
        e.cancelBubble = true;
    }
};
//  拖拽对话框实例对象
Dialog('dialogDrag','dialogMove');
function onMoveStart(){
}
//  重新调整对话框的位置和遮罩，并且展现
function showDialog(){
    g('dialogMove').style.display = 'block';
    g('mask').style.display = 'block';
    autoCenter( g('dialogMove') );
    fillToBody( g('mask') );
}
//  关闭对话框
function hideDialog(){
    g('dialogMove').style.display = 'none';
    g('mask').style.display = 'none';
}
</script>
<?php } ?>
<!-- added by zhahaobing for login 20190901 end+++ -->
<script>
function form_check(form)
{
	
}

function refreshText()
{
<?php if(isset($_SESSION['USERNAME'])) {?>
	var gender = "<?php if($gender == 0) echo "女";else echo "男";?>";
	var userpasswd = "<?php echo $userpasswd;?>";
	var userpasswdcon = "<?php echo $userpasswd;?>";
	var company = "<?php echo $company;?>";
	var department = "<?php echo $department;?>";
	var eamil = "<?php echo $email_addr;?>";
	var gitpasswd = "<?php echo $git_passwd;?>";
	var svnpasswd = "<?php echo $svn_passwd;?>";
	var name = "<?php echo $username;?>";
	
	document.getElementById("id_username").value = name;
	document.getElementById("id_gender").value = gender;
	document.getElementById("id_userpasswd").value = userpasswd;
	document.getElementById("id_userpasswdcon").value = userpasswdcon;
	document.getElementById("id_company").value = company;
	document.getElementById("id_department").value = department;
	document.getElementById("id_eamil").value = eamil;
	document.getElementById("id_gitpasswd").value = gitpasswd;
	document.getElementById("id_svnpasswd").value = svnpasswd;
<?php } ?>
}
</script>
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
<script>
    $(function(){
        $('#editor').editable({inlineMode: false, alwaysBlank: true})
    });
</script>
</body>
</html>
