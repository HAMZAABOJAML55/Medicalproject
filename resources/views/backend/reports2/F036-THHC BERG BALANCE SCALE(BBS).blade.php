<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv=Content-Type content="text/html; charset=windows-1252">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<title>F036-THHC BERG BALANCE SCALE(BBS)| @yield('title')</title>

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
	{font-family:"Arial Narrow";
	panose-1:2 11 6 6 2 2 2 3 2 4;
	mso-font-charset:0;
	mso-generic-font-family:swiss;
	mso-font-pitch:variable;
	mso-font-signature:647 2048 0 0 159 0;}
@font-face
	{font-family:"Montserrat SemiBold";
	mso-font-alt:Calibri;
	mso-font-charset:0;
	mso-generic-font-family:auto;
	mso-font-pitch:variable;
	mso-font-signature:536871439 3 0 0 407 0;}
@font-face
	{font-family:"Headline R";
	mso-font-charset:129;
	mso-generic-font-family:roman;
	mso-font-pitch:variable;
	mso-font-signature:-2147482969 165117179 16 0 524288 0;}
@font-face
	{font-family:"\@Headline R";
	mso-font-charset:129;
	mso-generic-font-family:roman;
	mso-font-pitch:variable;
	mso-font-signature:-2147482969 165117179 16 0 524288 0;}
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
	{mso-footnote-separator:url("F036-THHC%20BERG%20BALANCE%20SCALE\(BBS\).files/header.htm") fs;
	mso-footnote-continuation-separator:url("F036-THHC%20BERG%20BALANCE%20SCALE\(BBS\).files/header.htm") fcs;
	mso-endnote-separator:url("F036-THHC%20BERG%20BALANCE%20SCALE\(BBS\).files/header.htm") es;
	mso-endnote-continuation-separator:url("F036-THHC%20BERG%20BALANCE%20SCALE\(BBS\).files/header.htm") ecs;}
@page WordSection1
	{size:595.5pt 842.0pt;
	margin:36.0pt 36.0pt 36.0pt 36.0pt;
	mso-header-margin:79.2pt;
	mso-footer-margin:14.4pt;
	mso-header:url("F036-THHC%20BERG%20BALANCE%20SCALE\(BBS\).files/header.htm") h1;
	mso-footer:url("F036-THHC%20BERG%20BALANCE%20SCALE\(BBS\).files/header.htm") f1;
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
	{mso-list-id:693770531;
	mso-list-type:hybrid;
	mso-list-template-ids:1718634126 67698699 67698713 67698715 67698703 67698713 67698715 67698703 67698713 67698715;}
@list l5:level1
	{mso-level-number-format:bullet;
	mso-level-text:\F0D8;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:55.0pt;
	text-indent:-18.0pt;
	font-family:Wingdings;}
@list l5:level2
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:91.0pt;
	text-indent:-18.0pt;}
@list l5:level3
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	margin-left:127.0pt;
	text-indent:-9.0pt;}
@list l5:level4
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:163.0pt;
	text-indent:-18.0pt;}
@list l5:level5
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:199.0pt;
	text-indent:-18.0pt;}
@list l5:level6
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	margin-left:235.0pt;
	text-indent:-9.0pt;}
@list l5:level7
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:271.0pt;
	text-indent:-18.0pt;}
@list l5:level8
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:307.0pt;
	text-indent:-18.0pt;}
@list l5:level9
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	margin-left:343.0pt;
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

<p class=MsoNormal style='mso-line-height-alt:0pt'><span lang=EN-US
style='font-size:9.0pt;mso-bidi-font-size:8.0pt;font-family:Montserrat;
mso-fareast-font-family:"Arial Narrow";mso-bidi-font-family:"Times New Roman";
mso-bidi-theme-font:major-bidi;mso-bidi-font-weight:bold'>General Instructions<o:p></o:p></span></p>

<p class=MsoNormal style='line-height:3.05pt;mso-line-height-rule:exactly'><span
lang=EN-US style='font-size:9.0pt;mso-bidi-font-size:8.0pt;font-family:Montserrat;
mso-fareast-font-family:"Times New Roman";mso-bidi-font-family:"Times New Roman";
mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal style='margin-top:0cm;margin-right:22.0pt;margin-bottom:
0cm;margin-left:27.0pt;margin-bottom:.0001pt;text-align:justify'><span
lang=EN-US style='font-size:8.0pt;font-family:Montserrat;mso-fareast-font-family:
"Arial Narrow";mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi'>Please
demonstrate each task and/or give instructions as written. When scoring, please
record the lowest response category that applies for each item. <o:p></o:p></span></p>

