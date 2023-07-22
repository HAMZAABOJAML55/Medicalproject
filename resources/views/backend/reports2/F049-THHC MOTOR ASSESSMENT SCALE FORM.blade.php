<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv=Content-Type content="text/html; charset=windows-1252">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<title>F049-THHC MOTOR ASSESSMENT SCALE FORM| @yield('title')</title>

<style>
<!--
 /* Font Definitions */
 @font-face
	{font-family:Wingdings;
	panose-1:5 0 0 0 0 0 0 0 0 0;
	mso-font-charset:2;
	mso-generic-font-family:auto;
	mso-font-pitch:variable;
	mso-font-signature:0 268435456 0 0 -2147483648 0;}
@font-face
	{font-family:"Cambria Math";
	panose-1:2 4 5 3 5 4 6 3 2 4;
	mso-font-charset:0;
	mso-generic-font-family:roman;
	mso-font-pitch:variable;
	mso-font-signature:-536869121 1107305727 33554432 0 415 0;}
@font-face
	{font-family:Tahoma;
	panose-1:2 11 6 4 3 5 4 4 2 4;
	mso-font-charset:0;
	mso-generic-font-family:swiss;
	mso-font-pitch:variable;
	mso-font-signature:-520081665 -1073717157 41 0 66047 0;}
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
	{font-family:"Arial Black";
	panose-1:2 11 10 4 2 1 2 2 2 4;
	mso-font-alt:"Arial Black";
	mso-font-charset:0;
	mso-generic-font-family:swiss;
	mso-font-pitch:variable;
	mso-font-signature:-1610612049 1073772795 0 0 159 0;}
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
	margin-top:3.55pt;
	margin-right:330.9pt;
	margin-bottom:0cm;
	margin-left:316.7pt;
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
	mso-style-link:"\0646\0635 \0623\0633\0627\0633\064A Char";
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
	font-size:8.0pt;
	font-family:"Tahoma",sans-serif;
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
	mso-ansi-font-size:8.0pt;
	mso-bidi-font-size:8.0pt;
	font-family:"Tahoma",sans-serif;
	mso-ascii-font-family:Tahoma;
	mso-fareast-font-family:Arial;
	mso-hansi-font-family:Tahoma;
	mso-bidi-font-family:Tahoma;}
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
span.Char2
	{mso-style-name:"\0646\0635 \0623\0633\0627\0633\064A Char";
	mso-style-priority:1;
	mso-style-unhide:no;
	mso-style-locked:yes;
	mso-style-link:"\0646\0635 \0623\0633\0627\0633\064A";
	mso-ansi-font-size:6.0pt;
	mso-bidi-font-size:6.0pt;
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
	{mso-footnote-separator:url("F049-THHC%20MOTOR%20ASSESSMENT%20SCALE%20FORM.files/header.htm") fs;
	mso-footnote-continuation-separator:url("F049-THHC%20MOTOR%20ASSESSMENT%20SCALE%20FORM.files/header.htm") fcs;
	mso-endnote-separator:url("F049-THHC%20MOTOR%20ASSESSMENT%20SCALE%20FORM.files/header.htm") es;
	mso-endnote-continuation-separator:url("F049-THHC%20MOTOR%20ASSESSMENT%20SCALE%20FORM.files/header.htm") ecs;}
@page WordSection1
	{size:595.5pt 842.0pt;
	margin:115.2pt 36.0pt 38.15pt 36.0pt;
	mso-header-margin:0cm;
	mso-footer-margin:7.2pt;
	mso-header:url("F049-THHC%20MOTOR%20ASSESSMENT%20SCALE%20FORM.files/header.htm") h1;
	mso-footer:url("F049-THHC%20MOTOR%20ASSESSMENT%20SCALE%20FORM.files/header.htm") f1;
	mso-paper-source:0;}
div.WordSection1
	{page:WordSection1;}
 /* List Definitions */
 @list l0
	{mso-list-id:1;
	mso-list-type:hybrid;
	mso-list-template-ids:84353894 -1 -1 -1 -1 -1 -1 -1 -1 -1;}
@list l0:level1
	{mso-level-number-format:bullet;
	mso-level-text:"\(";
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:0cm;
	text-indent:0cm;}
@list l0:level2
	{mso-level-number-format:bullet;
	mso-level-text:"";
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:0cm;
	text-indent:0cm;}
@list l0:level3
	{mso-level-number-format:bullet;
	mso-level-text:"";
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:0cm;
	text-indent:0cm;}
@list l0:level4
	{mso-level-number-format:bullet;
	mso-level-text:"";
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:0cm;
	text-indent:0cm;}
@list l0:level5
	{mso-level-number-format:bullet;
	mso-level-text:"";
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:0cm;
	text-indent:0cm;}
@list l0:level6
	{mso-level-number-format:bullet;
	mso-level-text:"";
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:0cm;
	text-indent:0cm;}
@list l0:level7
	{mso-level-number-format:bullet;
	mso-level-text:"";
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:0cm;
	text-indent:0cm;}
@list l0:level8
	{mso-level-number-format:bullet;
	mso-level-text:"";
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:0cm;
	text-indent:0cm;}
@list l0:level9
	{mso-level-number-format:bullet;
	mso-level-text:"";
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:0cm;
	text-indent:0cm;}
@list l1
	{mso-list-id:2;
	mso-list-type:hybrid;
	mso-list-template-ids:939819582 -1 -1 -1 -1 -1 -1 -1 -1 -1;}
@list l1:level1
	{mso-level-number-format:bullet;
	mso-level-text:"\(";
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:0cm;
	text-indent:0cm;}
@list l1:level2
	{mso-level-number-format:bullet;
	mso-level-text:"";
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:0cm;
	text-indent:0cm;}
@list l1:level3
	{mso-level-number-format:bullet;
	mso-level-text:"";
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:0cm;
	text-indent:0cm;}
@list l1:level4
	{mso-level-number-format:bullet;
	mso-level-text:"";
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:0cm;
	text-indent:0cm;}
@list l1:level5
	{mso-level-number-format:bullet;
	mso-level-text:"";
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:0cm;
	text-indent:0cm;}
@list l1:level6
	{mso-level-number-format:bullet;
	mso-level-text:"";
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:0cm;
	text-indent:0cm;}
@list l1:level7
	{mso-level-number-format:bullet;
	mso-level-text:"";
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:0cm;
	text-indent:0cm;}
@list l1:level8
	{mso-level-number-format:bullet;
	mso-level-text:"";
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:0cm;
	text-indent:0cm;}
@list l1:level9
	{mso-level-number-format:bullet;
	mso-level-text:"";
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:0cm;
	text-indent:0cm;}
@list l2
	{mso-list-id:3;
	mso-list-type:hybrid;
	mso-list-template-ids:2001100544 -1 -1 -1 -1 -1 -1 -1 -1 -1;}
@list l2:level1
	{mso-level-number-format:bullet;
	mso-level-text:"\(";
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:0cm;
	text-indent:0cm;}
@list l2:level2
	{mso-level-number-format:bullet;
	mso-level-text:"";
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:0cm;
	text-indent:0cm;}
@list l2:level3
	{mso-level-number-format:bullet;
	mso-level-text:"";
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:0cm;
	text-indent:0cm;}
@list l2:level4
	{mso-level-number-format:bullet;
	mso-level-text:"";
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:0cm;
	text-indent:0cm;}
@list l2:level5
	{mso-level-number-format:bullet;
	mso-level-text:"";
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:0cm;
	text-indent:0cm;}
@list l2:level6
	{mso-level-number-format:bullet;
	mso-level-text:"";
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:0cm;
	text-indent:0cm;}
@list l2:level7
	{mso-level-number-format:bullet;
	mso-level-text:"";
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:0cm;
	text-indent:0cm;}
@list l2:level8
	{mso-level-number-format:bullet;
	mso-level-text:"";
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:0cm;
	text-indent:0cm;}
@list l2:level9
	{mso-level-number-format:bullet;
	mso-level-text:"";
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:0cm;
	text-indent:0cm;}
@list l3
	{mso-list-id:4;
	mso-list-type:hybrid;
	mso-list-template-ids:1998898814 -1 -1 -1 -1 -1 -1 -1 -1 -1;}
@list l3:level1
	{mso-level-number-format:bullet;
	mso-level-text:"\(";
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:0cm;
	text-indent:0cm;}
@list l3:level2
	{mso-level-number-format:bullet;
	mso-level-text:"";
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:0cm;
	text-indent:0cm;}
@list l3:level3
	{mso-level-number-format:bullet;
	mso-level-text:"";
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:0cm;
	text-indent:0cm;}
@list l3:level4
	{mso-level-number-format:bullet;
	mso-level-text:"";
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:0cm;
	text-indent:0cm;}
@list l3:level5
	{mso-level-number-format:bullet;
	mso-level-text:"";
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:0cm;
	text-indent:0cm;}
@list l3:level6
	{mso-level-number-format:bullet;
	mso-level-text:"";
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:0cm;
	text-indent:0cm;}
@list l3:level7
	{mso-level-number-format:bullet;
	mso-level-text:"";
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:0cm;
	text-indent:0cm;}
@list l3:level8
	{mso-level-number-format:bullet;
	mso-level-text:"";
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:0cm;
	text-indent:0cm;}
@list l3:level9
	{mso-level-number-format:bullet;
	mso-level-text:"";
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:0cm;
	text-indent:0cm;}
@list l4
	{mso-list-id:5;
	mso-list-type:hybrid;
	mso-list-template-ids:1548233366 -1 -1 -1 -1 -1 -1 -1 -1 -1;}
@list l4:level1
	{mso-level-number-format:bullet;
	mso-level-text:"\(";
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:0cm;
	text-indent:0cm;}
@list l4:level2
	{mso-level-number-format:bullet;
	mso-level-text:"";
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:0cm;
	text-indent:0cm;}
@list l4:level3
	{mso-level-number-format:bullet;
	mso-level-text:"";
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:0cm;
	text-indent:0cm;}
@list l4:level4
	{mso-level-number-format:bullet;
	mso-level-text:"";
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:0cm;
	text-indent:0cm;}
@list l4:level5
	{mso-level-number-format:bullet;
	mso-level-text:"";
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:0cm;
	text-indent:0cm;}
@list l4:level6
	{mso-level-number-format:bullet;
	mso-level-text:"";
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:0cm;
	text-indent:0cm;}
@list l4:level7
	{mso-level-number-format:bullet;
	mso-level-text:"";
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:0cm;
	text-indent:0cm;}
@list l4:level8
	{mso-level-number-format:bullet;
	mso-level-text:"";
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:0cm;
	text-indent:0cm;}
@list l4:level9
	{mso-level-number-format:bullet;
	mso-level-text:"";
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:0cm;
	text-indent:0cm;}
@list l5
	{mso-list-id:401485348;
	mso-list-type:hybrid;
	mso-list-template-ids:-690045270 -2090533552 67698713 67698715 67698703 67698713 67698715 67698703 67698713 67698715;}
@list l5:level1
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:54.0pt;
	text-indent:-36.0pt;}
