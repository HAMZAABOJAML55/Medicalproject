<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv=Content-Type content="text/html; charset=windows-1252">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<title>F035-THHC Functional Independence Measure (FIM)| @yield('title')</title>

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
	{font-family:Calibri;
	panose-1:2 15 5 2 2 2 4 3 2 4;
	mso-font-charset:0;
	mso-generic-font-family:swiss;
	mso-font-pitch:variable;
	mso-font-signature:-469750017 -1040178053 9 0 511 0;}
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
	margin-top:3.2pt;
	margin-right:331.1pt;
	margin-bottom:0cm;
	margin-left:317.0pt;
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
	font-size:6.0pt;
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
span.Char0
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
span.Char1
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
	{mso-footnote-separator:url("F035-THHC%20Functional%20Independence%20Measure%20\(FIM\).files/header.htm") fs;
	mso-footnote-continuation-separator:url("F035-THHC%20Functional%20Independence%20Measure%20\(FIM\).files/header.htm") fcs;
	mso-endnote-separator:url("F035-THHC%20Functional%20Independence%20Measure%20\(FIM\).files/header.htm") es;
	mso-endnote-continuation-separator:url("F035-THHC%20Functional%20Independence%20Measure%20\(FIM\).files/header.htm") ecs;}
@page WordSection1
	{size:595.3pt 841.9pt;
	margin:72.0pt 54.0pt 43.2pt 54.0pt;
	mso-header-margin:14.4pt;
	mso-footer-margin:7.2pt;
	mso-header:url("F035-THHC%20Functional%20Independence%20Measure%20\(FIM\).files/header.htm") h1;
	mso-footer:url("F035-THHC%20Functional%20Independence%20Measure%20\(FIM\).files/header.htm") f1;
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

<table class=MsoNormalTable border=1 cellspacing=0 cellpadding=0 align=left
 width=648 style='border-collapse:collapse;mso-table-layout-alt:fixed;
 border:none;mso-border-alt:solid windowtext .5pt;mso-yfti-tbllook:480;
 mso-table-lspace:9.0pt;margin-left:6.75pt;mso-table-rspace:9.0pt;margin-right:
 6.75pt;mso-table-anchor-vertical:paragraph;mso-table-anchor-horizontal:margin;
 mso-table-left:left;mso-table-top:3.1pt;mso-padding-alt:0cm 0cm 0cm 0cm;
 mso-border-insideh:.5pt solid windowtext;mso-border-insidev:.5pt solid windowtext'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;height:18.0pt'>
  <td width=259 colspan=2 rowspan=2 style='width:194.4pt;border:solid windowtext 1.0pt;
  mso-border-alt:solid windowtext .5pt;background:#3AC2BA;padding:0cm 0cm 0cm 0cm;
  height:18.0pt'>
  <p class=MsoNormal align=right style='margin-right:5.25pt;text-align:right;
  mso-element:frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:around;
  mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:margin;
  mso-element-top:3.1pt;mso-height-rule:exactly'><span lang=EN-US
  style='font-family:"Montserrat SemiBold";mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi;color:white;mso-themecolor:background1'><span
  style='mso-spacerun:yes'>� </span><o:p></o:p></span></p>
  <p class=MsoNormal align=center style='text-align:center;mso-element:frame;
  mso-element-frame-hspace:9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:
  paragraph;mso-element-anchor-horizontal:margin;mso-element-top:3.1pt;
  mso-height-rule:exactly'><span lang=EN-US style='font-family:"Montserrat SemiBold";
  mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi;
  color:white;mso-themecolor:background1'>Self-Care<o:p></o:p></span></p>
  </td>
  <td width=97 style='width:72.95pt;border:solid windowtext 1.0pt;border-left:
  none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  background:#3AC2BA;padding:0cm 0cm 0cm 0cm;height:18.0pt'>
  <p class=MsoNormal align=center style='text-align:center;mso-element:frame;
  mso-element-frame-hspace:9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:
  paragraph;mso-element-anchor-horizontal:margin;mso-element-top:3.1pt;
  mso-height-rule:exactly'><span lang=EN-US style='font-size:10.0pt;font-family:
  "Montserrat SemiBold";mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:
  major-bidi;color:white;mso-themecolor:background1'>Admission<o:p></o:p></span></p>
  </td>
  <td width=97 style='width:72.95pt;border:solid windowtext 1.0pt;border-left:
  none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  background:#3AC2BA;padding:0cm 0cm 0cm 0cm;height:18.0pt'>
  <p class=MsoNormal align=center style='text-align:center;mso-element:frame;
  mso-element-frame-hspace:9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:
  paragraph;mso-element-anchor-horizontal:margin;mso-element-top:3.1pt;
  mso-height-rule:exactly'><span lang=EN-US style='font-size:10.0pt;font-family:
  "Montserrat SemiBold";mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:
  major-bidi;color:white;mso-themecolor:background1'>Re-assessment <o:p></o:p></span></p>
  </td>
  <td width=97 style='width:72.95pt;border:solid windowtext 1.0pt;border-left:
  none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  background:#3AC2BA;padding:0cm 0cm 0cm 0cm;height:18.0pt'>
  <p class=MsoNormal align=center style='text-align:center;mso-element:frame;
  mso-element-frame-hspace:9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:
  paragraph;mso-element-anchor-horizontal:margin;mso-element-top:3.1pt;
  mso-height-rule:exactly'><span lang=EN-US style='font-size:10.0pt;font-family:
  "Montserrat SemiBold";mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:
  major-bidi;color:white;mso-themecolor:background1'>Re-assessment<o:p></o:p></span></p>
  </td>
  <td width=97 style='width:73.0pt;border:solid windowtext 1.0pt;border-left:
  none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  background:#3AC2BA;padding:0cm 0cm 0cm 0cm;height:18.0pt'>
  <p class=MsoNormal align=center style='text-align:center;mso-element:frame;
  mso-element-frame-hspace:9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:
  paragraph;mso-element-anchor-horizontal:margin;mso-element-top:3.1pt;
  mso-height-rule:exactly'><span lang=EN-US style='font-size:10.0pt;font-family:
  "Montserrat SemiBold";mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:
  major-bidi;color:white;mso-themecolor:background1'>Re-assessment<o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:1;height:18.0pt'>
  <td width=97 style='width:72.95pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;background:#3AC2BA;padding:0cm 0cm 0cm 0cm;
  height:18.0pt'>
  <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
  margin;mso-element-top:3.1pt;mso-height-rule:exactly'><span lang=EN-US
  style='font-size:8.0pt;font-family:"Montserrat SemiBold";mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi;color:white;mso-themecolor:
  background1'>Date:<o:p></o:p></span></p>
  </td>
  <td width=97 style='width:72.95pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;background:#3AC2BA;padding:0cm 0cm 0cm 0cm;
  height:18.0pt'>
  <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
  margin;mso-element-top:3.1pt;mso-height-rule:exactly'><span lang=EN-US
  style='font-size:8.0pt;font-family:"Montserrat SemiBold";mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi;color:white;mso-themecolor:
  background1'>Date:</span><span lang=EN-US style='font-family:"Montserrat SemiBold";
  mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi;
  color:white;mso-themecolor:background1'><o:p></o:p></span></p>
  </td>
  <td width=97 style='width:72.95pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;background:#3AC2BA;padding:0cm 0cm 0cm 0cm;
  height:18.0pt'>
  <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
  margin;mso-element-top:3.1pt;mso-height-rule:exactly'><span lang=EN-US
  style='font-size:8.0pt;font-family:"Montserrat SemiBold";mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi;color:white;mso-themecolor:
  background1'>Date:</span><span lang=EN-US style='font-family:"Montserrat SemiBold";
  mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi;
  color:white;mso-themecolor:background1'><o:p></o:p></span></p>
  </td>
  <td width=97 style='width:73.0pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;background:#3AC2BA;padding:0cm 0cm 0cm 0cm;height:18.0pt'>
  <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
  margin;mso-element-top:3.1pt;mso-height-rule:exactly'><span lang=EN-US
  style='font-size:8.0pt;font-family:"Montserrat SemiBold";mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi;color:white;mso-themecolor:
  background1'>Date:</span><span lang=EN-US style='font-family:"Montserrat SemiBold";
  mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi;
  color:white;mso-themecolor:background1'><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:2;height:14.4pt'>
  <td width=46 style='width:34.45pt;border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 0cm 0cm 0cm;height:14.4pt'>
  <p class=MsoNormal align=center style='text-align:center;mso-element:frame;
  mso-element-frame-hspace:9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:
  paragraph;mso-element-anchor-horizontal:margin;mso-element-top:3.1pt;
  mso-height-rule:exactly'><span lang=EN-US style='font-family:Montserrat;
  mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi'>1.<o:p></o:p></span></p>
  </td>
  <td width=213 style='width:159.95pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 0cm 0cm 0cm;height:14.4pt'>
  <p class=MsoNormal style='margin-left:6.05pt;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:paragraph;
  mso-element-anchor-horizontal:margin;mso-element-top:3.1pt;mso-height-rule:
  exactly'><span lang=EN-US style='font-family:Montserrat;mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi'>Eating<o:p></o:p></span></p>
  </td>
  <td width=97 style='width:72.95pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 0cm 0cm 0cm;height:14.4pt'>
  <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
  margin;mso-element-top:3.1pt;mso-height-rule:exactly'><span lang=EN-US
  style='font-family:"Times New Roman",serif;mso-ascii-theme-font:major-bidi;
  mso-hansi-theme-font:major-bidi;mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=97 style='width:72.95pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 0cm 0cm 0cm;height:14.4pt'>
  <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
  margin;mso-element-top:3.1pt;mso-height-rule:exactly'><span lang=EN-US
  style='font-family:"Times New Roman",serif;mso-ascii-theme-font:major-bidi;
  mso-hansi-theme-font:major-bidi;mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=97 style='width:72.95pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 0cm 0cm 0cm;height:14.4pt'>
  <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
  margin;mso-element-top:3.1pt;mso-height-rule:exactly'><span lang=EN-US
  style='font-family:"Times New Roman",serif;mso-ascii-theme-font:major-bidi;
  mso-hansi-theme-font:major-bidi;mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=97 style='width:73.0pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 0cm 0cm 0cm;height:14.4pt'>
  <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
  margin;mso-element-top:3.1pt;mso-height-rule:exactly'><span lang=EN-US
  style='font-family:"Times New Roman",serif;mso-ascii-theme-font:major-bidi;
  mso-hansi-theme-font:major-bidi;mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:3;height:14.4pt'>
  <td width=46 style='width:34.45pt;border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 0cm 0cm 0cm;height:14.4pt'>
  <p class=MsoNormal align=center style='text-align:center;mso-element:frame;
  mso-element-frame-hspace:9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:
  paragraph;mso-element-anchor-horizontal:margin;mso-element-top:3.1pt;
  mso-height-rule:exactly'><span lang=EN-US style='font-family:Montserrat;
  mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi'>2.<o:p></o:p></span></p>
  </td>
  <td width=213 style='width:159.95pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 0cm 0cm 0cm;height:14.4pt'>
  <p class=MsoNormal style='margin-left:6.05pt;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:paragraph;
  mso-element-anchor-horizontal:margin;mso-element-top:3.1pt;mso-height-rule:
  exactly'><span lang=EN-US style='font-family:Montserrat;mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi'>Bathing<o:p></o:p></span></p>
  </td>
  <td width=97 style='width:72.95pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 0cm 0cm 0cm;height:14.4pt'>
  <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
  margin;mso-element-top:3.1pt;mso-height-rule:exactly'><span lang=EN-US
  style='font-family:"Times New Roman",serif;mso-ascii-theme-font:major-bidi;
  mso-hansi-theme-font:major-bidi;mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=97 style='width:72.95pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 0cm 0cm 0cm;height:14.4pt'>
  <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
  margin;mso-element-top:3.1pt;mso-height-rule:exactly'><span lang=EN-US
  style='font-family:"Times New Roman",serif;mso-ascii-theme-font:major-bidi;
  mso-hansi-theme-font:major-bidi;mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=97 style='width:72.95pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 0cm 0cm 0cm;height:14.4pt'>
  <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
  margin;mso-element-top:3.1pt;mso-height-rule:exactly'><span lang=EN-US
  style='font-family:"Times New Roman",serif;mso-ascii-theme-font:major-bidi;
  mso-hansi-theme-font:major-bidi;mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=97 style='width:73.0pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 0cm 0cm 0cm;height:14.4pt'>
  <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
  margin;mso-element-top:3.1pt;mso-height-rule:exactly'><span lang=EN-US
  style='font-family:"Times New Roman",serif;mso-ascii-theme-font:major-bidi;
  mso-hansi-theme-font:major-bidi;mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:4;height:14.4pt'>
  <td width=46 style='width:34.45pt;border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 0cm 0cm 0cm;height:14.4pt'>
  <p class=MsoNormal align=center style='text-align:center;mso-element:frame;
  mso-element-frame-hspace:9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:
  paragraph;mso-element-anchor-horizontal:margin;mso-element-top:3.1pt;
  mso-height-rule:exactly'><span lang=EN-US style='font-family:Montserrat;
  mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi'>3.<o:p></o:p></span></p>
  </td>
  <td width=213 style='width:159.95pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 0cm 0cm 0cm;height:14.4pt'>
  <p class=MsoNormal style='margin-left:6.05pt;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:paragraph;
  mso-element-anchor-horizontal:margin;mso-element-top:3.1pt;mso-height-rule:
  exactly'><span lang=EN-US style='font-family:Montserrat;mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi'>Grooming<o:p></o:p></span></p>
  </td>
  <td width=97 style='width:72.95pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 0cm 0cm 0cm;height:14.4pt'>
  <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
  margin;mso-element-top:3.1pt;mso-height-rule:exactly'><span lang=EN-US
  style='font-family:"Times New Roman",serif;mso-ascii-theme-font:major-bidi;
  mso-hansi-theme-font:major-bidi;mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=97 style='width:72.95pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 0cm 0cm 0cm;height:14.4pt'>
  <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
  margin;mso-element-top:3.1pt;mso-height-rule:exactly'><span lang=EN-US
  style='font-family:"Times New Roman",serif;mso-ascii-theme-font:major-bidi;
  mso-hansi-theme-font:major-bidi;mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=97 style='width:72.95pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 0cm 0cm 0cm;height:14.4pt'>
  <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
  margin;mso-element-top:3.1pt;mso-height-rule:exactly'><span lang=EN-US
  style='font-family:"Times New Roman",serif;mso-ascii-theme-font:major-bidi;
  mso-hansi-theme-font:major-bidi;mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=97 style='width:73.0pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 0cm 0cm 0cm;height:14.4pt'>
  <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
  margin;mso-element-top:3.1pt;mso-height-rule:exactly'><span lang=EN-US
  style='font-family:"Times New Roman",serif;mso-ascii-theme-font:major-bidi;
  mso-hansi-theme-font:major-bidi;mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:5;height:14.4pt'>
  <td width=46 style='width:34.45pt;border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 0cm 0cm 0cm;height:14.4pt'>
  <p class=MsoNormal align=center style='text-align:center;mso-element:frame;
  mso-element-frame-hspace:9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:
  paragraph;mso-element-anchor-horizontal:margin;mso-element-top:3.1pt;
  mso-height-rule:exactly'><span lang=EN-US style='font-family:Montserrat;
  mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi'>4.<o:p></o:p></span></p>
  </td>
  <td width=213 style='width:159.95pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 0cm 0cm 0cm;height:14.4pt'>
  <p class=MsoNormal style='margin-left:6.05pt;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:paragraph;
  mso-element-anchor-horizontal:margin;mso-element-top:3.1pt;mso-height-rule:
  exactly'><span lang=EN-US style='font-family:Montserrat;mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi'>Dressing Upper body<o:p></o:p></span></p>
  </td>
  <td width=97 style='width:72.95pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 0cm 0cm 0cm;height:14.4pt'>
  <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
  margin;mso-element-top:3.1pt;mso-height-rule:exactly'><span lang=EN-US
  style='font-family:"Times New Roman",serif;mso-ascii-theme-font:major-bidi;
  mso-hansi-theme-font:major-bidi;mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=97 style='width:72.95pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 0cm 0cm 0cm;height:14.4pt'>
  <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
  margin;mso-element-top:3.1pt;mso-height-rule:exactly'><span lang=EN-US
  style='font-family:"Times New Roman",serif;mso-ascii-theme-font:major-bidi;
  mso-hansi-theme-font:major-bidi;mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=97 style='width:72.95pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 0cm 0cm 0cm;height:14.4pt'>
  <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
  margin;mso-element-top:3.1pt;mso-height-rule:exactly'><span lang=EN-US
  style='font-family:"Times New Roman",serif;mso-ascii-theme-font:major-bidi;
  mso-hansi-theme-font:major-bidi;mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=97 style='width:73.0pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 0cm 0cm 0cm;height:14.4pt'>
  <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
  margin;mso-element-top:3.1pt;mso-height-rule:exactly'><span lang=EN-US
  style='font-family:"Times New Roman",serif;mso-ascii-theme-font:major-bidi;
  mso-hansi-theme-font:major-bidi;mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:6;height:14.4pt'>
  <td width=46 style='width:34.45pt;border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 0cm 0cm 0cm;height:14.4pt'>
  <p class=MsoNormal align=center style='text-align:center;mso-element:frame;
  mso-element-frame-hspace:9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:
  paragraph;mso-element-anchor-horizontal:margin;mso-element-top:3.1pt;
  mso-height-rule:exactly'><span lang=EN-US style='font-family:Montserrat;
  mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi'>5.<o:p></o:p></span></p>
  </td>
  <td width=213 style='width:159.95pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 0cm 0cm 0cm;height:14.4pt'>
  <p class=MsoNormal style='margin-left:6.05pt;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:paragraph;
  mso-element-anchor-horizontal:margin;mso-element-top:3.1pt;mso-height-rule:
  exactly'><span lang=EN-US style='font-family:Montserrat;mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi'>Dressing Lower body<o:p></o:p></span></p>
  </td>
  <td width=97 style='width:72.95pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 0cm 0cm 0cm;height:14.4pt'>
  <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
  margin;mso-element-top:3.1pt;mso-height-rule:exactly'><span lang=EN-US
  style='font-family:"Times New Roman",serif;mso-ascii-theme-font:major-bidi;
  mso-hansi-theme-font:major-bidi;mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=97 style='width:72.95pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 0cm 0cm 0cm;height:14.4pt'>
  <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
  margin;mso-element-top:3.1pt;mso-height-rule:exactly'><span lang=EN-US
  style='font-family:"Times New Roman",serif;mso-ascii-theme-font:major-bidi;
  mso-hansi-theme-font:major-bidi;mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=97 style='width:72.95pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 0cm 0cm 0cm;height:14.4pt'>
  <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
  margin;mso-element-top:3.1pt;mso-height-rule:exactly'><span lang=EN-US
  style='font-family:"Times New Roman",serif;mso-ascii-theme-font:major-bidi;
  mso-hansi-theme-font:major-bidi;mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=97 style='width:73.0pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 0cm 0cm 0cm;height:14.4pt'>
  <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
  margin;mso-element-top:3.1pt;mso-height-rule:exactly'><span lang=EN-US
  style='font-family:"Times New Roman",serif;mso-ascii-theme-font:major-bidi;
  mso-hansi-theme-font:major-bidi;mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:7;height:14.4pt'>
  <td width=46 style='width:34.45pt;border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 0cm 0cm 0cm;height:14.4pt'>
  <p class=MsoNormal align=center style='text-align:center;mso-element:frame;
  mso-element-frame-hspace:9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:
  paragraph;mso-element-anchor-horizontal:margin;mso-element-top:3.1pt;
  mso-height-rule:exactly'><span lang=EN-US style='font-family:Montserrat;
  mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi'>6.<o:p></o:p></span></p>
  </td>
  <td width=213 style='width:159.95pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 0cm 0cm 0cm;height:14.4pt'>
  <p class=MsoNormal style='margin-left:6.05pt;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:paragraph;
  mso-element-anchor-horizontal:margin;mso-element-top:3.1pt;mso-height-rule:
  exactly'><span lang=EN-US style='font-family:Montserrat;mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi'>Toileting<o:p></o:p></span></p>
  </td>
  <td width=97 style='width:72.95pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 0cm 0cm 0cm;height:14.4pt'>
  <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
  margin;mso-element-top:3.1pt;mso-height-rule:exactly'><span lang=EN-US
  style='font-family:"Times New Roman",serif;mso-ascii-theme-font:major-bidi;
  mso-hansi-theme-font:major-bidi;mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=97 style='width:72.95pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 0cm 0cm 0cm;height:14.4pt'>
  <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
  margin;mso-element-top:3.1pt;mso-height-rule:exactly'><span lang=EN-US
  style='font-family:"Times New Roman",serif;mso-ascii-theme-font:major-bidi;
  mso-hansi-theme-font:major-bidi;mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=97 style='width:72.95pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 0cm 0cm 0cm;height:14.4pt'>
  <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
  margin;mso-element-top:3.1pt;mso-height-rule:exactly'><span lang=EN-US
  style='font-family:"Times New Roman",serif;mso-ascii-theme-font:major-bidi;
  mso-hansi-theme-font:major-bidi;mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=97 style='width:73.0pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 0cm 0cm 0cm;height:14.4pt'>
  <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
  margin;mso-element-top:3.1pt;mso-height-rule:exactly'><span lang=EN-US
  style='font-family:"Times New Roman",serif;mso-ascii-theme-font:major-bidi;
  mso-hansi-theme-font:major-bidi;mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:8;height:18.0pt'>
  <td width=259 colspan=2 style='width:194.4pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  background:#3AC2BA;padding:0cm 0cm 0cm 0cm;height:18.0pt'>
  <p class=MsoNormal align=center style='text-align:center;mso-element:frame;
  mso-element-frame-hspace:9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:
  paragraph;mso-element-anchor-horizontal:margin;mso-element-top:3.1pt;
  mso-height-rule:exactly'><span lang=EN-US style='font-family:"Montserrat SemiBold";
  mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi;
  color:white;mso-themecolor:background1'>Sphincter Control<o:p></o:p></span></p>
  </td>
  <td width=97 style='width:72.95pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;background:#3AC2BA;padding:0cm 0cm 0cm 0cm;
  height:18.0pt'>
  <p class=MsoNormal align=center style='text-align:center;mso-element:frame;
  mso-element-frame-hspace:9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:
  paragraph;mso-element-anchor-horizontal:margin;mso-element-top:3.1pt;
  mso-height-rule:exactly'><b><span lang=EN-US style='font-family:"Times New Roman",serif;
  mso-ascii-theme-font:major-bidi;mso-hansi-theme-font:major-bidi;mso-bidi-theme-font:
  major-bidi;color:white;mso-themecolor:background1'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=97 style='width:72.95pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;background:#3AC2BA;padding:0cm 0cm 0cm 0cm;
  height:18.0pt'>
  <p class=MsoNormal align=center style='text-align:center;mso-element:frame;
  mso-element-frame-hspace:9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:
  paragraph;mso-element-anchor-horizontal:margin;mso-element-top:3.1pt;
  mso-height-rule:exactly'><b><span lang=EN-US style='font-family:"Times New Roman",serif;
  mso-ascii-theme-font:major-bidi;mso-hansi-theme-font:major-bidi;mso-bidi-theme-font:
  major-bidi;color:white;mso-themecolor:background1'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=97 style='width:72.95pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;background:#3AC2BA;padding:0cm 0cm 0cm 0cm;
  height:18.0pt'>
  <p class=MsoNormal align=center style='text-align:center;mso-element:frame;
  mso-element-frame-hspace:9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:
  paragraph;mso-element-anchor-horizontal:margin;mso-element-top:3.1pt;
  mso-height-rule:exactly'><b><span lang=EN-US style='font-family:"Times New Roman",serif;
  mso-ascii-theme-font:major-bidi;mso-hansi-theme-font:major-bidi;mso-bidi-theme-font:
  major-bidi;color:white;mso-themecolor:background1'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=97 style='width:73.0pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;background:#3AC2BA;padding:0cm 0cm 0cm 0cm;height:18.0pt'>
  <p class=MsoNormal align=center style='text-align:center;mso-element:frame;
  mso-element-frame-hspace:9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:
  paragraph;mso-element-anchor-horizontal:margin;mso-element-top:3.1pt;
  mso-height-rule:exactly'><b><span lang=EN-US style='font-family:"Times New Roman",serif;
  mso-ascii-theme-font:major-bidi;mso-hansi-theme-font:major-bidi;mso-bidi-theme-font:
  major-bidi;color:white;mso-themecolor:background1'><o:p>&nbsp;</o:p></span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:9;height:14.4pt'>
  <td width=46 style='width:34.45pt;border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 0cm 0cm 0cm;height:14.4pt'>
  <p class=MsoNormal align=center style='text-align:center;mso-element:frame;
  mso-element-frame-hspace:9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:
  paragraph;mso-element-anchor-horizontal:margin;mso-element-top:3.1pt;
  mso-height-rule:exactly'><span lang=EN-US style='font-family:Montserrat;
  mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi'>7.<o:p></o:p></span></p>
  </td>
  <td width=213 style='width:159.95pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 0cm 0cm 0cm;height:14.4pt'>
  <p class=MsoNormal style='margin-left:6.05pt;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:paragraph;
  mso-element-anchor-horizontal:margin;mso-element-top:3.1pt;mso-height-rule:
  exactly'><span lang=EN-US style='font-family:Montserrat;mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi'>Bladder Management<o:p></o:p></span></p>
  </td>
  <td width=97 style='width:72.95pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 0cm 0cm 0cm;height:14.4pt'>
  <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
  margin;mso-element-top:3.1pt;mso-height-rule:exactly'><span lang=EN-US
  style='font-family:"Times New Roman",serif;mso-ascii-theme-font:major-bidi;
  mso-hansi-theme-font:major-bidi;mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=97 style='width:72.95pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 0cm 0cm 0cm;height:14.4pt'>
  <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
  margin;mso-element-top:3.1pt;mso-height-rule:exactly'><span lang=EN-US
  style='font-family:"Times New Roman",serif;mso-ascii-theme-font:major-bidi;
  mso-hansi-theme-font:major-bidi;mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=97 style='width:72.95pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 0cm 0cm 0cm;height:14.4pt'>
  <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
  margin;mso-element-top:3.1pt;mso-height-rule:exactly'><span lang=EN-US
  style='font-family:"Times New Roman",serif;mso-ascii-theme-font:major-bidi;
  mso-hansi-theme-font:major-bidi;mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=97 style='width:73.0pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 0cm 0cm 0cm;height:14.4pt'>
  <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
  margin;mso-element-top:3.1pt;mso-height-rule:exactly'><span lang=EN-US
  style='font-family:"Times New Roman",serif;mso-ascii-theme-font:major-bidi;
  mso-hansi-theme-font:major-bidi;mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:10;height:14.4pt'>
  <td width=46 style='width:34.45pt;border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 0cm 0cm 0cm;height:14.4pt'>
  <p class=MsoNormal align=center style='text-align:center;mso-element:frame;
  mso-element-frame-hspace:9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:
  paragraph;mso-element-anchor-horizontal:margin;mso-element-top:3.1pt;
  mso-height-rule:exactly'><span lang=EN-US style='font-family:Montserrat;
  mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi'>8.<o:p></o:p></span></p>
  </td>
  <td width=213 style='width:159.95pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 0cm 0cm 0cm;height:14.4pt'>
  <p class=MsoNormal style='margin-left:6.05pt;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:paragraph;
  mso-element-anchor-horizontal:margin;mso-element-top:3.1pt;mso-height-rule:
  exactly'><span lang=EN-US style='font-family:Montserrat;mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi'>Bowel Management<o:p></o:p></span></p>
  </td>
  <td width=97 style='width:72.95pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 0cm 0cm 0cm;height:14.4pt'>
  <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
  margin;mso-element-top:3.1pt;mso-height-rule:exactly'><span lang=EN-US
  style='font-family:"Times New Roman",serif;mso-ascii-theme-font:major-bidi;
  mso-hansi-theme-font:major-bidi;mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=97 style='width:72.95pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 0cm 0cm 0cm;height:14.4pt'>
  <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
  margin;mso-element-top:3.1pt;mso-height-rule:exactly'><span lang=EN-US
  style='font-family:"Times New Roman",serif;mso-ascii-theme-font:major-bidi;
  mso-hansi-theme-font:major-bidi;mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=97 style='width:72.95pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 0cm 0cm 0cm;height:14.4pt'>
  <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
  margin;mso-element-top:3.1pt;mso-height-rule:exactly'><span lang=EN-US
  style='font-family:"Times New Roman",serif;mso-ascii-theme-font:major-bidi;
  mso-hansi-theme-font:major-bidi;mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=97 style='width:73.0pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 0cm 0cm 0cm;height:14.4pt'>
  <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
  margin;mso-element-top:3.1pt;mso-height-rule:exactly'><span lang=EN-US
  style='font-family:"Times New Roman",serif;mso-ascii-theme-font:major-bidi;
  mso-hansi-theme-font:major-bidi;mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:11;height:18.0pt'>
  <td width=259 colspan=2 style='width:194.4pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  background:#3AC2BA;padding:0cm 0cm 0cm 0cm;height:18.0pt'>
  <p class=MsoNormal align=center style='text-align:center;mso-element:frame;
  mso-element-frame-hspace:9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:
  paragraph;mso-element-anchor-horizontal:margin;mso-element-top:3.1pt;
  mso-height-rule:exactly'><span lang=EN-US style='font-family:"Montserrat SemiBold";
  mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi;
  color:white;mso-themecolor:background1'>Transfers<o:p></o:p></span></p>
  </td>
  <td width=97 style='width:72.95pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;background:#3AC2BA;padding:0cm 0cm 0cm 0cm;
  height:18.0pt'>
  <p class=MsoNormal align=center style='text-align:center;mso-element:frame;
  mso-element-frame-hspace:9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:
  paragraph;mso-element-anchor-horizontal:margin;mso-element-top:3.1pt;
  mso-height-rule:exactly'><b><span lang=EN-US style='font-family:"Times New Roman",serif;
  mso-ascii-theme-font:major-bidi;mso-hansi-theme-font:major-bidi;mso-bidi-theme-font:
  major-bidi;color:white;mso-themecolor:background1'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=97 style='width:72.95pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;background:#3AC2BA;padding:0cm 0cm 0cm 0cm;
  height:18.0pt'>
  <p class=MsoNormal align=center style='text-align:center;mso-element:frame;
  mso-element-frame-hspace:9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:
  paragraph;mso-element-anchor-horizontal:margin;mso-element-top:3.1pt;
  mso-height-rule:exactly'><b><span lang=EN-US style='font-family:"Times New Roman",serif;
  mso-ascii-theme-font:major-bidi;mso-hansi-theme-font:major-bidi;mso-bidi-theme-font:
  major-bidi;color:white;mso-themecolor:background1'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=97 style='width:72.95pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;background:#3AC2BA;padding:0cm 0cm 0cm 0cm;
  height:18.0pt'>
  <p class=MsoNormal align=center style='text-align:center;mso-element:frame;
  mso-element-frame-hspace:9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:
  paragraph;mso-element-anchor-horizontal:margin;mso-element-top:3.1pt;
  mso-height-rule:exactly'><b><span lang=EN-US style='font-family:"Times New Roman",serif;
  mso-ascii-theme-font:major-bidi;mso-hansi-theme-font:major-bidi;mso-bidi-theme-font:
  major-bidi;color:white;mso-themecolor:background1'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=97 style='width:73.0pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;background:#3AC2BA;padding:0cm 0cm 0cm 0cm;height:18.0pt'>
  <p class=MsoNormal align=center style='text-align:center;mso-element:frame;
  mso-element-frame-hspace:9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:
  paragraph;mso-element-anchor-horizontal:margin;mso-element-top:3.1pt;
  mso-height-rule:exactly'><b><span lang=EN-US style='font-family:"Times New Roman",serif;
  mso-ascii-theme-font:major-bidi;mso-hansi-theme-font:major-bidi;mso-bidi-theme-font:
  major-bidi;color:white;mso-themecolor:background1'><o:p>&nbsp;</o:p></span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:12;height:14.4pt'>
  <td width=46 style='width:34.45pt;border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 0cm 0cm 0cm;height:14.4pt'>
  <p class=MsoNormal align=center style='text-align:center;mso-element:frame;
  mso-element-frame-hspace:9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:
  paragraph;mso-element-anchor-horizontal:margin;mso-element-top:3.1pt;
  mso-height-rule:exactly'><span lang=EN-US style='font-family:Montserrat;
  mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi'>9.<o:p></o:p></span></p>
  </td>
  <td width=213 style='width:159.95pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 0cm 0cm 0cm;height:14.4pt'>
  <p class=MsoNormal style='margin-left:6.05pt;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:paragraph;
  mso-element-anchor-horizontal:margin;mso-element-top:3.1pt;mso-height-rule:
  exactly'><span lang=EN-US style='font-family:Montserrat;mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi'>Transfers Bed to chair<o:p></o:p></span></p>
  </td>
  <td width=97 style='width:72.95pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 0cm 0cm 0cm;height:14.4pt'>
  <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
  margin;mso-element-top:3.1pt;mso-height-rule:exactly'><span lang=EN-US
  style='font-family:"Times New Roman",serif;mso-ascii-theme-font:major-bidi;
  mso-hansi-theme-font:major-bidi;mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=97 style='width:72.95pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 0cm 0cm 0cm;height:14.4pt'>
  <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
  margin;mso-element-top:3.1pt;mso-height-rule:exactly'><span lang=EN-US
  style='font-family:"Times New Roman",serif;mso-ascii-theme-font:major-bidi;
  mso-hansi-theme-font:major-bidi;mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=97 style='width:72.95pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 0cm 0cm 0cm;height:14.4pt'>
  <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
  margin;mso-element-top:3.1pt;mso-height-rule:exactly'><span lang=EN-US
  style='font-family:"Times New Roman",serif;mso-ascii-theme-font:major-bidi;
  mso-hansi-theme-font:major-bidi;mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=97 style='width:73.0pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 0cm 0cm 0cm;height:14.4pt'>
  <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
  margin;mso-element-top:3.1pt;mso-height-rule:exactly'><span lang=EN-US
  style='font-family:"Times New Roman",serif;mso-ascii-theme-font:major-bidi;
  mso-hansi-theme-font:major-bidi;mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:13;height:14.4pt'>
  <td width=46 style='width:34.45pt;border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 0cm 0cm 0cm;height:14.4pt'>
  <p class=MsoNormal align=center style='text-align:center;mso-element:frame;
  mso-element-frame-hspace:9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:
  paragraph;mso-element-anchor-horizontal:margin;mso-element-top:3.1pt;
  mso-height-rule:exactly'><span lang=EN-US style='font-family:Montserrat;
  mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi'>10.<o:p></o:p></span></p>
  </td>
  <td width=213 style='width:159.95pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 0cm 0cm 0cm;height:14.4pt'>
  <p class=MsoNormal style='margin-left:6.05pt;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:paragraph;
  mso-element-anchor-horizontal:margin;mso-element-top:3.1pt;mso-height-rule:
  exactly'><span lang=EN-US style='font-family:Montserrat;mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi'>Transfers: toilet<o:p></o:p></span></p>
  </td>
  <td width=97 style='width:72.95pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 0cm 0cm 0cm;height:14.4pt'>
  <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
  margin;mso-element-top:3.1pt;mso-height-rule:exactly'><span lang=EN-US
  style='font-family:"Times New Roman",serif;mso-ascii-theme-font:major-bidi;
  mso-hansi-theme-font:major-bidi;mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=97 style='width:72.95pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 0cm 0cm 0cm;height:14.4pt'>
  <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
  margin;mso-element-top:3.1pt;mso-height-rule:exactly'><span lang=EN-US
  style='font-family:"Times New Roman",serif;mso-ascii-theme-font:major-bidi;
  mso-hansi-theme-font:major-bidi;mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=97 style='width:72.95pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 0cm 0cm 0cm;height:14.4pt'>
  <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
  margin;mso-element-top:3.1pt;mso-height-rule:exactly'><span lang=EN-US
  style='font-family:"Times New Roman",serif;mso-ascii-theme-font:major-bidi;
  mso-hansi-theme-font:major-bidi;mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=97 style='width:73.0pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 0cm 0cm 0cm;height:14.4pt'>
  <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
  margin;mso-element-top:3.1pt;mso-height-rule:exactly'><span lang=EN-US
  style='font-family:"Times New Roman",serif;mso-ascii-theme-font:major-bidi;
  mso-hansi-theme-font:major-bidi;mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:14;height:14.4pt'>
  <td width=46 style='width:34.45pt;border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 0cm 0cm 0cm;height:14.4pt'>
  <p class=MsoNormal align=center style='text-align:center;mso-element:frame;
  mso-element-frame-hspace:9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:
  paragraph;mso-element-anchor-horizontal:margin;mso-element-top:3.1pt;
  mso-height-rule:exactly'><span lang=EN-US style='font-family:Montserrat;
  mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi'>11.<o:p></o:p></span></p>
  </td>
  <td width=213 style='width:159.95pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 0cm 0cm 0cm;height:14.4pt'>
  <p class=MsoNormal style='margin-left:6.05pt;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:paragraph;
  mso-element-anchor-horizontal:margin;mso-element-top:3.1pt;mso-height-rule:
  exactly'><span lang=EN-US style='font-family:Montserrat;mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi'>Transfers: Tub/shower<o:p></o:p></span></p>
  </td>
  <td width=97 style='width:72.95pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 0cm 0cm 0cm;height:14.4pt'>
  <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
  margin;mso-element-top:3.1pt;mso-height-rule:exactly'><span lang=EN-US
  style='font-family:"Times New Roman",serif;mso-ascii-theme-font:major-bidi;
  mso-hansi-theme-font:major-bidi;mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=97 style='width:72.95pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 0cm 0cm 0cm;height:14.4pt'>
  <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
  margin;mso-element-top:3.1pt;mso-height-rule:exactly'><span lang=EN-US
  style='font-family:"Times New Roman",serif;mso-ascii-theme-font:major-bidi;
  mso-hansi-theme-font:major-bidi;mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=97 style='width:72.95pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 0cm 0cm 0cm;height:14.4pt'>
  <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
  margin;mso-element-top:3.1pt;mso-height-rule:exactly'><span lang=EN-US
  style='font-family:"Times New Roman",serif;mso-ascii-theme-font:major-bidi;
  mso-hansi-theme-font:major-bidi;mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=97 style='width:73.0pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 0cm 0cm 0cm;height:14.4pt'>
  <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
  margin;mso-element-top:3.1pt;mso-height-rule:exactly'><span lang=EN-US
  style='font-family:"Times New Roman",serif;mso-ascii-theme-font:major-bidi;
  mso-hansi-theme-font:major-bidi;mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:15;height:18.0pt'>
  <td width=259 colspan=2 style='width:194.4pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  background:#3AC2BA;padding:0cm 0cm 0cm 0cm;height:18.0pt'>
  <p class=MsoNormal align=center style='text-align:center;mso-element:frame;
  mso-element-frame-hspace:9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:
  paragraph;mso-element-anchor-horizontal:margin;mso-element-top:3.1pt;
  mso-height-rule:exactly'><span lang=EN-US style='font-family:"Montserrat SemiBold";
  mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi;
  color:white;mso-themecolor:background1'>Locomotion<o:p></o:p></span></p>
  </td>
  <td width=97 style='width:72.95pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;background:#3AC2BA;padding:0cm 0cm 0cm 0cm;
  height:18.0pt'>
  <p class=MsoNormal align=center style='text-align:center;mso-element:frame;
  mso-element-frame-hspace:9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:
  paragraph;mso-element-anchor-horizontal:margin;mso-element-top:3.1pt;
  mso-height-rule:exactly'><b><span lang=EN-US style='font-family:"Times New Roman",serif;
  mso-ascii-theme-font:major-bidi;mso-hansi-theme-font:major-bidi;mso-bidi-theme-font:
  major-bidi'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=97 style='width:72.95pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;background:#3AC2BA;padding:0cm 0cm 0cm 0cm;
  height:18.0pt'>
  <p class=MsoNormal align=center style='text-align:center;mso-element:frame;
  mso-element-frame-hspace:9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:
  paragraph;mso-element-anchor-horizontal:margin;mso-element-top:3.1pt;
  mso-height-rule:exactly'><b><span lang=EN-US style='font-family:"Times New Roman",serif;
  mso-ascii-theme-font:major-bidi;mso-hansi-theme-font:major-bidi;mso-bidi-theme-font:
  major-bidi'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=97 style='width:72.95pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;background:#3AC2BA;padding:0cm 0cm 0cm 0cm;
  height:18.0pt'>
  <p class=MsoNormal align=center style='text-align:center;mso-element:frame;
  mso-element-frame-hspace:9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:
  paragraph;mso-element-anchor-horizontal:margin;mso-element-top:3.1pt;
  mso-height-rule:exactly'><b><span lang=EN-US style='font-family:"Times New Roman",serif;
  mso-ascii-theme-font:major-bidi;mso-hansi-theme-font:major-bidi;mso-bidi-theme-font:
  major-bidi'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=97 style='width:73.0pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;background:#3AC2BA;padding:0cm 0cm 0cm 0cm;height:18.0pt'>
  <p class=MsoNormal align=center style='text-align:center;mso-element:frame;
  mso-element-frame-hspace:9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:
  paragraph;mso-element-anchor-horizontal:margin;mso-element-top:3.1pt;
  mso-height-rule:exactly'><b><span lang=EN-US style='font-family:"Times New Roman",serif;
  mso-ascii-theme-font:major-bidi;mso-hansi-theme-font:major-bidi;mso-bidi-theme-font:
  major-bidi'><o:p>&nbsp;</o:p></span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:16;height:14.4pt'>
  <td width=46 style='width:34.45pt;border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 0cm 0cm 0cm;height:14.4pt'>
  <p class=MsoNormal align=center style='text-align:center;mso-element:frame;
  mso-element-frame-hspace:9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:
  paragraph;mso-element-anchor-horizontal:margin;mso-element-top:3.1pt;
  mso-height-rule:exactly'><span lang=EN-US style='font-family:Montserrat;
  mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi'>12.<o:p></o:p></span></p>
  </td>
  <td width=213 style='width:159.95pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 0cm 0cm 0cm;height:14.4pt'>
  <p class=MsoNormal style='margin-left:6.05pt;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:paragraph;
  mso-element-anchor-horizontal:margin;mso-element-top:3.1pt;mso-height-rule:
  exactly'><span lang=EN-US style='font-family:Montserrat;mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi'>Locomotion: Walk or
  Wheelchair<o:p></o:p></span></p>
  </td>
  <td width=97 style='width:72.95pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 0cm 0cm 0cm;height:14.4pt'>
  <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
  margin;mso-element-top:3.1pt;mso-height-rule:exactly'><span lang=EN-US
  style='font-family:"Times New Roman",serif;mso-ascii-theme-font:major-bidi;
  mso-hansi-theme-font:major-bidi;mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=97 style='width:72.95pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 0cm 0cm 0cm;height:14.4pt'>
  <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
  margin;mso-element-top:3.1pt;mso-height-rule:exactly'><span lang=EN-US
  style='font-family:"Times New Roman",serif;mso-ascii-theme-font:major-bidi;
  mso-hansi-theme-font:major-bidi;mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=97 style='width:72.95pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 0cm 0cm 0cm;height:14.4pt'>
  <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
  margin;mso-element-top:3.1pt;mso-height-rule:exactly'><span lang=EN-US
  style='font-family:"Times New Roman",serif;mso-ascii-theme-font:major-bidi;
  mso-hansi-theme-font:major-bidi;mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=97 style='width:73.0pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 0cm 0cm 0cm;height:14.4pt'>
  <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
  margin;mso-element-top:3.1pt;mso-height-rule:exactly'><span lang=EN-US
  style='font-family:"Times New Roman",serif;mso-ascii-theme-font:major-bidi;
  mso-hansi-theme-font:major-bidi;mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:17;height:14.4pt'>
  <td width=46 style='width:34.45pt;border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 0cm 0cm 0cm;height:14.4pt'>
  <p class=MsoNormal align=center style='text-align:center;mso-element:frame;
  mso-element-frame-hspace:9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:
  paragraph;mso-element-anchor-horizontal:margin;mso-element-top:3.1pt;
  mso-height-rule:exactly'><span lang=EN-US style='font-family:Montserrat;
  mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi'>13.<o:p></o:p></span></p>
  </td>
  <td width=213 style='width:159.95pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 0cm 0cm 0cm;height:14.4pt'>
  <p class=MsoNormal style='margin-left:6.05pt;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:paragraph;
  mso-element-anchor-horizontal:margin;mso-element-top:3.1pt;mso-height-rule:
  exactly'><span lang=EN-US style='font-family:Montserrat;mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi'>Locomotion: Stairs<o:p></o:p></span></p>
  </td>
  <td width=97 style='width:72.95pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 0cm 0cm 0cm;height:14.4pt'>
  <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
  margin;mso-element-top:3.1pt;mso-height-rule:exactly'><span lang=EN-US
  style='font-family:"Times New Roman",serif;mso-ascii-theme-font:major-bidi;
  mso-hansi-theme-font:major-bidi;mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=97 style='width:72.95pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 0cm 0cm 0cm;height:14.4pt'>
  <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
  margin;mso-element-top:3.1pt;mso-height-rule:exactly'><span lang=EN-US
  style='font-family:"Times New Roman",serif;mso-ascii-theme-font:major-bidi;
  mso-hansi-theme-font:major-bidi;mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=97 style='width:72.95pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 0cm 0cm 0cm;height:14.4pt'>
  <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
  margin;mso-element-top:3.1pt;mso-height-rule:exactly'><span lang=EN-US
  style='font-family:"Times New Roman",serif;mso-ascii-theme-font:major-bidi;
  mso-hansi-theme-font:major-bidi;mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=97 style='width:73.0pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 0cm 0cm 0cm;height:14.4pt'>
  <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
  margin;mso-element-top:3.1pt;mso-height-rule:exactly'><span lang=EN-US
  style='font-family:"Times New Roman",serif;mso-ascii-theme-font:major-bidi;
  mso-hansi-theme-font:major-bidi;mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:18;height:18.0pt'>
  <td width=259 colspan=2 style='width:194.4pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  background:#3AC2BA;padding:0cm 0cm 0cm 0cm;height:18.0pt'>
  <p class=MsoNormal align=center style='text-align:center;mso-element:frame;
  mso-element-frame-hspace:9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:
  paragraph;mso-element-anchor-horizontal:margin;mso-element-top:3.1pt;
  mso-height-rule:exactly'><span lang=EN-US style='font-family:"Montserrat SemiBold";
  mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi;
  color:white;mso-themecolor:background1'>Communication</span><b><span
  lang=EN-US style='font-family:"Times New Roman",serif;mso-ascii-theme-font:
  major-bidi;mso-hansi-theme-font:major-bidi;mso-bidi-theme-font:major-bidi;
  color:white;mso-themecolor:background1'><o:p></o:p></span></b></p>
  </td>
  <td width=97 style='width:72.95pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;background:#3AC2BA;padding:0cm 0cm 0cm 0cm;
  height:18.0pt'>
  <p class=MsoNormal align=center style='text-align:center;mso-element:frame;
  mso-element-frame-hspace:9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:
  paragraph;mso-element-anchor-horizontal:margin;mso-element-top:3.1pt;
  mso-height-rule:exactly'><b><span lang=EN-US style='font-family:"Times New Roman",serif;
  mso-ascii-theme-font:major-bidi;mso-hansi-theme-font:major-bidi;mso-bidi-theme-font:
  major-bidi;color:white;mso-themecolor:background1'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=97 style='width:72.95pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;background:#3AC2BA;padding:0cm 0cm 0cm 0cm;
  height:18.0pt'>
  <p class=MsoNormal align=center style='text-align:center;mso-element:frame;
  mso-element-frame-hspace:9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:
  paragraph;mso-element-anchor-horizontal:margin;mso-element-top:3.1pt;
  mso-height-rule:exactly'><b><span lang=EN-US style='font-family:"Times New Roman",serif;
  mso-ascii-theme-font:major-bidi;mso-hansi-theme-font:major-bidi;mso-bidi-theme-font:
  major-bidi;color:white;mso-themecolor:background1'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=97 style='width:72.95pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;background:#3AC2BA;padding:0cm 0cm 0cm 0cm;
  height:18.0pt'>
  <p class=MsoNormal align=center style='text-align:center;mso-element:frame;
  mso-element-frame-hspace:9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:
  paragraph;mso-element-anchor-horizontal:margin;mso-element-top:3.1pt;
  mso-height-rule:exactly'><b><span lang=EN-US style='font-family:"Times New Roman",serif;
  mso-ascii-theme-font:major-bidi;mso-hansi-theme-font:major-bidi;mso-bidi-theme-font:
  major-bidi;color:white;mso-themecolor:background1'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=97 style='width:73.0pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;background:#3AC2BA;padding:0cm 0cm 0cm 0cm;height:18.0pt'>
  <p class=MsoNormal align=center style='text-align:center;mso-element:frame;
  mso-element-frame-hspace:9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:
  paragraph;mso-element-anchor-horizontal:margin;mso-element-top:3.1pt;
  mso-height-rule:exactly'><b><span lang=EN-US style='font-family:"Times New Roman",serif;
  mso-ascii-theme-font:major-bidi;mso-hansi-theme-font:major-bidi;mso-bidi-theme-font:
  major-bidi;color:white;mso-themecolor:background1'><o:p>&nbsp;</o:p></span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:19;height:14.4pt'>
  <td width=46 style='width:34.45pt;border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 0cm 0cm 0cm;height:14.4pt'>
  <p class=MsoNormal align=center style='text-align:center;mso-element:frame;
  mso-element-frame-hspace:9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:
  paragraph;mso-element-anchor-horizontal:margin;mso-element-top:3.1pt;
  mso-height-rule:exactly'><span lang=EN-US style='font-family:Montserrat;
  mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi'>14.<o:p></o:p></span></p>
  </td>
  <td width=213 style='width:159.95pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 0cm 0cm 0cm;height:14.4pt'>
  <p class=MsoNormal style='margin-left:6.05pt;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:paragraph;
  mso-element-anchor-horizontal:margin;mso-element-top:3.1pt;mso-height-rule:
  exactly'><span lang=EN-US style='font-family:Montserrat;mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi'>Comprehension<o:p></o:p></span></p>
  </td>
  <td width=97 style='width:72.95pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 0cm 0cm 0cm;height:14.4pt'>
  <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
  margin;mso-element-top:3.1pt;mso-height-rule:exactly'><span lang=EN-US
  style='font-family:"Times New Roman",serif;mso-ascii-theme-font:major-bidi;
  mso-hansi-theme-font:major-bidi;mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=97 style='width:72.95pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 0cm 0cm 0cm;height:14.4pt'>
  <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
  margin;mso-element-top:3.1pt;mso-height-rule:exactly'><span lang=EN-US
  style='font-family:"Times New Roman",serif;mso-ascii-theme-font:major-bidi;
  mso-hansi-theme-font:major-bidi;mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=97 style='width:72.95pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 0cm 0cm 0cm;height:14.4pt'>
  <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
  margin;mso-element-top:3.1pt;mso-height-rule:exactly'><span lang=EN-US
  style='font-family:"Times New Roman",serif;mso-ascii-theme-font:major-bidi;
  mso-hansi-theme-font:major-bidi;mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=97 style='width:73.0pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 0cm 0cm 0cm;height:14.4pt'>
  <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
  margin;mso-element-top:3.1pt;mso-height-rule:exactly'><span lang=EN-US
  style='font-family:"Times New Roman",serif;mso-ascii-theme-font:major-bidi;
  mso-hansi-theme-font:major-bidi;mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:20;height:14.4pt'>
  <td width=46 style='width:34.45pt;border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 0cm 0cm 0cm;height:14.4pt'>
  <p class=MsoNormal align=center style='text-align:center;mso-element:frame;
  mso-element-frame-hspace:9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:
  paragraph;mso-element-anchor-horizontal:margin;mso-element-top:3.1pt;
  mso-height-rule:exactly'><span lang=EN-US style='font-family:Montserrat;
  mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi'>15.<o:p></o:p></span></p>
  </td>
  <td width=213 style='width:159.95pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 0cm 0cm 0cm;height:14.4pt'>
  <p class=MsoNormal style='margin-left:6.05pt;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:paragraph;
  mso-element-anchor-horizontal:margin;mso-element-top:3.1pt;mso-height-rule:
  exactly'><span lang=EN-US style='font-family:Montserrat;mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi'>Expression<o:p></o:p></span></p>
  </td>
  <td width=97 style='width:72.95pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 0cm 0cm 0cm;height:14.4pt'>
  <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
  margin;mso-element-top:3.1pt;mso-height-rule:exactly'><span lang=EN-US
  style='font-family:"Times New Roman",serif;mso-ascii-theme-font:major-bidi;
  mso-hansi-theme-font:major-bidi;mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=97 style='width:72.95pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 0cm 0cm 0cm;height:14.4pt'>
  <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
  margin;mso-element-top:3.1pt;mso-height-rule:exactly'><span lang=EN-US
  style='font-family:"Times New Roman",serif;mso-ascii-theme-font:major-bidi;
  mso-hansi-theme-font:major-bidi;mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=97 style='width:72.95pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 0cm 0cm 0cm;height:14.4pt'>
  <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
  margin;mso-element-top:3.1pt;mso-height-rule:exactly'><span lang=EN-US
  style='font-family:"Times New Roman",serif;mso-ascii-theme-font:major-bidi;
  mso-hansi-theme-font:major-bidi;mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=97 style='width:73.0pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 0cm 0cm 0cm;height:14.4pt'>
  <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
  margin;mso-element-top:3.1pt;mso-height-rule:exactly'><span lang=EN-US
  style='font-family:"Times New Roman",serif;mso-ascii-theme-font:major-bidi;
  mso-hansi-theme-font:major-bidi;mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:21;height:18.0pt'>
  <td width=259 colspan=2 style='width:194.4pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  background:#3AC2BA;padding:0cm 0cm 0cm 0cm;height:18.0pt'>
  <p class=MsoNormal align=center style='text-align:center;mso-element:frame;
  mso-element-frame-hspace:9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:
  paragraph;mso-element-anchor-horizontal:margin;mso-element-top:3.1pt;
  mso-height-rule:exactly'><span lang=EN-US style='font-family:"Montserrat SemiBold";
  mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi;
  color:white;mso-themecolor:background1'>Social Cognition<o:p></o:p></span></p>
  </td>
  <td width=97 style='width:72.95pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;background:#3AC2BA;padding:0cm 0cm 0cm 0cm;
  height:18.0pt'>
  <p class=MsoNormal align=center style='text-align:center;mso-element:frame;
  mso-element-frame-hspace:9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:
  paragraph;mso-element-anchor-horizontal:margin;mso-element-top:3.1pt;
  mso-height-rule:exactly'><b><span lang=EN-US style='font-family:"Times New Roman",serif;
  mso-ascii-theme-font:major-bidi;mso-hansi-theme-font:major-bidi;mso-bidi-theme-font:
  major-bidi;color:white;mso-themecolor:background1'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=97 style='width:72.95pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;background:#3AC2BA;padding:0cm 0cm 0cm 0cm;
  height:18.0pt'>
  <p class=MsoNormal align=center style='text-align:center;mso-element:frame;
  mso-element-frame-hspace:9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:
  paragraph;mso-element-anchor-horizontal:margin;mso-element-top:3.1pt;
  mso-height-rule:exactly'><b><span lang=EN-US style='font-family:"Times New Roman",serif;
  mso-ascii-theme-font:major-bidi;mso-hansi-theme-font:major-bidi;mso-bidi-theme-font:
  major-bidi;color:white;mso-themecolor:background1'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=97 style='width:72.95pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;background:#3AC2BA;padding:0cm 0cm 0cm 0cm;
  height:18.0pt'>
  <p class=MsoNormal align=center style='text-align:center;mso-element:frame;
  mso-element-frame-hspace:9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:
  paragraph;mso-element-anchor-horizontal:margin;mso-element-top:3.1pt;
  mso-height-rule:exactly'><b><span lang=EN-US style='font-family:"Times New Roman",serif;
  mso-ascii-theme-font:major-bidi;mso-hansi-theme-font:major-bidi;mso-bidi-theme-font:
  major-bidi;color:white;mso-themecolor:background1'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=97 style='width:73.0pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;background:#3AC2BA;padding:0cm 0cm 0cm 0cm;height:18.0pt'>
  <p class=MsoNormal align=center style='text-align:center;mso-element:frame;
  mso-element-frame-hspace:9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:
  paragraph;mso-element-anchor-horizontal:margin;mso-element-top:3.1pt;
  mso-height-rule:exactly'><b><span lang=EN-US style='font-family:"Times New Roman",serif;
  mso-ascii-theme-font:major-bidi;mso-hansi-theme-font:major-bidi;mso-bidi-theme-font:
  major-bidi;color:white;mso-themecolor:background1'><o:p>&nbsp;</o:p></span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:22;height:14.4pt'>
  <td width=46 style='width:34.45pt;border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 0cm 0cm 0cm;height:14.4pt'>
  <p class=MsoNormal align=center style='text-align:center;mso-element:frame;
  mso-element-frame-hspace:9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:
  paragraph;mso-element-anchor-horizontal:margin;mso-element-top:3.1pt;
  mso-height-rule:exactly'><span lang=EN-US style='font-family:Montserrat;
  mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi'>16.<o:p></o:p></span></p>
  </td>
  <td width=213 style='width:159.95pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 0cm 0cm 0cm;height:14.4pt'>
  <p class=MsoNormal style='margin-left:6.05pt;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:paragraph;
  mso-element-anchor-horizontal:margin;mso-element-top:3.1pt;mso-height-rule:
  exactly'><span lang=EN-US style='font-family:Montserrat;mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi'>Social Interaction<o:p></o:p></span></p>
  </td>
  <td width=97 style='width:72.95pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 0cm 0cm 0cm;height:14.4pt'>
  <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
  margin;mso-element-top:3.1pt;mso-height-rule:exactly'><span lang=EN-US
  style='font-family:"Times New Roman",serif;mso-ascii-theme-font:major-bidi;
  mso-hansi-theme-font:major-bidi;mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=97 style='width:72.95pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 0cm 0cm 0cm;height:14.4pt'>
  <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
  margin;mso-element-top:3.1pt;mso-height-rule:exactly'><span lang=EN-US
  style='font-family:"Times New Roman",serif;mso-ascii-theme-font:major-bidi;
  mso-hansi-theme-font:major-bidi;mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=97 style='width:72.95pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 0cm 0cm 0cm;height:14.4pt'>
  <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
  margin;mso-element-top:3.1pt;mso-height-rule:exactly'><span lang=EN-US
  style='font-family:"Times New Roman",serif;mso-ascii-theme-font:major-bidi;
  mso-hansi-theme-font:major-bidi;mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=97 style='width:73.0pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 0cm 0cm 0cm;height:14.4pt'>
  <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
  margin;mso-element-top:3.1pt;mso-height-rule:exactly'><span lang=EN-US
  style='font-family:"Times New Roman",serif;mso-ascii-theme-font:major-bidi;
  mso-hansi-theme-font:major-bidi;mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:23;height:14.4pt'>
  <td width=46 style='width:34.45pt;border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 0cm 0cm 0cm;height:14.4pt'>
  <p class=MsoNormal align=center style='text-align:center;mso-element:frame;
  mso-element-frame-hspace:9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:
  paragraph;mso-element-anchor-horizontal:margin;mso-element-top:3.1pt;
  mso-height-rule:exactly'><span lang=EN-US style='font-family:Montserrat;
  mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi'>17.<o:p></o:p></span></p>
  </td>
  <td width=213 style='width:159.95pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 0cm 0cm 0cm;height:14.4pt'>
  <p class=MsoNormal style='margin-left:6.05pt;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:paragraph;
  mso-element-anchor-horizontal:margin;mso-element-top:3.1pt;mso-height-rule:
  exactly'><span lang=EN-US style='font-family:Montserrat;mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi'>Problem Solving<o:p></o:p></span></p>
  </td>
  <td width=97 style='width:72.95pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 0cm 0cm 0cm;height:14.4pt'>
  <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
  margin;mso-element-top:3.1pt;mso-height-rule:exactly'><span lang=EN-US
  style='font-family:"Times New Roman",serif;mso-ascii-theme-font:major-bidi;
  mso-hansi-theme-font:major-bidi;mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=97 style='width:72.95pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 0cm 0cm 0cm;height:14.4pt'>
  <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
  margin;mso-element-top:3.1pt;mso-height-rule:exactly'><span lang=EN-US
  style='font-family:"Times New Roman",serif;mso-ascii-theme-font:major-bidi;
  mso-hansi-theme-font:major-bidi;mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=97 style='width:72.95pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 0cm 0cm 0cm;height:14.4pt'>
  <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
  margin;mso-element-top:3.1pt;mso-height-rule:exactly'><span lang=EN-US
  style='font-family:"Times New Roman",serif;mso-ascii-theme-font:major-bidi;
  mso-hansi-theme-font:major-bidi;mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=97 style='width:73.0pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 0cm 0cm 0cm;height:14.4pt'>
  <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
  margin;mso-element-top:3.1pt;mso-height-rule:exactly'><span lang=EN-US
  style='font-family:"Times New Roman",serif;mso-ascii-theme-font:major-bidi;
  mso-hansi-theme-font:major-bidi;mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:24;height:14.4pt'>
  <td width=46 style='width:34.45pt;border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 0cm 0cm 0cm;height:14.4pt'>
  <p class=MsoNormal align=center style='text-align:center;mso-element:frame;
  mso-element-frame-hspace:9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:
  paragraph;mso-element-anchor-horizontal:margin;mso-element-top:3.1pt;
  mso-height-rule:exactly'><span lang=EN-US style='font-family:Montserrat;
  mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi'>18.<o:p></o:p></span></p>
  </td>
  <td width=213 style='width:159.95pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 0cm 0cm 0cm;height:14.4pt'>
  <p class=MsoNormal style='margin-left:6.05pt;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:paragraph;
  mso-element-anchor-horizontal:margin;mso-element-top:3.1pt;mso-height-rule:
  exactly'><span lang=EN-US style='font-family:Montserrat;mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi'>Memory<o:p></o:p></span></p>
  </td>
  <td width=97 style='width:72.95pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 0cm 0cm 0cm;height:14.4pt'>
  <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
  margin;mso-element-top:3.1pt;mso-height-rule:exactly'><span lang=EN-US
  style='font-family:"Times New Roman",serif;mso-ascii-theme-font:major-bidi;
  mso-hansi-theme-font:major-bidi;mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=97 style='width:72.95pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 0cm 0cm 0cm;height:14.4pt'>
  <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
  margin;mso-element-top:3.1pt;mso-height-rule:exactly'><span lang=EN-US
  style='font-family:"Times New Roman",serif;mso-ascii-theme-font:major-bidi;
  mso-hansi-theme-font:major-bidi;mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=97 style='width:72.95pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 0cm 0cm 0cm;height:14.4pt'>
  <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
  margin;mso-element-top:3.1pt;mso-height-rule:exactly'><span lang=EN-US
  style='font-family:"Times New Roman",serif;mso-ascii-theme-font:major-bidi;
  mso-hansi-theme-font:major-bidi;mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=97 style='width:73.0pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 0cm 0cm 0cm;height:14.4pt'>
  <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
  margin;mso-element-top:3.1pt;mso-height-rule:exactly'><span lang=EN-US
  style='font-family:"Times New Roman",serif;mso-ascii-theme-font:major-bidi;
  mso-hansi-theme-font:major-bidi;mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:25;mso-yfti-lastrow:yes;height:18.0pt'>
  <td width=259 colspan=2 style='width:194.4pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  background:#3AC2BA;padding:0cm 0cm 0cm 0cm;height:18.0pt'>
  <p class=MsoNormal align=center style='text-align:center;mso-element:frame;
  mso-element-frame-hspace:9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:
  paragraph;mso-element-anchor-horizontal:margin;mso-element-top:3.1pt;
  mso-height-rule:exactly'><span lang=EN-US style='font-family:"Montserrat SemiBold";
  mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi;
  color:white;mso-themecolor:background1'><span
  style='mso-spacerun:yes'>������������������������� </span>TOTAL SCORE:<o:p></o:p></span></p>
  </td>
  <td width=97 style='width:72.95pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;background:#3AC2BA;padding:0cm 0cm 0cm 0cm;
  height:18.0pt'>
  <p class=MsoNormal align=right style='text-align:right;mso-element:frame;
  mso-element-frame-hspace:9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:
  paragraph;mso-element-anchor-horizontal:margin;mso-element-top:3.1pt;
  mso-height-rule:exactly'><b><span lang=EN-US style='font-family:"Times New Roman",serif;
  mso-ascii-theme-font:major-bidi;mso-hansi-theme-font:major-bidi;mso-bidi-theme-font:
  major-bidi;color:white;mso-themecolor:background1'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=97 style='width:72.95pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;background:#3AC2BA;padding:0cm 0cm 0cm 0cm;
  height:18.0pt'>
  <p class=MsoNormal align=right style='text-align:right;mso-element:frame;
  mso-element-frame-hspace:9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:
  paragraph;mso-element-anchor-horizontal:margin;mso-element-top:3.1pt;
  mso-height-rule:exactly'><b><span lang=EN-US style='font-family:"Times New Roman",serif;
  mso-ascii-theme-font:major-bidi;mso-hansi-theme-font:major-bidi;mso-bidi-theme-font:
  major-bidi;color:white;mso-themecolor:background1'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=97 style='width:72.95pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;background:#3AC2BA;padding:0cm 0cm 0cm 0cm;
  height:18.0pt'>
  <p class=MsoNormal align=right style='text-align:right;mso-element:frame;
  mso-element-frame-hspace:9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:
  paragraph;mso-element-anchor-horizontal:margin;mso-element-top:3.1pt;
  mso-height-rule:exactly'><b><span lang=EN-US style='font-family:"Times New Roman",serif;
  mso-ascii-theme-font:major-bidi;mso-hansi-theme-font:major-bidi;mso-bidi-theme-font:
  major-bidi;color:white;mso-themecolor:background1'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=97 style='width:73.0pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;background:#3AC2BA;padding:0cm 0cm 0cm 0cm;height:18.0pt'>
  <p class=MsoNormal align=right style='text-align:right;mso-element:frame;
  mso-element-frame-hspace:9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:
  paragraph;mso-element-anchor-horizontal:margin;mso-element-top:3.1pt;
  mso-height-rule:exactly'><b><span lang=EN-US style='font-family:"Times New Roman",serif;
  mso-ascii-theme-font:major-bidi;mso-hansi-theme-font:major-bidi;mso-bidi-theme-font:
  major-bidi;color:white;mso-themecolor:background1'><o:p>&nbsp;</o:p></span></b></p>
  </td>
 </tr>
</table>

<p class=MsoBodyText><b style='mso-bidi-font-weight:normal'><span lang=EN-US
style='font-size:8.0pt;font-family:"Times New Roman",serif;mso-ascii-theme-font:
major-bidi;mso-hansi-theme-font:major-bidi;mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></b></p>

<table class=MsoTableGrid border=1 cellspacing=0 cellpadding=0
 style='margin-left:5.4pt;border-collapse:collapse;border:none;mso-border-alt:
 solid windowtext .5pt;mso-yfti-tbllook:1184;mso-padding-alt:0cm 5.4pt 0cm 5.4pt'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;height:14.4pt'>
  <td width=648 colspan=3 valign=top style='width:486.0pt;border:solid windowtext 1.0pt;
  mso-border-alt:solid windowtext .5pt;background:#EAF1DD;mso-background-themecolor:
  accent3;mso-background-themetint:51;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoBodyText style='tab-stops:316.5pt 372.35pt 530.25pt'><span
  lang=EN-US style='font-size:11.0pt;font-family:"Montserrat SemiBold";
  mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi'>Scale:<o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:1;height:14.4pt'>
  <td width=54 style='width:40.5pt;border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  background:#EAF1DD;mso-background-themecolor:accent3;mso-background-themetint:
  51;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-family:"Montserrat SemiBold";mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi;color:black;mso-color-alt:windowtext'>Score</span><span
  lang=EN-US style='font-family:"Montserrat SemiBold";mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi'><o:p></o:p></span></p>
  </td>
  <td width=490 style='width:367.8pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;background:#EAF1DD;mso-background-themecolor:
  accent3;mso-background-themetint:51;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal><span lang=EN-US style='font-family:"Montserrat SemiBold";
  mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi;
  color:black;mso-color-alt:windowtext'>Independent</span><span lang=EN-US
  style='font-family:"Montserrat SemiBold";mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi'><o:p></o:p></span></p>
  </td>
  <td width=104 rowspan=4 style='width:77.7pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;background:#F2F2F2;mso-background-themecolor:
  background1;mso-background-themeshade:242;padding:0cm 5.4pt 0cm 5.4pt;
  height:14.4pt'>
  <p class=MsoBodyText style='text-align:justify;tab-stops:316.5pt 372.35pt 530.25pt'><span
  lang=EN-US style='font-size:11.0pt;font-family:"Montserrat SemiBold";
  mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi;
  color:black;mso-color-alt:windowtext'>No Helper</span><span lang=EN-US
  style='font-size:11.0pt;font-family:"Montserrat SemiBold";mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi'><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:2;height:14.4pt'>
  <td width=54 style='width:40.5pt;border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  background:#F2F2F2;mso-background-themecolor:background1;mso-background-themeshade:
  242;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi;color:black;mso-color-alt:windowtext'>7</span><b><span
  lang=EN-US style='font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi'><o:p></o:p></span></b></p>
  </td>
  <td width=490 style='width:367.8pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;background:#F2F2F2;mso-background-themecolor:
  background1;mso-background-themeshade:242;padding:0cm 5.4pt 0cm 5.4pt;
  height:14.4pt'>
  <p class=MsoNormal><span lang=EN-US style='font-family:Montserrat;mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi;color:black;mso-color-alt:
  windowtext'>Complete Independence (Timely, Safely)</span><span lang=EN-US
  style='font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi'><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:3;height:14.4pt'>
  <td width=54 style='width:40.5pt;border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  background:#F2F2F2;mso-background-themecolor:background1;mso-background-themeshade:
  242;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi;color:black;mso-color-alt:windowtext'>6</span><b><span
  lang=EN-US style='font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi'><o:p></o:p></span></b></p>
  </td>
  <td width=490 style='width:367.8pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;background:#F2F2F2;mso-background-themecolor:
  background1;mso-background-themeshade:242;padding:0cm 5.4pt 0cm 5.4pt;
  height:14.4pt'>
  <p class=MsoNormal><span lang=EN-US style='font-family:Montserrat;mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi;color:black;mso-color-alt:
  windowtext'>Modified Independence (Device)</span><span lang=EN-US
  style='font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi'><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:4;height:14.4pt'>
  <td width=54 style='width:40.5pt;border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  background:#EAF1DD;mso-background-themecolor:accent3;mso-background-themetint:
  51;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=490 style='width:367.8pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;background:#EAF1DD;mso-background-themecolor:
  accent3;mso-background-themetint:51;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal><span lang=EN-US style='font-family:"Montserrat SemiBold";
  mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi;
  color:black;mso-color-alt:windowtext'>Modified Dependence</span><span
  lang=EN-US style='font-family:"Montserrat SemiBold";mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi'><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:5;height:14.4pt'>
  <td width=54 style='width:40.5pt;border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  background:#F2F2F2;mso-background-themecolor:background1;mso-background-themeshade:
  242;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi;color:black;mso-color-alt:windowtext'>5</span><span
  lang=EN-US style='font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi'><o:p></o:p></span></p>
  </td>
  <td width=490 style='width:367.8pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;background:#F2F2F2;mso-background-themecolor:
  background1;mso-background-themeshade:242;padding:0cm 5.4pt 0cm 5.4pt;
  height:14.4pt'>
  <p class=MsoNormal><span lang=EN-US style='font-family:Montserrat;mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi;color:black;mso-color-alt:
  windowtext'>Supervision (Subject = 100%+)</span><span lang=EN-US
  style='font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi'><o:p></o:p></span></p>
  </td>
  <td width=104 rowspan=6 style='width:77.7pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;background:#F2F2F2;mso-background-themecolor:
  background1;mso-background-themeshade:242;padding:0cm 5.4pt 0cm 5.4pt;
  height:14.4pt'>
  <p class=MsoBodyText style='text-align:justify;tab-stops:316.5pt 372.35pt 530.25pt'><span
  lang=EN-US style='font-size:11.0pt;font-family:"Montserrat SemiBold";
  mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi;
  color:black;mso-color-alt:windowtext'>Helper</span><span lang=EN-US
  style='font-size:11.0pt;font-family:"Montserrat SemiBold";mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi'><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:6;height:14.4pt'>
  <td width=54 style='width:40.5pt;border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  background:#F2F2F2;mso-background-themecolor:background1;mso-background-themeshade:
  242;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi;color:black;mso-color-alt:windowtext'>4</span><span
  lang=EN-US style='font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi'><o:p></o:p></span></p>
  </td>
  <td width=490 style='width:367.8pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;background:#F2F2F2;mso-background-themecolor:
  background1;mso-background-themeshade:242;padding:0cm 5.4pt 0cm 5.4pt;
  height:14.4pt'>
  <p class=MsoNormal><span lang=EN-US style='font-family:Montserrat;mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi;color:black;mso-color-alt:
  windowtext'>Minimal Assist (Subject = 75%+)</span><b><span lang=EN-US
  style='font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi'><o:p></o:p></span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:7;height:14.4pt'>
  <td width=54 style='width:40.5pt;border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  background:#F2F2F2;mso-background-themecolor:background1;mso-background-themeshade:
  242;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi;color:black;mso-color-alt:windowtext'>3</span><span
  lang=EN-US style='font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi'><o:p></o:p></span></p>
  </td>
  <td width=490 style='width:367.8pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;background:#F2F2F2;mso-background-themecolor:
  background1;mso-background-themeshade:242;padding:0cm 5.4pt 0cm 5.4pt;
  height:14.4pt'>
  <p class=MsoNormal><span lang=EN-US style='font-family:Montserrat;mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi;color:black;mso-color-alt:
  windowtext'>Moderate Assist (Subject = 50%+)<b><span
  style='mso-spacerun:yes'>��� </span></b></span><span lang=EN-US
  style='font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi'><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:8;height:14.4pt'>
  <td width=54 style='width:40.5pt;border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  background:#EAF1DD;mso-background-themecolor:accent3;mso-background-themetint:
  51;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=490 style='width:367.8pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;background:#EAF1DD;mso-background-themecolor:
  accent3;mso-background-themetint:51;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal><span lang=EN-US style='font-family:"Montserrat SemiBold";
  mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi;
  color:black;mso-color-alt:windowtext'>Complete Dependence</span><span
  lang=EN-US style='font-family:"Montserrat SemiBold";mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi'><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:9;height:14.4pt'>
  <td width=54 style='width:40.5pt;border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  background:#F2F2F2;mso-background-themecolor:background1;mso-background-themeshade:
  242;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi;color:black;mso-color-alt:windowtext'>2</span><span
  lang=EN-US style='font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi'><o:p></o:p></span></p>
  </td>
  <td width=490 style='width:367.8pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;background:#F2F2F2;mso-background-themecolor:
  background1;mso-background-themeshade:242;padding:0cm 5.4pt 0cm 5.4pt;
  height:14.4pt'>
  <p class=MsoNormal><span lang=EN-US style='font-family:Montserrat;mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi;color:black;mso-color-alt:
  windowtext'>Maximal Assist (Subject = 25%+)</span><span lang=EN-US
  style='font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi'><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:10;height:14.4pt'>
  <td width=54 style='width:40.5pt;border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  background:#F2F2F2;mso-background-themecolor:background1;mso-background-themeshade:
  242;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi;color:black;mso-color-alt:windowtext'>1</span><span
  lang=EN-US style='font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi'><o:p></o:p></span></p>
  </td>
  <td width=490 style='width:367.8pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;background:#F2F2F2;mso-background-themecolor:
  background1;mso-background-themeshade:242;padding:0cm 5.4pt 0cm 5.4pt;
  height:14.4pt'>
  <p class=MsoNormal><span lang=EN-US style='font-family:Montserrat;mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi;color:black;mso-color-alt:
  windowtext'>Total Assist (Subject = less than 25%)</span><span lang=EN-US
  style='font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi'><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:11;mso-yfti-lastrow:yes;height:14.4pt'>
  <td width=648 colspan=3 style='width:486.0pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  background:#F2F2F2;mso-background-themecolor:background1;mso-background-themeshade:
  242;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoBodyText style='tab-stops:316.5pt 372.35pt 530.25pt'><span
  lang=EN-US style='font-size:11.0pt;font-family:Montserrat;mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi;color:black;mso-color-alt:
  windowtext'>Note: Leave no blanks. Enter 1 if patient is not testable due to
  risk.</span><span lang=EN-US style='font-size:11.0pt;font-family:Montserrat;
  mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi'><o:p></o:p></span></p>
  </td>
 </tr>
</table>

<p class=MsoBodyText style='margin-top:11.45pt;text-align:justify;tab-stops:
316.5pt 372.35pt 530.25pt'><span lang=EN-US style='font-family:Montserrat;
mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></p>

<p class=MsoBodyText style='margin-top:11.45pt;text-align:justify;tab-stops:
316.5pt 372.35pt 530.25pt'><span lang=EN-US style='font-size:12.0pt;font-family:
Montserrat;mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi'>Therapist<span
style='letter-spacing:-.2pt'> </span>Name: ___________________Employee<span
style='letter-spacing:-.5pt'> </span>ID: ________<u style='text-underline:gray'>
</u>Signature: ___________<span style='mso-tab-count:1'>����������������������������������������������������������������������������������� </span><o:p></o:p></span></p>

</div>

</body>

</html>
