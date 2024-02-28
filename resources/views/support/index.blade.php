@include ('layouts.style')
@extends('layouts.app')
@section('content')
<title>Telecable</title>

<div class="container main_content">
    <div class="row flex-lg-row-reverse content__mantenimiento">
      <div class="col-10 col-sm-8 col-lg-6">
        <img src="{{asset('frontend/img/mant_recurso.webp')}}" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
      </div>
      <div class="col-lg-6 content__mantenimiento_text">
        <h6>#ConectandoOportunidades</h6>
        <h1 >El sitio web está en construcción.</h1>
        <p >Estamos trabajando para mejorar nuestros servicios</p>
        <div class="pt-5">
            <a href="https://www.facebook.com/telecableperu" target="blank">
                <button type="button" class="btn_tc tc_primary">Mas información</button>
            </a>
        </div>
      </div>
    </div>
</div>
@endsection