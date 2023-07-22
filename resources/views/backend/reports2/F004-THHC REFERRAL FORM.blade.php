<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>F004-THHC REFERRAL FORM | @yield('title')</title>

<style>

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
p.MsoBodyText2, li.MsoBodyText2, div.MsoBodyText2
	{mso-style-unhide:no;
	mso-style-link:"\0646\0635 \0623\0633\0627\0633\064A 2 Char";
	margin-top:0cm;
	margin-right:0cm;
	margin-bottom:0cm;
	margin-left:108.0pt;
	margin-bottom:.0001pt;
	text-align:justify;
	text-justify:kashida;
	text-kashida:0%;
	text-indent:-36.0pt;
	mso-pagination:widow-orphan;
	tab-stops:0cm;
	font-size:11.0pt;
	font-family:"Arial",sans-serif;
	mso-fareast-font-family:"Times New Roman";
	mso-ansi-language:EN-US;
	mso-fareast-language:AR-SA;}
p
	{mso-style-noshow:yes;
	mso-style-priority:99;
	mso-margin-top-alt:auto;
	margin-right:0cm;
	mso-margin-bottom-alt:auto;
	margin-left:0cm;
	mso-pagination:widow-orphan;
	font-size:12.0pt;
	font-family:"Times New Roman",serif;
	mso-fareast-font-family:"Times New Roman";
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
p.MsoListParagraph, li.MsoListParagraph, div.MsoListParagraph
	{mso-style-priority:34;
	mso-style-unhide:no;
	mso-style-qformat:yes;
	margin-top:0cm;
	margin-right:0cm;
	margin-bottom:8.0pt;
	margin-left:36.0pt;
	mso-add-space:auto;
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
p.MsoListParagraphCxSpFirst, li.MsoListParagraphCxSpFirst, div.MsoListParagraphCxSpFirst
	{mso-style-priority:34;
	mso-style-unhide:no;
	mso-style-qformat:yes;
	mso-style-type:export-only;
	margin-top:0cm;
	margin-right:0cm;
	margin-bottom:0cm;
	margin-left:36.0pt;
	margin-bottom:.0001pt;
	mso-add-space:auto;
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
p.MsoListParagraphCxSpMiddle, li.MsoListParagraphCxSpMiddle, div.MsoListParagraphCxSpMiddle
	{mso-style-priority:34;
	mso-style-unhide:no;
	mso-style-qformat:yes;
	mso-style-type:export-only;
	margin-top:0cm;
	margin-right:0cm;
	margin-bottom:0cm;
	margin-left:36.0pt;
	margin-bottom:.0001pt;
	mso-add-space:auto;
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
p.MsoListParagraphCxSpLast, li.MsoListParagraphCxSpLast, div.MsoListParagraphCxSpLast
	{mso-style-priority:34;
	mso-style-unhide:no;
	mso-style-qformat:yes;
	mso-style-type:export-only;
	margin-top:0cm;
	margin-right:0cm;
	margin-bottom:8.0pt;
	margin-left:36.0pt;
	mso-add-space:auto;
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
span.2Char
	{mso-style-name:"\0646\0635 \0623\0633\0627\0633\064A 2 Char";
	mso-style-unhide:no;
	mso-style-locked:yes;
	mso-style-link:"\0646\0635 \0623\0633\0627\0633\064A 2";
	font-family:"Arial",sans-serif;
	mso-ascii-font-family:Arial;
	mso-fareast-font-family:"Times New Roman";
	mso-hansi-font-family:Arial;
	mso-bidi-font-family:Arial;
	mso-fareast-language:AR-SA;}
span.SpellE
	{mso-style-name:"";
	mso-spl-e:yes;}
span.GramE
	{mso-style-name:"";
	mso-gram-e:yes;}
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
	{mso-footnote-separator:url("F004-THHC%20REFERRAL%20FORM.files/header.htm") fs;
	mso-footnote-continuation-separator:url("F004-THHC%20REFERRAL%20FORM.files/header.htm") fcs;
	mso-endnote-separator:url("F004-THHC%20REFERRAL%20FORM.files/header.htm") es;
	mso-endnote-continuation-separator:url("F004-THHC%20REFERRAL%20FORM.files/header.htm") ecs;
	mso-facing-pages:yes;}
@page WordSection1
	{size:612.0pt 792.0pt;
	margin:72.0pt 72.0pt 72.0pt 72.0pt;
	mso-header-margin:14.4pt;
	mso-footer-margin:7.2pt;
	mso-header:url("F004-THHC%20REFERRAL%20FORM.files/header.htm") h1;
	mso-even-footer:url("F004-THHC%20REFERRAL%20FORM.files/header.htm") ef1;
	mso-footer:url("F004-THHC%20REFERRAL%20FORM.files/header.htm") f1;
	mso-paper-source:0;}
div.WordSection1
	{page:WordSection1;}
 /* List Definitions */
 @list l0
	{mso-list-id:73287731;
	mso-list-type:hybrid;
	mso-list-template-ids:685943226 -1940354722 67698691 67698693 67698689 67698691 67698693 67698689 67698691 67698693;}
@list l0:level1
	{mso-level-number-format:bullet;
	mso-level-text:\F071;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	font-family:Wingdings;}
@list l0:level2
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	font-family:"Courier New";}
@list l0:level3
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	font-family:Wingdings;}
@list l0:level4
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	font-family:Symbol;}
@list l0:level5
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	font-family:"Courier New";}
@list l0:level6
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	font-family:Wingdings;}
@list l0:level7
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	font-family:Symbol;}
@list l0:level8
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	font-family:"Courier New";}
@list l0:level9
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	font-family:Wingdings;}
@list l1
	{mso-list-id:465585414;
	mso-list-type:hybrid;
	mso-list-template-ids:-545751066 -1940354722 67698691 67698693 67698689 67698691 67698693 67698689 67698691 67698693;}
@list l1:level1
	{mso-level-number-format:bullet;
	mso-level-text:\F071;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	font-family:Wingdings;}
@list l1:level2
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	font-family:"Courier New";}
@list l1:level3
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	font-family:Wingdings;}
@list l1:level4
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	font-family:Symbol;}
@list l1:level5
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	font-family:"Courier New";}
@list l1:level6
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	font-family:Wingdings;}
@list l1:level7
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	font-family:Symbol;}
@list l1:level8
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	font-family:"Courier New";}
@list l1:level9
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	font-family:Wingdings;}
@list l2
	{mso-list-id:624046058;
	mso-list-type:hybrid;
	mso-list-template-ids:-932576604 -1940354722 67698691 67698693 67698689 67698691 67698693 67698689 67698691 67698693;}
@list l2:level1
	{mso-level-number-format:bullet;
	mso-level-text:\F071;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	font-family:Wingdings;}
@list l2:level2
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	font-family:"Courier New";}
@list l2:level3
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	font-family:Wingdings;}
@list l2:level4
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	font-family:Symbol;}
@list l2:level5
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	font-family:"Courier New";}
@list l2:level6
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	font-family:Wingdings;}
@list l2:level7
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	font-family:Symbol;}
@list l2:level8
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	font-family:"Courier New";}
@list l2:level9
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	font-family:Wingdings;}
@list l3
	{mso-list-id:698551805;
	mso-list-type:hybrid;
	mso-list-template-ids:665212570 -1940354722 67698691 67698693 67698689 67698691 67698693 67698689 67698691 67698693;}
@list l3:level1
	{mso-level-number-format:bullet;
	mso-level-text:\F071;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	font-family:Wingdings;}
@list l3:level2
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	font-family:"Courier New";}
@list l3:level3
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	font-family:Wingdings;}
@list l3:level4
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	font-family:Symbol;}
@list l3:level5
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	font-family:"Courier New";}
@list l3:level6
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	font-family:Wingdings;}
@list l3:level7
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	font-family:Symbol;}
@list l3:level8
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	font-family:"Courier New";}
@list l3:level9
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	font-family:Wingdings;}
@list l4
	{mso-list-id:1090276110;
	mso-list-type:hybrid;
	mso-list-template-ids:1250954276 -1940354722 67698691 67698691 67698689 67698691 67698693 67698689 67698691 67698693;}
@list l4:level1
	{mso-level-number-format:bullet;
	mso-level-text:\F071;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	font-family:Wingdings;}
