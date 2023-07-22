<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<title>F008-THHC SBAR Form of handover| @yield('title')</title>

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
	margin-top:0cm;
	margin-right:0cm;
	margin-bottom:10.0pt;
	margin-left:0cm;
	text-align:right;
	line-height:115%;
	mso-pagination:widow-orphan;
	direction:rtl;
	unicode-bidi:embed;
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
	text-align:right;
	mso-pagination:widow-orphan;
	tab-stops:center 234.0pt right 468.0pt;
	direction:rtl;
	unicode-bidi:embed;
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
	text-align:right;
	mso-pagination:widow-orphan;
	tab-stops:center 234.0pt right 468.0pt;
	direction:rtl;
	unicode-bidi:embed;
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
	margin-bottom:10.0pt;
	line-height:115%;}
 /* Page Definitions */
 @page
	{mso-gutter-position:top;
	mso-footnote-separator:url("F008-THHC%20SBAR%20Form%20of%20handover.files/header.htm") fs;
	mso-footnote-continuation-separator:url("F008-THHC%20SBAR%20Form%20of%20handover.files/header.htm") fcs;
	mso-endnote-separator:url("F008-THHC%20SBAR%20Form%20of%20handover.files/header.htm") es;
	mso-endnote-continuation-separator:url("F008-THHC%20SBAR%20Form%20of%20handover.files/header.htm") ecs;
	mso-facing-pages:yes;}
@page WordSection1
	{size:595.3pt 841.9pt;
	margin:39.7pt 42.55pt 42.55pt 39.7pt;
	mso-header-margin:50.4pt;
	mso-footer-margin:28.8pt;
	mso-title-page:yes;
	mso-even-header:url("F008-THHC%20SBAR%20Form%20of%20handover.files/header.htm") eh1;
	mso-header:url("F008-THHC%20SBAR%20Form%20of%20handover.files/header.htm") h1;
	mso-even-footer:url("F008-THHC%20SBAR%20Form%20of%20handover.files/header.htm") ef1;
	mso-footer:url("F008-THHC%20SBAR%20Form%20of%20handover.files/header.htm") f1;
	mso-first-header:url("F008-THHC%20SBAR%20Form%20of%20handover.files/header.htm") fh1;
	mso-first-footer:url("F008-THHC%20SBAR%20Form%20of%20handover.files/header.htm") ff1;
	mso-paper-source:0;
	mso-gutter-direction:rtl;}
div.WordSection1
	{page:WordSection1;}
 /* List Definitions */
 @list l0
	{mso-list-id:160698851;
	mso-list-type:hybrid;
	mso-list-template-ids:448199458 -1795358964 67698691 67698693 67698689 67698691 67698693 67698689 67698691 67698693;}
@list l0:level1
	{mso-level-start-at:0;
	mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:36.0pt;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	font-family:Symbol;
	mso-fareast-font-family:"Times New Roman";}
@list l0:level2
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:72.0pt;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	font-family:"Courier New";
	mso-bidi-font-family:"Times New Roman";}
@list l0:level3
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:108.0pt;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	font-family:Wingdings;}
@list l0:level4
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:144.0pt;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	font-family:Symbol;}
@list l0:level5
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:180.0pt;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	font-family:"Courier New";
	mso-bidi-font-family:"Times New Roman";}
@list l0:level6
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:216.0pt;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	font-family:Wingdings;}
@list l0:level7
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:252.0pt;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	font-family:Symbol;}
@list l0:level8
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:288.0pt;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	font-family:"Courier New";
	mso-bidi-font-family:"Times New Roman";}
@list l0:level9
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:324.0pt;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	font-family:Wingdings;}
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
	mso-para-margin-top:0cm;
	mso-para-margin-right:0cm;
	mso-para-margin-bottom:10.0pt;
	mso-para-margin-left:0cm;
	line-height:115%;
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

<div class=WordSection1 dir=RTL>

<p class=MsoNormal align=center dir=LTR style='text-align:center;line-height:
normal;direction:ltr;unicode-bidi:embed'><span lang=EN-US style='mso-bidi-font-size:
12.0pt;font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
mso-bidi-theme-font:major-bidi'>(Situation, Background, Assessment, Recommendation)
<o:p></o:p></span></p>

