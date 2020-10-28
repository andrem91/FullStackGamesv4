//Categorizar os produtos
function exibirCategoria(categoria) {
    // alert(categoria)

    let elementos = document.getElementsByClassName('boxProduto')
    console.log(elementos)
    for(i = 0; i < elementos.length; i++) {
        console.log(elementos[i].id)
        if(categoria == elementos[i].id){
            elementos[i].style = "display:flex"
        } else {
            elementos[i].style = "display:none"
        }
    }
}
let exibirTodos = () => {
    let elementos = document.getElementsByClassName('boxProduto')
    for(i = 0; i < elementos.length; i++) {
        elementos[i].style = "display:flex"
    }
}

//Aumentar e diminuir a imagem dos produtos com click
/*
let destaque = (imagem) => {
    if (imagem.width == 140){
        imagem.style.width = "180px"
    } else {
        imagem.style.width = "140px"
    }
}
*/
//Aumenta e dimunui a imagem dos produtos passando o cursor do mouse

function aumentarImagem(imagem) {
    imagem.style.width = '180px'
}
function diminuirImagem(imagem) {
    imagem.style.width = '140px'
}

//Para trocar o modo de aumentar e diminuir as imagens dos produtos tirar os /*Comentarios*/ de um grupo de código e colocar no outro grupo