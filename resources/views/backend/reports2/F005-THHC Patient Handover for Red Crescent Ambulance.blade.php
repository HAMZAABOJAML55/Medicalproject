<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<title>F005-THHC Patient Handover for Red Crescent Ambulance | @yield('title')</title>
<style>
.font519229
	{color:black;
	font-size:10.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:"Montserrat SemiBold";
	mso-generic-font-family:auto;
	mso-font-charset:0;}
.font619229
	{color:black;
	font-size:11.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:"Montserrat SemiBold";
	mso-generic-font-family:auto;
	mso-font-charset:0;}
.xl6319229
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:bottom;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl6419229
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:bottom;
	border:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl6519229
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Monstrate;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:top;
	border:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl6619229
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Monstrate;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl6719229
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:10.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Monstrate;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:top;
	border:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl6819229
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:10.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Monstrate;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:top;
	border:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl6919229
	{padding:0px;
	mso-ignore:padding;
	color:white;
	font-size:12.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Monstrate semibold";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:bottom;
	border:.5pt solid windowtext;
	background:#3AC2BA;
	mso-pattern:black none;
	white-space:nowrap;}
.xl7019229
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Monstrate;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:top;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl7119229
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Monstrate;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:top;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl7219229
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:8.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Monstrate;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:right;
	vertical-align:bottom;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:none;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl7319229
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:8.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Monstrate;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:right;
	vertical-align:bottom;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:none;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl7419229
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Monstrate;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:top;
	border:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl7519229
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:10.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Monstrate;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:top;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl7619229
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:10.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Monstrate;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:top;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl7719229
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Monstrate;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:top;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl7819229
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Monstrate;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:top;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl7919229
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Monstrate;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:top;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl8019229
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Monstrate;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:top;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl8119229
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Monstrate;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:middle;
	border:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl8219229
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:bottom;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:none;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl8319229
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:bottom;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:none;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl8419229
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:bottom;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:none;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl8519229
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:10.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:"Times New Roman", serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:top;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl8619229
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:10.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:"Times New Roman", serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:top;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl8719229
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:10.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:"Times New Roman", serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:top;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}

</style>
@yield('style')
</head>

<body>

<div id="F005-THHC Patient Handover for Red Crescent Ambulance_19229"
align=center x:publishsource="Excel">