<p class=MsoNormal align=center dir=LTR style='text-align:center;line-height:
normal;direction:ltr;unicode-bidi:embed'><i><span lang=EN-US style='mso-bidi-font-size:
12.0pt;font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
mso-bidi-theme-font:major-bidi'><span style='mso-spacerun:yes'> </span><o:p></o:p></span></i></p>

<p class=MsoNormal dir=LTR style='text-align:left;line-height:normal;
direction:ltr;unicode-bidi:embed'><span lang=EN-US style='mso-bidi-font-size:
12.0pt;font-family:"Montserrat SemiBold";mso-bidi-font-family:"Times New Roman";
mso-bidi-theme-font:major-bidi'>Situation:<i> <span style='mso-tab-count:4'> </span><span
style='mso-tab-count:1'> </span><span
style='mso-spacerun:yes'></span><o:p></o:p></i></span></p>

<p class=MsoNormal dir=LTR style='text-align:left;line-height:normal;
direction:ltr;unicode-bidi:embed'><span lang=EN-US style='mso-bidi-font-size:
12.0pt;font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
mso-bidi-theme-font:major-bidi'>Current Date: ____________<i>________________________________________________________________<o:p></o:p></i></span></p>

<p class=MsoNormal dir=LTR style='text-align:left;line-height:normal;
direction:ltr;unicode-bidi:embed'><span lang=EN-US style='mso-bidi-font-size:
12.0pt;font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
mso-bidi-theme-font:major-bidi'>Final Diagnosis: _______________<i>__________________________________________________</i>_________<o:p></o:p></span></p>

<p class=MsoNormal dir=LTR style='text-align:left;line-height:normal;
direction:ltr;unicode-bidi:embed'><span lang=EN-US style='mso-bidi-font-size:
12.0pt;font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
mso-bidi-theme-font:major-bidi'>Admission Date: ___________<i>______________________________________________________________<o:p></o:p></i></span></p>

<p class=MsoNormal dir=LTR style='text-align:left;line-height:normal;
direction:ltr;unicode-bidi:embed'><span lang=EN-US style='mso-bidi-font-size:
12.0pt;font-family:"Montserrat SemiBold";mso-bidi-font-family:"Times New Roman";
mso-bidi-theme-font:major-bidi'>Background: <o:p></o:p></span></p>

<p class=MsoNormal dir=LTR style='text-align:left;line-height:normal;
direction:ltr;unicode-bidi:embed'><span lang=EN-US style='mso-bidi-font-size:
12.0pt;font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
mso-bidi-theme-font:major-bidi'>Primary Diagnosis ________________________________________________________________________<o:p></o:p></span></p>

<p class=MsoNormal dir=LTR style='text-align:left;line-height:normal;
direction:ltr;unicode-bidi:embed'><span lang=EN-US style='mso-bidi-font-size:
12.0pt;font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
mso-bidi-theme-font:major-bidi'>Medical history: ___________<i>________________________________________________________________</i><span
style='mso-tab-count:1'> </span> <o:p></o:p></span></p>

<p class=MsoNormal dir=LTR style='text-align:left;line-height:normal;
direction:ltr;unicode-bidi:embed'><span lang=EN-US style='mso-bidi-font-size:
12.0pt;font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
mso-bidi-theme-font:major-bidi'>Fall precautions: __________________________________________________________________________<o:p></o:p></span></p>

<p class=MsoNormal dir=LTR style='text-align:left;line-height:normal;
direction:ltr;unicode-bidi:embed'><span lang=EN-US style='mso-bidi-font-size:
12.0pt;font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
mso-bidi-theme-font:major-bidi'>Restraint precautions: ____________________________________________________________________<o:p></o:p></span></p>

<p class=MsoNormal dir=LTR style='text-align:left;line-height:normal;
direction:ltr;unicode-bidi:embed'><span lang=EN-US style='mso-bidi-font-size:
12.0pt;font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
mso-bidi-theme-font:major-bidi'>Allergies: _________________________________________________________________________________<o:p></o:p></span></p>

<p class=MsoNormal dir=LTR style='text-align:left;line-height:normal;
direction:ltr;unicode-bidi:embed'><span lang=EN-US style='mso-bidi-font-size:
12.0pt;font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
mso-bidi-theme-font:major-bidi'>Code status: <span style='mso-tab-count:1'> </span>______________________________________________________________________________<o:p></o:p></span></p>

