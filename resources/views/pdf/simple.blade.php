<!DOCTYPE html>
<html>
  <head>
    <style>
    body {font-family: sans-serif;
    	font-size: 10pt;
      color: red !important;
      border: 10px solid yellow !important;
      background-gradient: radial #00FFFF #FFFF00 0.5 0.5 0.5 0.5 0.65;
    }
    p {	margin: 0pt; }
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
    .items td.blanktotal {
    	background-color: #EEEEEE;
    	border: 0.1mm solid #000000;
    	background-color: #FFFFFF;
    	border: 0mm none #000000;
    	border-top: 0.1mm solid #000000;
    	border-right: 0.1mm solid #000000;
    }
    .items td.totals {
    	text-align: right;
    	border: 0.1mm solid #000000;
    }
    .items td.cost {
    	text-align: "." center;
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
        <div style="text-align:center"> first page header Page = page:{PAGENO} / {nbpg}</div>
    </htmlpageheader>

    <htmlpagefooter name="firstpagefooter" style="display:none">
        <div style="text-align:center">first page footer | page:{PAGENO} / {nbpg}</div>
    </htmlpagefooter>

    <htmlpageheader name="otherpageheader" style="display:none">
        <div style="text-align:center"> all page Header | page:{PAGENO} / {nbpg}</div>
    </htmlpageheader>

    <htmlpagefooter name="otherpagesfooter" style="display:none">
        <div style="text-align:center">all page footer| page:{PAGENO} / {nbpg} </div>
    </htmlpagefooter>

    <div style="text-align: right">Date: 13th November 2008</div>


    <table  width="100%" style="font-family: serif;" cellpadding="10"><tr>
    <td width="45%" style="border: 0.1mm solid #888888; "><span style="font-size: 7pt; color: #555555; font-family: sans;">SOLD TO:</span><br /><br />345 Anotherstreet<br />Little Village<br />Their City<br />CB22 6SO</td>
    <td width="10%">&nbsp;</td>
    <td width="45%" style="border: 0.1mm solid #888888;"><span style="font-size: 7pt; color: #555555; font-family: sans;">SHIP TO:</span><br /><br />{{ $user['address'] }}<br />Little Village<br />Their City<br />CB22 6SO</td>
    </tr></table>
    <table class="items" width="100%" style="font-size: 9pt; border-collapse: collapse; " cellpadding="8">
    <thead>
    <tr>
    <td width="15%">Ref. No.</td>
    <td width="10%">Quantity</td>
    <td width="45%">Description</td>
    <td width="15%">Unit Price</td>
    <td width="10%">Amount</td>
    <td width="5%">Taka</td>
    </tr>
    </thead>
    <tbody>

    <tr>
    <td align="center">MF1234567</td>
    <td align="center">10</td>
    <td>Large pack Hoover bags</td>
    <td class="cost">&pound;2.56</td>
    <td class="cost">&pound;25.60</td>
    </tr>
    <tr>
    <td align="center">MX37801982</td>
    <td align="center">1</td>
    <td>Womans waterproof jacket<br />Options - Red and charcoal.</td>
    <td class="cost">&pound;102.11</td>
    <td class="cost">&pound;102.11</td>
    </tr>
    <tr>
    <td align="center">MR7009298</td>
    <td align="center">25</td>
    <td>Steel nails; oval head; 30mm x 3mm. Packs of 1000.</td>
    <td class="cost">&pound;12.26</td>
    <td class="cost">&pound;325.60</td>
    </tr>
    <tr>
    <td align="center">MF1234567</td>
    <td align="center">10</td>
    <td>Large pack Hoover bags</td>
    <td class="cost">&pound;2.56</td>
    <td class="cost">&pound;25.60</td>
    </tr>
    <tr>
    <td align="center">MX37801982</td>
    <td align="center">1</td>
    <td>Womans waterproof jacket<br />Options - Red and charcoal.</td>
    <td class="cost">&pound;102.11</td>
    <td class="cost">&pound;102.11</td>
    </tr>
    <tr>
    <td align="center">MR7009298</td>
    <td align="center">25</td>
    <td>Steel nails; oval head; 30mm x 3mm. Packs of 1000.</td>
    <td class="cost">&pound;12.26</td>
    <td class="cost">&pound;325.60</td>
    </tr>
    <tr>
    <td align="center">MF1234567</td>
    <td align="center">10</td>
    <td>Large pack Hoover bags</td>
    <td class="cost">&pound;2.56</td>
    <td class="cost">&pound;25.60</td>
    </tr>
    <tr>
    <td align="center">MX37801982</td>
    <td align="center">1</td>
    <td>Womans waterproof jacket<br />Options - Red and charcoal.</td>
    <td class="cost">&pound;102.11</td>
    <td class="cost">&pound;102.11</td>
    </tr>
    <tr>
    <td align="center">MR7009298</td>
    <td align="center">25</td>
    <td>Steel nails; oval head; 30mm x 3mm. Packs of 1000.</td>
    <td class="cost">&pound;12.26</td>
    <td class="cost">&pound;325.60</td>
    </tr>
    <tr>
    <td align="center">MF1234567</td>
    <td align="center">10</td>
    <td>Large pack Hoover bags</td>
    <td class="cost">&pound;2.56</td>
    <td class="cost">&pound;25.60</td>
    </tr>
    <tr>
    <td align="center">MX37801982</td>
    <td align="center">1</td>
    <td>Womans waterproof jacket<br />Options - Red and charcoal.</td>
    <td class="cost">&pound;102.11</td>
    <td class="cost">&pound;102.11</td>
    </tr>
    <tr>
    <td align="center">MR7009298</td>
    <td align="center">25</td>
    <td>Steel nails; oval head; 30mm x 3mm. Packs of 1000.</td>
    <td class="cost">&pound;12.26</td>
    <td class="cost">&pound;325.60</td>
    </tr>
    <tr>
    <td align="center">MF1234567</td>
    <td align="center">10</td>
    <td>Large pack Hoover bags</td>
    <td class="cost">&pound;2.56</td>
    <td class="cost">&pound;25.60</td>
    </tr>
    <tr>
    <td align="center">MX37801982</td>
    <td align="center">1</td>
    <td>Womans waterproof jacket<br />Options - Red and charcoal.</td>
    <td class="cost">&pound;102.11</td>
    <td class="cost">&pound;102.11</td>
    </tr>
    <tr>
    <td align="center">MF1234567</td>
    <td align="center">10</td>
    <td>Large pack Hoover bags</td>
    <td class="cost">&pound;2.56</td>
    <td class="cost">&pound;25.60</td>
    </tr>
    <tr>
    <td align="center">MX37801982</td>
    <td align="center">1</td>
    <td>Womans waterproof jacket<br />Options - Red and charcoal.</td>
    <td class="cost">&pound;102.11</td>
    <td class="cost">&pound;102.11</td>
    </tr>
    <tr>
    <td align="center">MR7009298</td>
    <td align="center">25</td>
    <td>Steel nails; oval head; 30mm x 3mm. Packs of 1000.</td>
    <td class="cost">&pound;12.26</td>
    <td class="cost">&pound;325.60</td>
    </tr>
    <tr>
    <td align="center">MR7009298</td>
    <td align="center">25</td>
    <td>Steel nails; oval head; 30mm x 3mm. Packs of 1000.</td>
    <td class="cost">&pound;12.26</td>
    <td class="cost">&pound;325.60</td>
    </tr>
    <tr>
    <td align="center">MF1234567</td>
    <td align="center">10</td>
    <td>Large pack Hoover bags</td>
    <td class="cost">&pound;2.56</td>
    <td class="cost">&pound;25.60</td>
    </tr>
    <tr>
    <td align="center">MX37801982</td>
    <td align="center">1</td>
    <td>Womans waterproof jacket<br />Options - Red and charcoal.</td>
    <td class="cost">&pound;102.11</td>
    <td class="cost">&pound;102.11</td>
    </tr>
    <tr>
    <td align="center">MR7009298</td>
    <td align="center">25</td>
    <td>Steel nails; oval head; 30mm x 3mm. Packs of 1000.</td>
    <td class="cost">&pound;12.26</td>
    <td class="cost">&pound;325.60</td>
    </tr>
    <!-- END ITEMS HERE -->
    <tr>
    <td class="blanktotal" colspan="3" rowspan="6"></td>
    <td class="totals">Subtotal:</td>
    <td class="totals cost">&pound;1825.60</td>
    </tr>
    <tr>
    <td class="totals">Tax:</td>
    <td class="totals cost">&pound;18.25</td>
    </tr>
    <tr>
    <td class="totals">Shipping:</td>
    <td class="totals cost">&pound;42.56</td>
    </tr>
    <tr>
    <td class="totals"><b>TOTAL:</b></td>
    <td class="totals cost"><b>&pound;1882.56</b></td>
    </tr>
    <tr>
    <td class="totals">Deposit:</td>
    <td class="totals cost">&pound;100.00</td>
    </tr>
    <tr>
    <td class="totals"><b>Balance due:</b></td>
    <td class="totals cost"><b>&pound;1782.56</b></td>
    </tr>
    </tbody>
    </table>
    <br />




    <div style="text-align: center; font-style: italic;">Payment terms: payment due in 30 days</div>
    <hr>
    <barcode code="0123456789" type="C128C" class="barcode" />
    ><barcode code="Your message\ngoes here" type="QR" class="barcode" size="0.8" error="M" />
    </div>
  </body>
</html>