@list l4:level2
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	font-family:"Courier New";}
@list l4:level3
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	font-family:"Courier New";}
@list l4:level4
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	font-family:Symbol;}
@list l4:level5
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:112.5pt;
	text-indent:-18.0pt;
	font-family:"Courier New";}
@list l4:level6
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	font-family:Wingdings;}
@list l4:level7
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	font-family:Symbol;}
@list l4:level8
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	font-family:"Courier New";}
@list l4:level9
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	font-family:Wingdings;}
@list l5
	{mso-list-id:1748456900;
	mso-list-type:hybrid;
	mso-list-template-ids:67168274 67698699 67698691 67698693 67698689 67698691 67698693 67698689 67698691 67698693;}
@list l5:level1
	{mso-level-number-format:bullet;
	mso-level-text:\F0D8;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	font-family:Wingdings;}
@list l5:level2
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	font-family:"Courier New";}
@list l5:level3
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	font-family:Wingdings;}
@list l5:level4
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	font-family:Symbol;}
@list l5:level5
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	font-family:"Courier New";}
@list l5:level6
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	font-family:Wingdings;}
@list l5:level7
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	font-family:Symbol;}
@list l5:level8
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	font-family:"Courier New";}
@list l5:level9
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	font-family:Wingdings;}
@list l6
	{mso-list-id:1811049931;
	mso-list-type:hybrid;
	mso-list-template-ids:-1094920948 -1940354722 67698691 67698693 67698689 67698691 67698693 67698689 67698691 67698693;}
@list l6:level1
	{mso-level-number-format:bullet;
	mso-level-text:\F071;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	font-family:Wingdings;}
@list l6:level2
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	font-family:"Courier New";}
@list l6:level3
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	font-family:Wingdings;}
@list l6:level4
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	font-family:Symbol;}
@list l6:level5
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	font-family:"Courier New";}
@list l6:level6
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	font-family:Wingdings;}
@list l6:level7
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	font-family:Symbol;}
@list l6:level8
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	font-family:"Courier New";}
@list l6:level9
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	font-family:Wingdings;}
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

<p class=MsoNoSpacing><span lang=EN-US style='font-family:"Times New Roman",serif;
mso-ascii-theme-font:major-bidi;mso-hansi-theme-font:major-bidi;mso-bidi-theme-font:
major-bidi'><span style='mso-tab-count:2'></span><o:p></o:p></span></p>

<p style='margin:0cm;margin-bottom:.0001pt;text-align:justify'><span
lang=EN-US style='font-size:11.0pt;font-family:Montserrat;mso-bidi-font-family:
"Times New Roman";mso-bidi-theme-font:major-bidi'>Referred from:<span
style='mso-spacerun:yes'></span><span style='color:black'><span
style='mso-spacerun:yes'></span></span></span><span lang=EN-US
style='font-size:11.0pt;font-family:Symbol;mso-ascii-font-family:Montserrat;
mso-hansi-font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
mso-bidi-theme-font:major-bidi;color:black;mso-char-type:symbol;mso-symbol-font-family:
Symbol'><span style='mso-char-type:symbol;mso-symbol-font-family:Symbol'>&nbsp;</span></span><span
lang=EN-US style='font-size:11.0pt;font-family:Montserrat;mso-bidi-font-family:
"Times New Roman";mso-bidi-theme-font:major-bidi;color:black'> hospital____________________
</span><span lang=EN-US style='font-size:11.0pt;font-family:Montserrat;
mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi'><span
style='mso-spacerun:yes'></span><o:p></o:p></span></p>

<p style='margin:0cm;margin-bottom:.0001pt;text-align:justify'><span
lang=EN-US style='font-size:11.0pt;font-family:Montserrat;mso-bidi-font-family:
"Times New Roman";mso-bidi-theme-font:major-bidi'><span
style='mso-spacerun:yes'> </span><span
style='mso-spacerun:yes'></span></span><span lang=EN-US style='font-size:11.0pt;
font-family:Symbol;mso-ascii-font-family:Montserrat;mso-hansi-font-family:Montserrat;
mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi;
color:black;mso-char-type:symbol;mso-symbol-font-family:Symbol'><span
style='mso-char-type:symbol;mso-symbol-font-family:Symbol'>&nbsp;</span></span><span
lang=EN-US style='font-size:11.0pt;font-family:Montserrat;mso-bidi-font-family:
"Times New Roman";mso-bidi-theme-font:major-bidi;color:black'> Phone call </span><span
lang=EN-US style='font-size:11.0pt;font-family:Montserrat;mso-bidi-font-family:
"Times New Roman";mso-bidi-theme-font:major-bidi'><span
style='mso-spacerun:yes'></span></span><span lang=EN-US style='font-size:11.0pt;
font-family:Symbol;mso-ascii-font-family:Montserrat;mso-hansi-font-family:Montserrat;
mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi;
mso-char-type:symbol;mso-symbol-font-family:Symbol'><span style='mso-char-type:
symbol;mso-symbol-font-family:Symbol'>&nbsp;</span></span><span lang=EN-US
style='font-size:11.0pt;font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
mso-bidi-theme-font:major-bidi'> <span class=SpellE>Tawazun</span> Home Health
Care<span style='color:black'> APP.</span><o:p></o:p></span></p>

<p class=MsoNoSpacing><span lang=EN-US style='font-family:Montserrat;
mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi'><span
style='mso-spacerun:yes'> </span></span><span
lang=EN-US style='font-family:Symbol;mso-ascii-font-family:Montserrat;
mso-hansi-font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
mso-bidi-theme-font:major-bidi;mso-char-type:symbol;mso-symbol-font-family:
Symbol'><span style='mso-char-type:symbol;mso-symbol-font-family:Symbol'>&nbsp;</span></span><span
lang=EN-US style='font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
mso-bidi-theme-font:major-bidi'> Others: ______________<o:p></o:p></span></p>

<p class=MsoNoSpacing><span lang=EN-US style='font-family:"Times New Roman",serif;
mso-ascii-theme-font:major-bidi;mso-hansi-theme-font:major-bidi;mso-bidi-theme-font:
major-bidi'><o:p>&nbsp;</o:p></span></p>

<table class=MsoTableGrid border=1 cellspacing=0 cellpadding=0 align=left
 style='border-collapse:collapse;border:none;mso-border-alt:solid windowtext .5pt;
 mso-yfti-tbllook:1184;mso-table-lspace:9.0pt;margin-left:6.75pt;mso-table-rspace:
 9.0pt;margin-right:6.75pt;mso-table-anchor-vertical:paragraph;mso-table-anchor-horizontal:
 margin;mso-table-left:left;mso-table-top:-1.05pt;mso-padding-alt:0cm 5.4pt 0cm 5.4pt'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes'>
  <td width=174 valign=top style='width:130.25pt;border:solid windowtext 1.0pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNoSpacing style='text-align:justify;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:paragraph;
  mso-element-anchor-horizontal:margin;mso-element-top:-1.05pt;mso-height-rule:
  exactly'><span lang=EN-US style='font-family:Montserrat;mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi'>Medical History:<o:p></o:p></span></p>
  <p class=MsoNoSpacing style='text-align:justify;tab-stops:51.75pt;mso-element:
  frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:
  paragraph;mso-element-anchor-horizontal:margin;mso-element-top:-1.05pt;
  mso-height-rule:exactly'><span lang=EN-US style='font-family:Montserrat;
  mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=450 valign=top style='width:337.25pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNoSpacing style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
  margin;mso-element-top:-1.05pt;mso-height-rule:exactly'><span lang=EN-US
  style='font-family:"Times New Roman",serif;mso-ascii-theme-font:major-bidi;
  mso-hansi-theme-font:major-bidi;mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:1;mso-yfti-lastrow:yes;height:29.85pt'>
  <td width=174 valign=top style='width:130.25pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:29.85pt'>
  <p class=MsoNoSpacing style='text-align:justify;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-vertical:paragraph;
  mso-element-anchor-horizontal:margin;mso-element-top:-1.05pt;mso-height-rule:
  exactly'><span lang=EN-US style='font-family:Montserrat;mso-bidi-font-family:
  "Times New Roman";mso-bidi-theme-font:major-bidi'>Current/Active Problems:<o:p></o:p></span></p>
  </td>
  <td width=450 valign=top style='width:337.25pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:29.85pt'>
  <p class=MsoNoSpacing style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
  margin;mso-element-top:-1.05pt;mso-height-rule:exactly'><span lang=EN-US
  style='font-family:"Times New Roman",serif;mso-ascii-theme-font:major-bidi;
  mso-hansi-theme-font:major-bidi;mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
