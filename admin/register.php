<html dir="rtl">

<head>
<meta http-equiv="Content-Language" content="en-us">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1256">
<link type="text/css" href="../all.css" rel="stylesheet">
<title>���� ����� 1</title>
</head>

<body>

<form method="POST" action="reg_action.php" dir="rtl">
  <div align="center">
    <table border="0" cellpadding="0" style="border-style:dashed; border-width:1px; border-collapse: collapse" width="474" dir="rtl" id="table1" height="454">
      <tr>
        <td align="right" height="24" colspan="2" bgcolor="#528ABD">
        <p align="center"><b><font color="#FFFFFF" size="4"><span lang="ar-sa">
		����� ����� ���� ����� �����</span></font></b></td>
      </tr>
      <tr>
        <td align="right" height="20" width="147">
        <p style="margin-top: 0; margin-bottom: 0">
		<font face="Tahoma" size="2" color="#528ABD"><span lang="ar-sa">&nbsp;��� 
		������� </span></font></td>
        <td width="260" align="right" height="20">
        <span lang="ar-sa">&nbsp;</span><input type="text" name="id" size="34" style="border:1px solid #C0C0C0; " class="tbox" dir="rtl"></td>
      </tr>
      <tr>
        <td align="right" height="20" bgcolor="#F1F5FA" width="147">
        <p style="margin-top: 0; margin-bottom: 0">
        <font color="#528ABD" face="Tahoma"><font size="2">
        &nbsp;</font><span lang="ar-sa"><font size="2">��� 
        ������</font></span></font></p></td>
        <td width="260" align="right" height="20" bgcolor="#F1F5FA">
        <span lang="ar-sa">&nbsp;</span><input type="text" name="iname" size="34" style="border:1px solid #C0C0C0; " class="tbox" dir="ltr"></td>
      </tr>
      <tr>
        <td align="right" height="20" width="147">
        <font color="#528ABD" size="2" face="Tahoma">
        <span lang="ar-sa">&nbsp;��� ������</span></font></td>
        <td width="260" align="right" height="20">
        <span lang="ar-sa">&nbsp;</span><select size="1" name="itype" class="tbox" value="<?php echo $id ?>" dir="rtl">
        <option value="t">t</option>
		<option value="g">g</option>
		<option value="c">c</option>
		<option value="p">p</option>
        </select></td>
      </tr>
      <tr>
        <td align="right" height="20" bgcolor="#F1F5FA" width="147">
        <span lang="ar-sa"><font face="Tahoma" size="2" color="#528ABD">&nbsp;����� 
		������</font></span></td>
        <td width="260" align="right" height="20" bgcolor="#F1F5FA">
        <input type="text" name="a_name" size="34" style="border:1px solid #C0C0C0; " class="tbox"></td>
      </tr>
      <tr>
        <td align="right" height="20" width="147">
        <font color="#528ABD" size="2" face="Tahoma">
        <span lang="ar-sa">&nbsp;</span></font><span lang="ar-sa"><font face="Tahoma" size="2" color="#528ABD">����� 
		���������</font></span></td>
        <td width="260" align="right" height="20">
        <input type="text" name="e_name" size="34" style="border:1px solid #C0C0C0; " class="tbox" dir="ltr"></td>
      </tr>
      <tr>
        <td align="right" height="20" bgcolor="#F1F5FA" width="147">
        <p style="margin-top: 0; margin-bottom: 0">
        <font color="#528ABD" size="2" face="Tahoma"><span lang="ar-sa">&nbsp;</span></font><span lang="ar-sa"><font face="Tahoma" size="2" color="#528ABD">����� 
		������ ������</font></span></p>
        </td>
        <td width="260" align="right" height="20" bgcolor="#F1F5FA">
        <input type="text" name="a_kind" size="34" style="border:1px solid #C0C0C0; " class="tbox" dir="rtl"></td>
      </tr>
      <tr>
        <td align="right" height="20" width="147">
        <p style="margin-top: 0; margin-bottom: 0">
        <font color="#528ABD" size="2" face="Tahoma"><span lang="ar-sa">&nbsp;</span></font><span lang="ar-sa"><font face="Tahoma" size="2" color="#528ABD">����� 
		������ ���������</font></span></p>
        </td>
        <td width="260" align="right" height="20">
        <input type="text" name="e_kind" size="34" style="border:1px solid #C0C0C0; " class="tbox" dir="ltr"></td>
      </tr>
      <tr>
        <td align="right" height="20" bgcolor="#F1F5FA" width="147">
        <p style="margin-top: 0; margin-bottom: 0">
        <font color="#528ABD" size="2" face="Tahoma"><span lang="ar-sa">&nbsp;���� 
		������</span></font></p>
        </td>
        <td width="260" align="right" height="20" bgcolor="#F1F5FA">
        <input type="text" name="size" size="34" style="border:1px solid #C0C0C0; " class="tbox" dir="ltr"></td>
      </tr>
      <tr>
        <td align="right" height="20" width="147"><span lang="ar-sa"> 
        <font size="2" color="#528ABD" face="Tahoma">&nbsp;��� ������</font></span></td>
        <td width="260" align="right" height="20">
        <input type="text" name="price" size="34" style="border:1px solid #C0C0C0; " class="tbox" dir="ltr"></td>
      </tr>
      <tr>
        <td align="right" height="20" bgcolor="#F1F5FA" width="147">
		<span lang="ar-sa">
        <font size="2" color="#528ABD" face="Tahoma">&nbsp;�������</font></span></td>
        <td width="260" align="right" height="20" bgcolor="#F1F5FA">
        <textarea rows="6" name="note" cols="26" dir="rtl"></textarea></td>
      </tr>
      <tr>
        <td align="right" height="20" bgcolor="#F1F5FA" width="147">
		<span lang="ar-sa">
        <font size="2" color="#528ABD" face="Tahoma">&nbsp;������� �������</font></span></td>
        <td width="260" align="right" height="20" bgcolor="#F1F5FA">
        <textarea rows="6" name="enote" cols="26" dir="ltr"></textarea></td>
      </tr>
      <tr>
        <td align="right" height="26" width="147">&nbsp;</td>
        <td width="260" align="right" height="26">
        <p align="left">
  <input type="submit" value="&#1573;&#1585;&#1587;&#1575;&#1604;" name="B1"><span lang="ar-sa">
        </span>
  <input type="reset" value="��� �������" name="B2" class="in1" id="i1"></td>
      </tr>
      </table>
    <p>&nbsp;</div>
</form>

</body>

</html>