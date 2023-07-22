<!DOCTYPE html>
<html lang="en">

<head>
<meta http-equiv=Content-Type content="text/html; charset=windows-1252">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<title>F025-THHC Home Safety Assessment Form| @yield('title')</title>

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
	{font-family:"Montserrat SemiBold";
	mso-font-alt:Calibri;
	mso-font-charset:0;
	mso-generic-font-family:auto;
	mso-font-pitch:variable;
	mso-font-signature:536871439 3 0 0 407 0;}
@font-face
	{font-family:Montserrat;
	mso-font-alt:Calibri;
	mso-font-charset:0;
	mso-generic-font-family:auto;
	mso-font-pitch:variable;
	mso-font-signature:536871439 3 0 0 407 0;}
 /* Style Definitions */
 p.MsoNormal, li.MsoNormal, div.MsoNormal
	{mso-style-unhide:no;
	mso-style-qformat:yes;
	mso-style-parent:"";
	margin-top:0cm;
	margin-right:0cm;
	margin-bottom:8.0pt;
	margin-left:0cm;
	line-height:107%;
	mso-pagination:widow-orphan;
	font-size:11.0pt;
	font-family:"Calibri",sans-serif;
	mso-ascii-font-family:Calibri;
	mso-ascii-theme-font:minor-latin;
	mso-fareast-font-family:Calibri;
	mso-fareast-theme-font:minor-latin;
	mso-hansi-font-family:Calibri;
	mso-hansi-theme-font:minor-latin;
	mso-bidi-font-family:Arial;
	mso-bidi-theme-font:minor-bidi;
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
	mso-ascii-font-family:Calibri;
	mso-ascii-theme-font:minor-latin;
	mso-fareast-font-family:Calibri;
	mso-fareast-theme-font:minor-latin;
	mso-hansi-font-family:Calibri;
	mso-hansi-theme-font:minor-latin;
	mso-bidi-font-family:Arial;
	mso-bidi-theme-font:minor-bidi;
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
	mso-ascii-font-family:Calibri;
	mso-ascii-theme-font:minor-latin;
	mso-fareast-font-family:Calibri;
	mso-fareast-theme-font:minor-latin;
	mso-hansi-font-family:Calibri;
	mso-hansi-theme-font:minor-latin;
	mso-bidi-font-family:Arial;
	mso-bidi-theme-font:minor-bidi;
	mso-ansi-language:EN-US;
	mso-fareast-language:EN-US;}
p.MsoNoSpacing, li.MsoNoSpacing, div.MsoNoSpacing
	{mso-style-priority:1;
	mso-style-unhide:no;
	mso-style-qformat:yes;
	mso-style-parent:"";
	margin:0cm;
	margin-bottom:.0001pt;
	mso-pagination:widow-orphan;
	font-size:11.0pt;
	font-family:"Calibri",sans-serif;
	mso-ascii-font-family:Calibri;
	mso-ascii-theme-font:minor-latin;
	mso-fareast-font-family:Calibri;
	mso-fareast-theme-font:minor-latin;
	mso-hansi-font-family:Calibri;
	mso-hansi-theme-font:minor-latin;
	mso-bidi-font-family:Arial;
	mso-bidi-theme-font:minor-bidi;
	mso-ansi-language:EN-US;
	mso-fareast-language:EN-US;}
span.Char
	{mso-style-name:"\0631\0623\0633 \0627\0644\0635\0641\062D\0629 Char";
	mso-style-priority:99;
	mso-style-unhide:no;
	mso-style-locked:yes;
	mso-style-link:"\0631\0623\0633 \0627\0644\0635\0641\062D\0629";}
span.Char0
	{mso-style-name:"\062A\0630\064A\064A\0644 \0627\0644\0635\0641\062D\0629 Char";
	mso-style-priority:99;
	mso-style-unhide:no;
	mso-style-locked:yes;
	mso-style-link:"\062A\0630\064A\064A\0644 \0627\0644\0635\0641\062D\0629";}
.MsoChpDefault
	{mso-style-type:export-only;
	mso-default-props:yes;
	font-family:"Calibri",sans-serif;
	mso-ascii-font-family:Calibri;
	mso-ascii-theme-font:minor-latin;
	mso-fareast-font-family:Calibri;
	mso-fareast-theme-font:minor-latin;
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
	{mso-footnote-separator:url("F025-THHC%20Home%20Safety%20Assessment%20Form.files/header.htm") fs;
	mso-footnote-continuation-separator:url("F025-THHC%20Home%20Safety%20Assessment%20Form.files/header.htm") fcs;
	mso-endnote-separator:url("F025-THHC%20Home%20Safety%20Assessment%20Form.files/header.htm") es;
	mso-endnote-continuation-separator:url("F025-THHC%20Home%20Safety%20Assessment%20Form.files/header.htm") ecs;}
@page WordSection1
	{size:612.0pt 792.0pt;
	margin:72.0pt 72.0pt 72.0pt 72.0pt;
	mso-header-margin:36.0pt;
	mso-footer-margin:36.0pt;
	mso-header:url("F025-THHC%20Home%20Safety%20Assessment%20Form.files/header.htm") h1;
	mso-footer:url("F025-THHC%20Home%20Safety%20Assessment%20Form.files/header.htm") f1;
	mso-paper-source:0;}
div.WordSection1
	{page:WordSection1;}
 /* List Definitions */
 @list l0
	{mso-list-id:361715212;
	mso-list-template-ids:-1531641914;}
@list l0:level1
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:38.0pt;
	text-indent:-18.0pt;
	mso-ansi-font-weight:bold;
	mso-bidi-font-weight:bold;}
@list l0:level2
	{mso-level-legal-format:yes;
	mso-level-text:"%1\.%2";
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:75.6pt;
	text-indent:-18.0pt;}
@list l0:level3
	{mso-level-legal-format:yes;
	mso-level-text:"%1\.%2\.%3";
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:131.2pt;
	text-indent:-36.0pt;}
@list l0:level4
	{mso-level-legal-format:yes;
	mso-level-text:"%1\.%2\.%3\.%4";
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:168.8pt;
	text-indent:-36.0pt;}
@list l0:level5
	{mso-level-legal-format:yes;
	mso-level-text:"%1\.%2\.%3\.%4\.%5";
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:206.4pt;
	text-indent:-36.0pt;}