</table>

<p class=MsoNoSpacing><span lang=EN-US style='font-family:Montserrat;
mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi;
color:white;mso-color-alt:windowtext'><span style='mso-spacerun:yes'>�</span></span><span
lang=EN-US style='font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
mso-bidi-theme-font:major-bidi'>Reason for <span class=SpellE>Tawazun</span> Home
Health Care Referral:<span style='mso-spacerun:yes'>�� </span><span
style='mso-spacerun:yes'>�</span></span><span lang=EN-US style='font-family:
Symbol;mso-ascii-font-family:Montserrat;mso-hansi-font-family:Montserrat;
mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi;
mso-char-type:symbol;mso-symbol-font-family:Symbol'><span style='mso-char-type:
symbol;mso-symbol-font-family:Symbol'>&nbsp;</span></span><span lang=EN-US
style='font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
mso-bidi-theme-font:major-bidi'> First Time Referral<span
style='mso-spacerun:yes'>���� </span></span><span lang=EN-US style='font-family:
Symbol;mso-ascii-font-family:Montserrat;mso-hansi-font-family:Montserrat;
mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi;
mso-char-type:symbol;mso-symbol-font-family:Symbol'><span style='mso-char-type:
symbol;mso-symbol-font-family:Symbol'>&nbsp;</span></span><span lang=EN-US
style='font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
mso-bidi-theme-font:major-bidi'> Re Referral<o:p></o:p></span></p>

<p class=MsoListParagraphCxSpFirst style='text-indent:-18.0pt;mso-list:l0 level1 lfo2'><![if !supportLists]><span
lang=EN-US style='font-family:Wingdings;mso-fareast-font-family:Wingdings;
mso-bidi-font-family:Wingdings'><span style='mso-list:Ignore'>q<span
style='font:7.0pt "Times New Roman"'>&nbsp; </span></span></span><![endif]><span
dir=LTR></span><span lang=EN-US style='font-family:Montserrat;mso-bidi-font-family:
"Times New Roman";mso-bidi-theme-font:major-bidi'>Chronic Care<o:p></o:p></span></p>

<p class=MsoListParagraphCxSpMiddle style='text-indent:-18.0pt;mso-list:l0 level1 lfo2'><![if !supportLists]><span
lang=EN-US style='font-family:Wingdings;mso-fareast-font-family:Wingdings;
mso-bidi-font-family:Wingdings'><span style='mso-list:Ignore'>q<span
style='font:7.0pt "Times New Roman"'>&nbsp; </span></span></span><![endif]><span
dir=LTR></span><span lang=EN-US style='font-family:Montserrat;mso-bidi-font-family:
"Times New Roman";mso-bidi-theme-font:major-bidi'>Stable for Discharge and
Treatment Plan Can be managed at home<o:p></o:p></span></p>

<p class=MsoListParagraphCxSpMiddle style='text-indent:-18.0pt;mso-list:l0 level1 lfo2'><![if !supportLists]><span
lang=EN-US style='font-family:Wingdings;mso-fareast-font-family:Wingdings;
mso-bidi-font-family:Wingdings'><span style='mso-list:Ignore'>q<span
style='font:7.0pt "Times New Roman"'>&nbsp; </span></span></span><![endif]><span
dir=LTR></span><span lang=EN-US style='font-family:Montserrat;mso-bidi-font-family:
"Times New Roman";mso-bidi-theme-font:major-bidi'>Palliative Care<o:p></o:p></span></p>

<p class=MsoListParagraphCxSpLast style='text-indent:-18.0pt;mso-list:l0 level1 lfo2'><![if !supportLists]><span
lang=EN-US style='font-family:Wingdings;mso-fareast-font-family:Wingdings;
mso-bidi-font-family:Wingdings'><span style='mso-list:Ignore'>q<span
style='font:7.0pt "Times New Roman"'>&nbsp; </span></span></span><![endif]><span
dir=LTR></span><span lang=EN-US style='font-family:Montserrat;mso-bidi-font-family:
"Times New Roman";mso-bidi-theme-font:major-bidi'>Others: _________________<o:p></o:p></span></p>

<p class=MsoNormal style='tab-stops:402.0pt'><span lang=EN-US style='font-family:
Montserrat;mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi'>Service
Needed:<span style='mso-tab-count:1'></span><o:p></o:p></span></p>

<p class=MsoListParagraphCxSpFirst style='text-indent:-18.0pt;mso-list:l2 level1 lfo3'><![if !supportLists]><span
lang=EN-US style='font-family:Wingdings;mso-fareast-font-family:Wingdings;
mso-bidi-font-family:Wingdings'><span style='mso-list:Ignore'>q<span
style='font:7.0pt "Times New Roman"'>&nbsp; </span></span></span><![endif]><span
dir=LTR></span><span lang=EN-US style='font-family:Montserrat;mso-bidi-font-family:
"Times New Roman";mso-bidi-theme-font:major-bidi'>Nursing<o:p></o:p></span></p>

<p class=MsoListParagraphCxSpMiddle style='text-indent:-18.0pt;mso-list:l2 level1 lfo3'><![if !supportLists]><span
lang=EN-US style='font-family:Wingdings;mso-fareast-font-family:Wingdings;
mso-bidi-font-family:Wingdings'><span style='mso-list:Ignore'>q<span
style='font:7.0pt "Times New Roman"'>&nbsp; </span></span></span><![endif]><span
dir=LTR></span><span lang=EN-US style='font-family:Montserrat;mso-bidi-font-family:
"Times New Roman";mso-bidi-theme-font:major-bidi'>Physiotherapy<o:p></o:p></span></p>

<p class=MsoListParagraphCxSpMiddle style='text-indent:-18.0pt;mso-list:l2 level1 lfo3'><![if !supportLists]><span
lang=EN-US style='font-family:Wingdings;mso-fareast-font-family:Wingdings;
mso-bidi-font-family:Wingdings'><span style='mso-list:Ignore'>q<span
style='font:7.0pt "Times New Roman"'>&nbsp; </span></span></span><![endif]><span
dir=LTR></span><span lang=EN-US style='font-family:Montserrat;mso-bidi-font-family:
"Times New Roman";mso-bidi-theme-font:major-bidi'>Respiratory<o:p></o:p></span></p>

<p class=MsoListParagraphCxSpMiddle style='text-indent:-18.0pt;mso-list:l2 level1 lfo3'><![if !supportLists]><span
lang=EN-US style='font-family:Wingdings;mso-fareast-font-family:Wingdings;
mso-bidi-font-family:Wingdings'><span style='mso-list:Ignore'>q<span
style='font:7.0pt "Times New Roman"'>&nbsp; </span></span></span><![endif]><span
dir=LTR></span><span lang=EN-US style='font-family:Montserrat;mso-bidi-font-family:
"Times New Roman";mso-bidi-theme-font:major-bidi'>Lab work (Post discharge
follow up investigation)<o:p></o:p></span></p>

<p class=MsoListParagraphCxSpLast style='text-indent:-18.0pt;mso-list:l2 level1 lfo3'><![if !supportLists]><span
lang=EN-US style='font-family:Wingdings;mso-fareast-font-family:Wingdings;
mso-bidi-font-family:Wingdings'><span style='mso-list:Ignore'>q<span
style='font:7.0pt "Times New Roman"'>&nbsp; </span></span></span><![endif]><span
dir=LTR></span><span lang=EN-US style='font-family:Montserrat;mso-bidi-font-family:
"Times New Roman";mso-bidi-theme-font:major-bidi'>Nutritionist <o:p></o:p></span></p>

<p class=MsoNormal><span lang=EN-US style='font-family:Montserrat;mso-bidi-font-family:
"Times New Roman";mso-bidi-theme-font:major-bidi'>Physician Care Plan:<o:p></o:p></span></p>

