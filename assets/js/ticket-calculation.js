jQuery(document).ready(function() {
    jQuery("table td a.btnn").on("click", function() {
        var text = $(this).closest('tr').find("td").eq(1).html();
        jQuery("#ticket-total .widget-body .ticket-list").append(
            "<tr>" +
            "<td style='border-bottom:1px solid white;'>" +
            text + "  " +
            "</td>" +
            "<td style='border-bottom:1px solid white;'>" +
            "<span class='ticket-price'>" + jQuery(this).text() + "</span>" +
            "</td>" +
            "</tr>"
        );

        var sum = 1;
        $(".ticket-list .ticket-price").each(function(index) {
            sum *= Number($(this).text());
        });
        jQuery(".ticket-total-price").text(sum.toFixed(2));
		jQuery(".form-ticket-total").val(sum.toFixed(2));
    });
	 jQuery(".form-ticket-user-price").on("change", function() {
		console.log($(this).val());
		var user_price = $(this).val();
		console.log(typeof user_price);
		var total_ticket = $(".form-ticket-total").val();
		console.log(typeof total_ticket);
		var total = user_price * total_ticket;
		
		jQuery(".form-sum-total").val(total);
	 });
});