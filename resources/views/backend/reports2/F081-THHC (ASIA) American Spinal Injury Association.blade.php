<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv=Content-Type content="text/html; charset=windows-1252">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<title>F081-THHC (ASIA) American Spinal Injury Association| @yield('title')</title>

<style>
 /* Font Definitions */
 @font-face
	{font-family:"Cambria Math";
	panose-1:2 4 5 3 5 4 6 3 2 4;
	mso-font-charset:0;
	mso-generic-font-family:roman;
	mso-font-pitch:variable;
	mso-font-signature:3 0 0 0 1 0;}
@font-face
	{font-family:Calibri;
	panose-1:2 15 5 2 2 2 4 3 2 4;
	mso-font-charset:0;
	mso-generic-font-family:swiss;
	mso-font-pitch:variable;
	mso-font-signature:-469750017 -1040178053 9 0 511 0;}
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
h1
	{mso-style-priority:9;
	mso-style-unhide:no;
	mso-style-qformat:yes;
	margin-top:1.95pt;
	margin-right:0cm;
	margin-bottom:0cm;
	margin-left:30.3pt;
	margin-bottom:.0001pt;
	line-height:20.95pt;
	mso-line-height-rule:exactly;
	mso-pagination:none;
	mso-outline-level:1;
	text-autospace:none;
	font-size:24.0pt;
	font-family:"Arial",sans-serif;
	mso-fareast-font-family:Arial;
	mso-font-kerning:0pt;
	mso-ansi-language:EN-US;
	mso-fareast-language:EN-US;}
h2
	{mso-style-priority:9;
	mso-style-qformat:yes;
	margin-top:2.75pt;
	margin-right:0cm;
	margin-bottom:0cm;
	margin-left:11.2pt;
	margin-bottom:.0001pt;
	mso-pagination:none;
	mso-outline-level:2;
	text-autospace:none;
	font-size:14.0pt;
	font-family:"Arial",sans-serif;
	mso-fareast-font-family:Arial;
	mso-ansi-language:EN-US;
	mso-fareast-language:EN-US;
	text-underline:black;
	text-decoration:underline;
	text-underline:single;}
h3
	{mso-style-priority:9;
	mso-style-qformat:yes;
	margin-top:3.55pt;
	margin-right:0cm;
	margin-bottom:0cm;
	margin-left:5.35pt;
	margin-bottom:.0001pt;
	text-align:center;
	line-height:14.6pt;
	mso-line-height-rule:exactly;
	mso-pagination:none;
	mso-outline-level:3;
	text-autospace:none;
	font-size:13.0pt;
	font-family:"Arial",sans-serif;
	mso-fareast-font-family:Arial;
	mso-ansi-language:EN-US;
	mso-fareast-language:EN-US;}
h4
	{mso-style-priority:9;
	mso-style-qformat:yes;
	margin-top:0cm;
	margin-right:0cm;
	margin-bottom:0cm;
	margin-left:11.9pt;
	margin-bottom:.0001pt;
	mso-pagination:none;
	mso-outline-level:4;
	text-autospace:none;
	font-size:11.0pt;
	font-family:"Arial",sans-serif;
	mso-fareast-font-family:Arial;
	mso-ansi-language:EN-US;
	mso-fareast-language:EN-US;}
h5
	{mso-style-priority:9;
	mso-style-qformat:yes;
	margin-top:0cm;
	margin-right:0cm;
	margin-bottom:0cm;
	margin-left:44.65pt;
	margin-bottom:.0001pt;
	mso-pagination:none;
	mso-outline-level:5;
	text-autospace:none;
	font-size:10.0pt;
	font-family:"Times New Roman",serif;
	mso-fareast-font-family:"Times New Roman";
	mso-ansi-language:EN-US;
	mso-fareast-language:EN-US;
	font-weight:normal;}
h6
	{mso-style-priority:9;
	mso-style-qformat:yes;
	margin-top:3.9pt;
	margin-right:0cm;
	margin-bottom:0cm;
	margin-left:6.15pt;
	margin-bottom:.0001pt;
	mso-pagination:none;
	mso-outline-level:6;
	text-autospace:none;
	font-size:9.0pt;
	font-family:"Arial",sans-serif;
	mso-fareast-font-family:Arial;
	mso-ansi-language:EN-US;
	mso-fareast-language:EN-US;}
p.MsoHeading7, li.MsoHeading7, div.MsoHeading7
	{mso-style-priority:1;
	mso-style-unhide:no;
	mso-style-qformat:yes;
	margin-top:3.9pt;
	margin-right:0cm;
	margin-bottom:0cm;
	margin-left:6.15pt;
	margin-bottom:.0001pt;
	mso-pagination:none;
	mso-outline-level:7;
	text-autospace:none;
	font-size:9.0pt;
	font-family:"Arial",sans-serif;
	mso-fareast-font-family:Arial;
	mso-ansi-language:EN-US;
	mso-fareast-language:EN-US;
	font-weight:bold;
	font-style:italic;
	mso-bidi-font-style:normal;}
p.MsoBodyText, li.MsoBodyText, div.MsoBodyText
	{mso-style-priority:1;
	mso-style-unhide:no;
	mso-style-qformat:yes;
	margin:0cm;
	margin-bottom:.0001pt;
	mso-pagination:none;
	text-autospace:none;
	font-size:9.0pt;
	font-family:"Arial",sans-serif;
	mso-fareast-font-family:Arial;
	mso-ansi-language:EN-US;
	mso-fareast-language:EN-US;}
p.MsoListParagraph, li.MsoListParagraph, div.MsoListParagraph
	{mso-style-priority:1;
	mso-style-unhide:no;
	mso-style-qformat:yes;
	margin-top:0cm;
	margin-right:0cm;
	margin-bottom:0cm;
	margin-left:225.8pt;
	margin-bottom:.0001pt;
	text-indent:-8.25pt;
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
span.SpellE
	{mso-style-name:"";
	mso-spl-e:yes;}
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
@page WordSection1
	{size:792.0pt 612.0pt;
	mso-page-orientation:landscape;
	margin:13.0pt 12.0pt 0cm 14.0pt;
	mso-header-margin:36.0pt;
	mso-footer-margin:36.0pt;
	mso-paper-source:0;}
div.WordSection1
	{page:WordSection1;}
@page WordSection2
	{size:792.0pt 612.0pt;
	mso-page-orientation:landscape;
	margin:13.0pt 12.0pt 0cm 14.0pt;
	mso-header-margin:36.0pt;
	mso-footer-margin:36.0pt;
	mso-columns:5 not-even 111.15pt 2.0pt 78.5pt 240.6pt 122.25pt 2.0pt 70.6pt 1.95pt 136.95pt;
	mso-paper-source:0;}
div.WordSection2
	{page:WordSection2;}
@page WordSection3
	{size:792.0pt 612.0pt;
	mso-page-orientation:landscape;
	margin:13.0pt 12.0pt 0cm 14.0pt;
	mso-header-margin:36.0pt;
	mso-footer-margin:36.0pt;
	mso-columns:7 not-even 85.5pt 4.75pt 83.85pt 11.65pt 114.25pt 55.05pt 160.1pt 2.0pt 60.25pt 11.5pt 82.35pt 5.5pt 89.25pt;
	mso-paper-source:0;}
div.WordSection3
	{page:WordSection3;}
@page WordSection4
	{size:792.0pt 612.0pt;
	mso-page-orientation:landscape;
	margin:13.0pt 12.0pt 0cm 14.0pt;
	mso-header-margin:36.0pt;
	mso-footer-margin:36.0pt;
	mso-columns:6 not-even 172.3pt 2.0pt 34.1pt 84.2pt 97.3pt 2.0pt 78.25pt 35.45pt 73.8pt 1.95pt 184.65pt;
	mso-paper-source:0;}
div.WordSection4
	{page:WordSection4;}
@page WordSection5
	{size:792.0pt 612.0pt;
	mso-page-orientation:landscape;
	margin:13.0pt 12.0pt 0cm 14.0pt;
	mso-header-margin:36.0pt;
	mso-footer-margin:36.0pt;
	mso-columns:4 not-even 84.1pt 2.0pt 307.1pt 160.5pt 128.25pt 2.0pt 82.05pt;
	mso-paper-source:0;}
div.WordSection5
	{page:WordSection5;}
@page WordSection6
	{size:792.0pt 612.0pt;
	mso-page-orientation:landscape;
	margin:13.0pt 12.0pt 0cm 14.0pt;
	mso-header-margin:36.0pt;
	mso-footer-margin:36.0pt;
	mso-columns:8 not-even 169.95pt 7.35pt 31.1pt 10.45pt 20.7pt 25.45pt 20.7pt 119.2pt 108.3pt 15.2pt 20.7pt 9.15pt 35.3pt 5.65pt 166.8pt;
	mso-paper-source:0;}
div.WordSection6
	{page:WordSection6;}
@page WordSection7
	{size:792.0pt 612.0pt;
	mso-page-orientation:landscape;
	margin:13.0pt 12.0pt 0cm 14.0pt;
	mso-header-margin:36.0pt;
	mso-footer-margin:36.0pt;
	mso-columns:21 not-even 44.15pt 2.0pt 29.45pt 1.95pt 17.2pt 3.65pt 59.7pt 2.9pt 21.3pt 13.5pt 42.2pt 4.0pt 26.5pt 2.85pt 21.3pt 3.9pt 60.9pt 2.45pt 21.3pt 15.65pt 24.6pt 2.0pt 20.15pt 2.35pt 25.55pt 3.75pt 21.3pt 2.7pt 46.75pt 2.0pt 22.65pt 9.1pt 45.55pt 2.85pt 26.9pt 3.75pt 19.85pt 3.65pt 48.05pt 2.0pt 33.65pt;
	mso-paper-source:0;}
div.WordSection7
	{page:WordSection7;}
@page WordSection8
	{size:792.0pt 612.0pt;
	mso-page-orientation:landscape;
	margin:13.0pt 12.0pt 0cm 14.0pt;
	mso-header-margin:36.0pt;
	mso-footer-margin:36.0pt;
	mso-paper-source:0;}
div.WordSection8
	{page:WordSection8;}
@page WordSection9
	{size:792.0pt 612.0pt;
	mso-page-orientation:landscape;
	margin:13.0pt 12.0pt 0cm 14.0pt;
	mso-header-margin:36.0pt;
	mso-footer-margin:36.0pt;
	mso-columns:2 not-even 593.1pt 122.35pt 50.55pt;
	mso-paper-source:0;}
div.WordSection9
	{page:WordSection9;}
@page WordSection10
	{size:792.0pt 612.0pt;
	mso-page-orientation:landscape;
	margin:10.0pt 12.0pt 0cm 14.0pt;
	mso-header-margin:36.0pt;
	mso-footer-margin:36.0pt;
	mso-columns:2 not-even 277.55pt 21.1pt 467.35pt;
	mso-paper-source:0;}
div.WordSection10
	{page:WordSection10;}
@page WordSection11
	{size:792.0pt 612.0pt;
	mso-page-orientation:landscape;
	margin:13.0pt 12.0pt 0cm 14.0pt;
	mso-header-margin:36.0pt;
	mso-footer-margin:36.0pt;
	mso-columns:4 not-even 58.55pt 138.25pt 57.05pt 21.2pt 213.2pt 16.1pt 261.65pt;
	mso-paper-source:0;}
div.WordSection11
	{page:WordSection11;}
 /* List Definitions */
 @list l0
	{mso-list-id:131677433;
	mso-list-type:hybrid;
	mso-list-template-ids:-552303190 1072565296 -668314824 191033928 906500722 168221262 -1715949770 942198084 1318770328 1029606232;}
@list l0:level1
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:8.6pt;
	text-align:right;
	text-indent:-8.65pt;
	mso-ansi-font-size:9.0pt;
	mso-bidi-font-size:9.0pt;
	font-family:"Arial",sans-serif;
	mso-fareast-font-family:Arial;
	color:#221F1F;
	letter-spacing:-.05pt;
	mso-font-width:86%;
	mso-ansi-language:EN-US;
	mso-fareast-language:EN-US;
	mso-bidi-language:AR-SA;
	mso-ansi-font-weight:bold;
	mso-bidi-font-weight:bold;
	mso-ansi-font-style:italic;}
@list l0:level2
	{mso-level-start-at:0;
	mso-level-number-format:bullet;
	mso-level-text:�;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:12.8pt;
	text-indent:-8.65pt;
	mso-ansi-language:EN-US;
	mso-fareast-language:EN-US;
	mso-bidi-language:AR-SA;}
@list l0:level3
	{mso-level-start-at:0;
	mso-level-number-format:bullet;
	mso-level-text:�;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:16.6pt;
	text-indent:-8.65pt;
	mso-ansi-language:EN-US;
	mso-fareast-language:EN-US;
	mso-bidi-language:AR-SA;}
@list l0:level4
	{mso-level-start-at:0;
	mso-level-number-format:bullet;
	mso-level-text:�;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:20.4pt;
	text-indent:-8.65pt;
	mso-ansi-language:EN-US;
	mso-fareast-language:EN-US;
	mso-bidi-language:AR-SA;}
@list l0:level5
	{mso-level-start-at:0;
	mso-level-number-format:bullet;
	mso-level-text:�;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:24.25pt;
	text-indent:-8.65pt;
	mso-ansi-language:EN-US;
	mso-fareast-language:EN-US;
	mso-bidi-language:AR-SA;}
@list l0:level6
	{mso-level-start-at:0;
	mso-level-number-format:bullet;
	mso-level-text:�;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:28.05pt;
	text-indent:-8.65pt;
	mso-ansi-language:EN-US;
	mso-fareast-language:EN-US;
	mso-bidi-language:AR-SA;}
@list l0:level7
	{mso-level-start-at:0;
	mso-level-number-format:bullet;
	mso-level-text:�;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:31.85pt;
	text-indent:-8.65pt;
	mso-ansi-language:EN-US;
	mso-fareast-language:EN-US;
	mso-bidi-language:AR-SA;}
@list l0:level8
	{mso-level-start-at:0;
	mso-level-number-format:bullet;
	mso-level-text:�;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:35.7pt;
	text-indent:-8.65pt;
	mso-ansi-language:EN-US;
	mso-fareast-language:EN-US;
	mso-bidi-language:AR-SA;}
@list l0:level9
	{mso-level-start-at:0;
	mso-level-number-format:bullet;
	mso-level-text:�;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:39.5pt;
	text-indent:-8.65pt;
	mso-ansi-language:EN-US;
	mso-fareast-language:EN-US;
	mso-bidi-language:AR-SA;}
@list l1
	{mso-list-id:1607998573;
	mso-list-type:hybrid;
	mso-list-template-ids:-2074956526 200306670 -2141930172 1968869378 112724960 -378080214 -1941124720 1453368564 -898961934 -198774704;}
@list l1:level1
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:225.8pt;
	text-align:right;
	text-indent:-8.25pt;
	mso-ansi-font-size:9.0pt;
	mso-bidi-font-size:9.0pt;
	font-family:"Arial",sans-serif;
	mso-fareast-font-family:Arial;
	color:#201E1F;
	letter-spacing:-.05pt;
	mso-font-width:82%;
	mso-ansi-language:EN-US;
	mso-fareast-language:EN-US;
	mso-bidi-language:AR-SA;
	mso-ansi-font-weight:bold;
	mso-bidi-font-weight:bold;}
@list l1:level2
	{mso-level-start-at:0;
	mso-level-number-format:bullet;
	mso-level-text:�;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:250.1pt;
	text-indent:-8.25pt;
	mso-ansi-language:EN-US;
	mso-fareast-language:EN-US;
	mso-bidi-language:AR-SA;}
@list l1:level3
	{mso-level-start-at:0;
	mso-level-number-format:bullet;
	mso-level-text:�;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:274.25pt;
	text-indent:-8.25pt;
	mso-ansi-language:EN-US;
	mso-fareast-language:EN-US;
	mso-bidi-language:AR-SA;}
@list l1:level4
	{mso-level-start-at:0;
	mso-level-number-format:bullet;
	mso-level-text:�;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:298.4pt;
	text-indent:-8.25pt;
	mso-ansi-language:EN-US;
	mso-fareast-language:EN-US;
	mso-bidi-language:AR-SA;}
@list l1:level5
	{mso-level-start-at:0;
	mso-level-number-format:bullet;
	mso-level-text:�;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:322.5pt;
	text-indent:-8.25pt;
	mso-ansi-language:EN-US;
	mso-fareast-language:EN-US;
	mso-bidi-language:AR-SA;}
@list l1:level6
	{mso-level-start-at:0;
	mso-level-number-format:bullet;
	mso-level-text:�;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:346.65pt;
	text-indent:-8.25pt;
	mso-ansi-language:EN-US;
	mso-fareast-language:EN-US;
	mso-bidi-language:AR-SA;}
@list l1:level7
	{mso-level-start-at:0;
	mso-level-number-format:bullet;
	mso-level-text:�;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:370.8pt;
	text-indent:-8.25pt;
	mso-ansi-language:EN-US;
	mso-fareast-language:EN-US;
	mso-bidi-language:AR-SA;}
@list l1:level8
	{mso-level-start-at:0;
	mso-level-number-format:bullet;
	mso-level-text:�;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:394.9pt;
	text-indent:-8.25pt;
	mso-ansi-language:EN-US;
	mso-fareast-language:EN-US;
	mso-bidi-language:AR-SA;}
@list l1:level9
	{mso-level-start-at:0;
	mso-level-number-format:bullet;
	mso-level-text:�;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:419.05pt;
	text-indent:-8.25pt;
	mso-ansi-language:EN-US;
	mso-fareast-language:EN-US;
	mso-bidi-language:AR-SA;}
@list l2
	{mso-list-id:1751655711;
	mso-list-type:hybrid;
	mso-list-template-ids:-997787738 1240922740 -646563158 339761504 529151088 -37727226 -58840530 -1877051398 773909582 857926468;}
@list l2:level1
	{mso-level-start-at:4;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:17.8pt;
	text-indent:-8.3pt;
	mso-ansi-font-size:9.0pt;
	mso-bidi-font-size:9.0pt;
	font-family:"Arial",sans-serif;
	mso-fareast-font-family:Arial;
	color:#221F1F;
	letter-spacing:-.15pt;
	mso-font-width:86%;
	mso-ansi-language:EN-US;
	mso-fareast-language:EN-US;
	mso-bidi-language:AR-SA;
	mso-ansi-font-weight:bold;
	mso-bidi-font-weight:bold;
	mso-ansi-font-style:italic;}
@list l2:level2
	{mso-level-start-at:0;
	mso-level-number-format:bullet;
	mso-level-text:�;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:29.3pt;
	text-indent:-8.3pt;
	mso-ansi-language:EN-US;
	mso-fareast-language:EN-US;
	mso-bidi-language:AR-SA;}
@list l2:level3
	{mso-level-start-at:0;
	mso-level-number-format:bullet;
	mso-level-text:�;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:40.65pt;
	text-indent:-8.3pt;
	mso-ansi-language:EN-US;
	mso-fareast-language:EN-US;
	mso-bidi-language:AR-SA;}
@list l2:level4
	{mso-level-start-at:0;
	mso-level-number-format:bullet;
	mso-level-text:�;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:51.95pt;
	text-indent:-8.3pt;
	mso-ansi-language:EN-US;
	mso-fareast-language:EN-US;
	mso-bidi-language:AR-SA;}
@list l2:level5
	{mso-level-start-at:0;
	mso-level-number-format:bullet;
	mso-level-text:�;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:63.3pt;
	text-indent:-8.3pt;
	mso-ansi-language:EN-US;
	mso-fareast-language:EN-US;
	mso-bidi-language:AR-SA;}
@list l2:level6
	{mso-level-start-at:0;
	mso-level-number-format:bullet;
	mso-level-text:�;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:74.6pt;
	text-indent:-8.3pt;
	mso-ansi-language:EN-US;
	mso-fareast-language:EN-US;
	mso-bidi-language:AR-SA;}
@list l2:level7
	{mso-level-start-at:0;
	mso-level-number-format:bullet;
	mso-level-text:�;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:85.95pt;
	text-indent:-8.3pt;
	mso-ansi-language:EN-US;
	mso-fareast-language:EN-US;
	mso-bidi-language:AR-SA;}
@list l2:level8
	{mso-level-start-at:0;
	mso-level-number-format:bullet;
	mso-level-text:�;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:97.25pt;
	text-indent:-8.3pt;
	mso-ansi-language:EN-US;
	mso-fareast-language:EN-US;
	mso-bidi-language:AR-SA;}
@list l2:level9
	{mso-level-start-at:0;
	mso-level-number-format:bullet;
	mso-level-text:�;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:108.6pt;
	text-indent:-8.3pt;
	mso-ansi-language:EN-US;
	mso-fareast-language:EN-US;
	mso-bidi-language:AR-SA;}
ol
	{margin-bottom:0cm;}
ul
	{margin-bottom:0cm;}

</style>
@yield('styles')
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

</head>

<body lang=EN-GB style='tab-interval:36.0pt'>

<div class=WordSection1>

<p class=MsoBodyText style='margin-top:3.8pt;margin-right:12.25pt;margin-bottom:
0cm;margin-left:378.75pt;margin-bottom:.0001pt;line-height:222%;tab-stops:571.05pt 753.25pt'><!--[if gte vml 1]><v:shapetype
 id="_x0000_t75" coordsize="21600,21600" o:spt="75" o:preferrelative="t"
 path="m@4@5l@4@11@9@11@9@5xe" filled="f" stroked="f">
 <v:stroke joinstyle="miter"/>
 <v:formulas>
  <v:f eqn="if lineDrawn pixelLineWidth 0"/>
  <v:f eqn="sum @0 1 0"/>
  <v:f eqn="sum 0 0 @1"/>
  <v:f eqn="prod @2 1 2"/>
  <v:f eqn="prod @3 21600 pixelWidth"/>
  <v:f eqn="prod @3 21600 pixelHeight"/>
  <v:f eqn="sum @0 0 1"/>
  <v:f eqn="prod @6 1 2"/>
  <v:f eqn="prod @7 21600 pixelWidth"/>
  <v:f eqn="sum @8 21600 0"/>
  <v:f eqn="prod @7 21600 pixelHeight"/>
  <v:f eqn="sum @10 21600 0"/>
 </v:formulas>
 <v:path o:extrusionok="f" gradientshapeok="t" o:connecttype="rect"/>
 <o:lock v:ext="edit" aspectratio="t"/>
</v:shapetype><v:shape id="image3.png" o:spid="_x0000_s1149" type="#_x0000_t75"
 style='position:absolute;left:0;text-align:left;margin-left:384.7pt;
 margin-top:64.75pt;width:106.05pt;height:395.85pt;z-index:-1895825408;
 visibility:visible;mso-wrap-style:square;mso-wrap-distance-left:0;
 mso-wrap-distance-top:0;mso-wrap-distance-right:0;mso-wrap-distance-bottom:0;
 mso-position-horizontal:absolute;mso-position-horizontal-relative:page;
 mso-position-vertical:absolute;mso-position-vertical-relative:text'>
 <v:imagedata src="F081-THHC%20(ASIA)%20American%20Spinal%20Injury%20Association.files/image001.png"
  o:title=""/>
 <w:wrap anchorx="page"/>
</v:shape><![endif]--><![if !vml]><span style='mso-ignore:vglayout;position:
absolute;z-index:-1895825408;left:0px;margin-left:649px;margin-top:112px;
width:177px;height:660px'><img width=142 height=528
src="F081-THHC%20(ASIA)%20American%20Spinal%20Injury%20Association.files/image002.gif"
v:shapes="image3.png"></span><![endif]><!--[if gte vml 1]><v:rect id="_x0000_s1144"
 style='position:absolute;left:0;text-align:left;margin-left:8.5pt;
 margin-top:-9.25pt;width:360.75pt;height:58.5pt;z-index:487049728;
 mso-position-horizontal-relative:text;mso-position-vertical-relative:text'
 filled="f" strokecolor="white">
 <v:textbox style='mso-next-textbox:#_x0000_s1144'/>
</v:rect><![endif]--><![if !vml]><span style='mso-ignore:vglayout;position:
relative;z-index:487049728'><span style='left:0px;position:absolute;left:21px;
top:-13px;width:607px;height:104px'>

<table cellpadding=0 cellspacing=0>
 <tr>
  <td width=607 height=104 style='border:.75pt solid white;vertical-align:top'><![endif]><![if !mso]><span
  style='position:absolute;mso-ignore:vglayout;left:0pt;z-index:487049728'>
  <table cellpadding=0 cellspacing=0 width="100%">
   <tr>
    <td><![endif]>
    <div v:shape="_x0000_s1144" style='padding:4.35pt 7.95pt 4.35pt 7.95pt'
    class=shape>
    <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
    style='mso-no-proof:yes'><!--[if gte vml 1]><v:shape id="Picture_x0020_4"
     o:spid="_x0000_i1034" type="#_x0000_t75" style='width:220.8pt;height:50.4pt;
     visibility:visible;mso-wrap-style:square'>
     <v:imagedata src="F081-THHC%20(ASIA)%20American%20Spinal%20Injury%20Association.files/image003.png"
      o:title=""/>
    </v:shape><![endif]--><![if !vml]><img width=294 height=67
    src="F081-THHC%20(ASIA)%20American%20Spinal%20Injury%20Association.files/image004.gif"
    v:shapes="Picture_x0020_4"><![endif]></span></p>
    </div>
    <![if !mso]></td>
   </tr>
  </table>
  </span><![endif]><![if !mso & !vml]>&nbsp;<![endif]><![if !vml]></td>
 </tr>
</table>

</span></span><![endif]><b><span lang=EN-US style='font-size:8.0pt;line-height:
222%;font-family:"Calibri",sans-serif;mso-ascii-theme-font:minor-latin;
mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:minor-latin;color:#221F1F;
mso-font-width:90%'>Patient <span style='letter-spacing:-1.65pt'>Name</span><u
style='text-underline:black'><span style='letter-spacing:-.15pt'> <span
style='mso-tab-count:1'>������ </span>MR#<span
style='mso-spacerun:yes'>�������������������������������������� </span></span></u></span></b><b><span
lang=EN-US style='font-size:8.0pt;line-height:222%;font-family:"Calibri",sans-serif;
mso-ascii-theme-font:minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:
minor-latin;color:#221F1F;letter-spacing:-.15pt;mso-font-width:85%'>Date/Time </span></b><b><span
lang=EN-US style='font-size:8.0pt;line-height:222%;font-family:"Calibri",sans-serif;
mso-ascii-theme-font:minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:
minor-latin;color:#221F1F;letter-spacing:-1.4pt;mso-font-width:85%'>of</span></b><b><span
lang=EN-US style='font-size:8.0pt;line-height:222%;font-family:"Calibri",sans-serif;
mso-ascii-theme-font:minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:
minor-latin;color:#221F1F;mso-font-width:85%'> <span style='letter-spacing:
-1.35pt'>Exam</span></span></b><span lang=EN-US style='font-size:8.0pt;
line-height:222%;font-family:"Calibri",sans-serif;mso-ascii-theme-font:minor-latin;
mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:minor-latin;color:#221F1F;
mso-font-width:85%'>_________________ </span><b><span lang=EN-US
style='font-size:8.0pt;line-height:222%;font-family:"Calibri",sans-serif;
mso-ascii-theme-font:minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:
minor-latin;color:#221F1F;letter-spacing:-.5pt'><span
style='mso-spacerun:yes'>�</span></span></b><b><span lang=EN-US
style='font-size:8.0pt;line-height:222%;font-family:"Calibri",sans-serif;
mso-ascii-theme-font:minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:
minor-latin;color:#221F1F'><span style='mso-spacerun:yes'>�</span><span
style='mso-font-width:85%'>Examiner <span style='letter-spacing:-1.05pt'>Name</span><u
style='text-underline:black'> <span style='mso-tab-count:1'> </span></u></span><span
style='mso-font-width:90%'>Signature</span><span style='letter-spacing:-.8pt'> </span><u
style='text-underline:black'><span style='mso-font-width:82%'><span
style='mso-spacerun:yes'>�</span></span><span style='mso-tab-count:1'>������������� </span></u></span></b><b><span
lang=EN-US style='font-size:8.0pt;line-height:222%;font-family:"Calibri",sans-serif;
mso-ascii-theme-font:minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:
minor-latin'><o:p></o:p></span></b></p>

</div>

<span lang=EN-US style='font-size:11.0pt;line-height:222%;font-family:"Arial",sans-serif;
mso-fareast-font-family:Arial;mso-ansi-language:EN-US;mso-fareast-language:
EN-US;mso-bidi-language:AR-SA'><br clear=all style='page-break-before:auto;
mso-break-type:section-break'>
</span>

<div class=WordSection2>

<h1 style='margin-top:2.45pt;margin-right:0cm;margin-bottom:0cm;margin-left:
46.15pt;margin-bottom:.0001pt'><span lang=EN-US style='color:#221F1F;
mso-font-width:85%'>RIGHT</span></h1>

<span lang=EN-US style='font-size:11.0pt;font-family:"Arial",sans-serif;
mso-fareast-font-family:Arial;mso-ansi-language:EN-US;mso-fareast-language:
EN-US;mso-bidi-language:AR-SA;mso-bidi-font-weight:bold'><br clear=all
style='mso-column-break-before:always'>
</span>

<h4 align=center style='margin-top:2.6pt;margin-right:.05pt;margin-bottom:0cm;
margin-left:24.4pt;margin-bottom:.0001pt;text-align:center;line-height:12.55pt;
mso-line-height-rule:exactly'><span lang=EN-US style='color:#221F1F;mso-font-width:
95%'>MOTOR</span></h4>

<p class=MsoNormal align=center style='margin-top:0cm;margin-right:.05pt;
margin-bottom:0cm;margin-left:24.4pt;margin-bottom:.0001pt;text-align:center;
line-height:8.3pt;mso-line-height-rule:exactly'><b style='mso-bidi-font-weight:
normal'><span lang=EN-US style='font-size:8.0pt;mso-bidi-font-size:11.0pt;
color:#221F1F;mso-font-width:90%'>KEY MUSCLES</span></b><b style='mso-bidi-font-weight:
normal'><span lang=EN-US style='font-size:8.0pt;mso-bidi-font-size:11.0pt'><o:p></o:p></span></b></p>

<span lang=EN-US style='font-size:11.0pt;font-family:"Arial",sans-serif;
mso-fareast-font-family:Arial;mso-ansi-language:EN-US;mso-fareast-language:
EN-US;mso-bidi-language:AR-SA;mso-bidi-font-weight:bold'><br clear=all
style='mso-column-break-before:always'>
</span>

<h4 align=center style='margin-left:46.25pt;text-align:center;line-height:9.95pt;
mso-line-height-rule:exactly'><span lang=EN-US style='color:#221F1F;mso-font-width:
95%'>SENSORY</span></h4>

<p class=MsoNormal align=center style='margin-top:1.15pt;margin-right:0cm;
margin-bottom:0cm;margin-left:46.15pt;margin-bottom:.0001pt;text-align:center'><b
style='mso-bidi-font-weight:normal'><span lang=EN-US style='font-size:8.0pt;
mso-bidi-font-size:11.0pt;color:#221F1F;mso-font-width:90%'>KEY<span
style='letter-spacing:-1.35pt'> </span><span style='letter-spacing:-.15pt'>SENSORY</span><span
style='letter-spacing:-1.3pt'> </span><span style='letter-spacing:-.25pt'>POINTS</span></span></b><b
style='mso-bidi-font-weight:normal'><span lang=EN-US style='font-size:8.0pt;
mso-bidi-font-size:11.0pt'><o:p></o:p></span></b></p>

<span lang=EN-US style='font-size:11.0pt;font-family:"Arial",sans-serif;
mso-fareast-font-family:Arial;mso-ansi-language:EN-US;mso-fareast-language:
EN-US;mso-bidi-language:AR-SA;mso-bidi-font-weight:bold'><br clear=all
style='mso-column-break-before:always'>
</span>

<h4 align=center style='margin-top:2.6pt;margin-right:0cm;margin-bottom:0cm;
margin-left:20.45pt;margin-bottom:.0001pt;text-align:center;line-height:12.55pt;
mso-line-height-rule:exactly'><span lang=EN-US style='color:#221F1F;mso-font-width:
95%'>MOTOR</span></h4>

<p class=MsoNormal align=center style='margin-left:20.45pt;text-align:center;
line-height:8.3pt;mso-line-height-rule:exactly'><b style='mso-bidi-font-weight:
normal'><span lang=EN-US style='font-size:8.0pt;mso-bidi-font-size:11.0pt;
color:#221F1F;mso-font-width:90%'>KEY<span style='letter-spacing:-1.25pt'> </span><span
style='letter-spacing:-.15pt'>MUSCLES</span></span></b><b style='mso-bidi-font-weight:
normal'><span lang=EN-US style='font-size:8.0pt;mso-bidi-font-size:11.0pt'><o:p></o:p></span></b></p>

<span lang=EN-US style='font-size:24.0pt;font-family:"Arial",sans-serif;
mso-fareast-font-family:Arial;mso-ansi-language:EN-US;mso-fareast-language:
EN-US;mso-bidi-language:AR-SA;mso-bidi-font-weight:bold'><br clear=all
style='mso-column-break-before:always'>
</span>

<h1 style='line-height:21.45pt;mso-line-height-rule:exactly'><span lang=EN-US
style='color:#221F1F;mso-font-width:95%'>LEFT</span></h1>

</div>

<span lang=EN-US style='font-size:11.0pt;font-family:"Arial",sans-serif;
mso-fareast-font-family:Arial;mso-ansi-language:EN-US;mso-fareast-language:
EN-US;mso-bidi-language:AR-SA'><br clear=all style='page-break-before:auto;
mso-break-type:section-break'>
</span>

<div class=WordSection3>

<p class=MsoBodyText><b style='mso-bidi-font-weight:normal'><span lang=EN-US
style='font-size:15.0pt;mso-bidi-font-size:9.0pt'><o:p>&nbsp;</o:p></span></b></p>

<p class=MsoBodyText><b style='mso-bidi-font-weight:normal'><span lang=EN-US
style='font-size:15.0pt;mso-bidi-font-size:9.0pt'><o:p>&nbsp;</o:p></span></b></p>

<p class=MsoBodyText><b style='mso-bidi-font-weight:normal'><span lang=EN-US
style='font-size:15.0pt;mso-bidi-font-size:9.0pt'><o:p>&nbsp;</o:p></span></b></p>

<h3 style='margin-top:12.25pt;margin-right:0cm;margin-bottom:0cm;margin-left:
7.75pt;margin-bottom:.0001pt'><span lang=EN-US style='color:#221F1F;mso-font-width:
90%'>UER</span></h3>

<p class=MsoNormal align=center style='margin-left:7.8pt;text-align:center;
line-height:8.85pt;mso-line-height-rule:exactly'><b style='mso-bidi-font-weight:
normal'><span lang=EN-US style='font-size:8.0pt;mso-bidi-font-size:11.0pt;
color:#221F1F;mso-font-width:85%'>(Upper Extremity Right)</span></b><b
style='mso-bidi-font-weight:normal'><span lang=EN-US style='font-size:8.0pt;
mso-bidi-font-size:11.0pt'><o:p></o:p></span></b></p>

<span lang=EN-US style='font-size:9.0pt;font-family:"Arial",sans-serif;
mso-fareast-font-family:Arial;mso-ansi-language:EN-US;mso-fareast-language:
EN-US;mso-bidi-language:AR-SA'><br clear=all style='mso-special-character:line-break;
mso-column-break-before:always'>
</span>

<p class=MsoBodyText><b style='mso-bidi-font-weight:normal'><span lang=EN-US
style='font-size:12.0pt;mso-bidi-font-size:9.0pt'><o:p></o:p></span></b></p>

<p class=MsoBodyText><b style='mso-bidi-font-weight:normal'><span lang=EN-US
style='font-size:12.0pt;mso-bidi-font-size:9.0pt'><o:p>&nbsp;</o:p></span></b></p>

<p class=MsoBodyText><b style='mso-bidi-font-weight:normal'><span lang=EN-US
style='font-size:12.0pt;mso-bidi-font-size:9.0pt'><o:p>&nbsp;</o:p></span></b></p>

<p class=MsoBodyText><b style='mso-bidi-font-weight:normal'><span lang=EN-US
style='font-size:10.5pt;mso-bidi-font-size:9.0pt'><o:p>&nbsp;</o:p></span></b></p>

<p class=MsoNormal align=right style='margin-top:0cm;margin-right:1.9pt;
margin-bottom:0cm;margin-left:6.7pt;margin-bottom:.0001pt;text-align:right;
text-indent:10.25pt;line-height:102%'><!--[if gte vml 1]><v:shapetype id="_x0000_t136"
 coordsize="21600,21600" o:spt="136" adj="10800" path="m@7,l@8,m@5,21600l@6,21600e">
 <v:formulas>
  <v:f eqn="sum #0 0 10800"/>
  <v:f eqn="prod #0 2 1"/>
  <v:f eqn="sum 21600 0 @1"/>
  <v:f eqn="sum 0 0 @2"/>
  <v:f eqn="sum 21600 0 @3"/>
  <v:f eqn="if @0 @3 0"/>
  <v:f eqn="if @0 21600 @1"/>
  <v:f eqn="if @0 0 @2"/>
  <v:f eqn="if @0 @4 21600"/>
  <v:f eqn="mid @5 @6"/>
  <v:f eqn="mid @8 @5"/>
  <v:f eqn="mid @7 @8"/>
  <v:f eqn="mid @6 @7"/>
  <v:f eqn="sum @6 0 @5"/>
 </v:formulas>
 <v:path textpathok="t" o:connecttype="custom" o:connectlocs="@9,0;@10,10800;@11,21600;@12,10800"
  o:connectangles="270,180,90,0"/>
 <v:textpath on="t" fitshape="t"/>
 <v:handles>
  <v:h position="#0,bottomRight" xrange="6629,14971"/>
 </v:handles>
 <o:lock v:ext="edit" text="t" shapetype="t"/>
</v:shapetype><v:shape id="_x0000_s1138" type="#_x0000_t136" style='position:absolute;
 left:0;text-align:left;margin-left:355.1pt;margin-top:69.55pt;width:4.75pt;
 height:3.7pt;rotation:298;z-index:15756288;mso-position-horizontal-relative:page'
 fillcolor="black" stroked="f">
 <o:extrusion v:ext="view" autorotationcenter="t"/>
 <v:textpath style='font-family:"Arial";font-size:3pt;v-text-kern:t;
  mso-text-shadow:auto' string="C8"/>
 <w:wrap anchorx="page"/>
</v:shape><![endif]--><![if !vml]><span style='mso-ignore:vglayout;position:
absolute;z-index:15756288;left:0px;margin-left:599px;margin-top:369px;
width:8px;height:8px'><img width=6 height=6
src="F081-THHC%20(ASIA)%20American%20Spinal%20Injury%20Association.files/image005.gif"
alt=C8 v:shapes="_x0000_s1138"></span><![endif]><i style='mso-bidi-font-style:
normal'><span lang=EN-US style='font-size:9.0pt;mso-bidi-font-size:11.0pt;
line-height:102%;color:#221F1F;position:relative;top:-1.0pt;mso-text-raise:
1.0pt;mso-font-width:90%'>Elbow flexors </span></i><b style='mso-bidi-font-weight:
normal'><span lang=EN-US style='color:#221F1F;mso-font-width:90%'>C5 </span></b><i
style='mso-bidi-font-style:normal'><span lang=EN-US style='font-size:9.0pt;
mso-bidi-font-size:11.0pt;line-height:102%;color:#221F1F;position:relative;
top:-1.0pt;mso-text-raise:1.0pt;mso-font-width:90%'>Wrist extensors </span></i><b
style='mso-bidi-font-weight:normal'><span lang=EN-US style='color:#221F1F;
mso-font-width:90%'>C6 </span></b><i style='mso-bidi-font-style:normal'><span
lang=EN-US style='font-size:9.0pt;mso-bidi-font-size:11.0pt;line-height:102%;
color:#221F1F;position:relative;top:-1.0pt;mso-text-raise:1.0pt;mso-font-width:
90%'>Elbow extensors </span></i><b style='mso-bidi-font-weight:normal'><span
lang=EN-US style='color:#221F1F;mso-font-width:90%'>C7 </span></b><i
style='mso-bidi-font-style:normal'><span lang=EN-US style='font-size:9.0pt;
mso-bidi-font-size:11.0pt;line-height:102%;color:#221F1F;position:relative;
top:-1.0pt;mso-text-raise:1.0pt;mso-font-width:90%'>Finger flexors </span></i><b
style='mso-bidi-font-weight:normal'><span lang=EN-US style='color:#221F1F;
mso-font-width:90%'>C8</span><span lang=EN-US><o:p></o:p></span></b></p>

<span lang=EN-US style='font-size:11.0pt;font-family:"Arial",sans-serif;
mso-fareast-font-family:Arial;mso-ansi-language:EN-US;mso-fareast-language:
EN-US;mso-bidi-language:AR-SA'><br clear=all style='mso-column-break-before:
always'>
</span>

<p class=MsoNormal style='margin-left:17.35pt'><b style='mso-bidi-font-weight:
normal'><span lang=EN-US style='font-size:8.0pt;mso-bidi-font-size:11.0pt;
color:#221F1F;letter-spacing:-.35pt;mso-font-width:85%'>Light</span></b><b
style='mso-bidi-font-weight:normal'><span lang=EN-US style='font-size:8.0pt;
mso-bidi-font-size:11.0pt;color:#221F1F;letter-spacing:-1.2pt;mso-font-width:
85%'> </span></b><b style='mso-bidi-font-weight:normal'><span lang=EN-US
style='font-size:8.0pt;mso-bidi-font-size:11.0pt;color:#221F1F;letter-spacing:
-.45pt;mso-font-width:85%'>Touch</span></b><b style='mso-bidi-font-weight:normal'><span
lang=EN-US style='font-size:8.0pt;mso-bidi-font-size:11.0pt;color:#221F1F;
letter-spacing:-1.15pt;mso-font-width:85%'> </span></b><b style='mso-bidi-font-weight:
normal'><span lang=EN-US style='font-size:8.0pt;mso-bidi-font-size:11.0pt;
color:#221F1F;letter-spacing:-.45pt;mso-font-width:85%'>(LTR) </span></b><b
style='mso-bidi-font-weight:normal'><span lang=EN-US style='font-size:8.0pt;
mso-bidi-font-size:11.0pt;color:#221F1F;letter-spacing:-.3pt;mso-font-width:
85%'>Pin</span></b><b style='mso-bidi-font-weight:normal'><span lang=EN-US
style='font-size:8.0pt;mso-bidi-font-size:11.0pt;color:#221F1F;letter-spacing:
-1.15pt;mso-font-width:85%'> </span></b><b style='mso-bidi-font-weight:normal'><span
lang=EN-US style='font-size:8.0pt;mso-bidi-font-size:11.0pt;color:#221F1F;
letter-spacing:-.35pt;mso-font-width:85%'>Prick</span></b><b style='mso-bidi-font-weight:
normal'><span lang=EN-US style='font-size:8.0pt;mso-bidi-font-size:11.0pt;
color:#221F1F;letter-spacing:-1.2pt;mso-font-width:85%'> </span></b><b
style='mso-bidi-font-weight:normal'><span lang=EN-US style='font-size:8.0pt;
mso-bidi-font-size:11.0pt;color:#221F1F;letter-spacing:-.4pt;mso-font-width:
85%'>(PPR)</span></b><b style='mso-bidi-font-weight:normal'><span lang=EN-US
style='font-size:8.0pt;mso-bidi-font-size:11.0pt'><o:p></o:p></span></b></p>

<h4 style='margin-top:5.6pt;margin-right:92.75pt;margin-bottom:0cm;margin-left:
9.8pt;margin-bottom:.0001pt;text-align:justify;line-height:95%'><!--[if gte vml 1]><v:shapetype
 id="_x0000_t202" coordsize="21600,21600" o:spt="202" path="m,l,21600r21600,l21600,xe">
 <v:stroke joinstyle="miter"/>
 <v:path gradientshapeok="t" o:connecttype="rect"/>
</v:shapetype><v:shape id="_x0000_s1137" type="#_x0000_t202" style='position:absolute;
 left:0;text-align:left;margin-left:226.55pt;margin-top:3.95pt;width:36.8pt;
 height:386.6pt;z-index:15757312;mso-position-horizontal-relative:page'
 filled="f" stroked="f">
 <v:textbox style='mso-next-textbox:#_x0000_s1137' inset="0,0,0,0"/>
 <w:wrap anchorx="page"/>
</v:shape><![endif]--><![if !vml]><span style='mso-ignore:vglayout;position:
absolute;z-index:15757312;left:0px;margin-left:385px;margin-top:289px;
width:65px;height:648px'>

<table cellpadding=0 cellspacing=0>
 <tr>
  <td width=65 height=648 style='vertical-align:top'><![endif]><![if !mso]><span
  style='position:absolute;mso-ignore:vglayout;left:0pt;z-index:15757312'>
  <table cellpadding=0 cellspacing=0 width="100%">
   <tr>
    <td><![endif]>
    <div v:shape="_x0000_s1137" style='padding:0pt 0pt 0pt 0pt' class=shape>
    <table class=MsoNormalTable border=1 cellspacing=0 cellpadding=0
     style='margin-left:.75pt;border-collapse:collapse;mso-table-layout-alt:
     fixed;border:none;mso-border-alt:solid black 1.0pt;mso-yfti-tbllook:480;
     mso-padding-alt:0cm 0cm 0cm 0cm;mso-border-insideh:1.0pt solid black;
     mso-border-insidev:1.0pt solid black'>
     <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;height:11.95pt'>
      <td width=46 valign=top style='width:34.5pt;border:solid black 1.0pt;
      padding:0cm 0cm 0cm 0cm;height:11.95pt'>
      <p class=TableParagraph><span lang=EN-US style='font-size:8.0pt;
      mso-bidi-font-size:11.0pt;font-family:"Times New Roman",serif;mso-hansi-font-family:
      Arial;mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
      </td>
     </tr>
     <tr style='mso-yfti-irow:1;height:12.0pt'>
      <td width=46 valign=top style='width:34.5pt;border:solid black 1.0pt;
      border-top:none;mso-border-top-alt:solid black 1.0pt;padding:0cm 0cm 0cm 0cm;
      height:12.0pt'>
      <p class=TableParagraph><span lang=EN-US style='font-size:8.0pt;
      mso-bidi-font-size:11.0pt;font-family:"Times New Roman",serif;mso-hansi-font-family:
      Arial;mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
      </td>
     </tr>
     <tr style='mso-yfti-irow:2;height:12.0pt'>
      <td width=46 valign=top style='width:34.5pt;border:solid black 1.0pt;
      border-top:none;mso-border-top-alt:solid black 1.0pt;padding:0cm 0cm 0cm 0cm;
      height:12.0pt'>
      <p class=TableParagraph><span lang=EN-US style='font-size:8.0pt;
      mso-bidi-font-size:11.0pt;font-family:"Times New Roman",serif;mso-hansi-font-family:
      Arial;mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
      </td>
     </tr>
     <tr style='mso-yfti-irow:3;height:11.95pt'>
      <td width=46 valign=top style='width:34.5pt;border:solid black 1.0pt;
      border-top:none;mso-border-top-alt:solid black 1.0pt;padding:0cm 0cm 0cm 0cm;
      height:11.95pt'>
      <p class=TableParagraph><span lang=EN-US style='font-size:8.0pt;
      mso-bidi-font-size:11.0pt;font-family:"Times New Roman",serif;mso-hansi-font-family:
      Arial;mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
      </td>
     </tr>
     <tr style='mso-yfti-irow:4;height:12.0pt'>
      <td width=46 valign=top style='width:34.5pt;border:solid black 1.0pt;
      border-top:none;mso-border-top-alt:solid black 1.0pt;padding:0cm 0cm 0cm 0cm;
      height:12.0pt'>
      <p class=TableParagraph><span lang=EN-US style='font-size:8.0pt;
      mso-bidi-font-size:11.0pt;font-family:"Times New Roman",serif;mso-hansi-font-family:
      Arial;mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
      </td>
     </tr>
     <tr style='mso-yfti-irow:5;height:12.0pt'>
      <td width=46 valign=top style='width:34.5pt;border:solid black 1.0pt;
      border-top:none;mso-border-top-alt:solid black 1.0pt;padding:0cm 0cm 0cm 0cm;
      height:12.0pt'>
      <p class=TableParagraph><span lang=EN-US style='font-size:8.0pt;
      mso-bidi-font-size:11.0pt;font-family:"Times New Roman",serif;mso-hansi-font-family:
      Arial;mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
      </td>
     </tr>
     <tr style='mso-yfti-irow:6;height:12.0pt'>
      <td width=46 valign=top style='width:34.5pt;border:solid black 1.0pt;
      border-top:none;mso-border-top-alt:solid black 1.0pt;padding:0cm 0cm 0cm 0cm;
      height:12.0pt'>
      <p class=TableParagraph><span lang=EN-US style='font-size:8.0pt;
      mso-bidi-font-size:11.0pt;font-family:"Times New Roman",serif;mso-hansi-font-family:
      Arial;mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
      </td>
     </tr>
     <tr style='mso-yfti-irow:7;height:12.0pt'>
      <td width=46 valign=top style='width:34.5pt;border:solid black 1.0pt;
      border-top:none;mso-border-top-alt:solid black 1.0pt;padding:0cm 0cm 0cm 0cm;
      height:12.0pt'>
      <p class=TableParagraph><span lang=EN-US style='font-size:8.0pt;
      mso-bidi-font-size:11.0pt;font-family:"Times New Roman",serif;mso-hansi-font-family:
      Arial;mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
      </td>
     </tr>
     <tr style='mso-yfti-irow:8;height:11.95pt'>
      <td width=46 valign=top style='width:34.5pt;border:solid black 1.0pt;
      border-top:none;mso-border-top-alt:solid black 1.0pt;padding:0cm 0cm 0cm 0cm;
      height:11.95pt'>
      <p class=TableParagraph><span lang=EN-US style='font-size:8.0pt;
      mso-bidi-font-size:11.0pt;font-family:"Times New Roman",serif;mso-hansi-font-family:
      Arial;mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
      </td>
     </tr>
     <tr style='mso-yfti-irow:9;height:12.0pt'>
      <td width=46 valign=top style='width:34.5pt;border:solid black 1.0pt;
      border-top:none;mso-border-top-alt:solid black 1.0pt;padding:0cm 0cm 0cm 0cm;
      height:12.0pt'>
      <p class=TableParagraph><span lang=EN-US style='font-size:8.0pt;
      mso-bidi-font-size:11.0pt;font-family:"Times New Roman",serif;mso-hansi-font-family:
      Arial;mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
      </td>
     </tr>
     <tr style='mso-yfti-irow:10;height:12.0pt'>
      <td width=46 valign=top style='width:34.5pt;border:solid black 1.0pt;
      border-top:none;mso-border-top-alt:solid black 1.0pt;padding:0cm 0cm 0cm 0cm;
      height:12.0pt'>
      <p class=TableParagraph><span lang=EN-US style='font-size:8.0pt;
      mso-bidi-font-size:11.0pt;font-family:"Times New Roman",serif;mso-hansi-font-family:
      Arial;mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
      </td>
     </tr>
     <tr style='mso-yfti-irow:11;height:12.0pt'>
      <td width=46 valign=top style='width:34.5pt;border:solid black 1.0pt;
      border-top:none;mso-border-top-alt:solid black 1.0pt;padding:0cm 0cm 0cm 0cm;
      height:12.0pt'>
      <p class=TableParagraph><span lang=EN-US style='font-size:8.0pt;
      mso-bidi-font-size:11.0pt;font-family:"Times New Roman",serif;mso-hansi-font-family:
      Arial;mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
      </td>
     </tr>
     <tr style='mso-yfti-irow:12;height:12.0pt'>
      <td width=46 valign=top style='width:34.5pt;border:solid black 1.0pt;
      border-top:none;mso-border-top-alt:solid black 1.0pt;padding:0cm 0cm 0cm 0cm;
      height:12.0pt'>
      <p class=TableParagraph><span lang=EN-US style='font-size:8.0pt;
      mso-bidi-font-size:11.0pt;font-family:"Times New Roman",serif;mso-hansi-font-family:
      Arial;mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
      </td>
     </tr>
     <tr style='mso-yfti-irow:13;height:11.95pt'>
      <td width=46 valign=top style='width:34.5pt;border:solid black 1.0pt;
      border-top:none;mso-border-top-alt:solid black 1.0pt;padding:0cm 0cm 0cm 0cm;
      height:11.95pt'>
      <p class=TableParagraph><span lang=EN-US style='font-size:8.0pt;
      mso-bidi-font-size:11.0pt;font-family:"Times New Roman",serif;mso-hansi-font-family:
      Arial;mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
      </td>
     </tr>
     <tr style='mso-yfti-irow:14;height:12.0pt'>
      <td width=46 valign=top style='width:34.5pt;border:solid black 1.0pt;
      border-top:none;mso-border-top-alt:solid black 1.0pt;padding:0cm 0cm 0cm 0cm;
      height:12.0pt'>
      <p class=TableParagraph><span lang=EN-US style='font-size:8.0pt;
      mso-bidi-font-size:11.0pt;font-family:"Times New Roman",serif;mso-hansi-font-family:
      Arial;mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
      </td>
     </tr>
     <tr style='mso-yfti-irow:15;height:12.0pt'>
      <td width=46 valign=top style='width:34.5pt;border:solid black 1.0pt;
      border-top:none;mso-border-top-alt:solid black 1.0pt;padding:0cm 0cm 0cm 0cm;
      height:12.0pt'>
      <p class=TableParagraph><span lang=EN-US style='font-size:8.0pt;
      mso-bidi-font-size:11.0pt;font-family:"Times New Roman",serif;mso-hansi-font-family:
      Arial;mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
      </td>
     </tr>
     <tr style='mso-yfti-irow:16;height:12.0pt'>
      <td width=46 valign=top style='width:34.5pt;border:solid black 1.0pt;
      border-top:none;mso-border-top-alt:solid black 1.0pt;padding:0cm 0cm 0cm 0cm;
      height:12.0pt'>
      <p class=TableParagraph><span lang=EN-US style='font-size:8.0pt;
      mso-bidi-font-size:11.0pt;font-family:"Times New Roman",serif;mso-hansi-font-family:
      Arial;mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
      </td>
     </tr>
     <tr style='mso-yfti-irow:17;height:12.0pt'>
      <td width=46 valign=top style='width:34.5pt;border:solid black 1.0pt;
      border-top:none;mso-border-top-alt:solid black 1.0pt;padding:0cm 0cm 0cm 0cm;
      height:12.0pt'>
      <p class=TableParagraph><span lang=EN-US style='font-size:8.0pt;
      mso-bidi-font-size:11.0pt;font-family:"Times New Roman",serif;mso-hansi-font-family:
      Arial;mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
      </td>
     </tr>
     <tr style='mso-yfti-irow:18;height:11.95pt'>
      <td width=46 valign=top style='width:34.5pt;border:solid black 1.0pt;
      border-top:none;mso-border-top-alt:solid black 1.0pt;padding:0cm 0cm 0cm 0cm;
      height:11.95pt'>
      <p class=TableParagraph><span lang=EN-US style='font-size:8.0pt;
      mso-bidi-font-size:11.0pt;font-family:"Times New Roman",serif;mso-hansi-font-family:
      Arial;mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
      </td>
     </tr>
     <tr style='mso-yfti-irow:19;height:12.0pt'>
      <td width=46 valign=top style='width:34.5pt;border:solid black 1.0pt;
      border-top:none;mso-border-top-alt:solid black 1.0pt;padding:0cm 0cm 0cm 0cm;
      height:12.0pt'>
      <p class=TableParagraph><span lang=EN-US style='font-size:8.0pt;
      mso-bidi-font-size:11.0pt;font-family:"Times New Roman",serif;mso-hansi-font-family:
      Arial;mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
      </td>
     </tr>
     <tr style='mso-yfti-irow:20;height:12.0pt'>
      <td width=46 valign=top style='width:34.5pt;border:solid black 1.0pt;
      border-top:none;mso-border-top-alt:solid black 1.0pt;padding:0cm 0cm 0cm 0cm;
      height:12.0pt'>
      <p class=TableParagraph><span lang=EN-US style='font-size:8.0pt;
      mso-bidi-font-size:11.0pt;font-family:"Times New Roman",serif;mso-hansi-font-family:
      Arial;mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
      </td>
     </tr>
     <tr style='mso-yfti-irow:21;height:12.0pt'>
      <td width=46 valign=top style='width:34.5pt;border:solid black 1.0pt;
      border-top:none;mso-border-top-alt:solid black 1.0pt;padding:0cm 0cm 0cm 0cm;
      height:12.0pt'>
      <p class=TableParagraph><span lang=EN-US style='font-size:8.0pt;
      mso-bidi-font-size:11.0pt;font-family:"Times New Roman",serif;mso-hansi-font-family:
      Arial;mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
      </td>
     </tr>
     <tr style='mso-yfti-irow:22;height:12.0pt'>
      <td width=46 valign=top style='width:34.5pt;border:solid black 1.0pt;
      border-top:none;mso-border-top-alt:solid black 1.0pt;padding:0cm 0cm 0cm 0cm;
      height:12.0pt'>
      <p class=TableParagraph><span lang=EN-US style='font-size:8.0pt;
      mso-bidi-font-size:11.0pt;font-family:"Times New Roman",serif;mso-hansi-font-family:
      Arial;mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
      </td>
     </tr>
     <tr style='mso-yfti-irow:23;height:11.95pt'>
      <td width=46 valign=top style='width:34.5pt;border:solid black 1.0pt;
      border-top:none;mso-border-top-alt:solid black 1.0pt;padding:0cm 0cm 0cm 0cm;
      height:11.95pt'>
      <p class=TableParagraph><span lang=EN-US style='font-size:8.0pt;
      mso-bidi-font-size:11.0pt;font-family:"Times New Roman",serif;mso-hansi-font-family:
      Arial;mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
      </td>
     </tr>
     <tr style='mso-yfti-irow:24;height:12.0pt'>
      <td width=46 valign=top style='width:34.5pt;border:solid black 1.0pt;
      border-top:none;mso-border-top-alt:solid black 1.0pt;padding:0cm 0cm 0cm 0cm;
      height:12.0pt'>
      <p class=TableParagraph><span lang=EN-US style='font-size:8.0pt;
      mso-bidi-font-size:11.0pt;font-family:"Times New Roman",serif;mso-hansi-font-family:
      Arial;mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
      </td>
     </tr>
     <tr style='mso-yfti-irow:25;height:11.95pt'>
      <td width=46 valign=top style='width:34.5pt;border:solid black 1.0pt;
      border-top:none;mso-border-top-alt:solid black 1.0pt;padding:0cm 0cm 0cm 0cm;
      height:11.95pt'>
      <p class=TableParagraph><span lang=EN-US style='font-size:8.0pt;
      mso-bidi-font-size:11.0pt;font-family:"Times New Roman",serif;mso-hansi-font-family:
      Arial;mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
      </td>
     </tr>
     <tr style='mso-yfti-irow:26;height:11.75pt'>
      <td width=46 valign=top style='width:34.5pt;border-top:none;border-left:
      solid black 1.0pt;border-bottom:solid black 1.5pt;border-right:solid black 1.0pt;
      mso-border-top-alt:solid black 1.0pt;padding:0cm 0cm 0cm 0cm;height:11.75pt'>
      <p class=TableParagraph><span lang=EN-US style='font-size:8.0pt;
      mso-bidi-font-size:11.0pt;font-family:"Times New Roman",serif;mso-hansi-font-family:
      Arial;mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
      </td>
     </tr>
     <tr style='mso-yfti-irow:27;height:12.55pt'>
      <td width=46 valign=top style='width:34.5pt;border-top:none;border-left:
      solid black 1.5pt;border-bottom:double black 1.5pt;border-right:solid black 1.5pt;
      mso-border-top-alt:solid black 1.5pt;mso-border-alt:solid black 1.5pt;
      mso-border-bottom-alt:thin-thick-medium-gap black 1.5pt;padding:0cm 0cm 0cm 0cm;
      height:12.55pt'>
      <p class=TableParagraph><span lang=EN-US style='font-size:8.0pt;
      mso-bidi-font-size:11.0pt;font-family:"Times New Roman",serif;mso-hansi-font-family:
      Arial;mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
      </td>
     </tr>
     <tr style='mso-yfti-irow:28;mso-yfti-lastrow:yes;height:18.2pt'>
      <td width=46 valign=top style='width:34.5pt;border:solid black 1.0pt;
      border-top:none;mso-border-top-alt:thick-thin-medium-gap black 1.5pt;
      padding:0cm 0cm 0cm 0cm;height:18.2pt'>
      <p class=TableParagraph><span lang=EN-US style='font-size:8.0pt;
      mso-bidi-font-size:11.0pt;font-family:"Times New Roman",serif;mso-hansi-font-family:
      Arial;mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
      </td>
     </tr>
    </table>
    <p class=MsoBodyText><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
    </div>
    <![if !mso]></td>
   </tr>
  </table>
  </span><![endif]><![if !mso & !vml]>&nbsp;<![endif]><![if !vml]></td>
 </tr>
</table>

</span><![endif]><!--[if gte vml 1]><v:shape id="_x0000_s1136" type="#_x0000_t202"
 style='position:absolute;left:0;text-align:left;margin-left:272.05pt;
 margin-top:3.95pt;width:36.8pt;height:386.6pt;z-index:15757824;
 mso-position-horizontal-relative:page' filled="f" stroked="f">
 <v:textbox style='mso-next-textbox:#_x0000_s1136' inset="0,0,0,0"/>
 <w:wrap anchorx="page"/>
</v:shape><![endif]--><![if !vml]><span style='mso-ignore:vglayout;position:
absolute;z-index:15757824;left:0px;margin-left:461px;margin-top:289px;
width:65px;height:648px'>

<table cellpadding=0 cellspacing=0>
 <tr>
  <td width=65 height=648 style='vertical-align:top'><![endif]><![if !mso]><span
  style='position:absolute;mso-ignore:vglayout;left:0pt;z-index:15757824'>
  <table cellpadding=0 cellspacing=0 width="100%">
   <tr>
    <td><![endif]>
    <div v:shape="_x0000_s1136" style='padding:0pt 0pt 0pt 0pt' class=shape>
    <table class=MsoNormalTable border=1 cellspacing=0 cellpadding=0
     style='margin-left:.75pt;border-collapse:collapse;mso-table-layout-alt:
     fixed;border:none;mso-border-alt:solid black 1.0pt;mso-yfti-tbllook:480;
     mso-padding-alt:0cm 0cm 0cm 0cm;mso-border-insideh:1.0pt solid black;
     mso-border-insidev:1.0pt solid black'>
     <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;height:11.95pt'>
      <td width=46 valign=top style='width:34.5pt;border:solid black 1.0pt;
      background:#DBDCDE;padding:0cm 0cm 0cm 0cm;height:11.95pt'>
      <p class=TableParagraph><span lang=EN-US style='font-size:8.0pt;
      mso-bidi-font-size:11.0pt;font-family:"Times New Roman",serif;mso-hansi-font-family:
      Arial;mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
      </td>
     </tr>
     <tr style='mso-yfti-irow:1;height:12.0pt'>
      <td width=46 valign=top style='width:34.5pt;border:solid black 1.0pt;
      border-top:none;mso-border-top-alt:solid black 1.0pt;background:#DBDCDE;
      padding:0cm 0cm 0cm 0cm;height:12.0pt'>
      <p class=TableParagraph><span lang=EN-US style='font-size:8.0pt;
      mso-bidi-font-size:11.0pt;font-family:"Times New Roman",serif;mso-hansi-font-family:
      Arial;mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
      </td>
     </tr>
     <tr style='mso-yfti-irow:2;height:12.0pt'>
      <td width=46 valign=top style='width:34.5pt;border:solid black 1.0pt;
      border-top:none;mso-border-top-alt:solid black 1.0pt;background:#DBDCDE;
      padding:0cm 0cm 0cm 0cm;height:12.0pt'>
      <p class=TableParagraph><span lang=EN-US style='font-size:8.0pt;
      mso-bidi-font-size:11.0pt;font-family:"Times New Roman",serif;mso-hansi-font-family:
      Arial;mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
      </td>
     </tr>
     <tr style='mso-yfti-irow:3;height:11.95pt'>
      <td width=46 valign=top style='width:34.5pt;border:solid black 1.0pt;
      border-top:none;mso-border-top-alt:solid black 1.0pt;background:#DBDCDE;
      padding:0cm 0cm 0cm 0cm;height:11.95pt'>
      <p class=TableParagraph><span lang=EN-US style='font-size:8.0pt;
      mso-bidi-font-size:11.0pt;font-family:"Times New Roman",serif;mso-hansi-font-family:
      Arial;mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
      </td>
     </tr>
     <tr style='mso-yfti-irow:4;height:12.0pt'>
      <td width=46 valign=top style='width:34.5pt;border:solid black 1.0pt;
      border-top:none;mso-border-top-alt:solid black 1.0pt;background:#DBDCDE;
      padding:0cm 0cm 0cm 0cm;height:12.0pt'>
      <p class=TableParagraph><span lang=EN-US style='font-size:8.0pt;
      mso-bidi-font-size:11.0pt;font-family:"Times New Roman",serif;mso-hansi-font-family:
      Arial;mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
      </td>
     </tr>
     <tr style='mso-yfti-irow:5;height:12.0pt'>
      <td width=46 valign=top style='width:34.5pt;border:solid black 1.0pt;
      border-top:none;mso-border-top-alt:solid black 1.0pt;background:#DBDCDE;
      padding:0cm 0cm 0cm 0cm;height:12.0pt'>
      <p class=TableParagraph><span lang=EN-US style='font-size:8.0pt;
      mso-bidi-font-size:11.0pt;font-family:"Times New Roman",serif;mso-hansi-font-family:
      Arial;mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
      </td>
     </tr>
     <tr style='mso-yfti-irow:6;height:12.0pt'>
      <td width=46 valign=top style='width:34.5pt;border:solid black 1.0pt;
      border-top:none;mso-border-top-alt:solid black 1.0pt;background:#DBDCDE;
      padding:0cm 0cm 0cm 0cm;height:12.0pt'>
      <p class=TableParagraph><span lang=EN-US style='font-size:8.0pt;
      mso-bidi-font-size:11.0pt;font-family:"Times New Roman",serif;mso-hansi-font-family:
      Arial;mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
      </td>
     </tr>
     <tr style='mso-yfti-irow:7;height:12.0pt'>
      <td width=46 valign=top style='width:34.5pt;border:solid black 1.0pt;
      border-top:none;mso-border-top-alt:solid black 1.0pt;background:#DBDCDE;
      padding:0cm 0cm 0cm 0cm;height:12.0pt'>
      <p class=TableParagraph><span lang=EN-US style='font-size:8.0pt;
      mso-bidi-font-size:11.0pt;font-family:"Times New Roman",serif;mso-hansi-font-family:
      Arial;mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
      </td>
     </tr>
     <tr style='mso-yfti-irow:8;height:11.95pt'>
      <td width=46 valign=top style='width:34.5pt;border:solid black 1.0pt;
      border-top:none;mso-border-top-alt:solid black 1.0pt;background:#DBDCDE;
      padding:0cm 0cm 0cm 0cm;height:11.95pt'>
      <p class=TableParagraph><span lang=EN-US style='font-size:8.0pt;
      mso-bidi-font-size:11.0pt;font-family:"Times New Roman",serif;mso-hansi-font-family:
      Arial;mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
      </td>
     </tr>
     <tr style='mso-yfti-irow:9;height:12.0pt'>
      <td width=46 valign=top style='width:34.5pt;border:solid black 1.0pt;
      border-top:none;mso-border-top-alt:solid black 1.0pt;background:#DBDCDE;
      padding:0cm 0cm 0cm 0cm;height:12.0pt'>
      <p class=TableParagraph><span lang=EN-US style='font-size:8.0pt;
      mso-bidi-font-size:11.0pt;font-family:"Times New Roman",serif;mso-hansi-font-family:
      Arial;mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
      </td>
     </tr>
     <tr style='mso-yfti-irow:10;height:12.0pt'>
      <td width=46 valign=top style='width:34.5pt;border:solid black 1.0pt;
      border-top:none;mso-border-top-alt:solid black 1.0pt;background:#DBDCDE;
      padding:0cm 0cm 0cm 0cm;height:12.0pt'>
      <p class=TableParagraph><span lang=EN-US style='font-size:8.0pt;
      mso-bidi-font-size:11.0pt;font-family:"Times New Roman",serif;mso-hansi-font-family:
      Arial;mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
      </td>
     </tr>
     <tr style='mso-yfti-irow:11;height:12.0pt'>
      <td width=46 valign=top style='width:34.5pt;border:solid black 1.0pt;
      border-top:none;mso-border-top-alt:solid black 1.0pt;background:#DBDCDE;
      padding:0cm 0cm 0cm 0cm;height:12.0pt'>
      <p class=TableParagraph><span lang=EN-US style='font-size:8.0pt;
      mso-bidi-font-size:11.0pt;font-family:"Times New Roman",serif;mso-hansi-font-family:
      Arial;mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
      </td>
     </tr>
     <tr style='mso-yfti-irow:12;height:12.0pt'>
      <td width=46 valign=top style='width:34.5pt;border:solid black 1.0pt;
      border-top:none;mso-border-top-alt:solid black 1.0pt;background:#DBDCDE;
      padding:0cm 0cm 0cm 0cm;height:12.0pt'>
      <p class=TableParagraph><span lang=EN-US style='font-size:8.0pt;
      mso-bidi-font-size:11.0pt;font-family:"Times New Roman",serif;mso-hansi-font-family:
      Arial;mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
      </td>
     </tr>
     <tr style='mso-yfti-irow:13;height:11.95pt'>
      <td width=46 valign=top style='width:34.5pt;border:solid black 1.0pt;
      border-top:none;mso-border-top-alt:solid black 1.0pt;background:#DBDCDE;
      padding:0cm 0cm 0cm 0cm;height:11.95pt'>
      <p class=TableParagraph><span lang=EN-US style='font-size:8.0pt;
      mso-bidi-font-size:11.0pt;font-family:"Times New Roman",serif;mso-hansi-font-family:
      Arial;mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
      </td>
     </tr>
     <tr style='mso-yfti-irow:14;height:12.0pt'>
      <td width=46 valign=top style='width:34.5pt;border:solid black 1.0pt;
      border-top:none;mso-border-top-alt:solid black 1.0pt;background:#DBDCDE;
      padding:0cm 0cm 0cm 0cm;height:12.0pt'>
      <p class=TableParagraph><span lang=EN-US style='font-size:8.0pt;
      mso-bidi-font-size:11.0pt;font-family:"Times New Roman",serif;mso-hansi-font-family:
      Arial;mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
      </td>
     </tr>
     <tr style='mso-yfti-irow:15;height:12.0pt'>
      <td width=46 valign=top style='width:34.5pt;border:solid black 1.0pt;
      border-top:none;mso-border-top-alt:solid black 1.0pt;background:#DBDCDE;
      padding:0cm 0cm 0cm 0cm;height:12.0pt'>
      <p class=TableParagraph><span lang=EN-US style='font-size:8.0pt;
      mso-bidi-font-size:11.0pt;font-family:"Times New Roman",serif;mso-hansi-font-family:
      Arial;mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
      </td>
     </tr>
     <tr style='mso-yfti-irow:16;height:12.0pt'>
      <td width=46 valign=top style='width:34.5pt;border:solid black 1.0pt;
      border-top:none;mso-border-top-alt:solid black 1.0pt;background:#DBDCDE;
      padding:0cm 0cm 0cm 0cm;height:12.0pt'>
      <p class=TableParagraph><span lang=EN-US style='font-size:8.0pt;
      mso-bidi-font-size:11.0pt;font-family:"Times New Roman",serif;mso-hansi-font-family:
      Arial;mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
      </td>
     </tr>
     <tr style='mso-yfti-irow:17;height:12.0pt'>
      <td width=46 valign=top style='width:34.5pt;border:solid black 1.0pt;
      border-top:none;mso-border-top-alt:solid black 1.0pt;background:#DBDCDE;
      padding:0cm 0cm 0cm 0cm;height:12.0pt'>
      <p class=TableParagraph><span lang=EN-US style='font-size:8.0pt;
      mso-bidi-font-size:11.0pt;font-family:"Times New Roman",serif;mso-hansi-font-family:
      Arial;mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
      </td>
     </tr>
     <tr style='mso-yfti-irow:18;height:11.95pt'>
      <td width=46 valign=top style='width:34.5pt;border:solid black 1.0pt;
      border-top:none;mso-border-top-alt:solid black 1.0pt;background:#DBDCDE;
      padding:0cm 0cm 0cm 0cm;height:11.95pt'>
      <p class=TableParagraph><span lang=EN-US style='font-size:8.0pt;
      mso-bidi-font-size:11.0pt;font-family:"Times New Roman",serif;mso-hansi-font-family:
      Arial;mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
      </td>
     </tr>
     <tr style='mso-yfti-irow:19;height:12.0pt'>
      <td width=46 valign=top style='width:34.5pt;border:solid black 1.0pt;
      border-top:none;mso-border-top-alt:solid black 1.0pt;background:#DBDCDE;
      padding:0cm 0cm 0cm 0cm;height:12.0pt'>
      <p class=TableParagraph><span lang=EN-US style='font-size:8.0pt;
      mso-bidi-font-size:11.0pt;font-family:"Times New Roman",serif;mso-hansi-font-family:
      Arial;mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
      </td>
     </tr>
     <tr style='mso-yfti-irow:20;height:12.0pt'>
      <td width=46 valign=top style='width:34.5pt;border:solid black 1.0pt;
      border-top:none;mso-border-top-alt:solid black 1.0pt;background:#DBDCDE;
      padding:0cm 0cm 0cm 0cm;height:12.0pt'>
      <p class=TableParagraph><span lang=EN-US style='font-size:8.0pt;
      mso-bidi-font-size:11.0pt;font-family:"Times New Roman",serif;mso-hansi-font-family:
      Arial;mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
      </td>
     </tr>
     <tr style='mso-yfti-irow:21;height:12.0pt'>
      <td width=46 valign=top style='width:34.5pt;border:solid black 1.0pt;
      border-top:none;mso-border-top-alt:solid black 1.0pt;background:#DBDCDE;
      padding:0cm 0cm 0cm 0cm;height:12.0pt'>
      <p class=TableParagraph><span lang=EN-US style='font-size:8.0pt;
      mso-bidi-font-size:11.0pt;font-family:"Times New Roman",serif;mso-hansi-font-family:
      Arial;mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
      </td>
     </tr>
     <tr style='mso-yfti-irow:22;height:12.0pt'>
      <td width=46 valign=top style='width:34.5pt;border:solid black 1.0pt;
      border-top:none;mso-border-top-alt:solid black 1.0pt;background:#DBDCDE;
      padding:0cm 0cm 0cm 0cm;height:12.0pt'>
      <p class=TableParagraph><span lang=EN-US style='font-size:8.0pt;
      mso-bidi-font-size:11.0pt;font-family:"Times New Roman",serif;mso-hansi-font-family:
      Arial;mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
      </td>
     </tr>
     <tr style='mso-yfti-irow:23;height:11.95pt'>
      <td width=46 valign=top style='width:34.5pt;border:solid black 1.0pt;
      border-top:none;mso-border-top-alt:solid black 1.0pt;background:#DBDCDE;
      padding:0cm 0cm 0cm 0cm;height:11.95pt'>
      <p class=TableParagraph><span lang=EN-US style='font-size:8.0pt;
      mso-bidi-font-size:11.0pt;font-family:"Times New Roman",serif;mso-hansi-font-family:
      Arial;mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
      </td>
     </tr>
     <tr style='mso-yfti-irow:24;height:12.0pt'>
      <td width=46 valign=top style='width:34.5pt;border:solid black 1.0pt;
      border-top:none;mso-border-top-alt:solid black 1.0pt;background:#DBDCDE;
      padding:0cm 0cm 0cm 0cm;height:12.0pt'>
      <p class=TableParagraph><span lang=EN-US style='font-size:8.0pt;
      mso-bidi-font-size:11.0pt;font-family:"Times New Roman",serif;mso-hansi-font-family:
      Arial;mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
      </td>
     </tr>
     <tr style='mso-yfti-irow:25;height:11.95pt'>
      <td width=46 valign=top style='width:34.5pt;border:solid black 1.0pt;
      border-top:none;mso-border-top-alt:solid black 1.0pt;background:#DBDCDE;
      padding:0cm 0cm 0cm 0cm;height:11.95pt'>
      <p class=TableParagraph><span lang=EN-US style='font-size:8.0pt;
      mso-bidi-font-size:11.0pt;font-family:"Times New Roman",serif;mso-hansi-font-family:
      Arial;mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
      </td>
     </tr>
     <tr style='mso-yfti-irow:26;height:11.75pt'>
      <td width=46 valign=top style='width:34.5pt;border-top:none;border-left:
      solid black 1.0pt;border-bottom:solid black 1.5pt;border-right:solid black 1.0pt;
      mso-border-top-alt:solid black 1.0pt;background:#DBDCDE;padding:0cm 0cm 0cm 0cm;
      height:11.75pt'>
      <p class=TableParagraph><span lang=EN-US style='font-size:8.0pt;
      mso-bidi-font-size:11.0pt;font-family:"Times New Roman",serif;mso-hansi-font-family:
      Arial;mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
      </td>
     </tr>
     <tr style='mso-yfti-irow:27;height:12.55pt'>
      <td width=46 valign=top style='width:34.5pt;border-top:none;border-left:
      solid black 1.5pt;border-bottom:double black 1.5pt;border-right:solid black 1.5pt;
      mso-border-top-alt:solid black 1.5pt;mso-border-alt:solid black 1.5pt;
      mso-border-bottom-alt:thin-thick-medium-gap black 1.5pt;background:#DBDCDE;
      padding:0cm 0cm 0cm 0cm;height:12.55pt'>
      <p class=TableParagraph><span lang=EN-US style='font-size:8.0pt;
      mso-bidi-font-size:11.0pt;font-family:"Times New Roman",serif;mso-hansi-font-family:
      Arial;mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
      </td>
     </tr>
     <tr style='mso-yfti-irow:28;mso-yfti-lastrow:yes;height:18.2pt'>
      <td width=46 valign=top style='width:34.5pt;border:solid black 1.0pt;
      border-top:none;mso-border-top-alt:thick-thin-medium-gap black 1.5pt;
      padding:0cm 0cm 0cm 0cm;height:18.2pt'>
      <p class=TableParagraph><span lang=EN-US style='font-size:8.0pt;
      mso-bidi-font-size:11.0pt;font-family:"Times New Roman",serif;mso-hansi-font-family:
      Arial;mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
      </td>
     </tr>
    </table>
    <p class=MsoBodyText><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
    </div>
    <![if !mso]></td>
   </tr>
  </table>
  </span><![endif]><![if !mso & !vml]>&nbsp;<![endif]><![if !vml]></td>
 </tr>
</table>

</span><![endif]><!--[if gte vml 1]><v:shape id="_x0000_s1135" type="#_x0000_t202"
 style='position:absolute;left:0;text-align:left;margin-left:189.55pt;
 margin-top:42.45pt;width:31.25pt;height:65.9pt;z-index:15759360;
 mso-position-horizontal-relative:page' filled="f" stroked="f">
 <v:textbox style='mso-next-textbox:#_x0000_s1135' inset="0,0,0,0"/>
 <w:wrap anchorx="page"/>
</v:shape><![endif]--><![if !vml]><span style='mso-ignore:vglayout;position:
absolute;z-index:15759360;left:0px;margin-left:323px;margin-top:353px;
width:57px;height:114px'>

<table cellpadding=0 cellspacing=0>
 <tr>
  <td width=57 height=114 style='vertical-align:top'><![endif]><![if !mso]><span
  style='position:absolute;mso-ignore:vglayout;left:0pt;z-index:15759360'>
  <table cellpadding=0 cellspacing=0 width="100%">
   <tr>
    <td><![endif]>
    <div v:shape="_x0000_s1135" style='padding:0pt 0pt 0pt 0pt' class=shape>
    <table class=MsoNormalTable border=1 cellspacing=0 cellpadding=0
     style='margin-left:.5pt;border-collapse:collapse;mso-table-layout-alt:
     fixed;border:none;mso-border-alt:solid black 1.0pt;mso-yfti-tbllook:480;
     mso-padding-alt:0cm 0cm 0cm 0cm;mso-border-insideh:1.0pt solid black;
     mso-border-insidev:1.0pt solid black'>
     <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;height:11.95pt'>
      <td width=40 valign=top style='width:30.0pt;border:solid black 1.0pt;
      padding:0cm 0cm 0cm 0cm;height:11.95pt'>
      <p class=TableParagraph><span lang=EN-US style='font-size:8.0pt;
      mso-bidi-font-size:11.0pt;font-family:"Times New Roman",serif;mso-hansi-font-family:
      Arial;mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
      </td>
     </tr>
     <tr style='mso-yfti-irow:1;height:12.0pt'>
      <td width=40 valign=top style='width:30.0pt;border:solid black 1.0pt;
      border-top:none;mso-border-top-alt:solid black 1.0pt;padding:0cm 0cm 0cm 0cm;
      height:12.0pt'>
      <p class=TableParagraph><span lang=EN-US style='font-size:8.0pt;
      mso-bidi-font-size:11.0pt;font-family:"Times New Roman",serif;mso-hansi-font-family:
      Arial;mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
      </td>
     </tr>
     <tr style='mso-yfti-irow:2;height:12.0pt'>
      <td width=40 valign=top style='width:30.0pt;border:solid black 1.0pt;
      border-top:none;mso-border-top-alt:solid black 1.0pt;padding:0cm 0cm 0cm 0cm;
      height:12.0pt'>
      <p class=TableParagraph><span lang=EN-US style='font-size:8.0pt;
      mso-bidi-font-size:11.0pt;font-family:"Times New Roman",serif;mso-hansi-font-family:
      Arial;mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
      </td>
     </tr>
     <tr style='mso-yfti-irow:3;height:12.0pt'>
      <td width=40 valign=top style='width:30.0pt;border:solid black 1.0pt;
      border-top:none;mso-border-top-alt:solid black 1.0pt;padding:0cm 0cm 0cm 0cm;
      height:12.0pt'>
      <p class=TableParagraph><span lang=EN-US style='font-size:8.0pt;
      mso-bidi-font-size:11.0pt;font-family:"Times New Roman",serif;mso-hansi-font-family:
      Arial;mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
      </td>
     </tr>
     <tr style='mso-yfti-irow:4;mso-yfti-lastrow:yes;height:12.0pt'>
      <td width=40 valign=top style='width:30.0pt;border:solid black 1.0pt;
      border-top:none;mso-border-top-alt:solid black 1.0pt;padding:0cm 0cm 0cm 0cm;
      height:12.0pt'>
      <p class=TableParagraph><span lang=EN-US style='font-size:8.0pt;
      mso-bidi-font-size:11.0pt;font-family:"Times New Roman",serif;mso-hansi-font-family:
      Arial;mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
      </td>
     </tr>
    </table>
    <p class=MsoBodyText><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
    </div>
    <![if !mso]></td>
   </tr>
  </table>
  </span><![endif]><![if !mso & !vml]>&nbsp;<![endif]><![if !vml]></td>
 </tr>
</table>

</span><![endif]><span lang=EN-US><span style='color:#221F1F;mso-font-width:
80%'>C2 C3 C4</span></span></h4>

<span lang=EN-US style='font-size:11.0pt;font-family:"Arial",sans-serif;
mso-fareast-font-family:Arial;mso-ansi-language:EN-US;mso-fareast-language:
EN-US;mso-bidi-language:AR-SA'><br clear=all style='mso-column-break-before:
always'>
</span>

<p class=MsoNormal align=right style='text-align:right'><b style='mso-bidi-font-weight:
normal'><span lang=EN-US style='font-size:8.0pt;mso-bidi-font-size:11.0pt;
color:#221F1F;mso-font-width:90%'>Light Touch (LTL)</span></b><b
style='mso-bidi-font-weight:normal'><span lang=EN-US style='font-size:8.0pt;
mso-bidi-font-size:11.0pt'><o:p></o:p></span></b></p>

<p class=MsoBodyText><b style='mso-bidi-font-weight:normal'><span lang=EN-US><o:p>&nbsp;</o:p></span></b></p>

<p class=MsoBodyText><b style='mso-bidi-font-weight:normal'><span lang=EN-US><o:p>&nbsp;</o:p></span></b></p>

<p class=MsoBodyText style='margin-top:.3pt'><b style='mso-bidi-font-weight:
normal'><span lang=EN-US style='font-size:10.0pt;mso-bidi-font-size:9.0pt'><o:p>&nbsp;</o:p></span></b></p>

<p class=MsoNormal style='margin-top:0cm;margin-right:143.55pt;margin-bottom:
0cm;margin-left:9.8pt;margin-bottom:.0001pt;text-align:justify;line-height:
211%'><!--[if gte vml 1]><v:group id="_x0000_s1119" style='position:absolute;
 left:0;text-align:left;margin-left:318.85pt;margin-top:-45.6pt;width:55.3pt;
 height:79.85pt;z-index:15746560;mso-position-horizontal-relative:page'
 coordorigin="6377,-912" coordsize="1106,1597">
 <v:shape id="_x0000_s1134" style='position:absolute;left:6817;top:-193;
  width:409;height:698' coordorigin="6818,-192" coordsize="409,698" o:spt="100"
  adj="0,,0" path="m6868,314r-3,-5l6856,299r-6,-2l6836,297r-6,2l6820,309r-2,5l6818,328r2,6l6830,343r6,3l6850,346r6,-3l6865,334r3,-6l6868,321r,-7xm7143,474r-3,-6l7130,458r-5,-2l7111,456r-6,2l7095,468r-2,6l7093,487r2,6l7105,503r6,2l7125,505r5,-2l7140,493r3,-6l7143,481r,-7xm7226,-174r-2,-6l7214,-190r-6,-2l7194,-192r-5,2l7179,-180r-3,6l7176,-161r3,6l7189,-145r5,2l7208,-143r6,-2l7224,-155r2,-6l7226,-168r,-6xe"
  fillcolor="black" stroked="f">
  <v:stroke joinstyle="round"/>
  <v:formulas/>
  <v:path arrowok="t" o:connecttype="segments"/>
 </v:shape><v:shape id="_x0000_s1133" style='position:absolute;left:6385;top:-904;
  width:1090;height:1581' coordorigin="6385,-904" coordsize="1090,1581" path="m7474,676l7463,570r-18,-63l7416,439r-41,-71l7319,296r-74,-71l7211,184r-19,-45l7185,95r-1,-38l7183,21r6,-44l7210,-69r48,-48l7317,-174r39,-66l7377,-313r8,-75l7381,-462r-12,-69l7352,-592r-41,-83l7237,-758r-77,-62l7081,-863r-78,-27l6926,-903r-74,-1l6781,-896r-65,14l6658,-863r-91,40l6489,-773r-13,22l6478,-726r14,31l6499,-695r-16,29l6463,-616r-10,58l6455,-496r15,62l6482,-399r2,16l6479,-372r-7,20l6458,-314r-22,48l6414,-222r-17,25l6388,-184r-3,15l6427,-121r16,6l6446,-106r,7l6444,-89r-6,16l6437,-57r9,11l6460,-41r17,2l6497,-39r20,1l6532,-38r7,1e"
  filled="f" strokeweight=".28264mm">
  <v:path arrowok="t"/>
 </v:shape><v:shape id="_x0000_s1132" style='position:absolute;left:6450;top:-133;
  width:513;height:308' coordorigin="6451,-132" coordsize="513,308" path="m6460,-41r-7,15l6451,-11r3,12l6464,7r18,3l6475,19r,13l6475,91r5,34l6499,156r39,19l6601,170r77,-23l6750,121r60,-25l6886,59r68,-92l6963,-132e"
  filled="f" strokeweight=".28125mm">
  <v:path arrowok="t"/>
 </v:shape><v:shape id="_x0000_s1131" type="#_x0000_t75" style='position:absolute;
  left:6484;top:-494;width:131;height:148'>
  <v:imagedata src="F081-THHC%20(ASIA)%20American%20Spinal%20Injury%20Association.files/image006.png"
   o:title=""/>
 </v:shape><v:shape id="_x0000_s1130" style='position:absolute;left:6449;top:-143;
  width:29;height:9' coordorigin="6449,-142" coordsize="29,9" path="m6449,-142r12,l6473,-139r4,5e"
  filled="f" strokeweight=".28061mm">
  <v:path arrowok="t"/>
 </v:shape><v:shape id="_x0000_s1129" type="#_x0000_t75" style='position:absolute;
  left:6951;top:-404;width:112;height:301'>
  <v:imagedata src="F081-THHC%20(ASIA)%20American%20Spinal%20Injury%20Association.files/image007.png"
   o:title=""/>
 </v:shape><v:shape id="_x0000_s1128" style='position:absolute;left:6816;top:-860;
  width:274;height:952' coordorigin="6817,-859" coordsize="274,952" path="m7090,-859r-10,81l7065,-693r-19,87l7025,-518r-24,88l6975,-343r-26,85l6921,-177r-27,77l6867,-29r-26,65l6817,93e"
  filled="f" strokeweight=".28347mm">
  <v:path arrowok="t"/>
 </v:shape><v:shape id="_x0000_s1127" style='position:absolute;left:6616;top:139;
  width:126;height:537' coordorigin="6617,139" coordsize="126,537" path="m6701,139r12,86l6731,283r9,35l6742,355r-8,33l6707,435r-39,73l6632,592r-15,84e"
  filled="f" strokeweight=".28356mm">
  <v:path arrowok="t"/>
 </v:shape><v:shape id="_x0000_s1126" style='position:absolute;left:6711;top:-5;
  width:474;height:226' coordorigin="6712,-4" coordsize="474,226" path="m6712,221r70,-4l6847,205r63,-25l6974,142r70,-49l7113,46r51,-36l7185,-4e"
  filled="f" strokeweight=".28097mm">
  <v:path arrowok="t"/>
 </v:shape><v:shape id="_x0000_s1125" style='position:absolute;left:6638;top:209;
  width:592;height:365' coordorigin="6639,210" coordsize="592,365" path="m6639,574r89,-43l6808,490r73,-41l6947,410r62,-40l7066,331r56,-40l7176,251r54,-41e"
  filled="f" strokeweight=".28128mm">
  <v:path arrowok="t"/>
 </v:shape><v:shape id="_x0000_s1124" style='position:absolute;left:6796;top:585;
  width:26;height:91' coordorigin="6796,586" coordsize="26,91" path="m6796,676r3,-25l6805,624r8,-24l6822,586e"
  filled="f" strokeweight=".28347mm">
  <v:path arrowok="t"/>
 </v:shape><v:shape id="_x0000_s1123" type="#_x0000_t75" style='position:absolute;
  left:7286;top:507;width:170;height:177'>
  <v:imagedata src="F081-THHC%20(ASIA)%20American%20Spinal%20Injury%20Association.files/image008.png"
   o:title=""/>
 </v:shape><v:shape id="_x0000_s1122" type="#_x0000_t202" style='position:absolute;
  left:7077;top:-544;width:151;height:114' filled="f" stroked="f">
  <v:textbox style='mso-next-textbox:#_x0000_s1122' inset="0,0,0,0">
   <![if !mso]>
   <table cellpadding=0 cellspacing=0 width="100%">
    <tr>
     <td><![endif]>
     <div>
     <p class=MsoNormal style='line-height:5.65pt;mso-line-height-rule:exactly'><span
     lang=EN-US style='font-size:5.0pt;mso-bidi-font-size:11.0pt;mso-font-width:
     105%'>C2</span><span lang=EN-US style='font-size:5.0pt;mso-bidi-font-size:
     11.0pt'><o:p></o:p></span></p>
     </div>
     <![if !mso]></td>
    </tr>
   </table>
   <![endif]></v:textbox>
 </v:shape><v:shape id="_x0000_s1121" type="#_x0000_t202" style='position:absolute;
  left:6971;top:162;width:151;height:114' filled="f" stroked="f">
  <v:textbox style='mso-next-textbox:#_x0000_s1121' inset="0,0,0,0">
   <![if !mso]>
   <table cellpadding=0 cellspacing=0 width="100%">
    <tr>
     <td><![endif]>
     <div>
     <p class=MsoNormal style='line-height:5.65pt;mso-line-height-rule:exactly'><span
     lang=EN-US style='font-size:5.0pt;mso-bidi-font-size:11.0pt;mso-font-width:
     105%'>C3</span><span lang=EN-US style='font-size:5.0pt;mso-bidi-font-size:
     11.0pt'><o:p></o:p></span></p>
     </div>
     <![if !mso]></td>
    </tr>
   </table>
   <![endif]></v:textbox>
 </v:shape><v:shape id="_x0000_s1120" type="#_x0000_t202" style='position:absolute;
  left:7108;top:533;width:151;height:114' filled="f" stroked="f">
  <v:textbox style='mso-next-textbox:#_x0000_s1120' inset="0,0,0,0">
   <![if !mso]>
   <table cellpadding=0 cellspacing=0 width="100%">
    <tr>
     <td><![endif]>
     <div>
     <p class=MsoNormal style='line-height:5.65pt;mso-line-height-rule:exactly'><span
     lang=EN-US style='font-size:5.0pt;mso-bidi-font-size:11.0pt;mso-font-width:
     105%'>C4</span><span lang=EN-US style='font-size:5.0pt;mso-bidi-font-size:
     11.0pt'><o:p></o:p></span></p>
     </div>
     <![if !mso]></td>
    </tr>
   </table>
   <![endif]></v:textbox>
 </v:shape><w:wrap anchorx="page"/>
</v:group><![endif]--><![if !vml]><span style='mso-ignore:vglayout;position:
absolute;z-index:15746560;left:0px;margin-left:538px;margin-top:350px;
width:94px;height:135px'><img width=75 height=108
src="F081-THHC%20(ASIA)%20American%20Spinal%20Injury%20Association.files/image009.gif"
v:shapes="_x0000_s1119 _x0000_s1134 _x0000_s1133 _x0000_s1132 _x0000_s1131 _x0000_s1130 _x0000_s1129 _x0000_s1128 _x0000_s1127 _x0000_s1126 _x0000_s1125 _x0000_s1124 _x0000_s1123 _x0000_s1122 _x0000_s1121 _x0000_s1120"></span><![endif]><!--[if gte vml 1]><v:shape
 id="_x0000_s1118" type="#_x0000_t202" style='position:absolute;left:0;
 text-align:left;margin-left:489.25pt;margin-top:-28.55pt;width:36.8pt;
 height:386.6pt;z-index:15758336;mso-position-horizontal-relative:page'
 filled="f" stroked="f">
 <v:textbox style='mso-next-textbox:#_x0000_s1118' inset="0,0,0,0"/>
 <w:wrap anchorx="page"/>
</v:shape><![endif]--><![if !vml]><span style='mso-ignore:vglayout;position:
absolute;z-index:15758336;left:0px;margin-left:823px;margin-top:380px;
width:65px;height:648px'>

<table cellpadding=0 cellspacing=0>
 <tr>
  <td width=65 height=648 style='vertical-align:top'><![endif]><![if !mso]><span
  style='position:absolute;mso-ignore:vglayout;left:0pt;z-index:15758336'>
  <table cellpadding=0 cellspacing=0 width="100%">
   <tr>
    <td><![endif]>
    <div v:shape="_x0000_s1118" style='padding:0pt 0pt 0pt 0pt' class=shape>
    <table class=MsoNormalTable border=1 cellspacing=0 cellpadding=0
     style='margin-left:.75pt;border-collapse:collapse;mso-table-layout-alt:
     fixed;border:none;mso-border-alt:solid black 1.0pt;mso-yfti-tbllook:480;
     mso-padding-alt:0cm 0cm 0cm 0cm;mso-border-insideh:1.0pt solid black;
     mso-border-insidev:1.0pt solid black'>
     <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;height:11.95pt'>
      <td width=46 valign=top style='width:34.5pt;border:solid black 1.0pt;
      padding:0cm 0cm 0cm 0cm;height:11.95pt'>
      <p class=TableParagraph><span lang=EN-US style='font-size:8.0pt;
      mso-bidi-font-size:11.0pt;font-family:"Times New Roman",serif;mso-hansi-font-family:
      Arial;mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
      </td>
     </tr>
     <tr style='mso-yfti-irow:1;height:12.0pt'>
      <td width=46 valign=top style='width:34.5pt;border:solid black 1.0pt;
      border-top:none;mso-border-top-alt:solid black 1.0pt;padding:0cm 0cm 0cm 0cm;
      height:12.0pt'>
      <p class=TableParagraph><span lang=EN-US style='font-size:8.0pt;
      mso-bidi-font-size:11.0pt;font-family:"Times New Roman",serif;mso-hansi-font-family:
      Arial;mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
      </td>
     </tr>
     <tr style='mso-yfti-irow:2;height:12.0pt'>
      <td width=46 valign=top style='width:34.5pt;border:solid black 1.0pt;
      border-top:none;mso-border-top-alt:solid black 1.0pt;padding:0cm 0cm 0cm 0cm;
      height:12.0pt'>
      <p class=TableParagraph><span lang=EN-US style='font-size:8.0pt;
      mso-bidi-font-size:11.0pt;font-family:"Times New Roman",serif;mso-hansi-font-family:
      Arial;mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
      </td>
     </tr>
     <tr style='mso-yfti-irow:3;height:11.95pt'>
      <td width=46 valign=top style='width:34.5pt;border:solid black 1.0pt;
      border-top:none;mso-border-top-alt:solid black 1.0pt;padding:0cm 0cm 0cm 0cm;
      height:11.95pt'>
      <p class=TableParagraph><span lang=EN-US style='font-size:8.0pt;
      mso-bidi-font-size:11.0pt;font-family:"Times New Roman",serif;mso-hansi-font-family:
      Arial;mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
      </td>
     </tr>
     <tr style='mso-yfti-irow:4;height:12.0pt'>
      <td width=46 valign=top style='width:34.5pt;border:solid black 1.0pt;
      border-top:none;mso-border-top-alt:solid black 1.0pt;padding:0cm 0cm 0cm 0cm;
      height:12.0pt'>
      <p class=TableParagraph><span lang=EN-US style='font-size:8.0pt;
      mso-bidi-font-size:11.0pt;font-family:"Times New Roman",serif;mso-hansi-font-family:
      Arial;mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
      </td>
     </tr>
     <tr style='mso-yfti-irow:5;height:12.0pt'>
      <td width=46 valign=top style='width:34.5pt;border:solid black 1.0pt;
      border-top:none;mso-border-top-alt:solid black 1.0pt;padding:0cm 0cm 0cm 0cm;
      height:12.0pt'>
      <p class=TableParagraph><span lang=EN-US style='font-size:8.0pt;
      mso-bidi-font-size:11.0pt;font-family:"Times New Roman",serif;mso-hansi-font-family:
      Arial;mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
      </td>
     </tr>
     <tr style='mso-yfti-irow:6;height:12.0pt'>
      <td width=46 valign=top style='width:34.5pt;border:solid black 1.0pt;
      border-top:none;mso-border-top-alt:solid black 1.0pt;padding:0cm 0cm 0cm 0cm;
      height:12.0pt'>
      <p class=TableParagraph><span lang=EN-US style='font-size:8.0pt;
      mso-bidi-font-size:11.0pt;font-family:"Times New Roman",serif;mso-hansi-font-family:
      Arial;mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
      </td>
     </tr>
     <tr style='mso-yfti-irow:7;height:12.0pt'>
      <td width=46 valign=top style='width:34.5pt;border:solid black 1.0pt;
      border-top:none;mso-border-top-alt:solid black 1.0pt;padding:0cm 0cm 0cm 0cm;
      height:12.0pt'>
      <p class=TableParagraph><span lang=EN-US style='font-size:8.0pt;
      mso-bidi-font-size:11.0pt;font-family:"Times New Roman",serif;mso-hansi-font-family:
      Arial;mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
      </td>
     </tr>
     <tr style='mso-yfti-irow:8;height:11.95pt'>
      <td width=46 valign=top style='width:34.5pt;border:solid black 1.0pt;
      border-top:none;mso-border-top-alt:solid black 1.0pt;padding:0cm 0cm 0cm 0cm;
      height:11.95pt'>
      <p class=TableParagraph><span lang=EN-US style='font-size:8.0pt;
      mso-bidi-font-size:11.0pt;font-family:"Times New Roman",serif;mso-hansi-font-family:
      Arial;mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
      </td>
     </tr>
     <tr style='mso-yfti-irow:9;height:12.0pt'>
      <td width=46 valign=top style='width:34.5pt;border:solid black 1.0pt;
      border-top:none;mso-border-top-alt:solid black 1.0pt;padding:0cm 0cm 0cm 0cm;
      height:12.0pt'>
      <p class=TableParagraph><span lang=EN-US style='font-size:8.0pt;
      mso-bidi-font-size:11.0pt;font-family:"Times New Roman",serif;mso-hansi-font-family:
      Arial;mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
      </td>
     </tr>
     <tr style='mso-yfti-irow:10;height:12.0pt'>
      <td width=46 valign=top style='width:34.5pt;border:solid black 1.0pt;
      border-top:none;mso-border-top-alt:solid black 1.0pt;padding:0cm 0cm 0cm 0cm;
      height:12.0pt'>
      <p class=TableParagraph><span lang=EN-US style='font-size:8.0pt;
      mso-bidi-font-size:11.0pt;font-family:"Times New Roman",serif;mso-hansi-font-family:
      Arial;mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
      </td>
     </tr>
     <tr style='mso-yfti-irow:11;height:12.0pt'>
      <td width=46 valign=top style='width:34.5pt;border:solid black 1.0pt;
      border-top:none;mso-border-top-alt:solid black 1.0pt;padding:0cm 0cm 0cm 0cm;
      height:12.0pt'>
      <p class=TableParagraph><span lang=EN-US style='font-size:8.0pt;
      mso-bidi-font-size:11.0pt;font-family:"Times New Roman",serif;mso-hansi-font-family:
      Arial;mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
      </td>
     </tr>
     <tr style='mso-yfti-irow:12;height:12.0pt'>
      <td width=46 valign=top style='width:34.5pt;border:solid black 1.0pt;
      border-top:none;mso-border-top-alt:solid black 1.0pt;padding:0cm 0cm 0cm 0cm;
      height:12.0pt'>
      <p class=TableParagraph><span lang=EN-US style='font-size:8.0pt;
      mso-bidi-font-size:11.0pt;font-family:"Times New Roman",serif;mso-hansi-font-family:
      Arial;mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
      </td>
     </tr>
     <tr style='mso-yfti-irow:13;height:11.95pt'>
      <td width=46 valign=top style='width:34.5pt;border:solid black 1.0pt;
      border-top:none;mso-border-top-alt:solid black 1.0pt;padding:0cm 0cm 0cm 0cm;
      height:11.95pt'>
      <p class=TableParagraph><span lang=EN-US style='font-size:8.0pt;
      mso-bidi-font-size:11.0pt;font-family:"Times New Roman",serif;mso-hansi-font-family:
      Arial;mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
      </td>
     </tr>
     <tr style='mso-yfti-irow:14;height:12.0pt'>
      <td width=46 valign=top style='width:34.5pt;border:solid black 1.0pt;
      border-top:none;mso-border-top-alt:solid black 1.0pt;padding:0cm 0cm 0cm 0cm;
      height:12.0pt'>
      <p class=TableParagraph><span lang=EN-US style='font-size:8.0pt;
      mso-bidi-font-size:11.0pt;font-family:"Times New Roman",serif;mso-hansi-font-family:
      Arial;mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
      </td>
     </tr>
     <tr style='mso-yfti-irow:15;height:12.0pt'>
      <td width=46 valign=top style='width:34.5pt;border:solid black 1.0pt;
      border-top:none;mso-border-top-alt:solid black 1.0pt;padding:0cm 0cm 0cm 0cm;
      height:12.0pt'>
      <p class=TableParagraph><span lang=EN-US style='font-size:8.0pt;
      mso-bidi-font-size:11.0pt;font-family:"Times New Roman",serif;mso-hansi-font-family:
      Arial;mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
      </td>
     </tr>
     <tr style='mso-yfti-irow:16;height:12.0pt'>
      <td width=46 valign=top style='width:34.5pt;border:solid black 1.0pt;
      border-top:none;mso-border-top-alt:solid black 1.0pt;padding:0cm 0cm 0cm 0cm;
      height:12.0pt'>
      <p class=TableParagraph><span lang=EN-US style='font-size:8.0pt;
      mso-bidi-font-size:11.0pt;font-family:"Times New Roman",serif;mso-hansi-font-family:
      Arial;mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
      </td>
     </tr>
     <tr style='mso-yfti-irow:17;height:12.0pt'>
      <td width=46 valign=top style='width:34.5pt;border:solid black 1.0pt;
      border-top:none;mso-border-top-alt:solid black 1.0pt;padding:0cm 0cm 0cm 0cm;
      height:12.0pt'>
      <p class=TableParagraph><span lang=EN-US style='font-size:8.0pt;
      mso-bidi-font-size:11.0pt;font-family:"Times New Roman",serif;mso-hansi-font-family:
      Arial;mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
      </td>
     </tr>
     <tr style='mso-yfti-irow:18;height:11.95pt'>
      <td width=46 valign=top style='width:34.5pt;border:solid black 1.0pt;
      border-top:none;mso-border-top-alt:solid black 1.0pt;padding:0cm 0cm 0cm 0cm;
      height:11.95pt'>
      <p class=TableParagraph><span lang=EN-US style='font-size:8.0pt;
      mso-bidi-font-size:11.0pt;font-family:"Times New Roman",serif;mso-hansi-font-family:
      Arial;mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
      </td>
     </tr>
     <tr style='mso-yfti-irow:19;height:12.0pt'>
      <td width=46 valign=top style='width:34.5pt;border:solid black 1.0pt;
      border-top:none;mso-border-top-alt:solid black 1.0pt;padding:0cm 0cm 0cm 0cm;
      height:12.0pt'>
      <p class=TableParagraph><span lang=EN-US style='font-size:8.0pt;
      mso-bidi-font-size:11.0pt;font-family:"Times New Roman",serif;mso-hansi-font-family:
      Arial;mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
      </td>
     </tr>
     <tr style='mso-yfti-irow:20;height:12.0pt'>
      <td width=46 valign=top style='width:34.5pt;border:solid black 1.0pt;
      border-top:none;mso-border-top-alt:solid black 1.0pt;padding:0cm 0cm 0cm 0cm;
      height:12.0pt'>
      <p class=TableParagraph><span lang=EN-US style='font-size:8.0pt;
      mso-bidi-font-size:11.0pt;font-family:"Times New Roman",serif;mso-hansi-font-family:
      Arial;mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
      </td>
     </tr>
     <tr style='mso-yfti-irow:21;height:12.0pt'>
      <td width=46 valign=top style='width:34.5pt;border:solid black 1.0pt;
      border-top:none;mso-border-top-alt:solid black 1.0pt;padding:0cm 0cm 0cm 0cm;
      height:12.0pt'>
      <p class=TableParagraph><span lang=EN-US style='font-size:8.0pt;
      mso-bidi-font-size:11.0pt;font-family:"Times New Roman",serif;mso-hansi-font-family:
      Arial;mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
      </td>
     </tr>
     <tr style='mso-yfti-irow:22;height:12.0pt'>
      <td width=46 valign=top style='width:34.5pt;border:solid black 1.0pt;
      border-top:none;mso-border-top-alt:solid black 1.0pt;padding:0cm 0cm 0cm 0cm;
      height:12.0pt'>
      <p class=TableParagraph><span lang=EN-US style='font-size:8.0pt;
      mso-bidi-font-size:11.0pt;font-family:"Times New Roman",serif;mso-hansi-font-family:
      Arial;mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
      </td>
     </tr>
     <tr style='mso-yfti-irow:23;height:11.95pt'>
      <td width=46 valign=top style='width:34.5pt;border:solid black 1.0pt;
      border-top:none;mso-border-top-alt:solid black 1.0pt;padding:0cm 0cm 0cm 0cm;
      height:11.95pt'>
      <p class=TableParagraph><span lang=EN-US style='font-size:8.0pt;
      mso-bidi-font-size:11.0pt;font-family:"Times New Roman",serif;mso-hansi-font-family:
      Arial;mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
      </td>
     </tr>
     <tr style='mso-yfti-irow:24;height:12.0pt'>
      <td width=46 valign=top style='width:34.5pt;border:solid black 1.0pt;
      border-top:none;mso-border-top-alt:solid black 1.0pt;padding:0cm 0cm 0cm 0cm;
      height:12.0pt'>
      <p class=TableParagraph><span lang=EN-US style='font-size:8.0pt;
      mso-bidi-font-size:11.0pt;font-family:"Times New Roman",serif;mso-hansi-font-family:
      Arial;mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
      </td>
     </tr>
     <tr style='mso-yfti-irow:25;height:11.95pt'>
      <td width=46 valign=top style='width:34.5pt;border:solid black 1.0pt;
      border-top:none;mso-border-top-alt:solid black 1.0pt;padding:0cm 0cm 0cm 0cm;
      height:11.95pt'>
      <p class=TableParagraph><span lang=EN-US style='font-size:8.0pt;
      mso-bidi-font-size:11.0pt;font-family:"Times New Roman",serif;mso-hansi-font-family:
      Arial;mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
      </td>
     </tr>
     <tr style='mso-yfti-irow:26;height:11.75pt'>
      <td width=46 valign=top style='width:34.5pt;border-top:none;border-left:
      solid black 1.0pt;border-bottom:solid black 1.5pt;border-right:solid black 1.0pt;
      mso-border-top-alt:solid black 1.0pt;padding:0cm 0cm 0cm 0cm;height:11.75pt'>
      <p class=TableParagraph><span lang=EN-US style='font-size:8.0pt;
      mso-bidi-font-size:11.0pt;font-family:"Times New Roman",serif;mso-hansi-font-family:
      Arial;mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
      </td>
     </tr>
     <tr style='mso-yfti-irow:27;height:12.55pt'>
      <td width=46 valign=top style='width:34.5pt;border-top:none;border-left:
      solid black 1.5pt;border-bottom:double black 1.5pt;border-right:solid black 1.5pt;
      mso-border-top-alt:solid black 1.5pt;mso-border-alt:solid black 1.5pt;
      mso-border-bottom-alt:thin-thick-medium-gap black 1.5pt;padding:0cm 0cm 0cm 0cm;
      height:12.55pt'>
      <p class=TableParagraph><span lang=EN-US style='font-size:8.0pt;
      mso-bidi-font-size:11.0pt;font-family:"Times New Roman",serif;mso-hansi-font-family:
      Arial;mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
      </td>
     </tr>
     <tr style='mso-yfti-irow:28;mso-yfti-lastrow:yes;height:18.2pt'>
      <td width=46 valign=top style='width:34.5pt;border:solid black 1.0pt;
      border-top:none;mso-border-top-alt:thick-thin-medium-gap black 1.5pt;
      padding:0cm 0cm 0cm 0cm;height:18.2pt'>
      <p class=TableParagraph><span lang=EN-US style='font-size:8.0pt;
      mso-bidi-font-size:11.0pt;font-family:"Times New Roman",serif;mso-hansi-font-family:
      Arial;mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
      </td>
     </tr>
    </table>
    <p class=MsoBodyText><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
    </div>
    <![if !mso]></td>
   </tr>
  </table>
  </span><![endif]><![if !mso & !vml]>&nbsp;<![endif]><![if !vml]></td>
 </tr>
</table>

</span><![endif]><span lang=EN-US style='font-size:5.0pt;mso-bidi-font-size:
11.0pt;line-height:211%'>C2 C3 C4<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:42.85pt;line-height:4.4pt;mso-line-height-rule:
exactly'><span lang=EN-US style='font-size:5.0pt;mso-bidi-font-size:11.0pt;
mso-font-width:105%'>T2</span><span lang=EN-US style='font-size:5.0pt;
mso-bidi-font-size:11.0pt'><o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:10.2pt;line-height:5.35pt;mso-line-height-rule:
exactly'><!--[if gte vml 1]><v:group id="_x0000_s1109" style='position:absolute;
 left:0;text-align:left;margin-left:326.1pt;margin-top:9.2pt;width:61.35pt;
 height:61.2pt;z-index:-1660439552;mso-position-horizontal-relative:page'
 coordorigin="6522,184" coordsize="1227,1224">
 <v:shape id="_x0000_s1117" type="#_x0000_t75" style='position:absolute;left:7197;
  top:889;width:178;height:240'>
  <v:imagedata src="F081-THHC%20(ASIA)%20American%20Spinal%20Injury%20Association.files/image010.png"
   o:title=""/>
 </v:shape><v:shape id="_x0000_s1116" style='position:absolute;left:6761;top:728;
  width:187;height:472' coordorigin="6761,729" coordsize="187,472" path="m6776,729r-5,19l6767,764r-4,17l6761,801r4,29l6774,855r11,24l6796,907r14,34l6824,970r13,29l6849,1032r7,34l6860,1096r4,29l6869,1158r30,42l6908,1199r38,-49l6948,1138r-1,-13l6947,1109r,-15l6947,1079r,-15l6947,1047r-3,-19l6942,1011r-2,-17l6937,975e"
  filled="f" strokeweight=".28328mm">
  <v:path arrowok="t"/>
 </v:shape><v:shape id="_x0000_s1115" style='position:absolute;left:6844;top:569;
  width:463;height:711' coordorigin="6844,570" coordsize="463,711" o:spt="100"
  adj="0,,0" path="m6844,570r38,46l6915,657r33,40l6986,743r35,44l7052,825r31,39l7117,907r30,41l7174,983r24,36l7225,1061r18,31l7258,1120r15,28l7288,1182r9,18l7300,1209r1,6l7303,1225r1,16l7307,1257r-4,7l7293,1272r1,8l7273,1278r-13,-3l7254,1266r-10,-12l7231,1243r-11,-11l7211,1219r-11,-13l7188,1188r-11,-15l7165,1159r-14,-16l7131,1115r-18,-24l7094,1068r-21,-26m6844,570r40,17l6924,602r37,3l6996,589e"
  filled="f" strokeweight=".28206mm">
  <v:stroke joinstyle="round"/>
  <v:formulas/>
  <v:path arrowok="t" o:connecttype="segments"/>
 </v:shape><v:shape id="_x0000_s1114" style='position:absolute;left:6590;top:256;
  width:792;height:1051' coordorigin="6591,257" coordsize="792,1051" o:spt="100"
  adj="0,,0" path="m6591,546r50,48l6685,637r43,43l6776,729t176,327l6968,1075r14,16l6995,1108r15,21l7025,1153r12,22l7049,1197r15,23l7077,1241r7,12l7089,1262r9,11l7109,1286r7,9l7126,1301r16,6l7156,1304r10,-12l7171,1275r,-16l7167,1238r-2,-10l7162,1222r-6,-11l7145,1188r-10,-21l7127,1147r-10,-23l7102,1096r-14,-25l7074,1046r-15,-28l7037,976r-18,-36l7000,902r-19,-43l6956,806r-20,-46l6916,713r-23,-52l6871,618r-18,-37l6833,544r-23,-42l6780,453r-28,-43l6722,367r-34,-48m6830,257r36,70l6897,389r28,61l6955,513r36,71l7023,613r29,26l7080,665r32,30l7155,733r38,33l7230,802r39,42l7299,879r27,32l7350,945r21,39l7381,1003r1,6l7379,1011r-3,7l7378,1025r-1,6l7371,1037r-2,8l7365,1047r-4,5e"
  filled="f" strokeweight=".28206mm">
  <v:stroke joinstyle="round"/>
  <v:formulas/>
  <v:path arrowok="t" o:connecttype="segments"/>
 </v:shape><v:shape id="_x0000_s1113" style='position:absolute;left:6874;top:867;
  width:409;height:268' coordorigin="6874,867" coordsize="409,268" o:spt="100"
  adj="0,,0" path="m6927,1051r-12,-12l6900,1039r-14,l6874,1051r,30l6886,1093r29,l6927,1081r,-30xm7216,1093r-11,-12l7190,1081r-14,l7164,1093r,30l7176,1135r29,l7216,1123r,-30xm7283,879r-12,-12l7257,867r-15,l7231,879r,30l7242,922r29,l7283,909r,-30xe"
  fillcolor="black" stroked="f">
  <v:stroke joinstyle="round"/>
  <v:formulas/>
  <v:path arrowok="t" o:connecttype="segments"/>
 </v:shape><v:shape id="_x0000_s1112" type="#_x0000_t202" style='position:absolute;
  left:7585;top:183;width:140;height:990' filled="f" stroked="f">
  <v:textbox style='mso-next-textbox:#_x0000_s1112' inset="0,0,0,0">
   <![if !mso]>
   <table cellpadding=0 cellspacing=0 width="100%">
    <tr>
     <td><![endif]>
     <div>
     <p class=MsoNormal style='margin-right:.9pt;text-align:justify;line-height:
     151%'><span lang=EN-US style='font-size:5.0pt;mso-bidi-font-size:11.0pt;
     line-height:151%'>T4 T5 T6<o:p></o:p></span></p>
     <p class=MsoNormal style='line-height:5.35pt;mso-line-height-rule:exactly'><span
     lang=EN-US style='font-size:5.0pt;mso-bidi-font-size:11.0pt;mso-font-width:
     105%'>T7</span><span lang=EN-US style='font-size:5.0pt;mso-bidi-font-size:
     11.0pt'><o:p></o:p></span></p>
     <p class=MsoNormal style='margin-top:.15pt;margin-right:.15pt;margin-bottom:
     0cm;margin-left:0cm;margin-bottom:.0001pt;line-height:9.3pt;mso-line-height-rule:
     exactly'><span lang=EN-US style='font-size:5.0pt;mso-bidi-font-size:11.0pt'>T8
     T9<o:p></o:p></span></p>
     </div>
     <![if !mso]></td>
    </tr>
   </table>
   <![endif]></v:textbox>
 </v:shape><v:shape id="_x0000_s1111" type="#_x0000_t202" style='position:absolute;
  left:6521;top:1226;width:379;height:114' filled="f" stroked="f">
  <v:textbox style='mso-next-textbox:#_x0000_s1111' inset="0,0,0,0">
   <![if !mso]>
   <table cellpadding=0 cellspacing=0 width="100%">
    <tr>
     <td><![endif]>
     <div>
     <p class=MsoNormal style='line-height:5.65pt;mso-line-height-rule:exactly'><span
     lang=EN-US style='font-size:5.0pt;mso-bidi-font-size:11.0pt;mso-font-width:
     105%'>Dorsum</span><span lang=EN-US style='font-size:5.0pt;mso-bidi-font-size:
     11.0pt'><o:p></o:p></span></p>
     </div>
     <![if !mso]></td>
    </tr>
   </table>
   <![endif]></v:textbox>
 </v:shape><v:shape id="_x0000_s1110" type="#_x0000_t202" style='position:absolute;
  left:7551;top:1294;width:197;height:114' filled="f" stroked="f">
  <v:textbox style='mso-next-textbox:#_x0000_s1110' inset="0,0,0,0">
   <![if !mso]>
   <table cellpadding=0 cellspacing=0 width="100%">
    <tr>
     <td><![endif]>
     <div>
     <p class=MsoNormal style='line-height:5.65pt;mso-line-height-rule:exactly'><span
     lang=EN-US style='font-size:5.0pt;mso-bidi-font-size:11.0pt;mso-font-width:
     105%'>T10</span><span lang=EN-US style='font-size:5.0pt;mso-bidi-font-size:
     11.0pt'><o:p></o:p></span></p>
     </div>
     <![if !mso]></td>
    </tr>
   </table>
   <![endif]></v:textbox>
 </v:shape><w:wrap anchorx="page"/>
</v:group><![endif]--><![if !vml]><span style='mso-ignore:vglayout;position:
absolute;z-index:-1660439552;left:0px;margin-left:551px;margin-top:449px;
width:106px;height:106px'><img width=85 height=85
src="F081-THHC%20(ASIA)%20American%20Spinal%20Injury%20Association.files/image011.gif"
v:shapes="_x0000_s1109 _x0000_s1117 _x0000_s1116 _x0000_s1115 _x0000_s1114 _x0000_s1113 _x0000_s1112 _x0000_s1111 _x0000_s1110"></span><![endif]><span
lang=EN-US style='font-size:5.0pt;mso-bidi-font-size:11.0pt;mso-font-width:
105%'>T3</span><span lang=EN-US style='font-size:5.0pt;mso-bidi-font-size:11.0pt'><o:p></o:p></span></p>

<span lang=EN-US style='font-size:11.0pt;font-family:"Arial",sans-serif;
mso-fareast-font-family:Arial;mso-ansi-language:EN-US;mso-fareast-language:
EN-US;mso-bidi-language:AR-SA'><br clear=all style='mso-column-break-before:
always'>
</span>

<p class=MsoNormal style='margin-left:3.2pt'><b style='mso-bidi-font-weight:
normal'><span lang=EN-US style='font-size:8.0pt;mso-bidi-font-size:11.0pt;
color:#221F1F;mso-font-width:90%'>Pin Prick (PPL)</span></b><b
style='mso-bidi-font-weight:normal'><span lang=EN-US style='font-size:8.0pt;
mso-bidi-font-size:11.0pt'><o:p></o:p></span></b></p>

<h4 style='margin-top:3.9pt;margin-right:1.9pt;margin-bottom:0cm;margin-left:
46.65pt;margin-bottom:.0001pt;text-align:justify;line-height:102%'><!--[if gte vml 1]><v:shape
 id="_x0000_s1108" type="#_x0000_t202" style='position:absolute;left:0;
 text-align:left;margin-left:535.45pt;margin-top:3.95pt;width:36.8pt;height:386.6pt;
 z-index:15758848;mso-position-horizontal-relative:page' filled="f" stroked="f">
 <v:textbox style='mso-next-textbox:#_x0000_s1108' inset="0,0,0,0"/>
 <w:wrap anchorx="page"/>
</v:shape><![endif]--><![if !vml]><span style='mso-ignore:vglayout;position:
absolute;z-index:15758848;left:0px;margin-left:900px;margin-top:556px;
width:65px;height:649px'>

<table cellpadding=0 cellspacing=0>
 <tr>
  <td width=65 height=649 style='vertical-align:top'><![endif]><![if !mso]><span
  style='position:absolute;mso-ignore:vglayout;left:0pt;z-index:15758848'>
  <table cellpadding=0 cellspacing=0 width="100%">
   <tr>
    <td><![endif]>
    <div v:shape="_x0000_s1108" style='padding:0pt 0pt 0pt 0pt' class=shape>
    <table class=MsoNormalTable border=1 cellspacing=0 cellpadding=0
     style='margin-left:.75pt;border-collapse:collapse;mso-table-layout-alt:
     fixed;border:none;mso-border-alt:solid black 1.0pt;mso-yfti-tbllook:480;
     mso-padding-alt:0cm 0cm 0cm 0cm;mso-border-insideh:1.0pt solid black;
     mso-border-insidev:1.0pt solid black'>
     <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;height:11.95pt'>
      <td width=46 valign=top style='width:34.5pt;border:solid black 1.0pt;
      background:#DBDCDE;padding:0cm 0cm 0cm 0cm;height:11.95pt'>
      <p class=TableParagraph><span lang=EN-US style='font-size:8.0pt;
      mso-bidi-font-size:11.0pt;font-family:"Times New Roman",serif;mso-hansi-font-family:
      Arial;mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
      </td>
     </tr>
     <tr style='mso-yfti-irow:1;height:12.0pt'>
      <td width=46 valign=top style='width:34.5pt;border:solid black 1.0pt;
      border-top:none;mso-border-top-alt:solid black 1.0pt;background:#DBDCDE;
      padding:0cm 0cm 0cm 0cm;height:12.0pt'>
      <p class=TableParagraph><span lang=EN-US style='font-size:8.0pt;
      mso-bidi-font-size:11.0pt;font-family:"Times New Roman",serif;mso-hansi-font-family:
      Arial;mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
      </td>
     </tr>
     <tr style='mso-yfti-irow:2;height:12.0pt'>
      <td width=46 valign=top style='width:34.5pt;border:solid black 1.0pt;
      border-top:none;mso-border-top-alt:solid black 1.0pt;background:#DBDCDE;
      padding:0cm 0cm 0cm 0cm;height:12.0pt'>
      <p class=TableParagraph><span lang=EN-US style='font-size:8.0pt;
      mso-bidi-font-size:11.0pt;font-family:"Times New Roman",serif;mso-hansi-font-family:
      Arial;mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
      </td>
     </tr>
     <tr style='mso-yfti-irow:3;height:11.95pt'>
      <td width=46 valign=top style='width:34.5pt;border:solid black 1.0pt;
      border-top:none;mso-border-top-alt:solid black 1.0pt;background:#DBDCDE;
      padding:0cm 0cm 0cm 0cm;height:11.95pt'>
      <p class=TableParagraph><span lang=EN-US style='font-size:8.0pt;
      mso-bidi-font-size:11.0pt;font-family:"Times New Roman",serif;mso-hansi-font-family:
      Arial;mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
      </td>
     </tr>
     <tr style='mso-yfti-irow:4;height:12.0pt'>
      <td width=46 valign=top style='width:34.5pt;border:solid black 1.0pt;
      border-top:none;mso-border-top-alt:solid black 1.0pt;background:#DBDCDE;
      padding:0cm 0cm 0cm 0cm;height:12.0pt'>
      <p class=TableParagraph><span lang=EN-US style='font-size:8.0pt;
      mso-bidi-font-size:11.0pt;font-family:"Times New Roman",serif;mso-hansi-font-family:
      Arial;mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
      </td>
     </tr>
     <tr style='mso-yfti-irow:5;height:12.0pt'>
      <td width=46 valign=top style='width:34.5pt;border:solid black 1.0pt;
      border-top:none;mso-border-top-alt:solid black 1.0pt;background:#DBDCDE;
      padding:0cm 0cm 0cm 0cm;height:12.0pt'>
      <p class=TableParagraph><span lang=EN-US style='font-size:8.0pt;
      mso-bidi-font-size:11.0pt;font-family:"Times New Roman",serif;mso-hansi-font-family:
      Arial;mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
      </td>
     </tr>
     <tr style='mso-yfti-irow:6;height:12.0pt'>
      <td width=46 valign=top style='width:34.5pt;border:solid black 1.0pt;
      border-top:none;mso-border-top-alt:solid black 1.0pt;background:#DBDCDE;
      padding:0cm 0cm 0cm 0cm;height:12.0pt'>
      <p class=TableParagraph><span lang=EN-US style='font-size:8.0pt;
      mso-bidi-font-size:11.0pt;font-family:"Times New Roman",serif;mso-hansi-font-family:
      Arial;mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
      </td>
     </tr>
     <tr style='mso-yfti-irow:7;height:12.0pt'>
      <td width=46 valign=top style='width:34.5pt;border:solid black 1.0pt;
      border-top:none;mso-border-top-alt:solid black 1.0pt;background:#DBDCDE;
      padding:0cm 0cm 0cm 0cm;height:12.0pt'>
      <p class=TableParagraph><span lang=EN-US style='font-size:8.0pt;
      mso-bidi-font-size:11.0pt;font-family:"Times New Roman",serif;mso-hansi-font-family:
      Arial;mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
      </td>
     </tr>
     <tr style='mso-yfti-irow:8;height:11.95pt'>
      <td width=46 valign=top style='width:34.5pt;border:solid black 1.0pt;
      border-top:none;mso-border-top-alt:solid black 1.0pt;background:#DBDCDE;
      padding:0cm 0cm 0cm 0cm;height:11.95pt'>
      <p class=TableParagraph><span lang=EN-US style='font-size:8.0pt;
      mso-bidi-font-size:11.0pt;font-family:"Times New Roman",serif;mso-hansi-font-family:
      Arial;mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
      </td>
     </tr>
     <tr style='mso-yfti-irow:9;height:12.0pt'>
      <td width=46 valign=top style='width:34.5pt;border:solid black 1.0pt;
      border-top:none;mso-border-top-alt:solid black 1.0pt;background:#DBDCDE;
      padding:0cm 0cm 0cm 0cm;height:12.0pt'>
      <p class=TableParagraph><span lang=EN-US style='font-size:8.0pt;
      mso-bidi-font-size:11.0pt;font-family:"Times New Roman",serif;mso-hansi-font-family:
      Arial;mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
      </td>
     </tr>
     <tr style='mso-yfti-irow:10;height:12.0pt'>
      <td width=46 valign=top style='width:34.5pt;border:solid black 1.0pt;
      border-top:none;mso-border-top-alt:solid black 1.0pt;background:#DBDCDE;
      padding:0cm 0cm 0cm 0cm;height:12.0pt'>
      <p class=TableParagraph><span lang=EN-US style='font-size:8.0pt;
      mso-bidi-font-size:11.0pt;font-family:"Times New Roman",serif;mso-hansi-font-family:
      Arial;mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
      </td>
     </tr>
     <tr style='mso-yfti-irow:11;height:12.0pt'>
      <td width=46 valign=top style='width:34.5pt;border:solid black 1.0pt;
      border-top:none;mso-border-top-alt:solid black 1.0pt;background:#DBDCDE;
      padding:0cm 0cm 0cm 0cm;height:12.0pt'>
      <p class=TableParagraph><span lang=EN-US style='font-size:8.0pt;
      mso-bidi-font-size:11.0pt;font-family:"Times New Roman",serif;mso-hansi-font-family:
      Arial;mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
      </td>
     </tr>
     <tr style='mso-yfti-irow:12;height:12.0pt'>
      <td width=46 valign=top style='width:34.5pt;border:solid black 1.0pt;
      border-top:none;mso-border-top-alt:solid black 1.0pt;background:#DBDCDE;
      padding:0cm 0cm 0cm 0cm;height:12.0pt'>
      <p class=TableParagraph><span lang=EN-US style='font-size:8.0pt;
      mso-bidi-font-size:11.0pt;font-family:"Times New Roman",serif;mso-hansi-font-family:
      Arial;mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
      </td>
     </tr>
     <tr style='mso-yfti-irow:13;height:11.95pt'>
      <td width=46 valign=top style='width:34.5pt;border:solid black 1.0pt;
      border-top:none;mso-border-top-alt:solid black 1.0pt;background:#DBDCDE;
      padding:0cm 0cm 0cm 0cm;height:11.95pt'>
      <p class=TableParagraph><span lang=EN-US style='font-size:8.0pt;
      mso-bidi-font-size:11.0pt;font-family:"Times New Roman",serif;mso-hansi-font-family:
      Arial;mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
      </td>
     </tr>
     <tr style='mso-yfti-irow:14;height:12.0pt'>
      <td width=46 valign=top style='width:34.5pt;border:solid black 1.0pt;
      border-top:none;mso-border-top-alt:solid black 1.0pt;background:#DBDCDE;
      padding:0cm 0cm 0cm 0cm;height:12.0pt'>
      <p class=TableParagraph><span lang=EN-US style='font-size:8.0pt;
      mso-bidi-font-size:11.0pt;font-family:"Times New Roman",serif;mso-hansi-font-family:
      Arial;mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
      </td>
     </tr>
     <tr style='mso-yfti-irow:15;height:12.0pt'>
      <td width=46 valign=top style='width:34.5pt;border:solid black 1.0pt;
      border-top:none;mso-border-top-alt:solid black 1.0pt;background:#DBDCDE;
      padding:0cm 0cm 0cm 0cm;height:12.0pt'>
      <p class=TableParagraph><span lang=EN-US style='font-size:8.0pt;
      mso-bidi-font-size:11.0pt;font-family:"Times New Roman",serif;mso-hansi-font-family:
      Arial;mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
      </td>
     </tr>
     <tr style='mso-yfti-irow:16;height:12.0pt'>
      <td width=46 valign=top style='width:34.5pt;border:solid black 1.0pt;
      border-top:none;mso-border-top-alt:solid black 1.0pt;background:#DBDCDE;
      padding:0cm 0cm 0cm 0cm;height:12.0pt'>
      <p class=TableParagraph><span lang=EN-US style='font-size:8.0pt;
      mso-bidi-font-size:11.0pt;font-family:"Times New Roman",serif;mso-hansi-font-family:
      Arial;mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
      </td>
     </tr>
     <tr style='mso-yfti-irow:17;height:12.0pt'>
      <td width=46 valign=top style='width:34.5pt;border:solid black 1.0pt;
      border-top:none;mso-border-top-alt:solid black 1.0pt;background:#DBDCDE;
      padding:0cm 0cm 0cm 0cm;height:12.0pt'>
      <p class=TableParagraph><span lang=EN-US style='font-size:8.0pt;
      mso-bidi-font-size:11.0pt;font-family:"Times New Roman",serif;mso-hansi-font-family:
      Arial;mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
      </td>
     </tr>
     <tr style='mso-yfti-irow:18;height:11.95pt'>
      <td width=46 valign=top style='width:34.5pt;border:solid black 1.0pt;
      border-top:none;mso-border-top-alt:solid black 1.0pt;background:#DBDCDE;
      padding:0cm 0cm 0cm 0cm;height:11.95pt'>
      <p class=TableParagraph><span lang=EN-US style='font-size:8.0pt;
      mso-bidi-font-size:11.0pt;font-family:"Times New Roman",serif;mso-hansi-font-family:
      Arial;mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
      </td>
     </tr>
     <tr style='mso-yfti-irow:19;height:12.0pt'>
      <td width=46 valign=top style='width:34.5pt;border:solid black 1.0pt;
      border-top:none;mso-border-top-alt:solid black 1.0pt;background:#DBDCDE;
      padding:0cm 0cm 0cm 0cm;height:12.0pt'>
      <p class=TableParagraph><span lang=EN-US style='font-size:8.0pt;
      mso-bidi-font-size:11.0pt;font-family:"Times New Roman",serif;mso-hansi-font-family:
      Arial;mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
      </td>
     </tr>
     <tr style='mso-yfti-irow:20;height:12.0pt'>
      <td width=46 valign=top style='width:34.5pt;border:solid black 1.0pt;
      border-top:none;mso-border-top-alt:solid black 1.0pt;background:#DBDCDE;
      padding:0cm 0cm 0cm 0cm;height:12.0pt'>
      <p class=TableParagraph><span lang=EN-US style='font-size:8.0pt;
      mso-bidi-font-size:11.0pt;font-family:"Times New Roman",serif;mso-hansi-font-family:
      Arial;mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
      </td>
     </tr>
     <tr style='mso-yfti-irow:21;height:12.0pt'>
      <td width=46 valign=top style='width:34.5pt;border:solid black 1.0pt;
      border-top:none;mso-border-top-alt:solid black 1.0pt;background:#DBDCDE;
      padding:0cm 0cm 0cm 0cm;height:12.0pt'>
      <p class=TableParagraph><span lang=EN-US style='font-size:8.0pt;
      mso-bidi-font-size:11.0pt;font-family:"Times New Roman",serif;mso-hansi-font-family:
      Arial;mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
      </td>
     </tr>
     <tr style='mso-yfti-irow:22;height:12.0pt'>
      <td width=46 valign=top style='width:34.5pt;border:solid black 1.0pt;
      border-top:none;mso-border-top-alt:solid black 1.0pt;background:#DBDCDE;
      padding:0cm 0cm 0cm 0cm;height:12.0pt'>
      <p class=TableParagraph><span lang=EN-US style='font-size:8.0pt;
      mso-bidi-font-size:11.0pt;font-family:"Times New Roman",serif;mso-hansi-font-family:
      Arial;mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
      </td>
     </tr>
     <tr style='mso-yfti-irow:23;height:11.95pt'>
      <td width=46 valign=top style='width:34.5pt;border:solid black 1.0pt;
      border-top:none;mso-border-top-alt:solid black 1.0pt;background:#DBDCDE;
      padding:0cm 0cm 0cm 0cm;height:11.95pt'>
      <p class=TableParagraph><span lang=EN-US style='font-size:8.0pt;
      mso-bidi-font-size:11.0pt;font-family:"Times New Roman",serif;mso-hansi-font-family:
      Arial;mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
      </td>
     </tr>
     <tr style='mso-yfti-irow:24;height:12.0pt'>
      <td width=46 valign=top style='width:34.5pt;border:solid black 1.0pt;
      border-top:none;mso-border-top-alt:solid black 1.0pt;background:#DBDCDE;
      padding:0cm 0cm 0cm 0cm;height:12.0pt'>
      <p class=TableParagraph><span lang=EN-US style='font-size:8.0pt;
      mso-bidi-font-size:11.0pt;font-family:"Times New Roman",serif;mso-hansi-font-family:
      Arial;mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
      </td>
     </tr>
     <tr style='mso-yfti-irow:25;height:11.95pt'>
      <td width=46 valign=top style='width:34.5pt;border:solid black 1.0pt;
      border-top:none;mso-border-top-alt:solid black 1.0pt;background:#DBDCDE;
      padding:0cm 0cm 0cm 0cm;height:11.95pt'>
      <p class=TableParagraph><span lang=EN-US style='font-size:8.0pt;
      mso-bidi-font-size:11.0pt;font-family:"Times New Roman",serif;mso-hansi-font-family:
      Arial;mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
      </td>
     </tr>
     <tr style='mso-yfti-irow:26;height:11.75pt'>
      <td width=46 valign=top style='width:34.5pt;border-top:none;border-left:
      solid black 1.0pt;border-bottom:solid black 1.5pt;border-right:solid black 1.0pt;
      mso-border-top-alt:solid black 1.0pt;background:#DBDCDE;padding:0cm 0cm 0cm 0cm;
      height:11.75pt'>
      <p class=TableParagraph><span lang=EN-US style='font-size:8.0pt;
      mso-bidi-font-size:11.0pt;font-family:"Times New Roman",serif;mso-hansi-font-family:
      Arial;mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
      </td>
     </tr>
     <tr style='mso-yfti-irow:27;height:12.55pt'>
      <td width=46 valign=top style='width:34.5pt;border-top:none;border-left:
      solid black 1.5pt;border-bottom:double black 1.5pt;border-right:solid black 1.5pt;
      mso-border-top-alt:solid black 1.5pt;mso-border-alt:solid black 1.5pt;
      mso-border-bottom-alt:thin-thick-medium-gap black 1.5pt;background:#DBDCDE;
      padding:0cm 0cm 0cm 0cm;height:12.55pt'>
      <p class=TableParagraph><span lang=EN-US style='font-size:8.0pt;
      mso-bidi-font-size:11.0pt;font-family:"Times New Roman",serif;mso-hansi-font-family:
      Arial;mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
      </td>
     </tr>
     <tr style='mso-yfti-irow:28;mso-yfti-lastrow:yes;height:18.2pt'>
      <td width=46 valign=top style='width:34.5pt;border:solid black 1.0pt;
      border-top:none;mso-border-top-alt:thick-thin-medium-gap black 1.5pt;
      padding:0cm 0cm 0cm 0cm;height:18.2pt'>
      <p class=TableParagraph><span lang=EN-US style='font-size:8.0pt;
      mso-bidi-font-size:11.0pt;font-family:"Times New Roman",serif;mso-hansi-font-family:
      Arial;mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
      </td>
     </tr>
    </table>
    <p class=MsoBodyText><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
    </div>
    <![if !mso]></td>
   </tr>
  </table>
  </span><![endif]><![if !mso & !vml]>&nbsp;<![endif]><![if !vml]></td>
 </tr>
</table>

</span><![endif]><!--[if gte vml 1]><v:shape id="_x0000_s1107" type="#_x0000_t202"
 style='position:absolute;left:0;text-align:left;margin-left:578.45pt;
 margin-top:42.45pt;width:31.25pt;height:65.9pt;z-index:15759872;
 mso-position-horizontal-relative:page' filled="f" stroked="f">
 <v:textbox style='mso-next-textbox:#_x0000_s1107' inset="0,0,0,0"/>
 <w:wrap anchorx="page"/>
</v:shape><![endif]--><![if !vml]><span style='mso-ignore:vglayout;position:
absolute;z-index:15759872;left:0px;margin-left:972px;margin-top:621px;
width:56px;height:113px'>

<table cellpadding=0 cellspacing=0>
 <tr>
  <td width=56 height=113 style='vertical-align:top'><![endif]><![if !mso]><span
  style='position:absolute;mso-ignore:vglayout;left:0pt;z-index:15759872'>
  <table cellpadding=0 cellspacing=0 width="100%">
   <tr>
    <td><![endif]>
    <div v:shape="_x0000_s1107" style='padding:0pt 0pt 0pt 0pt' class=shape>
    <table class=MsoNormalTable border=1 cellspacing=0 cellpadding=0
     style='margin-left:.5pt;border-collapse:collapse;mso-table-layout-alt:
     fixed;border:none;mso-border-alt:solid black 1.0pt;mso-yfti-tbllook:480;
     mso-padding-alt:0cm 0cm 0cm 0cm;mso-border-insideh:1.0pt solid black;
     mso-border-insidev:1.0pt solid black'>
     <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;height:11.95pt'>
      <td width=40 valign=top style='width:30.0pt;border:solid black 1.0pt;
      padding:0cm 0cm 0cm 0cm;height:11.95pt'>
      <p class=TableParagraph><span lang=EN-US style='font-size:8.0pt;
      mso-bidi-font-size:11.0pt;font-family:"Times New Roman",serif;mso-hansi-font-family:
      Arial;mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
      </td>
     </tr>
     <tr style='mso-yfti-irow:1;height:12.0pt'>
      <td width=40 valign=top style='width:30.0pt;border:solid black 1.0pt;
      border-top:none;mso-border-top-alt:solid black 1.0pt;padding:0cm 0cm 0cm 0cm;
      height:12.0pt'>
      <p class=TableParagraph><span lang=EN-US style='font-size:8.0pt;
      mso-bidi-font-size:11.0pt;font-family:"Times New Roman",serif;mso-hansi-font-family:
      Arial;mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
      </td>
     </tr>
     <tr style='mso-yfti-irow:2;height:12.0pt'>
      <td width=40 valign=top style='width:30.0pt;border:solid black 1.0pt;
      border-top:none;mso-border-top-alt:solid black 1.0pt;padding:0cm 0cm 0cm 0cm;
      height:12.0pt'>
      <p class=TableParagraph><span lang=EN-US style='font-size:8.0pt;
      mso-bidi-font-size:11.0pt;font-family:"Times New Roman",serif;mso-hansi-font-family:
      Arial;mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
      </td>
     </tr>
     <tr style='mso-yfti-irow:3;height:12.0pt'>
      <td width=40 valign=top style='width:30.0pt;border:solid black 1.0pt;
      border-top:none;mso-border-top-alt:solid black 1.0pt;padding:0cm 0cm 0cm 0cm;
      height:12.0pt'>
      <p class=TableParagraph><span lang=EN-US style='font-size:8.0pt;
      mso-bidi-font-size:11.0pt;font-family:"Times New Roman",serif;mso-hansi-font-family:
      Arial;mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
      </td>
     </tr>
     <tr style='mso-yfti-irow:4;mso-yfti-lastrow:yes;height:12.0pt'>
      <td width=40 valign=top style='width:30.0pt;border:solid black 1.0pt;
      border-top:none;mso-border-top-alt:solid black 1.0pt;padding:0cm 0cm 0cm 0cm;
      height:12.0pt'>
      <p class=TableParagraph><span lang=EN-US style='font-size:8.0pt;
      mso-bidi-font-size:11.0pt;font-family:"Times New Roman",serif;mso-hansi-font-family:
      Arial;mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
      </td>
     </tr>
    </table>
    <p class=MsoBodyText><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
    </div>
    <![if !mso]></td>
   </tr>
  </table>
  </span><![endif]><![if !mso & !vml]>&nbsp;<![endif]><![if !vml]></td>
 </tr>
</table>

</span><![endif]><span lang=EN-US style='color:#221F1F;mso-font-width:80%'>C2
C3 C4</span></h4>

<span lang=EN-US style='font-size:9.0pt;font-family:"Arial",sans-serif;
mso-fareast-font-family:Arial;mso-ansi-language:EN-US;mso-fareast-language:
EN-US;mso-bidi-language:AR-SA'><br clear=all style='mso-special-character:line-break;
mso-column-break-before:always'>
</span>

<p class=MsoBodyText><b style='mso-bidi-font-weight:normal'><span lang=EN-US
style='font-size:12.0pt;mso-bidi-font-size:9.0pt'><o:p></o:p></span></b></p>

<p class=MsoBodyText><b style='mso-bidi-font-weight:normal'><span lang=EN-US
style='font-size:12.0pt;mso-bidi-font-size:9.0pt'><o:p>&nbsp;</o:p></span></b></p>

<p class=MsoBodyText><b style='mso-bidi-font-weight:normal'><span lang=EN-US
style='font-size:12.0pt;mso-bidi-font-size:9.0pt'><o:p>&nbsp;</o:p></span></b></p>

<p class=MsoBodyText style='margin-top:.45pt'><b style='mso-bidi-font-weight:
normal'><span lang=EN-US style='font-size:9.5pt;mso-bidi-font-size:9.0pt'><o:p>&nbsp;</o:p></span></b></p>

<p class=MsoNormal style='margin-top:0cm;margin-right:.3pt;margin-bottom:0cm;
margin-left:9.8pt;margin-bottom:.0001pt;line-height:102%'><b style='mso-bidi-font-weight:
normal'><span lang=EN-US style='color:#221F1F;mso-font-width:90%'>C5 </span></b><i
style='mso-bidi-font-style:normal'><span lang=EN-US style='font-size:9.0pt;
mso-bidi-font-size:11.0pt;line-height:102%;color:#221F1F;mso-font-width:90%'>Elbow
flexors </span></i><b style='mso-bidi-font-weight:normal'><span lang=EN-US
style='color:#221F1F;mso-font-width:90%'>C6 </span></b><i style='mso-bidi-font-style:
normal'><span lang=EN-US style='font-size:9.0pt;mso-bidi-font-size:11.0pt;
line-height:102%;color:#221F1F;mso-font-width:90%'>Wrist extensors </span></i><b
style='mso-bidi-font-weight:normal'><span lang=EN-US style='color:#221F1F;
mso-font-width:85%'>C7 </span></b><i style='mso-bidi-font-style:normal'><span
lang=EN-US style='font-size:9.0pt;mso-bidi-font-size:11.0pt;line-height:102%;
color:#221F1F;mso-font-width:85%'>Elbow extensors </span></i><b
style='mso-bidi-font-weight:normal'><span lang=EN-US style='color:#221F1F;
mso-font-width:90%'>C8 </span></b><i style='mso-bidi-font-style:normal'><span
lang=EN-US style='font-size:9.0pt;mso-bidi-font-size:11.0pt;line-height:102%;
color:#221F1F;mso-font-width:90%'>Finger flexors</span></i><i style='mso-bidi-font-style:
normal'><span lang=EN-US style='font-size:9.0pt;mso-bidi-font-size:11.0pt;
line-height:102%'><o:p></o:p></span></i></p>

<span lang=EN-US style='font-size:9.0pt;font-family:"Arial",sans-serif;
mso-fareast-font-family:Arial;mso-ansi-language:EN-US;mso-fareast-language:
EN-US;mso-bidi-language:AR-SA'><br clear=all style='mso-special-character:line-break;
mso-column-break-before:always'>
</span>

<p class=MsoBodyText><i style='mso-bidi-font-style:normal'><span lang=EN-US
style='font-size:15.0pt;mso-bidi-font-size:9.0pt'><o:p></o:p></span></i></p>

<p class=MsoBodyText><i style='mso-bidi-font-style:normal'><span lang=EN-US
style='font-size:15.0pt;mso-bidi-font-size:9.0pt'><o:p>&nbsp;</o:p></span></i></p>

<p class=MsoBodyText><i style='mso-bidi-font-style:normal'><span lang=EN-US
style='font-size:15.0pt;mso-bidi-font-size:9.0pt'><o:p>&nbsp;</o:p></span></i></p>

<h3 style='margin-top:11.95pt;margin-right:2.0pt;margin-bottom:0cm;margin-left:
5.35pt;margin-bottom:.0001pt'><span lang=EN-US style='color:#221F1F;mso-font-width:
95%'>UEL</span></h3>

<p class=MsoNormal align=center style='margin-top:0cm;margin-right:2.0pt;
margin-bottom:0cm;margin-left:5.35pt;margin-bottom:.0001pt;text-align:center;
line-height:8.85pt;mso-line-height-rule:exactly'><b style='mso-bidi-font-weight:
normal'><span lang=EN-US style='font-size:8.0pt;mso-bidi-font-size:11.0pt;
color:#221F1F;mso-font-width:95%'>(Upper Extremity Left)</span></b><b
style='mso-bidi-font-weight:normal'><span lang=EN-US style='font-size:8.0pt;
mso-bidi-font-size:11.0pt'><o:p></o:p></span></b></p>

</div>

<span lang=EN-US style='font-size:8.0pt;mso-bidi-font-size:11.0pt;font-family:
"Arial",sans-serif;mso-fareast-font-family:Arial;mso-ansi-language:EN-US;
mso-fareast-language:EN-US;mso-bidi-language:AR-SA'><br clear=all
style='page-break-before:auto;mso-break-type:section-break'>
</span>

<div class=WordSection4>

<p class=MsoNormal style='margin-left:58.2pt;line-height:12.55pt;mso-line-height-rule:
exactly'><!--[if gte vml 1]><v:shape id="_x0000_s1106" type="#_x0000_t202"
 style='position:absolute;left:0;text-align:left;margin-left:28.85pt;
 margin-top:17.1pt;width:161.25pt;height:144.65pt;z-index:15755264;
 mso-position-horizontal-relative:page' filled="f" strokeweight="1pt">
 <v:textbox style='mso-next-textbox:#_x0000_s1106' inset="0,0,0,0"/>
 <w:wrap anchorx="page"/>
</v:shape><![endif]--><![if !vml]><span style='mso-ignore:vglayout;position:
absolute;z-index:15755264;left:0px;margin-left:54px;margin-top:764px;
width:276px;height:247px'>

<table cellpadding=0 cellspacing=0>
 <tr>
  <td width=277 height=247 style='border:1.0pt solid black;vertical-align:top'><![endif]><![if !mso]><span
  style='position:absolute;mso-ignore:vglayout;left:0pt;z-index:15755264'>
  <table cellpadding=0 cellspacing=0 width="100%">
   <tr>
    <td><![endif]>
    <div v:shape="_x0000_s1106" style='padding:1.0pt 1.0pt 1.0pt 1.0pt'
    class=shape>
    <p class=MsoNormal style='margin-top:.3pt;margin-right:9.95pt;margin-bottom:
    0cm;margin-left:5.85pt;margin-bottom:.0001pt;line-height:97%'><b
    style='mso-bidi-font-weight:normal'><i style='mso-bidi-font-style:normal'><span
    lang=EN-US style='font-size:8.0pt;mso-bidi-font-size:11.0pt;line-height:
    97%;letter-spacing:-.25pt;mso-font-width:85%'>Comments</span></i></b><b
    style='mso-bidi-font-weight:normal'><i style='mso-bidi-font-style:normal'><span
    lang=EN-US style='font-size:8.0pt;mso-bidi-font-size:11.0pt;line-height:
    97%;letter-spacing:-1.2pt;mso-font-width:85%'> </span></i></b><i
    style='mso-bidi-font-style:normal'><span lang=EN-US style='font-size:8.0pt;
    mso-bidi-font-size:11.0pt;line-height:97%;letter-spacing:-.25pt;mso-font-width:
    85%'>(Non-key</span></i><i style='mso-bidi-font-style:normal'><span
    lang=EN-US style='font-size:8.0pt;mso-bidi-font-size:11.0pt;line-height:
    97%;letter-spacing:-1.2pt;mso-font-width:85%'> </span></i><i
    style='mso-bidi-font-style:normal'><span lang=EN-US style='font-size:8.0pt;
    mso-bidi-font-size:11.0pt;line-height:97%;letter-spacing:-.25pt;mso-font-width:
    85%'>Muscle?</span></i><i style='mso-bidi-font-style:normal'><span
    lang=EN-US style='font-size:8.0pt;mso-bidi-font-size:11.0pt;line-height:
    97%;letter-spacing:-1.2pt;mso-font-width:85%'> </span></i><i
    style='mso-bidi-font-style:normal'><span lang=EN-US style='font-size:8.0pt;
    mso-bidi-font-size:11.0pt;line-height:97%;letter-spacing:-.25pt;mso-font-width:
    85%'>Reason</span></i><i style='mso-bidi-font-style:normal'><span
    lang=EN-US style='font-size:8.0pt;mso-bidi-font-size:11.0pt;line-height:
    97%;letter-spacing:-1.2pt;mso-font-width:85%'> </span></i><i
    style='mso-bidi-font-style:normal'><span lang=EN-US style='font-size:8.0pt;
    mso-bidi-font-size:11.0pt;line-height:97%;letter-spacing:-.2pt;mso-font-width:
    85%'>for</span></i><i style='mso-bidi-font-style:normal'><span lang=EN-US
    style='font-size:8.0pt;mso-bidi-font-size:11.0pt;line-height:97%;
    letter-spacing:-1.2pt;mso-font-width:85%'> </span></i><i style='mso-bidi-font-style:
    normal'><span lang=EN-US style='font-size:8.0pt;mso-bidi-font-size:11.0pt;
    line-height:97%;letter-spacing:-.2pt;mso-font-width:85%'>NT?</span></i><i
    style='mso-bidi-font-style:normal'><span lang=EN-US style='font-size:8.0pt;
    mso-bidi-font-size:11.0pt;line-height:97%;letter-spacing:-1.2pt;mso-font-width:
    85%'> </span></i><i style='mso-bidi-font-style:normal'><span lang=EN-US
    style='font-size:8.0pt;mso-bidi-font-size:11.0pt;line-height:97%;
    letter-spacing:-.25pt;mso-font-width:85%'>Pain? </span></i><i
    style='mso-bidi-font-style:normal'><span lang=EN-US style='font-size:8.0pt;
    mso-bidi-font-size:11.0pt;line-height:97%;letter-spacing:-.25pt;mso-font-width:
    90%'>Non-SCI</span></i><i style='mso-bidi-font-style:normal'><span
    lang=EN-US style='font-size:8.0pt;mso-bidi-font-size:11.0pt;line-height:
    97%;letter-spacing:-.8pt;mso-font-width:90%'> </span></i><i
    style='mso-bidi-font-style:normal'><span lang=EN-US style='font-size:8.0pt;
    mso-bidi-font-size:11.0pt;line-height:97%;letter-spacing:-.25pt;mso-font-width:
    90%'>condition?):</span></i><i style='mso-bidi-font-style:normal'><span
    lang=EN-US style='font-size:8.0pt;mso-bidi-font-size:11.0pt;line-height:
    97%'><o:p></o:p></span></i></p>
    </div>
    <![if !mso]></td>
   </tr>
  </table>
  </span><![endif]><![if !mso & !vml]>&nbsp;<![endif]><![if !vml]></td>
 </tr>
</table>

</span><![endif]><i style='mso-bidi-font-style:normal'><span lang=EN-US
style='font-size:9.0pt;mso-bidi-font-size:11.0pt;color:#221F1F;position:relative;
top:-1.0pt;mso-text-raise:1.0pt;mso-font-width:85%'>Finger abductors (little
finger)<span style='letter-spacing:-.45pt'> </span></span></i><b
style='mso-bidi-font-weight:normal'><span lang=EN-US style='color:#221F1F;
mso-font-width:85%'>T1</span><span lang=EN-US><o:p></o:p></span></b></p>

<p class=MsoBodyText><b style='mso-bidi-font-weight:normal'><span lang=EN-US
style='font-size:12.0pt;mso-bidi-font-size:9.0pt'><o:p>&nbsp;</o:p></span></b></p>

<p class=MsoBodyText><b style='mso-bidi-font-weight:normal'><span lang=EN-US
style='font-size:12.0pt;mso-bidi-font-size:9.0pt'><o:p>&nbsp;</o:p></span></b></p>

<p class=MsoBodyText><b style='mso-bidi-font-weight:normal'><span lang=EN-US
style='font-size:12.0pt;mso-bidi-font-size:9.0pt'><o:p>&nbsp;</o:p></span></b></p>

<p class=MsoBodyText><b style='mso-bidi-font-weight:normal'><span lang=EN-US
style='font-size:12.0pt;mso-bidi-font-size:9.0pt'><o:p>&nbsp;</o:p></span></b></p>

<p class=MsoBodyText><b style='mso-bidi-font-weight:normal'><span lang=EN-US
style='font-size:12.0pt;mso-bidi-font-size:9.0pt'><o:p>&nbsp;</o:p></span></b></p>

<p class=MsoBodyText><b style='mso-bidi-font-weight:normal'><span lang=EN-US
style='font-size:12.0pt;mso-bidi-font-size:9.0pt'><o:p>&nbsp;</o:p></span></b></p>

<p class=MsoBodyText><b style='mso-bidi-font-weight:normal'><span lang=EN-US
style='font-size:12.0pt;mso-bidi-font-size:9.0pt'><o:p>&nbsp;</o:p></span></b></p>

<p class=MsoBodyText><b style='mso-bidi-font-weight:normal'><span lang=EN-US
style='font-size:12.0pt;mso-bidi-font-size:9.0pt'><o:p>&nbsp;</o:p></span></b></p>

<p class=MsoBodyText><b style='mso-bidi-font-weight:normal'><span lang=EN-US
style='font-size:12.0pt;mso-bidi-font-size:9.0pt'><o:p>&nbsp;</o:p></span></b></p>

<p class=MsoBodyText><b style='mso-bidi-font-weight:normal'><span lang=EN-US
style='font-size:12.0pt;mso-bidi-font-size:9.0pt'><o:p>&nbsp;</o:p></span></b></p>

<p class=MsoBodyText style='margin-top:.5pt'><b style='mso-bidi-font-weight:
normal'><span lang=EN-US style='font-size:15.0pt;mso-bidi-font-size:9.0pt'><o:p>&nbsp;</o:p></span></b></p>

<p class=MsoNormal align=right style='margin-top:.05pt;text-align:right'><!--[if gte vml 1]><v:shape
 id="_x0000_s1105" type="#_x0000_t202" style='position:absolute;left:0;
 text-align:left;margin-left:189.55pt;margin-top:-1.3pt;width:31.25pt;height:65.9pt;
 z-index:15760384;mso-position-horizontal-relative:page' filled="f" stroked="f">
 <v:textbox style='mso-next-textbox:#_x0000_s1105' inset="0,0,0,0"/>
 <w:wrap anchorx="page"/>
</v:shape><![endif]--><![if !vml]><span style='mso-ignore:vglayout;position:
absolute;z-index:15760384;left:0px;margin-left:323px;margin-top:793px;
width:57px;height:114px'>

<table cellpadding=0 cellspacing=0>
 <tr>
  <td width=57 height=114 style='vertical-align:top'><![endif]><![if !mso]><span
  style='position:absolute;mso-ignore:vglayout;left:0pt;z-index:15760384'>
  <table cellpadding=0 cellspacing=0 width="100%">
   <tr>
    <td><![endif]>
    <div v:shape="_x0000_s1105" style='padding:0pt 0pt 0pt 0pt' class=shape>
    <table class=MsoNormalTable border=1 cellspacing=0 cellpadding=0
     style='margin-left:.5pt;border-collapse:collapse;mso-table-layout-alt:
     fixed;border:none;mso-border-alt:solid black 1.0pt;mso-yfti-tbllook:480;
     mso-padding-alt:0cm 0cm 0cm 0cm;mso-border-insideh:1.0pt solid black;
     mso-border-insidev:1.0pt solid black'>
     <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;height:11.95pt'>
      <td width=40 valign=top style='width:30.0pt;border:solid black 1.0pt;
      padding:0cm 0cm 0cm 0cm;height:11.95pt'>
      <p class=TableParagraph><span lang=EN-US style='font-size:8.0pt;
      mso-bidi-font-size:11.0pt;font-family:"Times New Roman",serif;mso-hansi-font-family:
      Arial;mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
      </td>
     </tr>
     <tr style='mso-yfti-irow:1;height:12.0pt'>
      <td width=40 valign=top style='width:30.0pt;border:solid black 1.0pt;
      border-top:none;mso-border-top-alt:solid black 1.0pt;padding:0cm 0cm 0cm 0cm;
      height:12.0pt'>
      <p class=TableParagraph><span lang=EN-US style='font-size:8.0pt;
      mso-bidi-font-size:11.0pt;font-family:"Times New Roman",serif;mso-hansi-font-family:
      Arial;mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
      </td>
     </tr>
     <tr style='mso-yfti-irow:2;height:12.0pt'>
      <td width=40 valign=top style='width:30.0pt;border:solid black 1.0pt;
      border-top:none;mso-border-top-alt:solid black 1.0pt;padding:0cm 0cm 0cm 0cm;
      height:12.0pt'>
      <p class=TableParagraph><span lang=EN-US style='font-size:8.0pt;
      mso-bidi-font-size:11.0pt;font-family:"Times New Roman",serif;mso-hansi-font-family:
      Arial;mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
      </td>
     </tr>
     <tr style='mso-yfti-irow:3;height:12.0pt'>
      <td width=40 valign=top style='width:30.0pt;border:solid black 1.0pt;
      border-top:none;mso-border-top-alt:solid black 1.0pt;padding:0cm 0cm 0cm 0cm;
      height:12.0pt'>
      <p class=TableParagraph><span lang=EN-US style='font-size:8.0pt;
      mso-bidi-font-size:11.0pt;font-family:"Times New Roman",serif;mso-hansi-font-family:
      Arial;mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
      </td>
     </tr>
     <tr style='mso-yfti-irow:4;mso-yfti-lastrow:yes;height:12.0pt'>
      <td width=40 valign=top style='width:30.0pt;border:solid black 1.0pt;
      border-top:none;mso-border-top-alt:solid black 1.0pt;padding:0cm 0cm 0cm 0cm;
      height:12.0pt'>
      <p class=TableParagraph><span lang=EN-US style='font-size:8.0pt;
      mso-bidi-font-size:11.0pt;font-family:"Times New Roman",serif;mso-hansi-font-family:
      Arial;mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
      </td>
     </tr>
    </table>
    <p class=MsoBodyText><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
    </div>
    <![if !mso]></td>
   </tr>
  </table>
  </span><![endif]><![if !mso & !vml]>&nbsp;<![endif]><![if !vml]></td>
 </tr>
</table>

</span><![endif]><i style='mso-bidi-font-style:normal'><span lang=EN-US
style='font-size:9.0pt;mso-bidi-font-size:11.0pt;color:#221F1F;position:relative;
top:-.5pt;mso-text-raise:.5pt;mso-font-width:90%'>Hip flexors<span
style='letter-spacing:.5pt'> </span></span></i><b style='mso-bidi-font-weight:
normal'><span lang=EN-US style='color:#221F1F;mso-font-width:90%'>L2</span><span
lang=EN-US><o:p></o:p></span></b></p>

<span lang=EN-US style='font-size:9.0pt;font-family:"Arial",sans-serif;
mso-fareast-font-family:Arial;mso-ansi-language:EN-US;mso-fareast-language:
EN-US;mso-bidi-language:AR-SA'><br clear=all style='mso-special-character:line-break;
mso-column-break-before:always'>
</span>

<p class=MsoBodyText style='margin-top:.5pt'><b style='mso-bidi-font-weight:
normal'><span lang=EN-US style='font-size:9.5pt;mso-bidi-font-size:9.0pt'><o:p></o:p></span></b></p>

<h4 style='margin-top:0cm;margin-right:1.9pt;margin-bottom:0cm;margin-left:
16.55pt;margin-bottom:.0001pt;text-align:justify;text-indent:5.0pt;line-height:
102%'><span lang=EN-US style='color:#221F1F;mso-font-width:80%'>T2 </span><span
lang=EN-US style='color:#221F1F;mso-font-width:90%'>T3 T4 T5 T6 T7 T8 T9 </span><span
lang=EN-US style='color:#221F1F;mso-font-width:80%'>T10 </span><span
lang=EN-US style='color:#221F1F;letter-spacing:-.35pt;mso-font-width:85%'>T11 </span><span
lang=EN-US style='color:#221F1F;mso-font-width:80%'>T12 </span><span
lang=EN-US style='color:#221F1F;mso-font-width:90%'>L1</span></h4>

<span lang=EN-US style='font-size:9.0pt;font-family:"Arial",sans-serif;
mso-fareast-font-family:Arial;mso-ansi-language:EN-US;mso-fareast-language:
EN-US;mso-bidi-language:AR-SA'><br clear=all style='mso-special-character:line-break;
mso-column-break-before:always'>
</span>

<p class=MsoBodyText><b style='mso-bidi-font-weight:normal'><span lang=EN-US
style='font-size:5.0pt;mso-bidi-font-size:9.0pt'><o:p></o:p></span></b></p>

<p class=MsoBodyText><b style='mso-bidi-font-weight:normal'><span lang=EN-US
style='font-size:5.0pt;mso-bidi-font-size:9.0pt'><o:p>&nbsp;</o:p></span></b></p>

<p class=MsoBodyText><b style='mso-bidi-font-weight:normal'><span lang=EN-US
style='font-size:5.0pt;mso-bidi-font-size:9.0pt'><o:p>&nbsp;</o:p></span></b></p>

<p class=MsoBodyText><b style='mso-bidi-font-weight:normal'><span lang=EN-US
style='font-size:5.0pt;mso-bidi-font-size:9.0pt'><o:p>&nbsp;</o:p></span></b></p>

<p class=MsoBodyText><b style='mso-bidi-font-weight:normal'><span lang=EN-US
style='font-size:5.0pt;mso-bidi-font-size:9.0pt'><o:p>&nbsp;</o:p></span></b></p>

<p class=MsoBodyText><b style='mso-bidi-font-weight:normal'><span lang=EN-US
style='font-size:5.0pt;mso-bidi-font-size:9.0pt'><o:p>&nbsp;</o:p></span></b></p>

<p class=MsoBodyText><b style='mso-bidi-font-weight:normal'><span lang=EN-US
style='font-size:5.0pt;mso-bidi-font-size:9.0pt'><o:p>&nbsp;</o:p></span></b></p>

<p class=MsoNormal align=right style='margin-top:4.45pt;margin-right:17.3pt;
margin-bottom:0cm;margin-left:68.6pt;margin-bottom:.0001pt;text-align:right;
text-indent:.65pt;line-height:11.5pt'><!--[if gte vml 1]><v:group id="_x0000_s1077"
 style='position:absolute;left:0;text-align:left;margin-left:322.05pt;
 margin-top:22.65pt;width:41.55pt;height:213.65pt;z-index:-1660434944;
 mso-position-horizontal-relative:page' coordorigin="6441,453" coordsize="831,4273">
 <v:shape id="_x0000_s1104" style='position:absolute;left:6451;top:461;width:681;
  height:4014' coordorigin="6451,461" coordsize="681,4014" path="m6636,4474r-8,-12l6625,4449r1,-14l6630,4420r6,-21l6641,4370r,-38l6632,4290r-34,-109l6568,4078r-26,-96l6520,3892r-18,-84l6488,3728r-11,-76l6470,3580r-4,-69l6466,3444r3,-64l6475,3316r9,-62l6497,3191r16,-63l6531,3064r,l6544,3008r10,-68l6558,2869r-4,-64l6541,2720r-12,-83l6518,2554r-11,-81l6497,2392r-9,-79l6480,2234r-7,-79l6467,2077r-5,-77l6457,1923r-3,-77l6452,1769r-1,-77l6452,1615r1,-77l6456,1460r4,-78l6465,1304r7,-80l6480,1145r9,-81l6500,982r12,-82l6526,816r16,-85l6558,645r55,-40l6674,569r66,-32l6811,511r75,-21l6965,474r82,-10l7132,461e"
  filled="f" strokeweight=".28364mm">
  <v:path arrowok="t"/>
 </v:shape><v:shape id="_x0000_s1103" style='position:absolute;left:6537;top:3575;
  width:219;height:940' coordorigin="6537,3575" coordsize="219,940" path="m6537,4426r57,59l6628,4509r38,6l6701,4493r29,-55l6747,4340r4,-63l6754,4209r2,-72l6755,4063r-2,-78l6748,3905r-8,-81l6730,3741r-13,-83l6700,3575e"
  filled="f" strokeweight=".28356mm">
  <v:path arrowok="t"/>
 </v:shape><v:shape id="_x0000_s1102" style='position:absolute;left:6548;top:1742;
  width:584;height:1849' coordorigin="6549,1742" coordsize="584,1849" path="m6549,2981r8,94l6565,3166r11,87l6588,3333r16,72l6624,3468r54,90l6757,3591r91,-20l6894,3524r18,-55l6914,3426r-1,-35l6910,3324r-2,-87l6907,3140r4,-99l6920,2952r16,-70l6949,2837r14,-69l6974,2684r4,-92l6970,2499r-9,-86l6959,2325r4,-89l6973,2147r16,-86l7010,1980r25,-74l7065,1840r32,-55l7132,1742e"
  filled="f" strokeweight=".28342mm">
  <v:path arrowok="t"/>
 </v:shape><v:shape id="_x0000_s1101" style='position:absolute;left:6449;top:3441;
  width:472;height:1276' coordorigin="6449,3442" coordsize="472,1276" path="m6914,3442r6,120l6920,3671r-4,98l6908,3859r-11,81l6885,4013r-13,67l6861,4141r-11,56l6843,4250r-3,49l6841,4343r6,78l6856,4518r14,98l6859,4684r-46,29l6756,4717r-42,-5l6675,4693r-26,-30l6626,4628r-30,-30l6561,4577r-31,-16l6505,4541r-20,-30l6481,4503r-7,-9l6465,4482r-10,-11l6449,4463r3,-11l6460,4446r7,-5l6477,4442r6,7l6492,4458r3,3l6498,4462r4,-2l6505,4458r1,-5l6503,4449r-11,-12l6486,4429r1,-10l6495,4414r6,-5l6510,4410r6,7l6525,4426r3,3l6532,4430r4,-3l6540,4425r,-6l6538,4415r-11,-11l6521,4396r2,-11l6530,4380r7,-5l6546,4377r6,6l6563,4394r1,3l6568,4397r2,-1l6572,4394r1,-3l6571,4389r,-1l6570,4388r,-1l6570,4388r-12,-13l6552,4367r2,-11l6561,4351r6,-4l6577,4348r6,6l6593,4366r2,2l6598,4369r3,-2l6603,4366r,-3l6602,4360r-9,-9l6585,4340r2,-16l6597,4317r10,-6l6620,4313r9,9l6641,4335e"
  filled="f" strokeweight=".28333mm">
  <v:path arrowok="t"/>
 </v:shape><v:shape id="_x0000_s1100" style='position:absolute;left:6852;top:1742;
  width:281;height:2739' coordorigin="6852,1742" coordsize="281,2739" path="m6852,4481r29,-37l6882,4407r-8,-45l6875,4302r6,-28l6892,4237r13,-46l6921,4135r16,-64l6954,3999r15,-80l6982,3832r9,-94l6996,3639r-1,-106l6987,3422r-15,-116l6959,3219r-6,-71l6956,3041r17,-76l6998,2902r12,-33l7022,2831r10,-45l7039,2731r3,-66l7040,2584r-1,-90l7041,2407r6,-82l7056,2246r10,-77l7079,2095r12,-72l7104,1952r11,-70l7125,1812r7,-70e"
  filled="f" strokeweight=".28369mm">
  <v:path arrowok="t"/>
 </v:shape><v:shape id="_x0000_s1099" style='position:absolute;left:6916;top:2975;
  width:42;height:53' coordorigin="6917,2975" coordsize="42,53" path="m6917,2975r15,11l6942,2995r7,12l6958,3028e"
  filled="f" strokeweight=".28244mm">
  <v:path arrowok="t"/>
 </v:shape><v:shape id="_x0000_s1098" style='position:absolute;left:6885;top:2751;
  width:9;height:94' coordorigin="6885,2751" coordsize="9,94" path="m6886,2751r,21l6885,2796r3,24l6894,2844e"
  filled="f" strokeweight=".28369mm">
  <v:path arrowok="t"/>
 </v:shape><v:shape id="_x0000_s1097" style='position:absolute;left:6620;top:2765;
  width:17;height:92' coordorigin="6620,2765" coordsize="17,92" path="m6636,2765r,24l6633,2817r-5,24l6620,2856e"
  filled="f" strokeweight=".28364mm">
  <v:path arrowok="t"/>
 </v:shape><v:shape id="_x0000_s1096" style='position:absolute;left:6977;top:2123;
  width:84;height:86' coordorigin="6977,2124" coordsize="84,86" path="m6977,2124r8,36l7004,2186r27,17l7061,2209e"
  filled="f" strokeweight=".28208mm">
  <v:path arrowok="t"/>
 </v:shape><v:shape id="_x0000_s1095" style='position:absolute;left:6969;top:1213;
  width:163;height:441' coordorigin="6969,1214" coordsize="163,441" path="m7132,1655r-63,-17l7017,1590r-35,-70l6969,1434r13,-85l7017,1278r52,-47l7132,1214e"
  filled="f" strokeweight=".28333mm">
  <v:path arrowok="t"/>
 </v:shape><v:shape id="_x0000_s1094" style='position:absolute;left:6777;top:943;
  width:356;height:948' coordorigin="6778,944" coordsize="356,948" path="m7041,1891r-54,-37l6933,1804r-49,-61l6841,1672r-33,-79l6786,1508r-8,-89l6784,1333r16,-80l6827,1179r35,-66l6905,1055r49,-46l7010,973r60,-22l7134,944e"
  filled="f" strokeweight=".28331mm">
  <v:path arrowok="t"/>
 </v:shape><v:line id="_x0000_s1093" style='position:absolute' from="7132,1013"
  to="7132,1742" strokeweight=".28372mm"/>
 <v:line id="_x0000_s1092" style='position:absolute' from="7100,981" to="7132,1013"
  strokeweight=".28203mm"/>
 <v:shape id="_x0000_s1091" type="#_x0000_t75" style='position:absolute;left:6754;
  top:1551;width:424;height:120'>
  <v:imagedata src="F081-THHC%20(ASIA)%20American%20Spinal%20Injury%20Association.files/image012.png"
   o:title=""/>
 </v:shape><v:shape id="_x0000_s1090" style='position:absolute;left:6469;top:1647;
  width:361;height:460' coordorigin="6469,1648" coordsize="361,460" path="m6830,1648r-24,65l6777,1774r-33,58l6704,1889r-46,55l6604,1998r-63,54l6469,2107e"
  filled="f" strokeweight=".28244mm">
  <v:path arrowok="t"/>
 </v:shape><v:shape id="_x0000_s1089" style='position:absolute;left:6706;top:1586;
  width:227;height:1274' coordorigin="6707,1586" coordsize="227,1274" o:spt="100"
  adj="0,,0" path="m6762,2825r-3,-6l6748,2808r-6,-3l6727,2805r-7,3l6710,2819r-3,6l6707,2840r3,6l6720,2857r7,3l6742,2860r6,-3l6759,2846r3,-6l6762,2833r,-8xm6933,1606r-2,-7l6920,1589r-6,-3l6899,1586r-7,3l6881,1599r-2,7l6879,1621r2,6l6892,1638r7,2l6914,1640r6,-2l6931,1627r2,-6l6933,1613r,-7xe"
  fillcolor="black" stroked="f">
  <v:stroke joinstyle="round"/>
  <v:formulas/>
  <v:path arrowok="t" o:connecttype="segments"/>
 </v:shape><v:line id="_x0000_s1088" style='position:absolute' from="7165,981"
  to="7132,1013" strokeweight=".28203mm"/>
 <v:shape id="_x0000_s1087" style='position:absolute;left:7094;top:1559;
  width:76;height:75' coordorigin="7095,1559" coordsize="76,75" path="m7143,1633r-21,l7113,1630r-15,-15l7095,1607r,-21l7098,1577r15,-14l7122,1559r21,l7152,1563r14,14l7170,1586r,10l7170,1607r-4,8l7152,1630r-9,3xe"
  fillcolor="black" stroked="f">
  <v:path arrowok="t"/>
 </v:shape><v:line id="_x0000_s1086" style='position:absolute' from="7272,1595"
  to="7136,1595" strokeweight=".28036mm"/>
 <v:shape id="_x0000_s1085" style='position:absolute;left:6670;top:4565;
  width:62;height:64' coordorigin="6671,4565" coordsize="62,64" path="m6702,4629r-12,-2l6680,4620r-7,-10l6671,4597r2,-12l6680,4575r10,-7l6702,4565r12,3l6723,4575r7,10l6732,4597r-2,13l6723,4620r-9,7l6702,4629xe"
  fillcolor="black" stroked="f">
  <v:path arrowok="t"/>
 </v:shape><v:shape id="_x0000_s1084" type="#_x0000_t202" style='position:absolute;
  left:6824;top:1175;width:178;height:142' filled="f" stroked="f">
  <v:textbox style='mso-next-textbox:#_x0000_s1084' inset="0,0,0,0">
   <![if !mso]>
   <table cellpadding=0 cellspacing=0 width="100%">
    <tr>
     <td><![endif]>
     <div>
     <p class=MsoNormal style='margin-top:.1pt'><span lang=EN-US
     style='font-size:6.0pt;mso-bidi-font-size:11.0pt;mso-font-width:105%'>S3</span><span
     lang=EN-US style='font-size:6.0pt;mso-bidi-font-size:11.0pt'><o:p></o:p></span></p>
     </div>
     <![if !mso]></td>
    </tr>
   </table>
   <![endif]></v:textbox>
 </v:shape><v:shape id="_x0000_s1083" type="#_x0000_t202" style='position:absolute;
  left:7010;top:1918;width:88;height:198' filled="f" stroked="f">
  <v:textbox style='mso-next-textbox:#_x0000_s1083' inset="0,0,0,0">
   <![if !mso]>
   <table cellpadding=0 cellspacing=0 width="100%">
    <tr>
     <td><![endif]>
     <div>
     <p class=MsoNormal style='margin-top:.6pt;margin-right:.1pt;margin-bottom:
     0cm;margin-left:0cm;margin-bottom:.0001pt;text-indent:.65pt;line-height:
     87%'><span lang=EN-US style='font-size:4.5pt;mso-bidi-font-size:11.0pt;
     line-height:87%;mso-font-width:105%'>L 2</span><span lang=EN-US
     style='font-size:4.5pt;mso-bidi-font-size:11.0pt;line-height:87%'><o:p></o:p></span></p>
     </div>
     <![if !mso]></td>
    </tr>
   </table>
   <![endif]></v:textbox>
 </v:shape><v:shape id="_x0000_s1082" type="#_x0000_t202" style='position:absolute;
  left:6599;top:2240;width:178;height:142' filled="f" stroked="f">
  <v:textbox style='mso-next-textbox:#_x0000_s1082' inset="0,0,0,0">
   <![if !mso]>
   <table cellpadding=0 cellspacing=0 width="100%">
    <tr>
     <td><![endif]>
     <div>
     <p class=MsoNormal style='margin-top:.1pt'><span lang=EN-US
     style='font-size:6.0pt;mso-bidi-font-size:11.0pt;mso-font-width:105%'>S2</span><span
     lang=EN-US style='font-size:6.0pt;mso-bidi-font-size:11.0pt'><o:p></o:p></span></p>
     </div>
     <![if !mso]></td>
    </tr>
   </table>
   <![endif]></v:textbox>
 </v:shape><v:shape id="_x0000_s1081" type="#_x0000_t202" style='position:absolute;
  left:6969;top:2205;width:78;height:204' filled="f" stroked="f">
  <v:textbox style='mso-next-textbox:#_x0000_s1081' inset="0,0,0,0">
   <![if !mso]>
   <table cellpadding=0 cellspacing=0 width="100%">
    <tr>
     <td><![endif]>
     <div>
     <p class=MsoNormal style='margin-top:.35pt;margin-right:.1pt;margin-bottom:
     0cm;margin-left:0cm;margin-bottom:.0001pt;text-indent:.15pt;line-height:
     93%'><span lang=EN-US style='font-size:4.5pt;mso-bidi-font-size:11.0pt;
     line-height:93%;mso-font-width:105%'>L 3</span><span lang=EN-US
     style='font-size:4.5pt;mso-bidi-font-size:11.0pt;line-height:93%'><o:p></o:p></span></p>
     </div>
     <![if !mso]></td>
    </tr>
   </table>
   <![endif]></v:textbox>
 </v:shape><v:shape id="_x0000_s1080" type="#_x0000_t202" style='position:absolute;
  left:6924;top:3402;width:75;height:194' filled="f" stroked="f">
  <v:textbox style='mso-next-textbox:#_x0000_s1080' inset="0,0,0,0">
   <![if !mso]>
   <table cellpadding=0 cellspacing=0 width="100%">
    <tr>
     <td><![endif]>
     <div>
     <p class=MsoNormal style='margin-top:.75pt;margin-right:.1pt;margin-bottom:
     0cm;margin-left:0cm;margin-bottom:.0001pt;text-indent:-.05pt;line-height:
     83%'><span lang=EN-US style='font-size:4.5pt;mso-bidi-font-size:11.0pt;
     line-height:83%;mso-font-width:105%'>L 4</span><span lang=EN-US
     style='font-size:4.5pt;mso-bidi-font-size:11.0pt;line-height:83%'><o:p></o:p></span></p>
     </div>
     <![if !mso]></td>
    </tr>
   </table>
   <![endif]></v:textbox>
 </v:shape><v:shape id="_x0000_s1079" type="#_x0000_t202" style='position:absolute;
  left:6727;top:3659;width:178;height:142' filled="f" stroked="f">
  <v:textbox style='mso-next-textbox:#_x0000_s1079' inset="0,0,0,0">
   <![if !mso]>
   <table cellpadding=0 cellspacing=0 width="100%">
    <tr>
     <td><![endif]>
     <div>
     <p class=MsoNormal style='margin-top:.1pt'><span lang=EN-US
     style='font-size:6.0pt;mso-bidi-font-size:11.0pt;mso-font-width:105%'>S1</span><span
     lang=EN-US style='font-size:6.0pt;mso-bidi-font-size:11.0pt'><o:p></o:p></span></p>
     </div>
     <![if !mso]></td>
    </tr>
   </table>
   <![endif]></v:textbox>
 </v:shape><v:shape id="_x0000_s1078" type="#_x0000_t202" style='position:absolute;
  left:6551;top:3838;width:164;height:142' filled="f" stroked="f">
  <v:textbox style='mso-next-textbox:#_x0000_s1078' inset="0,0,0,0">
   <![if !mso]>
   <table cellpadding=0 cellspacing=0 width="100%">
    <tr>
     <td><![endif]>
     <div>
     <p class=MsoNormal style='margin-top:.1pt'><span lang=EN-US
     style='font-size:6.0pt;mso-bidi-font-size:11.0pt;mso-font-width:105%'>L5</span><span
     lang=EN-US style='font-size:6.0pt;mso-bidi-font-size:11.0pt'><o:p></o:p></span></p>
     </div>
     <![if !mso]></td>
    </tr>
   </table>
   <![endif]></v:textbox>
 </v:shape><w:wrap anchorx="page"/>
</v:group><![endif]--><![if !vml]><span style='mso-ignore:vglayout;position:
absolute;z-index:-1660434944;left:0px;margin-left:543px;margin-top:881px;
width:72px;height:357px'><img width=58 height=286
src="F081-THHC%20(ASIA)%20American%20Spinal%20Injury%20Association.files/image013.gif"
v:shapes="_x0000_s1077 _x0000_s1104 _x0000_s1103 _x0000_s1102 _x0000_s1101 _x0000_s1100 _x0000_s1099 _x0000_s1098 _x0000_s1097 _x0000_s1096 _x0000_s1095 _x0000_s1094 _x0000_s1093 _x0000_s1092 _x0000_s1091 _x0000_s1090 _x0000_s1089 _x0000_s1088 _x0000_s1087 _x0000_s1086 _x0000_s1085 _x0000_s1084 _x0000_s1083 _x0000_s1082 _x0000_s1081 _x0000_s1080 _x0000_s1079 _x0000_s1078"></span><![endif]><!--[if gte vml 1]><v:shape
 id="_x0000_s1076" type="#_x0000_t136" style='position:absolute;left:0;
 text-align:left;margin-left:342.3pt;margin-top:-18.55pt;width:4.75pt;height:3.7pt;
 rotation:298;z-index:15755776;mso-position-horizontal-relative:page'
 fillcolor="black" stroked="f">
 <o:extrusion v:ext="view" autorotationcenter="t"/>
 <v:textpath style='font-family:"Arial";font-size:3pt;v-text-kern:t;
  mso-text-shadow:auto' string="C6"/>
 <w:wrap anchorx="page"/>
</v:shape><![endif]--><![if !vml]><span style='mso-ignore:vglayout;position:
absolute;z-index:15755776;left:0px;margin-left:578px;margin-top:811px;
width:7px;height:8px'><img width=6 height=6
src="F081-THHC%20(ASIA)%20American%20Spinal%20Injury%20Association.files/image014.gif"
alt=C6 v:shapes="_x0000_s1076"></span><![endif]><!--[if gte vml 1]><v:shape
 id="_x0000_s1075" type="#_x0000_t136" style='position:absolute;left:0;
 text-align:left;margin-left:354.15pt;margin-top:-14.05pt;width:4.75pt;
 height:3.7pt;rotation:298;z-index:15756800;mso-position-horizontal-relative:page'
 fillcolor="black" stroked="f">
 <o:extrusion v:ext="view" autorotationcenter="t"/>
 <v:textpath style='font-family:"Arial";font-size:3pt;v-text-kern:t;
  mso-text-shadow:auto' string="C7"/>
 <w:wrap anchorx="page"/>
</v:shape><![endif]--><![if !vml]><span style='mso-ignore:vglayout;position:
absolute;z-index:15756800;left:0px;margin-left:598px;margin-top:818px;
width:7px;height:9px'><img width=6 height=7
src="F081-THHC%20(ASIA)%20American%20Spinal%20Injury%20Association.files/image015.gif"
alt=C7 v:shapes="_x0000_s1075"></span><![endif]><span lang=EN-US
style='font-size:5.0pt;mso-bidi-font-size:11.0pt;mso-font-width:105%'>T11 </span><span
lang=EN-US style='font-size:5.0pt;mso-bidi-font-size:11.0pt'>T12<o:p></o:p></span></p>

<p class=MsoNormal align=right style='margin-top:2.7pt;margin-right:.7pt;
margin-bottom:0cm;margin-left:0cm;margin-bottom:.0001pt;text-align:right'><span
lang=EN-US style='font-size:5.0pt;mso-bidi-font-size:11.0pt;mso-font-width:
105%'>L1</span><span lang=EN-US style='font-size:5.0pt;mso-bidi-font-size:11.0pt'><o:p></o:p></span></p>

<p class=MsoBodyText><span lang=EN-US style='font-size:5.0pt;mso-bidi-font-size:
9.0pt'><o:p>&nbsp;</o:p></span></p>

<p class=MsoBodyText><span lang=EN-US style='font-size:5.0pt;mso-bidi-font-size:
9.0pt'><o:p>&nbsp;</o:p></span></p>

<p class=MsoBodyText><span lang=EN-US style='font-size:5.0pt;mso-bidi-font-size:
9.0pt'><o:p>&nbsp;</o:p></span></p>

<p class=MsoBodyText><span lang=EN-US style='font-size:5.0pt;mso-bidi-font-size:
9.0pt'><o:p>&nbsp;</o:p></span></p>

<p class=MsoBodyText><span lang=EN-US style='font-size:5.0pt;mso-bidi-font-size:
9.0pt'><o:p>&nbsp;</o:p></span></p>

<p class=MsoBodyText style='margin-top:.3pt'><span lang=EN-US style='font-size:
4.5pt;mso-bidi-font-size:9.0pt'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal align=right style='text-align:right'><span lang=EN-US
style='font-size:5.0pt;mso-bidi-font-size:11.0pt;mso-font-width:105%'>L2</span><span
lang=EN-US style='font-size:5.0pt;mso-bidi-font-size:11.0pt'><o:p></o:p></span></p>

<p class=MsoNormal style='margin-top:.35pt;margin-right:0cm;margin-bottom:0cm;
margin-left:58.2pt;margin-bottom:.0001pt'><span lang=EN-US style='font-size:
6.0pt;mso-bidi-font-size:11.0pt;mso-font-width:105%'>S4-5</span><span
lang=EN-US style='font-size:6.0pt;mso-bidi-font-size:11.0pt'><o:p></o:p></span></p>

<p class=MsoBodyText><span lang=EN-US style='font-size:7.0pt;mso-bidi-font-size:
9.0pt'><o:p>&nbsp;</o:p></span></p>

<p class=MsoBodyText><span lang=EN-US style='font-size:7.0pt;mso-bidi-font-size:
9.0pt'><o:p>&nbsp;</o:p></span></p>

<p class=MsoBodyText style='margin-top:.1pt'><span lang=EN-US style='font-size:
8.0pt;mso-bidi-font-size:9.0pt'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal align=right style='text-align:right'><span lang=EN-US
style='font-size:5.0pt;mso-bidi-font-size:11.0pt;mso-font-width:105%'>L3</span><span
lang=EN-US style='font-size:5.0pt;mso-bidi-font-size:11.0pt'><o:p></o:p></span></p>

<span lang=EN-US style='font-size:9.0pt;font-family:"Arial",sans-serif;
mso-fareast-font-family:Arial;mso-ansi-language:EN-US;mso-fareast-language:
EN-US;mso-bidi-language:AR-SA'><br clear=all style='mso-special-character:line-break;
mso-column-break-before:always'>
</span>

<p class=MsoBodyText><span lang=EN-US style='font-size:5.0pt;mso-bidi-font-size:
9.0pt'><o:p></o:p></span></p>

<p class=MsoBodyText><span lang=EN-US style='font-size:5.0pt;mso-bidi-font-size:
9.0pt'><o:p>&nbsp;</o:p></span></p>

<p class=MsoBodyText><span lang=EN-US style='font-size:5.0pt;mso-bidi-font-size:
9.0pt'><o:p>&nbsp;</o:p></span></p>

<p class=MsoBodyText><span lang=EN-US style='font-size:5.0pt;mso-bidi-font-size:
9.0pt'><o:p>&nbsp;</o:p></span></p>

<p class=MsoBodyText><span lang=EN-US style='font-size:5.0pt;mso-bidi-font-size:
9.0pt'><o:p>&nbsp;</o:p></span></p>

<p class=MsoBodyText><span lang=EN-US style='font-size:5.0pt;mso-bidi-font-size:
9.0pt'><o:p>&nbsp;</o:p></span></p>

<p class=MsoBodyText><span lang=EN-US style='font-size:5.0pt;mso-bidi-font-size:
9.0pt'><o:p>&nbsp;</o:p></span></p>

<p class=MsoBodyText><span lang=EN-US style='font-size:5.0pt;mso-bidi-font-size:
9.0pt'><o:p>&nbsp;</o:p></span></p>

<p class=MsoBodyText><span lang=EN-US style='font-size:5.0pt;mso-bidi-font-size:
9.0pt'><o:p>&nbsp;</o:p></span></p>

<p class=MsoBodyText><span lang=EN-US style='font-size:5.0pt;mso-bidi-font-size:
9.0pt'><o:p>&nbsp;</o:p></span></p>

<p class=MsoBodyText><span lang=EN-US style='font-size:5.0pt;mso-bidi-font-size:
9.0pt'><o:p>&nbsp;</o:p></span></p>

<p class=MsoBodyText><span lang=EN-US style='font-size:5.0pt;mso-bidi-font-size:
9.0pt'><o:p>&nbsp;</o:p></span></p>

<p class=MsoBodyText><span lang=EN-US style='font-size:5.0pt;mso-bidi-font-size:
9.0pt'><o:p>&nbsp;</o:p></span></p>

<p class=MsoBodyText style='margin-top:.45pt'><span lang=EN-US
style='font-size:4.0pt;mso-bidi-font-size:9.0pt'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal style='margin-left:37.9pt'><span lang=EN-US
style='font-size:5.0pt;mso-bidi-font-size:11.0pt;mso-font-width:105%'>Palm</span><span
lang=EN-US style='font-size:5.0pt;mso-bidi-font-size:11.0pt'><o:p></o:p></span></p>

<p class=MsoBodyText><span lang=EN-US style='font-size:5.0pt;mso-bidi-font-size:
9.0pt'><o:p>&nbsp;</o:p></span></p>

<p class=MsoBodyText><span lang=EN-US style='font-size:5.0pt;mso-bidi-font-size:
9.0pt'><o:p>&nbsp;</o:p></span></p>

<p class=MsoBodyText style='margin-top:.1pt'><span lang=EN-US style='font-size:
5.5pt;mso-bidi-font-size:9.0pt'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal style='margin-top:0cm;margin-right:.9pt;margin-bottom:0cm;
margin-left:41.25pt;margin-bottom:.0001pt;text-indent:-6.6pt'><span lang=EN-US
style='font-size:7.0pt;mso-bidi-font-size:11.0pt;mso-font-width:105%'>Key
Sensory Points</span><span lang=EN-US style='font-size:7.0pt;mso-bidi-font-size:
11.0pt'><o:p></o:p></span></p>

<span lang=EN-US style='font-size:9.0pt;font-family:"Arial",sans-serif;
mso-fareast-font-family:Arial;mso-ansi-language:EN-US;mso-fareast-language:
EN-US;mso-bidi-language:AR-SA'><br clear=all style='mso-special-character:line-break;
mso-column-break-before:always'>
</span>

<p class=MsoBodyText style='margin-top:.5pt'><span lang=EN-US style='font-size:
9.5pt;mso-bidi-font-size:9.0pt'><o:p></o:p></span></p>

<h4 style='margin-top:0cm;margin-right:-.6pt;margin-bottom:0cm;margin-left:
58.2pt;margin-bottom:.0001pt;line-height:102%'><span lang=EN-US
style='color:#221F1F;mso-font-width:90%'>T2 T3 T4 T5 T6 T7 T8 T9 </span><span
lang=EN-US style='color:#221F1F;mso-font-width:80%'>T10 </span><span
lang=EN-US style='color:#221F1F;letter-spacing:-.35pt;mso-font-width:85%'>T11 </span><span
lang=EN-US style='color:#221F1F;mso-font-width:80%'>T12 </span><span
lang=EN-US style='color:#221F1F;mso-font-width:90%'>L1</span></h4>

<span lang=EN-US style='font-size:11.0pt;font-family:"Arial",sans-serif;
mso-fareast-font-family:Arial;mso-ansi-language:EN-US;mso-fareast-language:
EN-US;mso-bidi-language:AR-SA'><br clear=all style='mso-column-break-before:
always'>
</span>

<p class=MsoNormal style='margin-left:17.35pt;line-height:11.85pt;mso-line-height-rule:
exactly'><b style='mso-bidi-font-weight:normal'><span lang=EN-US
style='color:#221F1F;mso-font-width:90%'>T1 </span></b><i style='mso-bidi-font-style:
normal'><span lang=EN-US style='font-size:9.0pt;mso-bidi-font-size:11.0pt;
color:#221F1F;mso-font-width:90%'>Finger abductors (little finger)</span></i><i
style='mso-bidi-font-style:normal'><span lang=EN-US style='font-size:9.0pt;
mso-bidi-font-size:11.0pt'><o:p></o:p></span></i></p>

<h4 align=center style='margin-top:5.55pt;margin-right:49.0pt;margin-bottom:
0cm;margin-left:27.15pt;margin-bottom:.0001pt;text-align:center;line-height:
12.25pt;mso-line-height-rule:exactly'><span lang=EN-US style='color:#221F1F;
mso-font-width:90%'>MOTOR</span></h4>

<p class=MsoNormal align=center style='margin-top:0cm;margin-right:49.0pt;
margin-bottom:0cm;margin-left:27.15pt;margin-bottom:.0001pt;text-align:center;
line-height:8.8pt;mso-line-height-rule:exactly'><b style='mso-bidi-font-weight:
normal'><span lang=EN-US style='font-size:8.0pt;mso-bidi-font-size:11.0pt;
color:#221F1F;mso-font-width:90%'>(SCORING ON REVERSE SIDE)</span></b><b
style='mso-bidi-font-weight:normal'><span lang=EN-US style='font-size:8.0pt;
mso-bidi-font-size:11.0pt'><o:p></o:p></span></b></p>

<p class=MsoBodyText style='margin-top:.2pt'><b style='mso-bidi-font-weight:
normal'><span lang=EN-US style='font-size:2.0pt;mso-bidi-font-size:9.0pt'><o:p>&nbsp;</o:p></span></b></p>

<p class=MsoBodyText style='margin-left:13.9pt'><!--[if mso & !supportInlineShapes & supportFields]><span
lang=EN-US style='font-size:10.0pt;mso-bidi-font-size:9.0pt'><span
style='mso-element:field-begin;mso-field-lock:yes'></span><span
style='mso-spacerun:yes'>�</span>SHAPE <span
style='mso-spacerun:yes'>�</span>\* MERGEFORMAT <span style='mso-element:field-separator'></span></span><![endif]--><span
lang=EN-US style='font-size:10.0pt;mso-bidi-font-size:9.0pt'><!--[if gte vml 1]><v:shape
 id="_x0000_s1145" type="#_x0000_t202" style='width:135.65pt;height:67.4pt;
 mso-left-percent:-10001;mso-top-percent:-10001;mso-position-horizontal:absolute;
 mso-position-horizontal-relative:char;mso-position-vertical:absolute;
 mso-position-vertical-relative:line;mso-left-percent:-10001;mso-top-percent:-10001'
 filled="f" strokeweight="1pt">
 <o:lock v:ext="edit" rotation="t" position="t"/>
 <v:textbox style='mso-next-textbox:#_x0000_s1145' inset="0,0,0,0">
  <![if !mso]>
  <table cellpadding=0 cellspacing=0 width="100%">
   <tr>
    <td><![endif]>
    <div>
    <p class=MsoNormal style='margin-top:.8pt;margin-right:0cm;margin-bottom:
    0cm;margin-left:6.2pt;margin-bottom:.0001pt;line-height:8.0pt;mso-line-height-rule:
    exactly'><i style='mso-bidi-font-style:normal'><span lang=EN-US
    style='font-size:7.0pt;mso-bidi-font-size:11.0pt;color:#221F1F'>0 = Total
    paralysis</span></i><i style='mso-bidi-font-style:normal'><span lang=EN-US
    style='font-size:7.0pt;mso-bidi-font-size:11.0pt'><o:p></o:p></span></i></p>
    <p class=MsoNormal style='margin-left:6.2pt;line-height:8.0pt;mso-line-height-rule:
    exactly'><i style='mso-bidi-font-style:normal'><span lang=EN-US
    style='font-size:7.0pt;mso-bidi-font-size:11.0pt;color:#221F1F;mso-font-width:
    95%'>1<span style='letter-spacing:-1.05pt'> </span>=<span style='letter-spacing:
    -1.05pt'> </span>Palpable<span style='letter-spacing:-1.05pt'> </span>or<span
    style='letter-spacing:-1.05pt'> </span>visible<span style='letter-spacing:
    -1.05pt'> </span>contraction</span></i><i style='mso-bidi-font-style:normal'><span
    lang=EN-US style='font-size:7.0pt;mso-bidi-font-size:11.0pt'><o:p></o:p></span></i></p>
    <p class=MsoNormal style='margin-top:0cm;margin-right:26.5pt;margin-bottom:
    0cm;margin-left:6.2pt;margin-bottom:.0001pt'><i style='mso-bidi-font-style:
    normal'><span lang=EN-US style='font-size:7.0pt;mso-bidi-font-size:11.0pt;
    color:#221F1F;mso-font-width:85%'>2<span style='letter-spacing:-.85pt'> </span>=<span
    style='letter-spacing:-1.05pt'> </span>Active<span style='letter-spacing:
    -.85pt'> </span>movement,<span style='letter-spacing:-.85pt'> </span>gravity<span
    style='letter-spacing:-.8pt'> </span>eliminated </span></i><i
    style='mso-bidi-font-style:normal'><span lang=EN-US style='font-size:7.0pt;
    mso-bidi-font-size:11.0pt;color:#221F1F;mso-font-width:90%'>3<span
    style='letter-spacing:-1.1pt'> </span>=<span style='letter-spacing:-1.2pt'>
    </span>Active<span style='letter-spacing:-1.05pt'> </span>movement,<span
    style='letter-spacing:-1.1pt'> </span>against<span style='letter-spacing:
    -1.05pt'> </span>gravity</span></i><i style='mso-bidi-font-style:normal'><span
    lang=EN-US style='font-size:7.0pt;mso-bidi-font-size:11.0pt'><o:p></o:p></span></i></p>
    <p class=MsoNormal style='margin-top:0cm;margin-right:11.0pt;margin-bottom:
    0cm;margin-left:4.6pt;margin-bottom:.0001pt'><i style='mso-bidi-font-style:
    normal'><span lang=EN-US style='font-size:7.0pt;mso-bidi-font-size:11.0pt;
    color:#221F1F;mso-font-width:85%'>4<span style='letter-spacing:-.85pt'> </span>=<span
    style='letter-spacing:-1.0pt'> </span>Active<span style='letter-spacing:
    -.85pt'> </span>movement,<span style='letter-spacing:-.8pt'> </span>against<span
    style='letter-spacing:-.8pt'> </span>some<span style='letter-spacing:-.85pt'>
    </span>resistance </span></i><i style='mso-bidi-font-style:normal'><span
    lang=EN-US style='font-size:7.0pt;mso-bidi-font-size:11.0pt;color:#221F1F;
    mso-font-width:90%'>5<span style='letter-spacing:-1.2pt'> </span>=<span
    style='letter-spacing:-1.3pt'> </span>Active<span style='letter-spacing:
    -1.2pt'> </span>movement,<span style='letter-spacing:-1.15pt'> </span>against<span
    style='letter-spacing:-1.2pt'> </span>full<span style='letter-spacing:-1.15pt'>
    </span>resistance </span></i><i style='mso-bidi-font-style:normal'><span
    lang=EN-US style='font-size:7.0pt;mso-bidi-font-size:11.0pt;color:#221F1F'>NT<span
    style='letter-spacing:-.35pt'> </span>=<span style='letter-spacing:-.3pt'> </span>Not<span
    style='letter-spacing:-1.1pt'> </span>testable</span></i><i
    style='mso-bidi-font-style:normal'><span lang=EN-US style='font-size:7.0pt;
    mso-bidi-font-size:11.0pt'><o:p></o:p></span></i></p>
    <p class=MsoNormal style='margin-left:4.6pt;line-height:7.9pt;mso-line-height-rule:
    exactly'><i style='mso-bidi-font-style:normal'><span lang=EN-US
    style='font-size:7.0pt;mso-bidi-font-size:11.0pt;mso-font-width:90%'>0*,<span
    style='letter-spacing:-1.2pt'> </span>1*,<span style='letter-spacing:-1.2pt'>
    </span>2*,<span style='letter-spacing:-1.15pt'> </span>3*,<span
    style='letter-spacing:-1.2pt'> </span>4*,<span style='letter-spacing:-1.2pt'>
    </span>NT*<span style='letter-spacing:-1.15pt'> </span>=<span
    style='letter-spacing:-1.2pt'> </span>Non-SCI<span style='letter-spacing:
    -1.15pt'> </span>condition<span style='letter-spacing:-1.2pt'> </span>present</span></i><i
    style='mso-bidi-font-style:normal'><span lang=EN-US style='font-size:7.0pt;
    mso-bidi-font-size:11.0pt'><o:p></o:p></span></i></p>
    </div>
    <![if !mso]></td>
   </tr>
  </table>
  <![endif]></v:textbox>
 <w:wrap type="none"/>
 <w:anchorlock/>
</v:shape><![endif]--><![if !vml]><img width=186 height=95
src="F081-THHC%20(ASIA)%20American%20Spinal%20Injury%20Association.files/image016.gif"
alt="&#1605;&#1585;&#1576;&#1593; &#1606;&#1589;: 0 = Total paralysis&#13;&#10;1 = Palpable or visible contraction&#13;&#10;2 = Active movement, gravity eliminated 3 = Active movement, against gravity&#13;&#10;4 = Active movement, against some resistance 5 = Active movement, against full resistance NT = Not testable&#13;&#10;0*, 1*, 2*, 3*, 4*, NT* = Non-SCI condition present&#13;&#10;"
v:shapes="_x0000_s1145"><![endif]></span><!--[if mso & !supportInlineShapes & supportFields]><span
lang=EN-US style='font-size:10.0pt;mso-bidi-font-size:9.0pt'><v:shape id="_x0000_i1025"
 type="#_x0000_t75" style='width:135.65pt;height:67.4pt'>
 <v:imagedata croptop="-65520f" cropbottom="65520f"/>
</v:shape><span style='mso-element:field-end'></span></span><![endif]--><span
lang=EN-US style='font-size:10.0pt;mso-bidi-font-size:9.0pt'><o:p></o:p></span></p>

<h4 align=center style='margin-top:2.15pt;margin-right:47.75pt;margin-bottom:
0cm;margin-left:27.15pt;margin-bottom:.0001pt;text-align:center;line-height:
12.25pt;mso-line-height-rule:exactly'><span lang=EN-US style='color:#221F1F;
mso-font-width:95%'>SENSORY</span></h4>

<p class=MsoNormal align=center style='margin-top:0cm;margin-right:45.4pt;
margin-bottom:0cm;margin-left:24.85pt;margin-bottom:.0001pt;text-align:center;
line-height:8.8pt;mso-line-height-rule:exactly'><b style='mso-bidi-font-weight:
normal'><span lang=EN-US style='font-size:8.0pt;mso-bidi-font-size:11.0pt;
color:#221F1F;mso-font-width:95%'>(SCORING ON REVERSE SIDE)</span></b><b
style='mso-bidi-font-weight:normal'><span lang=EN-US style='font-size:8.0pt;
mso-bidi-font-size:11.0pt'><o:p></o:p></span></b></p>

<p class=MsoBodyText style='margin-top:.15pt'><b style='mso-bidi-font-weight:
normal'><span lang=EN-US style='font-size:1.5pt;mso-bidi-font-size:9.0pt'><o:p>&nbsp;</o:p></span></b></p>

<p class=MsoBodyText style='margin-left:13.9pt'><!--[if mso & !supportInlineShapes & supportFields]><span
lang=EN-US style='font-size:10.0pt;mso-bidi-font-size:9.0pt'><span
style='mso-element:field-begin;mso-field-lock:yes'></span><span
style='mso-spacerun:yes'>�</span>SHAPE <span
style='mso-spacerun:yes'>�</span>\* MERGEFORMAT <span style='mso-element:field-separator'></span></span><![endif]--><span
lang=EN-US style='font-size:10.0pt;mso-bidi-font-size:9.0pt'><!--[if gte vml 1]><v:group
 id="_x0000_s1070" style='width:136.65pt;height:26.95pt;
 mso-position-horizontal-relative:char;mso-position-vertical-relative:line'
 coordsize="2733,539">
 <o:lock v:ext="edit" rotation="t" position="t"/>
 <v:rect id="_x0000_s1073" style='position:absolute;left:10;top:10;width:2713;
  height:519' filled="f" strokeweight="1pt"/>
 <v:shape id="_x0000_s1072" type="#_x0000_t202" style='position:absolute;
  left:112;top:15;width:585;height:481' filled="f" stroked="f">
  <v:textbox style='mso-next-textbox:#_x0000_s1072' inset="0,0,0,0">
   <![if !mso]>
   <table cellpadding=0 cellspacing=0 width="100%">
    <tr>
     <td><![endif]>
     <div>
     <p class=MsoNormal style='line-height:8.0pt;mso-line-height-rule:exactly'><i
     style='mso-bidi-font-style:normal'><span lang=EN-US style='font-size:7.0pt;
     mso-bidi-font-size:11.0pt;color:#221F1F;mso-font-width:85%'>0 =<span
     style='letter-spacing:-1.45pt'> </span>Absent</span></i><i
     style='mso-bidi-font-style:normal'><span lang=EN-US style='font-size:7.0pt;
     mso-bidi-font-size:11.0pt'><o:p></o:p></span></i></p>
     <p class=MsoNormal style='line-height:8.0pt;mso-line-height-rule:exactly'><i
     style='mso-bidi-font-style:normal'><span lang=EN-US style='font-size:7.0pt;
     mso-bidi-font-size:11.0pt;mso-font-width:85%'>1<span style='letter-spacing:
     -.6pt'> </span>=<span style='letter-spacing:-.85pt'> </span>Altered</span></i><i
     style='mso-bidi-font-style:normal'><span lang=EN-US style='font-size:7.0pt;
     mso-bidi-font-size:11.0pt'><o:p></o:p></span></i></p>
     <p class=MsoNormal style='line-height:8.0pt;mso-line-height-rule:exactly'><i
     style='mso-bidi-font-style:normal'><span lang=EN-US style='font-size:7.0pt;
     mso-bidi-font-size:11.0pt;mso-font-width:85%'>2 =<span style='letter-spacing:
     -1.05pt'> </span>Normal</span></i><i style='mso-bidi-font-style:normal'><span
     lang=EN-US style='font-size:7.0pt;mso-bidi-font-size:11.0pt'><o:p></o:p></span></i></p>
     </div>
     <![if !mso]></td>
    </tr>
   </table>
   <![endif]></v:textbox>
 </v:shape><v:shape id="_x0000_s1071" type="#_x0000_t202" style='position:absolute;
  left:1081;top:15;width:1565;height:481' filled="f" stroked="f">
  <v:textbox style='mso-next-textbox:#_x0000_s1071' inset="0,0,0,0">
   <![if !mso]>
   <table cellpadding=0 cellspacing=0 width="100%">
    <tr>
     <td><![endif]>
     <div>
     <p class=MsoNormal style='line-height:8.0pt;mso-line-height-rule:exactly'><i
     style='mso-bidi-font-style:normal'><span lang=EN-US style='font-size:7.0pt;
     mso-bidi-font-size:11.0pt;color:#221F1F'>NT = Not testable</span></i><i
     style='mso-bidi-font-style:normal'><span lang=EN-US style='font-size:7.0pt;
     mso-bidi-font-size:11.0pt'><o:p></o:p></span></i></p>
     <p class=MsoNormal style='line-height:8.0pt;mso-line-height-rule:exactly'><i
     style='mso-bidi-font-style:normal'><span lang=EN-US style='font-size:7.0pt;
     mso-bidi-font-size:11.0pt'>0*, 1*, NT* = Non-SCI<o:p></o:p></span></i></p>
     <p class=MsoNormal style='margin-left:33.5pt;line-height:8.0pt;mso-line-height-rule:
     exactly'><i style='mso-bidi-font-style:normal'><span lang=EN-US
     style='font-size:7.0pt;mso-bidi-font-size:11.0pt;mso-font-width:85%'>condition<span
     style='letter-spacing:-1.1pt'> </span>present</span></i><i
     style='mso-bidi-font-style:normal'><span lang=EN-US style='font-size:7.0pt;
     mso-bidi-font-size:11.0pt'><o:p></o:p></span></i></p>
     </div>
     <![if !mso]></td>
    </tr>
   </table>
   <![endif]></v:textbox>
 </v:shape><w:wrap type="none"/>
 <w:anchorlock/>
</v:group><![endif]--><![if !vml]><img width=183 height=37
src="F081-THHC%20(ASIA)%20American%20Spinal%20Injury%20Association.files/image017.gif"
v:shapes="_x0000_s1070 _x0000_s1073 _x0000_s1072 _x0000_s1071"><![endif]></span><!--[if mso & !supportInlineShapes & supportFields]><span
lang=EN-US style='font-size:10.0pt;mso-bidi-font-size:9.0pt'><v:shape id="_x0000_i1026"
 type="#_x0000_t75" style='width:136.65pt;height:26.95pt'>
 <v:imagedata croptop="-65520f" cropbottom="65520f"/>
</v:shape><span style='mso-element:field-end'></span></span><![endif]--><span
lang=EN-US style='font-size:10.0pt;mso-bidi-font-size:9.0pt'><o:p></o:p></span></p>

<p class=MsoNormal style='margin-top:5.6pt;margin-right:0cm;margin-bottom:0cm;
margin-left:17.35pt;margin-bottom:.0001pt;line-height:12.3pt;mso-line-height-rule:
exactly'><!--[if gte vml 1]><v:shape id="_x0000_s1069" type="#_x0000_t202"
 style='position:absolute;left:0;text-align:left;margin-left:578.45pt;
 margin-top:3.55pt;width:31.25pt;height:65.9pt;z-index:15760896;
 mso-position-horizontal-relative:page' filled="f" stroked="f">
 <v:textbox style='mso-next-textbox:#_x0000_s1069' inset="0,0,0,0"/>
 <w:wrap anchorx="page"/>
</v:shape><![endif]--><![if !vml]><span style='mso-ignore:vglayout;position:
absolute;z-index:15760896;left:0px;margin-left:972px;margin-top:1041px;
width:56px;height:114px'>

<table cellpadding=0 cellspacing=0>
 <tr>
  <td width=56 height=114 style='vertical-align:top'><![endif]><![if !mso]><span
  style='position:absolute;mso-ignore:vglayout;left:0pt;z-index:15760896'>
  <table cellpadding=0 cellspacing=0 width="100%">
   <tr>
    <td><![endif]>
    <div v:shape="_x0000_s1069" style='padding:0pt 0pt 0pt 0pt' class=shape>
    <table class=MsoNormalTable border=1 cellspacing=0 cellpadding=0
     style='margin-left:.5pt;border-collapse:collapse;mso-table-layout-alt:
     fixed;border:none;mso-border-alt:solid black 1.0pt;mso-yfti-tbllook:480;
     mso-padding-alt:0cm 0cm 0cm 0cm;mso-border-insideh:1.0pt solid black;
     mso-border-insidev:1.0pt solid black'>
     <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;height:11.95pt'>
      <td width=40 valign=top style='width:30.0pt;border:solid black 1.0pt;
      padding:0cm 0cm 0cm 0cm;height:11.95pt'>
      <p class=TableParagraph><span lang=EN-US style='font-size:8.0pt;
      mso-bidi-font-size:11.0pt;font-family:"Times New Roman",serif;mso-hansi-font-family:
      Arial;mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
      </td>
     </tr>
     <tr style='mso-yfti-irow:1;height:12.0pt'>
      <td width=40 valign=top style='width:30.0pt;border:solid black 1.0pt;
      border-top:none;mso-border-top-alt:solid black 1.0pt;padding:0cm 0cm 0cm 0cm;
      height:12.0pt'>
      <p class=TableParagraph><span lang=EN-US style='font-size:8.0pt;
      mso-bidi-font-size:11.0pt;font-family:"Times New Roman",serif;mso-hansi-font-family:
      Arial;mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
      </td>
     </tr>
     <tr style='mso-yfti-irow:2;height:12.0pt'>
      <td width=40 valign=top style='width:30.0pt;border:solid black 1.0pt;
      border-top:none;mso-border-top-alt:solid black 1.0pt;padding:0cm 0cm 0cm 0cm;
      height:12.0pt'>
      <p class=TableParagraph><span lang=EN-US style='font-size:8.0pt;
      mso-bidi-font-size:11.0pt;font-family:"Times New Roman",serif;mso-hansi-font-family:
      Arial;mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
      </td>
     </tr>
     <tr style='mso-yfti-irow:3;height:12.0pt'>
      <td width=40 valign=top style='width:30.0pt;border:solid black 1.0pt;
      border-top:none;mso-border-top-alt:solid black 1.0pt;padding:0cm 0cm 0cm 0cm;
      height:12.0pt'>
      <p class=TableParagraph><span lang=EN-US style='font-size:8.0pt;
      mso-bidi-font-size:11.0pt;font-family:"Times New Roman",serif;mso-hansi-font-family:
      Arial;mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
      </td>
     </tr>
     <tr style='mso-yfti-irow:4;mso-yfti-lastrow:yes;height:12.0pt'>
      <td width=40 valign=top style='width:30.0pt;border:solid black 1.0pt;
      border-top:none;mso-border-top-alt:solid black 1.0pt;padding:0cm 0cm 0cm 0cm;
      height:12.0pt'>
      <p class=TableParagraph><span lang=EN-US style='font-size:8.0pt;
      mso-bidi-font-size:11.0pt;font-family:"Times New Roman",serif;mso-hansi-font-family:
      Arial;mso-bidi-font-family:Arial'><o:p>&nbsp;</o:p></span></p>
      </td>
     </tr>
    </table>
    <p class=MsoBodyText><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
    </div>
    <![if !mso]></td>
   </tr>
  </table>
  </span><![endif]><![if !mso & !vml]>&nbsp;<![endif]><![if !vml]></td>
 </tr>
</table>

</span><![endif]><span lang=EN-US><b style='mso-bidi-font-weight:normal'><span
style='color:#221F1F;mso-font-width:90%'>L2 </span></b></span><i
style='mso-bidi-font-style:normal'><span lang=EN-US style='font-size:9.0pt;
mso-bidi-font-size:11.0pt;color:#221F1F;position:relative;top:-.5pt;mso-text-raise:
.5pt;mso-font-width:90%'>Hip flexors</span></i><i style='mso-bidi-font-style:
normal'><span lang=EN-US style='font-size:9.0pt;mso-bidi-font-size:11.0pt'><o:p></o:p></span></i></p>

</div>

<span lang=EN-US style='font-size:9.0pt;mso-bidi-font-size:11.0pt;font-family:
"Arial",sans-serif;mso-fareast-font-family:Arial;mso-ansi-language:EN-US;
mso-fareast-language:EN-US;mso-bidi-language:AR-SA'><br clear=all
style='page-break-before:auto;mso-break-type:section-break'>
</span>

<div class=WordSection5>

<h3 style='margin-left:10.0pt'><span lang=EN-US style='color:#221F1F;
mso-font-width:90%'>LER</span></h3>

<p class=MsoNormal align=center style='margin-left:10.05pt;text-align:center;
line-height:8.85pt;mso-line-height-rule:exactly'><b style='mso-bidi-font-weight:
normal'><span lang=EN-US style='font-size:8.0pt;mso-bidi-font-size:11.0pt;
color:#221F1F;mso-font-width:85%'>(Lower<span style='letter-spacing:-1.0pt'> </span>Extremity<span
style='letter-spacing:-.95pt'> </span><span style='letter-spacing:-.2pt'>Right)</span></span></b><b
style='mso-bidi-font-weight:normal'><span lang=EN-US style='font-size:8.0pt;
mso-bidi-font-size:11.0pt'><o:p></o:p></span></b></p>

<span lang=EN-US style='font-size:11.0pt;font-family:"Arial",sans-serif;
mso-fareast-font-family:Arial;mso-ansi-language:EN-US;mso-fareast-language:
EN-US;mso-bidi-language:AR-SA'><br clear=all style='mso-column-break-before:
always'>
</span>

<p class=MsoNormal style='margin-left:16.8pt'><i style='mso-bidi-font-style:
normal'><span lang=EN-US style='font-size:9.0pt;mso-bidi-font-size:11.0pt;
color:#221F1F;position:relative;top:-.5pt;mso-text-raise:.5pt;mso-font-width:
90%'>Knee extensors </span></i><b style='mso-bidi-font-weight:normal'><span
lang=EN-US style='color:#221F1F;mso-font-width:90%'>L3</span><span lang=EN-US><o:p></o:p></span></b></p>

<p class=MsoNormal style='margin-top:.35pt;margin-right:0cm;margin-bottom:0cm;
margin-left:9.85pt;margin-bottom:.0001pt;tab-stops:290.45pt'><i
style='mso-bidi-font-style:normal'><span lang=EN-US style='font-size:9.0pt;
mso-bidi-font-size:11.0pt;color:#221F1F;position:relative;top:-.5pt;mso-text-raise:
.5pt;mso-font-width:95%'>Ankle<span style='letter-spacing:-1.7pt'> </span>dorsiflexors<span
style='letter-spacing:.1pt'> </span></span></i><b style='mso-bidi-font-weight:
normal'><span lang=EN-US style='color:#221F1F;mso-font-width:95%'>L4<span
style='mso-tab-count:1'>������������������������������������������������������������������ </span></span></b><span
class=SpellE><span lang=EN-US style='font-size:5.0pt;mso-bidi-font-size:11.0pt;
position:relative;top:-4.5pt;mso-text-raise:4.5pt'>L4</span></span><span
lang=EN-US style='font-size:5.0pt;mso-bidi-font-size:11.0pt'><o:p></o:p></span></p>

<p class=MsoNormal style='margin-top:.35pt;margin-right:0cm;margin-bottom:0cm;
margin-left:5.3pt;margin-bottom:.0001pt;tab-stops:299.35pt'><i
style='mso-bidi-font-style:normal'><span lang=EN-US style='font-size:9.0pt;
mso-bidi-font-size:11.0pt;color:#221F1F;position:relative;top:-.5pt;mso-text-raise:
.5pt;mso-font-width:95%'>Long<span style='letter-spacing:-1.6pt'> </span>toe<span
style='letter-spacing:-1.6pt'> </span>extensors<span style='letter-spacing:
.45pt'> </span></span></i><b style='mso-bidi-font-weight:normal'><span
lang=EN-US style='color:#221F1F;mso-font-width:95%'>L5<span style='mso-tab-count:
1'>��������������������������������������������������������������������� </span></span></b><span
class=SpellE><span lang=EN-US style='font-size:5.0pt;mso-bidi-font-size:11.0pt;
position:relative;top:-4.5pt;mso-text-raise:4.5pt;mso-font-width:95%'>L5</span></span><span
lang=EN-US style='font-size:5.0pt;mso-bidi-font-size:11.0pt'><o:p></o:p></span></p>

<p class=MsoNormal style='margin-top:.35pt;margin-right:0cm;margin-bottom:0cm;
margin-left:1.2pt;margin-bottom:.0001pt'><i style='mso-bidi-font-style:normal'><span
lang=EN-US style='font-size:9.0pt;mso-bidi-font-size:11.0pt;color:#221F1F;
position:relative;top:-.5pt;mso-text-raise:.5pt;mso-font-width:90%'>Ankle
plantar flexors </span></i><b style='mso-bidi-font-weight:normal'><span
lang=EN-US style='color:#221F1F;mso-font-width:90%'>S1</span><span lang=EN-US><o:p></o:p></span></b></p>

<h4 align=center style='margin-top:1.75pt;margin-right:185.2pt;margin-bottom:
0cm;margin-left:107.7pt;margin-bottom:.0001pt;text-align:center;line-height:
11.8pt;mso-line-height-rule:exactly'><span lang=EN-US style='color:#221F1F;
mso-font-width:90%'>S2</span></h4>

<span lang=EN-US style='font-size:11.0pt;line-height:102%;font-family:"Arial",sans-serif;
mso-fareast-font-family:Arial;mso-ansi-language:EN-US;mso-fareast-language:
EN-US;mso-bidi-language:AR-SA'><br clear=all style='mso-column-break-before:
always'>
</span>

<p class=MsoNormal style='margin-top:.7pt;margin-right:2.15pt;margin-bottom:
0cm;margin-left:44.95pt;margin-bottom:.0001pt;line-height:102%'><b
style='mso-bidi-font-weight:normal'><span lang=EN-US style='color:#221F1F;
mso-font-width:90%'>L3 </span></b><i style='mso-bidi-font-style:normal'><span
lang=EN-US style='font-size:9.0pt;mso-bidi-font-size:11.0pt;line-height:102%;
color:#221F1F;position:relative;top:-.5pt;mso-text-raise:.5pt;mso-font-width:
90%'>Knee extensors </span></i><b style='mso-bidi-font-weight:normal'><span
lang=EN-US style='color:#221F1F;mso-font-width:90%'>L4 </span></b><i
style='mso-bidi-font-style:normal'><span lang=EN-US style='font-size:9.0pt;
mso-bidi-font-size:11.0pt;line-height:102%;color:#221F1F;position:relative;
top:-.5pt;mso-text-raise:.5pt;mso-font-width:90%'>Ankle dorsiflexors </span></i><b
style='mso-bidi-font-weight:normal'><span lang=EN-US style='color:#221F1F;
mso-font-width:85%'>L5 </span></b><i style='mso-bidi-font-style:normal'><span
lang=EN-US style='font-size:9.0pt;mso-bidi-font-size:11.0pt;line-height:102%;
color:#221F1F;position:relative;top:-.5pt;mso-text-raise:.5pt;mso-font-width:
85%'>Long toe<span style='letter-spacing:-.3pt'> </span>extensors</span></i><i
style='mso-bidi-font-style:normal'><span lang=EN-US style='font-size:9.0pt;
mso-bidi-font-size:11.0pt;line-height:102%'><o:p></o:p></span></i></p>

<p class=MsoNormal style='margin-left:44.95pt;line-height:12.5pt;mso-line-height-rule:
exactly'><b style='mso-bidi-font-weight:normal'><span lang=EN-US
style='color:#221F1F;mso-font-width:85%'>S1 </span></b><i style='mso-bidi-font-style:
normal'><span lang=EN-US style='font-size:9.0pt;mso-bidi-font-size:11.0pt;
color:#221F1F;position:relative;top:-.5pt;mso-text-raise:.5pt;mso-font-width:
85%'>Ankle plantar<span style='letter-spacing:-.85pt'> </span>flexors</span></i><i
style='mso-bidi-font-style:normal'><span lang=EN-US style='font-size:9.0pt;
mso-bidi-font-size:11.0pt'><o:p></o:p></span></i></p>

<h4 style='margin-left:10.05pt;line-height:12.55pt;mso-line-height-rule:exactly'><span
lang=EN-US style='color:#221F1F;mso-font-width:90%'>S2</span></h4>

<span lang=EN-US style='font-size:11.0pt;font-family:"Arial",sans-serif;
mso-fareast-font-family:Arial;mso-ansi-language:EN-US;mso-fareast-language:
EN-US;mso-bidi-language:AR-SA'><br clear=all style='mso-column-break-before:
always'>
</span>

<p class=MsoNormal align=center style='margin-top:3.05pt;margin-right:3.6pt;
margin-bottom:0cm;margin-left:.35pt;margin-bottom:.0001pt;text-align:center;
line-height:14.6pt;mso-line-height-rule:exactly'><b style='mso-bidi-font-weight:
normal'><span lang=EN-US style='font-size:13.0pt;mso-bidi-font-size:11.0pt;
color:#221F1F;mso-font-width:95%'>LEL</span></b><b style='mso-bidi-font-weight:
normal'><span lang=EN-US style='font-size:13.0pt;mso-bidi-font-size:11.0pt'><o:p></o:p></span></b></p>

<p class=MsoNormal align=center style='margin-top:0cm;margin-right:3.6pt;
margin-bottom:0cm;margin-left:.4pt;margin-bottom:.0001pt;text-align:center;
line-height:8.85pt;mso-line-height-rule:exactly'><b style='mso-bidi-font-weight:
normal'><span lang=EN-US style='font-size:8.0pt;mso-bidi-font-size:11.0pt;
color:#221F1F;mso-font-width:90%'>(Lower Extremity Left)</span></b><b
style='mso-bidi-font-weight:normal'><span lang=EN-US style='font-size:8.0pt;
mso-bidi-font-size:11.0pt'><o:p></o:p></span></b></p>

</div>

<span lang=EN-US style='font-size:8.0pt;mso-bidi-font-size:11.0pt;font-family:
"Arial",sans-serif;mso-fareast-font-family:Arial;mso-ansi-language:EN-US;
mso-fareast-language:EN-US;mso-bidi-language:AR-SA'><br clear=all
style='page-break-before:auto;mso-break-type:section-break'>
</span>

<div class=WordSection6>

<p class=MsoHeading7 align=right style='margin-top:8.05pt;margin-right:47.8pt;
margin-bottom:0cm;margin-left:0cm;margin-bottom:.0001pt;text-align:right;
line-height:10.15pt;mso-line-height-rule:exactly'><!--[if gte vml 1]><v:rect
 id="_x0000_s1068" style='position:absolute;left:0;text-align:left;
 margin-left:139.3pt;margin-top:12.5pt;width:29.05pt;height:13.5pt;z-index:15739392;
 mso-position-horizontal-relative:page' filled="f" strokeweight="1.5pt">
 <w:wrap anchorx="page"/>
</v:rect><![endif]--><![if !vml]><span style='mso-ignore:vglayout;position:
absolute;z-index:15739392;left:0px;margin-left:238px;margin-top:1131px;
width:52px;height:26px'><img width=42 height=21
src="F081-THHC%20(ASIA)%20American%20Spinal%20Injury%20Association.files/image018.gif"
v:shapes="_x0000_s1068"></span><![endif]><span lang=EN-US><span
style='color:#221F1F;letter-spacing:-.15pt;mso-font-width:80%'>(VAC) </span><span
style='color:#221F1F;mso-font-width:80%'>Voluntary Anal<span style='letter-spacing:
.15pt'> </span>Contraction</span></span></p>

<p class=MsoNormal align=right style='margin-right:47.85pt;text-align:right;
line-height:10.15pt;mso-line-height-rule:exactly'><b style='mso-bidi-font-weight:
normal'><i style='mso-bidi-font-style:normal'><span lang=EN-US
style='font-size:9.0pt;mso-bidi-font-size:11.0pt;color:#221F1F;mso-font-width:
90%'>(Yes/No)</span></i></b><b style='mso-bidi-font-weight:normal'><i
style='mso-bidi-font-style:normal'><span lang=EN-US style='font-size:9.0pt;
mso-bidi-font-size:11.0pt'><o:p></o:p></span></i></b></p>

<p class=MsoNormal align=right style='margin-top:5.9pt;margin-right:2.0pt;
margin-bottom:0cm;margin-left:0cm;margin-bottom:.0001pt;text-align:right'><b
style='mso-bidi-font-weight:normal'><i style='mso-bidi-font-style:normal'><span
lang=EN-US style='font-size:9.0pt;mso-bidi-font-size:11.0pt;color:#221F1F;
letter-spacing:-.15pt;mso-font-width:85%'>RIGHT</span></i></b><b
style='mso-bidi-font-weight:normal'><i style='mso-bidi-font-style:normal'><span
lang=EN-US style='font-size:9.0pt;mso-bidi-font-size:11.0pt;color:#221F1F;
letter-spacing:1.35pt;mso-font-width:85%'> </span></i></b><b style='mso-bidi-font-weight:
normal'><i style='mso-bidi-font-style:normal'><span lang=EN-US
style='font-size:9.0pt;mso-bidi-font-size:11.0pt;color:#221F1F;letter-spacing:
-.35pt;mso-font-width:85%'>TOTALS</span></i></b><b style='mso-bidi-font-weight:
normal'><i style='mso-bidi-font-style:normal'><span lang=EN-US
style='font-size:9.0pt;mso-bidi-font-size:11.0pt'><o:p></o:p></span></i></b></p>

<p class=MsoNormal align=right style='margin-top:1.65pt;margin-right:1.9pt;
margin-bottom:0cm;margin-left:0cm;margin-bottom:.0001pt;text-align:right'><b
style='mso-bidi-font-weight:normal'><span lang=EN-US style='font-size:9.0pt;
mso-bidi-font-size:11.0pt;color:#221F1F;mso-font-width:90%'>(MAXIMUM)</span></b><b
style='mso-bidi-font-weight:normal'><span lang=EN-US style='font-size:9.0pt;
mso-bidi-font-size:11.0pt'><o:p></o:p></span></b></p>

<p class=MsoNormal style='margin-top:3.9pt;margin-right:0cm;margin-bottom:0cm;
margin-left:14.65pt;margin-bottom:.0001pt'><!--[if gte vml 1]><v:rect id="_x0000_s1067"
 style='position:absolute;left:0;text-align:left;margin-left:91pt;margin-top:16.2pt;
 width:23.5pt;height:13.5pt;z-index:15740416;
 mso-position-horizontal-relative:page' filled="f" strokeweight=".8pt">
 <w:wrap anchorx="page"/>
</v:rect><![endif]--><![if !vml]><span style='mso-ignore:vglayout;position:
absolute;z-index:15740416;left:0px;margin-left:158px;margin-top:1157px;
width:42px;height:25px'><img width=34 height=20
src="F081-THHC%20(ASIA)%20American%20Spinal%20Injury%20Association.files/image019.gif"
v:shapes="_x0000_s1067"></span><![endif]><!--[if gte vml 1]><v:rect id="_x0000_s1066"
 style='position:absolute;left:0;text-align:left;margin-left:175.85pt;
 margin-top:16.2pt;width:27.25pt;height:13.5pt;z-index:15741440;
 mso-position-horizontal-relative:page' filled="f" strokeweight=".8pt">
 <w:wrap anchorx="page"/>
</v:rect><![endif]--><![if !vml]><span style='mso-ignore:vglayout;position:
absolute;z-index:15741440;left:0px;margin-left:299px;margin-top:1157px;
width:48px;height:25px'><img width=38 height=20
src="F081-THHC%20(ASIA)%20American%20Spinal%20Injury%20Association.files/image020.gif"
v:shapes="_x0000_s1066"></span><![endif]><b style='mso-bidi-font-weight:normal'><span
lang=EN-US style='font-size:9.0pt;mso-bidi-font-size:11.0pt;color:#221F1F'>MOTOR
SUBSCORES</span></b><b style='mso-bidi-font-weight:normal'><span lang=EN-US
style='font-size:9.0pt;mso-bidi-font-size:11.0pt'><o:p></o:p></span></b></p>

<span lang=EN-US style='font-size:11.0pt;line-height:102%;font-family:"Arial",sans-serif;
mso-fareast-font-family:Arial;mso-ansi-language:EN-US;mso-fareast-language:
EN-US;mso-bidi-language:AR-SA;mso-bidi-font-weight:bold'><br clear=all
style='mso-column-break-before:always'>
</span>

<h4 style='margin-top:1.2pt;margin-right:1.9pt;margin-bottom:0cm;margin-left:
9.95pt;margin-bottom:.0001pt;text-indent:8.0pt;line-height:102%'><span
lang=EN-US style='color:#221F1F;mso-font-width:80%'>S3 S4-5</span></h4>

<p class=MsoBodyText><b style='mso-bidi-font-weight:normal'><span lang=EN-US
style='font-size:12.0pt;mso-bidi-font-size:9.0pt'><o:p>&nbsp;</o:p></span></b></p>

<p class=MsoNormal style='margin-top:6.95pt;margin-right:0cm;margin-bottom:
0cm;margin-left:5.55pt;margin-bottom:.0001pt'><!--[if gte vml 1]><v:rect id="_x0000_s1065"
 style='position:absolute;left:0;text-align:left;margin-left:185.55pt;
 margin-top:-12.2pt;width:34.3pt;height:18.15pt;z-index:15738880;
 mso-position-horizontal-relative:page' filled="f" strokeweight="1pt">
 <w:wrap anchorx="page"/>
</v:rect><![endif]--><![if !vml]><span style='mso-ignore:vglayout;position:
absolute;z-index:15738880;left:0px;margin-left:315px;margin-top:1129px;
width:60px;height:33px'><img width=48 height=26
src="F081-THHC%20(ASIA)%20American%20Spinal%20Injury%20Association.files/image021.gif"
v:shapes="_x0000_s1065"></span><![endif]><i style='mso-bidi-font-style:normal'><span
lang=EN-US style='font-size:9.0pt;mso-bidi-font-size:11.0pt;color:#221F1F;
mso-font-width:90%'>(50)</span></i><i style='mso-bidi-font-style:normal'><span
lang=EN-US style='font-size:9.0pt;mso-bidi-font-size:11.0pt'><o:p></o:p></span></i></p>

<span lang=EN-US style='font-size:9.0pt;font-family:"Arial",sans-serif;
mso-fareast-font-family:Arial;mso-ansi-language:EN-US;mso-fareast-language:
EN-US;mso-bidi-language:AR-SA'><br clear=all style='mso-special-character:line-break;
mso-column-break-before:always'>
</span>

<p class=MsoBodyText><i style='mso-bidi-font-style:normal'><span lang=EN-US
style='font-size:10.0pt;mso-bidi-font-size:9.0pt'><o:p></o:p></span></i></p>

<p class=MsoBodyText><i style='mso-bidi-font-style:normal'><span lang=EN-US
style='font-size:10.0pt;mso-bidi-font-size:9.0pt'><o:p>&nbsp;</o:p></span></i></p>

<p class=MsoBodyText><i style='mso-bidi-font-style:normal'><span lang=EN-US
style='font-size:10.0pt;mso-bidi-font-size:9.0pt'><o:p>&nbsp;</o:p></span></i></p>

<p class=MsoBodyText style='margin-top:.3pt'><i style='mso-bidi-font-style:
normal'><span lang=EN-US style='font-size:11.5pt;mso-bidi-font-size:9.0pt'><o:p>&nbsp;</o:p></span></i></p>

<p class=MsoNormal style='margin-left:5.55pt'><i style='mso-bidi-font-style:
normal'><span lang=EN-US style='font-size:9.0pt;mso-bidi-font-size:11.0pt;
color:#221F1F;mso-font-width:90%'>(56)</span></i><i style='mso-bidi-font-style:
normal'><span lang=EN-US style='font-size:9.0pt;mso-bidi-font-size:11.0pt'><o:p></o:p></span></i></p>

<span lang=EN-US style='font-size:9.0pt;font-family:"Arial",sans-serif;
mso-fareast-font-family:Arial;mso-ansi-language:EN-US;mso-fareast-language:
EN-US;mso-bidi-language:AR-SA'><br clear=all style='mso-special-character:line-break;
mso-column-break-before:always'>
</span>

<p class=MsoBodyText><i style='mso-bidi-font-style:normal'><span lang=EN-US
style='font-size:10.0pt;mso-bidi-font-size:9.0pt'><o:p></o:p></span></i></p>

<p class=MsoBodyText><i style='mso-bidi-font-style:normal'><span lang=EN-US
style='font-size:10.0pt;mso-bidi-font-size:9.0pt'><o:p>&nbsp;</o:p></span></i></p>

<p class=MsoBodyText><i style='mso-bidi-font-style:normal'><span lang=EN-US
style='font-size:10.0pt;mso-bidi-font-size:9.0pt'><o:p>&nbsp;</o:p></span></i></p>

<p class=MsoBodyText style='margin-top:.3pt'><i style='mso-bidi-font-style:
normal'><span lang=EN-US style='font-size:11.5pt;mso-bidi-font-size:9.0pt'><o:p>&nbsp;</o:p></span></i></p>

<p class=MsoNormal style='margin-left:5.55pt'><i style='mso-bidi-font-style:
normal'><span lang=EN-US style='font-size:9.0pt;mso-bidi-font-size:11.0pt;
color:#221F1F;mso-font-width:90%'>(56)</span></i><i style='mso-bidi-font-style:
normal'><span lang=EN-US style='font-size:9.0pt;mso-bidi-font-size:11.0pt'><o:p></o:p></span></i></p>

<span lang=EN-US style='font-size:9.0pt;font-family:"Arial",sans-serif;
mso-fareast-font-family:Arial;mso-ansi-language:EN-US;mso-fareast-language:
EN-US;mso-bidi-language:AR-SA'><br clear=all style='mso-special-character:line-break;
mso-column-break-before:always'>
</span>

<p class=MsoBodyText><i style='mso-bidi-font-style:normal'><span lang=EN-US
style='font-size:10.0pt;mso-bidi-font-size:9.0pt'><o:p></o:p></span></i></p>

<p class=MsoBodyText><i style='mso-bidi-font-style:normal'><span lang=EN-US
style='font-size:10.0pt;mso-bidi-font-size:9.0pt'><o:p>&nbsp;</o:p></span></i></p>

<p class=MsoBodyText><i style='mso-bidi-font-style:normal'><span lang=EN-US
style='font-size:10.0pt;mso-bidi-font-size:9.0pt'><o:p>&nbsp;</o:p></span></i></p>

<p class=MsoBodyText style='margin-top:.3pt'><i style='mso-bidi-font-style:
normal'><span lang=EN-US style='font-size:11.5pt;mso-bidi-font-size:9.0pt'><o:p>&nbsp;</o:p></span></i></p>

<p class=MsoNormal align=right style='margin-right:12.15pt;text-align:right'><i
style='mso-bidi-font-style:normal'><span lang=EN-US style='font-size:9.0pt;
mso-bidi-font-size:11.0pt;color:#221F1F;mso-font-width:90%'>(56)</span></i><i
style='mso-bidi-font-style:normal'><span lang=EN-US style='font-size:9.0pt;
mso-bidi-font-size:11.0pt'><o:p></o:p></span></i></p>

<p class=MsoNormal style='margin-top:2.2pt;margin-right:0cm;margin-bottom:0cm;
margin-left:5.55pt;margin-bottom:.0001pt'><!--[if gte vml 1]><v:rect id="_x0000_s1064"
 style='position:absolute;left:0;text-align:left;margin-left:437.45pt;
 margin-top:14.5pt;width:24.55pt;height:13.5pt;z-index:15742976;
 mso-position-horizontal-relative:page' filled="f" strokeweight=".8pt">
 <w:wrap anchorx="page"/>
</v:rect><![endif]--><![if !vml]><span style='mso-ignore:vglayout;position:
absolute;z-index:15742976;left:0px;margin-left:735px;margin-top:1251px;
width:44px;height:25px'><img width=35 height=20
src="F081-THHC%20(ASIA)%20American%20Spinal%20Injury%20Association.files/image022.gif"
v:shapes="_x0000_s1064"></span><![endif]><!--[if gte vml 1]><v:rect id="_x0000_s1063"
 style='position:absolute;left:0;text-align:left;margin-left:490.55pt;
 margin-top:14.5pt;width:24.55pt;height:13.5pt;z-index:15743488;
 mso-position-horizontal-relative:page' filled="f" strokeweight=".8pt">
 <w:wrap anchorx="page"/>
</v:rect><![endif]--><![if !vml]><span style='mso-ignore:vglayout;position:
absolute;z-index:15743488;left:0px;margin-left:824px;margin-top:1251px;
width:43px;height:25px'><img width=34 height=20
src="F081-THHC%20(ASIA)%20American%20Spinal%20Injury%20Association.files/image023.gif"
v:shapes="_x0000_s1063"></span><![endif]><b style='mso-bidi-font-weight:normal'><span
lang=EN-US style='font-size:9.0pt;mso-bidi-font-size:11.0pt;color:#221F1F;
letter-spacing:-.2pt'>SENSORY </span></b><b style='mso-bidi-font-weight:normal'><span
lang=EN-US style='font-size:9.0pt;mso-bidi-font-size:11.0pt;color:#221F1F;
letter-spacing:-.15pt'>SUBSCORES</span></b><b style='mso-bidi-font-weight:normal'><span
lang=EN-US style='font-size:9.0pt;mso-bidi-font-size:11.0pt'><o:p></o:p></span></b></p>

<span lang=EN-US style='font-size:9.0pt;font-family:"Arial",sans-serif;
mso-fareast-font-family:Arial;mso-ansi-language:EN-US;mso-fareast-language:
EN-US;mso-bidi-language:AR-SA'><br clear=all style='mso-special-character:line-break;
mso-column-break-before:always'>
</span>

<p class=MsoBodyText><b style='mso-bidi-font-weight:normal'><span lang=EN-US
style='font-size:10.0pt;mso-bidi-font-size:9.0pt'><o:p></o:p></span></b></p>

<p class=MsoBodyText><b style='mso-bidi-font-weight:normal'><span lang=EN-US
style='font-size:10.0pt;mso-bidi-font-size:9.0pt'><o:p>&nbsp;</o:p></span></b></p>

<p class=MsoBodyText><b style='mso-bidi-font-weight:normal'><span lang=EN-US
style='font-size:10.0pt;mso-bidi-font-size:9.0pt'><o:p>&nbsp;</o:p></span></b></p>

<p class=MsoBodyText style='margin-top:.3pt'><b style='mso-bidi-font-weight:
normal'><span lang=EN-US style='font-size:11.5pt;mso-bidi-font-size:9.0pt'><o:p>&nbsp;</o:p></span></b></p>

<p class=MsoNormal style='margin-left:5.55pt'><i style='mso-bidi-font-style:
normal'><span lang=EN-US style='font-size:9.0pt;mso-bidi-font-size:11.0pt;
color:#221F1F;mso-font-width:90%'>(56)</span></i><i style='mso-bidi-font-style:
normal'><span lang=EN-US style='font-size:9.0pt;mso-bidi-font-size:11.0pt'><o:p></o:p></span></i></p>

<span lang=EN-US style='font-size:11.0pt;line-height:102%;font-family:"Arial",sans-serif;
mso-fareast-font-family:Arial;mso-ansi-language:EN-US;mso-fareast-language:
EN-US;mso-bidi-language:AR-SA;mso-bidi-font-weight:bold'><br clear=all
style='mso-column-break-before:always'>
</span>

<h4 style='margin-top:0cm;margin-right:10.55pt;margin-bottom:0cm;margin-left:
5.55pt;margin-bottom:.0001pt;line-height:102%'><span lang=EN-US
style='color:#221F1F;mso-font-width:90%'>S3 </span><span lang=EN-US
style='color:#221F1F;mso-font-width:80%'>S4-5</span></h4>

<p class=MsoBodyText><b style='mso-bidi-font-weight:normal'><span lang=EN-US
style='font-size:12.0pt;mso-bidi-font-size:9.0pt'><o:p>&nbsp;</o:p></span></b></p>

<p class=MsoNormal style='margin-top:8.15pt;margin-right:0cm;margin-bottom:
0cm;margin-left:20.15pt;margin-bottom:.0001pt'><!--[if gte vml 1]><v:rect id="_x0000_s1062"
 style='position:absolute;left:0;text-align:left;margin-left:581.1pt;
 margin-top:-11pt;width:34.3pt;height:18.15pt;z-index:15738368;
 mso-position-horizontal-relative:page' filled="f" strokeweight="1pt">
 <w:wrap anchorx="page"/>
</v:rect><![endif]--><![if !vml]><span style='mso-ignore:vglayout;position:
absolute;z-index:15738368;left:0px;margin-left:975px;margin-top:1252px;
width:59px;height:33px'><img width=47 height=26
src="F081-THHC%20(ASIA)%20American%20Spinal%20Injury%20Association.files/image024.gif"
v:shapes="_x0000_s1062"></span><![endif]><i style='mso-bidi-font-style:normal'><span
lang=EN-US style='font-size:9.0pt;mso-bidi-font-size:11.0pt;color:#221F1F;
mso-font-width:90%'>(50)</span></i><i style='mso-bidi-font-style:normal'><span
lang=EN-US style='font-size:9.0pt;mso-bidi-font-size:11.0pt'><o:p></o:p></span></i></p>

<span lang=EN-US style='font-size:9.0pt;line-height:105%;font-family:"Arial",sans-serif;
mso-fareast-font-family:Arial;mso-ansi-language:EN-US;mso-fareast-language:
EN-US;mso-bidi-language:AR-SA;mso-bidi-font-weight:bold'><br clear=all
style='mso-column-break-before:always'>
</span>

<p class=MsoHeading7 style='margin-top:8.55pt;margin-right:16.35pt;margin-bottom:
0cm;margin-left:53.75pt;margin-bottom:.0001pt;line-height:105%'><span
lang=EN-US style='color:#221F1F;mso-font-width:85%'>(DAP) Deep Anal Pressure </span><span
lang=EN-US style='color:#221F1F;mso-font-width:90%'>(Yes/No)</span></p>

<p class=MsoNormal style='margin-top:4.55pt;margin-right:0cm;margin-bottom:
0cm;margin-left:5.55pt;margin-bottom:.0001pt'><!--[if gte vml 1]><v:rect id="_x0000_s1061"
 style='position:absolute;left:0;text-align:left;margin-left:629.5pt;
 margin-top:-17.95pt;width:29.05pt;height:13.5pt;z-index:15739904;
 mso-position-horizontal-relative:page' filled="f" strokeweight="1.5pt">
 <w:wrap anchorx="page"/>
</v:rect><![endif]--><![if !vml]><span style='mso-ignore:vglayout;position:
absolute;z-index:15739904;left:0px;margin-left:1055px;margin-top:1257px;
width:52px;height:26px'><img width=42 height=21
src="F081-THHC%20(ASIA)%20American%20Spinal%20Injury%20Association.files/image018.gif"
v:shapes="_x0000_s1061"></span><![endif]><b style='mso-bidi-font-weight:normal'><i
style='mso-bidi-font-style:normal'><span lang=EN-US style='font-size:9.0pt;
mso-bidi-font-size:11.0pt;color:#221F1F;mso-font-width:95%'>LEFT TOTALS</span></i></b><b
style='mso-bidi-font-weight:normal'><i style='mso-bidi-font-style:normal'><span
lang=EN-US style='font-size:9.0pt;mso-bidi-font-size:11.0pt'><o:p></o:p></span></i></b></p>

<p class=MsoNormal style='margin-top:1.65pt;margin-right:0cm;margin-bottom:
0cm;margin-left:5.55pt;margin-bottom:.0001pt'><b style='mso-bidi-font-weight:
normal'><span lang=EN-US style='font-size:9.0pt;mso-bidi-font-size:11.0pt;
color:#221F1F;mso-font-width:90%'>(MAXIMUM)</span></b><b style='mso-bidi-font-weight:
normal'><span lang=EN-US style='font-size:9.0pt;mso-bidi-font-size:11.0pt'><o:p></o:p></span></b></p>

</div>

<span lang=EN-US style='font-size:9.0pt;mso-bidi-font-size:11.0pt;font-family:
"Arial",sans-serif;mso-fareast-font-family:Arial;mso-ansi-language:EN-US;
mso-fareast-language:EN-US;mso-bidi-language:AR-SA'><br clear=all
style='page-break-before:auto;mso-break-type:section-break'>
</span>

<div class=WordSection7>

<p class=MsoNormal style='margin-top:3.9pt;margin-right:0cm;margin-bottom:0cm;
margin-left:6.15pt;margin-bottom:.0001pt'><!--[if gte vml 1]><v:rect id="_x0000_s1060"
 style='position:absolute;left:0;text-align:left;margin-left:40.75pt;
 margin-top:1.95pt;width:23.5pt;height:13.5pt;z-index:15740928;
 mso-position-horizontal-relative:page' filled="f" strokeweight=".8pt">
 <w:wrap anchorx="page"/>
</v:rect><![endif]--><![if !vml]><span style='mso-ignore:vglayout;position:
absolute;z-index:15740928;left:0px;margin-left:74px;margin-top:1301px;
width:42px;height:24px'><img width=34 height=19
src="F081-THHC%20(ASIA)%20American%20Spinal%20Injury%20Association.files/image025.gif"
v:shapes="_x0000_s1060"></span><![endif]><b style='mso-bidi-font-weight:normal'><span
lang=EN-US style='font-size:9.0pt;mso-bidi-font-size:11.0pt;color:#221F1F'>UER</span></b><b
style='mso-bidi-font-weight:normal'><span lang=EN-US style='font-size:9.0pt;
mso-bidi-font-size:11.0pt'><o:p></o:p></span></b></p>

<p class=MsoNormal style='margin-top:2.3pt;margin-right:0cm;margin-bottom:0cm;
margin-left:13.9pt;margin-bottom:.0001pt'><i style='mso-bidi-font-style:normal'><span
lang=EN-US style='font-size:8.0pt;mso-bidi-font-size:11.0pt;color:#221F1F;
mso-font-width:85%'>MAX </span></i><i style='mso-bidi-font-style:normal'><span
lang=EN-US style='font-size:9.0pt;mso-bidi-font-size:11.0pt;color:#221F1F;
mso-font-width:85%'>(25)</span></i><i style='mso-bidi-font-style:normal'><span
lang=EN-US style='font-size:9.0pt;mso-bidi-font-size:11.0pt'><o:p></o:p></span></i></p>

<span lang=EN-US style='font-size:9.0pt;font-family:"Arial",sans-serif;
mso-fareast-font-family:Arial;mso-ansi-language:EN-US;mso-fareast-language:
EN-US;mso-bidi-language:AR-SA;mso-bidi-font-weight:bold'><br clear=all
style='mso-column-break-before:always'>
</span>

<h6><span lang=EN-US style='color:#221F1F'>+UEL</span></h6>

<span lang=EN-US style='font-size:9.0pt;font-family:"Arial",sans-serif;
mso-fareast-font-family:Arial;mso-ansi-language:EN-US;mso-fareast-language:
EN-US;mso-bidi-language:AR-SA'><br clear=all style='mso-special-character:line-break;
mso-column-break-before:always'>
</span>

<p class=MsoBodyText style='margin-top:.45pt'><b style='mso-bidi-font-weight:
normal'><span lang=EN-US style='font-size:14.0pt;mso-bidi-font-size:9.0pt'><o:p></o:p></span></b></p>

<p class=MsoNormal style='margin-left:4.05pt'><!--[if gte vml 1]><v:rect id="_x0000_s1059"
 style='position:absolute;left:0;text-align:left;margin-left:284.55pt;
 margin-top:-14.6pt;width:27.25pt;height:13.5pt;z-index:15742464;
 mso-position-horizontal-relative:page' filled="f" strokeweight=".8pt">
 <w:wrap anchorx="page"/>
</v:rect><![endif]--><![if !vml]><span style='mso-ignore:vglayout;position:
absolute;z-index:15742464;left:0px;margin-left:481px;margin-top:1300px;
width:47px;height:25px'><img width=38 height=20
src="F081-THHC%20(ASIA)%20American%20Spinal%20Injury%20Association.files/image026.gif"
v:shapes="_x0000_s1059"></span><![endif]><!--[if gte vml 1]><v:rect id="_x0000_s1058"
 style='position:absolute;left:0;text-align:left;margin-left:672.3pt;
 margin-top:-14.6pt;width:25.5pt;height:13.5pt;z-index:15744512;
 mso-position-horizontal-relative:page' filled="f" strokeweight=".8pt">
 <w:wrap anchorx="page"/>
</v:rect><![endif]--><![if !vml]><span style='mso-ignore:vglayout;position:
absolute;z-index:15744512;left:0px;margin-left:1127px;margin-top:1300px;
width:45px;height:25px'><img width=36 height=20
src="F081-THHC%20(ASIA)%20American%20Spinal%20Injury%20Association.files/image027.gif"
v:shapes="_x0000_s1058"></span><![endif]><i style='mso-bidi-font-style:normal'><span
lang=EN-US style='font-size:9.0pt;mso-bidi-font-size:11.0pt;color:#221F1F;
mso-font-width:80%'>(25)</span></i><i style='mso-bidi-font-style:normal'><span
lang=EN-US style='font-size:9.0pt;mso-bidi-font-size:11.0pt'><o:p></o:p></span></i></p>

<span lang=EN-US style='font-size:9.0pt;font-family:"Arial",sans-serif;
mso-fareast-font-family:Arial;mso-ansi-language:EN-US;mso-fareast-language:
EN-US;mso-bidi-language:AR-SA;mso-bidi-font-weight:bold'><br clear=all
style='mso-column-break-before:always'>
</span>

<p class=MsoHeading7><span lang=EN-US style='color:#221F1F;mso-font-width:85%'>=
UEMS<span style='letter-spacing:-1.5pt'> </span><span style='letter-spacing:
-.4pt'>TOTAL</span></span></p>

<span lang=EN-US style='font-size:9.0pt;font-family:"Arial",sans-serif;
mso-fareast-font-family:Arial;mso-ansi-language:EN-US;mso-fareast-language:
EN-US;mso-bidi-language:AR-SA'><br clear=all style='mso-special-character:line-break;
mso-column-break-before:always'>
</span>

<p class=MsoBodyText style='margin-top:.45pt'><b style='mso-bidi-font-weight:
normal'><i style='mso-bidi-font-style:normal'><span lang=EN-US
style='font-size:14.0pt;mso-bidi-font-size:9.0pt'><o:p></o:p></span></i></b></p>

<p class=MsoNormal style='margin-left:6.15pt'><i style='mso-bidi-font-style:
normal'><span lang=EN-US style='font-size:9.0pt;mso-bidi-font-size:11.0pt;
color:#221F1F;mso-font-width:90%'>(50)</span></i><i style='mso-bidi-font-style:
normal'><span lang=EN-US style='font-size:9.0pt;mso-bidi-font-size:11.0pt'><o:p></o:p></span></i></p>

<span lang=EN-US style='font-size:11.0pt;font-family:"Arial",sans-serif;
mso-fareast-font-family:Arial;mso-ansi-language:EN-US;mso-fareast-language:
EN-US;mso-bidi-language:AR-SA'><br clear=all style='mso-column-break-before:
always'>
</span>

<p class=MsoNormal style='margin-top:4.45pt;margin-right:0cm;margin-bottom:
0cm;margin-left:6.15pt;margin-bottom:.0001pt'><b style='mso-bidi-font-weight:
normal'><span lang=EN-US style='font-size:8.0pt;mso-bidi-font-size:11.0pt;
color:#221F1F;mso-font-width:90%'>LER</span></b><b style='mso-bidi-font-weight:
normal'><span lang=EN-US style='font-size:8.0pt;mso-bidi-font-size:11.0pt'><o:p></o:p></span></b></p>

<p class=MsoNormal style='margin-top:2.9pt;margin-right:0cm;margin-bottom:0cm;
margin-left:10.5pt;margin-bottom:.0001pt'><!--[if gte vml 1]><v:rect id="_x0000_s1057"
 style='position:absolute;left:0;text-align:left;margin-left:231.6pt;
 margin-top:-11.7pt;width:27.25pt;height:13.5pt;z-index:15741952;
 mso-position-horizontal-relative:page' filled="f" strokeweight=".8pt">
 <w:wrap anchorx="page"/>
</v:rect><![endif]--><![if !vml]><span style='mso-ignore:vglayout;position:
absolute;z-index:15741952;left:0px;margin-left:392px;margin-top:1339px;
width:48px;height:25px'><img width=38 height=20
src="F081-THHC%20(ASIA)%20American%20Spinal%20Injury%20Association.files/image020.gif"
v:shapes="_x0000_s1057"></span><![endif]><i style='mso-bidi-font-style:normal'><span
lang=EN-US style='font-size:8.0pt;mso-bidi-font-size:11.0pt;color:#221F1F;
mso-font-width:90%'>MAX<span style='letter-spacing:-1.15pt'> </span></span></i><i
style='mso-bidi-font-style:normal'><span lang=EN-US style='font-size:9.0pt;
mso-bidi-font-size:11.0pt;color:#221F1F;mso-font-width:90%'>(25)</span></i><i
style='mso-bidi-font-style:normal'><span lang=EN-US style='font-size:9.0pt;
mso-bidi-font-size:11.0pt'><o:p></o:p></span></i></p>

<span lang=EN-US style='font-size:9.0pt;font-family:"Arial",sans-serif;
mso-fareast-font-family:Arial;mso-ansi-language:EN-US;mso-fareast-language:
EN-US;mso-bidi-language:AR-SA;mso-bidi-font-weight:bold'><br clear=all
style='mso-column-break-before:always'>
</span>

<h6><span lang=EN-US style='color:#221F1F;mso-font-width:90%'>+<span
style='letter-spacing:-1.35pt'> </span><span style='letter-spacing:-.35pt'>LEL</span></span></h6>

<span lang=EN-US style='font-size:9.0pt;font-family:"Arial",sans-serif;
mso-fareast-font-family:Arial;mso-ansi-language:EN-US;mso-fareast-language:
EN-US;mso-bidi-language:AR-SA'><br clear=all style='mso-special-character:line-break;
mso-column-break-before:always'>
</span>

<p class=MsoBodyText style='margin-top:.5pt'><b style='mso-bidi-font-weight:
normal'><span lang=EN-US style='font-size:14.0pt;mso-bidi-font-size:9.0pt'><o:p></o:p></span></b></p>

<p class=MsoNormal style='margin-left:6.15pt'><i style='mso-bidi-font-style:
normal'><span lang=EN-US style='font-size:9.0pt;mso-bidi-font-size:11.0pt;
color:#221F1F;mso-font-width:90%'>(25)</span></i><i style='mso-bidi-font-style:
normal'><span lang=EN-US style='font-size:9.0pt;mso-bidi-font-size:11.0pt'><o:p></o:p></span></i></p>

<span lang=EN-US style='font-size:9.0pt;font-family:"Arial",sans-serif;
mso-fareast-font-family:Arial;mso-ansi-language:EN-US;mso-fareast-language:
EN-US;mso-bidi-language:AR-SA;mso-bidi-font-weight:bold'><br clear=all
style='mso-column-break-before:always'>
</span>

<p class=MsoHeading7><span lang=EN-US style='color:#221F1F;mso-font-width:85%'>=
LEMS <span style='letter-spacing:-.2pt'>TOTAL</span></span></p>

<span lang=EN-US style='font-size:9.0pt;font-family:"Arial",sans-serif;
mso-fareast-font-family:Arial;mso-ansi-language:EN-US;mso-fareast-language:
EN-US;mso-bidi-language:AR-SA'><br clear=all style='mso-special-character:line-break;
mso-column-break-before:always'>
</span>

<p class=MsoBodyText style='margin-top:.4pt'><b style='mso-bidi-font-weight:
normal'><i style='mso-bidi-font-style:normal'><span lang=EN-US
style='font-size:1.0pt;mso-bidi-font-size:9.0pt'><o:p></o:p></span></i></b></p>

<p class=MsoBodyText style='margin-top:0cm;margin-right:-8.65pt;margin-bottom:
0cm;margin-left:-1.3pt;margin-bottom:.0001pt'><!--[if mso & !supportInlineShapes & supportFields]><span
lang=EN-US style='font-size:10.0pt;mso-bidi-font-size:9.0pt'><span
style='mso-element:field-begin;mso-field-lock:yes'></span><span
style='mso-spacerun:yes'>�</span>SHAPE <span
style='mso-spacerun:yes'>�</span>\* MERGEFORMAT <span style='mso-element:field-separator'></span></span><![endif]--><span
lang=EN-US style='font-size:10.0pt;mso-bidi-font-size:9.0pt'><!--[if gte vml 1]><v:group
 id="_x0000_s1055" style='width:28.1pt;height:14.35pt;
 mso-position-horizontal-relative:char;mso-position-vertical-relative:line'
 coordsize="562,287">
 <o:lock v:ext="edit" rotation="t" position="t"/>
 <v:rect id="_x0000_s1056" style='position:absolute;left:8;top:8;width:546;
  height:271' filled="f" strokeweight=".8pt"/>
 <w:wrap type="none"/>
 <w:anchorlock/>
</v:group><![endif]--><![if !vml]><img width=38 height=20
src="F081-THHC%20(ASIA)%20American%20Spinal%20Injury%20Association.files/image028.gif"
v:shapes="_x0000_s1055 _x0000_s1056"><![endif]></span><!--[if mso & !supportInlineShapes & supportFields]><span
lang=EN-US style='font-size:10.0pt;mso-bidi-font-size:9.0pt'><v:shape id="_x0000_i1027"
 type="#_x0000_t75" style='width:28.1pt;height:14.35pt'>
 <v:imagedata croptop="-65520f" cropbottom="65520f"/>
</v:shape><span style='mso-element:field-end'></span></span><![endif]--><span
lang=EN-US style='font-size:10.0pt;mso-bidi-font-size:9.0pt'><o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:6.15pt'><i style='mso-bidi-font-style:
normal'><span lang=EN-US style='font-size:9.0pt;mso-bidi-font-size:11.0pt;
color:#221F1F;mso-font-width:90%'>(50)</span></i><i style='mso-bidi-font-style:
normal'><span lang=EN-US style='font-size:9.0pt;mso-bidi-font-size:11.0pt'><o:p></o:p></span></i></p>

<span lang=EN-US style='font-size:11.0pt;font-family:"Arial",sans-serif;
mso-fareast-font-family:Arial;mso-ansi-language:EN-US;mso-fareast-language:
EN-US;mso-bidi-language:AR-SA'><br clear=all style='mso-column-break-before:
always'>
</span>

<p class=MsoNormal style='margin-top:3.9pt;margin-right:0cm;margin-bottom:0cm;
margin-left:10.75pt;margin-bottom:.0001pt'><b style='mso-bidi-font-weight:normal'><span
lang=EN-US style='font-size:9.0pt;mso-bidi-font-size:11.0pt;color:#221F1F;
letter-spacing:-.2pt;mso-font-width:80%'>LTR</span></b><b style='mso-bidi-font-weight:
normal'><span lang=EN-US style='font-size:9.0pt;mso-bidi-font-size:11.0pt'><o:p></o:p></span></b></p>

<p class=MsoNormal style='margin-top:3.05pt;margin-right:0cm;margin-bottom:
0cm;margin-left:6.15pt;margin-bottom:.0001pt'><i style='mso-bidi-font-style:
normal'><span lang=EN-US style='font-size:8.0pt;mso-bidi-font-size:11.0pt;
color:#221F1F;mso-font-width:90%'>MAX</span></i><i style='mso-bidi-font-style:
normal'><span lang=EN-US style='font-size:8.0pt;mso-bidi-font-size:11.0pt'><o:p></o:p></span></i></p>

<span lang=EN-US style='font-size:9.0pt;font-family:"Arial",sans-serif;
mso-fareast-font-family:Arial;mso-ansi-language:EN-US;mso-fareast-language:
EN-US;mso-bidi-language:AR-SA'><br clear=all style='mso-special-character:line-break;
mso-column-break-before:always'>
</span>

<p class=MsoBodyText style='margin-top:.15pt'><i style='mso-bidi-font-style:
normal'><span lang=EN-US style='font-size:14.5pt;mso-bidi-font-size:9.0pt'><o:p></o:p></span></i></p>

<p class=MsoNormal style='margin-left:5.0pt'><i style='mso-bidi-font-style:
normal'><span lang=EN-US style='font-size:9.0pt;mso-bidi-font-size:11.0pt;
color:#221F1F;mso-font-width:90%'>(56)</span></i><i style='mso-bidi-font-style:
normal'><span lang=EN-US style='font-size:9.0pt;mso-bidi-font-size:11.0pt'><o:p></o:p></span></i></p>

<span lang=EN-US style='font-size:9.0pt;font-family:"Arial",sans-serif;
mso-fareast-font-family:Arial;mso-ansi-language:EN-US;mso-fareast-language:
EN-US;mso-bidi-language:AR-SA;mso-bidi-font-weight:bold'><br clear=all
style='mso-column-break-before:always'>
</span>

<h6><span lang=EN-US style='color:#221F1F;mso-font-width:90%'>+<span
style='letter-spacing:-1.3pt'> </span><span style='letter-spacing:-.55pt'>LTL</span></span></h6>

<span lang=EN-US style='font-size:9.0pt;font-family:"Arial",sans-serif;
mso-fareast-font-family:Arial;mso-ansi-language:EN-US;mso-fareast-language:
EN-US;mso-bidi-language:AR-SA'><br clear=all style='mso-special-character:line-break;
mso-column-break-before:always'>
</span>

<p class=MsoBodyText style='margin-top:.15pt'><b style='mso-bidi-font-weight:
normal'><span lang=EN-US style='font-size:14.5pt;mso-bidi-font-size:9.0pt'><o:p></o:p></span></b></p>

<p class=MsoNormal style='margin-left:6.15pt'><i style='mso-bidi-font-style:
normal'><span lang=EN-US style='font-size:9.0pt;mso-bidi-font-size:11.0pt;
color:#221F1F;mso-font-width:90%'>(56)</span></i><i style='mso-bidi-font-style:
normal'><span lang=EN-US style='font-size:9.0pt;mso-bidi-font-size:11.0pt'><o:p></o:p></span></i></p>

<span lang=EN-US style='font-size:9.0pt;font-family:"Arial",sans-serif;
mso-fareast-font-family:Arial;mso-ansi-language:EN-US;mso-fareast-language:
EN-US;mso-bidi-language:AR-SA;mso-bidi-font-weight:bold'><br clear=all
style='mso-column-break-before:always'>
</span>

<p class=MsoHeading7><span lang=EN-US style='color:#221F1F;mso-font-width:85%'>=
<span style='letter-spacing:-.35pt'>LT </span><span style='letter-spacing:-.4pt'>TOTAL</span></span></p>

<span lang=EN-US style='font-size:9.0pt;font-family:"Arial",sans-serif;
mso-fareast-font-family:Arial;mso-ansi-language:EN-US;mso-fareast-language:
EN-US;mso-bidi-language:AR-SA'><br clear=all style='mso-special-character:line-break;
mso-column-break-before:always'>
</span>

<p class=MsoBodyText style='margin-top:.4pt'><b style='mso-bidi-font-weight:
normal'><i style='mso-bidi-font-style:normal'><span lang=EN-US
style='font-size:1.0pt;mso-bidi-font-size:9.0pt'><o:p></o:p></span></i></b></p>

<p class=MsoBodyText style='margin-right:-5.8pt'><!--[if mso & !supportInlineShapes & supportFields]><span
lang=EN-US style='font-size:10.0pt;mso-bidi-font-size:9.0pt'><span
style='mso-element:field-begin;mso-field-lock:yes'></span><span
style='mso-spacerun:yes'>�</span>SHAPE <span
style='mso-spacerun:yes'>�</span>\* MERGEFORMAT <span style='mso-element:field-separator'></span></span><![endif]--><span
lang=EN-US style='font-size:10.0pt;mso-bidi-font-size:9.0pt'><!--[if gte vml 1]><v:group
 id="_x0000_s1053" style='width:25.35pt;height:14.35pt;
 mso-position-horizontal-relative:char;mso-position-vertical-relative:line'
 coordsize="507,287">
 <o:lock v:ext="edit" rotation="t" position="t"/>
 <v:rect id="_x0000_s1054" style='position:absolute;left:8;top:8;width:491;
  height:271' filled="f" strokeweight=".8pt"/>
 <w:wrap type="none"/>
 <w:anchorlock/>
</v:group><![endif]--><![if !vml]><img width=34 height=20
src="F081-THHC%20(ASIA)%20American%20Spinal%20Injury%20Association.files/image029.gif"
v:shapes="_x0000_s1053 _x0000_s1054"><![endif]></span><!--[if mso & !supportInlineShapes & supportFields]><span
lang=EN-US style='font-size:10.0pt;mso-bidi-font-size:9.0pt'><v:shape id="_x0000_i1028"
 type="#_x0000_t75" style='width:25.35pt;height:14.35pt'>
 <v:imagedata croptop="-65520f" cropbottom="65520f"/>
</v:shape><span style='mso-element:field-end'></span></span><![endif]--><span
lang=EN-US style='font-size:10.0pt;mso-bidi-font-size:9.0pt'><o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:5.65pt'><b style='mso-bidi-font-weight:
normal'><span lang=EN-US style='font-size:8.0pt;mso-bidi-font-size:11.0pt;
color:#221F1F;mso-font-width:85%'>(112)</span></b><b style='mso-bidi-font-weight:
normal'><span lang=EN-US style='font-size:8.0pt;mso-bidi-font-size:11.0pt'><o:p></o:p></span></b></p>

<span lang=EN-US style='font-size:11.0pt;font-family:"Arial",sans-serif;
mso-fareast-font-family:Arial;mso-ansi-language:EN-US;mso-fareast-language:
EN-US;mso-bidi-language:AR-SA'><br clear=all style='mso-column-break-before:
always'>
</span>

<p class=MsoNormal style='margin-top:3.9pt;margin-right:0cm;margin-bottom:0cm;
margin-left:6.15pt;margin-bottom:.0001pt'><b style='mso-bidi-font-weight:normal'><span
lang=EN-US style='font-size:9.0pt;mso-bidi-font-size:11.0pt;color:#221F1F;
mso-font-width:90%'>PPR</span></b><b style='mso-bidi-font-weight:normal'><span
lang=EN-US style='font-size:9.0pt;mso-bidi-font-size:11.0pt'><o:p></o:p></span></b></p>

<p class=MsoNormal style='margin-top:2.6pt;margin-right:0cm;margin-bottom:0cm;
margin-left:10.45pt;margin-bottom:.0001pt'><!--[if gte vml 1]><v:rect id="_x0000_s1052"
 style='position:absolute;left:0;text-align:left;margin-left:617.95pt;
 margin-top:-12.3pt;width:27.25pt;height:13.5pt;z-index:15744000;
 mso-position-horizontal-relative:page' filled="f" strokeweight=".8pt">
 <w:wrap anchorx="page"/>
</v:rect><![endif]--><![if !vml]><span style='mso-ignore:vglayout;position:
absolute;z-index:15744000;left:0px;margin-left:1036px;margin-top:1464px;
width:48px;height:25px'><img width=38 height=20
src="F081-THHC%20(ASIA)%20American%20Spinal%20Injury%20Association.files/image030.gif"
v:shapes="_x0000_s1052"></span><![endif]><i style='mso-bidi-font-style:normal'><span
lang=EN-US style='font-size:8.0pt;mso-bidi-font-size:11.0pt;color:#221F1F;
position:relative;top:-.5pt;mso-text-raise:.5pt;mso-font-width:90%'>MAX </span></i><i
style='mso-bidi-font-style:normal'><span lang=EN-US style='font-size:9.0pt;
mso-bidi-font-size:11.0pt;color:#221F1F;mso-font-width:90%'>(56)</span></i><i
style='mso-bidi-font-style:normal'><span lang=EN-US style='font-size:9.0pt;
mso-bidi-font-size:11.0pt'><o:p></o:p></span></i></p>

<span lang=EN-US style='font-size:9.0pt;font-family:"Arial",sans-serif;
mso-fareast-font-family:Arial;mso-ansi-language:EN-US;mso-fareast-language:
EN-US;mso-bidi-language:AR-SA;mso-bidi-font-weight:bold'><br clear=all
style='mso-column-break-before:always'>
</span>

<h6><span lang=EN-US style='color:#221F1F;mso-font-width:90%'>+<span
style='letter-spacing:-1.4pt'> </span><span style='letter-spacing:-.35pt'>PPL</span></span></h6>

<span lang=EN-US style='font-size:9.0pt;font-family:"Arial",sans-serif;
mso-fareast-font-family:Arial;mso-ansi-language:EN-US;mso-fareast-language:
EN-US;mso-bidi-language:AR-SA'><br clear=all style='mso-special-character:line-break;
mso-column-break-before:always'>
</span>

<p class=MsoBodyText><b style='mso-bidi-font-weight:normal'><span lang=EN-US><o:p></o:p></span></b></p>

<p class=MsoNormal style='margin-top:7.05pt;margin-right:0cm;margin-bottom:
0cm;margin-left:6.15pt;margin-bottom:.0001pt'><b style='mso-bidi-font-weight:
normal'><span lang=EN-US style='font-size:8.0pt;mso-bidi-font-size:11.0pt;
color:#221F1F;mso-font-width:90%'>(56)</span></b><b style='mso-bidi-font-weight:
normal'><span lang=EN-US style='font-size:8.0pt;mso-bidi-font-size:11.0pt'><o:p></o:p></span></b></p>

<span lang=EN-US style='font-size:9.0pt;font-family:"Arial",sans-serif;
mso-fareast-font-family:Arial;mso-ansi-language:EN-US;mso-fareast-language:
EN-US;mso-bidi-language:AR-SA;mso-bidi-font-weight:bold'><br clear=all
style='mso-column-break-before:always'>
</span>

<p class=MsoHeading7><span lang=EN-US style='color:#221F1F;mso-font-width:85%'>=
PP<span style='letter-spacing:-1.3pt'> </span><span style='letter-spacing:-.4pt'>TOTAL</span></span></p>

<span lang=EN-US style='font-size:9.0pt;font-family:"Arial",sans-serif;
mso-fareast-font-family:Arial;mso-ansi-language:EN-US;mso-fareast-language:
EN-US;mso-bidi-language:AR-SA'><br clear=all style='mso-special-character:line-break;
mso-column-break-before:always'>
</span>

<p class=MsoBodyText style='margin-top:.4pt'><b style='mso-bidi-font-weight:
normal'><i style='mso-bidi-font-style:normal'><span lang=EN-US
style='font-size:1.0pt;mso-bidi-font-size:9.0pt'><o:p></o:p></span></i></b></p>

<p class=MsoBodyText style='margin-left:.4pt'><!--[if mso & !supportInlineShapes & supportFields]><span
lang=EN-US style='font-size:10.0pt;mso-bidi-font-size:9.0pt'><span
style='mso-element:field-begin;mso-field-lock:yes'></span><span
style='mso-spacerun:yes'>�</span>SHAPE <span
style='mso-spacerun:yes'>�</span>\* MERGEFORMAT <span style='mso-element:field-separator'></span></span><![endif]--><span
lang=EN-US style='font-size:10.0pt;mso-bidi-font-size:9.0pt'><!--[if gte vml 1]><v:group
 id="_x0000_s1050" style='width:26.3pt;height:14.35pt;
 mso-position-horizontal-relative:char;mso-position-vertical-relative:line'
 coordsize="526,287">
 <o:lock v:ext="edit" rotation="t" position="t"/>
 <v:rect id="_x0000_s1051" style='position:absolute;left:8;top:8;width:510;
  height:271' filled="f" strokeweight=".8pt"/>
 <w:wrap type="none"/>
 <w:anchorlock/>
</v:group><![endif]--><![if !vml]><img width=36 height=20
src="F081-THHC%20(ASIA)%20American%20Spinal%20Injury%20Association.files/image031.gif"
v:shapes="_x0000_s1050 _x0000_s1051"><![endif]></span><!--[if mso & !supportInlineShapes & supportFields]><span
lang=EN-US style='font-size:10.0pt;mso-bidi-font-size:9.0pt'><v:shape id="_x0000_i1029"
 type="#_x0000_t75" style='width:26.3pt;height:14.35pt'>
 <v:imagedata croptop="-65520f" cropbottom="65520f"/>
</v:shape><span style='mso-element:field-end'></span></span><![endif]--><span
lang=EN-US style='font-size:10.0pt;mso-bidi-font-size:9.0pt'><o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:5.8pt'><i style='mso-bidi-font-style:
normal'><span lang=EN-US style='font-size:9.0pt;mso-bidi-font-size:11.0pt;
color:#221F1F;mso-font-width:90%'>(112)</span></i><i style='mso-bidi-font-style:
normal'><span lang=EN-US style='font-size:9.0pt;mso-bidi-font-size:11.0pt'><o:p></o:p></span></i></p>

</div>

<span lang=EN-US style='font-size:9.0pt;mso-bidi-font-size:11.0pt;font-family:
"Arial",sans-serif;mso-fareast-font-family:Arial;mso-ansi-language:EN-US;
mso-fareast-language:EN-US;mso-bidi-language:AR-SA'><br clear=all
style='page-break-before:auto;mso-break-type:section-break'>
</span>

<div class=WordSection8>

<p class=MsoBodyText style='margin-top:.25pt'><i style='mso-bidi-font-style:
normal'><span lang=EN-US style='font-size:5.0pt;mso-bidi-font-size:9.0pt'><o:p>&nbsp;</o:p></span></i></p>

<p class=MsoBodyText style='margin-left:14.35pt'><!--[if mso & !supportInlineShapes & supportFields]><span
lang=EN-US style='font-size:10.0pt;mso-bidi-font-size:9.0pt'><span
style='mso-element:field-begin;mso-field-lock:yes'></span><span
style='mso-spacerun:yes'>�</span>SHAPE <span
style='mso-spacerun:yes'>�</span>\* MERGEFORMAT <span style='mso-element:field-separator'></span></span><![endif]--><span
lang=EN-US style='font-size:10.0pt;mso-bidi-font-size:9.0pt'><!--[if gte vml 1]><v:group
 id="_x0000_s1035" style='width:740.5pt;height:42.5pt;
 mso-position-horizontal-relative:char;mso-position-vertical-relative:line'
 coordsize="14810,850">
 <o:lock v:ext="edit" rotation="t" position="t"/>
 <v:shape id="_x0000_s1049" style='position:absolute;left:2699;top:240;width:12027;
  height:493' coordorigin="2699,241" coordsize="12027,493" o:spt="100" adj="0,,0"
  path="m14262,468r463,l14725,241r-463,l14262,468xm14262,733r463,l14725,506r-463,l14262,733xm13709,733r463,l14172,506r-463,l13709,733xm13709,468r463,l14172,241r-463,l13709,468xm3253,468r463,l3716,241r-463,l3253,468xm3253,733r463,l3716,506r-463,l3253,733xm2699,733r463,l3162,506r-463,l2699,733xm2699,468r463,l3162,241r-463,l2699,468xm5796,545r643,l6439,294r-643,l5796,545xe"
  filled="f" strokeweight=".8pt">
  <v:stroke joinstyle="round"/>
  <v:formulas/>
  <v:path arrowok="t" o:connecttype="segments"/>
 </v:shape><v:rect id="_x0000_s1048" style='position:absolute;left:9873;top:167;
  width:442;height:228' filled="f" strokeweight="1.5pt"/>
 <v:shape id="_x0000_s1047" style='position:absolute;left:8;top:8;width:14794;
  height:834' coordorigin="8,8" coordsize="14794,834" o:spt="100" adj="0,,0"
  path="m9873,759r622,l10495,484r-622,l9873,759xm8,842r14793,l14801,8,8,8r,834xe"
  filled="f" strokeweight=".8pt">
  <v:stroke joinstyle="round"/>
  <v:formulas/>
  <v:path arrowok="t" o:connecttype="segments"/>
 </v:shape><v:shape id="_x0000_s1046" type="#_x0000_t202" style='position:absolute;
  left:172;top:40;width:1392;height:707' filled="f" stroked="f">
  <v:textbox style='mso-next-textbox:#_x0000_s1046' inset="0,0,0,0">
   <![if !mso]>
   <table cellpadding=0 cellspacing=0 width="100%">
    <tr>
     <td><![endif]>
     <div>
     <p class=MsoNormal style='margin-top:.2pt;margin-right:3.55pt;margin-bottom:
     0cm;margin-left:20.25pt;margin-bottom:.0001pt;text-indent:-17.25pt;
     line-height:96%'><b style='mso-bidi-font-weight:normal'><span lang=EN-US
     style='font-size:8.0pt;line-height:96%;color:#221F1F;mso-font-width:85%'>NEUROLOGICAL
     </span></b><span lang=EN-US style='font-size:8.0pt;line-height:96%;
     color:#221F1F;mso-bidi-font-weight:bold'>LEVELS</span><b style='mso-bidi-font-weight:
     normal'><span lang=EN-US style='font-size:8.0pt;line-height:96%'><o:p></o:p></span></b></p>
     <p class=MsoNormal style='margin-top:.8pt;margin-right:.4pt;margin-bottom:
     0cm;margin-left:16.9pt;margin-bottom:.0001pt;text-indent:-16.95pt;
     line-height:86%'><i style='mso-bidi-font-style:normal'><span lang=EN-US
     style='font-size:7.0pt;mso-bidi-font-size:11.0pt;line-height:86%;
     color:#221F1F;mso-font-width:85%'>Steps<span style='letter-spacing:-.75pt'>
     </span>1-<span style='letter-spacing:-.7pt'> </span>6<span
     style='letter-spacing:-.75pt'> </span>for<span style='letter-spacing:-.7pt'>
     </span>classification </span></i><i style='mso-bidi-font-style:normal'><span
     lang=EN-US style='font-size:7.0pt;mso-bidi-font-size:11.0pt;line-height:
     86%;color:#221F1F;mso-font-width:95%'>as on<span style='letter-spacing:
     -1.35pt'> </span>reverse</span></i><i style='mso-bidi-font-style:normal'><span
     lang=EN-US style='font-size:7.0pt;mso-bidi-font-size:11.0pt;line-height:
     86%'><o:p></o:p></span></i></p>
     </div>
     <![if !mso]></td>
    </tr>
   </table>
   <![endif]></v:textbox>
 </v:shape><v:shape id="_x0000_s1045" type="#_x0000_t202" style='position:absolute;
  left:2910;top:19;width:139;height:230' filled="f" stroked="f">
  <v:textbox style='mso-next-textbox:#_x0000_s1045' inset="0,0,0,0">
   <![if !mso]>
   <table cellpadding=0 cellspacing=0 width="100%">
    <tr>
     <td><![endif]>
     <div>
     <p class=MsoNormal style='line-height:11.45pt;mso-line-height-rule:exactly'><b
     style='mso-bidi-font-weight:normal'><i style='mso-bidi-font-style:normal'><span
     lang=EN-US style='font-size:10.0pt;mso-bidi-font-size:11.0pt;color:#221F1F;
     mso-font-width:81%'>R</span></i></b><b style='mso-bidi-font-weight:normal'><i
     style='mso-bidi-font-style:normal'><span lang=EN-US style='font-size:10.0pt;
     mso-bidi-font-size:11.0pt'><o:p></o:p></span></i></b></p>
     </div>
     <![if !mso]></td>
    </tr>
   </table>
   <![endif]></v:textbox>
 </v:shape><v:shape id="_x0000_s1044" type="#_x0000_t202" style='position:absolute;
  left:3439;top:19;width:121;height:230' filled="f" stroked="f">
  <v:textbox style='mso-next-textbox:#_x0000_s1044' inset="0,0,0,0">
   <![if !mso]>
   <table cellpadding=0 cellspacing=0 width="100%">
    <tr>
     <td><![endif]>
     <div>
     <p class=MsoNormal style='line-height:11.45pt;mso-line-height-rule:exactly'><b
     style='mso-bidi-font-weight:normal'><i style='mso-bidi-font-style:normal'><span
     lang=EN-US style='font-size:10.0pt;mso-bidi-font-size:11.0pt;color:#221F1F;
     mso-font-width:82%'>L</span></i></b><b style='mso-bidi-font-weight:normal'><i
     style='mso-bidi-font-style:normal'><span lang=EN-US style='font-size:10.0pt;
     mso-bidi-font-size:11.0pt'><o:p></o:p></span></i></b></p>
     </div>
     <![if !mso]></td>
    </tr>
   </table>
   <![endif]></v:textbox>
 </v:shape><v:shape id="_x0000_s1043" type="#_x0000_t202" style='position:absolute;
  left:13906;top:7;width:139;height:230' filled="f" stroked="f">
  <v:textbox style='mso-next-textbox:#_x0000_s1043' inset="0,0,0,0">
   <![if !mso]>
   <table cellpadding=0 cellspacing=0 width="100%">
    <tr>
     <td><![endif]>
     <div>
     <p class=MsoNormal style='line-height:11.45pt;mso-line-height-rule:exactly'><b
     style='mso-bidi-font-weight:normal'><i style='mso-bidi-font-style:normal'><span
     lang=EN-US style='font-size:10.0pt;mso-bidi-font-size:11.0pt;color:#221F1F;
     mso-font-width:81%'>R</span></i></b><b style='mso-bidi-font-weight:normal'><i
     style='mso-bidi-font-style:normal'><span lang=EN-US style='font-size:10.0pt;
     mso-bidi-font-size:11.0pt'><o:p></o:p></span></i></b></p>
     </div>
     <![if !mso]></td>
    </tr>
   </table>
   <![endif]></v:textbox>
 </v:shape><v:shape id="_x0000_s1042" type="#_x0000_t202" style='position:absolute;
  left:14435;top:7;width:121;height:230' filled="f" stroked="f">
  <v:textbox style='mso-next-textbox:#_x0000_s1042' inset="0,0,0,0">
   <![if !mso]>
   <table cellpadding=0 cellspacing=0 width="100%">
    <tr>
     <td><![endif]>
     <div>
     <p class=MsoNormal style='line-height:11.45pt;mso-line-height-rule:exactly'><b
     style='mso-bidi-font-weight:normal'><i style='mso-bidi-font-style:normal'><span
     lang=EN-US style='font-size:10.0pt;mso-bidi-font-size:11.0pt;color:#221F1F;
     mso-font-width:82%'>L</span></i></b><b style='mso-bidi-font-weight:normal'><i
     style='mso-bidi-font-style:normal'><span lang=EN-US style='font-size:10.0pt;
     mso-bidi-font-size:11.0pt'><o:p></o:p></span></i></b></p>
     </div>
     <![if !mso]></td>
    </tr>
   </table>
   <![endif]></v:textbox>
 </v:shape><v:shape id="_x0000_s1041" type="#_x0000_t202" style='position:absolute;
  left:1730;top:274;width:944;height:447' filled="f" stroked="f">
  <v:textbox style='mso-next-textbox:#_x0000_s1041' inset="0,0,0,0">
   <![if !mso]>
   <table cellpadding=0 cellspacing=0 width="100%">
    <tr>
     <td><![endif]>
     <div>
     <p class=MsoNormal align=right style='margin-top:0cm;margin-right:.9pt;
     margin-bottom:0cm;margin-left:8.6pt;margin-bottom:.0001pt;text-align:right;
     text-indent:-8.65pt;line-height:10.35pt;mso-line-height-rule:exactly;
     mso-list:l0 level1 lfo3;tab-stops:8.65pt'><![if !supportLists]><b><i
     style='mso-bidi-font-style:normal'><span lang=EN-US style='font-size:9.0pt;
     color:#221F1F;letter-spacing:-.05pt;mso-font-width:86%'><span
     style='mso-list:Ignore'>1.<span style='font:7.0pt "Times New Roman"'>&nbsp;
     </span></span></span></i></b><![endif]><span dir=LTR></span><b
     style='mso-bidi-font-weight:normal'><i style='mso-bidi-font-style:normal'><span
     lang=EN-US style='font-size:9.0pt;mso-bidi-font-size:11.0pt;color:#221F1F;
     letter-spacing:-.25pt;mso-font-width:85%'>SENSORY</span></i></b><b
     style='mso-bidi-font-weight:normal'><i style='mso-bidi-font-style:normal'><span
     lang=EN-US style='font-size:9.0pt;mso-bidi-font-size:11.0pt'><o:p></o:p></span></i></b></p>
     <p class=MsoNormal align=right style='margin-top:1.65pt;margin-right:1.05pt;
     margin-bottom:0cm;margin-left:17.3pt;margin-bottom:.0001pt;text-align:
     right;text-indent:-17.35pt;mso-list:l0 level1 lfo3;tab-stops:8.65pt'><![if !supportLists]><b><i
     style='mso-bidi-font-style:normal'><span lang=EN-US style='font-size:9.0pt;
     color:#221F1F;letter-spacing:-.05pt;mso-font-width:86%'><span
     style='mso-list:Ignore'>2.<span style='font:7.0pt "Times New Roman"'>&nbsp;
     </span></span></span></i></b><![endif]><span dir=LTR></span><b
     style='mso-bidi-font-weight:normal'><i style='mso-bidi-font-style:normal'><span
     lang=EN-US style='font-size:9.0pt;mso-bidi-font-size:11.0pt;color:#221F1F;
     mso-font-width:85%'>MOTOR</span></i></b><b style='mso-bidi-font-weight:
     normal'><i style='mso-bidi-font-style:normal'><span lang=EN-US
     style='font-size:9.0pt;mso-bidi-font-size:11.0pt'><o:p></o:p></span></i></b></p>
     </div>
     <![if !mso]></td>
    </tr>
   </table>
   <![endif]></v:textbox>
 </v:shape><v:shape id="_x0000_s1040" type="#_x0000_t202" style='position:absolute;
  left:4297;top:131;width:1447;height:607' filled="f" stroked="f">
  <v:textbox style='mso-next-textbox:#_x0000_s1040' inset="0,0,0,0">
   <![if !mso]>
   <table cellpadding=0 cellspacing=0 width="100%">
    <tr>
     <td><![endif]>
     <div>
     <p class=MsoNormal style='margin-top:.2pt;margin-right:-.35pt;margin-bottom:
     0cm;margin-left:.85pt;margin-bottom:.0001pt;text-indent:-.9pt;line-height:
     96%'><b style='mso-bidi-font-weight:normal'><i style='mso-bidi-font-style:
     normal'><span lang=EN-US style='font-size:9.0pt;mso-bidi-font-size:11.0pt;
     line-height:96%;color:#221F1F;mso-font-width:90%'>3. </span></i></b><b
     style='mso-bidi-font-weight:normal'><i style='mso-bidi-font-style:normal'><span
     lang=EN-US style='font-size:8.0pt;line-height:96%;color:#221F1F;
     letter-spacing:-.25pt;mso-font-width:90%'>NEUROLOGICAL </span></i></b><b
     style='mso-bidi-font-weight:normal'><i style='mso-bidi-font-style:normal'><span
     lang=EN-US style='font-size:8.0pt;line-height:96%;color:#221F1F;
     letter-spacing:-.15pt;mso-font-width:95%'>LEVEL</span></i></b><b
     style='mso-bidi-font-weight:normal'><i style='mso-bidi-font-style:normal'><span
     lang=EN-US style='font-size:8.0pt;line-height:96%;color:#221F1F;
     letter-spacing:-1.6pt;mso-font-width:95%'> </span></i></b><b
     style='mso-bidi-font-weight:normal'><i style='mso-bidi-font-style:normal'><span
     lang=EN-US style='font-size:8.0pt;line-height:96%;color:#221F1F;
     mso-font-width:95%'>OF<span style='letter-spacing:-1.5pt'> </span><span
     style='letter-spacing:-.2pt'>INJURY</span></span></i></b><b
     style='mso-bidi-font-weight:normal'><i style='mso-bidi-font-style:normal'><span
     lang=EN-US style='font-size:8.0pt;line-height:96%'><o:p></o:p></span></i></b></p>
     <p class=MsoNormal style='margin-left:25.9pt;line-height:10.0pt;
     mso-line-height-rule:exactly'><span lang=EN-US style='font-size:8.0pt;
     color:#221F1F;mso-bidi-font-weight:bold;mso-bidi-font-style:italic'>(NLI)</span><span
     lang=EN-US style='font-size:8.0pt;mso-bidi-font-weight:bold;mso-bidi-font-style:
     italic'><o:p></o:p></span></p>
     </div>
     <![if !mso]></td>
    </tr>
   </table>
   <![endif]></v:textbox>
 </v:shape><v:shape id="_x0000_s1039" type="#_x0000_t202" style='position:absolute;
  left:7156;top:85;width:2626;height:630' filled="f" stroked="f">
  <v:textbox style='mso-next-textbox:#_x0000_s1039' inset="0,0,0,0">
   <![if !mso]>
   <table cellpadding=0 cellspacing=0 width="100%">
    <tr>
     <td><![endif]>
     <div>
     <p class=MsoNormal style='margin-left:17.8pt;text-indent:-8.3pt;
     line-height:10.3pt;mso-line-height-rule:exactly;mso-list:l2 level1 lfo2;
     tab-stops:17.85pt'><![if !supportLists]><b><i><span lang=EN-US
     style='font-size:9.0pt;color:#221F1F;letter-spacing:-.15pt;mso-font-width:
     86%'><span style='mso-list:Ignore'>4.<span style='font:7.0pt "Times New Roman"'>&nbsp;
     </span></span></span></i></b><![endif]><span dir=LTR></span><span
     lang=EN-US style='font-size:8.0pt;color:#221F1F;letter-spacing:-.15pt;
     mso-font-width:85%;mso-bidi-font-weight:bold;mso-bidi-font-style:italic'>COMPLETE
     </span><span lang=EN-US style='font-size:8.0pt;color:#221F1F;mso-font-width:
     85%;mso-bidi-font-weight:bold;mso-bidi-font-style:italic'>OR<span
     style='letter-spacing:-.6pt'> </span><span style='letter-spacing:-.15pt'>INCOMPLETE?</span></span><span
     lang=EN-US style='font-size:8.0pt;mso-bidi-font-weight:bold;mso-bidi-font-style:
     italic'><o:p></o:p></span></p>
     <p class=MsoNormal style='line-height:8.0pt;mso-line-height-rule:exactly'><i
     style='mso-bidi-font-style:normal'><span lang=EN-US style='font-size:7.0pt;
     mso-bidi-font-size:11.0pt;color:#221F1F;mso-font-width:85%'>Incomplete<span
     style='letter-spacing:-.65pt'> </span>=<span style='letter-spacing:-.85pt'>
     </span>Any<span style='letter-spacing:-.65pt'> </span>sensory<span
     style='letter-spacing:-.65pt'> </span>or<span style='letter-spacing:-.6pt'>
     </span>motor<span style='letter-spacing:-.6pt'> </span>function<span
     style='letter-spacing:-.65pt'> </span>in<span style='letter-spacing:-.65pt'>
     </span>S4-5</span></i><i style='mso-bidi-font-style:normal'><span
     lang=EN-US style='font-size:7.0pt;mso-bidi-font-size:11.0pt'><o:p></o:p></span></i></p>
     <p class=MsoNormal style='margin-top:2.8pt;margin-right:0cm;margin-bottom:
     0cm;margin-left:15.25pt;margin-bottom:.0001pt;text-indent:-7.95pt;
     mso-list:l2 level1 lfo2;tab-stops:15.3pt'><![if !supportLists]><b><i
     style='mso-bidi-font-style:normal'><span lang=EN-US style='font-size:9.0pt;
     color:#221F1F;letter-spacing:-.15pt;mso-font-width:86%'><span
     style='mso-list:Ignore'>5.<span style='font:7.0pt "Times New Roman"'> </span></span></span></i></b><![endif]><span
     dir=LTR></span><span lang=EN-US style='font-size:8.0pt;color:#221F1F;
     letter-spacing:-.15pt;mso-font-width:90%;mso-bidi-font-weight:bold;
     mso-bidi-font-style:italic'>ASIA</span><span lang=EN-US style='font-size:
     8.0pt;color:#221F1F;letter-spacing:-1.5pt;mso-font-width:90%;mso-bidi-font-weight:
     bold;mso-bidi-font-style:italic'> </span><span lang=EN-US
     style='font-size:8.0pt;color:#221F1F;letter-spacing:-.25pt;mso-font-width:
     90%;mso-bidi-font-weight:bold;mso-bidi-font-style:italic'>IMPAIRMENT</span><span
     lang=EN-US style='font-size:8.0pt;color:#221F1F;letter-spacing:-1.25pt;
     mso-font-width:90%;mso-bidi-font-weight:bold;mso-bidi-font-style:italic'> </span><span
     lang=EN-US style='font-size:8.0pt;color:#221F1F;letter-spacing:-.15pt;
     mso-font-width:90%;mso-bidi-font-weight:bold;mso-bidi-font-style:italic'>SCALE</span><span
     lang=EN-US style='font-size:8.0pt;color:#221F1F;letter-spacing:-1.3pt;
     mso-font-width:90%;mso-bidi-font-weight:bold;mso-bidi-font-style:italic'> </span><span
     lang=EN-US style='font-size:8.0pt;color:#221F1F;letter-spacing:-.15pt;
     mso-font-width:90%;mso-bidi-font-weight:bold;mso-bidi-font-style:italic'>(AIS</span><b
     style='mso-bidi-font-weight:normal'><i style='mso-bidi-font-style:normal'><span
     lang=EN-US style='font-size:9.0pt;mso-bidi-font-size:11.0pt;color:#221F1F;
     letter-spacing:-.15pt;mso-font-width:90%'>)</span></i></b><b
     style='mso-bidi-font-weight:normal'><i style='mso-bidi-font-style:normal'><span
     lang=EN-US style='font-size:9.0pt;mso-bidi-font-size:11.0pt'><o:p></o:p></span></i></b></p>
     </div>
     <![if !mso]></td>
    </tr>
   </table>
   <![endif]></v:textbox>
 </v:shape><v:shape id="_x0000_s1038" type="#_x0000_t202" style='position:absolute;
  left:10388;top:68;width:3000;height:138' filled="f" stroked="f">
  <v:textbox style='mso-next-textbox:#_x0000_s1038' inset="0,0,0,0">
   <![if !mso]>
   <table cellpadding=0 cellspacing=0 width="100%">
    <tr>
     <td><![endif]>
     <div>
     <p class=MsoNormal style='line-height:6.9pt;mso-line-height-rule:exactly'><b
     style='mso-bidi-font-weight:normal'><i style='mso-bidi-font-style:normal'><span
     lang=EN-US style='font-size:6.0pt;mso-bidi-font-size:11.0pt;color:#221F1F;
     mso-font-width:85%'>(In<span style='letter-spacing:-.6pt'> </span>injuries<span
     style='letter-spacing:-.55pt'> </span>with<span style='letter-spacing:
     -.55pt'> </span>absent<span style='letter-spacing:-.55pt'> </span>motor<span
     style='letter-spacing:-.6pt'> </span>OR<span style='letter-spacing:-.55pt'>
     </span>sensory<span style='letter-spacing:-.55pt'> </span>function<span
     style='letter-spacing:-.55pt'> </span>in<span style='letter-spacing:-.55pt'>
     </span>S4-5<span style='letter-spacing:-.6pt'> </span>only)</span></i></b><b
     style='mso-bidi-font-weight:normal'><i style='mso-bidi-font-style:normal'><span
     lang=EN-US style='font-size:6.0pt;mso-bidi-font-size:11.0pt'><o:p></o:p></span></i></b></p>
     </div>
     <![if !mso]></td>
    </tr>
   </table>
   <![endif]></v:textbox>
 </v:shape><v:shape id="_x0000_s1037" type="#_x0000_t202" style='position:absolute;
  left:10976;top:193;width:1822;height:573' filled="f" stroked="f">
  <v:textbox style='mso-next-textbox:#_x0000_s1037' inset="0,0,0,0">
   <![if !mso]>
   <table cellpadding=0 cellspacing=0 width="100%">
    <tr>
     <td><![endif]>
     <div>
     <p class=MsoNormal style='margin-top:.35pt;margin-right:-.9pt;margin-bottom:
     0cm;margin-left:12.5pt;margin-bottom:.0001pt;text-indent:-9.85pt;
     line-height:95%'><span lang=EN-US style='font-size:8.0pt;line-height:95%;
     color:#221F1F;mso-font-width:95%;mso-bidi-font-weight:bold;mso-bidi-font-style:
     italic'>6.<span style='letter-spacing:-1.75pt'> </span><span
     style='letter-spacing:-.15pt'>ZONE</span><span style='letter-spacing:-1.75pt'>
     </span>OF<span style='letter-spacing:-1.7pt'> </span><span
     style='letter-spacing:-.35pt'>PARTIAL</span></span><span lang=EN-US
     style='font-size:8.0pt;line-height:95%;color:#221F1F;letter-spacing:-.35pt;
     mso-font-width:90%;mso-bidi-font-weight:bold;mso-bidi-font-style:italic'> </span><span
     lang=EN-US style='font-size:8.0pt;line-height:95%;color:#221F1F;
     letter-spacing:-.35pt;mso-bidi-font-weight:bold;mso-bidi-font-style:italic'>PRESERVATION</span><span
     lang=EN-US style='font-size:8.0pt;line-height:95%;mso-bidi-font-weight:
     bold;mso-bidi-font-style:italic'><o:p></o:p></span></p>
     <p class=MsoNormal style='line-height:6.2pt;mso-line-height-rule:exactly'><b
     style='mso-bidi-font-weight:normal'><i style='mso-bidi-font-style:normal'><span
     lang=EN-US style='font-size:6.0pt;mso-bidi-font-size:11.0pt;color:#221F1F;
     mso-font-width:80%'>Most caudal levels with any innervation</span></i></b><b
     style='mso-bidi-font-weight:normal'><i style='mso-bidi-font-style:normal'><span
     lang=EN-US style='font-size:6.0pt;mso-bidi-font-size:11.0pt'><o:p></o:p></span></i></b></p>
     </div>
     <![if !mso]></td>
    </tr>
   </table>
   <![endif]></v:textbox>
 </v:shape><v:shape id="_x0000_s1036" type="#_x0000_t202" style='position:absolute;
  left:12890;top:248;width:778;height:447' filled="f" stroked="f">
  <v:textbox style='mso-next-textbox:#_x0000_s1036' inset="0,0,0,0">
   <![if !mso]>
   <table cellpadding=0 cellspacing=0 width="100%">
    <tr>
     <td><![endif]>
     <div>
     <p class=MsoNormal align=right style='margin-right:.9pt;text-align:right;
     line-height:10.35pt;mso-line-height-rule:exactly'><span lang=EN-US
     style='font-size:8.0pt;color:#221F1F;mso-font-width:85%;mso-bidi-font-weight:
     bold;mso-bidi-font-style:italic'>SENSORY</span><span lang=EN-US
     style='font-size:8.0pt;mso-bidi-font-weight:bold;mso-bidi-font-style:italic'><o:p></o:p></span></p>
     <p class=MsoNormal align=right style='margin-top:1.65pt;margin-right:1.05pt;
     margin-bottom:0cm;margin-left:0cm;margin-bottom:.0001pt;text-align:right'><span
     lang=EN-US style='font-size:8.0pt;color:#221F1F;mso-bidi-font-weight:bold;
     mso-bidi-font-style:italic'>MOTOR</span><span lang=EN-US style='font-size:
     8.0pt;mso-bidi-font-weight:bold;mso-bidi-font-style:italic'><o:p></o:p></span></p>
     </div>
     <![if !mso]></td>
    </tr>
   </table>
   <![endif]></v:textbox>
 </v:shape><w:wrap type="none"/>
 <w:anchorlock/>
</v:group><![endif]--><![if !vml]><img width=988 height=58
src="F081-THHC%20(ASIA)%20American%20Spinal%20Injury%20Association.files/image032.gif"
v:shapes="_x0000_s1035 _x0000_s1049 _x0000_s1048 _x0000_s1047 _x0000_s1046 _x0000_s1045 _x0000_s1044 _x0000_s1043 _x0000_s1042 _x0000_s1041 _x0000_s1040 _x0000_s1039 _x0000_s1038 _x0000_s1037 _x0000_s1036"><![endif]></span><!--[if mso & !supportInlineShapes & supportFields]><span
lang=EN-US style='font-size:10.0pt;mso-bidi-font-size:9.0pt'><v:shape id="_x0000_i1030"
 type="#_x0000_t75" style='width:740.5pt;height:42.5pt'>
 <v:imagedata croptop="-65520f" cropbottom="65520f"/>
</v:shape><span style='mso-element:field-end'></span></span><![endif]--><span
lang=EN-US style='font-size:10.0pt;mso-bidi-font-size:9.0pt'><o:p></o:p></span></p>

</div>

<span lang=EN-US style='font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:
"Arial",sans-serif;mso-fareast-font-family:Arial;mso-ansi-language:EN-US;
mso-fareast-language:EN-US;mso-bidi-language:AR-SA'><br clear=all
style='page-break-before:auto;mso-break-type:section-break'>
</span>

<div class=WordSection9>

<p class=MsoNormal style='margin-top:1.15pt;tab-stops:179.1pt'><b
style='mso-bidi-font-weight:normal'><i style='mso-bidi-font-style:normal'><span
lang=EN-US style='font-size:8.5pt;mso-bidi-font-size:11.0pt;color:#221F1F;
mso-font-width:90%'><o:p>&nbsp;</o:p></span></i></b></p>

<p class=MsoNormal align=right style='margin-top:1.15pt;margin-right:-81.9pt;
margin-bottom:0cm;margin-left:15.05pt;margin-bottom:.0001pt;text-align:right;
tab-stops:179.1pt'><b style='mso-bidi-font-weight:normal'><i style='mso-bidi-font-style:
normal'><span lang=EN-US style='font-size:8.5pt;mso-bidi-font-size:11.0pt;
color:#221F1F;mso-font-width:90%'><span style='mso-tab-count:1'>�������������������������������������������������������������������� </span></span></i></b><span
lang=EN-US style='font-size:9.0pt;mso-bidi-font-size:12.0pt;font-family:Montserrat;
mso-bidi-font-weight:bold;mso-bidi-font-style:italic'>F081-THHC (ASIA) American
Spinal Injury Association</span><span lang=EN-US style='font-size:8.5pt;
mso-bidi-font-size:11.0pt;font-family:Montserrat;mso-bidi-font-weight:bold;
mso-bidi-font-style:italic'><o:p></o:p></span></p>

<span lang=EN-US style='font-size:11.0pt;font-family:"Arial",sans-serif;
mso-fareast-font-family:Arial;mso-ansi-language:EN-US;mso-fareast-language:
EN-US;mso-bidi-language:AR-SA'><br clear=all style='mso-special-character:line-break;
mso-column-break-before:always'>
</span>

<p class=MsoNormal style='margin-top:.25pt;margin-right:0cm;margin-bottom:0cm;
margin-left:15.05pt;margin-bottom:.0001pt'><b style='mso-bidi-font-weight:normal'><i
style='mso-bidi-font-style:normal'><span lang=EN-US style='font-size:6.0pt;
mso-bidi-font-size:11.0pt'><o:p></o:p></span></i></b></p>

</div>

<span lang=EN-US style='font-size:6.0pt;mso-bidi-font-size:11.0pt;font-family:
"Arial",sans-serif;mso-fareast-font-family:Arial;mso-ansi-language:EN-US;
mso-fareast-language:EN-US;mso-bidi-language:AR-SA'><br clear=all
style='page-break-before:always;mso-break-type:section-break'>
</span>

<div class=WordSection10>

<p class=MsoNormal style='margin-top:3.6pt;margin-right:0cm;margin-bottom:0cm;
margin-left:11.2pt;margin-bottom:.0001pt'><b style='mso-bidi-font-weight:normal'><u
style='text-underline:black'><span lang=EN-US style='font-size:14.0pt;
mso-bidi-font-size:11.0pt;color:#221F1F;mso-font-width:90%'>Muscle Function
Grading</span></u></b><b style='mso-bidi-font-weight:normal'><span lang=EN-US
style='font-size:14.0pt;mso-bidi-font-size:11.0pt'><o:p></o:p></span></b></p>

<p class=MsoNormal style='margin-top:1.65pt;margin-right:0cm;margin-bottom:
0cm;margin-left:11.2pt;margin-bottom:.0001pt'><b style='mso-bidi-font-weight:
normal'><span lang=EN-US style='font-size:10.0pt;mso-bidi-font-size:11.0pt;
color:#201E1F;mso-font-width:90%'>0 </span></b><span lang=EN-US
style='font-size:8.5pt;mso-bidi-font-size:11.0pt;color:#201E1F;mso-font-width:
90%'>= Total paralysis</span><span lang=EN-US style='font-size:8.5pt;
mso-bidi-font-size:11.0pt'><o:p></o:p></span></p>

<p class=MsoNormal style='margin-top:1.1pt;margin-right:0cm;margin-bottom:0cm;
margin-left:11.2pt;margin-bottom:.0001pt'><b style='mso-bidi-font-weight:normal'><span
lang=EN-US style='font-size:10.0pt;mso-bidi-font-size:11.0pt;color:#201E1F;
mso-font-width:90%'>1 </span></b><span lang=EN-US style='font-size:8.5pt;
mso-bidi-font-size:11.0pt;color:#201E1F;mso-font-width:90%'>= Palpable or
visible contraction</span><span lang=EN-US style='font-size:8.5pt;mso-bidi-font-size:
11.0pt'><o:p></o:p></span></p>

<p class=MsoNormal style='margin-top:1.1pt;margin-right:0cm;margin-bottom:0cm;
margin-left:11.2pt;margin-bottom:.0001pt'><b style='mso-bidi-font-weight:normal'><span
lang=EN-US style='font-size:10.0pt;mso-bidi-font-size:11.0pt;color:#201E1F;
mso-font-width:90%'>2 </span></b><span lang=EN-US style='font-size:8.5pt;
mso-bidi-font-size:11.0pt;color:#201E1F;mso-font-width:90%'>= Active movement,
full range of motion (ROM) with gravity eliminated</span><span lang=EN-US
style='font-size:8.5pt;mso-bidi-font-size:11.0pt'><o:p></o:p></span></p>

<p class=MsoNormal style='margin-top:1.1pt;margin-right:0cm;margin-bottom:0cm;
margin-left:11.2pt;margin-bottom:.0001pt'><b style='mso-bidi-font-weight:normal'><span
lang=EN-US style='font-size:10.0pt;mso-bidi-font-size:11.0pt;color:#201E1F;
mso-font-width:90%'>3 </span></b><span lang=EN-US style='font-size:8.5pt;
mso-bidi-font-size:11.0pt;color:#201E1F;mso-font-width:90%'>= Active movement,
full ROM against gravity</span><span lang=EN-US style='font-size:8.5pt;
mso-bidi-font-size:11.0pt'><o:p></o:p></span></p>

<p class=MsoNormal style='margin-top:1.1pt;margin-right:0cm;margin-bottom:0cm;
margin-left:11.2pt;margin-bottom:.0001pt;line-height:10.95pt;mso-line-height-rule:
exactly'><b style='mso-bidi-font-weight:normal'><span lang=EN-US
style='font-size:10.0pt;mso-bidi-font-size:11.0pt;color:#201E1F;mso-font-width:
90%'>4 </span></b><span lang=EN-US style='font-size:8.5pt;mso-bidi-font-size:
11.0pt;color:#201E1F;mso-font-width:90%'>= Active movement, full ROM against
gravity and moderate resistance in a</span><span lang=EN-US style='font-size:
8.5pt;mso-bidi-font-size:11.0pt'><o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:11.2pt;line-height:9.25pt;mso-line-height-rule:
exactly'><span lang=EN-US style='font-size:8.5pt;mso-bidi-font-size:11.0pt;
color:#201E1F;mso-font-width:90%'>muscle specific position</span><span
lang=EN-US style='font-size:8.5pt;mso-bidi-font-size:11.0pt'><o:p></o:p></span></p>

<p class=MsoNormal style='margin-top:2.45pt;margin-right:0cm;margin-bottom:
0cm;margin-left:11.2pt;margin-bottom:.0001pt;line-height:88%'><b
style='mso-bidi-font-weight:normal'><span lang=EN-US style='font-size:10.0pt;
mso-bidi-font-size:11.0pt;line-height:88%;color:#201E1F;mso-font-width:85%'>5<span
style='letter-spacing:-.9pt'> </span></span></b><span lang=EN-US
style='font-size:8.5pt;mso-bidi-font-size:11.0pt;line-height:88%;color:#201E1F;
mso-font-width:85%'>=<span style='letter-spacing:-.75pt'> </span>(Normal)<span
style='letter-spacing:-.75pt'> </span>active<span style='letter-spacing:-.75pt'>
</span>movement,<span style='letter-spacing:-.8pt'> </span>full<span
style='letter-spacing:-.75pt'> </span>ROM<span style='letter-spacing:-.75pt'> </span>against<span
style='letter-spacing:-.75pt'> </span>gravity<span style='letter-spacing:-.75pt'>
</span>and<span style='letter-spacing:-.75pt'> </span>full<span
style='letter-spacing:-.8pt'> </span>resistance<span style='letter-spacing:
-.75pt'> </span>in<span style='letter-spacing:-.75pt'> </span>a </span><span
lang=EN-US style='font-size:8.5pt;mso-bidi-font-size:11.0pt;line-height:88%;
color:#201E1F;mso-font-width:90%'>functional<span style='letter-spacing:-1.5pt'>
</span>muscle<span style='letter-spacing:-1.45pt'> </span>position<span
style='letter-spacing:-1.5pt'> </span>expected<span style='letter-spacing:-1.45pt'>
</span>from<span style='letter-spacing:-1.5pt'> </span>an<span
style='letter-spacing:-1.45pt'> </span>otherwise<span style='letter-spacing:
-1.5pt'> </span>unimpaired<span style='letter-spacing:-1.45pt'> </span>person</span><span
lang=EN-US style='font-size:8.5pt;mso-bidi-font-size:11.0pt;line-height:88%'><o:p></o:p></span></p>

<p class=MsoNormal style='margin-top:2.7pt;margin-right:0cm;margin-bottom:0cm;
margin-left:11.2pt;margin-bottom:.0001pt;line-height:88%'><b style='mso-bidi-font-weight:
normal'><span lang=EN-US style='font-size:10.0pt;mso-bidi-font-size:11.0pt;
line-height:88%;color:#201E1F;mso-font-width:90%'>NT<span style='letter-spacing:
-1.55pt'> </span></span></b><span lang=EN-US style='font-size:8.5pt;mso-bidi-font-size:
11.0pt;line-height:88%;color:#201E1F;mso-font-width:90%'>=<span
style='letter-spacing:-1.3pt'> </span>Not<span style='letter-spacing:-1.3pt'> </span>testable<span
style='letter-spacing:-1.35pt'> </span>(i.e.<span style='letter-spacing:-1.3pt'>
</span>due<span style='letter-spacing:-1.3pt'> </span>to<span style='letter-spacing:
-1.3pt'> </span>immobilization,<span style='letter-spacing:-1.3pt'> </span>severe<span
style='letter-spacing:-1.3pt'> </span>pain<span style='letter-spacing:-1.3pt'> </span>such<span
style='letter-spacing:-1.3pt'> </span>that<span style='letter-spacing:-1.3pt'> </span>the<span
style='letter-spacing:-1.3pt'> </span>patient </span><span lang=EN-US
style='font-size:8.5pt;mso-bidi-font-size:11.0pt;line-height:88%;color:#201E1F;
mso-font-width:85%'>cannot<span style='letter-spacing:-.8pt'> </span>be<span
style='letter-spacing:-.8pt'> </span>graded,<span style='letter-spacing:-.8pt'>
</span>amputation<span style='letter-spacing:-.75pt'> </span>of<span
style='letter-spacing:-.8pt'> </span>limb,<span style='letter-spacing:-.8pt'> </span>or<span
style='letter-spacing:-.75pt'> </span>contracture<span style='letter-spacing:
-.8pt'> </span>of<span style='letter-spacing:-.8pt'> </span>&gt;<span
style='letter-spacing:-.75pt'> </span>50%<span style='letter-spacing:-.8pt'> </span>of<span
style='letter-spacing:-.8pt'> </span>the<span style='letter-spacing:-.75pt'> </span>normal<span
style='letter-spacing:-.8pt'> </span>ROM)</span><span lang=EN-US
style='font-size:8.5pt;mso-bidi-font-size:11.0pt;line-height:88%'><o:p></o:p></span></p>

<p class=MsoNormal style='margin-top:1.6pt;margin-right:0cm;margin-bottom:0cm;
margin-left:11.2pt;margin-bottom:.0001pt'><b style='mso-bidi-font-weight:normal'><span
lang=EN-US style='font-size:10.0pt;mso-bidi-font-size:11.0pt;color:#201E1F;
mso-font-width:90%'>0*, 1*, 2*, 3*, 4*, NT* </span></b><span lang=EN-US
style='font-size:8.5pt;mso-bidi-font-size:11.0pt;color:#201E1F;mso-font-width:
90%'>= Non-SCI condition present </span><span lang=EN-US style='font-size:5.0pt;
mso-bidi-font-size:11.0pt;color:#201E1F;position:relative;top:-3.0pt;
mso-text-raise:3.0pt;mso-font-width:90%'>a</span><span lang=EN-US
style='font-size:5.0pt;mso-bidi-font-size:11.0pt'><o:p></o:p></span></p>

<h2><span lang=EN-US style='color:#221F1F;mso-font-width:90%'>Sensory Grading</span><span
lang=EN-US style='text-decoration:none;text-underline:none'><o:p></o:p></span></h2>

<p class=MsoBodyText style='margin-top:.7pt;margin-right:0cm;margin-bottom:
0cm;margin-left:11.2pt;margin-bottom:.0001pt'><b style='mso-bidi-font-weight:
normal'><span lang=EN-US style='font-size:10.0pt;mso-bidi-font-size:9.0pt;
color:#201E1F;mso-font-width:85%'>0<span style='letter-spacing:-.9pt'> </span></span></b><span
lang=EN-US style='color:#201E1F;mso-font-width:85%'>=<span style='letter-spacing:
-1.05pt'> </span>Absent<span style='letter-spacing:1.1pt'> </span></span><b
style='mso-bidi-font-weight:normal'><span lang=EN-US style='font-size:10.0pt;
mso-bidi-font-size:9.0pt;color:#201E1F;mso-font-width:85%'>1<span
style='letter-spacing:-.85pt'> </span></span></b><span lang=EN-US
style='color:#201E1F;mso-font-width:85%'>=<span style='letter-spacing:-1.1pt'> </span>Altered,<span
style='letter-spacing:-.75pt'> </span>either<span style='letter-spacing:-.8pt'>
</span>decreased/impaired<span style='letter-spacing:-.8pt'> </span>sensation<span
style='letter-spacing:-.8pt'> </span>or<span style='letter-spacing:-.75pt'> </span>hypersensitivity</span></p>

<p class=MsoBodyText style='margin-top:4.1pt;margin-right:0cm;margin-bottom:
0cm;margin-left:11.2pt;margin-bottom:.0001pt'><b style='mso-bidi-font-weight:
normal'><span lang=EN-US style='font-size:10.0pt;mso-bidi-font-size:9.0pt;
color:#201E1F;mso-font-width:90%'>2 </span></b><span lang=EN-US
style='color:#201E1F;mso-font-width:90%'>= Normal </span><b style='mso-bidi-font-weight:
normal'><span lang=EN-US style='font-size:10.0pt;mso-bidi-font-size:9.0pt;
color:#201E1F;mso-font-width:90%'>NT </span></b><span lang=EN-US
style='color:#201E1F;mso-font-width:90%'>= Not testable</span></p>

<p class=MsoNormal style='margin-top:4.1pt;margin-right:0cm;margin-bottom:0cm;
margin-left:11.2pt;margin-bottom:.0001pt'><b style='mso-bidi-font-weight:normal'><span
lang=EN-US style='font-size:10.0pt;mso-bidi-font-size:11.0pt;color:#201E1F;
mso-font-width:90%'>0*, 1*, NT* </span></b><span lang=EN-US style='font-size:
9.0pt;mso-bidi-font-size:11.0pt;color:#201E1F;mso-font-width:90%'>= Non-SCI
condition present </span><span lang=EN-US style='font-size:5.0pt;mso-bidi-font-size:
11.0pt;color:#201E1F;position:relative;top:-3.0pt;mso-text-raise:3.0pt;
mso-font-width:90%'>a</span><span lang=EN-US style='font-size:5.0pt;mso-bidi-font-size:
11.0pt'><o:p></o:p></span></p>

<p class=MsoNormal style='margin-top:3.55pt;margin-right:5.55pt;margin-bottom:
0cm;margin-left:11.2pt;margin-bottom:.0001pt;line-height:91%'><span lang=EN-US
style='font-size:5.0pt;mso-bidi-font-size:11.0pt;line-height:91%;color:#201E1F;
position:relative;top:-3.0pt;mso-text-raise:3.0pt;mso-font-width:85%'>a<span
style='letter-spacing:-.5pt'> </span></span><span lang=EN-US style='font-size:
8.5pt;mso-bidi-font-size:11.0pt;line-height:91%;color:#201E1F;mso-font-width:
85%'>Note:<span style='letter-spacing:-1.0pt'> </span>Abnormal<span
style='letter-spacing:-.75pt'> </span>motor<span style='letter-spacing:-.75pt'>
</span>and<span style='letter-spacing:-.8pt'> </span>sensory<span
style='letter-spacing:-.75pt'> </span>scores<span style='letter-spacing:-.75pt'>
</span>should<span style='letter-spacing:-.75pt'> </span>be<span
style='letter-spacing:-.75pt'> </span>tagged<span style='letter-spacing:-.75pt'>
</span>with<span style='letter-spacing:-.75pt'> </span>a<span style='letter-spacing:
-.75pt'> </span>�*�<span style='letter-spacing:-.95pt'> </span>to<span
style='letter-spacing:-.75pt'> </span>indicate<span style='letter-spacing:-.75pt'>
</span>an impairment<span style='letter-spacing:-.9pt'> </span>due<span
style='letter-spacing:-.85pt'> </span>to<span style='letter-spacing:-.9pt'> </span>a<span
style='letter-spacing:-.85pt'> </span>non-SCI<span style='letter-spacing:-.85pt'>
</span>condition.<span style='letter-spacing:-.95pt'> </span>The<span
style='letter-spacing:-.85pt'> </span>non-SCI<span style='letter-spacing:-.9pt'>
</span>condition<span style='letter-spacing:-.85pt'> </span>should<span
style='letter-spacing:-.85pt'> </span>be<span style='letter-spacing:-.9pt'> </span>explained
</span><span lang=EN-US style='font-size:8.5pt;mso-bidi-font-size:11.0pt;
line-height:91%;color:#201E1F;mso-font-width:90%'>in<span style='letter-spacing:
-1.2pt'> </span>the<span style='letter-spacing:-1.2pt'> </span>comments<span
style='letter-spacing:-1.2pt'> </span>box<span style='letter-spacing:-1.15pt'> </span>together<span
style='letter-spacing:-1.2pt'> </span>with<span style='letter-spacing:-1.2pt'> </span>information<span
style='letter-spacing:-1.15pt'> </span>about<span style='letter-spacing:-1.2pt'>
</span>how<span style='letter-spacing:-1.2pt'> </span>the<span
style='letter-spacing:-1.2pt'> </span>score<span style='letter-spacing:-1.15pt'>
</span>is<span style='letter-spacing:-1.2pt'> </span>rated<span
style='letter-spacing:-1.2pt'> </span>for classification<span style='letter-spacing:
-.9pt'> </span>purposes<span style='letter-spacing:-.85pt'> </span>(at<span
style='letter-spacing:-.85pt'> </span>least<span style='letter-spacing:-.85pt'>
</span>normal<span style='letter-spacing:-.85pt'> </span>/<span
style='letter-spacing:-.85pt'> </span>not<span style='letter-spacing:-.85pt'> </span>normal<span
style='letter-spacing:-.85pt'> </span>for<span style='letter-spacing:-.85pt'> </span>classification).</span><span
lang=EN-US style='font-size:8.5pt;mso-bidi-font-size:11.0pt;line-height:91%'><o:p></o:p></span></p>

<h2 style='margin-top:4.25pt'><span lang=EN-US style='color:#221F1F;mso-font-width:
90%'>When to Test Non-Key Muscles:</span><span lang=EN-US style='text-decoration:
none;text-underline:none'><o:p></o:p></span></h2>

<p class=MsoBodyText style='margin-top:4.7pt;margin-right:15.7pt;margin-bottom:
0cm;margin-left:11.2pt;margin-bottom:.0001pt;text-align:justify;line-height:
86%'><span lang=EN-US style='color:#221F1F;mso-font-width:85%'>In<span
style='letter-spacing:-.45pt'> </span>a<span style='letter-spacing:-.45pt'> </span>patient<span
style='letter-spacing:-.45pt'> </span>with<span style='letter-spacing:-.4pt'> </span>an<span
style='letter-spacing:-.45pt'> </span>apparent<span style='letter-spacing:-.7pt'>
</span>AIS<span style='letter-spacing:-.45pt'> </span>B<span style='letter-spacing:
-.45pt'> </span>classification,<span style='letter-spacing:-.4pt'> </span>non-key<span
style='letter-spacing:-.45pt'> </span>muscle<span style='letter-spacing:-.45pt'>
</span>functions </span><span lang=EN-US style='color:#221F1F;mso-font-width:
90%'>more<span style='letter-spacing:-1.05pt'> </span>than<span
style='letter-spacing:-1.0pt'> </span>3<span style='letter-spacing:-1.0pt'> </span>levels<span
style='letter-spacing:-1.0pt'> </span>below<span style='letter-spacing:-1.05pt'>
</span>the<span style='letter-spacing:-1.0pt'> </span>motor<span
style='letter-spacing:-1.0pt'> </span>level<span style='letter-spacing:-1.0pt'>
</span>on<span style='letter-spacing:-1.0pt'> </span>each<span
style='letter-spacing:-1.05pt'> </span>side<span style='letter-spacing:-1.0pt'>
</span>should<span style='letter-spacing:-1.0pt'> </span>be<span
style='letter-spacing:-1.0pt'> </span>tested<span style='letter-spacing:-1.0pt'>
</span>to most<span style='letter-spacing:-1.3pt'> </span>accurately<span
style='letter-spacing:-1.25pt'> </span>classify<span style='letter-spacing:
-1.3pt'> </span>the<span style='letter-spacing:-1.25pt'> </span>injury<span
style='letter-spacing:-1.3pt'> </span>(differentiate<span style='letter-spacing:
-1.25pt'> </span>between<span style='letter-spacing:-1.45pt'> </span>AIS<span
style='letter-spacing:-1.25pt'> </span>B<span style='letter-spacing:-1.3pt'> </span>and<span
style='letter-spacing:-1.25pt'> </span>C).</span></p>

<h2 style='margin-top:5.4pt;margin-right:0cm;margin-bottom:0cm;margin-left:
11.15pt;margin-bottom:.0001pt;tab-stops:277.9pt'><!--[if gte vml 1]><o:wrapblock><v:shape
  id="_x0000_s1033" type="#_x0000_t202" style='position:absolute;left:0;
  text-align:left;margin-left:25.2pt;margin-top:18.75pt;width:244.8pt;height:245.35pt;
  z-index:15765504;mso-position-horizontal-relative:page' filled="f" stroked="f">
  <v:textbox inset="0,0,0,0"/>
  <w:wrap anchorx="page"/>
 </v:shape><![endif]--><![if !vml]><span style='mso-ignore:vglayout'>
 <table cellpadding=0 cellspacing=0 align=left>
  <tr>
   <td width=50 height=1694></td>
  </tr>
  <tr>
   <td></td>
   <td width=412 height=413 style='vertical-align:top'><![endif]><![if !mso]><span
   style='position:absolute;mso-ignore:vglayout;left:0pt;z-index:15765504'>
   <table cellpadding=0 cellspacing=0 width="100%">
    <tr>
     <td><![endif]>
     <div v:shape="_x0000_s1033" style='padding:0pt 0pt 0pt 0pt' class=shape>
     <table class=MsoNormalTable border=0 cellspacing=0 cellpadding=0
      style='margin-left:.35pt;border-collapse:collapse;mso-table-layout-alt:
      fixed;mso-yfti-tbllook:480;mso-padding-alt:0cm 0cm 0cm 0cm'>
      <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;height:14.4pt'>
       <td width=274 valign=top style='width:205.5pt;background:#DBDCDE;
       padding:0cm 0cm 0cm 0cm;height:14.4pt'>
       <p class=TableParagraph style='margin-top:3.45pt;margin-right:10.3pt;
       margin-bottom:0cm;margin-left:3.5pt;margin-bottom:.0001pt;line-height:
       96%'><b style='mso-bidi-font-weight:normal'><span lang=EN-US
       style='font-size:8.0pt;line-height:96%;mso-font-width:80%'>Shoulder: </span></b><span
       lang=EN-US style='font-size:8.0pt;line-height:96%;color:black;
       mso-color-alt:windowtext;mso-font-width:80%'>Flexion, extension, abduction,
       adduction, </span><span lang=EN-US style='font-size:8.0pt;line-height:
       96%;color:black;mso-color-alt:windowtext;mso-font-width:90%'>internal
       and external rotation</span><span lang=EN-US style='font-size:8.0pt;
       line-height:96%'><o:p></o:p></span></p>
       <p class=TableParagraph style='margin-left:3.5pt;line-height:10.0pt;
       mso-line-height-rule:exactly'><b style='mso-bidi-font-weight:normal'><span
       lang=EN-US style='font-size:8.0pt;color:black;mso-color-alt:windowtext;
       mso-font-width:90%'>Elbow: </span></b><span lang=EN-US style='font-size:
       8.0pt;color:black;mso-color-alt:windowtext;mso-font-width:90%'>Supination</span><span
       lang=EN-US style='font-size:8.0pt'><o:p></o:p></span></p>
       </td>
       <td width=52 valign=top style='width:39.25pt;background:#DBDCDE;
       padding:0cm 0cm 0cm 0cm;height:14.4pt'>
       <p class=TableParagraph style='margin-top:.45pt'><span lang=EN-US
       style='font-size:8.0pt'><o:p>&nbsp;</o:p></span></p>
       <p class=TableParagraph style='margin-left:7.9pt'><b style='mso-bidi-font-weight:
       normal'><span lang=EN-US style='font-size:8.0pt;color:black;mso-color-alt:
       windowtext;mso-font-width:90%'>C5</span></b><b style='mso-bidi-font-weight:
       normal'><span lang=EN-US style='font-size:8.0pt'><o:p></o:p></span></b></p>
       </td>
      </tr>
      <tr style='mso-yfti-irow:1;height:14.4pt'>
       <td width=274 valign=top style='width:205.5pt;background:#DBDCDE;
       padding:0cm 0cm 0cm 0cm;height:14.4pt'>
       <p class=TableParagraph style='margin-top:.8pt;margin-right:0cm;
       margin-bottom:0cm;margin-left:2.85pt;margin-bottom:.0001pt;line-height:
       10.15pt;mso-line-height-rule:exactly'><b style='mso-bidi-font-weight:
       normal'><span lang=EN-US style='font-size:8.0pt;color:black;mso-color-alt:
       windowtext;mso-font-width:90%'>Elbow: </span></b><span lang=EN-US
       style='font-size:8.0pt;color:black;mso-color-alt:windowtext;mso-font-width:
       90%'>Pronation</span><span lang=EN-US style='font-size:8.0pt'><o:p></o:p></span></p>
       <p class=TableParagraph style='margin-left:2.85pt;line-height:10.15pt;
       mso-line-height-rule:exactly'><b style='mso-bidi-font-weight:normal'><span
       lang=EN-US style='font-size:8.0pt;color:black;mso-color-alt:windowtext;
       mso-font-width:90%'>Wrist: </span></b><span lang=EN-US style='font-size:
       8.0pt;color:black;mso-color-alt:windowtext;mso-font-width:90%'>Flexion</span><span
       lang=EN-US style='font-size:8.0pt'><o:p></o:p></span></p>
       </td>
       <td width=52 valign=top style='width:39.25pt;background:#DBDCDE;
       padding:0cm 0cm 0cm 0cm;height:14.4pt'>
       <p class=TableParagraph style='margin-top:4.9pt;margin-right:0cm;
       margin-bottom:0cm;margin-left:8.1pt;margin-bottom:.0001pt'><b
       style='mso-bidi-font-weight:normal'><span lang=EN-US style='font-size:
       8.0pt;color:black;mso-color-alt:windowtext;mso-font-width:90%'>C6</span></b><b
       style='mso-bidi-font-weight:normal'><span lang=EN-US style='font-size:
       8.0pt'><o:p></o:p></span></b></p>
       </td>
      </tr>
      <tr style='mso-yfti-irow:2;height:14.4pt'>
       <td width=274 valign=top style='width:205.5pt;background:#DBDCDE;
       padding:0cm 0cm 0cm 0cm;height:14.4pt'>
       <p class=TableParagraph style='margin-top:1.35pt;margin-right:0cm;
       margin-bottom:0cm;margin-left:3.55pt;margin-bottom:.0001pt;line-height:
       10.15pt;mso-line-height-rule:exactly'><b style='mso-bidi-font-weight:
       normal'><span lang=EN-US style='font-size:8.0pt;color:black;mso-color-alt:
       windowtext;mso-font-width:90%'>Finger: </span></b><span lang=EN-US
       style='font-size:8.0pt;color:black;mso-color-alt:windowtext;mso-font-width:
       90%'>Flexion at proximal joint, extension</span><span lang=EN-US
       style='font-size:8.0pt'><o:p></o:p></span></p>
       <p class=TableParagraph style='margin-left:3.55pt;line-height:10.15pt;
       mso-line-height-rule:exactly'><b style='mso-bidi-font-weight:normal'><span
       lang=EN-US style='font-size:8.0pt;color:black;mso-color-alt:windowtext;
       mso-font-width:85%'>Thumb:<span style='letter-spacing:-.85pt'> </span></span></b><span
       lang=EN-US style='font-size:8.0pt;color:black;mso-color-alt:windowtext;
       mso-font-width:85%'>Flexion,<span style='letter-spacing:-.85pt'> </span>extension<span
       style='letter-spacing:-.85pt'> </span>and<span style='letter-spacing:
       -.85pt'> </span>abduction<span style='letter-spacing:-.85pt'> </span>in<span
       style='letter-spacing:-.85pt'> </span>plane<span style='letter-spacing:
       -.8pt'> </span>of<span style='letter-spacing:-.85pt'> </span>thumb</span><span
       lang=EN-US style='font-size:8.0pt'><o:p></o:p></span></p>
       </td>
       <td width=52 valign=top style='width:39.25pt;background:#DBDCDE;
       padding:0cm 0cm 0cm 0cm;height:14.4pt'>
       <p class=TableParagraph style='margin-top:4.9pt;margin-right:0cm;
       margin-bottom:0cm;margin-left:8.1pt;margin-bottom:.0001pt'><b
       style='mso-bidi-font-weight:normal'><span lang=EN-US style='font-size:
       8.0pt;color:black;mso-color-alt:windowtext;mso-font-width:90%'>C7</span></b><b
       style='mso-bidi-font-weight:normal'><span lang=EN-US style='font-size:
       8.0pt'><o:p></o:p></span></b></p>
       </td>
      </tr>
      <tr style='mso-yfti-irow:3;height:14.4pt'>
       <td width=274 valign=top style='width:205.5pt;border:none;border-bottom:
       solid white 4.5pt;background:#DBDCDE;padding:0cm 0cm 0cm 0cm;height:
       14.4pt'>
       <p class=TableParagraph style='margin-top:1.45pt;margin-right:0cm;
       margin-bottom:0cm;margin-left:3.55pt;margin-bottom:.0001pt;line-height:
       10.15pt;mso-line-height-rule:exactly'><b style='mso-bidi-font-weight:
       normal'><span lang=EN-US style='font-size:8.0pt;color:black;mso-color-alt:
       windowtext;mso-font-width:90%'>Finger: </span></b><span lang=EN-US
       style='font-size:8.0pt;color:black;mso-color-alt:windowtext;mso-font-width:
       90%'>Flexion at MCP joint</span><span lang=EN-US style='font-size:8.0pt'><o:p></o:p></span></p>
       <p class=TableParagraph style='margin-top:.1pt;margin-right:10.3pt;
       margin-bottom:0cm;margin-left:3.55pt;margin-bottom:.0001pt;line-height:
       96%'><b style='mso-bidi-font-weight:normal'><span lang=EN-US
       style='font-size:8.0pt;line-height:96%;color:black;mso-color-alt:windowtext;
       mso-font-width:80%'>Thumb: </span></b><span lang=EN-US style='font-size:
       8.0pt;line-height:96%;color:black;mso-color-alt:windowtext;mso-font-width:
       80%'>Opposition, adduction and abduction </span><span lang=EN-US
       style='font-size:8.0pt;line-height:96%;color:black;mso-color-alt:windowtext;
       mso-font-width:90%'>perpendicular to palm</span><span lang=EN-US
       style='font-size:8.0pt;line-height:96%'><o:p></o:p></span></p>
       </td>
       <td width=52 valign=top style='width:39.25pt;border:none;border-bottom:
       solid white 4.5pt;background:#DBDCDE;padding:0cm 0cm 0cm 0cm;height:
       14.4pt'>
       <p class=TableParagraph style='margin-top:.55pt'><span lang=EN-US
       style='font-size:8.0pt'><o:p>&nbsp;</o:p></span></p>
       <p class=TableParagraph style='margin-left:8.1pt'><b style='mso-bidi-font-weight:
       normal'><span lang=EN-US style='font-size:8.0pt;color:black;mso-color-alt:
       windowtext;mso-font-width:90%'>C8</span></b><b style='mso-bidi-font-weight:
       normal'><span lang=EN-US style='font-size:8.0pt'><o:p></o:p></span></b></p>
       </td>
      </tr>
      <tr style='mso-yfti-irow:4;height:14.4pt'>
       <td width=274 valign=top style='width:205.5pt;border:none;border-bottom:
       solid white 4.5pt;mso-border-top-alt:solid white 4.5pt;background:#DBDCDE;
       padding:0cm 0cm 0cm 0cm;height:14.4pt'>
       <p class=TableParagraph style='margin-top:.9pt;margin-right:0cm;
       margin-bottom:0cm;margin-left:3.55pt;margin-bottom:.0001pt'><b
       style='mso-bidi-font-weight:normal'><span lang=EN-US style='font-size:
       8.0pt;color:black;mso-color-alt:windowtext;mso-font-width:90%'>Finger: </span></b><span
       lang=EN-US style='font-size:8.0pt;color:black;mso-color-alt:windowtext;
       mso-font-width:90%'>Abduction of the index finger</span><span
       lang=EN-US style='font-size:8.0pt'><o:p></o:p></span></p>
       </td>
       <td width=52 valign=top style='width:39.25pt;border:none;border-bottom:
       solid white 4.5pt;mso-border-top-alt:solid white 4.5pt;background:#DBDCDE;
       padding:0cm 0cm 0cm 0cm;height:14.4pt'>
       <p class=TableParagraph style='margin-top:.3pt;margin-right:0cm;
       margin-bottom:0cm;margin-left:8.0pt;margin-bottom:.0001pt'><b
       style='mso-bidi-font-weight:normal'><span lang=EN-US style='font-size:
       8.0pt;color:black;mso-color-alt:windowtext;mso-font-width:90%'>T1</span></b><b
       style='mso-bidi-font-weight:normal'><span lang=EN-US style='font-size:
       8.0pt'><o:p></o:p></span></b></p>
       </td>
      </tr>
      <tr style='mso-yfti-irow:5;height:14.4pt'>
       <td width=274 valign=top style='width:205.5pt;border:none;border-bottom:
       solid white 4.5pt;mso-border-top-alt:solid white 4.5pt;background:#DBDCDE;
       padding:0cm 0cm 0cm 0cm;height:14.4pt'>
       <p class=TableParagraph style='margin-top:.75pt;margin-right:0cm;
       margin-bottom:0cm;margin-left:3.55pt;margin-bottom:.0001pt'><b
       style='mso-bidi-font-weight:normal'><span lang=EN-US style='font-size:
       8.0pt;color:black;mso-color-alt:windowtext;mso-font-width:90%'>Hip: </span></b><span
       lang=EN-US style='font-size:8.0pt;color:black;mso-color-alt:windowtext;
       mso-font-width:90%'>Adduction</span><span lang=EN-US style='font-size:
       8.0pt'><o:p></o:p></span></p>
       </td>
       <td width=52 valign=top style='width:39.25pt;border:none;border-bottom:
       solid white 4.5pt;mso-border-top-alt:solid white 4.5pt;background:#DBDCDE;
       padding:0cm 0cm 0cm 0cm;height:14.4pt'>
       <p class=TableParagraph style='margin-left:8.0pt;line-height:10.95pt;
       mso-line-height-rule:exactly'><b style='mso-bidi-font-weight:normal'><span
       lang=EN-US style='font-size:8.0pt;color:black;mso-color-alt:windowtext;
       mso-font-width:90%'>L2</span></b><b style='mso-bidi-font-weight:normal'><span
       lang=EN-US style='font-size:8.0pt'><o:p></o:p></span></b></p>
       </td>
      </tr>
      <tr style='mso-yfti-irow:6;height:14.4pt'>
       <td width=274 valign=top style='width:205.5pt;border:none;border-bottom:
       solid white 4.5pt;mso-border-top-alt:solid white 4.5pt;background:#DBDCDE;
       padding:0cm 0cm 0cm 0cm;height:14.4pt'>
       <p class=TableParagraph style='margin-left:3.55pt;line-height:9.3pt;
       mso-line-height-rule:exactly'><b style='mso-bidi-font-weight:normal'><span
       lang=EN-US style='font-size:8.0pt;color:black;mso-color-alt:windowtext;
       mso-font-width:90%'>Hip: </span></b><span lang=EN-US style='font-size:
       8.0pt;color:black;mso-color-alt:windowtext;mso-font-width:90%'>External
       rotation</span><span lang=EN-US style='font-size:8.0pt'><o:p></o:p></span></p>
       </td>
       <td width=52 valign=top style='width:39.25pt;border:none;border-bottom:
       solid white 4.5pt;mso-border-top-alt:solid white 4.5pt;background:#DBDCDE;
       padding:0cm 0cm 0cm 0cm;height:14.4pt'>
       <p class=TableParagraph style='margin-left:8.0pt;line-height:9.7pt;
       mso-line-height-rule:exactly'><b style='mso-bidi-font-weight:normal'><span
       lang=EN-US style='font-size:8.0pt;color:black;mso-color-alt:windowtext;
       mso-font-width:90%'>L3</span></b><b style='mso-bidi-font-weight:normal'><span
       lang=EN-US style='font-size:8.0pt'><o:p></o:p></span></b></p>
       </td>
      </tr>
      <tr style='mso-yfti-irow:7;height:14.4pt'>
       <td width=274 valign=top style='width:205.5pt;border:none;border-bottom:
       solid white 4.5pt;mso-border-top-alt:solid white 4.5pt;background:#DBDCDE;
       padding:0cm 0cm 0cm 0cm;height:14.4pt'>
       <p class=TableParagraph style='margin-top:.1pt;margin-right:0cm;
       margin-bottom:0cm;margin-left:2.85pt;margin-bottom:.0001pt;line-height:
       10.15pt;mso-line-height-rule:exactly'><b style='mso-bidi-font-weight:
       normal'><span lang=EN-US style='font-size:8.0pt;color:black;mso-color-alt:
       windowtext;mso-font-width:90%'>Hip: </span></b><span lang=EN-US
       style='font-size:8.0pt;color:black;mso-color-alt:windowtext;mso-font-width:
       90%'>Extension, abduction, internal rotation</span><span lang=EN-US
       style='font-size:8.0pt'><o:p></o:p></span></p>
       <p class=TableParagraph style='margin-left:2.85pt;line-height:10.0pt;
       mso-line-height-rule:exactly'><b style='mso-bidi-font-weight:normal'><span
       lang=EN-US style='font-size:8.0pt;color:black;mso-color-alt:windowtext;
       mso-font-width:90%'>Knee: </span></b><span lang=EN-US style='font-size:
       8.0pt;color:black;mso-color-alt:windowtext;mso-font-width:90%'>Flexion</span><span
       lang=EN-US style='font-size:8.0pt'><o:p></o:p></span></p>
       <p class=TableParagraph style='margin-left:2.85pt;line-height:10.0pt;
       mso-line-height-rule:exactly'><b style='mso-bidi-font-weight:normal'><span
       lang=EN-US style='font-size:8.0pt;color:black;mso-color-alt:windowtext;
       mso-font-width:90%'>Ankle: </span></b><span lang=EN-US style='font-size:
       8.0pt;color:black;mso-color-alt:windowtext;mso-font-width:90%'>Inversion
       and eversion</span><span lang=EN-US style='font-size:8.0pt'><o:p></o:p></span></p>
       <p class=TableParagraph style='margin-left:2.85pt;line-height:10.15pt;
       mso-line-height-rule:exactly'><b style='mso-bidi-font-weight:normal'><span
       lang=EN-US style='font-size:8.0pt;color:black;mso-color-alt:windowtext;
       mso-font-width:90%'>Toe: </span></b><span lang=EN-US style='font-size:
       8.0pt;color:black;mso-color-alt:windowtext;mso-font-width:90%'>MP and IP
       extension</span><span lang=EN-US style='font-size:8.0pt'><o:p></o:p></span></p>
       </td>
       <td width=52 valign=top style='width:39.25pt;border:none;border-bottom:
       solid white 4.5pt;mso-border-top-alt:solid white 4.5pt;background:#DBDCDE;
       padding:0cm 0cm 0cm 0cm;height:14.4pt'>
       <p class=TableParagraph><span lang=EN-US style='font-size:8.0pt'><o:p>&nbsp;</o:p></span></p>
       <p class=TableParagraph style='margin-left:8.0pt'><b style='mso-bidi-font-weight:
       normal'><span lang=EN-US style='font-size:8.0pt;color:black;mso-color-alt:
       windowtext;mso-font-width:90%'>L4</span></b><b style='mso-bidi-font-weight:
       normal'><span lang=EN-US style='font-size:8.0pt'><o:p></o:p></span></b></p>
       </td>
      </tr>
      <tr style='mso-yfti-irow:8;height:14.4pt'>
       <td width=274 valign=top style='width:205.5pt;border:none;border-bottom:
       solid white 4.5pt;mso-border-top-alt:solid white 4.5pt;background:#DBDCDE;
       padding:0cm 0cm 0cm 0cm;height:14.4pt'>
       <p class=TableParagraph style='margin-top:1.35pt;margin-right:0cm;
       margin-bottom:0cm;margin-left:2.85pt;margin-bottom:.0001pt'><b
       style='mso-bidi-font-weight:normal'><span lang=EN-US style='font-size:
       8.0pt;color:black;mso-color-alt:windowtext;mso-font-width:90%'>Hallux
       and Toe: </span></b><span lang=EN-US style='font-size:8.0pt;color:black;
       mso-color-alt:windowtext;mso-font-width:90%'>DIP and PIP flexion and
       abduction</span><span lang=EN-US style='font-size:8.0pt'><o:p></o:p></span></p>
       </td>
       <td width=52 valign=top style='width:39.25pt;border:none;border-bottom:
       solid white 4.5pt;mso-border-top-alt:solid white 4.5pt;background:#DBDCDE;
       padding:0cm 0cm 0cm 0cm;height:14.4pt'>
       <p class=TableParagraph style='margin-top:.1pt;margin-right:0cm;
       margin-bottom:0cm;margin-left:8.0pt;margin-bottom:.0001pt'><b
       style='mso-bidi-font-weight:normal'><span lang=EN-US style='font-size:
       8.0pt;color:black;mso-color-alt:windowtext;mso-font-width:90%'>L5</span></b><b
       style='mso-bidi-font-weight:normal'><span lang=EN-US style='font-size:
       8.0pt'><o:p></o:p></span></b></p>
       </td>
      </tr>
      <tr style='mso-yfti-irow:9;mso-yfti-lastrow:yes;height:14.4pt'>
       <td width=274 valign=top style='width:205.5pt;border:none;mso-border-top-alt:
       solid white 4.5pt;background:#DBDCDE;padding:0cm 0cm 0cm 0cm;height:
       14.4pt'>
       <p class=TableParagraph style='margin-top:1.0pt;margin-right:0cm;
       margin-bottom:0cm;margin-left:2.85pt;margin-bottom:.0001pt'><b
       style='mso-bidi-font-weight:normal'><span lang=EN-US style='font-size:
       8.0pt;color:black;mso-color-alt:windowtext;mso-font-width:90%'>Hallux: </span></b><span
       lang=EN-US style='font-size:8.0pt;color:black;mso-color-alt:windowtext;
       mso-font-width:90%'>Adduction</span><span lang=EN-US style='font-size:
       8.0pt'><o:p></o:p></span></p>
       </td>
       <td width=52 valign=top style='width:39.25pt;border:none;mso-border-top-alt:
       solid white 4.5pt;background:#DBDCDE;padding:0cm 0cm 0cm 0cm;height:
       14.4pt'>
       <p class=TableParagraph style='margin-top:.15pt;margin-right:0cm;
       margin-bottom:0cm;margin-left:7.75pt;margin-bottom:.0001pt'><b
       style='mso-bidi-font-weight:normal'><span lang=EN-US style='font-size:
       8.0pt;color:black;mso-color-alt:windowtext;mso-font-width:90%'>S1</span></b><b
       style='mso-bidi-font-weight:normal'><span lang=EN-US style='font-size:
       8.0pt'><o:p></o:p></span></b></p>
       </td>
      </tr>
     </table>
     <p class=MsoBodyText><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
     </div>
     <![if !mso]></td>
    </tr>
   </table>
   </span><![endif]><![if !mso & !vml]>&nbsp;<![endif]><![if !vml]></td>
  </tr>
 </table>
 </span><![endif]><!--[if gte vml 1]></o:wrapblock><![endif]--><span
lang=EN-US style='font-weight:normal;mso-bidi-font-weight:bold;text-decoration:
none;text-underline:none'><br clear=all style='mso-column-break-before:always'>
</span><span lang=EN-US style='color:#221F1F;letter-spacing:-.9pt;mso-font-width:
82%'><span style='mso-spacerun:yes'>�</span></span><span lang=EN-US
style='color:#221F1F;mso-font-width:85%'>ASIA<span style='letter-spacing:-2.7pt'>
</span>Impairment Scale<span style='letter-spacing:-1.2pt'> </span>(AIS)</span><span
lang=EN-US style='color:#221F1F;mso-font-width:85%;text-decoration:none;
text-underline:none'><span style='mso-tab-count:1'>����������������������������� </span></span><span
lang=EN-US style='color:#221F1F;mso-font-width:90%'>Steps in<span
style='letter-spacing:-1.6pt'> </span>Classification</span><span lang=EN-US
style='text-decoration:none;text-underline:none'><o:p></o:p></span></h2>

<p class=MsoNormal style='margin-top:1.75pt;margin-right:0cm;margin-bottom:
0cm;margin-left:217.6pt;margin-bottom:.0001pt'><!--[if gte vml 1]><v:shape
 id="_x0000_s1034" type="#_x0000_t202" style='position:absolute;left:0;
 text-align:left;margin-left:295.95pt;margin-top:8.15pt;width:215.7pt;height:370.75pt;
 z-index:15764992;mso-position-horizontal-relative:page' filled="f"
 strokeweight="1.5pt">
 <v:textbox inset="0,0,0,0"/>
 <w:wrap anchorx="page"/>
</v:shape><![endif]--><![if !vml]><span style='mso-ignore:vglayout;position:
absolute;z-index:15764992;left:0px;margin-left:499px;margin-top:1768px;
width:367px;height:626px'>

<table cellpadding=0 cellspacing=0>
 <tr>
  <td width=367 height=626 style='border:1.5pt solid black;vertical-align:top'><![endif]><![if !mso]><span
  style='position:absolute;mso-ignore:vglayout;left:0pt;z-index:15764992'>
  <table cellpadding=0 cellspacing=0 width="100%">
   <tr>
    <td><![endif]>
    <div v:shape="_x0000_s1034" style='padding:1.5pt 1.5pt 1.5pt 1.5pt'
    class=shape>
    <p class=MsoBodyText style='margin-top:6.2pt;margin-right:12.85pt;
    margin-bottom:0cm;margin-left:7.3pt;margin-bottom:.0001pt;line-height:95%'><b
    style='mso-bidi-font-weight:normal'><span lang=EN-US style='font-size:10.0pt;
    mso-bidi-font-size:9.0pt;line-height:95%;color:#221F1F;mso-font-width:85%'>A<span
    style='letter-spacing:-1.15pt'> </span>=<span style='letter-spacing:-.95pt'>
    </span>Complete.<span style='letter-spacing:-1.0pt'> </span></span></b><span
    lang=EN-US style='color:#221F1F;mso-font-width:85%'>No<span
    style='letter-spacing:-.85pt'> </span>sensory<span style='letter-spacing:
    -.9pt'> </span>or<span style='letter-spacing:-.8pt'> </span>motor<span
    style='letter-spacing:-.85pt'> </span>function<span style='letter-spacing:
    -.85pt'> </span>is<span style='letter-spacing:-.9pt'> </span>preserved </span><span
    lang=EN-US style='color:#221F1F;mso-font-width:90%'>in the sacral segments<span
    style='letter-spacing:-1.65pt'> </span>S4-5.</span></p>
    <p class=MsoBodyText style='margin-top:.55pt'><span lang=EN-US
    style='font-size:7.5pt;mso-bidi-font-size:9.0pt'><o:p>&nbsp;</o:p></span></p>
    <p class=MsoBodyText style='margin-top:0cm;margin-right:8.1pt;margin-bottom:
    0cm;margin-left:7.3pt;margin-bottom:.0001pt;line-height:95%'><b
    style='mso-bidi-font-weight:normal'><span lang=EN-US style='font-size:10.0pt;
    mso-bidi-font-size:9.0pt;line-height:95%;color:#221F1F;mso-font-width:85%'>B<span
    style='letter-spacing:-1.05pt'> </span>=<span style='letter-spacing:-1.0pt'>
    </span>Sensory<span style='letter-spacing:-1.0pt'> </span>Incomplete.<span
    style='letter-spacing:-1.05pt'> </span></span></b><span lang=EN-US
    style='color:#221F1F;mso-font-width:85%'>Sensory<span style='letter-spacing:
    -.95pt'> </span>but<span style='letter-spacing:-.9pt'> </span>not<span
    style='letter-spacing:-.9pt'> </span>motor<span style='letter-spacing:-.9pt'>
    </span>function is preserved below the neurological level and includes the </span><span
    lang=EN-US style='color:#221F1F;mso-font-width:90%'>sacral<span
    style='letter-spacing:-1.15pt'> </span>segments<span style='letter-spacing:
    -1.15pt'> </span>S4-5<span style='letter-spacing:-1.1pt'> </span>(light<span
    style='letter-spacing:-1.15pt'> </span>touch<span style='letter-spacing:
    -1.1pt'> </span>or<span style='letter-spacing:-1.1pt'> </span>pin<span
    style='letter-spacing:-1.1pt'> </span>prick<span style='letter-spacing:
    -1.15pt'> </span>at<span style='letter-spacing:-1.1pt'> </span>S4-5<span
    style='letter-spacing:-1.1pt'> </span>or deep<span style='letter-spacing:
    -1.4pt'> </span>anal<span style='letter-spacing:-1.35pt'> </span>pressure)<span
    style='letter-spacing:-1.5pt'> </span>AND<span style='letter-spacing:-1.4pt'>
    </span>no<span style='letter-spacing:-1.35pt'> </span>motor<span
    style='letter-spacing:-1.35pt'> </span>function<span style='letter-spacing:
    -1.35pt'> </span>is<span style='letter-spacing:-1.35pt'> </span>preserved
    more<span style='letter-spacing:-1.5pt'> </span>than<span style='letter-spacing:
    -1.45pt'> </span>three<span style='letter-spacing:-1.5pt'> </span>levels<span
    style='letter-spacing:-1.5pt'> </span>below<span style='letter-spacing:
    -1.45pt'> </span>the<span style='letter-spacing:-1.5pt'> </span>motor<span
    style='letter-spacing:-1.45pt'> </span>level<span style='letter-spacing:
    -1.5pt'> </span>on<span style='letter-spacing:-1.45pt'> </span>either<span
    style='letter-spacing:-1.5pt'> </span>side of the<span style='letter-spacing:
    -.5pt'> </span><span style='letter-spacing:-.15pt'>body.</span></span></p>
    <p class=MsoBodyText style='margin-top:.05pt'><span lang=EN-US
    style='font-size:8.0pt;mso-bidi-font-size:9.0pt'><o:p>&nbsp;</o:p></span></p>
    <p class=MsoBodyText style='margin-top:.05pt;margin-right:9.0pt;margin-bottom:
    0cm;margin-left:7.3pt;margin-bottom:.0001pt;line-height:95%'><b
    style='mso-bidi-font-weight:normal'><span lang=EN-US style='font-size:10.0pt;
    mso-bidi-font-size:9.0pt;line-height:95%;color:#221F1F;mso-font-width:85%'>C<span
    style='letter-spacing:-.95pt'> </span>=<span style='letter-spacing:-.95pt'>
    </span>Motor<span style='letter-spacing:-.95pt'> </span>Incomplete.<span
    style='letter-spacing:-.95pt'> </span></span></b><span lang=EN-US
    style='color:#221F1F;mso-font-width:85%'>Motor<span style='letter-spacing:
    -.85pt'> </span>function<span style='letter-spacing:-.85pt'> </span>is<span
    style='letter-spacing:-.9pt'> </span>preserved<span style='letter-spacing:
    -.85pt'> </span>at<span style='letter-spacing:-.85pt'> </span>the most<span
    style='letter-spacing:-.9pt'> </span>caudal<span style='letter-spacing:
    -.9pt'> </span>sacral<span style='letter-spacing:-.9pt'> </span>segments<span
    style='letter-spacing:-.95pt'> </span>for<span style='letter-spacing:-.85pt'>
    </span>voluntary<span style='letter-spacing:-.9pt'> </span>anal<span
    style='letter-spacing:-.9pt'> </span>contraction </span><span lang=EN-US
    style='color:#221F1F;letter-spacing:-.15pt;mso-font-width:90%'>(VAC) </span><span
    lang=EN-US style='color:#221F1F;mso-font-width:90%'>OR the patient meets
    the criteria for sensory </span><span lang=EN-US style='color:#221F1F;
    mso-font-width:85%'>incomplete status (sensory function preserved at the
    most </span><span lang=EN-US style='color:#221F1F;mso-font-width:90%'>caudal<span
    style='letter-spacing:-1.35pt'> </span>sacral<span style='letter-spacing:
    -1.3pt'> </span>segments<span style='letter-spacing:-1.35pt'> </span>S4-5<span
    style='letter-spacing:-1.3pt'> </span>by<span style='letter-spacing:-1.25pt'>
    </span><span style='letter-spacing:-.5pt'>LT,</span><span style='letter-spacing:
    -1.3pt'> </span>PP<span style='letter-spacing:-1.4pt'> </span>or<span
    style='letter-spacing:-1.3pt'> </span>DAP),<span style='letter-spacing:
    -1.3pt'> </span>and<span style='letter-spacing:-1.25pt'> </span>has </span><span
    lang=EN-US style='color:#221F1F;mso-font-width:85%'>some<span
    style='letter-spacing:-.95pt'> </span>sparing<span style='letter-spacing:
    -.9pt'> </span>of<span style='letter-spacing:-.9pt'> </span>motor<span
    style='letter-spacing:-.9pt'> </span>function<span style='letter-spacing:
    -.85pt'> </span>more<span style='letter-spacing:-.9pt'> </span>than<span
    style='letter-spacing:-.9pt'> </span>three<span style='letter-spacing:-.9pt'>
    </span>levels<span style='letter-spacing:-.9pt'> </span>below </span><span
    lang=EN-US style='color:#221F1F;mso-font-width:90%'>the<span
    style='letter-spacing:-.9pt'> </span>ipsilateral<span style='letter-spacing:
    -.85pt'> </span>motor<span style='letter-spacing:-.85pt'> </span>level<span
    style='letter-spacing:-.9pt'> </span>on<span style='letter-spacing:-.85pt'>
    </span>either<span style='letter-spacing:-.85pt'> </span>side<span
    style='letter-spacing:-.9pt'> </span>of<span style='letter-spacing:-.85pt'>
    </span>the<span style='letter-spacing:-.85pt'> </span><span
    style='letter-spacing:-.15pt'>body.</span></span></p>
    <p class=MsoBodyText style='margin-top:.15pt;margin-right:10.65pt;
    margin-bottom:0cm;margin-left:7.3pt;margin-bottom:.0001pt;line-height:96%'><span
    lang=EN-US style='color:#221F1F;mso-font-width:85%'>(This<span
    style='letter-spacing:-1.0pt'> </span>includes<span style='letter-spacing:
    -1.05pt'> </span>key<span style='letter-spacing:-1.0pt'> </span>or<span
    style='letter-spacing:-1.0pt'> </span>non-key<span style='letter-spacing:
    -1.0pt'> </span>muscle<span style='letter-spacing:-1.0pt'> </span>functions<span
    style='letter-spacing:-.95pt'> </span>to<span style='letter-spacing:-1.0pt'>
    </span>determine </span><span lang=EN-US style='color:#221F1F;mso-font-width:
    90%'>motor<span style='letter-spacing:-1.45pt'> </span>incomplete<span
    style='letter-spacing:-1.5pt'> </span>status.)<span style='letter-spacing:
    -1.45pt'> </span>For<span style='letter-spacing:-1.6pt'> </span>AIS<span
    style='letter-spacing:-1.45pt'> </span>C<span style='letter-spacing:-1.45pt'>
    </span>�<span style='letter-spacing:-1.4pt'> </span>less<span
    style='letter-spacing:-1.5pt'> </span>than<span style='letter-spacing:-1.45pt'>
    </span>half<span style='letter-spacing:-1.4pt'> </span>of<span
    style='letter-spacing:-1.45pt'> </span>key muscle<span style='letter-spacing:
    -1.05pt'> </span>functions<span style='letter-spacing:-1.05pt'> </span>below<span
    style='letter-spacing:-1.0pt'> </span>the<span style='letter-spacing:-1.05pt'>
    </span>single<span style='letter-spacing:-1.05pt'> </span>NLI<span
    style='letter-spacing:-1.05pt'> </span>have<span style='letter-spacing:
    -1.0pt'> </span>a<span style='letter-spacing:-1.05pt'> </span>muscle</span></p>
    <p class=MsoBodyText style='margin-left:7.3pt;line-height:10.0pt;
    mso-line-height-rule:exactly'><span lang=EN-US style='color:#221F1F;
    mso-font-width:95%'>grade &#8805; 3.</span></p>
    <p class=MsoBodyText style='margin-top:.45pt'><span lang=EN-US
    style='font-size:7.5pt;mso-bidi-font-size:9.0pt'><o:p>&nbsp;</o:p></span></p>
    <p class=MsoBodyText style='margin-top:0cm;margin-right:8.1pt;margin-bottom:
    0cm;margin-left:7.3pt;margin-bottom:.0001pt;line-height:95%'><b
    style='mso-bidi-font-weight:normal'><span lang=EN-US style='font-size:10.0pt;
    mso-bidi-font-size:9.0pt;line-height:95%;color:#221F1F;mso-font-width:90%'>D
    = Motor Incomplete. </span></b><span lang=EN-US style='color:#221F1F;
    mso-font-width:90%'>Motor incomplete status as </span><span lang=EN-US
    style='color:#221F1F;mso-font-width:85%'>defined<span style='letter-spacing:
    -.75pt'> </span>above,<span style='letter-spacing:-.75pt'> </span>with<span
    style='letter-spacing:-.75pt'> </span>at<span style='letter-spacing:-.75pt'>
    </span>least<span style='letter-spacing:-.8pt'> </span>half<span
    style='letter-spacing:-.75pt'> </span>(half<span style='letter-spacing:
    -.75pt'> </span>or<span style='letter-spacing:-.75pt'> </span>more)<span
    style='letter-spacing:-.75pt'> </span>of<span style='letter-spacing:-.75pt'>
    </span>key<span style='letter-spacing:-.8pt'> </span>muscle </span><span
    lang=EN-US style='color:#221F1F;mso-font-width:90%'>functions<span
    style='letter-spacing:-1.4pt'> </span>below<span style='letter-spacing:
    -1.35pt'> </span>the<span style='letter-spacing:-1.4pt'> </span>single<span
    style='letter-spacing:-1.4pt'> </span>NLI<span style='letter-spacing:-1.35pt'>
    </span>having<span style='letter-spacing:-1.4pt'> </span>a<span
    style='letter-spacing:-1.35pt'> </span>muscle<span style='letter-spacing:
    -1.35pt'> </span>grade<span style='letter-spacing:-1.4pt'> </span>&#8805;<span
    style='letter-spacing:-1.35pt'> </span>3.</span></p>
    <p class=MsoBodyText style='margin-top:.45pt'><span lang=EN-US
    style='font-size:7.5pt;mso-bidi-font-size:9.0pt'><o:p>&nbsp;</o:p></span></p>
    <p class=MsoBodyText style='margin-top:0cm;margin-right:11.45pt;margin-bottom:
    0cm;margin-left:7.3pt;margin-bottom:.0001pt;text-align:justify;line-height:
    95%'><b style='mso-bidi-font-weight:normal'><span lang=EN-US
    style='font-size:10.0pt;mso-bidi-font-size:9.0pt;line-height:95%;
    color:#221F1F;mso-font-width:85%'>E<span style='letter-spacing:-.85pt'> </span>=<span
    style='letter-spacing:-.85pt'> </span>Normal.<span style='letter-spacing:
    -.95pt'> </span></span></b><span lang=EN-US style='color:#221F1F;
    mso-font-width:85%'>If<span style='letter-spacing:-.8pt'> </span>sensation<span
    style='letter-spacing:-.75pt'> </span>and<span style='letter-spacing:-.8pt'>
    </span>motor<span style='letter-spacing:-.75pt'> </span>function<span
    style='letter-spacing:-.75pt'> </span>as<span style='letter-spacing:-.75pt'>
    </span>tested<span style='letter-spacing:-.8pt'> </span>with the<span
    style='letter-spacing:-.8pt'> </span>ISNCSCI<span style='letter-spacing:
    -.75pt'> </span>are<span style='letter-spacing:-.75pt'> </span>graded<span
    style='letter-spacing:-.8pt'> </span>as<span style='letter-spacing:-.75pt'>
    </span>normal<span style='letter-spacing:-.75pt'> </span>in<span
    style='letter-spacing:-.8pt'> </span>all<span style='letter-spacing:-.75pt'>
    </span>segments,<span style='letter-spacing:-.8pt'> </span>and<span
    style='letter-spacing:-.8pt'> </span>the patient<span style='letter-spacing:
    -.75pt'> </span>had<span style='letter-spacing:-.75pt'> </span>prior<span
    style='letter-spacing:-.75pt'> </span>deficits,<span style='letter-spacing:
    -.75pt'> </span>then<span style='letter-spacing:-.75pt'> </span>the<span
    style='letter-spacing:-1.0pt'> </span>AIS<span style='letter-spacing:-.75pt'>
    </span>grade<span style='letter-spacing:-.75pt'> </span>is<span
    style='letter-spacing:-.8pt'> </span>E.<span style='letter-spacing:-.75pt'>
    </span>Someone </span><span lang=EN-US style='color:#221F1F;mso-font-width:
    90%'>without<span style='letter-spacing:-.95pt'> </span>an<span
    style='letter-spacing:-.9pt'> </span>initial<span style='letter-spacing:
    -.95pt'> </span>SCI<span style='letter-spacing:-.9pt'> </span>does<span
    style='letter-spacing:-.95pt'> </span>not<span style='letter-spacing:-.9pt'>
    </span>receive<span style='letter-spacing:-.9pt'> </span>an<span
    style='letter-spacing:-1.2pt'> </span>AIS<span style='letter-spacing:-.9pt'>
    </span>grade.</span></p>
    <p class=MsoNormal style='margin-top:8.9pt;margin-right:9.3pt;margin-bottom:
    0cm;margin-left:7.3pt;margin-bottom:.0001pt;line-height:98%'><b
    style='mso-bidi-font-weight:normal'><span lang=EN-US style='font-size:10.0pt;
    mso-bidi-font-size:11.0pt;line-height:98%;color:#221F1F;mso-font-width:
    85%'>Using<span style='letter-spacing:-.9pt'> </span>ND:<span
    style='letter-spacing:-1.1pt'> </span></span></b><span lang=EN-US
    style='font-size:9.0pt;mso-bidi-font-size:11.0pt;line-height:98%;
    color:#221F1F;letter-spacing:-.45pt;mso-font-width:85%'>To</span><span
    lang=EN-US style='font-size:9.0pt;mso-bidi-font-size:11.0pt;line-height:
    98%;color:#221F1F;letter-spacing:-.8pt;mso-font-width:85%'> </span><span
    lang=EN-US style='font-size:9.0pt;mso-bidi-font-size:11.0pt;line-height:
    98%;color:#221F1F;mso-font-width:85%'>document<span style='letter-spacing:
    -.8pt'> </span>the<span style='letter-spacing:-.8pt'> </span><span
    style='letter-spacing:-.15pt'>sensory,</span><span style='letter-spacing:
    -.8pt'> </span>motor<span style='letter-spacing:-.8pt'> </span>and<span
    style='letter-spacing:-.8pt'> </span>NLI<span style='letter-spacing:-.8pt'>
    </span>levels, the<span style='letter-spacing:-1.1pt'> </span>ASIA<span
    style='letter-spacing:-1.1pt'> </span>Impairment<span style='letter-spacing:
    -.75pt'> </span>Scale<span style='letter-spacing:-.8pt'> </span>grade,<span
    style='letter-spacing:-.75pt'> </span>and/or<span style='letter-spacing:
    -.8pt'> </span>the<span style='letter-spacing:-.8pt'> </span>zone<span
    style='letter-spacing:-.8pt'> </span>of<span style='letter-spacing:-.8pt'> </span>partial
    </span><span lang=EN-US style='font-size:8.5pt;mso-bidi-font-size:11.0pt;
    line-height:98%;color:#221F1F;mso-font-width:90%'>preservation<span
    style='letter-spacing:-1.25pt'> </span>(ZPP)<span style='letter-spacing:
    -1.25pt'> </span>when<span style='letter-spacing:-1.2pt'> </span>they<span
    style='letter-spacing:-1.25pt'> </span>are<span style='letter-spacing:-1.2pt'>
    </span>unable<span style='letter-spacing:-1.25pt'> </span>to<span
    style='letter-spacing:-1.25pt'> </span>be<span style='letter-spacing:-1.2pt'>
    </span>determined based<span style='letter-spacing:-.45pt'> </span>on<span
    style='letter-spacing:-.4pt'> </span>the<span style='letter-spacing:-.4pt'>
    </span>examination<span style='letter-spacing:-.4pt'> </span>results.</span><span
    lang=EN-US style='font-size:8.5pt;mso-bidi-font-size:11.0pt;line-height:
    98%'><o:p></o:p></span></p>
    </div>
    <![if !mso]></td>
   </tr>
  </table>
  </span><![endif]><![if !mso & !vml]>&nbsp;<![endif]><![if !vml]></td>
 </tr>
</table>

</span><![endif]><span lang=EN-US style='font-size:8.0pt;mso-bidi-font-size:
11.0pt;color:#221F1F;mso-font-width:90%'>The following order is recommended for
determining the classification of</span><span lang=EN-US style='font-size:8.0pt;
mso-bidi-font-size:11.0pt'><o:p></o:p></span></p>

<p class=MsoNormal style='margin-top:.8pt;margin-right:0cm;margin-bottom:0cm;
margin-left:217.6pt;margin-bottom:.0001pt'><span lang=EN-US style='font-size:
8.0pt;mso-bidi-font-size:11.0pt;color:#221F1F;mso-font-width:90%'>individuals
with SCI.</span><span lang=EN-US style='font-size:8.0pt;mso-bidi-font-size:
11.0pt'><o:p></o:p></span></p>

<h6 style='margin-top:3.95pt;margin-right:0cm;margin-bottom:0cm;margin-left:
225.8pt;margin-bottom:.0001pt;text-indent:-8.25pt;mso-list:l1 level1 lfo1;
tab-stops:225.85pt'><![if !supportLists]><span lang=EN-US style='color:#201E1F;
letter-spacing:-.05pt;mso-font-width:82%'><span style='mso-list:Ignore'>1.<span
style='font:7.0pt "Times New Roman"'>&nbsp; </span></span></span><![endif]><span
dir=LTR></span><span lang=EN-US style='color:#201E1F;mso-font-width:90%'>Determine<span
style='letter-spacing:-.6pt'> </span>sensory<span style='letter-spacing:-.55pt'>
</span>levels<span style='letter-spacing:-.6pt'> </span>for<span
style='letter-spacing:-.55pt'> </span>right<span style='letter-spacing:-.6pt'> </span>and<span
style='letter-spacing:-.55pt'> </span>left<span style='letter-spacing:-.6pt'> </span>sides.</span></h6>

<p class=MsoNormal style='margin-top:.6pt;margin-right:29.45pt;margin-bottom:
0cm;margin-left:217.6pt;margin-bottom:.0001pt;line-height:108%'><span
lang=EN-US style='font-size:8.0pt;mso-bidi-font-size:11.0pt;line-height:108%;
color:#201E1F;mso-font-width:85%'>The<span style='letter-spacing:-.75pt'> </span>sensory<span
style='letter-spacing:-.8pt'> </span>level<span style='letter-spacing:-.8pt'> </span>is<span
style='letter-spacing:-.75pt'> </span>the<span style='letter-spacing:-.75pt'> </span>most<span
style='letter-spacing:-.75pt'> </span>caudal,<span style='letter-spacing:-.8pt'>
</span>intact<span style='letter-spacing:-.8pt'> </span>dermatome<span
style='letter-spacing:-.75pt'> </span>for<span style='letter-spacing:-.75pt'> </span>both<span
style='letter-spacing:-.75pt'> </span>pin<span style='letter-spacing:-.75pt'> </span>prick
</span><span lang=EN-US style='font-size:8.0pt;mso-bidi-font-size:11.0pt;
line-height:108%;color:#201E1F;mso-font-width:90%'>and light touch<span
style='letter-spacing:-.9pt'> </span>sensation.</span><span lang=EN-US
style='font-size:8.0pt;mso-bidi-font-size:11.0pt;line-height:108%'><o:p></o:p></span></p>

<h6 style='margin-top:5.35pt;margin-right:0cm;margin-bottom:0cm;margin-left:
225.8pt;margin-bottom:.0001pt;text-indent:-8.25pt;mso-list:l1 level1 lfo1;
tab-stops:225.85pt'><![if !supportLists]><span lang=EN-US style='color:#201E1F;
letter-spacing:-.05pt;mso-font-width:82%'><span style='mso-list:Ignore'>2.<span
style='font:7.0pt "Times New Roman"'>&nbsp; </span></span></span><![endif]><span
dir=LTR></span><span lang=EN-US style='color:#201E1F;mso-font-width:90%'>Determine<span
style='letter-spacing:-.55pt'> </span>motor<span style='letter-spacing:-.5pt'> </span>levels<span
style='letter-spacing:-.55pt'> </span>for<span style='letter-spacing:-.5pt'> </span>right<span
style='letter-spacing:-.55pt'> </span>and<span style='letter-spacing:-.5pt'> </span>left<span
style='letter-spacing:-.55pt'> </span>sides.</span></h6>

<p class=MsoNormal style='margin-top:.6pt;margin-right:27.0pt;margin-bottom:
0cm;margin-left:217.6pt;margin-bottom:.0001pt;line-height:108%'><span
lang=EN-US style='font-size:8.0pt;mso-bidi-font-size:11.0pt;line-height:108%;
color:#201E1F;mso-font-width:90%'>Defined<span style='letter-spacing:-1.3pt'> </span>by<span
style='letter-spacing:-1.3pt'> </span>the<span style='letter-spacing:-1.3pt'> </span>lowest<span
style='letter-spacing:-1.3pt'> </span>key<span style='letter-spacing:-1.3pt'> </span>muscle<span
style='letter-spacing:-1.25pt'> </span>function<span style='letter-spacing:
-1.3pt'> </span>that<span style='letter-spacing:-1.3pt'> </span>has<span
style='letter-spacing:-1.3pt'> </span>a<span style='letter-spacing:-1.25pt'> </span>grade<span
style='letter-spacing:-1.3pt'> </span>of<span style='letter-spacing:-1.3pt'> </span>at<span
style='letter-spacing:-1.25pt'> </span>least<span style='letter-spacing:-1.3pt'>
</span>3<span style='letter-spacing:-1.3pt'> </span>(on </span><span
lang=EN-US style='font-size:8.0pt;mso-bidi-font-size:11.0pt;line-height:108%;
color:#201E1F;mso-font-width:85%'>supine<span style='letter-spacing:-1.05pt'> </span>testing),<span
style='letter-spacing:-.95pt'> </span>providing<span style='letter-spacing:
-1.0pt'> </span>the<span style='letter-spacing:-.95pt'> </span>key<span
style='letter-spacing:-1.0pt'> </span>muscle<span style='letter-spacing:-1.0pt'>
</span>functions<span style='letter-spacing:-.95pt'> </span>represented<span
style='letter-spacing:-1.0pt'> </span>by<span style='letter-spacing:-.95pt'> </span>segments
</span><span lang=EN-US style='font-size:8.0pt;mso-bidi-font-size:11.0pt;
line-height:108%;color:#201E1F;mso-font-width:90%'>above<span style='letter-spacing:
-.55pt'> </span>that<span style='letter-spacing:-.5pt'> </span>level<span
style='letter-spacing:-.55pt'> </span>are<span style='letter-spacing:-.5pt'> </span>judged<span
style='letter-spacing:-.55pt'> </span>to<span style='letter-spacing:-.5pt'> </span>be<span
style='letter-spacing:-.5pt'> </span>intact<span style='letter-spacing:-.55pt'>
</span>(graded<span style='letter-spacing:-.5pt'> </span>as<span
style='letter-spacing:-.5pt'> </span>a<span style='letter-spacing:-.5pt'> </span>5).</span><span
lang=EN-US style='font-size:8.0pt;mso-bidi-font-size:11.0pt;line-height:108%'><o:p></o:p></span></p>

<p class=MsoNormal style='margin-top:0cm;margin-right:29.45pt;margin-bottom:
0cm;margin-left:217.6pt;margin-bottom:.0001pt;line-height:108%'><span
lang=EN-US style='font-size:8.0pt;mso-bidi-font-size:11.0pt;line-height:108%;
color:#201E1F;mso-font-width:90%'>Note:<span style='letter-spacing:-1.15pt'> </span>in<span
style='letter-spacing:-1.2pt'> </span>regions<span style='letter-spacing:-1.1pt'>
</span>where<span style='letter-spacing:-1.15pt'> </span>there<span
style='letter-spacing:-1.15pt'> </span>is<span style='letter-spacing:-1.15pt'> </span>no<span
style='letter-spacing:-1.15pt'> </span>myotome<span style='letter-spacing:-1.15pt'>
</span>to<span style='letter-spacing:-1.15pt'> </span>test,<span
style='letter-spacing:-1.15pt'> </span>the<span style='letter-spacing:-1.15pt'>
</span>motor<span style='letter-spacing:-1.1pt'> </span>level<span
style='letter-spacing:-1.2pt'> </span>is </span><span lang=EN-US
style='font-size:8.0pt;mso-bidi-font-size:11.0pt;line-height:108%;color:#201E1F;
mso-font-width:85%'>presumed<span style='letter-spacing:-.75pt'> </span>to<span
style='letter-spacing:-.7pt'> </span>be<span style='letter-spacing:-.7pt'> </span>the<span
style='letter-spacing:-.7pt'> </span>same<span style='letter-spacing:-.75pt'> </span>as<span
style='letter-spacing:-.7pt'> </span>the<span style='letter-spacing:-.7pt'> </span>sensory<span
style='letter-spacing:-.75pt'> </span>level,<span style='letter-spacing:-.75pt'>
</span>if<span style='letter-spacing:-.75pt'> </span>testable<span
style='letter-spacing:-.7pt'> </span>motor<span style='letter-spacing:-.7pt'> </span>function
</span><span lang=EN-US style='font-size:8.0pt;mso-bidi-font-size:11.0pt;
line-height:108%;color:#201E1F;mso-font-width:90%'>above<span style='letter-spacing:
-.3pt'> </span>that<span style='letter-spacing:-.3pt'> </span>level<span
style='letter-spacing:-.35pt'> </span>is<span style='letter-spacing:-.35pt'> </span>also<span
style='letter-spacing:-.3pt'> </span>normal.</span><span lang=EN-US
style='font-size:8.0pt;mso-bidi-font-size:11.0pt;line-height:108%'><o:p></o:p></span></p>

<h6 style='margin-top:5.6pt;margin-right:0cm;margin-bottom:0cm;margin-left:
225.8pt;margin-bottom:.0001pt;text-indent:-8.25pt;mso-list:l1 level1 lfo1;
tab-stops:225.85pt'><![if !supportLists]><span lang=EN-US style='color:#201E1F;
letter-spacing:-.05pt;mso-font-width:82%'><span style='mso-list:Ignore'>3.<span
style='font:7.0pt "Times New Roman"'>&nbsp; </span></span></span><![endif]><span
dir=LTR></span><span lang=EN-US style='color:#201E1F;mso-font-width:90%'>Determine<span
style='letter-spacing:-.55pt'> </span>the<span style='letter-spacing:-.55pt'> </span>neurological<span
style='letter-spacing:-.55pt'> </span>level<span style='letter-spacing:-.55pt'>
</span>of<span style='letter-spacing:-.55pt'> </span>injury<span
style='letter-spacing:-.55pt'> </span>(NLI).</span></h6>

<p class=MsoNormal style='margin-top:.6pt;margin-right:6.05pt;margin-bottom:
0cm;margin-left:217.6pt;margin-bottom:.0001pt;line-height:108%'><span
lang=EN-US style='font-size:8.0pt;mso-bidi-font-size:11.0pt;line-height:108%;
color:#201E1F;mso-font-width:85%'>This<span style='letter-spacing:-.65pt'> </span>refers<span
style='letter-spacing:-.6pt'> </span>to<span style='letter-spacing:-.6pt'> </span>the<span
style='letter-spacing:-.65pt'> </span>most<span style='letter-spacing:-.6pt'> </span>caudal<span
style='letter-spacing:-.65pt'> </span>segment<span style='letter-spacing:-.65pt'>
</span>of<span style='letter-spacing:-.6pt'> </span>the<span style='letter-spacing:
-.6pt'> </span>cord<span style='letter-spacing:-.65pt'> </span>with<span
style='letter-spacing:-.65pt'> </span>intact<span style='letter-spacing:-.65pt'>
</span>sensation<span style='letter-spacing:-.65pt'> </span>and antigravity<span
style='letter-spacing:-.85pt'> </span>(3<span style='letter-spacing:-.85pt'> </span>or<span
style='letter-spacing:-.85pt'> </span>more)<span style='letter-spacing:-.85pt'>
</span>muscle<span style='letter-spacing:-.85pt'> </span>function<span
style='letter-spacing:-.85pt'> </span>strength,<span style='letter-spacing:
-.9pt'> </span>provided<span style='letter-spacing:-.85pt'> </span>that<span
style='letter-spacing:-.85pt'> </span>there<span style='letter-spacing:-.85pt'>
</span>is<span style='letter-spacing:-.85pt'> </span>normal </span><span
lang=EN-US style='font-size:8.0pt;mso-bidi-font-size:11.0pt;line-height:108%;
color:#201E1F;mso-font-width:90%'>(intact)<span style='letter-spacing:-.6pt'> </span>sensory<span
style='letter-spacing:-.65pt'> </span>and<span style='letter-spacing:-.55pt'> </span>motor<span
style='letter-spacing:-.6pt'> </span>function<span style='letter-spacing:-.6pt'>
</span>rostrally<span style='letter-spacing:-.55pt'> </span>respectively.</span><span
lang=EN-US style='font-size:8.0pt;mso-bidi-font-size:11.0pt;line-height:108%'><o:p></o:p></span></p>

<p class=MsoNormal style='margin-top:0cm;margin-right:29.45pt;margin-bottom:
0cm;margin-left:217.6pt;margin-bottom:.0001pt;line-height:108%'><span
lang=EN-US style='font-size:8.0pt;mso-bidi-font-size:11.0pt;line-height:108%;
color:#201E1F;mso-font-width:85%'>The<span style='letter-spacing:-.75pt'> </span>NLI<span
style='letter-spacing:-.7pt'> </span>is<span style='letter-spacing:-.75pt'> </span>the<span
style='letter-spacing:-.7pt'> </span>most<span style='letter-spacing:-.75pt'> </span>cephalad<span
style='letter-spacing:-.7pt'> </span>of<span style='letter-spacing:-.75pt'> </span>the<span
style='letter-spacing:-.7pt'> </span>sensory<span style='letter-spacing:-.75pt'>
</span>and<span style='letter-spacing:-.7pt'> </span>motor<span
style='letter-spacing:-.7pt'> </span>levels<span style='letter-spacing:-.75pt'>
</span>determined<span style='letter-spacing:-.75pt'> </span>in </span><span
lang=EN-US style='font-size:8.0pt;mso-bidi-font-size:11.0pt;line-height:108%;
color:#201E1F;mso-font-width:90%'>steps 1 and<span style='letter-spacing:-.7pt'>
</span>2.</span><span lang=EN-US style='font-size:8.0pt;mso-bidi-font-size:
11.0pt;line-height:108%'><o:p></o:p></span></p>

<h6 style='margin-top:6.2pt;margin-right:0cm;margin-bottom:0cm;margin-left:
225.8pt;margin-bottom:.0001pt;text-indent:-8.25pt;mso-list:l1 level1 lfo1;
tab-stops:225.85pt'><![if !supportLists]><span lang=EN-US style='color:#201E1F;
letter-spacing:-.05pt;mso-font-width:82%'><span style='mso-list:Ignore'>4.<span
style='font:7.0pt "Times New Roman"'>&nbsp; </span></span></span><![endif]><span
dir=LTR></span><span lang=EN-US style='color:#201E1F;mso-font-width:90%'>Determine<span
style='letter-spacing:-.85pt'> </span>whether<span style='letter-spacing:-.9pt'>
</span>the<span style='letter-spacing:-.85pt'> </span>injury<span
style='letter-spacing:-.85pt'> </span>is<span style='letter-spacing:-.8pt'> </span>Complete<span
style='letter-spacing:-.85pt'> </span>or<span style='letter-spacing:-.85pt'> </span>Incomplete.</span></h6>

<p class=MsoNormal style='margin-top:.6pt;margin-right:0cm;margin-bottom:0cm;
margin-left:217.6pt;margin-bottom:.0001pt'><span lang=EN-US style='font-size:
8.0pt;mso-bidi-font-size:11.0pt;color:#201E1F;mso-font-width:90%'>(i.e. absence
or presence of sacral sparing)</span><span lang=EN-US style='font-size:8.0pt;
mso-bidi-font-size:11.0pt'><o:p></o:p></span></p>

<p class=MsoNormal style='margin-top:.8pt;margin-right:0cm;margin-bottom:0cm;
margin-left:217.6pt;margin-bottom:.0001pt'><span lang=EN-US style='font-size:
8.0pt;mso-bidi-font-size:11.0pt;color:#201E1F;mso-font-width:90%'>If voluntary
anal contraction = <b style='mso-bidi-font-weight:normal'>No </b>AND all S4-5
sensory scores = <b style='mso-bidi-font-weight:normal'>0</b></span><b
style='mso-bidi-font-weight:normal'><span lang=EN-US style='font-size:8.0pt;
mso-bidi-font-size:11.0pt'><o:p></o:p></span></b></p>

<p class=MsoNormal style='margin-top:.8pt;margin-right:0cm;margin-bottom:0cm;
margin-left:217.6pt;margin-bottom:.0001pt'><span lang=EN-US style='font-size:
8.0pt;mso-bidi-font-size:11.0pt;color:#201E1F;mso-font-width:90%'>AND deep anal
pressure = <b style='mso-bidi-font-weight:normal'>No</b>, then injury is <b
style='mso-bidi-font-weight:normal'>Complete.</b></span><b style='mso-bidi-font-weight:
normal'><span lang=EN-US style='font-size:8.0pt;mso-bidi-font-size:11.0pt'><o:p></o:p></span></b></p>

<p class=MsoNormal style='margin-top:.8pt;margin-right:0cm;margin-bottom:0cm;
margin-left:217.6pt;margin-bottom:.0001pt'><span lang=EN-US style='font-size:
8.0pt;mso-bidi-font-size:11.0pt;color:#201E1F;mso-font-width:90%'>Otherwise,
injury is <b style='mso-bidi-font-weight:normal'>Incomplete</b>.</span><span
lang=EN-US style='font-size:8.0pt;mso-bidi-font-size:11.0pt'><o:p></o:p></span></p>

<p class=MsoBodyText><span lang=EN-US style='font-size:7.5pt;mso-bidi-font-size:
9.0pt'><o:p>&nbsp;</o:p></span></p>

<p class=MsoListParagraph style='margin-top:0cm;margin-right:78.25pt;
margin-bottom:0cm;margin-left:226.0pt;margin-bottom:.0001pt;text-indent:-8.45pt;
line-height:106%;mso-list:l1 level1 lfo1;tab-stops:225.85pt'><![if !supportLists]><b><span
lang=EN-US style='font-size:9.0pt;line-height:106%;color:#201E1F;letter-spacing:
-.05pt;mso-font-width:82%'><span style='mso-list:Ignore'>5.<span
style='font:7.0pt "Times New Roman"'>&nbsp; </span></span></span></b><![endif]><span
dir=LTR></span><b style='mso-bidi-font-weight:normal'><span lang=EN-US
style='font-size:9.0pt;mso-bidi-font-size:11.0pt;line-height:106%;color:#201E1F;
mso-font-width:85%'>Determine<span style='letter-spacing:-1.4pt'> </span>ASIA<span
style='letter-spacing:-1.4pt'> </span>Impairment<span style='letter-spacing:
-1.25pt'> </span>Scale<span style='letter-spacing:-1.3pt'> </span>(AIS)<span
style='letter-spacing:-1.25pt'> </span>Grade. </span></b><b style='mso-bidi-font-weight:
normal'><span lang=EN-US style='font-size:9.0pt;mso-bidi-font-size:11.0pt;
line-height:106%;color:#201E1F;mso-font-width:90%'>Is injury <u
style='text-underline:#201E1F'>Complete</u>? If YES, AIS=A</span></b><b
style='mso-bidi-font-weight:normal'><span lang=EN-US style='font-size:9.0pt;
mso-bidi-font-size:11.0pt;line-height:106%'><o:p></o:p></span></b></p>

</div>

<span lang=EN-US style='font-size:9.0pt;mso-bidi-font-size:11.0pt;line-height:
106%;font-family:"Arial",sans-serif;mso-fareast-font-family:Arial;mso-ansi-language:
EN-US;mso-fareast-language:EN-US;mso-bidi-language:AR-SA'><br clear=all
style='page-break-before:auto;mso-break-type:section-break'>
</span>

<div class=WordSection11>

<p class=MsoNormal style='margin-left:11.9pt;line-height:10.6pt;mso-line-height-rule:
exactly'><b style='mso-bidi-font-weight:normal'><span lang=EN-US
style='color:#221F1F;mso-font-width:80%'>Movement</span><span lang=EN-US><o:p></o:p></span></b></p>

<span lang=EN-US style='font-size:11.0pt;font-family:"Arial",sans-serif;
mso-fareast-font-family:Arial;mso-ansi-language:EN-US;mso-fareast-language:
EN-US;mso-bidi-language:AR-SA'><br clear=all style='mso-column-break-before:
always'>
</span>

<p class=MsoNormal style='margin-left:11.9pt;line-height:10.6pt;mso-line-height-rule:
exactly'><b style='mso-bidi-font-weight:normal'><span lang=EN-US
style='mso-font-width:85%'>Root level</span><span lang=EN-US><o:p></o:p></span></b></p>

<span lang=EN-US style='font-size:9.0pt;font-family:"Arial",sans-serif;
mso-fareast-font-family:Arial;mso-ansi-language:EN-US;mso-fareast-language:
EN-US;mso-bidi-language:AR-SA'><br clear=all style='mso-special-character:line-break;
mso-column-break-before:always'>
</span>

<p class=MsoBodyText><b style='mso-bidi-font-weight:normal'><span lang=EN-US
style='font-size:10.0pt;mso-bidi-font-size:9.0pt'><o:p></o:p></span></b></p>

<p class=MsoBodyText><b style='mso-bidi-font-weight:normal'><span lang=EN-US
style='font-size:10.0pt;mso-bidi-font-size:9.0pt'><o:p>&nbsp;</o:p></span></b></p>

<p class=MsoBodyText><b style='mso-bidi-font-weight:normal'><span lang=EN-US
style='font-size:10.0pt;mso-bidi-font-size:9.0pt'><o:p>&nbsp;</o:p></span></b></p>

<p class=MsoBodyText><b style='mso-bidi-font-weight:normal'><span lang=EN-US
style='font-size:10.0pt;mso-bidi-font-size:9.0pt'><o:p>&nbsp;</o:p></span></b></p>

<p class=MsoBodyText><b style='mso-bidi-font-weight:normal'><span lang=EN-US
style='font-size:10.0pt;mso-bidi-font-size:9.0pt'><o:p>&nbsp;</o:p></span></b></p>

<p class=MsoBodyText><b style='mso-bidi-font-weight:normal'><span lang=EN-US
style='font-size:10.0pt;mso-bidi-font-size:9.0pt'><o:p>&nbsp;</o:p></span></b></p>

<p class=MsoBodyText><b style='mso-bidi-font-weight:normal'><span lang=EN-US
style='font-size:10.0pt;mso-bidi-font-size:9.0pt'><o:p>&nbsp;</o:p></span></b></p>

<p class=MsoBodyText><b style='mso-bidi-font-weight:normal'><span lang=EN-US
style='font-size:10.0pt;mso-bidi-font-size:9.0pt'><o:p>&nbsp;</o:p></span></b></p>

<p class=MsoBodyText><b style='mso-bidi-font-weight:normal'><span lang=EN-US
style='font-size:10.0pt;mso-bidi-font-size:9.0pt'><o:p>&nbsp;</o:p></span></b></p>

<p class=MsoBodyText style='margin-top:.5pt'><!--[if gte vml 1]><o:wrapblock><v:shape
  id="image9.png" o:spid="_x0000_s1148" type="#_x0000_t75" style='position:absolute;
  margin-left:315.95pt;margin-top:12.25pt;width:166.25pt;height:55.85pt;
  z-index:64;visibility:visible;mso-wrap-style:square;mso-wrap-distance-left:0;
  mso-wrap-distance-top:0;mso-wrap-distance-right:0;mso-wrap-distance-bottom:0;
  mso-position-horizontal:absolute;mso-position-horizontal-relative:page;
  mso-position-vertical:absolute;mso-position-vertical-relative:text'>
  <v:imagedata src="F081-THHC%20(ASIA)%20American%20Spinal%20Injury%20Association.files/image033.png"
   o:title=""/>
  <w:wrap type="topAndBottom" anchorx="page"/>
 </v:shape><![endif]--><![if !vml]><span style='mso-ignore:vglayout'>
 <table cellpadding=0 cellspacing=0 align=left>
  <tr>
   <td width=534 height=0></td>
  </tr>
  <tr>
   <td></td>
   <td><img width=222 height=74
   src="F081-THHC%20(ASIA)%20American%20Spinal%20Injury%20Association.files/image034.gif"
   v:shapes="image9.png"></td>
  </tr>
 </table>
 </span><![endif]><!--[if gte vml 1]></o:wrapblock><![endif]--><br
style='mso-ignore:vglayout' clear=ALL>
<b style='mso-bidi-font-weight:normal'><span lang=EN-US style='font-size:8.5pt;
mso-bidi-font-size:9.0pt'><o:p></o:p></span></b></p>

<p class=MsoNormal align=center style='margin-top:6.45pt;margin-right:3.7pt;
margin-bottom:0cm;margin-left:13.7pt;margin-bottom:.0001pt;text-align:center;
line-height:105%'><b style='mso-bidi-font-weight:normal'><span lang=EN-US
style='font-size:10.0pt;mso-bidi-font-size:11.0pt;line-height:105%;letter-spacing:
-.25pt;mso-font-width:80%'>INTERNATIONAL STANDARDS </span></b><b
style='mso-bidi-font-weight:normal'><span lang=EN-US style='font-size:10.0pt;
mso-bidi-font-size:11.0pt;line-height:105%;letter-spacing:-.15pt;mso-font-width:
80%'>FOR </span></b><b style='mso-bidi-font-weight:normal'><span lang=EN-US
style='font-size:10.0pt;mso-bidi-font-size:11.0pt;line-height:105%;letter-spacing:
-.3pt;mso-font-width:80%'>NEUROLOGICAL </span></b><b style='mso-bidi-font-weight:
normal'><span lang=EN-US style='font-size:10.0pt;mso-bidi-font-size:11.0pt;
line-height:105%;letter-spacing:-.25pt;mso-font-width:90%'>CLASSIFICATION </span></b><b
style='mso-bidi-font-weight:normal'><span lang=EN-US style='font-size:10.0pt;
mso-bidi-font-size:11.0pt;line-height:105%;letter-spacing:-.15pt;mso-font-width:
90%'>OF </span></b><b style='mso-bidi-font-weight:normal'><span lang=EN-US
style='font-size:10.0pt;mso-bidi-font-size:11.0pt;line-height:105%;letter-spacing:
-.2pt;mso-font-width:90%'>SPINAL </span></b><b style='mso-bidi-font-weight:
normal'><span lang=EN-US style='font-size:10.0pt;mso-bidi-font-size:11.0pt;
line-height:105%;letter-spacing:-.15pt;mso-font-width:90%'>CORD </span></b><b
style='mso-bidi-font-weight:normal'><span lang=EN-US style='font-size:10.0pt;
mso-bidi-font-size:11.0pt;line-height:105%;letter-spacing:-.25pt;mso-font-width:
90%'>INJURY</span></b><b style='mso-bidi-font-weight:normal'><span lang=EN-US
style='font-size:10.0pt;mso-bidi-font-size:11.0pt;line-height:105%'><o:p></o:p></span></b></p>

<p class=MsoBodyText style='margin-top:.25pt'><!--[if gte vml 1]><o:wrapblock><v:shape
  id="image10.png" o:spid="_x0000_s1147" type="#_x0000_t75" style='position:absolute;
  margin-left:347.35pt;margin-top:9.15pt;width:105.35pt;height:34.55pt;
  z-index:65;visibility:visible;mso-wrap-style:square;mso-wrap-distance-left:0;
  mso-wrap-distance-top:0;mso-wrap-distance-right:0;mso-wrap-distance-bottom:0;
  mso-position-horizontal:absolute;mso-position-horizontal-relative:page;
  mso-position-vertical:absolute;mso-position-vertical-relative:text'>
  <v:imagedata src="F081-THHC%20(ASIA)%20American%20Spinal%20Injury%20Association.files/image035.gif"
   o:title=""/>
  <w:wrap type="topAndBottom" anchorx="page"/>
 </v:shape><![endif]--><![if !vml]><span style='mso-ignore:vglayout'>
 <table cellpadding=0 cellspacing=0 align=left>
  <tr>
   <td width=586 height=0></td>
  </tr>
  <tr>
   <td></td>
   <td><img width=141 height=46
   src="F081-THHC%20(ASIA)%20American%20Spinal%20Injury%20Association.files/image035.gif"
   v:shapes="image10.png"></td>
  </tr>
 </table>
 </span><![endif]><!--[if gte vml 1]></o:wrapblock><![endif]--><br
style='mso-ignore:vglayout' clear=ALL>
<b style='mso-bidi-font-weight:normal'><span lang=EN-US style='font-size:6.0pt;
mso-bidi-font-size:9.0pt'><o:p></o:p></span></b></p>

<p class=MsoBodyText style='margin-top:.05pt'><b style='mso-bidi-font-weight:
normal'><span lang=EN-US style='font-size:14.5pt;mso-bidi-font-size:9.0pt'><o:p>&nbsp;</o:p></span></b></p>

<span lang=EN-US style='font-size:9.0pt;font-family:"Arial",sans-serif;
mso-fareast-font-family:Arial;mso-ansi-language:EN-US;mso-fareast-language:
EN-US;mso-bidi-language:AR-SA'><br clear=all style='mso-special-character:line-break;
mso-column-break-before:always'>
</span>

<p class=MsoBodyText style='margin-top:.3pt'><b style='mso-bidi-font-weight:
normal'><span lang=EN-US style='font-size:4.0pt;mso-bidi-font-size:9.0pt'><o:p></o:p></span></b></p>

<h5><span lang=EN-US style='font-family:"Arial",sans-serif;mso-hansi-font-family:
"Times New Roman";mso-bidi-font-family:"Times New Roman";position:relative;
top:-6.0pt;mso-text-raise:6.0pt;mso-no-proof:yes'><!--[if gte vml 1]><v:shape
 id="image11.png" o:spid="_x0000_i1039" type="#_x0000_t75" style='width:10.2pt;
 height:7.2pt;visibility:visible;mso-wrap-style:square'>
 <v:imagedata src="F081-THHC%20(ASIA)%20American%20Spinal%20Injury%20Association.files/image036.png"
  o:title=""/>
</v:shape><![endif]--><![if !vml]><img width=14 height=10
src="F081-THHC%20(ASIA)%20American%20Spinal%20Injury%20Association.files/image037.gif"
v:shapes="image11.png"><![endif]></span><span lang=EN-US style='position:relative;
top:-6.0pt;mso-text-raise:6.0pt;letter-spacing:5.45pt'><span
style='mso-spacerun:yes'>�</span></span><!--[if mso & !supportInlineShapes & supportFields]><span
lang=EN-US style='font-family:"Arial",sans-serif;mso-hansi-font-family:"Times New Roman";
mso-bidi-font-family:"Times New Roman";letter-spacing:5.45pt'><span
style='mso-element:field-begin;mso-field-lock:yes'></span><span
style='mso-spacerun:yes'>�</span>SHAPE <span
style='mso-spacerun:yes'>�</span>\* MERGEFORMAT <span style='mso-element:field-separator'></span></span><![endif]--><span
lang=EN-US style='font-family:"Arial",sans-serif;mso-hansi-font-family:"Times New Roman";
mso-bidi-font-family:"Times New Roman";letter-spacing:5.45pt'><!--[if gte vml 1]><v:group
 id="_x0000_s1031" style='width:7.6pt;height:13.35pt;
 mso-position-horizontal-relative:char;mso-position-vertical-relative:line'
 coordsize="152,267">
 <o:lock v:ext="edit" rotation="t" position="t"/>
 <v:shape id="_x0000_s1032" style='position:absolute;left:-1;width:152;
  height:267' coordsize="152,267" path="m152,111r-50,15l102,,46,r,127l,114,78,266,152,111xe"
  fillcolor="black" stroked="f">
  <v:path arrowok="t"/>
 </v:shape><w:wrap type="none"/>
 <w:anchorlock/>
</v:group><![endif]--><![if !vml]><img width=11 height=18
src="F081-THHC%20(ASIA)%20American%20Spinal%20Injury%20Association.files/image038.gif"
v:shapes="_x0000_s1031 _x0000_s1032"><![endif]></span><!--[if mso & !supportInlineShapes & supportFields]><span
lang=EN-US style='font-family:"Arial",sans-serif;mso-hansi-font-family:"Times New Roman";
mso-bidi-font-family:"Times New Roman";letter-spacing:5.45pt'><v:shape id="_x0000_i1031"
 type="#_x0000_t75" style='width:7.6pt;height:13.35pt'>
 <v:imagedata croptop="-65520f" cropbottom="65520f"/>
</v:shape><span style='mso-element:field-end'></span></span><![endif]--><span
lang=EN-US style='font-family:"Arial",sans-serif;mso-hansi-font-family:"Times New Roman";
mso-bidi-font-family:"Times New Roman"'><o:p></o:p></span></h5>

<h6 style='margin-top:2.35pt;margin-right:0cm;margin-bottom:0cm;margin-left:
21.0pt;margin-bottom:.0001pt'><span lang=EN-US style='color:#201E1F;mso-font-width:
90%'>Is injury <u style='text-underline:#201E1F'>Motor Complete</u>? If YES,
AIS=B</span></h6>

<p class=MsoBodyText style='margin-top:2.95pt;margin-right:23.55pt;margin-bottom:
0cm;margin-left:82.1pt;margin-bottom:.0001pt;line-height:96%'><!--[if gte vml 1]><v:shape
 id="image11.png" o:spid="_x0000_s1146" type="#_x0000_t75" style='position:absolute;
 left:0;text-align:left;margin-left:563.05pt;margin-top:6.2pt;width:10.45pt;
 height:7.4pt;z-index:15763968;visibility:visible;mso-wrap-style:square;
 mso-wrap-distance-left:0;mso-wrap-distance-top:0;mso-wrap-distance-right:0;
 mso-wrap-distance-bottom:0;mso-position-horizontal:absolute;
 mso-position-horizontal-relative:page;mso-position-vertical:absolute;
 mso-position-vertical-relative:text'>
 <v:imagedata src="F081-THHC%20(ASIA)%20American%20Spinal%20Injury%20Association.files/image036.png"
  o:title=""/>
 <w:wrap anchorx="page"/>
</v:shape><![endif]--><![if !vml]><span style='mso-ignore:vglayout;position:
absolute;z-index:15763968;left:0px;margin-left:946px;margin-top:2008px;
width:17px;height:12px'><img width=14 height=10
src="F081-THHC%20(ASIA)%20American%20Spinal%20Injury%20Association.files/image039.gif"
v:shapes="image11.png"></span><![endif]><!--[if gte vml 1]><v:shape id="_x0000_s1030"
 style='position:absolute;left:0;text-align:left;margin-left:581.4pt;
 margin-top:6.95pt;width:7.6pt;height:13.35pt;z-index:15764480;
 mso-position-horizontal-relative:page;mso-position-vertical-relative:text'
 coordorigin="11628,139" coordsize="152,267" path="m11779,251r-49,14l11730,139r-56,l11674,267r-46,-14l11705,406r74,-155xe"
 fillcolor="black" stroked="f">
 <v:path arrowok="t"/>
 <w:wrap anchorx="page"/>
</v:shape><![endif]--><![if !vml]><span style='mso-ignore:vglayout;position:
absolute;z-index:15764480;left:0px;margin-left:976px;margin-top:2008px;
width:14px;height:24px'><img width=11 height=19
src="F081-THHC%20(ASIA)%20American%20Spinal%20Injury%20Association.files/image040.gif"
v:shapes="_x0000_s1030"></span><![endif]><span lang=EN-US><span
style='color:#201E1F;mso-font-width:90%'>(No=voluntary anal contraction OR
motor </span><span style='color:#201E1F;mso-font-width:85%'>function<span
style='letter-spacing:-.9pt'> </span>more<span style='letter-spacing:-.9pt'> </span>than<span
style='letter-spacing:-.85pt'> </span>three<span style='letter-spacing:-.9pt'> </span>levels<span
style='letter-spacing:-.9pt'> </span>below<span style='letter-spacing:-.85pt'> </span>the<span
style='letter-spacing:-.9pt'> </span><u style='text-underline:#201E1F'>motor</u>
</span><u style='text-underline:#201E1F'><span style='color:#201E1F;mso-font-width:
90%'>leve</span></u><span style='color:#201E1F;mso-font-width:90%'>l<span
style='letter-spacing:-1.55pt'> </span>on<span style='letter-spacing:-1.55pt'> </span>a<span
style='letter-spacing:-1.5pt'> </span>given<span style='letter-spacing:-1.55pt'>
</span>side,<span style='letter-spacing:-1.5pt'> </span>if<span
style='letter-spacing:-1.55pt'> </span>the<span style='letter-spacing:-1.55pt'>
</span>patient<span style='letter-spacing:-1.5pt'> </span>has<span
style='letter-spacing:-1.55pt'> </span>sensory incomplete<span
style='letter-spacing:-.5pt'> </span>classification)</span></span></p>

<p class=MsoBodyText style='margin-top:.1pt'><span lang=EN-US style='font-size:
8.5pt;mso-bidi-font-size:9.0pt'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal style='margin-top:0cm;margin-right:39.85pt;margin-bottom:
0cm;margin-left:12.6pt;margin-bottom:.0001pt;line-height:96%'><b
style='mso-bidi-font-weight:normal'><span lang=EN-US style='font-size:9.0pt;
mso-bidi-font-size:11.0pt;line-height:96%;color:#201E1F;mso-font-width:85%'>Are<span
style='letter-spacing:-.7pt'> </span><u style='text-underline:#201E1F'>at<span
style='letter-spacing:-.6pt'> </span>least<span style='letter-spacing:-.6pt'> </span></u>half<span
style='letter-spacing:-.65pt'> </span>(half<span style='letter-spacing:-.6pt'> </span>or<span
style='letter-spacing:-.6pt'> </span>more)<span style='letter-spacing:-.6pt'> </span>of<span
style='letter-spacing:-.65pt'> </span>the<span style='letter-spacing:-.6pt'> </span>key<span
style='letter-spacing:-.6pt'> </span>muscles<span style='letter-spacing:-.65pt'>
</span>below<span style='letter-spacing:-.6pt'> </span><span style='letter-spacing:
-.25pt'>the </span></span></b><b style='mso-bidi-font-weight:normal'><u
style='text-underline:#201E1F'><span lang=EN-US style='font-size:9.0pt;
mso-bidi-font-size:11.0pt;line-height:96%;color:#201E1F;mso-font-width:90%'>neurological<span
style='letter-spacing:-.7pt'> </span>level<span style='letter-spacing:-.7pt'> </span>of<span
style='letter-spacing:-.7pt'> </span>injury</span></u></b><b style='mso-bidi-font-weight:
normal'><span lang=EN-US style='font-size:9.0pt;mso-bidi-font-size:11.0pt;
line-height:96%;color:#201E1F;letter-spacing:-.7pt;mso-font-width:90%'> </span></b><b
style='mso-bidi-font-weight:normal'><span lang=EN-US style='font-size:9.0pt;
mso-bidi-font-size:11.0pt;line-height:96%;color:#201E1F;mso-font-width:90%'>graded<span
style='letter-spacing:-.7pt'> </span>3<span style='letter-spacing:-.65pt'> </span>or<span
style='letter-spacing:-.7pt'> </span>better?</span></b><b style='mso-bidi-font-weight:
normal'><span lang=EN-US style='font-size:9.0pt;mso-bidi-font-size:11.0pt;
line-height:96%'><o:p></o:p></span></b></p>

<p class=MsoBodyText style='margin-top:.1pt'><b style='mso-bidi-font-weight:
normal'><span lang=EN-US style='font-size:4.5pt;mso-bidi-font-size:9.0pt'><o:p>&nbsp;</o:p></span></b></p>

<h5 style='margin-left:46.8pt;tab-stops:119.7pt'><span lang=EN-US
style='font-family:"Arial",sans-serif;mso-hansi-font-family:"Times New Roman";
mso-bidi-font-family:"Times New Roman";position:relative;top:-6.0pt;mso-text-raise:
6.0pt;mso-no-proof:yes'><!--[if gte vml 1]><v:shape id="image12.png" o:spid="_x0000_i1038"
 type="#_x0000_t75" style='width:10.2pt;height:7.2pt;visibility:visible;
 mso-wrap-style:square'>
 <v:imagedata src="F081-THHC%20(ASIA)%20American%20Spinal%20Injury%20Association.files/image041.png"
  o:title=""/>
</v:shape><![endif]--><![if !vml]><img width=14 height=10
src="F081-THHC%20(ASIA)%20American%20Spinal%20Injury%20Association.files/image042.gif"
v:shapes="image12.png"><![endif]></span><span lang=EN-US style='position:relative;
top:-6.0pt;mso-text-raise:6.0pt;letter-spacing:3.3pt'><span
style='mso-spacerun:yes'>�</span></span><!--[if mso & !supportInlineShapes & supportFields]><span
lang=EN-US style='font-family:"Arial",sans-serif;mso-hansi-font-family:"Times New Roman";
mso-bidi-font-family:"Times New Roman";letter-spacing:3.3pt'><span
style='mso-element:field-begin;mso-field-lock:yes'></span><span
style='mso-spacerun:yes'>�</span>SHAPE <span
style='mso-spacerun:yes'>�</span>\* MERGEFORMAT <span style='mso-element:field-separator'></span></span><![endif]--><span
lang=EN-US style='font-family:"Arial",sans-serif;mso-hansi-font-family:"Times New Roman";
mso-bidi-font-family:"Times New Roman";letter-spacing:3.3pt'><!--[if gte vml 1]><v:group
 id="_x0000_s1028" style='width:7.6pt;height:13.35pt;
 mso-position-horizontal-relative:char;mso-position-vertical-relative:line'
 coordsize="152,267">
 <o:lock v:ext="edit" rotation="t" position="t"/>
 <v:shape id="_x0000_s1029" style='position:absolute;width:152;height:267'
  coordsize="152,267" path="m152,111r-50,15l102,,46,r,127l,114,78,266,152,111xe"
  fillcolor="black" stroked="f">
  <v:path arrowok="t"/>
 </v:shape><w:wrap type="none"/>
 <w:anchorlock/>
</v:group><![endif]--><![if !vml]><img width=11 height=18
src="F081-THHC%20(ASIA)%20American%20Spinal%20Injury%20Association.files/image043.gif"
v:shapes="_x0000_s1028 _x0000_s1029"><![endif]></span><!--[if mso & !supportInlineShapes & supportFields]><span
lang=EN-US style='font-family:"Arial",sans-serif;mso-hansi-font-family:"Times New Roman";
mso-bidi-font-family:"Times New Roman";letter-spacing:3.3pt'><v:shape id="_x0000_i1032"
 type="#_x0000_t75" style='width:7.6pt;height:13.35pt'>
 <v:imagedata croptop="-65520f" cropbottom="65520f"/>
</v:shape><span style='mso-element:field-end'></span></span><![endif]--><span
lang=EN-US style='font-family:"Arial",sans-serif;mso-hansi-font-family:"Times New Roman";
mso-bidi-font-family:"Times New Roman";letter-spacing:3.3pt'><span
style='mso-tab-count:1'>������ </span><span style='position:relative;
top:-6.5pt;mso-text-raise:6.5pt;mso-no-proof:yes'><!--[if gte vml 1]><v:shape
 id="image13.png" o:spid="_x0000_i1037" type="#_x0000_t75" style='width:15pt;
 height:7.2pt;visibility:visible;mso-wrap-style:square'>
 <v:imagedata src="F081-THHC%20(ASIA)%20American%20Spinal%20Injury%20Association.files/image044.png"
  o:title=""/>
</v:shape><![endif]--><![if !vml]><img width=20 height=10
src="F081-THHC%20(ASIA)%20American%20Spinal%20Injury%20Association.files/image045.gif"
v:shapes="image13.png"><![endif]></span></span><span lang=EN-US
style='position:relative;top:-6.5pt;mso-text-raise:6.5pt;letter-spacing:2.65pt'><span
style='mso-spacerun:yes'>�</span></span><!--[if mso & !supportInlineShapes & supportFields]><span
lang=EN-US style='font-family:"Arial",sans-serif;mso-hansi-font-family:"Times New Roman";
mso-bidi-font-family:"Times New Roman";position:relative;top:-.5pt;mso-text-raise:
.5pt;letter-spacing:2.65pt'><span style='mso-element:field-begin;mso-field-lock:
yes'></span><span style='mso-spacerun:yes'>�</span>SHAPE <span
style='mso-spacerun:yes'>�</span>\* MERGEFORMAT <span style='mso-element:field-separator'></span></span><![endif]--><span
lang=EN-US style='font-family:"Arial",sans-serif;mso-hansi-font-family:"Times New Roman";
mso-bidi-font-family:"Times New Roman";position:relative;top:-.5pt;mso-text-raise:
.5pt;letter-spacing:2.65pt'><!--[if gte vml 1]><v:group id="_x0000_s1026"
 style='width:7.6pt;height:13.35pt;mso-position-horizontal-relative:char;
 mso-position-vertical-relative:line' coordsize="152,267">
 <o:lock v:ext="edit" rotation="t" position="t"/>
 <v:shape id="_x0000_s1027" style='position:absolute;width:152;height:267'
  coordsize="152,267" path="m152,111r-50,15l102,,46,r,127l,114,78,266,152,111xe"
  fillcolor="black" stroked="f">
  <v:path arrowok="t"/>
 </v:shape><w:wrap type="none"/>
 <w:anchorlock/>
</v:group><![endif]--><![if !vml]><img width=11 height=18
src="F081-THHC%20(ASIA)%20American%20Spinal%20Injury%20Association.files/image046.gif"
v:shapes="_x0000_s1026 _x0000_s1027"><![endif]></span><!--[if mso & !supportInlineShapes & supportFields]><span
lang=EN-US style='font-family:"Arial",sans-serif;mso-hansi-font-family:"Times New Roman";
mso-bidi-font-family:"Times New Roman";position:relative;top:-.5pt;mso-text-raise:
.5pt;letter-spacing:2.65pt'><v:shape id="_x0000_i1033" type="#_x0000_t75"
 style='width:7.6pt;height:13.35pt'>
 <v:imagedata croptop="-65520f" cropbottom="65520f"/>
</v:shape><span style='mso-element:field-end'></span></span><![endif]--><span
lang=EN-US style='font-family:"Arial",sans-serif;mso-hansi-font-family:"Times New Roman";
mso-bidi-font-family:"Times New Roman"'><o:p></o:p></span></h5>

<p class=MsoBodyText style='margin-top:.3pt'><b style='mso-bidi-font-weight:
normal'><span lang=EN-US style='font-size:2.5pt;mso-bidi-font-size:9.0pt'><o:p>&nbsp;</o:p></span></b></p>

<p class=MsoNormal style='margin-left:53.0pt;line-height:7.55pt;mso-line-height-rule:
exactly;tab-stops:129.05pt'><span lang=EN-US style='font-size:7.0pt;mso-bidi-font-size:
11.0pt;position:relative;top:1.0pt;mso-text-raise:-1.0pt;mso-no-proof:yes'><!--[if gte vml 1]><v:shape
 id="image14.png" o:spid="_x0000_i1036" type="#_x0000_t75" style='width:24.6pt;
 height:7.2pt;visibility:visible;mso-wrap-style:square'>
 <v:imagedata src="F081-THHC%20(ASIA)%20American%20Spinal%20Injury%20Association.files/image047.png"
  o:title=""/>
</v:shape><![endif]--><![if !vml]><img width=33 height=10
src="F081-THHC%20(ASIA)%20American%20Spinal%20Injury%20Association.files/image048.gif"
v:shapes="image14.png"><![endif]></span><span lang=EN-US style='font-size:7.0pt;
mso-bidi-font-size:11.0pt;position:relative;top:1.0pt;mso-text-raise:-1.0pt'><span
style='mso-tab-count:1'>���������������������������� </span><span
style='mso-no-proof:yes'><!--[if gte vml 1]><v:shape id="image15.png" o:spid="_x0000_i1035"
 type="#_x0000_t75" style='width:24.6pt;height:7.2pt;visibility:visible;
 mso-wrap-style:square'>
 <v:imagedata src="F081-THHC%20(ASIA)%20American%20Spinal%20Injury%20Association.files/image049.png"
  o:title=""/>
</v:shape><![endif]--><![if !vml]><img width=33 height=10
src="F081-THHC%20(ASIA)%20American%20Spinal%20Injury%20Association.files/image050.gif"
v:shapes="image15.png"><![endif]></span></span><span lang=EN-US
style='font-size:7.0pt;mso-bidi-font-size:11.0pt'><o:p></o:p></span></p>

<p class=MsoBodyText style='margin-top:.1pt'><b style='mso-bidi-font-weight:
normal'><span lang=EN-US><o:p>&nbsp;</o:p></span></b></p>

<p class=MsoNormal style='margin-top:0cm;margin-right:12.35pt;margin-bottom:
0cm;margin-left:12.8pt;margin-bottom:.0001pt;line-height:107%'><b
style='mso-bidi-font-weight:normal'><span lang=EN-US style='font-size:7.0pt;
line-height:107%;color:#201E1F;mso-font-width:85%'>If<span style='letter-spacing:
-.75pt'> </span>sensation<span style='letter-spacing:-.7pt'> </span>and<span
style='letter-spacing:-.7pt'> </span>motor<span style='letter-spacing:-.75pt'> </span>function<span
style='letter-spacing:-.7pt'> </span>is<span style='letter-spacing:-.7pt'> </span>normal<span
style='letter-spacing:-.7pt'> </span>in<span style='letter-spacing:-.75pt'> </span>all<span
style='letter-spacing:-.7pt'> </span>segments,<span style='letter-spacing:-.9pt'>
</span>AIS=E </span></b><span lang=EN-US style='font-size:7.0pt;line-height:
107%;color:#201E1F;mso-font-width:85%'>Note:<span style='letter-spacing:-.9pt'>
</span>AIS<span style='letter-spacing:-.55pt'> </span>E<span style='letter-spacing:
-.6pt'> </span>is<span style='letter-spacing:-.6pt'> </span>used<span
style='letter-spacing:-.55pt'> </span>in<span style='letter-spacing:-.6pt'> </span>follow-up<span
style='letter-spacing:-.6pt'> </span>testing<span style='letter-spacing:-.55pt'>
</span>when<span style='letter-spacing:-.6pt'> </span>an<span style='letter-spacing:
-.55pt'> </span>individual<span style='letter-spacing:-.6pt'> </span>with<span
style='letter-spacing:-.6pt'> </span>a<span style='letter-spacing:-.55pt'> </span>documented
SCI<span style='letter-spacing:-.6pt'> </span>has<span style='letter-spacing:
-.6pt'> </span>recovered<span style='letter-spacing:-.6pt'> </span>normal<span
style='letter-spacing:-.6pt'> </span>function.<span style='letter-spacing:-.55pt'>
</span>If<span style='letter-spacing:-.6pt'> </span>at<span style='letter-spacing:
-.6pt'> </span>initial<span style='letter-spacing:-.6pt'> </span>testing<span
style='letter-spacing:-.6pt'> </span>no<span style='letter-spacing:-.6pt'> </span>deficits<span
style='letter-spacing:-.6pt'> </span>are<span style='letter-spacing:-.6pt'> </span>found,<span
style='letter-spacing:-.6pt'> </span>the individual<span style='letter-spacing:
-1.0pt'> </span>is<span style='letter-spacing:-.95pt'> </span>neurologically<span
style='letter-spacing:-.9pt'> </span>intact,<span style='letter-spacing:-.95pt'>
</span>and<span style='letter-spacing:-.95pt'> </span>the<span
style='letter-spacing:-1.15pt'> </span>ASIA<span style='letter-spacing:-1.1pt'>
</span>Impairment<span style='letter-spacing:-.95pt'> </span>Scale<span
style='letter-spacing:-.9pt'> </span>does<span style='letter-spacing:-.95pt'> </span>not<span
style='letter-spacing:-.95pt'> </span>apply.</span><span lang=EN-US
style='font-size:7.0pt;line-height:107%'><o:p></o:p></span></p>

<h6 style='margin-top:6.95pt;margin-right:0cm;margin-bottom:0cm;margin-left:
20.1pt;margin-bottom:.0001pt;text-indent:-8.25pt;mso-list:l1 level1 lfo1;
tab-stops:20.15pt'><![if !supportLists]><span lang=EN-US style='color:#201E1F;
letter-spacing:-.05pt;mso-font-width:82%'><span style='mso-list:Ignore'>6.<span
style='font:7.0pt "Times New Roman"'>&nbsp; </span></span></span><![endif]><span
dir=LTR></span><span lang=EN-US style='font-size:7.0pt;color:#201E1F;
mso-font-width:90%'>Determine<span style='letter-spacing:-.6pt'> </span>the<span
style='letter-spacing:-.6pt'> </span>zone<span style='letter-spacing:-.6pt'> </span>of<span
style='letter-spacing:-.6pt'> </span>partial<span style='letter-spacing:-.6pt'>
</span>preservation<span style='letter-spacing:-.6pt'> </span>(ZPP).</span><span
lang=EN-US style='font-size:7.0pt'><o:p></o:p></span></h6>

<p class=MsoNormal style='margin-top:.6pt;margin-right:28.75pt;margin-bottom:
0cm;margin-left:11.9pt;margin-bottom:.0001pt;line-height:108%'><span
lang=EN-US style='font-size:7.0pt;line-height:108%;color:#201E1F;mso-font-width:
90%'>The<span style='letter-spacing:-1.2pt'> </span>ZPP<span style='letter-spacing:
-1.25pt'> </span>is<span style='letter-spacing:-1.2pt'> </span>used<span
style='letter-spacing:-1.15pt'> </span>only<span style='letter-spacing:-1.2pt'>
</span>in<span style='letter-spacing:-1.2pt'> </span>injuries<span
style='letter-spacing:-1.2pt'> </span>with<span style='letter-spacing:-1.15pt'>
</span>absent<span style='letter-spacing:-1.2pt'> </span>motor<span
style='letter-spacing:-1.15pt'> </span>(no<span style='letter-spacing:-1.2pt'> </span><span
style='letter-spacing:-.15pt'>VAC)</span><span style='letter-spacing:-1.15pt'> </span>OR<span
style='letter-spacing:-1.2pt'> </span>sensory </span><span lang=EN-US
style='font-size:7.0pt;line-height:108%;color:#201E1F;mso-font-width:85%'>function<span
style='letter-spacing:-.7pt'> </span>(no<span style='letter-spacing:-.7pt'> </span><span
style='letter-spacing:-.25pt'>DAP,</span><span style='letter-spacing:-.7pt'> </span>no<span
style='letter-spacing:-.7pt'> </span><span style='letter-spacing:-.25pt'>LT</span><span
style='letter-spacing:-.8pt'> </span>and<span style='letter-spacing:-.7pt'> </span>no<span
style='letter-spacing:-.7pt'> </span>PP<span style='letter-spacing:-.8pt'> </span>sensation)<span
style='letter-spacing:-.7pt'> </span>in<span style='letter-spacing:-.75pt'> </span>the<span
style='letter-spacing:-.7pt'> </span>lowest<span style='letter-spacing:-.75pt'>
</span>sacral<span style='letter-spacing:-.7pt'> </span>segments S4-5,<span
style='letter-spacing:-.8pt'> </span>and<span style='letter-spacing:-.75pt'> </span>refers<span
style='letter-spacing:-.75pt'> </span>to<span style='letter-spacing:-.8pt'> </span>those<span
style='letter-spacing:-.75pt'> </span>dermatomes<span style='letter-spacing:
-.75pt'> </span>and<span style='letter-spacing:-.8pt'> </span>myotomes<span
style='letter-spacing:-.75pt'> </span>caudal<span style='letter-spacing:-.8pt'>
</span>to<span style='letter-spacing:-.75pt'> </span>the<span style='letter-spacing:
-.8pt'> </span>sensory </span><span lang=EN-US style='font-size:7.0pt;
line-height:108%;color:#201E1F;mso-font-width:90%'>and<span style='letter-spacing:
-1.25pt'> </span>motor<span style='letter-spacing:-1.25pt'> </span>levels<span
style='letter-spacing:-1.3pt'> </span>that<span style='letter-spacing:-1.2pt'> </span>remain<span
style='letter-spacing:-1.25pt'> </span>partially<span style='letter-spacing:
-1.25pt'> </span>innervated.<span style='letter-spacing:-1.25pt'> </span>With<span
style='letter-spacing:-1.25pt'> </span>sacral<span style='letter-spacing:-1.3pt'>
</span>sparing<span style='letter-spacing:-1.25pt'> </span>of sensory<span
style='letter-spacing:-1.4pt'> </span>function,<span style='letter-spacing:
-1.35pt'> </span>the<span style='letter-spacing:-1.35pt'> </span>sensory<span
style='letter-spacing:-1.4pt'> </span>ZPP<span style='letter-spacing:-1.35pt'> </span>is<span
style='letter-spacing:-1.4pt'> </span>not<span style='letter-spacing:-1.35pt'> </span>applicable<span
style='letter-spacing:-1.35pt'> </span>and<span style='letter-spacing:-1.35pt'>
</span>therefore<span style='letter-spacing:-1.35pt'> </span>�NA�<span
style='letter-spacing:-.75pt'> </span>is recorded<span style='letter-spacing:
-1.35pt'> </span>in<span style='letter-spacing:-1.4pt'> </span>the<span
style='letter-spacing:-1.35pt'> </span>block<span style='letter-spacing:-1.35pt'>
</span>of<span style='letter-spacing:-1.35pt'> </span>the<span
style='letter-spacing:-1.3pt'> </span>worksheet.<span style='letter-spacing:
-1.5pt'> </span>Accordingly,<span style='letter-spacing:-1.35pt'> </span>if<span
style='letter-spacing:-1.35pt'> </span><span style='letter-spacing:-.2pt'>VAC</span><span
style='letter-spacing:-1.35pt'> </span>is<span style='letter-spacing:-1.35pt'> </span>present,<span
style='letter-spacing:-1.35pt'> </span>the motor<span style='letter-spacing:
-.45pt'> </span>ZPP<span style='letter-spacing:-.6pt'> </span>is<span
style='letter-spacing:-.45pt'> </span>not<span style='letter-spacing:-.45pt'> </span>applicable<span
style='letter-spacing:-.45pt'> </span>and<span style='letter-spacing:-.45pt'> </span>is<span
style='letter-spacing:-.45pt'> </span>noted<span style='letter-spacing:-.45pt'>
</span>as<span style='letter-spacing:-.45pt'> </span>�NA�.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-top:.6pt;margin-right:28.75pt;margin-bottom:
0cm;margin-left:11.9pt;margin-bottom:.0001pt;line-height:108%'><span
lang=EN-US style='font-size:7.0pt;line-height:108%'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal style='margin-top:.6pt;margin-right:28.75pt;margin-bottom:
0cm;margin-left:11.9pt;margin-bottom:.0001pt;line-height:108%'><span
lang=EN-US style='font-size:7.0pt;line-height:108%'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal style='margin-top:.6pt;margin-right:5.15pt;margin-bottom:
0cm;margin-left:4.5pt;margin-bottom:.0001pt;line-height:108%'><span lang=EN-US
style='font-size:9.0pt;mso-bidi-font-size:12.0pt;line-height:108%;font-family:
Montserrat;mso-bidi-font-weight:bold;mso-bidi-font-style:italic'>F081-THHC
(ASIA) American Spinal Injury Association</span><span lang=EN-US
style='font-size:7.0pt;line-height:108%'><o:p></o:p></span></p>

</div>

</body>

</html>