@list l5:level2
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;}
@list l5:level3
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	text-indent:-9.0pt;}
@list l5:level4
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;}
@list l5:level5
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;}
@list l5:level6
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	text-indent:-9.0pt;}
@list l5:level7
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;}
@list l5:level8
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;}
@list l5:level9
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	text-indent:-9.0pt;}
@list l6
	{mso-list-id:617102482;
	mso-list-type:hybrid;
	mso-list-template-ids:-35642892 67698703 67698713 67698715 67698703 67698713 67698715 67698703 67698713 67698715;}
@list l6:level1
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;}
@list l6:level2
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;}
@list l6:level3
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	text-indent:-9.0pt;}
@list l6:level4
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;}
@list l6:level5
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;}
@list l6:level6
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	text-indent:-9.0pt;}
@list l6:level7
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;}
@list l6:level8
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;}
@list l6:level9
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	text-indent:-9.0pt;}
@list l7
	{mso-list-id:648022648;
	mso-list-type:hybrid;
	mso-list-template-ids:1816839054 67698703 67698713 67698715 67698703 67698713 67698715 67698703 67698713 67698715;}
@list l7:level1
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;}
@list l7:level2
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;}
@list l7:level3
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	text-indent:-9.0pt;}
@list l7:level4
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;}
@list l7:level5
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;}
@list l7:level6
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	text-indent:-9.0pt;}
@list l7:level7
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;}
@list l7:level8
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;}
@list l7:level9
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	text-indent:-9.0pt;}
@list l8
	{mso-list-id:693770531;
	mso-list-type:hybrid;
	mso-list-template-ids:1718634126 67698699 67698713 67698715 67698703 67698713 67698715 67698703 67698713 67698715;}
@list l8:level1
	{mso-level-number-format:bullet;
	mso-level-text:\F0D8;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:55.0pt;
	text-indent:-18.0pt;
	font-family:Wingdings;}
@list l8:level2
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:91.0pt;
	text-indent:-18.0pt;}
@list l8:level3
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	margin-left:127.0pt;
	text-indent:-9.0pt;}
@list l8:level4
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:163.0pt;
	text-indent:-18.0pt;}
@list l8:level5
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:199.0pt;
	text-indent:-18.0pt;}
@list l8:level6
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	margin-left:235.0pt;
	text-indent:-9.0pt;}
@list l8:level7
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:271.0pt;
	text-indent:-18.0pt;}
@list l8:level8
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:307.0pt;
	text-indent:-18.0pt;}
@list l8:level9
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	margin-left:343.0pt;
	text-indent:-9.0pt;}
@list l9
	{mso-list-id:786393117;
	mso-list-type:hybrid;
	mso-list-template-ids:-160530774 67698703 67698713 67698715 67698703 67698713 67698715 67698703 67698713 67698715;}
@list l9:level1
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:72.0pt;
	text-indent:-18.0pt;}
@list l9:level2
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:108.0pt;
	text-indent:-18.0pt;}
@list l9:level3
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	margin-left:144.0pt;
	text-indent:-9.0pt;}
@list l9:level4
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:180.0pt;
	text-indent:-18.0pt;}
@list l9:level5
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:216.0pt;
	text-indent:-18.0pt;}
@list l9:level6
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	margin-left:252.0pt;
	text-indent:-9.0pt;}
@list l9:level7
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:288.0pt;
	text-indent:-18.0pt;}
@list l9:level8
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:324.0pt;
	text-indent:-18.0pt;}
@list l9:level9
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	margin-left:360.0pt;
	text-indent:-9.0pt;}
@list l10
	{mso-list-id:843788497;
	mso-list-type:hybrid;
	mso-list-template-ids:285105034 -2090533552 67698713 67698715 67698703 67698713 67698715 67698703 67698713 67698715;}
@list l10:level1
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:54.0pt;
	text-indent:-36.0pt;}
@list l10:level2
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;}
@list l10:level3
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	text-indent:-9.0pt;}
@list l10:level4
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;}
@list l10:level5
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;}
@list l10:level6
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	text-indent:-9.0pt;}
@list l10:level7
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;}
@list l10:level8
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;}
@list l10:level9
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	text-indent:-9.0pt;}
@list l11
	{mso-list-id:952633751;
	mso-list-type:hybrid;
	mso-list-template-ids:-868967272 -2090533552 67698713 67698715 67698703 67698713 67698715 67698703 67698713 67698715;}
@list l11:level1
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:54.0pt;
	text-indent:-36.0pt;}
@list l11:level2
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;}
@list l11:level3
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	text-indent:-9.0pt;}
@list l11:level4
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;}
@list l11:level5
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;}
@list l11:level6
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	text-indent:-9.0pt;}
@list l11:level7
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;}
@list l11:level8
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;}
@list l11:level9
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	text-indent:-9.0pt;}
@list l12
	{mso-list-id:972826909;
	mso-list-type:hybrid;
	mso-list-template-ids:-444063504 -2090533552 67698713 67698715 67698703 67698713 67698715 67698703 67698713 67698715;}
@list l12:level1
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:54.0pt;
	text-indent:-36.0pt;}