<p class=MsoNormal dir=LTR style='text-align:left;line-height:normal;
direction:ltr;unicode-bidi:embed'><span lang=EN-US style='mso-bidi-font-size:
12.0pt;font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
mso-bidi-theme-font:major-bidi'>Medication: _______________________________________________________________________________<o:p></o:p></span></p>

<p class=MsoNormal dir=LTR style='text-align:left;line-height:normal;
direction:ltr;unicode-bidi:embed'><span lang=EN-US style='mso-bidi-font-size:
12.0pt;font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
mso-bidi-theme-font:major-bidi'>Current treatment/ intervention: __________________________________________________________<o:p></o:p></span></p>

<p class=MsoNormal dir=LTR style='text-align:left;line-height:normal;
direction:ltr;unicode-bidi:embed'><span lang=EN-US style='mso-bidi-font-size:
12.0pt;font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal dir=LTR style='text-align:left;line-height:normal;
direction:ltr;unicode-bidi:embed'><span lang=EN-US style='mso-bidi-font-size:
12.0pt;font-family:"Montserrat SemiBold";mso-bidi-font-family:"Times New Roman";
mso-bidi-theme-font:major-bidi'>Assessment: <o:p></o:p></span></p>

<p class=MsoNormal dir=LTR style='text-align:left;line-height:150%;direction:
ltr;unicode-bidi:embed'><span lang=EN-US style='mso-bidi-font-size:12.0pt;
line-height:150%;font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
mso-bidi-theme-font:major-bidi'>Mental Status:<span style='mso-spacerun:yes'>
</span>____________Vital signs: BP __________ <span
style='mso-spacerun:yes'></span><span style='mso-spacerun:yes'></span>HR___________<span
style='mso-tab-count:1'> </span>RR_______<o:p></o:p></span></p>

<p class=MsoNormal dir=LTR style='text-align:left;line-height:150%;direction:
ltr;unicode-bidi:embed'><span lang=EN-US style='mso-bidi-font-size:12.0pt;
line-height:150%;font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
mso-bidi-theme-font:major-bidi'>Respiratory Status: ____________Temperature: __________Pain
scale____________<o:p></o:p></span></p>

<p class=MsoNormal dir=LTR style='text-align:left;line-height:150%;direction:
ltr;unicode-bidi:embed'><span lang=EN-US style='mso-bidi-font-size:12.0pt;
line-height:150%;font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
mso-bidi-theme-font:major-bidi'>Cardiac Status: _________________________Abnormal
Lab: _____________________<o:p></o:p></span></p>

<p class=MsoNormal dir=LTR style='text-align:left;line-height:150%;direction:
ltr;unicode-bidi:embed'><span lang=EN-US style='mso-bidi-font-size:12.0pt;
line-height:150%;font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
mso-bidi-theme-font:major-bidi'>GIT Status: ___________________________________________________________________<span
style='mso-tab-count:1'> </span><span style='mso-tab-count:1'>

<p class=MsoNormal dir=LTR style='text-align:left;line-height:150%;direction:
ltr;unicode-bidi:embed'><span lang=EN-US style='mso-bidi-font-size:12.0pt;
line-height:150%;font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
mso-bidi-theme-font:major-bidi'>Skin Condition: ________________________________________________________________________<o:p></o:p></span></p>

<p class=MsoNormal dir=LTR style='text-align:left;line-height:150%;direction:
ltr;unicode-bidi:embed'><span lang=EN-US style='mso-bidi-font-size:12.0pt;
line-height:150%;font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
mso-bidi-theme-font:major-bidi'>Dressing date:
_________________________________________________________________________<span
style='mso-tab-count:1'> </span><o:p></o:p></span></p>

<p class=MsoNormal dir=LTR style='text-align:left;line-height:150%;direction:
ltr;unicode-bidi:embed'><span lang=EN-US style='mso-bidi-font-size:12.0pt;
line-height:150%;font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
mso-bidi-theme-font:major-bidi'>X-ray results:
___________________________________________________________________________<o:p></o:p></span></p>

<p class=MsoNormal dir=LTR style='text-align:left;line-height:150%;direction:
ltr;unicode-bidi:embed'><span lang=EN-US style='mso-bidi-font-size:12.0pt;
line-height:150%;font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
mso-bidi-theme-font:major-bidi'>Lines/ fluids:
____________________________________________________________________________<o:p></o:p></span></p>

