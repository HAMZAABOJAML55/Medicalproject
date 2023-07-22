<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv=Content-Type content="text/html; charset=windows-1252">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<title>F051-THHC SAFE MOVING AND HANDLING RISK ASSESSMENT FORM (PT)| @yield('title')</title>

<style>
<!--
 /* Font Definitions */
 @font-face
	{font-family:"Cambria Math";
	panose-1:2 4 5 3 5 4 6 3 2 4;
	mso-font-charset:0;
	mso-generic-font-family:roman;
	mso-font-pitch:variable;
	mso-font-signature:-536869121 1107305727 33554432 0 415 0;}
@font-face
	{font-family:"Segoe UI";
	panose-1:2 11 5 2 4 2 4 2 2 3;
	mso-font-charset:0;
	mso-generic-font-family:swiss;
	mso-font-pitch:variable;
	mso-font-signature:-469750017 -1073683329 9 0 511 0;}
@font-face
	{font-family:"Montserrat SemiBold";
	mso-font-alt:Calibri;
	mso-font-charset:0;
	mso-generic-font-family:auto;
	mso-font-pitch:variable;
	mso-font-signature:536871439 3 0 0 407 0;}
@font-face
	{font-family:Montserrat;
	mso-font-charset:0;
	mso-generic-font-family:auto;
	mso-font-pitch:variable;
	mso-font-signature:536871439 3 0 0 407 0;}
 /* Style Definitions */
 p.MsoNormal, li.MsoNormal, div.MsoNormal
	{mso-style-unhide:no;
	mso-style-qformat:yes;
	mso-style-parent:"";
	margin:0cm;
	margin-bottom:.0001pt;
	mso-pagination:none;
	text-autospace:none;
	font-size:11.0pt;
	font-family:"Arial",sans-serif;
	mso-fareast-font-family:Arial;
	mso-ansi-language:EN-US;
	mso-fareast-language:EN-US;}
p.MsoHeader, li.MsoHeader, div.MsoHeader
	{mso-style-priority:99;
	mso-style-link:"\0631\0623\0633 \0627\0644\0635\0641\062D\0629 Char";
	margin:0cm;
	margin-bottom:.0001pt;
	mso-pagination:none;
	tab-stops:center 234.0pt right 468.0pt;
	text-autospace:none;
	font-size:11.0pt;
	font-family:"Arial",sans-serif;
	mso-fareast-font-family:Arial;
	mso-ansi-language:EN-US;
	mso-fareast-language:EN-US;}
p.MsoFooter, li.MsoFooter, div.MsoFooter
	{mso-style-priority:99;
	mso-style-link:"\062A\0630\064A\064A\0644 \0627\0644\0635\0641\062D\0629 Char";
	margin:0cm;
	margin-bottom:.0001pt;
	mso-pagination:none;
	tab-stops:center 234.0pt right 468.0pt;
	text-autospace:none;
	font-size:11.0pt;
	font-family:"Arial",sans-serif;
	mso-fareast-font-family:Arial;
	mso-ansi-language:EN-US;
	mso-fareast-language:EN-US;}
p.MsoTitle, li.MsoTitle, div.MsoTitle
	{mso-style-priority:10;
	mso-style-unhide:no;
	mso-style-qformat:yes;
	margin-top:3.85pt;
	margin-right:240.65pt;
	margin-bottom:0cm;
	margin-left:240.3pt;
	margin-bottom:.0001pt;
	text-align:center;
	mso-pagination:none;
	text-autospace:none;
	font-size:12.0pt;
	font-family:"Arial",sans-serif;
	mso-fareast-font-family:Arial;
	mso-ansi-language:EN-US;
	mso-fareast-language:EN-US;
	font-weight:bold;}
p.MsoBodyText, li.MsoBodyText, div.MsoBodyText
	{mso-style-priority:1;
	mso-style-unhide:no;
	mso-style-qformat:yes;
	margin:0cm;
	margin-bottom:.0001pt;
	mso-pagination:none;
	text-autospace:none;
	font-size:7.0pt;
	font-family:"Arial",sans-serif;
	mso-fareast-font-family:Arial;
	mso-ansi-language:EN-US;
	mso-fareast-language:EN-US;}
p.MsoAcetate, li.MsoAcetate, div.MsoAcetate
	{mso-style-noshow:yes;
	mso-style-priority:99;
	mso-style-link:"\0646\0635 \0641\064A \0628\0627\0644\0648\0646 Char";
	margin:0cm;
	margin-bottom:.0001pt;
	mso-pagination:none;
	text-autospace:none;
	font-size:9.0pt;
	font-family:"Segoe UI",sans-serif;
	mso-fareast-font-family:Arial;
	mso-ansi-language:EN-US;
	mso-fareast-language:EN-US;}
