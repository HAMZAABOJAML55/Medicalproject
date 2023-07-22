<!DOCTYPE html>
<html lang="en">
<head>


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<title>F013-THHC Initial Patient Assessment Physician (Admission)| @yield('title')</title>

<style>
   {mso-displayed-decimal-separator:"\.";
   mso-displayed-thousand-separator:"\,";}
.font517125
   {color:black;
   font-size:10.0pt;
   font-weight:400;
   font-style:normal;
   text-decoration:none;
   font-family:"Times New Roman", serif;
   mso-font-charset:0;}
.font617125
   {color:black;
   font-size:9.0pt;
   font-weight:400;
   font-style:normal;
   text-decoration:none;
   font-family:"Times New Roman", serif;
   mso-font-charset:0;}
.font717125
   {color:black;
   font-size:10.0pt;
   font-weight:700;
   font-style:normal;
   text-decoration:none;
   font-family:"Times New Roman", serif;
   mso-font-charset:0;}
.font817125
   {color:black;
   font-size:10.0pt;
   font-weight:400;
   font-style:normal;
   text-decoration:none;
   font-family:Symbol, serif;
   mso-font-charset:2;}
.font917125
   {color:black;
   font-size:10.0pt;
   font-weight:400;
   font-style:normal;
   text-decoration:none;
   font-family:"Times New Roman", serif;
   mso-font-charset:2;}
.font1017125
   {color:black;
   font-size:10.0pt;
   font-weight:700;
   font-style:normal;
   text-decoration:none;
   font-family:Symbol, serif;
   mso-font-charset:2;}
.font1117125
   {color:black;
   font-size:9.0pt;
   font-weight:700;
   font-style:normal;
   text-decoration:none;
   font-family:"Times New Roman", serif;
   mso-font-charset:0;}
.font1217125
   {color:white;
   font-size:10.0pt;
   font-weight:700;
   font-style:normal;
   text-decoration:none;
   font-family:"Times New Roman", serif;
   mso-font-charset:0;}
.font1317125
   {color:black;
   font-size:11.0pt;
   font-weight:400;
   font-style:normal;
   text-decoration:none;
   font-family:Symbol, serif;
   mso-font-charset:2;}
.font1417125
   {color:black;
   font-size:11.0pt;
   font-weight:400;
   font-style:normal;
   text-decoration:none;
   font-family:"Times New Roman", serif;
   mso-font-charset:0;}
.font1517125
   {color:black;
   font-size:11.0pt;
   font-weight:700;
   font-style:normal;
   text-decoration:none;
   font-family:"Times New Roman", serif;
   mso-font-charset:0;}
.font1617125
   {color:black;
   font-size:9.0pt;
   font-weight:400;
   font-style:normal;
   text-decoration:none;
   font-family:Symbol, serif;
   mso-font-charset:2;}
.font1717125
   {color:black;
   font-size:9.0pt;
   font-weight:700;
   font-style:normal;
   text-decoration:none;
   font-family:Symbol, serif;
   mso-font-charset:2;}
.font1817125
   {color:black;
   font-size:6.0pt;
   font-weight:400;
   font-style:normal;
   text-decoration:none;
   font-family:"Times New Roman", serif;
   mso-font-charset:0;}
.font1917125
   {color:white;
   font-size:10.0pt;
   font-weight:700;
   font-style:normal;
   text-decoration:none;
   font-family:Symbol, serif;
   mso-font-charset:2;}
