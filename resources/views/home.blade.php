@extends('layouts.base')

@section('content')
<div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100 img-size" style="height: 50em;" src="{{asset('roupas/namorados/couple.jpg')}}" height="50%" alt="First slide">
        <div class="jumbotron p-3 p-md-5 text-white rounded bg-dark">
            <div class="col-md-6 px-0">
              <h1 class="display-4 font-italic">Title of a longer featured blog post</h1>
              <p class="lead my-3">Multiple lines of text that form the lede, informing new readers quickly and efficiently about what's most interesting in this post's contents.</p>
              <p class="lead mb-0"><a href="#" class="text-white font-weight-bold">Continue reading...</a></p>
            </div>
          </div>
                </div>
      <div class="carousel-item">
        <img class="d-block w-100" style="height: 50em;" src="{{asset('roupas/feminino/blusa-feminina/fem8.jpg')}}" alt="Second slide">
        <div class="jumbotron p-3 p-md-5 text-white rounded bg-dark">
            <div class="col-md-6 px-0">
              <h1 class="display-4 font-italic">Title of a longer featured blog post</h1>
              <p class="lead my-3">Multiple lines of text that form the lede, informing new readers quickly and efficiently about what's most interesting in this post's contents.</p>
              <p class="lead mb-0"><a href="#" class="text-white font-weight-bold">Continue reading...</a></p>
            </div>
          </div>
                </div>
      <div class="carousel-item">
        <img class="d-block w-100" style="height: 50em;" src="{{asset('roupas/masculino/casaco-masculino/casaco8.jpg')}}" alt="Third slide">
        <div class="jumbotron p-3 p-md-5 text-white rounded bg-dark">
            <div class="col-md-6 px-0">
              <h1 class="display-4 font-italic">Title of a longer featured blog post</h1>
              <p class="lead my-3">Multiple lines of text that form the lede, informing new readers quickly and efficiently about what's most interesting in this post's contents.</p>
              <p class="lead mb-0"><a href="#" class="text-white font-weight-bold">Continue reading...</a></p>
            </div>
          </div>
                </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  {{-- banners --}}
  <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
            <div class="jumbotron banner ">
                <div class="container">
                  <h1 class="display-4">Fluid jumbotron</h1>
                  <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
                </div>
              </div>
                  </div>
        <div class="carousel-item">
            <div class="jumbotron banner1 ">
                <div class="container">
                  <h1 class="display-4">Fluid jumbotron</h1>
                  <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
                </div>
              </div>
        </div>
        <div class="carousel-item">
            <div class="jumbotron banner2 ">
                <div class="container">
                  <h1 class="display-4">Fluid jumbotron</h1>
                  <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
                </div>
              </div>
                  </div>
      </div>
    </div>

<div class="card-deck mb-3 text-center">
    <div class="card" style="width: 15rem;">
        <img class="card-img-top" src="{{asset('roupas/feminino/blusa-feminina/blusa.jpg')}}" alt="Card image cap">
        <div class="card-body">
            <h1 class="card-title pricing-card-title">$15 <small class="text-muted">/ mo</small></h1>
        </div>
        <div class="card-body">
          <a href="#" class="card-link">Card link</a>
          <a href="#" class="card-link">Another link</a>
        </div>
      </div>    
      <div class="card" style="width: 15rem;">
          <img class="card-img-top" src=""{{asset('roupas/feminino/blusa-feminina/blusa1.jpg')}}" alt="Card image cap">
          <div class="card-body">
              <h1 class="card-title pricing-card-title">$15 <small class="text-muted">/ mo</small></h1>
          </div>
          <div class="card-body">
              <a href="#" class="card-link">Card link</a>
              <a href="#" class="card-link">Another link</a>
            </div>    
    </div>
    <div class="card" style="width: 18rem;">
        <img class="card-img-top" src=""{{asset('roupas/feminino/blusa-feminina/fem1.jpg')}}" alt="Card image cap">
        <div class="card-body">
            <h1 class="card-title pricing-card-title">$15 <small class="text-muted">/ mo</small></h1>
        </div>
        <div class="card-body">
            <a href="#" class="card-link">Card link</a>
            <a href="#" class="card-link">Another link</a>
          </div>  
  </div>
</div>
<div class="card-deck mb-3 text-center">
    <div class="card" style="width: 15rem;">
        <img class="card-img-top" src="{{asset('roupas/feminino/vestidos/vestido.jpg')}}" alt="Card image cap">
        <div class="card-body">
            <h1 class="card-title pricing-card-title">$15 <small class="text-muted">/ mo</small></h1>
        </div>
        <div class="card-body">
          <a href="#" class="card-link">Card link</a>
          <a href="#" class="card-link">Another link</a>
        </div>
      </div>    
      <div class="card" style="width: 15rem;">
          <img class="card-img-top" src="{{asset('roupas/feminino/vestidos/vestido4.jpg')}}" alt="Card image cap">
          <div class="card-body">
              <h1 class="card-title pricing-card-title">$15 <small class="text-muted">/ mo</small></h1>
          </div>
          <div class="card-body">
              <a href="#" class="card-link">Card link</a>
              <a href="#" class="card-link">Another link</a>
            </div>    
    </div>
    <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="{{asset('roupas/feminino/vestidos/vestido5.jpg')}}" alt="Card image cap">
        <div class="card-body">
            <h1 class="card-title pricing-card-title">$15 <small class="text-muted">/ mo</small></h1>
        </div>
        <div class="card-body">
            <a href="#" class="card-link">Card link</a>
            <a href="#" class="card-link">Another link</a>
          </div>  
  </div>