p.MsoListParagraph, li.MsoListParagraph, div.MsoListParagraph
	{mso-style-priority:1;
	mso-style-unhide:no;
	mso-style-qformat:yes;
	margin:0cm;
	margin-bottom:.0001pt;
	mso-pagination:none;
	text-autospace:none;
	font-size:11.0pt;
	font-family:"Arial",sans-serif;
	mso-fareast-font-family:Arial;
	mso-ansi-language:EN-US;
	mso-fareast-language:EN-US;}
p.TableParagraph, li.TableParagraph, div.TableParagraph
	{mso-style-name:"Table Paragraph";
	mso-style-priority:1;
	mso-style-unhide:no;
	mso-style-qformat:yes;
	margin:0cm;
	margin-bottom:.0001pt;
	mso-pagination:none;
	text-autospace:none;
	font-size:11.0pt;
	font-family:"Arial",sans-serif;
	mso-fareast-font-family:Arial;
	mso-ansi-language:EN-US;
	mso-fareast-language:EN-US;}
span.Char
	{mso-style-name:"\0646\0635 \0641\064A \0628\0627\0644\0648\0646 Char";
	mso-style-noshow:yes;
	mso-style-priority:99;
	mso-style-unhide:no;
	mso-style-locked:yes;
	mso-style-link:"\0646\0635 \0641\064A \0628\0627\0644\0648\0646";
	mso-ansi-font-size:9.0pt;
	mso-bidi-font-size:9.0pt;
	font-family:"Segoe UI",sans-serif;
	mso-ascii-font-family:"Segoe UI";
	mso-fareast-font-family:Arial;
	mso-hansi-font-family:"Segoe UI";
	mso-bidi-font-family:"Segoe UI";}
span.Char0
	{mso-style-name:"\0631\0623\0633 \0627\0644\0635\0641\062D\0629 Char";
	mso-style-priority:99;
	mso-style-unhide:no;
	mso-style-locked:yes;
	mso-style-link:"\0631\0623\0633 \0627\0644\0635\0641\062D\0629";
	font-family:"Arial",sans-serif;
	mso-ascii-font-family:Arial;
	mso-fareast-font-family:Arial;
	mso-hansi-font-family:Arial;
	mso-bidi-font-family:Arial;}
span.Char1
	{mso-style-name:"\062A\0630\064A\064A\0644 \0627\0644\0635\0641\062D\0629 Char";
	mso-style-priority:99;
	mso-style-unhide:no;
	mso-style-locked:yes;
	mso-style-link:"\062A\0630\064A\064A\0644 \0627\0644\0635\0641\062D\0629";
	font-family:"Arial",sans-serif;
	mso-ascii-font-family:Arial;
	mso-fareast-font-family:Arial;
	mso-hansi-font-family:Arial;
	mso-bidi-font-family:Arial;}
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
	mso-pagination:none;
	text-autospace:none;}
 /* Page Definitions */
 @page
	{mso-footnote-separator:url("F051-THHC%20SAFE%20MOVING%20AND%20HANDLING%20RISK%20ASSESSMENT%20FORM%20\(PT\).files/header.htm") fs;
	mso-footnote-continuation-separator:url("F051-THHC%20SAFE%20MOVING%20AND%20HANDLING%20RISK%20ASSESSMENT%20FORM%20\(PT\).files/header.htm") fcs;
	mso-endnote-separator:url("F051-THHC%20SAFE%20MOVING%20AND%20HANDLING%20RISK%20ASSESSMENT%20FORM%20\(PT\).files/header.htm") es;
	mso-endnote-continuation-separator:url("F051-THHC%20SAFE%20MOVING%20AND%20HANDLING%20RISK%20ASSESSMENT%20FORM%20\(PT\).files/header.htm") ecs;}