.xl6317125
   {padding:0px;
   mso-ignore:padding;
   color:black;
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
.xl6417125
   {padding:0px;
   mso-ignore:padding;
   color:black;
   font-size:10.0pt;
   font-weight:400;
   font-style:normal;
   text-decoration:none;
   font-family:"Times New Roman", serif;
   mso-font-charset:2;
   mso-number-format:General;
   text-align:general;
   vertical-align:bottom;
   border:.5pt solid windowtext;
   mso-background-source:auto;
   mso-pattern:auto;
   white-space:nowrap;}
.xl6517125
   {padding:0px;
   mso-ignore:padding;
   color:black;
   font-size:11.0pt;
   font-weight:400;
   font-style:normal;
   text-decoration:none;
   font-family:Calibri, sans-serif;
   mso-font-charset:0;
   mso-number-format:General;
   text-align:general;
   vertical-align:bottom;
   border:.5pt solid windowtext;
   mso-background-source:auto;
   mso-pattern:auto;
   white-space:nowrap;}
.xl6617125
   {padding:0px;
   mso-ignore:padding;
   color:black;
   font-size:10.0pt;
   font-weight:400;
   font-style:normal;
   text-decoration:none;
   font-family:"Times New Roman", serif;
   mso-font-charset:2;
   mso-number-format:General;
   text-align:general;
   vertical-align:top;
   mso-background-source:auto;
   mso-pattern:auto;
   white-space:nowrap;}
.xl6717125
   {padding:0px;
   mso-ignore:padding;
   color:black;
   font-size:10.0pt;
   font-weight:400;
   font-style:normal;
   text-decoration:none;
   font-family:"Times New Roman", serif;
   mso-font-charset:0;
   mso-number-format:General;
   text-align:general;
   vertical-align:top;
   mso-background-source:auto;
   mso-pattern:auto;
   white-space:nowrap;}
.xl6817125
   {padding:0px;
   mso-ignore:padding;
   color:black;
   font-size:11.0pt;
   font-weight:400;
   font-style:normal;
   text-decoration:none;
   font-family:Calibri, sans-serif;
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
.xl6917125
   {padding:0px;
   mso-ignore:padding;
   color:black;
   font-size:11.0pt;
   font-weight:400;
   font-style:normal;
   text-decoration:none;
   font-family:Calibri, sans-serif;
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
.xl7017125
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
   text-align:general;
   vertical-align:middle;
   mso-background-source:auto;
   mso-pattern:auto;
   white-space:nowrap;}
.xl7117125
   {padding:0px;
   mso-ignore:padding;
   color:windowtext;
   font-size:9.0pt;
   font-weight:700;
   font-style:normal;
   text-decoration:none;
   font-family:"Times New Roman", serif;
   mso-font-charset:0;
   mso-number-format:General;
   text-align:general;
   vertical-align:middle;
   mso-background-source:auto;
   mso-pattern:auto;
   white-space:nowrap;}
.xl7217125
   {padding:0px;
   mso-ignore:padding;
   color:black;
   font-size:11.0pt;
   font-weight:400;
   font-style:normal;
   text-decoration:none;
   font-family:"Times New Roman", serif;
   mso-font-charset:0;
   mso-number-format:General;
   text-align:left;
   vertical-align:bottom;
   border:.5pt solid windowtext;
   mso-background-source:auto;
   mso-pattern:auto;
   white-space:nowrap;}
.xl7317125
   {padding:0px;
   mso-ignore:padding;
   color:black;
   font-size:10.0pt;
   font-weight:400;
   font-style:normal;
   text-decoration:none;
   font-family:"Times New Roman", serif;
   mso-font-charset:2;
   mso-number-format:General;
   text-align:general;
   vertical-align:top;
   border:.5pt solid windowtext;
   background:#BFBFBF;
   mso-pattern:black none;
   white-space:nowrap;}
.xl7417125
   {padding:0px;
   mso-ignore:padding;
   color:black;
   font-size:10.0pt;
   font-weight:400;
   font-style:normal;
   text-decoration:none;
   font-family:"Times New Roman", serif;
   mso-font-charset:0;
   mso-number-format:General;
   text-align:general;
   vertical-align:top;
   border:.5pt solid windowtext;
   background:#BFBFBF;
   mso-pattern:black none;
   white-space:nowrap;}
.xl7517125
   {padding:0px;
   mso-ignore:padding;
   color:black;
   font-size:10.0pt;
   font-weight:400;
   font-style:normal;
   text-decoration:none;
   font-family:"Times New Roman", serif;
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
.xl7617125
   {padding:0px;
   mso-ignore:padding;
   color:black;
   font-size:10.0pt;
   font-weight:400;
   font-style:normal;
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
.xl7717125
   {padding:0px;
   mso-ignore:padding;
   color:black;
   font-size:10.0pt;
   font-weight:400;
   font-style:normal;
   text-decoration:none;
   font-family:"Times New Roman", serif;
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
.xl7817125
   {padding:0px;
   mso-ignore:padding;
   color:black;
   font-size:10.0pt;
   font-weight:400;
   font-style:normal;
   text-decoration:none;
   font-family:"Times New Roman", serif;
   mso-font-charset:0;
   mso-number-format:General;
   text-align:left;
   vertical-align:top;
   border-top:.5pt solid windowtext;
   border-right:none;
   border-bottom:.5pt solid windowtext;
   border-left:.5pt solid windowtext;
   mso-background-source:auto;
   mso-pattern:auto;
   white-space:normal;}
.xl7917125
   {padding:0px;
   mso-ignore:padding;
   color:black;
   font-size:10.0pt;
   font-weight:400;
   font-style:normal;
   text-decoration:none;
   font-family:"Times New Roman", serif;
   mso-font-charset:0;
   mso-number-format:General;
   text-align:left;
   vertical-align:top;
   border-top:.5pt solid windowtext;
   border-right:none;
   border-bottom:.5pt solid windowtext;
   border-left:none;
   mso-background-source:auto;
   mso-pattern:auto;
   white-space:nowrap;}
.xl8017125
   {padding:0px;
   mso-ignore:padding;
   color:black;
   font-size:10.0pt;
   font-weight:400;
   font-style:normal;
   text-decoration:none;
   font-family:"Times New Roman", serif;
   mso-font-charset:0;
   mso-number-format:General;
   text-align:left;
   vertical-align:top;
   border-top:.5pt solid windowtext;
   border-right:.5pt solid windowtext;
   border-bottom:.5pt solid windowtext;
   border-left:none;
   mso-background-source:auto;
   mso-pattern:auto;
   white-space:nowrap;}
.xl8117125
   {padding:0px;
   mso-ignore:padding;
   color:white;
   font-size:10.0pt;
   font-weight:700;
   font-style:normal;
   text-decoration:none;
   font-family:"Times New Roman", serif;
   mso-font-charset:0;
   mso-number-format:General;
   text-align:left;
   vertical-align:bottom;
   border-top:.5pt solid windowtext;
   border-right:none;
   border-bottom:.5pt solid windowtext;
   border-left:.5pt solid windowtext;
   background:#3AC2BA;
   mso-pattern:black none;
   white-space:nowrap;}
.xl8217125
   {padding:0px;
   mso-ignore:padding;
   color:white;
   font-size:10.0pt;
   font-weight:700;
   font-style:normal;
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
.xl8317125
   {padding:0px;
   mso-ignore:padding;
   color:white;
   font-size:10.0pt;
   font-weight:700;
   font-style:normal;
   text-decoration:none;
   font-family:"Times New Roman", serif;
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
.xl8417125
   {padding:0px;
   mso-ignore:padding;
   color:black;
   font-size:10.0pt;
   font-weight:400;
   font-style:normal;
   text-decoration:none;
   font-family:"Times New Roman", serif;
   mso-font-charset:0;
   mso-number-format:General;
   text-align:left;
   vertical-align:top;
   border-top:.5pt solid windowtext;
   border-right:none;
   border-bottom:.5pt solid windowtext;
   border-left:none;
   mso-background-source:auto;
   mso-pattern:auto;
   white-space:normal;}
.xl8517125
   {padding:0px;
   mso-ignore:padding;
   color:black;
   font-size:10.0pt;
   font-weight:400;
   font-style:normal;
   text-decoration:none;
   font-family:"Times New Roman", serif;
   mso-font-charset:0;
   mso-number-format:General;
   text-align:left;
   vertical-align:top;
   border-top:.5pt solid windowtext;
   border-right:.5pt solid windowtext;
   border-bottom:.5pt solid windowtext;
   border-left:none;
   mso-background-source:auto;
   mso-pattern:auto;
   white-space:normal;}
.xl8617125
   {padding:0px;
   mso-ignore:padding;
   color:black;
   font-size:10.0pt;
   font-weight:400;
   font-style:normal;
   text-decoration:none;
   font-family:"Times New Roman", serif;
   mso-font-charset:2;
   mso-number-format:General;
   text-align:general;
   vertical-align:top;
   border:.5pt solid windowtext;
   mso-background-source:auto;
   mso-pattern:auto;
   white-space:nowrap;}
.xl8717125
   {padding:0px;
   mso-ignore:padding;
   color:black;
   font-size:10.0pt;
   font-weight:400;
   font-style:normal;
   text-decoration:none;
   font-family:"Times New Roman", serif;
   mso-font-charset:0;
   mso-number-format:General;
   text-align:general;
   vertical-align:top;
   border:.5pt solid windowtext;
   mso-background-source:auto;
   mso-pattern:auto;
   white-space:nowrap;}
.xl8817125
   {padding:0px;
   mso-ignore:padding;
   color:black;
   font-size:9.0pt;
   font-weight:700;
   font-style:normal;
   text-decoration:none;
   font-family:"Times New Roman", serif;
   mso-font-charset:2;
   mso-number-format:General;
   text-align:general;
   vertical-align:top;
   border:.5pt solid windowtext;
   mso-background-source:auto;
   mso-pattern:auto;
   white-space:nowrap;}
.xl8917125
   {padding:0px;
   mso-ignore:padding;
   color:black;
   font-size:9.0pt;
   font-weight:700;
   font-style:normal;
   text-decoration:none;
   font-family:"Times New Roman", serif;
   mso-font-charset:0;
   mso-number-format:General;
   text-align:general;
   vertical-align:top;
   border:.5pt solid windowtext;
   mso-background-source:auto;
   mso-pattern:auto;
   white-space:nowrap;}
.xl9017125
   {padding:0px;
   mso-ignore:padding;
   color:black;
   font-size:10.0pt;
   font-weight:400;
   font-style:normal;
   text-decoration:none;
   font-family:"Times New Roman", serif;
   mso-font-charset:2;
   mso-number-format:General;
   text-align:left;
   vertical-align:top;
   border:.5pt solid windowtext;
   background:#BFBFBF;
   mso-pattern:black none;
   white-space:normal;}
.xl9117125
   {padding:0px;
   mso-ignore:padding;
   color:black;
   font-size:10.0pt;
   font-weight:400;
   font-style:normal;
   text-decoration:none;
   font-family:"Times New Roman", serif;
   mso-font-charset:0;
   mso-number-format:General;
   text-align:left;
   vertical-align:top;
   border:.5pt solid windowtext;
   background:#BFBFBF;
   mso-pattern:black none;
   white-space:nowrap;}
.xl9217125
   {padding:0px;
   mso-ignore:padding;
   color:black;
   font-size:10.0pt;
   font-weight:700;
   font-style:normal;
   text-decoration:none;
   font-family:"Times New Roman", serif;
   mso-font-charset:2;
   mso-number-format:General;
   text-align:general;
   vertical-align:top;
   border:.5pt solid windowtext;
   mso-background-source:auto;
   mso-pattern:auto;
   white-space:nowrap;}
.xl9317125
   {padding:0px;
   mso-ignore:padding;
   color:black;
   font-size:10.0pt;
   font-weight:700;
   font-style:normal;
   text-decoration:none;
   font-family:"Times New Roman", serif;
   mso-font-charset:0;
   mso-number-format:General;
   text-align:general;
   vertical-align:top;
   border:.5pt solid windowtext;
   mso-background-source:auto;
   mso-pattern:auto;
   white-space:nowrap;}
.xl9417125
   {padding:0px;
   mso-ignore:padding;
   color:black;
   font-size:10.0pt;
   font-weight:400;
   font-style:normal;
   text-decoration:none;
   font-family:"Times New Roman", serif;
   mso-font-charset:0;
   mso-number-format:General;
   text-align:left;
   vertical-align:top;
   border:.5pt solid windowtext;
   mso-background-source:auto;
   mso-pattern:auto;
   white-space:normal;}
.xl9517125
   {padding:0px;
   mso-ignore:padding;
   color:black;
   font-size:10.0pt;
   font-weight:400;
   font-style:normal;
   text-decoration:none;
   font-family:"Times New Roman", serif;
   mso-font-charset:0;
   mso-number-format:General;
   text-align:left;
   vertical-align:top;
   border:.5pt solid windowtext;
   mso-background-source:auto;
   mso-pattern:auto;
   white-space:nowrap;}
.xl9617125
   {padding:0px;
   mso-ignore:padding;
   color:white;
   font-size:10.0pt;
   font-weight:700;
   font-style:normal;
   text-decoration:none;
   font-family:"Times New Roman", serif;
   mso-font-charset:0;
   mso-number-format:General;
   text-align:left;
   vertical-align:bottom;
   border:.5pt solid windowtext;
   background:#3AC2BA;
   mso-pattern:black none;
   white-space:nowrap;}
.xl9717125
   {padding:0px;
   mso-ignore:padding;
   color:black;
   font-size:10.0pt;
   font-weight:700;
   font-style:normal;
   text-decoration:none;
   font-family:"Times New Roman", serif;
   mso-font-charset:0;
   mso-number-format:General;
   text-align:left;
   vertical-align:bottom;
   border:.5pt solid windowtext;
   background:#3AC2BA;
   mso-pattern:black none;
   white-space:nowrap;}
.xl9817125
   {padding:0px;
   mso-ignore:padding;
   color:black;
   font-size:11.0pt;
   font-weight:400;
   font-style:normal;
   text-decoration:none;
   font-family:"Times New Roman", serif;
   mso-font-charset:0;
   mso-number-format:General;
   text-align:left;
   vertical-align:top;
   border:.5pt solid windowtext;
   mso-background-source:auto;
   mso-pattern:auto;
   white-space:nowrap;}
.xl9917125
   {padding:0px;
   mso-ignore:padding;
   color:black;
   font-size:10.0pt;
   font-weight:400;
   font-style:normal;
   text-decoration:none;
   font-family:"Times New Roman", serif;
   mso-font-charset:2;
   mso-number-format:General;
   text-align:left;
   vertical-align:top;
   border:.5pt solid windowtext;
   mso-background-source:auto;
   mso-pattern:auto;
   white-space:normal;}
.xl10017125
   {padding:0px;
   mso-ignore:padding;
   color:black;
   font-size:11.0pt;
   font-weight:400;
   font-style:normal;
   text-decoration:none;
   font-family:"Times New Roman", serif;
   mso-font-charset:2;
   mso-number-format:General;
   text-align:left;
   vertical-align:top;
   border:.5pt solid windowtext;
   mso-background-source:auto;
   mso-pattern:auto;
   white-space:normal;}
.xl10117125
   {padding:0px;
   mso-ignore:padding;
   color:black;
   font-size:11.0pt;
   font-weight:400;
   font-style:normal;
   text-decoration:none;
   font-family:"Times New Roman", serif;
   mso-font-charset:2;
   mso-number-format:General;
   text-align:left;
   vertical-align:top;
   border:.5pt solid windowtext;
   mso-background-source:auto;
   mso-pattern:auto;
   white-space:nowrap;}
.xl10217125
   {padding:0px;
   mso-ignore:padding;
   color:black;
   font-size:8.0pt;
   font-weight:400;
   font-style:normal;
   text-decoration:none;
   font-family:"Times New Roman", serif;
   mso-font-charset:0;
   mso-number-format:General;
   text-align:left;
   vertical-align:bottom;
   border:.5pt solid windowtext;
   mso-background-source:auto;
   mso-pattern:auto;
   white-space:nowrap;}
.xl10317125
   {padding:0px;
   mso-ignore:padding;
   color:black;
   font-size:11.0pt;
   font-weight:400;
   font-style:normal;
   text-decoration:none;
   font-family:Calibri, sans-serif;
   mso-font-charset:0;
   mso-number-format:General;
   text-align:left;
   vertical-align:bottom;
   border:.5pt solid windowtext;
   mso-background-source:auto;
   mso-pattern:auto;
   white-space:nowrap;}
.xl10417125
   {padding:0px;
   mso-ignore:padding;
   color:black;
   font-size:10.0pt;
   font-weight:700;
   font-style:normal;
   text-decoration:none;
   font-family:"Times New Roman", serif;
   mso-font-charset:2;
   mso-number-format:General;
   text-align:left;
   vertical-align:top;
   border:.5pt solid windowtext;
   mso-background-source:auto;
   mso-pattern:auto;
   white-space:normal;}
.xl10517125
   {padding:0px;
   mso-ignore:padding;
   color:black;
   font-size:11.0pt;
   font-weight:400;
   font-style:normal;
   text-decoration:none;
   font-family:Calibri, sans-serif;
   mso-font-charset:0;
   mso-number-format:General;
   text-align:center;
   vertical-align:top;
   border:.5pt solid windowtext;
   mso-background-source:auto;
   mso-pattern:auto;
   white-space:nowrap;}
.xl10617125
   {padding:0px;
   mso-ignore:padding;
   color:black;
   font-size:10.0pt;
   font-weight:700;
   font-style:normal;
   text-decoration:none;
   font-family:"Times New Roman", serif;
   mso-font-charset:0;
   mso-number-format:General;
   text-align:left;
   vertical-align:top;
   border:.5pt solid windowtext;
   mso-background-source:auto;
   mso-pattern:auto;
   white-space:nowrap;}
.xl10717125
   {padding:0px;
   mso-ignore:padding;
   color:black;
   font-size:10.0pt;
   font-weight:400;
   font-style:normal;
   text-decoration:none;
   font-family:"Times New Roman", serif;
   mso-font-charset:2;
   mso-number-format:General;
   text-align:left;
   vertical-align:top;
   border:.5pt solid windowtext;
   mso-background-source:auto;
   mso-pattern:auto;
   white-space:nowrap;}
.xl10817125
   {padding:0px;
   mso-ignore:padding;
   color:black;
   font-size:9.0pt;
   font-weight:700;
   font-style:normal;
   text-decoration:none;
   font-family:"Times New Roman", serif;
   mso-font-charset:2;
   mso-number-format:General;
   text-align:left;
   vertical-align:top;
   border:.5pt solid windowtext;
   mso-background-source:auto;
   mso-pattern:auto;
   white-space:nowrap;}
.xl10917125
   {padding:0px;
   mso-ignore:padding;
   color:black;
   font-size:9.0pt;
   font-weight:700;
   font-style:normal;
   text-decoration:none;
   font-family:"Times New Roman", serif;
   mso-font-charset:0;
   mso-number-format:General;
   text-align:left;
   vertical-align:top;
   border:.5pt solid windowtext;
   mso-background-source:auto;
   mso-pattern:auto;
   white-space:nowrap;}
.xl11017125
   {padding:0px;
   mso-ignore:padding;
   color:black;
   font-size:10.0pt;
   font-weight:400;
   font-style:normal;
   text-decoration:none;
   font-family:"Times New Roman", serif;
   mso-font-charset:0;
   mso-number-format:General;
   text-align:center;
   vertical-align:bottom;
   border:.5pt solid windowtext;
   mso-background-source:auto;
   mso-pattern:auto;
   white-space:nowrap;}
.xl11117125
   {padding:0px;
   mso-ignore:padding;
   color:black;
   font-size:10.0pt;
   font-weight:700;
   font-style:normal;
   text-decoration:none;
   font-family:"Times New Roman", serif;
   mso-font-charset:2;
   mso-number-format:General;
   text-align:left;
   vertical-align:top;
   border:.5pt solid windowtext;
   mso-background-source:auto;
   mso-pattern:auto;
   white-space:nowrap;}
.xl11217125
   {padding:0px;
   mso-ignore:padding;
   color:black;
   font-size:11.0pt;
   font-weight:700;
   font-style:normal;
   text-decoration:none;
   font-family:"Times New Roman", serif;
   mso-font-charset:0;
   mso-number-format:General;
   text-align:left;
   vertical-align:bottom;
   border:.5pt solid windowtext;
   mso-background-source:auto;
   mso-pattern:auto;
   white-space:nowrap;}
.xl11317125
   {padding:0px;
   mso-ignore:padding;
   color:black;
   font-size:9.0pt;
   font-weight:400;
   font-style:normal;
   text-decoration:none;
   font-family:"Times New Roman", serif;
   mso-font-charset:2;
   mso-number-format:General;
   text-align:left;
   vertical-align:top;
   border:.5pt solid windowtext;
   mso-background-source:auto;
   mso-pattern:auto;
   white-space:nowrap;}
.xl11417125
   {padding:0px;
   mso-ignore:padding;
   color:black;
   font-size:9.0pt;
   font-weight:400;
   font-style:normal;
   text-decoration:none;
   font-family:"Times New Roman", serif;
   mso-font-charset:0;
   mso-number-format:General;
   text-align:left;
   vertical-align:top;
   border:.5pt solid windowtext;
   mso-background-source:auto;
   mso-pattern:auto;
   white-space:nowrap;}
.xl11517125
   {padding:0px;
   mso-ignore:padding;
   color:black;
   font-size:11.0pt;
   font-weight:400;
   font-style:normal;
   text-decoration:none;
   font-family:Calibri, sans-serif;
   mso-font-charset:0;
   mso-number-format:General;
   text-align:center;
   vertical-align:bottom;
   border:.5pt solid windowtext;
   mso-background-source:auto;
   mso-pattern:auto;
   white-space:nowrap;}
.xl11617125
   {padding:0px;
   mso-ignore:padding;
   color:black;
   font-size:9.0pt;
   font-weight:400;
   font-style:normal;
   text-decoration:none;
   font-family:"Times New Roman", serif;
   mso-font-charset:0;
   mso-number-format:General;
   text-align:left;
   vertical-align:top;
   border:.5pt solid windowtext;
   mso-background-source:auto;
   mso-pattern:auto;
   white-space:normal;}
.xl11717125
   {padding:0px;
   mso-ignore:padding;
   color:black;
   font-size:9.0pt;
   font-weight:400;
   font-style:normal;
   text-decoration:none;
   font-family:Calibri, sans-serif;
   mso-font-charset:0;
   mso-number-format:General;
   text-align:left;
   vertical-align:top;
   border:.5pt solid windowtext;
   mso-background-source:auto;
   mso-pattern:auto;
   white-space:nowrap;}
.xl11817125
   {padding:0px;
   mso-ignore:padding;
   color:black;
   font-size:10.0pt;
   font-weight:400;
   font-style:normal;
   text-decoration:none;
   font-family:"Times New Roman", serif;
   mso-font-charset:2;
   mso-number-format:General;
   text-align:left;
   vertical-align:bottom;
   border:.5pt solid windowtext;
   mso-background-source:auto;
   mso-pattern:auto;
   white-space:nowrap;}
.xl11917125
   {padding:0px;
   mso-ignore:padding;
   color:black;
   font-size:10.0pt;
   font-weight:400;
   font-style:normal;
   text-decoration:none;
   font-family:"Times New Roman", serif;
   mso-font-charset:0;
   mso-number-format:General;
   text-align:left;
   vertical-align:bottom;
   border:.5pt solid windowtext;
   mso-background-source:auto;
   mso-pattern:auto;
   white-space:nowrap;}
.xl12017125
   {padding:0px;
   mso-ignore:padding;
   color:black;
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
.xl12117125
   {padding:0px;
   mso-ignore:padding;
   color:black;
   font-size:10.0pt;
   font-weight:700;
   font-style:normal;
   text-decoration:none;
   font-family:"Times New Roman", serif;
   mso-font-charset:0;
   mso-number-format:General;
   text-align:left;
   vertical-align:bottom;
   border:.5pt solid windowtext;
   mso-background-source:auto;
   mso-pattern:auto;
   white-space:nowrap;}
.xl12217125
   {padding:0px;
   mso-ignore:padding;
   color:black;
   font-size:10.0pt;
   font-weight:400;
   font-style:normal;
   text-decoration:none;
   font-family:"Times New Roman", serif;
   mso-font-charset:2;
   mso-number-format:General;
   text-align:center;
   vertical-align:top;
   border:.5pt solid windowtext;
   mso-background-source:auto;
   mso-pattern:auto;
   white-space:nowrap;}
.xl12317125
   {padding:0px;
   mso-ignore:padding;
   color:black;
   font-size:10.0pt;
   font-weight:400;
   font-style:normal;
   text-decoration:none;
   font-family:"Times New Roman", serif;
   mso-font-charset:2;
   mso-number-format:General;
   text-align:center;
   vertical-align:bottom;
   border:.5pt solid windowtext;
   mso-background-source:auto;
   mso-pattern:auto;
   white-space:nowrap;}
.xl12417125
   {padding:0px;
   mso-ignore:padding;
   color:white;
   font-size:10.0pt;
   font-weight:700;
   font-style:normal;
   text-decoration:none;
   font-family:"Times New Roman", serif;
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
.xl12517125
   {padding:0px;
   mso-ignore:padding;
   color:white;
   font-size:10.0pt;
   font-weight:700;
   font-style:normal;
   text-decoration:none;
   font-family:"Times New Roman", serif;
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
.xl12617125
   {padding:0px;
   mso-ignore:padding;
   color:white;
   font-size:10.0pt;
   font-weight:700;
   font-style:normal;
   text-decoration:none;
   font-family:"Times New Roman", serif;
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
.xl12717125
   {padding:0px;
   mso-ignore:padding;
   color:black;
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
   mso-background-source:auto;
   mso-pattern:auto;
   white-space:nowrap;}
.xl12817125
   {padding:0px;
   mso-ignore:padding;
   color:black;
   font-size:12.0pt;
   font-weight:400;
   font-style:normal;
   text-decoration:none;
   font-family:"Montserrat SemiBold";
   mso-generic-font-family:auto;
   mso-font-charset:0;
   mso-number-format:General;
   text-align:center;
   vertical-align:bottom;
   border:.5pt solid windowtext;
   mso-background-source:auto;
   mso-pattern:auto;
   white-space:normal;}
.xl12917125
   {padding:0px;
   mso-ignore:padding;
   color:black;
   font-size:12.0pt;
   font-weight:400;
   font-style:normal;
   text-decoration:none;
   font-family:"Montserrat SemiBold";
   mso-generic-font-family:auto;
   mso-font-charset:0;
   mso-number-format:General;
   text-align:center;
   vertical-align:bottom;
   border:.5pt solid windowtext;
   mso-background-source:auto;
   mso-pattern:auto;
   white-space:nowrap;}
.xl13017125
   {padding:0px;
   mso-ignore:padding;
   color:black;
   font-size:10.0pt;
   font-weight:400;
   font-style:normal;
   text-decoration:none;
   font-family:"Times New Roman", serif;
   mso-font-charset:0;
   mso-number-format:General;
   text-align:left;
   vertical-align:middle;
   border:.5pt solid windowtext;
   mso-background-source:auto;
   mso-pattern:auto;
   white-space:nowrap;}
.xl13117125
   {padding:0px;
   mso-ignore:padding;
   color:black;
   font-size:10.0pt;
   font-weight:400;
   font-style:normal;
   text-decoration:none;
   font-family:"Times New Roman", serif;
   mso-font-charset:0;
   mso-number-format:General;
   text-align:center;
   vertical-align:middle;
   border:.5pt solid windowtext;
   mso-background-source:auto;
   mso-pattern:auto;
   white-space:nowrap;}
.xl13217125
   {padding:0px;
   mso-ignore:padding;
   color:white;
   font-size:9.0pt;
   font-weight:700;
   font-style:normal;
   text-decoration:none;
   font-family:"Times New Roman", serif;
   mso-font-charset:0;
   mso-number-format:General;
   text-align:left;
   vertical-align:bottom;
   border:.5pt solid windowtext;
   background:#3AC2BA;
   mso-pattern:black none;
   white-space:nowrap;}
.xl13317125
   {padding:0px;
   mso-ignore:padding;
   color:black;
   font-size:9.0pt;
   font-weight:700;
   font-style:normal;
   text-decoration:none;
   font-family:"Times New Roman", serif;
   mso-font-charset:0;
   mso-number-format:General;
   text-align:left;
   vertical-align:bottom;
   border:.5pt solid windowtext;
   background:#3AC2BA;
   mso-pattern:black none;
   white-space:nowrap;}
.xl13417125
   {padding:0px;
   mso-ignore:padding;
   color:black;
   font-size:10.0pt;
   font-weight:400;
   font-style:normal;
   text-decoration:none;
   font-family:"Times New Roman", serif;
   mso-font-charset:2;
   mso-number-format:General;
   text-align:left;
   vertical-align:bottom;
   border:.5pt solid windowtext;
   mso-background-source:auto;
   mso-pattern:auto;
   white-space:normal;}
.xl13517125
   {padding:0px;
   mso-ignore:padding;
   color:white;
   font-size:10.0pt;
   font-weight:700;
   font-style:normal;
   text-decoration:none;
   font-family:"Times New Roman", serif;
   mso-font-charset:0;
   mso-number-format:General;
   text-align:center;
   vertical-align:bottom;
   border:.5pt solid windowtext;
   background:#3AC2BA;
   mso-pattern:black none;
   white-space:nowrap;}
.xl13617125
   {padding:0px;
   mso-ignore:padding;
   color:black;
   font-size:10.0pt;
   font-weight:700;
   font-style:normal;
   text-decoration:none;
   font-family:"Times New Roman", serif;
   mso-font-charset:0;
   mso-number-format:General;
   text-align:center;
   vertical-align:bottom;
   border:.5pt solid windowtext;
   background:#3AC2BA;
   mso-pattern:black none;
   white-space:nowrap;}
.xl13717125
   {padding:0px;
   mso-ignore:padding;
   color:black;
   font-size:10.0pt;
   font-weight:400;
   font-style:normal;
   text-decoration:none;
   font-family:"Times New Roman", serif;
   mso-font-charset:2;
   mso-number-format:General;
   text-align:left;
   vertical-align:top;
   border:.5pt solid windowtext;
   background:#BFBFBF;
   mso-pattern:black none;
   white-space:nowrap;}
.xl13817125
   {padding:0px;
   mso-ignore:padding;
   color:black;
   font-size:10.0pt;
   font-weight:700;
   font-style:normal;
   text-decoration:none;
   font-family:"Times New Roman", serif;
   mso-font-charset:0;
   mso-number-format:General;
   text-align:center;
   vertical-align:bottom;
   border:.5pt solid windowtext;
   mso-background-source:auto;
   mso-pattern:auto;
   white-space:nowrap;}
.xl13917125
   {padding:0px;
   mso-ignore:padding;
   color:black;
   font-size:10.0pt;
   font-weight:400;
   font-style:normal;
   text-decoration:none;
   font-family:"Times New Roman", serif;
   mso-font-charset:0;
   mso-number-format:General;
   text-align:center;
   vertical-align:top;
   border:.5pt solid windowtext;
   mso-background-source:auto;
   mso-pattern:auto;
   white-space:normal;}
.xl14017125
   {padding:0px;
   mso-ignore:padding;
   color:white;
   font-size:10.0pt;
   font-weight:700;
   font-style:normal;
   text-decoration:none;
   font-family:"Times New Roman", serif;
   mso-font-charset:0;
   mso-number-format:General;
   text-align:general;
   vertical-align:top;
   border:.5pt solid windowtext;
   background:#3AC2BA;
   mso-pattern:black none;
   white-space:nowrap;}
.xl14117125
   {padding:0px;
   mso-ignore:padding;
   color:black;
   font-size:10.0pt;
   font-weight:700;
   font-style:normal;
   text-decoration:none;
   font-family:"Times New Roman", serif;
   mso-font-charset:0;
   mso-number-format:General;
   text-align:general;
   vertical-align:top;
   border:.5pt solid windowtext;
   background:#3AC2BA;
   mso-pattern:black none;
   white-space:nowrap;}
.xl14217125
   {padding:0px;
   mso-ignore:padding;
   color:black;
   font-size:11.0pt;
   font-weight:700;
   font-style:normal;
   text-decoration:none;
   font-family:"Times New Roman", serif;
   mso-font-charset:2;
   mso-number-format:General;
   text-align:center;
   vertical-align:top;
   border:.5pt solid windowtext;
   mso-background-source:auto;
   mso-pattern:auto;
   white-space:nowrap;}
.xl14317125
   {padding:0px;
   mso-ignore:padding;
   color:black;
   font-size:11.0pt;
   font-weight:700;
   font-style:normal;
   text-decoration:none;
   font-family:"Times New Roman", serif;
   mso-font-charset:0;
   mso-number-format:General;
   text-align:center;
   vertical-align:top;
   border:.5pt solid windowtext;
   mso-background-source:auto;
   mso-pattern:auto;
   white-space:nowrap;}
.xl14417125
   {padding:0px;
   mso-ignore:padding;
   color:black;
   font-size:11.0pt;
   font-weight:400;
   font-style:normal;
   text-decoration:none;
   font-family:"Times New Roman", serif;
   mso-font-charset:0;
   mso-number-format:General;
   text-align:left;
   vertical-align:top;
   border:.5pt solid windowtext;
   mso-background-source:auto;
   mso-pattern:auto;
   white-space:normal;}
.xl14517125
   {padding:0px;
   mso-ignore:padding;
   color:black;
   font-size:11.0pt;
   font-weight:400;
   font-style:normal;
   text-decoration:none;
   font-family:Calibri, sans-serif;
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
.xl14617125
   {padding:0px;
   mso-ignore:padding;
   color:black;
   font-size:11.0pt;
   font-weight:400;
   font-style:normal;
   text-decoration:none;
   font-family:Calibri, sans-serif;
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
.xl14717125
   {padding:0px;
   mso-ignore:padding;
   color:black;
   font-size:11.0pt;
   font-weight:400;
   font-style:normal;
   text-decoration:none;
   font-family:Calibri, sans-serif;
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
</style>
@yield('styles')
</head>

<body>
<!--[if !excel]>&nbsp;&nbsp;<![endif]-->
<!--The following information was generated by Microsoft Excel's Publish as Web
Page wizard.-->
<!--If the same item is republished from Excel, all information between the DIV
tags will be replaced.-->
<!----------------------------->
<!--START OF OUTPUT FROM EXCEL PUBLISH AS WEB PAGE WIZARD -->
<!----------------------------->

<div id="F013-THHC Initial Patient Assessment Physician (Admission)_17125"
align=center x:publishsource="Excel">

<table border=0 cellpadding=0 cellspacing=0 width=2205 class=xl6553517125
style='border-collapse:collapse;table-layout:fixed;width:1645pt'>
<col class=xl6917125 width=63 style='width:47pt'>
<col class=xl6553517125 width=63 span=34 style='width:47pt'>
<tr class=xl6817125 height=60 style='mso-height-source:userset;height:45.45pt'>
 <td colspan=3 height=60 width=189 style='height:45.45pt;width:141pt'
 align=left valign=top><span style='mso-ignore:vglayout;
 position:absolute;z-index:1;margin-left:0px;margin-top:1px;width:190px;
 height:62px'><img width=190 height=62
 src="F013-THHC%20Initial%20Patient%20Assessment%20Physician%20(Admission).files/F013-THHC%20Initial%20Patient%20Assessment%20Physician%20(Admission)_17125_image002.png"
 v:shapes="Picture_x0020_1"></span><span style='mso-ignore:vglayout2'>
 <table cellpadding=0 cellspacing=0>
  <tr>
   <td colspan=3 height=60 class=xl11517125 width=189 style='height:45.45pt;
   width:141pt'><a name="RANGE!A1:J264">&nbsp;</a></td>
  </tr>
 </table>
 </span></td>
 <td colspan=4 class=xl12817125 width=252 style='border-left:none;width:188pt'>Initial
 Patient Assessment Physician (Admission)</td>
 <td colspan=3 class=xl12717125 width=189 style='border-left:none;width:141pt'>PATIENT
 LABEL</td>
 <td class=xl6817125 width=63 style='width:47pt'>&nbsp;</td>
 <td class=xl6817125 width=63 style='width:47pt'>&nbsp;</td>
 <td class=xl6817125 width=63 style='width:47pt'>&nbsp;</td>
 <td class=xl6817125 width=63 style='width:47pt'>&nbsp;</td>
 <td class=xl6817125 width=63 style='width:47pt'>&nbsp;</td>
 <td class=xl6817125 width=63 style='width:47pt'>&nbsp;</td>
 <td class=xl6817125 width=63 style='width:47pt'>&nbsp;</td>
 <td class=xl6817125 width=63 style='width:47pt'>&nbsp;</td>
 <td class=xl6817125 width=63 style='width:47pt'>&nbsp;</td>
 <td class=xl6817125 width=63 style='width:47pt'>&nbsp;</td>
 <td class=xl6817125 width=63 style='width:47pt'>&nbsp;</td>
 <td class=xl6817125 width=63 style='width:47pt'>&nbsp;</td>
 <td class=xl6817125 width=63 style='width:47pt'>&nbsp;</td>
 <td class=xl6817125 width=63 style='width:47pt'>&nbsp;</td>
 <td class=xl6817125 width=63 style='width:47pt'>&nbsp;</td>
 <td class=xl6817125 width=63 style='width:47pt'>&nbsp;</td>
 <td class=xl6817125 width=63 style='width:47pt'>&nbsp;</td>
 <td class=xl6817125 width=63 style='width:47pt'>&nbsp;</td>
 <td class=xl6817125 width=63 style='width:47pt'>&nbsp;</td>
 <td class=xl6817125 width=63 style='width:47pt'>&nbsp;</td>
 <td class=xl6817125 width=63 style='width:47pt'>&nbsp;</td>
 <td class=xl6817125 width=63 style='width:47pt'>&nbsp;</td>
 <td class=xl6817125 width=63 style='width:47pt'>&nbsp;</td>
 <td class=xl6817125 width=63 style='width:47pt'>&nbsp;</td>
 <td class=xl6817125 width=63 style='width:47pt'>&nbsp;</td>
</tr>
<tr height=19 style='height:14.4pt'>
 <td colspan=10 height=19 class=xl9617125 style='height:14.4pt'>A .ADMISSION
 DATA</td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=19 style='height:14.4pt'>
 <td colspan=10 height=19 class=xl7517125 style='border-right:.5pt solid black;
 height:14.4pt'>Admission Date and Time:</td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=19 style='height:14.4pt'>
 <td colspan=10 height=19 class=xl7517125 style='border-right:.5pt solid black;
 height:14.4pt'>Admission Diagnosis:</td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=19 style='height:14.4pt'>
 <td height=19 class=xl6317125 align=left style='height:14.4pt;border-top:
 none'>Specialty</td>
 <td class=xl6417125 align=left style='border-top:none;border-left:none'><font
 class="font817125">&nbsp;</font><font class="font517125">SN</font></td>
 <td class=xl6417125 align=left style='border-top:none;border-left:none'><font
 class="font817125">&#156;</font><font class="font517125">PT</font></td>
 <td class=xl6417125 align=left style='border-top:none;border-left:none'><font
 class="font817125">&nbsp;</font><font class="font517125">RT</font></td>
 <td colspan=6 class=xl11817125 style='border-left:none'><font
 class="font817125">&#156;</font><font class="font517125">Other:</font></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=19 style='height:14.4pt'>
 <td colspan=2 height=19 class=xl11917125 style='height:14.4pt'>Age:______________</td>
 <td colspan=8 class=xl11917125 style='border-left:none'>Gender :<span
 style='mso-spacerun:yes'>� </span><font class="font817125">&nbsp;</font><font
 class="font517125"> Male<span style='mso-spacerun:yes'>� </span></font><font
 class="font817125">&nbsp;</font><font class="font517125"> Female</font></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=19 style='height:14.4pt'>
 <td colspan=10 height=19 class=xl11917125 style='height:14.4pt'>Information
 obtained from :<span style='mso-spacerun:yes'>� </span><font
 class="font817125">&nbsp;</font><font class="font517125"> Patient &nbsp;<span
 style='mso-spacerun:yes'>� </span></font><font class="font817125">&nbsp;</font><font
 class="font517125"> &#156;Family<span style='mso-spacerun:yes'>��� </span></font><font
 class="font817125">&nbsp;</font><font class="font517125">Other:</font></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=19 style='height:14.4pt'>
 <td colspan=10 height=19 class=xl9617125 style='height:14.4pt'>VITAL SIGNS</td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=19 style='height:14.4pt'>
 <td colspan=2 rowspan=2 height=38 class=xl13117125 style='height:28.8pt'>Temp:___________</td>
 <td class=xl6417125 align=left style='border-top:none;border-left:none'><font
 class="font817125">&nbsp; </font><font class="font517125">Oral</font></td>
 <td class=xl6417125 align=left style='border-top:none;border-left:none'><font
 class="font817125">&nbsp; </font><font class="font517125">Axillary</font></td>
 <td colspan=2 rowspan=2 class=xl13117125>Blood Pressure</td>
 <td colspan=4 rowspan=2 class=xl11017125>&nbsp;</td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=19 style='height:14.4pt'>
 <td height=19 class=xl6417125 align=left style='height:14.4pt;border-top:
 none;border-left:none'><font class="font817125">&nbsp; </font><font
 class="font517125">Ear</font></td>
 <td class=xl6417125 align=left style='border-top:none;border-left:none'><font
 class="font817125">&nbsp; </font><font class="font517125">Rectal</font></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=19 style='height:14.4pt'>
 <td colspan=2 rowspan=3 height=57 class=xl13117125 style='height:43.2pt'><font
 class="font617125">Pulse Rate:</font><font class="font517125">___________</font></td>
 <td class=xl6417125 align=left style='border-top:none;border-left:none'><font
 class="font817125">&nbsp; </font><font class="font517125">Regular</font></td>
 <td class=xl6417125 align=left style='border-top:none;border-left:none'><font
 class="font817125">&nbsp; </font><font class="font517125">Apical</font></td>
 <td colspan=2 class=xl12217125 style='border-left:none'><font
 class="font817125">&nbsp;</font><font class="font517125"> Standing</font></td>
 <td colspan=2 class=xl11817125 style='border-left:none'><font
 class="font817125">&nbsp;</font><font class="font517125"> R Arm<span
 style='mso-spacerun:yes'>��� </span>___/____</font></td>
 <td colspan=2 class=xl11817125 style='border-left:none'><font
 class="font817125">&nbsp;</font><font class="font517125"> L Arm<span
 style='mso-spacerun:yes'>������� </span>___/____</font></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=19 style='height:14.4pt'>
 <td height=19 class=xl6417125 align=left style='height:14.4pt;border-top:
 none;border-left:none'><font class="font817125">&nbsp; </font><font
 class="font517125">Irregular</font></td>
 <td class=xl6417125 align=left style='border-top:none;border-left:none'><font
 class="font817125">&nbsp; </font><font class="font517125">R Radial</font></td>
 <td colspan=2 class=xl12217125 style='border-left:none'><font
 class="font817125">&nbsp;</font><font class="font517125"> Sitting</font></td>
 <td colspan=2 class=xl11817125 style='border-left:none'><font
 class="font817125">&nbsp;</font><font class="font517125"> R Wrist<span
 style='mso-spacerun:yes'>� </span>___/____</font></td>
 <td colspan=2 class=xl11817125 style='border-left:none'><font
 class="font817125">&nbsp;</font><font class="font517125"> L Wrist<span
 style='mso-spacerun:yes'>����� </span>___/____</font></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=19 style='height:14.4pt'>
 <td height=19 class=xl6317125 style='height:14.4pt;border-top:none;
 border-left:none'>&nbsp;</td>
 <td class=xl6417125 align=left style='border-top:none;border-left:none'><font
 class="font817125">&nbsp;</font><font class="font517125"> L Radial</font></td>
 <td colspan=2 class=xl12317125 style='border-left:none'><font
 class="font817125">&nbsp;</font><font class="font517125"> Lying</font></td>
 <td colspan=2 class=xl11817125 style='border-left:none'><font
 class="font817125">&nbsp;</font><font class="font517125"> R Leg<span
 style='mso-spacerun:yes'>��� </span>___/____</font></td>
 <td colspan=2 class=xl11817125 style='border-left:none'><font
 class="font817125">&nbsp;</font><font class="font517125"> L Leg<span
 style='mso-spacerun:yes'>�������� </span>___/____</font></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=19 style='height:14.4pt'>
 <td colspan=2 height=19 class=xl8717125 align=left style='height:14.4pt'>Respiration:_______</td>
 <td colspan=2 class=xl13017125 style='border-left:none'>Oxygen<span
 style='mso-spacerun:yes'>� </span>Saturation:___</td>
 <td colspan=2 class=xl11917125 style='border-left:none'>Height:_____cm</td>
 <td colspan=4 class=xl11917125 style='border-left:none'>Weight:________Kg <font
 class="font817125">&nbsp;</font><font class="font517125"> Actual<span
 style='mso-spacerun:yes'>�� </span></font><font class="font817125">&nbsp;</font><font
 class="font517125"> Estimated</font></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=19 style='height:14.4pt'>
 <td colspan=10 height=19 class=xl9617125 style='height:14.4pt'>CHIEF
 COMPLAINT</td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=82 style='mso-height-source:userset;height:61.5pt'>
 <td colspan=10 height=82 class=xl12417125 style='border-right:.5pt solid black;
 height:61.5pt'>&nbsp;</td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=19 style='height:14.4pt'>
 <td colspan=10 height=19 class=xl9617125 style='height:14.4pt'>HISTORY OF
 PRESENT ILLNESS</td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=82 style='mso-height-source:userset;height:61.5pt'>
 <td colspan=10 height=82 class=xl12417125 style='border-right:.5pt solid black;
 height:61.5pt'>&nbsp;</td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=19 style='height:14.4pt'>
 <td colspan=10 height=19 class=xl8117125 style='border-right:.5pt solid black;
 height:14.4pt'>PAST MEDICAL HISTORY</td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=82 style='mso-height-source:userset;height:61.5pt'>
 <td colspan=10 height=82 class=xl12417125 style='border-right:.5pt solid black;
 height:61.5pt'>&nbsp;</td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=19 style='height:14.4pt'>
 <td colspan=10 height=19 class=xl8117125 style='border-right:.5pt solid black;
 height:14.4pt'>PAST SURGICAL HISTORY</td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=82 style='mso-height-source:userset;height:61.5pt'>
 <td colspan=10 height=82 class=xl12417125 style='border-right:.5pt solid black;
 height:61.5pt'>&nbsp;</td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=19 style='height:14.4pt'>
 <td colspan=10 height=19 class=xl8117125 style='border-right:.5pt solid black;
 height:14.4pt'>FAMILY HISTORY</td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=82 style='mso-height-source:userset;height:61.5pt'>
 <td colspan=10 height=82 class=xl12417125 style='border-right:.5pt solid black;
 height:61.5pt'>&nbsp;</td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=19 style='height:14.4pt'>
 <td colspan=10 height=19 class=xl9617125 style='height:14.4pt'>PAIN
 ASSESSMENT</td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=19 style='height:14.4pt'>
 <td colspan=10 height=19 class=xl11917125 style='height:14.4pt'>Dose Patient
 Express or exhibit of Pain: <font class="font817125">&nbsp;</font><font
 class="font517125"> No<span style='mso-spacerun:yes'> </span></font><font
 class="font817125">&nbsp;</font><font class="font517125"> Yes<span
 style='mso-spacerun:yes'></span></font></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=19 style='height:14.4pt'>
 <td colspan=10 height=19 class=xl7517125 style='border-right:.5pt solid black;
 height:14.4pt'>Pain Score:________________________ Scale: <font
 class="font817125">&nbsp;</font><font class="font517125"> WONG BAKER </font><font
 class="font817125">&nbsp;</font><font class="font517125"> FLACC </font><font
 class="font817125">&nbsp;</font><font class="font517125"> NUMERICAL </font><font
 class="font817125">&nbsp;</font><font class="font517125"> CRIES</font></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=42 style='mso-height-source:userset;height:31.5pt'>
 <td colspan=10 height=42 class=xl7817125 width=630 style='border-right:.5pt solid black;
 height:31.5pt;width:470pt'>Location:_______________________________________
 Duration:_______________________________________<br>
   Severity:____________________ Character:_________________________
 Frequency:_______________________</td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=19 style='height:14.4pt'>
 <td colspan=10 height=19 class=xl7517125 style='border-right:.5pt solid black;
 height:14.4pt'>History of Pain (Onest and
 duration):________________________________________________________________</td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=19 style='height:14.4pt'>
 <td colspan=10 height=19 class=xl7517125 style='border-right:.5pt solid black;
 height:14.4pt'>Previous
 Management:___________________________________________________________________________</td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl7017125></td>
 <td class=xl7017125></td>
 <td class=xl7017125></td>
 <td class=xl7117125></td>
 <td class=xl7117125></td>
 <td class=xl7117125></td>
 <td class=xl7117125></td>
 <td class=xl7017125></td>
 <td class=xl7017125></td>
 <td class=xl7017125></td>
 <td class=xl7017125></td>
 <td class=xl7017125></td>
 <td class=xl7017125></td>
 <td class=xl7017125></td>
 <td class=xl7017125></td>
 <td class=xl7017125></td>
 <td class=xl7017125></td>
 <td class=xl7017125></td>
 <td class=xl7017125></td>
 <td class=xl7017125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=19 style='height:14.4pt'>
 <td colspan=10 height=19 class=xl10217125 style='height:14.4pt'>Page 1
 of<span style='mso-spacerun:yes'>� </span>6<span
 style='mso-spacerun:yes'>����������������������������������������������������������������������������������������������������������������������������
 </span>F013-THHC Initial Patient Assessment Physician (Admission)</td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl7017125></td>
 <td class=xl7017125></td>
 <td class=xl7017125></td>
 <td class=xl7117125></td>
 <td class=xl7117125></td>
 <td class=xl7117125></td>
 <td class=xl7117125></td>
 <td class=xl7017125></td>
 <td class=xl7017125></td>
 <td class=xl7017125></td>
 <td class=xl7017125></td>
 <td class=xl7017125></td>
 <td class=xl7017125></td>
 <td class=xl7017125></td>
 <td class=xl7017125></td>
 <td class=xl7017125></td>
 <td class=xl7017125></td>
 <td class=xl7017125></td>
 <td class=xl7017125></td>
 <td class=xl7017125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=19 style='page-break-before:always;height:14.4pt'>
 <td colspan=8 height=19 class=xl9617125 style='height:14.4pt'>ALLERGIES<span
 style='mso-spacerun:yes'>� </span><font class="font1017125">&nbsp;</font><font
 class="font717125"> </font><font class="font1217125">YES</font><font
 class="font717125"><span style='mso-spacerun:yes'>����� </span></font><font
 class="font1017125">&nbsp;</font><font class="font717125"> </font><font
 class="font1217125">NO<span style='mso-spacerun:yes'>�� </span></font><font
 class="font1917125">&nbsp;</font><font class="font1217125"> NKA</font></td>
 <td colspan=2 class=xl13217125 style='border-left:none'>TYPE OF REACTION</td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=19 style='height:14.4pt'>
 <td colspan=2 height=19 class=xl11817125 style='height:14.4pt'><font
 class="font817125">&nbsp;</font><font class="font517125"> Medication</font></td>
 <td colspan=2 class=xl11917125 style='border-left:none'>1</td>
 <td colspan=2 class=xl11917125 style='border-left:none'>2</td>
 <td colspan=2 class=xl11917125 style='border-left:none'>3</td>
 <td colspan=2 class=xl11017125 style='border-left:none'>&nbsp;</td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=19 style='height:14.4pt'>
 <td colspan=2 height=19 class=xl11817125 style='height:14.4pt'><font
 class="font817125">&nbsp;</font><font class="font517125"> Food</font></td>
 <td colspan=2 class=xl11917125 style='border-left:none'>1</td>
 <td colspan=2 class=xl11917125 style='border-left:none'>2</td>
 <td colspan=2 class=xl11917125 style='border-left:none'>3</td>
 <td colspan=2 class=xl11017125 style='border-left:none'>&nbsp;</td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=19 style='height:14.4pt'>
 <td colspan=2 height=19 class=xl11817125 style='height:14.4pt'><font
 class="font817125">&nbsp;</font><font class="font517125"> Other</font></td>
 <td colspan=2 class=xl11917125 style='border-left:none'>1</td>
 <td colspan=2 class=xl11917125 style='border-left:none'>2</td>
 <td colspan=2 class=xl11917125 style='border-left:none'>3</td>
 <td colspan=2 class=xl11017125 style='border-left:none'>&nbsp;</td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=19 style='height:14.4pt'>
 <td colspan=10 height=19 class=xl9617125 style='height:14.4pt'>HEALTH HISTORY</td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=19 style='height:14.4pt'>
 <td colspan=10 height=19 class=xl9617125 style='height:14.4pt'>CUURENT AND /
 OR PAST HEALTH PROBLEMS</td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=19 style='height:14.4pt'>
 <td colspan=2 height=19 class=xl12317125 style='height:14.4pt'><font
 class="font817125">&nbsp;</font><font class="font517125">No Previous Problems</font></td>
 <td colspan=3 class=xl11817125 style='border-left:none'><font
 class="font817125">&nbsp;</font><font class="font517125"> Stroke</font></td>
 <td colspan=2 class=xl11817125 style='border-left:none'><font
 class="font817125">&nbsp;</font><font class="font517125"> Asthma/Bronchitis</font></td>
 <td colspan=3 class=xl11817125 style='border-left:none'><font
 class="font817125">&nbsp;</font><font class="font517125"> Mental Health
 Disorder</font></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=19 style='height:14.4pt'>
 <td colspan=2 height=19 class=xl11817125 style='height:14.4pt'><font
 class="font817125">&nbsp;</font><font class="font517125"> Cancer</font></td>
 <td colspan=3 class=xl11817125 style='border-left:none'><font
 class="font817125">&nbsp;</font><font class="font517125">
 Renal/Prostate/Bladder Problem</font></td>
 <td colspan=2 class=xl11817125 style='border-left:none'><font
 class="font817125">&nbsp;</font><font class="font517125"> Tuberculosis</font></td>
 <td colspan=3 class=xl11817125 style='border-left:none'><font
 class="font817125">&nbsp;</font><font class="font517125"> Sexually
 Transmitted Diseases</font></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=19 style='height:14.4pt'>
 <td colspan=2 height=19 class=xl11817125 style='height:14.4pt'><font
 class="font817125">&nbsp;</font><font class="font517125"> Respiratory Disease</font></td>
 <td colspan=3 class=xl11817125 style='border-left:none'><font
 class="font817125">&nbsp;</font><font class="font517125">
 Gastrointestinal/Bowel Problem</font></td>
 <td colspan=2 class=xl11817125 style='border-left:none'><font
 class="font817125">&nbsp;</font><font class="font517125"> Jundice/Hepatitis</font></td>
 <td colspan=3 rowspan=2 class=xl13417125 width=189 style='width:141pt'><font
 class="font817125">&nbsp;</font><font class="font517125">
 Seizure/Epilepsy/Neurological <br>
   disorder</font></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=19 style='height:14.4pt'>
 <td colspan=2 height=19 class=xl11817125 style='height:14.4pt'><font
 class="font817125">&nbsp;</font><font class="font517125"> High Blood Pressure</font></td>
 <td colspan=3 class=xl11817125 style='border-left:none'><font
 class="font817125">&nbsp;</font><font class="font517125"> Diabetes</font></td>
 <td colspan=2 class=xl11817125 style='border-left:none'><font
 class="font817125">&nbsp;</font><font class="font517125"> Musculoskeletal</font></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=19 style='height:14.4pt'>
 <td colspan=2 height=19 class=xl11817125 style='height:14.4pt'><font
 class="font817125">&nbsp;</font><font class="font517125"> Heart Disease</font></td>
 <td colspan=3 class=xl11817125 style='border-left:none'><font
 class="font817125">&nbsp;</font><font class="font517125"> Blood/Bleeding
 Disorder</font></td>
 <td colspan=2 class=xl11017125 style='border-left:none'>&nbsp;</td>
 <td colspan=3 class=xl11817125 style='border-left:none'><font
 class="font817125">&nbsp;</font><font class="font517125">
 Other:_____________________</font></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=28 style='mso-height-source:userset;height:21.45pt'>
 <td colspan=10 height=28 class=xl13017125 style='height:21.45pt'>Previous
 Hospitalizations/Past Surgeries
 (Where/When/Reasons):_________________________________________</td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=19 style='height:14.4pt'>
 <td colspan=6 height=19 class=xl9617125 style='height:14.4pt'>SLEEP/REST</td>
 <td colspan=4 class=xl13517125 style='border-left:none'>PSYCHOLOGICAL
 ASSESSMENT</td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=19 style='height:14.4pt'>
 <td colspan=6 height=19 class=xl11817125 style='height:14.4pt'><font
 class="font817125">&nbsp;</font><font class="font517125"> No Problems </font><font
 class="font817125">&nbsp;</font><font class="font517125"> Difficulty falling
 sleep </font><font class="font817125">&nbsp;</font><font class="font517125">
 Not rested after sleep<span style='mso-spacerun:yes'></span></font></td>
 <td colspan=4 class=xl11817125 style='border-left:none'><font
 class="font817125">&nbsp;</font><font class="font917125"> No problem
 identified</font></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=19 style='height:14.4pt'>
 <td colspan=6 height=19 class=xl11817125 style='height:14.4pt'><font
 class="font817125">&nbsp;</font><font class="font517125">
 Other:_________________________________________________</font></td>
 <td colspan=4 class=xl11817125 style='border-left:none'><font
 class="font817125">&nbsp;</font><font class="font517125"> Anxious </font><font
 class="font817125">&nbsp;</font><font class="font517125"> Uncooperative </font><font
 class="font817125">&nbsp;</font><font class="font517125"> Depressed<span
 style='mso-spacerun:yes'></span></font></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=19 style='height:14.4pt'>
 <td colspan=6 height=19 class=xl12317125 style='height:14.4pt'><font
 class="font817125">&nbsp;</font><font class="font517125"> Sleep
 routine:Bedtime_____# of hours____#of pillows :____ </font><font
 class="font817125">&nbsp; </font><font class="font517125">Naps</font></td>
 <td colspan=4 class=xl11817125 style='border-left:none'><font
 class="font817125">&nbsp;</font><font class="font517125"> Angry </font><font
 class="font817125">&nbsp;</font><font class="font517125">Agitated
 Combative<span style='mso-spacerun:yes'></span></font></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=19 style='height:14.4pt'>
 <td colspan=6 height=19 class=xl11017125 style='height:14.4pt'>What helps you
 sleep?_______________________________________</td>
 <td colspan=4 class=xl11817125 style='border-left:none'><font
 class="font817125">&nbsp;</font><font class="font517125">
 Other:_________________________</font></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=19 style='height:14.4pt'>
 <td colspan=10 height=19 class=xl9617125 style='height:14.4pt'>PHYSICAL
 ASSESSMENT<span style='mso-spacerun:yes'> </span>Check appropriate box if
 present,If none check No Problem Identified</td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=19 style='height:14.4pt'>
 <td colspan=10 height=19 class=xl9617125 style='height:14.4pt'>GASTROINTESTINAL</td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=19 style='height:14.4pt'>
 <td colspan=3 height=19 class=xl13817125 style='height:14.4pt'>Bowel Sounds</td>
 <td colspan=3 class=xl13817125 style='border-left:none'>Abdomen</td>
 <td colspan=4 class=xl13817125 style='border-left:none'>Tubes</td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=19 style='height:14.4pt'>
 <td colspan=3 height=19 class=xl11817125 style='height:14.4pt'><font
 class="font817125">&nbsp;</font><font class="font517125"> Absent</font></td>
 <td colspan=3 class=xl11817125 style='border-left:none'><font
 class="font817125">&nbsp;</font><font class="font517125"> Soft</font></td>
 <td colspan=4 class=xl11817125 style='border-left:none'><font
 class="font817125">&nbsp;</font><font class="font517125"> NGT</font></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=19 style='height:14.4pt'>
 <td colspan=3 height=19 class=xl11817125 style='height:14.4pt'><font
 class="font817125">&nbsp;</font><font class="font517125"> Present</font></td>
 <td colspan=3 class=xl11817125 style='border-left:none'><font
 class="font817125">&nbsp;</font><font class="font517125"> Distended</font></td>
 <td colspan=4 class=xl11817125 style='border-left:none'><font
 class="font817125">&nbsp;</font><font class="font517125"> PEG</font></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=19 style='height:14.4pt'>
 <td colspan=3 height=19 class=xl11817125 style='height:14.4pt'><font
 class="font817125">&nbsp;</font><font class="font517125"> Hypoactive</font></td>
 <td colspan=3 class=xl11817125 style='border-left:none'><font
 class="font817125">&nbsp;</font><font class="font517125"> Firm</font></td>
 <td colspan=4 class=xl11817125 style='border-left:none'><font
 class="font817125">&nbsp;</font><font class="font517125"> PEG</font></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=19 style='height:14.4pt'>
 <td colspan=3 height=19 class=xl11817125 style='height:14.4pt'><font
 class="font817125">&nbsp;</font><font class="font517125"> Hyperactive</font></td>
 <td colspan=3 class=xl11817125 style='border-left:none'><font
 class="font817125">&nbsp;</font><font class="font517125"> Tenderness</font></td>
 <td colspan=4 rowspan=3 class=xl9917125 width=252 style='width:188pt'><font
 class="font817125">&nbsp;</font><font class="font517125"> Jejunostomy:<br>
   Size:_____________________________<br>
   Site:_____________________________</font></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=19 style='height:14.4pt'>
 <td colspan=3 height=19 class=xl12117125 style='height:14.4pt'>ELIMINATION</td>
 <td colspan=3 class=xl11817125 style='border-left:none'><font
 class="font817125">&nbsp;</font><font class="font517125"> Ascites</font></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=19 style='height:14.4pt'>
 <td colspan=3 height=19 class=xl11817125 style='height:14.4pt'><font
 class="font817125">&nbsp;</font><font class="font517125"> No Problem
 Identified</font></td>
 <td colspan=3 class=xl11817125 style='border-left:none'><font
 class="font817125">&nbsp;</font><font class="font517125"> Girth ________CM</font></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=19 style='height:14.4pt'>
 <td colspan=3 height=19 class=xl11817125 style='height:14.4pt'><font
 class="font817125">&nbsp;</font><font class="font517125"> Constipation</font></td>
 <td colspan=3 class=xl12117125 style='border-left:none'>General</td>
 <td colspan=4 class=xl11817125 style='border-left:none'><font
 class="font817125">&nbsp;</font><font class="font517125">Ballon intact : </font><font
 class="font817125">&nbsp;</font><font class="font517125"> Yes<span
 style='mso-spacerun:yes'>� </span></font><font class="font817125">&nbsp;</font><font
 class="font517125"> No</font></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=19 style='height:14.4pt'>
 <td colspan=3 height=19 class=xl11817125 style='height:14.4pt'><font
 class="font817125">&nbsp;</font><font class="font517125"> Enema</font></td>
 <td colspan=3 class=xl11817125 style='border-left:none'><font
 class="font817125">&nbsp;</font><font class="font517125"> Rectal pain</font></td>
 <td colspan=4 class=xl11917125 style='border-left:none'>Date inserted
 /Changed: _________________</td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=19 style='height:14.4pt'>
 <td colspan=3 height=19 class=xl11817125 style='height:14.4pt'><font
 class="font817125">&nbsp;</font><font class="font517125"> Diarrhea
 _______________/ day</font></td>
 <td colspan=3 class=xl11817125 style='border-left:none'><font
 class="font817125">&nbsp;</font><font class="font517125"> Indigestion</font></td>
 <td colspan=4 class=xl11917125 style='border-left:none'>Change
 every_____________days/months</td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=19 style='height:14.4pt'>
 <td colspan=3 height=19 class=xl11817125 style='height:14.4pt'><font
 class="font817125">&nbsp;</font><font class="font517125"> Black/Tarry stools</font></td>
 <td colspan=3 class=xl11817125 style='border-left:none'><font
 class="font817125">&nbsp;</font><font class="font517125"> Vomiting _______/
 day</font></td>
 <td colspan=4 rowspan=3 class=xl9917125 width=252 style='width:188pt'><font
 class="font817125">&nbsp;</font><font class="font517125">
 Others:_____________________________<br>
   ____________________________________<br>
   ____________________________________</font></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=19 style='height:14.4pt'>
 <td colspan=3 height=19 class=xl11817125 style='height:14.4pt'><font
 class="font817125">&nbsp;</font><font class="font517125"> Ostomy
 Type:______________</font></td>
 <td colspan=3 class=xl11817125 style='border-left:none'><font
 class="font817125">&nbsp;</font><font class="font517125"> Hematemesis</font></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=19 style='height:14.4pt'>
 <td colspan=3 height=19 class=xl11817125 style='height:14.4pt'><font
 class="font817125">&nbsp;</font><font class="font517125"> Stoma
 size_________________</font></td>
 <td colspan=3 class=xl11817125 style='border-left:none'><font
 class="font817125">&nbsp;</font><font class="font517125"> Difficulyt chewing</font></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=19 style='height:14.4pt'>
 <td colspan=10 height=19 class=xl9617125 style='height:14.4pt'>REPRODUCTIVE</td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=19 style='height:14.4pt'>
 <td colspan=3 height=19 class=xl12017125 align=left style='height:14.4pt'>&nbsp;
 <font class="font1017125">&nbsp;</font><font class="font717125"> No Problem
 Identified</font></td>
 <td colspan=3 class=xl12117125 style='border-left:none'>Female</td>
 <td colspan=4 class=xl12117125 style='border-left:none'>Breasts</td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=19 style='height:14.4pt'>
 <td colspan=3 height=19 class=xl12117125 style='height:14.4pt'>MALE</td>
 <td colspan=3 rowspan=2 class=xl9917125 width=189 style='width:141pt'><font
 class="font817125">&nbsp;</font><font class="font517125"> Pregnant<br>
   LMP ______________________</font></td>
 <td colspan=4 class=xl11817125 style='border-left:none'><font
 class="font817125">&nbsp;</font><font class="font517125"> Tenderness</font></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=19 style='height:14.4pt'>
 <td colspan=3 height=19 class=xl11817125 style='height:14.4pt'><font
 class="font817125">&nbsp;</font><font class="font517125"> Prostate problems</font></td>
 <td colspan=4 class=xl11817125 style='border-left:none'><font
 class="font817125">&nbsp;</font><font class="font517125"> Lumps</font></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=19 style='height:14.4pt'>
 <td colspan=3 rowspan=2 height=38 class=xl9917125 width=189 style='height:
 28.8pt;width:141pt'><font class="font817125">&nbsp;</font><font
 class="font517125"> Discharge<br>
   <span style='mso-spacerun:yes'>� </span>Describe ___________________</font></td>
 <td colspan=3 rowspan=2 class=xl9917125 width=189 style='width:141pt'><font
 class="font817125">&nbsp;</font><font class="font517125"> Discharge<br>
   <span style='mso-spacerun:yes'>� </span>Describe ___________________</font></td>
 <td colspan=4 class=xl11817125 style='border-left:none'><font
 class="font817125">&nbsp;</font><font class="font517125"> Discharge</font></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=19 style='height:14.4pt'>
 <td colspan=4 height=19 class=xl11817125 style='height:14.4pt;border-left:
 none'><font class="font817125">&nbsp;</font><font class="font517125">
 Swelling</font></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=19 style='height:14.4pt'>
 <td colspan=3 height=19 class=xl11817125 style='height:14.4pt'><font
 class="font817125">&nbsp;</font><font class="font517125"> Secrotal
 pain/swelling</font></td>
 <td colspan=3 class=xl11817125 style='border-left:none'><font
 class="font817125">&nbsp;</font><font class="font517125"> Lesions</font></td>
 <td colspan=4 class=xl11817125 style='border-left:none'><font
 class="font817125">&nbsp;</font><font class="font517125"> Prosthesis</font></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=19 style='height:14.4pt'>
 <td colspan=3 height=19 class=xl11817125 style='height:14.4pt'><font
 class="font817125">&nbsp;</font><font class="font517125"> Lesions</font></td>
 <td colspan=3 class=xl11817125 style='border-left:none'><font
 class="font817125">&nbsp;</font><font class="font517125"> Itching</font></td>
 <td colspan=4 rowspan=3 class=xl9917125 width=252 style='width:188pt'><font
 class="font817125">&nbsp;</font><font class="font517125">
 Other:_____________________________<br>
   ____________________________________<br>
   ____________________________________</font></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=19 style='mso-height-source:userset;height:14.55pt'>
 <td colspan=3 height=19 class=xl11517125 style='height:14.55pt'>&nbsp;</td>
 <td colspan=3 class=xl11817125 style='border-left:none'><font
 class="font817125">&nbsp;</font><font class="font517125"> Pelviv Pain</font></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=19 style='height:14.4pt'>
 <td height=19 class=xl6517125 style='height:14.4pt;border-top:none'>&nbsp;</td>
 <td class=xl6517125 style='border-top:none;border-left:none'>&nbsp;</td>
 <td class=xl6517125 style='border-top:none;border-left:none'>&nbsp;</td>
 <td colspan=3 class=xl11817125 style='border-left:none'><font
 class="font817125">&nbsp;</font><font class="font517125"> Birth control type
 used_______</font></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=19 style='height:14.4pt'>
 <td colspan=10 height=19 class=xl9617125 style='height:14.4pt'>GENTOURINARY</td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=19 style='height:14.4pt'>
 <td colspan=3 height=19 class=xl10717125 style='height:14.4pt'><font
 class="font817125">&nbsp;</font><font class="font517125"> No Problem
 Identified</font></td>
 <td colspan=2 class=xl10717125 style='border-left:none'><font
 class="font817125">&nbsp;</font><font class="font517125"> Burning</font></td>
 <td colspan=2 class=xl10717125 style='border-left:none'><font
 class="font817125">&nbsp;</font><font class="font517125"> Nocturia</font></td>
 <td colspan=3 class=xl10717125 style='border-left:none'><font
 class="font817125">&nbsp;</font><font class="font517125"> Catheter</font></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=19 style='height:14.4pt'>
 <td colspan=3 height=19 class=xl10717125 style='height:14.4pt'><font
 class="font817125">&nbsp;</font><font class="font517125"> Dialysis</font></td>
 <td colspan=2 class=xl10717125 style='border-left:none'><font
 class="font817125">&nbsp;</font><font class="font517125"> Hematuria</font></td>
 <td colspan=2 class=xl10717125 style='border-left:none'><font
 class="font817125">&nbsp;</font><font class="font517125"> Incontinence<span
 style='mso-spacerun:yes'>�</span></font></td>
 <td colspan=3 class=xl10717125 style='border-left:none'><font
 class="font817125">&nbsp;</font><font class="font517125"> Urethral<span
 style='mso-spacerun:yes'>��� </span></font><font class="font817125">&nbsp;</font><font
 class="font517125"> Suprapubic</font></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=19 style='height:14.4pt'>
 <td colspan=3 height=19 class=xl10717125 style='height:14.4pt'><font
 class="font817125">&nbsp;</font><font class="font517125">
 Hemodialysis________/Week</font></td>
 <td colspan=2 class=xl10717125 style='border-left:none'><font
 class="font817125">&nbsp;</font><font class="font517125"> Oliquria</font></td>
 <td colspan=2 class=xl10717125 style='border-left:none'><font
 class="font817125">&nbsp;</font><font class="font517125"> Retention</font></td>
 <td colspan=3 rowspan=2 class=xl9417125 width=189 style='width:141pt'>Type
 and size_____________<br>
   Urine color ______________</td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=19 style='height:14.4pt'>
 <td colspan=3 height=19 class=xl10717125 style='height:14.4pt'><font
 class="font817125">&nbsp;</font><font class="font517125"> Peritoneal_______/
 day or week</font></td>
 <td colspan=2 class=xl10717125 style='border-left:none'><font
 class="font817125">&nbsp;</font><font class="font517125"> Polyuria</font></td>
 <td colspan=2 class=xl10717125 style='border-left:none'><font
 class="font817125">&nbsp;</font><font class="font517125"> Cloudy Urine</font></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=19 style='height:14.4pt'>
 <td colspan=3 height=19 class=xl10717125 style='height:14.4pt'><font
 class="font817125">&nbsp;</font><font class="font517125"> Painful urination</font></td>
 <td colspan=2 class=xl10717125 style='border-left:none'><font
 class="font817125">&nbsp;</font><font class="font517125"> Dribbling</font></td>
 <td colspan=2 class=xl10717125 style='border-left:none'><font
 class="font817125">&nbsp;</font><font class="font517125"> Condom catheter</font></td>
 <td colspan=3 class=xl10717125 style='border-left:none'><font
 class="font817125">&nbsp;</font><font class="font517125"> Other
 ____________________</font></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=19 style='height:14.4pt'>
 <td colspan=10 height=19 class=xl10217125 style='height:14.4pt'>Page 2
 of<span style='mso-spacerun:yes'>� </span>6<span
 style='mso-spacerun:yes'>����������������������������������������������������������������������������������������������������������������������������
 </span>F013-THHC Initial Patient Assessment Physician (Admission)</td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=19 style='page-break-before:always;height:14.4pt'>
 <td colspan=10 height=19 class=xl9617125 style='height:14.4pt'>SKIN/INTEGUMENTARY<span
 style='mso-spacerun:yes'>���� </span>refer to<span style='mso-spacerun:yes'>�
 </span>F038-THHC Wound Care Dressing Documentation Sheet 1 and 2<span
 style='mso-spacerun:yes'>�</span></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=19 style='height:14.4pt'>
 <td colspan=3 height=19 class=xl10617125 style='height:14.4pt'>Color_______________</td>
 <td colspan=2 class=xl10717125 style='border-left:none'><font
 class="font817125">&nbsp;</font><font class="font517125"> Jaundice</font></td>
 <td colspan=2 class=xl10617125 style='border-left:none'>Moisture</td>
 <td colspan=3 class=xl10617125 style='border-left:none'>Turgor</td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=19 style='height:14.4pt'>
 <td colspan=3 height=19 class=xl10717125 style='height:14.4pt'><font
 class="font817125">&nbsp;</font><font class="font517125"> No Problem
 Identified</font></td>
 <td colspan=2 class=xl10717125 style='border-left:none'><font
 class="font817125">&nbsp;</font><font class="font517125"> Cyanotic</font></td>
 <td colspan=2 class=xl10717125 style='border-left:none'><font
 class="font817125">&nbsp;</font><font class="font517125"> Dry</font></td>
 <td colspan=3 class=xl10717125 style='border-left:none'><font
 class="font817125">&nbsp;</font><font class="font517125"> Poor</font></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=19 style='height:14.4pt'>
 <td colspan=3 height=19 class=xl10717125 style='height:14.4pt'><font
 class="font817125">&nbsp;</font><font class="font517125"> Pale</font></td>
 <td colspan=2 class=xl10617125 style='border-left:none'>Tepreature</td>
 <td colspan=2 class=xl10717125 style='border-left:none'><font
 class="font817125">&nbsp;</font><font class="font517125"> Moisture</font></td>
 <td colspan=3 class=xl10717125 style='border-left:none'><font
 class="font817125">&nbsp;</font><font class="font517125"> Fair</font></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=19 style='height:14.4pt'>
 <td colspan=3 height=19 class=xl10717125 style='height:14.4pt'><font
 class="font817125">&nbsp;</font><font class="font517125"> Flushed</font></td>
 <td colspan=2 class=xl10717125 style='border-left:none'><font
 class="font817125">&nbsp;</font><font class="font517125"> Warm</font></td>
 <td colspan=2 class=xl10717125 style='border-left:none'><font
 class="font817125">&nbsp;</font><font class="font517125"> Diaphoretic</font></td>
 <td colspan=3 class=xl10717125 style='border-left:none'><font
 class="font817125">&nbsp;</font><font class="font517125"> Good</font></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=19 style='height:14.4pt'>
 <td colspan=3 height=19 class=xl10717125 style='height:14.4pt'><font
 class="font817125">&nbsp;</font><font class="font517125"> Mottled</font></td>
 <td colspan=2 class=xl10717125 style='border-left:none'><font
 class="font817125">&nbsp;</font><font class="font517125"> Cool</font></td>
 <td colspan=2 class=xl10717125 style='border-left:none'><font
 class="font817125">&nbsp;</font><font class="font517125"> Night sweat</font></td>
 <td colspan=3 class=xl10617125 style='border-left:none'>Lesions</td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=19 style='mso-height-source:userset;height:14.55pt'>
 <td colspan=3 height=19 class=xl10717125 style='height:14.55pt'><font
 class="font817125">&nbsp;</font><font class="font517125"> Petechiae</font></td>
 <td colspan=2 class=xl9517125 style='border-left:none'>&nbsp;</td>
 <td colspan=2 class=xl9517125 style='border-left:none'>&nbsp;</td>
 <td colspan=3 class=xl10717125 style='border-left:none'><font
 class="font817125">&nbsp;</font><font class="font517125"> No<span
 style='mso-spacerun:yes'>� </span></font><font class="font817125">&nbsp;</font><font
 class="font517125"> Yes #_________wounds</font></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=19 style='height:14.4pt'>
 <td colspan=5 rowspan=2 height=38 class=xl11617125 width=315
 style='height:28.95pt;width:235pt'>Wound (1) Type___________
 Location_______________<br>
   Size_____CM long X ______CM wide X _____ CM Deep</td>
 <td colspan=5 rowspan=2 class=xl11617125 width=315 style='width:235pt'>Wound
 (4) Type___________ Location_______________<br>
   Size_____CM long X ______CM wide X _____ CM Deep</td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=19 style='mso-height-source:userset;height:14.55pt'>
 <td height=19 class=xl6553517125 style='height:14.55pt'></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=19 style='height:14.4pt'>
 <td colspan=5 rowspan=2 height=38 class=xl11617125 width=315
 style='height:28.95pt;width:235pt'>Wound (2) Type___________
 Location_______________<br>
   Size_____CM long X ______CM wide X _____ CM Deep</td>
 <td colspan=5 rowspan=2 class=xl11617125 width=315 style='width:235pt'>Wound
 (5) Type___________ Location_______________<br>
   Size_____CM long X ______CM wide X _____ CM Deep</td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=19 style='mso-height-source:userset;height:14.55pt'>
 <td height=19 class=xl6553517125 style='height:14.55pt'></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=19 style='height:14.4pt'>
 <td colspan=5 rowspan=2 height=38 class=xl11617125 width=315
 style='height:28.8pt;width:235pt'>Wound (3) Type___________
 Location_______________<br>
   Size_____CM long X ______CM wide X _____ CM Deep</td>
 <td colspan=5 rowspan=2 class=xl11617125 width=315 style='width:235pt'>Wound
 (6) Type___________ Location_______________<br>
   Size_____CM long X ______CM wide X _____ CM Deep</td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=19 style='height:14.4pt'>
 <td height=19 class=xl6553517125 style='height:14.4pt'></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=19 style='height:14.4pt'>
 <td colspan=10 height=19 class=xl9617125 style='height:14.4pt'>NEUROLOGICAL</td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=19 style='height:14.4pt'>
 <td colspan=2 height=19 class=xl11317125 style='height:14.4pt'><font
 class="font1617125">&nbsp;</font><font class="font617125"> No Problem
 Identified</font></td>
 <td colspan=2 rowspan=2 class=xl9917125 width=126 style='width:94pt'><font
 class="font817125">&nbsp;</font><font class="font917125"> Weakness<br>
   Location:_________</font></td>
 <td colspan=3 rowspan=3 class=xl9917125 width=189 style='width:141pt'><font
 class="font817125">&nbsp;</font><font class="font517125">
 Seizure___________/years<br>
   <span style='mso-spacerun:yes'>� </span>Frequency______________<br>
   <span style='mso-spacerun:yes'>� </span>Medication ____________</font></td>
 <td colspan=3 class=xl10617125 style='border-left:none'>Responsiveness</td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=19 style='height:14.4pt'>
 <td colspan=2 height=19 class=xl10617125 style='height:14.4pt'>General</td>
 <td colspan=3 class=xl10717125 style='border-left:none'><font
 class="font817125">&nbsp;</font><font class="font517125"> To verbal stimuli</font></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=19 style='height:14.4pt'>
 <td colspan=2 rowspan=2 height=38 class=xl9917125 width=126 style='height:
 28.8pt;width:94pt'><font class="font817125">&nbsp;</font><font
 class="font517125"> Numbness:<br>
   Location:_________</font></td>
 <td colspan=2 rowspan=2 class=xl9917125 width=126 style='width:94pt'><font
 class="font817125">&nbsp;</font><font class="font917125"> Decreased
 Sensation<br>
   Location:_________</font></td>
 <td colspan=3 class=xl10717125 style='border-left:none'><font
 class="font817125">&nbsp;</font><font class="font517125"> To touch</font></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=19 style='height:14.4pt'>
 <td colspan=3 height=19 class=xl10617125 style='height:14.4pt;border-left:
 none'>Level of consciousness</td>
 <td colspan=3 class=xl10717125 style='border-left:none'><font
 class="font817125">&nbsp;</font><font class="font517125"> To painful stimuli</font></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=19 style='height:14.4pt'>
 <td colspan=2 rowspan=2 height=38 class=xl9917125 width=126 style='height:
 28.8pt;width:94pt'><font class="font817125">&nbsp;</font><font
 class="font517125"> Tingling:<br>
   Location:_________</font></td>
 <td colspan=2 class=xl10717125 style='border-left:none'><font
 class="font817125">&nbsp;</font><font class="font517125"> Vertigo</font></td>
 <td colspan=3 class=xl10717125 style='border-left:none'><font
 class="font817125">&nbsp;</font><font class="font517125"> Alert<span
 style='mso-spacerun:yes'>��� </span></font><font class="font817125">&nbsp;</font><font
 class="font517125"> Lethargic</font></td>
 <td colspan=3 class=xl10717125 style='border-left:none'><font
 class="font817125">&nbsp;</font><font class="font517125"> No response</font></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=19 style='height:14.4pt'>
 <td colspan=2 height=19 class=xl10717125 style='height:14.4pt;border-left:
 none'><font class="font817125">&nbsp;</font><font class="font517125"> Ataxia</font></td>
 <td colspan=3 class=xl10717125 style='border-left:none'><font
 class="font817125">&nbsp;</font><font class="font517125"> Stuporous<span
 style='mso-spacerun:yes'>� </span></font><font class="font817125">&nbsp;</font><font
 class="font517125"> Unconscious</font></td>
 <td colspan=3 rowspan=5 class=xl9917125 width=189 style='width:141pt'><font
 class="font817125">&nbsp;</font><font class="font517125">
 Other:_____________________<br>
   ___________________________<br>
   ___________________________<br>
   ___________________________<br>
   ___________________________</font></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=19 style='height:14.4pt'>
 <td colspan=2 rowspan=2 height=38 class=xl9917125 width=126 style='height:
 28.8pt;width:94pt'><font class="font817125">&nbsp;</font><font
 class="font517125"> Paralysis:<br>
   Location:_________</font></td>
 <td colspan=2 class=xl10717125 style='border-left:none'><font
 class="font817125">&nbsp;</font><font class="font517125"> Dizziness</font></td>
 <td colspan=3 class=xl10617125 style='border-left:none'>Oriented to</td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=19 style='height:14.4pt'>
 <td colspan=2 height=19 class=xl10717125 style='height:14.4pt;border-left:
 none'><font class="font817125">&nbsp;</font><font class="font517125">
 Headache</font></td>
 <td colspan=3 class=xl10717125 style='border-left:none'><font
 class="font817125">&nbsp;</font><font class="font517125"> Person<span
 style='mso-spacerun:yes'>��� </span></font><font class="font817125">&nbsp;</font><font
 class="font517125"> Place<span style='mso-spacerun:yes'>� </span></font><font
 class="font817125">&nbsp;</font><font class="font517125"> Time</font></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=19 style='height:14.4pt'>
 <td colspan=2 rowspan=2 height=38 class=xl9917125 width=126 style='height:
 28.8pt;width:94pt'><font class="font817125">&nbsp;</font><font
 class="font517125"> Tremors:<br>
   Location:_________</font></td>
 <td colspan=2 class=xl10717125 style='border-left:none'><font
 class="font817125">&nbsp;</font><font class="font517125"> Syncope</font></td>
 <td colspan=3 class=xl10717125 style='border-left:none'><font
 class="font817125">&nbsp;</font><font class="font517125"> Confused</font></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=19 style='height:14.4pt'>
 <td colspan=5 height=19 class=xl11517125 style='height:14.4pt;border-left:
 none'>&nbsp;</td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=19 style='height:14.4pt'>
 <td colspan=10 height=19 class=xl9617125 style='height:14.4pt'>CARDIOVASCULAR</td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=19 style='height:14.4pt'>
 <td colspan=2 height=19 class=xl11317125 style='height:14.4pt'><font
 class="font1617125">&nbsp;</font><font class="font617125"> No Problem
 Identified</font></td>
 <td colspan=3 class=xl10617125 style='border-left:none'>Pedal Pulses:</td>
 <td colspan=2 class=xl10617125 style='border-left:none'>Nail Beds</td>
 <td colspan=3 rowspan=4 class=xl9417125 width=189 style='width:141pt'>AV
 Fistula<br>
   Location___________________<br>
   Date Done _________________<br>
   Bruit<span style='mso-spacerun:yes'>� </span><font class="font817125">&nbsp;</font><font
 class="font517125"> Present<span style='mso-spacerun:yes'>� </span></font><font
 class="font817125">&nbsp;</font><font class="font517125"> Absent</font></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=19 style='height:14.4pt'>
 <td colspan=2 height=19 class=xl10617125 style='height:14.4pt'>General</td>
 <td colspan=3 class=xl10717125 style='border-left:none'><font
 class="font817125">&nbsp;</font><font class="font517125"> Palpable</font></td>
 <td colspan=2 class=xl11317125 style='border-left:none'><font
 class="font1617125">&nbsp;</font><font class="font617125"> Pink </font><font
 class="font1617125">&nbsp;</font><font class="font617125"> Pale </font><font
 class="font1617125">&nbsp;</font><font class="font617125"> Cyanotic</font></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=19 style='height:14.4pt'>
 <td colspan=2 height=19 class=xl11317125 style='height:14.4pt'><font
 class="font1617125">&nbsp;</font><font class="font617125"> Chest pain</font><font
 class="font1617125">&nbsp;</font><font class="font617125"> Palpitation</font></td>
 <td colspan=3 class=xl10717125 style='border-left:none'><font
 class="font817125">&nbsp;</font><font class="font517125"> Unevenly Palpable</font></td>
 <td colspan=2 rowspan=3 class=xl9417125 width=126 style='width:94pt'>Capillary
 Refill:<br>
   <font class="font817125">&nbsp;</font><font class="font517125"> Fast<span
 style='mso-spacerun:yes'>� </span></font><font class="font817125">&nbsp;</font><font
 class="font517125"> Slow<br>
   </font><font class="font817125">&nbsp;</font><font class="font517125"> </font><font
 class="font617125">Jugular Vein Distention</font></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=19 style='height:14.4pt'>
 <td colspan=2 height=19 class=xl10717125 style='height:14.4pt'><font
 class="font817125">&nbsp;</font><font class="font517125"> Pacemaker<span
 style='mso-spacerun:yes'>�</span></font></td>
 <td colspan=3 class=xl10717125 style='border-left:none'><font
 class="font817125">&nbsp;</font><font class="font517125"> Absent</font></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=19 style='mso-height-source:userset;height:14.55pt'>
 <td colspan=2 height=19 class=xl10717125 style='height:14.55pt'><font
 class="font817125">&nbsp;</font><font class="font517125"> Pain in calve</font></td>
 <td colspan=3 rowspan=3 class=xl9417125 width=189 style='width:141pt'>Edema: <font
 class="font817125">&nbsp;</font><font class="font517125"> Yes<span
 style='mso-spacerun:yes'>���� </span></font><font class="font817125">&nbsp;</font><font
 class="font517125"> No<br>
   Location:______________<br>
   </font><font class="font817125">&nbsp;</font><font class="font517125">
 Pitting<span style='mso-spacerun:yes'>��� </span></font><font
 class="font817125">&nbsp;</font><font class="font517125"> Non-Pitting</font></td>
 <td colspan=3 rowspan=4 class=xl9417125 width=189 style='width:141pt'>&nbsp;
 Other:_____________________<br>
   ___________________________<br>
   ___________________________<br>
   ___________________________<br>
   ___________________________</td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=19 style='height:14.4pt'>
 <td colspan=2 height=19 class=xl10617125 style='height:14.4pt'>Pulse/Heart
 Beat</td>
 <td colspan=2 rowspan=2 class=xl9417125 width=126 style='width:94pt'>Calaudication:<br>
   Location__________</td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=19 style='height:14.4pt'>
 <td colspan=2 height=19 class=xl10717125 style='height:14.4pt'><font
 class="font817125">&nbsp;</font><font class="font517125"> Regular </font><font
 class="font817125">&nbsp;</font><font class="font517125"> Strong</font></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=19 style='height:14.4pt'>
 <td colspan=2 height=19 class=xl10717125 style='height:14.4pt'><font
 class="font817125">&nbsp;</font><font class="font517125"> Irregular<span
 style='mso-spacerun:yes'>� </span></font><font class="font817125">&nbsp;</font><font
 class="font517125"> Weak</font></td>
 <td colspan=3 class=xl9517125 style='border-left:none'>&nbsp;</td>
 <td colspan=2 class=xl9517125 style='border-left:none'>&nbsp;</td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=19 style='height:14.4pt'>
 <td colspan=10 height=19 class=xl9617125 style='height:14.4pt'>EENT AND MOUTH</td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=19 style='height:14.4pt'>
 <td colspan=2 height=19 class=xl11217125 style='height:14.4pt'>Eyes</td>
 <td colspan=3 class=xl10617125 style='border-left:none'>Ears</td>
 <td colspan=2 class=xl10617125 style='border-left:none'>Nose</td>
 <td colspan=3 class=xl10617125 style='border-left:none'>Throat / Neck</td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=19 style='height:14.4pt'>
 <td colspan=2 height=19 class=xl10817125 style='height:14.4pt'><font
 class="font1717125">&nbsp;</font><font class="font1117125">No Problem
 Identified</font></td>
 <td colspan=3 class=xl11117125 style='border-left:none'><font
 class="font1017125">&nbsp; </font><font class="font717125">No Problem
 Identified</font></td>
 <td colspan=2 class=xl10817125 style='border-left:none'><font
 class="font1717125">&nbsp;</font><font class="font1117125">No Problem
 Identified</font></td>
 <td colspan=3 class=xl11117125 style='border-left:none'><font
 class="font1017125">&nbsp; </font><font class="font717125">No Problem
 Identified</font></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=19 style='height:14.4pt'>
 <td colspan=2 height=19 class=xl10717125 style='height:14.4pt'><font
 class="font817125">&nbsp;</font><font class="font517125"> Glass eye<span
 style='mso-spacerun:yes'>������ </span>R<span style='mso-spacerun:yes'>���
 </span>L</font></td>
 <td colspan=3 class=xl10717125 style='border-left:none'><font
 class="font817125">&nbsp;</font><font class="font517125"> Hard of
 hearing<span style='mso-spacerun:yes'>������� </span>R<span
 style='mso-spacerun:yes'>���� </span>L</font></td>
 <td colspan=2 rowspan=2 class=xl9917125 width=126 style='width:94pt'><font
 class="font817125">&nbsp;</font><font class="font517125"> Drainage<br>
   Type _____________</font></td>
 <td colspan=3 class=xl10717125 style='border-left:none'><font
 class="font817125">&nbsp;</font><font class="font517125"> Difficulty
 Swallowing</font></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=19 style='height:14.4pt'>
 <td colspan=2 height=19 class=xl10717125 style='height:14.4pt'><font
 class="font817125">&nbsp;</font><font class="font517125"> Redness<span
 style='mso-spacerun:yes'>�������� </span>R<span style='mso-spacerun:yes'>���
 </span>L</font></td>
 <td colspan=3 class=xl10717125 style='border-left:none'><font
 class="font817125">&nbsp;</font><font class="font517125"> Defeness<span
 style='mso-spacerun:yes'>����������������� </span>R<span
 style='mso-spacerun:yes'>���� </span>L</font></td>
 <td colspan=3 class=xl10717125 style='border-left:none'><font
 class="font817125">&nbsp;</font><font class="font517125">
 Lesions:Location______________</font></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=19 style='height:14.4pt'>
 <td colspan=2 height=19 class=xl10717125 style='height:14.4pt'><font
 class="font817125">&nbsp;</font><font class="font517125"> Pain<span
 style='mso-spacerun:yes'>�������������� </span>R<span
 style='mso-spacerun:yes'>��� </span>L</font></td>
 <td colspan=3 class=xl10717125 style='border-left:none'><font
 class="font817125">&nbsp;</font><font class="font517125"> Pain<span
 style='mso-spacerun:yes'>������������������������ </span>R<span
 style='mso-spacerun:yes'>���� </span>L</font></td>
 <td colspan=2 class=xl10717125 style='border-left:none'><font
 class="font817125">&nbsp;</font><font class="font517125"> Epistaxis</font></td>
 <td colspan=3 class=xl10717125 style='border-left:none'><font
 class="font817125">&nbsp;</font><font class="font517125"> Pain<span
 style='mso-spacerun:yes'>� </span>S</font><font class="font817125">&nbsp;</font><font
 class="font517125"> wollen glands</font></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=19 style='height:14.4pt'>
 <td colspan=2 height=19 class=xl10717125 style='height:14.4pt'><font
 class="font817125">&nbsp;</font><font class="font517125"> Disharge<span
 style='mso-spacerun:yes'>������� </span>R<span style='mso-spacerun:yes'>���
 </span>L</font></td>
 <td colspan=3 class=xl10717125 style='border-left:none'><font
 class="font817125">&nbsp;</font><font class="font517125"> Drainage<span
 style='mso-spacerun:yes'>���������������� </span>R<span
 style='mso-spacerun:yes'>���� </span>L</font></td>
 <td colspan=2 class=xl10717125 style='border-left:none'><font
 class="font817125">&nbsp;</font><font class="font517125"> Congestion</font></td>
 <td colspan=3 class=xl10717125 style='border-left:none'><font
 class="font817125">&nbsp;</font><font class="font517125"> Bleeding<span
 style='mso-spacerun:yes'>� </span></font><font class="font817125">&nbsp;</font><font
 class="font517125"> Swollen gums</font></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=19 style='height:14.4pt'>
 <td colspan=2 height=19 class=xl10717125 style='height:14.4pt'><font
 class="font817125">&nbsp;</font><font class="font517125"> Blind<span
 style='mso-spacerun:yes'>������������ </span>R<span
 style='mso-spacerun:yes'>��� </span>L</font></td>
 <td colspan=3 class=xl10717125 style='border-left:none'><font
 class="font817125">&nbsp;</font><font class="font517125"> Deaf<span
 style='mso-spacerun:yes'>����������������������� </span>R<span
 style='mso-spacerun:yes'>��� </span>L<span style='mso-spacerun:yes'>�</span></font></td>
 <td colspan=2 class=xl11017125 style='border-left:none'>&nbsp;</td>
 <td colspan=3 class=xl9517125 style='border-left:none'>Other______________________</td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=19 style='height:14.4pt'>
 <td colspan=10 height=19 class=xl10217125 style='height:14.4pt'>Page 3
 of<span style='mso-spacerun:yes'>� </span>6<span
 style='mso-spacerun:yes'>��������������������������������������������������������������������������������������������������������������������������
 </span>F013-THHC Initial Patient Assessment Physician (Admission)</td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=19 style='page-break-before:always;height:14.4pt'>
 <td colspan=10 height=19 class=xl9617125 style='height:14.4pt'>RESPIRATORY</td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=19 style='height:14.4pt'>
 <td colspan=2 height=19 class=xl10817125 style='height:14.4pt'><font
 class="font1717125">&nbsp;</font><font class="font1117125">No Problem
 Identified</font></td>
 <td colspan=2 rowspan=6 class=xl9417125 width=126 style='width:94pt'><font
 class="font717125">Breath Sound<br>
   </font><font class="font1017125">&nbsp;</font><font class="font717125"> </font><font
 class="font517125">Clear all lobes<br>
   </font><font class="font817125">&nbsp;</font><font class="font517125">
 Rhonchi:<span style='mso-spacerun:yes'>������ </span>R / L <br>
   </font><font class="font817125">&nbsp;</font><font class="font517125">
 Crackles:<span style='mso-spacerun:yes'>����� </span>R / L <br>
   </font><font class="font817125">&nbsp;</font><font class="font517125">
 Wheezes:<span style='mso-spacerun:yes'>���� </span>R / L <br>
   </font><font class="font817125">&nbsp;</font><font class="font517125">
 Decreased:<span style='mso-spacerun:yes'>�� </span>R / L<span
 style='mso-spacerun:yes'>�</span></font></td>
 <td colspan=3 rowspan=6 class=xl9917125 width=189 style='width:141pt'><font
 class="font1017125">&nbsp;</font><font class="font717125"> Tracheostomy<br>
   </font><font class="font1017125">&nbsp;</font><font class="font717125"> </font><font
 class="font517125">No tube </font><font class="font817125">&nbsp;</font><font
 class="font517125"> Tube in<br>
   Type________Size ________<br>
   </font><font class="font817125">&nbsp;</font><font class="font517125">
 Cuffed<span style='mso-spacerun:yes'>� </span></font><font class="font817125">&nbsp;</font><font
 class="font517125"> Non-cuffed<br>
   Cuff: </font><font class="font817125">&nbsp;</font><font class="font517125">
 Deflated<span style='mso-spacerun:yes'>�� </span></font><font
 class="font817125">&nbsp;</font><font class="font517125"> Inflated<br>
   ____________cuff pressure</font></td>
 <td colspan=3 rowspan=3 class=xl10017125 width=189 style='width:141pt'><font
 class="font1317125">&nbsp;</font><font class="font1417125"> </font><font
 class="font717125">Ventilator<br>
   </font><font class="font1017125">&nbsp;</font><font class="font717125"> </font><font
 class="font517125">No<span style='mso-spacerun:yes'>�� </span></font><font
 class="font817125">&nbsp;</font><font class="font517125"> Yes<br>
   Type ______________________</font></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=19 style='height:14.4pt'>
 <td colspan=2 rowspan=3 height=57 class=xl9417125 width=126 style='height:
 43.2pt;width:94pt'><font class="font717125">Chest Apperance</font><font
 class="font517125"><br>
   </font><font class="font817125">&nbsp;</font><font class="font517125">
 Symmetrical<br>
   </font><font class="font817125">&nbsp;</font><font class="font517125">
 Asymmetrical</font></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=19 style='height:14.4pt'>
 <td height=19 class=xl6553517125 style='height:14.4pt'></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=19 style='height:14.4pt'>
 <td colspan=3 rowspan=9 height=171 class=xl9417125 width=189
 style='height:129.75pt;width:141pt'>Settings:<br>
   Mode:___________________<br>
   Rate:____________________<br>
   Tidal Volume____________ML<br>
   PEEP _________________cmH2o<br>
   Pressure Support ________cmH2o<br>
   FiO2___________________%<br>
   Minute Volume____________ML<br>
   Others______________________<br>
   ___________________________</td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=19 style='height:14.4pt'>
 <td colspan=2 height=19 class=xl10617125 style='height:14.4pt'>Breath Pattern</td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=19 style='height:14.4pt'>
 <td colspan=2 height=19 class=xl10717125 style='height:14.4pt'><font
 class="font817125">&nbsp;</font><font class="font517125"> Dyspnea at rest</font></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=19 style='mso-height-source:userset;height:14.55pt'>
 <td colspan=2 height=19 class=xl10717125 style='height:14.55pt'><font
 class="font817125">&nbsp;</font><font class="font517125"> Dyspnea on exertion</font></td>
 <td colspan=2 rowspan=6 class=xl9417125 width=126 style='width:94pt'><font
 class="font717125">Cough</font><font class="font517125"><br>
   </font><font class="font817125">&nbsp;</font><font class="font517125">
 Absent<br>
   </font><font class="font817125">&nbsp;</font><font class="font517125"> Non
 Productive<br>
   </font><font class="font817125">&nbsp;</font><font class="font517125">
 Productive<br>
   Color ___________<br>
   Amount ___________<br>
   </font></td>
 <td colspan=3 rowspan=6 class=xl10417125 width=189 style='width:141pt'><font
 class="font1017125">&nbsp;</font><font class="font717125"> Oxygen
 Therapy<br>
   </font><font class="font517125">By ________ ____At_____L/min<br>
   <br>
   </font><font class="font817125">&nbsp;</font><font class="font517125">
 Concentrator<span style='mso-spacerun:yes'>� </span></font><font
 class="font817125">&nbsp;</font><font class="font517125"> Cylinder<br>
   </font><font class="font817125">&nbsp;</font><font class="font517125">
 Bi-Pap<span style='mso-spacerun:yes'>�� </span></font><font class="font817125">&nbsp;</font><font
 class="font517125"> C-Pap</font></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6617125></td>
 <td class=xl6717125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=19 style='height:14.4pt'>
 <td colspan=2 height=19 class=xl10717125 style='height:14.4pt'><font
 class="font817125">&nbsp;</font><font class="font517125"> Non-labored</font></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6717125></td>
 <td class=xl6717125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=19 style='height:14.4pt'>
 <td colspan=2 height=19 class=xl10717125 style='height:14.4pt'><font
 class="font817125">&nbsp;</font><font class="font517125"> Shortness of breath</font></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6717125></td>
 <td class=xl6717125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=19 style='height:14.4pt'>
 <td colspan=2 rowspan=3 height=57 class=xl10517125 style='height:43.2pt'>&nbsp;</td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=19 style='height:14.4pt'>
 <td height=19 class=xl6553517125 style='height:14.4pt'></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=19 style='height:14.4pt'>
 <td height=19 class=xl6553517125 style='height:14.4pt'></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=19 style='height:14.4pt'>
 <td colspan=10 height=19 class=xl9617125 style='height:14.4pt'>NUTRITION<span
 style='mso-spacerun:yes'>� </span>ASSESSMENT<span
 style='mso-spacerun:yes'>�</span></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=36 style='mso-height-source:userset;height:27.45pt'>
 <td colspan=10 height=36 class=xl7817125 width=630 style='border-right:.5pt solid black;
 height:27.45pt;width:470pt'>Nutritional needs:<span
 style='mso-spacerun:yes'>����� </span>&nbsp; <font class="font817125">&nbsp;</font><font
 class="font517125"> Normal Diet<span style='mso-spacerun:yes'>���
 </span>&nbsp; </font><font class="font817125">&nbsp;</font><font
 class="font517125"> Special/Modified Diet:_____________________<br>
   Funtional status:<span style='mso-spacerun:yes'>��������� </span></font><font
 class="font817125">&nbsp;</font><font class="font517125"> Normal ADL<span
 style='mso-spacerun:yes'>���� </span></font><font class="font817125">&nbsp;</font><font
 class="font517125">Fall Risk assessment Score:_________________</font></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=19 style='height:14.4pt'>
 <td colspan=10 height=19 class=xl9617125 style='height:14.4pt'>ENDOCRINE/DIABETES</td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=19 style='mso-height-source:userset;height:14.55pt'>
 <td colspan=5 rowspan=2 height=38 class=xl9917125 width=315 style='height:
 28.95pt;width:235pt'><font class="font817125">&nbsp;</font><font
 class="font517125"> Diabetes Mellitus<br>
   </font><font class="font717125">Type:<span style='mso-spacerun:yes'>�
 </span></font><font class="font1017125">&nbsp;</font><font class="font717125">
 </font><font class="font517125">IDDM<span style='mso-spacerun:yes'>� </span></font><font
 class="font817125">&nbsp;</font><font class="font517125"> NIDDM<span
 style='mso-spacerun:yes'>�� </span>Number of years _________</font></td>
 <td colspan=5 rowspan=7 class=xl9417125 width=315 style='width:235pt'><font
 class="font717125">Medication:</font><font class="font517125"> </font><font
 class="font817125">&nbsp;</font><font class="font517125"> Oral Hypoglycemia
 Agent<span style='mso-spacerun:yes'>� </span></font><font class="font817125">&nbsp;</font><font
 class="font517125"> Insuline<br>
   Insulin Type_______Current Dose ________Freq_______<br>
   *See Sliding Scale(Diabetic flow sheet) if available<br>
   Draws Insulin<span style='mso-spacerun:yes'>� </span></font><font
 class="font817125">&nbsp;</font><font class="font517125"> Patient </font><font
 class="font817125">&nbsp; </font><font class="font517125">Family<span
 style='mso-spacerun:yes'>� </span></font><font class="font817125">&nbsp;</font><font
 class="font517125"> Other_____________<br>
   Administering Insulin<span style='mso-spacerun:yes'>� </span></font><font
 class="font817125">&nbsp;</font><font class="font517125"> Patient<span
 style='mso-spacerun:yes'>� </span></font><font class="font817125">&nbsp;</font><font
 class="font517125"> Other ______________<br>
   </font><font class="font817125">&nbsp;</font><font class="font517125">
 Polydipsia<span style='mso-spacerun:yes'>��� </span></font><font
 class="font817125">&nbsp;</font><font class="font517125"> Polyuria<span
 style='mso-spacerun:yes'>���� </span></font><font class="font817125">&nbsp;</font><font
 class="font517125"> Weight Changes<br>
   Others:_________________________________________</font></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=19 style='height:14.4pt'>
 <td height=19 class=xl6553517125 style='height:14.4pt'></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=19 style='mso-height-source:userset;height:14.55pt'>
 <td colspan=5 rowspan=5 height=95 class=xl9417125 width=315 style='height:
 72.15pt;width:235pt'>Blood Sugar: ______<font class="font817125">&nbsp;</font><font
 class="font517125"> Fasting<span style='mso-spacerun:yes'>���������������
 </span>______</font><font class="font817125">&nbsp;</font><font
 class="font517125"> Random<br>
   Home Glucometer<span style='mso-spacerun:yes'>� </span></font><font
 class="font817125">&nbsp;</font><font class="font517125"> Available<span
 style='mso-spacerun:yes'>�� </span></font><font class="font817125">&nbsp;</font><font
 class="font517125"> Unavailable <br>
   Blood Sugae Checked By:<br>
   </font><font class="font817125">&nbsp;</font><font class="font517125">
 Patient<span style='mso-spacerun:yes'>�� </span></font><font
 class="font817125">&nbsp;</font><font class="font517125"> Family<span
 style='mso-spacerun:yes'>� </span></font><font class="font817125">&nbsp;</font><font
 class="font517125"> Other______________________<br>
   Home Record of Blood Sugar<span style='mso-spacerun:yes'>�� </span></font><font
 class="font817125">&nbsp;</font><font class="font517125">Available<span
 style='mso-spacerun:yes'>�� </span></font><font class="font817125">&nbsp;</font><font
 class="font517125"> Unavailable<br>
   </font></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=19 style='height:14.4pt'>
 <td height=19 class=xl6553517125 style='height:14.4pt'></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=19 style='height:14.4pt'>
 <td height=19 class=xl6553517125 style='height:14.4pt'></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=19 style='height:14.4pt'>
 <td height=19 class=xl6553517125 style='height:14.4pt'></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=19 style='height:14.4pt'>
 <td height=19 class=xl6553517125 style='height:14.4pt'></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=19 style='height:14.4pt'>
 <td colspan=10 height=19 class=xl9617125 style='height:14.4pt'>SOCIO-ECONOMIC</td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=19 style='height:14.4pt'>
 <td colspan=10 rowspan=7 height=133 class=xl9417125 width=630
 style='height:100.8pt;width:470pt'><font class="font717125">Gender</font><font
 class="font517125">:<span style='mso-spacerun:yes'>����� </span></font><font
 class="font817125">&nbsp;</font><font class="font517125"> Male<span
 style='mso-spacerun:yes'>������ </span></font><font class="font817125">&nbsp;</font><font
 class="font517125"> Female<span style='mso-spacerun:yes'>����������� </span></font><font
 class="font817125">&nbsp;</font><font class="font517125">
 Age______________Years/Months<br>
   </font><font class="font717125">Living Situation:</font><font
 class="font517125"><span style='mso-spacerun:yes'>� </span></font><font
 class="font817125">&nbsp;</font><font class="font517125"> Single<span
 style='mso-spacerun:yes'>��� </span></font><font class="font817125">&nbsp;</font><font
 class="font517125"> Divorced<span style='mso-spacerun:yes'>��� </span></font><font
 class="font817125">&nbsp;</font><font class="font517125"> Widow<span
 style='mso-spacerun:yes'>�� </span></font><font class="font817125">&nbsp;</font><font
 class="font517125"> Maried:# of Wives ___________ </font><font
 class="font817125">&nbsp;</font><font class="font517125"> # of
 Children_________<br>
   </font><font class="font717125">Living Condition:</font><font
 class="font517125"><span style='mso-spacerun:yes'>� </span></font><font
 class="font817125">&nbsp;</font><font class="font517125"> Alone<span
 style='mso-spacerun:yes'>�� </span></font><font class="font817125">&nbsp;</font><font
 class="font517125"> With Family<br>
   </font><font class="font817125">&nbsp;</font><font class="font517125">
 Highest Education ____________<span style='mso-spacerun:yes'>� </span></font><font
 class="font817125">&nbsp;</font><font class="font517125"> None<span
 style='mso-spacerun:yes'>� </span></font><font class="font817125">&nbsp;</font><font
 class="font517125"> Employed,Job___________ </font><font class="font817125">&nbsp;</font><font
 class="font517125"> Unemployed_________Months/Years<br>
   </font><font class="font717125">Nationality: </font><font
 class="font1017125">&nbsp;</font><font class="font717125"> </font><font
 class="font517125">Saudi<span style='mso-spacerun:yes'>���� </span></font><font
 class="font817125">&nbsp;</font><font class="font517125"> Non-Saudi<br>
   </font><font class="font817125">&nbsp;</font><font class="font517125">
 Receiving Financial Aide<span style='mso-spacerun:yes'>�� </span></font><font
 class="font817125">&nbsp;</font><font class="font517125"><span
 style='mso-spacerun:yes'>� </span>Poor personal and home hygiene<span
 style='mso-spacerun:yes'>� </span></font><font class="font817125">&nbsp;</font><font
 class="font517125"> Supportive Caregiver<span style='mso-spacerun:yes'>�
 </span></font><font class="font817125">&nbsp;</font><font class="font517125">
 Neglected<br>
   </font><font class="font717125">Smoking</font><font class="font517125"><span
 style='mso-spacerun:yes'>� </span></font><font class="font817125">&nbsp;</font><font
 class="font517125"> No<span style='mso-spacerun:yes'>� </span></font><font
 class="font817125">&nbsp;</font><font class="font517125"> Yes
 _______cigs/day<span style='mso-spacerun:yes'>�� </span></font><font
 class="font817125">&nbsp;</font><font class="font517125"> Quit
 ______Monts/Years<span style='mso-spacerun:yes'>� </span></font><font
 class="font817125">&nbsp;</font><font class="font517125">
 Others___________________________</font></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=19 style='height:14.4pt'>
 <td height=19 class=xl6553517125 style='height:14.4pt'></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=19 style='height:14.4pt'>
 <td height=19 class=xl6553517125 style='height:14.4pt'></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=19 style='height:14.4pt'>
 <td height=19 class=xl6553517125 style='height:14.4pt'></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=19 style='height:14.4pt'>
 <td height=19 class=xl6553517125 style='height:14.4pt'></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=19 style='height:14.4pt'>
 <td height=19 class=xl6553517125 style='height:14.4pt'></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=19 style='height:14.4pt'>
 <td height=19 class=xl6553517125 style='height:14.4pt'></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=19 style='height:14.4pt'>
 <td colspan=10 height=19 class=xl9617125 style='height:14.4pt'>FUNCTIONAL AND
 MUSCULOSKELETAL ASSESSMENT</td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=19 style='height:14.4pt'>
 <td colspan=2 height=19 class=xl9317125 align=left style='height:14.4pt'>SELF
 CARE</td>
 <td colspan=2 class=xl8917125 align=left style='border-left:none'>MUSCULOSKELETAL</td>
 <td colspan=3 rowspan=2 class=xl9017125 width=189 style='width:141pt'><font
 class="font817125">&nbsp;</font><font class="font517125"> Fracture<br>
   Location___________ R<span style='mso-spacerun:yes'>�� </span>L</font></td>
 <td colspan=3 class=xl9317125 align=left style='border-left:none'>Use of
 assissting Equipment:</td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=19 style='height:14.4pt'>
 <td colspan=2 height=19 class=xl8817125 align=left style='height:14.4pt'><font
 class="font1717125">&nbsp;</font><font class="font1117125">No Problem
 Identified</font></td>
 <td colspan=2 class=xl8817125 align=left style='border-left:none'><font
 class="font1717125">&nbsp;</font><font class="font1117125">No Problem
 Identified</font></td>
 <td colspan=3 class=xl9217125 align=left style='border-left:none'><font
 class="font1017125">&nbsp;</font><font class="font717125"> None</font></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=19 style='height:14.4pt'>
 <td colspan=2 height=19 class=xl8617125 align=left style='height:14.4pt'><font
 class="font817125">&nbsp;</font><font class="font517125"> Need Supervision</font></td>
 <td colspan=2 class=xl7317125 align=left style='border-left:none'><font
 class="font817125">&nbsp;</font><font class="font517125"> Deformities</font></td>
 <td colspan=3 rowspan=4 class=xl9017125 width=189 style='width:141pt'><font
 class="font817125">&nbsp;</font><font class="font517125"> </font><font
 class="font717125">Weight Bearing</font><font class="font517125"><br>
   </font><font class="font817125">&nbsp;</font><font class="font517125">
 Full_________________ R<span style='mso-spacerun:yes'>�� </span>L<br>
   </font><font class="font817125">&nbsp;</font><font class="font517125">
 Partial_______________R<span style='mso-spacerun:yes'>�� </span>L<br>
   </font><font class="font817125">&nbsp;</font><font class="font517125"> No
 weight Bearing ______ R<span style='mso-spacerun:yes'>�� </span>L</font></td>
 <td colspan=3 class=xl7317125 align=left style='border-left:none'><font
 class="font817125">&nbsp;</font><font class="font517125"> Walker<span
 style='mso-spacerun:yes'>������ </span></font><font class="font817125">&nbsp;</font><font
 class="font517125"> Crutches</font></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=19 style='height:14.4pt'>
 <td colspan=2 height=19 class=xl8617125 align=left style='height:14.4pt'><font
 class="font817125">&nbsp;</font><font class="font517125"> Totally Dependent</font></td>
 <td colspan=2 class=xl7317125 align=left style='border-left:none'><font
 class="font817125">&nbsp;</font><font class="font517125"> Contractures</font></td>
 <td colspan=3 class=xl7317125 align=left style='border-left:none'><font
 class="font817125">&nbsp;</font><font class="font517125"> Wheelchair</font></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=19 style='height:14.4pt'>
 <td colspan=2 height=19 class=xl7317125 align=left style='height:14.4pt'><font
 class="font817125">&nbsp;</font><font class="font517125"> Feeding</font></td>
 <td colspan=2 class=xl7317125 align=left style='border-left:none'><font
 class="font817125">&nbsp;</font><font class="font517125"> Amputee</font></td>
 <td colspan=3 class=xl7317125 align=left style='border-left:none'><font
 class="font817125">&nbsp;</font><font class="font517125"> Transfer Device</font></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=19 style='height:14.4pt'>
 <td colspan=2 height=19 class=xl7317125 align=left style='height:14.4pt'><font
 class="font817125">&nbsp;</font><font class="font517125"> Hygine</font></td>
 <td colspan=2 class=xl7317125 align=left style='border-left:none'><font
 class="font817125">&nbsp;</font><font class="font517125"> Dedridden</font></td>
 <td colspan=3 class=xl7317125 align=left style='border-left:none'><font
 class="font817125">&nbsp;</font><font class="font517125"> Bathing Device</font></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=19 style='height:14.4pt'>
 <td colspan=2 height=19 class=xl7317125 align=left style='height:14.4pt'><font
 class="font817125">&nbsp;</font><font class="font517125"> Toileting</font></td>
 <td colspan=2 class=xl7317125 align=left style='border-left:none'><font
 class="font817125">&nbsp;</font><font class="font517125"> Chair fast</font></td>
 <td colspan=3 class=xl7317125 align=left style='border-left:none'><font
 class="font817125">&nbsp;</font><font class="font517125"> </font><font
 class="font717125">Foot Drop</font><font class="font517125">__________R<span
 style='mso-spacerun:yes'>��� </span>L</font></td>
 <td colspan=3 class=xl7317125 align=left style='border-left:none'><font
 class="font817125">&nbsp;</font><font class="font517125"> Raised Toilet Seat</font></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=19 style='height:14.4pt'>
 <td colspan=2 height=19 class=xl7317125 align=left style='height:14.4pt'><font
 class="font817125">&nbsp;</font><font class="font517125"> Ambutation</font></td>
 <td colspan=2 class=xl7317125 align=left style='border-left:none'><font
 class="font817125">&nbsp;</font><font class="font517125"> Musculoskeletal
 Pain</font></td>
 <td colspan=3 class=xl8717125 style='border-left:none'>&nbsp;</td>
 <td colspan=3 class=xl8617125 align=left style='border-left:none'><font
 class="font817125">&nbsp;</font><font class="font517125"> Bed side commode</font></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=19 style='height:14.4pt'>
 <td colspan=2 height=19 class=xl8617125 align=left style='height:14.4pt'><font
 class="font817125">&nbsp;</font><font class="font517125"> Other____________</font></td>
 <td colspan=2 class=xl8617125 align=left style='border-left:none'><font
 class="font817125">&nbsp;</font><font class="font517125"> Other____________</font></td>
 <td colspan=3 class=xl8617125 align=left style='border-left:none'><font
 class="font817125">&nbsp;</font><font class="font517125"> Other____________</font></td>
 <td colspan=3 class=xl8617125 align=left style='border-left:none'><font
 class="font817125">&nbsp;</font><font class="font517125"> Other____________</font></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=19 style='height:14.4pt'>
 <td colspan=10 height=19 class=xl7217125 style='height:14.4pt'>Gray areas
 indicate need for PT or OT evaluation so ask Physician for PT oe OT referral
 if possible</td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=19 style='height:14.4pt'>
 <td colspan=10 height=19 class=xl10217125 style='height:14.4pt'>Page 4
 of<span style='mso-spacerun:yes'>� </span>6<span
 style='mso-spacerun:yes'>���������������������������������������������������������������������������������������������������������������������������
 </span>F013-THHC Initial Patient Assessment Physician (Admission)</td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=19 style='page-break-before:always;height:14.4pt'>
 <td colspan=5 height=19 class=xl9617125 style='height:14.4pt'>INFUSION
 THERAPY</td>
 <td colspan=5 class=xl9617125 style='border-left:none'>EDUCATIONAL
 ASSESSMENT<span style='mso-spacerun:yes'>�</span></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=19 style='height:14.4pt'>
 <td colspan=5 height=19 class=xl11017125 style='height:14.4pt'>INTRAVENOUS
 FLUIDS,MEDICATION AND TPN</td>
 <td colspan=5 class=xl11617125 width=315 style='border-left:none;width:235pt'>&nbsp;</td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=19 style='mso-height-source:userset;height:14.55pt'>
 <td colspan=5 rowspan=15 height=285 class=xl9917125 width=315
 style='height:216.45pt;width:235pt'><font class="font817125">&nbsp;</font><font
 class="font517125"> Not Indicated<span
 style='mso-spacerun:yes'>�������������������� </span>Last Date and Time
 Changed<br>
   <span style='mso-spacerun:yes'>�� </span></font><font class="font817125">&nbsp;</font><font
 class="font517125"> IV Medication<span
 style='mso-spacerun:yes'>���������������
 </span>------------------------------<br>
   <span style='mso-spacerun:yes'>�� </span></font><font class="font817125">&nbsp;
 </font><font class="font517125">IV Fluids<span
 style='mso-spacerun:yes'>����������������������� </span>Dressing Change
 Every---Days</font><font class="font617125"><br>
   <span style='mso-spacerun:yes'>�� </span></font><font class="font1617125">&nbsp;</font><font
 class="font617125"> TPN<span
 style='mso-spacerun:yes'>������������������������������� </span></font><font
 class="font717125">Site Status<br>
   </font><font class="font617125">Plan for -------Days/Weeks<span
 style='mso-spacerun:yes'>����� </span></font><font class="font1617125">&nbsp;</font><font
 class="font617125"> Red </font><font class="font1617125">&nbsp;</font><font
 class="font617125"> Painful </font><font class="font1617125">&nbsp;</font><font
 class="font617125"> Itching<br>
   </font><font class="font1617125">&nbsp;</font><font class="font617125"> </font><font
 class="font1117125">Central Line</font><font class="font617125"><span
 style='mso-spacerun:yes'>��������������������� </span></font><font
 class="font1617125">&nbsp;</font><font class="font617125"><span
 style='mso-spacerun:yes'>� </span>Bleeding </font><font class="font1617125">&nbsp;</font><font
 class="font617125"> Draining<br>
   Type ------- Size----------<span style='mso-spacerun:yes'>��������
 </span>Drainage---------------------------<br>
   </font><font class="font1617125">&nbsp;</font><font class="font617125">
 Single Lumen<span style='mso-spacerun:yes'>��������������������� </span></font><font
 class="font1117125">Peripheral Line</font><font class="font617125"><br>
   </font><font class="font1617125">&nbsp;</font><font class="font617125">
 Double Lumen<span style='mso-spacerun:yes'>�������������������� </span>Size
 --------------------------------<br>
   </font><font class="font1117125">Catheter Status:<span
 style='mso-spacerun:yes'>�� </span></font><font class="font617125"><span
 style='mso-spacerun:yes'>������������������</span>Insertion Date and Time
 <br>
   </font><font class="font1617125">&nbsp;</font><font class="font617125">
 Intact </font><font class="font1617125">&nbsp;</font><font class="font617125">
 Cracked<span style='mso-spacerun:yes'>�����������������
 </span>---------------------------------<span
 style='mso-spacerun:yes'>������� </span></font><font class="font1617125">&nbsp;
 </font><font class="font617125">Leaking<br>
   Insertion Site------------<span style='mso-spacerun:yes'>�����������
 </span>Site Location-------------------<br>
   Insaertion date----------<span style='mso-spacerun:yes'>�����������
 </span>Site Apperance<br>
   Site dressing type-----------<span style='mso-spacerun:yes'>������
 </span>-----------------------------------<br>
   Dressing Status-------------<span style='mso-spacerun:yes'>������
 </span>Change every--------Days<br>
   -------------------------------<span style='mso-spacerun:yes'>������
 </span></font><font class="font1617125">&nbsp;</font><font class="font617125">
 Others-------------------------------</font></td>
 <td colspan=5 class=xl9517125 style='border-left:none'>Patient and/or<span
 style='mso-spacerun:yes'>� </span>Family Need Education on:</td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=19 style='height:14.4pt'>
 <td colspan=3 height=19 class=xl10717125 style='height:14.4pt;border-left:
 none'><font class="font817125">&nbsp;</font><font class="font517125"> Use of
 medication</font></td>
 <td colspan=2 class=xl10717125 style='border-left:none'><font
 class="font817125">&nbsp;</font><font class="font517125"> Home Exercises</font></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=19 style='height:14.4pt'>
 <td colspan=3 height=19 class=xl10717125 style='height:14.4pt;border-left:
 none'><font class="font817125">&nbsp;</font><font class="font517125"> Use of
 medical equipment</font></td>
 <td colspan=2 class=xl10717125 style='border-left:none'><font
 class="font817125">&nbsp;</font><font class="font517125"> Body Mechanics</font></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=19 style='height:14.4pt'>
 <td colspan=3 rowspan=2 height=38 class=xl9917125 width=189 style='height:
 28.8pt;width:141pt'><font class="font817125">&nbsp;</font><font
 class="font517125"> Potential interactions medication <br>
   and food</font></td>
 <td colspan=2 rowspan=2 class=xl9917125 width=126 style='width:94pt'><font
 class="font817125">&nbsp;</font><font class="font517125"> Rehabilitation
 <br>
   Techniques</font></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=19 style='height:14.4pt'>
 <td height=19 class=xl6553517125 style='height:14.4pt'></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=19 style='mso-height-source:userset;height:14.55pt'>
 <td colspan=3 height=19 class=xl10717125 style='height:14.55pt;border-left:
 none'><font class="font817125">&nbsp;</font><font class="font517125"> Diet
 and Nutrition</font></td>
 <td colspan=2 rowspan=2 class=xl9917125 width=126 style='width:94pt'><font
 class="font817125">&nbsp;</font><font class="font517125"> Orthopedic <br>
   Prosthesis use</font></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=19 style='height:14.4pt'>
 <td colspan=3 height=19 class=xl10717125 style='height:14.4pt;border-left:
 none'><font class="font817125">&nbsp;</font><font class="font517125"> Tube
 feeding management</font></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=19 style='height:14.4pt'>
 <td colspan=3 height=19 class=xl10717125 style='height:14.4pt;border-left:
 none'><font class="font817125">&nbsp;</font><font class="font517125"> Pain
 Management</font></td>
 <td colspan=2 class=xl10717125 style='border-left:none'><font
 class="font817125">&nbsp;</font><font class="font517125"> Fall Precaution</font></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=19 style='height:14.4pt'>
 <td colspan=3 height=19 class=xl10717125 style='height:14.4pt;border-left:
 none'><font class="font817125">&nbsp;</font><font class="font517125"> Disese
 Process</font></td>
 <td colspan=2 class=xl10717125 style='border-left:none'><font
 class="font817125">&nbsp;</font><font class="font517125"> Home Safety</font></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=19 style='height:14.4pt'>
 <td colspan=3 height=19 class=xl10717125 style='height:14.4pt;border-left:
 none'><font class="font817125">&nbsp;</font><font class="font517125">
 Symptoms Management</font></td>
 <td colspan=2 class=xl10717125 style='border-left:none'><font
 class="font817125">&nbsp;</font><font class="font517125"> Wound Care</font></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=19 style='height:14.4pt'>
 <td colspan=3 height=19 class=xl10717125 style='height:14.4pt;border-left:
 none'><font class="font817125">&nbsp;</font><font class="font517125">
 Emergency Management</font></td>
 <td colspan=2 class=xl10717125 style='border-left:none'><font
 class="font817125">&nbsp;</font><font class="font517125"> General skin care</font></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=19 style='height:14.4pt'>
 <td colspan=3 height=19 class=xl10717125 style='height:14.4pt;border-left:
 none'><font class="font817125">&nbsp;</font><font class="font517125"> Urinary
 Catheter Care Management</font></td>
 <td colspan=2 class=xl10717125 style='border-left:none'><font
 class="font817125">&nbsp;</font><font class="font517125"> Daily living
 activites</font></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=19 style='height:14.4pt'>
 <td colspan=3 height=19 class=xl10717125 style='height:14.4pt;border-left:
 none'><font class="font817125">&nbsp;</font><font class="font517125"> Oral
 and Tracheal Suctioning</font></td>
 <td colspan=2 class=xl10717125 style='border-left:none'><font
 class="font817125">&nbsp;</font><font class="font517125"> Home Oxygen therapy</font></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=19 style='mso-height-source:userset;height:14.55pt'>
 <td colspan=3 height=19 class=xl10717125 style='height:14.55pt;border-left:
 none'><span style='mso-spacerun:yes'>�</span><font class="font817125">&nbsp;</font><font
 class="font917125"> Discharge instructions</font></td>
 <td colspan=2 class=xl10717125 style='border-left:none'><font
 class="font817125">&nbsp;</font><font class="font517125"> Ventilator use</font></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=19 style='height:14.4pt'>
 <td colspan=5 height=19 class=xl14217125 style='height:14.4pt;border-left:
 none'><font class="font817125">&nbsp;</font><font class="font517125">
 Others:_____</font><font class="font1517125">_______________________________</font></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=19 style='height:14.4pt'>
 <td colspan=10 height=19 class=xl9617125 style='height:14.4pt'>DISCHARGE</td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=19 style='height:14.4pt'>
 <td colspan=10 height=19 class=xl14017125 align=left style='height:14.4pt'>ASSESSMENT
 OF DISCHARGE NEEDS/RISK</td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=19 style='mso-height-source:userset;height:14.55pt'>
 <td colspan=10 rowspan=30 height=570 class=xl9417125 width=630
 style='height:432.15pt;width:470pt'>1) Discharge Instruction Already
 Initiated<br>
   <font class="font817125">&nbsp;</font><font class="font517125"> Yes
 (Specify
 _______________________________________________________________________________<br>
   </font><font class="font817125">&nbsp;</font><font class="font517125"> No
 (Specify
 ________________________________________________________________________________<br>
   <br>
   2)Discharge Plan:<br>
   </font><font class="font817125">&nbsp;</font><font class="font517125">
 Expected Discharge in ______weeks/Months<br>
   </font><font class="font817125">&nbsp;</font><font class="font517125"> Long
 Term<br>
   Reason/s
 ____________________________________________________________________________________<br>
   <br>
   3)Will the patient require care at home<br>
   </font><font class="font817125">&nbsp;</font><font class="font517125">
 No<span style='mso-spacerun:yes'>������ </span></font><font class="font817125">&nbsp;</font><font
 class="font517125">Yes<br>
   <br>
   4)Who will provide care at home?<br>
   </font><font class="font817125">&nbsp;</font><font class="font517125">
 Patient<span style='mso-spacerun:yes'>������� </span></font><font
 class="font817125">&nbsp;</font><font class="font517125"> Family member<span
 style='mso-spacerun:yes'>������ </span></font><font class="font817125">&nbsp;</font><font
 class="font517125"> Private paid caregiver<span
 style='mso-spacerun:yes'>����� </span></font><font class="font817125">&nbsp;</font><font
 class="font517125"> Other____________________________________<br>
   <br>
   5)Are the home environment issue?<span style='mso-spacerun:yes'>���
 </span><br>
   </font><font class="font817125">&nbsp;</font><font class="font517125">
 No<span style='mso-spacerun:yes'>� </span></font><font class="font817125">&nbsp;</font><font
 class="font517125"> Yes,(Specify
 ___________________________________________________________________________<br>
   <br>
   6)Any financial issue are expected before THHC discharge?<br>
   </font><font class="font817125">&nbsp;</font><font class="font517125"> No
 <br>
   </font><font class="font817125">&nbsp;</font><font class="font517125">
 Yes,(Specify
 _________________________________________________________________________________<br>
   <br>
   7)Patient requires handicapped transportation after THHC discharge?<br>
   </font><font class="font817125">&nbsp;</font><font class="font1817125"> </font><font
 class="font517125">No <br>
   </font><font class="font817125">&nbsp;</font><font class="font517125">
 Yes,(Specify
 _________________________________________________________________________________<br>
   <br>
   8)Awareness of community resources in need after THHC discharge?<br>
   </font><font class="font817125">&nbsp;</font><font class="font1817125"> </font><font
 class="font517125">No <br>
   </font><font class="font817125">&nbsp;</font><font class="font1817125"> </font><font
 class="font517125">Yes,(Specify
 _________________________________________________________________________________<br>
   <br>
   9)Other discharge planning problems identified?<br>
   </font><font class="font817125">&nbsp;</font><font class="font1817125"> </font><font
 class="font517125">No <br>
   </font><font class="font817125">&nbsp;</font><font class="font1817125"> </font><font
 class="font517125">Yes,(Specify
 _________________________________________________________________________________<br>
   <br>
   <br>
   <br>
   <br>
   <br>
   </font></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=19 style='height:14.4pt'>
 <td height=19 class=xl6553517125 style='height:14.4pt'></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=19 style='height:14.4pt'>
 <td height=19 class=xl6553517125 style='height:14.4pt'></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=19 style='height:14.4pt'>
 <td height=19 class=xl6553517125 style='height:14.4pt'></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=19 style='height:14.4pt'>
 <td height=19 class=xl6553517125 style='height:14.4pt'></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=19 style='height:14.4pt'>
 <td height=19 class=xl6553517125 style='height:14.4pt'></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=19 style='height:14.4pt'>
 <td height=19 class=xl6553517125 style='height:14.4pt'></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=19 style='height:14.4pt'>
 <td height=19 class=xl6553517125 style='height:14.4pt'></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=19 style='height:14.4pt'>
 <td height=19 class=xl6553517125 style='height:14.4pt'></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=19 style='height:14.4pt'>
 <td height=19 class=xl6553517125 style='height:14.4pt'></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=19 style='height:14.4pt'>
 <td height=19 class=xl6553517125 style='height:14.4pt'></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=19 style='height:14.4pt'>
 <td height=19 class=xl6553517125 style='height:14.4pt'></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=19 style='height:14.4pt'>
 <td height=19 class=xl6553517125 style='height:14.4pt'></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=19 style='height:14.4pt'>
 <td height=19 class=xl6553517125 style='height:14.4pt'></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=19 style='height:14.4pt'>
 <td height=19 class=xl6553517125 style='height:14.4pt'></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=19 style='height:14.4pt'>
 <td height=19 class=xl6553517125 style='height:14.4pt'></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=19 style='height:14.4pt'>
 <td height=19 class=xl6553517125 style='height:14.4pt'></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=19 style='height:14.4pt'>
 <td height=19 class=xl6553517125 style='height:14.4pt'></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=19 style='height:14.4pt'>
 <td height=19 class=xl6553517125 style='height:14.4pt'></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=19 style='height:14.4pt'>
 <td height=19 class=xl6553517125 style='height:14.4pt'></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=19 style='height:14.4pt'>
 <td height=19 class=xl6553517125 style='height:14.4pt'></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=19 style='height:14.4pt'>
 <td height=19 class=xl6553517125 style='height:14.4pt'></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=19 style='height:14.4pt'>
 <td height=19 class=xl6553517125 style='height:14.4pt'></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=19 style='height:14.4pt'>
 <td height=19 class=xl6553517125 style='height:14.4pt'></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=19 style='height:14.4pt'>
 <td height=19 class=xl6553517125 style='height:14.4pt'></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=19 style='height:14.4pt'>
 <td height=19 class=xl6553517125 style='height:14.4pt'></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=19 style='height:14.4pt'>
 <td height=19 class=xl6553517125 style='height:14.4pt'></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=19 style='height:14.4pt'>
 <td height=19 class=xl6553517125 style='height:14.4pt'></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=19 style='height:14.4pt'>
 <td height=19 class=xl6553517125 style='height:14.4pt'></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=19 style='height:14.4pt'>
 <td height=19 class=xl6553517125 style='height:14.4pt'></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=19 style='height:14.4pt'>
 <td colspan=10 height=19 class=xl10217125 style='height:14.4pt'>Page 5
 of<span style='mso-spacerun:yes'>� </span>6<span
 style='mso-spacerun:yes'>����������������������������������������������������������������������������������������������������������������������������
 </span>F013-THHC Initial Patient Assessment Physician (Admission)</td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=19 style='page-break-before:always;mso-height-source:userset;
 height:14.55pt'>
 <td colspan=10 height=19 class=xl14017125 align=left style='height:14.55pt'>ASSESSMENT<span
 style='mso-spacerun:yes'>� </span>FINDING<span
 style='mso-spacerun:yes'>��</span></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=19 style='height:14.4pt'>
 <td colspan=5 height=19 class=xl13917125 width=315 style='height:14.4pt;
 width:235pt'>&nbsp;</td>
 <td colspan=5 class=xl13917125 width=315 style='border-left:none;width:235pt'>&nbsp;</td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=19 style='height:14.4pt'>
 <td colspan=5 height=19 class=xl13917125 width=315 style='height:14.4pt;
 width:235pt'>&nbsp;</td>
 <td colspan=5 class=xl13917125 width=315 style='border-left:none;width:235pt'>&nbsp;</td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=19 style='height:14.4pt'>
 <td colspan=5 height=19 class=xl13917125 width=315 style='height:14.4pt;
 width:235pt'>&nbsp;</td>
 <td colspan=5 class=xl13917125 width=315 style='border-left:none;width:235pt'>&nbsp;</td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=19 style='height:14.4pt'>
 <td colspan=5 height=19 class=xl14517125 style='border-right:.5pt solid black;
 height:14.4pt'>&nbsp;</td>
 <td colspan=5 class=xl14517125 style='border-right:.5pt solid black;
 border-left:none'>&nbsp;</td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=19 style='height:14.4pt'>
 <td colspan=5 height=19 class=xl14517125 style='border-right:.5pt solid black;
 height:14.4pt'>&nbsp;</td>
 <td colspan=5 class=xl14517125 style='border-right:.5pt solid black;
 border-left:none'>&nbsp;</td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=19 style='height:14.4pt'>
 <td colspan=5 height=19 class=xl14517125 style='border-right:.5pt solid black;
 height:14.4pt'>&nbsp;</td>
 <td colspan=5 class=xl14517125 style='border-right:.5pt solid black;
 border-left:none'>&nbsp;</td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=19 style='height:14.4pt'>
 <td colspan=5 height=19 class=xl14517125 style='border-right:.5pt solid black;
 height:14.4pt'>&nbsp;</td>
 <td colspan=5 class=xl14517125 style='border-right:.5pt solid black;
 border-left:none'>&nbsp;</td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=19 style='height:14.4pt'>
 <td colspan=5 height=19 class=xl14517125 style='border-right:.5pt solid black;
 height:14.4pt'>&nbsp;</td>
 <td colspan=5 class=xl14517125 style='border-right:.5pt solid black;
 border-left:none'>&nbsp;</td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=19 style='height:14.4pt'>
 <td colspan=5 height=19 class=xl14517125 style='border-right:.5pt solid black;
 height:14.4pt'>&nbsp;</td>
 <td colspan=5 class=xl14517125 style='border-right:.5pt solid black;
 border-left:none'>&nbsp;</td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=19 style='height:14.4pt'>
 <td colspan=5 height=19 class=xl14517125 style='border-right:.5pt solid black;
 height:14.4pt'>&nbsp;</td>
 <td colspan=5 class=xl14517125 style='border-right:.5pt solid black;
 border-left:none'>&nbsp;</td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=19 style='height:14.4pt'>
 <td colspan=5 height=19 class=xl14517125 style='border-right:.5pt solid black;
 height:14.4pt'>&nbsp;</td>
 <td colspan=5 class=xl14517125 style='border-right:.5pt solid black;
 border-left:none'>&nbsp;</td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=19 style='height:14.4pt'>
 <td colspan=10 height=19 class=xl14017125 align=left style='height:14.4pt'>CARE
 PROVIDED</td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=19 style='height:14.4pt'>
 <td colspan=10 height=19 class=xl9417125 width=630 style='height:14.4pt;
 width:470pt'>&nbsp;</td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=19 style='height:14.4pt'>
 <td colspan=10 height=19 class=xl9417125 width=630 style='height:14.4pt;
 width:470pt'>&nbsp;</td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=19 style='height:14.4pt'>
 <td colspan=10 height=19 class=xl9417125 width=630 style='height:14.4pt;
 width:470pt'>&nbsp;</td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=19 style='height:14.4pt'>
 <td colspan=10 height=19 class=xl9417125 width=630 style='height:14.4pt;
 width:470pt'>&nbsp;</td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=19 style='height:14.4pt'>
 <td colspan=10 height=19 class=xl9417125 width=630 style='height:14.4pt;
 width:470pt'>&nbsp;</td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=19 style='height:14.4pt'>
 <td colspan=10 height=19 class=xl9417125 width=630 style='height:14.4pt;
 width:470pt'>&nbsp;</td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=19 style='height:14.4pt'>
 <td colspan=10 height=19 class=xl9917125 width=630 style='height:14.4pt;
 width:470pt'><font class="font817125">&nbsp;</font><font class="font517125">
 Patient /Family Accepted Tawazun Home Health Care Services</font></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=19 style='height:14.4pt'>
 <td colspan=10 rowspan=2 height=38 class=xl9917125 width=630
 style='height:28.8pt;width:470pt'><font class="font817125">&nbsp;</font><font
 class="font517125"> Patient /Family Refused Tawazun Home Health Care
 Services<br>
   Reason/s
 _____________________________________________________________________________________</font></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=19 style='height:14.4pt'>
 <td height=19 class=xl6553517125 style='height:14.4pt'></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=19 style='mso-height-source:userset;height:14.55pt'>
 <td colspan=10 rowspan=3 height=57 class=xl9917125 width=630
 style='height:43.5pt;width:470pt'><font class="font817125">&nbsp;</font><font
 class="font517125"> Tawazun Home Health Care Accepted Patient<br>
   Reason/s
 _____________________________________________________________________________________<br>

 _____________________________________________________________________________________________</font></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=19 style='mso-height-source:userset;height:14.55pt'>
 <td height=19 class=xl6553517125 style='height:14.55pt'></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=19 style='height:14.4pt'>
 <td height=19 class=xl6553517125 style='height:14.4pt'></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=19 style='mso-height-source:userset;height:14.55pt'>
 <td colspan=10 rowspan=3 height=57 class=xl9917125 width=630
 style='height:43.35pt;width:470pt'><font class="font817125">&nbsp;</font><font
 class="font517125"> Tawazun Home Health Care Not Accepting Patient<br>
   Reason/s
 _____________________________________________________________________________________<br>

 _____________________________________________________________________________________________</font></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=19 style='height:14.4pt'>
 <td height=19 class=xl6553517125 style='height:14.4pt'></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=19 style='height:14.4pt'>
 <td height=19 class=xl6553517125 style='height:14.4pt'></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=19 style='height:14.4pt'>
 <td colspan=10 height=19 class=xl9517125 style='height:14.4pt'>Visit
 Frequency_______________Day/Week/Month</td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=19 style='height:14.4pt'>
 <td colspan=10 height=19 class=xl9517125 style='height:14.4pt'>Admission
 report to:</td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=19 style='height:14.4pt'>
 <td colspan=10 height=19 class=xl10717125 style='height:14.4pt'><font
 class="font817125">&nbsp;</font><font class="font517125"> THHC Caregiver</font></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=19 style='height:14.4pt'>
 <td colspan=10 height=19 class=xl10717125 style='height:14.4pt'><font
 class="font817125">&nbsp;</font><font class="font517125"> THHC Manager</font></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=19 style='height:14.4pt'>
 <td colspan=10 height=19 class=xl14517125 style='border-right:.5pt solid black;
 height:14.4pt'>&nbsp;</td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>
<tr height=19 style='height:14.4pt'>
 <td colspan=10 rowspan=4 height=76 class=xl14417125 width=630
 style='height:57.6pt;width:470pt'>Tawazun Home Health Care Staff completed
 assessment:<br>
   Name---------------------------------------------------------------<br>
   ID No. ------------------------- Signature ----------------------<br>
   Date: ------/-------/------------ Time ---------------------------</td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
 <td class=xl6553517125></td>
</tr>



</div>


<!----------------------------->
<!--END OF OUTPUT FROM EXCEL PUBLISH AS WEB PAGE WIZARD-->
<!----------------------------->
</body>

</html>