@list l12:level2
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;}
@list l12:level3
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	text-indent:-9.0pt;}
@list l12:level4
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;}
@list l12:level5
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;}
@list l12:level6
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	text-indent:-9.0pt;}
@list l12:level7
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;}
@list l12:level8
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;}
@list l12:level9
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	text-indent:-9.0pt;}
@list l13
	{mso-list-id:1092236326;
	mso-list-type:hybrid;
	mso-list-template-ids:1689965106 -2090533552 67698713 67698715 67698703 67698713 67698715 67698703 67698713 67698715;}
@list l13:level1
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:54.0pt;
	text-indent:-36.0pt;}
@list l13:level2
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;}
@list l13:level3
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	text-indent:-9.0pt;}
@list l13:level4
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;}
@list l13:level5
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;}
@list l13:level6
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	text-indent:-9.0pt;}
@list l13:level7
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;}
@list l13:level8
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;}
@list l13:level9
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	text-indent:-9.0pt;}
@list l14
	{mso-list-id:1390497868;
	mso-list-type:hybrid;
	mso-list-template-ids:1548748406 -2090533552 67698713 67698715 67698703 67698713 67698715 67698703 67698713 67698715;}
@list l14:level1
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:54.0pt;
	text-indent:-36.0pt;}
@list l14:level2
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;}
@list l14:level3
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	text-indent:-9.0pt;}
@list l14:level4
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;}
@list l14:level5
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;}
@list l14:level6
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	text-indent:-9.0pt;}
@list l14:level7
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;}
@list l14:level8
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;}
@list l14:level9
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	text-indent:-9.0pt;}
@list l15
	{mso-list-id:1515728151;
	mso-list-type:hybrid;
	mso-list-template-ids:-388335936 -2090533552 67698713 67698715 67698703 67698713 67698715 67698703 67698713 67698715;}
@list l15:level1
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:54.0pt;
	text-indent:-36.0pt;}
@list l15:level2
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;}
@list l15:level3
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	text-indent:-9.0pt;}
@list l15:level4
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;}
@list l15:level5
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;}
@list l15:level6
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	text-indent:-9.0pt;}
@list l15:level7
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;}
@list l15:level8
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;}
@list l15:level9
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	text-indent:-9.0pt;}
@list l16
	{mso-list-id:1567715873;
	mso-list-type:hybrid;
	mso-list-template-ids:855557446 -2090533552 67698713 67698715 67698703 67698713 67698715 67698703 67698713 67698715;}
@list l16:level1
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:54.0pt;
	text-indent:-36.0pt;}
@list l16:level2
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;}
@list l16:level3
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	text-indent:-9.0pt;}
@list l16:level4
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;}
@list l16:level5
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;}
@list l16:level6
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	text-indent:-9.0pt;}
@list l16:level7
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;}
@list l16:level8
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;}
@list l16:level9
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	text-indent:-9.0pt;}
@list l17
	{mso-list-id:1656839940;
	mso-list-type:hybrid;
	mso-list-template-ids:-1401127816 -2090533552 67698713 67698715 67698703 67698713 67698715 67698703 67698713 67698715;}
@list l17:level1
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:54.0pt;
	text-indent:-36.0pt;}
@list l17:level2
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;}
@list l17:level3
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	text-indent:-9.0pt;}
@list l17:level4
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;}
@list l17:level5
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;}
@list l17:level6
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	text-indent:-9.0pt;}
@list l17:level7
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;}
@list l17:level8
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;}
@list l17:level9
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	text-indent:-9.0pt;}
@list l18
	{mso-list-id:1869489248;
	mso-list-type:hybrid;
	mso-list-template-ids:-2040882326 -2090533552 67698713 67698715 67698703 67698713 67698715 67698703 67698713 67698715;}
@list l18:level1
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:54.0pt;
	text-indent:-36.0pt;}
@list l18:level2
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;}
@list l18:level3
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	text-indent:-9.0pt;}
@list l18:level4
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;}
@list l18:level5
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;}
@list l18:level6
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	text-indent:-9.0pt;}
@list l18:level7
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;}
@list l18:level8
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;}
@list l18:level9
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	text-indent:-9.0pt;}
@list l19
	{mso-list-id:1998528785;
	mso-list-type:hybrid;
	mso-list-template-ids:1159745136 -2090533552 67698713 67698715 67698703 67698713 67698715 67698703 67698713 67698715;}
@list l19:level1
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:54.0pt;
	text-indent:-36.0pt;}
@list l19:level2
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;}
@list l19:level3
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	text-indent:-9.0pt;}
@list l19:level4
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;}
@list l19:level5
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;}
@list l19:level6
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	text-indent:-9.0pt;}
@list l19:level7
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;}
@list l19:level8
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;}
@list l19:level9
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	text-indent:-9.0pt;}
@list l20
	{mso-list-id:2006470660;
	mso-list-type:hybrid;
	mso-list-template-ids:-1696441580 67698703 67698713 67698715 67698703 67698713 67698715 67698703 67698713 67698715;}
@list l20:level1
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:45.0pt;
	text-indent:-18.0pt;}
@list l20:level2
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:81.0pt;
	text-indent:-18.0pt;}
@list l20:level3
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	margin-left:117.0pt;
	text-indent:-9.0pt;}
@list l20:level4
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:153.0pt;
	text-indent:-18.0pt;}
@list l20:level5
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:189.0pt;
	text-indent:-18.0pt;}
@list l20:level6
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	margin-left:225.0pt;
	text-indent:-9.0pt;}
@list l20:level7
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:261.0pt;
	text-indent:-18.0pt;}
@list l20:level8
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:297.0pt;
	text-indent:-18.0pt;}
@list l20:level9
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	margin-left:333.0pt;
	text-indent:-9.0pt;}
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
	border:solid black 1.0pt;
	mso-border-themecolor:text1;
	mso-border-alt:solid black .5pt;
	mso-border-themecolor:text1;
	mso-padding-alt:0cm 5.4pt 0cm 5.4pt;
	mso-border-insideh:.5pt solid black;
	mso-border-insideh-themecolor:text1;
	mso-border-insidev:.5pt solid black;
	mso-border-insidev-themecolor:text1;
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

<p class=MsoNormal style='tab-stops:626.9pt'><span lang=EN-US style='font-size:
9.0pt;font-family:Montserrat;mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:
major-bidi'>This test is designed to assess the return of function following a
stroke or other neurological impairment. If the patient cannot complete any
part of a section, score zero (0) for that section, there are nine sections in
all, the highest score is 54 &amp; the lowest score is 0.<o:p></o:p></span></p>

<p class=MsoNormal style='tab-stops:626.9pt'><span lang=EN-US style='font-size:
9.0pt;font-family:Montserrat;mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:
major-bidi'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal style='text-align:justify;background:#3AC2BA'><span
lang=EN-US style='font-size:10.0pt;font-family:"Montserrat SemiBold";
mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi;
color:white;mso-themecolor:background1'>Rolling onto Intact Side (Starting
Position: Supine with Knees Straight)<o:p></o:p></span></p>

<p class=MsoListParagraph style='margin-left:22.5pt;text-align:justify;
text-indent:-18.0pt;mso-list:l7 level1 lfo9'><![if !supportLists]><span
lang=EN-US style='font-size:9.0pt;font-family:Montserrat;mso-fareast-font-family:
Montserrat;mso-bidi-font-family:Montserrat'><span style='mso-list:Ignore'>1.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><![endif]><span
dir=LTR></span><span lang=EN-US style='font-size:9.0pt;font-family:Montserrat;
mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi'>Uses an intact
arm to pull the body toward the intact side. Uses intact leg to hook impaired
leg to pull it over.<o:p></o:p></span></p>

<p class=MsoListParagraph style='margin-left:22.5pt;text-align:justify;
text-indent:-18.0pt;mso-list:l7 level1 lfo9'><![if !supportLists]><span
lang=EN-US style='font-size:9.0pt;font-family:Montserrat;mso-fareast-font-family:
Montserrat;mso-bidi-font-family:Montserrat'><span style='mso-list:Ignore'>2.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><![endif]><span
dir=LTR></span><span lang=EN-US style='font-size:9.0pt;font-family:Montserrat;
mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi'>Actively
moves impaired leg across the body to roll but leaves impaired arm behind.<o:p></o:p></span></p>