@page WordSection1
	{size:842.0pt 595.5pt;
	mso-page-orientation:landscape;
	margin:33.0pt 36.0pt 14.0pt 25.0pt;
	mso-header-margin:36.0pt;
	mso-footer-margin:36.0pt;
	mso-header:url("F051-THHC%20SAFE%20MOVING%20AND%20HANDLING%20RISK%20ASSESSMENT%20FORM%20\(PT\).files/header.htm") h1;
	mso-footer:url("F051-THHC%20SAFE%20MOVING%20AND%20HANDLING%20RISK%20ASSESSMENT%20FORM%20\(PT\).files/header.htm") f1;
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
	mso-para-margin:0cm;
	mso-para-margin-bottom:.0001pt;
	mso-pagination:none;
	text-autospace:none;
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

<p class=MsoNormal style='tab-stops:607.65pt'><span lang=EN-US
style='font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:"Times New Roman",serif;
mso-hansi-font-family:Arial;mso-bidi-font-family:Arial;position:relative;
top:-15.5pt;mso-text-raise:15.5pt'><span style='mso-tab-count:1'>���������������������������������������������������������������������������������������������������������������������������������������������������������������������������� </span></span><span
lang=EN-US style='font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:"Times New Roman",serif;
mso-hansi-font-family:Arial;mso-bidi-font-family:Arial'><o:p></o:p></span></p>

<p class=MsoNormal style='margin-top:.2pt'><b style='mso-bidi-font-weight:normal'><span
lang=EN-US style='font-size:7.0pt;mso-bidi-font-size:11.0pt'><o:p>&nbsp;</o:p></span></b></p>

<table class=MsoNormalTable border=1 cellspacing=0 cellpadding=0
 style='margin-left:5.7pt;border-collapse:collapse;mso-table-layout-alt:fixed;
 border:none;mso-border-alt:solid gray .25pt;mso-yfti-tbllook:480;mso-padding-alt:
 0cm 0cm 0cm 0cm;mso-border-insideh:.25pt solid gray;mso-border-insidev:.25pt solid gray'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;height:41.9pt'>
  <td width=110 valign=top style='width:82.2pt;border:solid gray 1.0pt;
  border-bottom:double gray 1.0pt;mso-border-alt:solid gray .25pt;mso-border-bottom-alt:
  double gray .75pt;background:#3AC2BA;padding:0cm 0cm 0cm 0cm;height:41.9pt'>
  <p class=TableParagraph align=center style='text-align:center'><span
  lang=EN-US style='font-size:9.0pt;mso-bidi-font-size:11.0pt;font-family:"Montserrat SemiBold";
  mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi;
  color:white;mso-themecolor:background1;mso-bidi-font-weight:bold'><o:p>&nbsp;</o:p></span></p>
  <p class=TableParagraph align=center style='margin-top:.05pt;margin-right:
  -6.85pt;margin-bottom:0cm;margin-left:3.3pt;margin-bottom:.0001pt;text-align:
  center;text-indent:-.75pt'><span lang=EN-US style='font-size:9.0pt;
  mso-bidi-font-size:11.0pt;font-family:"Montserrat SemiBold";mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi;color:white;mso-themecolor:
  background1;mso-bidi-font-weight:bold'>Date/Time Signature<o:p></o:p></span></p>
  </td>
  <td width=94 valign=top style='width:70.55pt;border-top:solid gray 1.0pt;
  border-left:none;border-bottom:double gray 1.0pt;border-right:solid gray 1.0pt;
  mso-border-left-alt:solid gray .25pt;mso-border-alt:solid gray .25pt;
  mso-border-bottom-alt:double gray .75pt;background:#3AC2BA;padding:0cm 0cm 0cm 0cm;
  height:41.9pt'>
  <p class=TableParagraph align=center style='margin-top:5.1pt;margin-right:
  5.2pt;margin-bottom:0cm;margin-left:0cm;margin-bottom:.0001pt;text-align:
  center;text-indent:.45pt'><span lang=EN-US style='font-size:9.0pt;mso-bidi-font-size:
  11.0pt;font-family:"Montserrat SemiBold";mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi;color:white;mso-themecolor:background1;
  mso-bidi-font-weight:bold'>Patient weight/ height<o:p></o:p></span></p>
  </td>
  <td width=180 valign=top style='width:135.0pt;border-top:solid gray 1.0pt;
  border-left:none;border-bottom:double gray 1.0pt;border-right:solid gray 1.0pt;
  mso-border-left-alt:solid gray .25pt;mso-border-alt:solid gray .25pt;
  mso-border-bottom-alt:double gray .75pt;background:#3AC2BA;padding:0cm 0cm 0cm 0cm;
  height:41.9pt'>
  <p class=TableParagraph align=center style='text-align:center'><span
  lang=EN-US style='font-size:9.0pt;mso-bidi-font-size:11.0pt;font-family:"Montserrat SemiBold";
  mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi;
  color:white;mso-themecolor:background1;mso-bidi-font-weight:bold'><o:p>&nbsp;</o:p></span></p>
  <p class=TableParagraph align=center style='margin-top:.05pt;margin-right:
  -3.8pt;margin-bottom:0cm;margin-left:3.8pt;margin-bottom:.0001pt;text-align:
  center'><span lang=EN-US style='font-size:9.0pt;mso-bidi-font-size:11.0pt;
  font-family:"Montserrat SemiBold";mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi;color:white;mso-themecolor:background1;
  mso-bidi-font-weight:bold'>Patient Ability (relevant to risk)<o:p></o:p></span></p>
  </td>
  <td width=198 valign=top style='width:148.75pt;border-top:solid gray 1.0pt;
  border-left:none;border-bottom:double gray 1.0pt;border-right:solid gray 1.0pt;
  mso-border-left-alt:solid gray .25pt;mso-border-alt:solid gray .25pt;
  mso-border-bottom-alt:double gray .75pt;background:#3AC2BA;padding:0cm 0cm 0cm 0cm;
  height:41.9pt'>
  <p class=TableParagraph align=center style='margin-right:9.95pt;text-align:
  center;text-indent:.15pt'><span lang=EN-US style='font-size:9.0pt;mso-bidi-font-size:
  11.0pt;font-family:"Montserrat SemiBold";mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi;color:white;mso-themecolor:background1;
  mso-bidi-font-weight:bold'>Specific Patient Details (relevant to risk:<o:p></o:p></span></p>
  <p class=TableParagraph align=center style='margin-top:.2pt;margin-right:
  5.45pt;margin-bottom:0cm;margin-left:-.7pt;margin-bottom:.0001pt;text-align:
  center;line-height:10.3pt;mso-line-height-rule:exactly'><span lang=EN-US
  style='font-size:9.0pt;mso-bidi-font-size:11.0pt;font-family:"Montserrat SemiBold";
  mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi;
  color:white;mso-themecolor:background1;mso-bidi-font-weight:bold'>polypharmacy,
  dementia, movement disorder, FIM)<o:p></o:p></span></p>
  </td>
  <td width=126 valign=top style='width:94.4pt;border-top:solid gray 1.0pt;
  border-left:none;border-bottom:double gray 1.0pt;border-right:solid gray 1.0pt;
  mso-border-left-alt:solid gray .25pt;mso-border-alt:solid gray .25pt;
  mso-border-bottom-alt:double gray .75pt;background:#3AC2BA;padding:0cm 0cm 0cm 0cm;
  height:41.9pt'>
  <p class=TableParagraph align=center style='text-align:center'><span
  lang=EN-US style='font-size:9.0pt;mso-bidi-font-size:11.0pt;font-family:"Montserrat SemiBold";
  mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi;
  color:white;mso-themecolor:background1;mso-bidi-font-weight:bold'><o:p>&nbsp;</o:p></span></p>
  <p class=TableParagraph align=center style='margin-top:.05pt;margin-right:
  6.3pt;margin-bottom:0cm;margin-left:17.05pt;margin-bottom:.0001pt;text-align:
  center;text-indent:-16.2pt'><span lang=EN-US style='font-size:9.0pt;
  mso-bidi-font-size:11.0pt;font-family:"Montserrat SemiBold";mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi;color:white;mso-themecolor:
  background1;mso-bidi-font-weight:bold'>MH Risk Reducing Equipment<o:p></o:p></span></p>
  </td>
  <td width=126 valign=top style='width:94.5pt;border-top:solid gray 1.0pt;
  border-left:none;border-bottom:double gray 1.0pt;border-right:solid gray 1.0pt;
  mso-border-left-alt:solid gray .25pt;mso-border-alt:solid gray .25pt;
  mso-border-bottom-alt:double gray .75pt;background:#3AC2BA;padding:0cm 0cm 0cm 0cm;
  height:41.9pt'>
  <p class=TableParagraph align=center style='margin-top:5.1pt;margin-right:
  7.25pt;margin-bottom:0cm;margin-left:0cm;margin-bottom:.0001pt;text-align:
  center'><span lang=EN-US style='font-size:9.0pt;mso-bidi-font-size:11.0pt;
  font-family:"Montserrat SemiBold";mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi;color:white;mso-themecolor:background1;
  mso-bidi-font-weight:bold'>MH Risk Reducing Measures<o:p></o:p></span></p>
  <p class=TableParagraph align=center style='margin-top:.05pt;margin-right:
  7.25pt;margin-bottom:0cm;margin-left:7.8pt;margin-bottom:.0001pt;text-align:
  center'><span lang=EN-US style='font-size:9.0pt;mso-bidi-font-size:11.0pt;
  font-family:"Montserrat SemiBold";mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi;color:white;mso-themecolor:background1;
  mso-bidi-font-weight:bold'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=191 valign=top style='width:143.6pt;border-top:solid gray 1.0pt;
  border-left:none;border-bottom:double gray 1.0pt;border-right:solid gray 1.0pt;
  mso-border-left-alt:solid gray .25pt;mso-border-alt:solid gray .25pt;
  mso-border-bottom-alt:double gray .75pt;background:#3AC2BA;padding:0cm 0cm 0cm 0cm;
  height:41.9pt'>
  <p class=TableParagraph align=center style='text-align:center'><span
  lang=EN-US style='font-size:9.0pt;mso-bidi-font-size:11.0pt;font-family:"Montserrat SemiBold";
  mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi;
  color:white;mso-themecolor:background1;mso-bidi-font-weight:bold'><o:p>&nbsp;</o:p></span></p>
  <p class=TableParagraph align=center style='margin-top:.05pt;margin-right:
  4.95pt;margin-bottom:0cm;margin-left:3.55pt;margin-bottom:.0001pt;text-align:
  center'><span lang=EN-US style='font-size:9.0pt;mso-bidi-font-size:11.0pt;
  font-family:"Montserrat SemiBold";mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi;color:white;mso-themecolor:background1;
  mso-bidi-font-weight:bold'>Date and reason no longer applicable/ signature<o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:1;height:72.55pt'>
  <td width=110 valign=top style='width:82.2pt;border:solid gray 1.0pt;
  border-top:none;mso-border-top-alt:double gray .75pt;mso-border-alt:solid gray .25pt;
  mso-border-top-alt:double gray .75pt;padding:0cm 0cm 0cm 0cm;height:72.55pt'>
  <p class=TableParagraph><span lang=EN-US style='font-size:8.0pt;mso-bidi-font-size:
  11.0pt;font-family:"Times New Roman",serif;mso-hansi-font-family:Arial;
  mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=94 valign=top style='width:70.55pt;border-top:none;border-left:
  none;border-bottom:solid gray 1.0pt;border-right:solid gray 1.0pt;mso-border-top-alt:
  double gray .75pt;mso-border-left-alt:solid gray .25pt;mso-border-alt:solid gray .25pt;
  mso-border-top-alt:double gray .75pt;padding:0cm 0cm 0cm 0cm;height:72.55pt'>
  <p class=TableParagraph><span lang=EN-US style='font-size:8.0pt;mso-bidi-font-size:
  11.0pt;font-family:"Times New Roman",serif;mso-hansi-font-family:Arial;
  mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=180 valign=top style='width:135.0pt;border-top:none;border-left:
  none;border-bottom:solid gray 1.0pt;border-right:solid gray 1.0pt;mso-border-top-alt:
  double gray .75pt;mso-border-left-alt:solid gray .25pt;mso-border-alt:solid gray .25pt;
  mso-border-top-alt:double gray .75pt;padding:0cm 0cm 0cm 0cm;height:72.55pt'>
  <p class=TableParagraph><span lang=EN-US style='font-size:8.0pt;mso-bidi-font-size:
  11.0pt;font-family:"Times New Roman",serif;mso-hansi-font-family:Arial;
  mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=198 valign=top style='width:148.75pt;border-top:none;border-left:
  none;border-bottom:solid gray 1.0pt;border-right:solid gray 1.0pt;mso-border-top-alt:
  double gray .75pt;mso-border-left-alt:solid gray .25pt;mso-border-alt:solid gray .25pt;
  mso-border-top-alt:double gray .75pt;padding:0cm 0cm 0cm 0cm;height:72.55pt'>
  <p class=TableParagraph><span lang=EN-US style='font-size:8.0pt;mso-bidi-font-size:
  11.0pt;font-family:"Times New Roman",serif;mso-hansi-font-family:Arial;
  mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  <p class=MsoNormal><span lang=EN-US style='font-size:8.0pt;mso-bidi-font-size:
  11.0pt;font-family:"Times New Roman",serif;mso-hansi-font-family:Arial;
  mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
  <p class=MsoNormal><span lang=EN-US style='font-size:8.0pt;mso-bidi-font-size:
  11.0pt;font-family:"Times New Roman",serif;mso-hansi-font-family:Arial;
  mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=126 valign=top style='width:94.4pt;border-top:none;border-left:
  none;border-bottom:solid gray 1.0pt;border-right:solid gray 1.0pt;mso-border-top-alt:
  double gray .75pt;mso-border-left-alt:solid gray .25pt;mso-border-alt:solid gray .25pt;
  mso-border-top-alt:double gray .75pt;padding:0cm 0cm 0cm 0cm;height:72.55pt'>
  <p class=TableParagraph><span lang=EN-US style='font-size:8.0pt;mso-bidi-font-size:
  11.0pt;font-family:"Times New Roman",serif;mso-hansi-font-family:Arial;
  mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=126 valign=top style='width:94.5pt;border-top:none;border-left:
  none;border-bottom:solid gray 1.0pt;border-right:solid gray 1.0pt;mso-border-top-alt:
  double gray .75pt;mso-border-left-alt:solid gray .25pt;mso-border-alt:solid gray .25pt;
  mso-border-top-alt:double gray .75pt;padding:0cm 0cm 0cm 0cm;height:72.55pt'>
  <p class=TableParagraph><span lang=EN-US style='font-size:8.0pt;mso-bidi-font-size:
  11.0pt;font-family:"Times New Roman",serif;mso-hansi-font-family:Arial;
  mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=191 valign=top style='width:143.6pt;border-top:none;border-left:
  none;border-bottom:solid gray 1.0pt;border-right:solid gray 1.0pt;mso-border-top-alt:
  double gray .75pt;mso-border-left-alt:solid gray .25pt;mso-border-alt:solid gray .25pt;
  mso-border-top-alt:double gray .75pt;padding:0cm 0cm 0cm 0cm;height:72.55pt'>
  <p class=TableParagraph><span lang=EN-US style='font-size:8.0pt;mso-bidi-font-size:
  11.0pt;font-family:"Times New Roman",serif;mso-hansi-font-family:Arial;
  mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:2;height:72.0pt'>
  <td width=110 valign=top style='width:82.2pt;border:solid gray 1.0pt;
  border-top:none;mso-border-top-alt:solid gray .25pt;mso-border-alt:solid gray .25pt;
  padding:0cm 0cm 0cm 0cm;height:72.0pt'>
  <p class=TableParagraph><span lang=EN-US style='font-size:8.0pt;mso-bidi-font-size:
  11.0pt;font-family:"Times New Roman",serif;mso-hansi-font-family:Arial;
  mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=94 valign=top style='width:70.55pt;border-top:none;border-left:
  none;border-bottom:solid gray 1.0pt;border-right:solid gray 1.0pt;mso-border-top-alt:
  solid gray .25pt;mso-border-left-alt:solid gray .25pt;mso-border-alt:solid gray .25pt;
  padding:0cm 0cm 0cm 0cm;height:72.0pt'>
  <p class=TableParagraph><span lang=EN-US style='font-size:8.0pt;mso-bidi-font-size:
  11.0pt;font-family:"Times New Roman",serif;mso-hansi-font-family:Arial;
  mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=180 valign=top style='width:135.0pt;border-top:none;border-left:
  none;border-bottom:solid gray 1.0pt;border-right:solid gray 1.0pt;mso-border-top-alt:
  solid gray .25pt;mso-border-left-alt:solid gray .25pt;mso-border-alt:solid gray .25pt;
  padding:0cm 0cm 0cm 0cm;height:72.0pt'>
  <p class=TableParagraph><span lang=EN-US style='font-size:8.0pt;mso-bidi-font-size:
  11.0pt;font-family:"Times New Roman",serif;mso-hansi-font-family:Arial;
  mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=198 valign=top style='width:148.75pt;border-top:none;border-left:
  none;border-bottom:solid gray 1.0pt;border-right:solid gray 1.0pt;mso-border-top-alt:
  solid gray .25pt;mso-border-left-alt:solid gray .25pt;mso-border-alt:solid gray .25pt;
  padding:0cm 0cm 0cm 0cm;height:72.0pt'>
  <p class=TableParagraph><span lang=EN-US style='font-size:8.0pt;mso-bidi-font-size:
  11.0pt;font-family:"Times New Roman",serif;mso-hansi-font-family:Arial;
  mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=126 valign=top style='width:94.4pt;border-top:none;border-left:
  none;border-bottom:solid gray 1.0pt;border-right:solid gray 1.0pt;mso-border-top-alt:
  solid gray .25pt;mso-border-left-alt:solid gray .25pt;mso-border-alt:solid gray .25pt;
  padding:0cm 0cm 0cm 0cm;height:72.0pt'>
  <p class=TableParagraph><span lang=EN-US style='font-size:8.0pt;mso-bidi-font-size:
  11.0pt;font-family:"Times New Roman",serif;mso-hansi-font-family:Arial;
  mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=126 valign=top style='width:94.5pt;border-top:none;border-left:
  none;border-bottom:solid gray 1.0pt;border-right:solid gray 1.0pt;mso-border-top-alt:
  solid gray .25pt;mso-border-left-alt:solid gray .25pt;mso-border-alt:solid gray .25pt;
  padding:0cm 0cm 0cm 0cm;height:72.0pt'>
  <p class=TableParagraph><span lang=EN-US style='font-size:8.0pt;mso-bidi-font-size:
  11.0pt;font-family:"Times New Roman",serif;mso-hansi-font-family:Arial;
  mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=191 valign=top style='width:143.6pt;border-top:none;border-left:
  none;border-bottom:solid gray 1.0pt;border-right:solid gray 1.0pt;mso-border-top-alt:
  solid gray .25pt;mso-border-left-alt:solid gray .25pt;mso-border-alt:solid gray .25pt;
  padding:0cm 0cm 0cm 0cm;height:72.0pt'>
  <p class=TableParagraph><span lang=EN-US style='font-size:8.0pt;mso-bidi-font-size:
  11.0pt;font-family:"Times New Roman",serif;mso-hansi-font-family:Arial;
  mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:3;height:71.95pt'>
  <td width=110 valign=top style='width:82.2pt;border:solid gray 1.0pt;
  border-top:none;mso-border-top-alt:solid gray .25pt;mso-border-alt:solid gray .25pt;
  padding:0cm 0cm 0cm 0cm;height:71.95pt'>
  <p class=TableParagraph><span lang=EN-US style='font-size:8.0pt;mso-bidi-font-size:
  11.0pt;font-family:"Times New Roman",serif;mso-hansi-font-family:Arial;
  mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=94 valign=top style='width:70.55pt;border-top:none;border-left:
  none;border-bottom:solid gray 1.0pt;border-right:solid gray 1.0pt;mso-border-top-alt:
  solid gray .25pt;mso-border-left-alt:solid gray .25pt;mso-border-alt:solid gray .25pt;
  padding:0cm 0cm 0cm 0cm;height:71.95pt'>
  <p class=TableParagraph><span lang=EN-US style='font-size:8.0pt;mso-bidi-font-size:
  11.0pt;font-family:"Times New Roman",serif;mso-hansi-font-family:Arial;
  mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=180 valign=top style='width:135.0pt;border-top:none;border-left:
  none;border-bottom:solid gray 1.0pt;border-right:solid gray 1.0pt;mso-border-top-alt:
  solid gray .25pt;mso-border-left-alt:solid gray .25pt;mso-border-alt:solid gray .25pt;
  padding:0cm 0cm 0cm 0cm;height:71.95pt'>
  <p class=TableParagraph><span lang=EN-US style='font-size:8.0pt;mso-bidi-font-size:
  11.0pt;font-family:"Times New Roman",serif;mso-hansi-font-family:Arial;
  mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=198 valign=top style='width:148.75pt;border-top:none;border-left:
  none;border-bottom:solid gray 1.0pt;border-right:solid gray 1.0pt;mso-border-top-alt:
  solid gray .25pt;mso-border-left-alt:solid gray .25pt;mso-border-alt:solid gray .25pt;
  padding:0cm 0cm 0cm 0cm;height:71.95pt'>
  <p class=TableParagraph><span lang=EN-US style='font-size:8.0pt;mso-bidi-font-size:
  11.0pt;font-family:"Times New Roman",serif;mso-hansi-font-family:Arial;
  mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=126 valign=top style='width:94.4pt;border-top:none;border-left:
  none;border-bottom:solid gray 1.0pt;border-right:solid gray 1.0pt;mso-border-top-alt:
  solid gray .25pt;mso-border-left-alt:solid gray .25pt;mso-border-alt:solid gray .25pt;
  padding:0cm 0cm 0cm 0cm;height:71.95pt'>
  <p class=TableParagraph><span lang=EN-US style='font-size:8.0pt;mso-bidi-font-size:
  11.0pt;font-family:"Times New Roman",serif;mso-hansi-font-family:Arial;
  mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=126 valign=top style='width:94.5pt;border-top:none;border-left:
  none;border-bottom:solid gray 1.0pt;border-right:solid gray 1.0pt;mso-border-top-alt:
  solid gray .25pt;mso-border-left-alt:solid gray .25pt;mso-border-alt:solid gray .25pt;
  padding:0cm 0cm 0cm 0cm;height:71.95pt'>
  <p class=TableParagraph><span lang=EN-US style='font-size:8.0pt;mso-bidi-font-size:
  11.0pt;font-family:"Times New Roman",serif;mso-hansi-font-family:Arial;
  mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=191 valign=top style='width:143.6pt;border-top:none;border-left:
  none;border-bottom:solid gray 1.0pt;border-right:solid gray 1.0pt;mso-border-top-alt:
  solid gray .25pt;mso-border-left-alt:solid gray .25pt;mso-border-alt:solid gray .25pt;
  padding:0cm 0cm 0cm 0cm;height:71.95pt'>
  <p class=TableParagraph><span lang=EN-US style='font-size:8.0pt;mso-bidi-font-size:
  11.0pt;font-family:"Times New Roman",serif;mso-hansi-font-family:Arial;
  mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:4;mso-yfti-lastrow:yes;height:72.0pt'>
  <td width=110 valign=top style='width:82.2pt;border:solid gray 1.0pt;
  border-top:none;mso-border-top-alt:solid gray .25pt;mso-border-alt:solid gray .25pt;
  padding:0cm 0cm 0cm 0cm;height:72.0pt'>
  <p class=TableParagraph><span lang=EN-US style='font-size:8.0pt;mso-bidi-font-size:
  11.0pt;font-family:"Times New Roman",serif;mso-hansi-font-family:Arial;
  mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=94 valign=top style='width:70.55pt;border-top:none;border-left:
  none;border-bottom:solid gray 1.0pt;border-right:solid gray 1.0pt;mso-border-top-alt:
  solid gray .25pt;mso-border-left-alt:solid gray .25pt;mso-border-alt:solid gray .25pt;
  padding:0cm 0cm 0cm 0cm;height:72.0pt'>
  <p class=TableParagraph><span lang=EN-US style='font-size:8.0pt;mso-bidi-font-size:
  11.0pt;font-family:"Times New Roman",serif;mso-hansi-font-family:Arial;
  mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=180 valign=top style='width:135.0pt;border-top:none;border-left:
  none;border-bottom:solid gray 1.0pt;border-right:solid gray 1.0pt;mso-border-top-alt:
  solid gray .25pt;mso-border-left-alt:solid gray .25pt;mso-border-alt:solid gray .25pt;
  padding:0cm 0cm 0cm 0cm;height:72.0pt'>
  <p class=TableParagraph><span lang=EN-US style='font-size:8.0pt;mso-bidi-font-size:
  11.0pt;font-family:"Times New Roman",serif;mso-hansi-font-family:Arial;
  mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=198 valign=top style='width:148.75pt;border-top:none;border-left:
  none;border-bottom:solid gray 1.0pt;border-right:solid gray 1.0pt;mso-border-top-alt:
  solid gray .25pt;mso-border-left-alt:solid gray .25pt;mso-border-alt:solid gray .25pt;
  padding:0cm 0cm 0cm 0cm;height:72.0pt'>
  <p class=TableParagraph><span lang=EN-US style='font-size:8.0pt;mso-bidi-font-size:
  11.0pt;font-family:"Times New Roman",serif;mso-hansi-font-family:Arial;
  mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=126 valign=top style='width:94.4pt;border-top:none;border-left:
  none;border-bottom:solid gray 1.0pt;border-right:solid gray 1.0pt;mso-border-top-alt:
  solid gray .25pt;mso-border-left-alt:solid gray .25pt;mso-border-alt:solid gray .25pt;
  padding:0cm 0cm 0cm 0cm;height:72.0pt'>
  <p class=TableParagraph><span lang=EN-US style='font-size:8.0pt;mso-bidi-font-size:
  11.0pt;font-family:"Times New Roman",serif;mso-hansi-font-family:Arial;
  mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=126 valign=top style='width:94.5pt;border-top:none;border-left:
  none;border-bottom:solid gray 1.0pt;border-right:solid gray 1.0pt;mso-border-top-alt:
  solid gray .25pt;mso-border-left-alt:solid gray .25pt;mso-border-alt:solid gray .25pt;
  padding:0cm 0cm 0cm 0cm;height:72.0pt'>
  <p class=TableParagraph><span lang=EN-US style='font-size:8.0pt;mso-bidi-font-size:
  11.0pt;font-family:"Times New Roman",serif;mso-hansi-font-family:Arial;
  mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=191 valign=top style='width:143.6pt;border-top:none;border-left:
  none;border-bottom:solid gray 1.0pt;border-right:solid gray 1.0pt;mso-border-top-alt:
  solid gray .25pt;mso-border-left-alt:solid gray .25pt;mso-border-alt:solid gray .25pt;
  padding:0cm 0cm 0cm 0cm;height:72.0pt'>
  <p class=TableParagraph><span lang=EN-US style='font-size:8.0pt;mso-bidi-font-size:
  11.0pt;font-family:"Times New Roman",serif;mso-hansi-font-family:Arial;
  mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
</table>

<p class=MsoNormal><b style='mso-bidi-font-weight:normal'><span lang=EN-US
style='font-size:13.0pt;mso-bidi-font-size:11.0pt'><o:p>&nbsp;</o:p></span></b></p>

<p class=MsoNormal><b style='mso-bidi-font-weight:normal'><span lang=EN-US
style='font-size:13.0pt;mso-bidi-font-size:11.0pt'><o:p>&nbsp;</o:p></span></b></p>

<p class=MsoNormal style='margin-top:.05pt'><b style='mso-bidi-font-weight:
normal'><span lang=EN-US style='font-size:15.5pt;mso-bidi-font-size:11.0pt'><o:p>&nbsp;</o:p></span></b></p>

</div>

</body>

</html>
