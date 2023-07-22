<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv=Content-Type content="text/html; charset=windows-1252">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<title>F032-THHC MEDICATION RECONCILLIATION FORM| @yield('title')</title>

<style>

 /* Font Definitions */
 @font-face
	{font-family:"Cambria Math";
	panose-1:2 4 5 3 5 4 6 3 2 4;
	mso-font-charset:0;
	mso-generic-font-family:roman;
	mso-font-pitch:variable;
	mso-font-signature:-536869121 1107305727 33554432 0 415 0;}
@font-face
	{font-family:Calibri;
	panose-1:2 15 5 2 2 2 4 3 2 4;
	mso-font-charset:0;
	mso-generic-font-family:swiss;
	mso-font-pitch:variable;
	mso-font-signature:-469750017 -1040178053 9 0 511 0;}
@font-face
	{font-family:Montserrat;
	mso-font-alt:Calibri;
	mso-font-charset:0;
	mso-generic-font-family:auto;
	mso-font-pitch:variable;
	mso-font-signature:536871439 3 0 0 407 0;}
@font-face
	{font-family:"Montserrat SemiBold";
	mso-font-alt:Calibri;
	mso-font-charset:0;
	mso-generic-font-family:auto;
	mso-font-pitch:variable;
	mso-font-signature:536871439 3 0 0 407 0;}
@font-face
	{font-family:Webdings;
	panose-1:5 3 1 2 1 5 9 6 7 3;
	mso-font-charset:2;
	mso-generic-font-family:roman;
	mso-font-pitch:variable;
	mso-font-signature:0 268435456 0 0 -2147483648 0;}
 /* Style Definitions */
 p.MsoNormal, li.MsoNormal, div.MsoNormal
	{mso-style-unhide:no;
	mso-style-qformat:yes;
	mso-style-parent:"";
	margin:0cm;
	margin-bottom:.0001pt;
	line-height:115%;
	mso-pagination:widow-orphan;
	font-size:11.0pt;
	font-family:"Calibri",sans-serif;
	mso-fareast-font-family:Calibri;
	color:black;
	mso-ansi-language:EN-US;
	mso-fareast-language:EN-US;}
p.MsoHeader, li.MsoHeader, div.MsoHeader
	{mso-style-priority:99;
	mso-style-link:"\0631\0623\0633 \0627\0644\0635\0641\062D\0629 Char";
	margin:0cm;
	margin-bottom:.0001pt;
	mso-pagination:widow-orphan;
	tab-stops:center 234.0pt right 468.0pt;
	font-size:11.0pt;
	font-family:"Calibri",sans-serif;
	mso-fareast-font-family:Calibri;
	color:black;
	mso-ansi-language:EN-US;
	mso-fareast-language:EN-US;}
p.MsoFooter, li.MsoFooter, div.MsoFooter
	{mso-style-priority:99;
	mso-style-link:"\062A\0630\064A\064A\0644 \0627\0644\0635\0641\062D\0629 Char";
	margin:0cm;
	margin-bottom:.0001pt;
	mso-pagination:widow-orphan;
	tab-stops:center 234.0pt right 468.0pt;
	font-size:11.0pt;
	font-family:"Calibri",sans-serif;
	mso-fareast-font-family:Calibri;
	color:black;
	mso-ansi-language:EN-US;
	mso-fareast-language:EN-US;}
span.Char
	{mso-style-name:"\0631\0623\0633 \0627\0644\0635\0641\062D\0629 Char";
	mso-style-priority:99;
	mso-style-unhide:no;
	mso-style-locked:yes;
	mso-style-link:"\0631\0623\0633 \0627\0644\0635\0641\062D\0629";
	font-family:"Calibri",sans-serif;
	mso-ascii-font-family:Calibri;
	mso-fareast-font-family:Calibri;
	mso-hansi-font-family:Calibri;
	mso-bidi-font-family:Calibri;
	color:black;}
span.Char0
	{mso-style-name:"\062A\0630\064A\064A\0644 \0627\0644\0635\0641\062D\0629 Char";
	mso-style-priority:99;
	mso-style-unhide:no;
	mso-style-locked:yes;
	mso-style-link:"\062A\0630\064A\064A\0644 \0627\0644\0635\0641\062D\0629";
	font-family:"Calibri",sans-serif;
	mso-ascii-font-family:Calibri;
	mso-fareast-font-family:Calibri;
	mso-hansi-font-family:Calibri;
	mso-bidi-font-family:Calibri;
	color:black;}
.MsoChpDefault
	{mso-style-type:export-only;
	mso-default-props:yes;
	font-family:"Calibri",sans-serif;
	mso-ascii-font-family:Calibri;
	mso-ascii-theme-font:minor-latin;
	mso-fareast-font-family:"Times New Roman";
	mso-fareast-theme-font:minor-fareast;
	mso-hansi-font-family:Calibri;
	mso-hansi-theme-font:minor-latin;
	mso-bidi-font-family:Arial;
	mso-bidi-theme-font:minor-bidi;
	mso-ansi-language:EN-US;
	mso-fareast-language:EN-US;}
.MsoPapDefault
	{mso-style-type:export-only;
	margin-bottom:8.0pt;
	line-height:107%;}
 /* Page Definitions */
 @page
	{mso-footnote-separator:url("F032-THHC%20MEDICATION%20RECONCILLIATION%20FORM.files/header.htm") fs;
	mso-footnote-continuation-separator:url("F032-THHC%20MEDICATION%20RECONCILLIATION%20FORM.files/header.htm") fcs;
	mso-endnote-separator:url("F032-THHC%20MEDICATION%20RECONCILLIATION%20FORM.files/header.htm") es;
	mso-endnote-continuation-separator:url("F032-THHC%20MEDICATION%20RECONCILLIATION%20FORM.files/header.htm") ecs;}
@page WordSection1
	{size:595.2pt 842.05pt;
	margin:72.0pt 51.25pt 72.0pt 36.0pt;
	mso-header-margin:36.0pt;
	mso-footer-margin:36.0pt;
	mso-even-header:url("F032-THHC%20MEDICATION%20RECONCILLIATION%20FORM.files/header.htm") eh1;
	mso-header:url("F032-THHC%20MEDICATION%20RECONCILLIATION%20FORM.files/header.htm") h1;
	mso-even-footer:url("F032-THHC%20MEDICATION%20RECONCILLIATION%20FORM.files/header.htm") ef1;
	mso-footer:url("F032-THHC%20MEDICATION%20RECONCILLIATION%20FORM.files/header.htm") f1;
	mso-first-header:url("F032-THHC%20MEDICATION%20RECONCILLIATION%20FORM.files/header.htm") fh1;
	mso-first-footer:url("F032-THHC%20MEDICATION%20RECONCILLIATION%20FORM.files/header.htm") ff1;
	mso-paper-source:0;}
div.WordSection1
	{page:WordSection1;}
-->
</style>
<!--[if gte mso 10]>
<style>
 /* Style Definitions */
 table.MsoNormalTable
	{mso-style-name:"\062C\062F\0648\0644 \0639\0627\062F\064A";
	mso-tstyle-rowband-size:0;
	mso-tstyle-colband-size:0;
	mso-style-noshow:yes;
	mso-style-priority:99;
	mso-style-parent:"";
	mso-padding-alt:0cm 5.4pt 0cm 5.4pt;
	mso-para-margin-top:0cm;
	mso-para-margin-right:0cm;
	mso-para-margin-bottom:8.0pt;
	mso-para-margin-left:0cm;
	line-height:107%;
	mso-pagination:widow-orphan;
	font-size:11.0pt;
	font-family:"Calibri",sans-serif;
	mso-ascii-font-family:Calibri;
	mso-ascii-theme-font:minor-latin;
	mso-hansi-font-family:Calibri;
	mso-hansi-theme-font:minor-latin;
	mso-bidi-font-family:Arial;
	mso-bidi-theme-font:minor-bidi;
	mso-ansi-language:EN-US;
	mso-fareast-language:EN-US;}
table.TableGrid
	{mso-style-name:TableGrid;
	mso-tstyle-rowband-size:0;
	mso-tstyle-colband-size:0;
	mso-style-unhide:no;
	mso-style-parent:"";
	mso-padding-alt:0cm 0cm 0cm 0cm;
	mso-para-margin:0cm;
	mso-para-margin-bottom:.0001pt;
	mso-pagination:widow-orphan;
	font-size:11.0pt;
	font-family:"Calibri",sans-serif;
	mso-ascii-font-family:Calibri;
	mso-ascii-theme-font:minor-latin;
	mso-hansi-font-family:Calibri;
	mso-hansi-theme-font:minor-latin;
	mso-bidi-font-family:Arial;
	mso-bidi-theme-font:minor-bidi;
	mso-ansi-language:EN-US;
	mso-fareast-language:EN-US;}
</style>
@yield('styles')

</head>

<body lang=EN-GB style='tab-interval:36.0pt'>

<div class=WordSection1>