<p class=MsoListParagraph style='margin-left:22.5pt;text-align:justify;
text-indent:-18.0pt;mso-list:l7 level1 lfo9'><![if !supportLists]><span
lang=EN-US style='font-size:9.0pt;font-family:Montserrat;mso-fareast-font-family:
Montserrat;mso-bidi-font-family:Montserrat'><span style='mso-list:Ignore'>3.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><![endif]><span
dir=LTR></span><span lang=EN-US style='font-size:9.0pt;font-family:Montserrat;
mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi'>The impaired
arm is lifted across the body with another arm. Impaired leg moves actively
&amp; the body follows as a block.<o:p></o:p></span></p>

<p class=MsoListParagraph style='margin-left:22.5pt;text-align:justify;
text-indent:-18.0pt;mso-list:l7 level1 lfo9'><![if !supportLists]><span
lang=EN-US style='font-size:9.0pt;font-family:Montserrat;mso-fareast-font-family:
Montserrat;mso-bidi-font-family:Montserrat'><span style='mso-list:Ignore'>4.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><![endif]><span
dir=LTR></span><span lang=EN-US style='font-size:9.0pt;font-family:Montserrat;
mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi'>Actively
moves impaired arm across the body. The rest of the body moves as a block.<o:p></o:p></span></p>

<p class=MsoListParagraph style='margin-left:22.5pt;text-align:justify;
text-indent:-18.0pt;mso-list:l7 level1 lfo9'><![if !supportLists]><span
lang=EN-US style='font-size:9.0pt;font-family:Montserrat;mso-fareast-font-family:
Montserrat;mso-bidi-font-family:Montserrat'><span style='mso-list:Ignore'>5.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><![endif]><span
dir=LTR></span><span lang=EN-US style='font-size:9.0pt;font-family:Montserrat;
mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi'>Actively
moves impaired arm and leg rolling to intact side but overbalances.<o:p></o:p></span></p>

<p class=MsoListParagraph style='margin-left:22.5pt;text-align:justify;
text-indent:-18.0pt;mso-list:l7 level1 lfo9'><![if !supportLists]><span
lang=EN-US style='font-size:9.0pt;font-family:Montserrat;mso-fareast-font-family:
Montserrat;mso-bidi-font-family:Montserrat'><span style='mso-list:Ignore'>6.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><![endif]><span
dir=LTR></span><span lang=EN-US style='font-size:9.0pt;font-family:Montserrat;
mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi'>Rolls to
intact side in 3 seconds without use of hands.<o:p></o:p></span></p>

<p class=MsoListParagraph style='margin-left:22.5pt;text-align:justify'><span
lang=EN-US style='font-size:9.0pt;font-family:Montserrat;mso-bidi-font-family:
"Times New Roman";mso-bidi-theme-font:major-bidi;color:white;mso-themecolor:
background1'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal style='text-align:justify;background:#3AC2BA'><span
lang=EN-US style='font-size:10.0pt;font-family:"Montserrat SemiBold";
mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi;
color:white;mso-themecolor:background1'>Supine to Sitting over Side of Bed<o:p></o:p></span></p>

<p class=MsoListParagraph style='margin-left:22.5pt;text-align:justify;
text-indent:-18.0pt;mso-list:l18 level1 lfo11'><![if !supportLists]><span
lang=EN-US style='font-size:9.0pt;font-family:Montserrat;mso-fareast-font-family:
Montserrat;mso-bidi-font-family:Montserrat'><span style='mso-list:Ignore'>1.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><![endif]><span
dir=LTR></span><span lang=EN-US style='font-size:9.0pt;font-family:Montserrat;
mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi'>Pt
assisted to the side-lying position: Patient lifts head sideways but can�t sit
up.<o:p></o:p></span></p>

<p class=MsoListParagraph style='margin-left:22.5pt;text-align:justify;
text-indent:-18.0pt;mso-list:l18 level1 lfo11'><![if !supportLists]><span
lang=EN-US style='font-size:9.0pt;font-family:Montserrat;mso-fareast-font-family:
Montserrat;mso-bidi-font-family:Montserrat'><span style='mso-list:Ignore'>2.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><![endif]><span
dir=LTR></span><span lang=EN-US style='font-size:9.0pt;font-family:Montserrat;
mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi'>Pt may
be assisted to side-lying &amp; is assisted to sitting but has head control
throughout.<o:p></o:p></span></p>

<p class=MsoListParagraph style='margin-left:22.5pt;text-align:justify;
text-indent:-18.0pt;mso-list:l18 level1 lfo11'><![if !supportLists]><span
lang=EN-US style='font-size:9.0pt;font-family:Montserrat;mso-fareast-font-family:
Montserrat;mso-bidi-font-family:Montserrat'><span style='mso-list:Ignore'>3.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><![endif]><span
dir=LTR></span><span lang=EN-US style='font-size:9.0pt;font-family:Montserrat;
mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi'>Pt may
be assisted to side-lying &amp; is assisted with lowering LEs off the bed to
assume sitting.<o:p></o:p></span></p>

<p class=MsoListParagraph style='margin-left:22.5pt;text-align:justify;
text-indent:-18.0pt;mso-list:l18 level1 lfo11'><![if !supportLists]><span
lang=EN-US style='font-size:9.0pt;font-family:Montserrat;mso-fareast-font-family:
Montserrat;mso-bidi-font-family:Montserrat'><span style='mso-list:Ignore'>4.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><![endif]><span
dir=LTR></span><span lang=EN-US style='font-size:9.0pt;font-family:Montserrat;
mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi'>Pt may
be assisted to side-lying but is able to sit up without help.<o:p></o:p></span></p>

<p class=MsoListParagraph style='margin-left:22.5pt;text-align:justify;
text-indent:-18.0pt;mso-list:l18 level1 lfo11'><![if !supportLists]><span
lang=EN-US style='font-size:9.0pt;font-family:Montserrat;mso-fareast-font-family:
Montserrat;mso-bidi-font-family:Montserrat'><span style='mso-list:Ignore'>5.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><![endif]><span
dir=LTR></span><span lang=EN-US style='font-size:9.0pt;font-family:Montserrat;
mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi'>Pt able
to move from supine to sitting without help.<o:p></o:p></span></p>

<p class=MsoListParagraph style='margin-left:22.5pt;text-align:justify;
text-indent:-18.0pt;mso-list:l18 level1 lfo11'><![if !supportLists]><span
lang=EN-US style='font-size:9.0pt;font-family:Montserrat;mso-fareast-font-family:
Montserrat;mso-bidi-font-family:Montserrat'><span style='mso-list:Ignore'>6.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><![endif]><span
dir=LTR></span><span lang=EN-US style='font-size:9.0pt;font-family:Montserrat;
mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi'>Pt able
to move from supine to sitting without help in 10 seconds.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:22.5pt;text-align:justify;text-indent:
-18.0pt'><span lang=EN-US style='font-size:9.0pt;font-family:Montserrat;
mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal style='text-align:justify;background:#3AC2BA'><span
lang=EN-US style='font-size:10.0pt;font-family:"Montserrat SemiBold";
mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi;
color:white;mso-themecolor:background1'>Balanced Sitting</span><b><span
lang=EN-US style='font-size:10.0pt;font-family:Montserrat;mso-bidi-font-family:
"Times New Roman";mso-bidi-theme-font:major-bidi;color:white;mso-themecolor:
background1'><o:p></o:p></span></b></p>

<p class=MsoListParagraph style='margin-left:22.5pt;text-align:justify;
text-indent:-18.0pt;mso-list:l11 level1 lfo13'><![if !supportLists]><span
lang=EN-US style='font-size:9.0pt;font-family:Montserrat;mso-fareast-font-family:
Montserrat;mso-bidi-font-family:Montserrat'><span style='mso-list:Ignore'>1.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><![endif]><span
dir=LTR></span><span lang=EN-US style='font-size:9.0pt;font-family:Montserrat;
mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi'>Pt is
assisted to sitting and needs support to remain sitting.<o:p></o:p></span></p>

