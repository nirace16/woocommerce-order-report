jQuery(document).ready(function () {
	count_total_order_sum();
	function count_total_order_sum() {
		let TotalValue = 0;
		let TotalValueMonth = 0;
		let TotalValueWeek = 0;
		jQuery("tr #order-total-1year").each(function (index, value) {
			if (jQuery(this).is(":visible")) {
				currentRow = parseFloat(jQuery(this).text());
				TotalValue += currentRow;
			}
		});
		document.getElementById("total-order-1year").innerHTML = TotalValue;
		jQuery("tr #order-total-1month").each(function (index, value) {
			if (jQuery(this).is(":visible")) {
				currentRowMonth = parseFloat(jQuery(this).text());
				TotalValueMonth += currentRowMonth;
			}
		});
		document.getElementById("total-order-1month").innerHTML = TotalValueMonth;
		jQuery("tr #order-total-1week").each(function (index, value) {
			if (jQuery(this).is(":visible")) {
				currentRowWeek = parseFloat(jQuery(this).text());
				TotalValueWeek += currentRowWeek;
			}
		});
		document.getElementById("total-order-1week").innerHTML = TotalValueWeek;
	}

	jQuery("#order-payment-type-1year").change(function () {
		var paymentType = jQuery(this).val().replace(/\s+/g, "");
		jQuery("table > tbody > tr").each(function (index) {
			if (paymentType === "All") {
				jQuery(this).show();
			}
			if (jQuery(this).is(":visible")) {
				var val = jQuery(":nth-child(4)", this).html().replace(/\s+/g, "");
				if (paymentType === "All") {
					jQuery(this).show();
				} else if (val == paymentType) {
					jQuery(this).show();
				} else {
					jQuery(this).hide();
				}
			}
		});
		count_total_order_sum();
	});
	jQuery("#order-payment-type-1month").change(function () {
		var paymentType = jQuery(this).val().replace(/\s+/g, "");
		jQuery("table > tbody > tr").each(function (index) {
			if (paymentType === "All") {
				jQuery(this).show();
			}
			if (jQuery(this).is(":visible")) {
				var val = jQuery(":nth-child(4)", this).html().replace(/\s+/g, "");
				if (paymentType === "All") {
					jQuery(this).show();
				} else if (val == paymentType) {
					jQuery(this).show();
				} else {
					jQuery(this).hide();
				}
			}
		});
		count_total_order_sum();
	});
	jQuery("#order-payment-type-1week").change(function () {
		var paymentType = jQuery(this).val().replace(/\s+/g, "");
		jQuery("table > tbody > tr").each(function (index) {
			if (paymentType === "All") {
				jQuery(this).show();
			}
			if (jQuery(this).is(":visible")) {
				var val = jQuery(":nth-child(4)", this).html().replace(/\s+/g, "");
				if (paymentType === "All") {
					jQuery(this).show();
				} else if (val == paymentType) {
					jQuery(this).show();
				} else {
					jQuery(this).hide();
				}
			}
		});
		count_total_order_sum();
	});

	jQuery("#order-payment-status-1year").change(function () {
		var paymentStatus = jQuery(this).val().replace(/\s+/g, "");
		jQuery("table > tbody > tr").each(function (index) {
			if (paymentStatus === "All") {
				jQuery(this).show();
			}
			if (jQuery(this).is(":visible")) {
				var val = jQuery(":nth-child(5)", this).html().replace(/\s+/g, "");
				if (paymentStatus === "All") {
					jQuery(this).show();
				} else if (val == paymentStatus) {
					jQuery(this).show();
				} else {
					jQuery(this).hide();
				}
			}
		});
		count_total_order_sum();
	});
	jQuery("#order-payment-status-1week").change(function () {
		var paymentStatus = jQuery(this).val().replace(/\s+/g, "");
		jQuery("table > tbody > tr").each(function (index) {
			if (paymentStatus === "All") {
				jQuery(this).show();
			}
			if (jQuery(this).is(":visible")) {
				var val = jQuery(":nth-child(5)", this).html().replace(/\s+/g, "");
				if (paymentStatus === "All") {
					jQuery(this).show();
				} else if (val == paymentStatus) {
					jQuery(this).show();
				} else {
					jQuery(this).hide();
				}
			}
		});
		count_total_order_sum();
	});
	jQuery("#order-payment-status-1month").change(function () {
		var paymentStatus = jQuery(this).val().replace(/\s+/g, "");
		jQuery("table > tbody > tr").each(function (index) {
			if (jQuery(this).is(":visible")) {
				if (paymentStatus === "All") {
					jQuery(this).show();
				}
				var val = jQuery(":nth-child(5)", this).html().replace(/\s+/g, "");
				if (paymentStatus === "All") {
					jQuery(this).show();
				} else if (val == paymentStatus) {
					jQuery(this).show();
				} else {
					jQuery(this).hide();
				}
			}
		});
		count_total_order_sum();
	});
});
