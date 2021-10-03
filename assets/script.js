$(function() {
    var Product = $('#Product');
    var Color = $('#Color');

    // on change province
    Product.on('change', function() {
        var P_ID = $(this).val();

        Color.html('<option value="">เลือกสี</option>');

        $.get('Product_models.php?province_id=' + provinceId, function(data) {
            var result = JSON.parse(data);
            $.each(result, function(index, item) {
                amphureObject.append(
                    $('<option></option>').val(item.id).html(item.name_th)
                );
            });
        });
    });
    // on change amphure
    amphureObject.on('change', function() {
        var amphureId = $(this).val();
        districtObject.html('<option value="">เลือกตำบล</option>');
        $.get('get_district.php?amphure_id=' + amphureId, function(data) {
            var result = JSON.parse(data);
            $.each(result, function(index, item) {
                districtObject.append(
                    $('<option></option>').val(item.id).html(item.name_th)
                );
            });
        });
    });
});