<p class=MsoListParagraphCxSpFirst style='text-indent:-18.0pt;mso-list:l4 level1 lfo5'><![if !supportLists]><span
lang=EN-US style='font-family:Wingdings;mso-fareast-font-family:Wingdings;
mso-bidi-font-family:Wingdings;mso-bidi-font-weight:bold'><span
style='mso-list:Ignore'>q<span style='font:7.0pt "Times New Roman"'>&nbsp; </span></span></span><![endif]><span
dir=LTR></span><span lang=EN-US style='font-family:"Montserrat SemiBold";
mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi'>Medication
Management:</span><span lang=EN-US style='font-family:Montserrat;mso-bidi-font-family:
"Times New Roman";mso-bidi-theme-font:major-bidi'> (Please enter medication
order in the patient EMR)<b><o:p></o:p></b></span></p>

<p class=MsoListParagraphCxSpMiddle><b><span lang=EN-US style='font-family:
Montserrat;mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></b></p>

<p class=MsoListParagraphCxSpMiddle style='margin-left:72.0pt;mso-add-space:
auto;text-indent:-18.0pt;mso-list:l4 level2 lfo5'><![if !supportLists]><span
lang=EN-US style='font-family:"Courier New";mso-fareast-font-family:"Courier New"'><span
style='mso-list:Ignore'>o<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;
</span></span></span><![endif]><span dir=LTR></span><span lang=EN-US
style='font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
mso-bidi-theme-font:major-bidi'>IV medication<o:p></o:p></span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-left:108.0pt;mso-add-space:
auto;text-indent:-18.0pt;mso-list:l4 level3 lfo5'><![if !supportLists]><span
lang=EN-US style='font-family:"Courier New";mso-fareast-font-family:"Courier New"'><span
style='mso-list:Ignore'>o<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;
</span></span></span><![endif]><span dir=LTR></span><span lang=EN-US
style='font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
mso-bidi-theme-font:major-bidi'>Drug Name: _________________<o:p></o:p></span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-left:108.0pt;mso-add-space:
auto;text-indent:-18.0pt;mso-list:l4 level3 lfo5'><![if !supportLists]><span
lang=EN-US style='font-family:"Courier New";mso-fareast-font-family:"Courier New"'><span
style='mso-list:Ignore'>o<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;
</span></span></span><![endif]><span dir=LTR></span><span lang=EN-US
style='font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
mso-bidi-theme-font:major-bidi'>Drug Dosage: ________________<o:p></o:p></span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-left:108.0pt;mso-add-space:
auto;text-indent:-18.0pt;mso-list:l4 level3 lfo5'><![if !supportLists]><span
lang=EN-US style='font-family:"Courier New";mso-fareast-font-family:"Courier New"'><span
style='mso-list:Ignore'>o<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;
</span></span></span><![endif]><span dir=LTR></span><span lang=EN-US
style='font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
mso-bidi-theme-font:major-bidi'>Administration route:<span
style='mso-spacerun:yes'>� </span></span><span lang=EN-US style='font-family:
Symbol;mso-ascii-font-family:Montserrat;mso-hansi-font-family:Montserrat;
mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi;
mso-char-type:symbol;mso-symbol-font-family:Symbol'><span style='mso-char-type:
symbol;mso-symbol-font-family:Symbol'>&nbsp;</span></span><span lang=EN-US
style='font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
mso-bidi-theme-font:major-bidi'> Intravenous </span><span lang=EN-US
style='font-family:Symbol;mso-ascii-font-family:Montserrat;mso-hansi-font-family:
Montserrat;mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi;
mso-char-type:symbol;mso-symbol-font-family:Symbol'><span style='mso-char-type:
symbol;mso-symbol-font-family:Symbol'>&nbsp;</span></span><span lang=EN-US
style='font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
mso-bidi-theme-font:major-bidi'> Intramuscular </span><span lang=EN-US
style='font-family:Symbol;mso-ascii-font-family:Montserrat;mso-hansi-font-family:
Montserrat;mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi;
mso-char-type:symbol;mso-symbol-font-family:Symbol'><span style='mso-char-type:
symbol;mso-symbol-font-family:Symbol'>&nbsp;</span></span><span lang=EN-US
style='font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
mso-bidi-theme-font:major-bidi'> Subcutaneous <o:p></o:p></span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-left:108.0pt;mso-add-space:
auto'><span lang=EN-US style='font-family:Symbol;mso-ascii-font-family:Montserrat;
mso-hansi-font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
mso-bidi-theme-font:major-bidi;mso-char-type:symbol;mso-symbol-font-family:
Symbol'><span style='mso-char-type:symbol;mso-symbol-font-family:Symbol'>&nbsp;</span></span><span
lang=EN-US style='font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
mso-bidi-theme-font:major-bidi'> Oral </span><span lang=EN-US style='font-family:
Symbol;mso-ascii-font-family:Montserrat;mso-hansi-font-family:Montserrat;
mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi;
mso-char-type:symbol;mso-symbol-font-family:Symbol'><span style='mso-char-type:
symbol;mso-symbol-font-family:Symbol'>&nbsp;</span></span><span lang=EN-US
style='font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
mso-bidi-theme-font:major-bidi'> NGT </span><span lang=EN-US style='font-family:
Symbol;mso-ascii-font-family:Montserrat;mso-hansi-font-family:Montserrat;
mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi;
mso-char-type:symbol;mso-symbol-font-family:Symbol'><span style='mso-char-type:
symbol;mso-symbol-font-family:Symbol'>&nbsp;</span></span><span lang=EN-US
style='font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
mso-bidi-theme-font:major-bidi'> PEG tube </span><span lang=EN-US
style='font-family:Symbol;mso-ascii-font-family:Montserrat;mso-hansi-font-family:
Montserrat;mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi;
mso-char-type:symbol;mso-symbol-font-family:Symbol'><span style='mso-char-type:
symbol;mso-symbol-font-family:Symbol'>&nbsp;</span></span><span lang=EN-US
style='font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
mso-bidi-theme-font:major-bidi'> Nebulization<o:p></o:p></span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-left:108.0pt;mso-add-space:
auto;text-indent:-18.0pt;mso-list:l4 level3 lfo5'><![if !supportLists]><span
lang=EN-US style='font-family:"Courier New";mso-fareast-font-family:"Courier New"'><span
style='mso-list:Ignore'>o<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;
</span></span></span><![endif]><span dir=LTR></span><span lang=EN-US
style='font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
mso-bidi-theme-font:major-bidi'>Administration Frequency:<span
style='mso-spacerun:yes'>�� </span></span><span lang=EN-US style='font-family:
Symbol;mso-ascii-font-family:Montserrat;mso-hansi-font-family:Montserrat;
mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi;
mso-char-type:symbol;mso-symbol-font-family:Symbol'><span style='mso-char-type:
symbol;mso-symbol-font-family:Symbol'>&nbsp;</span></span><span lang=EN-US
style='font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
mso-bidi-theme-font:major-bidi'> Once daily </span><span lang=EN-US
style='font-family:Symbol;mso-ascii-font-family:Montserrat;mso-hansi-font-family:
Montserrat;mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi;
mso-char-type:symbol;mso-symbol-font-family:Symbol'><span style='mso-char-type:
symbol;mso-symbol-font-family:Symbol'>&nbsp;</span></span><span lang=EN-US
style='font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
mso-bidi-theme-font:major-bidi'> Twice daily </span><span lang=EN-US
style='font-family:Symbol;mso-ascii-font-family:Montserrat;mso-hansi-font-family:
Montserrat;mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi;
mso-char-type:symbol;mso-symbol-font-family:Symbol'><span style='mso-char-type:
symbol;mso-symbol-font-family:Symbol'>&nbsp;</span></span><span lang=EN-US
style='font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
mso-bidi-theme-font:major-bidi'> Others: _____<o:p></o:p></span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-left:108.0pt;mso-add-space:
auto;text-indent:-18.0pt;mso-list:l4 level3 lfo5'><![if !supportLists]><span
lang=EN-US style='font-family:"Courier New";mso-fareast-font-family:"Courier New"'><span
style='mso-list:Ignore'>o<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;
</span></span></span><![endif]><span dir=LTR></span><span lang=EN-US
style='font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
mso-bidi-theme-font:major-bidi'>Start Date: __________________<o:p></o:p></span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-left:108.0pt;mso-add-space:
auto;text-indent:-18.0pt;mso-list:l4 level3 lfo5'><![if !supportLists]><span
lang=EN-US style='font-family:"Courier New";mso-fareast-font-family:"Courier New"'><span
style='mso-list:Ignore'>o<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;
</span></span></span><![endif]><span dir=LTR></span><span lang=EN-US
style='font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
mso-bidi-theme-font:major-bidi'>End Date: ___________________<o:p></o:p></span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-left:108.0pt;mso-add-space:
auto'><span lang=EN-US style='font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></p>

