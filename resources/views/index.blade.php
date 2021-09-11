@extends('layouts.master')

@section('content')
<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
                    <lottie-player src="https://assets2.lottiefiles.com/packages/lf20_OZnTKS.json" 
                    mode="bounce" background="transparent"  speed="1"  style="width: 100%; height: 100%;" loop   autoplay></lottie-player>
<div class="px-4 py-5 my-5 text-center">
    <h1 class="display-5 fw-bold">Guarda tus contactos de manera efectiva y sencilla</h1>
    <div class="col-lg-6 mx-auto">
      <p class="lead mb-4">Sin pagos extra, una solo aplicación; todos tus contactos.</p>
      <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
      </div>
    </div>
  </div>

  <div class="container px-4 py-5" id="featured-3">
    <h2 class="pb-2 border-bottom">Beneficios</h2>
    <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
      <div class="feature col">
        <div class="feature-icon bg-dark bg-gradient">
          <svg class="bi" width="1em" height="1em"><use xlink:href="#collection"></use></svg>
        </div>
        <h2>Intefaz minimalista</h2>
        <p>No ads. Todo en un mismo espacio</p>
      </div>
      <div class="feature col">
        <div class="feature-icon bg-dark bg-gradient">
          <svg class="bi" width="1em" height="1em"><use xlink:href="#people-circle"></use></svg>
        </div>
        <h2>Blanco y negro</h2>
        <p>¿A quién no le gusta el blanco y negro? Seamos sinceros</p>
      </div>
      <div class="feature col">
        <div class="feature-icon bg-dark bg-gradient">
          <svg class="bi" width="1em" height="1em"><use xlink:href="#toggles2"></use></svg>
        </div>
        <h2>¿Necesitas más?</h2>
        <p>Ya únete¡ Guarda tu primer contacto en este momento. Anda arriba hay un botón y experimentalo. Ya cuando te enamores hablamos de precios.</p>
      </div>
    </div>
  </div>
@endsection