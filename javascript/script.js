// Guilherme da Silva Bonifácio

// js para mudar o modo do site
document.querySelector('.botao-modo').addEventListener('click', (e) => {
    e.target.classList.toggle('selecao-fundo-imagem');
    document.body.classList.toggle('light');

});



//Formatação no Formulário
document.getElementById('nome').addEventListener('input', function (e) {
    let value = e.target.value.toUpperCase(); //Transforma em Maiusculo
    value = value.replace(/[^A-Z]/g, ''); //Remove coisa que não é letra

    if (value.length > 2) {
        value = value.substring(0, 5); //Limita em 5 caracteres
    }
    e.target.value = value

})

document.getElementById('cor').addEventListener('input', function (e) {
    let value = e.target.value.toUpperCase(); //Transforma em Maiusculo
    value = value.replace(/[^A-Z]/g, ''); //Remove coisa que não é letra

    if (value.length > 2) {
        value = value.substring(0, 8); //Limita em 8 caracteres
    }
    e.target.value = value

})

document.getElementById('pesquisar').addEventListener('input', function (e) {
    let value = e.target.value.toUpperCase(); //Transforma em Maiusculo
    value = value.replace(/[^A-Z]/g, ''); //Remove coisa que não é letra

    if (value.length > 2) {
        value = value.substring(0, 3); //Limita em 3 caracteres
    }
    e.target.value = value

})