<p class=MsoListParagraphCxSpMiddle style='text-indent:-18.0pt;mso-list:l3 level1 lfo7'><![if !supportLists]><span
lang=EN-US style='font-family:Wingdings;mso-fareast-font-family:Wingdings;
mso-bidi-font-family:Wingdings'><span style='mso-list:Ignore'>q<span
style='font:7.0pt "Times New Roman"'>&nbsp; </span></span></span><![endif]><span
dir=LTR></span><span lang=EN-US style='font-family:Montserrat;mso-bidi-font-family:
"Times New Roman";mso-bidi-theme-font:major-bidi'><span
style='mso-spacerun:yes'>��</span></span><span lang=EN-US style='font-family:
"Montserrat SemiBold";mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:
major-bidi'>Nursing Assessment (Vital Signs Taking and RBS Monitoring)<o:p></o:p></span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-left:72.0pt;mso-add-space:
auto;text-indent:-18.0pt;mso-list:l3 level2 lfo7'><![if !supportLists]><span
lang=EN-US style='font-family:"Courier New";mso-fareast-font-family:"Courier New"'><span
style='mso-list:Ignore'>o<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;
</span></span></span><![endif]><span dir=LTR></span><span lang=EN-US
style='font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
mso-bidi-theme-font:major-bidi'>Frequency:<span style='mso-spacerun:yes'>�
</span></span><span lang=EN-US style='font-family:Symbol;mso-ascii-font-family:
Montserrat;mso-hansi-font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
mso-bidi-theme-font:major-bidi;mso-char-type:symbol;mso-symbol-font-family:
Symbol'><span style='mso-char-type:symbol;mso-symbol-font-family:Symbol'>&nbsp;</span></span><span
lang=EN-US style='font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
mso-bidi-theme-font:major-bidi'> Daily </span><span lang=EN-US
style='font-family:Symbol;mso-ascii-font-family:Montserrat;mso-hansi-font-family:
Montserrat;mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi;
mso-char-type:symbol;mso-symbol-font-family:Symbol'><span style='mso-char-type:
symbol;mso-symbol-font-family:Symbol'>&nbsp;</span></span><span lang=EN-US
style='font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
mso-bidi-theme-font:major-bidi'> Once Weekly </span><span lang=EN-US
style='font-family:Symbol;mso-ascii-font-family:Montserrat;mso-hansi-font-family:
Montserrat;mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi;
mso-char-type:symbol;mso-symbol-font-family:Symbol'><span style='mso-char-type:
symbol;mso-symbol-font-family:Symbol'>&nbsp;</span></span><span lang=EN-US
style='font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
mso-bidi-theme-font:major-bidi'> Twice Weekly </span><span lang=EN-US
style='font-family:Symbol;mso-ascii-font-family:Montserrat;mso-hansi-font-family:
Montserrat;mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi;
mso-char-type:symbol;mso-symbol-font-family:Symbol'><span style='mso-char-type:
symbol;mso-symbol-font-family:Symbol'>&nbsp;</span></span><span lang=EN-US
style='font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
mso-bidi-theme-font:major-bidi'> Thrice Weekly <o:p></o:p></span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-left:72.0pt;mso-add-space:
auto'><span lang=EN-US style='font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
mso-bidi-theme-font:major-bidi'><span
style='mso-spacerun:yes'>�������������������� </span></span><span lang=EN-US
style='font-family:Symbol;mso-ascii-font-family:Montserrat;mso-hansi-font-family:
Montserrat;mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi;
mso-char-type:symbol;mso-symbol-font-family:Symbol'><span style='mso-char-type:
symbol;mso-symbol-font-family:Symbol'>&nbsp;</span></span><span lang=EN-US
style='font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
mso-bidi-theme-font:major-bidi'> Others:
_______________________________________<o:p></o:p></span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-left:72.0pt;mso-add-space:
auto;text-indent:-18.0pt;mso-list:l3 level2 lfo7'><![if !supportLists]><span
lang=EN-US style='font-family:"Courier New";mso-fareast-font-family:"Courier New"'><span
style='mso-list:Ignore'>o<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;
</span></span></span><![endif]><span dir=LTR></span><span lang=EN-US
style='font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
mso-bidi-theme-font:major-bidi'>Duration of Visit: ___________________________________________</span><span
lang=EN-US style='font-family:"Times New Roman",serif;mso-ascii-theme-font:
major-bidi;mso-hansi-theme-font:major-bidi;mso-bidi-theme-font:major-bidi'><o:p></o:p></span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-left:72.0pt;mso-add-space:
auto'><span lang=EN-US style='font-family:"Times New Roman",serif;mso-ascii-theme-font:
major-bidi;mso-hansi-theme-font:major-bidi;mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></p>

<p class=MsoListParagraphCxSpMiddle style='text-indent:-18.0pt;mso-list:l3 level1 lfo7'><![if !supportLists]><span
lang=EN-US style='font-family:Wingdings;mso-fareast-font-family:Wingdings;
mso-bidi-font-family:Wingdings'><span style='mso-list:Ignore'>q<span
style='font:7.0pt "Times New Roman"'>&nbsp; </span></span></span><![endif]><span
dir=LTR></span><span lang=EN-US style='font-family:"Montserrat SemiBold";
mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi'>Foleys
Catheter Care:<span style='mso-spacerun:yes'>� </span><o:p></o:p></span></p>

<p class=MsoListParagraphCxSpMiddle><span lang=EN-US style='font-family:Symbol;
mso-ascii-font-family:"Times New Roman";mso-ascii-theme-font:major-bidi;
mso-hansi-font-family:"Times New Roman";mso-hansi-theme-font:major-bidi;
mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi;
mso-char-type:symbol;mso-symbol-font-family:Symbol'><span style='mso-char-type:
symbol;mso-symbol-font-family:Symbol'>&nbsp;</span></span><span lang=EN-US
style='font-family:"Times New Roman",serif;mso-ascii-theme-font:major-bidi;
mso-hansi-theme-font:major-bidi;mso-bidi-theme-font:major-bidi'> </span><span
lang=EN-US style='font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
mso-bidi-theme-font:major-bidi'>Catheter Size: ______ </span><span lang=EN-US
style='font-family:Symbol;mso-ascii-font-family:Montserrat;mso-hansi-font-family:
Montserrat;mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi;
mso-char-type:symbol;mso-symbol-font-family:Symbol'><span style='mso-char-type:
symbol;mso-symbol-font-family:Symbol'>&nbsp;</span></span><span lang=EN-US
style='font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
mso-bidi-theme-font:major-bidi'> Type: ___________ Date Inserted: _______________<o:p></o:p></span></p>

<p class=MsoListParagraphCxSpMiddle><span lang=EN-US style='font-family:Montserrat;
mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi'><span
style='mso-spacerun:yes'>�</span>Frequency of Changing:<span
style='mso-spacerun:yes'>� </span></span><span lang=EN-US style='font-family:
Symbol;mso-ascii-font-family:Montserrat;mso-hansi-font-family:Montserrat;
mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi;
mso-char-type:symbol;mso-symbol-font-family:Symbol'><span style='mso-char-type:
symbol;mso-symbol-font-family:Symbol'>&nbsp;</span></span><span lang=EN-US
style='font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
mso-bidi-theme-font:major-bidi'> Monthly </span><span lang=EN-US
style='font-family:Symbol;mso-ascii-font-family:Montserrat;mso-hansi-font-family:
Montserrat;mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi;
mso-char-type:symbol;mso-symbol-font-family:Symbol'><span style='mso-char-type:
symbol;mso-symbol-font-family:Symbol'>&nbsp;</span></span><span lang=EN-US
style='font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
mso-bidi-theme-font:major-bidi'> Every 3 months </span><span lang=EN-US
style='font-family:Symbol;mso-ascii-font-family:Montserrat;mso-hansi-font-family:
Montserrat;mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi;
mso-char-type:symbol;mso-symbol-font-family:Symbol'><span style='mso-char-type:
symbol;mso-symbol-font-family:Symbol'>&nbsp;</span></span><span lang=EN-US
style='font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
mso-bidi-theme-font:major-bidi'> Others: ____________<o:p></o:p></span></p>

