<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv=Content-Type content="text/html; charset=windows-1252">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<title>F037-THHC Temperature Monitoring Chart for Medication Transportation| @yield('title')</title>

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
	mso-pagination:widow-orphan;
	font-size:12.0pt;
	font-family:"Times New Roman",serif;
	mso-fareast-font-family:"Times New Roman";
	mso-ansi-language:EN-US;
	mso-fareast-language:EN-US;}
p.MsoHeader, li.MsoHeader, div.MsoHeader
	{mso-style-unhide:no;
	mso-style-link:"\0631\0623\0633 \0627\0644\0635\0641\062D\0629 Char";
	margin:0cm;
	margin-bottom:.0001pt;
	mso-pagination:widow-orphan;
	tab-stops:center 234.0pt right 468.0pt;
	font-size:12.0pt;
	font-family:"Times New Roman",serif;
	mso-fareast-font-family:"Times New Roman";
	mso-ansi-language:EN-US;
	mso-fareast-language:EN-US;}
p.MsoFooter, li.MsoFooter, div.MsoFooter
	{mso-style-priority:99;
	mso-style-link:"\062A\0630\064A\064A\0644 \0627\0644\0635\0641\062D\0629 Char";
	margin:0cm;
	margin-bottom:.0001pt;
	mso-pagination:none;
	tab-stops:center 234.0pt right 468.0pt;
	mso-layout-grid-align:none;
	text-autospace:none;
	font-size:12.0pt;
	font-family:"Times New Roman",serif;
	mso-fareast-font-family:"Times New Roman";
	mso-ansi-language:EN-US;
	mso-fareast-language:EN-US;}
span.Char
	{mso-style-name:"\062A\0630\064A\064A\0644 \0627\0644\0635\0641\062D\0629 Char";
	mso-style-priority:99;
	mso-style-unhide:no;
	mso-style-locked:yes;
	mso-style-parent:"";
	mso-style-link:"\062A\0630\064A\064A\0644 \0627\0644\0635\0641\062D\0629";
	mso-ansi-font-size:12.0pt;
	mso-bidi-font-size:12.0pt;
	font-family:"Times New Roman",serif;
	mso-fareast-font-family:"Times New Roman";}
span.Char0
	{mso-style-name:"\0631\0623\0633 \0627\0644\0635\0641\062D\0629 Char";
	mso-style-unhide:no;
	mso-style-locked:yes;
	mso-style-parent:"";
	mso-style-link:"\0631\0623\0633 \0627\0644\0635\0641\062D\0629";
	mso-ansi-font-size:12.0pt;
	mso-bidi-font-size:12.0pt;}
.MsoChpDefault
	{mso-style-type:export-only;
	mso-default-props:yes;}
 /* Page Definitions */
 @page
	{mso-footnote-separator:url("F037-THHC%20Temperature%20Monitoring%20Chart%20for%20Medication%20Transportation.files/header.htm") fs;
	mso-footnote-continuation-separator:url("F037-THHC%20Temperature%20Monitoring%20Chart%20for%20Medication%20Transportation.files/header.htm") fcs;
	mso-endnote-separator:url("F037-THHC%20Temperature%20Monitoring%20Chart%20for%20Medication%20Transportation.files/header.htm") es;
	mso-endnote-continuation-separator:url("F037-THHC%20Temperature%20Monitoring%20Chart%20for%20Medication%20Transportation.files/header.htm") ecs;}
@page WordSection1
	{size:612.0pt 792.0pt;
	margin:27.0pt 36.0pt 18.0pt 27.0pt;
	mso-header-margin:0cm;
	mso-footer-margin:36.0pt;
	mso-header:url("F037-THHC%20Temperature%20Monitoring%20Chart%20for%20Medication%20Transportation.files/header.htm") h1;
	mso-footer:url("F037-THHC%20Temperature%20Monitoring%20Chart%20for%20Medication%20Transportation.files/header.htm") f1;
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
	mso-style-unhide:no;
	mso-style-parent:"";
	mso-padding-alt:0cm 5.4pt 0cm 5.4pt;
	mso-para-margin:0cm;
	mso-para-margin-bottom:.0001pt;
	mso-pagination:widow-orphan;
	font-size:10.0pt;
	font-family:"Times New Roman",serif;}
</style>
@yield('styles')

</head>

<body lang=EN-GB style='tab-interval:36.0pt'>

<div class=WordSection1>

<p class=MsoNormal style='text-indent:54.0pt'><b><span lang=EN-US></span></b></p>

<p class=MsoNormal style='text-indent:54.0pt'><b><span lang=EN-US></span></b></p>

<p class=MsoNormal><span lang=EN-US style='font-family:"Montserrat SemiBold"'>Nurse
Name: __________________________________Badge No: ______________</span></p>

<p class=MsoNormal style='text-indent:54.0pt'><b><span lang=EN-US
style='font-size:16.0pt'><span style='mso-spacerun:yes'> </span></span><span
lang=EN-US></span></b></p>

<p class=MsoNormal style='text-indent:54.0pt'><b><span lang=EN-US
style='font-size:18.0pt'></span></b></p>