<p class=MsoListParagraph style='margin-left:22.5pt;text-align:justify;
text-indent:-18.0pt;mso-list:l11 level1 lfo13'><![if !supportLists]><span
lang=EN-US style='font-size:9.0pt;font-family:Montserrat;mso-fareast-font-family:
Montserrat;mso-bidi-font-family:Montserrat'><span style='mso-list:Ignore'>2.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><![endif]><span
dir=LTR></span><span lang=EN-US style='font-size:9.0pt;font-family:Montserrat;
mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi'>Pt sits
unsupported for 10 seconds with arms folded, knees and feet together &amp; feet
on the floor.<o:p></o:p></span></p>

<p class=MsoListParagraph style='margin-left:22.5pt;text-align:justify;
text-indent:-18.0pt;mso-list:l11 level1 lfo13'><![if !supportLists]><span
lang=EN-US style='font-size:9.0pt;font-family:Montserrat;mso-fareast-font-family:
Montserrat;mso-bidi-font-family:Montserrat'><span style='mso-list:Ignore'>3.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><![endif]><span
dir=LTR></span><span lang=EN-US style='font-size:9.0pt;font-family:Montserrat;
mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi'>Pt sits
unsupported with weight shifted forward and evenly distributed over both hips/legs.
Head and thoracic spine extended.<o:p></o:p></span></p>

<p class=MsoListParagraph style='margin-left:22.5pt;text-align:justify;
text-indent:-18.0pt;mso-list:l11 level1 lfo13'><![if !supportLists]><span
lang=EN-US style='font-size:9.0pt;font-family:Montserrat;mso-fareast-font-family:
Montserrat;mso-bidi-font-family:Montserrat'><span style='mso-list:Ignore'>4.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><![endif]><span
dir=LTR></span><span lang=EN-US style='font-size:9.0pt;font-family:Montserrat;
mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi'>Sits
unsupported with feet together on the floor. Hands resting on thighs. Without
moving the legs, the patient turns the head and trunk to look behind the right
and left shoulders.<o:p></o:p></span></p>

<p class=MsoListParagraph style='margin-left:22.5pt;text-align:justify;
text-indent:-18.0pt;mso-list:l11 level1 lfo13'><![if !supportLists]><span
lang=EN-US style='font-size:9.0pt;font-family:Montserrat;mso-fareast-font-family:
Montserrat;mso-bidi-font-family:Montserrat'><span style='mso-list:Ignore'>5.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><![endif]><span
dir=LTR></span><span lang=EN-US style='font-size:9.0pt;font-family:Montserrat;
mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi'>Sits
unsupported with feet together on the floor. Without allowing the legs or feet
to move &amp; without holding on the patient must reach forward to touch the
floor (10 cm or 4 inches in front of them) the affected arm may be supported if
necessary.<o:p></o:p></span></p>

<p class=MsoListParagraph style='margin-left:22.5pt;text-align:justify;
text-indent:-18.0pt;mso-list:l11 level1 lfo13'><![if !supportLists]><span
lang=EN-US style='font-size:9.0pt;font-family:Montserrat;mso-fareast-font-family:
Montserrat;mso-bidi-font-family:Montserrat'><span style='mso-list:Ignore'>6.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><![endif]><span
dir=LTR></span><span lang=EN-US style='font-size:9.0pt;font-family:Montserrat;
mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi'>Sits on
stool unsupported with feet on the floor. Pt reaches sideways without moving
the legs or holding on and returns to sitting position. Support the affected
arm if needed.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify'><span lang=EN-US
style='font-size:9.0pt;font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal style='text-align:justify;background:#3AC2BA'><span
lang=EN-US style='font-size:10.0pt;font-family:"Montserrat SemiBold";
mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi;
color:white;mso-themecolor:background1'>Sitting to Standing<o:p></o:p></span></p>

<p class=MsoListParagraph style='margin-left:22.5pt;text-align:justify;
text-indent:-18.0pt;mso-list:l5 level1 lfo15'><![if !supportLists]><span
lang=EN-US style='font-size:9.0pt;font-family:Montserrat;mso-fareast-font-family:
Montserrat;mso-bidi-font-family:Montserrat'><span style='mso-list:Ignore'>1.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><![endif]><span
dir=LTR></span><span lang=EN-US style='font-size:9.0pt;font-family:Montserrat;
mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi'>Pt
assisted to standing � any method.<o:p></o:p></span></p>

<p class=MsoListParagraph style='margin-left:22.5pt;text-align:justify;
text-indent:-18.0pt;mso-list:l5 level1 lfo15'><![if !supportLists]><span
lang=EN-US style='font-size:9.0pt;font-family:Montserrat;mso-fareast-font-family:
Montserrat;mso-bidi-font-family:Montserrat'><span style='mso-list:Ignore'>2.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><![endif]><span
dir=LTR></span><span lang=EN-US style='font-size:9.0pt;font-family:Montserrat;
mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi'>Pt
assisted to standing. The patient�s weight is unevenly distributed &amp; may
use hands for support.<o:p></o:p></span></p>

<p class=MsoListParagraph style='margin-left:22.5pt;text-align:justify;
text-indent:-18.0pt;mso-list:l5 level1 lfo15'><![if !supportLists]><span
lang=EN-US style='font-size:9.0pt;font-family:Montserrat;mso-fareast-font-family:
Montserrat;mso-bidi-font-family:Montserrat'><span style='mso-list:Ignore'>3.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><![endif]><span
dir=LTR></span><span lang=EN-US style='font-size:9.0pt;font-family:Montserrat;
mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi'>Pt
stands up. The patient�s weight is evenly distributed, but hips and knees are
flexed � No use of hands for support.<o:p></o:p></span></p>

<p class=MsoListParagraph style='margin-left:22.5pt;text-align:justify;
text-indent:-18.0pt;mso-list:l5 level1 lfo15'><![if !supportLists]><span
lang=EN-US style='font-size:9.0pt;font-family:Montserrat;mso-fareast-font-family:
Montserrat;mso-bidi-font-family:Montserrat'><span style='mso-list:Ignore'>4.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><![endif]><span
dir=LTR></span><span lang=EN-US style='font-size:9.0pt;font-family:Montserrat;
mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi'>Pt
stands up. Remains standing for 5 seconds with hips and knees extended with
weight evenly distributed.<o:p></o:p></span></p>

<p class=MsoListParagraph style='margin-left:22.5pt;text-align:justify;
text-indent:-18.0pt;mso-list:l5 level1 lfo15'><![if !supportLists]><span
lang=EN-US style='font-size:9.0pt;font-family:Montserrat;mso-fareast-font-family:
Montserrat;mso-bidi-font-family:Montserrat'><span style='mso-list:Ignore'>5.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><![endif]><span
dir=LTR></span><span lang=EN-US style='font-size:9.0pt;font-family:Montserrat;
mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi'>Pt
stands up and sits down again. When standing hips &amp; knees are extended with
weight evenly distributed<o:p></o:p></span></p>

<p class=MsoListParagraph style='margin-left:22.5pt;text-align:justify;
text-indent:-18.0pt;mso-list:l5 level1 lfo15'><![if !supportLists]><span
lang=EN-US style='font-size:9.0pt;font-family:Montserrat;mso-fareast-font-family:
Montserrat;mso-bidi-font-family:Montserrat'><span style='mso-list:Ignore'>6.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><![endif]><span
dir=LTR></span><span lang=EN-US style='font-size:9.0pt;font-family:Montserrat;
mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi'>Pt
stands up and sits down again 3 x in 10 seconds with hips &amp; knees extended
&amp; weight evenly distributed<o:p></o:p></span></p>

<p class=MsoListParagraph style='margin-left:22.5pt;text-align:justify'><span
lang=EN-US style='font-size:9.0pt;font-family:Montserrat;mso-bidi-font-family:
"Times New Roman";mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal style='text-align:justify;background:#3AC2BA'><span
lang=EN-US style='font-size:10.0pt;font-family:"Montserrat SemiBold";
mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi;
color:white;mso-themecolor:background1'>Walking<o:p></o:p></span></p>

