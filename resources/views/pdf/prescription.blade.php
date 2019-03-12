<!DOCTYPE html>
<!-- https://www.verywellhealth.com/my-doctors-prescription-4-times-a-day-or-every-6-hours-1124041 -->
<html>
  <head>
    <style>
    body {
      position: relative;
    }
    .doc-pat-info{
      border-bottom: 2px solid black;
    }
    .company{
      color: blue;
    }
    .company .site {
      color: red !important;
      margin-top: -25px;
    }

    table.items {
    	border: 0.1mm solid #000000;
    }
    td { vertical-align: top; }
    .items {
      margin-top: 10px;
    }
    .items td {
    	border-left: 0.1mm solid #000000;
    	border-right: 0.1mm solid #000000;
    }
    table thead td { background-color: #EEEEEE;
    	text-align: center;
    	border: 0.1mm solid #000000;
    	font-variant: small-caps;
    }

    .items tr td {
      border-bottom: 0.1mm solid #000000;
    }
    .items td.blanktotal {
    	background-color: #EEEEEE;
    	border: 0.1mm solid #000000;
    	background-color: #FFFFFF;
    	border: 0mm none #000000;
    	border-top: 0.1mm solid #000000;
    	border-right: 0.1mm solid #000000;
    }


      @page {
          header: html_otherpageheader;
          footer: html_otherpagesfooter;
      }

      @page :first {
          header: html_firstpageheader;
          footer: html_firstpagefooter;
      }
    </style>
  </head>
  <body>
    <htmlpageheader name="firstpageheader" style="display:none">
        <div style="text-align:center">
          <div class="company">
            <div>
              <h1>The Doctor BD</h1>
            </div>
            <div class="site">thedoctorbd.xyz</div>
            <barcode code="100125" type="C128C" class="barcode"  size="2" height="0.05"/>
          </div>
        </div>
    </htmlpageheader>

    <htmlpagefooter name="firstpagefooter" style="display:none;">
      <div class="" style="color:red;background:green">
        <p>m</p>
        <p>m</p>
        <p>m</p>
        <div style="text-align:left;border-top:2px solid black;">address: 105/2 nandoni 3rd floor, sukrabad,dhanmondi dhaka. website: https://thedoctorbd.xyz , phone: 2562526| page-{PAGENO}</div>
      </div>


    </htmlpagefooter>

    <htmlpageheader name="otherpageheader" line="4" style="display:none;">
      <div style="text-align:center">
        <div class="company" margin_bottom:20px;>
          <div>
            <h1>The Doctor BD</h1>
          </div>
          <div class="site">thedoctorbd.xyz</div>
          <barcode code="100125" type="C128C" class="barcode"  size="2" height="0.05"/>
        </div>
      </div>
    </htmlpageheader>

    <htmlpagefooter name="otherpagesfooter" style="display:none">
        <div style="text-align:left;border-top:2px solid black">address: 105/2 nandoni 3rd floor, sukrabad,dhanmondi dhaka. website:https://thedoctorbd.xyz phone:2562526| page-{PAGENO}</div>
    </htmlpagefooter>



    <table class="doc-pat-info"  width="100%" style="font-family: serif;" cellpadding="10">
      <tr>
        <td width="45%" style="border: 0.1mm solid #888888; "><span style="font-size: 1.6em; color: #555555; font-family: sans;">Doctor Info:</span><br /><br />Name: Mr. Abrar Rahim<br />ID:200136<br />Education: mbbs from dmc<br />Work: ah hospital</td>
        <td width="10%">&nbsp;</td>
        <td width="45%" style="border: 0.1mm solid #888888; "><span style="font-size: 1.6em; color: #555555; font-family: sans;">Patient Info:</span><br /><br />Name: Mr. Abrar Rahim<br />ID:200136<br />sex: Male <br />age: 21  <br> </td>
      </tr>
      <tr>
        <td width="45%">Issue Date: 21.01.2019</td>
        <td width="10%"></td>
        <td width="45%">Track ID: 1201818181819</td>
      </tr>
    </table>


    <table class="items" width="100%" style="font-size: 9pt; border-collapse: collapse; " cellpadding="8">
    <thead>
    <tr>
    <td width="45%" >Medicine Name</td>
    <td width="10%">Type</td>
    <td width="15%">Quantity</td>
    <td width="5%">Duration</td>
    <td width="15%">time</td>
    <td width="10%">take</td>
    </tr>
    </thead>
    <tbody>

    <tr>
    <td >Napa Extra 500mg</td>

    <td>tablet</td>
    <td >10</td>
<td >7 d</td>
    <td>p.c | a.c</td>
    <td class="cost">0+1+0</td>
    </tr>
    <tr>
    <td >Napa Extra 500mg</td>

    <td>antibiotic</td>
    <td >10</td>
<td >7 d</td>
    <td>p.c | a.c</td>
    <td class="cost">0+1+0</td>
    </tr>

    <tr>
    <td >Napa Extra 500mg</td>
<td >eye-drop</td>
    <td >10</td>
<td >7 d</td>
    <td>p.c | a.c</td>
    <td class="cost">0+1+0</td>
    </tr>
    <tr>
    <td >Napa Extra 500mg</td>
<td >eye-drop</td>
    <td >10</td>
