<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv=Content-Type content="text/html; charset=windows-1252">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<title>F073-THHC Notification Form of TB| @yield('title')</title>

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
 /* Style Definitions */
 p.MsoNormal, li.MsoNormal, div.MsoNormal
	{mso-style-unhide:no;
	mso-style-qformat:yes;
	mso-style-parent:"";
	margin:0cm;
	margin-bottom:.0001pt;
	mso-pagination:none;
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
h1
	{mso-style-priority:9;
	mso-style-unhide:no;
	mso-style-qformat:yes;
	mso-style-link:"\0627\0644\0639\0646\0648\0627\0646 1 Char";
	margin-top:2.9pt;
	margin-right:0cm;
	margin-bottom:0cm;
	margin-left:14.0pt;
	margin-bottom:.0001pt;
	mso-pagination:none;
	mso-outline-level:1;
	font-size:16.0pt;
	font-family:"Times New Roman",serif;
	mso-fareast-font-family:"Times New Roman";
	mso-bidi-font-family:Arial;
	mso-bidi-theme-font:minor-bidi;
	mso-font-kerning:0pt;
	mso-ansi-language:EN-US;
	mso-fareast-language:EN-US;}
h2
	{mso-style-priority:9;
	mso-style-qformat:yes;
	mso-style-link:"\0639\0646\0648\0627\0646 2 Char";
	margin-top:0cm;
	margin-right:0cm;
	margin-bottom:0cm;
	margin-left:22.0pt;
	margin-bottom:.0001pt;
	mso-pagination:none;
	mso-outline-level:2;
	font-size:14.0pt;
	font-family:"Calibri",sans-serif;
	mso-fareast-font-family:Calibri;
	mso-bidi-font-family:Arial;
	mso-bidi-theme-font:minor-bidi;
	mso-ansi-language:EN-US;
	mso-fareast-language:EN-US;}
p.MsoHeader, li.MsoHeader, div.MsoHeader
	{mso-style-priority:99;
	mso-style-link:"\0631\0623\0633 \0627\0644\0635\0641\062D\0629 Char";
	margin:0cm;
	margin-bottom:.0001pt;
	mso-pagination:none;
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
	mso-pagination:none;
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
span.1Char
	{mso-style-name:"\0627\0644\0639\0646\0648\0627\0646 1 Char";
	mso-style-priority:9;
	mso-style-unhide:no;
	mso-style-locked:yes;
	mso-style-link:"\0627\0644\0639\0646\0648\0627\0646 1";
	mso-ansi-font-size:16.0pt;
	mso-bidi-font-size:16.0pt;
	font-family:"Times New Roman",serif;
	mso-ascii-font-family:"Times New Roman";
	mso-fareast-font-family:"Times New Roman";
	mso-hansi-font-family:"Times New Roman";
	font-weight:bold;}
span.2Char
	{mso-style-name:"\0639\0646\0648\0627\0646 2 Char";
	mso-style-priority:9;
	mso-style-unhide:no;
	mso-style-locked:yes;
	mso-style-link:"\0639\0646\0648\0627\0646 2";
	mso-ansi-font-size:14.0pt;
	mso-bidi-font-size:14.0pt;
	font-family:"Calibri",sans-serif;
	mso-ascii-font-family:Calibri;
	mso-fareast-font-family:Calibri;
	mso-hansi-font-family:Calibri;
	font-weight:bold;}
p.TableParagraph, li.TableParagraph, div.TableParagraph
	{mso-style-name:"Table Paragraph";
	mso-style-priority:1;
	mso-style-unhide:no;
	mso-style-qformat:yes;
	margin:0cm;
	margin-bottom:.0001pt;
	mso-pagination:none;
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
	{mso-footnote-separator:url("F073-THHC%20Notification%20Form%20of%20TB.files/header.htm") fs;
	mso-footnote-continuation-separator:url("F073-THHC%20Notification%20Form%20of%20TB.files/header.htm") fcs;
	mso-endnote-separator:url("F073-THHC%20Notification%20Form%20of%20TB.files/header.htm") es;
	mso-endnote-continuation-separator:url("F073-THHC%20Notification%20Form%20of%20TB.files/header.htm") ecs;}
@page WordSection1
	{size:612.0pt 792.0pt;
	margin:72.0pt 72.0pt 72.0pt 72.0pt;
	mso-header-margin:36.0pt;
	mso-footer-margin:36.0pt;
	mso-header:url("F073-THHC%20Notification%20Form%20of%20TB.files/header.htm") h1;
	mso-footer:url("F073-THHC%20Notification%20Form%20of%20TB.files/header.htm") f1;
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
</style>
@yield('styles')

</head>

<body lang=EN-GB style='tab-interval:36.0pt'>

<div class=WordSection1>

<p class=MsoNormal><b><span lang=EN-US style='font-size:12.0pt;font-family:
Montserrat;mso-fareast-font-family:Calibri;mso-bidi-font-family:"Times New Roman";
mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></b></p>

<p class=MsoNormal><b><span lang=EN-US style='font-size:12.0pt;font-family:
Montserrat;mso-fareast-font-family:Calibri;mso-bidi-font-family:"Times New Roman";
mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></b></p>

<table class=MsoNormalTable border=0 cellspacing=0 cellpadding=0 align=left
 width=806 style='width:604.15pt;border-collapse:collapse;mso-yfti-tbllook:
 480;mso-table-lspace:9.0pt;margin-left:6.75pt;mso-table-rspace:9.0pt;
 margin-right:6.75pt;mso-table-anchor-vertical:paragraph;mso-table-anchor-horizontal:
 margin;mso-table-left:left;mso-table-top:3.35pt;mso-padding-alt:0cm 0cm 0cm 0cm'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;height:21.5pt'>
  <td width=806 colspan=2 valign=top style='width:604.15pt;border:solid black 1.0pt;
  mso-border-alt:solid black .75pt;padding:0cm 0cm 0cm 0cm;height:21.5pt'>
  <p class=TableParagraph style='margin-top:.9pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:5.35pt;margin-bottom:.0001pt;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:paragraph;
  mso-element-anchor-horizontal:margin;mso-element-top:3.35pt;mso-height-rule:
  exactly'><span lang=EN-US style='font-size:12.0pt;mso-bidi-font-size:10.0pt;
  font-family:"Montserrat SemiBold";letter-spacing:-.05pt;mso-bidi-font-weight:
  bold'>Name:</span><span lang=EN-US style='font-size:12.0pt;mso-bidi-font-size:
  10.0pt;font-family:"Montserrat SemiBold";mso-fareast-font-family:Calibri;
  mso-bidi-font-family:Calibri;mso-bidi-font-weight:bold'><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:1;height:21.55pt'>
  <td width=806 colspan=2 valign=top style='width:604.15pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .75pt;mso-border-alt:solid black .75pt;
  padding:0cm 0cm 0cm 0cm;height:21.55pt'>
  <p class=TableParagraph style='margin-top:1.0pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:5.35pt;margin-bottom:.0001pt;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:paragraph;
  mso-element-anchor-horizontal:margin;mso-element-top:3.35pt;mso-height-rule:
  exactly'><span lang=EN-US style='font-size:12.0pt;mso-bidi-font-size:10.0pt;
  font-family:"Montserrat SemiBold";mso-bidi-font-weight:bold'>File<span
  style='letter-spacing:-.05pt'> Number:</span></span><span lang=EN-US
  style='font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:"Montserrat SemiBold";
  mso-fareast-font-family:Calibri;mso-bidi-font-family:Calibri;mso-bidi-font-weight:
  bold'><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:2;height:21.75pt'>
  <td width=316 valign=top style='width:236.75pt;border-top:none;border-left:
  solid black 1.0pt;border-bottom:solid black 1.0pt;border-right:none;
  mso-border-top-alt:solid black .75pt;mso-border-top-alt:solid black .75pt;
  mso-border-left-alt:solid black .75pt;mso-border-bottom-alt:solid black .75pt;
  padding:0cm 0cm 0cm 0cm;height:21.75pt'>
  <p class=TableParagraph style='margin-top:1.0pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:5.35pt;margin-bottom:.0001pt;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:paragraph;
  mso-element-anchor-horizontal:margin;mso-element-top:3.35pt;mso-height-rule:
  exactly'><span lang=EN-US style='font-size:12.0pt;mso-bidi-font-size:10.0pt;
  font-family:"Montserrat SemiBold";letter-spacing:-.05pt;mso-bidi-font-weight:
  bold'>Age:</span><span lang=EN-US style='font-size:12.0pt;mso-bidi-font-size:
  10.0pt;font-family:"Montserrat SemiBold";mso-fareast-font-family:Calibri;
  mso-bidi-font-family:Calibri;mso-bidi-font-weight:bold'><o:p></o:p></span></p>
  </td>
  <td width=490 valign=top style='width:367.35pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .75pt;mso-border-top-alt:solid black .75pt;
  mso-border-bottom-alt:solid black .75pt;mso-border-right-alt:solid black .75pt;
  padding:0cm 0cm 0cm 0cm;height:21.75pt'>
  <p class=TableParagraph style='margin-top:1.0pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:63.4pt;margin-bottom:.0001pt;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:paragraph;
  mso-element-anchor-horizontal:margin;mso-element-top:3.35pt;mso-height-rule:
  exactly'><span lang=EN-US style='font-size:12.0pt;mso-bidi-font-size:10.0pt;
  font-family:"Montserrat SemiBold";letter-spacing:-.05pt;mso-bidi-font-weight:
  bold'>Sex:</span><span lang=EN-US style='font-size:12.0pt;mso-bidi-font-size:
  10.0pt;font-family:"Montserrat SemiBold";mso-fareast-font-family:Calibri;
  mso-bidi-font-family:Calibri;mso-bidi-font-weight:bold'><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:3;height:21.55pt'>
  <td width=806 colspan=2 valign=top style='width:604.15pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .75pt;mso-border-alt:solid black .75pt;
  padding:0cm 0cm 0cm 0cm;height:21.55pt'>
  <p class=TableParagraph style='margin-top:1.0pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:5.35pt;margin-bottom:.0001pt;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:paragraph;
  mso-element-anchor-horizontal:margin;mso-element-top:3.35pt;mso-height-rule:
  exactly'><span lang=EN-US style='font-size:12.0pt;mso-bidi-font-size:10.0pt;
  font-family:"Montserrat SemiBold";letter-spacing:-.05pt;mso-bidi-font-weight:
  bold'>Nationality:</span><span lang=EN-US style='font-size:12.0pt;mso-bidi-font-size:
  10.0pt;font-family:"Montserrat SemiBold";mso-fareast-font-family:Calibri;
  mso-bidi-font-family:Calibri;mso-bidi-font-weight:bold'><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:4;height:21.55pt'>
  <td width=316 valign=top style='width:236.75pt;border-top:none;border-left:
  solid black 1.0pt;border-bottom:solid black 1.0pt;border-right:none;
  mso-border-top-alt:solid black .75pt;mso-border-top-alt:solid black .75pt;
  mso-border-left-alt:solid black .75pt;mso-border-bottom-alt:solid black .75pt;
  padding:0cm 0cm 0cm 0cm;height:21.55pt'>
  <p class=TableParagraph style='margin-top:1.0pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:5.35pt;margin-bottom:.0001pt;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:paragraph;
  mso-element-anchor-horizontal:margin;mso-element-top:3.35pt;mso-height-rule:
  exactly'><span lang=EN-US style='font-size:12.0pt;mso-bidi-font-size:10.0pt;
  font-family:"Montserrat SemiBold";letter-spacing:-.05pt;mso-bidi-font-weight:
  bold'>Location:<o:p></o:p></span></p>
  </td>
  <td width=490 valign=top style='width:367.35pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .75pt;mso-border-top-alt:solid black .75pt;
  mso-border-bottom-alt:solid black .75pt;mso-border-right-alt:solid black .75pt;
  padding:0cm 0cm 0cm 0cm;height:21.55pt'>
  <p class=TableParagraph style='margin-top:1.0pt;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:paragraph;
  mso-element-anchor-horizontal:margin;mso-element-top:3.35pt;mso-height-rule:
  exactly'><span lang=EN-US style='font-size:12.0pt;mso-bidi-font-size:10.0pt;
  font-family:"Montserrat SemiBold";letter-spacing:-.05pt;mso-bidi-font-weight:
  bold'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:5;height:21.55pt'>
  <td width=806 colspan=2 valign=top style='width:604.15pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .75pt;mso-border-alt:solid black .75pt;
  padding:0cm 0cm 0cm 0cm;height:21.55pt'>
  <p class=TableParagraph style='margin-top:1.0pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:5.35pt;margin-bottom:.0001pt;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:paragraph;
  mso-element-anchor-horizontal:margin;mso-element-top:3.35pt;mso-height-rule:
  exactly'><span lang=EN-US style='font-size:12.0pt;mso-bidi-font-size:10.0pt;
  font-family:"Montserrat SemiBold";letter-spacing:-.05pt;mso-bidi-font-weight:
  bold'>Saudi National I.D./</span><span lang=EN-US style='font-size:12.0pt;
  mso-bidi-font-size:10.0pt;font-family:"Montserrat SemiBold";letter-spacing:
  -.1pt;mso-bidi-font-weight:bold'> </span><span lang=EN-US style='font-size:
  12.0pt;mso-bidi-font-size:10.0pt;font-family:"Montserrat SemiBold";
  letter-spacing:-.05pt;mso-bidi-font-weight:bold'>Iqama:</span><span
  lang=EN-US style='font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:
  "Montserrat SemiBold";mso-fareast-font-family:Calibri;mso-bidi-font-family:
  Calibri;mso-bidi-font-weight:bold'><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:6;height:21.75pt'>
  <td width=806 colspan=2 valign=top style='width:604.15pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .75pt;mso-border-alt:solid black .75pt;
  padding:0cm 0cm 0cm 0cm;height:21.75pt'>
  <p class=TableParagraph style='margin-top:1.0pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:5.35pt;margin-bottom:.0001pt;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:paragraph;
  mso-element-anchor-horizontal:margin;mso-element-top:3.35pt;mso-height-rule:
  exactly'><span lang=EN-US style='font-size:12.0pt;mso-bidi-font-size:10.0pt;
  font-family:"Montserrat SemiBold";letter-spacing:-.05pt;mso-bidi-font-weight:
  bold'>Occupation:</span><span lang=EN-US style='font-size:12.0pt;mso-bidi-font-size:
  10.0pt;font-family:"Montserrat SemiBold";mso-fareast-font-family:Calibri;
  mso-bidi-font-family:Calibri;mso-bidi-font-weight:bold'><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:7;height:21.55pt'>
  <td width=806 colspan=2 valign=top style='width:604.15pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .75pt;mso-border-alt:solid black .75pt;
  padding:0cm 0cm 0cm 0cm;height:21.55pt'>
  <p class=TableParagraph style='margin-top:1.0pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:5.35pt;margin-bottom:.0001pt;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:paragraph;
  mso-element-anchor-horizontal:margin;mso-element-top:3.35pt;mso-height-rule:
  exactly'><span lang=EN-US style='font-size:12.0pt;mso-bidi-font-size:10.0pt;
  font-family:"Montserrat SemiBold";letter-spacing:-.05pt;mso-bidi-font-weight:
  bold'>Contact</span><span lang=EN-US style='font-size:12.0pt;mso-bidi-font-size:
  10.0pt;font-family:"Montserrat SemiBold";mso-bidi-font-weight:bold'> <span
  style='letter-spacing:-.05pt'>#:</span></span><span lang=EN-US
  style='font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:"Montserrat SemiBold";
  mso-fareast-font-family:Calibri;mso-bidi-font-family:Calibri;mso-bidi-font-weight:
  bold'><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:8;height:21.55pt'>
  <td width=806 colspan=2 valign=top style='width:604.15pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .75pt;mso-border-alt:solid black .75pt;
  padding:0cm 0cm 0cm 0cm;height:21.55pt'>
  <p class=TableParagraph style='margin-top:1.0pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:5.35pt;margin-bottom:.0001pt;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:paragraph;
  mso-element-anchor-horizontal:margin;mso-element-top:3.35pt;mso-height-rule:
  exactly'><span lang=EN-US style='font-size:12.0pt;mso-bidi-font-size:10.0pt;
  font-family:"Montserrat SemiBold";letter-spacing:-.05pt;mso-bidi-font-weight:
  bold'>Address:</span><span lang=EN-US style='font-size:12.0pt;mso-bidi-font-size:
  10.0pt;font-family:"Montserrat SemiBold";mso-fareast-font-family:Calibri;
  mso-bidi-font-family:Calibri;mso-bidi-font-weight:bold'><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:9;height:21.55pt'>
  <td width=806 colspan=2 valign=top style='width:604.15pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .75pt;mso-border-alt:solid black .75pt;
  padding:0cm 0cm 0cm 0cm;height:21.55pt'>
  <p class=TableParagraph style='margin-top:1.0pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:5.35pt;margin-bottom:.0001pt;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:paragraph;
  mso-element-anchor-horizontal:margin;mso-element-top:3.35pt;mso-height-rule:
  exactly'><span lang=EN-US style='font-size:12.0pt;mso-bidi-font-size:10.0pt;
  font-family:"Montserrat SemiBold";letter-spacing:-.05pt;mso-bidi-font-weight:
  bold'>PHCC:</span><span lang=EN-US style='font-size:12.0pt;mso-bidi-font-size:
  10.0pt;font-family:"Montserrat SemiBold";mso-fareast-font-family:Calibri;
  mso-bidi-font-family:Calibri;mso-bidi-font-weight:bold'><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:10;height:21.75pt'>
  <td width=806 colspan=2 valign=top style='width:604.15pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .75pt;mso-border-alt:solid black .75pt;
  padding:0cm 0cm 0cm 0cm;height:21.75pt'>
  <p class=TableParagraph style='margin-top:1.0pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:5.35pt;margin-bottom:.0001pt;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:paragraph;
  mso-element-anchor-horizontal:margin;mso-element-top:3.35pt;mso-height-rule:
  exactly'><span lang=EN-US style='font-size:12.0pt;mso-bidi-font-size:10.0pt;
  font-family:"Montserrat SemiBold";letter-spacing:-.05pt;mso-bidi-font-weight:
  bold'>Date </span><span lang=EN-US style='font-size:12.0pt;mso-bidi-font-size:
  10.0pt;font-family:"Montserrat SemiBold";mso-bidi-font-weight:bold'>of<span
  style='letter-spacing:-.05pt'> onset</span> of<span style='letter-spacing:
  -.05pt'> symptoms:</span></span><span lang=EN-US style='font-size:12.0pt;
  mso-bidi-font-size:10.0pt;font-family:"Montserrat SemiBold";mso-fareast-font-family:
  Calibri;mso-bidi-font-family:Calibri;mso-bidi-font-weight:bold'><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:11;height:21.55pt'>
  <td width=806 colspan=2 valign=top style='width:604.15pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .75pt;mso-border-alt:solid black .75pt;
  padding:0cm 0cm 0cm 0cm;height:21.55pt'>
  <p class=TableParagraph style='margin-top:1.0pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:5.35pt;margin-bottom:.0001pt;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:paragraph;
  mso-element-anchor-horizontal:margin;mso-element-top:3.35pt;mso-height-rule:
  exactly'><span lang=EN-US style='font-size:12.0pt;mso-bidi-font-size:10.0pt;
  font-family:"Montserrat SemiBold";letter-spacing:-.05pt;mso-bidi-font-weight:
  bold'>Symptoms:</span><span lang=EN-US style='font-size:12.0pt;mso-bidi-font-size:
  10.0pt;font-family:"Montserrat SemiBold";mso-fareast-font-family:Calibri;
  mso-bidi-font-family:Calibri;mso-bidi-font-weight:bold'><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:12;height:21.55pt'>
  <td width=806 colspan=2 valign=top style='width:604.15pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .75pt;mso-border-alt:solid black .75pt;
  padding:0cm 0cm 0cm 0cm;height:21.55pt'>
  <p class=TableParagraph style='margin-top:1.0pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:5.35pt;margin-bottom:.0001pt;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:paragraph;
  mso-element-anchor-horizontal:margin;mso-element-top:3.35pt;mso-height-rule:
  exactly'><span lang=EN-US style='font-size:12.0pt;mso-bidi-font-size:10.0pt;
  font-family:"Montserrat SemiBold";letter-spacing:-.05pt;mso-bidi-font-weight:
  bold'>Date </span><span lang=EN-US style='font-size:12.0pt;mso-bidi-font-size:
  10.0pt;font-family:"Montserrat SemiBold";mso-bidi-font-weight:bold'>of<span
  style='letter-spacing:-.05pt'> Admission:</span></span><span lang=EN-US
  style='font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:"Montserrat SemiBold";
  mso-fareast-font-family:Calibri;mso-bidi-font-family:Calibri;mso-bidi-font-weight:
  bold'><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:13;mso-yfti-lastrow:yes;height:21.75pt'>
  <td width=806 colspan=2 valign=top style='width:604.15pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .75pt;mso-border-alt:solid black .75pt;
  padding:0cm 0cm 0cm 0cm;height:21.75pt'>
  <p class=TableParagraph style='margin-top:1.0pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:5.35pt;margin-bottom:.0001pt;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:paragraph;
  mso-element-anchor-horizontal:margin;mso-element-top:3.35pt;mso-height-rule:
  exactly'><span lang=EN-US style='font-size:12.0pt;mso-bidi-font-size:10.0pt;
  font-family:"Montserrat SemiBold";letter-spacing:-.05pt;mso-bidi-font-weight:
  bold'>Diagnosis:</span><span lang=EN-US style='font-size:12.0pt;mso-bidi-font-size:
  10.0pt;font-family:"Montserrat SemiBold";mso-fareast-font-family:Calibri;
  mso-bidi-font-family:Calibri;mso-bidi-font-weight:bold'><o:p></o:p></span></p>
  </td>
 </tr>
</table>

<h2 style='margin-top:2.2pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;tab-stops:0cm 309.95pt'><span lang=EN-US
style='font-size:12.0pt;font-family:"Montserrat SemiBold";mso-bidi-font-family:
"Times New Roman";mso-bidi-theme-font:major-bidi;letter-spacing:-.05pt;
font-weight:normal'><o:p>&nbsp;</o:p></span></h2>

<h2 style='margin-top:2.2pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;tab-stops:309.95pt'><span lang=EN-US
style='font-size:12.0pt;font-family:"Montserrat SemiBold";mso-bidi-font-family:
"Times New Roman";mso-bidi-theme-font:major-bidi;letter-spacing:-.05pt;
font-weight:normal'>Extrapulmonary</span><span lang=EN-US style='font-size:
12.0pt;font-family:"Montserrat SemiBold";mso-bidi-font-family:"Times New Roman";
mso-bidi-theme-font:major-bidi;letter-spacing:-.1pt;font-weight:normal'> </span><span
lang=EN-US style='font-size:12.0pt;font-family:"Montserrat SemiBold";
mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi;
font-weight:normal'>TB<span style='mso-spacerun:yes'>� </span></span><span
lang=EN-US style='font-size:12.0pt;font-family:Symbol;mso-ascii-font-family:
"Montserrat SemiBold";mso-hansi-font-family:"Montserrat SemiBold";mso-bidi-font-family:
"Times New Roman";mso-bidi-theme-font:major-bidi;mso-char-type:symbol;
mso-symbol-font-family:Symbol;font-weight:normal'><span style='mso-char-type:
symbol;mso-symbol-font-family:Symbol'>&nbsp;</span></span><span lang=EN-US
style='font-size:12.0pt;font-family:"Montserrat SemiBold";mso-bidi-font-family:
"Times New Roman";mso-bidi-theme-font:major-bidi;font-weight:normal'><span
style='mso-spacerun:yes'>��� </span><span
style='mso-spacerun:yes'>������������������������������������</span><span
style='letter-spacing:-.05pt'>Pulmonary</span><span style='letter-spacing:-.1pt'>
TB</span><span style='mso-spacerun:yes'>� </span></span><span lang=EN-US
style='font-size:12.0pt;font-family:Symbol;mso-ascii-font-family:"Montserrat SemiBold";
mso-hansi-font-family:"Montserrat SemiBold";mso-bidi-font-family:"Times New Roman";
mso-bidi-theme-font:major-bidi;mso-char-type:symbol;mso-symbol-font-family:
Symbol;font-weight:normal'><span style='mso-char-type:symbol;mso-symbol-font-family:
Symbol'>&nbsp;</span></span><span lang=EN-US style='font-size:12.0pt;
font-family:"Montserrat SemiBold";mso-bidi-font-family:"Times New Roman";
mso-bidi-theme-font:major-bidi;font-weight:normal'><o:p></o:p></span></h2>

<h2 style='margin-top:2.2pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;tab-stops:309.95pt'><span lang=EN-US
style='font-size:12.0pt;font-family:"Montserrat SemiBold";letter-spacing:-.05pt;
font-weight:normal'>HIV</span><span lang=EN-US style='font-size:12.0pt;
font-family:"Montserrat SemiBold";letter-spacing:-.1pt;font-weight:normal'> </span><span
lang=EN-US style='font-size:12.0pt;font-family:"Montserrat SemiBold";
letter-spacing:-.05pt;font-weight:normal'>infection:</span><span lang=EN-US
style='font-size:12.0pt;font-family:"Montserrat SemiBold";mso-bidi-font-family:
"Times New Roman";mso-bidi-theme-font:major-bidi;font-weight:normal'><span
style='mso-spacerun:yes'>�� </span></span><span lang=EN-US style='font-size:
12.0pt;font-family:Symbol;mso-ascii-font-family:"Montserrat SemiBold";
mso-hansi-font-family:"Montserrat SemiBold";mso-bidi-font-family:"Times New Roman";
mso-bidi-theme-font:major-bidi;mso-char-type:symbol;mso-symbol-font-family:
Symbol;font-weight:normal'><span style='mso-char-type:symbol;mso-symbol-font-family:
Symbol'>&nbsp;</span></span><span lang=EN-US style='font-size:12.0pt;
font-family:"Montserrat SemiBold";mso-bidi-font-family:"Times New Roman";
mso-bidi-theme-font:major-bidi;font-weight:normal'><span
style='mso-spacerun:yes'>� </span>YES<span style='mso-spacerun:yes'>� </span></span><span
lang=EN-US style='font-size:12.0pt;font-family:Symbol;mso-ascii-font-family:
"Montserrat SemiBold";mso-hansi-font-family:"Montserrat SemiBold";mso-bidi-font-family:
"Times New Roman";mso-bidi-theme-font:major-bidi;mso-char-type:symbol;
mso-symbol-font-family:Symbol;font-weight:normal'><span style='mso-char-type:
symbol;mso-symbol-font-family:Symbol'>&nbsp;</span></span><span lang=EN-US
style='font-size:12.0pt;font-family:"Montserrat SemiBold";mso-bidi-font-family:
"Times New Roman";mso-bidi-theme-font:major-bidi;font-weight:normal'><span
style='mso-spacerun:yes'>� </span>NO<o:p></o:p></span></h2>

<h2 style='margin-top:2.2pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;tab-stops:309.95pt'><span lang=EN-US
style='font-size:12.0pt;font-family:"Montserrat SemiBold";letter-spacing:-.05pt;
font-weight:normal'>Hepatitis:</span><span lang=EN-US style='font-size:12.0pt;
font-family:"Montserrat SemiBold";mso-bidi-font-family:"Times New Roman";
mso-bidi-theme-font:major-bidi;font-weight:normal'><span
style='mso-spacerun:yes'>�������� </span><span
style='mso-spacerun:yes'>�</span><span style='mso-spacerun:yes'>�</span></span><span
lang=EN-US style='font-size:12.0pt;font-family:Symbol;mso-ascii-font-family:
"Montserrat SemiBold";mso-hansi-font-family:"Montserrat SemiBold";mso-bidi-font-family:
"Times New Roman";mso-bidi-theme-font:major-bidi;mso-char-type:symbol;
mso-symbol-font-family:Symbol;font-weight:normal'><span style='mso-char-type:
symbol;mso-symbol-font-family:Symbol'>&nbsp;</span></span><span lang=EN-US
style='font-size:12.0pt;font-family:"Montserrat SemiBold";mso-bidi-font-family:
"Times New Roman";mso-bidi-theme-font:major-bidi;font-weight:normal'><span
style='mso-spacerun:yes'>� </span>YES<span style='mso-spacerun:yes'>� </span></span><span
lang=EN-US style='font-size:12.0pt;font-family:Symbol;mso-ascii-font-family:
"Montserrat SemiBold";mso-hansi-font-family:"Montserrat SemiBold";mso-bidi-font-family:
"Times New Roman";mso-bidi-theme-font:major-bidi;mso-char-type:symbol;
mso-symbol-font-family:Symbol;font-weight:normal'><span style='mso-char-type:
symbol;mso-symbol-font-family:Symbol'>&nbsp;</span></span><span lang=EN-US
style='font-size:12.0pt;font-family:"Montserrat SemiBold";mso-bidi-font-family:
"Times New Roman";mso-bidi-theme-font:major-bidi;font-weight:normal'><span
style='mso-spacerun:yes'>� </span>NO</span><span lang=EN-US style='font-size:
12.0pt;font-family:"Montserrat SemiBold";letter-spacing:-.05pt;font-weight:
normal'><span style='mso-spacerun:yes'>����������������������������
</span>Hepatitis:</span><span lang=EN-US style='font-size:12.0pt;font-family:
"Montserrat SemiBold";font-weight:normal'><span style='mso-spacerun:yes'>��
</span></span><span lang=EN-US style='font-size:12.0pt;font-family:Symbol;
mso-ascii-font-family:"Montserrat SemiBold";mso-hansi-font-family:"Montserrat SemiBold";
mso-char-type:symbol;mso-symbol-font-family:Symbol;font-weight:normal'><span
style='mso-char-type:symbol;mso-symbol-font-family:Symbol'>&nbsp;</span></span><span
lang=EN-US style='font-size:12.0pt;font-family:"Montserrat SemiBold";
font-weight:normal'> B<span style='mso-spacerun:yes'>����� </span></span><span
lang=EN-US style='font-size:12.0pt;font-family:Symbol;mso-ascii-font-family:
"Montserrat SemiBold";mso-hansi-font-family:"Montserrat SemiBold";mso-char-type:
symbol;mso-symbol-font-family:Symbol;font-weight:normal'><span
style='mso-char-type:symbol;mso-symbol-font-family:Symbol'>&nbsp;</span></span><span
lang=EN-US style='font-size:12.0pt;font-family:"Montserrat SemiBold";
font-weight:normal'> C</span><span lang=EN-US style='font-size:12.0pt;
font-family:"Montserrat SemiBold";mso-bidi-font-family:"Times New Roman";
mso-bidi-theme-font:major-bidi;font-weight:normal'><o:p></o:p></span></h2>

<h2 style='margin-top:2.2pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;tab-stops:309.95pt'><span lang=EN-US
style='font-size:12.0pt;font-family:"Montserrat SemiBold";mso-bidi-font-family:
"Times New Roman";mso-bidi-theme-font:major-bidi;font-weight:normal'><o:p>&nbsp;</o:p></span></h2>

<h2 style='margin-top:2.2pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;tab-stops:309.95pt'><span lang=EN-US
style='font-size:12.0pt;font-family:"Montserrat SemiBold";mso-bidi-font-family:
"Times New Roman";mso-bidi-theme-font:major-bidi;letter-spacing:-.05pt;
font-weight:normal'>Specimen Sample:<o:p></o:p></span></h2>

<h2 style='margin-top:2.2pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;tab-stops:309.95pt'><span lang=EN-US
style='font-size:12.0pt;font-family:"Montserrat SemiBold";mso-bidi-font-family:
"Times New Roman";mso-bidi-theme-font:major-bidi;letter-spacing:-.05pt;
font-weight:normal'>Date </span><span lang=EN-US style='font-size:12.0pt;
font-family:"Montserrat SemiBold";mso-bidi-font-family:"Times New Roman";
mso-bidi-theme-font:major-bidi;font-weight:normal'>of<span style='letter-spacing:
-.05pt'> Sample Collection:</span><span style='letter-spacing:1.45pt'><o:p></o:p></span></span></h2>

<h2 style='margin-top:2.2pt;margin-right:0cm;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;tab-stops:309.95pt'><span lang=EN-US
style='font-size:12.0pt;font-family:"Montserrat SemiBold";mso-bidi-font-family:
"Times New Roman";mso-bidi-theme-font:major-bidi;letter-spacing:1.45pt;
font-weight:normal'><span style='mso-spacerun:yes'>�</span></span><span
lang=EN-US style='font-size:12.0pt;font-family:"Montserrat SemiBold";
mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi;
letter-spacing:-.05pt;font-weight:normal'>Laboratory</span><span lang=EN-US
style='font-size:12.0pt;font-family:"Montserrat SemiBold";mso-bidi-font-family:
"Times New Roman";mso-bidi-theme-font:major-bidi;letter-spacing:-.1pt;
font-weight:normal'> </span><span lang=EN-US style='font-size:12.0pt;
font-family:"Montserrat SemiBold";mso-bidi-font-family:"Times New Roman";
mso-bidi-theme-font:major-bidi;letter-spacing:-.05pt;font-weight:normal'>Tests:</span><span
lang=EN-US style='font-size:12.0pt;font-family:"Montserrat SemiBold";
mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi;
font-weight:normal'><o:p></o:p></span></h2>

<p class=MsoNormal style='margin-left:35.95pt;line-height:17.05pt;mso-line-height-rule:
exactly;tab-stops:0cm 150.2pt 217.4pt 252.1pt'><span lang=EN-US
style='font-size:12.0pt;font-family:"Montserrat SemiBold";mso-bidi-font-family:
"Times New Roman";mso-bidi-theme-font:major-bidi'>AFB </span><span lang=EN-US
style='font-size:12.0pt;font-family:Symbol;mso-ascii-font-family:"Montserrat SemiBold";
mso-hansi-font-family:"Montserrat SemiBold";mso-bidi-font-family:"Times New Roman";
mso-bidi-theme-font:major-bidi;mso-char-type:symbol;mso-symbol-font-family:
Symbol'><span style='mso-char-type:symbol;mso-symbol-font-family:Symbol'>&nbsp;</span></span><span
lang=EN-US style='font-size:12.0pt;font-family:"Montserrat SemiBold";
mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi'><span
style='mso-tab-count:1'>��������������������������� </span><span
style='letter-spacing:-.05pt'>PCR </span></span><span lang=EN-US
style='font-size:12.0pt;font-family:Symbol;mso-ascii-font-family:"Montserrat SemiBold";
mso-hansi-font-family:"Montserrat SemiBold";mso-bidi-font-family:"Times New Roman";
mso-bidi-theme-font:major-bidi;letter-spacing:-.05pt;mso-char-type:symbol;
mso-symbol-font-family:Symbol'><span style='mso-char-type:symbol;mso-symbol-font-family:
Symbol'>&nbsp;</span></span><span lang=EN-US style='font-size:12.0pt;
font-family:"Montserrat SemiBold";mso-bidi-font-family:"Times New Roman";
mso-bidi-theme-font:major-bidi;letter-spacing:-.05pt'><span style='mso-tab-count:
2'>����������������������� </span></span><span lang=EN-US style='font-size:
12.0pt;font-family:"Montserrat SemiBold";mso-bidi-font-family:"Times New Roman";
mso-bidi-theme-font:major-bidi'>Culture<span style='letter-spacing:-.15pt'> </span>and<span
style='letter-spacing:-.05pt'> Sensitivity</span></span><span lang=EN-US
style='font-size:12.0pt;font-family:"Montserrat SemiBold";mso-fareast-font-family:
Calibri;mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi'><span
style='mso-spacerun:yes'>� </span></span><span lang=EN-US style='font-size:
12.0pt;font-family:Symbol;mso-ascii-font-family:"Montserrat SemiBold";
mso-fareast-font-family:Calibri;mso-hansi-font-family:"Montserrat SemiBold";
mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi;
mso-char-type:symbol;mso-symbol-font-family:Symbol'><span style='mso-char-type:
symbol;mso-symbol-font-family:Symbol'>&nbsp;</span></span><a
name="_Hlk126595440"><span lang=EN-US style='font-size:12.0pt;font-family:"Montserrat SemiBold";
mso-fareast-font-family:Calibri;mso-bidi-font-family:"Times New Roman";
mso-bidi-theme-font:major-bidi'><o:p></o:p></span></a></p>

<p class=MsoNormal style='margin-left:35.95pt;line-height:17.05pt;mso-line-height-rule:
exactly;tab-stops:0cm 150.2pt 217.4pt 252.1pt'><span style='mso-bookmark:_Hlk126595440'><span
lang=EN-US style='font-size:12.0pt;font-family:"Montserrat SemiBold";
mso-fareast-font-family:Calibri;mso-bidi-font-family:"Times New Roman";
mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></span></p>

<p class=MsoNormal style='margin-left:35.95pt;line-height:17.05pt;mso-line-height-rule:
exactly;tab-stops:0cm 150.2pt 217.4pt 252.1pt'><span style='mso-bookmark:_Hlk126595440'><span
lang=EN-US style='font-size:12.0pt;font-family:"Montserrat SemiBold";
mso-fareast-font-family:Calibri;mso-bidi-font-family:"Times New Roman";
mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></span></p>

<p class=MsoNormal style='margin-left:35.95pt;line-height:17.05pt;mso-line-height-rule:
exactly;tab-stops:0cm 150.2pt 217.4pt 252.1pt'><span style='mso-bookmark:_Hlk126595440'><span
lang=EN-US style='font-size:12.0pt;font-family:"Montserrat SemiBold";
mso-fareast-font-family:Calibri;mso-bidi-font-family:"Times New Roman";
mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></span></p>

<p class=MsoNormal style='line-height:17.05pt;mso-line-height-rule:exactly;
tab-stops:0cm 150.2pt 217.4pt 252.1pt'><span style='mso-bookmark:_Hlk126595440'><span
lang=EN-US style='font-size:12.0pt;font-family:"Montserrat SemiBold";
mso-fareast-font-family:Calibri;mso-bidi-font-family:Calibri;letter-spacing:
-.05pt'>Physician�s Name and Signature:
_________________________________________</span></span><span style='mso-bookmark:
_Hlk126595440'><span lang=EN-US style='font-size:12.0pt;font-family:"Montserrat SemiBold";
mso-fareast-font-family:Calibri;mso-bidi-font-family:"Times New Roman";
mso-bidi-theme-font:major-bidi'><o:p></o:p></span></span></p>

<span style='mso-bookmark:_Hlk126595440'></span>

<p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>

</div>

</body>

</html>