<p class=MsoListParagraph style='margin-left:22.5pt;text-align:justify;
text-indent:-18.0pt;mso-list:l19 level1 lfo17'><![if !supportLists]><span
lang=EN-US style='font-size:9.0pt;font-family:Montserrat;mso-fareast-font-family:
Montserrat;mso-bidi-font-family:Montserrat'><span style='mso-list:Ignore'>1.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><![endif]><span
dir=LTR></span><span lang=EN-US style='font-size:9.0pt;font-family:Montserrat;
mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi'>With
assistance, the patient stands on the affected leg with the affected weight-bearing
hip extended and steps forward with the intact leg.<o:p></o:p></span></p>

<p class=MsoListParagraph style='margin-left:22.5pt;text-align:justify;
text-indent:-18.0pt;mso-list:l19 level1 lfo17'><![if !supportLists]><span
lang=EN-US style='font-size:9.0pt;font-family:Montserrat;mso-fareast-font-family:
Montserrat;mso-bidi-font-family:Montserrat'><span style='mso-list:Ignore'>2.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><![endif]><span
dir=LTR></span><span lang=EN-US style='font-size:9.0pt;font-family:Montserrat;
mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi'>Walks
with the assistance of one person.<o:p></o:p></span></p>

<p class=MsoListParagraph style='margin-left:22.5pt;text-align:justify;
text-indent:-18.0pt;mso-list:l19 level1 lfo17'><![if !supportLists]><span
lang=EN-US style='font-size:9.0pt;font-family:Montserrat;mso-fareast-font-family:
Montserrat;mso-bidi-font-family:Montserrat'><span style='mso-list:Ignore'>3.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><![endif]><span
dir=LTR></span><span lang=EN-US style='font-size:9.0pt;font-family:Montserrat;
mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi'>Walks 10
feet or 3 meters without assistance but with an assistive device.<o:p></o:p></span></p>

<p class=MsoListParagraph style='margin-left:22.5pt;text-align:justify;
text-indent:-18.0pt;mso-list:l19 level1 lfo17'><![if !supportLists]><span
lang=EN-US style='font-size:9.0pt;font-family:Montserrat;mso-fareast-font-family:
Montserrat;mso-bidi-font-family:Montserrat'><span style='mso-list:Ignore'>4.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><![endif]><span
dir=LTR></span><span lang=EN-US style='font-size:9.0pt;font-family:Montserrat;
mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi'>Walks 16
feet or 5 meters without a device or assistance in 15 seconds.<o:p></o:p></span></p>

<p class=MsoListParagraph style='margin-left:22.5pt;text-align:justify;
text-indent:-18.0pt;mso-list:l19 level1 lfo17'><![if !supportLists]><span
lang=EN-US style='font-size:9.0pt;font-family:Montserrat;mso-fareast-font-family:
Montserrat;mso-bidi-font-family:Montserrat'><span style='mso-list:Ignore'>5.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><![endif]><span
dir=LTR></span><span lang=EN-US style='font-size:9.0pt;font-family:Montserrat;
mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi'>Walks 33
feet or 10 meters without assistance or a device. Can pick up a small object
from the floor with either hand or walk back in 25 seconds.<o:p></o:p></span></p>

<p class=MsoListParagraph style='margin-left:22.5pt;text-align:justify;
text-indent:-18.0pt;mso-list:l19 level1 lfo17'><![if !supportLists]><span
lang=EN-US style='font-size:9.0pt;font-family:Montserrat;mso-fareast-font-family:
Montserrat;mso-bidi-font-family:Montserrat'><span style='mso-list:Ignore'>6.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><![endif]><span
dir=LTR></span><span lang=EN-US style='font-size:9.0pt;font-family:Montserrat;
mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi'>Walks up
and down 4 steps with or without a device but without holding on to a rail 3 x
in 35 seconds.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify'><span lang=EN-US
style='font-size:9.0pt;font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
mso-bidi-theme-font:major-bidi'><span style='mso-spacerun:yes'>�</span><o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;background:#3AC2BA'><span
lang=EN-US style='font-size:10.0pt;font-family:"Montserrat SemiBold";
mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi;
color:white;mso-themecolor:background1'>Upper Arm Function<o:p></o:p></span></p>

<p class=MsoListParagraph style='margin-left:22.5pt;text-align:justify;
text-indent:-18.0pt;mso-list:l15 level1 lfo19'><![if !supportLists]><span
lang=EN-US style='font-size:9.0pt;font-family:Montserrat;mso-fareast-font-family:
Montserrat;mso-bidi-font-family:Montserrat'><span style='mso-list:Ignore'>1.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><![endif]><span
dir=LTR></span><span lang=EN-US style='font-size:9.0pt;font-family:Montserrat;
mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi'>Supine:
The therapist places the affected arm in 90 degrees shoulder flexion and holds
elbow in extension � hand toward the ceiling. The patient protracts the
affected shoulder actively.<o:p></o:p></span></p>

<p class=MsoListParagraph style='margin-left:22.5pt;text-align:justify;
text-indent:-18.0pt;mso-list:l15 level1 lfo19'><![if !supportLists]><span
lang=EN-US style='font-size:9.0pt;font-family:Montserrat;mso-fareast-font-family:
Montserrat;mso-bidi-font-family:Montserrat'><span style='mso-list:Ignore'>2.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><![endif]><span
dir=LTR></span><span lang=EN-US style='font-size:9.0pt;font-family:Montserrat;
mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi'>Supine:
The therapist places the affected arm in the above position. The patient must
maintain the position for 2 seconds with some external rotation and with the
elbow in at least 20 degrees of full extension.<o:p></o:p></span></p>

<p class=MsoListParagraph style='margin-left:22.5pt;text-align:justify;
text-indent:-18.0pt;mso-list:l15 level1 lfo19'><![if !supportLists]><span
lang=EN-US style='font-size:9.0pt;font-family:Montserrat;mso-fareast-font-family:
Montserrat;mso-bidi-font-family:Montserrat'><span style='mso-list:Ignore'>3.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><![endif]><span
dir=LTR></span><span lang=EN-US style='font-size:9.0pt;font-family:Montserrat;
mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi'>Supine: The
patient assumes the above position and brings a hand to the forehead and
extends the arm again. (flexion &amp; extension of elbow) The therapist may
assist with the supination of the forearm.<o:p></o:p></span></p>

<p class=MsoListParagraph style='margin-left:22.5pt;text-align:justify;
text-indent:-18.0pt;mso-list:l15 level1 lfo19'><![if !supportLists]><span
lang=EN-US style='font-size:9.0pt;font-family:Montserrat;mso-fareast-font-family:
Montserrat;mso-bidi-font-family:Montserrat'><span style='mso-list:Ignore'>4.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><![endif]><span
dir=LTR></span><span lang=EN-US style='font-size:9.0pt;font-family:Montserrat;
mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi'>Sitting:
The therapist places the affected arm in 90 degrees of forward flexion. The patient
must hold the affected arm in position for 2 seconds with some shoulder
external rotation and forearm supination. No excessive shoulder elevation or
pronation.<o:p></o:p></span></p>

<p class=MsoListParagraph style='margin-left:22.5pt;text-align:justify;
text-indent:-18.0pt;mso-list:l15 level1 lfo19'><![if !supportLists]><span
lang=EN-US style='font-size:9.0pt;font-family:Montserrat;mso-fareast-font-family:
Montserrat;mso-bidi-font-family:Montserrat'><span style='mso-list:Ignore'>5.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><![endif]><span
dir=LTR></span><span lang=EN-US style='font-size:9.0pt;font-family:Montserrat;
mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi'>Sitting:
Patient lifts affected arm to 90 degrees forward flexion - holds it there for
10 seconds and then lowers it with some shoulder external rotation and forearm
supination. No pronation.<o:p></o:p></span></p>

<p class=MsoListParagraph style='margin-left:22.5pt;text-align:justify;
text-indent:-18.0pt;mso-list:l15 level1 lfo19'><![if !supportLists]><span
lang=EN-US style='font-size:9.0pt;font-family:Montserrat;mso-fareast-font-family:
Montserrat;mso-bidi-font-family:Montserrat'><span style='mso-list:Ignore'>6.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><![endif]><span
dir=LTR></span><span lang=EN-US style='font-size:9.0pt;font-family:Montserrat;
mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi'>Standing:
Have the patient�s affected arm abducted to 90 degrees with palm flat against a
wall. The patient must maintain arm position while turning the body toward the
wall.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify'><span lang=EN-US
style='font-size:9.0pt;font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal style='text-align:justify;background:#3AC2BA'><span
lang=EN-US style='font-size:10.0pt;font-family:"Montserrat SemiBold";
mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi;
color:white;mso-themecolor:background1'>Hand Movements<o:p></o:p></span></p>

