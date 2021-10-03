$(function() {
    var Product = $('#Product');
    var Color = $('#Color');

    // on change province
    Product.on('change', function() {
        var P_ID = $(this).val();

        Color.html('<option value="">เลือกสี</option>');

        $.get('Color_models.php?P_ID=' + P_ID, function(data) {
            var result = JSON.parse(data);
            $.each(result, function(index, item) {
                Color.append(
                    $('<option></option>').val(item.id).html(item.name_th)
                );
            });
        });
    });

});