<td >7 d</td>
    <td>p.c | a.c</td>
    <td class="cost">0+1+0</td>
    </tr>
    <tr>
    <td >Napa Extra 500mg</td>
<td >eye-drop</td>
    <td >10</td>
<td >7 d</td>
    <td>p.c | a.c</td>
    <td class="cost">0+1+0</td>
    </tr>

    <tr>
    <td >Napa Extra 500mg</td>
<td >eye-drop</td>
    <td >10</td>
<td >7 d</td>
    <td>p.c | a.c</td>
    <td class="cost">0+1+0</td>
    </tr>
    <tr>
    <td >Napa Extra 500mg</td>
<td >eye-drop</td>
    <td >10</td>
<td >7 d</td>
    <td>p.c | a.c</td>
    <td class="cost">0+1+0</td>
    </tr>
    <tr>
    <td >Napa Extra 500mg</td>
<td >eye-drop</td>
    <td >10</td>
<td >7 d</td>
    <td>p.c | a.c</td>
    <td class="cost">0+1+0</td>
    </tr>
    <tr>
    <td >Napa Extra 500mg</td>
<td >eye-drop</td>
    <td >10</td>
<td >7 d</td>
    <td>p.c | a.c</td>
    <td class="cost">0+1+0</td>
    </tr>
    <tr>
    <td >Napa Extra 500mg</td>
<td >eye-drop</td>
    <td >10</td>
<td >7 d</td>
    <td>p.c | a.c</td>
    <td class="cost">0+1+0</td>
    </tr>
    <tr>
    <td >Napa Extra 500mg</td>
<td >eye-drop</td>
    <td >10</td>
<td >7 d</td>
    <td>p.c | a.c</td>
    <td class="cost">0+1+0</td>
    </tr>
    <tr>
    <td >Napa Extra 500mg</td>
<td >eye-drop</td>
    <td >10</td>
<td >7 d</td>
    <td>p.c | a.c</td>
    <td class="cost">0+1+0</td>
    </tr>
    <tr>
    <td >Napa Extra 500mg</td>
<td >eye-drop</td>
    <td >10</td>
<td >7 d</td>
    <td>p.c | a.c</td>
    <td class="cost">0+1+0</td>
    </tr>
    <tr>
    <td >Napa Extra 500mg</td>
<td >eye-drop</td>
    <td >10</td>
<td >7 d</td>
    <td>p.c | a.c</td>
    <td class="cost">0+1+0</td>
    </tr>
    <tr>
    <td >Napa Extra 500mg</td>
<td >eye-drop</td>
    <td >10</td>
<td >7 d</td>
    <td>p.c | a.c</td>
    <td class="cost">0+1+0</td>
    </tr>
    <tr>
    <td >Napa Extra 500mg</td>
<td >eye-drop</td>
    <td >10</td>
<td >7 d</td>
    <td>p.c | a.c</td>
    <td class="cost">0+1+0</td>
    </tr>
    <tr>
    <td >Napa Extra 500mg</td>
<td >eye-drop</td>
    <td >10</td>
<td >7 d</td>
    <td>p.c | a.c</td>
    <td class="cost">0+1+0</td>
    </tr>
    <tr>
    <td >Napa Extra 500mg</td>
<td >eye-drop</td>
    <td >10</td>
<td >7 d</td>
    <td>p.c | a.c</td>
    <td class="cost">0+1+0</td>
    </tr>
    <tr>
    <td >Napa Extra 500mg</td>
<td >eye-drop</td>
    <td >10</td>
<td >7 d</td>
    <td>p.c | a.c</td>
    <td class="cost">0+1+0</td>
    </tr>
    <tr>
    <td >Napa Extra 500mg</td>
<td >eye-drop</td>
    <td >10</td>
<td >7 d</td>
    <td>p.c | a.c</td>
    <td class="cost">0+1+0</td>
    </tr>
    <tr>
    <td >Napa Extra 500mg</td>
<td >eye-drop</td>
    <td >10</td>
<td >7 d</td>
    <td>p.c | a.c</td>
    <td class="cost">0+1+0</td>
    </tr>
    <tr>
    <td >Napa Extra 500mg</td>
<td >eye-drop</td>
    <td >10</td>
<td >7 d</td>
    <td>p.c | a.c</td>
    <td class="cost">0+1+0</td>
    </tr>
    <tr>
    <td >Napa Extra 500mg</td>
<td >eye-drop</td>
    <td >10</td>
<td >7 d</td>
    <td>p.c | a.c</td>
    <td class="cost">0+1+0</td>
    </tr>
    <tr>
    <td >Napa Extra 500mg</td>
<td >eye-drop</td>
    <td >10</td>
<td >7 d</td>
    <td>p.c | a.c</td>
    <td class="cost">0+1+0</td>
    </tr>
    <tr>
    <td >Napa Extra 500mg</td>
<td >eye-drop</td>
    <td >10</td>
<td >7 d</td>
    <td>p.c | a.c</td>
    <td class="cost">0+1+0</td>
    </tr>
    <!-- END ITEMS HERE -->
    </tbody>
    </table>
    <br />




    <div style="text-align: center; font-style: italic;">Payment terms: payment due in 30 d</div>

    <pagebreak>
      <div class="important-info">
        <h1>Information</h1>
      </div>
    </pagebreak>

  </body>
</html>
