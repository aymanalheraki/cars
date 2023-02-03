
<head>
<meta http-equiv='Content-Language' content='en-us'>
</head>

<?php
import_request_variables("gPc");
define('REGISTER_GLOBALS', 'on');

$id = $_POST['B5'];


if($_POST['B1'] == ' ⁄œÌ·')
	{
			include 'per_data.php';
	}
elseif($_POST['B1'] == 'Õ–›')
{
echo "<form method='POST' dir='rtl' action='del_per.php' target='_self'>
  <div align='center'>
    <table border='0' cellpadding='0' style='border-collapse: collapse' width='562' height='56' dir='rtl' id='table1'>
      <tr>
        <td bgcolor='#C0C0C0'>
        <p align='center' style='margin-top: 0; margin-bottom: 0'>&nbsp;</p>
        <p align='center' style='margin-top: 0; margin-bottom: 0'>
        <font face='Tahoma' color='#000080'><span lang='ar-sa'>⁄‰œ «·÷€ÿ ⁄·Ï 
        „Ê«›ﬁ ”Ê› Ì „ „”Õ Â–« «·”Ã· Ê ﬂ· «· Ê«ﬁÌ⁄ «· «»⁄… ·Â .. </span></font>
        </p>
        <p align='center' style='margin-top: 0; margin-bottom: 0'>
        <font face='Tahoma' color='#000080'><span lang='ar-sa'>Â· √‰  „ √ﬂœ „‰ 
        ⁄„·Ì… «·≈·€«¡.</span></font></p>
        <p align='center' style='margin-top: 0; margin-bottom: 0'>&nbsp;</td>
      </tr>
      <tr>
        <td>
        <p align='center'>
        <input type='submit' value='„Ê«›ﬁ' name='B1' dir='rtl'>&nbsp;
        <input type='submit' value='≈·€«¡ «·√„—' name='B1' dir='rtl'>
        <input type='hidden' value='$id' name='B5'>
        </td>
      </tr>
    </table>
  </div>
</form>";
}
?>