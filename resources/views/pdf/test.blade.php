<!DOCTYPE html>
<html>
  <head>

    <title></title>
    <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">

    <style>
      body{
        color: red;

        /* background: green; */

      }
      .kamal{
        width: 100%;
        height: 80px;
        background: green;

      }
      .red{
        width: 100%;
        height: 2px;
        background: red;
        font-family: 'Lobster', cursive;
      }
      .hospital-name{
        text-align: center;
        color: white;
        font-family: 'monotypecorsiva';
      }
      .r{
        font-family: 'freesans' !important;
        font-size: 2.3em;
        color: red;
      }
      .barcode {
    /* padding: 1.5mm;
    margin: 0;
    vertical-align: top; */
    margin-left: 50px;
    color: blue;
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
    <div class="">
    <h1>KAMAL  i am here man 01 page = $PAGENO</h1>
    <div align="center"><b></b></div>

    <htmlpageheader name="firstpageheader" style="display:none">
        <div style="text-align:center"> first page header Page {PAGENO} / {nbpg}</div>
    </htmlpageheader>

    <htmlpagefooter name="firstpagefooter" style="display:none">
        <div style="text-align:center">first page footer</div>
    </htmlpagefooter>

    <htmlpageheader name="otherpageheader" style="display:none">
        <div style="text-align:center"> all page Header</div>
    </htmlpageheader>

    <htmlpagefooter name="otherpagesfooter" style="display:none">
        <div style="text-align:center">all page footer </div>
    </htmlpagefooter>

    <img src="" alt="">

    <!-- <div style="position:fixed; right: 50mm; top: 60mm; border: 0.2mm solid #000000; text-align:
center; padding: 0.5mm; padding-top: 2mm;">
<barcode code="1112345678912343" type="EAN128C" /><br />
<div style="font-family: ocrb;">1112345678912343</div>
</div> -->

    <!-- <barcode code="01234567897" type="MSI" class="barcode" /> -->
    <barcode code="100125" type="C128C" class="barcode"  size="2" height="0.05"/>

    <!-- <barcode code="00123456789" type="PLANET" class="barcode"/> -->

     <!-- <barcode code="11234567899" type="PLANET" class="barcode" size="1" height="0.5" /> -->
    <!-- <barcode code="978-0-9542246-0" type="ISBN" class="barcode" height="0.66" text="1" /> -->

  </div>
    <!-- <div class="kamal">
      <div class="track">
        Track: 3453435353
      </div>
      <div class="hospital-name" style="font-family:'dejavusanscondensed';'direction': rtl">
        <h1 style="font-family:'dejavusanscondensed';'direction': rtl">The Doctor BD العَرَبِيَّة‎</h1>
        <pre>Dhaka,1207,BD
phone:123455</pre>
      </div>
    </div>
    <div class="red">

    </div>
    <h1 style="color:black;font-family:'ocrb'">Rx..</h1>
    <div class="" style="height:1000px;background:yellow">

    </div>
    <div class="" style="height:1000px;background:blue">

    </div>
    <div class="r">
      {{ $user['foo'] }}

    </div> -->
  </body>
</html>