@list l0:level6
	{mso-level-legal-format:yes;
	mso-level-text:"%1\.%2\.%3\.%4\.%5\.%6";
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:262.0pt;
	text-indent:-54.0pt;}
@list l0:level7
	{mso-level-legal-format:yes;
	mso-level-text:"%1\.%2\.%3\.%4\.%5\.%6\.%7";
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:299.6pt;
	text-indent:-54.0pt;}
@list l0:level8
	{mso-level-legal-format:yes;
	mso-level-text:"%1\.%2\.%3\.%4\.%5\.%6\.%7\.%8";
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:355.2pt;
	text-indent:-72.0pt;}
@list l0:level9
	{mso-level-legal-format:yes;
	mso-level-text:"%1\.%2\.%3\.%4\.%5\.%6\.%7\.%8\.%9";
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:392.8pt;
	text-indent:-72.0pt;}
ol
	{margin-bottom:0cm;}
ul
	{margin-bottom:0cm;}
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
table.MsoTableGrid
	{mso-style-name:"\0634\0628\0643\0629 \062C\062F\0648\0644";
	mso-tstyle-rowband-size:0;
	mso-tstyle-colband-size:0;
	mso-style-priority:39;
	mso-style-unhide:no;
	border:solid windowtext 1.0pt;
	mso-border-alt:solid windowtext .5pt;
	mso-padding-alt:0cm 5.4pt 0cm 5.4pt;
	mso-border-insideh:.5pt solid windowtext;
	mso-border-insidev:.5pt solid windowtext;
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

<table class=MsoTableGrid border=1 cellspacing=0 cellpadding=0 width=774
 style='width:580.5pt;margin-left:-54.25pt;border-collapse:collapse;border:
 none;mso-border-alt:solid windowtext .5pt;mso-yfti-tbllook:1184;mso-padding-alt:
 0cm 5.4pt 0cm 5.4pt'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes'>
  <td width=438 valign=top style='width:328.7pt;border:solid windowtext 1.0pt;
  mso-border-alt:solid windowtext .5pt;background:#3AC2BA;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-top:0cm;margin-right:-22.5pt;margin-bottom:
  0cm;margin-left:0cm;margin-bottom:.0001pt;line-height:normal'><span
  lang=EN-US style='font-family:"Montserrat SemiBold";mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi;color:white;mso-themecolor:
  background1;mso-bidi-font-weight:bold'>Environmental and Mobility Safety,
  Bathroom Safety<o:p></o:p></span></p>
  </td>
  <td width=43 valign=top style='width:32.4pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;background:#3AC2BA;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-top:0cm;margin-right:-22.5pt;margin-bottom:
  0cm;margin-left:0cm;margin-bottom:.0001pt;line-height:normal'><span
  lang=EN-US style='font-family:"Montserrat SemiBold";mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi;color:white;mso-themecolor:
  background1;mso-bidi-font-weight:bold'>YES<o:p></o:p></span></p>
  </td>
  <td width=41 valign=top style='width:31.0pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;background:#3AC2BA;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-top:0cm;margin-right:-22.5pt;margin-bottom:
  0cm;margin-left:0cm;margin-bottom:.0001pt;line-height:normal'><span
  lang=EN-US style='font-family:"Montserrat SemiBold";mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi;color:white;mso-themecolor:
  background1;mso-bidi-font-weight:bold'>NO<o:p></o:p></span></p>
  </td>
  <td width=41 valign=top style='width:30.8pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;background:#3AC2BA;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-top:0cm;margin-right:-22.5pt;margin-bottom:
  0cm;margin-left:0cm;margin-bottom:.0001pt;line-height:normal'><span
  lang=EN-US style='font-family:"Montserrat SemiBold";mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi;color:white;mso-themecolor:
  background1;mso-bidi-font-weight:bold'>NA<o:p></o:p></span></p>
  </td>
  <td width=210 valign=top style='width:157.6pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;background:#3AC2BA;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-top:0cm;margin-right:-22.5pt;margin-bottom:
  0cm;margin-left:0cm;margin-bottom:.0001pt;line-height:normal'><span
  lang=EN-US style='font-family:"Montserrat SemiBold";mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi;color:white;mso-themecolor:
  background1;mso-bidi-font-weight:bold'>Comments<o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:1'>
  <td width=438 valign=top style='width:328.7pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span lang=EN-US style='font-size:12.0pt;font-family:Montserrat;
  mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi'>Floor
  and stairway free of clutter<o:p></o:p></span></p>
  </td>
  <td width=43 valign=top style='width:32.4pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-top:0cm;margin-right:-22.5pt;margin-bottom:
  0cm;margin-left:0cm;margin-bottom:.0001pt;line-height:normal'><span
  lang=EN-US style='font-size:12.0pt;font-family:Montserrat;mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=41 valign=top style='width:31.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-top:0cm;margin-right:-22.5pt;margin-bottom:
  0cm;margin-left:0cm;margin-bottom:.0001pt;line-height:normal'><span
  lang=EN-US style='font-size:12.0pt;font-family:Montserrat;mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=41 valign=top style='width:30.8pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-top:0cm;margin-right:-22.5pt;margin-bottom:
  0cm;margin-left:0cm;margin-bottom:.0001pt;line-height:normal'><span
  lang=EN-US style='font-size:12.0pt;font-family:Montserrat;mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=210 valign=top style='width:157.6pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-top:0cm;margin-right:-22.5pt;margin-bottom:
  0cm;margin-left:0cm;margin-bottom:.0001pt;line-height:normal'><span
  lang=EN-US style='font-size:12.0pt;font-family:Montserrat;mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:2'>
  <td width=438 valign=top style='width:328.7pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span lang=EN-US style='font-size:12.0pt;font-family:Montserrat;
  mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi'>Rug
  and carpets firmly in place<o:p></o:p></span></p>
  </td>
  <td width=43 valign=top style='width:32.4pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-top:0cm;margin-right:-22.5pt;margin-bottom:
  0cm;margin-left:0cm;margin-bottom:.0001pt;line-height:normal'><span
  lang=EN-US style='font-size:12.0pt;font-family:Montserrat;mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=41 valign=top style='width:31.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-top:0cm;margin-right:-22.5pt;margin-bottom:
  0cm;margin-left:0cm;margin-bottom:.0001pt;line-height:normal'><span
  lang=EN-US style='font-size:12.0pt;font-family:Montserrat;mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=41 valign=top style='width:30.8pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-top:0cm;margin-right:-22.5pt;margin-bottom:
  0cm;margin-left:0cm;margin-bottom:.0001pt;line-height:normal'><span
  lang=EN-US style='font-size:12.0pt;font-family:Montserrat;mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=210 valign=top style='width:157.6pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-top:0cm;margin-right:-22.5pt;margin-bottom:
  0cm;margin-left:0cm;margin-bottom:.0001pt;line-height:normal'><span
  lang=EN-US style='font-size:12.0pt;font-family:Montserrat;mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:3'>
  <td width=438 valign=top style='width:328.7pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span lang=EN-US style='font-size:12.0pt;font-family:Montserrat;
  mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi'>Food
  and solid items laying around<o:p></o:p></span></p>
  </td>
  <td width=43 valign=top style='width:32.4pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-top:0cm;margin-right:-22.5pt;margin-bottom:
  0cm;margin-left:0cm;margin-bottom:.0001pt;line-height:normal'><span
  lang=EN-US style='font-size:12.0pt;font-family:Montserrat;mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=41 valign=top style='width:31.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-top:0cm;margin-right:-22.5pt;margin-bottom:
  0cm;margin-left:0cm;margin-bottom:.0001pt;line-height:normal'><span
  lang=EN-US style='font-size:12.0pt;font-family:Montserrat;mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=41 valign=top style='width:30.8pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-top:0cm;margin-right:-22.5pt;margin-bottom:
  0cm;margin-left:0cm;margin-bottom:.0001pt;line-height:normal'><span
  lang=EN-US style='font-size:12.0pt;font-family:Montserrat;mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=210 valign=top style='width:157.6pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-top:0cm;margin-right:-22.5pt;margin-bottom:
  0cm;margin-left:0cm;margin-bottom:.0001pt;line-height:normal'><span
  lang=EN-US style='font-size:12.0pt;font-family:Montserrat;mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:4'>
  <td width=438 valign=top style='width:328.7pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span lang=EN-US style='font-size:12.0pt;font-family:Montserrat;
  mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi'>Wires
  or Caples across floor where someone can trip<o:p></o:p></span></p>
  </td>
  <td width=43 valign=top style='width:32.4pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-top:0cm;margin-right:-22.5pt;margin-bottom:
  0cm;margin-left:0cm;margin-bottom:.0001pt;line-height:normal'><span
  lang=EN-US style='font-size:12.0pt;font-family:Montserrat;mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=41 valign=top style='width:31.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-top:0cm;margin-right:-22.5pt;margin-bottom:
  0cm;margin-left:0cm;margin-bottom:.0001pt;line-height:normal'><span
  lang=EN-US style='font-size:12.0pt;font-family:Montserrat;mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=41 valign=top style='width:30.8pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-top:0cm;margin-right:-22.5pt;margin-bottom:
  0cm;margin-left:0cm;margin-bottom:.0001pt;line-height:normal'><span
  lang=EN-US style='font-size:12.0pt;font-family:Montserrat;mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=210 valign=top style='width:157.6pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-top:0cm;margin-right:-22.5pt;margin-bottom:
  0cm;margin-left:0cm;margin-bottom:.0001pt;line-height:normal'><span
  lang=EN-US style='font-size:12.0pt;font-family:Montserrat;mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:5'>
  <td width=438 valign=top style='width:328.7pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span lang=EN-US style='font-size:12.0pt;font-family:Montserrat;
  mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi'>Light
  adequate for patient care and comfort<o:p></o:p></span></p>
  </td>
  <td width=43 valign=top style='width:32.4pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-top:0cm;margin-right:-22.5pt;margin-bottom:
  0cm;margin-left:0cm;margin-bottom:.0001pt;line-height:normal'><span
  lang=EN-US style='font-size:12.0pt;font-family:Montserrat;mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=41 valign=top style='width:31.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-top:0cm;margin-right:-22.5pt;margin-bottom:
  0cm;margin-left:0cm;margin-bottom:.0001pt;line-height:normal'><span
  lang=EN-US style='font-size:12.0pt;font-family:Montserrat;mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=41 valign=top style='width:30.8pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-top:0cm;margin-right:-22.5pt;margin-bottom:
  0cm;margin-left:0cm;margin-bottom:.0001pt;line-height:normal'><span
  lang=EN-US style='font-size:12.0pt;font-family:Montserrat;mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=210 valign=top style='width:157.6pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-top:0cm;margin-right:-22.5pt;margin-bottom:
  0cm;margin-left:0cm;margin-bottom:.0001pt;line-height:normal'><span
  lang=EN-US style='font-size:12.0pt;font-family:Montserrat;mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:6'>
  <td width=438 valign=top style='width:328.7pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span lang=EN-US style='font-size:12.0pt;font-family:Montserrat;
  mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi'>Easy
  access to patient<o:p></o:p></span></p>
  </td>
  <td width=43 valign=top style='width:32.4pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-top:0cm;margin-right:-22.5pt;margin-bottom:
  0cm;margin-left:0cm;margin-bottom:.0001pt;line-height:normal'><span
  lang=EN-US style='font-size:12.0pt;font-family:Montserrat;mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=41 valign=top style='width:31.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-top:0cm;margin-right:-22.5pt;margin-bottom:
  0cm;margin-left:0cm;margin-bottom:.0001pt;line-height:normal'><span
  lang=EN-US style='font-size:12.0pt;font-family:Montserrat;mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=41 valign=top style='width:30.8pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-top:0cm;margin-right:-22.5pt;margin-bottom:
  0cm;margin-left:0cm;margin-bottom:.0001pt;line-height:normal'><span
  lang=EN-US style='font-size:12.0pt;font-family:Montserrat;mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=210 valign=top style='width:157.6pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-top:0cm;margin-right:-22.5pt;margin-bottom:
  0cm;margin-left:0cm;margin-bottom:.0001pt;line-height:normal'><span
  lang=EN-US style='font-size:12.0pt;font-family:Montserrat;mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:7'>
  <td width=438 valign=top style='width:328.7pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span lang=EN-US style='font-size:12.0pt;font-family:Montserrat;
  mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi'>Hand
  rails on stairway<o:p></o:p></span></p>
  </td>
  <td width=43 valign=top style='width:32.4pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-top:0cm;margin-right:-22.5pt;margin-bottom:
  0cm;margin-left:0cm;margin-bottom:.0001pt;line-height:normal'><span
  lang=EN-US style='font-size:12.0pt;font-family:Montserrat;mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=41 valign=top style='width:31.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-top:0cm;margin-right:-22.5pt;margin-bottom:
  0cm;margin-left:0cm;margin-bottom:.0001pt;line-height:normal'><span
  lang=EN-US style='font-size:12.0pt;font-family:Montserrat;mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=41 valign=top style='width:30.8pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-top:0cm;margin-right:-22.5pt;margin-bottom:
  0cm;margin-left:0cm;margin-bottom:.0001pt;line-height:normal'><span
  lang=EN-US style='font-size:12.0pt;font-family:Montserrat;mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=210 valign=top style='width:157.6pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-top:0cm;margin-right:-22.5pt;margin-bottom:
  0cm;margin-left:0cm;margin-bottom:.0001pt;line-height:normal'><span
  lang=EN-US style='font-size:12.0pt;font-family:Montserrat;mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:8'>
  <td width=438 valign=top style='width:328.7pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span lang=EN-US style='font-size:12.0pt;font-family:Montserrat;
  mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi'>For
  ambulatory patient, clear path to bathroom<o:p></o:p></span></p>
  </td>
  <td width=43 valign=top style='width:32.4pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-top:0cm;margin-right:-22.5pt;margin-bottom:
  0cm;margin-left:0cm;margin-bottom:.0001pt;line-height:normal'><span
  lang=EN-US style='font-size:12.0pt;font-family:Montserrat;mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=41 valign=top style='width:31.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-top:0cm;margin-right:-22.5pt;margin-bottom:
  0cm;margin-left:0cm;margin-bottom:.0001pt;line-height:normal'><span
  lang=EN-US style='font-size:12.0pt;font-family:Montserrat;mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=41 valign=top style='width:30.8pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-top:0cm;margin-right:-22.5pt;margin-bottom:
  0cm;margin-left:0cm;margin-bottom:.0001pt;line-height:normal'><span
  lang=EN-US style='font-size:12.0pt;font-family:Montserrat;mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=210 valign=top style='width:157.6pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-top:0cm;margin-right:-22.5pt;margin-bottom:
  0cm;margin-left:0cm;margin-bottom:.0001pt;line-height:normal'><span
  lang=EN-US style='font-size:12.0pt;font-family:Montserrat;mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:9'>
  <td width=438 valign=top style='width:328.7pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span lang=EN-US style='font-size:12.0pt;font-family:Montserrat;
  mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi'>Grab
  rail for patient in shower/tub<o:p></o:p></span></p>
  </td>
  <td width=43 valign=top style='width:32.4pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-top:0cm;margin-right:-22.5pt;margin-bottom:
  0cm;margin-left:0cm;margin-bottom:.0001pt;line-height:normal'><span
  lang=EN-US style='font-size:12.0pt;font-family:Montserrat;mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=41 valign=top style='width:31.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-top:0cm;margin-right:-22.5pt;margin-bottom:
  0cm;margin-left:0cm;margin-bottom:.0001pt;line-height:normal'><span
  lang=EN-US style='font-size:12.0pt;font-family:Montserrat;mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=41 valign=top style='width:30.8pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-top:0cm;margin-right:-22.5pt;margin-bottom:
  0cm;margin-left:0cm;margin-bottom:.0001pt;line-height:normal'><span
  lang=EN-US style='font-size:12.0pt;font-family:Montserrat;mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=210 valign=top style='width:157.6pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-top:0cm;margin-right:-22.5pt;margin-bottom:
  0cm;margin-left:0cm;margin-bottom:.0001pt;line-height:normal'><span
  lang=EN-US style='font-size:12.0pt;font-family:Montserrat;mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:10'>
  <td width=438 valign=top style='width:328.7pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span lang=EN-US style='font-size:12.0pt;font-family:Montserrat;
  mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi'>Non
  slip surface in shower/tub<o:p></o:p></span></p>
  </td>
  <td width=43 valign=top style='width:32.4pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-top:0cm;margin-right:-22.5pt;margin-bottom:
  0cm;margin-left:0cm;margin-bottom:.0001pt;line-height:normal'><span
  lang=EN-US style='font-size:12.0pt;font-family:Montserrat;mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=41 valign=top style='width:31.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-top:0cm;margin-right:-22.5pt;margin-bottom:
  0cm;margin-left:0cm;margin-bottom:.0001pt;line-height:normal'><span
  lang=EN-US style='font-size:12.0pt;font-family:Montserrat;mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=41 valign=top style='width:30.8pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-top:0cm;margin-right:-22.5pt;margin-bottom:
  0cm;margin-left:0cm;margin-bottom:.0001pt;line-height:normal'><span
  lang=EN-US style='font-size:12.0pt;font-family:Montserrat;mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=210 valign=top style='width:157.6pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-top:0cm;margin-right:-22.5pt;margin-bottom:
  0cm;margin-left:0cm;margin-bottom:.0001pt;line-height:normal'><span
  lang=EN-US style='font-size:12.0pt;font-family:Montserrat;mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:11'>
  <td width=438 valign=top style='width:328.7pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span lang=EN-US style='font-size:12.0pt;font-family:Montserrat;
  mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi'>For
  bedbound patient on high bed with side rails<o:p></o:p></span></p>
  </td>
  <td width=43 valign=top style='width:32.4pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-top:0cm;margin-right:-22.5pt;margin-bottom:
  0cm;margin-left:0cm;margin-bottom:.0001pt;line-height:normal'><span
  lang=EN-US style='font-size:12.0pt;font-family:Montserrat;mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=41 valign=top style='width:31.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-top:0cm;margin-right:-22.5pt;margin-bottom:
  0cm;margin-left:0cm;margin-bottom:.0001pt;line-height:normal'><span
  lang=EN-US style='font-size:12.0pt;font-family:Montserrat;mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=41 valign=top style='width:30.8pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-top:0cm;margin-right:-22.5pt;margin-bottom:
  0cm;margin-left:0cm;margin-bottom:.0001pt;line-height:normal'><span
  lang=EN-US style='font-size:12.0pt;font-family:Montserrat;mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=210 valign=top style='width:157.6pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-top:0cm;margin-right:-22.5pt;margin-bottom:
  0cm;margin-left:0cm;margin-bottom:.0001pt;line-height:normal'><span
  lang=EN-US style='font-size:12.0pt;font-family:Montserrat;mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:12'>
  <td width=438 valign=top style='width:328.7pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span lang=EN-US style='font-size:12.0pt;font-family:Montserrat;
  mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi'>Restraints
  used? Explain reasons<o:p></o:p></span></p>
  </td>
  <td width=43 valign=top style='width:32.4pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-top:0cm;margin-right:-22.5pt;margin-bottom:
  0cm;margin-left:0cm;margin-bottom:.0001pt;line-height:normal'><span
  lang=EN-US style='font-size:12.0pt;font-family:Montserrat;mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=41 valign=top style='width:31.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-top:0cm;margin-right:-22.5pt;margin-bottom:
  0cm;margin-left:0cm;margin-bottom:.0001pt;line-height:normal'><span
  lang=EN-US style='font-size:12.0pt;font-family:Montserrat;mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=41 valign=top style='width:30.8pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-top:0cm;margin-right:-22.5pt;margin-bottom:
  0cm;margin-left:0cm;margin-bottom:.0001pt;line-height:normal'><span
  lang=EN-US style='font-size:12.0pt;font-family:Montserrat;mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=210 valign=top style='width:157.6pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-top:0cm;margin-right:-22.5pt;margin-bottom:
  0cm;margin-left:0cm;margin-bottom:.0001pt;line-height:normal'><span
  lang=EN-US style='font-size:12.0pt;font-family:Montserrat;mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:13'>
  <td width=438 valign=top style='width:328.7pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span lang=EN-US style='font-size:12.0pt;font-family:Montserrat;
  mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi'>Patient/Patient
  family using correct way to transfer and change position of patient.<o:p></o:p></span></p>
  </td>
  <td width=43 valign=top style='width:32.4pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-top:0cm;margin-right:-22.5pt;margin-bottom:
  0cm;margin-left:0cm;margin-bottom:.0001pt;line-height:normal'><span
  lang=EN-US style='font-size:12.0pt;font-family:Montserrat;mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=41 valign=top style='width:31.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-top:0cm;margin-right:-22.5pt;margin-bottom:
  0cm;margin-left:0cm;margin-bottom:.0001pt;line-height:normal'><span
  lang=EN-US style='font-size:12.0pt;font-family:Montserrat;mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=41 valign=top style='width:30.8pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-top:0cm;margin-right:-22.5pt;margin-bottom:
  0cm;margin-left:0cm;margin-bottom:.0001pt;line-height:normal'><span
  lang=EN-US style='font-size:12.0pt;font-family:Montserrat;mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=210 valign=top style='width:157.6pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-top:0cm;margin-right:-22.5pt;margin-bottom:
  0cm;margin-left:0cm;margin-bottom:.0001pt;line-height:normal'><span
  lang=EN-US style='font-size:12.0pt;font-family:Montserrat;mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:14'>
  <td width=438 valign=top style='width:328.7pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span lang=EN-US style='font-size:12.0pt;font-family:Montserrat;
  mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi'>For
  ambulatory patient wearing safe footwear<o:p></o:p></span></p>
  </td>
  <td width=43 valign=top style='width:32.4pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-top:0cm;margin-right:-22.5pt;margin-bottom:
  0cm;margin-left:0cm;margin-bottom:.0001pt;line-height:normal'><span
  lang=EN-US style='font-size:12.0pt;font-family:Montserrat;mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=41 valign=top style='width:31.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-top:0cm;margin-right:-22.5pt;margin-bottom:
  0cm;margin-left:0cm;margin-bottom:.0001pt;line-height:normal'><span
  lang=EN-US style='font-size:12.0pt;font-family:Montserrat;mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=41 valign=top style='width:30.8pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-top:0cm;margin-right:-22.5pt;margin-bottom:
  0cm;margin-left:0cm;margin-bottom:.0001pt;line-height:normal'><span
  lang=EN-US style='font-size:12.0pt;font-family:Montserrat;mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=210 valign=top style='width:157.6pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-top:0cm;margin-right:-22.5pt;margin-bottom:
  0cm;margin-left:0cm;margin-bottom:.0001pt;line-height:normal'><span
  lang=EN-US style='font-size:12.0pt;font-family:Montserrat;mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:15'>
  <td width=438 valign=top style='width:328.7pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span lang=EN-US style='font-size:12.0pt;font-family:Montserrat;
  mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi'>Patient
  who is dependent has alarm bell to call for assistance<o:p></o:p></span></p>
  </td>
  <td width=43 valign=top style='width:32.4pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-top:0cm;margin-right:-22.5pt;margin-bottom:
  0cm;margin-left:0cm;margin-bottom:.0001pt;line-height:normal'><span
  lang=EN-US style='font-size:12.0pt;font-family:Montserrat;mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=41 valign=top style='width:31.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-top:0cm;margin-right:-22.5pt;margin-bottom:
  0cm;margin-left:0cm;margin-bottom:.0001pt;line-height:normal'><span
  lang=EN-US style='font-size:12.0pt;font-family:Montserrat;mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=41 valign=top style='width:30.8pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-top:0cm;margin-right:-22.5pt;margin-bottom:
  0cm;margin-left:0cm;margin-bottom:.0001pt;line-height:normal'><span
  lang=EN-US style='font-size:12.0pt;font-family:Montserrat;mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=210 valign=top style='width:157.6pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-top:0cm;margin-right:-22.5pt;margin-bottom:
  0cm;margin-left:0cm;margin-bottom:.0001pt;line-height:normal'><span
  lang=EN-US style='font-size:12.0pt;font-family:Montserrat;mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:16'>
  <td width=438 valign=top style='width:328.7pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  background:#3AC2BA;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span lang=EN-US style='font-family:"Montserrat SemiBold";mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi;color:white;mso-themecolor:
  background1'>Medical equipment�s and supplies, Electrical Safety<o:p></o:p></span></p>
  </td>
  <td width=43 valign=top style='width:32.4pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;background:#3AC2BA;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-top:0cm;margin-right:-22.5pt;margin-bottom:
  0cm;margin-left:0cm;margin-bottom:.0001pt;line-height:normal'><span
  lang=EN-US style='font-family:"Montserrat SemiBold";mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi;color:white;mso-themecolor:
  background1;mso-bidi-font-weight:bold'>YES</span><span lang=EN-US
  style='font-family:"Montserrat SemiBold";mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi;color:white;mso-themecolor:background1'><o:p></o:p></span></p>
  </td>
  <td width=41 valign=top style='width:31.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;background:#3AC2BA;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-top:0cm;margin-right:-22.5pt;margin-bottom:
  0cm;margin-left:0cm;margin-bottom:.0001pt;line-height:normal'><span
  lang=EN-US style='font-family:"Montserrat SemiBold";mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi;color:white;mso-themecolor:
  background1;mso-bidi-font-weight:bold'>NO</span><span lang=EN-US
  style='font-family:"Montserrat SemiBold";mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi;color:white;mso-themecolor:background1'><o:p></o:p></span></p>
  </td>
  <td width=41 valign=top style='width:30.8pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;background:#3AC2BA;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-top:0cm;margin-right:-22.5pt;margin-bottom:
  0cm;margin-left:0cm;margin-bottom:.0001pt;line-height:normal'><span
  lang=EN-US style='font-family:"Montserrat SemiBold";mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi;color:white;mso-themecolor:
  background1;mso-bidi-font-weight:bold'>NA</span><span lang=EN-US
  style='font-family:"Montserrat SemiBold";mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi;color:white;mso-themecolor:background1'><o:p></o:p></span></p>
  </td>
  <td width=210 valign=top style='width:157.6pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;background:#3AC2BA;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-top:0cm;margin-right:-22.5pt;margin-bottom:
  0cm;margin-left:0cm;margin-bottom:.0001pt;line-height:normal'><span
  lang=EN-US style='font-family:"Montserrat SemiBold";mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi;color:white;mso-themecolor:
  background1;mso-bidi-font-weight:bold'>Comments</span><span lang=EN-US
  style='font-family:"Montserrat SemiBold";mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi;color:white;mso-themecolor:background1'><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:17'>
  <td width=438 valign=top style='width:328.7pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span lang=EN-US style='font-size:12.0pt;font-family:Montserrat;
  mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi'>Safe
  plug for medical equipment<o:p></o:p></span></p>
  </td>
  <td width=43 valign=top style='width:32.4pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-top:0cm;margin-right:-22.5pt;margin-bottom:
  0cm;margin-left:0cm;margin-bottom:.0001pt;line-height:normal'><span
  lang=EN-US style='font-size:12.0pt;font-family:Montserrat;mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=41 valign=top style='width:31.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-top:0cm;margin-right:-22.5pt;margin-bottom:
  0cm;margin-left:0cm;margin-bottom:.0001pt;line-height:normal'><span
  lang=EN-US style='font-size:12.0pt;font-family:Montserrat;mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=41 valign=top style='width:30.8pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-top:0cm;margin-right:-22.5pt;margin-bottom:
  0cm;margin-left:0cm;margin-bottom:.0001pt;line-height:normal'><span
  lang=EN-US style='font-size:12.0pt;font-family:Montserrat;mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=210 valign=top style='width:157.6pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-top:0cm;margin-right:-22.5pt;margin-bottom:
  0cm;margin-left:0cm;margin-bottom:.0001pt;line-height:normal'><span
  lang=EN-US style='font-size:12.0pt;font-family:Montserrat;mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:18'>
  <td width=438 valign=top style='width:328.7pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span lang=EN-US style='font-size:12.0pt;font-family:Montserrat;
  mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi'>Family
  trained in use and safety of equipment�s<o:p></o:p></span></p>
  </td>
  <td width=43 valign=top style='width:32.4pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-top:0cm;margin-right:-22.5pt;margin-bottom:
  0cm;margin-left:0cm;margin-bottom:.0001pt;line-height:normal'><span
  lang=EN-US style='font-size:12.0pt;font-family:Montserrat;mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=41 valign=top style='width:31.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-top:0cm;margin-right:-22.5pt;margin-bottom:
  0cm;margin-left:0cm;margin-bottom:.0001pt;line-height:normal'><span
  lang=EN-US style='font-size:12.0pt;font-family:Montserrat;mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=41 valign=top style='width:30.8pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-top:0cm;margin-right:-22.5pt;margin-bottom:
  0cm;margin-left:0cm;margin-bottom:.0001pt;line-height:normal'><span
  lang=EN-US style='font-size:12.0pt;font-family:Montserrat;mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=210 valign=top style='width:157.6pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-top:0cm;margin-right:-22.5pt;margin-bottom:
  0cm;margin-left:0cm;margin-bottom:.0001pt;line-height:normal'><span
  lang=EN-US style='font-size:12.0pt;font-family:Montserrat;mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:19'>
  <td width=438 valign=top style='width:328.7pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span lang=EN-US style='font-size:12.0pt;font-family:Montserrat;
  mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi'>Maintenance
  checks done on equipment�s<o:p></o:p></span></p>
  </td>
  <td width=43 valign=top style='width:32.4pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-top:0cm;margin-right:-22.5pt;margin-bottom:
  0cm;margin-left:0cm;margin-bottom:.0001pt;line-height:normal'><span
  lang=EN-US style='font-size:12.0pt;font-family:Montserrat;mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=41 valign=top style='width:31.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-top:0cm;margin-right:-22.5pt;margin-bottom:
  0cm;margin-left:0cm;margin-bottom:.0001pt;line-height:normal'><span
  lang=EN-US style='font-size:12.0pt;font-family:Montserrat;mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=41 valign=top style='width:30.8pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-top:0cm;margin-right:-22.5pt;margin-bottom:
  0cm;margin-left:0cm;margin-bottom:.0001pt;line-height:normal'><span
  lang=EN-US style='font-size:12.0pt;font-family:Montserrat;mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=210 valign=top style='width:157.6pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-top:0cm;margin-right:-22.5pt;margin-bottom:
  0cm;margin-left:0cm;margin-bottom:.0001pt;line-height:normal'><span
  lang=EN-US style='font-size:12.0pt;font-family:Montserrat;mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:20'>
  <td width=438 valign=top style='width:328.7pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span lang=EN-US style='font-size:12.0pt;font-family:Montserrat;
  mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi'>If
  there is O2 in place, is there a no smoking sign visible?<o:p></o:p></span></p>
  </td>
  <td width=43 valign=top style='width:32.4pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-top:0cm;margin-right:-22.5pt;margin-bottom:
  0cm;margin-left:0cm;margin-bottom:.0001pt;line-height:normal'><span
  lang=EN-US style='font-size:12.0pt;font-family:Montserrat;mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=41 valign=top style='width:31.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-top:0cm;margin-right:-22.5pt;margin-bottom:
  0cm;margin-left:0cm;margin-bottom:.0001pt;line-height:normal'><span
  lang=EN-US style='font-size:12.0pt;font-family:Montserrat;mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=41 valign=top style='width:30.8pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-top:0cm;margin-right:-22.5pt;margin-bottom:
  0cm;margin-left:0cm;margin-bottom:.0001pt;line-height:normal'><span
  lang=EN-US style='font-size:12.0pt;font-family:Montserrat;mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=210 valign=top style='width:157.6pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-top:0cm;margin-right:-22.5pt;margin-bottom:
  0cm;margin-left:0cm;margin-bottom:.0001pt;line-height:normal'><span
  lang=EN-US style='font-size:12.0pt;font-family:Montserrat;mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:21'>
  <td width=438 valign=top style='width:328.7pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span lang=EN-US style='font-size:12.0pt;font-family:Montserrat;
  mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi'>All equipment�s
  (bed, wheelchair, etc.) in safe working condition<o:p></o:p></span></p>
  </td>
  <td width=43 valign=top style='width:32.4pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-top:0cm;margin-right:-22.5pt;margin-bottom:
  0cm;margin-left:0cm;margin-bottom:.0001pt;line-height:normal'><span
  lang=EN-US style='font-size:12.0pt;font-family:Montserrat;mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=41 valign=top style='width:31.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-top:0cm;margin-right:-22.5pt;margin-bottom:
  0cm;margin-left:0cm;margin-bottom:.0001pt;line-height:normal'><span
  lang=EN-US style='font-size:12.0pt;font-family:Montserrat;mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=41 valign=top style='width:30.8pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-top:0cm;margin-right:-22.5pt;margin-bottom:
  0cm;margin-left:0cm;margin-bottom:.0001pt;line-height:normal'><span
  lang=EN-US style='font-size:12.0pt;font-family:Montserrat;mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=210 valign=top style='width:157.6pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-top:0cm;margin-right:-22.5pt;margin-bottom:
  0cm;margin-left:0cm;margin-bottom:.0001pt;line-height:normal'><span
  lang=EN-US style='font-size:12.0pt;font-family:Montserrat;mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:22'>
  <td width=438 valign=top style='width:328.7pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span lang=EN-US style='font-size:12.0pt;font-family:Montserrat;
  mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi'>Medication
  in date and stored safety away from children<o:p></o:p></span></p>
  </td>
  <td width=43 valign=top style='width:32.4pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-top:0cm;margin-right:-22.5pt;margin-bottom:
  0cm;margin-left:0cm;margin-bottom:.0001pt;line-height:normal'><span
  lang=EN-US style='font-size:12.0pt;font-family:Montserrat;mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=41 valign=top style='width:31.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-top:0cm;margin-right:-22.5pt;margin-bottom:
  0cm;margin-left:0cm;margin-bottom:.0001pt;line-height:normal'><span
  lang=EN-US style='font-size:12.0pt;font-family:Montserrat;mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=41 valign=top style='width:30.8pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-top:0cm;margin-right:-22.5pt;margin-bottom:
  0cm;margin-left:0cm;margin-bottom:.0001pt;line-height:normal'><span
  lang=EN-US style='font-size:12.0pt;font-family:Montserrat;mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=210 valign=top style='width:157.6pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-top:0cm;margin-right:-22.5pt;margin-bottom:
  0cm;margin-left:0cm;margin-bottom:.0001pt;line-height:normal'><span
  lang=EN-US style='font-size:12.0pt;font-family:Montserrat;mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:23;mso-yfti-lastrow:yes'>
  <td width=438 valign=top style='width:328.7pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span lang=EN-US style='font-size:12.0pt;font-family:Montserrat;
  mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi'>Medication
  storage with accepted temperature<o:p></o:p></span></p>
  </td>
  <td width=43 valign=top style='width:32.4pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-top:0cm;margin-right:-22.5pt;margin-bottom:
  0cm;margin-left:0cm;margin-bottom:.0001pt;line-height:normal'><span
  lang=EN-US style='font-size:12.0pt;font-family:Montserrat;mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=41 valign=top style='width:31.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-top:0cm;margin-right:-22.5pt;margin-bottom:
  0cm;margin-left:0cm;margin-bottom:.0001pt;line-height:normal'><span
  lang=EN-US style='font-size:12.0pt;font-family:Montserrat;mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=41 valign=top style='width:30.8pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-top:0cm;margin-right:-22.5pt;margin-bottom:
  0cm;margin-left:0cm;margin-bottom:.0001pt;line-height:normal'><span
  lang=EN-US style='font-size:12.0pt;font-family:Montserrat;mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=210 valign=top style='width:157.6pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-top:0cm;margin-right:-22.5pt;margin-bottom:
  0cm;margin-left:0cm;margin-bottom:.0001pt;line-height:normal'><span
  lang=EN-US style='font-size:12.0pt;font-family:Montserrat;mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
</table>

<p class=MsoNormal style='margin-right:-22.5pt'><span lang=EN-US
style='font-size:12.0pt;line-height:107%;font-family:Montserrat;mso-bidi-font-family:
"Times New Roman";mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal style='margin-right:-22.5pt'><span lang=EN-US
style='font-size:12.0pt;line-height:107%;font-family:Montserrat;mso-bidi-font-family:
"Times New Roman";mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal style='margin-right:-22.5pt'><span lang=EN-US
style='font-size:12.0pt;line-height:107%;font-family:Montserrat;mso-bidi-font-family:
"Times New Roman";mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal style='margin-right:-22.5pt;tab-stops:0cm'><span lang=EN-US
style='font-size:12.0pt;line-height:107%;font-family:"Montserrat SemiBold";
mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi'>PROBLEMS
IDENTIFIED:<o:p></o:p></span></p>

<p class=MsoNormal style='margin-right:-22.5pt;text-align:justify'><span
lang=EN-US style='font-size:12.0pt;line-height:107%;font-family:Montserrat;
mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi'>_____________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________<o:p></o:p></span></p>

<p class=MsoNormal style='margin-right:-22.5pt'><span lang=EN-US
style='font-size:12.0pt;line-height:107%;font-family:Montserrat;mso-bidi-font-family:
"Times New Roman";mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal style='margin-right:-22.5pt'><b><span lang=EN-US
style='font-size:12.0pt;line-height:107%;font-family:Montserrat;mso-bidi-font-family:
"Times New Roman";mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></b></p>

<p class=MsoNormal style='margin-right:-22.5pt'><b><span lang=EN-US
style='font-size:12.0pt;line-height:107%;font-family:Montserrat;mso-bidi-font-family:
"Times New Roman";mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></b></p>

<p class=MsoNormal style='margin-right:-22.5pt'><b><span lang=EN-US
style='font-size:12.0pt;line-height:107%;font-family:Montserrat;mso-bidi-font-family:
"Times New Roman";mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></b></p>

<p class=MsoNormal style='margin-right:-22.5pt;tab-stops:0cm'><span lang=EN-US
style='font-size:12.0pt;line-height:107%;font-family:"Montserrat SemiBold";
mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi'>MEASURE
TAKEN:<o:p></o:p></span></p>

<p class=MsoNormal style='margin-right:-22.5pt'><span lang=EN-US
style='font-size:12.0pt;line-height:107%;font-family:Montserrat;mso-bidi-font-family:
"Times New Roman";mso-bidi-theme-font:major-bidi'>_____________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________<o:p></o:p></span></p>

<p class=MsoNormal style='margin-right:-22.5pt'><b><span lang=EN-US
style='font-size:12.0pt;line-height:107%;font-family:Montserrat;mso-bidi-font-family:
"Times New Roman";mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></b></p>

<p class=MsoNormal style='margin-right:-22.5pt;tab-stops:0cm'><span lang=EN-US
style='font-size:12.0pt;line-height:107%;font-family:"Montserrat SemiBold";
mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi'>FOLLOW-UP
NEEDED:<o:p></o:p></span></p>

<p class=MsoNormal style='margin-right:-22.5pt'><span lang=EN-US
style='font-size:12.0pt;line-height:107%;font-family:Montserrat;mso-bidi-font-family:
"Times New Roman";mso-bidi-theme-font:major-bidi'>_____________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________<o:p></o:p></span></p>

<p class=MsoNormal style='margin-right:-22.5pt'><b><span lang=EN-US
style='font-size:12.0pt;line-height:107%;font-family:Montserrat;mso-bidi-font-family:
"Times New Roman";mso-bidi-theme-font:major-bidi'><span
style='mso-spacerun:yes'>� </span><o:p></o:p></span></b></p>

<p class=MsoNormal style='margin-right:-22.5pt'><b><span lang=EN-US
style='font-size:12.0pt;line-height:107%;font-family:Montserrat;mso-bidi-font-family:
"Times New Roman";mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></b></p>

<p class=MsoNormal style='margin-right:-22.5pt'><span lang=EN-US
style='font-size:10.0pt;line-height:107%;font-family:Montserrat;mso-bidi-font-family:
"Times New Roman";mso-bidi-theme-font:major-bidi'>THHC STAFF NAME:
___________________________________________ DATE: ________________________<o:p></o:p></span></p>

<p class=MsoNormal style='margin-right:-22.5pt'><span lang=EN-US
style='font-size:10.0pt;line-height:107%;font-family:Montserrat;mso-bidi-font-family:
"Times New Roman";mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal style='margin-right:-22.5pt'><span lang=EN-US
style='font-size:10.0pt;line-height:107%;font-family:Montserrat;mso-bidi-font-family:
"Times New Roman";mso-bidi-theme-font:major-bidi'>SIGNATURE</span><span
lang=EN-US style='font-size:12.0pt;line-height:107%;font-family:Montserrat;
mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi'>:
______________<o:p></o:p></span></p>

<p class=MsoNormal style='margin-right:-22.5pt'><span lang=EN-US
style='font-size:12.0pt;line-height:107%;font-family:Montserrat;mso-bidi-font-family:
"Times New Roman";mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal style='margin-right:-22.5pt'><span lang=EN-US
style='font-size:12.0pt;line-height:107%;font-family:Montserrat;mso-bidi-font-family:
"Times New Roman";mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal style='margin-right:-22.5pt'><span lang=EN-US
style='font-size:12.0pt;line-height:107%;font-family:Montserrat;mso-bidi-font-family:
"Times New Roman";mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal style='margin-right:-22.5pt'><span lang=EN-US
style='font-size:12.0pt;line-height:107%;font-family:Montserrat;mso-bidi-font-family:
"Times New Roman";mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal style='margin-right:-22.5pt'><span lang=EN-US
style='font-size:12.0pt;line-height:107%;font-family:Montserrat;mso-bidi-font-family:
"Times New Roman";mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal style='margin-right:-22.5pt'><span lang=EN-US
style='font-size:12.0pt;line-height:107%;font-family:Montserrat;mso-bidi-font-family:
"Times New Roman";mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal style='margin-right:-22.5pt'><span lang=EN-US
style='font-size:12.0pt;line-height:107%;font-family:Montserrat;mso-bidi-font-family:
"Times New Roman";mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal style='margin-right:-22.5pt;tab-stops:281.35pt'><span
lang=EN-US style='font-size:12.0pt;line-height:107%;font-family:Montserrat;
mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi'><span
style='mso-tab-count:1'>��������������������������������������������������������������������������������������������� </span><o:p></o:p></span></p>

</div>

</body>

</html>
