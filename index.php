<?php include 'inc/meta.php' ?>

<body>
  <?php 
		include 'inc/header.php'
	?>

  <main>
    <!-- CAROUSEL -->
    <div
      id="carouselExampleDark"
      class="carousel carousel-dark slide mob-top"
      data-bs-ride="carousel"
    >
      <div class="carousel-indicators filter">
        <button
          type="button"
          data-bs-target="#carouselExampleDark"
          data-bs-slide-to="0"
          class="active"
          aria-current="true"
          aria-label="Slide 1"
        ></button>
        <button
          type="button"
          data-bs-target="#carouselExampleDark"
          data-bs-slide-to="1"
          aria-label="Slide 2"
        ></button>
        <button
          type="button"
          data-bs-target="#carouselExampleDark"
          data-bs-slide-to="2"
          aria-label="Slide 3"
        ></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img
            class="d-block w-100"
            src="assets/banner/banner.png"
            alt="Banner 1"
            title="Banner 1"
          />
        </div>
        <div class="carousel-item">
          <img
            class="d-block w-100"
            src="assets/banner/banner2.png"
            alt="Banner 2"
            title="Banner 2"
          />
        </div>
        <div class="carousel-item">
          <img
            class="d-block w-100"
            src="assets/banner/banner3.png"
            alt="Banner 3"
            title="Banner 3"
          />
        </div>
      </div>
      <button
        class="carousel-control-prev"
        type="button"
        data-bs-target="#carouselExampleDark"
        data-bs-slide="prev"
      >
        <span
          class="carousel-control-prev-icon filter"
          aria-hidden="true"
        ></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button
        class="carousel-control-next"
        type="button"
        data-bs-target="#carouselExampleDark"
        data-bs-slide="next"
      >
        <span
          class="carousel-control-next-icon filter"
          aria-hidden="true"
        ></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

    <!-- SERVICOS -->
    <div id="servicos" class="block">
      <div class="container">
        <h2 class="title text-center mt-5">Nossos serviços</h2>
        <h4 class="subtitle text-center mb-4">
          FLORESTi tem um objetivo muito claro: levar transformação para a casa
          de cada sonhador..
        </h4>
        <div class="row">
          <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
            <a href="" class="destaque">
              <div class="img-container mb-3">
                <img
                  src="assets/servicos/casas.jpg"
                  alt="Service picture"
                  class="img-fluid"
                />
              </div>
              <h5>wood</h5>
              <p class="mb-0">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quis,
                numquam?
              </p>
            </a>
          </div>
          <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
            <a href="" class="destaque">
              <div class="img-container mb-3">
                <img
                  src="assets/servicos/pergolado.jpg"
                  alt="Service picture"
                  class="img-fluid"
                />
              </div>
              <h5>Pergolados</h5>
              <p class="mb-0">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quis,
                numquam?
              </p>
            </a>
          </div>
          <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
            <a href="" class="destaque">
              <div class="img-container mb-3">
                <img
                  src="assets/servicos/diversos.jpg"
                  alt="Service picture"
                  class="img-fluid"
                />
              </div>
              <h5>Produtos diversos</h5>
              <p class="mb-0">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quis,
                numquam?
              </p>
            </a>
          </div>
          <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
            <a href="" class="destaque">
              <div class="img-container mb-3">
                <img
                  src="assets/servicos/madeira.jpg"
                  alt="Service picture"
                  class="img-fluid"
                />
              </div>
              <h5>Madeira MLC</h5>
              <p class="mb-0">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quis,
                numquam?
              </p>
            </a>
          </div>
        </div>
      </div>
    </div>

    <!-- PRODUTOS -->
    <div id="produtos">
      <div class="container">
        <div class="row mb-10">
          <div class="col-md-12">
            <div class="row title-area">
              <div class="col-md-5">
                <h2>Nossos Produtos</h2>
              </div>
              <div class="col-md-7">
                <p>
                  Oferecemos grande variedade de produtos, tipos e medidas para
                  sua obra. Confira!
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="prod-info h-100">
              <div class="d-flex justify-content-center">
                <img
                  class="img-fluid"
                  src="assets/produtos/produto1.jpg"
                  alt="product picture"
                />
              </div>
              <div class="prod-info-middle">
                <h3>Tábuas e Sarrafos</h3>
                <p>Tábuas e sarrafos de Amescla, cedro, pinus.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="prod-info h-100">
              <div class="d-flex justify-content-center">
                <img
                  class="img-fluid"
                  src="assets/produtos/produto2.jpg"
                  alt="product picture"
                />
              </div>
              <div class="prod-info-middle">
                <h3>Chapas e Madeirits</h3>
                <p>OSB, compensados, plastificados e resinados.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="prod-info h-100">
              <div class="d-flex justify-content-center">
                <img
                  class="img-fluid"
                  src="assets/produtos/produtoc.jpg"
                  alt="product picture"
                />
              </div>
              <div class="prod-info-middle">
                <h3>Vigamentos</h3>
                <p>Caibros, pontalete de pinus, pranchas e vigas.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- CLIENTES -->
    <div id="clientes" class="block">
      <div class="container">
        <div class="row mb-10">
          <div class="col-md-12">
            <div class="row title-area">
              <div class="col-md-5">
                <h2>Nossos Clientes</h2>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6" align-self-center>
            <div class="row">
              <div class="col-md-4 col-6 mb-4">
                <a href="#" class="link-cliente">
                  <img
                    src="assets/clientes/logo1.svg"
                    alt="logo"
                    class="img-fluid"
                  />
                </a>
              </div>
              <div class="col-md-4 col-6 mb-4">
                <a href="#" class="link-cliente">
                  <img
                    src="assets/clientes/logo2.svg"
                    alt="logo"
                    class="img-fluid"
                  />
                </a>
              </div>
              <div class="col-md-4 col-6 mb-4">
                <a href="#" class="link-cliente">
                  <img
                    src="assets/clientes/logo3.svg"
                    alt="logo"
                    class="img-fluid"
                  />
                </a>
              </div>
              <div class="col-md-4 col-6 mb-4">
                <a href="#" class="link-cliente">
                  <img
                    src="assets/clientes/logo4.svg"
                    alt="logo"
                    class="img-fluid"
                  />
                </a>
              </div>
              <div class="col-md-4 col-6 mb-4">
                <a href="#" class="link-cliente">
                  <img
                    src="assets/clientes/logo5.svg"
                    alt="logo"
                    class="img-fluid"
                  />
                </a>
              </div>
              <div class="col-md-4 col-6 mb-4">
                <a href="#" class="link-cliente">
                  <img
                    src="assets/clientes/logo6.svg"
                    alt="logo"
                    class="img-fluid"
                  />
                </a>
              </div>
              <div class="col-md-4 col-6 mb-4">
                <a href="#" class="link-cliente">
                  <img
                    src="assets/clientes/logo7.svg"
                    alt="logo"
                    class="img-fluid"
                  />
                </a>
              </div>
              <div class="col-md-4 col-6 mb-4">
                <a href="#" class="link-cliente">
                  <img
                    src="assets/clientes/logo8.svg"
                    alt="logo"
                    class="img-fluid"
                  />
                </a>
              </div>
              <div class="col-md-4 col-6 mb-4">
                <a href="#" class="link-cliente">
                  <img
                    src="assets/clientes/logo9.svg"
                    alt="logo"
                    class="img-fluid"
                  />
                </a>
              </div>
            </div>
          </div>
          <div class="col-md-6" align-self-center>
            <div class="cliente-text ms-5">
              <div class="imagem">
                <img
                  src="assets/clientes/clientes-img.svg"
                  alt="clientes img"
                />
                <div class="d-inline-block ps-md-0 ps-3">
                  <span>10</span>
                  Anos de Experiência
                </div>
              </div>
              <div class="telefone">
                <img
                  src="assets/clientes/phone.svg"
                  alt="phone img"
                  class="img-fluid"
                />
                <div class="d-inline-block ps-3">
                  <span>(11) 2233 4455</span>
                  Atendimento domingo a sexta, das 7 as 15h
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- MENU SERVICOS RECENTES -->
    <div id="servicos-recentes" class="block">
      <div class="container">
        <h2 class="title text-center">Serviços Recentes</h2>
        <h4 class="subtitle text-center">Confira nossos serviços</h4>

        <div class="button-group">
          <button type="button" class="active" data-filter="*">Todos</button>
          <button type="button" data-filter=".wood">Wood Frame</button>
          <button type="button" data-filter=".mlc">MLC</button>
          <button type="button" data-filter=".pergolado">Pergolado</button>
        </div>

        <div class="row grid">
          <!-- item 1 -->
          <div class="col-lg-4 col-6 mb-4 mb-4 element-item wood">
            <a href="assets/servicos-details/aaa-1.jpg" class="popup-link">
              <img
                src="assets/servicos-details/aaa-1.jpg"
                class="img-fluid mb-2"
                alt="servico image"
              />
            </a>
            <h5 class="text-uppercase mb-1">wood</h5>
            <p class="mb-0">
              <span class="badge bg-light text-dark">wood</span>
            </p>
          </div>
          <!-- item 2 -->
          <div class="col-lg-4 col-6 mb-4 mb-4 element-item wood">
            <a href="assets/servicos-details/aaa-2.jpg" class="popup-link">
              <img
                src="assets/servicos-details/aaa-2.jpg"
                class="img-fluid mb-2"
                alt="servico image"
              />
            </a>
            <h5 class="text-uppercase mb-1">wood</h5>
            <p class="mb-0">
              <span class="badge bg-light text-dark">wood</span>
            </p>
          </div>
          <!-- item 3 -->
          <div class="col-lg-4 col-6 mb-4 mb-4 element-item wood">
            <a href="assets/servicos-details/aaa-3.jpg" class="popup-link">
              <img
                src="assets/servicos-details/aaa-3.jpg"
                class="img-fluid mb-2"
                alt="servico image"
              />
            </a>
            <h5 class="text-uppercase mb-1">wood</h5>
            <p class="mb-0">
              <span class="badge bg-light text-dark">wood</span>
            </p>
          </div>
          <!-- item 4 -->
          <div class="col-lg-4 col-6 mb-4 mb-4 element-item pergolado">
            <a href="assets/servicos-details/bbb-1.jpg" class="popup-link">
              <img
                src="assets/servicos-details/bbb-1.jpg"
                class="img-fluid mb-2"
                alt="servico image"
              />
            </a>
            <h5 class="text-uppercase mb-1">Pergolado</h5>
            <p class="mb-0">
              <span class="badge bg-light text-dark">pergolar</span>
            </p>
          </div>
          <!-- item 5 -->
          <div class="col-lg-4 col-6 mb-4 mb-4 element-item pergolado">
            <a href="assets/servicos-details/bbb-2.jpg" class="popup-link">
              <img
                src="assets/servicos-details/bbb-2.jpg"
                class="img-fluid mb-2"
                alt="servico image"
              />
            </a>
            <h5 class="text-uppercase mb-1">Pergolado</h5>
            <p class="mb-0">
              <span class="badge bg-light text-dark">pergolar</span>
            </p>
          </div>
          <!-- item 6 -->
          <div class="col-lg-4 col-6 mb-4 mb-4 element-item pergolado">
            <a href="assets/servicos-details/bbb-3.jpg" class="popup-link">
              <img
                src="assets/servicos-details/bbb-3.jpg"
                class="img-fluid mb-2"
                alt="servico image"
              />
            </a>
            <h5 class="text-uppercase mb-1">Pergolado</h5>
            <p class="mb-0">
              <span class="badge bg-light text-dark">pergolar</span>
            </p>
          </div>
          <!-- item 7 -->
          <div class="col-lg-4 col-6 mb-4 mb-4 element-item mlc">
            <a href="assets/servicos-details/ccc-1.jpg" class="popup-link">
              <img
                src="assets/servicos-details/ccc-1.jpg"
                class="img-fluid mb-2"
                alt="servico image"
              />
            </a>
            <h5 class="text-uppercase mb-1">MLC</h5>
            <p class="mb-0">
              <span class="badge bg-light text-dark">mlc</span>
            </p>
          </div>
          <!-- item 8 -->
          <div class="col-lg-4 col-6 mb-4 mb-4 element-item mlc">
            <a href="assets/servicos-details/ccc-2.jpg" class="popup-link">
              <img
                src="assets/servicos-details/ccc-2.jpg"
                class="img-fluid mb-2"
                alt="servico image"
              />
            </a>
            <h5 class="text-uppercase mb-1">MLC</h5>
            <p class="mb-0">
              <span class="badge bg-light text-dark">mlc</span>
            </p>
          </div>
          <!-- item 9 -->
          <div class="col-lg-4 col-6 mb-4 mb-4 element-item mlc">
            <a href="assets/servicos-details/ccc-3.jpg" class="popup-link">
              <img
                src="assets/servicos-details/ccc-3.jpg"
                class="img-fluid mb-2"
                alt="servico image"
              />
            </a>
            <h5 class="text-uppercase mb-1">MLC</h5>
            <p class="mb-0">
              <span class="badge bg-light text-dark">mlc</span>
            </p>
          </div>
        </div>
      </div>
    </div>

    <?php include 'inc/parallax.php' ?>

  </main>

  <?php include 'inc/footer.php' ?>


  <?php include 'inc/js.php' ?>
</body>
