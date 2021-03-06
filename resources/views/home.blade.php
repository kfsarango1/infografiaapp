@extends('layouts.app')

@section ('title')
Home
@endsection

@section ('menus')
    <li>
        <a href="">Home</a>
    </li>
    <li>
        <a href="#categorias-home">Categorias</a>
    </li>
    <li>
        <a href="#graficas">Graficas</a>
    </li>
@endsection

@section('content')
<section class="box_inicial panel_completo" id="home_page">
    <div class="box_foto cont_foto">
        <div class="box_opacidad">
            <div class="cnt-text">
                <p>Diseño y Creación de Infografías</p>
            </div>
        </div>
        
    </div>
    <div class="box_flecha">
        <a href="#categorias-home">
            <i class="fas fa-chevron-down"></i> 
        </a>
    </div>
</section>
<section class="container"  id="categorias-home">
    <div class="cnt_title">
        <h2 class="h2-left">Categorias</h2>
        <p>
            Recibe noticias sobre nuestras infografías en las diferentes categorias.
        </p>
    </div>
    
    <div class="row container-card">
        @foreach($categorias as $cat)
            <div class="col-md-4">
                <div class="card">
                    
                    <div class="presentation-side">
                        <div class="title-cont">
                        <span>{{$cat->nombrecategoria}}</span>
                            <i class="fas fa-plus btn-show" id="{{$cat->idcategoria}}"></i>
                        </div>
                    </div>
                <div class="body" id="body{{$cat->idcategoria}}">
                        <i class="fas fa-window-close btn-close"></i>
                        <h3 class="centrar">{{$cat->nombrecategoria}}</h3>
                        <p>
                            <i class="far fa-file-image"></i>
                            Infografías creadas: 
                            <span class="nro-infografias">
                                0
                            </span>
                        </p>
                        <p>
                            <i class="fab fa-angellist"></i>
                            Usuarios suscritos: 
                            <span class="nro-sucritos">
                                0
                            </span>
                        </p>
                        <hr>

                        <form class="form-suscribe">
                            <div class="form-group">
                                <input type="text" class="form-control idCategoria" value="{{$cat->idcategoria}}" required hidden>
                            </div>
    
                            <div class="form-group">
                                <label for="correo">Suscribete</label>
                                <input id="correo" type="email" class="form-control{{ $errors->has('correo') ? ' is-invalid' : '' }} mailToSuscribe" name="correo" value="{{ old('correo') }}" required>

                                @if ($errors->has('correo'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('correo') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <!--div class="form-group">
                                <label for="mail"><i class="fas fa-forward"></i> Sucribirme</label>
                                <input type="mail" name="mail" class="form-control mailToSuscribe" placeholder="Ingresa tu correo electrónico" required>
                            </div-->
                            <div class="cnt_btns">
                                <button type="submit" class="btn btn-sm btn-success btn2">Listo</button>
                            </div>
                        </form>
                        <div class="cnt-resultado">
                            
                        </div>
                    </div>
                </div>
            </div>
        @endforeach

    </div>
    <div class="cnt_btn">
        <a href="/allcategories" class="boton-md">Ver todas las categorias</a>
    </div>
    
</section>

<section class="container" id="graficas">
        <div class="cnt_title">
            <h2 class="h2-right">Gráficas</h2>
        </div>
</section>
<script src="../../js/home.js"></script>
@endsection
