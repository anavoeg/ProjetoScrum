<footer class="container py-5">

  {{-- newsletter --}}
  <hr class="mb-4">
  <div class="container d-flex justify-content-center news-content">
<form method="POST" action="{{route('newsletter')}}">
@csrf
  <h5 class="mb-3 news-head">Não perca nenhuma promoção da nossa loja e ainda receba dicas de modas.</h5>
      <div class="form-row">

          <div class="col">
              <label class="news-label" for="nome">Nome</label><span class="text-muted"> (opcional)</span>
            <input type="text" class="form-control news-form" name="first_name" placeholder="">
          </div>
            <div class="col">
            <label class="news-label"  for="email">Email </label>
          <input type="email" class="form-control news-form" name="email" placeholder="seu email">
        </div>
        <div class="col-sm-2 radio-content">
        <label class="news-label-radio"  for="sexo">Sexo</label>
        <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" id="customRadioInline1" name="sexo" value="2" class="custom-control-input">
            <label class="custom-control-label  news-radio" for="customRadioInline1">Masculino</label>
          </div>
          <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" id="customRadioInline2" name="sexo" value="1" class="custom-control-input">
            <label class="custom-control-label news-radio" for="customRadioInline2">Feminino</label>
          </div>   

        </div>
      </div>
      <input type="submit" value="Enviar" class="btn btn-warning">
    </form>
  </div>

<hr class="mb-4">

  <div class="row">
    <div class="col-12 col-md">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="d-block mb-2"><circle cx="12" cy="12" r="10"></circle><line x1="14.31" y1="8" x2="20.05" y2="17.94"></line><line x1="9.69" y1="8" x2="21.17" y2="8"></line><line x1="7.38" y1="12" x2="13.12" y2="2.06"></line><line x1="9.69" y1="16" x2="3.95" y2="6.06"></line><line x1="14.31" y1="16" x2="2.83" y2="16"></line><line x1="16.62" y1="12" x2="10.88" y2="21.94"></line></svg>
      <small class="d-block mb-3 text-muted">&copy; 2013-2018</small>
    </div>
    <div class="col-6 col-md">
      <h5>Institucional</h5>
      <ul class="list-unstyled text-small">
        <li><a class="text-muted" href="#">sobre <span class="page-cia">A CARNAVALIA</span></a></li>
        <li><a class="text-muted" href="#">nosso time</a></li>
        <li><a class="text-muted" href="#">seja nosso parceiro</a></li>
        <li><a class="text-muted" href="#">impressa</a></li>
        <li><a class="text-muted" href="#">programa de relacionamento</a></li>
        <li><a class="text-muted" href="#">trabalhe conosco</a></li>
      </ul>
    </div>
    <div class="col-6 col-md">
      <h5>Atendimento</h5>
      <ul class="list-unstyled text-small">
        <li><a class="text-muted" href="#">ajuda</a></li>
        <li><a class="text-muted" href="#">fale conosco</a></li>
        <li><a class="text-muted" href="#">nossas lojas</a></li>
        <li><a class="text-muted" href="#">Frete & Entregas</a></li>
      </ul>
    </div>
    <div class="col-6 col-md">
      <h5>Projetos Sociais</h5>
      <ul class="list-unstyled text-small">
        <li><a class="text-muted" href="#">Ações Sociais</a></li>
      </ul>
    </div>
    <div class="col-6 col-md">
      <h5>Troco Likes</h5>
      <ul class="list-unstyled text-small">
        <li><a class="text-muted" href="#">Team</a></li>
        <li><a class="text-muted" href="#">Locations</a></li>
        <li><a class="text-muted" href="#">Privacy</a></li>
        <li><a class="text-muted" href="#">Terms</a></li>
      </ul>
    </div>
  </div>
</footer>