</div>

<div class="card-deck mb-3 text-center">
    <div class="card" style="width: 15rem;">
        <img class="card-img-top" src="{{asset('roupas/masculino/bermudas-masculino/bermuda2.jpg')}}" alt="Card image cap">
        <div class="card-body">
            <h1 class="card-title pricing-card-title">$15 <small class="text-muted">/ mo</small></h1>
        </div>
        <div class="card-body">
          <a href="#" class="card-link">Card link</a>
          <a href="#" class="card-link">Another link</a>
        </div>
      </div>    
      <div class="card" style="width: 15rem;">
          <img class="card-img-top" src="{{asset('roupas/masculino/bermudas-masculino/bermuda1.jpg')}}" alt="Card image cap">
          <div class="card-body">
              <h1 class="card-title pricing-card-title">$15 <small class="text-muted">/ mo</small></h1>
          </div>
          <div class="card-body">
              <a href="#" class="card-link">Card link</a>
              <a href="#" class="card-link">Another link</a>
            </div>    
    </div>
    <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="{{asset('roupas/masculino/bermudas-masculino/bermuda.jpg')}}" alt="Card image cap">
        <div class="card-body">
            <h1 class="card-title pricing-card-title">$15 <small class="text-muted">/ mo</small></h1>
        </div>
        <div class="card-body">
            <a href="#" class="card-link">Card link</a>
            <a href="#" class="card-link">Another link</a>
          </div>  
  </div>
</div>
<div class="card-deck mb-3 text-center">
    <div class="card" style="width: 15rem;">
        <img class="card-img-top" src="{{asset('roupas/infantil/blusas-camisetas/blusas-camisetas1.jpg')}}" alt="Card image cap">
        <div class="card-body">
            <h1 class="card-title pricing-card-title">$15 <small class="text-muted">/ mo</small></h1>
        </div>
        <div class="card-body">
          <a href="#" class="card-link">Card link</a>
          <a href="#" class="card-link">Another link</a>
        </div>
      </div>    
      <div class="card" style="width: 15rem;">
          <img class="card-img-top" src="{{asset('roupas/infantil/blusas-camisetas/blusas-camisetas3.jpg')}}" alt="Card image cap">
          <div class="card-body">
              <h1 class="card-title pricing-card-title">$15 <small class="text-muted">/ mo</small></h1>
          </div>
          <div class="card-body">
              <a href="#" class="card-link">Card link</a>
              <a href="#" class="card-link">Another link</a>
            </div>    
    </div>
    <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="{{asset('roupas/infantil/blusas-camisetas/blusas-camisetas.jpg')}}" alt="Card image cap">
        <div class="card-body">
            <h1 class="card-title pricing-card-title">$15 <small class="text-muted">/ mo</small></h1>
        </div>
        <div class="card-body">
            <a href="#" class="card-link">Card link</a>
            <a href="#" class="card-link">Another link</a>
          </div>  
  </div>
</div>
<div class="card-deck mb-3 text-center">
    <div class="card" style="width: 15rem;">
        <img class="card-img-top" src="{{asset('roupas/infantil/calçados/sandálias/sandálias.jpg')}}" alt="Card image cap">
        <div class="card-body">
            <h1 class="card-title pricing-card-title">$15 <small class="text-muted">/ mo</small></h1>
        </div>
        <div class="card-body">
          <a href="#" class="card-link">Card link</a>
          <a href="#" class="card-link">Another link</a>
        </div>
      </div>    
      <div class="card" style="width: 15rem;">
          <img class="card-img-top" src="{{asset('roupas/feminino/calçado-feminina/sandálias/sandália.jpg')}}" alt="Card image cap">
          <div class="card-body">
              <h1 class="card-title pricing-card-title">$15 <small class="text-muted">/ mo</small></h1>
          </div>
          <div class="card-body">
              <a href="#" class="card-link">Card link</a>
              <a href="#" class="card-link">Another link</a>
            </div>    
    </div>
    <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="{{asset('roupas/masculino/calçado-masculino/calçado.jpg')}}" alt="Card image cap">
        <div class="card-body">
            <h1 class="card-title pricing-card-title">$15 <small class="text-muted">/ mo</small></h1>
        </div>
        <div class="card-body">
            <a href="#" class="card-link">Card link</a>
            <a href="#" class="card-link">Another link</a>
          </div>  
  </div>
</div>

</div>

@endsection
