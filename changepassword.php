<?php
session_start();
import_request_variables("gPc");

include "checkRG.php";

?>
<center>
<form method="post" name="signinForm" action="u.php?s1=changepasswordaction">
<table border="0" style="width: 300px">
	<tr>
		<td bgcolor="#7094B9" style="height: 25px">
		<p align="center" style="margin-top: 0; margin-bottom: 0; text-align: center; color: #FFff88;font-family:Tahoma;font-size:14px">
		<span lang="ar-qa"> €ÌÌ— «·—ﬁ„ «·”—Ì</span></p>
		</td>
	</tr>
	<tr>
		<td bgcolor="#F9F9F9">
		<table align="right" border="0" dir="rtl" width="100%">
			<tr>
				<td align="center">
				<table border="0" style="width: 261px">
					<tr>
						<td align="right">
						<div align="center">
							<table border="0" style="width: 260px">
								<tr>
									<td style="font-family:Tahoma;font-size:12px">
									<span lang="ar-sa">«·—ﬁ„ «·”—Ì «·Õ«·Ì</span></td>
									<td style="font-family:Tahoma;font-size:12px">
									<input dir="ltr" name="oldpass" size="8" style="width: 120px;" ></td>
								</tr>
								<tr>
									<td style="font-family:Tahoma;font-size:12px">
									<span lang="ar-sa">«·—ﬁ„ «·”—Ì «·ÃœÌœ</span></td>
									<td width="63">
									<input dir="ltr" name="newpass1" size="8" style="width: 120px;" ></td>
								</tr>
								<tr>
									<td style="font-family:Tahoma;font-size:12px">
									 √ﬂÌœ «·—ﬁ„ «·”—Ì «·ÃœÌœ</td>
									<td style="font-family:Tahoma;font-size:12px">
									<input dir="ltr" maxlength="32" name="newpass2" size="6" style="width: 120px;" ></td>
								</tr>
								<tr>
									<td style="text-align: left; width: 120px">
									&nbsp;</td>
									<td style="text-align: left; width: 120px">
									<input dir="rtl" name="run" style=" background-color: #4F78A2;color:yellow; width: 56px;" type="submit" value=" ‰›Ì–" ></td>
								</tr>
							</table>
						</div>
						</td>
					</tr>
				</table>
				</td>
			</tr>
			</table>
		</td>
	</tr>
</table>
</form>
</center>