<table class=MsoNormalTable border=0 cellspacing=0 cellpadding=0
 style='margin-left:.25pt;border-collapse:collapse;mso-table-layout-alt:fixed;
 mso-padding-alt:0cm 0cm 0cm 0cm'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;height:15.9pt'>
  <td width=606 colspan=2 valign=bottom style='width:454.25pt;padding:0cm 0cm 0cm 0cm;
  height:15.9pt'>
  <p class=MsoNormal style='margin-left:1.0pt;mso-line-height-alt:0pt'><b
  style='mso-bidi-font-weight:normal'><span lang=EN-US style='font-size:10.0pt;
  font-family:Montserrat;mso-fareast-font-family:"Times New Roman";mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=84 valign=bottom style='width:63.15pt;padding:0cm 0cm 0cm 0cm;
  height:15.9pt'>
  <p class=MsoNormal align=right style='text-align:right;mso-line-height-alt:
  0pt'><b style='mso-bidi-font-weight:normal'><span lang=EN-US
  style='font-size:10.0pt;font-family:Montserrat;mso-fareast-font-family:"Times New Roman";
  mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi'>Score
  (0-4)<o:p></o:p></span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:1;height:31.6pt'>
  <td width=47 valign=top style='width:35.45pt;padding:0cm 0cm 0cm 0cm;
  height:31.6pt'>
  <p class=MsoNormal align=center style='margin-top:0cm;margin-right:-.25pt;
  margin-bottom:0cm;margin-left:9.9pt;margin-bottom:.0001pt;text-align:center;
  text-indent:-2.75pt;mso-line-height-alt:0pt'><span lang=EN-US
  style='font-size:10.0pt;font-family:"Montserrat SemiBold";mso-fareast-font-family:
  "Times New Roman";mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:
  major-bidi;mso-bidi-font-weight:bold'>1.<o:p></o:p></span></p>
  </td>
  <td width=558 valign=bottom style='width:418.8pt;padding:0cm 0cm 0cm 0cm;
  height:31.6pt'>
  <p class=MsoNormal style='mso-line-height-alt:0pt'><b style='mso-bidi-font-weight:
  normal'><span lang=EN-US style='font-size:10.0pt;font-family:Montserrat;
  mso-fareast-font-family:"Times New Roman";mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi'>Sitting unsupported</span></b><b
  style='mso-bidi-font-weight:normal'><span lang=EN-US style='font-size:10.0pt;
  font-family:Montserrat;mso-fareast-font-family:"Arial Narrow";mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi'> with back unsupported but
  feet supported on floor</span></b><b style='mso-bidi-font-weight:normal'><span
  lang=EN-US style='font-size:10.0pt;font-family:Montserrat;mso-fareast-font-family:
  "Times New Roman";mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:
  major-bidi'><o:p></o:p></span></b></p>
  <p class=MsoNormal style='margin-right:191.0pt;mso-line-height-alt:0pt'><span
  lang=EN-US style='font-size:10.0pt;font-family:Montserrat;mso-fareast-font-family:
  "Arial Narrow";mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:
  major-bidi'><span style='mso-spacerun:yes'>�� </span>4 - able to sit safely
  and securely 2 minutes<o:p></o:p></span></p>
  <p class=MsoNormal style='line-height:.05pt;mso-line-height-rule:exactly'><b
  style='mso-bidi-font-weight:normal'><span lang=EN-US style='font-size:10.0pt;
  font-family:Montserrat;mso-fareast-font-family:"Arial Narrow";mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></b></p>
  <p class=MsoNormal style='mso-line-height-alt:0pt'><span lang=EN-US
  style='font-size:10.0pt;font-family:Montserrat;mso-fareast-font-family:"Arial Narrow";
  mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi'><span
  style='mso-spacerun:yes'>�� </span>3 - able to sit 2 minutes under
  supervision<o:p></o:p></span></p>
  <p class=MsoNormal style='line-height:.1pt;mso-line-height-rule:exactly'><b
  style='mso-bidi-font-weight:normal'><span lang=EN-US style='font-size:10.0pt;
  font-family:Montserrat;mso-fareast-font-family:"Arial Narrow";mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></b></p>
  <p class=MsoNormal style='line-height:99%'><span lang=EN-US style='font-size:
  10.0pt;line-height:99%;font-family:Montserrat;mso-fareast-font-family:"Arial Narrow";
  mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi'><span
  style='mso-spacerun:yes'>�� </span>2 - able to sit 30 seconds<o:p></o:p></span></p>
  <p class=MsoNormal style='line-height:99%'><span lang=EN-US style='font-size:
  10.0pt;line-height:99%;font-family:Montserrat;mso-fareast-font-family:"Arial Narrow";
  mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi'><span
  style='mso-spacerun:yes'>�� </span>1 - able to sit 10 seconds<o:p></o:p></span></p>
  <p class=MsoNormal style='mso-line-height-alt:0pt'><span lang=EN-US
  style='font-size:10.0pt;font-family:Montserrat;mso-fareast-font-family:"Arial Narrow";
  mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi'><span
  style='mso-spacerun:yes'>�� </span>0 - unable to sit without support 10 seconds<o:p></o:p></span></p>
  </td>
  <td width=84 valign=bottom style='width:63.15pt;padding:0cm 0cm 0cm 0cm;
  height:31.6pt'>
  <p class=MsoNormal align=right style='text-align:right;mso-line-height-alt:
  0pt'><b style='mso-bidi-font-weight:normal'><span lang=EN-US
  style='font-size:10.0pt;font-family:Montserrat;mso-fareast-font-family:"Times New Roman";
  mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi'>_______<o:p></o:p></span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:2;height:17.45pt'>
  <td width=47 valign=top style='width:35.45pt;padding:0cm 0cm 0cm 0cm;
  height:17.45pt'>
  <p class=MsoNormal align=center style='margin-top:0cm;margin-right:-.25pt;
  margin-bottom:0cm;margin-left:9.9pt;margin-bottom:.0001pt;text-align:center;
  text-indent:-2.75pt;mso-line-height-alt:0pt'><span lang=EN-US
  style='font-size:10.0pt;font-family:"Montserrat SemiBold";mso-fareast-font-family:
  "Times New Roman";mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:
  major-bidi;mso-bidi-font-weight:bold'>2.</span><b style='mso-bidi-font-weight:
  normal'><span lang=EN-US style='font-size:10.0pt;font-family:Montserrat;
  mso-fareast-font-family:"Times New Roman";mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi'><o:p></o:p></span></b></p>
  </td>
  <td width=558 valign=bottom style='width:418.8pt;padding:0cm 0cm 0cm 0cm;
  height:17.45pt'>
  <p class=MsoNormal style='mso-line-height-alt:0pt'><b style='mso-bidi-font-weight:
  normal'><span lang=EN-US style='font-size:10.0pt;font-family:Montserrat;
  mso-fareast-font-family:"Times New Roman";mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi'>Sitting to standing<o:p></o:p></span></b></p>
  <p class=MsoNormal style='mso-line-height-alt:0pt;mso-pagination:widow-orphan;
  tab-stops:14.2pt;text-autospace:ideograph-numeric ideograph-other'><span
  lang=EN-US style='font-size:10.0pt;font-family:Montserrat;mso-fareast-font-family:
  "Times New Roman";mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:
  major-bidi'><span style='mso-spacerun:yes'>�� </span>4 - able to stand
  without using hands and stabilize independently<o:p></o:p></span></p>
  <p class=MsoNormal style='line-height:.05pt;mso-line-height-rule:exactly'><span
  lang=EN-US style='font-size:10.0pt;font-family:Montserrat;mso-fareast-font-family:
  "Times New Roman";mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:
  major-bidi'><o:p>&nbsp;</o:p></span></p>
  <p class=MsoNormal style='mso-line-height-alt:0pt;mso-pagination:widow-orphan;
  tab-stops:14.2pt;text-autospace:ideograph-numeric ideograph-other'><span
  lang=EN-US style='font-size:10.0pt;font-family:Montserrat;mso-fareast-font-family:
  "Times New Roman";mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:
  major-bidi'><span style='mso-spacerun:yes'>�� </span>3 - able to stand
  independently using hands<o:p></o:p></span></p>
  <p class=MsoNormal style='line-height:.05pt;mso-line-height-rule:exactly'><span
  lang=EN-US style='font-size:10.0pt;font-family:Montserrat;mso-fareast-font-family:
  "Times New Roman";mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:
  major-bidi'><o:p>&nbsp;</o:p></span></p>
  <p class=MsoNormal style='mso-line-height-alt:0pt;mso-pagination:widow-orphan;
  tab-stops:14.2pt;text-autospace:ideograph-numeric ideograph-other'><span
  lang=EN-US style='font-size:10.0pt;font-family:Montserrat;mso-fareast-font-family:
  "Times New Roman";mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:
  major-bidi'><span style='mso-spacerun:yes'>�� </span>2 - able to stand using
  hands after several tries<o:p></o:p></span></p>
  <p class=MsoNormal style='line-height:.05pt;mso-line-height-rule:exactly'><span
  lang=EN-US style='font-size:10.0pt;font-family:Montserrat;mso-fareast-font-family:
  "Times New Roman";mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:
  major-bidi'><o:p>&nbsp;</o:p></span></p>
  <p class=MsoNormal style='mso-line-height-alt:0pt;mso-pagination:widow-orphan;
  tab-stops:14.2pt;text-autospace:ideograph-numeric ideograph-other'><span
  lang=EN-US style='font-size:10.0pt;font-family:Montserrat;mso-fareast-font-family:
  "Times New Roman";mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:
  major-bidi'><span style='mso-spacerun:yes'>�� </span>1 - needs minimal aid to
  stand or stabilize<o:p></o:p></span></p>
  <p class=MsoNormal style='line-height:.05pt;mso-line-height-rule:exactly'><span
  lang=EN-US style='font-size:10.0pt;font-family:Montserrat;mso-fareast-font-family:
  "Times New Roman";mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:
  major-bidi'><o:p>&nbsp;</o:p></span></p>
  <p class=MsoNormal style='mso-line-height-alt:0pt;mso-pagination:widow-orphan;
  tab-stops:14.2pt;text-autospace:ideograph-numeric ideograph-other'><span
  lang=EN-US style='font-size:10.0pt;font-family:Montserrat;mso-fareast-font-family:
  "Times New Roman";mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:
  major-bidi'><span style='mso-spacerun:yes'>�� </span>0 - needs moderate or
  maximal assist to stand<o:p></o:p></span></p>
  </td>
  <td width=84 valign=bottom style='width:63.15pt;padding:0cm 0cm 0cm 0cm;
  height:17.45pt'>
  <p class=MsoNormal align=right style='text-align:right;mso-line-height-alt:
  0pt'><b style='mso-bidi-font-weight:normal'><span lang=EN-US
  style='font-size:10.0pt;font-family:Montserrat;mso-fareast-font-family:"Times New Roman";
  mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi'>_______<o:p></o:p></span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:3;height:17.5pt'>
  <td width=47 valign=top style='width:35.45pt;padding:0cm 0cm 0cm 0cm;
  height:17.5pt'>
  <p class=MsoNormal align=center style='margin-top:0cm;margin-right:-.25pt;
  margin-bottom:0cm;margin-left:9.9pt;margin-bottom:.0001pt;text-align:center;
  text-indent:-2.75pt;mso-line-height-alt:0pt'><span lang=EN-US
  style='font-size:10.0pt;font-family:"Montserrat SemiBold";mso-fareast-font-family:
  "Times New Roman";mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:
  major-bidi;mso-bidi-font-weight:bold'>3.</span><b style='mso-bidi-font-weight:
  normal'><span lang=EN-US style='font-size:10.0pt;font-family:Montserrat;
  mso-fareast-font-family:"Times New Roman";mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi'><o:p></o:p></span></b></p>
  </td>
  <td width=558 valign=bottom style='width:418.8pt;padding:0cm 0cm 0cm 0cm;
  height:17.5pt'>
  <p class=MsoNormal style='mso-line-height-alt:0pt'><b style='mso-bidi-font-weight:
  normal'><span lang=EN-US style='font-size:10.0pt;font-family:Montserrat;
  mso-fareast-font-family:"Times New Roman";mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi'>Standing unsupported<o:p></o:p></span></b></p>
  <p class=MsoNormal style='mso-line-height-alt:0pt'><span lang=EN-US
  style='font-size:10.0pt;font-family:Montserrat;mso-fareast-font-family:"Arial Narrow";
  mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi'><span
  style='mso-spacerun:yes'>�� </span>4 - able to stand safely 2 minutes<o:p></o:p></span></p>
  <p class=MsoNormal style='line-height:.05pt;mso-line-height-rule:exactly'><span
  lang=EN-US style='font-size:10.0pt;font-family:Montserrat;mso-fareast-font-family:
  "Times New Roman";mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:
  major-bidi'><o:p>&nbsp;</o:p></span></p>
  <p class=MsoNormal style='mso-line-height-alt:0pt'><span lang=EN-US
  style='font-size:10.0pt;font-family:Montserrat;mso-fareast-font-family:"Arial Narrow";
  mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi'><span
  style='mso-spacerun:yes'>�� </span>3 - able to stand 2 minutes with
  supervision<o:p></o:p></span></p>
  <p class=MsoNormal style='line-height:99%'><span lang=EN-US style='font-size:
  10.0pt;line-height:99%;font-family:Montserrat;mso-fareast-font-family:"Arial Narrow";
  mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi'><span
  style='mso-spacerun:yes'>�� </span>2 - able to stand 30 seconds unsupported<o:p></o:p></span></p>
  <p class=MsoNormal style='mso-line-height-alt:0pt'><span lang=EN-US
  style='font-size:10.0pt;font-family:Montserrat;mso-fareast-font-family:"Arial Narrow";
  mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi'><span
  style='mso-spacerun:yes'>�� </span>1 - needs several tries to stand 30
  seconds unsupported<o:p></o:p></span></p>
  <p class=MsoNormal style='line-height:.05pt;mso-line-height-rule:exactly'><span
  lang=EN-US style='font-size:10.0pt;font-family:Montserrat;mso-fareast-font-family:
  "Times New Roman";mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:
  major-bidi'><o:p>&nbsp;</o:p></span></p>
  <p class=MsoNormal style='mso-line-height-alt:0pt'><span lang=EN-US
  style='font-size:10.0pt;font-family:Montserrat;mso-fareast-font-family:"Arial Narrow";
  mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi'><span
  style='mso-spacerun:yes'>�� </span>0 - unable to stand 30 seconds unassisted<o:p></o:p></span></p>
  </td>
  <td width=84 valign=bottom style='width:63.15pt;padding:0cm 0cm 0cm 0cm;
  height:17.5pt'>
  <p class=MsoNormal align=right style='text-align:right;mso-line-height-alt:
  0pt'><b style='mso-bidi-font-weight:normal'><span lang=EN-US
  style='font-size:10.0pt;font-family:Montserrat;mso-fareast-font-family:"Times New Roman";
  mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi'>_______<o:p></o:p></span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:4;height:17.5pt'>
  <td width=47 valign=top style='width:35.45pt;padding:0cm 0cm 0cm 0cm;
  height:17.5pt'>
  <p class=MsoNormal align=center style='margin-top:0cm;margin-right:-.25pt;
  margin-bottom:0cm;margin-left:9.9pt;margin-bottom:.0001pt;text-align:center;
  text-indent:-2.75pt;mso-line-height-alt:0pt'><span lang=EN-US
  style='font-size:10.0pt;font-family:"Montserrat SemiBold";mso-fareast-font-family:
  "Times New Roman";mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:
  major-bidi;mso-bidi-font-weight:bold'>4.</span><b style='mso-bidi-font-weight:
  normal'><span lang=EN-US style='font-size:10.0pt;font-family:Montserrat;
  mso-fareast-font-family:"Times New Roman";mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi'><o:p></o:p></span></b></p>
  </td>
  <td width=558 valign=bottom style='width:418.8pt;padding:0cm 0cm 0cm 0cm;
  height:17.5pt'>
  <p class=MsoNormal style='mso-line-height-alt:0pt'><b style='mso-bidi-font-weight:
  normal'><span lang=EN-US style='font-size:10.0pt;font-family:Montserrat;
  mso-fareast-font-family:"Times New Roman";mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi'>Standing to sitting<o:p></o:p></span></b></p>
  <p class=MsoNormal style='mso-line-height-alt:0pt'><span lang=EN-US
  style='font-size:10.0pt;font-family:Montserrat;mso-fareast-font-family:"Arial Narrow";
  mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi'><span
  style='mso-spacerun:yes'>�� </span>4 - sits safely with minimal use of hands<o:p></o:p></span></p>
  <p class=MsoNormal style='mso-line-height-alt:0pt'><span lang=EN-US
  style='font-size:10.0pt;font-family:Montserrat;mso-fareast-font-family:"Arial Narrow";
  mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi'><span
  style='mso-spacerun:yes'>�� </span>3 - controls descent by using hands<o:p></o:p></span></p>
  <p class=MsoNormal style='line-height:.05pt;mso-line-height-rule:exactly'><span
  lang=EN-US style='font-size:10.0pt;font-family:Montserrat;mso-fareast-font-family:
  "Times New Roman";mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:
  major-bidi'><o:p>&nbsp;</o:p></span></p>
  <p class=MsoNormal style='mso-line-height-alt:0pt'><span lang=EN-US
  style='font-size:10.0pt;font-family:Montserrat;mso-fareast-font-family:"Arial Narrow";
  mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi'><span
  style='mso-spacerun:yes'>�� </span>2 - uses back of legs against chair to control
  descent<o:p></o:p></span></p>
  <p class=MsoNormal style='line-height:99%'><span lang=EN-US style='font-size:
  10.0pt;line-height:99%;font-family:Montserrat;mso-fareast-font-family:"Arial Narrow";
  mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi'><span
  style='mso-spacerun:yes'>�� </span>1 - sits independently but has
  uncontrolled descent<o:p></o:p></span></p>
  <p class=MsoNormal style='mso-line-height-alt:0pt'><span lang=EN-US
  style='font-size:10.0pt;font-family:Montserrat;mso-fareast-font-family:"Arial Narrow";
  mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi'><span
  style='mso-spacerun:yes'>�� </span>0 needs assistance to sit<o:p></o:p></span></p>
  </td>
  <td width=84 valign=bottom style='width:63.15pt;padding:0cm 0cm 0cm 0cm;
  height:17.5pt'>
  <p class=MsoNormal align=right style='text-align:right;mso-line-height-alt:
  0pt'><b style='mso-bidi-font-weight:normal'><span lang=EN-US
  style='font-size:10.0pt;font-family:Montserrat;mso-fareast-font-family:"Times New Roman";
  mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi'>_______<o:p></o:p></span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:5;height:17.45pt'>
  <td width=47 valign=top style='width:35.45pt;padding:0cm 0cm 0cm 0cm;
  height:17.45pt'>
  <p class=MsoNormal align=center style='margin-top:0cm;margin-right:-.25pt;
  margin-bottom:0cm;margin-left:9.9pt;margin-bottom:.0001pt;text-align:center;
  text-indent:-2.75pt;mso-line-height-alt:0pt'><span lang=EN-US
  style='font-size:10.0pt;font-family:"Montserrat SemiBold";mso-fareast-font-family:
  "Times New Roman";mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:
  major-bidi;mso-bidi-font-weight:bold'>5.</span><b style='mso-bidi-font-weight:
  normal'><span lang=EN-US style='font-size:10.0pt;font-family:Montserrat;
  mso-fareast-font-family:"Times New Roman";mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi'><o:p></o:p></span></b></p>
  </td>
  <td width=558 valign=bottom style='width:418.8pt;padding:0cm 0cm 0cm 0cm;
  height:17.45pt'>
  <p class=MsoNormal style='mso-line-height-alt:0pt'><b style='mso-bidi-font-weight:
  normal'><span lang=EN-US style='font-size:10.0pt;font-family:Montserrat;
  mso-fareast-font-family:"Times New Roman";mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi'>Transfers<o:p></o:p></span></b></p>
  <p class=MsoNormal style='line-height:99%'><span lang=EN-US style='font-size:
  10.0pt;line-height:99%;font-family:Montserrat;mso-fareast-font-family:"Arial Narrow";
  mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi'><span
  style='mso-spacerun:yes'>�� </span>4 - able to transfer safely with minor use
  of hands<o:p></o:p></span></p>
  <p class=MsoNormal style='line-height:99%'><span lang=EN-US style='font-size:
  10.0pt;line-height:99%;font-family:Montserrat;mso-fareast-font-family:"Arial Narrow";
  mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi'><span
  style='mso-spacerun:yes'>�� </span>3 - able to transfer safely definite need
  of hands<o:p></o:p></span></p>
  <p class=MsoNormal style='line-height:.05pt;mso-line-height-rule:exactly'><span
  lang=EN-US style='font-size:10.0pt;font-family:Montserrat;mso-fareast-font-family:
  "Times New Roman";mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:
  major-bidi'><o:p>&nbsp;</o:p></span></p>
  <p class=MsoNormal style='mso-line-height-alt:0pt'><span lang=EN-US
  style='font-size:10.0pt;font-family:Montserrat;mso-fareast-font-family:"Arial Narrow";
  mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi'><span
  style='mso-spacerun:yes'>�� </span>2 - able to transfer with verbal cueing
  and/or supervision<o:p></o:p></span></p>
  <p class=MsoNormal style='line-height:.05pt;mso-line-height-rule:exactly'><span
  lang=EN-US style='font-size:10.0pt;font-family:Montserrat;mso-fareast-font-family:
  "Times New Roman";mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:
  major-bidi'><o:p>&nbsp;</o:p></span></p>
  <p class=MsoNormal style='mso-line-height-alt:0pt'><span lang=EN-US
  style='font-size:10.0pt;font-family:Montserrat;mso-fareast-font-family:"Arial Narrow";
  mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi'><span
  style='mso-spacerun:yes'>�� </span>1 - needs one person to assist<o:p></o:p></span></p>
  <p class=MsoNormal style='line-height:99%'><span lang=EN-US style='font-size:
  10.0pt;line-height:99%;font-family:Montserrat;mso-fareast-font-family:"Arial Narrow";
  mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi'><span
  style='mso-spacerun:yes'>�� </span>0 - needs two people to assist or
  supervise to be safe<o:p></o:p></span></p>
  </td>
  <td width=84 valign=bottom style='width:63.15pt;padding:0cm 0cm 0cm 0cm;
  height:17.45pt'>
  <p class=MsoNormal align=right style='text-align:right;mso-line-height-alt:
  0pt'><b style='mso-bidi-font-weight:normal'><span lang=EN-US
  style='font-size:10.0pt;font-family:Montserrat;mso-fareast-font-family:"Times New Roman";
  mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi'>_______<o:p></o:p></span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:6;height:17.5pt'>
  <td width=47 valign=top style='width:35.45pt;padding:0cm 0cm 0cm 0cm;
  height:17.5pt'>
  <p class=MsoNormal align=center style='margin-top:0cm;margin-right:-.25pt;
  margin-bottom:0cm;margin-left:9.9pt;margin-bottom:.0001pt;text-align:center;
  text-indent:-2.75pt;mso-line-height-alt:0pt'><span lang=EN-US
  style='font-size:10.0pt;font-family:"Montserrat SemiBold";mso-fareast-font-family:
  "Times New Roman";mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:
  major-bidi;mso-bidi-font-weight:bold'>6.</span><b style='mso-bidi-font-weight:
  normal'><span lang=EN-US style='font-size:10.0pt;font-family:Montserrat;
  mso-fareast-font-family:"Times New Roman";mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi'><o:p></o:p></span></b></p>
  </td>
  <td width=558 valign=bottom style='width:418.8pt;padding:0cm 0cm 0cm 0cm;
  height:17.5pt'>
  <p class=MsoNormal style='mso-line-height-alt:0pt'><b style='mso-bidi-font-weight:
  normal'><span lang=EN-US style='font-size:10.0pt;font-family:Montserrat;
  mso-fareast-font-family:"Times New Roman";mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi'>Standing </span></b><b style='mso-bidi-font-weight:
  normal'><span lang=EN-US style='font-size:10.0pt;font-family:Montserrat;
  mso-fareast-font-family:"Arial Narrow";mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi'>unsupported</span></b><b style='mso-bidi-font-weight:
  normal'><span lang=EN-US style='font-size:10.0pt;font-family:Montserrat;
  mso-fareast-font-family:"Times New Roman";mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi'> with eyes closed<o:p></o:p></span></b></p>
  <p class=MsoNormal style='margin-right:137.0pt;line-height:107%;mso-pagination:
  widow-orphan;tab-stops:28.65pt;text-autospace:ideograph-numeric ideograph-other'><span
  lang=EN-US style='font-size:10.0pt;line-height:107%;font-family:Montserrat;
  mso-fareast-font-family:"Arial Narrow";mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi'><span style='mso-spacerun:yes'>�� </span>4 - able
  to stand 10 seconds safely<b style='mso-bidi-font-weight:normal'><o:p></o:p></b></span></p>
  <p class=MsoNormal style='line-height:99%'><span lang=EN-US style='font-size:
  10.0pt;line-height:99%;font-family:Montserrat;mso-fareast-font-family:"Arial Narrow";
  mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi'><span
  style='mso-spacerun:yes'>�� </span>3 - able to stand 10 seconds with
  supervision<o:p></o:p></span></p>
  <p class=MsoNormal style='mso-line-height-alt:0pt'><span lang=EN-US
  style='font-size:10.0pt;font-family:Montserrat;mso-fareast-font-family:"Arial Narrow";
  mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi'><span
  style='mso-spacerun:yes'>�� </span>2 - able to stand 3 seconds<o:p></o:p></span></p>
  <p class=MsoNormal style='line-height:.1pt;mso-line-height-rule:exactly'><b
  style='mso-bidi-font-weight:normal'><span lang=EN-US style='font-size:10.0pt;
  font-family:Montserrat;mso-fareast-font-family:"Arial Narrow";mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></b></p>
  <p class=MsoNormal style='line-height:99%'><span lang=EN-US style='font-size:
  10.0pt;line-height:99%;font-family:Montserrat;mso-fareast-font-family:"Arial Narrow";
  mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi'><span
  style='mso-spacerun:yes'>�� </span>1 - unable to keep eyes closed 3 seconds
  but stays steady<o:p></o:p></span></p>
  <p class=MsoNormal style='line-height:99%'><span lang=EN-US style='font-size:
  10.0pt;line-height:99%;font-family:Montserrat;mso-fareast-font-family:"Arial Narrow";
  mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi'><span
  style='mso-spacerun:yes'>�� </span>0 - needs help to keep from falling<o:p></o:p></span></p>
  </td>
  <td width=84 valign=bottom style='width:63.15pt;padding:0cm 0cm 0cm 0cm;
  height:17.5pt'>
  <p class=MsoNormal align=right style='text-align:right;mso-line-height-alt:
  0pt'><b style='mso-bidi-font-weight:normal'><span lang=EN-US
  style='font-size:10.0pt;font-family:Montserrat;mso-fareast-font-family:"Times New Roman";
  mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi'>_______<o:p></o:p></span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:7;height:17.5pt'>
  <td width=47 valign=top style='width:35.45pt;padding:0cm 0cm 0cm 0cm;
  height:17.5pt'>
  <p class=MsoNormal align=center style='margin-top:0cm;margin-right:-.25pt;
  margin-bottom:0cm;margin-left:9.9pt;margin-bottom:.0001pt;text-align:center;
  text-indent:-2.75pt;mso-line-height-alt:0pt'><span lang=EN-US
  style='font-size:10.0pt;font-family:"Montserrat SemiBold";mso-fareast-font-family:
  "Times New Roman";mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:
  major-bidi;mso-bidi-font-weight:bold'>7.</span><b style='mso-bidi-font-weight:
  normal'><span lang=EN-US style='font-size:10.0pt;font-family:Montserrat;
  mso-fareast-font-family:"Times New Roman";mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi'><o:p></o:p></span></b></p>
  </td>
  <td width=558 valign=bottom style='width:418.8pt;padding:0cm 0cm 0cm 0cm;
  height:17.5pt'>
  <p class=MsoNormal style='mso-line-height-alt:0pt'><b style='mso-bidi-font-weight:
  normal'><span lang=EN-US style='font-size:10.0pt;font-family:Montserrat;
  mso-fareast-font-family:"Times New Roman";mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi'>Standing </span></b><b style='mso-bidi-font-weight:
  normal'><span lang=EN-US style='font-size:10.0pt;font-family:Montserrat;
  mso-fareast-font-family:"Arial Narrow";mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi'>unsupported</span></b><b style='mso-bidi-font-weight:
  normal'><span lang=EN-US style='font-size:10.0pt;font-family:Montserrat;
  mso-fareast-font-family:"Times New Roman";mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi'> with feet together<o:p></o:p></span></b></p>
  <p class=MsoNormal style='line-height:99%'><span lang=EN-US style='font-size:
  10.0pt;line-height:99%;font-family:Montserrat;mso-fareast-font-family:"Arial Narrow";
  mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi'><span
  style='mso-spacerun:yes'>�� </span>4 - able to place feet together independently
  and stand 1 minute safely<o:p></o:p></span></p>
  <p class=MsoNormal style='line-height:99%'><span lang=EN-US style='font-size:
  10.0pt;line-height:99%;font-family:Montserrat;mso-fareast-font-family:"Arial Narrow";
  mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi'><span
  style='mso-spacerun:yes'>�� </span>3 - able to place feet together
  independently and stand for 1 minute with supervision<o:p></o:p></span></p>
  <p class=MsoNormal style='mso-line-height-alt:0pt'><span lang=EN-US
  style='font-size:10.0pt;font-family:Montserrat;mso-fareast-font-family:"Arial Narrow";
  mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi'><span
  style='mso-spacerun:yes'>�� </span>2 - able to place feet together
  independently but unable to hold for 30 seconds<o:p></o:p></span></p>
  <p class=MsoNormal style='line-height:.1pt;mso-line-height-rule:exactly'><b
  style='mso-bidi-font-weight:normal'><span lang=EN-US style='font-size:10.0pt;
  font-family:Montserrat;mso-fareast-font-family:"Arial Narrow";mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></b></p>
  <p class=MsoNormal style='line-height:99%'><span lang=EN-US style='font-size:
  10.0pt;line-height:99%;font-family:Montserrat;mso-fareast-font-family:"Arial Narrow";
  mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi'><span
  style='mso-spacerun:yes'>�� </span>1 - needs help to attain position but able
  to stand 15 seconds with feet together<o:p></o:p></span></p>
  <p class=MsoNormal style='line-height:99%'><span lang=EN-US style='font-size:
  10.0pt;line-height:99%;font-family:Montserrat;mso-fareast-font-family:"Arial Narrow";
  mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi'><span
  style='mso-spacerun:yes'>�� </span>0 - needs help to attain position and
  unable to hold for 15 seconds<o:p></o:p></span></p>
  </td>
  <td width=84 valign=bottom style='width:63.15pt;padding:0cm 0cm 0cm 0cm;
  height:17.5pt'>
  <p class=MsoNormal align=right style='text-align:right;mso-line-height-alt:
  0pt'><b style='mso-bidi-font-weight:normal'><span lang=EN-US
  style='font-size:10.0pt;font-family:Montserrat;mso-fareast-font-family:"Times New Roman";
  mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi'>_______<o:p></o:p></span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:8;height:17.45pt'>
  <td width=47 valign=top style='width:35.45pt;padding:0cm 0cm 0cm 0cm;
  height:17.45pt'>
  <p class=MsoNormal align=center style='margin-top:0cm;margin-right:-.25pt;
  margin-bottom:0cm;margin-left:9.9pt;margin-bottom:.0001pt;text-align:center;
  text-indent:-2.75pt;mso-line-height-alt:0pt'><span lang=EN-US
  style='font-size:10.0pt;font-family:"Montserrat SemiBold";mso-fareast-font-family:
  "Times New Roman";mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:
  major-bidi;mso-bidi-font-weight:bold'>8.</span><b style='mso-bidi-font-weight:
  normal'><span lang=EN-US style='font-size:10.0pt;font-family:Montserrat;
  mso-fareast-font-family:"Times New Roman";mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi'><o:p></o:p></span></b></p>
  </td>
  <td width=558 valign=bottom style='width:418.8pt;padding:0cm 0cm 0cm 0cm;
  height:17.45pt'>
  <p class=MsoNormal style='mso-line-height-alt:0pt'><b style='mso-bidi-font-weight:
  normal'><span lang=EN-US style='font-size:10.0pt;font-family:Montserrat;
  mso-fareast-font-family:"Arial Narrow";mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi'>Standing unsupported one foot in front<o:p></o:p></span></b></p>
  <p class=MsoNormal style='mso-line-height-alt:0pt'><span lang=EN-US
  style='font-size:10.0pt;font-family:Montserrat;mso-fareast-font-family:"Arial Narrow";
  mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi'><span
  style='mso-spacerun:yes'>�� </span>4 - able to place foot tandem
  independently and hold 30 seconds<o:p></o:p></span></p>
  <p class=MsoNormal style='line-height:.15pt;mso-line-height-rule:exactly'><span
  lang=EN-US style='font-size:10.0pt;font-family:Montserrat;mso-fareast-font-family:
  "Times New Roman";mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:
  major-bidi'><o:p>&nbsp;</o:p></span></p>
  <p class=MsoNormal style='margin-right:9.0pt;line-height:99%'><span
  lang=EN-US style='font-size:10.0pt;line-height:99%;font-family:Montserrat;
  mso-fareast-font-family:"Arial Narrow";mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi'><span style='mso-spacerun:yes'>�� </span>3 - able
  to place foot ahead of other independently and hold 30 seconds <o:p></o:p></span></p>
  <p class=MsoNormal style='margin-right:58.5pt;line-height:99%'><span
  lang=EN-US style='font-size:10.0pt;line-height:99%;font-family:Montserrat;
  mso-fareast-font-family:"Arial Narrow";mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi'><span style='mso-spacerun:yes'>�� </span>2 - able
  to take small step independently and hold 30 seconds<o:p></o:p></span></p>
  <p class=MsoNormal style='mso-line-height-alt:0pt'><span lang=EN-US
  style='font-size:10.0pt;font-family:Montserrat;mso-fareast-font-family:"Arial Narrow";
  mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi'><span
  style='mso-spacerun:yes'>�� </span>1 - needs help to step but can hold 15
  seconds<o:p></o:p></span></p>
  <p class=MsoNormal style='line-height:.05pt;mso-line-height-rule:exactly'><span
  lang=EN-US style='font-size:10.0pt;font-family:Montserrat;mso-fareast-font-family:
  "Times New Roman";mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:
  major-bidi'><o:p>&nbsp;</o:p></span></p>
  <p class=MsoNormal style='mso-line-height-alt:0pt'><span lang=EN-US
  style='font-size:10.0pt;font-family:Montserrat;mso-fareast-font-family:"Arial Narrow";
  mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi'><span
  style='mso-spacerun:yes'>�� </span>0 - loses balance while stepping or
  standing</span><b style='mso-bidi-font-weight:normal'><span lang=EN-US
  style='font-size:10.0pt;font-family:Montserrat;mso-fareast-font-family:"Times New Roman";
  mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi'><o:p></o:p></span></b></p>
  </td>
  <td width=84 valign=bottom style='width:63.15pt;padding:0cm 0cm 0cm 0cm;
  height:17.45pt'>
  <p class=MsoNormal align=right style='text-align:right;mso-line-height-alt:
  0pt'><b style='mso-bidi-font-weight:normal'><span lang=EN-US
  style='font-size:10.0pt;font-family:Montserrat;mso-fareast-font-family:"Times New Roman";
  mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi'>_______<o:p></o:p></span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:9;height:17.5pt'>
  <td width=47 valign=top style='width:35.45pt;padding:0cm 0cm 0cm 0cm;
  height:17.5pt'>
  <p class=MsoNormal align=center style='margin-top:0cm;margin-right:-.25pt;
  margin-bottom:0cm;margin-left:9.9pt;margin-bottom:.0001pt;text-align:center;
  text-indent:-2.75pt;mso-line-height-alt:0pt'><span lang=EN-US
  style='font-size:10.0pt;font-family:"Montserrat SemiBold";mso-fareast-font-family:
  "Times New Roman";mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:
  major-bidi;mso-bidi-font-weight:bold'>9.</span><b style='mso-bidi-font-weight:
  normal'><span lang=EN-US style='font-size:10.0pt;font-family:Montserrat;
  mso-fareast-font-family:"Times New Roman";mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi'><o:p></o:p></span></b></p>
  </td>
  <td width=558 valign=bottom style='width:418.8pt;padding:0cm 0cm 0cm 0cm;
  height:17.5pt'>
  <p class=MsoNormal style='mso-line-height-alt:0pt'><b style='mso-bidi-font-weight:
  normal'><span lang=EN-US style='font-size:10.0pt;font-family:Montserrat;
  mso-fareast-font-family:"Times New Roman";mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi'>Standing on one leg<o:p></o:p></span></b></p>
  <p class=MsoNormal style='mso-line-height-alt:0pt'><span lang=EN-US
  style='font-size:10.0pt;font-family:Montserrat;mso-fareast-font-family:"Arial Narrow";
  mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi'><span
  style='mso-spacerun:yes'>�� </span>4 - able to lift leg independently and
  hold &gt;10 seconds</span><b style='mso-bidi-font-weight:normal'><span
  lang=EN-US style='font-size:10.0pt;font-family:Montserrat;mso-fareast-font-family:
  "Times New Roman";mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:
  major-bidi'><o:p></o:p></span></b></p>
  <p class=MsoNormal style='line-height:.05pt;mso-line-height-rule:exactly'><span
  lang=EN-US style='font-size:10.0pt;font-family:Montserrat;mso-fareast-font-family:
  "Times New Roman";mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:
  major-bidi'><o:p>&nbsp;</o:p></span></p>
  <p class=MsoNormal style='mso-line-height-alt:0pt'><span lang=EN-US
  style='font-size:10.0pt;font-family:Montserrat;mso-fareast-font-family:"Arial Narrow";
  mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi'><span
  style='mso-spacerun:yes'>�� </span>3 - able to lift leg independently and
  hold 5-10 seconds<o:p></o:p></span></p>
  <p class=MsoNormal style='line-height:99%'><span lang=EN-US style='font-size:
  10.0pt;line-height:99%;font-family:Montserrat;mso-fareast-font-family:"Arial Narrow";
  mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi'><span
  style='mso-spacerun:yes'>�� </span>2 - able to lift leg independently and
  hold = or &gt;3 seconds<o:p></o:p></span></p>
  <p class=MsoNormal style='mso-line-height-alt:0pt'><span lang=EN-US
  style='font-size:10.0pt;font-family:Montserrat;mso-fareast-font-family:"Arial Narrow";
  mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi'><span
  style='mso-spacerun:yes'>�� </span>1 - tries to lift leg unable to hold 3
  seconds but remains standing independently<o:p></o:p></span></p>
  <p class=MsoNormal style='line-height:.05pt;mso-line-height-rule:exactly'><span
  lang=EN-US style='font-size:10.0pt;font-family:Montserrat;mso-fareast-font-family:
  "Times New Roman";mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:
  major-bidi'><o:p>&nbsp;</o:p></span></p>
  <p class=MsoNormal style='mso-line-height-alt:0pt'><span lang=EN-US
  style='font-size:10.0pt;font-family:Montserrat;mso-fareast-font-family:"Arial Narrow";
  mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi'><span
  style='mso-spacerun:yes'>�� </span>0 - unable to try or needs assist to
  prevent fall<o:p></o:p></span></p>
  </td>
  <td width=84 valign=bottom style='width:63.15pt;padding:0cm 0cm 0cm 0cm;
  height:17.5pt'>
  <p class=MsoNormal align=right style='text-align:right;mso-line-height-alt:
  0pt'><b style='mso-bidi-font-weight:normal'><span lang=EN-US
  style='font-size:10.0pt;font-family:Montserrat;mso-fareast-font-family:"Times New Roman";
  mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi'>_______<o:p></o:p></span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:10;height:17.45pt'>
  <td width=47 valign=top style='width:35.45pt;padding:0cm 0cm 0cm 0cm;
  height:17.45pt'>
  <p class=MsoNormal align=center style='margin-top:0cm;margin-right:-.25pt;
  margin-bottom:0cm;margin-left:9.9pt;margin-bottom:.0001pt;text-align:center;
  text-indent:-2.75pt;mso-line-height-alt:0pt'><span lang=EN-US
  style='font-size:10.0pt;font-family:"Montserrat SemiBold";mso-fareast-font-family:
  "Times New Roman";mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:
  major-bidi;mso-bidi-font-weight:bold'>10.</span><b style='mso-bidi-font-weight:
  normal'><span lang=EN-US style='font-size:10.0pt;font-family:Montserrat;
  mso-fareast-font-family:"Times New Roman";mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi'><o:p></o:p></span></b></p>
  </td>
  <td width=558 valign=bottom style='width:418.8pt;padding:0cm 0cm 0cm 0cm;
  height:17.45pt'>
  <p class=MsoNormal style='mso-line-height-alt:0pt'><b style='mso-bidi-font-weight:
  normal'><span lang=EN-US style='font-size:10.0pt;font-family:Montserrat;
  mso-fareast-font-family:"Times New Roman";mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi'>Turning trunk (feet fixed)<o:p></o:p></span></b></p>
  <p class=MsoNormal style='margin-right:24.0pt;text-align:justify;line-height:
  105%;mso-pagination:widow-orphan;tab-stops:34.3pt;text-autospace:ideograph-numeric ideograph-other'><span
  lang=EN-US style='font-size:10.0pt;line-height:105%;font-family:Montserrat;
  mso-fareast-font-family:"Arial Narrow";mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi'><span style='mso-spacerun:yes'>�� </span>4 - looks
  behind from both sides and weight shifts well<b style='mso-bidi-font-weight:
  normal'><o:p></o:p></b></span></p>
  <p class=MsoNormal style='line-height:99%'><span lang=EN-US style='font-size:
  10.0pt;line-height:99%;font-family:Montserrat;mso-fareast-font-family:"Arial Narrow";
  mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi'><span
  style='mso-spacerun:yes'>�� </span>3 - looks behind one side only other side
  shows less weight shift<o:p></o:p></span></p>
  <p class=MsoNormal style='mso-line-height-alt:0pt'><span lang=EN-US
  style='font-size:10.0pt;font-family:Montserrat;mso-fareast-font-family:"Arial Narrow";
  mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi'><span
  style='mso-spacerun:yes'>�� </span>2 - turns sideways only but maintains
  balance<o:p></o:p></span></p>
  <p class=MsoNormal style='line-height:.1pt;mso-line-height-rule:exactly'><b
  style='mso-bidi-font-weight:normal'><span lang=EN-US style='font-size:10.0pt;
  font-family:Montserrat;mso-fareast-font-family:"Arial Narrow";mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></b></p>
  <p class=MsoNormal style='line-height:99%'><span lang=EN-US style='font-size:
  10.0pt;line-height:99%;font-family:Montserrat;mso-fareast-font-family:"Arial Narrow";
  mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi'><span
  style='mso-spacerun:yes'>�� </span>1 - needs supervision when turning<o:p></o:p></span></p>
  <p class=MsoNormal style='line-height:99%'><span lang=EN-US style='font-size:
  10.0pt;line-height:99%;font-family:Montserrat;mso-fareast-font-family:"Arial Narrow";
  mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi'><span
  style='mso-spacerun:yes'>�� </span>0 - needs assist to keep from losing
  balance or falling<o:p></o:p></span></p>
  </td>
  <td width=84 valign=bottom style='width:63.15pt;padding:0cm 0cm 0cm 0cm;
  height:17.45pt'>
  <p class=MsoNormal align=right style='text-align:right;mso-line-height-alt:
  0pt'><b style='mso-bidi-font-weight:normal'><span lang=EN-US
  style='font-size:10.0pt;font-family:Montserrat;mso-fareast-font-family:"Times New Roman";
  mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi'>_______<o:p></o:p></span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:11;height:17.5pt'>
  <td width=47 valign=top style='width:35.45pt;padding:0cm 0cm 0cm 0cm;
  height:17.5pt'>
  <p class=MsoNormal align=center style='margin-top:0cm;margin-right:-.25pt;
  margin-bottom:0cm;margin-left:9.9pt;margin-bottom:.0001pt;text-align:center;
  text-indent:-2.75pt;mso-line-height-alt:0pt'><span lang=EN-US
  style='font-size:10.0pt;font-family:"Montserrat SemiBold";mso-fareast-font-family:
  "Times New Roman";mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:
  major-bidi;mso-bidi-font-weight:bold'>11.</span><b style='mso-bidi-font-weight:
  normal'><span lang=EN-US style='font-size:10.0pt;font-family:Montserrat;
  mso-fareast-font-family:"Times New Roman";mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi'><o:p></o:p></span></b></p>
  </td>
  <td width=558 valign=bottom style='width:418.8pt;padding:0cm 0cm 0cm 0cm;
  height:17.5pt'>
  <p class=MsoNormal style='mso-line-height-alt:0pt'><b style='mso-bidi-font-weight:
  normal'><span lang=EN-US style='font-size:10.0pt;font-family:Montserrat;
  mso-fareast-font-family:"Times New Roman";mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi'>Retrieving objects from floor<o:p></o:p></span></b></p>
  <p class=MsoNormal style='mso-line-height-alt:0pt'><span lang=EN-US
  style='font-size:10.0pt;font-family:Montserrat;mso-fareast-font-family:"Arial Narrow";
  mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi'><span
  style='mso-spacerun:yes'>�� </span>4 - able to pick up slipper safely and
  easily<o:p></o:p></span></p>
  <p class=MsoNormal style='mso-line-height-alt:0pt'><span lang=EN-US
  style='font-size:10.0pt;font-family:Montserrat;mso-fareast-font-family:"Arial Narrow";
  mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi'><span
  style='mso-spacerun:yes'>�� </span>3 - able to pick up slipper but needs
  supervision<o:p></o:p></span></p>
  <p class=MsoNormal style='line-height:.15pt;mso-line-height-rule:exactly'><span
  lang=EN-US style='font-size:10.0pt;font-family:Montserrat;mso-fareast-font-family:
  "Times New Roman";mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:
  major-bidi'><o:p>&nbsp;</o:p></span></p>
  <p class=MsoNormal style='margin-right:9.0pt;line-height:99%'><span
  lang=EN-US style='font-size:10.0pt;line-height:99%;font-family:Montserrat;
  mso-fareast-font-family:"Arial Narrow";mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi'><span style='mso-spacerun:yes'>�� </span>2 - unable
  to pick up but reaches 1-2 inches from slipper and keeps balance
  independently<o:p></o:p></span></p>
  <p class=MsoNormal style='line-height:.05pt;mso-line-height-rule:exactly'><span
  lang=EN-US style='font-size:10.0pt;font-family:Montserrat;mso-fareast-font-family:
  "Times New Roman";mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:
  major-bidi'><o:p>&nbsp;</o:p></span></p>
  <p class=MsoNormal style='mso-line-height-alt:0pt'><span lang=EN-US
  style='font-size:10.0pt;font-family:Montserrat;mso-fareast-font-family:"Arial Narrow";
  mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi'><span
  style='mso-spacerun:yes'>�� </span>1 - unable to pick up and needs
  supervision while trying<o:p></o:p></span></p>
  <p class=MsoNormal style='line-height:.05pt;mso-line-height-rule:exactly'><span
  lang=EN-US style='font-size:10.0pt;font-family:Montserrat;mso-fareast-font-family:
  "Times New Roman";mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:
  major-bidi'><o:p>&nbsp;</o:p></span></p>
  <p class=MsoNormal style='mso-line-height-alt:0pt'><span lang=EN-US
  style='font-size:10.0pt;font-family:Montserrat;mso-fareast-font-family:"Arial Narrow";
  mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi'><span
  style='mso-spacerun:yes'>�� </span>0 - unable to try/needs assist to keep
  from losing balance or falling<o:p></o:p></span></p>
  </td>
  <td width=84 valign=bottom style='width:63.15pt;padding:0cm 0cm 0cm 0cm;
  height:17.5pt'>
  <p class=MsoNormal align=right style='text-align:right;mso-line-height-alt:
  0pt'><b style='mso-bidi-font-weight:normal'><span lang=EN-US
  style='font-size:10.0pt;font-family:Montserrat;mso-fareast-font-family:"Times New Roman";
  mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi'>_______<o:p></o:p></span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:12;height:17.5pt'>
  <td width=47 valign=top style='width:35.45pt;padding:0cm 0cm 0cm 0cm;
  height:17.5pt'>
  <p class=MsoNormal align=center style='margin-top:0cm;margin-right:-.25pt;
  margin-bottom:0cm;margin-left:9.9pt;margin-bottom:.0001pt;text-align:center;
  text-indent:-2.75pt;mso-line-height-alt:0pt'><span lang=EN-US
  style='font-size:10.0pt;font-family:"Montserrat SemiBold";mso-fareast-font-family:
  "Times New Roman";mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:
  major-bidi;mso-bidi-font-weight:bold'>12.</span><b style='mso-bidi-font-weight:
  normal'><span lang=EN-US style='font-size:10.0pt;font-family:Montserrat;
  mso-fareast-font-family:"Times New Roman";mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi'><o:p></o:p></span></b></p>
  </td>
  <td width=558 valign=top style='width:418.8pt;padding:0cm 0cm 0cm 0cm;
  height:17.5pt'>
  <p class=MsoNormal style='mso-line-height-alt:0pt'><b style='mso-bidi-font-weight:
  normal'><span lang=EN-US style='font-size:10.0pt;font-family:Montserrat;
  mso-fareast-font-family:"Times New Roman";mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi'>Reaching forward while standing<o:p></o:p></span></b></p>
  <p class=MsoNormal style='line-height:99%'><span lang=EN-US style='font-size:
  10.0pt;line-height:99%;font-family:Montserrat;mso-fareast-font-family:"Arial Narrow";
  mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi'><span
  style='mso-spacerun:yes'>�� </span>4 - can reach forward confidently &gt;25
  cm (10 inches)<o:p></o:p></span></p>
  <p class=MsoNormal style='mso-line-height-alt:0pt'><span lang=EN-US
  style='font-size:10.0pt;font-family:Montserrat;mso-fareast-font-family:"Arial Narrow";
  mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi'><span
  style='mso-spacerun:yes'>�� </span>3 - can reach forward &gt;12 cm safely (5
  inches)<o:p></o:p></span></p>
  <p class=MsoNormal style='line-height:.1pt;mso-line-height-rule:exactly'><b
  style='mso-bidi-font-weight:normal'><span lang=EN-US style='font-size:10.0pt;
  font-family:Montserrat;mso-fareast-font-family:"Arial Narrow";mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></b></p>
  <p class=MsoNormal style='line-height:99%'><span lang=EN-US style='font-size:
  10.0pt;line-height:99%;font-family:Montserrat;mso-fareast-font-family:"Arial Narrow";
  mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi'><span
  style='mso-spacerun:yes'>�� </span>2 - can reach forward &gt;5 cm safely (2
  inches)<o:p></o:p></span></p>
  <p class=MsoNormal style='line-height:99%'><span lang=EN-US style='font-size:
  10.0pt;line-height:99%;font-family:Montserrat;mso-fareast-font-family:"Arial Narrow";
  mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi'><span
  style='mso-spacerun:yes'>�� </span>1 - reaches forward but needs supervision<o:p></o:p></span></p>
  <p class=MsoNormal style='mso-line-height-alt:0pt'><span lang=EN-US
  style='font-size:10.0pt;font-family:Montserrat;mso-fareast-font-family:"Arial Narrow";
  mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi'><span
  style='mso-spacerun:yes'>�� </span>0 - loses balance while trying/requires
  external support<o:p></o:p></span></p>
  </td>
  <td width=84 valign=bottom style='width:63.15pt;padding:0cm 0cm 0cm 0cm;
  height:17.5pt'>
  <p class=MsoNormal align=right style='text-align:right;mso-line-height-alt:
  0pt'><b style='mso-bidi-font-weight:normal'><span lang=EN-US
  style='font-size:10.0pt;font-family:Montserrat;mso-fareast-font-family:"Times New Roman";
  mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi'>_______<o:p></o:p></span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:13;height:17.45pt'>
  <td width=47 valign=top style='width:35.45pt;padding:0cm 0cm 0cm 0cm;
  height:17.45pt'>
  <p class=MsoNormal align=center style='margin-top:0cm;margin-right:-.25pt;
  margin-bottom:0cm;margin-left:9.9pt;margin-bottom:.0001pt;text-align:center;
  text-indent:-2.75pt;mso-line-height-alt:0pt'><span lang=EN-US
  style='font-size:10.0pt;font-family:"Montserrat SemiBold";mso-fareast-font-family:
  "Times New Roman";mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:
  major-bidi;mso-bidi-font-weight:bold'>13.</span><b style='mso-bidi-font-weight:
  normal'><span lang=EN-US style='font-size:10.0pt;font-family:Montserrat;
  mso-fareast-font-family:"Times New Roman";mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi'><o:p></o:p></span></b></p>
  </td>
  <td width=558 valign=top style='width:418.8pt;padding:0cm 0cm 0cm 0cm;
  height:17.45pt'>
  <p class=MsoNormal style='mso-line-height-alt:0pt'><b style='mso-bidi-font-weight:
  normal'><span lang=EN-US style='font-size:10.0pt;font-family:Montserrat;
  mso-fareast-font-family:"Times New Roman";mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi'>Turning 360 degrees<o:p></o:p></span></b></p>
  <p class=MsoNormal style='mso-line-height-alt:0pt'><span lang=EN-US
  style='font-size:10.0pt;font-family:Montserrat;mso-fareast-font-family:"Arial Narrow";
  mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi'><span
  style='mso-spacerun:yes'>�� </span>4 - able to turn 360 degrees safely in 4
  seconds or less<o:p></o:p></span></p>
  <p class=MsoNormal style='mso-line-height-alt:0pt'><span lang=EN-US
  style='font-size:10.0pt;font-family:Montserrat;mso-fareast-font-family:"Arial Narrow";
  mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi'><span
  style='mso-spacerun:yes'>�� </span>3 - able to turn 360 degrees safely one
  side only in 4 seconds or less<o:p></o:p></span></p>
  <p class=MsoNormal style='line-height:.05pt;mso-line-height-rule:exactly'><span
  lang=EN-US style='font-size:10.0pt;font-family:Montserrat;mso-fareast-font-family:
  "Times New Roman";mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:
  major-bidi'><o:p>&nbsp;</o:p></span></p>
  <p class=MsoNormal style='mso-line-height-alt:0pt'><span lang=EN-US
  style='font-size:10.0pt;font-family:Montserrat;mso-fareast-font-family:"Arial Narrow";
  mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi'><span
  style='mso-spacerun:yes'>�� </span>2 - able to turn 360 degrees safely but
  slowly<o:p></o:p></span></p>
  <p class=MsoNormal style='line-height:99%'><span lang=EN-US style='font-size:
  10.0pt;line-height:99%;font-family:Montserrat;mso-fareast-font-family:"Arial Narrow";
  mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi'><span
  style='mso-spacerun:yes'>�� </span>1 - needs close supervision or verbal
  cueing<o:p></o:p></span></p>
  <p class=MsoNormal style='mso-line-height-alt:0pt'><span lang=EN-US
  style='font-size:10.0pt;font-family:Montserrat;mso-fareast-font-family:"Arial Narrow";
  mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi'><span
  style='mso-spacerun:yes'>�� </span>0 - needs assistance while turning<o:p></o:p></span></p>
  </td>
  <td width=84 valign=bottom style='width:63.15pt;padding:0cm 0cm 0cm 0cm;
  height:17.45pt'>
  <p class=MsoNormal align=right style='text-align:right;mso-line-height-alt:
  0pt'><b style='mso-bidi-font-weight:normal'><span lang=EN-US
  style='font-size:10.0pt;font-family:Montserrat;mso-fareast-font-family:"Times New Roman";
  mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi'>_______<o:p></o:p></span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:14;mso-yfti-lastrow:yes;height:17.5pt'>
  <td width=47 valign=top style='width:35.45pt;padding:0cm 0cm 0cm 0cm;
  height:17.5pt'>
  <p class=MsoNormal align=center style='margin-top:0cm;margin-right:-.25pt;
  margin-bottom:0cm;margin-left:9.9pt;margin-bottom:.0001pt;text-align:center;
  text-indent:-2.75pt;mso-line-height-alt:0pt'><span lang=EN-US
  style='font-size:10.0pt;font-family:"Montserrat SemiBold";mso-fareast-font-family:
  "Times New Roman";mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:
  major-bidi;mso-bidi-font-weight:bold'>14.</span><b style='mso-bidi-font-weight:
  normal'><span lang=EN-US style='font-size:10.0pt;font-family:Montserrat;
  mso-fareast-font-family:"Times New Roman";mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi'><o:p></o:p></span></b></p>
  </td>
  <td width=558 valign=top style='width:418.8pt;padding:0cm 0cm 0cm 0cm;
  height:17.5pt'>
  <p class=MsoNormal style='margin-right:30.0pt;line-height:106%;mso-pagination:
  widow-orphan;tab-stops:34.3pt;text-autospace:ideograph-numeric ideograph-other'><b
  style='mso-bidi-font-weight:normal'><span lang=EN-US style='font-size:10.0pt;
  line-height:106%;font-family:Montserrat;mso-fareast-font-family:"Arial Narrow";
  mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi'>Placing
  alternate foot on step or stool while standing unsupported<o:p></o:p></span></b></p>
  <p class=MsoNormal style='line-height:.1pt;mso-line-height-rule:exactly'><b
  style='mso-bidi-font-weight:normal'><span lang=EN-US style='font-size:10.0pt;
  font-family:Montserrat;mso-fareast-font-family:"Arial Narrow";mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></b></p>
  <p class=MsoNormal style='mso-line-height-alt:0pt'><span lang=EN-US
  style='font-size:10.0pt;font-family:Montserrat;mso-fareast-font-family:"Arial Narrow";
  mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi'><span
  style='mso-spacerun:yes'>�� </span>4 - able to stand independently and safely
  and complete 8 steps in 20 seconds<o:p></o:p></span></p>
  <p class=MsoNormal style='line-height:.1pt;mso-line-height-rule:exactly'><b
  style='mso-bidi-font-weight:normal'><span lang=EN-US style='font-size:10.0pt;
  font-family:Montserrat;mso-fareast-font-family:"Arial Narrow";mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></b></p>
  <p class=MsoNormal style='line-height:99%'><span lang=EN-US style='font-size:
  10.0pt;line-height:99%;font-family:Montserrat;mso-fareast-font-family:"Arial Narrow";
  mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi'><span
  style='mso-spacerun:yes'>�� </span>3 - able to stand independently and
  complete 8 steps in &gt;20 seconds<o:p></o:p></span></p>
  <p class=MsoNormal style='line-height:99%'><span lang=EN-US style='font-size:
  10.0pt;line-height:99%;font-family:Montserrat;mso-fareast-font-family:"Arial Narrow";
  mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi'><span
  style='mso-spacerun:yes'>�� </span>2 - able to complete 4 steps without aid
  with supervision<o:p></o:p></span></p>
  <p class=MsoNormal style='mso-line-height-alt:0pt'><span lang=EN-US
  style='font-size:10.0pt;font-family:Montserrat;mso-fareast-font-family:"Arial Narrow";
  mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi'><span
  style='mso-spacerun:yes'>�� </span>1 - able to complete &gt;2 steps need
  minimal assist<o:p></o:p></span></p>
  <p class=MsoNormal style='line-height:.1pt;mso-line-height-rule:exactly'><b
  style='mso-bidi-font-weight:normal'><span lang=EN-US style='font-size:10.0pt;
  font-family:Montserrat;mso-fareast-font-family:"Arial Narrow";mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></b></p>
  <p class=MsoNormal style='line-height:99%'><span lang=EN-US style='font-size:
  10.0pt;line-height:99%;font-family:Montserrat;mso-fareast-font-family:"Arial Narrow";
  mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi'><span
  style='mso-spacerun:yes'>�� </span>0 - needs assistance to keep from
  falling/unable to try<o:p></o:p></span></p>
  </td>
  <td width=84 valign=bottom style='width:63.15pt;padding:0cm 0cm 0cm 0cm;
  height:17.5pt'>
  <p class=MsoNormal align=right style='text-align:right;mso-line-height-alt:
  0pt'><b style='mso-bidi-font-weight:normal'><span lang=EN-US
  style='font-size:10.0pt;font-family:Montserrat;mso-fareast-font-family:"Times New Roman";
  mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi'>_______<o:p></o:p></span></b></p>
  </td>
 </tr>
