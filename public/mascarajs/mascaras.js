$(document).ready(function() {
    $('#ssn, #ssncy, #ssnd1, #ssnd2, #ssnd3, #ssnd4, #ssnd5, #ssnd6, #ssnd7').mask('000-00-0000');
    $('#telefono').mask('(000) 000-0000');
    $('#ingreso').mask('000.000.000.000.000', { reverse: true });
    $('#comision').mask('000.000.000.000.000,00', { reverse: true });
});


function format(input) {
    var num = input.value.replace(/\./g, '');
    if (!isNaN(num)) {
        num = num.toString().split('').reverse().join('').replace(/(?=\d*\.?)(\d{3})/g, '$1.');
        num = num.split('').reverse().join('').replace(/^[\.]/, '');
        input.value = num;
    } else {
        alert('Solo se permiten numeros');
        input.value = input.value.replace(/[^\d\.]*/g, '');
    }
}
