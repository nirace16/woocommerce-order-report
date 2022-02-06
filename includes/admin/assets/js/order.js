jQuery(document).ready(function () {
	let TotalValue = 0;
	let TotalValueMonth = 0;
	let TotalValueWeek = 0;

	jQuery("tr #order-total-1year").each(function (index, value) {
		currentRow = parseFloat(jQuery(this).text());
		TotalValue += currentRow;
	});
	document.getElementById("total-order-1year").innerHTML = TotalValue;

	jQuery("tr #order-total-1month").each(function (index, value) {
		currentRowMonth = parseFloat(jQuery(this).text());
		TotalValueMonth += currentRowMonth;
	});
	document.getElementById("total-order-1month").innerHTML = TotalValueMonth;

	jQuery("tr #order-total-1week").each(function (index, value) {
		currentRowWeek = parseFloat(jQuery(this).text());
		TotalValueWeek += currentRowWeek;
	});

	document.getElementById("total-order-1week").innerHTML = TotalValueWeek;
});
