<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<title>F056-THHC Nutrition Assessment| @yield('title')</title>

<style>

	{mso-displayed-decimal-separator:"\.";
	mso-displayed-thousand-separator:"\,";}
.font511267
	{color:black;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Times New Roman", serif;
	mso-font-charset:0;}
.font611267
	{color:black;
	font-size:10.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:"Times New Roman", serif;
	mso-font-charset:0;}
.font711267
	{color:black;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Symbol, serif;
	mso-font-charset:2;}
.font811267
	{color:black;
	font-size:10.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Symbol, serif;
	mso-font-charset:2;}
.font911267
	{color:black;
	font-size:9.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Symbol, serif;
	mso-font-charset:2;}
.font1011267
	{color:black;
	font-size:9.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Times New Roman", serif;
	mso-font-charset:0;}
.xl1511267
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
	text-align:general;
	vertical-align:bottom;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl6311267
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Times New Roman", serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:bottom;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl6411267
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Times New Roman", serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:bottom;
	border-top:none;
	border-right:.5pt solid windowtext;
	border-bottom:none;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl6511267
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
	text-align:general;
	vertical-align:bottom;
	border:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl6611267
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
	text-align:general;
	vertical-align:top;
	border:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl6711267
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Times New Roman", serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:top;
	border:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl6811267
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:9.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Times New Roman", serif;
	mso-font-charset:2;
	mso-number-format:General;
	text-align:general;
	vertical-align:top;
	border:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl6911267
	{padding:0px;
	mso-ignore:padding;
	color:white;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Montserrat SemiBold";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:top;
	border:.5pt solid windowtext;
	background:#3AC2BA;
	mso-pattern:black none;
	white-space:nowrap;}
.xl7011267
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Montserrat SemiBold";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:top;
	border:.5pt solid windowtext;
	background:#3AC2BA;
	mso-pattern:black none;
	white-space:nowrap;}
.xl7111267
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Times New Roman", serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:right;
	vertical-align:bottom;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl7211267
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Times New Roman", serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:bottom;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:none;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl7311267
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Times New Roman", serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:top;
	border:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl7411267
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
	text-align:left;
	vertical-align:top;
	border:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl7511267
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:9.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Montserrat;
	mso-generic-font-family:auto;
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
.xl7611267
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Times New Roman", serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:top;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:none;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl7711267
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Times New Roman", serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:top;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:none;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl7811267
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Times New Roman", serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:top;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:none;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl7911267
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Times New Roman", serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:top;
	border-top:none;
	border-right:none;
	border-bottom:none;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl8011267
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Times New Roman", serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:top;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl8111267
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Times New Roman", serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:top;
	border-top:none;
	border-right:.5pt solid windowtext;
	border-bottom:none;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl8211267
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Montserrat SemiBold";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl8311267
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
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl8411267
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
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl8511267
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Times New Roman", serif;
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
.xl8611267
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Times New Roman", serif;
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
.xl8711267
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Times New Roman", serif;
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
.xl8811267
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
	text-align:left;
	vertical-align:top;
	border:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl8911267
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
	text-align:left;
	vertical-align:bottom;
	border:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl9011267
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
	text-align:left;
	vertical-align:top;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl9111267
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
	text-align:left;
	vertical-align:top;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl9211267
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Times New Roman", serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:top;
	border-top:none;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl9311267
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Times New Roman", serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:top;
	border-top:none;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl9411267
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Times New Roman", serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:top;
	border-top:none;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl9511267
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Times New Roman", serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:bottom;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl9611267
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Times New Roman", serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:bottom;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl9711267
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Times New Roman", serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:bottom;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl9811267
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
	text-align:left;
	vertical-align:bottom;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:none;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl9911267
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
	text-align:left;
	vertical-align:bottom;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:none;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl10011267
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
	text-align:left;
	vertical-align:bottom;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:none;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl10111267
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Times New Roman", serif;
	mso-font-charset:2;
	mso-number-format:General;
	text-align:left;
	vertical-align:top;
	border:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl10211267
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Times New Roman", serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:top;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:none;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
</style>
</head>

<body>
<!--The following information was generated by Microsoft Excel's Publish as Web
Page wizard.-->
<!--If the same item is republished from Excel, all information between the DIV
tags will be replaced.-->
<!----------------------------->
<!--START OF OUTPUT FROM EXCEL PUBLISH AS WEB PAGE WIZARD -->
<!----------------------------->

<div id="F056-THHC Nutrition Assessment_11267" align=center
x:publishsource="Excel">