<p class=MsoListParagraphCxSpMiddle><span lang=EN-US style='font-family:Montserrat;
mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi'><span
style='mso-spacerun:yes'>�</span>Who will insert:<span
style='mso-spacerun:yes'>� </span></span><span lang=EN-US style='font-family:
Symbol;mso-ascii-font-family:Montserrat;mso-hansi-font-family:Montserrat;
mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi;
mso-char-type:symbol;mso-symbol-font-family:Symbol'><span style='mso-char-type:
symbol;mso-symbol-font-family:Symbol'>&nbsp;</span></span><span lang=EN-US
style='font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
mso-bidi-theme-font:major-bidi'> Nurse </span><span lang=EN-US
style='font-family:Symbol;mso-ascii-font-family:Montserrat;mso-hansi-font-family:
Montserrat;mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi;
mso-char-type:symbol;mso-symbol-font-family:Symbol'><span style='mso-char-type:
symbol;mso-symbol-font-family:Symbol'>&nbsp;</span></span><span lang=EN-US
style='font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
mso-bidi-theme-font:major-bidi'>THHC <span class=GramE>Physician</span><o:p></o:p></span></p>

<p class=MsoListParagraphCxSpMiddle style='text-indent:-18.0pt;mso-list:l3 level1 lfo7'><![if !supportLists]><span
lang=EN-US style='font-family:Wingdings;mso-fareast-font-family:Wingdings;
mso-bidi-font-family:Wingdings'><span style='mso-list:Ignore'>q<span
style='font:7.0pt "Times New Roman"'>&nbsp; </span></span></span><![endif]><span
dir=LTR></span><span lang=EN-US style='font-family:"Montserrat SemiBold";
mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi'>Respiratory
Care: <o:p></o:p></span></p>

<p class=MsoListParagraphCxSpMiddle><span lang=EN-US style='font-family:Montserrat;
mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi'><span
style='mso-spacerun:yes'>����� </span></span><span lang=EN-US style='font-family:
Symbol;mso-ascii-font-family:Montserrat;mso-hansi-font-family:Montserrat;
mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi;
mso-char-type:symbol;mso-symbol-font-family:Symbol'><span style='mso-char-type:
symbol;mso-symbol-font-family:Symbol'>&nbsp;</span></span><span lang=EN-US
style='font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
mso-bidi-theme-font:major-bidi'> Tracheostomy Care<span
style='mso-spacerun:yes'>�� </span></span><span lang=EN-US style='font-family:
Symbol;mso-ascii-font-family:Montserrat;mso-hansi-font-family:Montserrat;
mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi;
mso-char-type:symbol;mso-symbol-font-family:Symbol'><span style='mso-char-type:
symbol;mso-symbol-font-family:Symbol'>&nbsp;</span></span><span lang=EN-US
style='font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
mso-bidi-theme-font:major-bidi'> BiPAP &#9633;CPAP </span><span lang=EN-US
style='font-family:Symbol;mso-ascii-font-family:Montserrat;mso-hansi-font-family:
Montserrat;mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi;
mso-char-type:symbol;mso-symbol-font-family:Symbol'><span style='mso-char-type:
symbol;mso-symbol-font-family:Symbol'>&nbsp;</span></span><span lang=EN-US
style='font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
mso-bidi-theme-font:major-bidi'> Chest Physiotherapy <o:p></o:p></span></p>

<p class=MsoListParagraphCxSpMiddle><span lang=EN-US style='font-family:Montserrat;
mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi'><span
style='mso-spacerun:yes'> </span><span style='mso-spacerun:yes'>�</span></span><span
lang=EN-US style='font-family:Symbol;mso-ascii-font-family:Montserrat;
mso-hansi-font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
mso-bidi-theme-font:major-bidi;mso-char-type:symbol;mso-symbol-font-family:
Symbol'><span style='mso-char-type:symbol;mso-symbol-font-family:Symbol'>&nbsp;</span></span><span
lang=EN-US style='font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
mso-bidi-theme-font:major-bidi'> Others: ________________________________________________________________<o:p></o:p></span></p>

<p class=MsoListParagraphCxSpMiddle><span lang=EN-US style='font-family:Montserrat;
mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi'><span
style='mso-spacerun:yes'> </span>Duration of Visit: _______________<o:p></o:p></span></p>

<p class=MsoListParagraphCxSpMiddle><span lang=EN-US style='font-family:Montserrat;
mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></p>

<p class=MsoListParagraphCxSpLast style='text-indent:-18.0pt;mso-list:l4 level1 lfo5'><![if !supportLists]><span
lang=EN-US style='font-family:Wingdings;mso-fareast-font-family:Wingdings;
mso-bidi-font-family:Wingdings'><span style='mso-list:Ignore'>q<span
style='font:7.0pt "Times New Roman"'>&nbsp; </span></span></span><![endif]><span
dir=LTR></span><span lang=EN-US style='font-family:"Montserrat SemiBold";
mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi'>Wound
Care</span><b><span lang=EN-US style='font-family:Montserrat;mso-bidi-font-family:
"Times New Roman";mso-bidi-theme-font:major-bidi'>:</span></b><span lang=EN-US
style='font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
mso-bidi-theme-font:major-bidi'> Type of wound:<span style='mso-spacerun:yes'>�
</span><span style='mso-spacerun:yes'>������</span></span><span lang=EN-US
style='font-family:Symbol;mso-ascii-font-family:Montserrat;mso-hansi-font-family:
Montserrat;mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi;
mso-char-type:symbol;mso-symbol-font-family:Symbol'><span style='mso-char-type:
symbol;mso-symbol-font-family:Symbol'>&nbsp;</span></span><span lang=EN-US
style='font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
mso-bidi-theme-font:major-bidi'> </span><span lang=EN-US style='font-family:
"Montserrat SemiBold";mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:
major-bidi'>Pressure Injury</span><span lang=EN-US style='font-family:Montserrat;
mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi'> <o:p></o:p></span></p>

<p class=MsoNormal><span lang=EN-US style='font-family:Montserrat;mso-bidi-font-family:
"Times New Roman";mso-bidi-theme-font:major-bidi'><span
style='mso-spacerun:yes'>�</span>Pressure Injury Stage: _________ </span><span
lang=EN-US style='font-family:Symbol;mso-ascii-font-family:Montserrat;
mso-hansi-font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
mso-bidi-theme-font:major-bidi;mso-char-type:symbol;mso-symbol-font-family:
Symbol'><span style='mso-char-type:symbol;mso-symbol-font-family:Symbol'>&nbsp;</span></span><span
lang=EN-US style='font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
mso-bidi-theme-font:major-bidi'> Location: ______________________ </span><span
lang=EN-US style='font-family:Symbol;mso-ascii-font-family:Montserrat;
mso-hansi-font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
mso-bidi-theme-font:major-bidi;mso-char-type:symbol;mso-symbol-font-family:
Symbol'><span style='mso-char-type:symbol;mso-symbol-font-family:Symbol'>&nbsp;</span></span><span
lang=EN-US style='font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
mso-bidi-theme-font:major-bidi'> Size:___________<o:p></o:p></span></p>

<p class=MsoNormal><span lang=EN-US style='font-family:Montserrat;mso-bidi-font-family:
"Times New Roman";mso-bidi-theme-font:major-bidi'>Pressure Injury Stage:
_________ </span><span lang=EN-US style='font-family:Symbol;mso-ascii-font-family:
Montserrat;mso-hansi-font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
mso-bidi-theme-font:major-bidi;mso-char-type:symbol;mso-symbol-font-family:
Symbol'><span style='mso-char-type:symbol;mso-symbol-font-family:Symbol'>&nbsp;</span></span><span
lang=EN-US style='font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
mso-bidi-theme-font:major-bidi'> Location: ______________________ </span><span
lang=EN-US style='font-family:Symbol;mso-ascii-font-family:Montserrat;
mso-hansi-font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
mso-bidi-theme-font:major-bidi;mso-char-type:symbol;mso-symbol-font-family:
Symbol'><span style='mso-char-type:symbol;mso-symbol-font-family:Symbol'>&nbsp;</span></span><span
lang=EN-US style='font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
mso-bidi-theme-font:major-bidi'> Size:___________<o:p></o:p></span></p>

