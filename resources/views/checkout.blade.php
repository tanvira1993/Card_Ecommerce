<!--Main index : End-->
<main class="main">
    <section class="header-page">
        <div class="container">
            <div class="row">
                <div class="col-sm-3 hidden-xs">
                    <h1 class="mh-title">Checkout</h1>
                </div>
                <div class="breadcrumb-w col-sm-9">
                    <span class="hidden-xs">You are here:</span>
                    <ul class="breadcrumb">
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li>
                            <span>Checkout</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section id="checkout" class="pr-main">
        <div class="container">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="cart-top">
                    <img alt="Cart top banner" src="frontend/images/banner/cart/top-banner.jpg">
                </div>
            </div>
            <div class="cart-view-top">
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <h1>Shopping Cart</h1>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12 right">
                    <h1>Continue Shopping</h1>
                </div>
                <div id="login-pane" class="col-md-12 col-sm-12 col-xs-12">
                    <p>Please fill in the fields below to complete your order.<a id="login-modal-trigger" href="#"> Already registered? Click here to login.</a></p>
                </div>
            </div>


            <div class="onepage">
                <div  class="col-md-4 col-sm-6 col-xs-12">
                    <div id="div_billto">
                        <div class="pane round-box">
                            <h3 class="title"><span class="icon icon-one">1</span>BILLING INFO</h3>
                            <div class="pane-inner">
                                <ul id="table_billto" class="adminform user-details no-border">
                                    <li class="short">
                                        <div class="field-wrapper">
                                            <label for="company_field" class="company">Company Name	</label>
                                            <br>
                                            <input type="text" maxlength="64" value="Shipment" size="30" name="company" id="company_field">
                                        </div>
                                    </li>

                                    <li class="short right">
                                        <div class="field-wrapper">

                                            <label for="email_field" class="email">
                                                E-Mail<em>*</em>					</label>
                                            <br>

                                            <input type="text" maxlength="100" class="required" value="" size="30" name="email" id="email_field">
                                        </div>
                                    </li>

                                    <li class="short">
                                        <div class="field-wrapper">

                                            <label for="title_field" class="title">Title</label>
                                            <br>

                                            <select style="width: 210px" class="vm-chzn-select" name="title" id="title">
                                                <option selected="selected" value="">-- Select --</option>
                                                <option value="Mr">Mr</option>
                                                <option value="Mrs">Mrs</option>
                                            </select>

                                        </div>
                                    </li>

                                    <li class="short right">
                                        <div class="field-wrapper">
                                            <label for="first_name_field" class="first_name">First Name</label>
                                            <br>

                                            <input type="text" maxlength="32" value="" size="30" name="first_name" id="first_name_field">
                                        </div>
                                    </li>

                                    <li class="short">
                                        <div class="field-wrapper">

                                            <label for="middle_name_field" class="middle_name">
                                                Middle Name					</label>
                                            <br>

                                            <input type="text" maxlength="32" value="" size="30" name="middle_name" id="middle_name_field">
                                        </div>
                                    </li>

                                    <li class="short right">
                                        <div class="field-wrapper">

                                            <label for="last_name_field" class="last_name">
                                                Last Name					</label>
                                            <br>

                                            <input type="text" maxlength="32" value="" size="30" name="last_name" id="last_name_field">
                                        </div>
                                    </li>



                                    <li class="short">
                                        <div class="field-wrapper">

                                            <label for="zip_field" class="zip">
                                                Zip / Postal Code<em>*</em>					</label>
                                            <br>

                                            <input type="text" maxlength="32" class="required" value="" size="30" name="zip" id="zip_field">
                                        </div>
                                    </li>

                                    <li class="short right">
                                        <div class="field-wrapper">

                                            <label for="virtuemart_country_id_field" class="virtuemart_country_id">
                                                Country<em>*</em>					</label>
                                            <br>

                                            <select style="width: 210px" class="vm-chzn-select required" name="virtuemart_country_id" id="virtuemart_country_id" onchange="loadstatebt(this)">
                                                <option selected="selected" value="">-- Select --</option>
                                                <option value="1">Afghanistan</option>
                                                <option value="2">Albania</option>
                                                <option value="3">Algeria</option>
                                                <option value="4">American Samoa</option>
                                                <option value="5">Andorra</option>
                                                <option value="6">Angola</option>
                                                <option value="7">Anguilla</option>
                                                <option value="8">Antarctica</option>
                                                <option value="9">Antigua and Barbuda</option>
                                                <option value="10">Argentina</option>
                                            </select>

                                        </div>
                                    </li>
                                    <li class="short">
                                        <div class="field-wrapper">

                                            <label for="virtuemart_city" class="virtuemart_state_id">
                                                City<em>*</em>					</label>
                                            <br>

                                            <select style="width: 210px" name="virtuemart_city" class="vm-chzn-select" id="virtuemart_city">
                                                <option value="">-- Select --</option>
                                            </select>
                                        </div>
                                    </li>

                                    <li class="short right">
                                        <div class="field-wrapper">

                                            <label for="virtuemart_state_id_field" class="virtuemart_state_id">
                                                State / Province / Region<em>*</em>					</label>
                                            <br>

                                            <select style="width: 210px" name="virtuemart_state_id" class="vm-chzn-select" id="virtuemart_state_id">
                                                <option value="">-- Select --</option>
                                            </select>
                                        </div>
                                    </li>

                                    <li class="short">
                                        <div class="field-wrapper">

                                            <label for="phone_1_field" class="phone_1">
                                                Phone					</label>
                                            <br>

                                            <input type="text" maxlength="32" value="" size="30" name="phone_1" id="phone_1_field">
                                        </div>
                                    </li>

                                    <li class="short right">
                                        <div class="field-wrapper">

                                            <label for="phone_2_field" class="phone_2">
                                                Mobile phone					</label>
                                            <br>

                                            <input type="text" maxlength="32" value="" size="30" name="phone_2" id="phone_2_field">
                                        </div>
                                    </li>
                                    <li class="long">
                                        <div class="field-wrapper">

                                            <label for="address_1_field" class="address_1">
                                                Address 1<em>*</em>					</label>
                                            <br>

                                            <input type="text" maxlength="64" class="required" value="" size="30" name="address_1" id="address_1_field">
                                        </div>
                                    </li>
                                    <li class="long">
                                        <div class="field-wrapper">

                                            <label for="fax_field" class="fax">
                                                Fax					</label>
                                            <br>

                                            <input type="text" maxlength="32" value="" size="30" name="fax" id="fax_field">
                                        </div>
                                    </li>

                                </ul>


                                <ul id="user-actions-trigger">
                                    <li>
                                        <input type="checkbox" id="register"><label class="registers">Create an account for later use</label>
                                        <ul id="user-register-fields">

                                            <li class="short">
                                                <div class="field-wrapper username">
                                                    <label for="username_field" class="username">
                                                        Username <em>*</em>
                                                    </label>
                                                    <br>
                                                    <input type="text" maxlength="25" value="" size="30" name="username" id="username_field">
                                                </div>
                                            </li>

                                            <li class="short">
                                                <div class="field-wrapper name">
                                                    <label for="name_field" class="name">
                                                        Displayed Name <em>*</em>
                                                    </label>
                                                    <br>
                                                    <input type="text" maxlength="25" value="" size="30" name="name" id="name_field">
                                                </div>
                                            </li>

                                            <li class="short">
                                                <div class="field-wrapper password">
                                                    <label for="password_field" class="password">
                                                        Password <em>*</em>
                                                    </label>
                                                    <br>
                                                    <input type="password" class="inputbox" size="30" name="password" id="password_field">

                                                </div>
                                            </li>

                                            <li class="short">
                                                <div class="field-wrapper password2">
                                                    <label for="password2_field" class="password2">
                                                        Confirm Password <em>*</em>
                                                    </label>
                                                    <br>
                                                    <input type="password" class="inputbox" size="30" name="password2" id="password2_field">

                                                </div>
                                            </li>

                                            <li class="long">
                                                <div class="field-wrapper agreed">
                                                    <label for="agreed_field" class="agreed">
                                                        I agree to the Terms of Service <em>*</em>
                                                    </label>
                                                    <input type="checkbox" value="1" id="agreed_field" name="agreed">
                                                </div>
                                            </li>
                                        </ul>
                                    </li>

                                </ul>

                            </div>
                        </div>
                    </div>
                    <!-- Cos 2 -->


                    <div id="shipping_info_w">
                        <div id="div_shipto" class="shipping_info">
                            <div class="pane round-box">
                                <h3 class="title">
                                    <span class="icon icon-two">2</span>
                                    SHIPMENT ADDRESS		</h3>

                                <div id="table_shipto" class="pane-inner">
                            <span class="check_stsaneasbt">
                                <input type="checkbox" name="stsameasbt" id="STsameAsBT">
                                <label  class="registers" for="STsameAsBT">Ship to same address</label>
                            </span>
                                    <ul id="table_shippingto" class="adminform user-details no-border">

                                        <li class="short">
                                            <div class="field-wrapper">
                                                <label for="shipto_address_type_name_field" class="shipto_address_type_name">
                                                    Address Nickname					</label>
                                                <br>
                                                <input type="text" maxlength="32" value="Shipment" size="30" name="shipto_address_type_name" id="shipto_address_type_name_field">
                                            </div></li>

                                        <li class="short right">
                                            <div class="field-wrapper">
                                                <label for="shipto_company_field" class="shipto_company">
                                                    Company Name					</label>
                                                <br>
                                                <input type="text" maxlength="64" value="Shipment" size="30" name="shipto_company" id="shipto_company_field">
                                            </div></li>

                                        <li class="short">
                                            <div class="field-wrapper">
                                                <label for="shipto_first_name_field" class="shipto_first_name">
                                                    First Name					</label>
                                                <br>
                                                <input type="text" maxlength="32" value="" size="30" name="shipto_first_name" id="shipto_first_name_field">
                                            </div></li>

                                        <li class="short right">
                                            <div class="field-wrapper">
                                                <label for="shipto_middle_name_field" class="shipto_middle_name">
                                                    Middle Name					</label>
                                                <br>
                                                <input type="text" maxlength="32" value="" size="30" name="shipto_middle_name" id="shipto_middle_name_field">
                                            </div></li>

                                        <li class="short">
                                            <div class="field-wrapper">
                                                <label for="shipto_last_name_field" class="shipto_last_name">
                                                    Last Name					</label>
                                                <br>
                                                <input type="text" maxlength="32" value="" size="30" name="shipto_last_name" id="shipto_last_name_field">
                                            </div></li>



                                        <li class="short right">
                                            <div class="field-wrapper">
                                                <label for="shipto_zip_field" class="shipto_zip">
                                                    Zip / Postal Code<em>*</em>					</label>
                                                <br>
                                                <input type="text" maxlength="32" class="required" value="" size="30" name="shipto_zip" id="shipto_zip_field" onchange="nx.checkout.update_form();">
                                            </div></li>

                                        <li class="short">
                                            <div class="field-wrapper">
                                                <label for="shipto_virtuemart_country_id_field" class="shipto_virtuemart_country_id">
                                                    Country<em>*</em>					</label>
                                                <br>
                                                <select style="width: 210px" class="vm-chzn-select required" name="shipto_virtuemart_country_id" id="shipto_virtuemart_country_id" onchange="loadstatest(this)">
                                                    <option selected="selected" value="">-- Select --</option>
                                                    <option value="1">Afghanistan</option>
                                                    <option value="2">Albania</option>
                                                    <option value="3">Algeria</option>
                                                    <option value="4">American Samoa</option>
                                                    <option value="5">Andorra</option>
                                                </select>

                                            </div></li>

                                        <li class="short right">
                                            <div class="field-wrapper">
                                                <label for="shipto_virtuemart_state_id_field" class="shipto_virtuemart_state_id">
                                                    State / Province / Region<em>*</em>					</label>
                                                <br>
                                                <select style="width: 210px" name="shipto_virtuemart_state_id" class="vm-chzn-select" id="shipto_virtuemart_state_id" onchange="nx.checkout.update_form();">
                                                    <option value="">-- Select --</option>
                                                </select>
                                            </div></li>

                                        <li class="short">
                                            <div class="field-wrapper">
                                                <label for="shipto_phone_1_field" class="shipto_phone_1">
                                                    Phone					</label>
                                                <br>
                                                <input type="text" maxlength="32" value="" size="30" name="shipto_phone_1" id="shipto_phone_1_field">
                                            </div></li>

                                        <li class="short right">
                                            <div class="field-wrapper">
                                                <label for="shipto_phone_2_field" class="shipto_phone_2">
                                                    Mobile phone					</label>
                                                <br>
                                                <input type="text" maxlength="32" value="" size="30" name="shipto_phone_2" id="shipto_phone_2_field">
                                            </div></li>
                                        <li class="long">
                                            <div class="field-wrapper">
                                                <label for="shipto_address_1_field" class="shipto_address_1">
                                                    Address 1<em>*</em>					</label>
                                                <br>
                                                <input type="text" maxlength="64" class="required" value="" size="30" name="shipto_address_1" id="shipto_address_1_field">
                                            </div></li>

                                        <li class="long">
                                            <div class="field-wrapper">
                                                <label for="shipto_fax_field" class="shipto_fax">
                                                    Fax					</label>
                                                <br>
                                                <input type="text" maxlength="32" value="" size="30" name="shipto_fax" id="shipto_fax_field">
                                            </div></li>

                                    </ul>

                                </div>
                            </div>
                        </div>
                    </div><!-- shipping_info -->
                </div>
                <div class="col-md-8 col-sm-6 col-xs-12">
                    <div id="right-pane-top" class="col-md-12 col-sm-12 col-xs-12">
                        <div id="shipping_method" class="col-md-6 col-sm-12 col-xs-12">
                            <div class="shipment-pane">
                                <div class="pane round-box">
                                    <h3 class="title">
                                        <span class="icon icon-three">3</span>
                                        Shipping method		</h3>
                                    <div class="pane-inner" style="visibility: visible;">
                                        Select shipment<fieldset id="shipments"><input type="radio" value="1" id="shipment_id_1" name="virtuemart_shipmentmethod_id" checked="checked">
                                            <label for="shipment_id_1"><span class="vmshipment"><span class="vmshipment_name">Cmsmart</span></span></label>
                                            <br><input type="radio" value="2" id="shipment_id_2" name="virtuemart_shipmentmethod_id">
                                            <label for="shipment_id_2"><span class="vmshipment"><span class="vmshipment_name">Printmart</span></span></label>
                                            <br></fieldset>		</div>
                                </div>
                            </div>
                        </div><!-- shipping_method -->

                        <div id="payment_method" class="col-md-6 col-sm-12 col-xs-12">
                            <div class="payment-pane">
                                <div class="pane round-box">
                                    <h3 class="title">
                                        <span class="icon icon-four">4</span>
                                        Payment method		</h3>
                                    <div class="pane-inner">
                                        Select payment method<fieldset id="payments"><input type="radio" value="1" id="payment_id_1" name="virtuemart_paymentmethod_id" checked="checked">
                                            <label for="payment_id_1"><span class="vmpayment"><span class="vmpayment_name">Payment</span></span></label>
                                            <br><input type="radio" value="2" id="payment_id_2" name="virtuemart_paymentmethod_id">
                                            <label for="payment_id_2"><span class="vmpayment"><span class="vmpayment_name">Payment1</span></span></label>
                                            <br></fieldset>		</div>
                                </div>
                            </div>
                        </div><!-- payment_method -->
                        <div class="delivery-time-pane col-md-6 col-sm-12 col-xs-12">
                            <div class="pane round-box">
                                <h3 class="title">
                                    <span class="icon icon-five">5</span>
                                    Delivery time        </h3>
                                <div class="pane-inner">
                                    <!-- show delivery date -->
                                    <div class="delivery date">
                                        <h2>Select Delivey Date </h2>
                                        <div class="input-date">
                                            <input id="delivery_date_on" readonly="readonly" name="delivery_date" value="2015-05-10" size="10" class="hasDatepicker">
                                            To
                                            <input id="delivery_date_off" readonly="readonly" name="delivery_date" value="2015-05-15" size="10" class="hasDatepicker">
                                        </div>
                                    </div>

                                    <!-- enable show delivery time -->
                                    <div class="delivery time">
                                        <h2>Select Delivery Time</h2>
                                        <div class="input-time">
                                            <input readonly="readonly" value="08:15" id="delivery_time_on" name="delivery_time" size="10" class="hasDatepicker">
                                            To
                                            <input readonly="readonly" value="08:50" id="delivery_time_off" name="delivery_time" size="10" class="hasDatepicker">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="checkfull" class="col-md-8 col-sm-12 col-xs-12">
                    <div  class="col-md-12 col-sm-12 col-xs-12" >
                        <!-- render layout -->

                        <fieldset class="round-box" id="cart-contents">
                            <h3 class="title"><span class="icon fa fa-check"></span>ORDER REVIEWS</h3>
                            <table cellspacing="0" cellpadding="0" border="0" class="cart-summary no-border">
                                <tbody><tr clas="top-header">
                                    <th align="left" class="th-name">Products Name</th>
                                    <th width="10%" class="th-price">Price</th>
                                    <th width="10%" class="th-tax"><span class="priceColor2">Tax</span></th>
                                    <th width="15%"  class="th-quanlity">Quanlity</th>
                                    <th width="15%" class="th-discount"><span class="priceColor2">Action</span></th>
                                    <th width="15%" align="left" class="th-total th-last">SubTotal</th>
                                </tr>

                                <tr valign="top" id="product_row_0" class="product-detail-row product-detail-last-row sectiontableentry1">
                                    <td align="left" class="pro_name">
                                        <img class="cart-images" src="frontend/images/op-img01.jpg">
                                        <a class="product-name" href="#">Wall Graphics</a>
                                    </td>
                                    <td align="left" class="base-price">
                                        <div class="PricebasePrice vm-display vm-price-value"><span class="vm-price-desc"></span><span class="PricebasePrice">$139.00</span></div>				</td>
                                    <td align="right" class="pro_tax"><span class="priceColor2"><div class="PricetaxAmount vm-display vm-price-value"><span class="vm-price-desc"></span><span class="PricetaxAmount">$11.17</span></div></span></td>
                                    <td align="left" class="product-quanlity">
                                        <input type="text" id="quantity_0" value="1" maxlength="4" size="3" name="quantity[0]" class="quantity-input js-recalculate" title="Update Quantity In Cart">
                                    </td>

                                    <td align="left" class="product-quanlity action">
                                        <a data-pid="0" href="#" align="middle" title="DUpdate Quantity In Cart" name="update" class="fa fa-refresh"> </a>
                                        <a data-pid="0" href="#" align="middle" title="Delete Product From Cart" name="remove" class="fa fa-times-circle"> </a>
                                    </td>

                                    <td align="right" id="subtotal_with_tax_0" colspan="0" class="sub-total td-last"><span class="line-through">$152.90</span></td>
                                </tr>
                                <!--Begin of SubTotal, Tax, Shipment, Coupon Discount and Total listing -->
                                <!--  Total -->
                                <tr class="pr-total">
                                    <td colspan="6">
                                        <table>
                                            <tbody>
                                            <tr class="first">
                                                <td>SubTotal:</td>
                                                <td class="pr-right"><div class="PricesalesPrice vm-display vm-price-value"><span class="vm-price-desc"></span><span class="PricesalesPrice">$122.90</span></div></td>
                                            </tr>
                                            <tr>
                                                <td>Discount:</td>
                                                <td class="pr-right">
                                                    <span id="total_amount" class="priceColor2">$-30.00</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Tax:</td>
                                                <td class="pr-right"><span id="total_tax" class="priceColor2">$11.17</span></td>
                                            </tr>
                                            <tr>
                                                <td>Shipment:</td>
                                                <td class="pr-right"><span id="shipment" class="priceColor2">0</span></td>
                                            </tr>
                                            <tr class="last">
                                                <td>Total:</td>
                                                <td class="pr-right"><strong id="bill_total">$122.90</strong></td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                                <!--  End Total -->
                                <tr class="coupon-pane">
                                    <td align="left" class="border-radius-lb" colspan="6">
                                        <input type="text" onfocus="if(this.value=='Enter your Coupon code') this.value='';" onblur="if(this.value=='') this.value='Enter your Coupon code';" value="Enter your Coupon code" alt="Enter your Coupon code" class="coupon" maxlength="50" size="20" id="coupon_code" name="coupon_code">
                                        <span class="details-button"><input type="button" value="Save" title="Save" class="details-button" id="coupon_code_button"></span>
                                    </td>
                                </tr>

                                </tbody></table>
                        </fieldset>

                        <div id="right-pane-bottom">
                            <div class="customer-note">
                                <p class="comment">Notes and special requests</p>
                                <textarea class="inputbox" rows="1" cols="60" name="customer_note" id="customer_note_field"></textarea>
                            </div>
                            <fieldset class="vm-fieldset-tos">
                                <input id="tos" class="terms-of-service" type="checkbox"  name="tos" value="1">
                                <span>Click here to read terms of service and check the box to accept them.</span>
                                <div class="checkout-button-top">
                                    <a href="#" class="vm-button-correct"><span>Confirn Purchase</span></a>
                                </div>
                            </fieldset>
                        </div><!-- right-pane-bottom -->

                    </div>

                </div>
    </section>
</main><!--Main index : End-->
