/* Limite 2 checkbox */
$('.checkEmpanadaChico').click(function(event) {
    if(this.checked && $('input:checked').length > 1) {
        $('.checkEmpanadaChico').not(':checked').attr('onclick', 'return false;').attr('onkeydown', 'return false;');
    }else {
	    $('.checkEmpanadaChico').removeAttr('onclick').removeAttr('onkeydown');
    }
});