<p class=MsoNormal><span lang=EN-US style='font-family:Montserrat;mso-bidi-font-family:
"Times New Roman";mso-bidi-theme-font:major-bidi'>Pressure Injury Stage:
_________ </span><span lang=EN-US style='font-family:Symbol;mso-ascii-font-family:
Montserrat;mso-hansi-font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
mso-bidi-theme-font:major-bidi;mso-char-type:symbol;mso-symbol-font-family:
Symbol'><span style='mso-char-type:symbol;mso-symbol-font-family:Symbol'>&nbsp;</span></span><span
lang=EN-US style='font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
mso-bidi-theme-font:major-bidi'> Location: ______________________ </span><span
lang=EN-US style='font-family:Symbol;mso-ascii-font-family:Montserrat;
mso-hansi-font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
mso-bidi-theme-font:major-bidi;mso-char-type:symbol;mso-symbol-font-family:
Symbol'><span style='mso-char-type:symbol;mso-symbol-font-family:Symbol'>&nbsp;</span></span><span
lang=EN-US style='font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
mso-bidi-theme-font:major-bidi'> Size:__________<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:144.0pt'><span lang=EN-US
style='font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
mso-bidi-theme-font:major-bidi'><span style='mso-spacerun:yes'>
</span><span style='mso-spacerun:yes'></span><span
style='mso-spacerun:yes'></span><span style='mso-spacerun:yes'></span></span><span
lang=EN-US style='font-family:Symbol;mso-ascii-font-family:Montserrat;
mso-hansi-font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
mso-bidi-theme-font:major-bidi;mso-char-type:symbol;mso-symbol-font-family:
Symbol'><span style='mso-char-type:symbol;mso-symbol-font-family:Symbol'>&nbsp;</span></span><span
lang=EN-US style='font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
mso-bidi-theme-font:major-bidi'> </span><span lang=EN-US style='font-family:
"Montserrat SemiBold";mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:
major-bidi'>Surgical Wound</span><span lang=EN-US style='font-family:Montserrat;
mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi'><o:p></o:p></span></p>

<p class=MsoNormal style='margin-right:-54.0pt'><span lang=EN-US
style='font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
mso-bidi-theme-font:major-bidi'>Surgical Wound Site: _________ </span><span
lang=EN-US style='font-family:Symbol;mso-ascii-font-family:Montserrat;
mso-hansi-font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
mso-bidi-theme-font:major-bidi;mso-char-type:symbol;mso-symbol-font-family:
Symbol'><span style='mso-char-type:symbol;mso-symbol-font-family:Symbol'>&nbsp;</span></span><span
lang=EN-US style='font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
mso-bidi-theme-font:major-bidi'> Surgical Wound Closure Type:_______</span><span
lang=EN-US style='font-family:Symbol;mso-ascii-font-family:Montserrat;
mso-hansi-font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
mso-bidi-theme-font:major-bidi;mso-char-type:symbol;mso-symbol-font-family:
Symbol'><span style='mso-char-type:symbol;mso-symbol-font-family:Symbol'>&nbsp;</span></span><span
lang=EN-US style='font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
mso-bidi-theme-font:major-bidi'> Size:__________<o:p></o:p></span></p>

<p class=MsoNormal style='margin-right:-67.5pt'><span lang=EN-US
style='font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
mso-bidi-theme-font:major-bidi'>Surgical Wound Site: _________ </span><span
lang=EN-US style='font-family:Symbol;mso-ascii-font-family:Montserrat;
mso-hansi-font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
mso-bidi-theme-font:major-bidi;mso-char-type:symbol;mso-symbol-font-family:
Symbol'><span style='mso-char-type:symbol;mso-symbol-font-family:Symbol'>&nbsp;</span></span><span
lang=EN-US style='font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
mso-bidi-theme-font:major-bidi'> Surgical Wound Closure Type: �_______</span><span
lang=EN-US style='font-family:Symbol;mso-ascii-font-family:Montserrat;
mso-hansi-font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
mso-bidi-theme-font:major-bidi;mso-char-type:symbol;mso-symbol-font-family:
Symbol'><span style='mso-char-type:symbol;mso-symbol-font-family:Symbol'>&nbsp;</span></span><span
lang=EN-US style='font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
mso-bidi-theme-font:major-bidi'> Size:__________<o:p></o:p></span></p>

<p class=MsoNormal style='margin-right:-67.5pt'><span lang=EN-US
style='font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
mso-bidi-theme-font:major-bidi'>Surgical Wound Site: _________ </span><span
lang=EN-US style='font-family:Symbol;mso-ascii-font-family:Montserrat;
mso-hansi-font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
mso-bidi-theme-font:major-bidi;mso-char-type:symbol;mso-symbol-font-family:
Symbol'><span style='mso-char-type:symbol;mso-symbol-font-family:Symbol'>&nbsp;</span></span><span
lang=EN-US style='font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
mso-bidi-theme-font:major-bidi'> Surgical Wound Closure Type: �_______</span><span
lang=EN-US style='font-family:Symbol;mso-ascii-font-family:Montserrat;
mso-hansi-font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
mso-bidi-theme-font:major-bidi;mso-char-type:symbol;mso-symbol-font-family:
Symbol'><span style='mso-char-type:symbol;mso-symbol-font-family:Symbol'>&nbsp;</span></span><span
lang=EN-US style='font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
mso-bidi-theme-font:major-bidi'> Size:__________<o:p></o:p></span></p>

<p class=MsoNormal><span lang=EN-US style='font-family:Montserrat;mso-bidi-font-family:
"Times New Roman";mso-bidi-theme-font:major-bidi'><span
style='mso-spacerun:yes'>
</span><span style='mso-spacerun:yes'></span><span
style='mso-spacerun:yes'></span></span><span lang=EN-US style='font-family:
Symbol;mso-ascii-font-family:Montserrat;mso-hansi-font-family:Montserrat;
mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi;
mso-char-type:symbol;mso-symbol-font-family:Symbol'><span style='mso-char-type:
symbol;mso-symbol-font-family:Symbol'>&nbsp;</span></span><span lang=EN-US
style='font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
mso-bidi-theme-font:major-bidi'> </span><span lang=EN-US style='font-family:
"Montserrat SemiBold";mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:
major-bidi'>Others</span><span lang=EN-US style='font-family:Montserrat;
mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi'>
(Provide brief wound description) _______________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________<o:p></o:p></span></p>

<p class=MsoNoSpacing><span lang=EN-US style='font-family:Montserrat;
mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi'><span
style='mso-spacerun:yes'></span>Wound Dressing Order:<span
style='mso-spacerun:yes'></span><o:p></o:p></span></p>

<p class=MsoNormal><span lang=EN-US style='font-family:Montserrat;mso-bidi-font-family:
"Times New Roman";mso-bidi-theme-font:major-bidi'>_______________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________<o:p></o:p></span></p>

<p class=MsoNormal><span lang=EN-US style='font-family:Montserrat;mso-bidi-font-family:
"Times New Roman";mso-bidi-theme-font:major-bidi'>Frequency of Visit: </span><span
lang=EN-US style='font-family:Symbol;mso-ascii-font-family:Montserrat;
mso-hansi-font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
mso-bidi-theme-font:major-bidi;mso-char-type:symbol;mso-symbol-font-family:
Symbol'><span style='mso-char-type:symbol;mso-symbol-font-family:Symbol'>&nbsp;</span></span><span
lang=EN-US style='font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
mso-bidi-theme-font:major-bidi'> Daily<span style='mso-spacerun:yes'>� </span></span><span
lang=EN-US style='font-family:Symbol;mso-ascii-font-family:Montserrat;
mso-hansi-font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
mso-bidi-theme-font:major-bidi;mso-char-type:symbol;mso-symbol-font-family:
Symbol'><span style='mso-char-type:symbol;mso-symbol-font-family:Symbol'>&nbsp;</span></span><span
lang=EN-US style='font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
mso-bidi-theme-font:major-bidi'> Weekly </span><span lang=EN-US
style='font-family:Symbol;mso-ascii-font-family:Montserrat;mso-hansi-font-family:
Montserrat;mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi;
mso-char-type:symbol;mso-symbol-font-family:Symbol'><span style='mso-char-type:
symbol;mso-symbol-font-family:Symbol'>&nbsp;</span></span><span lang=EN-US
style='font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
mso-bidi-theme-font:major-bidi'> Twice Weekly </span><span lang=EN-US
style='font-family:Symbol;mso-ascii-font-family:Montserrat;mso-hansi-font-family:
Montserrat;mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi;
mso-char-type:symbol;mso-symbol-font-family:Symbol'><span style='mso-char-type:
symbol;mso-symbol-font-family:Symbol'>&nbsp;</span></span><span lang=EN-US
style='font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
mso-bidi-theme-font:major-bidi'> Thrice Weekly </span><span lang=EN-US
style='font-family:Symbol;mso-ascii-font-family:Montserrat;mso-hansi-font-family:
Montserrat;mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi;
mso-char-type:symbol;mso-symbol-font-family:Symbol'><span style='mso-char-type:
symbol;mso-symbol-font-family:Symbol'>&nbsp;</span></span><span lang=EN-US
style='font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
mso-bidi-theme-font:major-bidi'> Others: �_____________________________________________________________________________________<o:p></o:p></span></p>

