<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<title>F043-THHC Daily Nursing Visit Recordreassessment| @yield('title')</title>

<style>

	{mso-displayed-decimal-separator:"\.";
	mso-displayed-thousand-separator:"\,";}
.font57763
	{color:windowtext;
	font-size:8.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Montserrat;
	mso-generic-font-family:auto;
	mso-font-charset:0;}
.font67763
	{color:windowtext;
	font-size:8.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Symbol, serif;
	mso-font-charset:2;}
.xl157763
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Arial;
	mso-generic-font-family:auto;
	mso-font-charset:178;
	mso-number-format:General;
	text-align:general;
	vertical-align:bottom;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl657763
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Arial;
	mso-generic-font-family:auto;
	mso-font-charset:178;
	mso-number-format:General;
	text-align:general;
	vertical-align:middle;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl667763
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Times New Roman", serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:bottom;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl677763
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Times New Roman", serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:bottom;
	border-top:none;
	border-right:.5pt solid windowtext;
	border-bottom:none;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl687763
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Times New Roman", serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:bottom;
	border-top:none;
	border-right:none;
	border-bottom:none;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl697763
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:bottom;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl707763
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Arial;
	mso-generic-font-family:auto;
	mso-font-charset:178;
	mso-number-format:General;
	text-align:center;
	vertical-align:bottom;
	border:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl717763
	{padding:0px;
	mso-ignore:padding;
	color:blue;
	font-size:10.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:"Times New Roman", serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:bottom;
	border:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl727763
	{padding:0px;
	mso-ignore:padding;
	color:blue;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Times New Roman", serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:bottom;
	border:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl737763
	{padding:0px;
	mso-ignore:padding;
	color:blue;
	font-size:10.0pt;
	font-weight:700;
	font-style:italic;
	text-decoration:none;
	font-family:"Times New Roman", serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:bottom;
	border:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl747763
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Arial;
	mso-generic-font-family:auto;
	mso-font-charset:178;
	mso-number-format:General;
	text-align:general;
	vertical-align:bottom;
	border:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl757763
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Montserrat SemiBold";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:bottom;
	border-top:none;
	border-right:none;
	border-bottom:none;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl767763
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Montserrat SemiBold";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:bottom;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl777763
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Montserrat SemiBold";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:bottom;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl787763
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Montserrat SemiBold";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:bottom;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl797763
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Montserrat SemiBold";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:bottom;
	border-top:none;
	border-right:.5pt solid windowtext;
	border-bottom:none;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl807763
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Montserrat SemiBold";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:bottom;
	border-top:none;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl817763
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Montserrat SemiBold";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:bottom;
	border-top:none;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl827763
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Montserrat SemiBold";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:bottom;
	border-top:none;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl837763
	{padding:0px;
	mso-ignore:padding;
	color:blue;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Montserrat;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:bottom;
	border:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl847763
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Montserrat;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:middle;
	border-top:.5pt solid red;
	border-right:none;
	border-bottom:.5pt solid red;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl857763
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Montserrat;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:middle;
	border-top:.5pt solid red;
	border-right:.5pt solid red;
	border-bottom:.5pt solid red;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl867763
	{padding:0px;
	mso-ignore:padding;
	color:white;
	font-size:10.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Montserrat;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:bottom;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	background:#3AC2BA;
	mso-pattern:black none;
	white-space:nowrap;}
.xl877763
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:8.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Montserrat;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:bottom;
	border:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl887763
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:8.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Montserrat;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:bottom;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:none;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl897763
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:8.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Montserrat;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:bottom;
	border-top:none;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl907763
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:8.0pt;
	font-weight:700;
	font-style:italic;
	text-decoration:none;
	font-family:Montserrat;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:bottom;
	border-top:none;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl917763
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:8.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Montserrat;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:bottom;
	border-top:none;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl927763
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:8.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Montserrat;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:bottom;
	border-top:none;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl937763
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:8.0pt;
	font-weight:700;
	font-style:italic;
	text-decoration:none;
	font-family:Montserrat;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:bottom;
	border-top:none;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl947763
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:8.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Montserrat;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:bottom;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:none;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl957763
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:8.0pt;
	font-weight:700;
	font-style:italic;
	text-decoration:none;
	font-family:Montserrat;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:bottom;
	border:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl967763
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:8.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Montserrat;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:bottom;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl977763
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Montserrat;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:bottom;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl987763
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Montserrat;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:bottom;
	border:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl997763
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:8.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Montserrat;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:bottom;
	border:.5pt solid red;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl1007763
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:8.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Montserrat;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:bottom;
	border-top:none;
	border-right:.5pt solid windowtext;
	border-bottom:none;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl1017763
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:8.0pt;
	font-weight:700;
	font-style:italic;
	text-decoration:none;
	font-family:Montserrat;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:bottom;
	border-top:none;
	border-right:.5pt solid windowtext;
	border-bottom:none;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl1027763
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:8.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Montserrat;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:bottom;
	border-top:none;
	border-right:.5pt solid windowtext;
	border-bottom:none;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl1037763
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:8.0pt;
	font-weight:700;
	font-style:italic;
	text-decoration:none;
	font-family:Montserrat;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:bottom;
	border:.5pt solid red;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl1047763
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Montserrat;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:bottom;
	border-top:none;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl1057763
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:8.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Montserrat;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:bottom;
	border-top:none;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl1067763
	{padding:0px;
	mso-ignore:padding;
	color:blue;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Montserrat;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl1077763
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:8.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Montserrat;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl1087763
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:8.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Montserrat;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl1097763
	{padding:0px;
	mso-ignore:padding;
	color:blue;
	font-size:8.0pt;
	font-weight:700;
	font-style:italic;
	text-decoration:none;
	font-family:Montserrat;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl1107763
	{padding:0px;
	mso-ignore:padding;
	color:blue;
	font-size:10.0pt;
	font-weight:700;
	font-style:italic;
	text-decoration:none;
	font-family:Montserrat;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl1117763
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:8.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Montserrat;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl1127763
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:9.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Montserrat;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:middle;
	border:.5pt solid red;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl1137763
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Montserrat;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:middle;
	border-top:.5pt solid red;
	border-right:.5pt solid red;
	border-bottom:none;
	border-left:.5pt solid red;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl1147763
	{padding:0px;
	mso-ignore:padding;
	color:blue;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Montserrat;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:middle;
	border-top:.5pt solid red;
	border-right:none;
	border-bottom:none;
	border-left:.5pt solid red;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl1157763
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Montserrat;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:none;
	border-left:.5pt solid red;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl1167763
	{padding:0px;
	mso-ignore:padding;
	color:blue;
	font-size:10.0pt;
	font-weight:700;
	font-style:italic;
	text-decoration:none;
	font-family:Montserrat;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl1177763
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Montserrat;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:middle;
	border-top:.5pt solid red;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid red;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl1187763
	{padding:0px;
	mso-ignore:padding;
	color:blue;
	font-size:10.0pt;
	font-weight:700;
	font-style:italic;
	text-decoration:none;
	font-family:Montserrat;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:none;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl1197763
	{padding:0px;
	mso-ignore:padding;
	color:blue;
	font-size:10.0pt;
	font-weight:700;
	font-style:italic;
	text-decoration:none;
	font-family:Montserrat;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid red;
	border-right:none;
	border-bottom:none;
	border-left:.5pt solid red;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl1207763
	{padding:0px;
	mso-ignore:padding;
	color:white;
	font-size:8.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Montserrat;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:bottom;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	background:#3AC2BA;
	mso-pattern:black none;
	white-space:nowrap;}
.xl1217763
	{padding:0px;
	mso-ignore:padding;
	color:white;
	font-size:7.5pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Montserrat;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:bottom;
	border-top:none;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	background:#3AC2BA;
	mso-pattern:black none;
	white-space:nowrap;}
.xl1227763
	{padding:0px;
	mso-ignore:padding;
	color:white;
	font-size:10.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Montserrat;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:none;
	border-left:.5pt solid red;
	background:#3AC2BA;
	mso-pattern:black none;
	white-space:nowrap;}
.xl1237763
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Montserrat;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:bottom;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl1247763
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Montserrat;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:bottom;
	border:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl1257763
	{padding:0px;
	mso-ignore:padding;
	color:blue;
	font-size:10.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Montserrat;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:bottom;
	border:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl1267763
	{padding:0px;
	mso-ignore:padding;
	color:blue;
	font-size:10.0pt;
	font-weight:400;
	font-style:italic;
	text-decoration:none;
	font-family:Montserrat;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:0%;
	text-align:general;
	vertical-align:bottom;
	border-top:none;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl1277763
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Montserrat;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:bottom;
	border-top:none;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl1287763
	{padding:0px;
	mso-ignore:padding;
	color:blue;
	font-size:10.0pt;
	font-weight:700;
	font-style:italic;
	text-decoration:none;
	font-family:Montserrat;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:bottom;
	border:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl1297763
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Montserrat;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:bottom;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl1307763
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Montserrat;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:bottom;
	border:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl1317763
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Montserrat;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:bottom;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl1327763
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Montserrat;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:bottom;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:none;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl1337763
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Montserrat;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:bottom;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:none;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl1347763
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Montserrat;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:middle;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl1357763
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Montserrat;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl1367763
	{padding:0px;
	mso-ignore:padding;
	color:blue;
	font-size:10.0pt;
	font-weight:400;
	font-style:italic;
	text-decoration:none;
	font-family:"Montserrat SemiBold";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:bottom;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl1377763
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:8.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Montserrat;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:bottom;
	border-top:none;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl1387763
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Montserrat;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid red;
	border-right:.5pt solid red;
	border-bottom:none;
	border-left:.5pt solid red;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl1397763
	{padding:0px;
	mso-ignore:padding;
	color:white;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Montserrat SemiBold";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:bottom;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	background:#3AC2BA;
	mso-pattern:black none;
	white-space:nowrap;}
.xl1407763
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Montserrat;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:none;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl1417763
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Montserrat;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid red;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl1427763
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Montserrat;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl1437763
	{padding:0px;
	mso-ignore:padding;
	color:white;
	font-size:8.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Montserrat;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	background:#3AC2BA;
	mso-pattern:black none;
	white-space:nowrap;}
.xl1447763
	{padding:0px;
	mso-ignore:padding;
	color:white;
	font-size:8.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Montserrat;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	background:#3AC2BA;
	mso-pattern:black none;
	white-space:nowrap;}
.xl1457763
	{padding:0px;
	mso-ignore:padding;
	color:white;
	font-size:8.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Montserrat;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid red;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	background:#3AC2BA;
	mso-pattern:black none;
	white-space:nowrap;}
.xl1467763
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:9.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Montserrat;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:none;
	border-left:.5pt solid red;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl1477763
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:9.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Montserrat;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:none;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl1487763
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:9.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Montserrat;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid red;
	border-bottom:none;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl1497763
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Montserrat;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid red;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl1507763
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Montserrat;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid red;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl1517763
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Montserrat;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:none;
	border-left:.5pt solid red;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl1527763
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Montserrat;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid red;
	border-bottom:none;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl1537763
	{padding:0px;
	mso-ignore:padding;
	color:white;
	font-size:10.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Montserrat;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	background:#3AC2BA;
	mso-pattern:black none;
	white-space:nowrap;}
.xl1547763
	{padding:0px;
	mso-ignore:padding;
	color:white;
	font-size:10.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Montserrat;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:middle;
	border-top:none;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	background:#3AC2BA;
	mso-pattern:black none;
	white-space:nowrap;}
.xl1557763
	{padding:0px;
	mso-ignore:padding;
	color:white;
	font-size:10.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Montserrat;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	background:#3AC2BA;
	mso-pattern:black none;
	white-space:nowrap;}
.xl1567763
	{padding:0px;
	mso-ignore:padding;
	color:white;
	font-size:10.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Montserrat;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:bottom;
	border-top:none;
	border-right:.5pt solid red;
	border-bottom:none;
	border-left:.5pt solid red;
	background:#3AC2BA;
	mso-pattern:black none;
	white-space:nowrap;}
.xl1577763
	{padding:0px;
	mso-ignore:padding;
	color:white;
	font-size:10.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Montserrat;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:bottom;
	border-top:none;
	border-right:none;
	border-bottom:none;
	border-left:.5pt solid red;
	background:#3AC2BA;
	mso-pattern:black none;
	white-space:nowrap;}
.xl1587763
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:8.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Montserrat;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:bottom;
	border-top:.5pt solid red;
	border-right:.5pt solid red;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl1597763
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:8.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Montserrat;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:bottom;
	border-top:.5pt solid red;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid red;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl1607763
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:8.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Montserrat;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:bottom;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid red;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl1617763
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:8.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Montserrat;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:bottom;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid red;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl1627763
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:8.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Montserrat;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border:.5pt solid red;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl1637763
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:8.0pt;
	font-weight:700;
	font-style:italic;
	text-decoration:none;
	font-family:Montserrat;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:bottom;
	border:.5pt solid red;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl1647763
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Montserrat;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl1657763
	{padding:0px;
	mso-ignore:padding;
	color:blue;
	font-size:8.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Montserrat;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:none;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl1667763
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Montserrat SemiBold";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:bottom;
	border-top:.5pt solid red;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid red;
	border-left:.5pt solid red;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl1677763
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Montserrat SemiBold";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:bottom;
	border-top:.5pt solid red;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid red;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl1687763
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:9.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Montserrat SemiBold";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:"General Date";
	text-align:center;
	vertical-align:bottom;
	border:.5pt solid red;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl1697763
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:"Times New Roman", serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:bottom;
	border:.5pt solid red;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl1707763
	{padding:0px;
	mso-ignore:padding;
	color:white;
	font-size:10.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Montserrat;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid red;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	background:#3AC2BA;
	mso-pattern:black none;
	white-space:nowrap;}
.xl1717763
	{padding:0px;
	mso-ignore:padding;
	color:white;
	font-size:10.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Montserrat;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid red;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid red;
	background:#3AC2BA;
	mso-pattern:black none;
	white-space:nowrap;}
.xl1727763
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:700;
	font-style:italic;
	text-decoration:none;
	font-family:Montserrat;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:middle;
	border-top:.5pt solid red;
	border-right:.5pt solid red;
	border-bottom:none;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl1737763
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:700;
	font-style:italic;
	text-decoration:none;
	font-family:Montserrat;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:middle;
	border-top:.5pt solid red;
	border-right:.5pt solid red;
	border-bottom:none;
	border-left:.5pt solid red;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl1747763
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Montserrat;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border:.5pt solid windowtext;
	background:#D9D9D9;
	mso-pattern:black none;
	white-space:nowrap;}
.xl1757763
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:8.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Montserrat;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:bottom;
	border:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl1767763
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Montserrat;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:bottom;
	border:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl1777763
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:8.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Montserrat;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:bottom;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl1787763
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:8.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Montserrat;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:bottom;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:none;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl1797763
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Montserrat;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:bottom;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl1807763
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Montserrat;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:bottom;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl1817763
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Montserrat;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:bottom;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl1827763
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:8.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Montserrat;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:bottom;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:none;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl1837763
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:8.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Montserrat;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:bottom;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:none;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl1847763
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:8.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Montserrat;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:bottom;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:none;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl1857763
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:8.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Montserrat;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border:.5pt solid windowtext;
	background:#D9D9D9;
	mso-pattern:black none;
	white-space:nowrap;}
.xl1867763
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Montserrat;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:bottom;
	border-top:none;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl1877763
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Times New Roman", serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:bottom;
	border:.5pt solid red;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl1887763
	{padding:0px;
	mso-ignore:padding;
	color:white;
	font-size:9.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Montserrat SemiBold";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:bottom;
	background:#3AC2BA;
	mso-pattern:black none;
	white-space:nowrap;}
.xl1897763
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Montserrat SemiBold";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl1907763
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Montserrat SemiBold";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl1917763
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:"Times New Roman", serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:bottom;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl1927763
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:"Times New Roman", serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:bottom;
	border-top:.5pt solid red;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid red;
	border-left:.5pt solid red;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl1937763
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:"Times New Roman", serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:bottom;
	border-top:.5pt solid red;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid red;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl1947763
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:"Times New Roman", serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:bottom;
	border-top:.5pt solid red;
	border-right:.5pt solid red;
	border-bottom:.5pt solid red;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl1957763
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:12.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Montserrat;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:bottom;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl1967763
	{padding:0px;
	mso-ignore:padding;
	color:blue;
	font-size:10.0pt;
	font-weight:400;
	font-style:italic;
	text-decoration:none;
	font-family:Montserrat;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:bottom;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl1977763
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:8.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Montserrat;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:bottom;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:none;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl1987763
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Times New Roman", serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:bottom;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:none;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl1997763
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Times New Roman", serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:bottom;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:none;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl2007763
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Times New Roman", serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:bottom;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:none;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl2017763
	{padding:0px;
	mso-ignore:padding;
	color:white;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Montserrat SemiBold";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:bottom;
	background:#3AC2BA;
	mso-pattern:black none;
	white-space:nowrap;}
.xl2027763
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Montserrat SemiBold";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:bottom;
	border-top:none;
	border-right:none;
	border-bottom:none;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl2037763
	{padding:0px;
	mso-ignore:padding;
	color:white;
	font-size:10.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Montserrat;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:bottom;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid red;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	background:#3AC2BA;
	mso-pattern:black none;
	white-space:nowrap;}
.xl2047763
	{padding:0px;
	mso-ignore:padding;
	color:white;
	font-size:10.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Montserrat;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:bottom;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid red;
	background:#3AC2BA;
	mso-pattern:black none;
	white-space:nowrap;}
.xl2057763
	{padding:0px;
	mso-ignore:padding;
	color:blue;
	font-size:10.0pt;
	font-weight:400;
	font-style:italic;
	text-decoration:none;
	font-family:Montserrat;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl2067763
	{padding:0px;
	mso-ignore:padding;
	color:blue;
	font-size:10.0pt;
	font-weight:400;
	font-style:italic;
	text-decoration:none;
	font-family:Montserrat;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl2077763
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:9.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Montserrat;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl2087763
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:9.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Montserrat;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl2097763
	{padding:0px;
	mso-ignore:padding;
	color:white;
	font-size:10.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Montserrat;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid red;
	border-bottom:none;
	border-left:.5pt solid red;
	background:#3AC2BA;
	mso-pattern:black none;
	white-space:nowrap;}
.xl2107763
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Montserrat;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid red;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl2117763
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Montserrat;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl2127763
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Montserrat;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:none;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl2137763
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Montserrat;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:none;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl2147763
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:700;
	font-style:italic;
	text-decoration:none;
	font-family:Montserrat;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid red;
	border-right:none;
	border-bottom:none;
	border-left:.5pt solid red;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl2157763
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:700;
	font-style:italic;
	text-decoration:none;
	font-family:Montserrat;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid red;
	border-right:.5pt solid red;
	border-bottom:none;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl2167763
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:8.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Montserrat;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:none;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl2177763
	{padding:0px;
	mso-ignore:padding;
	color:blue;
	font-size:10.0pt;
	font-weight:400;
	font-style:italic;
	text-decoration:none;
	font-family:Montserrat;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl2187763
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:8.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Montserrat;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl2197763
	{padding:0px;
	mso-ignore:padding;
	color:blue;
	font-size:10.0pt;
	font-weight:700;
	font-style:italic;
	text-decoration:none;
	font-family:Montserrat;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl2207763
	{padding:0px;
	mso-ignore:padding;
	color:blue;
	font-size:10.0pt;
	font-weight:700;
	font-style:italic;
	text-decoration:none;
	font-family:Montserrat;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl2217763
	{padding:0px;
	mso-ignore:padding;
	color:blue;
	font-size:10.0pt;
	font-weight:700;
	font-style:italic;
	text-decoration:none;
	font-family:Montserrat;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl2227763
	{padding:0px;
	mso-ignore:padding;
	color:blue;
	font-size:10.0pt;
	font-weight:400;
	font-style:italic;
	text-decoration:none;
	font-family:"Times New Roman", serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:bottom;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:none;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl2237763
	{padding:0px;
	mso-ignore:padding;
	color:blue;
	font-size:10.0pt;
	font-weight:400;
	font-style:italic;
	text-decoration:none;
	font-family:"Times New Roman", serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:bottom;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl2247763
	{padding:0px;
	mso-ignore:padding;
	color:blue;
	font-size:10.0pt;
	font-weight:400;
	font-style:italic;
	text-decoration:none;
	font-family:"Times New Roman", serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:bottom;
	border-top:none;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl2257763
	{padding:0px;
	mso-ignore:padding;
	color:blue;
	font-size:10.0pt;
	font-weight:700;
	font-style:italic;
	text-decoration:none;
	font-family:Montserrat;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:none;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl2267763
	{padding:0px;
	mso-ignore:padding;
	color:white;
	font-size:10.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Montserrat;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	background:#3AC2BA;
	mso-pattern:black none;
	white-space:nowrap;}
.xl2277763
	{padding:0px;
	mso-ignore:padding;
	color:blue;
	font-size:8.0pt;
	font-weight:700;
	font-style:italic;
	text-decoration:none;
	font-family:Montserrat;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:none;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl2287763
	{padding:0px;
	mso-ignore:padding;
	color:white;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Montserrat SemiBold";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:bottom;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	background:#3AC2BA;
	mso-pattern:black none;
	white-space:nowrap;}
.xl2297763
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Montserrat;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:bottom;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl2307763
	{padding:0px;
	mso-ignore:padding;
	color:blue;
	font-size:10.0pt;
	font-weight:700;
	font-style:italic;
	text-decoration:none;
	font-family:"Times New Roman", serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:bottom;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl2317763
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:400;
	font-style:italic;
	text-decoration:none;
	font-family:Montserrat;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:bottom;
	border-top:none;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl2327763
	{padding:0px;
	mso-ignore:padding;
	color:blue;
	font-size:10.0pt;
	font-weight:400;
	font-style:italic;
	text-decoration:none;
	font-family:Montserrat;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:bottom;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl2337763
	{padding:0px;
	mso-ignore:padding;
	color:blue;
	font-size:10.0pt;
	font-weight:400;
	font-style:italic;
	text-decoration:none;
	font-family:"Times New Roman", serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:bottom;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl2347763
	{padding:0px;
	mso-ignore:padding;
	color:blue;
	font-size:10.0pt;
	font-weight:400;
	font-style:italic;
	text-decoration:none;
	font-family:Montserrat;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:bottom;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl2357763
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:"Times New Roman", serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:bottom;
	border-top:none;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl2367763
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Montserrat;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:bottom;
	border-top:none;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl2377763
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:700;
	font-style:italic;
	text-decoration:none;
	font-family:Montserrat;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:bottom;
	border-top:none;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl2387763
	{padding:0px;
	mso-ignore:padding;
	color:blue;
	font-size:10.0pt;
	font-weight:700;
	font-style:italic;
	text-decoration:none;
	font-family:"Times New Roman", serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:bottom;
	border-top:none;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl2397763
	{padding:0px;
	mso-ignore:padding;
	color:white;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Montserrat SemiBold";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:bottom;
	border:.5pt solid windowtext;
	background:#3AC2BA;
	mso-pattern:black none;
	white-space:nowrap;}
.xl2407763
	{padding:0px;
	mso-ignore:padding;
	color:blue;
	font-size:10.0pt;
	font-weight:400;
	font-style:italic;
	text-decoration:none;
	font-family:Montserrat;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:bottom;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl2417763
	{padding:0px;
	mso-ignore:padding;
	color:blue;
	font-size:10.0pt;
	font-weight:400;
	font-style:italic;
	text-decoration:none;
	font-family:"Montserrat SemiBold";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:"Short Date";
	text-align:left;
	vertical-align:bottom;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl2427763
	{padding:0px;
	mso-ignore:padding;
	color:blue;
	font-size:10.0pt;
	font-weight:400;
	font-style:italic;
	text-decoration:none;
	font-family:"Montserrat SemiBold";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:bottom;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl2437763
	{padding:0px;
	mso-ignore:padding;
	color:blue;
	font-size:10.0pt;
	font-weight:700;
	font-style:italic;
	text-decoration:none;
	font-family:Montserrat;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:bottom;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl2447763
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Montserrat SemiBold";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:bottom;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl2457763
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Montserrat;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:bottom;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl2467763
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Montserrat;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:bottom;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl2477763
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Montserrat;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:none;
	border-left:.5pt solid windowtext;
	background:#D9D9D9;
	mso-pattern:black none;
	white-space:nowrap;}
.xl2487763
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Montserrat;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:none;
	border-left:none;
	background:#D9D9D9;
	mso-pattern:black none;
	white-space:nowrap;}
.xl2497763
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Montserrat;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:none;
	border-left:none;
	background:#D9D9D9;
	mso-pattern:black none;
	white-space:nowrap;}
.xl2507763
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Montserrat;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:none;
	border-bottom:none;
	border-left:.5pt solid windowtext;
	background:#D9D9D9;
	mso-pattern:black none;
	white-space:nowrap;}
.xl2517763
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Montserrat;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	background:#D9D9D9;
	mso-pattern:black none;
	white-space:nowrap;}
.xl2527763
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Montserrat;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:.5pt solid windowtext;
	border-bottom:none;
	border-left:none;
	background:#D9D9D9;
	mso-pattern:black none;
	white-space:nowrap;}
.xl2537763
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Montserrat;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	background:#D9D9D9;
	mso-pattern:black none;
	white-space:nowrap;}
.xl2547763
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Montserrat;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	background:#D9D9D9;
	mso-pattern:black none;
	white-space:nowrap;}
.xl2557763
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Montserrat;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	background:#D9D9D9;
	mso-pattern:black none;
	white-space:nowrap;}
.xl2567763
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Montserrat;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:bottom;
	border-top:none;
	border-right:none;
	border-bottom:none;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl2577763
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Montserrat;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:bottom;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl2587763
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Montserrat;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:bottom;
	border-top:none;
	border-right:.5pt solid windowtext;
	border-bottom:none;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl2597763
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:9.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Montserrat;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:bottom;
	border:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl2607763
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Montserrat;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl2617763
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:9.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Montserrat;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border:.5pt solid windowtext;
	background:#D9D9D9;
	mso-pattern:black none;
	white-space:nowrap;}
.xl2627763
	{padding:0px;
	mso-ignore:padding;
	color:white;
	font-size:10.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Montserrat;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	background:#3AC2BA;
	mso-pattern:black none;
	white-space:nowrap;}
.xl2637763
	{padding:0px;
	mso-ignore:padding;
	color:white;
	font-size:10.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Montserrat;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	background:#3AC2BA;
	mso-pattern:black none;
	white-space:nowrap;}
.xl2647763
	{padding:0px;
	mso-ignore:padding;
	color:white;
	font-size:9.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Montserrat;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	background:#3AC2BA;
	mso-pattern:black none;
	white-space:nowrap;}
.xl2657763
	{padding:0px;
	mso-ignore:padding;
	color:white;
	font-size:9.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Montserrat;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	background:#3AC2BA;
	mso-pattern:black none;
	white-space:nowrap;}
.xl2667763
	{padding:0px;
	mso-ignore:padding;
	color:white;
	font-size:9.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Montserrat;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:none;
	border-left:none;
	background:#3AC2BA;
	mso-pattern:black none;
	white-space:nowrap;}
.xl2677763
	{padding:0px;
	mso-ignore:padding;
	color:blue;
	font-size:10.0pt;
	font-weight:400;
	font-style:italic;
	text-decoration:none;
	font-family:Montserrat;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:none;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl2687763
	{padding:0px;
	mso-ignore:padding;
	color:white;
	font-size:10.0pt;
	font-weight:700;
	font-style:italic;
	text-decoration:none;
	font-family:"Times New Roman", serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:bottom;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	background:#3AC2BA;
	mso-pattern:black none;
	white-space:nowrap;}

</style>
@yield('styles')

</head>

<body>

<!--The following information was generated by Microsoft Excel's Publish as Web
Page wizard.-->
<!--If the same item is republished from Excel, all information between the DIV
tags will be replaced.-->
<!----------------------------->
<!--START OF OUTPUT FROM EXCEL PUBLISH AS WEB PAGE WIZARD -->
<!----------------------------->

<div id="F043-THHC Daily Nursing Visit Recordreassessment_7763" align=center
x:publishsource="Excel">

<table border=0 cellpadding=0 cellspacing=0 width=1192 style='border-collapse:
 collapse;table-layout:fixed;width:891pt'>
 <col width=23 style='mso-width-source:userset;mso-width-alt:824;width:17pt'>
 <col width=38 style='mso-width-source:userset;mso-width-alt:1336;width:28pt'>
 <col width=46 style='mso-width-source:userset;mso-width-alt:1649;width:35pt'>
 <col width=27 style='mso-width-source:userset;mso-width-alt:967;width:20pt'>
 <col width=49 style='mso-width-source:userset;mso-width-alt:1735;width:37pt'>
 <col width=33 style='mso-width-source:userset;mso-width-alt:1166;width:25pt'>
 <col width=27 style='mso-width-source:userset;mso-width-alt:967;width:20pt'>
 <col width=66 style='mso-width-source:userset;mso-width-alt:2332;width:49pt'>
 <col width=42 style='mso-width-source:userset;mso-width-alt:1479;width:31pt'>
 <col width=50 style='mso-width-source:userset;mso-width-alt:1792;width:38pt'>
 <col width=42 style='mso-width-source:userset;mso-width-alt:1479;width:31pt'>
 <col width=38 style='mso-width-source:userset;mso-width-alt:1336;width:28pt'>
 <col width=32 style='mso-width-source:userset;mso-width-alt:1137;width:24pt'>
 <col width=39 style='mso-width-source:userset;mso-width-alt:1393;width:29pt'>
 <col width=26 style='mso-width-source:userset;mso-width-alt:910;width:19pt'>
 <col width=20 style='mso-width-source:userset;mso-width-alt:711;width:15pt'>
 <col width=26 style='mso-width-source:userset;mso-width-alt:910;width:19pt'>
 <col width=27 style='mso-width-source:userset;mso-width-alt:967;width:20pt'>
 <col width=38 style='mso-width-source:userset;mso-width-alt:1336;width:28pt'>
 <col width=29 style='mso-width-source:userset;mso-width-alt:1024;width:22pt'>
 <col width=56 style='mso-width-source:userset;mso-width-alt:1991;width:42pt'>
 <col width=34 style='mso-width-source:userset;mso-width-alt:1223;width:26pt'>
 <col width=64 span=6 style='width:48pt'>
 <tr height=70 style='mso-height-source:userset;height:52.95pt'>
  <td colspan=21 height=70 width=774 style='height:52.95pt;width:577pt'
  align=left valign=top><span style='mso-ignore:vglayout;
  position:absolute;z-index:1;margin-left:1px;margin-top:14px;width:134px;
  height:49px'><img width=134 height=49
  src="F043-THHC%20Daily%20Nursing%20Visit%20Recordreassessment.files/F043-THHC%20Daily%20Nursing%20Visit%20Recordreassessment_7763_image002.png"
  v:shapes="Picture_x0020_3"></span><![endif]><span style='mso-ignore:vglayout2'>
  <table cellpadding=0 cellspacing=0>
   <tr>
    <td colspan=21 height=70 class=xl1897763 width=774 style='height:52.95pt;
    width:577pt'>Daily Nursing Visit Record/Reassessment</td>
   </tr>
  </table>
  </span></td>
  <td class=xl157763 width=34 style='width:26pt'></td>
  <td class=xl157763 width=64 style='width:48pt'></td>
  <td class=xl157763 width=64 style='width:48pt'></td>
  <td class=xl157763 width=64 style='width:48pt'></td>
  <td class=xl157763 width=64 style='width:48pt'></td>
  <td class=xl157763 width=64 style='width:48pt'></td>
  <td class=xl157763 width=64 style='width:48pt'></td>
 </tr>
 <tr height=18 style='height:13.2pt'>
  <td height=18 class=xl667763 style='height:13.2pt'></td>
  <td class=xl667763></td>
  <td class=xl667763></td>
  <td class=xl667763></td>
  <td colspan=7 class=xl1917763></td>
  <td class=xl667763></td>
  <td colspan=9 class=xl1987763 style='border-right:.5pt solid black'>&nbsp;</td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
 </tr>
 <tr height=18 style='height:13.2pt'>
  <td height=18 class=xl667763 style='height:13.2pt'></td>
  <td class=xl667763></td>
  <td class=xl667763></td>
  <td class=xl667763></td>
  <td class=xl667763></td>
  <td class=xl667763></td>
  <td class=xl667763></td>
  <td class=xl667763></td>
  <td class=xl667763></td>
  <td class=xl667763></td>
  <td class=xl667763></td>
  <td class=xl667763></td>
  <td colspan=2 class=xl2027763>MRN:</td>
  <td colspan=7 class=xl1877763>&nbsp;</td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
 </tr>
 <tr height=18 style='height:13.2pt'>
  <td colspan=2 height=18 class=xl2017763 style='height:13.2pt'>DATE:</td>
  <td colspan=6 class=xl1667763>&nbsp;</td>
  <td class=xl667763></td>
  <td class=xl667763></td>
  <td class=xl667763></td>
  <td class=xl667763></td>
  <td class=xl757763>&nbsp;</td>
  <td class=xl767763></td>
  <td class=xl667763></td>
  <td class=xl667763></td>
  <td class=xl667763></td>
  <td class=xl667763></td>
  <td class=xl667763></td>
  <td class=xl667763></td>
  <td class=xl677763>&nbsp;</td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
 </tr>
 <tr height=18 style='height:13.2pt'>
  <td height=18 class=xl777763 style='height:13.2pt'></td>
  <td class=xl777763></td>
  <td class=xl787763></td>
  <td class=xl787763></td>
  <td class=xl787763></td>
  <td class=xl767763></td>
  <td class=xl767763></td>
  <td class=xl767763></td>
  <td class=xl667763></td>
  <td class=xl667763></td>
  <td class=xl667763></td>
  <td class=xl667763></td>
  <td colspan=2 class=xl2027763>Name:</td>
  <td colspan=7 class=xl1927763 style='border-right:.5pt solid red;border-bottom:
  .5pt solid red'>&nbsp;</td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
 </tr>
 <tr height=18 style='height:13.2pt'>
  <td colspan=2 height=18 class=xl2017763 style='height:13.2pt'>TIME IN:</td>
  <td colspan=3 class=xl1687763>&nbsp;</td>
  <td class=xl767763></td>
  <td colspan=2 class=xl1887763>TIME OUT:</td>
  <td colspan=3 class=xl1697763>&nbsp;</td>
  <td class=xl667763></td>
  <td class=xl687763>&nbsp;</td>
  <td class=xl667763></td>
  <td class=xl667763></td>
  <td class=xl667763></td>
  <td class=xl667763></td>
  <td class=xl667763></td>
  <td class=xl667763></td>
  <td class=xl667763></td>
  <td class=xl677763>&nbsp;</td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
 </tr>
 <tr height=18 style='height:13.2pt'>
  <td height=18 class=xl667763 style='height:13.2pt'></td>
  <td class=xl667763></td>
  <td class=xl667763></td>
  <td class=xl667763></td>
  <td class=xl667763></td>
  <td class=xl667763></td>
  <td class=xl667763></td>
  <td class=xl667763></td>
  <td class=xl667763></td>
  <td class=xl667763></td>
  <td class=xl667763></td>
  <td class=xl667763></td>
  <td class=xl687763>&nbsp;</td>
  <td class=xl667763></td>
  <td class=xl667763></td>
  <td class=xl667763></td>
  <td class=xl667763></td>
  <td class=xl667763></td>
  <td class=xl667763></td>
  <td class=xl667763></td>
  <td class=xl677763>&nbsp;</td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
 </tr>
 <tr height=18 style='height:13.2pt'>
  <td colspan=2 height=18 class=xl777763 style='height:13.2pt'>NSF =</td>
  <td colspan=5 class=xl777763>No Significant Findings</td>
  <td class=xl767763></td>
  <td class=xl767763></td>
  <td class=xl767763></td>
  <td class=xl767763></td>
  <td class=xl767763></td>
  <td class=xl757763>&nbsp;</td>
  <td class=xl767763></td>
  <td class=xl767763></td>
  <td class=xl767763></td>
  <td class=xl767763></td>
  <td class=xl767763></td>
  <td class=xl767763></td>
  <td class=xl767763></td>
  <td class=xl797763>&nbsp;</td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
 </tr>
 <tr height=18 style='height:13.2pt'>
  <td height=18 class=xl767763 style='height:13.2pt'></td>
  <td class=xl767763></td>
  <td class=xl767763></td>
  <td class=xl767763></td>
  <td class=xl767763></td>
  <td class=xl767763></td>
  <td class=xl767763></td>
  <td class=xl767763></td>
  <td class=xl767763></td>
  <td class=xl767763></td>
  <td class=xl767763></td>
  <td class=xl767763></td>
  <td class=xl807763>&nbsp;</td>
  <td class=xl817763>&nbsp;</td>
  <td class=xl817763>&nbsp;</td>
  <td class=xl817763>&nbsp;</td>
  <td class=xl817763>&nbsp;</td>
  <td class=xl817763>&nbsp;</td>
  <td class=xl817763>&nbsp;</td>
  <td class=xl817763>&nbsp;</td>
  <td class=xl827763>&nbsp;</td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
 </tr>
 <tr height=18 style='mso-height-source:userset;height:14.25pt'>
  <td colspan=3 height=18 class=xl1957763 style='height:14.25pt'>Focus of visit</td>
  <td colspan=18 class=xl1967763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
 </tr>
 <tr class=xl657763 height=18 style='mso-height-source:userset;height:14.25pt'>
  <td colspan=3 height=18 class=xl2097763 style='height:14.25pt'>Visit Type</td>
  <td colspan=2 class=xl2077763 style='border-right:.5pt solid black'>Routine</td>
  <td class=xl847763>&nbsp;</td>
  <td colspan=2 class=xl2077763 style='border-right:.5pt solid black'>Unscheduled</td>
  <td class=xl857763>&nbsp;</td>
  <td colspan=5 class=xl2107763 style='border-right:.5pt solid black;
  border-left:none'>&nbsp;</td>
  <td colspan=2 class=xl1707763 style='border-left:none'>FBS</td>
  <td colspan=2 class=xl1727763>&nbsp;</td>
  <td class=xl1227763 style='border-left:none'>RBS</td>
  <td colspan=2 class=xl2147763 style='border-right:.5pt solid red'>&nbsp;</td>
  <td class=xl657763></td>
  <td class=xl657763></td>
  <td class=xl657763></td>
  <td class=xl657763></td>
  <td class=xl657763></td>
  <td class=xl657763></td>
  <td class=xl657763></td>
 </tr>
 <tr height=18 style='mso-height-source:userset;height:14.25pt'>
  <td height=18 class=xl867763 align=left style='height:14.25pt'>BP</td>
  <td class=xl877763 align=left>Right</td>
  <td class=xl887763 align=left><span style='mso-spacerun:yes'>�</span></td>
  <td class=xl897763 align=left>Left</td>
  <td class=xl907763>&nbsp;</td>
  <td class=xl917763 align=left>Lying</td>
  <td class=xl927763>&nbsp;</td>
  <td class=xl917763 align=left>Sitting</td>
  <td class=xl937763 style='border-left:none'>&nbsp;</td>
  <td class=xl947763 align=left>Standing</td>
  <td class=xl957763 style='border-left:none'>&nbsp;</td>
  <td class=xl1207763 align=left>Temp</td>
  <td colspan=2 class=xl1627763>&nbsp;</td>
  <td class=xl967763 align=left style='border-top:none'>Oral</td>
  <td class=xl977763 style='border-top:none'>&nbsp;</td>
  <td colspan=2 class=xl1587763 style='border-right:.5pt solid black;
  border-left:none'>Axilla<span style='mso-spacerun:yes'>�</span></td>
  <td class=xl987763 style='border-left:none'>&nbsp;</td>
  <td colspan=2 class=xl1587763 style='border-right:.5pt solid black;
  border-left:none'>Other:</td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
 </tr>
 <tr height=18 style='mso-height-source:userset;height:14.25pt'>
  <td colspan=2 height=18 class=xl1567763 style='height:14.25pt'>SPO2</td>
  <td class=xl997763>&nbsp;</td>
  <td class=xl1007763 align=left>RA</td>
  <td class=xl1017763>&nbsp;</td>
  <td class=xl1007763 align=left>O2/l</td>
  <td class=xl1027763>&nbsp;</td>
  <td colspan=2 class=xl2037763 style='border-left:none'>Resp</td>
  <td class=xl1037763>&nbsp;</td>
  <td class=xl907763>&nbsp;</td>
  <td class=xl1217763>PULSE</td>
  <td colspan=2 class=xl1637763>&nbsp;</td>
  <td class=xl917763 align=left>AP</td>
  <td class=xl1047763>&nbsp;</td>
  <td colspan=2 class=xl1607763 style='border-right:.5pt solid black'>RP</td>
  <td class=xl1057763>&nbsp;</td>
  <td class=xl907763>&nbsp;</td>
  <td class=xl907763>&nbsp;</td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
 </tr>
 <tr class=xl657763 height=18 style='mso-height-source:userset;height:14.25pt'>
  <td height=18 class=xl837763 align=right style='height:14.25pt'>1</td>
  <td colspan=6 class=xl1537763 style='border-left:none'>MENTAL &amp; BEHAVIOR</td>
  <td colspan=14 class=xl2177763>&nbsp;</td>
  <td class=xl657763></td>
  <td class=xl657763></td>
  <td class=xl657763></td>
  <td class=xl657763></td>
  <td class=xl657763></td>
  <td class=xl657763></td>
  <td class=xl657763></td>
 </tr>
 <tr class=xl657763 height=18 style='mso-height-source:userset;height:14.25pt'>
  <td height=18 class=xl837763 align=right style='height:14.25pt;border-top:
  none'>2</td>
  <td colspan=5 class=xl1537763 style='border-left:none'>GASTROINTESTINAL</td>
  <td colspan=15 class=xl2067763>&nbsp;</td>
  <td class=xl657763></td>
  <td class=xl657763></td>
  <td class=xl657763></td>
  <td class=xl657763></td>
  <td class=xl657763></td>
  <td class=xl657763></td>
  <td class=xl657763></td>
 </tr>
 <tr class=xl657763 height=18 style='mso-height-source:userset;height:14.25pt'>
  <td height=18 class=xl837763 align=right style='height:14.25pt;border-top:
  none'>3</td>
  <td colspan=4 class=xl1537763 style='border-left:none'>IV THERAPY</td>
  <td colspan=8 class=xl2057763>&nbsp;</td>
  <td colspan=5 class=xl1437763>Daressing last change</td>
  <td colspan=3 class=xl2057763>&nbsp;</td>
  <td class=xl657763></td>
  <td class=xl657763></td>
  <td class=xl657763></td>
  <td class=xl657763></td>
  <td class=xl657763></td>
  <td class=xl657763></td>
  <td class=xl657763></td>
 </tr>
 <tr class=xl657763 height=18 style='mso-height-source:userset;height:14.25pt'>
  <td height=18 class=xl837763 align=right style='height:14.25pt;border-top:
  none'>4</td>
  <td colspan=4 class=xl1537763 style='border-left:none'>PICC Length</td>
  <td colspan=6 class=xl2057763>&nbsp;</td>
  <td colspan=5 class=xl1537763>Arm circumference</td>
  <td colspan=5 class=xl2057763>&nbsp;</td>
  <td class=xl657763></td>
  <td class=xl657763></td>
  <td class=xl657763></td>
  <td class=xl657763></td>
  <td class=xl657763></td>
  <td class=xl657763></td>
  <td class=xl657763></td>
 </tr>
 <tr class=xl657763 height=18 style='mso-height-source:userset;height:14.25pt'>
  <td height=18 class=xl837763 align=right style='height:14.25pt;border-top:
  none'>5</td>
  <td colspan=4 class=xl1537763 style='border-right:.5pt solid black;
  border-left:none'>GENITO/URINARY</td>
  <td colspan=16 class=xl2607763 style='border-left:none'>&nbsp;</td>
  <td class=xl657763></td>
  <td class=xl657763></td>
  <td class=xl657763></td>
  <td class=xl657763></td>
  <td class=xl657763></td>
  <td class=xl657763></td>
  <td class=xl657763></td>
 </tr>
 <tr class=xl657763 height=18 style='mso-height-source:userset;height:14.25pt'>
  <td height=18 class=xl837763 align=right style='height:14.25pt;border-top:
  none'>6</td>
  <td colspan=4 class=xl1537763 style='border-left:none'>CARDIOVASCULAR</td>
  <td colspan=16 class=xl1427763>&nbsp;</td>
  <td class=xl657763></td>
  <td class=xl657763></td>
  <td class=xl657763></td>
  <td class=xl657763></td>
  <td class=xl657763></td>
  <td class=xl657763></td>
  <td class=xl657763></td>
 </tr>
 <tr class=xl657763 height=18 style='mso-height-source:userset;height:14.25pt'>
  <td height=18 class=xl837763 align=right style='height:14.25pt;border-top:
  none'>7</td>
  <td colspan=4 class=xl1537763 style='border-left:none'>RESPIRATORY</td>
  <td colspan=16 class=xl2067763>&nbsp;</td>
  <td class=xl657763></td>
  <td class=xl657763></td>
  <td class=xl657763></td>
  <td class=xl657763></td>
  <td class=xl657763></td>
  <td class=xl657763></td>
  <td class=xl657763></td>
 </tr>
 <tr class=xl657763 height=18 style='mso-height-source:userset;height:14.25pt'>
  <td height=18 class=xl837763 align=right style='height:14.25pt;border-top:
  none'>8</td>
  <td colspan=3 class=xl1537763 style='border-left:none'>NEURO</td>
  <td colspan=17 class=xl2067763>&nbsp;</td>
  <td class=xl657763></td>
  <td class=xl657763></td>
  <td class=xl657763></td>
  <td class=xl657763></td>
  <td class=xl657763></td>
  <td class=xl657763></td>
  <td class=xl657763></td>
 </tr>
 <tr class=xl657763 height=18 style='mso-height-source:userset;height:14.25pt'>
  <td height=18 class=xl837763 align=right style='height:14.25pt;border-top:
  none'>9</td>
  <td colspan=5 class=xl1537763 style='border-left:none'>MUSCULOSKELETAL</td>
  <td class=xl1067763 style='border-top:none'>&nbsp;</td>
  <td class=xl1077763 style='border-top:none'>Mobility</td>
  <td class=xl1087763 style='border-top:none'>&nbsp;</td>
  <td colspan=2 class=xl1077763>Ambulatory</td>
  <td class=xl1097763 style='border-top:none'>&nbsp;</td>
  <td colspan=2 class=xl2187763>Walker</td>
  <td class=xl1097763 style='border-top:none'>&nbsp;</td>
  <td colspan=2 class=xl1077763>Cane</td>
  <td class=xl1107763 style='border-top:none'>&nbsp;</td>
  <td class=xl1117763 align=left style='border-top:none'>W/C</td>
  <td colspan=2 class=xl1077763><span style='mso-spacerun:yes'>�� </span><font
  class="font67763">&nbsp;</font><font class="font57763"> BedBound<span
  style='mso-spacerun:yes'>��</span></font></td>
  <td class=xl657763></td>
  <td class=xl657763></td>
  <td class=xl657763></td>
  <td class=xl657763></td>
  <td class=xl657763></td>
  <td class=xl657763></td>
  <td class=xl657763></td>
 </tr>
 <tr class=xl657763 height=18 style='mso-height-source:userset;height:14.25pt'>
  <td height=18 class=xl837763 align=right style='height:14.25pt;border-top:
  none'>10</td>
  <td colspan=4 class=xl1537763 style='border-left:none'>HEAD/ NECK/ EYES</td>
  <td colspan=16 class=xl1647763>&nbsp;</td>
  <td class=xl657763></td>
  <td class=xl657763></td>
  <td class=xl657763></td>
  <td class=xl657763></td>
  <td class=xl657763></td>
  <td class=xl657763></td>
  <td class=xl657763></td>
 </tr>
 <tr class=xl657763 height=18 style='mso-height-source:userset;height:14.25pt'>
  <td height=18 class=xl837763 align=right style='height:14.25pt;border-top:
  none'>11</td>
  <td colspan=4 class=xl1537763 style='border-left:none'>ENDOCRINE</td>
  <td colspan=16 class=xl2067763>&nbsp;</td>
  <td class=xl657763></td>
  <td class=xl657763></td>
  <td class=xl657763></td>
  <td class=xl657763></td>
  <td class=xl657763></td>
  <td class=xl657763></td>
  <td class=xl657763></td>
 </tr>
 <tr class=xl657763 height=18 style='mso-height-source:userset;height:14.25pt'>
  <td height=18 class=xl837763 align=right style='height:14.25pt;border-top:
  none'>12</td>
  <td colspan=4 class=xl1537763 style='border-left:none'>NUTRITIONAL</td>
  <td colspan=16 class=xl2067763>&nbsp;</td>
  <td class=xl657763></td>
  <td class=xl657763></td>
  <td class=xl657763></td>
  <td class=xl657763></td>
  <td class=xl657763></td>
  <td class=xl657763></td>
  <td class=xl657763></td>
 </tr>
 <tr class=xl657763 height=18 style='mso-height-source:userset;height:14.25pt'>
  <td height=18 class=xl837763 align=right style='height:14.25pt;border-top:
  none'>13</td>
  <td colspan=4 class=xl1537763 style='border-left:none'>SKIN &amp; WOUND</td>
  <td colspan=16 class=xl2067763>&nbsp;</td>
  <td class=xl657763></td>
  <td class=xl657763></td>
  <td class=xl657763></td>
  <td class=xl657763></td>
  <td class=xl657763></td>
  <td class=xl657763></td>
  <td class=xl657763></td>
 </tr>
 <tr class=xl657763 height=18 style='mso-height-source:userset;height:14.25pt'>
  <td height=18 class=xl837763 align=right style='height:14.25pt;border-top:
  none'>14</td>
  <td colspan=2 class=xl1537763 style='border-left:none'>PAIN<span
  style='mso-spacerun:yes'>�</span></td>
  <td colspan=2 class=xl1647763>Location</td>
  <td colspan=2 class=xl1657763>&nbsp;</td>
  <td colspan=2 class=xl1407763>Scale 0-10</td>
  <td class=xl1107763 style='border-top:none'>&nbsp;</td>
  <td colspan=3 class=xl1077763>Control measures</td>
  <td colspan=4 class=xl1097763>&nbsp;</td>
  <td colspan=2 class=xl1647763>Effective</td>
  <td colspan=2 class=xl1097763>&nbsp;</td>
  <td class=xl657763></td>
  <td class=xl657763></td>
  <td class=xl657763></td>
  <td class=xl657763></td>
  <td class=xl657763></td>
  <td class=xl657763></td>
  <td class=xl657763></td>
 </tr>
 <tr class=xl657763 height=18 style='mso-height-source:userset;height:14.25pt'>
  <td height=18 class=xl837763 style='height:14.25pt;border-top:none'>&nbsp;</td>
  <td colspan=3 class=xl1437763 style='border-right:.5pt solid red;border-left:
  none'>Tool Assessment</td>
  <td class=xl1127763 style='border-left:none'>&nbsp;</td>
  <td colspan=3 class=xl1467763 style='border-right:.5pt solid red;border-left:
  none'>WONG BAKER</td>
  <td class=xl1137763 style='border-left:none'>&nbsp;</td>
  <td colspan=2 class=xl1497763 style='border-right:.5pt solid red;border-left:
  none'>FLACC</td>
  <td class=xl1137763 style='border-left:none'>&nbsp;</td>
  <td colspan=3 class=xl1517763 style='border-right:.5pt solid red;border-left:
  none'>NUMERICAL</td>
  <td colspan=2 class=xl1387763 style='border-left:none'>&nbsp;</td>
  <td colspan=4 class=xl1517763 style='border-left:none'>CRIES</td>
  <td class=xl657763></td>
  <td class=xl657763></td>
  <td class=xl657763></td>
  <td class=xl657763></td>
  <td class=xl657763></td>
  <td class=xl657763></td>
  <td class=xl657763></td>
 </tr>
 <tr class=xl657763 height=18 style='mso-height-source:userset;height:14.25pt'>
  <td height=18 class=xl837763 align=right style='height:14.25pt;border-top:
  none'>15</td>
  <td colspan=4 class=xl2647763 style='border-left:none'>MEDICATIONS ALLERGY</td>
  <td colspan=16 class=xl2677763 style='border-bottom:.5pt solid black'>&nbsp;</td>
  <td class=xl657763></td>
  <td class=xl657763></td>
  <td class=xl657763></td>
  <td class=xl657763></td>
  <td class=xl657763></td>
  <td class=xl657763></td>
  <td class=xl657763></td>
 </tr>
 <tr class=xl657763 height=18 style='mso-height-source:userset;height:14.25pt'>
  <td height=18 class=xl837763 align=right style='height:14.25pt;border-top:
  none'>16</td>
  <td colspan=3 class=xl1537763 style='border-left:none'>ADLS</td>
  <td class=xl1147763>&nbsp;</td>
  <td class=xl1157763 align=left style='border-top:none'>Self</td>
  <td class=xl1167763 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl1107763 style='border-top:none'>&nbsp;</td>
  <td class=xl1177763>&nbsp;</td>
  <td colspan=2 class=xl1417763>Mini Assist</td>
  <td class=xl1187763 style='border-top:none'>&nbsp;</td>
  <td class=xl1197763>&nbsp;</td>
  <td colspan=4 class=xl1517763>Max Assist</td>
  <td colspan=4 class=xl2257763>&nbsp;</td>
  <td class=xl657763></td>
  <td class=xl657763></td>
  <td class=xl657763></td>
  <td class=xl657763></td>
  <td class=xl657763></td>
  <td class=xl657763></td>
  <td class=xl657763></td>
 </tr>
 <tr class=xl657763 height=18 style='mso-height-source:userset;height:14.25pt'>
  <td height=18 class=xl837763 align=right style='height:14.25pt;border-top:
  none'>17</td>
  <td colspan=3 class=xl1537763 style='border-right:.5pt solid black;
  border-left:none'>Others</td>
  <td colspan=17 class=xl2197763 style='border-right:.5pt solid black;
  border-left:none'>&nbsp;</td>
  <td class=xl657763></td>
  <td class=xl657763></td>
  <td class=xl657763></td>
  <td class=xl657763></td>
  <td class=xl657763></td>
  <td class=xl657763></td>
  <td class=xl657763></td>
 </tr>
 <tr height=18 style='mso-height-source:userset;height:14.25pt'>
  <td colspan=6 height=18 class=xl1537763 style='border-right:.5pt solid black;
  height:14.25pt'>ASSESSMENT AND FINDINGS</td>
  <td colspan=15 class=xl2627763 style='border-left:none'>&nbsp;</td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
 </tr>
 <tr height=18 style='mso-height-source:userset;height:14.25pt'>
  <td colspan=21 rowspan=6 height=108 class=xl2227763 style='border-bottom:
  .5pt solid black;height:85.5pt'>&nbsp;</td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
 </tr>
 <tr height=18 style='mso-height-source:userset;height:14.25pt'>
  <td height=18 class=xl157763 style='height:14.25pt'></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
 </tr>
 <tr height=18 style='mso-height-source:userset;height:14.25pt'>
  <td height=18 class=xl157763 style='height:14.25pt'></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
 </tr>
 <tr height=18 style='mso-height-source:userset;height:14.25pt'>
  <td height=18 class=xl157763 style='height:14.25pt'></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
 </tr>
 <tr height=18 style='mso-height-source:userset;height:14.25pt'>
  <td height=18 class=xl157763 style='height:14.25pt'></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
 </tr>
 <tr height=18 style='mso-height-source:userset;height:14.25pt'>
  <td height=18 class=xl157763 style='height:14.25pt'></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
 </tr>
 <tr height=18 style='mso-height-source:userset;height:14.25pt'>
  <td colspan=6 height=18 class=xl1537763 style='border-right:.5pt solid black;
  height:14.25pt'>SKILLED CARE PROVIDED</td>
  <td colspan=15 class=xl2687763>&nbsp;</td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
 </tr>
 <tr height=18 style='mso-height-source:userset;height:14.25pt'>
  <td colspan=21 height=18 class=xl2337763 style='height:14.25pt'>&nbsp;</td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
 </tr>
 <tr height=18 style='mso-height-source:userset;height:14.25pt'>
  <td colspan=21 height=18 class=xl2337763 style='height:14.25pt'>&nbsp;</td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
 </tr>
 <tr height=18 style='mso-height-source:userset;height:14.25pt'>
  <td colspan=21 height=18 class=xl2337763 style='height:14.25pt'>&nbsp;</td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
 </tr>
 <tr height=18 style='mso-height-source:userset;height:14.25pt'>
  <td colspan=21 height=18 class=xl2337763 style='height:14.25pt'>&nbsp;</td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
 </tr>
 <tr height=18 style='mso-height-source:userset;height:14.25pt'>
  <td colspan=21 height=18 class=xl2307763 style='height:14.25pt'>&nbsp;</td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
 </tr>
 <tr height=18 style='mso-height-source:userset;height:14.25pt'>
  <td colspan=21 height=18 class=xl2307763 style='height:14.25pt'>&nbsp;</td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
 </tr>
 <tr height=18 style='mso-height-source:userset;height:14.25pt'>
  <td colspan=21 height=18 class=xl2307763 style='height:14.25pt'>&nbsp;</td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
 </tr>
 <tr height=18 style='mso-height-source:userset;height:14.25pt'>
  <td colspan=3 height=18 class=xl1397763 style='border-right:.5pt solid black;
  height:14.25pt'>TEACHING:</td>
  <td class=xl707763 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl1237763 align=left style='border-top:none'>PT</td>
  <td class=xl987763 style='border-top:none'>&nbsp;</td>
  <td class=xl1247763 align=left style='border-top:none;border-left:none'>CG</td>
  <td colspan=3 class=xl2297763>SUBJECT (1)</td>
  <td colspan=11 class=xl2327763>&nbsp;</td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
 </tr>
 <tr height=18 style='mso-height-source:userset;height:14.25pt'>
  <td height=18 class=xl727763 style='height:14.25pt;border-top:none'>&nbsp;</td>
  <td colspan=2 class=xl2357763>Initial</td>
  <td class=xl717763 style='border-top:none'>&nbsp;</td>
  <td colspan=2 class=xl2367763>Continued</td>
  <td class=xl1257763 style='border-top:none'>&nbsp;</td>
  <td colspan=3 class=xl2367763>Understanding:</td>
  <td class=xl1377763 align=left>Verbal</td>
  <td colspan=2 class=xl2317763>%</td>
  <td class=xl1267763>&nbsp;</td>
  <td colspan=2 class=xl2367763>Demo</td>
  <td colspan=2 class=xl2377763>%</td>
  <td class=xl1277763>&nbsp;</td>
  <td class=xl1277763>&nbsp;</td>
  <td class=xl1277763>&nbsp;</td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
 </tr>
 <tr height=18 style='mso-height-source:userset;height:14.25pt'>
  <td colspan=3 height=18 class=xl1397763 style='border-right:.5pt solid black;
  height:14.25pt'>TEACHING:</td>
  <td class=xl747763 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl1237763 align=left style='border-top:none'>PT</td>
  <td class=xl987763 style='border-top:none'>&nbsp;</td>
  <td class=xl1247763 align=left style='border-top:none;border-left:none'>CG</td>
  <td colspan=3 class=xl2297763>SUBJECT (2)</td>
  <td colspan=11 class=xl2347763>&nbsp;</td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
 </tr>
 <tr height=18 style='mso-height-source:userset;height:14.25pt'>
  <td height=18 class=xl727763 style='height:14.25pt;border-top:none'>&nbsp;</td>
  <td colspan=2 class=xl2357763>Initial</td>
  <td class=xl737763 style='border-top:none'>&nbsp;</td>
  <td colspan=2 class=xl2367763>Continued</td>
  <td class=xl1287763 style='border-top:none'>&nbsp;</td>
  <td colspan=3 class=xl2367763>Understanding:</td>
  <td class=xl1377763 align=left>Verbal</td>
  <td colspan=2 class=xl2377763>%</td>
  <td class=xl1277763>&nbsp;</td>
  <td colspan=2 class=xl2367763>Demo</td>
  <td colspan=2 class=xl2377763>%</td>
  <td class=xl1277763>&nbsp;</td>
  <td class=xl1277763>&nbsp;</td>
  <td class=xl1277763>&nbsp;</td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
 </tr>
 <tr height=18 style='mso-height-source:userset;height:14.25pt'>
  <td colspan=21 height=18 class=xl1397763 style='height:14.25pt'>Progress
  Notes/ Conference with MD/ RT/ OT/ MSW/ DIETITIAN/ OTHERS</td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
 </tr>
 <tr height=18 style='mso-height-source:userset;height:14.25pt'>
  <td colspan=21 height=18 class=xl2387763 style='height:14.25pt'><span
  style='mso-spacerun:yes'>�</span></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
 </tr>
 <tr height=18 style='mso-height-source:userset;height:14.25pt'>
  <td colspan=21 height=18 class=xl2307763 style='height:14.25pt'>&nbsp;</td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
 </tr>
 <tr height=18 style='mso-height-source:userset;height:14.25pt'>
  <td colspan=21 height=18 class=xl2307763 style='height:14.25pt'>&nbsp;</td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
 </tr>
 <tr height=18 style='mso-height-source:userset;height:14.25pt'>
  <td colspan=21 height=18 class=xl2307763 style='height:14.25pt'>&nbsp;</td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
 </tr>
 <tr height=18 style='mso-height-source:userset;height:14.25pt'>
  <td colspan=4 height=18 class=xl2397763 style='height:14.25pt'>Discharge
  plan:</td>
  <td colspan=17 class=xl2407763>&nbsp;</td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
 </tr>
 <tr height=18 style='mso-height-source:userset;height:14.25pt'>
  <td colspan=21 height=18 class=xl2437763 style='height:14.25pt'>&nbsp;</td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
 </tr>
 <tr height=18 style='mso-height-source:userset;height:14.25pt'>
  <td colspan=4 height=18 class=xl2397763 style='height:14.25pt'>Next MD Appt</td>
  <td colspan=17 class=xl2417763>&nbsp;</td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl697763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
 </tr>
 <tr height=18 style='mso-height-source:userset;height:14.25pt'>
  <td colspan=4 height=18 class=xl2397763 style='height:14.25pt'>Plan for next
  visit</td>
  <td colspan=17 class=xl2427763>&nbsp;</td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
 </tr>
 <tr height=18 style='mso-height-source:userset;height:14.25pt'>
  <td colspan=5 height=18 class=xl1397763 style='height:14.25pt'>RN Name/ Badge
  #</td>
  <td colspan=4 class=xl2427763>&nbsp;</td>
  <td class=xl1367763 style='border-top:none'>&nbsp;</td>
  <td colspan=2 class=xl1397763>Signature</td>
  <td colspan=5 class=xl2427763>&nbsp;</td>
  <td colspan=2 class=xl2447763>&nbsp;</td>
  <td colspan=2 class=xl2427763>&nbsp;</td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
 </tr>
 <tr height=18 style='height:13.2pt'>
  <td colspan=5 height=18 class=xl1767763 style='height:13.2pt'>Page 1 of 2</td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td colspan=10 class=xl1977763>F043-THHC Daily Nursing Visit
  Record/Reassessment</td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
 </tr>
 <tr height=18 style='page-break-before:always;height:13.2pt'>
  <td colspan=4 rowspan=2 height=36 class=xl1747763 style='height:26.4pt'>Mental
  Behavior</td>
  <td class=xl1297763></td>
  <td class=xl987763>&nbsp;</td>
  <td colspan=2 class=xl1307763 style='border-left:none'>ALERT</td>
  <td class=xl1317763></td>
  <td class=xl1307763>&nbsp;</td>
  <td colspan=2 class=xl1307763 style='border-left:none'>Oriented</td>
  <td class=xl1317763></td>
  <td class=xl1307763>&nbsp;</td>
  <td colspan=3 class=xl1307763 style='border-left:none'>Depressed</td>
  <td class=xl1317763></td>
  <td class=xl1307763>&nbsp;</td>
  <td colspan=2 class=xl1307763 style='border-left:none'>Anxious</td>
  <td class=xl1297763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
 </tr>
 <tr height=18 style='height:13.2pt'>
  <td height=18 class=xl1297763 style='height:13.2pt'></td>
  <td class=xl987763 style='border-top:none'>&nbsp;</td>
  <td colspan=2 class=xl1307763 style='border-left:none'>Confused</td>
  <td class=xl1317763></td>
  <td class=xl1307763 style='border-top:none'>&nbsp;</td>
  <td colspan=2 class=xl1307763 style='border-left:none'>Forgetful</td>
  <td class=xl1317763></td>
  <td class=xl1307763 style='border-top:none'>&nbsp;</td>
  <td colspan=3 class=xl1307763 style='border-left:none'>Combative</td>
  <td class=xl1317763></td>
  <td class=xl1307763 style='border-top:none'>&nbsp;</td>
  <td colspan=2 class=xl1757763 style='border-left:none'>Unresponsive</td>
  <td class=xl1297763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
 </tr>
 <tr height=18 style='height:13.2pt'>
  <td height=18 class=xl1297763 style='height:13.2pt'></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
 </tr>
 <tr height=18 style='height:13.2pt'>
  <td colspan=4 rowspan=2 height=36 class=xl1747763 style='height:26.4pt'>Gastrointestinal</td>
  <td class=xl1297763></td>
  <td class=xl1327763>&nbsp;</td>
  <td colspan=2 class=xl1337763 style='border-left:none'>Nausea</td>
  <td class=xl1317763></td>
  <td class=xl1307763>&nbsp;</td>
  <td colspan=2 class=xl1307763 style='border-left:none'>Vomiting</td>
  <td class=xl1317763></td>
  <td class=xl1307763>&nbsp;</td>
  <td colspan=3 class=xl1307763 style='border-left:none'>Diarrhea</td>
  <td class=xl1317763></td>
  <td class=xl1307763>&nbsp;</td>
  <td colspan=2 class=xl1307763 style='border-left:none'>Melena</td>
  <td class=xl1297763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
 </tr>
 <tr height=18 style='height:13.2pt'>
  <td height=18 class=xl1297763 style='height:13.2pt'></td>
  <td class=xl987763>&nbsp;</td>
  <td colspan=3 class=xl1307763 style='border-left:none'>Hematemesis</td>
  <td class=xl1307763 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl987763 align=left style='border-top:none;border-left:none'>Other:</td>
  <td colspan=10 class=xl2567763 style='border-right:.5pt solid black;
  border-left:none'>&nbsp;</td>
  <td class=xl1297763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
 </tr>
 <tr height=18 style='height:13.2pt'>
  <td height=18 class=xl1347763 style='height:13.2pt'></td>
  <td class=xl1347763></td>
  <td class=xl1347763></td>
  <td class=xl1347763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1317763></td>
  <td class=xl1317763></td>
  <td class=xl1317763></td>
  <td class=xl1317763></td>
  <td class=xl1317763></td>
  <td class=xl1317763></td>
  <td class=xl1317763></td>
  <td class=xl1317763></td>
  <td class=xl1317763></td>
  <td class=xl1317763></td>
  <td class=xl1317763></td>
  <td class=xl1317763></td>
  <td class=xl1297763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
 </tr>
 <tr height=18 style='height:13.2pt'>
  <td colspan=4 height=18 class=xl1747763 style='height:13.2pt'>Bowel
  Sound<span style='mso-spacerun:yes'>�</span></td>
  <td class=xl1297763></td>
  <td class=xl987763>&nbsp;</td>
  <td colspan=2 class=xl1307763 style='border-left:none'>Active</td>
  <td class=xl1297763></td>
  <td class=xl987763>&nbsp;</td>
  <td colspan=2 class=xl1307763 style='border-left:none'>Hypoactive</td>
  <td class=xl1297763></td>
  <td class=xl987763>&nbsp;</td>
  <td colspan=2 class=xl2597763 style='border-left:none'>Absent</td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
 </tr>
 <tr height=16 style='mso-height-source:userset;height:12.45pt'>
  <td height=16 class=xl1297763 style='height:12.45pt'></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
 </tr>
 <tr height=18 style='height:13.2pt'>
  <td colspan=4 height=18 class=xl1747763 style='height:13.2pt'>abdomen</td>
  <td class=xl1297763></td>
  <td class=xl987763>&nbsp;</td>
  <td colspan=2 class=xl1307763 style='border-left:none'>RUQ</td>
  <td class=xl987763 style='border-left:none'>&nbsp;</td>
  <td class=xl987763 align=left style='border-left:none'>RLQ</td>
  <td class=xl987763 style='border-left:none'>&nbsp;</td>
  <td class=xl987763 align=left style='border-left:none'>LLQ</td>
  <td class=xl987763 style='border-left:none'>&nbsp;</td>
  <td colspan=2 class=xl2457763 style='border-right:.5pt solid black;
  border-left:none'>Soft</td>
  <td colspan=2 class=xl2457763 style='border-right:.5pt solid black;
  border-left:none'>&nbsp;</td>
  <td colspan=2 class=xl2457763 style='border-right:.5pt solid black;
  border-left:none'>Tender</td>
  <td class=xl987763 style='border-left:none'>&nbsp;</td>
  <td class=xl1307763 style='border-left:none'>Firm</td>
  <td class=xl1317763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
 </tr>
 <tr height=18 style='height:13.2pt'>
  <td height=18 class=xl1297763 style='height:13.2pt'></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
 </tr>
 <tr height=18 style='height:13.2pt'>
  <td colspan=4 rowspan=3 height=54 class=xl2477763 style='border-right:.5pt solid black;
  border-bottom:.5pt solid black;height:39.6pt'>Gento-Urinary</td>
  <td class=xl1297763></td>
  <td class=xl987763>&nbsp;</td>
  <td colspan=2 class=xl1307763 style='border-left:none'>Incontinence</td>
  <td class=xl1317763></td>
  <td class=xl1307763>&nbsp;</td>
  <td colspan=2 class=xl1307763 style='border-left:none'>Retention</td>
  <td class=xl1317763></td>
  <td class=xl1307763>&nbsp;</td>
  <td colspan=3 class=xl1307763 style='border-left:none'>Frequency</td>
  <td class=xl1317763></td>
  <td class=xl1307763>&nbsp;</td>
  <td colspan=2 class=xl1307763 style='border-left:none'>Urgency</td>
  <td class=xl1297763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
 </tr>
 <tr height=18 style='height:13.2pt'>
  <td height=18 class=xl1297763 style='height:13.2pt'></td>
  <td class=xl987763 style='border-top:none'>&nbsp;</td>
  <td colspan=2 class=xl1307763 style='border-left:none'>Dysuria</td>
  <td class=xl1317763></td>
  <td class=xl1307763 style='border-top:none'>&nbsp;</td>
  <td colspan=2 class=xl1307763 style='border-left:none'>Burning</td>
  <td class=xl1317763></td>
  <td class=xl1307763 style='border-top:none'>&nbsp;</td>
  <td colspan=3 class=xl1307763 style='border-left:none'>Nocturia</td>
  <td class=xl1317763></td>
  <td class=xl1307763 style='border-top:none'>&nbsp;</td>
  <td colspan=2 class=xl1307763 style='border-left:none'>Pain</td>
  <td class=xl1297763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
 </tr>
 <tr height=18 style='height:13.2pt'>
  <td height=18 class=xl1297763 style='height:13.2pt'></td>
  <td class=xl987763 style='border-top:none'>&nbsp;</td>
  <td colspan=2 class=xl1307763 style='border-left:none'>Hematuria</td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
 </tr>
 <tr height=18 style='height:13.2pt'>
  <td height=18 class=xl1297763 style='height:13.2pt'></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
 </tr>
 <tr height=18 style='height:13.2pt'>
  <td colspan=4 height=18 class=xl1747763 style='height:13.2pt'>Urine Color</td>
  <td class=xl1297763></td>
  <td class=xl987763>&nbsp;</td>
  <td colspan=2 class=xl1307763 style='border-left:none'>Yellow</td>
  <td class=xl1297763></td>
  <td class=xl987763>&nbsp;</td>
  <td colspan=2 class=xl1307763 style='border-left:none'>Amber</td>
  <td class=xl1297763></td>
  <td class=xl987763>&nbsp;</td>
  <td colspan=2 class=xl1307763 style='border-left:none'>Red</td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
 </tr>
 <tr height=18 style='height:13.2pt'>
  <td height=18 class=xl1297763 style='height:13.2pt'></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
 </tr>
 <tr height=18 style='height:13.2pt'>
  <td colspan=4 height=18 class=xl2617763 style='height:13.2pt'>Urine
  Characteristics</td>
  <td class=xl1297763></td>
  <td class=xl987763>&nbsp;</td>
  <td colspan=2 class=xl1307763 style='border-left:none'>Clear<span
  style='mso-spacerun:yes'>�</span></td>
  <td class=xl1297763></td>
  <td class=xl987763>&nbsp;</td>
  <td colspan=2 class=xl1307763 style='border-left:none'>Cloudu</td>
  <td class=xl1297763></td>
  <td class=xl987763>&nbsp;</td>
  <td colspan=3 class=xl1307763 style='border-left:none'>Sediment</td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
 </tr>
 <tr height=18 style='height:13.2pt'>
  <td height=18 class=xl1297763 style='height:13.2pt'></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
 </tr>
 <tr height=18 style='height:13.2pt'>
  <td colspan=4 rowspan=2 height=36 class=xl1747763 style='height:26.4pt'>Gastrointestinal</td>
  <td class=xl1297763></td>
  <td class=xl987763>&nbsp;</td>
  <td colspan=2 class=xl1307763 style='border-left:none'>Chest pain</td>
  <td class=xl1317763></td>
  <td class=xl1307763>&nbsp;</td>
  <td colspan=2 class=xl1307763 style='border-left:none'>Cyanosis</td>
  <td class=xl1317763></td>
  <td class=xl1307763>&nbsp;</td>
  <td colspan=3 class=xl1307763 style='border-left:none'>Dizzness</td>
  <td class=xl1317763></td>
  <td class=xl1307763>&nbsp;</td>
  <td colspan=2 class=xl1307763 style='border-left:none'>Palpitation</td>
  <td class=xl1297763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
 </tr>
 <tr height=18 style='height:13.2pt'>
  <td height=18 class=xl1297763 style='height:13.2pt'></td>
  <td class=xl987763 style='border-top:none'>&nbsp;</td>
  <td colspan=2 class=xl1307763 style='border-left:none'>Syncope</td>
  <td class=xl1317763></td>
  <td class=xl1307763 style='border-top:none'>&nbsp;</td>
  <td colspan=2 class=xl1307763 style='border-left:none'>&nbsp;</td>
  <td class=xl1317763></td>
  <td class=xl1307763 style='border-top:none'>&nbsp;</td>
  <td colspan=3 class=xl1307763 style='border-left:none'>&nbsp;</td>
  <td class=xl1317763></td>
  <td class=xl1307763 style='border-top:none'>&nbsp;</td>
  <td colspan=2 class=xl1307763 style='border-left:none'>&nbsp;</td>
  <td class=xl1297763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
 </tr>
 <tr height=18 style='height:13.2pt'>
  <td height=18 class=xl1297763 style='height:13.2pt'></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
 </tr>
 <tr height=18 style='height:13.2pt'>
  <td colspan=4 height=18 class=xl1747763 style='height:13.2pt'>Pereheral Pulse</td>
  <td class=xl1297763></td>
  <td class=xl987763>&nbsp;</td>
  <td colspan=2 class=xl1307763 style='border-left:none'>Palpable</td>
  <td class=xl1297763></td>
  <td class=xl987763>&nbsp;</td>
  <td colspan=2 class=xl1307763 style='border-left:none'>Weak</td>
  <td class=xl1297763></td>
  <td class=xl987763>&nbsp;</td>
  <td colspan=2 class=xl1307763 style='border-left:none'>Absent</td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
 </tr>
 <tr height=18 style='height:13.2pt'>
  <td height=18 class=xl1297763 style='height:13.2pt'></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
 </tr>
 <tr height=18 style='height:13.2pt'>
  <td colspan=4 height=18 class=xl1747763 style='height:13.2pt'>Heart Bear</td>
  <td class=xl1297763></td>
  <td class=xl987763>&nbsp;</td>
  <td colspan=2 class=xl1307763 style='border-left:none'>Regular</td>
  <td class=xl1297763></td>
  <td class=xl987763>&nbsp;</td>
  <td colspan=2 class=xl1307763 style='border-left:none'>Irregular</td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
 </tr>
 <tr height=18 style='height:13.2pt'>
  <td height=18 class=xl1357763 style='height:13.2pt'></td>
  <td class=xl1357763></td>
  <td class=xl1357763></td>
  <td class=xl1357763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1317763></td>
  <td class=xl1317763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1317763></td>
  <td class=xl1317763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
 </tr>
 <tr height=18 style='height:13.2pt'>
  <td colspan=4 height=18 class=xl1747763 style='height:13.2pt'>Edema</td>
  <td class=xl1297763></td>
  <td class=xl987763>&nbsp;</td>
  <td colspan=2 class=xl1307763 style='border-left:none'>1+</td>
  <td class=xl1297763></td>
  <td class=xl987763>&nbsp;</td>
  <td colspan=2 class=xl1307763 style='border-left:none'>2+</td>
  <td class=xl1297763></td>
  <td class=xl987763>&nbsp;</td>
  <td colspan=2 class=xl1307763 style='border-left:none'>3+</td>
  <td class=xl1297763></td>
  <td class=xl987763>&nbsp;</td>
  <td colspan=2 class=xl1307763 style='border-left:none'>4+</td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
 </tr>
 <tr height=18 style='height:13.2pt'>
  <td height=18 class=xl1297763 style='height:13.2pt'></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
 </tr>
 <tr height=18 style='height:13.2pt'>
  <td colspan=4 rowspan=2 height=36 class=xl1747763 style='height:26.4pt'>Respiratory</td>
  <td class=xl1297763></td>
  <td class=xl987763>&nbsp;</td>
  <td colspan=2 class=xl1307763 style='border-left:none'>SOBOE</td>
  <td class=xl1317763></td>
  <td class=xl1307763>&nbsp;</td>
  <td colspan=2 class=xl1337763 style='border-left:none'>Orthopenea</td>
  <td class=xl1317763></td>
  <td class=xl1337763>&nbsp;</td>
  <td colspan=3 class=xl1307763 style='border-left:none'>Cyanosis</td>
  <td class=xl1317763></td>
  <td class=xl1337763>&nbsp;</td>
  <td colspan=2 class=xl1337763 style='border-left:none'>Dysepnea</td>
  <td class=xl1297763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
 </tr>
 <tr height=18 style='height:13.2pt'>
  <td height=18 class=xl1297763 style='height:13.2pt'></td>
  <td class=xl987763 style='border-top:none'>&nbsp;</td>
  <td colspan=2 class=xl1307763 style='border-left:none'>Pain</td>
  <td class=xl1317763></td>
  <td class=xl1307763 style='border-top:none'>&nbsp;</td>
  <td colspan=4 class=xl1307763 style='border-left:none'>Non productive
  Cough<span style='mso-spacerun:yes'>�</span></td>
  <td class=xl1297763></td>
  <td colspan=2 class=xl1867763>&nbsp;</td>
  <td colspan=4 class=xl1307763 style='border-left:none'>productive Cough<span
  style='mso-spacerun:yes'>�</span></td>
  <td class=xl1297763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
 </tr>
 <tr height=18 style='height:13.2pt'>
  <td height=18 class=xl1297763 style='height:13.2pt'></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
 </tr>
 <tr height=18 style='height:13.2pt'>
  <td colspan=4 height=18 class=xl1747763 style='height:13.2pt'>Lung Sound</td>
  <td class=xl1297763></td>
  <td class=xl987763>&nbsp;</td>
  <td colspan=2 class=xl1307763 style='border-left:none'>Clear</td>
  <td class=xl1297763></td>
  <td class=xl987763>&nbsp;</td>
  <td colspan=2 class=xl1307763 style='border-left:none'>Crackles</td>
  <td class=xl1297763></td>
  <td class=xl987763>&nbsp;</td>
  <td colspan=3 class=xl1307763 style='border-left:none'>Whezzes</td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
 </tr>
 <tr height=18 style='height:13.2pt'>
  <td height=18 class=xl1297763 style='height:13.2pt'></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
 </tr>
 <tr height=18 style='height:13.2pt'>
  <td colspan=4 rowspan=3 height=54 class=xl1747763 style='height:39.6pt'>Neuro</td>
  <td class=xl1297763></td>
  <td class=xl987763>&nbsp;</td>
  <td colspan=2 class=xl1337763 style='border-left:none'>Headache</td>
  <td class=xl1317763></td>
  <td class=xl1307763>&nbsp;</td>
  <td colspan=2 class=xl1307763 style='border-left:none'>Vertigo</td>
  <td class=xl1317763></td>
  <td class=xl1337763>&nbsp;</td>
  <td colspan=3 class=xl1307763 style='border-left:none'>Tremors</td>
  <td class=xl1317763></td>
  <td class=xl1307763>&nbsp;</td>
  <td colspan=2 class=xl1307763 style='border-left:none'>Seizures</td>
  <td class=xl1297763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
 </tr>
 <tr height=18 style='height:13.2pt'>
  <td height=18 class=xl1297763 style='height:13.2pt'></td>
  <td class=xl987763 style='border-top:none'>&nbsp;</td>
  <td colspan=3 class=xl1307763 style='border-left:none'>Unconsciousness</td>
  <td class=xl1297763></td>
  <td class=xl987763 style='border-top:none'>&nbsp;</td>
  <td colspan=2 class=xl1767763 style='border-left:none'>Paralysis</td>
  <td class=xl1297763></td>
  <td class=xl987763 style='border-top:none'>&nbsp;</td>
  <td colspan=4 class=xl1307763 style='border-left:none'>Uncoordinated</td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
 </tr>
 <tr height=18 style='height:13.2pt'>
  <td height=18 class=xl1297763 style='height:13.2pt'></td>
  <td class=xl987763 style='border-top:none'>&nbsp;</td>
  <td colspan=3 class=xl1307763 style='border-left:none'>Quardriplegia</td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
 </tr>
 <tr height=18 style='height:13.2pt'>
  <td height=18 class=xl1297763 style='height:13.2pt'></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
 </tr>
 <tr height=18 style='height:13.2pt'>
  <td colspan=4 rowspan=2 height=36 class=xl1747763 style='height:26.4pt'>Musculoskeletal</td>
  <td class=xl1297763></td>
  <td class=xl987763>&nbsp;</td>
  <td colspan=2 class=xl1307763 style='border-left:none'>Weakness</td>
  <td class=xl1317763></td>
  <td class=xl1307763>&nbsp;</td>
  <td colspan=2 class=xl1307763 style='border-left:none'>Spastic</td>
  <td class=xl1317763></td>
  <td class=xl1307763>&nbsp;</td>
  <td colspan=3 class=xl1337763 style='border-left:none'>Flaccid</td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
 </tr>
 <tr height=18 style='height:13.2pt'>
  <td height=18 class=xl1297763 style='height:13.2pt'></td>
  <td class=xl987763 style='border-top:none'>&nbsp;</td>
  <td colspan=2 class=xl1307763 style='border-left:none'>Contracture</td>
  <td class=xl1317763></td>
  <td class=xl1307763 style='border-top:none'>&nbsp;</td>
  <td colspan=2 class=xl1307763 style='border-left:none'>Bedbound</td>
  <td class=xl1317763></td>
  <td class=xl1307763 style='border-top:none'>&nbsp;</td>
  <td colspan=4 class=xl1307763 style='border-left:none'>Wheelchair fast</td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
 </tr>
 <tr height=18 style='height:13.2pt'>
  <td height=18 class=xl1357763 style='height:13.2pt'></td>
  <td class=xl1357763></td>
  <td class=xl1357763></td>
  <td class=xl1357763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1317763></td>
  <td class=xl1317763></td>
  <td class=xl1317763></td>
  <td class=xl1317763></td>
  <td class=xl1317763></td>
  <td class=xl1317763></td>
  <td class=xl1317763></td>
  <td class=xl1317763></td>
  <td class=xl1317763></td>
  <td class=xl1317763></td>
  <td class=xl1317763></td>
  <td class=xl1317763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
 </tr>
 <tr height=18 style='height:13.2pt'>
  <td colspan=4 rowspan=3 height=54 class=xl1747763 style='height:39.6pt'>Nutritional</td>
  <td class=xl1297763></td>
  <td class=xl987763>&nbsp;</td>
  <td colspan=3 class=xl1307763 style='border-left:none'>Tube Feeding</td>
  <td class=xl1317763></td>
  <td class=xl987763>&nbsp;</td>
  <td colspan=3 class=xl1307763 style='border-left:none'>PEG Tube</td>
  <td class=xl1297763></td>
  <td class=xl987763>&nbsp;</td>
  <td colspan=3 class=xl1337763 style='border-left:none'>G tube</td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
 </tr>
 <tr height=18 style='height:13.2pt'>
  <td height=18 class=xl1297763 style='height:13.2pt'></td>
  <td class=xl987763 style='border-top:none'>&nbsp;</td>
  <td colspan=3 class=xl1307763 style='border-left:none'>NGT<span
  style='mso-spacerun:yes'>�</span></td>
  <td class=xl1317763></td>
  <td class=xl987763 style='border-top:none'>&nbsp;</td>
  <td colspan=3 class=xl1307763 style='border-left:none'>Esphagostomy tube</td>
  <td class=xl1297763></td>
  <td class=xl987763 style='border-top:none'>&nbsp;</td>
  <td colspan=4 class=xl1307763 style='border-left:none'>Jejunostomy tube</td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
 </tr>
 <tr height=18 style='height:13.2pt'>
  <td height=18 class=xl1297763 style='height:13.2pt'></td>
  <td class=xl987763 style='border-top:none'>&nbsp;</td>
  <td colspan=3 class=xl1307763 style='border-left:none'>Anorexia</td>
  <td class=xl1317763></td>
  <td class=xl1297763></td>
  <td class=xl1317763></td>
  <td class=xl1317763></td>
  <td class=xl1317763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1317763></td>
  <td class=xl1317763></td>
  <td class=xl1317763></td>
  <td class=xl1317763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
 </tr>
 <tr height=18 style='height:13.2pt'>
  <td height=18 class=xl1297763 style='height:13.2pt'></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
 </tr>
 <tr height=18 style='height:13.2pt'>
  <td colspan=4 rowspan=3 height=54 class=xl1747763 style='height:39.6pt'>Skin</td>
  <td class=xl1297763></td>
  <td class=xl987763>&nbsp;</td>
  <td colspan=2 class=xl1307763 style='border-left:none'>Intact</td>
  <td class=xl1317763></td>
  <td class=xl1307763>&nbsp;</td>
  <td colspan=2 class=xl1307763 style='border-left:none'>Rash</td>
  <td class=xl1317763></td>
  <td class=xl1307763>&nbsp;</td>
  <td colspan=3 class=xl1307763 style='border-left:none'>Bruises</td>
  <td class=xl1317763></td>
  <td class=xl1307763>&nbsp;</td>
  <td colspan=2 class=xl1307763 style='border-left:none'>Diaphoresis</td>
  <td class=xl1297763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
 </tr>
 <tr height=18 style='height:13.2pt'>
  <td height=18 class=xl1297763 style='height:13.2pt'></td>
  <td class=xl987763 style='border-top:none'>&nbsp;</td>
  <td colspan=2 class=xl1307763 style='border-left:none'>Pallor</td>
  <td class=xl1317763></td>
  <td class=xl1307763 style='border-top:none'>&nbsp;</td>
  <td colspan=2 class=xl1307763 style='border-left:none'>Burn</td>
  <td class=xl1317763></td>
  <td class=xl1307763 style='border-top:none'>&nbsp;</td>
  <td colspan=3 class=xl1307763 style='border-left:none'>Cyanosis</td>
  <td class=xl1317763></td>
  <td class=xl1307763 style='border-top:none'>&nbsp;</td>
  <td colspan=2 class=xl1307763 style='border-left:none'>Pruritus</td>
  <td class=xl1297763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
 </tr>
 <tr height=18 style='height:13.2pt'>
  <td height=18 class=xl1297763 style='height:13.2pt'></td>
  <td class=xl987763 style='border-top:none'>&nbsp;</td>
  <td colspan=2 class=xl1307763 style='border-left:none'>Abrasion</td>
  <td class=xl1297763></td>
  <td class=xl987763 style='border-top:none'>&nbsp;</td>
  <td colspan=2 class=xl1307763 style='border-left:none'>Abscess</td>
  <td class=xl1297763></td>
  <td class=xl987763 style='border-top:none'>&nbsp;</td>
  <td colspan=3 class=xl1307763 style='border-left:none'>Redness</td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
 </tr>
 <tr height=18 style='height:13.2pt'>
  <td height=18 class=xl1297763 style='height:13.2pt'></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
 </tr>
 <tr height=18 style='height:13.2pt'>
  <td colspan=4 rowspan=2 height=36 class=xl1747763 style='height:26.4pt'>Wound</td>
  <td class=xl1297763></td>
  <td class=xl987763>&nbsp;</td>
  <td colspan=2 class=xl1337763 style='border-left:none'>Surgical</td>
  <td class=xl1317763></td>
  <td class=xl1307763>&nbsp;</td>
  <td colspan=2 class=xl1787763 style='border-left:none'>Arterial Ulcer</td>
  <td class=xl1297763></td>
  <td class=xl1307763>&nbsp;</td>
  <td colspan=3 class=xl1827763 style='border-right:.5pt solid black;
  border-left:none'>Venous Ulcer</td>
  <td class=xl1297763></td>
  <td class=xl1307763>&nbsp;</td>
  <td colspan=3 class=xl1307763 style='border-left:none'>Decubitus Ulcer</td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
 </tr>
 <tr height=18 style='height:13.2pt'>
  <td height=18 class=xl1297763 style='height:13.2pt'></td>
  <td class=xl987763 style='border-top:none'>&nbsp;</td>
  <td colspan=3 class=xl1307763 style='border-left:none'>Diabetic Ulcer</td>
  <td class=xl1297763></td>
  <td class=xl1307763>&nbsp;</td>
  <td colspan=3 class=xl1797763 style='border-right:.5pt solid black;
  border-left:none'>Trauma woung</td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1307763 style='border-top:none'>&nbsp;</td>
  <td colspan=3 class=xl1307763 style='border-left:none'>Abrasion</td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
 </tr>
 <tr height=18 style='height:13.2pt'>
  <td height=18 class=xl1297763 style='height:13.2pt'></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
 </tr>
 <tr height=40 style='mso-height-source:userset;height:30.45pt'>
  <td colspan=4 height=40 class=xl1857763 style='height:30.45pt'>Pain and
  Management</td>
  <td class=xl1297763></td>
  <td colspan=17 class=xl1767763>&nbsp;</td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
 </tr>
 <tr height=18 style='height:13.2pt'>
  <td height=18 class=xl1297763 style='height:13.2pt'></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
 </tr>
 <tr height=18 style='height:13.2pt'>
  <td colspan=4 height=18 class=xl1747763 style='height:13.2pt'>Medication</td>
  <td class=xl1297763></td>
  <td class=xl987763>&nbsp;</td>
  <td colspan=2 class=xl1307763 style='border-left:none'>Side effect</td>
  <td class=xl1297763></td>
  <td class=xl987763>&nbsp;</td>
  <td colspan=2 class=xl1757763 style='border-left:none'>Desired effect</td>
  <td class=xl1297763></td>
  <td class=xl987763>&nbsp;</td>
  <td colspan=5 class=xl1307763 style='border-left:none'>Nursing implication</td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
 </tr>
 <tr height=18 style='height:13.2pt'>
  <td height=18 class=xl1297763 style='height:13.2pt'></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
 </tr>
 <tr height=18 style='height:13.2pt'>
  <td colspan=5 height=18 class=xl1767763 style='height:13.2pt'>Page 2 of 2</td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td colspan=10 class=xl1777763>F043-THHC Daily Nursing Visit
  Record/Reassessment</td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
 </tr>
 <tr height=18 style='height:13.2pt'>
  <td height=18 class=xl1297763 style='height:13.2pt'></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl1297763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
  <td class=xl157763></td>
 </tr>
 <tr height=0 style='display:none'>
  <td width=23 style='width:17pt'></td>
  <td width=38 style='width:28pt'></td>
  <td width=46 style='width:35pt'></td>
  <td width=27 style='width:20pt'></td>
  <td width=49 style='width:37pt'></td>
  <td width=33 style='width:25pt'></td>
  <td width=27 style='width:20pt'></td>
  <td width=66 style='width:49pt'></td>
  <td width=42 style='width:31pt'></td>
  <td width=50 style='width:38pt'></td>
  <td width=42 style='width:31pt'></td>
  <td width=38 style='width:28pt'></td>
  <td width=32 style='width:24pt'></td>
  <td width=39 style='width:29pt'></td>
  <td width=26 style='width:19pt'></td>
  <td width=20 style='width:15pt'></td>
  <td width=26 style='width:19pt'></td>
  <td width=27 style='width:20pt'></td>
  <td width=38 style='width:28pt'></td>
  <td width=29 style='width:22pt'></td>
  <td width=56 style='width:42pt'></td>
  <td width=34 style='width:26pt'></td>
  <td width=64 style='width:48pt'></td>
  <td width=64 style='width:48pt'></td>
  <td width=64 style='width:48pt'></td>
  <td width=64 style='width:48pt'></td>
  <td width=64 style='width:48pt'></td>
  <td width=64 style='width:48pt'></td>
 </tr>

</table>

</div>


<!----------------------------->
<!--END OF OUTPUT FROM EXCEL PUBLISH AS WEB PAGE WIZARD-->
<!----------------------------->
</body>

</html>
