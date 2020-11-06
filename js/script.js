//Categorizar os produtos
function exibirCategoria(categoria) {
    // alert(categoria)

    let elementos = document.getElementsByClassName('boxProduto')
    console.log(elementos)
    for(i = 0; i < elementos.length; i++) {
        console.log(elementos[i].id)
        if(categoria == elementos[i].id){
            elementos[i].style = "display:block"
        } else {
            elementos[i].style = "display:none"
        }
    }
}
let exibirTodos = () => {
    let elementos = document.getElementsByClassName('boxProduto')
    for(i = 0; i < elementos.length; i++) {
        elementos[i].style = "display:block"
    }
}


//Aumenta e dimunui a imagem dos produtos passando o cursor do mouse

function aumentarImagem(imagem) {
    imagem.style.width = '240px'
    imagem.style.marginBottom = "0px";
}
function diminuirImagem(imagem) {
    imagem.style.width = '200px'
    imagem.style.marginBottom = "40px";
}

//Para trocar o modo de aumentar e diminuir as imagens dos produtos tirar os /*Comentarios*/ de um grupo de código e colocar no outro grupo