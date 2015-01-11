<head> <meta http-equiv="Content-Type" content="text/html; charset=GB2312" /> </head>
made by kirito=。=14-X代表你是14届X班。。</br>

<?php  
$link=mysql_connect("localhost","cnevilco_student","123456");   
mysql_select_db("cnevilco_student", $link);          //选择数据库
$name=$_GET['name'];
$name = iconv("utf-8","gbk",$name);
$q = "SELECT * FROM studentinfo where name='$name'";                   //SQL查询语句 
mysql_query("SET NAMES GB2312");          
$rs = mysql_query($q, $link);                     //获取数据集 
if(!$rs){die("Valid result!");} 
echo "<table>"; 
echo "<tr><td>姓名</td><td>专业&班级</td></tr>"; 
while($row = mysql_fetch_row($rs)) echo "<tr><td>$row[1]</td><td>$row[2]</td></tr>";   //显示数据 
echo "</table>"; 
mysql_free_result($rs);                    //关闭数据集  
?> 