<table class=TableGrid border=1 cellspacing=0 cellpadding=0 width=760
 style='width:570.0pt;margin-left:-22.75pt;border-collapse:collapse;border:
 none;mso-border-alt:solid windowtext .5pt;mso-yfti-tbllook:1184;mso-padding-alt:
 0cm .45pt 0cm 1.0pt;mso-border-insideh:.5pt solid windowtext;mso-border-insidev:
 .5pt solid windowtext'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;height:19.75pt'>
  <td width=406 colspan=5 valign=top style='width:304.6pt;border:solid windowtext 1.0pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm .45pt 0cm 1.0pt;height:19.75pt'>
  <p class=MsoNormal><span lang=EN-US style='font-family:Montserrat;mso-fareast-font-family:
  Arial;mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi;
  mso-bidi-font-weight:bold'><span style='mso-spacerun:yes'>� </span>Source of
  medication history:<span style='mso-spacerun:yes'>�� </span><o:p></o:p></span></p>
  </td>
  <td width=354 colspan=3 rowspan=4 valign=top style='width:265.4pt;border:
  solid windowtext 1.0pt;border-left:none;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm .45pt 0cm 1.0pt;height:19.75pt'>
  <p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:3.6pt;
  margin-left:5.3pt;line-height:normal'><span lang=EN-US style='font-family:
  Montserrat;mso-fareast-font-family:Arial;mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi;mso-bidi-font-weight:bold'>Primary Diagnosis:
  _______________________<o:p></o:p></span></p>
  <p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:3.6pt;
  margin-left:5.3pt;line-height:normal'><span lang=EN-US style='font-family:
  Montserrat;mso-fareast-font-family:Arial;mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi;mso-bidi-font-weight:bold'>__________________________________________
  <o:p></o:p></span></p>
  <p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:1.95pt;
  margin-left:5.3pt;line-height:normal'><span lang=EN-US style='font-family:
  Montserrat;mso-fareast-font-family:Arial;mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi;mso-bidi-font-weight:bold'>Allergies:<span
  style='mso-spacerun:yes'>� </span><span style='mso-tab-count:1'>�������� </span>���������______________________________
  <o:p></o:p></span></p>
  <p class=MsoNormal style='margin-left:5.3pt;line-height:normal'><span
  lang=EN-US style='font-family:Montserrat;mso-fareast-font-family:Arial;
  mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi;
  mso-bidi-font-weight:bold'><span style='mso-spacerun:yes'>�</span><span
  style='mso-tab-count:1'>����������� </span><span
  style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  <p class=MsoNormal align=center style='text-align:center;line-height:normal'><span
  lang=EN-US style='font-family:Montserrat;mso-fareast-font-family:Arial;
  mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi;
  mso-bidi-font-weight:bold'><span style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  <p class=MsoNormal style='margin-left:5.3pt;line-height:normal'><span
  lang=EN-US style='font-family:Montserrat;mso-fareast-font-family:Arial;
  mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi;
  mso-bidi-font-weight:bold'><span style='mso-spacerun:yes'>�</span><span
  style='mso-tab-count:1'>����������� </span><span
  style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  <p class=MsoNormal style='margin-left:5.3pt'><span lang=EN-US
  style='font-family:Montserrat;mso-fareast-font-family:Arial;mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi;mso-bidi-font-weight:bold'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:1;height:19.85pt'>
  <td width=406 colspan=5 valign=top style='width:304.6pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm .45pt 0cm 1.0pt;height:19.85pt'>
  <p class=MsoNormal><span lang=EN-US style='font-family:Montserrat;mso-fareast-font-family:
  Arial;mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi;
  mso-bidi-font-weight:bold'>&#61539;Patient medication list &#61539; Patient/family
  member(s) <o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:2;height:18.7pt'>
  <td width=406 colspan=5 valign=top style='width:304.6pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm .45pt 0cm 1.0pt;height:18.7pt'>
  <p class=MsoNormal><span lang=EN-US style='font-family:Montserrat;mso-fareast-font-family:
  Arial;mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi;
  mso-bidi-font-weight:bold'>&#61539;Previous discharge paper work &#61539;
  Patient�s own drugs<span style='mso-spacerun:yes'>�� </span><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:3;height:13.9pt'>
  <td width=406 colspan=5 valign=top style='width:304.6pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm .45pt 0cm 1.0pt;height:13.9pt'>
  <p class=MsoNormal><span lang=EN-US style='font-family:Montserrat;mso-fareast-font-family:
  Arial;mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi;
  mso-bidi-font-weight:bold'>&#61539; Other<span style='mso-spacerun:yes'>��
  </span>______________________________________________<span
  style='mso-spacerun:yes'>� </span><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:4;height:16.0pt'>
  <td width=165 valign=top style='width:123.7pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  background:#3AC2BA;padding:0cm .45pt 0cm 1.0pt;height:16.0pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-size:10.0pt;mso-bidi-font-size:12.0pt;line-height:115%;
  font-family:"Montserrat SemiBold";mso-fareast-font-family:Arial;mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi;color:white;mso-themecolor:
  background1;mso-bidi-font-weight:bold'>Medication name </span><span
  lang=EN-US style='font-size:10.0pt;mso-bidi-font-size:12.0pt;line-height:
  115%;font-family:"Montserrat SemiBold";mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi;color:white;mso-themecolor:background1;
  mso-bidi-font-weight:bold'><span style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  </td>
  <td width=47 valign=top style='width:35.55pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;background:#3AC2BA;padding:0cm .45pt 0cm 1.0pt;
  height:16.0pt'>
  <p class=MsoNormal style='margin-left:6.3pt'><span lang=EN-US
  style='font-size:10.0pt;mso-bidi-font-size:12.0pt;line-height:115%;
  font-family:"Montserrat SemiBold";mso-fareast-font-family:Arial;mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi;color:white;mso-themecolor:
  background1;mso-bidi-font-weight:bold'>Dose </span><span lang=EN-US
  style='font-size:10.0pt;mso-bidi-font-size:12.0pt;line-height:115%;
  font-family:"Montserrat SemiBold";mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi;color:white;mso-themecolor:background1;
  mso-bidi-font-weight:bold'><span style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  </td>
  <td width=48 valign=top style='width:35.65pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;background:#3AC2BA;padding:0cm .45pt 0cm 1.0pt;
  height:16.0pt'>
  <p class=MsoNormal style='margin-left:6.3pt'><span lang=EN-US
  style='font-size:10.0pt;mso-bidi-font-size:12.0pt;line-height:115%;
  font-family:"Montserrat SemiBold";mso-fareast-font-family:Arial;mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi;color:white;mso-themecolor:
  background1;mso-bidi-font-weight:bold'>Freq. </span><span lang=EN-US
  style='font-size:10.0pt;mso-bidi-font-size:12.0pt;line-height:115%;
  font-family:"Montserrat SemiBold";mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi;color:white;mso-themecolor:background1;
  mso-bidi-font-weight:bold'><span style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  </td>
  <td width=51 valign=top style='width:38.35pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;background:#3AC2BA;padding:0cm .45pt 0cm 1.0pt;
  height:16.0pt'>
  <p class=MsoNormal style='margin-left:5.85pt'><span lang=EN-US
  style='font-size:10.0pt;mso-bidi-font-size:12.0pt;line-height:115%;
  font-family:"Montserrat SemiBold";mso-fareast-font-family:Arial;mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi;color:white;mso-themecolor:
  background1;mso-bidi-font-weight:bold'>Route </span><span lang=EN-US
  style='font-size:10.0pt;mso-bidi-font-size:12.0pt;line-height:115%;
  font-family:"Montserrat SemiBold";mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi;color:white;mso-themecolor:background1;
  mso-bidi-font-weight:bold'><span style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  </td>
  <td width=95 valign=top style='width:71.35pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;background:#3AC2BA;padding:0cm .45pt 0cm 1.0pt;
  height:16.0pt'>
  <p class=MsoNormal style='margin-left:13.75pt'><span lang=EN-US
  style='font-size:10.0pt;mso-bidi-font-size:12.0pt;line-height:115%;
  font-family:"Montserrat SemiBold";mso-fareast-font-family:Arial;mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi;color:white;mso-themecolor:
  background1;mso-bidi-font-weight:bold'>Indication<span
  style='mso-spacerun:yes'>� </span></span><span lang=EN-US style='font-size:
  10.0pt;mso-bidi-font-size:12.0pt;line-height:115%;font-family:"Montserrat SemiBold";
  mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi;
  color:white;mso-themecolor:background1;mso-bidi-font-weight:bold'><span
  style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  </td>
  <td width=57 valign=top style='width:42.5pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;background:#3AC2BA;padding:0cm .45pt 0cm 1.0pt;
  height:16.0pt'>
  <p class=MsoNormal style='margin-left:6.5pt'><span lang=EN-US
  style='font-size:10.0pt;mso-bidi-font-size:12.0pt;line-height:115%;
  font-family:"Montserrat SemiBold";mso-fareast-font-family:Arial;mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi;color:white;mso-themecolor:
  background1;mso-bidi-font-weight:bold'>POMs* </span><span lang=EN-US
  style='font-size:10.0pt;mso-bidi-font-size:12.0pt;line-height:115%;
  font-family:"Montserrat SemiBold";mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi;color:white;mso-themecolor:background1;
  mso-bidi-font-weight:bold'><span style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  </td>
  <td width=83 valign=top style='width:62.45pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;background:#3AC2BA;padding:0cm .45pt 0cm 1.0pt;
  height:16.0pt'>
  <p class=MsoNormal align=right style='margin-right:3.55pt;text-align:right'><span
  lang=EN-US style='font-size:10.0pt;mso-bidi-font-size:12.0pt;line-height:
  115%;font-family:"Montserrat SemiBold";mso-fareast-font-family:Arial;
  mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi;
  color:white;mso-themecolor:background1;mso-bidi-font-weight:bold'>Continue<span
  style='mso-spacerun:yes'>� </span></span><span lang=EN-US style='font-size:
  10.0pt;mso-bidi-font-size:12.0pt;line-height:115%;font-family:"Montserrat SemiBold";
  mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi;
  color:white;mso-themecolor:background1;mso-bidi-font-weight:bold'><span
  style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  </td>
  <td width=214 valign=top style='width:160.45pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;background:#3AC2BA;padding:0cm .45pt 0cm 1.0pt;
  height:16.0pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-size:10.0pt;mso-bidi-font-size:12.0pt;line-height:115%;
  font-family:"Montserrat SemiBold";mso-fareast-font-family:Arial;mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi;color:white;mso-themecolor:
  background1;mso-bidi-font-weight:bold'>Remarks </span><span lang=EN-US
  style='font-size:10.0pt;mso-bidi-font-size:12.0pt;line-height:115%;
  font-family:"Montserrat SemiBold";mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi;color:white;mso-themecolor:background1;
  mso-bidi-font-weight:bold'><span style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:5;height:27.95pt'>
  <td width=165 valign=top style='width:123.7pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm .45pt 0cm 1.0pt;height:27.95pt'>
  <p class=MsoNormal align=center style='margin-bottom:1.6pt;text-align:center;
  line-height:normal'><span lang=EN-US style='font-family:"Montserrat SemiBold";
  mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi'><span
  style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-family:"Montserrat SemiBold";mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi'><span style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  </td>
  <td width=47 valign=top style='width:35.55pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm .45pt 0cm 1.0pt;height:27.95pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-family:"Montserrat SemiBold";mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi'><span style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  </td>
  <td width=48 valign=top style='width:35.65pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm .45pt 0cm 1.0pt;height:27.95pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-family:"Montserrat SemiBold";mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi'><span style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  </td>
  <td width=51 valign=top style='width:38.35pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm .45pt 0cm 1.0pt;height:27.95pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-family:"Montserrat SemiBold";mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi'><span style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  </td>
  <td width=95 valign=top style='width:71.35pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm .45pt 0cm 1.0pt;height:27.95pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-family:"Montserrat SemiBold";mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi'><span style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  </td>
  <td width=57 valign=top style='width:42.5pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm .45pt 0cm 1.0pt;height:27.95pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-family:"Montserrat SemiBold";mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi'><span style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  </td>
  <td width=83 valign=top style='width:62.45pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm .45pt 0cm 1.0pt;height:27.95pt'>
  <p class=MsoNormal style='margin-left:6.8pt'><span lang=EN-US
  style='font-size:9.0pt;mso-bidi-font-size:11.0pt;line-height:115%;font-family:
  "Montserrat SemiBold";mso-fareast-font-family:Arial;mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi'>Y </span><span lang=EN-US
  style='font-size:9.0pt;mso-bidi-font-size:11.0pt;line-height:115%;font-family:
  "Montserrat SemiBold";mso-fareast-font-family:Webdings;mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi'>&#61539;</span><span
  lang=EN-US style='font-size:9.0pt;mso-bidi-font-size:11.0pt;line-height:115%;
  font-family:"Montserrat SemiBold";mso-fareast-font-family:Arial;mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi'><span
  style='mso-spacerun:yes'>�� </span>N </span><span lang=EN-US
  style='font-size:9.0pt;mso-bidi-font-size:11.0pt;line-height:115%;font-family:
  "Montserrat SemiBold";mso-fareast-font-family:Webdings;mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi'>&#61539;</span><span
  lang=EN-US style='font-family:"Montserrat SemiBold";mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi'> <o:p></o:p></span></p>
  </td>
  <td width=214 valign=top style='width:160.45pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm .45pt 0cm 1.0pt;height:27.95pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-family:"Montserrat SemiBold";mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi'><span style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:6;height:27.95pt'>
  <td width=165 valign=top style='width:123.7pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm .45pt 0cm 1.0pt;height:27.95pt'>
  <p class=MsoNormal align=center style='margin-bottom:1.6pt;text-align:center;
  line-height:normal'><span lang=EN-US style='font-family:"Montserrat SemiBold";
  mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi'><span
  style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-family:"Montserrat SemiBold";mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi'><span style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  </td>
  <td width=47 valign=top style='width:35.55pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm .45pt 0cm 1.0pt;height:27.95pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-family:"Montserrat SemiBold";mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi'><span style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  </td>
  <td width=48 valign=top style='width:35.65pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm .45pt 0cm 1.0pt;height:27.95pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-family:"Montserrat SemiBold";mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi'><span style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  </td>
  <td width=51 valign=top style='width:38.35pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm .45pt 0cm 1.0pt;height:27.95pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-family:"Montserrat SemiBold";mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi'><span style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  </td>
  <td width=95 valign=top style='width:71.35pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm .45pt 0cm 1.0pt;height:27.95pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-family:"Montserrat SemiBold";mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi'><span style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  </td>
  <td width=57 valign=top style='width:42.5pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm .45pt 0cm 1.0pt;height:27.95pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-family:"Montserrat SemiBold";mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi'><span style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  </td>
  <td width=83 valign=top style='width:62.45pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm .45pt 0cm 1.0pt;height:27.95pt'>
  <p class=MsoNormal style='margin-left:6.8pt'><span lang=EN-US
  style='font-size:9.0pt;mso-bidi-font-size:11.0pt;line-height:115%;font-family:
  "Montserrat SemiBold";mso-fareast-font-family:Arial;mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi'>Y </span><span lang=EN-US
  style='font-size:9.0pt;mso-bidi-font-size:11.0pt;line-height:115%;font-family:
  "Montserrat SemiBold";mso-fareast-font-family:Webdings;mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi'>&#61539;</span><span
  lang=EN-US style='font-size:9.0pt;mso-bidi-font-size:11.0pt;line-height:115%;
  font-family:"Montserrat SemiBold";mso-fareast-font-family:Arial;mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi'><span
  style='mso-spacerun:yes'>�� </span>N </span><span lang=EN-US
  style='font-size:9.0pt;mso-bidi-font-size:11.0pt;line-height:115%;font-family:
  "Montserrat SemiBold";mso-fareast-font-family:Webdings;mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi'>&#61539;</span><span
  lang=EN-US style='font-family:"Montserrat SemiBold";mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi'> <o:p></o:p></span></p>
  </td>
  <td width=214 valign=top style='width:160.45pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm .45pt 0cm 1.0pt;height:27.95pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-family:"Montserrat SemiBold";mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi'><span style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:7;height:28.0pt'>
  <td width=165 valign=top style='width:123.7pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm .45pt 0cm 1.0pt;height:28.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:1.65pt;text-align:center;
  line-height:normal'><span lang=EN-US style='font-family:"Montserrat SemiBold";
  mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi'><span
  style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-family:"Montserrat SemiBold";mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi'><span style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  </td>
  <td width=47 valign=top style='width:35.55pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm .45pt 0cm 1.0pt;height:28.0pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-family:"Montserrat SemiBold";mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi'><span style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  </td>
  <td width=48 valign=top style='width:35.65pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm .45pt 0cm 1.0pt;height:28.0pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-family:"Montserrat SemiBold";mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi'><span style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  </td>
  <td width=51 valign=top style='width:38.35pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm .45pt 0cm 1.0pt;height:28.0pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-family:"Montserrat SemiBold";mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi'><span style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  </td>
  <td width=95 valign=top style='width:71.35pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm .45pt 0cm 1.0pt;height:28.0pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-family:"Montserrat SemiBold";mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi'><span style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  </td>
  <td width=57 valign=top style='width:42.5pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm .45pt 0cm 1.0pt;height:28.0pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-family:"Montserrat SemiBold";mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi'><span style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  </td>
  <td width=83 valign=top style='width:62.45pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm .45pt 0cm 1.0pt;height:28.0pt'>
  <p class=MsoNormal style='margin-left:6.8pt'><span lang=EN-US
  style='font-size:9.0pt;mso-bidi-font-size:11.0pt;line-height:115%;font-family:
  "Montserrat SemiBold";mso-fareast-font-family:Arial;mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi'>Y </span><span lang=EN-US
  style='font-size:9.0pt;mso-bidi-font-size:11.0pt;line-height:115%;font-family:
  "Montserrat SemiBold";mso-fareast-font-family:Webdings;mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi'>&#61539;</span><span
  lang=EN-US style='font-size:9.0pt;mso-bidi-font-size:11.0pt;line-height:115%;
  font-family:"Montserrat SemiBold";mso-fareast-font-family:Arial;mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi'><span
  style='mso-spacerun:yes'>�� </span>N </span><span lang=EN-US
  style='font-size:9.0pt;mso-bidi-font-size:11.0pt;line-height:115%;font-family:
  "Montserrat SemiBold";mso-fareast-font-family:Webdings;mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi'>&#61539;</span><span
  lang=EN-US style='font-family:"Montserrat SemiBold";mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi'> <o:p></o:p></span></p>
  </td>
  <td width=214 valign=top style='width:160.45pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm .45pt 0cm 1.0pt;height:28.0pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-family:"Montserrat SemiBold";mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi'><span style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:8;height:27.95pt'>
  <td width=165 valign=top style='width:123.7pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm .45pt 0cm 1.0pt;height:27.95pt'>
  <p class=MsoNormal align=center style='margin-bottom:1.6pt;text-align:center;
  line-height:normal'><span lang=EN-US style='font-family:"Montserrat SemiBold";
  mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi'><span
  style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-family:"Montserrat SemiBold";mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi'><span style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  </td>
  <td width=47 valign=top style='width:35.55pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm .45pt 0cm 1.0pt;height:27.95pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-family:"Montserrat SemiBold";mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi'><span style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  </td>
  <td width=48 valign=top style='width:35.65pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm .45pt 0cm 1.0pt;height:27.95pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-family:"Montserrat SemiBold";mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi'><span style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  </td>
  <td width=51 valign=top style='width:38.35pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm .45pt 0cm 1.0pt;height:27.95pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-family:"Montserrat SemiBold";mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi'><span style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  </td>
  <td width=95 valign=top style='width:71.35pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm .45pt 0cm 1.0pt;height:27.95pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-family:"Montserrat SemiBold";mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi'><span style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  </td>
  <td width=57 valign=top style='width:42.5pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm .45pt 0cm 1.0pt;height:27.95pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-family:"Montserrat SemiBold";mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi'><span style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  </td>
  <td width=83 valign=top style='width:62.45pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm .45pt 0cm 1.0pt;height:27.95pt'>
  <p class=MsoNormal style='margin-left:6.8pt'><span lang=EN-US
  style='font-size:9.0pt;mso-bidi-font-size:11.0pt;line-height:115%;font-family:
  "Montserrat SemiBold";mso-fareast-font-family:Arial;mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi'>Y </span><span lang=EN-US
  style='font-size:9.0pt;mso-bidi-font-size:11.0pt;line-height:115%;font-family:
  "Montserrat SemiBold";mso-fareast-font-family:Webdings;mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi'>&#61539;</span><span
  lang=EN-US style='font-size:9.0pt;mso-bidi-font-size:11.0pt;line-height:115%;
  font-family:"Montserrat SemiBold";mso-fareast-font-family:Arial;mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi'><span
  style='mso-spacerun:yes'>�� </span>N </span><span lang=EN-US
  style='font-size:9.0pt;mso-bidi-font-size:11.0pt;line-height:115%;font-family:
  "Montserrat SemiBold";mso-fareast-font-family:Webdings;mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi'>&#61539;</span><span
  lang=EN-US style='font-family:"Montserrat SemiBold";mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi'> <o:p></o:p></span></p>
  </td>
  <td width=214 valign=top style='width:160.45pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm .45pt 0cm 1.0pt;height:27.95pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-family:"Montserrat SemiBold";mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi'><span style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:9;height:27.95pt'>
  <td width=165 valign=top style='width:123.7pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm .45pt 0cm 1.0pt;height:27.95pt'>
  <p class=MsoNormal align=center style='margin-bottom:1.6pt;text-align:center;
  line-height:normal'><span lang=EN-US style='font-family:"Montserrat SemiBold";
  mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi'><span
  style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-family:"Montserrat SemiBold";mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi'><span style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  </td>
  <td width=47 valign=top style='width:35.55pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm .45pt 0cm 1.0pt;height:27.95pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-family:"Montserrat SemiBold";mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi'><span style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  </td>
  <td width=48 valign=top style='width:35.65pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm .45pt 0cm 1.0pt;height:27.95pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-family:"Montserrat SemiBold";mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi'><span style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  </td>
  <td width=51 valign=top style='width:38.35pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm .45pt 0cm 1.0pt;height:27.95pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-family:"Montserrat SemiBold";mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi'><span style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  </td>
  <td width=95 valign=top style='width:71.35pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm .45pt 0cm 1.0pt;height:27.95pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-family:"Montserrat SemiBold";mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi'><span style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  </td>
  <td width=57 valign=top style='width:42.5pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm .45pt 0cm 1.0pt;height:27.95pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-family:"Montserrat SemiBold";mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi'><span style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  </td>
  <td width=83 valign=top style='width:62.45pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm .45pt 0cm 1.0pt;height:27.95pt'>
  <p class=MsoNormal style='margin-left:6.8pt'><span lang=EN-US
  style='font-size:9.0pt;mso-bidi-font-size:11.0pt;line-height:115%;font-family:
  "Montserrat SemiBold";mso-fareast-font-family:Arial;mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi'>Y </span><span lang=EN-US
  style='font-size:9.0pt;mso-bidi-font-size:11.0pt;line-height:115%;font-family:
  "Montserrat SemiBold";mso-fareast-font-family:Webdings;mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi'>&#61539;</span><span
  lang=EN-US style='font-size:9.0pt;mso-bidi-font-size:11.0pt;line-height:115%;
  font-family:"Montserrat SemiBold";mso-fareast-font-family:Arial;mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi'><span
  style='mso-spacerun:yes'>�� </span>N </span><span lang=EN-US
  style='font-size:9.0pt;mso-bidi-font-size:11.0pt;line-height:115%;font-family:
  "Montserrat SemiBold";mso-fareast-font-family:Webdings;mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi'>&#61539;</span><span
  lang=EN-US style='font-family:"Montserrat SemiBold";mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi'> <o:p></o:p></span></p>
  </td>
  <td width=214 valign=top style='width:160.45pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm .45pt 0cm 1.0pt;height:27.95pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-family:"Montserrat SemiBold";mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi'><span style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:10;height:27.95pt'>
  <td width=165 valign=top style='width:123.7pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm .45pt 0cm 1.0pt;height:27.95pt'>
  <p class=MsoNormal align=center style='margin-bottom:1.6pt;text-align:center;
  line-height:normal'><span lang=EN-US style='font-family:"Montserrat SemiBold";
  mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi'><span
  style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-family:"Montserrat SemiBold";mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi'><span style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  </td>
  <td width=47 valign=top style='width:35.55pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm .45pt 0cm 1.0pt;height:27.95pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-family:"Montserrat SemiBold";mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi'><span style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  </td>
  <td width=48 valign=top style='width:35.65pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm .45pt 0cm 1.0pt;height:27.95pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-family:"Montserrat SemiBold";mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi'><span style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  </td>
  <td width=51 valign=top style='width:38.35pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm .45pt 0cm 1.0pt;height:27.95pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-family:"Montserrat SemiBold";mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi'><span style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  </td>
  <td width=95 valign=top style='width:71.35pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm .45pt 0cm 1.0pt;height:27.95pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-family:"Montserrat SemiBold";mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi'><span style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  </td>
  <td width=57 valign=top style='width:42.5pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm .45pt 0cm 1.0pt;height:27.95pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-family:"Montserrat SemiBold";mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi'><span style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  </td>
  <td width=83 valign=top style='width:62.45pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm .45pt 0cm 1.0pt;height:27.95pt'>
  <p class=MsoNormal style='margin-left:6.8pt'><span lang=EN-US
  style='font-size:9.0pt;mso-bidi-font-size:11.0pt;line-height:115%;font-family:
  "Montserrat SemiBold";mso-fareast-font-family:Arial;mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi'>Y </span><span lang=EN-US
  style='font-size:9.0pt;mso-bidi-font-size:11.0pt;line-height:115%;font-family:
  "Montserrat SemiBold";mso-fareast-font-family:Webdings;mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi'>&#61539;</span><span
  lang=EN-US style='font-size:9.0pt;mso-bidi-font-size:11.0pt;line-height:115%;
  font-family:"Montserrat SemiBold";mso-fareast-font-family:Arial;mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi'><span
  style='mso-spacerun:yes'>�� </span>N </span><span lang=EN-US
  style='font-size:9.0pt;mso-bidi-font-size:11.0pt;line-height:115%;font-family:
  "Montserrat SemiBold";mso-fareast-font-family:Webdings;mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi'>&#61539;</span><span
  lang=EN-US style='font-family:"Montserrat SemiBold";mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi'> <o:p></o:p></span></p>
  </td>
  <td width=214 valign=top style='width:160.45pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm .45pt 0cm 1.0pt;height:27.95pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-family:"Montserrat SemiBold";mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi'><span style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:11;height:27.95pt'>
  <td width=165 valign=top style='width:123.7pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm .45pt 0cm 1.0pt;height:27.95pt'>
  <p class=MsoNormal align=center style='margin-bottom:1.6pt;text-align:center;
  line-height:normal'><span lang=EN-US style='font-family:"Montserrat SemiBold";
  mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi'><span
  style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-family:"Montserrat SemiBold";mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi'><span style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  </td>
  <td width=47 valign=top style='width:35.55pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm .45pt 0cm 1.0pt;height:27.95pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-family:"Montserrat SemiBold";mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi'><span style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  </td>
  <td width=48 valign=top style='width:35.65pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm .45pt 0cm 1.0pt;height:27.95pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-family:"Montserrat SemiBold";mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi'><span style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  </td>
  <td width=51 valign=top style='width:38.35pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm .45pt 0cm 1.0pt;height:27.95pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-family:"Montserrat SemiBold";mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi'><span style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  </td>
  <td width=95 valign=top style='width:71.35pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm .45pt 0cm 1.0pt;height:27.95pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-family:"Montserrat SemiBold";mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi'><span style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  </td>
  <td width=57 valign=top style='width:42.5pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm .45pt 0cm 1.0pt;height:27.95pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-family:"Montserrat SemiBold";mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi'><span style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  </td>
  <td width=83 valign=top style='width:62.45pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm .45pt 0cm 1.0pt;height:27.95pt'>
  <p class=MsoNormal style='margin-left:6.8pt'><span lang=EN-US
  style='font-size:9.0pt;mso-bidi-font-size:11.0pt;line-height:115%;font-family:
  "Montserrat SemiBold";mso-fareast-font-family:Arial;mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi'>Y </span><span lang=EN-US
  style='font-size:9.0pt;mso-bidi-font-size:11.0pt;line-height:115%;font-family:
  "Montserrat SemiBold";mso-fareast-font-family:Webdings;mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi'>&#61539;</span><span
  lang=EN-US style='font-size:9.0pt;mso-bidi-font-size:11.0pt;line-height:115%;
  font-family:"Montserrat SemiBold";mso-fareast-font-family:Arial;mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi'><span
  style='mso-spacerun:yes'>�� </span>N </span><span lang=EN-US
  style='font-size:9.0pt;mso-bidi-font-size:11.0pt;line-height:115%;font-family:
  "Montserrat SemiBold";mso-fareast-font-family:Webdings;mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi'>&#61539;</span><span
  lang=EN-US style='font-family:"Montserrat SemiBold";mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi'> <o:p></o:p></span></p>
  </td>
  <td width=214 valign=top style='width:160.45pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm .45pt 0cm 1.0pt;height:27.95pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-family:"Montserrat SemiBold";mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi'><span style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:12;height:27.95pt'>
  <td width=165 valign=top style='width:123.7pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm .45pt 0cm 1.0pt;height:27.95pt'>
  <p class=MsoNormal align=center style='margin-bottom:1.6pt;text-align:center;
  line-height:normal'><span lang=EN-US style='font-family:"Montserrat SemiBold";
  mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi'><span
  style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-family:"Montserrat SemiBold";mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi'><span style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  </td>
  <td width=47 valign=top style='width:35.55pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm .45pt 0cm 1.0pt;height:27.95pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-family:"Montserrat SemiBold";mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi'><span style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  </td>
  <td width=48 valign=top style='width:35.65pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm .45pt 0cm 1.0pt;height:27.95pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-family:"Montserrat SemiBold";mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi'><span style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  </td>
  <td width=51 valign=top style='width:38.35pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm .45pt 0cm 1.0pt;height:27.95pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-family:"Montserrat SemiBold";mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi'><span style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  </td>
  <td width=95 valign=top style='width:71.35pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm .45pt 0cm 1.0pt;height:27.95pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-family:"Montserrat SemiBold";mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi'><span style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  </td>
  <td width=57 valign=top style='width:42.5pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm .45pt 0cm 1.0pt;height:27.95pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-family:"Montserrat SemiBold";mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi'><span style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  </td>
  <td width=83 valign=top style='width:62.45pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm .45pt 0cm 1.0pt;height:27.95pt'>
  <p class=MsoNormal style='margin-left:6.8pt'><span lang=EN-US
  style='font-size:9.0pt;mso-bidi-font-size:11.0pt;line-height:115%;font-family:
  "Montserrat SemiBold";mso-fareast-font-family:Arial;mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi'>Y </span><span lang=EN-US
  style='font-size:9.0pt;mso-bidi-font-size:11.0pt;line-height:115%;font-family:
  "Montserrat SemiBold";mso-fareast-font-family:Webdings;mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi'>&#61539;</span><span
  lang=EN-US style='font-size:9.0pt;mso-bidi-font-size:11.0pt;line-height:115%;
  font-family:"Montserrat SemiBold";mso-fareast-font-family:Arial;mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi'><span
  style='mso-spacerun:yes'>�� </span>N </span><span lang=EN-US
  style='font-size:9.0pt;mso-bidi-font-size:11.0pt;line-height:115%;font-family:
  "Montserrat SemiBold";mso-fareast-font-family:Webdings;mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi'>&#61539;</span><span
  lang=EN-US style='font-family:"Montserrat SemiBold";mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi'> <o:p></o:p></span></p>
  </td>
  <td width=214 valign=top style='width:160.45pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm .45pt 0cm 1.0pt;height:27.95pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-family:"Montserrat SemiBold";mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi'><span style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:13;height:27.95pt'>
  <td width=165 valign=top style='width:123.7pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm .45pt 0cm 1.0pt;height:27.95pt'>
  <p class=MsoNormal align=center style='margin-bottom:1.6pt;text-align:center;
  line-height:normal'><span lang=EN-US style='font-family:"Montserrat SemiBold";
  mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi'><span
  style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-family:"Montserrat SemiBold";mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi'><span style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  </td>
  <td width=47 valign=top style='width:35.55pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm .45pt 0cm 1.0pt;height:27.95pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-family:"Montserrat SemiBold";mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi'><span style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  </td>
  <td width=48 valign=top style='width:35.65pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm .45pt 0cm 1.0pt;height:27.95pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-family:"Montserrat SemiBold";mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi'><span style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  </td>
  <td width=51 valign=top style='width:38.35pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm .45pt 0cm 1.0pt;height:27.95pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-family:"Montserrat SemiBold";mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi'><span style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  </td>
  <td width=95 valign=top style='width:71.35pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm .45pt 0cm 1.0pt;height:27.95pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-family:"Montserrat SemiBold";mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi'><span style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  </td>
  <td width=57 valign=top style='width:42.5pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm .45pt 0cm 1.0pt;height:27.95pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-family:"Montserrat SemiBold";mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi'><span style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  </td>
  <td width=83 valign=top style='width:62.45pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm .45pt 0cm 1.0pt;height:27.95pt'>
  <p class=MsoNormal style='margin-left:6.8pt'><span lang=EN-US
  style='font-size:9.0pt;mso-bidi-font-size:11.0pt;line-height:115%;font-family:
  "Montserrat SemiBold";mso-fareast-font-family:Arial;mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi'>Y </span><span lang=EN-US
  style='font-size:9.0pt;mso-bidi-font-size:11.0pt;line-height:115%;font-family:
  "Montserrat SemiBold";mso-fareast-font-family:Webdings;mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi'>&#61539;</span><span
  lang=EN-US style='font-size:9.0pt;mso-bidi-font-size:11.0pt;line-height:115%;
  font-family:"Montserrat SemiBold";mso-fareast-font-family:Arial;mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi'><span
  style='mso-spacerun:yes'>�� </span>N </span><span lang=EN-US
  style='font-size:9.0pt;mso-bidi-font-size:11.0pt;line-height:115%;font-family:
  "Montserrat SemiBold";mso-fareast-font-family:Webdings;mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi'>&#61539;</span><span
  lang=EN-US style='font-family:"Montserrat SemiBold";mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi'> <o:p></o:p></span></p>
  </td>
  <td width=214 valign=top style='width:160.45pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm .45pt 0cm 1.0pt;height:27.95pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-family:"Montserrat SemiBold";mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi'><span style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:14;height:27.85pt'>
  <td width=165 valign=top style='width:123.7pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm .45pt 0cm 1.0pt;height:27.85pt'>
  <p class=MsoNormal align=center style='margin-bottom:1.5pt;text-align:center;
  line-height:normal'><span lang=EN-US style='font-family:"Montserrat SemiBold";
  mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi'><span
  style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-family:"Montserrat SemiBold";mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi'><span style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  </td>
  <td width=47 valign=top style='width:35.55pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm .45pt 0cm 1.0pt;height:27.85pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-family:"Montserrat SemiBold";mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi'><span style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  </td>
  <td width=48 valign=top style='width:35.65pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm .45pt 0cm 1.0pt;height:27.85pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-family:"Montserrat SemiBold";mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi'><span style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  </td>
  <td width=51 valign=top style='width:38.35pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm .45pt 0cm 1.0pt;height:27.85pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-family:"Montserrat SemiBold";mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi'><span style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  </td>
  <td width=95 valign=top style='width:71.35pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm .45pt 0cm 1.0pt;height:27.85pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-family:"Montserrat SemiBold";mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi'><span style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  </td>
  <td width=57 valign=top style='width:42.5pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm .45pt 0cm 1.0pt;height:27.85pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-family:"Montserrat SemiBold";mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi'><span style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  </td>
  <td width=83 valign=top style='width:62.45pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm .45pt 0cm 1.0pt;height:27.85pt'>
  <p class=MsoNormal style='margin-left:6.8pt'><span lang=EN-US
  style='font-size:9.0pt;mso-bidi-font-size:11.0pt;line-height:115%;font-family:
  "Montserrat SemiBold";mso-fareast-font-family:Arial;mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi'>Y </span><span lang=EN-US
  style='font-size:9.0pt;mso-bidi-font-size:11.0pt;line-height:115%;font-family:
  "Montserrat SemiBold";mso-fareast-font-family:Webdings;mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi'>&#61539;</span><span
  lang=EN-US style='font-size:9.0pt;mso-bidi-font-size:11.0pt;line-height:115%;
  font-family:"Montserrat SemiBold";mso-fareast-font-family:Arial;mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi'><span
  style='mso-spacerun:yes'>�� </span>N </span><span lang=EN-US
  style='font-size:9.0pt;mso-bidi-font-size:11.0pt;line-height:115%;font-family:
  "Montserrat SemiBold";mso-fareast-font-family:Webdings;mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi'>&#61539;</span><span
  lang=EN-US style='font-family:"Montserrat SemiBold";mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi'> <o:p></o:p></span></p>
  </td>
  <td width=214 valign=top style='width:160.45pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm .45pt 0cm 1.0pt;height:27.85pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-family:"Montserrat SemiBold";mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi'><span style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:15;height:27.95pt'>
  <td width=165 valign=top style='width:123.7pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm .45pt 0cm 1.0pt;height:27.95pt'>
  <p class=MsoNormal align=center style='margin-bottom:1.5pt;text-align:center;
  line-height:normal'><span lang=EN-US style='font-family:"Montserrat SemiBold";
  mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi'><span
  style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-family:"Montserrat SemiBold";mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi'><span style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  </td>
  <td width=47 valign=top style='width:35.55pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm .45pt 0cm 1.0pt;height:27.95pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-family:"Montserrat SemiBold";mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi'><span style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  </td>
  <td width=48 valign=top style='width:35.65pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm .45pt 0cm 1.0pt;height:27.95pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-family:"Montserrat SemiBold";mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi'><span style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  </td>
  <td width=51 valign=top style='width:38.35pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm .45pt 0cm 1.0pt;height:27.95pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-family:"Montserrat SemiBold";mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi'><span style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  </td>
  <td width=95 valign=top style='width:71.35pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm .45pt 0cm 1.0pt;height:27.95pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-family:"Montserrat SemiBold";mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi'><span style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  </td>
  <td width=57 valign=top style='width:42.5pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm .45pt 0cm 1.0pt;height:27.95pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-family:"Montserrat SemiBold";mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi'><span style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  </td>
  <td width=83 valign=top style='width:62.45pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm .45pt 0cm 1.0pt;height:27.95pt'>
  <p class=MsoNormal style='margin-left:6.8pt'><span lang=EN-US
  style='font-size:9.0pt;mso-bidi-font-size:11.0pt;line-height:115%;font-family:
  "Montserrat SemiBold";mso-fareast-font-family:Arial;mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi'>Y </span><span lang=EN-US
  style='font-size:9.0pt;mso-bidi-font-size:11.0pt;line-height:115%;font-family:
  "Montserrat SemiBold";mso-fareast-font-family:Webdings;mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi'>&#61539;</span><span
  lang=EN-US style='font-size:9.0pt;mso-bidi-font-size:11.0pt;line-height:115%;
  font-family:"Montserrat SemiBold";mso-fareast-font-family:Arial;mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi'><span
  style='mso-spacerun:yes'>�� </span>N </span><span lang=EN-US
  style='font-size:9.0pt;mso-bidi-font-size:11.0pt;line-height:115%;font-family:
  "Montserrat SemiBold";mso-fareast-font-family:Webdings;mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi'>&#61539;</span><span
  lang=EN-US style='font-family:"Montserrat SemiBold";mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi'> <o:p></o:p></span></p>
  </td>
  <td width=214 valign=top style='width:160.45pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm .45pt 0cm 1.0pt;height:27.95pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-family:"Montserrat SemiBold";mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi'><span style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:16;height:27.95pt'>
  <td width=165 valign=top style='width:123.7pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm .45pt 0cm 1.0pt;height:27.95pt'>
  <p class=MsoNormal align=center style='margin-bottom:1.6pt;text-align:center;
  line-height:normal'><span lang=EN-US style='font-family:"Montserrat SemiBold";
  mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi'><span
  style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-family:"Montserrat SemiBold";mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi'><span style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  </td>
  <td width=47 valign=top style='width:35.55pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm .45pt 0cm 1.0pt;height:27.95pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-family:"Montserrat SemiBold";mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi'><span style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  </td>
  <td width=48 valign=top style='width:35.65pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm .45pt 0cm 1.0pt;height:27.95pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-family:"Montserrat SemiBold";mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi'><span style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  </td>
  <td width=51 valign=top style='width:38.35pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm .45pt 0cm 1.0pt;height:27.95pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-family:"Montserrat SemiBold";mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi'><span style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  </td>
  <td width=95 valign=top style='width:71.35pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm .45pt 0cm 1.0pt;height:27.95pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-family:"Montserrat SemiBold";mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi'><span style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  </td>
  <td width=57 valign=top style='width:42.5pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm .45pt 0cm 1.0pt;height:27.95pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-family:"Montserrat SemiBold";mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi'><span style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  </td>
  <td width=83 valign=top style='width:62.45pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm .45pt 0cm 1.0pt;height:27.95pt'>
  <p class=MsoNormal style='margin-left:6.8pt'><span lang=EN-US
  style='font-size:9.0pt;mso-bidi-font-size:11.0pt;line-height:115%;font-family:
  "Montserrat SemiBold";mso-fareast-font-family:Arial;mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi'>Y </span><span lang=EN-US
  style='font-size:9.0pt;mso-bidi-font-size:11.0pt;line-height:115%;font-family:
  "Montserrat SemiBold";mso-fareast-font-family:Webdings;mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi'>&#61539;</span><span
  lang=EN-US style='font-size:9.0pt;mso-bidi-font-size:11.0pt;line-height:115%;
  font-family:"Montserrat SemiBold";mso-fareast-font-family:Arial;mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi'><span
  style='mso-spacerun:yes'>�� </span>N </span><span lang=EN-US
  style='font-size:9.0pt;mso-bidi-font-size:11.0pt;line-height:115%;font-family:
  "Montserrat SemiBold";mso-fareast-font-family:Webdings;mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi'>&#61539;</span><span
  lang=EN-US style='font-family:"Montserrat SemiBold";mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi'> <o:p></o:p></span></p>
  </td>
  <td width=214 valign=top style='width:160.45pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm .45pt 0cm 1.0pt;height:27.95pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-family:"Montserrat SemiBold";mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi'><span style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:17;mso-yfti-lastrow:yes;height:24.7pt'>
  <td width=260 colspan=3 valign=top style='width:194.9pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm .45pt 0cm 1.0pt;height:24.7pt'>
  <p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:2.3pt;
  margin-left:4.8pt;line-height:normal'><span lang=EN-US style='font-size:9.0pt;
  mso-bidi-font-size:11.0pt;font-family:"Montserrat SemiBold";mso-fareast-font-family:
  Arial;mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi'>Nurse/Pharmacist
  stamp &amp;Sig.: </span><span lang=EN-US style='font-family:"Montserrat SemiBold";
  mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi'><span
  style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  <p class=MsoNormal style='margin-left:4.8pt'><span lang=EN-US
  style='font-family:"Montserrat SemiBold";mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=146 colspan=2 valign=top style='width:109.7pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm .45pt 0cm 1.0pt;height:24.7pt'>
  <p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:.35pt;
  margin-left:4.9pt;line-height:normal'><span lang=EN-US style='font-size:9.0pt;
  mso-bidi-font-size:11.0pt;font-family:"Montserrat SemiBold";mso-fareast-font-family:
  Arial;mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi'>Time:<span
  style='mso-spacerun:yes'>������������ </span><o:p></o:p></span></p>
  <p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:.35pt;
  margin-left:4.9pt;line-height:normal'><span lang=EN-US style='font-size:9.0pt;
  mso-bidi-font-size:11.0pt;font-family:"Montserrat SemiBold";mso-fareast-font-family:
  Arial;mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi'>Date:<span
  style='mso-spacerun:yes'>��������� </span>/<span
  style='mso-spacerun:yes'>����� </span>/<span style='mso-spacerun:yes'>�
  </span><span style='mso-spacerun:yes'>��</span><span
  style='mso-spacerun:yes'>�</span><span style='mso-spacerun:yes'>������</span></span><span
  lang=EN-US style='font-family:"Montserrat SemiBold";mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi'><span
  style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  </td>
  <td width=354 colspan=3 valign=top style='width:265.4pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm .45pt 0cm 1.0pt;height:24.7pt'>
  <p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:2.25pt;
  margin-left:5.05pt;line-height:normal'><span lang=EN-US style='font-size:
  9.0pt;mso-bidi-font-size:11.0pt;font-family:"Montserrat SemiBold";mso-fareast-font-family:
  Arial;mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi'>Physician
  stamp &amp;Sig</span><span lang=EN-US style='font-family:"Montserrat SemiBold";
  mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi'>.</span><span
  lang=EN-US style='font-size:9.0pt;mso-bidi-font-size:11.0pt;font-family:"Montserrat SemiBold";
  mso-fareast-font-family:Arial;mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi'>:<span style='mso-spacerun:yes'>� </span></span><span
  lang=EN-US style='font-family:"Montserrat SemiBold";mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi'><span
  style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  <p class=MsoNormal style='margin-left:5.05pt'><span lang=EN-US
  style='font-family:"Montserrat SemiBold";mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi'><span style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  </td>
 </tr>
