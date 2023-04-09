## Index.php
## head
- @include inc/meta.php: Head com os metadados e links do arquivo principal main.css

## body

- @include inc/header.php: Header com o navbar bootstrap customizado via css (:hover) e js/jquery para fixar o header;
```javascript
// verifica se a tela esta em rolagem
$(window).on("scroll", () => { 
//variavel scrollY recebe a posicao atual da barra de rolagem
  let scrollY = $(window).scrollTop(); 
//se o valor da posicao em scrollY for maior que 320px
  if (scrollY > 320) {
//entao adiciona a classe .active no header
    $("#header").addClass("active");
  } else {
//caso contrario remova a classe .active    
    $("#header").removeClass("active");
  }
});
```

- CAROUSEL: bootstrap example dark com banner feito no canvas, porém, aqui cada banner deveria ter 3 tamanhos diferentes p dispositivos: Mobile, Tablet e Desktop 	como por exemplo:
```html
<div class="carousel-item active">
    <img class="img-fluid d-md-none" src="./assets/Mobile/banner1-mobile.png" alt="">
    <img class="img-fluid d-none d-md-block d-xl-none" src="./assets/Tablet/banner1-tablet.png" alt="">
    <img class="img-fluid d-none d-xl-block" src="./assets/Desktop/banner1-desktop.png" alt="">
```
- SERVICOS: uma row com 4 colunas a partir de (>=992px), 2 colunas a partir de (>=768px) e margem bottom de 0 em telas acima de 992px.

- NOSSOS PRODUTOS: uma row justificada no centro do eixo x com 3 colunas acima de >992px, 2 colunas acima de >768px.

- CLIENTES: 1 row com 2 colunas (.logo e .client-text)
		1º coluna logo: uma linha com 3 colunas acima de >768px(md) e no menor dispositivo possivel 2 colunas;
		2º coluna client-text: um container com 2 divs, cada uma contendo uma img e uma div para o texto;
			

- SERVICOS RECENTES: 1 row com 3 colunas acima de >992px e 2 colunas para os demais dispositivos
	
## Filtro com a lib isotope

- variavel btn recebe todos os botoes de .button-group:
```javascript
let btn = $("#servicos-recentes .button-group button");
```
- cada "click" no botao, dispara um evento que remove a classe ".active" do que estiver selecionado:
```javascript
btn.on("click", (e) => {
  $("#servicos-recentes .button-group button").removeClass("active");
```
- adiciona classe ".active" no botao alvo (e.target):
```javascript
e.target.classList.add("active");
```

- variavel "selector" recebe o target de click pegando o atributo data-filter:
```javascript
let selector = $(e.target).attr("data-filter");
```
- dentro de #servicos-recentes onde estiver a classe .grid chame o metodo isotope() fazendo um filtro utilizando o selector:
```javascript
$("#servicos-recentes .grid").isotope({
    filter: selector,
  });
```
- aplicando metodo isotope em todos os elementos ao carregar a pagina:
```javascript
$(window).on("load", () => {
  $("#servicos-recentes .grid").isotope({
    filter: "*",
  });
});
```

## Efeito pop-up lib magnific:
- Isso criará uma única galeria de todos os elementos que têm a classe "popup-link"
```javascript
$(".grid .popup-link").magnificPopup({
  type: "image",
  gallery: {
    enabled: true,  // set to false to disable gallery
    tPrev: "Anterior", // title for left button
    tNext: "Proxima", // title for right button
    tCounter: "%curr% de %total%",
  },
});
```

- @include inc/parallax.php: efeito simples de parallax com html e css

- @include 'inc/footer.php': 
 1 coluna para o titulo(col-md-12);
 3 colunas para os icones e informações de contato (col-md-4);
 2 colunas: 1 para paragrafo (col-md-6) e outro para o form (col-md-6);
 1 coluna para o copy area(col-md-12)

- @include 'inc/js.php': arquivo php contendo scripts de arquivos javascript e importações de bibliotecas utilizadas no projeto.


## pasta css:
- main.css = arquivo principal contendo as importaçaoes dos arquivos css;
- custom.css = estilização dos elementos do projeto;
- global.css = estilização global do projeto;
- responsive.css = para as media queries;
- config.css = para as variaveis de cor;

## pasta js:
main.js = logica aplicada nos elementos do projeto: fixed header, isotope filter e pop-up magnific.
os demais são arquivos minificados.

## pasta inc:
arquivos para importação ao index.php para fazer inclusao em outros arquivos quando acessado

## pasta assets: 
arquivos de pastas com imagens utilizadas no projeto