<p class=MsoNormal dir=LTR style='text-align:left;line-height:normal;
direction:ltr;unicode-bidi:embed'><span lang=EN-US style='mso-bidi-font-size:
12.0pt;font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
mso-bidi-theme-font:major-bidi'>IV dressing date: ________________________________________________________________________<o:p></o:p></span></p>

<p class=MsoNormal dir=LTR style='text-align:left;line-height:normal;
direction:ltr;unicode-bidi:embed'><span lang=EN-US style='mso-bidi-font-size:
12.0pt;font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal dir=LTR style='text-align:left;line-height:normal;
direction:ltr;unicode-bidi:embed'><span lang=EN-US style='mso-bidi-font-size:
12.0pt;font-family:"Montserrat SemiBold";mso-bidi-font-family:"Times New Roman";
mso-bidi-theme-font:major-bidi'>Recommendations: <o:p></o:p></span></p>

<p class=MsoNormal dir=LTR style='text-align:left;line-height:normal;
direction:ltr;unicode-bidi:embed'><span lang=EN-US style='mso-bidi-font-size:
12.0pt;font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
mso-bidi-theme-font:major-bidi'>Specify the needs for change in the plan of
care (Diet, Medication, or activity):<o:p></o:p></span></p>

<p class=MsoNormal dir=LTR style='text-align:left;line-height:normal;
direction:ltr;unicode-bidi:embed'><span lang=EN-US style='mso-bidi-font-size:
12.0pt;font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal dir=LTR style='text-align:left;line-height:normal;
direction:ltr;unicode-bidi:embed'><span lang=EN-US style='mso-bidi-font-size:
12.0pt;font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
mso-bidi-theme-font:major-bidi'>Consultation or referral:
_____________________________________________________________________<o:p></o:p></span></p>

<p class=MsoNormal dir=LTR style='text-align:left;line-height:normal;
direction:ltr;unicode-bidi:embed'><span lang=EN-US style='mso-bidi-font-size:
12.0pt;font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
mso-bidi-theme-font:major-bidi'>Pending labs or radiology:
__________________________________________________________________<o:p></o:p></span></p>

<p class=MsoNormal dir=LTR style='text-align:left;line-height:normal;
direction:ltr;unicode-bidi:embed'><span lang=EN-US style='mso-bidi-font-size:
12.0pt;font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
mso-bidi-theme-font:major-bidi'>Discharge Planning:
________________________________________________________________________<o:p></o:p></span></p>

<p class=MsoNormal dir=LTR style='text-align:left;line-height:normal;
direction:ltr;unicode-bidi:embed'><span lang=EN-US style='mso-bidi-font-size:
12.0pt;font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
mso-bidi-theme-font:major-bidi'>What the next shift needs to be aware of: ___________________________________________________<o:p></o:p></span></p>

<p class=MsoNormal dir=LTR style='margin-bottom:0cm;margin-bottom:.0001pt;
text-align:left;line-height:normal;mso-layout-grid-align:none;text-autospace:
none;direction:ltr;unicode-bidi:embed'><b><span lang=EN-US style='font-size:
9.0pt;font-family:Montserrat;mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:
major-bidi'><o:p>&nbsp;</o:p></span></b></p>

<p class=MsoNormal dir=LTR style='margin-bottom:0cm;margin-bottom:.0001pt;
text-align:left;line-height:normal;mso-layout-grid-align:none;text-autospace:
none;direction:ltr;unicode-bidi:embed'><b><span lang=EN-US style='font-size:
9.0pt;font-family:Montserrat;mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:
major-bidi'><o:p>&nbsp;</o:p></span></b></p>

<p class=MsoHeader dir=LTR style='margin-left:36.0pt;text-align:justify;
text-indent:-18.0pt;mso-list:l0 level1 lfo1;tab-stops:list 36.0pt;direction:
ltr;unicode-bidi:embed'><span lang=EN-US style='mso-bidi-font-size:
12.0pt;font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:
Symbol'><span style='mso-list:Ignore'><span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><span dir=LTR></span><span lang=EN-US
style='mso-bidi-font-size:12.0pt;font-family:Montserrat;mso-bidi-font-family:
"Times New Roman";mso-bidi-theme-font:major-bidi'>Please complete form for
patients requiring coverage. Make sure your medical record is complete and in
order.<o:p></o:p></span></p>

