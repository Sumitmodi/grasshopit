<?php
/*
 * Author   :   Arjun Paudel
 * Email    :   hobo2rist@gmail.com
 * Date     :   9/14/14 4:42 PM
 * File     :   form.php
 * Project  :   grasshopit
 * Copyright (c) Author
 */
?>

<?php
if(!isset($merchant)){
    $merchant = "";
}
$root = "http://www.grasshopit.com/live";
?>
<script type="text/javascript">
		function setAmount() {
            document.forms.mainform.AMOUNT.value=document.forms.mainform.AMOUNT.value.replace(/[^\d\.\-\ ]/g, '');
		}
		</script>

	<script type="text/javascript">

	<!--
		function verify() {
            var themessage = "You are required to complete the following fields: \n";

            if (document.forms.mainform.AMOUNT.value=="") {
                themessage = themessage + " - Amount \n";
            }

            if (document.forms.mainform.CC_NUM.value=="") {
                themessage = themessage + " - Credit Card Number \n";
            }

            if (document.forms.mainform.CC_EXPIRES_MONTH.value=="") {
                themessage = themessage + " - Card Expiration Month \n";
            }

            if (document.forms.mainform.CC_EXPIRES_YEAR.value=="") {
                themessage = themessage + " - Card Expiration Year \n";
            }
            if (document.forms.mainform.CVCCVV2.value=="") {
                themessage = themessage + " - CVV2 \n";
            }

            if (document.forms.mainform.NAME.value=="") {
                themessage = themessage + " - Name on Card \n";
            }

            if (document.forms.mainform.ADDR1.value=="") {
                themessage = themessage + " - Billing Address \n";
            }

            if (document.forms.mainform.CITY.value=="") {
                themessage = themessage + " - City \n";
            }

            if (document.forms.mainform.STATE.value=="") {
                themessage = themessage + " - State \n";
            }

            if (document.forms.mainform.ZIPCODE.value=="") {
                themessage = themessage + " - Zip Code \n";
            }

            if (document.forms.mainform.PHONE.value=="") {
                themessage = themessage + " - Phone Number \n";
            }

            if (document.forms.mainform.EMAIL.value=="") {
                themessage = themessage + " - Email Address";
            }


            //alert if fields are empty and cancel form submit
            if (themessage != "You are required to complete the following fields: \n") {
                alert(themessage);
                return false;

            }
        }

		function popup(mylink, windowname){
            if (! window.focus)return true;
            var href;
            if (typeof(mylink) == 'string')
                href=images/cvv.jpg;
            else
                href=mylink.href;
            window.open(href, windowname, 'width=500,height=400,scrollbars=yes');
            return false;
        }

//-->
	</script>
 </head>

<body>