</table>

<p class=MsoNormal style='margin-bottom:1.9pt'><b style='mso-bidi-font-weight:
normal'><span lang=EN-US style='font-size:9.0pt;mso-bidi-font-size:11.0pt;
line-height:115%;font-family:Montserrat;mso-fareast-font-family:Arial;
mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></b></p>

<p class=MsoNormal style='margin-bottom:1.9pt'><span lang=EN-US
style='font-size:10.0pt;mso-bidi-font-size:12.0pt;line-height:115%;font-family:
"Montserrat SemiBold";mso-fareast-font-family:Arial;mso-bidi-font-family:"Times New Roman";
mso-bidi-theme-font:major-bidi;mso-bidi-font-weight:bold'>Added Medications: </span><span
lang=EN-US style='font-size:12.0pt;line-height:115%;font-family:"Montserrat SemiBold";
mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi;
mso-bidi-font-weight:bold'><span style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>

<p class=MsoNormal style='margin-bottom:1.9pt'><span lang=EN-US
style='font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></p>

<table class=TableGrid border=1 cellspacing=0 cellpadding=0 width=745
 style='width:558.5pt;margin-left:-14.55pt;border-collapse:collapse;border:
 none;mso-border-alt:solid windowtext .5pt;mso-yfti-tbllook:1184;mso-padding-alt:
 0cm .85pt 0cm .1pt;mso-border-insideh:.5pt solid windowtext;mso-border-insidev:
 .5pt solid windowtext'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;height:22.55pt'>
  <td width=162 valign=top style='width:121.45pt;border:solid windowtext 1.0pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm .85pt 0cm .1pt;height:22.55pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-size:9.0pt;mso-bidi-font-size:11.0pt;line-height:115%;font-family:
  Montserrat;mso-fareast-font-family:Arial;mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi;mso-bidi-font-weight:bold'>1- </span><span
  lang=EN-US style='font-size:10.0pt;line-height:115%;font-family:Montserrat;
  mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi;
  mso-bidi-font-weight:bold'>Medication</span><span lang=EN-US
  style='font-size:10.0pt;line-height:115%;font-family:Montserrat;mso-fareast-font-family:
  Arial;mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi;
  mso-bidi-font-weight:bold'> name</span><span lang=EN-US style='font-size:
  9.0pt;mso-bidi-font-size:11.0pt;line-height:115%;font-family:Montserrat;
  mso-fareast-font-family:Arial;mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi;mso-bidi-font-weight:bold'> </span><span
  lang=EN-US style='font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi;mso-bidi-font-weight:bold'><span
  style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  </td>
  <td width=47 valign=top style='width:35.55pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm .85pt 0cm .1pt;height:22.55pt'>
  <p class=MsoNormal style='margin-left:7.3pt'><span lang=EN-US
  style='font-size:9.0pt;mso-bidi-font-size:11.0pt;line-height:115%;font-family:
  Montserrat;mso-fareast-font-family:Arial;mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi;mso-bidi-font-weight:bold'>Dose </span><span
  lang=EN-US style='font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi;mso-bidi-font-weight:bold'><span
  style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  </td>
  <td width=47 valign=top style='width:35.35pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm .85pt 0cm .1pt;height:22.55pt'>
  <p class=MsoNormal style='margin-left:7.2pt'><span lang=EN-US
  style='font-size:9.0pt;mso-bidi-font-size:11.0pt;line-height:115%;font-family:
  Montserrat;mso-fareast-font-family:Arial;mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi;mso-bidi-font-weight:bold'>Freq. </span><span
  lang=EN-US style='font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi;mso-bidi-font-weight:bold'><span
  style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  </td>
  <td width=50 valign=top style='width:37.85pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm .85pt 0cm .1pt;height:22.55pt'>
  <p class=MsoNormal style='margin-left:6.7pt'><span lang=EN-US
  style='font-size:9.0pt;mso-bidi-font-size:11.0pt;line-height:115%;font-family:
  Montserrat;mso-fareast-font-family:Arial;mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi;mso-bidi-font-weight:bold'>Route </span><span
  lang=EN-US style='font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi;mso-bidi-font-weight:bold'><span
  style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  </td>
  <td width=101 valign=top style='width:75.75pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm .85pt 0cm .1pt;height:22.55pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-size:9.0pt;mso-bidi-font-size:11.0pt;line-height:115%;font-family:
  Montserrat;mso-fareast-font-family:Arial;mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi;mso-bidi-font-weight:bold'>Indication<span
  style='mso-spacerun:yes'>� </span></span><span lang=EN-US style='font-family:
  Montserrat;mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi;
  mso-bidi-font-weight:bold'><span style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  </td>
  <td width=57 valign=top style='width:42.8pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm .85pt 0cm .1pt;height:22.55pt'>
  <p class=MsoNormal style='margin-left:6.85pt'><span lang=EN-US
  style='font-size:9.0pt;mso-bidi-font-size:11.0pt;line-height:115%;font-family:
  Montserrat;mso-fareast-font-family:Arial;mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi;mso-bidi-font-weight:bold'>POMs* </span><span
  lang=EN-US style='font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi;mso-bidi-font-weight:bold'><span
  style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  </td>
  <td width=76 valign=top style='width:57.25pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm .85pt 0cm .1pt;height:22.55pt'>
  <p class=MsoNormal align=right style='margin-right:1.3pt;text-align:right'><span
  lang=EN-US style='font-size:9.0pt;mso-bidi-font-size:11.0pt;line-height:115%;
  font-family:Montserrat;mso-fareast-font-family:Arial;mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi;mso-bidi-font-weight:bold'>continue<span
  style='mso-spacerun:yes'>� </span></span><span lang=EN-US style='font-family:
  Montserrat;mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi;
  mso-bidi-font-weight:bold'><span style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  </td>
  <td width=203 valign=top style='width:152.5pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm .85pt 0cm .1pt;height:22.55pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-size:9.0pt;mso-bidi-font-size:11.0pt;line-height:115%;font-family:
  Montserrat;mso-fareast-font-family:Arial;mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi;mso-bidi-font-weight:bold'>Remarks </span><span
  lang=EN-US style='font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi;mso-bidi-font-weight:bold'><span
  style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:1;height:46.85pt'>
  <td width=162 valign=top style='width:121.45pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm .85pt 0cm .1pt;height:46.85pt'>
  <p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:1.6pt;
  margin-left:.95pt;line-height:normal'><span lang=EN-US style='font-family:
  Montserrat;mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi;
  mso-bidi-font-weight:bold'><span style='mso-spacerun:yes'>�</span><span
  style='mso-tab-count:1'>������������� </span><span
  style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi;mso-bidi-font-weight:bold'><span
  style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  </td>
  <td width=47 valign=top style='width:35.55pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm .85pt 0cm .1pt;height:46.85pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi;mso-bidi-font-weight:bold'><span
  style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  </td>
  <td width=47 valign=top style='width:35.35pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm .85pt 0cm .1pt;height:46.85pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi;mso-bidi-font-weight:bold'><span
  style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  </td>
  <td width=50 valign=top style='width:37.85pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm .85pt 0cm .1pt;height:46.85pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi;mso-bidi-font-weight:bold'><span
  style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  </td>
  <td width=101 valign=top style='width:75.75pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm .85pt 0cm .1pt;height:46.85pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi;mso-bidi-font-weight:bold'><span
  style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  </td>
  <td width=57 valign=top style='width:42.8pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm .85pt 0cm .1pt;height:46.85pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi;mso-bidi-font-weight:bold'><span
  style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  </td>
  <td width=76 valign=top style='width:57.25pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm .85pt 0cm .1pt;height:46.85pt'>
  <p class=MsoNormal style='margin-left:7.8pt'><span lang=EN-US
  style='font-size:9.0pt;mso-bidi-font-size:11.0pt;line-height:115%;font-family:
  Montserrat;mso-fareast-font-family:Arial;mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi;mso-bidi-font-weight:bold'>Y </span><span
  lang=EN-US style='font-size:9.0pt;mso-bidi-font-size:11.0pt;line-height:115%;
  font-family:Montserrat;mso-fareast-font-family:Webdings;mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi;mso-bidi-font-weight:bold'>&#61539;</span><span
  lang=EN-US style='font-size:9.0pt;mso-bidi-font-size:11.0pt;line-height:115%;
  font-family:Montserrat;mso-fareast-font-family:Arial;mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi;mso-bidi-font-weight:bold'><span
  style='mso-spacerun:yes'>�� </span>N </span><span lang=EN-US
  style='font-size:9.0pt;mso-bidi-font-size:11.0pt;line-height:115%;font-family:
  Montserrat;mso-fareast-font-family:Webdings;mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi;mso-bidi-font-weight:bold'>&#61539;</span><span
  lang=EN-US style='font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi;mso-bidi-font-weight:bold'> <o:p></o:p></span></p>
  </td>
  <td width=203 valign=top style='width:152.5pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm .85pt 0cm .1pt;height:46.85pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi;mso-bidi-font-weight:bold'><span
  style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:2;height:42.7pt'>
  <td width=209 colspan=2 valign=top style='width:157.0pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm .85pt 0cm .1pt;height:42.7pt'>
  <p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:1.45pt;
  margin-left:.95pt;line-height:normal'><span lang=EN-US style='font-family:
  Montserrat;mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi;
  mso-bidi-font-weight:bold'><span style='mso-spacerun:yes'>�</span></span><span
  lang=EN-US style='font-size:8.0pt;mso-bidi-font-size:11.0pt;font-family:Montserrat;
  mso-fareast-font-family:Arial;mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi;mso-bidi-font-weight:bold'>Source: Hospital
  /clinic </span><span lang=EN-US style='font-family:Montserrat;mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi;mso-bidi-font-weight:bold'><span
  style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi;mso-bidi-font-weight:bold'><span
  style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  </td>
  <td width=47 valign=top style='width:35.35pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm .85pt 0cm .1pt;height:42.7pt'>
  <p class=MsoNormal><span lang=EN-US style='font-family:Montserrat;mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi;mso-bidi-font-weight:bold'><span
  style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  </td>
  <td width=151 colspan=2 valign=top style='width:113.6pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm .85pt 0cm .1pt;height:42.7pt'>
  <p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:2.05pt;
  margin-left:5.75pt;line-height:normal'><span lang=EN-US style='font-size:
  8.0pt;mso-bidi-font-size:11.0pt;font-family:Montserrat;mso-fareast-font-family:
  Arial;mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi;
  mso-bidi-font-weight:bold'>Nurse/Pharmacist stamp &amp;Sig.: </span><span
  lang=EN-US style='font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi;mso-bidi-font-weight:bold'><span
  style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  <p class=MsoNormal style='margin-left:5.75pt'><span lang=EN-US
  style='font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi;mso-bidi-font-weight:bold'><span
  style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  </td>
  <td width=133 colspan=2 valign=top style='width:100.05pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm .85pt 0cm .1pt;height:42.7pt'>
  <p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:.1pt;
  margin-left:5.4pt;line-height:normal'><span lang=EN-US style='font-size:8.0pt;
  mso-bidi-font-size:11.0pt;font-family:Montserrat;mso-fareast-font-family:
  Arial;mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi;
  mso-bidi-font-weight:bold'>Time:<span style='mso-spacerun:yes'>������������
  </span><o:p></o:p></span></p>
  <p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:.1pt;
  margin-left:5.4pt;line-height:normal'><span lang=EN-US style='font-size:8.0pt;
  mso-bidi-font-size:11.0pt;font-family:Montserrat;mso-fareast-font-family:
  Arial;mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi;
  mso-bidi-font-weight:bold'>Date:<span style='mso-spacerun:yes'>�������
  </span>/<span style='mso-spacerun:yes'>�������� </span>/<span
  style='mso-spacerun:yes'>����� </span></span><span lang=EN-US
  style='font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi;mso-bidi-font-weight:bold'><span
  style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  </td>
  <td width=203 valign=top style='width:152.5pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm .85pt 0cm .1pt;height:42.7pt'>
  <p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:2.05pt;
  margin-left:5.65pt;line-height:normal'><span lang=EN-US style='font-size:
  8.0pt;mso-bidi-font-size:11.0pt;font-family:Montserrat;mso-fareast-font-family:
  Arial;mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi;
  mso-bidi-font-weight:bold'>Physician stamp &amp;Sig.:<span
  style='mso-spacerun:yes'>� </span></span><span lang=EN-US style='font-family:
  Montserrat;mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi;
  mso-bidi-font-weight:bold'><span style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  <p class=MsoNormal style='margin-left:5.65pt'><span lang=EN-US
  style='font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi;mso-bidi-font-weight:bold'><span
  style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:3;height:23.95pt'>
  <td width=162 valign=top style='width:121.45pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm .85pt 0cm .1pt;height:23.95pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-size:9.0pt;mso-bidi-font-size:11.0pt;line-height:115%;font-family:
  Montserrat;mso-fareast-font-family:Arial;mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi;mso-bidi-font-weight:bold'>2- Medication name </span><span
  lang=EN-US style='font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi;mso-bidi-font-weight:bold'><span
  style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  </td>
  <td width=47 valign=top style='width:35.55pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm .85pt 0cm .1pt;height:23.95pt'>
  <p class=MsoNormal style='margin-left:7.3pt'><span lang=EN-US
  style='font-size:9.0pt;mso-bidi-font-size:11.0pt;line-height:115%;font-family:
  Montserrat;mso-fareast-font-family:Arial;mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi;mso-bidi-font-weight:bold'>Dose </span><span
  lang=EN-US style='font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi;mso-bidi-font-weight:bold'><span
  style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  </td>
  <td width=47 valign=top style='width:35.35pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm .85pt 0cm .1pt;height:23.95pt'>
  <p class=MsoNormal style='margin-left:7.2pt'><span lang=EN-US
  style='font-size:9.0pt;mso-bidi-font-size:11.0pt;line-height:115%;font-family:
  Montserrat;mso-fareast-font-family:Arial;mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi;mso-bidi-font-weight:bold'>Freq. </span><span
  lang=EN-US style='font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi;mso-bidi-font-weight:bold'><span
  style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  </td>
  <td width=50 valign=top style='width:37.85pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm .85pt 0cm .1pt;height:23.95pt'>
  <p class=MsoNormal style='margin-left:6.7pt'><span lang=EN-US
  style='font-size:9.0pt;mso-bidi-font-size:11.0pt;line-height:115%;font-family:
  Montserrat;mso-fareast-font-family:Arial;mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi;mso-bidi-font-weight:bold'>Route </span><span
  lang=EN-US style='font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi;mso-bidi-font-weight:bold'><span
  style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  </td>
  <td width=101 valign=top style='width:75.75pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm .85pt 0cm .1pt;height:23.95pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-size:9.0pt;mso-bidi-font-size:11.0pt;line-height:115%;font-family:
  Montserrat;mso-fareast-font-family:Arial;mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi;mso-bidi-font-weight:bold'>Indication<span
  style='mso-spacerun:yes'>� </span></span><span lang=EN-US style='font-family:
  Montserrat;mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi;
  mso-bidi-font-weight:bold'><span style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  </td>
  <td width=57 valign=top style='width:42.8pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm .85pt 0cm .1pt;height:23.95pt'>
  <p class=MsoNormal style='margin-left:6.85pt'><span lang=EN-US
  style='font-size:9.0pt;mso-bidi-font-size:11.0pt;line-height:115%;font-family:
  Montserrat;mso-fareast-font-family:Arial;mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi;mso-bidi-font-weight:bold'>POMs* </span><span
  lang=EN-US style='font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi;mso-bidi-font-weight:bold'><span
  style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  </td>
  <td width=76 valign=top style='width:57.25pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm .85pt 0cm .1pt;height:23.95pt'>
  <p class=MsoNormal align=right style='margin-right:1.3pt;text-align:right'><span
  lang=EN-US style='font-size:9.0pt;mso-bidi-font-size:11.0pt;line-height:115%;
  font-family:Montserrat;mso-fareast-font-family:Arial;mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi;mso-bidi-font-weight:bold'>continue<span
  style='mso-spacerun:yes'>� </span></span><span lang=EN-US style='font-family:
  Montserrat;mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi;
  mso-bidi-font-weight:bold'><span style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  </td>
  <td width=203 valign=top style='width:152.5pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm .85pt 0cm .1pt;height:23.95pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-size:9.0pt;mso-bidi-font-size:11.0pt;line-height:115%;font-family:
  Montserrat;mso-fareast-font-family:Arial;mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi;mso-bidi-font-weight:bold'>Remarks </span><span
  lang=EN-US style='font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi;mso-bidi-font-weight:bold'><span
  style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:4;height:46.85pt'>
  <td width=162 valign=top style='width:121.45pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm .85pt 0cm .1pt;height:46.85pt'>
  <p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:1.6pt;
  margin-left:.95pt;line-height:normal'><span lang=EN-US style='font-family:
  Montserrat;mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi;
  mso-bidi-font-weight:bold'><span style='mso-spacerun:yes'>�</span><span
  style='mso-tab-count:1'>������������� </span><span
  style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi;mso-bidi-font-weight:bold'><span
  style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  </td>
  <td width=47 valign=top style='width:35.55pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm .85pt 0cm .1pt;height:46.85pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi;mso-bidi-font-weight:bold'><span
  style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  </td>
  <td width=47 valign=top style='width:35.35pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm .85pt 0cm .1pt;height:46.85pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi;mso-bidi-font-weight:bold'><span
  style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  </td>
  <td width=50 valign=top style='width:37.85pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm .85pt 0cm .1pt;height:46.85pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi;mso-bidi-font-weight:bold'><span
  style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  </td>
  <td width=101 valign=top style='width:75.75pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm .85pt 0cm .1pt;height:46.85pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi;mso-bidi-font-weight:bold'><span
  style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  </td>
  <td width=57 valign=top style='width:42.8pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm .85pt 0cm .1pt;height:46.85pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi;mso-bidi-font-weight:bold'><span
  style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  </td>
  <td width=76 valign=top style='width:57.25pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm .85pt 0cm .1pt;height:46.85pt'>
  <p class=MsoNormal style='margin-left:7.8pt'><span lang=EN-US
  style='font-size:9.0pt;mso-bidi-font-size:11.0pt;line-height:115%;font-family:
  Montserrat;mso-fareast-font-family:Arial;mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi;mso-bidi-font-weight:bold'>Y </span><span
  lang=EN-US style='font-size:9.0pt;mso-bidi-font-size:11.0pt;line-height:115%;
  font-family:Montserrat;mso-fareast-font-family:Webdings;mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi;mso-bidi-font-weight:bold'>&#61539;</span><span
  lang=EN-US style='font-size:9.0pt;mso-bidi-font-size:11.0pt;line-height:115%;
  font-family:Montserrat;mso-fareast-font-family:Arial;mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi;mso-bidi-font-weight:bold'><span
  style='mso-spacerun:yes'>�� </span>N </span><span lang=EN-US
  style='font-size:9.0pt;mso-bidi-font-size:11.0pt;line-height:115%;font-family:
  Montserrat;mso-fareast-font-family:Webdings;mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi;mso-bidi-font-weight:bold'>&#61539;</span><span
  lang=EN-US style='font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi;mso-bidi-font-weight:bold'> <o:p></o:p></span></p>
  </td>
  <td width=203 valign=top style='width:152.5pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm .85pt 0cm .1pt;height:46.85pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi;mso-bidi-font-weight:bold'><span
  style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:5;height:42.7pt'>
  <td width=209 colspan=2 valign=top style='width:157.0pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm .85pt 0cm .1pt;height:42.7pt'>
  <p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:1.3pt;
  margin-left:.95pt;line-height:normal'><span lang=EN-US style='font-family:
  Montserrat;mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi;
  mso-bidi-font-weight:bold'><span style='mso-spacerun:yes'>�</span><span
  style='mso-tab-count:1'>������������� </span></span><span lang=EN-US
  style='font-size:8.0pt;mso-bidi-font-size:11.0pt;font-family:Montserrat;
  mso-fareast-font-family:Arial;mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi;mso-bidi-font-weight:bold'>Source: Hospital
  /clinic </span><span lang=EN-US style='font-family:Montserrat;mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi;mso-bidi-font-weight:bold'><span
  style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi;mso-bidi-font-weight:bold'><span
  style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  </td>
  <td width=47 style='width:35.35pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm .85pt 0cm .1pt;height:42.7pt'>
  <p class=MsoNormal><span lang=EN-US style='font-family:Montserrat;mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi;mso-bidi-font-weight:bold'><span
  style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  </td>
  <td width=151 colspan=2 valign=top style='width:113.6pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm .85pt 0cm .1pt;height:42.7pt'>
  <p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:2.0pt;
  margin-left:5.75pt;line-height:normal'><span lang=EN-US style='font-size:
  8.0pt;mso-bidi-font-size:11.0pt;font-family:Montserrat;mso-fareast-font-family:
  Arial;mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi;
  mso-bidi-font-weight:bold'>Nurse/Pharmacist stamp &amp;Sig.: </span><span
  lang=EN-US style='font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi;mso-bidi-font-weight:bold'><span
  style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  <p class=MsoNormal style='margin-left:5.75pt'><span lang=EN-US
  style='font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi;mso-bidi-font-weight:bold'><span
  style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  </td>
  <td width=133 colspan=2 valign=top style='width:100.05pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm .85pt 0cm .1pt;height:42.7pt'>
  <p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:.1pt;
  margin-left:5.4pt;line-height:normal'><span lang=EN-US style='font-size:8.0pt;
  mso-bidi-font-size:11.0pt;font-family:Montserrat;mso-fareast-font-family:
  Arial;mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi;
  mso-bidi-font-weight:bold'>Time:<span style='mso-spacerun:yes'>������������
  </span><o:p></o:p></span></p>
  <p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:.1pt;
  margin-left:5.4pt;line-height:normal'><span lang=EN-US style='font-size:8.0pt;
  mso-bidi-font-size:11.0pt;font-family:Montserrat;mso-fareast-font-family:
  Arial;mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi;
  mso-bidi-font-weight:bold'>Date:<span style='mso-spacerun:yes'>��������
  </span>/<span style='mso-spacerun:yes'>�������� </span>/<span
  style='mso-spacerun:yes'>����� </span></span><span lang=EN-US
  style='font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi;mso-bidi-font-weight:bold'><span
  style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  </td>
  <td width=203 valign=top style='width:152.5pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm .85pt 0cm .1pt;height:42.7pt'>
  <p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:2.0pt;
  margin-left:5.65pt;line-height:normal'><span lang=EN-US style='font-size:
  8.0pt;mso-bidi-font-size:11.0pt;font-family:Montserrat;mso-fareast-font-family:
  Arial;mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi;
  mso-bidi-font-weight:bold'>Physician stamp &amp;Sig.:<span
  style='mso-spacerun:yes'>� </span></span><span lang=EN-US style='font-family:
  Montserrat;mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi;
  mso-bidi-font-weight:bold'><span style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  <p class=MsoNormal style='margin-left:5.65pt'><span lang=EN-US
  style='font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi;mso-bidi-font-weight:bold'><span
  style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:6;height:23.75pt'>
  <td width=162 valign=top style='width:121.45pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm .85pt 0cm .1pt;height:23.75pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-size:9.0pt;mso-bidi-font-size:11.0pt;line-height:115%;font-family:
  Montserrat;mso-fareast-font-family:Arial;mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi;mso-bidi-font-weight:bold'>3- Medication name </span><span
  lang=EN-US style='font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi;mso-bidi-font-weight:bold'><span
  style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  </td>
  <td width=47 valign=top style='width:35.55pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm .85pt 0cm .1pt;height:23.75pt'>
  <p class=MsoNormal style='margin-left:7.3pt'><span lang=EN-US
  style='font-size:9.0pt;mso-bidi-font-size:11.0pt;line-height:115%;font-family:
  Montserrat;mso-fareast-font-family:Arial;mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi;mso-bidi-font-weight:bold'>Dose </span><span
  lang=EN-US style='font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi;mso-bidi-font-weight:bold'><span
  style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  </td>
  <td width=47 valign=top style='width:35.35pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm .85pt 0cm .1pt;height:23.75pt'>
  <p class=MsoNormal style='margin-left:7.2pt'><span lang=EN-US
  style='font-size:9.0pt;mso-bidi-font-size:11.0pt;line-height:115%;font-family:
  Montserrat;mso-fareast-font-family:Arial;mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi;mso-bidi-font-weight:bold'>Freq. </span><span
  lang=EN-US style='font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi;mso-bidi-font-weight:bold'><span
  style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  </td>
  <td width=50 valign=top style='width:37.85pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm .85pt 0cm .1pt;height:23.75pt'>
  <p class=MsoNormal style='margin-left:6.7pt'><span lang=EN-US
  style='font-size:9.0pt;mso-bidi-font-size:11.0pt;line-height:115%;font-family:
  Montserrat;mso-fareast-font-family:Arial;mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi;mso-bidi-font-weight:bold'>Route </span><span
  lang=EN-US style='font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi;mso-bidi-font-weight:bold'><span
  style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  </td>
  <td width=101 valign=top style='width:75.75pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm .85pt 0cm .1pt;height:23.75pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-size:9.0pt;mso-bidi-font-size:11.0pt;line-height:115%;font-family:
  Montserrat;mso-fareast-font-family:Arial;mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi;mso-bidi-font-weight:bold'>Indication<span
  style='mso-spacerun:yes'>� </span></span><span lang=EN-US style='font-family:
  Montserrat;mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi;
  mso-bidi-font-weight:bold'><span style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  </td>
  <td width=57 valign=top style='width:42.8pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm .85pt 0cm .1pt;height:23.75pt'>
  <p class=MsoNormal style='margin-left:6.85pt'><span lang=EN-US
  style='font-size:9.0pt;mso-bidi-font-size:11.0pt;line-height:115%;font-family:
  Montserrat;mso-fareast-font-family:Arial;mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi;mso-bidi-font-weight:bold'>POMs* </span><span
  lang=EN-US style='font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi;mso-bidi-font-weight:bold'><span
  style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  </td>
  <td width=76 valign=top style='width:57.25pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm .85pt 0cm .1pt;height:23.75pt'>
  <p class=MsoNormal align=right style='margin-right:1.3pt;text-align:right'><span
  lang=EN-US style='font-size:9.0pt;mso-bidi-font-size:11.0pt;line-height:115%;
  font-family:Montserrat;mso-fareast-font-family:Arial;mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi;mso-bidi-font-weight:bold'>continue<span
  style='mso-spacerun:yes'>� </span></span><span lang=EN-US style='font-family:
  Montserrat;mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi;
  mso-bidi-font-weight:bold'><span style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  </td>
  <td width=203 valign=top style='width:152.5pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm .85pt 0cm .1pt;height:23.75pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-size:9.0pt;mso-bidi-font-size:11.0pt;line-height:115%;font-family:
  Montserrat;mso-fareast-font-family:Arial;mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi;mso-bidi-font-weight:bold'>Remarks </span><span
  lang=EN-US style='font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi;mso-bidi-font-weight:bold'><span
  style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:7;height:46.85pt'>
  <td width=162 valign=top style='width:121.45pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm .85pt 0cm .1pt;height:46.85pt'>
  <p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:1.6pt;
  margin-left:.95pt;line-height:normal'><span lang=EN-US style='font-family:
  Montserrat;mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi;
  mso-bidi-font-weight:bold'><span style='mso-spacerun:yes'>�</span><span
  style='mso-tab-count:1'>������������� </span><span
  style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi;mso-bidi-font-weight:bold'><span
  style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  </td>
  <td width=47 valign=top style='width:35.55pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm .85pt 0cm .1pt;height:46.85pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi;mso-bidi-font-weight:bold'><span
  style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  </td>
  <td width=47 valign=top style='width:35.35pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm .85pt 0cm .1pt;height:46.85pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi;mso-bidi-font-weight:bold'><span
  style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  </td>
  <td width=50 valign=top style='width:37.85pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm .85pt 0cm .1pt;height:46.85pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi;mso-bidi-font-weight:bold'><span
  style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  </td>
  <td width=101 valign=top style='width:75.75pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm .85pt 0cm .1pt;height:46.85pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi;mso-bidi-font-weight:bold'><span
  style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  </td>
  <td width=57 valign=top style='width:42.8pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm .85pt 0cm .1pt;height:46.85pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi;mso-bidi-font-weight:bold'><span
  style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  </td>
  <td width=76 valign=top style='width:57.25pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm .85pt 0cm .1pt;height:46.85pt'>
  <p class=MsoNormal style='margin-left:7.8pt'><span lang=EN-US
  style='font-size:9.0pt;mso-bidi-font-size:11.0pt;line-height:115%;font-family:
  Montserrat;mso-fareast-font-family:Arial;mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi;mso-bidi-font-weight:bold'>Y </span><span
  lang=EN-US style='font-size:9.0pt;mso-bidi-font-size:11.0pt;line-height:115%;
  font-family:Montserrat;mso-fareast-font-family:Webdings;mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi;mso-bidi-font-weight:bold'>&#61539;</span><span
  lang=EN-US style='font-size:9.0pt;mso-bidi-font-size:11.0pt;line-height:115%;
  font-family:Montserrat;mso-fareast-font-family:Arial;mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi;mso-bidi-font-weight:bold'><span
  style='mso-spacerun:yes'>�� </span>N </span><span lang=EN-US
  style='font-size:9.0pt;mso-bidi-font-size:11.0pt;line-height:115%;font-family:
  Montserrat;mso-fareast-font-family:Webdings;mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi;mso-bidi-font-weight:bold'>&#61539;</span><span
  lang=EN-US style='font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi;mso-bidi-font-weight:bold'> <o:p></o:p></span></p>
  </td>
  <td width=203 valign=top style='width:152.5pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm .85pt 0cm .1pt;height:46.85pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi;mso-bidi-font-weight:bold'><span
  style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:8;height:42.25pt'>
  <td width=209 colspan=2 valign=top style='width:157.0pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm .85pt 0cm .1pt;height:42.25pt'>
  <p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:1.4pt;
  margin-left:.95pt;line-height:normal'><span lang=EN-US style='font-family:
  Montserrat;mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi;
  mso-bidi-font-weight:bold'><span style='mso-spacerun:yes'>�</span><span
  style='mso-tab-count:1'>������������� </span></span><span lang=EN-US
  style='font-size:8.0pt;mso-bidi-font-size:11.0pt;font-family:Montserrat;
  mso-fareast-font-family:Arial;mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi;mso-bidi-font-weight:bold'>Source:
  Hospital/clinic </span><span lang=EN-US style='font-family:Montserrat;
  mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi;
  mso-bidi-font-weight:bold'><span style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi;mso-bidi-font-weight:bold'><span
  style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  </td>
  <td width=47 valign=top style='width:35.35pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm .85pt 0cm .1pt;height:42.25pt'>
  <p class=MsoNormal><span lang=EN-US style='font-family:Montserrat;mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi;mso-bidi-font-weight:bold'><span
  style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  </td>
  <td width=151 colspan=2 valign=top style='width:113.6pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm .85pt 0cm .1pt;height:42.25pt'>
  <p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:2.1pt;
  margin-left:5.75pt;line-height:normal'><span lang=EN-US style='font-size:
  8.0pt;mso-bidi-font-size:11.0pt;font-family:Montserrat;mso-fareast-font-family:
  Arial;mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi;
  mso-bidi-font-weight:bold'>Nurse/Pharmacist stamp &amp;Sig.: </span><span
  lang=EN-US style='font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi;mso-bidi-font-weight:bold'><span
  style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  <p class=MsoNormal style='margin-left:5.75pt'><span lang=EN-US
  style='font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi;mso-bidi-font-weight:bold'><span
  style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  </td>
  <td width=133 colspan=2 valign=top style='width:100.05pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm .85pt 0cm .1pt;height:42.25pt'>
  <p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:.1pt;
  margin-left:5.4pt;line-height:normal'><span lang=EN-US style='font-size:8.0pt;
  mso-bidi-font-size:11.0pt;font-family:Montserrat;mso-fareast-font-family:
  Arial;mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi;
  mso-bidi-font-weight:bold'>Time:<span style='mso-spacerun:yes'>������������
  </span><o:p></o:p></span></p>
  <p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:.1pt;
  margin-left:5.4pt;line-height:normal'><span lang=EN-US style='font-size:8.0pt;
  mso-bidi-font-size:11.0pt;font-family:Montserrat;mso-fareast-font-family:
  Arial;mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi;
  mso-bidi-font-weight:bold'>Date:<span style='mso-spacerun:yes'>��������
  </span>/<span style='mso-spacerun:yes'>�������� </span>/<span
  style='mso-spacerun:yes'>����� </span></span><span lang=EN-US
  style='font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi;mso-bidi-font-weight:bold'><span
  style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  </td>
  <td width=203 valign=top style='width:152.5pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm .85pt 0cm .1pt;height:42.25pt'>
  <p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:2.1pt;
  margin-left:5.65pt;line-height:normal'><span lang=EN-US style='font-size:
  8.0pt;mso-bidi-font-size:11.0pt;font-family:Montserrat;mso-fareast-font-family:
  Arial;mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi;
  mso-bidi-font-weight:bold'>Physician stamp &amp;Sig.:<span
  style='mso-spacerun:yes'>� </span></span><span lang=EN-US style='font-family:
  Montserrat;mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi;
  mso-bidi-font-weight:bold'><span style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  <p class=MsoNormal style='margin-left:5.65pt'><span lang=EN-US
  style='font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi;mso-bidi-font-weight:bold'><span
  style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:9;height:23.95pt'>
  <td width=162 valign=top style='width:121.45pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm .85pt 0cm .1pt;height:23.95pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-size:9.0pt;mso-bidi-font-size:11.0pt;line-height:115%;font-family:
  Montserrat;mso-fareast-font-family:Arial;mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi;mso-bidi-font-weight:bold'>4- Medication name </span><span
  lang=EN-US style='font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi;mso-bidi-font-weight:bold'><span
  style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  </td>
  <td width=47 valign=top style='width:35.55pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm .85pt 0cm .1pt;height:23.95pt'>
  <p class=MsoNormal style='margin-left:7.3pt'><span lang=EN-US
  style='font-size:9.0pt;mso-bidi-font-size:11.0pt;line-height:115%;font-family:
  Montserrat;mso-fareast-font-family:Arial;mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi;mso-bidi-font-weight:bold'>Dose </span><span
  lang=EN-US style='font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi;mso-bidi-font-weight:bold'><span
  style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  </td>
  <td width=47 valign=top style='width:35.35pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm .85pt 0cm .1pt;height:23.95pt'>
  <p class=MsoNormal style='margin-left:7.2pt'><span lang=EN-US
  style='font-size:9.0pt;mso-bidi-font-size:11.0pt;line-height:115%;font-family:
  Montserrat;mso-fareast-font-family:Arial;mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi;mso-bidi-font-weight:bold'>Freq. </span><span
  lang=EN-US style='font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi;mso-bidi-font-weight:bold'><span
  style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  </td>
  <td width=50 valign=top style='width:37.85pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm .85pt 0cm .1pt;height:23.95pt'>
  <p class=MsoNormal style='margin-left:6.7pt'><span lang=EN-US
  style='font-size:9.0pt;mso-bidi-font-size:11.0pt;line-height:115%;font-family:
  Montserrat;mso-fareast-font-family:Arial;mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi;mso-bidi-font-weight:bold'>Route </span><span
  lang=EN-US style='font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi;mso-bidi-font-weight:bold'><span
  style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  </td>
  <td width=101 valign=top style='width:75.75pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm .85pt 0cm .1pt;height:23.95pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-size:9.0pt;mso-bidi-font-size:11.0pt;line-height:115%;font-family:
  Montserrat;mso-fareast-font-family:Arial;mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi;mso-bidi-font-weight:bold'>Indication<span
  style='mso-spacerun:yes'>� </span></span><span lang=EN-US style='font-family:
  Montserrat;mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi;
  mso-bidi-font-weight:bold'><span style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  </td>
  <td width=57 valign=top style='width:42.8pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm .85pt 0cm .1pt;height:23.95pt'>
  <p class=MsoNormal style='margin-left:6.85pt'><span lang=EN-US
  style='font-size:9.0pt;mso-bidi-font-size:11.0pt;line-height:115%;font-family:
  Montserrat;mso-fareast-font-family:Arial;mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi;mso-bidi-font-weight:bold'>POMs* </span><span
  lang=EN-US style='font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi;mso-bidi-font-weight:bold'><span
  style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  </td>
  <td width=76 valign=top style='width:57.25pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm .85pt 0cm .1pt;height:23.95pt'>
  <p class=MsoNormal align=right style='margin-right:1.3pt;text-align:right'><span
  lang=EN-US style='font-size:9.0pt;mso-bidi-font-size:11.0pt;line-height:115%;
  font-family:Montserrat;mso-fareast-font-family:Arial;mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi;mso-bidi-font-weight:bold'>continue<span
  style='mso-spacerun:yes'>� </span></span><span lang=EN-US style='font-family:
  Montserrat;mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi;
  mso-bidi-font-weight:bold'><span style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  </td>
  <td width=203 valign=top style='width:152.5pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm .85pt 0cm .1pt;height:23.95pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-size:9.0pt;mso-bidi-font-size:11.0pt;line-height:115%;font-family:
  Montserrat;mso-fareast-font-family:Arial;mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi;mso-bidi-font-weight:bold'>Remarks </span><span
  lang=EN-US style='font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi;mso-bidi-font-weight:bold'><span
  style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:10;height:46.85pt'>
  <td width=162 valign=top style='width:121.45pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm .85pt 0cm .1pt;height:46.85pt'>
  <p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:1.6pt;
  margin-left:.95pt;line-height:normal'><span lang=EN-US style='font-family:
  Montserrat;mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi;
  mso-bidi-font-weight:bold'><span style='mso-spacerun:yes'>�</span><span
  style='mso-tab-count:1'>������������� </span><span
  style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi;mso-bidi-font-weight:bold'><span
  style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  </td>
  <td width=47 valign=top style='width:35.55pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm .85pt 0cm .1pt;height:46.85pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi;mso-bidi-font-weight:bold'><span
  style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  </td>
  <td width=47 valign=top style='width:35.35pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm .85pt 0cm .1pt;height:46.85pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi;mso-bidi-font-weight:bold'><span
  style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  </td>
  <td width=50 valign=top style='width:37.85pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm .85pt 0cm .1pt;height:46.85pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi;mso-bidi-font-weight:bold'><span
  style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  </td>
  <td width=101 valign=top style='width:75.75pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm .85pt 0cm .1pt;height:46.85pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi;mso-bidi-font-weight:bold'><span
  style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  </td>
  <td width=57 valign=top style='width:42.8pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm .85pt 0cm .1pt;height:46.85pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi;mso-bidi-font-weight:bold'><span
  style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  </td>
  <td width=76 valign=top style='width:57.25pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm .85pt 0cm .1pt;height:46.85pt'>
  <p class=MsoNormal style='margin-left:7.8pt'><span lang=EN-US
  style='font-size:9.0pt;mso-bidi-font-size:11.0pt;line-height:115%;font-family:
  Montserrat;mso-fareast-font-family:Arial;mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi;mso-bidi-font-weight:bold'>Y </span><span
  lang=EN-US style='font-size:9.0pt;mso-bidi-font-size:11.0pt;line-height:115%;
  font-family:Montserrat;mso-fareast-font-family:Webdings;mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi;mso-bidi-font-weight:bold'>&#61539;</span><span
  lang=EN-US style='font-size:9.0pt;mso-bidi-font-size:11.0pt;line-height:115%;
  font-family:Montserrat;mso-fareast-font-family:Arial;mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi;mso-bidi-font-weight:bold'><span
  style='mso-spacerun:yes'>�� </span>N </span><span lang=EN-US
  style='font-size:9.0pt;mso-bidi-font-size:11.0pt;line-height:115%;font-family:
  Montserrat;mso-fareast-font-family:Webdings;mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi;mso-bidi-font-weight:bold'>&#61539;</span><span
  lang=EN-US style='font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi;mso-bidi-font-weight:bold'> <o:p></o:p></span></p>
  </td>
  <td width=203 valign=top style='width:152.5pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm .85pt 0cm .1pt;height:46.85pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi;mso-bidi-font-weight:bold'><span
  style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:11;height:42.7pt'>
  <td width=209 colspan=2 valign=top style='width:157.0pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm .85pt 0cm .1pt;height:42.7pt'>
  <p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:1.3pt;
  margin-left:.95pt;line-height:normal'><span lang=EN-US style='font-family:
  Montserrat;mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi;
  mso-bidi-font-weight:bold'><span style='mso-spacerun:yes'>�</span><span
  style='mso-tab-count:1'>������������� </span></span><span lang=EN-US
  style='font-size:8.0pt;mso-bidi-font-size:11.0pt;font-family:Montserrat;
  mso-fareast-font-family:Arial;mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi;mso-bidi-font-weight:bold'>Source: Hospital
  /clinic </span><span lang=EN-US style='font-family:Montserrat;mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi;mso-bidi-font-weight:bold'><span
  style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi;mso-bidi-font-weight:bold'><span
  style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  </td>
  <td width=47 style='width:35.35pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm .85pt 0cm .1pt;height:42.7pt'>
  <p class=MsoNormal><span lang=EN-US style='font-family:Montserrat;mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi;mso-bidi-font-weight:bold'><span
  style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  </td>
  <td width=151 colspan=2 valign=top style='width:113.6pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm .85pt 0cm .1pt;height:42.7pt'>
  <p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:2.0pt;
  margin-left:5.75pt;line-height:normal'><span lang=EN-US style='font-size:
  8.0pt;mso-bidi-font-size:11.0pt;font-family:Montserrat;mso-fareast-font-family:
  Arial;mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi;
  mso-bidi-font-weight:bold'>Nurse/Pharmacist stamp &amp;Sig.: </span><span
  lang=EN-US style='font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi;mso-bidi-font-weight:bold'><span
  style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  <p class=MsoNormal style='margin-left:5.75pt'><span lang=EN-US
  style='font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi;mso-bidi-font-weight:bold'><span
  style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  </td>
  <td width=133 colspan=2 valign=top style='width:100.05pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm .85pt 0cm .1pt;height:42.7pt'>
  <p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:.1pt;
  margin-left:5.4pt;line-height:normal'><span lang=EN-US style='font-size:8.0pt;
  mso-bidi-font-size:11.0pt;font-family:Montserrat;mso-fareast-font-family:
  Arial;mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi;
  mso-bidi-font-weight:bold'>Time:<span style='mso-spacerun:yes'>������������
  </span><o:p></o:p></span></p>
  <p class=MsoNormal><span lang=EN-US style='font-size:8.0pt;mso-bidi-font-size:
  11.0pt;line-height:115%;font-family:Montserrat;mso-fareast-font-family:Arial;
  mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi;
  mso-bidi-font-weight:bold'><span style='mso-spacerun:yes'>��
  </span>Date:<span style='mso-spacerun:yes'>�������� </span>/<span
  style='mso-spacerun:yes'>�������� </span>/<span
  style='mso-spacerun:yes'>����� </span></span><span lang=EN-US
  style='font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi;mso-bidi-font-weight:bold'><span
  style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  </td>
  <td width=203 valign=top style='width:152.5pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm .85pt 0cm .1pt;height:42.7pt'>
  <p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:2.0pt;
  margin-left:5.65pt;line-height:normal'><span lang=EN-US style='font-size:
  8.0pt;mso-bidi-font-size:11.0pt;font-family:Montserrat;mso-fareast-font-family:
  Arial;mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi;
  mso-bidi-font-weight:bold'>Physician stamp &amp;Sig.:<span
  style='mso-spacerun:yes'>� </span></span><span lang=EN-US style='font-family:
  Montserrat;mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi;
  mso-bidi-font-weight:bold'><span style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  <p class=MsoNormal style='margin-left:5.65pt'><span lang=EN-US
  style='font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi;mso-bidi-font-weight:bold'><span
  style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:12;height:23.75pt'>
  <td width=162 valign=top style='width:121.45pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm .85pt 0cm .1pt;height:23.75pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-size:9.0pt;mso-bidi-font-size:11.0pt;line-height:115%;font-family:
  Montserrat;mso-fareast-font-family:Arial;mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi;mso-bidi-font-weight:bold'>5- Medication name </span><span
  lang=EN-US style='font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi;mso-bidi-font-weight:bold'><span
  style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  </td>
  <td width=47 valign=top style='width:35.55pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm .85pt 0cm .1pt;height:23.75pt'>
  <p class=MsoNormal style='margin-left:7.3pt'><span lang=EN-US
  style='font-size:9.0pt;mso-bidi-font-size:11.0pt;line-height:115%;font-family:
  Montserrat;mso-fareast-font-family:Arial;mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi;mso-bidi-font-weight:bold'>Dose </span><span
  lang=EN-US style='font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi;mso-bidi-font-weight:bold'><span
  style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  </td>
  <td width=47 valign=top style='width:35.35pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm .85pt 0cm .1pt;height:23.75pt'>
  <p class=MsoNormal style='margin-left:7.2pt'><span lang=EN-US
  style='font-size:9.0pt;mso-bidi-font-size:11.0pt;line-height:115%;font-family:
  Montserrat;mso-fareast-font-family:Arial;mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi;mso-bidi-font-weight:bold'>Freq. </span><span
  lang=EN-US style='font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi;mso-bidi-font-weight:bold'><span
  style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  </td>
  <td width=50 valign=top style='width:37.85pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm .85pt 0cm .1pt;height:23.75pt'>
  <p class=MsoNormal style='margin-left:6.7pt'><span lang=EN-US
  style='font-size:9.0pt;mso-bidi-font-size:11.0pt;line-height:115%;font-family:
  Montserrat;mso-fareast-font-family:Arial;mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi;mso-bidi-font-weight:bold'>Route </span><span
  lang=EN-US style='font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi;mso-bidi-font-weight:bold'><span
  style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  </td>
  <td width=101 valign=top style='width:75.75pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm .85pt 0cm .1pt;height:23.75pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-size:9.0pt;mso-bidi-font-size:11.0pt;line-height:115%;font-family:
  Montserrat;mso-fareast-font-family:Arial;mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi;mso-bidi-font-weight:bold'>Indication<span
  style='mso-spacerun:yes'>� </span></span><span lang=EN-US style='font-family:
  Montserrat;mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi;
  mso-bidi-font-weight:bold'><span style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  </td>
  <td width=57 valign=top style='width:42.8pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm .85pt 0cm .1pt;height:23.75pt'>
  <p class=MsoNormal style='margin-left:6.85pt'><span lang=EN-US
  style='font-size:9.0pt;mso-bidi-font-size:11.0pt;line-height:115%;font-family:
  Montserrat;mso-fareast-font-family:Arial;mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi;mso-bidi-font-weight:bold'>POMs* </span><span
  lang=EN-US style='font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi;mso-bidi-font-weight:bold'><span
  style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  </td>
  <td width=76 valign=top style='width:57.25pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm .85pt 0cm .1pt;height:23.75pt'>
  <p class=MsoNormal align=right style='margin-right:1.3pt;text-align:right'><span
  lang=EN-US style='font-size:9.0pt;mso-bidi-font-size:11.0pt;line-height:115%;
  font-family:Montserrat;mso-fareast-font-family:Arial;mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi;mso-bidi-font-weight:bold'>continue<span
  style='mso-spacerun:yes'>� </span></span><span lang=EN-US style='font-family:
  Montserrat;mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi;
  mso-bidi-font-weight:bold'><span style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  </td>
  <td width=203 valign=top style='width:152.5pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm .85pt 0cm .1pt;height:23.75pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-size:9.0pt;mso-bidi-font-size:11.0pt;line-height:115%;font-family:
  Montserrat;mso-fareast-font-family:Arial;mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi;mso-bidi-font-weight:bold'>Remarks </span><span
  lang=EN-US style='font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi;mso-bidi-font-weight:bold'><span
  style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:13;height:46.85pt'>
  <td width=162 valign=top style='width:121.45pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm .85pt 0cm .1pt;height:46.85pt'>
  <p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:1.6pt;
  margin-left:.95pt;line-height:normal'><span lang=EN-US style='font-family:
  Montserrat;mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi;
  mso-bidi-font-weight:bold'><span style='mso-spacerun:yes'>�</span><span
  style='mso-tab-count:1'>������������� </span><span
  style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi;mso-bidi-font-weight:bold'><span
  style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  </td>
  <td width=47 valign=top style='width:35.55pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm .85pt 0cm .1pt;height:46.85pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi;mso-bidi-font-weight:bold'><span
  style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  </td>
  <td width=47 valign=top style='width:35.35pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm .85pt 0cm .1pt;height:46.85pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi;mso-bidi-font-weight:bold'><span
  style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  </td>
  <td width=50 valign=top style='width:37.85pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm .85pt 0cm .1pt;height:46.85pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi;mso-bidi-font-weight:bold'><span
  style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  </td>
  <td width=101 valign=top style='width:75.75pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm .85pt 0cm .1pt;height:46.85pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi;mso-bidi-font-weight:bold'><span
  style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  </td>
  <td width=57 valign=top style='width:42.8pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm .85pt 0cm .1pt;height:46.85pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi;mso-bidi-font-weight:bold'><span
  style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  </td>
  <td width=76 valign=top style='width:57.25pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm .85pt 0cm .1pt;height:46.85pt'>
  <p class=MsoNormal style='margin-left:7.8pt'><span lang=EN-US
  style='font-size:9.0pt;mso-bidi-font-size:11.0pt;line-height:115%;font-family:
  Montserrat;mso-fareast-font-family:Arial;mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi;mso-bidi-font-weight:bold'>Y </span><span
  lang=EN-US style='font-size:9.0pt;mso-bidi-font-size:11.0pt;line-height:115%;
  font-family:Montserrat;mso-fareast-font-family:Webdings;mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi;mso-bidi-font-weight:bold'>&#61539;</span><span
  lang=EN-US style='font-size:9.0pt;mso-bidi-font-size:11.0pt;line-height:115%;
  font-family:Montserrat;mso-fareast-font-family:Arial;mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi;mso-bidi-font-weight:bold'><span
  style='mso-spacerun:yes'>�� </span>N </span><span lang=EN-US
  style='font-size:9.0pt;mso-bidi-font-size:11.0pt;line-height:115%;font-family:
  Montserrat;mso-fareast-font-family:Webdings;mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi;mso-bidi-font-weight:bold'>&#61539;</span><span
  lang=EN-US style='font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi;mso-bidi-font-weight:bold'> <o:p></o:p></span></p>
  </td>
  <td width=203 valign=top style='width:152.5pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm .85pt 0cm .1pt;height:46.85pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi;mso-bidi-font-weight:bold'><span
  style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:14;height:42.25pt'>
  <td width=209 colspan=2 valign=top style='width:157.0pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm .85pt 0cm .1pt;height:42.25pt'>
  <p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:1.4pt;
  margin-left:.95pt;line-height:normal'><span lang=EN-US style='font-family:
  Montserrat;mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi;
  mso-bidi-font-weight:bold'><span style='mso-spacerun:yes'>�</span><span
  style='mso-tab-count:1'>������������� </span></span><span lang=EN-US
  style='font-size:8.0pt;mso-bidi-font-size:11.0pt;font-family:Montserrat;
  mso-fareast-font-family:Arial;mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi;mso-bidi-font-weight:bold'>Source:
  Hospital/clinic </span><span lang=EN-US style='font-family:Montserrat;
  mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi;
  mso-bidi-font-weight:bold'><span style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi;mso-bidi-font-weight:bold'><span
  style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  </td>
  <td width=47 valign=top style='width:35.35pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm .85pt 0cm .1pt;height:42.25pt'>
  <p class=MsoNormal><span lang=EN-US style='font-family:Montserrat;mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi;mso-bidi-font-weight:bold'><span
  style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  </td>
  <td width=151 colspan=2 valign=top style='width:113.6pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm .85pt 0cm .1pt;height:42.25pt'>
  <p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:2.1pt;
  margin-left:5.75pt;line-height:normal'><span lang=EN-US style='font-size:
  8.0pt;mso-bidi-font-size:11.0pt;font-family:Montserrat;mso-fareast-font-family:
  Arial;mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi;
  mso-bidi-font-weight:bold'>Nurse/Pharmacist stamp &amp;Sig.: </span><span
  lang=EN-US style='font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi;mso-bidi-font-weight:bold'><span
  style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  <p class=MsoNormal style='margin-left:5.75pt'><span lang=EN-US
  style='font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi;mso-bidi-font-weight:bold'><span
  style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  </td>
  <td width=133 colspan=2 valign=top style='width:100.05pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm .85pt 0cm .1pt;height:42.25pt'>
  <p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:.1pt;
  margin-left:5.4pt;line-height:normal'><span lang=EN-US style='font-size:8.0pt;
  mso-bidi-font-size:11.0pt;font-family:Montserrat;mso-fareast-font-family:
  Arial;mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi;
  mso-bidi-font-weight:bold'>Time:<span style='mso-spacerun:yes'>������������
  </span><o:p></o:p></span></p>
  <p class=MsoNormal><span lang=EN-US style='font-size:8.0pt;mso-bidi-font-size:
  11.0pt;line-height:115%;font-family:Montserrat;mso-fareast-font-family:Arial;
  mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi;
  mso-bidi-font-weight:bold'><span style='mso-spacerun:yes'>��
  </span>Date:<span style='mso-spacerun:yes'>�������� </span>/<span
  style='mso-spacerun:yes'>�������� </span>/<span
  style='mso-spacerun:yes'>����� </span></span><span lang=EN-US
  style='font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi;mso-bidi-font-weight:bold'><span
  style='mso-spacerun:yes'>�</span></span><span lang=EN-US style='font-size:
  8.0pt;mso-bidi-font-size:11.0pt;line-height:115%;font-family:Montserrat;
  mso-fareast-font-family:Arial;mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi;mso-bidi-font-weight:bold'><span
  style='mso-spacerun:yes'>��</span></span><span lang=EN-US style='font-family:
  Montserrat;mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi;
  mso-bidi-font-weight:bold'><span style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  </td>
  <td width=203 valign=top style='width:152.5pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm .85pt 0cm .1pt;height:42.25pt'>
  <p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:2.1pt;
  margin-left:5.65pt;line-height:normal'><span lang=EN-US style='font-size:
  8.0pt;mso-bidi-font-size:11.0pt;font-family:Montserrat;mso-fareast-font-family:
  Arial;mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi;
  mso-bidi-font-weight:bold'>Physician stamp &amp;Sig.:<span
  style='mso-spacerun:yes'>� </span></span><span lang=EN-US style='font-family:
  Montserrat;mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi;
  mso-bidi-font-weight:bold'><span style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  <p class=MsoNormal style='margin-left:5.65pt'><span lang=EN-US
  style='font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi;mso-bidi-font-weight:bold'><span
  style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:15;height:23.95pt'>
  <td width=162 valign=top style='width:121.45pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm .85pt 0cm .1pt;height:23.95pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-size:9.0pt;mso-bidi-font-size:11.0pt;line-height:115%;font-family:
  Montserrat;mso-fareast-font-family:Arial;mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi;mso-bidi-font-weight:bold'>6- Medication name </span><span
  lang=EN-US style='font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi;mso-bidi-font-weight:bold'><span
  style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  </td>
  <td width=47 valign=top style='width:35.55pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm .85pt 0cm .1pt;height:23.95pt'>
  <p class=MsoNormal style='margin-left:7.3pt'><span lang=EN-US
  style='font-size:9.0pt;mso-bidi-font-size:11.0pt;line-height:115%;font-family:
  Montserrat;mso-fareast-font-family:Arial;mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi;mso-bidi-font-weight:bold'>Dose </span><span
  lang=EN-US style='font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi;mso-bidi-font-weight:bold'><span
  style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  </td>
  <td width=47 valign=top style='width:35.35pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm .85pt 0cm .1pt;height:23.95pt'>
  <p class=MsoNormal style='margin-left:7.2pt'><span lang=EN-US
  style='font-size:9.0pt;mso-bidi-font-size:11.0pt;line-height:115%;font-family:
  Montserrat;mso-fareast-font-family:Arial;mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi;mso-bidi-font-weight:bold'>Freq. </span><span
  lang=EN-US style='font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi;mso-bidi-font-weight:bold'><span
  style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  </td>
  <td width=50 valign=top style='width:37.85pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm .85pt 0cm .1pt;height:23.95pt'>
  <p class=MsoNormal style='margin-left:6.7pt'><span lang=EN-US
  style='font-size:9.0pt;mso-bidi-font-size:11.0pt;line-height:115%;font-family:
  Montserrat;mso-fareast-font-family:Arial;mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi;mso-bidi-font-weight:bold'>Route </span><span
  lang=EN-US style='font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi;mso-bidi-font-weight:bold'><span
  style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  </td>
  <td width=101 valign=top style='width:75.75pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm .85pt 0cm .1pt;height:23.95pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-size:9.0pt;mso-bidi-font-size:11.0pt;line-height:115%;font-family:
  Montserrat;mso-fareast-font-family:Arial;mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi;mso-bidi-font-weight:bold'>Indication<span
  style='mso-spacerun:yes'>� </span></span><span lang=EN-US style='font-family:
  Montserrat;mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi;
  mso-bidi-font-weight:bold'><span style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  </td>
  <td width=57 valign=top style='width:42.8pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm .85pt 0cm .1pt;height:23.95pt'>
  <p class=MsoNormal style='margin-left:6.85pt'><span lang=EN-US
  style='font-size:9.0pt;mso-bidi-font-size:11.0pt;line-height:115%;font-family:
  Montserrat;mso-fareast-font-family:Arial;mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi;mso-bidi-font-weight:bold'>POMs* </span><span
  lang=EN-US style='font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi;mso-bidi-font-weight:bold'><span
  style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  </td>
  <td width=76 valign=top style='width:57.25pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm .85pt 0cm .1pt;height:23.95pt'>
  <p class=MsoNormal align=right style='margin-right:1.3pt;text-align:right'><span
  lang=EN-US style='font-size:9.0pt;mso-bidi-font-size:11.0pt;line-height:115%;
  font-family:Montserrat;mso-fareast-font-family:Arial;mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi;mso-bidi-font-weight:bold'>continue<span
  style='mso-spacerun:yes'>� </span></span><span lang=EN-US style='font-family:
  Montserrat;mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi;
  mso-bidi-font-weight:bold'><span style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  </td>
  <td width=203 valign=top style='width:152.5pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm .85pt 0cm .1pt;height:23.95pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-size:9.0pt;mso-bidi-font-size:11.0pt;line-height:115%;font-family:
  Montserrat;mso-fareast-font-family:Arial;mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi;mso-bidi-font-weight:bold'>Remarks </span><span
  lang=EN-US style='font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi;mso-bidi-font-weight:bold'><span
  style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:16;height:46.85pt'>
  <td width=162 valign=top style='width:121.45pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm .85pt 0cm .1pt;height:46.85pt'>
  <p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:1.6pt;
  margin-left:.95pt;line-height:normal'><span lang=EN-US style='font-family:
  Montserrat;mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi;
  mso-bidi-font-weight:bold'><span style='mso-spacerun:yes'>�</span><span
  style='mso-tab-count:1'>������������� </span><span
  style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi;mso-bidi-font-weight:bold'><span
  style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  </td>
  <td width=47 valign=top style='width:35.55pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm .85pt 0cm .1pt;height:46.85pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi;mso-bidi-font-weight:bold'><span
  style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  </td>
  <td width=47 valign=top style='width:35.35pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm .85pt 0cm .1pt;height:46.85pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi;mso-bidi-font-weight:bold'><span
  style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  </td>
  <td width=50 valign=top style='width:37.85pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm .85pt 0cm .1pt;height:46.85pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi;mso-bidi-font-weight:bold'><span
  style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  </td>
  <td width=101 valign=top style='width:75.75pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm .85pt 0cm .1pt;height:46.85pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi;mso-bidi-font-weight:bold'><span
  style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  </td>
  <td width=57 valign=top style='width:42.8pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm .85pt 0cm .1pt;height:46.85pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi;mso-bidi-font-weight:bold'><span
  style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  </td>
  <td width=76 valign=top style='width:57.25pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm .85pt 0cm .1pt;height:46.85pt'>
  <p class=MsoNormal style='margin-left:7.8pt'><span lang=EN-US
  style='font-size:9.0pt;mso-bidi-font-size:11.0pt;line-height:115%;font-family:
  Montserrat;mso-fareast-font-family:Arial;mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi;mso-bidi-font-weight:bold'>Y </span><span
  lang=EN-US style='font-size:9.0pt;mso-bidi-font-size:11.0pt;line-height:115%;
  font-family:Montserrat;mso-fareast-font-family:Webdings;mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi;mso-bidi-font-weight:bold'>&#61539;</span><span
  lang=EN-US style='font-size:9.0pt;mso-bidi-font-size:11.0pt;line-height:115%;
  font-family:Montserrat;mso-fareast-font-family:Arial;mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi;mso-bidi-font-weight:bold'><span
  style='mso-spacerun:yes'>�� </span>N </span><span lang=EN-US
  style='font-size:9.0pt;mso-bidi-font-size:11.0pt;line-height:115%;font-family:
  Montserrat;mso-fareast-font-family:Webdings;mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi;mso-bidi-font-weight:bold'>&#61539;</span><span
  lang=EN-US style='font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi;mso-bidi-font-weight:bold'> <o:p></o:p></span></p>
  </td>
  <td width=203 valign=top style='width:152.5pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm .85pt 0cm .1pt;height:46.85pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi;mso-bidi-font-weight:bold'><span
  style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:17;mso-yfti-lastrow:yes;height:42.7pt'>
  <td width=209 colspan=2 valign=top style='width:157.0pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm .85pt 0cm .1pt;height:42.7pt'>
  <p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:1.3pt;
  margin-left:.95pt;line-height:normal'><span lang=EN-US style='font-family:
  Montserrat;mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi;
  mso-bidi-font-weight:bold'><span style='mso-spacerun:yes'>�</span><span
  style='mso-tab-count:1'>������������� </span></span><span lang=EN-US
  style='font-size:8.0pt;mso-bidi-font-size:11.0pt;font-family:Montserrat;
  mso-fareast-font-family:Arial;mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi;mso-bidi-font-weight:bold'>Source: Hospital
  /clinic </span><span lang=EN-US style='font-family:Montserrat;mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi;mso-bidi-font-weight:bold'><span
  style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi;mso-bidi-font-weight:bold'><span
  style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  </td>
  <td width=47 style='width:35.35pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm .85pt 0cm .1pt;height:42.7pt'>
  <p class=MsoNormal><span lang=EN-US style='font-family:Montserrat;mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi;mso-bidi-font-weight:bold'><span
  style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  </td>
  <td width=151 colspan=2 valign=top style='width:113.6pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm .85pt 0cm .1pt;height:42.7pt'>
  <p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:2.0pt;
  margin-left:5.75pt;line-height:normal'><span lang=EN-US style='font-size:
  8.0pt;mso-bidi-font-size:11.0pt;font-family:Montserrat;mso-fareast-font-family:
  Arial;mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi;
  mso-bidi-font-weight:bold'>Nurse/Pharmacist stamp &amp;Sig.: </span><span
  lang=EN-US style='font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi;mso-bidi-font-weight:bold'><span
  style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  <p class=MsoNormal style='margin-left:5.75pt'><span lang=EN-US
  style='font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi;mso-bidi-font-weight:bold'><span
  style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  </td>
  <td width=133 colspan=2 valign=top style='width:100.05pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm .85pt 0cm .1pt;height:42.7pt'>
  <p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:.1pt;
  margin-left:5.4pt;line-height:normal'><span lang=EN-US style='font-size:8.0pt;
  mso-bidi-font-size:11.0pt;font-family:Montserrat;mso-fareast-font-family:
  Arial;mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi;
  mso-bidi-font-weight:bold'>Time:<span style='mso-spacerun:yes'>������������
  </span><o:p></o:p></span></p>
  <p class=MsoNormal><span lang=EN-US style='font-size:8.0pt;mso-bidi-font-size:
  11.0pt;line-height:115%;font-family:Montserrat;mso-fareast-font-family:Arial;
  mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi;
  mso-bidi-font-weight:bold'><span style='mso-spacerun:yes'>��
  </span>Date:<span style='mso-spacerun:yes'>�������� </span>/<span
  style='mso-spacerun:yes'>�������� </span>/<span
  style='mso-spacerun:yes'>����� </span></span><span lang=EN-US
  style='font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi;mso-bidi-font-weight:bold'><span
  style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  </td>
  <td width=203 valign=top style='width:152.5pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm .85pt 0cm .1pt;height:42.7pt'>
  <p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:2.0pt;
  margin-left:5.65pt;line-height:normal'><span lang=EN-US style='font-size:
  8.0pt;mso-bidi-font-size:11.0pt;font-family:Montserrat;mso-fareast-font-family:
  Arial;mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi;
  mso-bidi-font-weight:bold'>Physician stamp &amp;Sig.:<span
  style='mso-spacerun:yes'>� </span></span><span lang=EN-US style='font-family:
  Montserrat;mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi;
  mso-bidi-font-weight:bold'><span style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  <p class=MsoNormal style='margin-left:5.65pt'><span lang=EN-US
  style='font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi;mso-bidi-font-weight:bold'><span
  style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>
  </td>
 </tr>
</table>

<p class=MsoNormal style='margin-bottom:107.8pt;line-height:normal'><span
lang=EN-US style='font-size:9.0pt;mso-bidi-font-size:11.0pt;font-family:Montserrat;
mso-fareast-font-family:Arial;mso-bidi-font-family:"Times New Roman";
mso-bidi-theme-font:major-bidi'>*POMs �Patients Own Medications (indicate the
quantity) <span style='mso-tab-count:1'> </span></span><span lang=EN-US
style='font-size:9.0pt;font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
mso-bidi-theme-font:major-bidi'><span
style='mso-spacerun:yes'>������������������</span><span
style='mso-spacerun:yes'>�������������������������</span><span
style='mso-spacerun:yes'>�������</span><o:p></o:p></span></p>

</div>

</body>

</html>
