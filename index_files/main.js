$(document).ready(function() {

    $('#nik').keyboard({
        layout: 'qwerty',
        usePreview: false,
        maxLength: 6,
        autoAccept: true,
        autoAcceptOnEsc: true
    });

	$('#nik').mask('000000');

    $('#username').keyboard({
        layout: 'qwerty',
        usePreview: false,
        autoAccept: true,
        autoAcceptOnEsc: true
    })
});