</table>

<p class=MsoNormal style='mso-line-height-alt:0pt'><b style='mso-bidi-font-weight:
normal'><u><span lang=EN-US style='mso-bidi-font-size:10.0pt;font-family:Montserrat;
mso-fareast-font-family:"Times New Roman";mso-bidi-font-family:"Times New Roman";
mso-bidi-theme-font:major-bidi'><o:p><span style='text-decoration:none'>&nbsp;</span></o:p></span></u></b></p>

<p class=MsoNormal style='mso-line-height-alt:0pt'><span lang=EN-US
style='font-size:10.0pt;font-family:"Montserrat SemiBold";mso-fareast-font-family:
"Times New Roman";mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:
major-bidi;mso-bidi-font-weight:bold'>Interpretation </span><b
style='mso-bidi-font-weight:normal'><span lang=EN-US style='mso-bidi-font-size:
10.0pt;font-family:Montserrat;mso-fareast-font-family:"Times New Roman";
mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi'><span
style='mso-tab-count:4'>������������������������������������������������� </span><span
style='mso-spacerun:yes'>�����������������</span><span
style='mso-spacerun:yes'>�������������������������������������</span><span
style='mso-spacerun:yes'>�</span></span></b><span lang=EN-US style='font-size:
10.0pt;font-family:"Montserrat SemiBold";mso-fareast-font-family:"Times New Roman";
mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi;
mso-bidi-font-weight:bold'>TOTAL (56):<span style='mso-spacerun:yes'>��
</span>__________</span><b style='mso-bidi-font-weight:normal'><span
lang=EN-US style='mso-bidi-font-size:10.0pt;font-family:Montserrat;mso-fareast-font-family:
"Times New Roman";mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:
major-bidi'><span style='mso-spacerun:yes'>� </span><o:p></o:p></span></b></p>

