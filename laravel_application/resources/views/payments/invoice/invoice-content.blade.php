<div class="ibox-content">
<div class="invoice" id="invoice_pdf">
<style type="text/css">
	/* reset */

/* content editable */

*[contenteditable] { border-radius: 0.25em; min-width: 1em; outline: 0; }

*[contenteditable] { cursor: pointer; }

*[contenteditable]:hover, *[contenteditable]:focus, td:hover *[contenteditable], td:focus *[contenteditable], img.hover { background: #DEF; box-shadow: 0 0 1em 0.5em #DEF; }

span[contenteditable] { display: inline-block; }
span[sateesh] { display: inline-block;
				border: 2px solid #ff0000;
				padding: 20px;
				/*padding-top:50px; */
				color:#ff0000;
				border-radius: 5px;
			 	/*margin-top: -50px;*/
			 	font-weight: 1000;}

span[danger] { display: inline-block;
				border: 2px solid #ff0000;
				padding: 20px;
				/*padding-top:50px; */
				color:#ff0000;
				border-radius: 5px;
			 	/*margin-top: -50px;*/
			 	font-weight: 1000;}

span[primary] { display: inline-block;
				border: 2px solid #ff0000;
				padding: 20px;
				/*padding-top:50px; */
				color:#ff0000;
				border-radius: 5px;
			 	/*margin-top: -50px;*/
			 	font-weight: 1000;}

span[success] { display: inline-block;
				border: 2px solid #2b982b;
				padding: 20px;
				/*padding-top:50px; */
				color:#2b982b;
				border-radius: 5px;
			 	/*margin-top: -50px;*/
			 	font-weight: 1000;}

span[warning] { display: inline-block;
				border: 2px solid #d58512;
				padding: 20px;
				/*padding-top:50px; */
				color:#d58512;
				border-radius: 5px;
			 	/*margin-top: -50px;*/
			 	font-weight: 1000;}

/* heading */

h1 { font: bold 100% sans-serif; letter-spacing: 0.5em; text-align: center; text-transform: uppercase; }

/* table */

table { font-size: 75%; table-layout: fixed; width: 100%; }
table { border-collapse: separate; border-spacing: 2px; }
th, td { border-width: 1px; padding: 0.5em; position: relative; text-align: left; }
th, td { border-radius: 0.25em; border-style: solid; }
th { background: #EEE; border-color: #BBB; }
td { border-color: #DDD; }

/* page */

html { font: 16px/1 'Open Sans', sans-serif; overflow: auto; padding: 0.5in; }
html { background: #999; cursor: default; }

body { box-sizing: border-box; height: 11in; margin: 0 auto; overflow: hidden; padding: 0.5in; width: 8.5in; }
body { background: #FFF; border-radius: 1px; box-shadow: 0 0 1in -0.25in rgba(0, 0, 0, 0.5); }

/* header */

header { margin: 13px 0em 0em; }
header:after { clear: both; content: ""; display: table; }

header h1 { background: #000; border-radius: 0.25em; color: #FFF; margin: 0 0 1em; padding: 0.5em 0; margin-right: 90px; }
header address { float: left; font-size: 75%; font-style: normal; line-height: 1.25; margin: 0 1em 1em 0; }
header address p { margin: 0 0 0.25em; }
header span, header img { display: block; float: right; }
header span { margin: 0px; max-height: 10%; max-width: 60%; position: relative; }
header img { max-height: 100%; max-width: 100%; }
header input { cursor: pointer; -ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)"; height: 100%; left: 0; opacity: 0; position: absolute; top: 0; width: 100%; }

.solo12 { float: right !important; font-size: 75%; font-style: normal; line-height: 1.25; margin: 0 1em 1em 0; }

/* article */

article, article address, table.meta, table.inventory { margin: 0 0 3em; }
article:after { clear: both; content: ""; display: table; }
article h1 { clip: rect(0 0 0 0); position: absolute; }

article address { float: left; font-size: 125%; font-weight: bold; }

/* table meta & balance */

table.meta, table.balance { float: right; width: 36%; }
table.meta:after, table.balance:after { clear: both; content: ""; display: table; }

/* table meta */

table.meta th { width: 40%; }
table.meta td { width: 60%; }

/* table items */

table.inventory { clear: both; width: 100%; }
table.inventory th { font-weight: bold; text-align: center; }

table.inventory td:nth-child(1) { width: 26%; }
table.inventory td:nth-child(2) { text-align: right; width: 10%; }
table.inventory td:nth-child(3) { text-align: right; width: 10%; }
table.inventory td:nth-child(4) { text-align: right; width: 10%; }
table.inventory td:nth-child(5) { text-align: right; width: 10%; }
table.inventory td:nth-child(6) { text-align: right; width: 14%; }
table.inventory td:nth-child(7) { text-align: right; width: 10%; }
table.inventory td:nth-child(8) { text-align: right; width: 10%; }

/* table balance */

table.balance th, table.balance td { width: 50%; }
table.balance td { text-align: right; }

/* aside */

aside h1 { border: none; border-width: 0 0 1px; margin: 0 0 1em; }
aside h1 { border-color: #999; border-bottom-style: solid; }

/* javascript */

.add, .cut
{
	border-width: 1px;
	display: block;
	font-size: .8rem;
	padding: 0.25em 0.5em;
	float: left;
	text-align: center;
	width: 0.6em;
}

.add, .cut
{
	background: #9AF;
	box-shadow: 0 1px 2px rgba(0,0,0,0.2);
	background-image: -moz-linear-gradient(#00ADEE 5%, #0078A5 100%);
	background-image: -webkit-linear-gradient(#00ADEE 5%, #0078A5 100%);
	border-radius: 0.5em;
	border-color: #0076A3;
	color: #FFF;
	cursor: pointer;
	font-weight: bold;
	text-shadow: 0 -1px 2px rgba(0,0,0,0.333);
}

.add { margin: -2.5em 0 0; }

.add:hover { background: #00ADEE; }

.cut { opacity: 0; position: absolute; top: 0; left: -1.5em; }
.cut { -webkit-transition: opacity 100ms ease-in; }

tr:hover .cut { opacity: 1; }

@media print {
	* { -webkit-print-color-adjust: exact; }
	html { background: none; padding: 0; }
	body { box-shadow: none; margin: 0; }
	span:empty { display: none; }
	.add, .cut { display: none; }
}

@page { margin: 0; }

* {
  box-sizing: border-box;
}


.column {
  float: left;
  width: 100%;
  padding: 10px;
  height: 100px;
  margin-top:10px;
}


.row:after {
  content: "";
  display: table;
  clear: both;
  float:right;
}
</style>
<header>
			<h1 style="background: linear-gradient(to right, rgb(0, 201, 255), rgb(146, 254, 157));">{{trans('custom.invoices.title-caps')}}</h1>

			<h5 style="font-weight:600;"><b>{{trans('custom.invoices.invoice-to')}}</b></h5>

			<address contenteditable>
				@if ( ! empty( $invoice->customer->company->name ))
				<p>{{$invoice->customer->company->name}}</p>
				@endif
				<p>{{trans('custom.invoices.attn')}}&nbsp;{{$invoice->customer->first_name . ' ' . $invoice->customer->last_name}}</p>
				<p style="width: 350px;">{{$invoice->customer->address}}</p><br>
				<p style="font-weight:600;">{{trans('custom.common.phone')}} {{$invoice->customer->phone1}}</p>
				@if(! empty( $invoice->customer->email ) )
				<p style="font-weight:600;">{{trans('custom.common.email')}} {{$invoice->customer->email}}</p>
				@endif
			</address>
			<span style="margin-top: -20px; margin-right:100px;">
			<?php
            $logo = getSetting('Invoice-Logo', 'invoice-settings');
            if ( empty( $logo ) ) {
                $logo = getSetting('site_logo', 'site_settings');
            }
            ?>
			<img alt="" src="{{asset( 'uploads/settings/' . $logo )}}" style="height: 40px; width:181px; color: #ff0000; float:right; margin-bottom: 180px; padding-right: 5px; margin-right: -55px;">
			<br><p style="font-size: 13px; float: right; font-weight: 700; margin-top: 40px; margin-right: -20px;">{{getSetting('site_title', 'site_settings', trans('global.global_title'))}}</p>
			<br>
			<p style="font-size: 13px; float: right; font-weight: 700; margin-top: 40px; margin-right: -20px;">{{getSetting('site_address', 'site_settings')}}</p></span>
		</header>
		<article>

			<address>
				<?php
                $class = 'primary';
                $title = trans('custom.invoices.' . $invoice->paymentstatus);
                if ( 'paid' == $invoice->paymentstatus ) {
                    $class = 'success';
                }
                if ( 'partial' == $invoice->paymentstatus ) {
                    $class = 'warning';
                }
                if ( 'due' == $invoice->paymentstatus ) {
                    $class = 'danger';
                }
                ?>
				<span {{$class}}>{{strtoupper($title)}}</span>
			</address>
			<table class="balance" style="margin-right: 90px; margin-top: -70px;">
				<tr>
					<th><span contenteditable>{{trans('custom.invoices.invoice_no')}}</span></th>
					<td><span contenteditable>{{$invoice->invoice_no}}</span></td>
				</tr>
				<tr>
					<th><span contenteditable>{{trans('custom.invoices.invoice-date')}}</span></th>
					<td><span contenteditable>{{digiDate( $invoice->invoice_date ) }}</span></td>
				</tr>
				<tr>
					<th><span contenteditable>{{trans('custom.invoices.due-date')}}</span></th>
					<td><span contenteditable>{{digiDate( $invoice->invoice_due_date ) }}</span></td>
				</tr>
				<tr>
					<th><span contenteditable>{{trans('custom.invoices.invoice-total')}}</span></th>
					<td><span id="prefix" contenteditable>{{digiCurrency($invoice->amount, $invoice->currency)}}</span></td>
				</tr>
				<?php
                $total_paid = \Modules\InvoicePayments\Entities\InvoicePayment::where('invoice_id', '=', $invoice->id)->where('payment_status', '=', 'Success')->sum('amount');
                $amount_due = $invoice->amount - $total_paid;
                ?>
				<tr>
					<th><span contenteditable>{{trans('custom.invoices.total-paid')}}</span></th>
					<td><span id="prefix" contenteditable>{{digiCurrency( $total_paid, $invoice->currency )}}</span></td>
				</tr>
				<tr>
					<th><span contenteditable>{{trans('custom.invoices.amount-due')}}</span></th>
					<td><span id="prefix" contenteditable>{{digiCurrency( $amount_due, $invoice->currency )}}</span></td>
				</tr>
			</table>
			<table class="inventory" style="margin-right: 90px; margin-top: -20px;">
				<thead>
					<tr>
						<th><span contenteditable>{{ trans('custom.products.item_name') }}</span></th>
						<th><span contenteditable>{{ trans('custom.products.quantity') }}</span></th>
						<th><span contenteditable>
							@if( ! empty( $invoice->show_quantity_as ) )
                            {{$invoice->show_quantity_as}}
                        @else
                            {{ trans('custom.products.quantity') }}
                        @endif
						</span></th>
						<th><span contenteditable>{{ trans('custom.products.tax_percent') }}</span></th>
						<th><span contenteditable>{{ trans('custom.products.tax') }}</span></th>
						<th><span contenteditable>{{ trans('custom.products.discount_percent') }}</span></th>
						<th><span contenteditable>{{ trans('custom.products.discount') }}</span></th>
						<th><span contenteditable>{{ trans('custom.products.amount') }}</span></th>
					</tr>
				</thead>
				<tbody>
					<?php
                $products = ! empty( $invoice->products ) ? json_decode( $invoice->products ) : array();
                // dd( $products );

                if ( ! empty( $products ) ) {
                    $product_names = $products->product_name;
                    $total_tax = $products->total_tax;
                    $total_discount = $products->total_discount;
                    $products_amount = $products->products_amount;
                    $sub_total = $products->sub_total;
                    $grand_total = $products->grand_total;

                    $product_qtys = $products->product_qty;
                    $product_prices = $products->product_price;

                    $product_taxs = $products->product_tax;
                    $tax_types = $products->tax_type;
                    $tax_values = $products->tax_value;

                    $product_discounts = $products->product_discount;
                    $discount_types = $products->discount_type;
                    $discount_values = $products->discount_value;

                    $product_subtotals = $products->product_subtotal;
                    $pids = $products->pid;
                    $units = $products->unit;
                    $hsns = $products->hsn;
                    $alerts = $products->alert;
                    $stock_quantitys = $products->stock_quantity;
                    $product_ids = $products->product_ids;
                    $product_descriptions = $products->product_description;
                    for( $i = 0; $i < count( $product_names ); $i++ ) {

                        $product_name = ! empty( $product_names[ $i ] ) ? $product_names[ $i ] : '';
                        if ( is_numeric( $product_name ) ) {
                            $product = \App\Product::where('id', '=', $product_name )->first();
                            if ( $product ) {
                                $product_name = $product->name;
                            }
                        }
                        $product_qty = ! empty( $product_qtys[ $i ] ) ? $product_qtys[ $i ] : '1';
                        $product_price = ! empty( $product_prices[ $i ] ) ? $product_prices[ $i ] : '0';
                        $product_amount = $product_qty * $product_price;

                        $product_tax = ! empty( $product_taxs[ $i ] ) ? $product_taxs[ $i ] : '0'; // Rate.
                        $product_tax_display = digiCurrency( $product_tax, $invoice->currency );

                        $tax_type = ! empty( $tax_types[ $i ] ) ? $tax_types[ $i ] : 'percent';
                        // $tax_value = ! empty( $tax_values[ $i ] ) ? $tax_values[ $i ] : '0';
                        if ( 'percent' === $tax_type ) {
                            $tax_value = ( $product_amount * $product_tax) / 100;
                            $product_tax_display = $product_tax . ' %';
                        } else {
                            $tax_value = $product_tax;
                        }


                        $product_discount = ! empty( $product_discounts[ $i ] ) ? $product_discounts[ $i ] : '0';
                        $product_discount_display = digiCurrency( $product_discount, $invoice->currency );
                        $discount_type = ! empty( $discount_types[ $i ] ) ? $discount_types[ $i ] : 'percent';
                        // $discount_value = ! empty( $discount_values[ $i ] ) ? $discount_values[ $i ] : '0';
                        if ( 'percent' === $discount_type ) {
                            $discount_value = ( $product_amount * $product_discount) / 100;
                            $product_discount_display = $product_discount . ' %';
                        } else {
                            $discount_value = $product_discount;
                        }



                        $amount = $product_amount + $tax_value - $discount_value;

                        // echo 'product_amount:' . $product_amount . '@@' . 'tax_value:' . $tax_value . '@@discount_value:' . $discount_value . '@@tax_type:' . $tax_type;

                        $product_subtotal = ! empty( $product_subtotals[ $i ] ) ? $product_subtotals[ $i ] : '0';
                        $pid = ! empty( $pids[ $i ] ) ? $pids[ $i ] : '';
                        $unit = ! empty( $units[ $i ] ) ? $units[ $i ] : '';
                        $hsn = ! empty( $hsns[ $i ] ) ? $hsns[ $i ] : '';
                        $alert = ! empty( $alerts[ $i ] ) ? $alerts[ $i ] : '';
                        $stock_quantity = ! empty( $stock_quantitys[ $i ] ) ? $stock_quantitys[ $i ] : '';
                        $product_id = ! empty( $product_ids[ $i ] ) ? $product_ids[ $i ] : '';
                        $product_description = ! empty( $product_descriptions[ $i ] ) ? $product_descriptions[ $i ] : '';
                    ?>
					<tr>
						<td><span contenteditable>{{$product_name}}</span></td>
						<td><span contenteditable>{{$product_qty}}</span></td>
						<td><span data-prefix>{{digiCurrency( $product_amount, $invoice->currency )}}</span></td>
						<td><span data-prefix>{{$product_tax_display}}</span></td>
						<td><span data-prefix>{{digiCurrency($tax_value, $invoice->currency)}}</span></td>
						<td><span data-prefix>{{$product_discount_display}}</span></td>
						<td><span data-prefix>{{digiCurrency($discount_value, $invoice->currency)}}</span></td>
						<td><span data-prefix>{{digiCurrency($amount, $invoice->currency)}}</span></td>
					</tr>
					<?php
                    }
                }
                ?>
				</tbody>
			</table>
			<table class="balance" style="margin-right: 90px; margin-top: -5px;">
				<tr>
					<th><span contenteditable>@lang('custom.products.total_tax')</span></th>
					<td><span data-prefix>{{digiCurrency($total_tax, $invoice->currency)}}</span></td>
				</tr>
				<tr>
					<th><span contenteditable>@lang('custom.products.sub_total')</span></th>
					<td><span data-prefix>{{digiCurrency($sub_total, $invoice->currency)}}</span></td>
				</tr>
				<tr>
					<th><span contenteditable>@lang('custom.products.total_discount')</span></th>
					<td><span data-prefix>{{digiCurrency($total_discount, $invoice->currency)}}</span></td>
				</tr>
				<tr>
					<th><span contenteditable>@lang('custom.products.grand_total')</span></th>
					<td><span data-prefix>{{digiCurrency($grand_total, $invoice->currency)}}</span></td>
				</tr>
				<?php
                $additionals = false;
                if ( ! empty( $products->cart_tax ) && $products->cart_tax > 0 ) {
                    $additionals = true;
                ?>
				<tr>
					<th><span contenteditable>@lang('custom.products.additional-tax')</span></th>
					<td><span data-prefix>{{digiCurrency($products->cart_tax, $invoice->currency)}}</span></td>
				</tr>
				<?php } ?>

				<?php
                if ( ! empty( $products->cart_discount ) && $products->cart_discount > 0 ) {
                        $additionals = true;
                ?>
				<tr>
					<th><span contenteditable>@lang('custom.products.additional-discount')</span></th>
					<td><span data-prefix>{{digiCurrency($products->cart_discount, $invoice->currency)}}</span></td>
				</tr>
				<?php } ?>

				<?php
                if ( true === $additionals ) {
                ?>
				<tr>
					<th><span contenteditable>@lang('custom.products.amount-payable')</span></th>
					<td><span data-prefix>{{digiCurrency($products->amount_payable, $invoice->currency)}}</span></td>
				</tr>
			<?php } ?>
				<tr>
					<th><span contenteditable>{{trans('custom.invoices.total-paid')}}</span></th>
					<td>
<?php
                    //$total_paid = \Modules\InvoicePayments\Entities\InvoicePayment::where('invoice_id', '=', $invoice->id)->sum('amount');
                    $amount_due = $invoice->amount - $total_paid;
                    ?>
						<span data-prefix>{{digiCurrency( $total_paid, $invoice->currency )}}</span></td>
				</tr>
				<tr>
					<th><span contenteditable>{{trans('custom.invoices.amount-due')}}</span></th>
					<td><span data-prefix>{{digiCurrency( $amount_due, $invoice->currency )}}</span></td>
				</tr>
			</table>
		</article>
		<div class="row">
 <div class="column" >
    <header>
			<address solox style="width:300px">
				<p>@lang('custom.invoices.invoice-status')<b>{{ strtoupper( trans('custom.invoices.ontime') ) }}</b></p>
				<?php
	            $payment = \Modules\InvoicePayments\Entities\InvoicePayment::where('invoice_id', '=', $invoice->id)->orderBy('id', 'desc')->first();
	            $paymentmethod = trans('custom.invoices.no-payment');
	            if ( $payment ) {
	                $paymentmethod = trans('custom.invoices.' . $payment->paymentmethod);
	            }
	            ?>
				<p>@lang('custom.invoices.payment-method') {{$paymentmethod}}</p>
				@if(! empty( $invoice->invoice_notes ) )
	                <p>@lang('custom.invoices.note')</p>
	                <p style="color: #ff0000; border: 1px solid lightgray; padding: 8px;">{!!$invoice->invoice_notes!!}</p>
	            @endif

			</address>
		</header>
  </div>
  <div class="column" style="float:right; margin-right: 90px;">
    <header>
			<address>
				<p style="float:right;">@lang('custom.invoices.authorized-person')</p><br>
				<?php
	            $authorized_person = getSetting('Authorized-Person', 'invoice-settings');
	            $authorized_sign = getSetting('Authorized-Person-Signature', 'invoice-settings');
	            $authorized_designation = getSetting('Authorized-Person-Designation', 'invoice-settings');
	            ?>
				@if( ! empty( $authorized_sign ) )
				<span style="margin-right: 300px; float:right; padding-top: 5px;"><img alt="" src="{{asset( 'uploads/settings/' . $authorized_sign )}}" style="height: 40px; width: 100px;"></span>
				@endif
				@if( ! empty( $authorized_person ) )
				<span style="float:right; padding-top: 40px;">({{$authorized_person}})</span>
				@endif
				@if( ! empty( $authorized_designation ) )
				<br><span style="float:right; padding-top: 40px;">{{$authorized_designation}}</span>
				@endif
			</address>
		</header>
</div>
		<aside style="margin-right: 90px; padding-top: 180px;">
			<h1 ><span contenteditable></span></h1>

		</aside>


	</div>

</div>
</div>
