
<html>

    <head>
        <meta charset="utf-8">
    
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
    
        <title>{{ config('app.name', 'Laravel') }}</title>
    
        <link href="/maindir/css/main.css" rel="stylesheet">
        <link href="/maindir/css/responsive.css" rel="stylesheet">
        <link href="/maindir/css/bootstrap.min.css" rel="stylesheet">
        <link href="/maindir/css/font-awesome.min.css" rel="stylesheet">

        <style>
            /* Invoice Section */


#invoice {
  width: 70%;
  margin: 0 auto;
  background: #eee;
}

.invoiceContent {
  width: 100%;
  padding: 30px 50px;
  margin: 70px 0;
  background: #fff;
}

.invHeaderTop {
  width: 500px;
  margin: 0 auto;
  text-align: center;
  padding: 30px 10px;
}

.invHeaderTop h1 {
  font-size: 2.7em;
  color: rgb(236,28,35);
  margin-bottom: 0;
  padding-bottom: 0;
  letter-spacing: -2px;
}

.invHeaderTop h4 {
  font-size: 1.1em;
  color: #1e262e;
  font-weight: 500;
  margin: 10px 0;
  letter-spacing: 2px;
}

.invHeaderMid {
  width: 100%;
  padding: 10px;
  margin: 30px 0 0 0;
}

.locInfo {
  font-size: 0.9em;
  font-weight: 300;
  color: #363432;
}

.contactInfo {
  margin: -10px 0 0 0;
  color: #1e262e;
  font-weight: 500;
  font-size: 0.8em;
}

.invCenter {
  width: 100%;
  margin: 0;
  padding: 10px;
  border: 2px solid #1e262e;
}

.delAdd {
  float: left;
  margin-right: 50px;
}

.delAdd p {
  margin: 0;
  font-size: 0.9em;
}

.delAdd h4 {
  margin:-22px 0 5px 0;
  font-size: 1.1em;
}

.delAdd h2 {
  margin:70px 0 0 0;
  font-size: 1.2em;
}

.delAdd2 p {
  margin: 0;
  font-size: 0.9em;
}

.delAdd2 h4 {
  margin-top:-22px;
  margin-bottom:5px;
  font-size: 1.1em;
}

.delAdd2 h2 {
  margin:70px 0 0 0;
  font-size: 1.2em;
}

.invCenterTbl td {
  padding: 3px;
  font-size: 0.8em;
}

.invBottom {
  width: 100%;
  padding: 20px;
}

.invBottomTbl {
  width: 100%;
}

.invBottomTbl th {
  color: #1e262e;
  padding: 0 10px 5px 10px;
  border-bottom: 1px solid #eee;
}

.invBottomTbl td {
  margin: 0;
  color: #666663;
  font-size: 0.8em;
  font-weight: 400;
  line-height: 8px;
  padding: 5px 10px 5px 10px;
}

.invBottomTbl h4 {
  margin: 0;
  padding: 0;
  color: #1e262e;
  font-size: 1.2em;
  font-weight: 500;
}

.pr {
  text-align: right;
}

.invTot {
  border-top: #ccc!important;
}

.invBottomTbl .invTot td {
  border-top: 1px solid #eee;
}




@media print {
  #invoice {
    width: 100%;
    display: block !important;
  }

  .delAdd {
    margin-right: 100px;
  }

  .invHeaderTop h1 {
    margin-top: -100px;
    color: rgb(236,28,35)!important;
  }
}



/* home_top */
 #home_top {
   width: 100%;
   height: 800px;
   /* border-radius: 0 0 50% 30%;
   -webkit-clip-path: polygon(0 0, 100% 0, 100% 56%, 0 100%);
    clip-path: polygon(0 0, 100% 0, 100% 56%, 0 100%); */
   background-image: url(../images/my_images/bg8.jpg);
   background-position: center;
   background-repeat: no-repeat;
   margin-bottom: 50px;
 }

 .cAB {
   /* width: 80%; */
   margin: 0 10%;
   padding-top: 150px;
   /* background: tomato; */
 }

 .cA {
   padding: 40px 20px 20px 20px;
   height: 700px;
}

.cB {
  /* background: orchid; */
  height: 700px;
   /* background: turquoise; */
}

.cB2 {
  display: none;
}