<table class=MsoNormalTable border=0 cellspacing=0 cellpadding=0 width=737
 style='width:553.1pt;margin-left:5.4pt;border-collapse:collapse;mso-padding-alt:
 0cm 5.4pt 0cm 5.4pt'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;height:12.15pt'>
  <td width=73 nowrap valign=bottom style='width:54.45pt;border:solid windowtext 1.0pt;
  mso-border-alt:solid windowtext .5pt;background:#3AC2BA;padding:0cm 5.4pt 0cm 5.4pt;
  height:12.15pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-size:11.0pt;font-family:"Montserrat SemiBold";color:white'>DATE</span></p>
  </td>
  <td width=162 valign=bottom style='width:121.6pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;background:#3AC2BA;padding:0cm 5.4pt 0cm 5.4pt;
  height:12.15pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-size:11.0pt;font-family:"Montserrat SemiBold";color:white'>Medication
  name</span></p>
  </td>
  <td width=58 nowrap valign=bottom style='width:43.6pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-top-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;background:
  #3AC2BA;padding:0cm 5.4pt 0cm 5.4pt;height:12.15pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-size:11.0pt;font-family:"Montserrat SemiBold";color:white'>TIME <span
  style='mso-spacerun:yes'></span><span style='mso-spacerun:yes'></span><span
  style='mso-spacerun:yes'></span>IN</span></p>
  </td>
  <td width=53 nowrap colspan=2 valign=bottom style='width:39.7pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-top-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;background:
  #3AC2BA;padding:0cm 5.4pt 0cm 5.4pt;height:12.15pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-size:11.0pt;font-family:"Montserrat SemiBold";color:white'>TEMP</span></p>
  </td>
  <td width=97 nowrap valign=bottom style='width:72.6pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-top-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;background:
  #3AC2BA;padding:0cm 5.4pt 0cm 5.4pt;height:12.15pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-size:11.0pt;font-family:"Montserrat SemiBold";color:white'>MRN</span></p>
  </td>
  <td width=60 nowrap valign=bottom style='width:45.35pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-top-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;background:
  #3AC2BA;padding:0cm 5.4pt 0cm 5.4pt;height:12.15pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-size:11.0pt;font-family:"Montserrat SemiBold";color:white'>TIME
  OUT</span></p>
  </td>
  <td width=53 nowrap valign=bottom style='width:39.7pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-top-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;background:
  #3AC2BA;padding:0cm 5.4pt 0cm 5.4pt;height:12.15pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-size:11.0pt;font-family:"Montserrat SemiBold";color:white'>TEMP</span></p>
  </td>
  <td width=181 nowrap valign=bottom style='width:136.1pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-top-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;background:
  #3AC2BA;padding:0cm 5.4pt 0cm 5.4pt;height:12.15pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-size:11.0pt;font-family:"Montserrat SemiBold";color:white'>INITIALS/
  Badge No</span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:1;height:25.7pt'>
  <td width=73 nowrap valign=bottom style='width:54.45pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:25.7pt'>
  <p class=MsoNormal><span lang=EN-US style='font-size:8.0pt;font-family:"Arial",sans-serif'>&nbsp;</span></p>
  </td>
  <td width=162 valign=bottom style='width:121.6pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:25.7pt'>
  <p class=MsoNormal><span lang=EN-US style='font-size:8.0pt;font-family:"Arial",sans-serif'></span></p>
  </td>
  <td width=59 nowrap colspan=2 valign=bottom style='width:44.45pt;border-top:
  none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:25.7pt'>
  <p class=MsoNormal><span lang=EN-US style='font-size:8.0pt;font-family:"Arial",sans-serif'>&nbsp;</span></p>
  </td>
  <td width=52 nowrap valign=bottom style='width:38.85pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:25.7pt'>
  <p class=MsoNormal><span lang=EN-US style='font-size:8.0pt;font-family:"Arial",sans-serif'>&nbsp;</span></p>
  </td>
  <td width=97 nowrap valign=bottom style='width:72.6pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:25.7pt'>
  <p class=MsoNormal><span lang=EN-US style='font-size:8.0pt;font-family:"Arial",sans-serif'>&nbsp;</span></p>
  </td>
  <td width=60 nowrap valign=bottom style='width:45.35pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:25.7pt'>
  <p class=MsoNormal><span lang=EN-US style='font-size:8.0pt;font-family:"Arial",sans-serif'>&nbsp;</span></p>
  </td>
  <td width=53 nowrap valign=bottom style='width:39.7pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:25.7pt'>
  <p class=MsoNormal><span lang=EN-US style='font-size:8.0pt;font-family:"Arial",sans-serif'>&nbsp;</span></p>
  </td>
  <td width=181 nowrap valign=bottom style='width:136.1pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:25.7pt'>
  <p class=MsoNormal><span lang=EN-US style='font-size:8.0pt;font-family:"Arial",sans-serif'>&nbsp;</span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:2;height:23.55pt'>
  <td width=73 nowrap valign=bottom style='width:54.45pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:23.55pt'>
  <p class=MsoNormal><span lang=EN-US style='font-size:8.0pt;font-family:"Arial",sans-serif'>&nbsp;</span></p>
  </td>
  <td width=162 valign=bottom style='width:121.6pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:23.55pt'>
  <p class=MsoNormal><span lang=EN-US style='font-size:8.0pt;font-family:"Arial",sans-serif'></span></p>
  </td>
  <td width=59 nowrap colspan=2 valign=bottom style='width:44.45pt;border-top:
  none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:23.55pt'>
  <p class=MsoNormal><span lang=EN-US style='font-size:8.0pt;font-family:"Arial",sans-serif'>&nbsp;</span></p>
  </td>
  <td width=52 nowrap valign=bottom style='width:38.85pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:23.55pt'>
  <p class=MsoNormal><span lang=EN-US style='font-size:8.0pt;font-family:"Arial",sans-serif'>&nbsp;</span></p>
  </td>
  <td width=97 nowrap valign=bottom style='width:72.6pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:23.55pt'>
  <p class=MsoNormal><span lang=EN-US style='font-size:8.0pt;font-family:"Arial",sans-serif'>&nbsp;</span></p>
  </td>
  <td width=60 nowrap valign=bottom style='width:45.35pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:23.55pt'>
  <p class=MsoNormal><span lang=EN-US style='font-size:8.0pt;font-family:"Arial",sans-serif'>&nbsp;</span></p>
  </td>
  <td width=53 nowrap valign=bottom style='width:39.7pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:23.55pt'>
  <p class=MsoNormal><span lang=EN-US style='font-size:8.0pt;font-family:"Arial",sans-serif'>&nbsp;</span></p>
  </td>
  <td width=181 nowrap valign=bottom style='width:136.1pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:23.55pt'>
  <p class=MsoNormal><span lang=EN-US style='font-size:8.0pt;font-family:"Arial",sans-serif'>&nbsp;</span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:3;height:23.55pt'>
  <td width=73 nowrap valign=bottom style='width:54.45pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:23.55pt'>
  <p class=MsoNormal><span lang=EN-US style='font-size:8.0pt;font-family:"Arial",sans-serif'>&nbsp;</span></p>
  </td>
  <td width=162 valign=bottom style='width:121.6pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:23.55pt'>
  <p class=MsoNormal><span lang=EN-US style='font-size:8.0pt;font-family:"Arial",sans-serif'></span></p>
  </td>
  <td width=59 nowrap colspan=2 valign=bottom style='width:44.45pt;border-top:
  none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:23.55pt'>
  <p class=MsoNormal><span lang=EN-US style='font-size:8.0pt;font-family:"Arial",sans-serif'>&nbsp;</span></p>
  </td>
  <td width=52 nowrap valign=bottom style='width:38.85pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:23.55pt'>
  <p class=MsoNormal><span lang=EN-US style='font-size:8.0pt;font-family:"Arial",sans-serif'>&nbsp;</span></p>
  </td>
  <td width=97 nowrap valign=bottom style='width:72.6pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:23.55pt'>
  <p class=MsoNormal><span lang=EN-US style='font-size:8.0pt;font-family:"Arial",sans-serif'>&nbsp;</span></p>
  </td>
  <td width=60 nowrap valign=bottom style='width:45.35pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:23.55pt'>
  <p class=MsoNormal><span lang=EN-US style='font-size:8.0pt;font-family:"Arial",sans-serif'>&nbsp;</span></p>
  </td>
  <td width=53 nowrap valign=bottom style='width:39.7pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:23.55pt'>
  <p class=MsoNormal><span lang=EN-US style='font-size:8.0pt;font-family:"Arial",sans-serif'>&nbsp;</span></p>
  </td>
  <td width=181 nowrap valign=bottom style='width:136.1pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:23.55pt'>
  <p class=MsoNormal><span lang=EN-US style='font-size:8.0pt;font-family:"Arial",sans-serif'>&nbsp;</span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:4;height:25.7pt'>
  <td width=73 nowrap valign=bottom style='width:54.45pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:25.7pt'>
  <p class=MsoNormal><span lang=EN-US style='font-size:8.0pt;font-family:"Arial",sans-serif'>&nbsp;</span></p>
  </td>
  <td width=162 valign=bottom style='width:121.6pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:25.7pt'>
  <p class=MsoNormal><span lang=EN-US style='font-size:8.0pt;font-family:"Arial",sans-serif'></span></p>
  </td>
  <td width=59 nowrap colspan=2 valign=bottom style='width:44.45pt;border-top:
  none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:25.7pt'>
  <p class=MsoNormal><span lang=EN-US style='font-size:8.0pt;font-family:"Arial",sans-serif'>&nbsp;</span></p>
  </td>
  <td width=52 nowrap valign=bottom style='width:38.85pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:25.7pt'>
  <p class=MsoNormal><span lang=EN-US style='font-size:8.0pt;font-family:"Arial",sans-serif'>&nbsp;</span></p>
  </td>
  <td width=97 nowrap valign=bottom style='width:72.6pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:25.7pt'>
  <p class=MsoNormal><span lang=EN-US style='font-size:8.0pt;font-family:"Arial",sans-serif'>&nbsp;</span></p>
  </td>
  <td width=60 nowrap valign=bottom style='width:45.35pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:25.7pt'>
  <p class=MsoNormal><span lang=EN-US style='font-size:8.0pt;font-family:"Arial",sans-serif'>&nbsp;</span></p>
  </td>
  <td width=53 nowrap valign=bottom style='width:39.7pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:25.7pt'>
  <p class=MsoNormal><span lang=EN-US style='font-size:8.0pt;font-family:"Arial",sans-serif'>&nbsp;</span></p>
  </td>
  <td width=181 nowrap valign=bottom style='width:136.1pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:25.7pt'>
  <p class=MsoNormal><span lang=EN-US style='font-size:8.0pt;font-family:"Arial",sans-serif'>&nbsp;</span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:5;height:25.7pt'>
  <td width=73 nowrap valign=bottom style='width:54.45pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:25.7pt'>
  <p class=MsoNormal><span lang=EN-US style='font-size:8.0pt;font-family:"Arial",sans-serif'>&nbsp;</span></p>
  </td>
  <td width=162 valign=bottom style='width:121.6pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:25.7pt'>
  <p class=MsoNormal><span lang=EN-US style='font-size:8.0pt;font-family:"Arial",sans-serif'></span></p>
  </td>
  <td width=59 nowrap colspan=2 valign=bottom style='width:44.45pt;border-top:
  none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:25.7pt'>
  <p class=MsoNormal><span lang=EN-US style='font-size:8.0pt;font-family:"Arial",sans-serif'>&nbsp;</span></p>
  </td>
  <td width=52 nowrap valign=bottom style='width:38.85pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:25.7pt'>
  <p class=MsoNormal><span lang=EN-US style='font-size:8.0pt;font-family:"Arial",sans-serif'>&nbsp;</span></p>
  </td>
  <td width=97 nowrap valign=bottom style='width:72.6pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:25.7pt'>
  <p class=MsoNormal><span lang=EN-US style='font-size:8.0pt;font-family:"Arial",sans-serif'>&nbsp;</span></p>
  </td>
  <td width=60 nowrap valign=bottom style='width:45.35pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:25.7pt'>
  <p class=MsoNormal><span lang=EN-US style='font-size:8.0pt;font-family:"Arial",sans-serif'>&nbsp;</span></p>
  </td>
  <td width=53 nowrap valign=bottom style='width:39.7pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:25.7pt'>
  <p class=MsoNormal><span lang=EN-US style='font-size:8.0pt;font-family:"Arial",sans-serif'>&nbsp;</span></p>
  </td>
  <td width=181 nowrap valign=bottom style='width:136.1pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:25.7pt'>
  <p class=MsoNormal><span lang=EN-US style='font-size:8.0pt;font-family:"Arial",sans-serif'>&nbsp;</span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:6;height:26.4pt'>
  <td width=73 nowrap valign=bottom style='width:54.45pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:26.4pt'>
  <p class=MsoNormal><span lang=EN-US style='font-size:8.0pt;font-family:"Arial",sans-serif'>&nbsp;</span></p>
  </td>
  <td width=162 valign=bottom style='width:121.6pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:26.4pt'>
  <p class=MsoNormal><span lang=EN-US style='font-size:8.0pt;font-family:"Arial",sans-serif'></span></p>
  </td>
  <td width=59 nowrap colspan=2 valign=bottom style='width:44.45pt;border-top:
  none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:26.4pt'>
  <p class=MsoNormal><span lang=EN-US style='font-size:8.0pt;font-family:"Arial",sans-serif'>&nbsp;</span></p>
  </td>
  <td width=52 nowrap valign=bottom style='width:38.85pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:26.4pt'>
  <p class=MsoNormal><span lang=EN-US style='font-size:8.0pt;font-family:"Arial",sans-serif'>&nbsp;</span></p>
  </td>
  <td width=97 nowrap valign=bottom style='width:72.6pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:26.4pt'>
  <p class=MsoNormal><span lang=EN-US style='font-size:8.0pt;font-family:"Arial",sans-serif'>&nbsp;</span></p>
  </td>
  <td width=60 nowrap valign=bottom style='width:45.35pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:26.4pt'>
  <p class=MsoNormal><span lang=EN-US style='font-size:8.0pt;font-family:"Arial",sans-serif'>&nbsp;</span></p>
  </td>
  <td width=53 nowrap valign=bottom style='width:39.7pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:26.4pt'>
  <p class=MsoNormal><span lang=EN-US style='font-size:8.0pt;font-family:"Arial",sans-serif'>&nbsp;</span></p>
  </td>
  <td width=181 nowrap valign=bottom style='width:136.1pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:26.4pt'>
  <p class=MsoNormal><span lang=EN-US style='font-size:8.0pt;font-family:"Arial",sans-serif'>&nbsp;</span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:7;height:25.7pt'>
  <td width=73 nowrap valign=bottom style='width:54.45pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:25.7pt'>
  <p class=MsoNormal><span lang=EN-US style='font-size:8.0pt;font-family:"Arial",sans-serif'>&nbsp;</span></p>
  </td>
  <td width=162 valign=bottom style='width:121.6pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:25.7pt'>
  <p class=MsoNormal><span lang=EN-US style='font-size:8.0pt;font-family:"Arial",sans-serif'></span></p>
  </td>
  <td width=59 nowrap colspan=2 valign=bottom style='width:44.45pt;border-top:
  none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:25.7pt'>
  <p class=MsoNormal><span lang=EN-US style='font-size:8.0pt;font-family:"Arial",sans-serif'>&nbsp;</span></p>
  </td>
  <td width=52 nowrap valign=bottom style='width:38.85pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:25.7pt'>
  <p class=MsoNormal><span lang=EN-US style='font-size:8.0pt;font-family:"Arial",sans-serif'>&nbsp;</span></p>
  </td>
  <td width=97 nowrap valign=bottom style='width:72.6pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:25.7pt'>
  <p class=MsoNormal><span lang=EN-US style='font-size:8.0pt;font-family:"Arial",sans-serif'>&nbsp;</span></p>
  </td>
  <td width=60 nowrap valign=bottom style='width:45.35pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:25.7pt'>
  <p class=MsoNormal><span lang=EN-US style='font-size:8.0pt;font-family:"Arial",sans-serif'>&nbsp;</span></p>
  </td>
  <td width=53 nowrap valign=bottom style='width:39.7pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:25.7pt'>
  <p class=MsoNormal><span lang=EN-US style='font-size:8.0pt;font-family:"Arial",sans-serif'>&nbsp;</span></p>
  </td>
  <td width=181 nowrap valign=bottom style='width:136.1pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:25.7pt'>
  <p class=MsoNormal><span lang=EN-US style='font-size:8.0pt;font-family:"Arial",sans-serif'>&nbsp;</span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:8;height:22.85pt'>
  <td width=73 nowrap valign=bottom style='width:54.45pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:22.85pt'>
  <p class=MsoNormal><span lang=EN-US style='font-size:8.0pt;font-family:"Arial",sans-serif'>&nbsp;</span></p>
  </td>
  <td width=162 valign=bottom style='width:121.6pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:22.85pt'>
  <p class=MsoNormal><span lang=EN-US style='font-size:8.0pt;font-family:"Arial",sans-serif'></span></p>
  </td>
  <td width=59 nowrap colspan=2 valign=bottom style='width:44.45pt;border-top:
  none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:22.85pt'>
  <p class=MsoNormal><span lang=EN-US style='font-size:8.0pt;font-family:"Arial",sans-serif'>&nbsp;</span></p>
  </td>
  <td width=52 nowrap valign=bottom style='width:38.85pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:22.85pt'>
  <p class=MsoNormal><span lang=EN-US style='font-size:8.0pt;font-family:"Arial",sans-serif'>&nbsp;</span></p>
  </td>
  <td width=97 nowrap valign=bottom style='width:72.6pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:22.85pt'>
  <p class=MsoNormal><span lang=EN-US style='font-size:8.0pt;font-family:"Arial",sans-serif'>&nbsp;</span></p>
  </td>
  <td width=60 nowrap valign=bottom style='width:45.35pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:22.85pt'>
  <p class=MsoNormal><span lang=EN-US style='font-size:8.0pt;font-family:"Arial",sans-serif'>&nbsp;</span></p>
  </td>
  <td width=53 nowrap valign=bottom style='width:39.7pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:22.85pt'>
  <p class=MsoNormal><span lang=EN-US style='font-size:8.0pt;font-family:"Arial",sans-serif'>&nbsp;</span></p>
  </td>
  <td width=181 nowrap valign=bottom style='width:136.1pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:22.85pt'>
  <p class=MsoNormal><span lang=EN-US style='font-size:8.0pt;font-family:"Arial",sans-serif'>&nbsp;</span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:9;height:24.25pt'>
  <td width=73 nowrap valign=bottom style='width:54.45pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:24.25pt'>
  <p class=MsoNormal><span lang=EN-US style='font-size:8.0pt;font-family:"Arial",sans-serif'>&nbsp;</span></p>
  </td>
  <td width=162 valign=bottom style='width:121.6pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:24.25pt'>
  <p class=MsoNormal><span lang=EN-US style='font-size:8.0pt;font-family:"Arial",sans-serif'></span></p>
  </td>
  <td width=59 nowrap colspan=2 valign=bottom style='width:44.45pt;border-top:
  none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:24.25pt'>
  <p class=MsoNormal><span lang=EN-US style='font-size:8.0pt;font-family:"Arial",sans-serif'>&nbsp;</span></p>
  </td>
  <td width=52 nowrap valign=bottom style='width:38.85pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:24.25pt'>
  <p class=MsoNormal><span lang=EN-US style='font-size:8.0pt;font-family:"Arial",sans-serif'>&nbsp;</span></p>
  </td>
  <td width=97 nowrap valign=bottom style='width:72.6pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:24.25pt'>
  <p class=MsoNormal><span lang=EN-US style='font-size:8.0pt;font-family:"Arial",sans-serif'>&nbsp;</span></p>
  </td>
  <td width=60 nowrap valign=bottom style='width:45.35pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:24.25pt'>
  <p class=MsoNormal><span lang=EN-US style='font-size:8.0pt;font-family:"Arial",sans-serif'>&nbsp;</span></p>
  </td>
  <td width=53 nowrap valign=bottom style='width:39.7pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:24.25pt'>
  <p class=MsoNormal><span lang=EN-US style='font-size:8.0pt;font-family:"Arial",sans-serif'>&nbsp;</span></p>
  </td>
  <td width=181 nowrap valign=bottom style='width:136.1pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:24.25pt'>
  <p class=MsoNormal><span lang=EN-US style='font-size:8.0pt;font-family:"Arial",sans-serif'>&nbsp;</span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:10;height:24.95pt'>
  <td width=73 nowrap valign=bottom style='width:54.45pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:24.95pt'>
  <p class=MsoNormal><span lang=EN-US style='font-size:8.0pt;font-family:"Arial",sans-serif'>&nbsp;</span></p>
  </td>
  <td width=162 valign=bottom style='width:121.6pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:24.95pt'>
  <p class=MsoNormal><span lang=EN-US style='font-size:8.0pt;font-family:"Arial",sans-serif'></span></p>
  </td>
  <td width=59 nowrap colspan=2 valign=bottom style='width:44.45pt;border-top:
  none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:24.95pt'>
  <p class=MsoNormal><span lang=EN-US style='font-size:8.0pt;font-family:"Arial",sans-serif'>&nbsp;</span></p>
  </td>
  <td width=52 nowrap valign=bottom style='width:38.85pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:24.95pt'>
  <p class=MsoNormal><span lang=EN-US style='font-size:8.0pt;font-family:"Arial",sans-serif'>&nbsp;</span></p>
  </td>
  <td width=97 nowrap valign=bottom style='width:72.6pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:24.95pt'>
  <p class=MsoNormal><span lang=EN-US style='font-size:8.0pt;font-family:"Arial",sans-serif'>&nbsp;</span></p>
  </td>
  <td width=60 nowrap valign=bottom style='width:45.35pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:24.95pt'>
  <p class=MsoNormal><span lang=EN-US style='font-size:8.0pt;font-family:"Arial",sans-serif'>&nbsp;</span></p>
  </td>
  <td width=53 nowrap valign=bottom style='width:39.7pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:24.95pt'>
  <p class=MsoNormal><span lang=EN-US style='font-size:8.0pt;font-family:"Arial",sans-serif'>&nbsp;</span></p>
  </td>
  <td width=181 nowrap valign=bottom style='width:136.1pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:24.95pt'>
  <p class=MsoNormal><span lang=EN-US style='font-size:8.0pt;font-family:"Arial",sans-serif'>&nbsp;</span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:11;height:22.85pt'>
  <td width=73 nowrap valign=bottom style='width:54.45pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:22.85pt'>
  <p class=MsoNormal><span lang=EN-US style='font-size:8.0pt;font-family:"Arial",sans-serif'>&nbsp;</span></p>
  </td>
  <td width=162 valign=bottom style='width:121.6pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:22.85pt'>
  <p class=MsoNormal><span lang=EN-US style='font-size:8.0pt;font-family:"Arial",sans-serif'></span></p>
  </td>
  <td width=59 nowrap colspan=2 valign=bottom style='width:44.45pt;border-top:
  none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:22.85pt'>
  <p class=MsoNormal><span lang=EN-US style='font-size:8.0pt;font-family:"Arial",sans-serif'>&nbsp;</span></p>
  </td>
  <td width=52 nowrap valign=bottom style='width:38.85pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:22.85pt'>
  <p class=MsoNormal><span lang=EN-US style='font-size:8.0pt;font-family:"Arial",sans-serif'>&nbsp;</span></p>
  </td>
  <td width=97 nowrap valign=bottom style='width:72.6pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:22.85pt'>
  <p class=MsoNormal><span lang=EN-US style='font-size:8.0pt;font-family:"Arial",sans-serif'>&nbsp;</span></p>
  </td>
  <td width=60 nowrap valign=bottom style='width:45.35pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:22.85pt'>
  <p class=MsoNormal><span lang=EN-US style='font-size:8.0pt;font-family:"Arial",sans-serif'>&nbsp;</span></p>
  </td>
  <td width=53 nowrap valign=bottom style='width:39.7pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:22.85pt'>
  <p class=MsoNormal><span lang=EN-US style='font-size:8.0pt;font-family:"Arial",sans-serif'>&nbsp;</span></p>
  </td>
  <td width=181 nowrap valign=bottom style='width:136.1pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:22.85pt'>
  <p class=MsoNormal><span lang=EN-US style='font-size:8.0pt;font-family:"Arial",sans-serif'>&nbsp;</span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:12;height:23.55pt'>
  <td width=73 nowrap valign=bottom style='width:54.45pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:23.55pt'>
  <p class=MsoNormal><span lang=EN-US style='font-size:8.0pt;font-family:"Arial",sans-serif'>&nbsp;</span></p>
  </td>
  <td width=162 valign=bottom style='width:121.6pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:23.55pt'>
  <p class=MsoNormal><span lang=EN-US style='font-size:8.0pt;font-family:"Arial",sans-serif'></span></p>
  </td>
  <td width=59 nowrap colspan=2 valign=bottom style='width:44.45pt;border-top:
  none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:23.55pt'>
  <p class=MsoNormal><span lang=EN-US style='font-size:8.0pt;font-family:"Arial",sans-serif'>&nbsp;</span></p>
  </td>
  <td width=52 nowrap valign=bottom style='width:38.85pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:23.55pt'>
  <p class=MsoNormal><span lang=EN-US style='font-size:8.0pt;font-family:"Arial",sans-serif'>&nbsp;</span></p>
  </td>
  <td width=97 nowrap valign=bottom style='width:72.6pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:23.55pt'>
  <p class=MsoNormal><span lang=EN-US style='font-size:8.0pt;font-family:"Arial",sans-serif'>&nbsp;</span></p>
  </td>
  <td width=60 nowrap valign=bottom style='width:45.35pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:23.55pt'>
  <p class=MsoNormal><span lang=EN-US style='font-size:8.0pt;font-family:"Arial",sans-serif'>&nbsp;</span></p>
  </td>
  <td width=53 nowrap valign=bottom style='width:39.7pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:23.55pt'>
  <p class=MsoNormal><span lang=EN-US style='font-size:8.0pt;font-family:"Arial",sans-serif'>&nbsp;</span></p>
  </td>
  <td width=181 nowrap valign=bottom style='width:136.1pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:23.55pt'>
  <p class=MsoNormal><span lang=EN-US style='font-size:8.0pt;font-family:"Arial",sans-serif'>&nbsp;</span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:13;height:23.55pt'>
  <td width=73 nowrap valign=bottom style='width:54.45pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:23.55pt'>
  <p class=MsoNormal><span lang=EN-US style='font-size:8.0pt;font-family:"Arial",sans-serif'>&nbsp;</span></p>
  </td>
  <td width=162 valign=bottom style='width:121.6pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:23.55pt'>
  <p class=MsoNormal><span lang=EN-US style='font-size:8.0pt;font-family:"Arial",sans-serif'></span></p>
  </td>
  <td width=59 nowrap colspan=2 valign=bottom style='width:44.45pt;border-top:
  none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:23.55pt'>
  <p class=MsoNormal><span lang=EN-US style='font-size:8.0pt;font-family:"Arial",sans-serif'>&nbsp;</span></p>
  </td>
  <td width=52 nowrap valign=bottom style='width:38.85pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:23.55pt'>
  <p class=MsoNormal><span lang=EN-US style='font-size:8.0pt;font-family:"Arial",sans-serif'>&nbsp;</span></p>
  </td>
  <td width=97 nowrap valign=bottom style='width:72.6pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:23.55pt'>
  <p class=MsoNormal><span lang=EN-US style='font-size:8.0pt;font-family:"Arial",sans-serif'>&nbsp;</span></p>
  </td>
  <td width=60 nowrap valign=bottom style='width:45.35pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:23.55pt'>
  <p class=MsoNormal><span lang=EN-US style='font-size:8.0pt;font-family:"Arial",sans-serif'>&nbsp;</span></p>
  </td>
  <td width=53 nowrap valign=bottom style='width:39.7pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:23.55pt'>
  <p class=MsoNormal><span lang=EN-US style='font-size:8.0pt;font-family:"Arial",sans-serif'>&nbsp;</span></p>
  </td>
  <td width=181 nowrap valign=bottom style='width:136.1pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:23.55pt'>
  <p class=MsoNormal><span lang=EN-US style='font-size:8.0pt;font-family:"Arial",sans-serif'>&nbsp;</span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:14;height:25.7pt'>
  <td width=73 nowrap valign=bottom style='width:54.45pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:25.7pt'>
  <p class=MsoNormal><span lang=EN-US style='font-size:8.0pt;font-family:"Arial",sans-serif'>&nbsp;</span></p>
  </td>
  <td width=162 valign=bottom style='width:121.6pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:25.7pt'>
  <p class=MsoNormal><span lang=EN-US style='font-size:8.0pt;font-family:"Arial",sans-serif'></span></p>
  </td>
  <td width=59 nowrap colspan=2 valign=bottom style='width:44.45pt;border-top:
  none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:25.7pt'>
  <p class=MsoNormal><span lang=EN-US style='font-size:8.0pt;font-family:"Arial",sans-serif'>&nbsp;</span></p>
  </td>
  <td width=52 nowrap valign=bottom style='width:38.85pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:25.7pt'>
  <p class=MsoNormal><span lang=EN-US style='font-size:8.0pt;font-family:"Arial",sans-serif'>&nbsp;</span></p>
  </td>
  <td width=97 nowrap valign=bottom style='width:72.6pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:25.7pt'>
  <p class=MsoNormal><span lang=EN-US style='font-size:8.0pt;font-family:"Arial",sans-serif'>&nbsp;</span></p>
  </td>
  <td width=60 nowrap valign=bottom style='width:45.35pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:25.7pt'>
  <p class=MsoNormal><span lang=EN-US style='font-size:8.0pt;font-family:"Arial",sans-serif'>&nbsp;</span></p>
  </td>
  <td width=53 nowrap valign=bottom style='width:39.7pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:25.7pt'>
  <p class=MsoNormal><span lang=EN-US style='font-size:8.0pt;font-family:"Arial",sans-serif'>&nbsp;</span></p>
  </td>
  <td width=181 nowrap valign=bottom style='width:136.1pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:25.7pt'>
  <p class=MsoNormal><span lang=EN-US style='font-size:8.0pt;font-family:"Arial",sans-serif'>&nbsp;</span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:15;height:24.95pt'>
  <td width=73 nowrap valign=bottom style='width:54.45pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:24.95pt'>
  <p class=MsoNormal><span lang=EN-US style='font-size:8.0pt;font-family:"Arial",sans-serif'></span></p>
  </td>
  <td width=162 valign=bottom style='width:121.6pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:24.95pt'>
  <p class=MsoNormal><span lang=EN-US style='font-size:8.0pt;font-family:"Arial",sans-serif'></span></p>
  </td>
  <td width=59 nowrap colspan=2 valign=bottom style='width:44.45pt;border-top:
  none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:24.95pt'>
  <p class=MsoNormal><span lang=EN-US style='font-size:8.0pt;font-family:"Arial",sans-serif'></span></p>
  </td>
  <td width=52 nowrap valign=bottom style='width:38.85pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:24.95pt'>
  <p class=MsoNormal><span lang=EN-US style='font-size:8.0pt;font-family:"Arial",sans-serif'></span></p>
  </td>
  <td width=97 nowrap valign=bottom style='width:72.6pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:24.95pt'>
  <p class=MsoNormal><span lang=EN-US style='font-size:8.0pt;font-family:"Arial",sans-serif'></span></p>
  </td>
  <td width=60 nowrap valign=bottom style='width:45.35pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:24.95pt'>
  <p class=MsoNormal><span lang=EN-US style='font-size:8.0pt;font-family:"Arial",sans-serif'></span></p>
  </td>
  <td width=53 nowrap valign=bottom style='width:39.7pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:24.95pt'>
  <p class=MsoNormal><span lang=EN-US style='font-size:8.0pt;font-family:"Arial",sans-serif'></span></p>
  </td>
  <td width=181 nowrap valign=bottom style='width:136.1pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:24.95pt'>
  <p class=MsoNormal><span lang=EN-US style='font-size:8.0pt;font-family:"Arial",sans-serif'></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:16;mso-yfti-lastrow:yes;height:24.95pt'>
  <td width=73 nowrap valign=bottom style='width:54.45pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:24.95pt'>
  <p class=MsoNormal><span lang=EN-US style='font-size:8.0pt;font-family:"Arial",sans-serif'></span></p>
  </td>
  <td width=162 valign=bottom style='width:121.6pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:24.95pt'>
  <p class=MsoNormal><span lang=EN-US style='font-size:8.0pt;font-family:"Arial",sans-serif'></span></p>
  </td>
  <td width=59 nowrap colspan=2 valign=bottom style='width:44.45pt;border-top:
  none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:24.95pt'>
  <p class=MsoNormal><span lang=EN-US style='font-size:8.0pt;font-family:"Arial",sans-serif'></span></p>
  </td>
  <td width=52 nowrap valign=bottom style='width:38.85pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:24.95pt'>
  <p class=MsoNormal><span lang=EN-US style='font-size:8.0pt;font-family:"Arial",sans-serif'></span></p>
  </td>
  <td width=97 nowrap valign=bottom style='width:72.6pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:24.95pt'>
  <p class=MsoNormal><span lang=EN-US style='font-size:8.0pt;font-family:"Arial",sans-serif'></span></p>
  </td>
  <td width=60 nowrap valign=bottom style='width:45.35pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:24.95pt'>
  <p class=MsoNormal><span lang=EN-US style='font-size:8.0pt;font-family:"Arial",sans-serif'></span></p>
  </td>
  <td width=53 nowrap valign=bottom style='width:39.7pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:24.95pt'>
  <p class=MsoNormal><span lang=EN-US style='font-size:8.0pt;font-family:"Arial",sans-serif'></span></p>
  </td>
  <td width=181 nowrap valign=bottom style='width:136.1pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:24.95pt'>
  <p class=MsoNormal><span lang=EN-US style='font-size:8.0pt;font-family:"Arial",sans-serif'></span></p>
  </td>
 </tr>
 <![if !supportMisalignedColumns]>
 <tr height=0>
  <td width=73 style='border:none'></td>
  <td width=162 style='border:none'></td>
  <td width=58 style='border:none'></td>
  <td width=1 style='border:none'></td>
  <td width=52 style='border:none'></td>
  <td width=97 style='border:none'></td>
  <td width=60 style='border:none'></td>
  <td width=53 style='border:none'></td>
  <td width=181 style='border:none'></td>
 </tr>
 <![endif]>
