<?php
include_once("resources/functions.php");

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>注册新用户</title>


    <link href="css/all.css" rel="stylesheet" type="text/css">
    <link href="js/editor/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="js/editor/css/froala_editor.min.css" rel="stylesheet" type="text/css">
    <link href="css/login.css" rel="stylesheet" type="text/css">

</head>

<body style="background-color: #e6ecf5">

<form name="form2" method="post" action="">
    <div class="book_con01">

        <h1 class="book_h01">注册新用户信息</h1>
        <p class="book_p">
        <table class="book_table" border="1" cellpadding="10">
            <tr>
                <td>
                    <label class="td_label">用户ID</label>
                </td>
                <td class="reead"><?php echo uuid();?></td>

                <td><label class="td_label">手机号码<font color="red">*</font></label></td>
                <td>
                    <input type="text" id="id_username" class="book_input03" value="" />
                </td>
            </tr>

            <tr>
                <td>
                    <label class="td_label">姓名<font color="red">*</font></label>
                </td>

                <td><input type="text" id="id_username" class="book_input03" value=""/></td>
                <td>
                    <label class="td_label">性别</label>
                </td>
                <td>
                    <select name="gender_input" id="gender_input" style="width:120px" >
                        <option value="0" >男</option>
                        <option value="1" >女</option>
                    </select>
                </td>
            </tr>

            <tr>
                <td>
                    <label class="td_label">用户密码<font color="red">*</font></label>
                </td>

                <td><input type="password" id="id_userpasswd" class="book_input03" value=""/></td>
                <td>
                    <label class="td_label">确认用户密码<font color="red">*</font></label>
                </td>
                <td>
                    <input type="password" id="id_userpasswdcon" class="book_input03" value="" />
                </td>
            </tr>

            <tr><td><label class="td_label">工作单位</label></td>
                <td ><input type="text" id="id_company" class="book_input03" value = "南京陇源汇能电力科技有限公司" /></td>

                <td><label class="td_label">部门</label></td>
                <td >
                    <input type="text" id="id_department" class="book_input03" value=""/>
                </td>

            </tr>
            <tr>
                <td><label class="td_label">邮箱</label></td>
                <td>
                    <input type="text" id="id_eamil" class="book_input03" value=""/>
                </td>
                <td><label class="td_label">工作小组</label></td>
                <!--<td >
            <?php echo "--";?>
        </td>-->
                <td >
                    <select name="work_group" id="work_group" style="width:400px" >
                        <option value="0" >硬件小组</option>
                        <option value="1" >软件小组</option>
                        <option value="1" >测试小组</option>
                        <option value="1" >测试小组</option>
										</select>
                </td>
            </tr>
            <tr> 
            		<td><label class="td_label">GIT账号</label></td>
                <td>
                    <input type="text" id="id_gitname" class="book_input03" value=""/>
                </td>
                <td><label class="td_label">SVN账号</label></td>
                <td>
                    <input type="text" id="id_gitname" class="book_input03" value=""/>
                </td>
            </tr>
            <tr> <td><label class="td_label">GIT密码</label></td>
                <td >
                    <input type="password" id="id_gitpasswd" class="book_input03" value="" />
                </td>
                <td><label class="td_label">SVN密码</label></td>
                <td >
                    <input type="password" id="id_svnpasswd" class="book_input03" value="" />
                </td>
            </tr>

        </table>
        </p>
        <p class="book_foot">
            <input type="button" value="注册" style='font-size:40px' onclick="refreshText()"/>
            <input type="button" value="重置" style='font-size:40px' onclick="refreshText()"/>
            <!--<input type="button" value="关闭" style='font-size:40px' onclick="refreshText()"/>-->
        </p>
        <p>
            <tr>
                <td align="center" class="notes"><font color="red">(1)用户ID是用户的唯一标识，由系统自动创建且不可修改！</font></td><br />
                <td align="center" class="notes"><font color="red">(2)一个手机号码只允许申请一个账号！</font></td><br />
                <td align="center" class="notes"><font color="red">(3)带'*'选项为必填项！</font></td><br />
                <td align="center" class="notes"><font color="red">(4)更多功能，敬请期待！</font></td>
            </tr>
        </p>
    </div>
</form>
</body>
</html>