<p class=MsoListParagraph style='margin-left:22.5pt;text-align:justify;
text-indent:-18.0pt;mso-list:l13 level1 lfo21'><![if !supportLists]><span
lang=EN-US style='font-size:9.0pt;font-family:Montserrat;mso-fareast-font-family:
Montserrat;mso-bidi-font-family:Montserrat'><span style='mso-list:Ignore'>1.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><![endif]><span
dir=LTR></span><span lang=EN-US style='font-size:9.0pt;font-family:Montserrat;
mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi'>Sitting
at a table (Wrist Extension): Affected forearm resting on the table. Place a cylindrical
object in the palm of the patient�s hand. The patient asked to lift an object
off the table by extending the wrist � no elbow flexion allowed.<o:p></o:p></span></p>

<p class=MsoListParagraph style='margin-left:22.5pt;text-align:justify;
text-indent:-18.0pt;mso-list:l13 level1 lfo21'><![if !supportLists]><span
lang=EN-US style='font-size:9.0pt;font-family:Montserrat;mso-fareast-font-family:
Montserrat;mso-bidi-font-family:Montserrat'><span style='mso-list:Ignore'>2.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><![endif]><span
dir=LTR></span><span lang=EN-US style='font-size:9.0pt;font-family:Montserrat;
mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi'>Sitting
at a table (Radial Deviation of Wrist): The therapist should place a forearm
with the ulnar side on the table in the mid-pronation / supination position.
Thumb in line with forearm and wrist in extension. Fingers around a cylindrical
object. The patient is asked to lift the handoff table. No wrist flexion or
extension.<o:p></o:p></span></p>

<p class=MsoListParagraph style='margin-left:22.5pt;text-align:justify;
text-indent:-18.0pt;mso-list:l13 level1 lfo21'><![if !supportLists]><span
lang=EN-US style='font-size:9.0pt;font-family:Montserrat;mso-fareast-font-family:
Montserrat;mso-bidi-font-family:Montserrat'><span style='mso-list:Ignore'>3.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><![endif]><span
dir=LTR></span><span lang=EN-US style='font-size:9.0pt;font-family:Montserrat;
mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi'>Sitting
(Pronation / Supination): Affected arm on the table with elbow unsupported at the
side. The patient asked to supinate and pronate the forearm (� range
acceptable).<o:p></o:p></span></p>

<p class=MsoListParagraph style='margin-left:22.5pt;text-align:justify;
text-indent:-18.0pt;mso-list:l13 level1 lfo21'><![if !supportLists]><span
lang=EN-US style='font-size:9.0pt;font-family:Montserrat;mso-fareast-font-family:
Montserrat;mso-bidi-font-family:Montserrat'><span style='mso-list:Ignore'>4.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><![endif]><span
dir=LTR></span><span lang=EN-US style='font-size:9.0pt;font-family:Montserrat;
mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi'>Place a
5-inch ball on the table so that the patient has to reach forward with arms
extended to reach it. Have the patient reach forward with shoulders protracted,
elbows extended, and wrist in neutral or extended, pick up the ball with both
hands, and put it back down in the same spot.<o:p></o:p></span></p>

<p class=MsoListParagraph style='margin-left:22.5pt;text-align:justify;
text-indent:-18.0pt;mso-list:l13 level1 lfo21'><![if !supportLists]><span
lang=EN-US style='font-size:9.0pt;font-family:Montserrat;mso-fareast-font-family:
Montserrat;mso-bidi-font-family:Montserrat'><span style='mso-list:Ignore'>5.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><![endif]><span
dir=LTR></span><span lang=EN-US style='font-size:9.0pt;font-family:Montserrat;
mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi'>Have the
patient pick up a polystyrene cup with their affected hand and put it on the
table on the other side of their body without any alteration to the cup.<o:p></o:p></span></p>

<p class=MsoListParagraph style='margin-left:22.5pt;text-align:justify;
text-indent:-18.0pt;mso-list:l13 level1 lfo21'><![if !supportLists]><span
lang=EN-US style='font-size:9.0pt;font-family:Montserrat;mso-fareast-font-family:
Montserrat;mso-bidi-font-family:Montserrat'><span style='mso-list:Ignore'>6.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><![endif]><span
dir=LTR></span><span lang=EN-US style='font-size:9.0pt;font-family:Montserrat;
mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi'>Continuous
opposition of thumb to each finger 14 x in 10 seconds. Each finger, in turn,
taps the thumb, starting with the index finger. Do not allow the thumb to slide
from one finger to the other or go backward.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify'><span lang=EN-US
style='font-size:9.0pt;font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal style='text-align:justify;background:#3AC2BA'><span
lang=EN-US style='font-size:10.0pt;font-family:"Montserrat SemiBold";
mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi;
color:white;mso-themecolor:background1'>Advanced Hand Activities<o:p></o:p></span></p>

<p class=MsoListParagraph style='margin-left:22.5pt;text-align:justify;
text-indent:-18.0pt;mso-list:l20 level1 lfo7'><![if !supportLists]><span
lang=EN-US style='font-size:9.0pt;font-family:Montserrat;mso-fareast-font-family:
Montserrat;mso-bidi-font-family:Montserrat'><span style='mso-list:Ignore'>1.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><![endif]><span
dir=LTR></span><span lang=EN-US style='font-size:9.0pt;font-family:Montserrat;
mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi'>Have the
patient reach forward to pick up the top of a pen with their affected hand,
bring the affected arm back to their side, and put the pen cap down in front of
them.<o:p></o:p></span></p>

<p class=MsoListParagraph style='margin-left:22.5pt;text-align:justify;
text-indent:-18.0pt;mso-list:l20 level1 lfo7'><![if !supportLists]><span
lang=EN-US style='font-size:9.0pt;font-family:Montserrat;mso-fareast-font-family:
Montserrat;mso-bidi-font-family:Montserrat'><span style='mso-list:Ignore'>2.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><![endif]><span
dir=LTR></span><span lang=EN-US style='font-size:9.0pt;font-family:Montserrat;
mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi'>Place eight
jellybeans (beans), in a teacup, an arm�s length away on the affected side.
Place another teacup an arm�s length away on the intact side. Have the patient
pick up one jellybean with their affected hand and place the jellybean in the
cup on the intact side.<o:p></o:p></span></p>

<p class=MsoListParagraph style='margin-left:22.5pt;text-align:justify;
text-indent:-18.0pt;mso-list:l20 level1 lfo7'><![if !supportLists]><span
lang=EN-US style='font-size:9.0pt;font-family:Montserrat;mso-fareast-font-family:
Montserrat;mso-bidi-font-family:Montserrat'><span style='mso-list:Ignore'>3.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><![endif]><span
dir=LTR></span><span lang=EN-US style='font-size:9.0pt;font-family:Montserrat;
mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi'>Draw a
vertical line on a piece of paper. Have the patient draw horizontal lines to
touch the vertical line. The goal is ten lines in 20 seconds, with at least five
lines stopping at the vertical.<o:p></o:p></span></p>

<p class=MsoListParagraph style='margin-left:22.5pt;text-align:justify;
text-indent:-18.0pt;mso-list:l20 level1 lfo7'><![if !supportLists]><span
lang=EN-US style='font-size:9.0pt;font-family:Montserrat;mso-fareast-font-family:
Montserrat;mso-bidi-font-family:Montserrat'><span style='mso-list:Ignore'>4.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><![endif]><span
dir=LTR></span><span lang=EN-US style='font-size:9.0pt;font-family:Montserrat;
mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi'>Have the
patient pick up a pen/pencil with their affected hand, hold the pen as for
writing, and position it without assistance and make rapid consecutive dots
(not strokes) on a sheet of paper. Goal: at least two dots a second for 5
seconds.<o:p></o:p></span></p>

