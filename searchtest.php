<head> <meta http-equiv="Content-Type" content="text/html; charset=GB2312" /> </head>
made by kirito=��=14-X��������14��X�ࡣ��</br>

<?php  
$link=mysql_connect("localhost","cnevilco_student","123456");   
mysql_select_db("cnevilco_student", $link);          //ѡ�����ݿ�
$name=$_GET['name'];
$name = iconv("utf-8","gbk",$name);
$q = "SELECT * FROM studentinfo where name='$name'";                   //SQL��ѯ��� 
mysql_query("SET NAMES GB2312");          
$rs = mysql_query($q, $link);                     //��ȡ���ݼ� 
if(!$rs){die("Valid result!");} 
echo "<table>"; 
echo "<tr><td>����</td><td>רҵ&�༶</td></tr>"; 
while($row = mysql_fetch_row($rs)) echo "<tr><td>$row[1]</td><td>$row[2]</td></tr>";   //��ʾ���� 
echo "</table>"; 
mysql_free_result($rs);                    //�ر����ݼ�  
?> 