</table>

<p class=MsoNormal><span lang=EN-US></span></p>

<p class=MsoNormal><b><span lang=EN-US style='font-size:10.0pt'></span></b></p>

<p class=MsoNormal><span lang=EN-US style='font-size:10.0pt;font-family:"Montserrat SemiBold"'>*Acceptable
Temperature Range: 2C to 8C </span></p>

<p class=MsoNormal><span lang=EN-US style='font-size:10.0pt;font-family:"Montserrat SemiBold"'>*THHC-028
Medication Administration and an Independent double check procedure for high
alert medication and Telephone Orders received</span><span lang=EN-US
style='font-size:10.0pt;font-family:"Montserrat SemiBold";mso-bidi-language:
HE'> </span><span lang=EN-US style='font-size:10.0pt;font-family:"Montserrat SemiBold"'></span></p>

<p class=MsoNormal><span lang=EN-US style='font-size:10.0pt;font-family:"Montserrat SemiBold"'>*IV
bag(s) must have ice pack and should not be exposed or exceed more than 1 hour
outside the IV bag(s). </span></p>

<p class=MsoFooter><span lang=EN-US style='font-size:10.0pt;font-family:"Montserrat SemiBold"'>*The<span
style='letter-spacing:2.45pt'> </span><span style='letter-spacing:-.05pt'>TPN</span><span
style='letter-spacing:1.6pt'> </span><span style='letter-spacing:-.05pt'>solution</span><span
style='letter-spacing:.05pt'> </span><span style='letter-spacing:-.05pt'>are</span><span
style='letter-spacing:.15pt'> </span><span style='letter-spacing:-.05pt'>stable</span><span
style='letter-spacing:.05pt'> </span>for<span style='letter-spacing:-.05pt'> </span>30<span
style='letter-spacing:.05pt'> </span><span style='letter-spacing:-.05pt'>hours</span>
<span style='letter-spacing:-.05pt'>in</span><span style='letter-spacing:.3pt'>
</span>the<span style='letter-spacing:.05pt'> </span><span style='letter-spacing:
-.05pt'>refrigerator (2-8C)</span><span style='letter-spacing:.2pt'> </span><span
style='letter-spacing:-.1pt'>and</span><span style='letter-spacing:3.15pt'> </span>they<span
style='letter-spacing:1.9pt'> </span><span style='letter-spacing:-.05pt'>are</span><span
style='letter-spacing:2.0pt'> </span><span style='letter-spacing:-.05pt'>stable</span><span
style='letter-spacing:1.85pt'> </span>for<span style='letter-spacing:1.75pt'> </span>24<span
style='letter-spacing:2.0pt'> </span><span style='letter-spacing:-.05pt'>hours</span><span
style='letter-spacing:1.95pt'> </span>at<span style='letter-spacing:1.95pt'> </span><span
style='letter-spacing:-.05pt'>room</span><span style='letter-spacing:1.85pt'> </span><span
style='letter-spacing:-.05pt'>temperature</span><span style='letter-spacing:
1.75pt'> </span><span style='letter-spacing:-.05pt'>(&lt;</span><span
style='letter-spacing:2.0pt'> </span><span style='letter-spacing:-.1pt'>25C)</span><span
style='letter-spacing:3.0pt'> </span>once<span style='letter-spacing:.05pt'> </span>the<span
style='letter-spacing:.05pt'> </span><span style='letter-spacing:-.05pt'>Administration</span><span
style='letter-spacing:.05pt'> </span><span style='letter-spacing:-.05pt'>started.</span>
(THHC-029 TOTAL <span style='letter-spacing:-.05pt'>PARENTERAL</span> NUTRITION
(TPN)</span></p>

<p class=MsoNormal><span lang=EN-US></span></p>

</div>

</body>

</html>
