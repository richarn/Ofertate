@extends('layouts.admin')

@section('filtro')



        {{Form::open(array('url' => 'open/calzado'))}}

	         <label for="exampleFormControlSelect1" style="color: white;margin-right: 10px">Buscar Categorias</label><select class="form-control" id="cate"  name="categ" style="width: 400px">
	            <option>Categorias</option>


       			@foreach ($categoria as $cat)
       				 <option value={{ $cat->descripcion }}> {{ $cat->descripcion }} </option>
       			@endforeach

	          </select>
	          <button class="btn btn-outline-success my-6 my-sm-0" type="submit">Search</button>

         {{Form::close()}} 
    
@stop


@section('noticia')

      <h1 style="color: orange">Noticias</h1>  

      <header class="my-4">

          <div id="carouselExampleIndicators1" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators1" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators1" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators1" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="d-block w-100" src="{{asset('assets/images/anuncio.jpg')}}">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="{{asset('assets/images/garage.jpg')}}">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="{{asset('assets/images/ofer.jpg')}}">
              </div>              
            
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators1" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators1" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
      </header>
@stop      
                                                    