.cA_red {
  width: 100%;
  /* float: right; */
  border-radius: 5px;
  /* background: #ec1c24; */
  margin: 70px 20px 20px 50px;
  padding: 15px;
  height: 600px;
  background: rgb(236,28,36);
  background: linear-gradient(50deg, rgba(236,28,36,1) 0%, rgba(143, 20, 45, 0.623) 63%, rgba(255,115,0,1) 100%);
}

.cA_red p {
  color: #fff;
  font-size: 1.2em;
  font-weight: 100;
  line-height: 25px;
  margin: 80px 10px 30px 10px;
  text-align: center;
  /* letter-spacing: 1px; */
}

.cA_red h2 {
  color: #fff;
  font-size: 10em;
  font-weight: 700;
  /* line-height: 30px;
  margin: 50px 10px 30px 10px; */
  text-align: center;
  letter-spacing: -15px;
}

.cA_red input {
  color: rgb(92, 92, 92);
  border: none;
  width: 80%;
  height: 50px;
  padding: 5px 15px;
  margin: 10px 10%;
  border-radius: 4px;
}

.cA_red input::placeholder {color: #ccc;}

.cA_red input:focus {
  outline: none;
}

.cA_red button {
  color: #fff;
  background: #000;
  border: none;
  width: 80%;
  height: 50px;
  font-weight: 300;
  padding: 5px 15px;
  margin: 10px 10%;
  border-radius: 4px;
}

.cA_red button:hover {
  color: #000;
  background: #fff;
}

.spoiled {
  color: #fff;
  font-size: 7em;
  font-weight:700;
  margin: 0 -15px 0 0;
  letter-spacing: -7px;
}

.sally {
  color: #ec1c24;
  font-size: 7em;
  font-weight:200;
  line-height: 35px;
  margin: 0 0 0 0px;
  letter-spacing: -10 px;
}

.cA p {
  color: rgb(196, 196, 196);
  font-size: 1em;
  line-height: 25px;
  font-weight: 100;
  padding: 5px 15px;
  margin: 35px 0 25px 0;
  /* letter-spacing: 1px; */
}

.fash {
  font-family: bettergrade;
  color: rgb(196, 196, 196);
  font-size: 3em;
  line-height: 30px;
  padding: 5px 15px;
  /* letter-spacing: 1px; */
}

.cA button {
  width: 150px;
  height: 45px;
  border: none;
  margin: 20px 5px;
  border-radius: 25px;
}

.cA_btn1 {
  background: #fff;
}

.cA_btn1:hover {
  color: #fff;
  background: transparent;
  border: 1px solid rgb(80, 79, 79)!important;
}

.cA_btn2 {
  color: #fff;
  background: transparent;
  border: 1px solid rgb(80, 79, 79)!important;
}

.cA_btn2:hover {
  color: #000;
  background: #fff;
  border: none;
}

.picShape {
	position: relative;
	z-index: 2;
  width: 250px;
  height: 170px;
  margin-top: 50px;
  transform: rotate(-30deg);
  -ms-transform: translate(150px, 200px);
  transform: translate(200px);
  transform: skew(30deg, -20deg);
  border-radius: 70% 40% 90% 50%;
  background: rgb(255, 145, 0);
  background: linear-gradient(50deg, rgb(252, 168, 59) 0%, rgb(255, 145, 0) 43%, rgb(221, 70, 0) 100%);
}

.picShape2 {
	position: relative;
	z-index: 2;
  width: 90px;
  height: 90px;
  margin-top: 50px;
  transform: rotate(-30deg);
  border-radius: 50%;
  background: rgb(255, 145, 0);
  background: linear-gradient(50deg, rgb(252, 168, 59) 0%, rgb(255, 145, 0) 43%, rgb(221, 70, 0) 100%);
}





 /* checkout_test */
 .checkout_test {
   width: 200px;
   margin: 0 auto;
   margin-top: 100px;
 }

 .checkout_test button {
   width: 100%;
   height: 50px;
   font-size: 1.1em;
   background: #eee;
   border-radius: 5px;
   border: 1px solid #eee;
 }

 .checkout_test button:hover {
  background: #fff;
}

.amtLeft {
  color: rgb(236,28,35);
}




</style>
    </head>
    
    <body style="background: #eee">
    
        <section id="invoice">
            <div class="invoiceContent">
    
                <div class="invHeaderTop">
                    <h1>SPOILED SALLY</h1>
                    <h4>Online Store</h4>
                    <P class="locInfo">Location information here, and more Location information here, and more information here.</P>
                    <P class="contactInfo">+124 923 275 320, SpoiledSally@Yahoo.Com</P>
                </div>
    
                <div class="invHeaderMid">
                    <div class="row">
                        <div class="col-sm-4 delAdd">
                            <p>John Doe Fullname</p>
                            <p>Any Streetno. 172</p>
                            <p>Some City, Box 123</p>
                            <p>Canada</p>
                        </div>
                        <div class="col-sm-4 delAdd2">
                            <h4>Ship-to Address</h4>
                            <p>John Doe Fullname</p>
                            <p>Any Streetno. 172</p>
                            <p>Some City, Box 123</p>
                            <p>Canada</p>
                            <h2>INVOICE</h2>
                        </div>
                        <div class="col-sm-4">
                        
                        </div>
                    </div>
                </div>
    
                <div class="invCenter">
                    <table class="invCenterTbl">
                        <tbody>
                            <tr>
                                <td class="col-sm-3">Invoice No. :<br><br></td>
                                <td class="col-sm-3">VIK72102372A<br><br></td>
                                
                            </tr>
                            <tr>
                                <td class="col-sm-3">Invoice Date :</td>
                                <td class="col-sm-3">27.04.2021</td>
                                <td class="col-sm-2"><b>Customer No. :</b></td>
                                <td class="col-sm-4">P21-00271</td>
                            </tr>
                            <tr>
                                <td class="col-sm-3">Delivery Date :</td>
                                <td class="col-sm-3">27.04.2021</td>
                            </tr>
                            <tr>
                                <td class="col-sm-3">Order No. :</td>
                                <td class="col-sm-3">M921765327</td>
                                <td class="col-sm-2">Sales Person :</td>
                                <td class="col-sm-4">SpoiledSally Export +124 923 275 320</td>
                            </tr>
                            <tr>
                                <td class="col-sm-3">Payment Method :</td>
                                <td class="col-sm-3">Visa card transaction</td>
                                <td class="col-sm-2">Due Date :</td>
                                <td class="col-sm-4">27.04.2021</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
    
                <div class="invBottom">
                    <table class="invBottomTbl">
                        <thead>
                            <th>#</th>
                            <th>Description</th>
                            <th class="pr">Qty.</th>
                            <th class="pr">Unit Price</th>
                            <th class="pr">Total</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="col-sm-1">1</td>
                                <td class="col-sm-6"><h4>M921765327-0137    Alesis</h4><br><p>V61 USB-MIDI Keyboard Controller (Black)</p></td>
                                <td class="col-sm-1 pr">1</td>
                                <td class="col-sm-2 pr">108.40</td>
                                <td class="col-sm-2 pr">108.40</td>
                            </tr>
                            <tr>
                                <td class="col-sm-1">2</td>
                                <td class="col-sm-6"><h4>U231755321-0732    Paypal</h4><br><p>Visa card transaction</td>
                                <td class="col-sm-1 pr">3</td>
                                <td class="col-sm-2 pr">72.00</td>
                                <td class="col-sm-2 pr">216.00</td>
                            </tr><tr>
                                <td class="col-sm-1">3</td>
                                <td class="col-sm-6"><h4>M921765327-0137    Alesis</h4><br><p>V61 USB-MIDI Keyboard Controller (Black)</p></td>
                                <td class="col-sm-1 pr">1</td>
                                <td class="col-sm-2 pr">108.40</td>
                                <td class="col-sm-2 pr">108.40</td>
                            </tr>
                            <tr>
                                <td class="col-sm-1">4</td>
                                <td class="col-sm-6"><h4>Delivery Costs</h4></td>
                                <td class="col-sm-1 pr"></td>
                                <td class="col-sm-2 pr">70.00</td>
                                <td class="col-sm-2 pr">70.00</td>
                            </tr>
                            <tr>
                                <td class="col-sm-1"></td>
                                <td class="col-sm-6"></td>
                                <td class="col-sm-1 pr"></td>
                                <td class="col-sm-2 pr">VAT</td>
                                <td class="col-sm-2 pr">0.00</td>
                            </tr>
                            <tr class="invTot">
                                <td class="col-sm-1"><h4>Total</h4></td>
                                <td class="col-sm-6"></td>
                                <td class="col-sm-1 pr"><h4>4</h4></td>
                                <td class="col-sm-2 pr"><h4>Total $</h4></td>
                                <td class="col-sm-2 pr"><h4>502.00</h4></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
    
            </div>
        </section>
    
    </body>
    
    </html>