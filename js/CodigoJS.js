$(document).ready(function() {
    $('#estados').change(function(event){
        var estados=event.currentTarget.value;
        console.log(estados);

        $.post('./apoiar.php', {parametro: estados}, function(dados){
            $('#cidade').html(dados);
        });
    });
});
