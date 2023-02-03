<?php
import_request_variables("gPc");
define('REGISTER_GLOBALS', 'on');

	include "db.php";

    $sql = "SELECT * FROM data WHERE id='$id'";
	$qr = mysql_query($sql);
	$cc = mysql_num_rows($qr);

		$id = mysql_result($qr, 0, "id");
		$idb =  mysql_result($qr, 0, "id");
		$iname = mysql_result($qr, 0, "iname");
		$itype = mysql_result($qr, 0, "itype");
		$a_name = mysql_result($qr, 0, "a_name");
		$e_name = mysql_result($qr, 0, "e_name");
		$a_kind = mysql_result($qr, 0, "a_kind");		
		$size = mysql_result($qr, 0, "size");		
		$price = mysql_result($qr, 0, "price");				
		$note = mysql_result($qr, 0, "note");						
		$enote = mysql_result($qr, 0, "enote");						

?>

<form method="POST" action="per_replace.php" dir="rtl">
  <div align="center">
    <table border="0" cellpadding="0" style="border-style:dashed; border-width:1px; border-collapse: collapse" width="474" dir="rtl" id="table1" height="454">
      <tr>
        <td align="right" height="24" colspan="2" bgcolor="#528ABD">
        <p align="center"><b><font color="#FFFFFF" size="4"><span lang="ar-sa">
		‰„Ê–Ã  ⁄œÌ· ’Ê—… ·„Êﬁ⁄ «·»«—</span></font></b></td>
      </tr>
      <tr>
        <td align="right" height="20" width="147">
        <p style="margin-top: 0; margin-bottom: 0">
		<font face="Tahoma" size="2" color="#528ABD"><span lang="ar-sa">&nbsp;—ﬁ„ 
		«· ⁄—Ì› </span></font></td>
        <td width="260" align="right" height="20">
        <span lang="ar-sa">&nbsp;</span><input type="text" name="id" size="34" style="border:1px solid #C0C0C0; " class="tbox" dir="rtl" value="<?php echo $id ?>"></td>
      </tr>
      <tr>
        <td align="right" height="20" bgcolor="#F1F5FA" width="147">
        <p style="margin-top: 0; margin-bottom: 0">
        <font color="#528ABD" face="Tahoma"><font size="2">
        &nbsp;</font><span lang="ar-sa"><font size="2">«”„ 
        «·’Ê—…</font></span></font></p></td>
        <td width="260" align="right" height="20" bgcolor="#F1F5FA">
        <span lang="ar-sa">&nbsp;</span><input type="text" name="iname" size="34" style="border:1px solid #C0C0C0; " class="tbox" dir="ltr" value="<?php echo $iname ?>"></td>
      </tr>
      <tr>
        <td align="right" height="20" width="147">
        <font color="#528ABD" size="2" face="Tahoma">
        <span lang="ar-sa">&nbsp;‰Ê⁄ «·’Ê—…</span></font></td>
        <td width="260" align="right" height="20">
        <span lang="ar-sa">&nbsp;</span>
        <select size="1" name="itype" class="tbox" value="<?php echo $id ?>" dir="rtl">
        <option value="t">t</option>
		<option value="g">g</option>
		<option value="c">c</option>
		<option value="p">p</option>
        </select></td>
      </tr>
      <tr>
        <td align="right" height="20" bgcolor="#F1F5FA" width="147">
        <span lang="ar-sa"><font face="Tahoma" size="2" color="#528ABD">&nbsp;«·«”„ 
		«·⁄—»Ì</font></span></td>
        <td width="260" align="right" height="20" bgcolor="#F1F5FA">
        <input type="text" name="a_name" size="34" style="border:1px solid #C0C0C0; " class="tbox" value="<?php echo $a_name ?>"></td>
      </tr>
      <tr>
        <td align="right" height="20" width="147">
        <font color="#528ABD" size="2" face="Tahoma">
        <span lang="ar-sa">&nbsp;</span></font><span lang="ar-sa"><font face="Tahoma" size="2" color="#528ABD">«·«”„ 
		«·≈‰Ã·Ì“Ì</font></span></td>
        <td width="260" align="right" height="20">
        <input type="text" name="e_name" size="34" style="border:1px solid #C0C0C0; " class="tbox" dir="ltr" value="<?php echo $e_name ?>"></td>
      </tr>
      <tr>
        <td align="right" height="20" bgcolor="#F1F5FA" width="147">
        <p style="margin-top: 0; margin-bottom: 0">
        <font color="#528ABD" size="2" face="Tahoma"><span lang="ar-sa">&nbsp;</span></font><span lang="ar-sa"><font face="Tahoma" size="2" color="#528ABD"> ’‰Ì› 
		«·’Ê—… «·⁄—»Ì</font></span></p>
        </td>
        <td width="260" align="right" height="20" bgcolor="#F1F5FA">
        <input type="text" name="a_kind" size="34" style="border:1px solid #C0C0C0; " class="tbox" dir="rtl" value="<?php echo $a_kind ?>"></td>
      </tr>
      <tr>
        <td align="right" height="20" width="147">
        <p style="margin-top: 0; margin-bottom: 0">
        <font color="#528ABD" size="2" face="Tahoma"><span lang="ar-sa">&nbsp;</span></font><span lang="ar-sa"><font face="Tahoma" size="2" color="#528ABD"> ’‰Ì› 
		«·’Ê—… «·≈‰Ã·Ì“Ì</font></span></p>
        </td>
        <td width="260" align="right" height="20">
        <input type="text" name="e_kind" size="34" style="border:1px solid #C0C0C0; " class="tbox" dir="ltr" value="<?php echo $e_kind ?>"></td>
      </tr>
      <tr>
        <td align="right" height="20" bgcolor="#F1F5FA" width="147">
        <p style="margin-top: 0; margin-bottom: 0">
        <font color="#528ABD" size="2" face="Tahoma"><span lang="ar-sa">&nbsp;„ﬁ«” 
		«·’Ê—…</span></font></p>
        </td>
        <td width="260" align="right" height="20" bgcolor="#F1F5FA">
        <input type="text" name="size" size="34" style="border:1px solid #C0C0C0; " class="tbox" value="<?php echo $size ?>" dir="ltr"></td>
      </tr>
      <tr>
        <td align="right" height="20" width="147"><span lang="ar-sa"> 
        <font size="2" color="#528ABD" face="Tahoma">&nbsp;”⁄— «··ÊÕ…</font></span></td>
        <td width="260" align="right" height="20">
        <input type="text" name="price" size="34" style="border:1px solid #C0C0C0; " class="tbox" dir="ltr" value="<?php echo $price ?>"></td>
      </tr>
      <tr>
        <td align="right" height="20" bgcolor="#F1F5FA" width="147">
		<span lang="ar-sa">
        <font size="2" color="#528ABD" face="Tahoma">&nbsp;„·«ÕŸ«  ⁄—»Ì</font></span></td>
        <td width="260" align="right" height="20" bgcolor="#F1F5FA">
        <textarea rows="6" name="note" cols="26" dir="rtl"><?php echo $note ?></textarea></td>
      </tr>
      <tr>
        <td align="right" height="20" bgcolor="#F1F5FA" width="147">
		<span lang="ar-sa">
        <font size="2" color="#528ABD" face="Tahoma">&nbsp;„·«ÕŸ«  ≈‰Ã·Ì“Ì</font></span></td>
        <td width="260" align="right" height="20" bgcolor="#F1F5FA">
        <textarea rows="6" name="enote" cols="26" dir="ltr"><?php echo $enote ?></textarea></td>
      </tr>
      <tr>
        <td align="right" height="26" width="147">&nbsp;</td>
        <td width="260" align="right" height="26">
        <p align="left">
  <input type="submit" value="&#1573;&#1585;&#1587;&#1575;&#1604;" name="B1">
  <input type="hidden" value="<?php echo $idb; ?>" name="B5"><span lang="ar-sa">
        </span>
  <input type="reset" value="„”Õ «·‰„Ê–Ã" name="B2" class="in1" id="i1"></td>
      </tr>
      </table>
    <p>&nbsp;</div>
</form>