<p class=MsoHeader dir=LTR style='margin-left:18.0pt;text-align:justify;
direction:ltr;unicode-bidi:embed'><span lang=EN-US style='mso-bidi-font-size:
12.0pt;font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></p>

<p class=MsoHeader dir=LTR style='margin-left:18.0pt;text-align:justify;
direction:ltr;unicode-bidi:embed'><span lang=EN-US style='mso-bidi-font-size:
12.0pt;font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></p>

<p class=MsoHeader dir=LTR style='margin-left:18.0pt;text-align:justify;
direction:ltr;unicode-bidi:embed'><span lang=EN-US style='mso-bidi-font-size:
12.0pt;font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
mso-bidi-theme-font:major-bidi'>__________________<span
style='mso-spacerun:yes'>
</span>________________<o:p></o:p></span></p>

<p class=MsoHeader dir=LTR style='margin-left:18.0pt;text-align:justify;
direction:ltr;unicode-bidi:embed'><span lang=EN-US style='mso-bidi-font-size:
12.0pt;font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
mso-bidi-theme-font:major-bidi'>Caregiver Name and Badge Number<span
style='mso-spacerun:yes'> </span><span
style='mso-spacerun:yes'></span>Relief Name and Badge Number<span
style='mso-spacerun:yes'> </span><o:p></o:p></span></p>

<p class=MsoHeader dir=LTR style='text-align:justify;direction:ltr;unicode-bidi:
embed'><span lang=EN-US style='mso-bidi-font-size:12.0pt;font-family:Montserrat;
mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi'><span
style='mso-spacerun:yes'> </span><o:p></o:p></span></p>

<p class=MsoHeader dir=LTR style='margin-left:18.0pt;text-align:justify;
direction:ltr;unicode-bidi:embed'><span lang=EN-US style='mso-bidi-font-size:
12.0pt;font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal dir=LTR style='margin-bottom:0cm;margin-bottom:.0001pt;
text-align:left;line-height:normal;mso-layout-grid-align:none;text-autospace:
none;direction:ltr;unicode-bidi:embed'><span lang=EN-US style='mso-bidi-font-size:
12.0pt;font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
mso-bidi-theme-font:major-bidi'><span style='mso-spacerun:yes'> </span>Date
and Time ---------------<span
style='mso-spacerun:yes'></span>Date and
Time -------------------</span><span lang=EN-US style='font-size:9.0pt;
font-family:Montserrat;mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:
major-bidi'><o:p></o:p></span></p>

<p class=MsoNormal dir=LTR style='margin-bottom:0cm;margin-bottom:.0001pt;
text-align:left;line-height:normal;mso-layout-grid-align:none;text-autospace:
none;direction:ltr;unicode-bidi:embed'><span lang=EN-US style='font-size:9.0pt;
font-family:Montserrat;mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:
major-bidi'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal dir=LTR style='margin-bottom:0cm;margin-bottom:.0001pt;
text-align:left;line-height:normal;mso-layout-grid-align:none;text-autospace:
none;direction:ltr;unicode-bidi:embed'><span lang=EN-US style='font-size:9.0pt;
font-family:Montserrat;mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:
major-bidi'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal dir=LTR style='margin-bottom:0cm;margin-bottom:.0001pt;
text-align:left;line-height:normal;mso-layout-grid-align:none;text-autospace:
none;direction:ltr;unicode-bidi:embed'><span lang=EN-US style='font-size:9.0pt;
font-family:Montserrat;mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:
major-bidi'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal dir=LTR style='text-align:left;line-height:normal;
direction:ltr;unicode-bidi:embed'><span lang=EN-US style='mso-bidi-font-size:
12.0pt;font-family:"Montserrat SemiBold";mso-bidi-font-family:"Times New Roman";
mso-bidi-theme-font:major-bidi'>NON-MEDICAL STAFF:<o:p></o:p></span></p>

<p class=MsoHeader dir=LTR style='margin-left:36.0pt;text-align:justify;
direction:ltr;unicode-bidi:embed'><span lang=EN-US style='mso-bidi-font-size:
12.0pt;font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></p>

<p class=MsoHeader dir=LTR style='text-align:left;line-height:150%;direction:
ltr;unicode-bidi:embed'><span lang=EN-US style='mso-bidi-font-size:12.0pt;
line-height:150%;font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
mso-bidi-theme-font:major-bidi'>Situation and main Interventions needed: _______________________________________________________________________________________<o:p></o:p></span></p>