<div id="wrap-border"><div id="wrap">

    <!--div id="header">

        <div id="header-dba">
			<div class="title-head">Grasshopit</div>
			<div style="clear: both;"></div>

        </div>
    </div-->

    <div id="form-table">

     <form id="mainform" class="mainform" action="https://secure.bluepay.com/interfaces/bp10emu" method="post" onSubmit="setAmount()">
         <input type="hidden" name="MERCHANT" value="<?php echo @$acc_id ?>"/>
			<input type="hidden" name="TRANSACTION_TYPE" value="SALE"/>
			<input type="hidden" name="TAMPER_PROOF_SEAL" value="d41d8cd98f00b204e9800998ecf8427e"/>
			<input type="hidden" name="APPROVED_URL" value="<?php echo $root ?>/payment/approved"/>
			<input type="hidden" name="DECLINED_URL" value="<?php echo $root ?>/payment/declined"/>
			<input type="hidden" name="MISSING_URL"  value="<?php echo $root ?>/payment/missing"/>
			<input type="hidden" name="MODE"         value="<?php echo @$mode ?>"/>
			<input type="hidden" name="CUSTOM_ID"        value="<?php echo @$id_1 ?>"/>
			<input type="hidden" name="CUSTOM_ID2"        value="<?php echo @$id_2 ?>"/>
			<input type="hidden" name="COMMENT"        value="<?php echo @$merchant ?>"/>
			<input type="hidden" name="REBILLING"    value="<?php echo @$merchant ?>"/>
			<input type="hidden" name="REB_CYCLES"   value="<?php echo @$merchant ?>"/>
			<input type="hidden" name="REB_AMOUNT"   value="<?php echo @$merchant ?>"/>
			<input type="hidden" name="REB_EXPR"     value="<?php echo @$merchant ?>"/>
			<input type="hidden" name="REB_FIRST_DATE" value="<?php echo @$merchant ?>"/>
			<input type="hidden" name="TPS_DEF" value="<?php echo @$merchant ?>"/>

      <table id="payment_info">

          <tbody>


            <tr>
              <td colspan="5"></td>
            </tr>

			<tr>
              <td style="vertical-align:middle;"><b>Payment Information:</b></td>
              <td colspan="3" style="vertical-align:middle;"><img src="/<?php echo DOMAIN ?>/assets/bluepay/images/visa.gif" alt="visa"/><img src="/<?php echo DOMAIN ?>/assets/bluepay/images/mc.gif" alt="mastercard"/><img src="/<?php echo DOMAIN ?>/assets/bluepay/images/discvr.gif" alt="discover"/><img src="/<?php echo DOMAIN ?>/assets/bluepay/images/${AMEX_IMAGE}" alt=""/></td>
			<td></td></tr>

              <tr>
              <td>Amount:</td>
			  <td><input type="text" class="form" name="AMOUNT" value="<?php echo @$amount?@$amount:'0.00' ?>" disabled autocomplete="off"/></td>
			  <td>Invoice Number:</td><td><input type="text" class="form"  name="INVOICE_ID" value="" maxlength="10" autocomplete="off"/></td><td>(optional)</td>
            </tr>

             <tr>
			  <td>Card Number:</td>
			  <td><input type="text" class="form" name="CC_NUM" value="" autocomplete="off" maxlength="16"/></td>
			  <td>Order Number:</td><td><input type="text" class="form"  name="ORDER_ID" value="" maxlength="10" autocomplete="off"/></td><td>(optional)</td>
            </tr>

			 <tr>
              <td>CVV2 : <a href="/<?php echo DOMAIN ?>/assets/bluepay/images/cvv.png" onClick="return popup(this, 'notes')">What's this?</A></td>
			  <td><input type="text" class="form" name="CVCCVV2" value="" maxlength="4"autocomplete="off"/></td>
            </tr>
			 <tr>
			  <td>Expiration Date:</td>
			  <td><select name="CC_EXPIRES_MONTH">
				<option value="" SELECTED>--Month--</option>
				<option value="01">01</option>
				<option value="02">02</option>
				<option value="03">03</option>
				<option value="04">04</option>
				<option value="05">05</option>
				<option value="06">06</option>
				<option value="07">07</option>
				<option value="08">08</option>
				<option value="09">09</option>
				<option value="10">10</option>
				<option value="11">11</option>
				<option value="12">12</option>
				</select> /
				<select name="CC_EXPIRES_YEAR">
				<option value="" SELECTED>--Year--</option>
				<option value="13">2013</option>
				<option value="14">2014</option>
				<option value="15">2015</option>
				<option value="16">2016</option>
				<option value="17">2017</option>
				<option value="18">2018</option>
				<option value="19">2019</option>
				<option value="20">2020</option>
				</select>
				</td>
			 </tr>
            <tr>
             <td colspan="4" style="height: 50px; vertical-align:bottom;"><b>Billing Information:</b></td>
            </tr>

            <tr>
              <td>Name On Card:</td><td><input type="text" class="form"  name="NAME" value="<?php echo @$costumer ?>" autocomplete="off"/></td>
              <td>Company:</td><td><input type="text" class="form"  name="COMPANY_NAME" value="" autocomplete="off"/></td><td>(optional)</td>
            </tr>

            <tr>
              <td>Billing Address:</td><td><input type="text" class="form"  name="ADDR1" value="" autocomplete="off"/></td>
              <td>City:</td><td><input type="text" class="form"  name="CITY" value="" autocomplete="off"/></td>
            </tr>

            <tr>
              <td>State/Province:</td><td><input type="text" class="form"  name="STATE" value="" autocomplete="off"/></td>
              <td>Zip/Postal Code:</td><td><input type="text" class="form"  name="ZIPCODE" value="" autocomplete="off"/></td>
            </tr>

            <tr>
              <td>Country:</td>
			  <td><input type="text" name="COUNTRY" class="form" value="" autocomplete="off"/></td>
			  <td>Email Address:</td>
			  <td><input type="text" name="EMAIL" class="form" value="" autocomplete="off"/></td>
			 </tr>

			 <tr>
			  <td>Phone: xxx-xxx-xxxx</td><td><input type="text" class="form"  name="PHONE" value="" maxlength="12"autocomplete="off"/></td>
			  <td colspan="2"></td>
            </tr>

            <tr>
            <td colspan="4"><br></td>
            </tr>

            <tr>
            <td colspan="2"><a href="http://www.bluepay.com" target="new"><img src="/<?php echo DOMAIN ?>/assets/bluepay/images/BluePay2.png" border="0" alt="securebybluepay" /></a></td>
            <td colspan="2" style="text-align:right"><input type="submit" value="Submit Payment" class="button"  onClick="return verify()"  /></td>
            </tr>


        </tbody>
      </table>


    </form>
    </div>
    <div id="footer">
    </div>

</div></div>
