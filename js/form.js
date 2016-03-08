/* Limite 2 checkbox */
$('.checkEmpanadaChico').click(function(event) {
    if(this.checked && $('input:checked').length > 1) {
        $('.checkEmpanadaChico').not(':checked').attr('onclick', 'return false;').attr('onkeydown', 'return false;');
    }else {
	    $('.checkEmpanadaChico').removeAttr('onclick').removeAttr('onkeydown');
    }
});

function calculChico() {
	var boeuf = parseInt($('select[name="boeufChico"] option:selected').val());
	var thon = parseInt($('select[name="thonChico"] option:selected').val());
	var veau = parseInt($('select[name="veauChico"] option:selected').val());
	var jambon = parseInt($('select[name="jambonChico"] option:selected').val());
	var legumes = parseInt($('select[name="legumesChico"] option:selected').val());
	var spinash = parseInt($('select[name="spinashChico"] option:selected').val());
	var choriempa = parseInt($('select[name="choriempaChico"] option:selected').val());
	var moment = parseInt($('select[name="momentChico"] option:selected').val());
	var totalChico = boeuf + thon + veau + jambon + legumes + spinash + choriempa + moment;
	
	if(totalChico != 2) {
		alert("Vous devez sélectionner au total 2 empanadas !");
	}else {
		$('#formChico').submit();
		alert("Votre menu est bien enregistré !");
		$('.titleChico, .descriptionChico, #openPopupChico, .prixChico').hide();
		$('#popupChico .mfp-close').click();
	}
}