<table border=0 cellpadding=0 cellspacing=0 width=640 style='border-collapse:
 collapse;table-layout:fixed;width:480pt'>
 <col width=64 span=10 style='width:48pt'>
 <tr height=83 style='mso-height-source:userset;height:62.55pt'>
  <td colspan=10 height=83 width=640 style='border-right:.5pt solid black;
  height:62.55pt;width:480pt' align=left valign=top><span style='mso-ignore:vglayout;
  position:absolute;z-index:1;margin-left:0px;margin-top:1px;width:637px;
  height:78px'>
  <table cellpadding=0 cellspacing=0>
   <tr>
    <td width=0 height=0></td>
    <td width=224></td>
    <td width=218></td>
    <td width=195></td>
   </tr>
   <tr>
    <td height=5></td>
    <td rowspan=2 align=left valign=top><img width=224 height=78
    src="F056-THHC%20Nutrition%20Assessment.files/F056-THHC%20Nutrition%20Assessment_11267_image003.png"
    v:shapes="Picture_x0020_1"></td>
   </tr>
   <tr>
    <td height=73></td>
    <td></td>
    <td align=left valign=top><img width=195 height=73
    src="F056-THHC%20Nutrition%20Assessment.files/F056-THHC%20Nutrition%20Assessment_11267_image004.png"
    v:shapes="TextBox_x0020_2"></td>
   </tr>
  </table>
  </span><![endif]><span style='mso-ignore:vglayout2'>
  <table cellpadding=0 cellspacing=0>
   <tr>
    <td colspan=10 height=83 class=xl8211267 width=640 style='border-right:
    .5pt solid black;height:62.55pt;width:480pt'><a name="RANGE!A1:J44">Nutrition
    Assessment</a></td>
   </tr>
  </table>
  </span></td>
 </tr>
 <tr height=19 style='height:14.4pt'>
  <td colspan=2 height=19 class=xl8511267 style='border-right:.5pt solid black;
  height:14.4pt'>Admission Date</td>
  <td colspan=3 class=xl8511267 style='border-right:.5pt solid black;
  border-left:none'>&nbsp;</td>
  <td colspan=3 class=xl8511267 style='border-left:none'>Gender <font
  class="font711267">&nbsp;</font><font class="font511267"> Male<span
  style='mso-spacerun:yes'>�� </span></font><font class="font711267">&nbsp;</font><font
  class="font511267"> Female</font></td>
  <td colspan=2 class=xl8511267 style='border-right:.5pt solid black'>Age:___Years/Months</td>
 </tr>
 <tr height=19 style='height:14.4pt'>
  <td colspan=10 height=19 class=xl6911267 align=left style='height:14.4pt'>SUBJECTIVE/OBJECTIVE</td>
 </tr>
 <tr height=37 style='mso-height-source:userset;height:28.05pt'>
  <td colspan=2 height=37 class=xl6711267 style='height:28.05pt'>Diagnosis</td>
  <td colspan=8 class=xl6711267 style='border-left:none'>&nbsp;</td>
 </tr>
 <tr height=41 style='mso-height-source:userset;height:31.05pt'>
  <td colspan=2 height=41 class=xl6711267 style='height:31.05pt'>Comment</td>
  <td colspan=8 class=xl6711267 style='border-left:none'>&nbsp;</td>
 </tr>
 <tr height=19 style='height:14.4pt'>
  <td colspan=10 height=19 class=xl6911267 align=left style='height:14.4pt'>NUTRITION
  STATUS EVALUATION</td>
 </tr>
 <tr height=19 style='height:14.4pt'>
  <td colspan=10 height=19 class=xl6711267 style='height:14.4pt'>Follows Any
  Diet Home? <font class="font711267">&nbsp;</font><font class="font511267">
  Yes<span style='mso-spacerun:yes'>��� </span></font><font class="font711267">&nbsp;</font><font
  class="font511267"> No</font></td>
 </tr>
 <tr height=19 style='height:14.4pt'>
  <td colspan=2 height=19 class=xl7611267 style='border-right:.5pt solid black;
  height:14.4pt'>Current Diet<span style='mso-spacerun:yes'>�</span></td>
  <td colspan=8 class=xl9511267 style='border-right:.5pt solid black;
  border-left:none'>&nbsp;</td>
 </tr>
 <tr height=19 style='height:14.4pt'>
  <td height=19 class=xl6511267 align=left style='height:14.4pt'>Oral type<span
  style='mso-spacerun:yes'>�</span></td>
  <td colspan=9 class=xl8511267 style='border-right:.5pt solid black;
  border-left:none'>_____________________________________________________________________________________</td>
 </tr>
 <tr height=19 style='height:14.4pt'>
  <td colspan=10 height=19 class=xl9211267 style='border-right:.5pt solid black;
  height:14.4pt'><font class="font611267"><span
  style='mso-spacerun:yes'>������������������ </span>Chewing or swallowing
  problem </font><font class="font511267"><span
  style='mso-spacerun:yes'>��</span></font><font class="font711267">&nbsp;</font><font
  class="font511267"> Yes<span style='mso-spacerun:yes'>� </span></font><font
  class="font711267">&nbsp;</font><font class="font511267"> No<span
  style='mso-spacerun:yes'>��
  </span>Specify_______________________________________</font></td>
 </tr>
 <tr height=19 style='height:14.4pt'>
  <td colspan=10 height=19 class=xl6711267 style='height:14.4pt'><font
  class="font611267"><span style='mso-spacerun:yes'>������������������
  </span>Appetite </font><font class="font511267"><span
  style='mso-spacerun:yes'>��������������</span></font><font class="font711267">&nbsp;</font><font
  class="font511267"> Excellent </font><font class="font711267">&nbsp;</font><font
  class="font511267"> Moderate </font><font class="font711267">&nbsp;</font><font
  class="font511267"> Fair<span style='mso-spacerun:yes'>� </span></font><font
  class="font711267">&nbsp;</font><font class="font511267"> Poor</font></td>
 </tr>
 <tr height=19 style='height:14.4pt'>
  <td colspan=10 height=19 class=xl8811267 style='height:14.4pt'><span
  style='mso-spacerun:yes'>������������������ </span>Oral Intake &nbsp;<span
  style='mso-spacerun:yes'>������� </span><font class="font811267">&nbsp;</font><font
  class="font611267"> </font><font class="font511267">Excellent</font><font
  class="font711267">&nbsp;</font><font class="font511267"> Moderate </font><font
  class="font711267">&nbsp;</font><font class="font511267"> Fair<span
  style='mso-spacerun:yes'>� </span></font><font class="font711267">&nbsp;</font><font
  class="font511267"> Poor</font></td>
 </tr>
 <tr height=19 style='height:14.4pt'>
  <td height=19 class=xl6611267 align=left style='height:14.4pt;border-top:
  none'>TF</td>
  <td colspan=3 class=xl9011267 style='border-right:.5pt solid black'>Route:</td>
  <td colspan=6 class=xl8911267 style='border-left:none'>Type of nformula/Rate
  and Flushing:______________________________</td>
 </tr>
 <tr height=19 style='height:14.4pt'>
  <td colspan=10 height=19 class=xl9811267 style='border-right:.5pt solid black;
  height:14.4pt'><span style='mso-spacerun:yes'>������������������
  </span>Providing Calories_______kcal/day<span style='mso-spacerun:yes'>����
  </span>and Protein_______gm/day</td>
 </tr>
 <tr height=19 style='height:14.4pt'>
  <td colspan=10 height=19 class=xl9811267 style='border-right:.5pt solid black;
  height:14.4pt'><span style='mso-spacerun:yes'>������������������ </span>Fluid
  _________________________ml /day</td>
 </tr>
 <tr height=19 style='height:14.4pt'>
  <td height=19 class=xl6511267 align=left style='height:14.4pt'>TPN</td>
  <td colspan=9 class=xl9011267 style='border-right:.5pt solid black'>Infusion
  rate:</td>
 </tr>
 <tr height=19 style='height:14.4pt'>
  <td colspan=10 height=19 class=xl8911267 style='height:14.4pt'><span
  style='mso-spacerun:yes'>������������������ </span>Providing
  Calories_______kcal/day<span style='mso-spacerun:yes'>���� </span>and Amino
  Acid_______gm/day</td>
 </tr>
 <tr height=19 style='height:14.4pt'>
  <td colspan=2 height=19 class=xl6711267 style='height:14.4pt'>Blood
  Sugar<span style='mso-spacerun:yes'>�</span></td>
  <td colspan=2 class=xl10111267 style='border-left:none'><font
  class="font711267">&nbsp;</font><font class="font511267"> Controlled</font></td>
  <td colspan=2 class=xl10111267 style='border-left:none'><font
  class="font711267">&nbsp;</font><font class="font511267"> Uncontrolled</font></td>
  <td colspan=3 class=xl10111267 style='border-left:none'><font
  class="font711267">&nbsp;</font><font class="font511267"> Experience
  Hypoglycemia</font></td>
  <td class=xl6811267 align=left style='border-top:none;border-left:none'><font
  class="font911267">&nbsp;</font><font class="font1011267">No Record</font></td>
 </tr>
 <tr height=19 style='height:14.4pt'>
  <td colspan=2 height=19 class=xl6711267 style='height:14.4pt'>Nausea <font
  class="font711267">&nbsp;</font><font class="font511267"> Yes </font><font
  class="font711267">&nbsp;</font><font class="font511267"> No</font></td>
  <td colspan=8 class=xl6711267 style='border-left:none'>Vomiting<span
  style='mso-spacerun:yes'>� </span><font class="font711267">&nbsp;</font><font
  class="font511267"> Yes </font><font class="font711267">&nbsp;</font><font
  class="font511267"> No </font><font class="font711267">&nbsp;</font><font
  class="font511267"> Frequently<span style='mso-spacerun:yes'>�������� </span></font><font
  class="font711267">&nbsp;</font><font class="font511267"> Occasionally</font></td>
 </tr>
 <tr height=19 style='height:14.4pt'>
  <td colspan=2 height=19 class=xl6711267 style='height:14.4pt'>Diarrhea<span
  style='mso-spacerun:yes'>� </span><font class="font711267">&nbsp;</font><font
  class="font511267"> Yes </font><font class="font711267">&nbsp;</font><font
  class="font511267"> No</font></td>
  <td colspan=8 class=xl6711267 style='border-left:none'>History of Weight
  Loss<span style='mso-spacerun:yes'>� </span><font class="font711267">&nbsp;</font><font
  class="font511267"> Yes </font><font class="font711267">&nbsp;</font><font
  class="font511267"> No </font><font class="font711267">&nbsp;</font><font
  class="font511267"> Does not know</font></td>
 </tr>
 <tr height=19 style='height:14.4pt'>
  <td colspan=10 height=19 class=xl6711267 style='height:14.4pt'>Mobility<span
  style='mso-spacerun:yes'>� </span><font class="font711267">&nbsp;</font><font
  class="font511267"><span style='mso-spacerun:yes'>� </span>Bedbound
  Immobile<span style='mso-spacerun:yes'>��� </span></font><font
  class="font711267">&nbsp;</font><font class="font511267"><span
  style='mso-spacerun:yes'>� </span>Bedbound Mobile<span
  style='mso-spacerun:yes'>���� </span></font><font class="font711267">&nbsp;</font><font
  class="font511267"><span style='mso-spacerun:yes'>� </span>Mobile</font></td>
 </tr>
 <tr height=19 style='height:14.4pt'>
  <td colspan=3 height=19 class=xl6711267 style='height:14.4pt'>Fluied
  Restricted<span style='mso-spacerun:yes'>� </span><font class="font711267">&nbsp;</font><font
  class="font511267"> Yes </font><font class="font711267">&nbsp;</font><font
  class="font511267"> No</font></td>
  <td colspan=7 class=xl6711267 style='border-left:none'>Physical
  Limitation<span style='mso-spacerun:yes'>���� </span><font class="font711267">&nbsp;</font><font
  class="font511267"> Yes<span style='mso-spacerun:yes'>� </span></font><font
  class="font711267">&nbsp;</font><font class="font511267"> No<span
  style='mso-spacerun:yes'>� </span></font><font class="font711267">&nbsp;</font><font
  class="font511267"> Paraplegia/Quadraplegia/Deformity</font></td>
 </tr>
 <tr height=19 style='height:14.4pt'>
  <td colspan=4 height=19 class=xl10211267 style='height:14.4pt'>Skin
  Integrity<span style='mso-spacerun:yes'>� </span><font class="font711267">&nbsp;</font><font
  class="font511267"> Normal </font><font class="font711267">&nbsp;</font><font
  class="font511267"> Impaired</font></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6411267>&nbsp;</td>
 </tr>
 <tr height=19 style='height:14.4pt'>
  <td height=19 class=xl6711267 style='height:14.4pt'>Labs</td>
  <td colspan=9 class=xl6711267 style='border-left:none'>&nbsp;</td>
 </tr>
 <tr height=19 style='height:14.4pt'>
  <td colspan=2 height=19 class=xl6711267 style='height:14.4pt'>Meds/Insuline</td>
  <td colspan=8 class=xl6711267 style='border-left:none'>&nbsp;</td>
 </tr>
 <tr height=19 style='height:14.4pt'>
  <td colspan=3 height=19 class=xl6711267 style='height:14.4pt'>Drug Nutrient
  Interaction</td>
  <td colspan=7 class=xl6711267 style='border-left:none'>&nbsp;</td>
 </tr>
 <tr height=19 style='height:14.4pt'>
  <td colspan=10 height=19 class=xl6911267 align=left style='height:14.4pt'>ANTHROMETRIC
  MEASURMENT</td>
 </tr>
 <tr height=19 style='height:14.4pt'>
  <td colspan=10 height=19 class=xl6711267 style='height:14.4pt'>Height_________cm<span
  style='mso-spacerun:yes'>������ </span>Weight_______kg<span
  style='mso-spacerun:yes'>��</span></td>
 </tr>
 <tr height=19 style='mso-height-source:userset;height:14.55pt'>
  <td colspan=10 height=19 class=xl6711267 style='height:14.55pt'>BMI
  _______<span style='mso-spacerun:yes'>���� </span><font class="font711267">&nbsp;</font><font
  class="font511267"> Underweight<span style='mso-spacerun:yes'>������ </span></font><font
  class="font711267">&nbsp;</font><font class="font511267"> Normal<span
  style='mso-spacerun:yes'>����� </span></font><font class="font711267">&nbsp;</font><font
  class="font511267"> Overweight<span style='mso-spacerun:yes'>������ </span></font><font
  class="font711267">&nbsp;</font><font class="font511267"> Obese I<span
  style='mso-spacerun:yes'>���� </span></font><font class="font711267">&nbsp;</font><font
  class="font511267"> Obese II<span style='mso-spacerun:yes'>����� </span></font><font
  class="font711267">&nbsp;</font><font class="font511267"> ObeseIII<span
  style='mso-spacerun:yes'>�</span></font></td>
 </tr>
 <tr height=19 style='height:14.4pt'>
  <td colspan=10 height=19 class=xl6711267 style='height:14.4pt'>Oedema<span
  style='mso-spacerun:yes'>��� </span><font class="font711267">&nbsp;</font><font
  class="font511267"> Mild<span style='mso-spacerun:yes'>�� </span></font><font
  class="font711267">&nbsp;</font><font class="font511267"> Moderate<span
  style='mso-spacerun:yes'>� </span></font><font class="font711267">&nbsp;</font><font
  class="font511267"> Severe</font></td>
 </tr>
 <tr height=19 style='height:14.4pt'>
  <td colspan=10 height=19 class=xl6711267 style='height:14.4pt'>Ascites<span
  style='mso-spacerun:yes'>���� </span><font class="font711267">&nbsp;</font><font
  class="font511267"> Mild<span style='mso-spacerun:yes'>�� </span></font><font
  class="font711267">&nbsp;</font><font class="font511267"> Moderate<span
  style='mso-spacerun:yes'>� </span></font><font class="font711267">&nbsp;</font><font
  class="font511267"> Severe</font></td>
 </tr>
 <tr height=19 style='height:14.4pt'>
  <td colspan=10 height=19 class=xl6711267 style='height:14.4pt'>Dry Weight
  _______kg<span style='mso-spacerun:yes'>���� </span>IBW______kg<span
  style='mso-spacerun:yes'>������� </span>ABW______kg<span
  style='mso-spacerun:yes'>���� </span>%IBW ________%</td>
 </tr>
 <tr height=19 style='height:14.4pt'>
  <td colspan=10 height=19 class=xl6911267 align=left style='height:14.4pt'>ASSESSMENT
  AND NUTRITION REQUIREMENT</td>
 </tr>
 <tr height=19 style='height:14.4pt'>
  <td colspan=10 height=19 class=xl7611267 style='border-right:.5pt solid black;
  height:14.4pt'>BEE Requirements ________________kcal/d<span
  style='mso-spacerun:yes'>����������������������� </span>Total kcal
  Requirements ____________kcal</td>
 </tr>
 <tr height=19 style='height:14.4pt'>
  <td colspan=10 height=19 class=xl7911267 style='border-right:.5pt solid black;
  height:14.4pt'>Protein Requirements ________________g/day<span
  style='mso-spacerun:yes'>��������������������� </span>Protein Requirements
  ______________ g/kg<span style='mso-spacerun:yes'>����</span></td>
 </tr>
 <tr height=19 style='height:14.4pt'>
  <td colspan=10 height=19 class=xl7911267 style='border-right:.5pt solid black;
  height:14.4pt'>Fluids Requirements ________________ml/d<span
  style='mso-spacerun:yes'>�</span></td>
 </tr>
 <tr height=19 style='height:14.4pt'>
  <td colspan=10 height=19 class=xl7911267 style='border-right:.5pt solid black;
  height:14.4pt'>Nutritional Risk<span
  style='mso-spacerun:yes'>��������������������� </span><font class="font711267">&nbsp;</font><font
  class="font511267"> Low Risk<span style='mso-spacerun:yes'>��� </span></font><font
  class="font711267">&nbsp;</font><font class="font511267"> Moderate Risk<span
  style='mso-spacerun:yes'>�� </span></font><font class="font711267">&nbsp;</font><font
  class="font511267"> High Risk</font></td>
 </tr>
 <tr height=95 style='mso-height-source:userset;height:71.55pt'>
  <td colspan=10 height=95 class=xl6711267 style='height:71.55pt'>&nbsp;</td>
 </tr>
 <tr height=19 style='height:14.4pt'>
  <td colspan=10 height=19 class=xl6911267 align=left style='height:14.4pt'>PLAN
  AND SUGGESTED DIET</td>
 </tr>
 <tr height=19 style='height:14.4pt'>
  <td colspan=10 height=19 class=xl7211267 style='height:14.4pt'><font
  class="font611267">Oral:</font><font class="font511267">_____________________________________<span
  style='mso-spacerun:yes'>��</span></font></td>
 </tr>
 <tr height=19 style='height:14.4pt'>
  <td colspan=10 height=19 class=xl7211267 style='height:14.4pt'><font
  class="font611267">Supplement: </font><font class="font511267"><span
  style='mso-spacerun:yes'>������</span></font><font class="font711267">&nbsp;</font><font
  class="font511267"> Yes<span style='mso-spacerun:yes'>��� </span></font><font
  class="font711267">&nbsp;</font><font class="font511267"> No<span
  style='mso-spacerun:yes'>������
  </span>Type/Quantity:________________________________________________________</font></td>
 </tr>
 <tr height=55 style='mso-height-source:userset;height:41.55pt'>
  <td colspan=10 height=55 class=xl7311267 width=640 style='height:41.55pt;
  width:480pt'><font class="font611267">TF Rout</font><font class="font511267">:
  _______________<span style='mso-spacerun:yes'>�������������������������
  </span>Type of formula/Rate and Flushing_____________________________<br>
    Will provide __________kcal/d<span style='mso-spacerun:yes'>��� </span>and<span
  style='mso-spacerun:yes'>������� </span>protein ________gm/d<br>
    <span style='mso-spacerun:yes'>��������������������
  </span>__________kcal/kg<span
  style='mso-spacerun:yes'>����������������������������
  </span>____________gm/kg<span style='mso-spacerun:yes'>�����
  </span>Fluids___________________ml/d</font></td>
 </tr>
 <tr height=106 style='mso-height-source:userset;height:79.5pt'>
  <td colspan=10 height=106 class=xl7411267 width=640 style='height:79.5pt;
  width:480pt'>TPN<span style='mso-spacerun:yes'>���� </span><font
  class="font511267"><span style='mso-spacerun:yes'>��</span>Infusion
  Rate_____________ ml/hr<span style='mso-spacerun:yes'>���������������������
  </span>Dextrose_________________<span style='mso-spacerun:yes'>���
  </span>Amino Acids __________<br>
    Lipds_____________<span style='mso-spacerun:yes'>�� </span>Providing
  Calories ________ml/hr<span style='mso-spacerun:yes'>��� </span>Amino Acids
  __________ ml/hr<br>
    Education:<span style='mso-spacerun:yes'>������� </span></font><font
  class="font711267">&nbsp;</font><font class="font511267"> Yes<span
  style='mso-spacerun:yes'>��� </span></font><font class="font711267">&nbsp;</font><font
  class="font511267"> No<br>
    Follow Up :<span style='mso-spacerun:yes'>���� </span></font><font
  class="font711267">&nbsp;</font><font class="font511267"> Yes<span
  style='mso-spacerun:yes'>���� </span></font><font class="font711267">&nbsp;</font><font
  class="font511267"> No<br>

  Comments:____________________________________________________________________________________<br>

  ____________________________________________________________________________________________</font></td>
 </tr>
 <tr height=19 style='height:14.4pt'>
  <td height=19 class=xl6311267 style='height:14.4pt'></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td colspan=4 class=xl7511267>F056-THHC Nutrition Assessment</td>
 </tr>
 <tr height=19 style='height:14.4pt'>
  <td height=19 class=xl6311267 style='height:14.4pt'></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
 </tr>
 <tr height=19 style='height:14.4pt'>
  <td height=19 class=xl6311267 style='height:14.4pt'></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
 </tr>
 <tr height=19 style='height:14.4pt'>
  <td height=19 class=xl6311267 style='height:14.4pt'></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
 </tr>
 <tr height=19 style='height:14.4pt'>
  <td height=19 class=xl6311267 style='height:14.4pt'></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
 </tr>
 <tr height=19 style='height:14.4pt'>
  <td height=19 class=xl6311267 style='height:14.4pt'></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
 </tr>
 <tr height=19 style='height:14.4pt'>
  <td height=19 class=xl6311267 style='height:14.4pt'></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
 </tr>
 <tr height=19 style='height:14.4pt'>
  <td height=19 class=xl6311267 style='height:14.4pt'></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
 </tr>
 <tr height=19 style='height:14.4pt'>
  <td height=19 class=xl6311267 style='height:14.4pt'></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
 </tr>
 <tr height=19 style='height:14.4pt'>
  <td height=19 class=xl6311267 style='height:14.4pt'></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
 </tr>
 <tr height=19 style='height:14.4pt'>
  <td height=19 class=xl6311267 style='height:14.4pt'></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
 </tr>
 <tr height=19 style='height:14.4pt'>
  <td height=19 class=xl6311267 style='height:14.4pt'></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
 </tr>
 <tr height=19 style='height:14.4pt'>
  <td height=19 class=xl6311267 style='height:14.4pt'></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
 </tr>
 <tr height=19 style='height:14.4pt'>
  <td height=19 class=xl6311267 style='height:14.4pt'></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
 </tr>
 <tr height=19 style='height:14.4pt'>
  <td height=19 class=xl6311267 style='height:14.4pt'></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
 </tr>
 <tr height=19 style='height:14.4pt'>
  <td height=19 class=xl6311267 style='height:14.4pt'></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
 </tr>
 <tr height=19 style='height:14.4pt'>
  <td height=19 class=xl6311267 style='height:14.4pt'></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
 </tr>
 <tr height=19 style='height:14.4pt'>
  <td height=19 class=xl6311267 style='height:14.4pt'></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
 </tr>
 <tr height=19 style='height:14.4pt'>
  <td height=19 class=xl6311267 style='height:14.4pt'></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
 </tr>
 <tr height=19 style='height:14.4pt'>
  <td height=19 class=xl6311267 style='height:14.4pt'></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
 </tr>
 <tr height=19 style='height:14.4pt'>
  <td height=19 class=xl6311267 style='height:14.4pt'></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
 </tr>
 <tr height=19 style='height:14.4pt'>
  <td height=19 class=xl6311267 style='height:14.4pt'></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
 </tr>
 <tr height=19 style='height:14.4pt'>
  <td height=19 class=xl6311267 style='height:14.4pt'></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
 </tr>
 <tr height=19 style='height:14.4pt'>
  <td height=19 class=xl6311267 style='height:14.4pt'></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
 </tr>
 <tr height=19 style='height:14.4pt'>
  <td height=19 class=xl6311267 style='height:14.4pt'></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
 </tr>
 <tr height=19 style='height:14.4pt'>
  <td height=19 class=xl6311267 style='height:14.4pt'></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
 </tr>
 <tr height=19 style='height:14.4pt'>
  <td height=19 class=xl6311267 style='height:14.4pt'></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
 </tr>
 <tr height=19 style='height:14.4pt'>
  <td height=19 class=xl6311267 style='height:14.4pt'></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
 </tr>
 <tr height=19 style='height:14.4pt'>
  <td height=19 class=xl6311267 style='height:14.4pt'></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
 </tr>
 <tr height=19 style='height:14.4pt'>
  <td height=19 class=xl6311267 style='height:14.4pt'></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
 </tr>
 <tr height=19 style='height:14.4pt'>
  <td height=19 class=xl6311267 style='height:14.4pt'></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
 </tr>
 <tr height=19 style='height:14.4pt'>
  <td height=19 class=xl6311267 style='height:14.4pt'></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
 </tr>
 <tr height=19 style='height:14.4pt'>
  <td height=19 class=xl6311267 style='height:14.4pt'></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
 </tr>
 <tr height=19 style='height:14.4pt'>
  <td height=19 class=xl6311267 style='height:14.4pt'></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
 </tr>
 <tr height=19 style='height:14.4pt'>
  <td height=19 class=xl6311267 style='height:14.4pt'></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
 </tr>
 <tr height=19 style='height:14.4pt'>
  <td height=19 class=xl6311267 style='height:14.4pt'></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
 </tr>
 <tr height=19 style='height:14.4pt'>
  <td colspan=10 height=19 class=xl7111267 style='height:14.4pt'>Page 2 of
  2<span
  style='mso-spacerun:yes'>���������������������������������������������������������������������������������������������������������������������
  </span>F056-THHC Nutrition Assessment</td>
 </tr>
 <tr height=19 style='height:14.4pt'>
  <td height=19 class=xl6311267 style='height:14.4pt'></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
 </tr>
 <tr height=19 style='height:14.4pt'>
  <td height=19 class=xl6311267 style='height:14.4pt'></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
 </tr>
 <tr height=19 style='height:14.4pt'>
  <td height=19 class=xl6311267 style='height:14.4pt'></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
 </tr>
 <tr height=19 style='height:14.4pt'>
  <td height=19 class=xl6311267 style='height:14.4pt'></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
 </tr>
 <tr height=19 style='height:14.4pt'>
  <td height=19 class=xl6311267 style='height:14.4pt'></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
 </tr>
 <tr height=19 style='height:14.4pt'>
  <td height=19 class=xl1511267 style='height:14.4pt'></td>
  <td class=xl1511267></td>
  <td class=xl1511267></td>
  <td class=xl1511267></td>
  <td class=xl1511267></td>
  <td class=xl1511267></td>
  <td class=xl1511267></td>
  <td class=xl1511267></td>
  <td class=xl1511267></td>
  <td class=xl1511267></td>
 </tr>
 <tr height=19 style='height:14.4pt'>
  <td height=19 class=xl6311267 style='height:14.4pt'></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
 </tr>
 <tr height=19 style='height:14.4pt'>
  <td height=19 class=xl6311267 style='height:14.4pt'></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
 </tr>
 <tr height=19 style='height:14.4pt'>
  <td height=19 class=xl6311267 style='height:14.4pt'></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
 </tr>
 <tr height=19 style='height:14.4pt'>
  <td height=19 class=xl6311267 style='height:14.4pt'></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
 </tr>
 <tr height=19 style='height:14.4pt'>
  <td height=19 class=xl6311267 style='height:14.4pt'></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
 </tr>
 <tr height=19 style='height:14.4pt'>
  <td height=19 class=xl6311267 style='height:14.4pt'></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
 </tr>
 <tr height=19 style='height:14.4pt'>
  <td height=19 class=xl6311267 style='height:14.4pt'></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
 </tr>
 <tr height=19 style='height:14.4pt'>
  <td height=19 class=xl6311267 style='height:14.4pt'></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
 </tr>
 <tr height=19 style='height:14.4pt'>
  <td height=19 class=xl6311267 style='height:14.4pt'></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
 </tr>
 <tr height=19 style='height:14.4pt'>
  <td height=19 class=xl6311267 style='height:14.4pt'></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
 </tr>
 <tr height=19 style='height:14.4pt'>
  <td height=19 class=xl6311267 style='height:14.4pt'></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
 </tr>
 <tr height=19 style='height:14.4pt'>
  <td height=19 class=xl6311267 style='height:14.4pt'></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
 </tr>
 <tr height=19 style='height:14.4pt'>
  <td height=19 class=xl6311267 style='height:14.4pt'></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
 </tr>
 <tr height=19 style='height:14.4pt'>
  <td height=19 class=xl6311267 style='height:14.4pt'></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
 </tr>
 <tr height=19 style='height:14.4pt'>
  <td height=19 class=xl6311267 style='height:14.4pt'></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
  <td class=xl6311267></td>
 </tr>
 <![if supportMisalignedColumns]>
 <tr height=0 style='display:none'>
  <td width=64 style='width:48pt'></td>
  <td width=64 style='width:48pt'></td>
  <td width=64 style='width:48pt'></td>
  <td width=64 style='width:48pt'></td>
  <td width=64 style='width:48pt'></td>
  <td width=64 style='width:48pt'></td>
  <td width=64 style='width:48pt'></td>
  <td width=64 style='width:48pt'></td>
  <td width=64 style='width:48pt'></td>
  <td width=64 style='width:48pt'></td>
 </tr>
 <![endif]>
</table>

</div>


<!----------------------------->
<!--END OF OUTPUT FROM EXCEL PUBLISH AS WEB PAGE WIZARD-->
<!----------------------------->
</body>

</html>