<p class=MsoNormal><span lang=EN-US style='font-family:Montserrat;mso-bidi-font-family:
"Times New Roman";mso-bidi-theme-font:major-bidi'>Duration of Visit: ______________________________________________________________________<o:p></o:p></span></p>

<p class=MsoListParagraph style='text-indent:-18.0pt;mso-list:l3 level1 lfo7'><![if !supportLists]><span
lang=EN-US style='font-family:Wingdings;mso-fareast-font-family:Wingdings;
mso-bidi-font-family:Wingdings'><span style='mso-list:Ignore'>q<span
style='font:7.0pt "Times New Roman"'>&nbsp; </span></span></span><![endif]><span
dir=LTR></span><span lang=EN-US style='font-family:"Montserrat SemiBold";
mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi'>Physiotherapist
Care:<span style='mso-spacerun:yes'>� </span><o:p></o:p></span></p>

<p class=MsoNormal style='margin-top:0cm;margin-right:-72.0pt;margin-bottom:
8.0pt;margin-left:36.0pt;text-indent:36.0pt'><span lang=EN-US style='font-family:
Symbol;mso-ascii-font-family:Montserrat;mso-hansi-font-family:Montserrat;
mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi;
mso-char-type:symbol;mso-symbol-font-family:Symbol'><span style='mso-char-type:
symbol;mso-symbol-font-family:Symbol'>&nbsp;</span></span><span lang=EN-US
style='font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
mso-bidi-theme-font:major-bidi'> Daily<span style='mso-spacerun:yes'>� </span></span><span
lang=EN-US style='font-family:Symbol;mso-ascii-font-family:Montserrat;
mso-hansi-font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
mso-bidi-theme-font:major-bidi;mso-char-type:symbol;mso-symbol-font-family:
Symbol'><span style='mso-char-type:symbol;mso-symbol-font-family:Symbol'>&nbsp;</span></span><span
lang=EN-US style='font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
mso-bidi-theme-font:major-bidi'> Weekly </span><span lang=EN-US
style='font-family:Symbol;mso-ascii-font-family:Montserrat;mso-hansi-font-family:
Montserrat;mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi;
mso-char-type:symbol;mso-symbol-font-family:Symbol'><span style='mso-char-type:
symbol;mso-symbol-font-family:Symbol'>&nbsp;</span></span><span lang=EN-US
style='font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
mso-bidi-theme-font:major-bidi'> Twice Weekly </span><span lang=EN-US
style='font-family:Symbol;mso-ascii-font-family:Montserrat;mso-hansi-font-family:
Montserrat;mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi;
mso-char-type:symbol;mso-symbol-font-family:Symbol'><span style='mso-char-type:
symbol;mso-symbol-font-family:Symbol'>&nbsp;</span></span><span lang=EN-US
style='font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
mso-bidi-theme-font:major-bidi'> Thrice Weekly </span><span lang=EN-US
style='font-family:Symbol;mso-ascii-font-family:Montserrat;mso-hansi-font-family:
Montserrat;mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi;
mso-char-type:symbol;mso-symbol-font-family:Symbol'><span style='mso-char-type:
symbol;mso-symbol-font-family:Symbol'>&nbsp;</span></span><span lang=EN-US
style='font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
mso-bidi-theme-font:major-bidi'> Others:_____________<o:p></o:p></span></p>

<p class=MsoListParagraph style='text-indent:-18.0pt;mso-list:l3 level1 lfo7'><![if !supportLists]><span
lang=EN-US style='font-family:Wingdings;mso-fareast-font-family:Wingdings;
mso-bidi-font-family:Wingdings'><span style='mso-list:Ignore'>q<span
style='font:7.0pt "Times New Roman"'>&nbsp; </span></span></span><![endif]><span
dir=LTR></span><span lang=EN-US style='font-family:"Montserrat SemiBold";
mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi'>Palliative
Care:<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:18.0pt;tab-stops:468.0pt'><span
lang=EN-US style='font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
mso-bidi-theme-font:major-bidi'><span style='mso-spacerun:yes'>�</span></span><span
lang=EN-US style='font-family:Symbol;mso-ascii-font-family:Calibri;mso-ascii-theme-font:
minor-latin;mso-hansi-font-family:Calibri;mso-hansi-theme-font:minor-latin;
mso-char-type:symbol;mso-symbol-font-family:Symbol'><span style='mso-char-type:
symbol;mso-symbol-font-family:Symbol'>&nbsp;</span></span><span lang=EN-US
style='font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
mso-bidi-theme-font:major-bidi'> Pain Management </span><span lang=EN-US
style='font-family:Symbol;mso-ascii-font-family:Calibri;mso-ascii-theme-font:
minor-latin;mso-hansi-font-family:Calibri;mso-hansi-theme-font:minor-latin;
mso-char-type:symbol;mso-symbol-font-family:Symbol'><span style='mso-char-type:
symbol;mso-symbol-font-family:Symbol'>&nbsp;</span></span><span lang=EN-US
style='font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
mso-bidi-theme-font:major-bidi'> Stoma Core </span><span lang=EN-US
style='font-family:Symbol;mso-ascii-font-family:Calibri;mso-ascii-theme-font:
minor-latin;mso-hansi-font-family:Calibri;mso-hansi-theme-font:minor-latin;
mso-char-type:symbol;mso-symbol-font-family:Symbol'><span style='mso-char-type:
symbol;mso-symbol-font-family:Symbol'>&nbsp;</span></span><span lang=EN-US
style='font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
mso-bidi-theme-font:major-bidi'> IV hydration </span><span lang=EN-US
style='font-family:Symbol;mso-ascii-font-family:Calibri;mso-ascii-theme-font:
minor-latin;mso-hansi-font-family:Calibri;mso-hansi-theme-font:minor-latin;
mso-char-type:symbol;mso-symbol-font-family:Symbol'><span style='mso-char-type:
symbol;mso-symbol-font-family:Symbol'>&nbsp;</span></span><span lang=EN-US
style='font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
mso-bidi-theme-font:major-bidi'> Supportive Care by Nurses.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:18.0pt;tab-stops:468.0pt'><span
lang=EN-US style='font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
mso-bidi-theme-font:major-bidi'>Duration of Visit:<span
style='mso-spacerun:yes'>� </span>_______________<o:p></o:p></span></p>

<p class=MsoListParagraph style='text-indent:-18.0pt;mso-list:l3 level1 lfo7'><![if !supportLists]><span
lang=EN-US style='font-family:Wingdings;mso-fareast-font-family:Wingdings;
mso-bidi-font-family:Wingdings'><span style='mso-list:Ignore'>q<span
style='font:7.0pt "Times New Roman"'>&nbsp; </span></span></span><![endif]><span
dir=LTR></span><span lang=EN-US style='font-family:"Montserrat SemiBold";
mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi'>Laboratory
Investigations Follow Up:</span><span lang=EN-US style='font-family:Montserrat;
mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi'> </span><span
lang=EN-US style='font-family:Symbol;mso-ascii-font-family:Montserrat;
mso-hansi-font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
mso-bidi-theme-font:major-bidi;mso-char-type:symbol;mso-symbol-font-family:
Symbol'><span style='mso-char-type:symbol;mso-symbol-font-family:Symbol'>&nbsp;</span></span><span
lang=EN-US style='font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
mso-bidi-theme-font:major-bidi'> Date of Sampling: ______________<o:p></o:p></span></p>

<div class="row d-flex justify-content-end mt-3">
                <button type="submit" id="printPageButton" class="btn btn-primary">Submit</button>
                </div>
</div>
</body>
</html>