<table border=0 cellpadding=0 cellspacing=0 width=833 class=xl6319229
 style='border-collapse:collapse;table-layout:fixed;width:624pt'>
 <col class=xl6319229 width=111 style='mso-width-source:userset;mso-width-alt:
 3953;width:83pt'>
 <col class=xl6319229 width=265 style='mso-width-source:userset;mso-width-alt:
 9415;width:199pt'>
 <col class=xl6319229 width=104 style='mso-width-source:userset;mso-width-alt:
 3697;width:78pt'>
 <col class=xl6319229 width=135 style='mso-width-source:userset;mso-width-alt:
 4807;width:101pt'>
 <col class=xl6319229 width=218 style='mso-width-source:userset;mso-width-alt:
 7736;width:163pt'>
 <tr height=116 style='mso-height-source:userset;height:87.0pt'>
  <td colspan=5 height=116 width=833 style='height:87.0pt;width:624pt'
  align=left valign=top><span style='mso-ignore:vglayout;
  position:absolute;z-index:1;margin-left:10px;margin-top:10px;width:797px;
  height:90px'>
  <table cellpadding=0 cellspacing=0>
   <tr>
    <td width=0 height=0></td>
    <td width=222></td>
    <td width=397></td>
    <td width=178></td>
   </tr>
   <tr>
    <td height=14></td>
    <td colspan=2></td>
    <td rowspan=2 align=left valign=top><img width=178 height=74
    src="F005-THHC%20Patient%20Handover%20for%20Red%20Crescent%20Ambulance.files/F005-THHC%20Patient%20Handover%20for%20Red%20Crescent%20Ambulance_19229_image003.png"
    v:shapes="TextBox_x0020_1"></td>
   </tr>
   <tr>
    <td height=60></td>
    <td rowspan=2 align=left valign=top><img width=222 height=76
    src="F005-THHC%20Patient%20Handover%20for%20Red%20Crescent%20Ambulance.files/F005-THHC%20Patient%20Handover%20for%20Red%20Crescent%20Ambulance_19229_image004.png"
    v:shapes="Picture_x0020_2"></td>
   </tr>
   <tr>
    <td height=16></td>
   </tr>
  </table>
  </span><![endif]><span style='mso-ignore:vglayout2'>
  <table cellpadding=0 cellspacing=0>
   <tr>
    <td colspan=5 height=116 class=xl6719229 width=833 style='height:87.0pt;
    width:624pt'><a name="RANGE!A1:E30"><br>
        <br>
        <br>
        <span
    style='mso-spacerun:yes'>
    </span><font class="font519229"><span style='mso-spacerun:yes'></span></font><font
    class="font619229">Patient Handover for Red Crescent Ambulance <br>
        <span
    style='mso-spacerun:yes'>
    </span>TRANSFER TO:EMERGENCY DEPARTMENT</font></a></td>
   </tr>
  </table>
  </span></td>
 </tr>
 <tr height=20 style='mso-height-source:userset;height:15.0pt'>
  <td colspan=5 height=20 class=xl6919229 style='height:15.0pt'>Patient
  Detalies</td>
 </tr>
 <tr height=71 style='mso-height-source:userset;height:53.55pt'>
  <td colspan=3 height=71 class=xl7019229 width=480 style='border-right:.5pt solid black;
  height:53.55pt;width:360pt'>Patient
  Name:__________________________________________________<br>
    <br>
    File Number:___________________________Age:_____________________<br>
    </td>
  <td colspan=2 class=xl6519229 width=353 style='border-left:none;width:264pt'>Patient
  Address:_______________________________________<br>
    </td>
 </tr>
 <tr height=21 style='height:15.6pt'>
  <td colspan=5 height=21 class=xl6919229 style='height:15.6pt'>Responsible
  Person/ Emergency Contact/Relationship</td>
 </tr>
 <tr height=44 style='mso-height-source:userset;height:33.0pt'>
  <td colspan=3 height=44 class=xl7019229 width=480 style='height:33.0pt;
  width:360pt'>Name:<br>
    </td>
  <td colspan=2 class=xl6519229 width=353 style='width:264pt'>Phone<span
  style='mso-spacerun:yes'>
  </span>Home:_______________________________<br>
    <span style='mso-spacerun:yes'>
  </span>Work:________________________________<span style='mso-spacerun:yes'>
  </span><br>
    <br>
    <span style='mso-spacerun:yes'></span></td>
 </tr>
 <tr height=21 style='height:15.6pt'>
  <td colspan=5 height=21 class=xl6919229 style='height:15.6pt'>Person
  Completing Assessment</td>
 </tr>
 <tr height=60 style='mso-height-source:userset;height:45.0pt'>
  <td colspan=2 height=60 class=xl7519229 style='border-right:.5pt solid black;
  height:45.0pt'>Name:___________________________________________</td>
  <td colspan=2 class=xl7719229 style='border-right:.5pt solid black;
  border-left:none'>Badge No.:________________</td>
  <td class=xl6519229 width=218 style='border-top:none;border-left:none;
  width:163pt'>Signature:___________________<br>
    Pager/Extension:_____________<br>
    Phone Number:______________</td>
 </tr>
 <tr height=21 style='height:15.6pt'>
  <td colspan=5 height=21 class=xl6919229 style='height:15.6pt'>THHC Physcian</td>
 </tr>
 <tr height=64 style='mso-height-source:userset;height:48.45pt'>
  <td colspan=2 height=64 class=xl7519229 style='border-right:.5pt solid black;
  height:48.45pt'>Name:___________________________________________</td>
  <td colspan=2 class=xl7719229 style='border-right:.5pt solid black;
  border-left:none'>Badge No.:________________</td>
  <td class=xl6519229 width=218 style='border-top:none;border-left:none;
  width:163pt'>Signature:___________________<br>
    Pager/Extension:_____________<br>
    Phone Number:______________</td>
 </tr>
 <tr height=19 style='mso-height-source:userset;height:14.55pt'>
  <td colspan=5 height=19 class=xl6919229 style='height:14.55pt'>DIAGNOSIS:</td>
 </tr>
 <tr height=80 style='mso-height-source:userset;height:60.0pt'>
  <td colspan=5 height=80 class=xl8519229 style='border-right:.5pt solid black;
  height:60.0pt'>&nbsp;</td>
 </tr>
 <tr height=19 style='mso-height-source:userset;height:14.55pt'>
  <td colspan=5 height=19 class=xl6919229 style='height:14.55pt'>CURRENT STATUS</td>
 </tr>
 <tr height=19 style='height:14.4pt'>
  <td colspan=5 height=19 class=xl8119229 style='height:14.4pt'>T_________<span
  style='mso-spacerun:yes'> </span>P____________<span
  style='mso-spacerun:yes'></span>R________________<span
  style='mso-spacerun:yes'> </span>B/P___________ SP O2____________ Blood
  Glucose_________________</td>
 </tr>
 <tr height=21 style='height:15.6pt'>
  <td colspan=5 height=21 class=xl6919229 style='height:15.6pt'>REASON(S) FOR
  REQUEST FOR EMERGENCY CARE:</td>
 </tr>
 <tr height=144 style='mso-height-source:userset;height:108.45pt'>
  <td colspan=5 height=144 class=xl8219229 style='border-right:.5pt solid black;
  height:108.45pt'>&nbsp;</td>
 </tr>
 <tr height=21 style='height:15.6pt'>
  <td colspan=5 height=21 class=xl6919229 style='height:15.6pt'>MEDICATIONS</td>
 </tr>
 <tr height=19 style='height:14.4pt'>
  <td height=19 class=xl6619229 style='height:14.4pt;border-top:none'>Start
  Date</td>
  <td class=xl6619229 style='border-top:none;border-left:none'>Name of
  Medication</td>
  <td class=xl6619229 style='border-top:none;border-left:none'>Dose</td>
  <td class=xl6619229 style='border-top:none;border-left:none'>Route</td>
  <td class=xl6619229 style='border-top:none;border-left:none'>Frequency</td>
 </tr>
 <tr height=19 style='height:14.4pt'>
  <td height=19 class=xl6419229 style='height:14.4pt;border-top:none'>&nbsp;</td>
  <td class=xl6419229 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl6419229 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl6419229 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl6419229 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=19 style='height:14.4pt'>
  <td height=19 class=xl6419229 style='height:14.4pt;border-top:none'>&nbsp;</td>
  <td class=xl6419229 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl6419229 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl6419229 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl6419229 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=19 style='height:14.4pt'>
  <td height=19 class=xl6419229 style='height:14.4pt;border-top:none'>&nbsp;</td>
  <td class=xl6419229 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl6419229 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl6419229 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl6419229 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=19 style='height:14.4pt'>
  <td height=19 class=xl6419229 style='height:14.4pt;border-top:none'>&nbsp;</td>
  <td class=xl6419229 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl6419229 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl6419229 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl6419229 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=19 style='height:14.4pt'>
  <td height=19 class=xl6419229 style='height:14.4pt;border-top:none'>&nbsp;</td>
  <td class=xl6419229 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl6419229 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl6419229 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl6419229 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=19 style='height:14.4pt'>
  <td height=19 class=xl6419229 style='height:14.4pt;border-top:none'>&nbsp;</td>
  <td class=xl6419229 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl6419229 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl6419229 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl6419229 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=19 style='height:14.4pt'>
  <td height=19 class=xl6419229 style='height:14.4pt;border-top:none'>&nbsp;</td>
  <td class=xl6419229 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl6419229 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl6419229 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl6419229 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=19 style='height:14.4pt'>
  <td height=19 class=xl6419229 style='height:14.4pt;border-top:none'>&nbsp;</td>
  <td class=xl6419229 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl6419229 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl6419229 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl6419229 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=19 style='height:14.4pt'>
  <td height=19 class=xl6419229 style='height:14.4pt;border-top:none'>&nbsp;</td>
  <td class=xl6419229 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl6419229 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl6419229 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl6419229 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=19 style='height:14.4pt'>
  <td height=19 class=xl6419229 style='height:14.4pt;border-top:none'>&nbsp;</td>
  <td class=xl6419229 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl6419229 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl6419229 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl6419229 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=19 style='height:14.4pt'>
  <td height=19 class=xl6419229 style='height:14.4pt;border-top:none'>&nbsp;</td>
  <td class=xl6419229 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl6419229 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl6419229 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl6419229 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=19 style='height:14.4pt'>
  <td height=19 class=xl6419229 style='height:14.4pt;border-top:none'>&nbsp;</td>
  <td class=xl6419229 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl6419229 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl6419229 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl6419229 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=47 style='mso-height-source:userset;height:35.55pt'>
  <td colspan=5 height=47 class=xl7219229 width=833 style='height:35.55pt;
  width:624pt'>Saudi ambulance number 997,Saudi fire emergency number 998
  ,Saudi antinarcotic number 995 ,Saudi highway traffic number 996<br>
    THHC-002 Caregivers Response to Emergency Situation at Home<br>
    F005-THHC Patient Handover for Red Crescent Ambulance<span
  style='mso-spacerun:yes'></span></td>
 </tr>

 <tr height=0 style='display:none'>
  <td width=111 style='width:83pt'></td>
  <td width=265 style='width:199pt'></td>
  <td width=104 style='width:78pt'></td>
  <td width=135 style='width:101pt'></td>
  <td width=218 style='width:163pt'></td>
 </tr>

</table>

</div>


<!----------------------------->
<!--END OF OUTPUT FROM EXCEL PUBLISH AS WEB PAGE WIZARD-->
<!----------------------------->
</body>

</html>