<p class=MsoListParagraph style='margin-left:40.5pt;text-indent:-18.0pt;
mso-line-height-alt:0pt;mso-list:l5 level1 lfo1'><![if !supportLists]><span
lang=EN-US style='font-size:10.0pt;font-family:Wingdings;mso-fareast-font-family:
Wingdings;mso-bidi-font-family:Wingdings'><span style='mso-list:Ignore'>�<span
style='font:7.0pt "Times New Roman"'>&nbsp; </span></span></span><![endif]><span
dir=LTR></span><span lang=EN-US style='font-size:10.0pt;font-family:Montserrat;
mso-fareast-font-family:"Times New Roman";mso-bidi-font-family:"Times New Roman";
mso-bidi-theme-font:major-bidi'>0 � 20<span style='mso-tab-count:1'>�� </span>Wheelchair
bound<o:p></o:p></span></p>

<p class=MsoListParagraph style='margin-left:40.5pt;text-indent:-18.0pt;
mso-line-height-alt:0pt;mso-list:l5 level1 lfo1'><![if !supportLists]><span
lang=EN-US style='font-size:10.0pt;font-family:Wingdings;mso-fareast-font-family:
Wingdings;mso-bidi-font-family:Wingdings'><span style='mso-list:Ignore'>�<span
style='font:7.0pt "Times New Roman"'>&nbsp; </span></span></span><![endif]><span
dir=LTR></span><span lang=EN-US style='font-size:10.0pt;font-family:Montserrat;
mso-fareast-font-family:"Times New Roman";mso-bidi-font-family:"Times New Roman";
mso-bidi-theme-font:major-bidi'>21 - 40 <span style='mso-tab-count:1'> </span>Walking
with assistance<o:p></o:p></span></p>