<p class=MsoListParagraph style='margin-left:22.5pt;text-align:justify;
text-indent:-18.0pt;mso-list:l20 level1 lfo7'><![if !supportLists]><span
lang=EN-US style='font-size:9.0pt;font-family:Montserrat;mso-fareast-font-family:
Montserrat;mso-bidi-font-family:Montserrat'><span style='mso-list:Ignore'>5.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><![endif]><span
dir=LTR></span><span lang=EN-US style='font-size:9.0pt;font-family:Montserrat;
mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi'>Have the
patient take a dessert spoon of liquid to their mouth with their affected hand
without lowering the head toward the spoon or spilling.<o:p></o:p></span></p>

<p class=MsoListParagraph style='margin-left:22.5pt;text-align:justify;
text-indent:-18.0pt;mso-list:l20 level1 lfo7'><![if !supportLists]><span
lang=EN-US style='font-size:9.0pt;font-family:Montserrat;mso-fareast-font-family:
Montserrat;mso-bidi-font-family:Montserrat'><span style='mso-list:Ignore'>6.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><![endif]><span
dir=LTR></span><span lang=EN-US style='font-size:9.0pt;font-family:Montserrat;
mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi'>Have the
patient hold a comb and comb the back of their head with the affected arm in
abduction and external rotation, forearm in supination.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify'><span lang=EN-US
style='font-size:9.0pt;font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal style='text-align:justify;background:#3AC2BA'><span
lang=EN-US style='font-size:10.0pt;font-family:"Montserrat SemiBold";
mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi;
color:white;mso-themecolor:background1'>General Tonus (check one � add �6� to
score if tone on the affected side is normal)<o:p></o:p></span></p>

<p class=MsoListParagraph style='margin-left:22.5pt;text-align:justify;
text-indent:-18.0pt;mso-list:l9 level1 lfo8'><![if !supportLists]><span
lang=EN-US style='font-size:9.0pt;font-family:Montserrat;mso-fareast-font-family:
Montserrat;mso-bidi-font-family:Montserrat'><span style='mso-list:Ignore'>1.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><![endif]><span
dir=LTR></span><span lang=EN-US style='font-size:9.0pt;font-family:Montserrat;
mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi'>Flaccid,
limp, no resistance when body parts are handled.<o:p></o:p></span></p>

<p class=MsoListParagraph style='margin-left:22.5pt;text-align:justify;
text-indent:-18.0pt;mso-list:l9 level1 lfo8'><![if !supportLists]><span
lang=EN-US style='font-size:9.0pt;font-family:Montserrat;mso-fareast-font-family:
Montserrat;mso-bidi-font-family:Montserrat'><span style='mso-list:Ignore'>2.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><![endif]><span
dir=LTR></span><span lang=EN-US style='font-size:9.0pt;font-family:Montserrat;
mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi'>Some
resistance felt as body parts are moved.<o:p></o:p></span></p>

<p class=MsoListParagraph style='margin-left:22.5pt;text-align:justify;
text-indent:-18.0pt;mso-list:l9 level1 lfo8'><![if !supportLists]><span
lang=EN-US style='font-size:9.0pt;font-family:Montserrat;mso-fareast-font-family:
Montserrat;mso-bidi-font-family:Montserrat'><span style='mso-list:Ignore'>3.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><![endif]><span
dir=LTR></span><span lang=EN-US style='font-size:9.0pt;font-family:Montserrat;
mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi'>Variable,
sometimes flaccid, sometimes good tone, sometimes hypertonic.<o:p></o:p></span></p>

<p class=MsoListParagraph style='margin-left:22.5pt;text-align:justify;
text-indent:-18.0pt;mso-list:l9 level1 lfo8'><![if !supportLists]><span
lang=EN-US style='font-size:9.0pt;font-family:Montserrat;mso-fareast-font-family:
Montserrat;mso-bidi-font-family:Montserrat'><span style='mso-list:Ignore'>4.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><![endif]><span
dir=LTR></span><span lang=EN-US style='font-size:9.0pt;font-family:Montserrat;
mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi'>Hypertonic
50% of the time<o:p></o:p></span></p>

<p class=MsoListParagraph style='margin-left:22.5pt;text-align:justify;
text-indent:-18.0pt;mso-list:l9 level1 lfo8'><![if !supportLists]><span
lang=EN-US style='font-size:9.0pt;font-family:Montserrat;mso-fareast-font-family:
Montserrat;mso-bidi-font-family:Montserrat'><span style='mso-list:Ignore'>5.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><![endif]><span
dir=LTR></span><span lang=EN-US style='font-size:9.0pt;font-family:Montserrat;
mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi'>Hypertonic
all of the time<o:p></o:p></span></p>

<p class=MsoListParagraph style='margin-left:22.5pt;text-align:justify;
text-indent:-18.0pt;mso-list:l9 level1 lfo8'><![if !supportLists]><span
lang=EN-US style='font-size:9.0pt;font-family:Montserrat;mso-fareast-font-family:
Montserrat;mso-bidi-font-family:Montserrat'><span style='mso-list:Ignore'>6.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><![endif]><span
dir=LTR></span><span lang=EN-US style='font-size:9.0pt;font-family:Montserrat;
mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi'>Consistently
normal response<o:p></o:p></span></p>

<div style='mso-element:para-border-div;border:none;border-bottom:solid windowtext 1.0pt;
mso-border-bottom-alt:solid windowtext .75pt;padding:0cm 0cm 1.0pt 0cm;
margin-left:324.0pt;margin-right:0cm'>

<p class=MsoNormal style='border:none;mso-border-bottom-alt:solid windowtext .75pt;
padding:0cm;mso-padding-alt:0cm 0cm 1.0pt 0cm'><b><span lang=EN-US
style='font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
mso-bidi-theme-font:major-bidi;color:#00B0F0'>Total Score:<span
style='mso-spacerun:yes'>�������������������������� </span><span
style='mso-spacerun:yes'>�</span>/54<o:p></o:p></span></b></p>

</div>

<div style='mso-element:para-border-div;border:none;border-bottom:solid windowtext 1.0pt;
mso-border-bottom-alt:solid windowtext .75pt;padding:0cm 0cm 1.0pt 0cm'>

<p class=MsoNormal style='border:none;mso-border-bottom-alt:solid windowtext .75pt;
padding:0cm;mso-padding-alt:0cm 0cm 1.0pt 0cm'><b><span lang=EN-US
style='font-size:12.0pt;font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
mso-bidi-theme-font:major-bidi;color:#00B0F0'><o:p>&nbsp;</o:p></span></b></p>

<p class=MsoNormal style='border:none;mso-border-bottom-alt:solid windowtext .75pt;
padding:0cm;mso-padding-alt:0cm 0cm 1.0pt 0cm'><b><span lang=EN-US
style='font-size:12.0pt;font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
mso-bidi-theme-font:major-bidi;color:#00B0F0'><o:p>&nbsp;</o:p></span></b></p>

<p class=MsoNormal style='border:none;mso-border-bottom-alt:solid windowtext .75pt;
padding:0cm;mso-padding-alt:0cm 0cm 1.0pt 0cm'><b><span lang=EN-US
style='font-size:12.0pt;font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
mso-bidi-theme-font:major-bidi;color:#00B0F0'><o:p>&nbsp;</o:p></span></b></p>

</div>

<p class=MsoNormal><span lang=EN-US style='font-size:10.0pt;font-family:"Montserrat SemiBold";
mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi'>References:</span><b><span
lang=EN-US style='font-size:10.0pt;font-family:Montserrat;mso-bidi-font-family:
"Times New Roman";mso-bidi-theme-font:major-bidi'> </span></b><span lang=EN-US
style='font-size:8.0pt;font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
mso-bidi-theme-font:major-bidi'>Jump up&#8593; English, C. K., Hillier, S. L.,
et al. &quot;The sensitivity of three commonly used outcome measures to detect
change among patients receiving inpatient rehabilitation following
stroke.&quot; Clin Rehab 2006 20(1): 52-55</span><span lang=AR-SA dir=RTL
style='font-size:8.0pt;font-family:"Times New Roman",serif;mso-ascii-font-family:
Montserrat;mso-hansi-font-family:Montserrat;mso-bidi-theme-font:major-bidi'><o:p></o:p></span></p>

</div>

</body>

</html>