<p class=MsoHeader dir=LTR style='text-align:left;line-height:150%;direction:
ltr;unicode-bidi:embed'><span lang=EN-US style='mso-bidi-font-size:12.0pt;
line-height:150%;font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
mso-bidi-theme-font:major-bidi'>___________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________<o:p></o:p></span></p>

<p class=MsoHeader dir=LTR style='text-align:justify;direction:ltr;unicode-bidi:
embed'><span lang=EN-US style='mso-bidi-font-size:12.0pt;font-family:Montserrat;
mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></p>

<p class=MsoHeader dir=LTR style='margin-left:36.0pt;text-align:justify;
text-indent:-18.0pt;mso-list:l0 level1 lfo1;tab-stops:list 36.0pt;direction:
ltr;unicode-bidi:embed'><span lang=EN-US style='mso-bidi-font-size:
12.0pt;font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:
Symbol'><span style='mso-list:Ignore'><span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><span dir=LTR></span><span lang=EN-US
style='mso-bidi-font-size:12.0pt;font-family:Montserrat;mso-bidi-font-family:
"Times New Roman";mso-bidi-theme-font:major-bidi'>Please complete form for
patients requiring coverage. Make sure your medical record is complete and in
order.<o:p></o:p></span></p>

<p class=MsoHeader dir=LTR style='margin-left:18.0pt;text-align:justify;
direction:ltr;unicode-bidi:embed'><span lang=EN-US style='mso-bidi-font-size:
12.0pt;font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></p>

<p class=MsoHeader dir=LTR style='text-align:justify;direction:ltr;unicode-bidi:
embed'><span lang=EN-US style='mso-bidi-font-size:12.0pt;font-family:Montserrat;
mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:major-bidi'><span
style='mso-spacerun:yes'>
</span><o:p></o:p></span></p>

<p class=MsoHeader dir=LTR style='margin-left:18.0pt;text-align:justify;
direction:ltr;unicode-bidi:embed'><span lang=EN-US style='mso-bidi-font-size:
12.0pt;font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
mso-bidi-theme-font:major-bidi'>Caregiver Name and Badge Number<span
style='mso-spacerun:yes'></span><span
style='mso-spacerun:yes'></span><span
style='mso-spacerun:yes'></span>Relief Name and Badge Number<span
style='mso-spacerun:yes'> </span><o:p></o:p></span></p>

<p class=MsoHeader dir=LTR style='margin-left:18.0pt;text-align:justify;
direction:ltr;unicode-bidi:embed'><span lang=EN-US style='mso-bidi-font-size:
12.0pt;font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
mso-bidi-theme-font:major-bidi'><span
style='mso-spacerun:yes'> </span><o:p></o:p></span></p>

<p class=MsoHeader dir=LTR style='margin-left:18.0pt;text-align:justify;
direction:ltr;unicode-bidi:embed'><span lang=EN-US style='mso-bidi-font-size:
12.0pt;font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
mso-bidi-theme-font:major-bidi'>______________________________<span
style='mso-spacerun:yes'> </span><span
style='mso-spacerun:yes'></span><span
style='mso-spacerun:yes'></span><span
style='mso-spacerun:yes'></span>__________________________________<o:p></o:p></span></p>

<p class=MsoHeader dir=LTR style='margin-left:18.0pt;text-align:justify;
direction:ltr;unicode-bidi:embed'><span lang=EN-US style='mso-bidi-font-size:
12.0pt;font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></p>

<p class=MsoHeader dir=LTR style='margin-left:18.0pt;text-align:justify;
direction:ltr;unicode-bidi:embed'><span lang=EN-US style='mso-bidi-font-size:
12.0pt;font-family:Montserrat;mso-bidi-font-family:"Times New Roman";
mso-bidi-theme-font:major-bidi'>Date and Time _____________________<span
style='mso-spacerun:yes'> </span><span
style='mso-spacerun:yes'></span><span
style='mso-spacerun:yes'></span>Date and Time _____________________<o:p></o:p></span></p>

</div>
<div class="row d-flex justify-content-end mt-3">
                <button type="submit" id="printPageButton" class="btn btn-primary">Submit</button>
                </div>
</body>

</html>