<p class=MsoListParagraph style='margin-left:40.5pt;text-indent:-18.0pt;
mso-line-height-alt:0pt;mso-list:l5 level1 lfo1'><![if !supportLists]><span
lang=EN-US style='font-size:10.0pt;font-family:Wingdings;mso-fareast-font-family:
Wingdings;mso-bidi-font-family:Wingdings'><span style='mso-list:Ignore'>�<span
style='font:7.0pt "Times New Roman"'>&nbsp; </span></span></span><![endif]><span
dir=LTR></span><span lang=EN-US style='font-size:10.0pt;font-family:Montserrat;
mso-fareast-font-family:"Times New Roman";mso-bidi-font-family:"Times New Roman";
mso-bidi-theme-font:major-bidi'>41 - 56 <span style='mso-tab-count:1'> </span>Independent<o:p></o:p></span></p>

<p class=MsoNormal style='line-height:10.0pt;mso-line-height-rule:exactly'><span
lang=EN-US style='mso-bidi-font-size:10.0pt;font-family:Montserrat;mso-fareast-font-family:
"Times New Roman";mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:
major-bidi'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal style='margin-left:15.65pt;tab-stops:626.9pt'><span
lang=EN-US style='font-size:9.0pt;mso-bidi-font-size:10.0pt;font-family:Montserrat;
mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi;
position:relative;top:-15.5pt;mso-text-raise:15.5pt'><span style='mso-tab-count:
1'>����������������������������������������������������������������������������������������������������������������������������������������������������������������������������������������������������������������������������� </span><o:p></o:p></span></p>

<p class=MsoNormal><span lang=EN-US style='font-size:9.0pt;mso-bidi-font-size:
10.0pt;font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal><span lang=EN-US style='font-size:9.0pt;mso-bidi-font-size:
10.0pt;font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal><span lang=EN-US style='font-size:9.0pt;mso-bidi-font-size:
10.0pt;font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal align=right style='text-align:right'><span lang=EN-US
style='font-size:9.0pt;mso-bidi-font-size:10.0pt;font-family:Montserrat;
mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi;
position:relative;top:-15.5pt;mso-text-raise:15.5pt'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal><span lang=EN-US style='font-size:9.0pt;mso-bidi-font-size:
10.0pt;font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal><span lang=EN-US style='font-size:9.0pt;mso-bidi-font-size:
10.0pt;font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
mso-bidi-theme-font:major-bidi;position:relative;top:-15.5pt;mso-text-raise:
15.5pt'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal><span lang=EN-US style='font-size:9.0pt;mso-bidi-font-size:
10.0pt;font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal><span lang=EN-US style='font-size:9.0pt;mso-bidi-font-size:
10.0pt;font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal><span lang=EN-US style='font-size:9.0pt;mso-bidi-font-size:
10.0pt;font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></p>

</div>

</body>

</html>
