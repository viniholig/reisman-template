@extends(engine_view('base-produto'))
@section('conteudo')
@section('title', $produto->identification->name)
@section('metadescription', $produto->identification->name )


<div class="containerProduct">
<style>
    #footer {
        margin-bottom: 74px;
    }
    @media only screen and (max-width: 600px) {
        .zopim {
            bottom: 55px !important;
        }
    }
     .altBanner{
         display: none !important;
        z-index: 1;
    }
    .class-fade {
        display: flex;
        position: relative;
    /*filter: brightness(100%) invert(2%);*/
    }
    
 .div-img-principal-produto .has-background{
    background: #faf7f2;
}

.div-img-principal-produto .has-background img {
    mix-blend-mode: darken;
}

.galleryImg .altBanner {
    position: absolute;
    margin: revert-layer;
    display: block;
    top: auto;
    bottom: 0;
}
.galleryImg a{
    width: 100%;
    display: block;
    height: 100%;
    position: relative;
}

.galleryImg{
    gap: 5px;
}

.galleryImg .img{
    width: 49%;
    margin: 0 !important;
    padding: 0 !important;
}

.galleryImg .img:nth-child(2n){
    padding: 0 !important;
}

   
/*    div#priceProduto p {*/
/*    margin: 0;*/
/*    font-size: 18px*/
/*}  */
/*div#priceProduto{*/
/*    text-align: left !important;*/
/*}*/
/*div#priceProduto .flag{*/
/*  background: #6dcd55;*/
/*  font-size: 11px;*/
/*  padding: 2px 4px;*/
/*  color: #fff;*/
/*  text-transform: uppercase;*/
/*}*/
</style>


<div class="tingle-modal ficouFaltando " id="modalFicouFaltando" tabindex="-1" role="dialog" aria-labelledby="modalFicouFaltando" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Ops!</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Ficaram faltando algumas informações sobre sua nova jóia.<br />Por favor verifique os campos sinalizados em <span style="color: #F44336">vermelho</span>.
      </div>
      <div class="modal-footer">
        <button type="button" data-dismiss="modal" class="btn btn-success">Ok!</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="modalSaibaMais" tabindex="-1" role="dialog" aria-labelledby="modalSaibaMais" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Saiba mais!</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      </div>
      <div class="modal-footer">
        <button type="button" data-dismiss="modal" class="btn btn-success">Ok!</button>
      </div>
    </div>
  </div>
</div>

@if($popuparosmaiores->records->count() > 0)
  @foreach($popuparosmaiores->records as $popuparos)
    @if($popuparos->tamanho != null && $popuparos->texto_pop_up != null)


    <div class=" tingle-modal modalTamanho " id="modalTamanho" tabindex="-1" role="dialog" aria-labelledby="modalTamanho" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Atenção!</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div id="texto-alert" tamanho="{{ $popuparos->tamanho->values->first->value->value }}" class="text-center">
              {{ $popuparos->texto_pop_up->values->first->value->value }}
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" data-dismiss="modal" class="btn btn-success">Ok!</button>
          </div>
        </div>
      </div>
    </div>
    @endif
  @endforeach
@endif

@if($saibamaispreco->records->count() > 0)
	@foreach($saibamaispreco->records as $saibamaispreco)
    <div id="modal-saibamais" class="tingle-modal saibaMaisPreco " tabindex="-1" role="dialog">
      <section class="textSaibaMais"> 
              <button class="tingle-modal__close"><span class="tingle-modal__closeIcon">×</span><span class="tingle-modal__closeLabel"></span></button>

        <h3>{{ $saibamaispreco->titulo_saiba_mais_preco->values->first->value->value }}</h3>
      <span>{{ $saibamaispreco->saiba_mais_preco->values->first->value->value }}</span>
        
      <img src="{{ $saibamaispreco->imagem_saiba_mais->values->first()->source  }}">  
      </section>   
    </div>
  @endforeach
@endif  



@if($produto->categories->first() !== null)
						

  <nav aria-label="Você está aqui:" class="breadcrumb-container">
  <ol class="breadcrumb-new" itemscope="" itemtype="https://schema.org/BreadcrumbList">
    <li itemprop="itemListElement" itemscope="" itemtype="https://schema.org/ListItem" >
      <a href="https://www.reisman.com.br/" itemprop="item">
        <span itemprop="name">Reisman</span>
      </a>
		      <meta itemprop="position" content="1">
      <span aria-hidden="true" style="color: #bbb; margin: 0 8px;">|</span>
    </li>
   

    <li itemprop="itemListElement" itemscope="" itemtype="https://schema.org/ListItem" >
     <a href="https://www.reisman.com.br/{{ 
  (
    $produto->categories
      ->filter(fn($cat) => $cat->depth == 0 && $cat->id != 5)
      ->sortBy('id')
      ->first()
    ?? 
    $produto->categories
      ->filter(fn($cat) => $cat->depth == 1 && $cat->id == 55)
      ->first()
  )?->urls?->first()?->url 
}}
" itemprop="item">
        <span itemprop="name">
          {{ ($produto->categories->filter(fn($cat) => $cat->depth == 0 && $cat->id != 5)->sortBy('id')->first()?? $produto->categories->filter(fn($cat) => $cat->depth == 1 && $cat->id == 55)->first())?->name }}

</span>
      </a>


            <meta itemprop="position" content="2">
      <span aria-hidden="true" style="color: #bbb; margin: 0 8px;">|</span>
    </li>
	 <li itemprop="itemListElement" itemscope="" itemtype="https://schema.org/ListItem" >
        <span itemprop="name"><strong>{{$produto->identification->name}}</strong></span>
      </a>
      <meta itemprop="position" content="3">
    </li>
  </ol>
</nav>
			@endif




					



<div class="row row-produto">
    @desktop
      <div class="col-lg-8 col-sm-12 div-img-principal-produto">
          <div class="slider-produto-principal1">
              <div class="galleryImg">
                  @if($produto->extraFields->has('fotos_novas') && $produto->extraFields->get('fotos_novas')->values->first()->extraFieldOption->label == 'Sim')
                      @if($produto->extraFields->has('imagem_produto_01'))
                       @if($produto->extraFields->has('selecao_imagem_01_background')) 
                            @if($produto->extraFields->get('selecao_imagem_01_background')->values->first()->extraFieldOption->label == 'Sim')
                                <div class="img data-imagem-01 has-background">
                                     @include(@engine_view('component_flag_produto'))
                                                    <a class="my-image-links" data-gall="gallery01" href="{{ $produto->extraFields->get('imagem_produto_01')->values->first()->source }}" > 
                                                      <img src="{{ $produto->extraFields->get('imagem_produto_01')->values->first()->source }}" alt="{{ $produto->extraFields->get('alt_imagem_01')->values->first()->value }}" title="{{ $produto->extraFields->get('title_imagem_produto_01')->values->first()->value }}">
                                                      <span class="altBanner">{{ $produto->extraFields->get('title_imagem_produto_01')->values->first()->value }}</span>
                                                    </a>
                                                </div>
                            @endif
                        @else
                             <div class="img data-imagem-01">
                                                    <a class="my-image-links" data-gall="gallery01" href="{{ $produto->extraFields->get('imagem_produto_01')->values->first()->source }}" > 
                                                      <img src="{{ $produto->extraFields->get('imagem_produto_01')->values->first()->source }}" alt="{{ $produto->extraFields->get('alt_imagem_01')->values->first()->value }}" title="{{ $produto->extraFields->get('title_imagem_produto_01')->values->first()->value }}">
                                                      <span class="altBanner">{{ $produto->extraFields->get('title_imagem_produto_01')->values->first()->value }}</span>
                                                    </a>
                                                </div>
                        @endif
                      @endif 

                      @if($produto->extraFields->has('imagem_produto_02'))
                        @if($produto->extraFields->has('selecao_imagem_02_background')) 
                            @if($produto->extraFields->get('selecao_imagem_02_background')->values->first()->extraFieldOption->label == 'Sim')
                                  <div class="img data-imagem-02 has-background">
                                                <a class="my-image-links" data-gall="gallery01" href="{{ $produto->extraFields->get('imagem_produto_02')->values->first()->source }}">
                                                  <img   src="{{ $produto->extraFields->get('imagem_produto_02')->values->first()->source }}"  alt="{{ $produto->extraFields->get('alt_imagem_02')->values->first()->value }}"  title="{{ $produto->extraFields->get('title_imagem_produto_02')->values->first()->value }}">
                                                  <span class="altBanner">{{ $produto->extraFields->get('title_imagem_produto_02')->values->first()->value }}</span>
                                                </a> 
                                                </div>
                            @endif
                        @else
                              <div class="img data-imagem-02">
                                                <a class="my-image-links" data-gall="gallery01" href="{{ $produto->extraFields->get('imagem_produto_02')->values->first()->source }}">
                                                  <img   src="{{ $produto->extraFields->get('imagem_produto_02')->values->first()->source }}"  alt="{{ $produto->extraFields->get('alt_imagem_02')->values->first()->value }}"  title="{{ $produto->extraFields->get('title_imagem_produto_02')->values->first()->value }}">
                                                  <span class="altBanner">{{ $produto->extraFields->get('title_imagem_produto_02')->values->first()->value }}</span>
                                                </a> 
                                                </div>
                        @endif
                      @endif 

                      @if($produto->extraFields->has('imagem_produto_03'))
                        @if($produto->extraFields->has('selecao_imagem_03_background')) 
                            @if($produto->extraFields->get('selecao_imagem_03_background')->values->first()->extraFieldOption->label == 'Sim')
                                     <div class="img data-imagem-03 has-background">
                                                    <a class="my-image-links" data-gall="gallery01" href="{{ $produto->extraFields->get('imagem_produto_03')->values->first()->source }}">
                                                      <img  src="{{ $produto->extraFields->get('imagem_produto_03')->values->first()->source }}" alt="{{ $produto->extraFields->get('alt_imagem_produto_03')->values->first()->value }}" title="{{ $produto->extraFields->get('title_imagem_produto_03')->values->first()->value }}">
                                                      <span class="altBanner">{{ $produto->extraFields->get('title_imagem_produto_03')->values->first()->value }}</span>
                                                    </a>
                                                  </div>
                            @endif
                        @else
                                  <div class="img data-imagem-03">
                                                    <a class="my-image-links" data-gall="gallery01" href="{{ $produto->extraFields->get('imagem_produto_03')->values->first()->source }}">
                                                      <img  src="{{ $produto->extraFields->get('imagem_produto_03')->values->first()->source }}" alt="{{ $produto->extraFields->get('alt_imagem_produto_03')->values->first()->value }}" title="{{ $produto->extraFields->get('title_imagem_produto_03')->values->first()->value }}">
                                                      <span class="altBanner">{{ $produto->extraFields->get('title_imagem_produto_03')->values->first()->value }}</span>
                                                    </a>
                                                  </div>
                        @endif
                      @endif 

                      @if($produto->extraFields->has('imagem_produto_04'))
                    @if($produto->extraFields->has('selecao_imagem_04_background')) 
                        @if($produto->extraFields->get('selecao_imagem_04_background')->values->first()->extraFieldOption->label == 'Sim')
                               <div class="img data-imagem-04 has-background">
                                            <a class="my-image-links" data-gall="gallery01" href="{{ $produto->extraFields->get('imagem_produto_04')->values->first()->source }}">
                                              <img  src="{{ $produto->extraFields->get('imagem_produto_04')->values->first()->source }}" alt="{{ $produto->extraFields->get('alt_imagem_produto_04')->values->first()->value }}" title="{{ $produto->extraFields->get('title_imagem_produto_04')->values->first()->value }}">
                                              <span class="altBanner">{{ $produto->extraFields->get('title_imagem_produto_04')->values->first()->value }}</span>
                                            </a>
                                          </div>
                        @endif
                    @else
                            <div class="img data-imagem-04">
                                            <a class="my-image-links" data-gall="gallery01" href="{{ $produto->extraFields->get('imagem_produto_04')->values->first()->source }}">
                                              <img  src="{{ $produto->extraFields->get('imagem_produto_04')->values->first()->source }}" alt="{{ $produto->extraFields->get('alt_imagem_produto_04')->values->first()->value }}" title="{{ $produto->extraFields->get('title_imagem_produto_04')->values->first()->value }}">
                                              <span class="altBanner">{{ $produto->extraFields->get('title_imagem_produto_04')->values->first()->value }}</span>
                                            </a>
                                          </div>
                    @endif
                      @endif 
                      @if($produto->extraFields->has('imagem_produto_05'))
                            @if($produto->extraFields->has('selecao_imagem_05_background')) 
                            @if($produto->extraFields->get('selecao_imagem_05_background')->values->first()->extraFieldOption->label == 'Sim')
                                  <div class="img data-imagem-05 has-background">
                                                    <a class="my-image-links" data-gall="gallery01" href="{{ $produto->extraFields->get('imagem_produto_05')->values->first()->source }}">
                                                      <img  src="{{ $produto->extraFields->get('imagem_produto_05')->values->first()->source }}" alt="{{ $produto->extraFields->get('alt_imagem_produto_05')->values->first()->value }}" title="{{ $produto->extraFields->get('title_imagem_produto_05')->values->first()->value }}">
                                                      <span class="altBanner">{{ $produto->extraFields->get('title_imagem_produto_05')->values->first()->value }}</span>
                                                    </a>
                                                  </div>
                                @endif
                            @else
                                  <div class="img data-imagem-05">
                                                    <a class="my-image-links" data-gall="gallery01" href="{{ $produto->extraFields->get('imagem_produto_05')->values->first()->source }}">
                                                      <img  src="{{ $produto->extraFields->get('imagem_produto_05')->values->first()->source }}" alt="{{ $produto->extraFields->get('alt_imagem_produto_05')->values->first()->value }}" title="{{ $produto->extraFields->get('title_imagem_produto_05')->values->first()->value }}">
                                                      <span class="altBanner">{{ $produto->extraFields->get('title_imagem_produto_05')->values->first()->value }}</span>
                                                    </a>
                                                  </div>
                            @endif
                      @endif 
                      @if($produto->extraFields->get('campo_video_vimeo'))
                          <div class="img">
                              <div class="videoStyle my-video-links" >
                                  <iframe data-testid="video-iframe" width="640" height="640" src="https://player.vimeo.com/video/{{ $produto->extraFields->get('campo_video_vimeo')->values->first()->value }}?autoplay=1&amp;loop=1&amp;controls=0&amp;autopause=1&amp;muted=1" class="styled__IFrame-sc-ma87h6-1 fHujjV"></iframe>
                              </div>
                          </div>
                      @endif  
                  @else
                      @foreach($produto->images as $image)
                          <div class="img old ">
                          <img class="my-image-links" data-gall="gallery01" href="{{thumb($image->source)}}" src="{{thumb($image->source)}}"
                         >
                          </div>  
                      @endforeach


                      @if($produto->extraFields->has('campo_video_vimeo'))
                          <div class="img">
                              <div class=" my-video-links" href="https://vimeo.com/{{ $produto->extraFields->get('campo_video_vimeo')->values->first()->value }}?h=defbd6516b&muted=1&autoplay=1&controls=0&loop=1">
                                  <iframe data-testid="video-iframe" width="540" height="545" src="https://player.vimeo.com/video/{{ $produto->extraFields->get('campo_video_vimeo')->values->first()->value }}?autoplay=1&amp;loop=1&amp;controls=0&amp;autopause=1&amp;muted=1" class="styled__IFrame-sc-ma87h6-1 fHujjV"></iframe>
                              </div>
                          </div>
                      @endif  
                  @endif
              </div>
          </div>    
      </div>
     
    @elsedesktop

            <div class="col-lg-6 col-sm-12 div-img-principal-produto">
                <div class="slider-produto-principal1">
                        <div class="galleryImg mobile">
                
            @if($produto->extraFields->has('fotos_novas') && $produto->extraFields->get('fotos_novas')->values->first()->extraFieldOption->label == 'Sim')
                       @if($produto->extraFields->has('imagem_produto_01'))
                       @if($produto->extraFields->has('selecao_imagem_01_background')) 
                            @if($produto->extraFields->get('selecao_imagem_01_background')->values->first()->extraFieldOption->label == 'Sim')
                                <div class="img data-imagem-01 has-background">
                                     @include(@engine_view('component_flag_produto'))
                                                    <a class="my-image-links" data-gall="gallery01" href="{{ $produto->extraFields->get('imagem_produto_01')->values->first()->source }}" > 
                                                      <img src="{{ $produto->extraFields->get('imagem_produto_01')->values->first()->source }}" alt="{{ $produto->extraFields->get('alt_imagem_01')->values->first()->value }}" title="{{ $produto->extraFields->get('title_imagem_produto_01')->values->first()->value }}">
                                                      <span class="altBanner">{{ $produto->extraFields->get('title_imagem_produto_01')->values->first()->value }}</span>
                                                    </a>
                                                </div>
                            @endif
                        @else
                             <div class="img data-imagem-01">
                                                    <a class="my-image-links" data-gall="gallery01" href="{{ $produto->extraFields->get('imagem_produto_01')->values->first()->source }}" > 
                                                      <img src="{{ $produto->extraFields->get('imagem_produto_01')->values->first()->source }}" alt="{{ $produto->extraFields->get('alt_imagem_01')->values->first()->value }}" title="{{ $produto->extraFields->get('title_imagem_produto_01')->values->first()->value }}">
                                                      <span class="altBanner">{{ $produto->extraFields->get('title_imagem_produto_01')->values->first()->value }}</span>
                                                    </a>
                                                </div>
                        @endif
                      @endif 

                      @if($produto->extraFields->has('imagem_produto_02'))
                        @if($produto->extraFields->has('selecao_imagem_02_background')) 
                            @if($produto->extraFields->get('selecao_imagem_02_background')->values->first()->extraFieldOption->label == 'Sim')
                                  <div class="img data-imagem-02 has-background">
                                                <a class="my-image-links" data-gall="gallery01" href="{{ $produto->extraFields->get('imagem_produto_02')->values->first()->source }}">
                                                  <img   src="{{ $produto->extraFields->get('imagem_produto_02')->values->first()->source }}"  alt="{{ $produto->extraFields->get('alt_imagem_02')->values->first()->value }}"  title="{{ $produto->extraFields->get('title_imagem_produto_02')->values->first()->value }}">
                                                  <span class="altBanner">{{ $produto->extraFields->get('title_imagem_produto_02')->values->first()->value }}</span>
                                                </a> 
                                                </div>
                            @endif
                        @else
                              <div class="img data-imagem-02">
                                                <a class="my-image-links" data-gall="gallery01" href="{{ $produto->extraFields->get('imagem_produto_02')->values->first()->source }}">
                                                  <img   src="{{ $produto->extraFields->get('imagem_produto_02')->values->first()->source }}"  alt="{{ $produto->extraFields->get('alt_imagem_02')->values->first()->value }}"  title="{{ $produto->extraFields->get('title_imagem_produto_02')->values->first()->value }}">
                                                  <span class="altBanner">{{ $produto->extraFields->get('title_imagem_produto_02')->values->first()->value }}</span>
                                                </a> 
                                                </div>
                        @endif
                      @endif 

                      @if($produto->extraFields->has('imagem_produto_03'))
                        @if($produto->extraFields->has('selecao_imagem_03_background')) 
                            @if($produto->extraFields->get('selecao_imagem_03_background')->values->first()->extraFieldOption->label == 'Sim')
                                     <div class="img data-imagem-03 has-background">
                                                    <a class="my-image-links" data-gall="gallery01" href="{{ $produto->extraFields->get('imagem_produto_03')->values->first()->source }}">
                                                      <img  src="{{ $produto->extraFields->get('imagem_produto_03')->values->first()->source }}" alt="{{ $produto->extraFields->get('alt_imagem_produto_03')->values->first()->value }}" title="{{ $produto->extraFields->get('title_imagem_produto_03')->values->first()->value }}">
                                                      <span class="altBanner">{{ $produto->extraFields->get('title_imagem_produto_03')->values->first()->value }}</span>
                                                    </a>
                                                  </div>
                            @endif
                        @else
                                  <div class="img data-imagem-03">
                                                    <a class="my-image-links" data-gall="gallery01" href="{{ $produto->extraFields->get('imagem_produto_03')->values->first()->source }}">
                                                      <img  src="{{ $produto->extraFields->get('imagem_produto_03')->values->first()->source }}" alt="{{ $produto->extraFields->get('alt_imagem_produto_03')->values->first()->value }}" title="{{ $produto->extraFields->get('title_imagem_produto_03')->values->first()->value }}">
                                                      <span class="altBanner">{{ $produto->extraFields->get('title_imagem_produto_03')->values->first()->value }}</span>
                                                    </a>
                                                  </div>
                        @endif
                      @endif 

                      @if($produto->extraFields->has('imagem_produto_04'))
                    @if($produto->extraFields->has('selecao_imagem_04_background')) 
                        @if($produto->extraFields->get('selecao_imagem_04_background')->values->first()->extraFieldOption->label == 'Sim')
                               <div class="img data-imagem-04 has-background">
                                            <a class="my-image-links" data-gall="gallery01" href="{{ $produto->extraFields->get('imagem_produto_04')->values->first()->source }}">
                                              <img  src="{{ $produto->extraFields->get('imagem_produto_04')->values->first()->source }}" alt="{{ $produto->extraFields->get('alt_imagem_produto_04')->values->first()->value }}" title="{{ $produto->extraFields->get('title_imagem_produto_04')->values->first()->value }}">
                                              <span class="altBanner">{{ $produto->extraFields->get('title_imagem_produto_04')->values->first()->value }}</span>
                                            </a>
                                          </div>
                        @endif
                    @else
                            <div class="img data-imagem-04">
                                            <a class="my-image-links" data-gall="gallery01" href="{{ $produto->extraFields->get('imagem_produto_04')->values->first()->source }}">
                                              <img  src="{{ $produto->extraFields->get('imagem_produto_04')->values->first()->source }}" alt="{{ $produto->extraFields->get('alt_imagem_produto_04')->values->first()->value }}" title="{{ $produto->extraFields->get('title_imagem_produto_04')->values->first()->value }}">
                                              <span class="altBanner">{{ $produto->extraFields->get('title_imagem_produto_04')->values->first()->value }}</span>
                                            </a>
                                          </div>
                    @endif
                      @endif 
                      @if($produto->extraFields->has('imagem_produto_05'))
                            @if($produto->extraFields->has('selecao_imagem_05_background')) 
                            @if($produto->extraFields->get('selecao_imagem_05_background')->values->first()->extraFieldOption->label == 'Sim')
                                  <div class="img data-imagem-05 has-background">
                                                    <a class="my-image-links" data-gall="gallery01" href="{{ $produto->extraFields->get('imagem_produto_05')->values->first()->source }}">
                                                      <img  src="{{ $produto->extraFields->get('imagem_produto_05')->values->first()->source }}" alt="{{ $produto->extraFields->get('alt_imagem_produto_05')->values->first()->value }}" title="{{ $produto->extraFields->get('title_imagem_produto_05')->values->first()->value }}">
                                                      <span class="altBanner">{{ $produto->extraFields->get('title_imagem_produto_05')->values->first()->value }}</span>
                                                    </a>
                                                  </div>
                                @endif
                            @else
                                  <div class="img data-imagem-05">
                                                    <a class="my-image-links" data-gall="gallery01" href="{{ $produto->extraFields->get('imagem_produto_05')->values->first()->source }}">
                                                      <img  src="{{ $produto->extraFields->get('imagem_produto_05')->values->first()->source }}" alt="{{ $produto->extraFields->get('alt_imagem_produto_05')->values->first()->value }}" title="{{ $produto->extraFields->get('title_imagem_produto_05')->values->first()->value }}">
                                                      <span class="altBanner">{{ $produto->extraFields->get('title_imagem_produto_05')->values->first()->value }}</span>
                                                    </a>
                                                  </div>
                            @endif
                      @endif 
                @if($produto->extraFields->get('campo_video_vimeo'))
                    <div class="img">
                        <div class="videoStyle my-video-links">
                            <iframe data-testid="video-iframe" width="640" height="640" src="https://player.vimeo.com/video/{{ $produto->extraFields->get('campo_video_vimeo')->values->first()->value }}?autoplay=1&amp;loop=1&amp;controls=0&amp;autopause=1&amp;muted=1" class="styled__IFrame-sc-ma87h6-1 fHujjV"></iframe>
                        </div>
                    </div>
                @endif  
            @else
         @foreach($produto->images as $image)
                    <div class="img">
                      <img id="zoom_01" data-zoom-image="{{thumb($image->source)}}" src="{{thumb($image->source)}}">
                    </div>  
                @endforeach
                @if($produto->extraFields->has('link_video'))
                    <div class="img">
                        <div class="my-video-links" href="https://vimeo.com/{{ $produto->extraFields->get('link_video')->values->first()->value }}?h=defbd6516b&muted=1&autoplay=1&controls=0&loop=1">
                            <iframe data-testid="video-iframe" width="640" height="640" src="https://player.vimeo.com/video/{{ $produto->extraFields->get('link_video')->values->first()->value }}?autoplay=1&amp;loop=1&amp;controls=0&amp;autopause=1&amp;muted=1" class="styled__IFrame-sc-ma87h6-1 fHujjV"></iframe>
                        </div>
                    </div>
                @endif 
         @endif
                
            </div>
                </div>
            </div>
    @enddesktop
    @itemAvailable($produto->model)
    <div class="col-lg-4 col-sm-12 infoProduto">
    @else
        <div class="col-lg-4 col-sm-12 infoProduto product-of-Stock">    
    @enditemAvailable
        <div id="title-produto">
          {{ $produto->identification->name }}
        </div>
         
      
        <div id="subtitle-produto">
            @if($produto->identification->sku != null)
                <div>
                    Ref: <span id="skuProduct">{{ $produto->identification->sku }}</span>
                </div>
            @endif
        </div>
        <div class="divider"></div>
        @itemAvailable($produto->model)
        <div id="div-personalizar-produto">
@if($produto->extraFields->has('selecionar_cor_do_ouro'))
                 <span class="nameVariationsColor">{{ $produto->extraFields->get('selecionar_cor_do_ouro')->values->first()->extraFieldOption->label }}</span>

@endif
        <!--@if($produto->extraFields->has('agrupamentos_de_produtos'))-->
        <!--    @if($produto->extraFields->has('selecionar_cor_do_ouro'))-->
        <!--        <span class="nameVariationsColor">{{ $produto->extraFields->get('selecionar_cor_do_ouro')->values->first()->extraFieldOption->label }}</span>-->
        <!--    @endif-->
        <!--@endif-->
        <div class="contentProductionGrouping">
            <div class='productionGrouping teste'>
               
                    @if($produto->extraFields->has('selecionar_cor_do_ouro'))
                        <div class="productLook active {{ $produto->extraFields->get('selecionar_cor_do_ouro')->values->first()->extraFieldOption->label }}">
                            
                            <div class="link-produto">
                                    <div class="varations {{ $produto->extraFields->get('selecionar_cor_do_ouro')->values->first()->extraFieldOption->label }}">
                                        <button class="{{ $produto->extraFields->get('selecionar_cor_do_ouro')->values->first()->extraFieldOption->label }}">
                                    
                                        </button>
                                       
                                    </div>

                            </div>
                        </div>
                    @endif
            
            </div>
            @if($produto->extraFields->has('agrupamentos_de_produtos'))
            
                

                @foreach($produto->extraFields->get('agrupamentos_de_produtos')->values as $item)
                    @itemAvailable($item->record)
                     @if(url($item->record->urls->first()->url) !== url()->current())  
                    <div class="productionGrouping">
                        <div class="productLook sku-{{ $item->record->identification->first()->sku }} {{ $item->record->extraFields->get('selecionar_cor_do_ouro')->values->first()->extraFieldOption->label }} @if(url($item->record->urls->first()->url) === url()->current()) active @endif"">
                        <a class="link-produto" @if($item->record->urls->first()->url) href="{{url($item->record->urls->first()->url)}}" @endif >
                        <div class="imgCard">
                            <img src="{{ $item->record->main_image->source }}">
                        </div>
                        <div class="varations {{ $item->record->extraFields->get('selecionar_cor_do_ouro')->values->first()->extraFieldOption->label }}">
                            <button class="{{ $item->record->extraFields->get('selecionar_cor_do_ouro')->values->first()->extraFieldOption->label }}">

                            </button>
                            <small>{{ $item->record->extraFields->get('selecionar_cor_do_ouro')->values->first()->extraFieldOption->label }}</small>
                        </div>
                        <h3>{{ $item->record->identification->first()->name }}</h3>
                  <span class="productGroupingSKU">{{ $item->record->identification->first()->sku }}</span>

                        </a>
                    </div>
                         </div>
                    @endif
                    @enditemAvailable
                @endforeach
       
            @endif
             @if($produto->extraFields->has('agrupamentos_de_produtos_1'))
              
    
                    @foreach($produto->extraFields->get('agrupamentos_de_produtos_1')->values as $item)
                        @itemAvailable($item->record)
                           @if(url($item->record->urls->first()->url) !== url()->current())  
                            <div class="productionGrouping">
                                <div class="productLook sku-{{ $item->record->identification->first()->sku }} {{ $item->record->extraFields->get('selecionar_cor_do_ouro')->values->first()->extraFieldOption->label }} @if(url($item->record->urls->first()->url) === url()->current()) active @endif"">
                            <a class="link-produto" @if($item->record->urls->first()->url) href="{{url($item->record->urls->first()->url)}}" @endif >
                            <div class="imgCard">
                                <img src="{{ $item->record->main_image->source }}">
                            </div>
                            <div class="varations {{ $item->record->extraFields->get('selecionar_cor_do_ouro')->values->first()->extraFieldOption->label }}">
                                <button class="{{ $item->record->extraFields->get('selecionar_cor_do_ouro')->values->first()->extraFieldOption->label }}">
    
                                </button>
                                <small>{{ $item->record->extraFields->get('selecionar_cor_do_ouro')->values->first()->extraFieldOption->label }}</small>
                            </div>
                            <h3>{{ $item->record->identification->first()->name }}</h3>
                      <span class="productGroupingSKU">{{ $item->record->identification->first()->sku }}</span>
    
                            </a>
                        </div>
                            </div>
                             @endif
                             
                        @enditemAvailable
                    @endforeach
             
            @endif
            @if($produto->extraFields->has('agrupamentos_de_produtos_2'))
               
    
                    @foreach($produto->extraFields->get('agrupamentos_de_produtos_2')->values as $item)
                        @itemAvailable($item->record)
                        
                        @if(url($item->record->urls->first()->url) !== url()->current()) 
                         <div class="productionGrouping">
                            <div class="productLook sku-{{ $item->record->identification->first()->sku }} {{ $item->record->extraFields->get('selecionar_cor_do_ouro')->values->first()->extraFieldOption->label }} @if(url($item->record->urls->first()->url) === url()->current()) active @endif"">
                            <a class="link-produto" @if($item->record->urls->first()->url) href="{{url($item->record->urls->first()->url)}}" @endif >
                            <div class="imgCard">
                                <img src="{{ $item->record->main_image->source }}">
                            </div>
                            <div class="varations {{ $item->record->extraFields->get('selecionar_cor_do_ouro')->values->first()->extraFieldOption->label }}">
                                <button class="{{ $item->record->extraFields->get('selecionar_cor_do_ouro')->values->first()->extraFieldOption->label }}">
    
                                </button>
                                <small>{{ $item->record->extraFields->get('selecionar_cor_do_ouro')->values->first()->extraFieldOption->label }}</small>
                            </div>
                            <h3>{{ $item->record->identification->first()->name }}</h3>
                      <span class="productGroupingSKU">{{ $item->record->identification->first()->sku }}</span>
    
                            </a>
                        </div>
                         </div>     
                             @endif
                        @enditemAvailable
                    @endforeach
          
            @endif
        </div>
            @if($produto->extraFields->has('e_alianca') && $produto->extraFields->get('e_alianca')->values->first()->extraFieldOption->label == 'Sim' 
            && $produto->extraFields->has('e_par_de_aliancas') && $produto->extraFields->get('e_alianca')->values->first()->extraFieldOption->label == 'Sim')
            <div class="title">Personalize suas alianças</div>
            @else
            <div class="title">Personalize seu anel</div>
            @endif
      
            <!--@foreach($produto->model->componentizations as $group)-->
            <!--    @if(starts_with($group->group->description, 'Cor'))-->
            <!--    <div class="div-pai-personalizar div-pai-com-buttons">-->
            <!--      <div id="btn-{{ str_slug($group->group->description) }}" class="btn-personalizar-produto">-->
            <!--        <span id="nome-cor">Cor do Ouro</span>-->
            <!--        <div id="div-cores">-->
            <!--          @foreach($group->group->components as $key => $component)-->
            <!--            <button data-group="{{ $group->group->id }}"-->
            <!--            data-id="{{ $component->id }}"-->
            <!--            data-nome="{{ str_slug($group->group->description) }}"-->
            <!--            id="cor-{{ str_slug($component->component->identification->first()->name) }}"-->
            <!--            nome="{{ $component->component->identification->first()->name }}"-->
            <!--            @if($component->price !== null && $component->price->price !== '0.0000000000')-->
            <!--              data-price="{{ number_format($component->price->price, 2, ',', '.') }}"-->
            <!--            @endif-->
            <!--            class="btn btn-cor"></button>-->
            <!--          @endforeach-->
            <!--        </div>-->
            <!--      </div>-->
            <!--    </div>-->
            <!--    @endif-->
            <!--@endforeach-->
            @foreach($produto->model->componentizations as $group)
              @if($produto->extraFields->has('e_alianca') && $produto->extraFields->get('e_alianca')->values->first()->extraFieldOption->label == 'Sim')
                @if($produto->extraFields->has('e_par_de_aliancas') && $produto->extraFields->get('e_alianca')->values->first()->extraFieldOption->label == 'Sim')
                  @if(!starts_with($group->group->description, 'Cor') && $group->group->id != 82 && $group->group->id != 80 && !starts_with($group->group->description, 'Pedras') && !starts_with($group->group->description, 'Grupo pedra') && !starts_with($group->group->description, 'Diamante') && !starts_with($group->group->description, 'Conforto'))
                    @if($group->group->components->count() < 5)
                    <div class="div-pai-personalizar div-pai-com-options  {{ strtolower($group->group->description) }}">
                    @else
                    <div class="div-pai-personalizar div-pai-com-options  {{ strtolower($group->group->description) }}">
                    @endif
                   
                    <div id="div-{{ str_slug($group->group->description) }}" class="div-personalizar-produto hide">
                      @if($saibamaiscomponentes->records->count() > 0)
                        @foreach($saibamaiscomponentes->records as $saibamais)
                          @if(starts_with($group->group->description, 'Largura'))
                            @if($saibamais->saiba_mais_largura != null)
                              <div class="div-saiba-mais"><img src="{{ path('icon-interrogacao.png') }}"> Saiba mais
                                <div class="texto-saiba-mais hide">{{ $saibamais->saiba_mais_largura->values->first->value->value }}</div>
                              </div>
                            @endif    
                          @endif    
                        @endforeach
                      @endif
                      @if($group->group->components->count() < 5)
                      <select id="select-{{ str_slug($group->group->description) }}" class="select-personalizar-produto">
                          <option value="" hidden="true" default="true">Selecione a Largura</option>
                              @foreach($group->group->components as $key => $component)
                          <option data-group="{{ $group->group->id }}" data-id="{{ $component->id }}" class="option-{{ str_slug($group->group->description) }}" @if($component->price !== null && $component->price->price !== '0.0000000000') data-price="{{ number_format($component->price->price, 2, ',', '.') }}" @endif>Largura: {{ $component->component->identification->first()->name }} @if($component->price !== null && $component->price->price !== '0.0000000000') + R$ {{ number_format($component->price->price, 2, ',', '.') }} @endif</option>
                      @endforeach
                      </select>
                      @else
                      <select id="select-{{ str_slug($group->group->description) }}" class="select-personalizar-produto">
                        <option value="" hidden="true" default="true">Selecionea Largura</option>
                        @foreach($group->group->components as $key => $component)
                          <option data-group="{{ $group->group->id }}" data-id="{{ $component->id }}" class="option-{{ str_slug($group->group->description) }}" @if($component->price !== null && $component->price->price !== '0.0000000000') data-price="{{ number_format($component->price->price, 2, ',', '.') }}" @endif>Largura: {{ $component->component->identification->first()->name }} @if($component->price !== null && $component->price->price !== '0.0000000000') + R$ {{ number_format($component->price->price, 2, ',', '.') }} @endif</option>
                        @endforeach
                      </select>
                      @endif
                    </div>
                  </div>
                  @endif
                @else
                  @if(!starts_with($group->group->description, 'Conforto') && !starts_with($group->group->description, 'Cor'))
                    @if($group->group->components->count() < 5)
                    <div class="div-pai-personalizar div-pai-com-options {{ $group->group->description }}">
                    @else
                    <div class="div-pai-personalizar div-pai-com-options {{ $group->group->description }}">
                    @endif
                
                    <div id="div-{{ str_slug($group->group->description) }}" class="div-personalizar-produto hide">
                      @if($saibamaiscomponentes->records->count() > 0)
                        @foreach($saibamaiscomponentes->records as $saibamais)
                          @if(starts_with($group->group->description, 'Largura'))
                            @if($saibamais->saiba_mais_largura != null)
                              <div class="div-saiba-mais"><img src="{{ path('icon-interrogacao.png') }}"> Saiba mais
                                <div class="texto-saiba-mais hide">{{ $saibamais->saiba_mais_largura->values->first->value->value }}</div>
                              </div>
                            @endif    
                          @elseif(starts_with($group->group->description, 'Aro'))
                            @if($saibamais->saiba_mais_numeracao_single != null)
                              <div class="div-saiba-mais"><img src="{{ path('icon-interrogacao.png') }}"> Saiba mais
                                <div class="texto-saiba-mais hide">{{ $saibamais->saiba_mais_numeracao_single->values->first->value->value }}</div>
                              </div>
                            @endif     
                          @elseif(starts_with($group->group->description, 'Grupo pedra') || starts_with($group->group->description, 'Pedra') || starts_with($group->group->description, 'Diamante'))
                            @if($saibamais->saiba_mais_tipo_de_pedra != null)
                              <div class="div-saiba-mais"><img src="{{ path('icon-interrogacao.png') }}"> Saiba mais
                                <div class="texto-saiba-mais hide">{{ $saibamais->saiba_mais_tipo_de_pedra->values->first->value->value }}</div>
                              </div>
                            @endif   
                          @endif    
                        @endforeach
                      @endif
                      @if($group->group->components->count() < 5)
                      <select id="select-{{ str_slug($group->group->description) }}" class="select-personalizar-produto">
                        <option value="" hidden="true" default="true">Selecione a Largura</option>
                        @foreach($group->group->components as $key => $component)
                          <option data-group="{{ $group->group->id }}"
                          data-id="{{ $component->id }}"
                          class="option-{{ str_slug($group->group->description) }}"
                          @if($component->price !== null && $component->price->price !== '0.0000000000') data-price="{{ number_format($component->price->price, 2, ',', '.') }}" @endif>
                          {{ $component->component->identification->first()->name }}
                          @if(!starts_with($group->group->description, 'Grupo pedra') && !starts_with($group->group->description, 'Pedra') && !starts_with($group->group->description, 'Diamante'))
                            @if($component->price !== null && $component->price->price !== '0.0000000000') + R$ {{ number_format($component->price->price, 2, ',', '.') }} @endif
                          @endif
                          </option>
                        @endforeach
                      </select>
                      @else
                      <select id="select-{{ str_slug($group->group->description) }}" class="select-personalizar-produto">
                        <option value="" hidden="true" default="true">Selecione a Largura</option>
                        @foreach($group->group->components as $key => $component)
                          <option data-group="{{ $group->group->id }}"
                          data-id="{{ $component->id }}"
                          class="option-{{ str_slug($group->group->description) }}"
                          @if($component->price !== null && $component->price->price !== '0.0000000000') data-price="{{ number_format($component->price->price, 2, ',', '.') }}" @endif>
                          {{ $component->component->identification->first()->name }}
                          @if(!starts_with($group->group->description, 'Grupo pedra') && !starts_with($group->group->description, 'Pedra') && !starts_with($group->group->description, 'Diamante'))
                            @if($component->price !== null && $component->price->price !== '0.0000000000') + R$ {{ number_format($component->price->price, 2, ',', '.') }} @endif
                          @endif
                          </option>
                        @endforeach
                      </select>
                      @endif
                    </div>
                    </div>
                  @endif
                @endif
              @else
                @if(!starts_with($group->group->description, 'Conforto') && !starts_with($group->group->description, 'Cor'))
                  @if($group->group->components->count() < 5)
                  <div class="div-pai-personalizar div-pai-com-options {{ strtolower($group->group->description) }}">
                  @else
                  <div class="div-pai-personalizar div-pai-com-options {{ strtolower($group->group->description) }}">
                  @endif
               
                  <div id="div-{{ str_slug($group->group->description) }}" class="div-personalizar-produto hide">
                      @if($saibamaiscomponentes->records->count() > 0)
                        @foreach($saibamaiscomponentes->records as $saibamais)
                          @if(starts_with($group->group->description, 'Largura'))
                            @if($saibamais->saiba_mais_largura != null)
                              <div class="div-saiba-mais"><img src="{{ path('icon-interrogacao.png') }}"> Saiba mais
                                <div class="texto-saiba-mais hide">{{ $saibamais->saiba_mais_largura->values->first->value->value }}</div>
                              </div>
                            @endif    
                          @elseif(starts_with($group->group->description, 'Aro'))
                            @if($saibamais->saiba_mais_numeracao_single != null)
                              <div class="div-saiba-mais"><img src="{{ path('icon-interrogacao.png') }}"> Saiba mais
                                <div class="texto-saiba-mais hide">{{ $saibamais->saiba_mais_numeracao_single->values->first->value->value }}</div>
                              </div>
                            @endif     
                          @elseif(starts_with($group->group->description, 'Grupo pedra') || starts_with($group->group->description, 'Pedra') || starts_with($group->group->description, 'Diamante'))
                            @if($saibamais->saiba_mais_tipo_de_pedra != null)
                              <div id="saiba-mais-pedra" class="div-saiba-mais"><img src="{{ path('icon-interrogacao.png') }}"> Saiba mais
                                <div class="texto-saiba-mais hide">{{ $saibamais->saiba_mais_tipo_de_pedra->values->first->value->value }}</div>
                              </div>
                            @endif   
                          @endif    
                        @endforeach
                      @endif
                    @if($group->group->components->count() < 5)
                    <span class="hide {{ $group->group->description }}">selecionaPedras</span>
                    <select id="select-{{ str_slug($group->group->description) }}" class="select-personalizar-produto pedras">
                      <option value="" hidden="true" default="true">Selecione</option>
                      @foreach($group->group->components as $key => $component)
                        <option data-group="{{ $group->group->id }}"
                        data-id="{{ $component->id }}"
                        class="option-{{ str_slug($group->group->description) }}"
                        @if($component->price !== null && $component->price->price !== '0.0000000000') data-price="{{ number_format($component->price->price, 2, ',', '.') }}" @endif>
                        {{ $component->component->identification->first()->name }}
                        @if(!starts_with($group->group->description, 'Grupo pedra') && !starts_with($group->group->description, 'Pedra') && !starts_with($group->group->description, 'Diamante'))
                          @if($component->price !== null && $component->price->price !== '0.0000000000') + R$ {{ number_format($component->price->price, 2, ',', '.') }} @endif
                        @endif
                        </option>
                      @endforeach
                      </select>
                    @else
                    <span class="hide {{ $group->group->description }}">selecionaTamanhos {{ str_slug($group->group->description) }}</span>
                    <select id="select-{{ str_slug($group->group->description) }}" class="select-personalizar-produto tamanhos">
                      <option value="" class="hide" hidden="true" default="true">Tamanho do anel</option>
                      @foreach($group->group->components as $key => $component)
                        <option data-group="{{ $group->group->id }}"
                        data-id="{{ $component->id }}"
                        class="option-{{ str_slug($group->group->description) }}"
                        @if($component->price !== null && $component->price->price !== '0.0000000000') data-price="{{ number_format($component->price->price, 2, ',', '.') }}" @endif>
                        {{ $component->component->identification->first()->name }}
                        @if(!starts_with($group->group->description, 'Grupo pedra') && !starts_with($group->group->description, 'Pedra') && !starts_with($group->group->description, 'Diamante'))
                          @if($component->price !== null && $component->price->price !== '0.0000000000') + R$ {{ number_format($component->price->price, 2, ',', '.') }} @endif
                        @endif
                        </option>
                      @endforeach
                      </select>
                    @endif
                  </div>
                </div>
                @endif
              @endif
            @endforeach
            @foreach($produto->model->componentizations as $group)
              @if(starts_with($group->group->description, 'Conforto'))
                @if($group->group->components->count() < 5)
                <div class="div-pai-personalizar div-pai-com-options  {{ strtolower($group->group->description) }}">
                @else
                <div class="div-pai-personalizar div-pai-com-options  {{ strtolower($group->group->description) }}">
                @endif
                <div id="div-{{ str_slug($group->group->description) }}" class="div-personalizar-produto hide">
       
                  @if($group->group->components->count() < 5)
                  <select id="select-{{ str_slug($group->group->description) }}" class="select-personalizar-produto">
                      <option value="" hidden="true" default="true">Selecione o Conforto</option>
                      @foreach($group->group->components as $key => $component)
                          <option data-group="{{ $group->group->id }}" data-id="{{ $component->id }}" class="option-{{ str_slug($group->group->description) }}" @if($component->price !== null && $component->price->price !== '0.0000000000') data-price="{{ number_format($component->price->price, 2, ',', '.') }}" @endif>Conforto interno: <span>{{ $component->component->identification->first()->name }}</span> @if($component->price !== null && $component->price->price !== '0.0000000000')<span> + R$ {{ number_format($component->price->price, 2, ',', '.') }}</span> @endif</option>
                      @endforeach
                  </select>
                  @else
                    <select id="select-{{ str_slug($group->group->description) }}" class="select-personalizar-produto">
                      <option value="" hidden="true" default="true">Selecione o Conforto</option>
                      @foreach($group->group->components as $key => $component)
                        <option data-group="{{ $group->group->id }}" data-id="{{ $component->id }}" class="option-{{ str_slug($group->group->description) }}" @if($component->price !== null && $component->price->price !== '0.0000000000') data-price="{{ number_format($component->price->price, 2, ',', '.') }}" @endif>{{ $component->component->identification->first()->name }} @if($component->price !== null && $component->price->price !== '0.0000000000') + R$ {{ number_format($component->price->price, 2, ',', '.') }} @endif</option>
                      @endforeach
                    </select>
                    @endif
                  </div>
                </div>
              @endif
            @endforeach
        
            @if($produto->extraFields->has('e_alianca') && $produto->extraFields->get('e_alianca')->values->first()->extraFieldOption->label == 'Sim' && $produto->extraFields->has('e_par_de_aliancas') && $produto->extraFields->get('e_alianca')->values->first()->extraFieldOption->label == 'Sim')
        
            <div class="div-pai-personalizar div-pai-com-options alianca-masculina">
                <!--<div id="btn-alianca-masculina" class="btn-personalizar-produto">Aliança Masculina <img src="{{ path('icon-plus-product.svg') }}"></div>-->
                <div id="div-alianca-masculina" class="div-personalizar-produto hide">
                  @foreach($produto->model->componentizations as $group)
                    @if($group->group->id == 80)
                      @if($saibamaiscomponentes->records->count() > 0)
                        @foreach($saibamaiscomponentes->records as $saibamais)
                          @if($saibamais->saiba_mais_numeracao_masculina != null)
                            <div class="div-saiba-mais"><img src="{{ path('icon-interrogacao.png') }}"> Saiba mais
                              <div class="texto-saiba-mais hide">{{ $saibamais->saiba_mais_numeracao_masculina->values->first->value->value }}</div>
                            </div>
                          @endif   
                        @endforeach
                      @endif
                      <select id="select-{{ str_slug($group->group->description) }}" class="select-personalizar-produto aro-masculino">
                        <option value="" hidden="true" default="true">Tamanho aliança 1</option>
                        @foreach($group->group->components as $key => $component)
                          <option data-group="{{ $group->group->id }}" data-id="{{ $component->id }}" class="option-{{ str_slug($group->group->description) }}" @if($component->price !== null && $component->price->price !== '0.0000000000') data-price="{{ number_format($component->price->price, 2, ',', '.') }}" @endif>{{ $component->component->identification->first()->name }} @if($component->price !== null && $component->price->price !== '0.0000000000') - R$ {{ number_format($component->price->price, 2, ',', '.') }} @endif</option>
                        @endforeach
                      </select>
                    @endif
                  @endforeach
                  <input id="input-gravacao-masculina" class="form-control input-personalizar-produto" placeholder="Gravação">
                </div>
            </div>
                <div class="div-pai-personalizar div-pai-com-options alianca-feminina ">
              <!--<div id="btn-alianca-feminina" class="btn-personalizar-produto">Aliança Feminina <img src="{{ path('icon-plus-product.svg') }}"></div>-->
              <div id="div-alianca-feminina" class="div-personalizar-produto hide">
                @foreach($produto->model->componentizations as $group)
                  @if($group->group->id == 82)
                      @if($saibamaiscomponentes->records->count() > 0)
                        @foreach($saibamaiscomponentes->records as $saibamais)
                          @if($saibamais->saiba_mais_numeracao_feminina != null)
                            <div class="div-saiba-mais"><img src="{{ path('icon-interrogacao.png') }}"> Saiba mais
                              <div class="texto-saiba-mais hide">{{ $saibamais->saiba_mais_numeracao_feminina->values->first->value->value }}</div>
                            </div>
                          @endif   
                        @endforeach
                      @endif
                    <select id="select-{{ str_slug($group->group->description) }}" class="select-personalizar-produto aro-feminino">
                      <option value="" hidden="true" default="true">Tamanho aliança 2</option>
                      @foreach($group->group->components as $key => $component)
                        <option data-group="{{ $group->group->id }}" data-id="{{ $component->id }}" class="option-{{ str_slug($group->group->description) }}" @if($component->price !== null && $component->price->price !== '0.0000000000') data-price="{{ number_format($component->price->price, 2, ',', '.') }}" @endif>{{ $component->component->identification->first()->name }} @if($component->price !== null && $component->price->price !== '0.0000000000') - R$ {{ number_format($component->price->price, 2, ',', '.') }} @endif</option>
                      @endforeach
                    </select>
                  @endif
                @endforeach
                <input id="input-gravacao-feminina" class="form-control input-personalizar-produto" placeholder="Gravação">
                @foreach($produto->model->componentizations as $group)
                  @if(starts_with($group->group->description, 'Pedra') || starts_with($group->group->description, 'Grupo pedra') || starts_with($group->group->description, 'Diamante'))
                      @if($saibamaiscomponentes->records->count() > 0)
                        @foreach($saibamaiscomponentes->records as $saibamais)
                          @if($saibamais->saiba_mais_tipo_de_pedra != null)
                            <div id="saiba-mais-pedra" class="div-saiba-mais"><img src="{{ path('icon-interrogacao.png') }}"> Saiba mais
                              <div class="texto-saiba-mais hide">{{ $saibamais->saiba_mais_tipo_de_pedra->values->first->value->value }}</div>
                            </div>
                          @endif 
                        @endforeach
                      @endif
                    <select id="select-{{ str_slug($group->group->description) }}" class="select-personalizar-produto">
                      <option value="" hidden="true" default="true">Selecione o tipo de pedra</option>
                      @foreach($group->group->components as $key => $component)
                        <option data-group="{{ $group->group->id }}" data-id="{{ $component->id }}" class="option-{{ str_slug($group->group->description) }}" @if($component->price !== null && $component->price->price !== '0.0000000000') data-price="{{ number_format($component->price->price, 2, ',', '.') }}" @endif>{{ $component->component->identification->first()->name }}</option>
                      @endforeach
                    </select>
                  @endif
                @endforeach
              </div>
            </div>
            @endif
            
            @if($produto->extraFields->has('possui_gravacao') && $produto->extraFields->get('possui_gravacao')->values->first()->extraFieldOption->label == 'Sim')
                <input type="text" id="input-gravacao-single" class="form-control" placeholder="Gravação">
            @endif
           
           
        </div>
        @else
        <div class="div-btn-comprar">
          <a href="javascript:;" canopus-open-item-availability-alert-modal="{{ $produto->model->id }}">Produto indisponível. Avise-me!</a>
        </div>
        @enditemAvailable

        <div id="div-personalizar-produtoBtn">
            
            <div id="div-preco-produto">
        <span itemprop="priceCurrency" content="R$"></span>
        <div class="product-price price">R$ <span content="{{ number_format($produto->prices->last()->price, 2, ',', '.') }}"> {{ number_format($produto->prices->last()->price, 2, ',', '.') }} </span></div>
              <div id="preco-natural">R$ <span id="price-p">{{ number_format($produto->prices->first()->price, 2, ',', '.') }}</span>
             <span id=itsPar>
             @if($produto->extraFields->has('e_alianca') && $produto->extraFields->get('e_alianca')->values->first()->extraFieldOption->label == 'Sim' && $produto->extraFields->has('e_par_de_aliancas') && $produto->extraFields->get('e_alianca')->values->first()->extraFieldOption->label == 'Sim')
                o par
              @endif
             </span></div>
              <div id="price-10-vezes">10x de R$ <span>{{ number_format($produto->prices->first()->price / 10, 2, ',', '.') }}</span></div>
              <div id="price-a-vista">ou R$ <span>{{ number_format($produto->prices->first()->price * 0.9, 2, ',', '.') }}</span> à vista (10% OFF)</div>
              
              em 10x R$ {{ number_format($produto->prices->first()->price / 10, 2, ',', '.') }}</p
              <p>ou <b>R$ {{ number_format($produto->prices->first()->price, 2, ',', '.') }}</b>  no Boleto</p>
              
              
            </div>
            <div class="novoPreco">
                <div class="txtPrice">
                    <span>Preço Justo</span>
                    <span id="btnSaberMore">Saber mais</span>
                </div>       
                <div class="priceNew">
                    <div class="priceItem reisman">
                        <div class="priceReisman">
                          
                        </div>
                        <div class="txtReisman">
                                Reisman
                        </div>
                    </div>   
                    <div class="dividerPrice"></div>
                    <div class="priceItem mercado">
                        <div class="priceMercado">
                          
                        </div>
                        @desktop
                          <div class="txtMercado">
                            Estimado de mercado
                          </div>
                        @elsedesktop
                          <div class="txtMercado">
                                 Mercado
                          </div>
                        @enddesktop

                       
                    </div>  
                </div>   
            </div>
             <div id="priceProduto">
            </div>   
            <div id="btn-comprar" data-id="{{ $produto->model->id }}" class="div-btn-comprar" quantity="1">
                Comprar
            </div>
        </div>
        
        @if($produto->extraFields->has('padrao_de_fabricacao'))
          @if($padroesdefabricacao->records->count() > 0)
            @foreach($padroesdefabricacao->records as $padrao)
            <div id="div-tempo-fab" class="text-center">
              @if($produto->extraFields->get('padrao_de_fabricacao')->values->first()->extraFieldOption->label == "Simples")
                {{ $padrao->simples->values->first->value->value }}
              @elseif($produto->extraFields->get('padrao_de_fabricacao')->values->first()->extraFieldOption->label == "Complicado")
                {{ $padrao->complicado->values->first->value->value }}
              @endif
            </div>
            @endforeach
          @endif
        @endif
       
        <div id="linkWebstorie">
            @if($produto->extraFields->has('imagem_01'))
              <div class="itemWebStories">
                  <img src="{{ $produto->extraFields->get('imagem_01')->values->first()->source }}">
                  <div class="linkweb">{{ $produto->extraFields->get('url_da_imagem_01')->values->first()->value }}</div>
              </div>
            @endif   

            @if($produto->extraFields->has('imagem_02'))
                <div class="itemWebStories">
                    <img src="{{ $produto->extraFields->get('imagem_02')->values->first()->source }}">
                    <div class="linkweb">{{  $produto->extraFields->get('url_da_imagem_02')->values->first()->value }}</div>
                </div>
            @endif  

            @if($produto->extraFields->has('imagem_03'))
                <div  class="itemWebStories">
                    <img src="{{ $produto->extraFields->get('imagem_03')->values->first()->source }}">
                    <div class="linkweb">{{  $produto->extraFields->get('url_da_imagem_04')->values->first()->value }}</div>
                </div>
            @endif 

            @if($produto->extraFields->has('imagem_05'))
                <div class="itemWebStories">
                    <img src="{{ $produto->extraFields->get('imagem_05')->values->first()->source }}">
                    <div class="linkweb">{{  $produto->extraFields->get('url_da_imagem_05')->values->first()->value }}</div>
                </div>
            @endif  
        </div>
        <div class="infoReis">
            <ul>
            @if($produto->extraFields->has('selecionar_vantagens') && $produto->extraFields->get('selecionar_vantagens')->values->first()->extraFieldOption->label == '01-vantagem')
                @if($vantagem01->records->count() > 0)
                    @foreach($vantagem01->records as $newVantagem01)
                        <li>
                            
                            <img src="{{ $newVantagem01->vantagem_01_imagem->values->first()->source  }}">
                            <span><a class="link-{{ $newVantagem01->vantagem_01_url->values->first->value->value }}" href="{{ $newVantagem01->vantagem_01_url->values->first->value->value }}" target="_blank">{{ $newVantagem01->vantagem_01_texto->values->first->value->value }}</a></span>
                            
                        </li>
                    @endforeach 
                @endif
            @endif
            @if($produto->extraFields->has('selecionar_vantagens') && $produto->extraFields->get('selecionar_vantagens')->values->first()->extraFieldOption->label == '02-vantagem')
                @if($vantagem02->records->count() > 0)
                    @foreach($vantagem02->records as $newVantagem02)
                        <li>
                  
                            <img src="{{ $newVantagem02->vantagem_02_imagem->values->first()->source  }}">
                            <span><a class="link-{{ $newVantagem02->vantagem_02_url->values->first->value->value }}" href="{{ $newVantagem02->vantagem_02_url->values->first->value->value }}" target="_blank">{{ $newVantagem02->vantagem_02_texto->values->first->value->value }}</a></span>
                        </li>
                    @endforeach 
                @endif
            @endif
            @if($produto->extraFields->has('selecionar_vantagens') && $produto->extraFields->get('selecionar_vantagens')->values->first()->extraFieldOption->label == '03-vantagem')
                @if($vantagem03->records->count() > 0)
                    @foreach($vantagem03->records as $newVantagem03)
                        <li>
                          
                            <img src="{{ $newVantagem03->vantagem_03_imagem->values->first()->source  }}">
                            <span><a class="link-{{ $newVantagem03->vantagem_03_url->values->first->value->value }}" href="{{ $newVantagem03->vantagem_03_url->values->first->value->value }}" target="_blank">{{ $newVantagem03->vantagem_03_texto->values->first->value->value }}</a></span>
                        </li>
                    @endforeach 
                @endif
            @endif
            @if($produto->extraFields->has('selecionar_vantagens') && $produto->extraFields->get('selecionar_vantagens')->values->first()->extraFieldOption->label == '04-vantagem')
                @if($vantagem04->records->count() > 0)
                    @foreach($vantagem04->records as $newVantagem04)
                        <li>
                            <img src="{{ $newVantagem04->vantagem_04_imagem->values->first()->source  }}">
                            <span><a class="link-{{ $newVantagem04->vantagem_04_url->values->first->value->value }}" href="{{ $newVantagem04->vantagem_04_url->values->first->value->value }}" target="_blank">{{ $newVantagem04->vantagem_04_texto->values->first->value->value }}</a></span>
                        </li>
                    @endforeach 
                @endif
            @endif
            </ul>
                  
        </div>



      <div class="description">
        <span class="title">Descrição e detalhes</span><i class="plus"></i>
        <div class="content">
            @if($produto->extraFields->has('titulo_descricao_produto') && $produto->extraFields->has('descricao_produto'))
                <div id="div-descricao-produto" class="text-center">
                    <div class="title">
                        {{ $produto->extraFields->get('titulo_descricao_produto')->values->first()->value }}
                    </div>
                    <div class="retangulo"></div>
                    <div class="description">
                        {!! $produto->extraFields->get('descricao_produto')->values->first()->value !!}
                    </div>
                </div>
            @endif
        </div>
    </div> 
    <div id="modal-webstories" class="tingle-modal webstories " tabindex="-1" role="dialog">
    <button class="tingle-modal__close"><span class="tingle-modal__closeIcon">×</span><span class="tingle-modal__closeLabel"></span></button>
   <iframe src=""></iframe>     
</div>
        
       
        @if($produto->extraFields->has('complete_o_visual'))

     <div class="completedLook">
    <h3>Complete o visual</h3>
    <div class="slider-completedLookNew">
        @foreach($produto->extraFields->get('complete_o_visual')->values as $item)
            @itemAvailable($item->record)
            <div class="productLook">
                <a class="link-produto" @if($item->record->urls->first()->url) href="{{url($item->record->urls->first()->url)}}" @endif >
                <div class="imgCard">
                    <img src="{{ $item->record->main_image->source }}">
                </div>
                <h3 class="name">{{ $item->record->identification->first()->name }}</h3>
                                                    
                </a>        
            </div>
            @enditemAvailable
        @endforeach
    </div>
</div>

@endif
    </div>
  </div>


@if($produto->extraFields->has('codigo_video_youtube'))
<div id="div-video-produto">
    <iframe id="iframe-video" src="https://www.youtube.com/embed/{{ $produto->extraFields->get('codigo_video_youtube')->values->first()->value }}?rel=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>
@endif
<div class="newImgDescription">
    @if($produto->extraFields->has('titulo_descricao'))
         <h3>{{ $produto->extraFields->get('titulo_descricao')->values->first()->value }}</h3> 
    @endif 
    <div class="divider"></div> 
    @if($produto->extraFields->has('selecionar_imagem_descricao') && $produto->extraFields->get('selecionar_imagem_descricao')->values->first()->extraFieldOption->label == 'Caixa01')
        @if($caixa01->records->count() > 0)
          
            <div class="clientsSlider">
                   @foreach($caixa01->records as $imgCaixa01)
                <div id="slideCaixa">
                    <div class="img-Caixa">
                        <img src="{{ $imgCaixa01->imagem_caixa_do_produto_01->values->first()->source  }}"> 
                    </div>   
                </div>    
            @endforeach 
            </div>
         
        @endif
    @endif
    @if($produto->extraFields->has('selecionar_imagem_descricao') && $produto->extraFields->get('selecionar_imagem_descricao')->values->first()->extraFieldOption->label == 'Caixa02')
        @if($caixa02->records->count() > 0)
            <div class="clientsSlider">
                   @foreach($caixa02->records as $imgCaixa02)
                <div id="slideCaixa">
                    <div class="img-Caixa">
                        <img src="{{ $imgCaixa02->imagem_caixa_do_produto_02->values->first()->source  }}"> 
                    </div>   
                </div>    
            @endforeach 
            </div>
         
        @endif
    @endif
    @if($produto->extraFields->has('selecionar_imagem_descricao') && $produto->extraFields->get('selecionar_imagem_descricao')->values->first()->extraFieldOption->label == 'Caixa03')
        @if($caixa03->records->count() > 0)
            <div class="clientsSlider">
                   @foreach($caixa03->records as $imgCaixa03)
                <div id="slideCaixa">
                    <div class="img-Caixa">
                        <img src="{{ $imgCaixa03->imagem_caixa_do_produto_03->values->first()->source  }}"> 
                    </div>   
                </div>    
            @endforeach 
            </div>
         
        @endif
    @endif
    @if($produto->extraFields->has('selecionar_imagem_descricao') && $produto->extraFields->get('selecionar_imagem_descricao')->values->first()->extraFieldOption->label == 'Caixa04')
        @if($caixa04->records->count() > 0)
            <div class="clientsSlider">
                   @foreach($caixa04->records as $imgCaixa04)
                <div id="slideCaixa">
                    <div class="img-Caixa">
                        <img src="{{ $imgCaixa04->imagem_caixa_do_produto_04->values->first()->source  }}"> 
                    </div>   
                </div>    
            @endforeach 
            </div>
         
        @endif
    @endif
</div>



<div class="lojaInProduto">
  @if($imagemloja->records->count() > 0)
    @foreach($imagemloja->records as $aboutLoja)
        <h3>
        Compre online ou na loja São Paulo
      </h3>
      <div class="divider"></div>
      <div id="div-loja-sp" >
          <div class="div-inner">
              <div class="title">
                      {{ $aboutLoja->nome_da_loja->values->first->value->value }}
              </div>
              <div class="retangulo mobile-item"></div>
                              <div class="desc">
                                    {{ $aboutLoja->texto_da_loja->values->first->value->value }} <br>
                              {{ $aboutLoja->texto_sobre_a_loja->values->first->value->value }}
                                        
              </div>
              <a href="{{ $aboutLoja->link_do_botao->values->first->value->value }} " class="btn btn-ver-mais desktop-inline-item">
              Visite-nos
              </a>
                  </div>
                  <div class="div-img">
              <img src="{{ $aboutLoja->imagem_da_loja->values->first()->source  }}" alt="Loja Reisman em São Paulo" title="Loja em São Paulo - Joalheria Reisman">  
          </div>
                      <a href="{{ $aboutLoja->link_do_botao->values->first->value->value }}" class="btn btn-ver-mais mobile-item">
              Visite-nos
          </a>
              </div>
      </div>
      
      @endforeach
  @endif
</div>


@if($duvidasfrequentesproduto->records->count() > 0)
  <div id="div-faq">
    <div class="title text-center">Dúvidas frequentes</div>
    <div class="retangulo"></div>
    <div id="div-perguntas">
      @foreach($duvidasfrequentesproduto->records->filter(function($faq) { return $faq->pergunta != null && $faq->resposta != null; })->take(4) as $faq)
        <div>
          <h2 id="pergunta-{{ $faq->id }}" class="div-pergunta">
            {{ $faq->pergunta->values->first->value->value }}
            <img src="{{ path('icon-plus-faq.svg') }}">
          </h2>
          <div id="resposta-{{ $faq->id }}" class="div-resposta hide">
            {!! $faq->resposta->values->first->value->value !!}
            @if($faq->imagem_resposta != null)
            <div class="div-img-resposta">
              <img src="https://assets.betalabs.net/production/reisman/{{ $faq->imagem_resposta->values->first->source->file_path }}">
            </div>
            @endif
          </div>
        </div>
      @endforeach
    </div>
    <div class="text-center">
      <a href="/duvidas-frequentes" class="btn btn-ver-mais">
        Ver mais
      </a>
    </div>
  </div>
@endif
@if($produto->extraFields->has('produtos_relacionados'))
  <div id="div-produtos-relacionados">
    <div class="title text-center">Você também pode gostar:</div>

    <div class="slider-produtos-relacionados">
      @foreach($produto->extraFields->get('produtos_relacionados')->values as $item)
        @itemAvailable($item->record)
        <div class="spot-slider">
            <a class="link-produto" @if($item->record->urls->first()->url) href="{{url($item->record->urls->first()->url)}}" @endif >
              <div class="img-spot-produto">
                <img src="{{ $item->record->main_image->source }}">
              </div>
                            <h3>{{ $item->record->identification->first()->name }}</h3>

            </a>        
        </div>
        @enditemAvailable
      @endforeach
    </div>
  </div>
@endif



</div>

<div class="modal fade" id="modalAvalie" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-body">
		<form method="post" id="formulario-avaliacao" data-item="{{$produto->model->id}}">
			<h2 class="title">Avalie o produto</h2>
			<div class="box-rating">
				<div id="stars"
					 class="rateit bigstars"
					 data-rateit-resetable="false"
					 data-rateit-starwidth="29"
					 data-rateit-starheight="26"
					 data-rateit-backingfld="#classificacao"
				></div>
			</div>
			<input id="classificacao" value="1" type="hidden">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
			<div class="box-text">
				<textarea name="comentario[comentario]" required rows="6" cols="50" class="resizeV resizeH textarea" placeholder="Comentário"></textarea>
			</div>
			<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
			<input type="submit" class="btn_sucess" value="Postar comentário" />
		</form>
      </div>
    </div>
  </div>
</div>




@push('scripts')

<script src="{{ script('rateit.js') }}"></script>
<script>
    $(document).on("click", ".saibaMaisPreco button.tingle-modal__close", function (){
    $('.saibaMaisPreco.active').removeClass('active');
    });
    $('.infoReis li a.link-sem-link').removeAttr('href');
       $('.infoReis li a.link-sem-link').removeAttr('target');
    
    $(document).on("click", " .ficouFaltando .modal-header .close,.ficouFaltando button", function (){
    $('.ficouFaltando.active').removeClass('active');
    });
    $(document).on("click", " .modalTamanho .modal-header .close,.modalTamanho button", function (){
      $('.modalTamanho.active').removeClass('active');
    });
    
    
   
$(document).on("click", "#btnSaberMore", function (){
    $('.saibaMaisPreco').addClass('active');
});
$(document).on("click", "#linkWebstorie img", function (event){
    event.preventDefault();
    $(this).parent().addClass('active');
    let urlVideo = $('.itemWebStories.active .linkweb').text();
    $('div#modal-webstories iframe').attr('src',urlVideo);
    $('.webstories').addClass('active');
});
    setTimeout(function(){
    // $('.div-pai-personalizar ').each(function(){
    //     let nomePersonalizacao = $(this).find('.btn-personalizar-produto span').text();
    //     $(this).addClass(nomePersonalizacao);
    //     $(this).find('.div-pai-com-options').addClass(nomePersonalizacao);
    // });  
    // $('.div-pai-personalizar ').each(function(){
    //     let nomePersonalizacao = $(this).find('span.hide').text();
    //     $(this).addClass(nomePersonalizacao);
    //     $(this).find('.div-pai-com-options').addClass(nomePersonalizacao);
    // });  
    
$('.div-pai-com-options').find('select').each(function(){
    if($(this).is('[id^="select-largura"]')) {
        $(this).find('option:eq(1)').prop('selected', 'selected');
        $(this).trigger('change');
    }
});
$('.div-pai-com-options').find('select').each(function(){
    if($(this).is('[id^="select-pedras-versailles"]')) {
        $(this).parent().parent().addClass('select-pedras-versailles')
        $(this).find('option:eq(1)').prop('selected', 'selected');
        $(this).trigger('change');
    }
});
$('.div-pai-com-options').find('select').each(function(){
    if($(this).is('[id^="select-conforto"]')) {
        $(this).find('option:eq(1)').prop('selected', 'selected');
        $(this).trigger('change');
    }
});
    
$('.productionGrouping').each(function(){
  let skuProduct = $('#skuProduct').text();
  let skuMain = 'sku-'+skuProduct;
//   let variationsSku = $(this).find('.'+skuMain).addClass('select')

});
$('input#input-gravacao-feminina').attr("placeholder", "Gravação aliança 2");
$('input#input-gravacao-masculina').attr("placeholder", "Gravação aliança 1");
$('#input-gravacao-single').attr("placeholder", "Gravação interna");
   $('.div-pai-personalizar.div-pai-com-options.Numeração .select-personalizar-produto option:first-child').text('Tamanho ');
   console.log('option numeracao')
    }, 300);     

$(document).on("click", ".webstories button.tingle-modal__close", function (){
    $('#linkWebstorie .itemWebStories').removeClass('active');
    $('.webstories.active').removeClass('active');
    $('div#modal-webstories iframe').attr('src','');
});
 setTimeout(function(){
     new VenoBox({
        selector: '.my-video-links',
        numeration: true,
        infinigall: true,
        share: true,
        spinner: 'rotating-plane'
    });
// new VenoBox({
//   selector: '.venobox',
//       numeration: true,
//     infinigall: true,
//     share: true,
//     spinner: 'rotating-plane'
// });
 },1000)
$('#formulario-avaliacao').submit(function(event) {
    event.preventDefault();

    $('#formulario-avaliacao').find('input[type="submit"]').attr("disabled", "disabled");
    window.ItemCommenter.send(
        $('#formulario-avaliacao').attr('data-item'),
        $('[name="comentario[comentario]"]').val(),
        $('#classificacao').val()
	).then(function (comment) {
		$('#formulario-avaliacao').find('input[type="submit"]').removeAttr("disabled");
		iziToast.success({title: 'Comentário gravado com sucesso', message: 'Após aprovação, ele aparecerá aqui. Obrigado!'})

		window.location.reload();
    }).fail(function() {
		$('#formulario-avaliacao').find('input[type="submit"]').removeAttr("disabled");
		iziToast.error({title: 'Ocorreu um erro ao registrar o seu comentário', message: 'Por favor, tente novamente.'})
    });

    return false;
});
</script>
@endpush

   




@push('scripts')
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Product",
  "name": " {{ $produto->identification->name }}",
  "description": "{{
    trim(strip_tags($produto->extraFields->get('descricao_do_produto_para_seo')?->values?->first()?->value ?? ''))
    ?: trim(strip_tags($produto->extraFields->get('descricao_produto')?->values?->first()?->value ?? 'Descrição não disponível'))
  }}",
  "sku": "{{ $produto->identification->sku }}",
  "brand": {
    "@type": "Brand",
    "name": "Reisman"
  },
  "image": [
    "@if($produto->extraFields->has('imagem_produto_01')) {{ $produto->extraFields->get('imagem_produto_01')->values->first()->source }} @else https://assets.betalabs.net/production/reisman/images/stores/1/logo-desktop-black.png @endif ",
    "@if($produto->extraFields->has('imagem_produto_02')) {{ $produto->extraFields->get('imagem_produto_02')->values->first()->source }} @else https://assets.betalabs.net/production/reisman/images/stores/1/logo-desktop-black.png @endif "
  ],
  "category": "{{ $produto->categories->filter(fn($cat) => $cat->depth == 0 && $cat->id != 5) ->sortBy('id')->first()?->name }}",
  "material": "Ouro 18k maciço",
  "color": "{{ $produto->extraFields->get('selecionar_cor_do_ouro')->values->first()->extraFieldOption->label }}",
  "offers": [{
    "@type": "Offer",
    "priceCurrency": "BRL",
    "price": "{{ number_format($produto->prices->last()->price, 2, '.', '') }}",
    "availability": "https://schema.org/InStock",
    "url": "{{ url()->current()}}",
    "seller": {
      "@type": "Organization",
      "name": "Reisman",
      "url": "https://www.reisman.com.br"
    },
    "hasMerchantReturnPolicy": {
      "@type": "MerchantReturnPolicy",
      "applicableCountry": "BR",
      "returnPolicyCategory": "https://schema.org/MerchantReturnFiniteReturnWindow",
      "merchantReturnDays": 10,
      "returnMethod": "https://schema.org/ReturnByMail",
      "returnFees": "https://schema.org/FreeReturn"
    },
    "shippingDetails": {
      "@type": "OfferShippingDetails",
      "shippingRate": {
        "@type": "MonetaryAmount",
        "value": 0,
        "currency": "BRL"
      },
      "shippingDestination": {
        "@type": "DefinedRegion",
        "addressCountry": "BR"
      },
      "deliveryTime": {
          "@type": "ShippingDeliveryTime",
        "handlingTime": {
          "@type": "QuantitativeValue",
          "minValue": 0,
          "maxValue": 5,
          "unitCode": "d"
      },
       "transitTime": {
          "@type": "QuantitativeValue",
          "minValue": 0,
          "maxValue": 2,
          "unitCode": "d"
        }
      }
    }
  }]
}
</script>
<script>
    $(document).on("click", "header .desktop .aside-box .item.search", function () {
        $(this).toggleClass("active");
        $('.searchForm').toggleClass("active");
    });
</script>
<script>
    var corSelecionada = 0;
    var confortoInternoSelecionado = 0;
    var larguraSelecionada = 0;
    var aroFemininoSelecionado = 0;
    var tipoDePedraSelecionada = 0;
       var aroTamanhos = 0;
    var elementoPrecoProduto = $('#price-p');
    var valPrecoProdutoInicial = transNumber($('#price-p').html());
    var elementoPrecoProdutoParcela = $('#price-10-vezes').find('span');
    var elementoPrecoAVista = $('#price-a-vista').find('span');
    
    function transNumber(string) {
        return Number(string.replace('.', '').replace(',', '.'));
    }
    
    function alterarPrecoProduto(precoAtual, precoAdd, precoRemove) {
        precoAtual += precoAdd;
        precoAtual -= precoRemove;
        
        function format(n) {
          return n.toFixed(2).replace('.', ',').replace(/\d{3}(?=(\d{3})*,)/g, function(s) {
            return '.' + s
          })
        }
        
        var regexPonto = new RegExp('^\.');
        
        var precoParcela = format(precoAtual / 10);
        var precoAVista = format(precoAtual * 0.9);
        
        if(precoParcela.match(regexPonto)) {
            precoParcela = precoParcela.replace('.', '');
        }
        if(precoAtual * 0.9 < 1000) {
            if(precoAVista.match(regexPonto)) {
                precoAVista = precoAVista.replace('.', '');
            }
        }
        
        elementoPrecoProduto.html(format(precoAtual))
        elementoPrecoProdutoParcela.html(precoParcela)
        elementoPrecoAVista.html(precoAVista)
        
        /*
            
        if(precoAtual.toString() == precoAtual.toString().replace('.', ',')) {
            elementoPrecoProduto.html(precoAtual.toString()+',00');
            elementoPrecoProdutoParcela.html((precoAtual / 10).toString()+',00');
            elementoPrecoAVista.html((precoAtual * 0.9).toString()+',00');
        } else {
            var regex1 = new RegExp('[0-9]+,[0-9]{1}');
            var regex2 = new RegExp('[0-9]+,[0-9]{2}');
            
            
            if(precoAtual.toString().replace('.', ',').match(regex2)) {
                elementoPrecoProduto.html(precoAtual.toString().replace('.', ',').match(regex2)[0]);
                elementoPrecoProdutoParcela.html((precoAtual / 10).toString().replace('.', ',').match(regex2)[0]);
                elementoPrecoAVista.html((precoAtual * 0.9).toString().replace('.', ',').match(regex2)[0]);
            } else if(precoAtual.toString().replace('.', ',').match(regex1)) {
                elementoPrecoProduto.html(precoAtual.toString().replace('.', ',').match(regex1)[0]+'0');
                elementoPrecoProdutoParcela.html((precoAtual / 10).toString().replace('.', ',').match(regex1)[0]);
                elementoPrecoAVista.html((precoAtual * 0.9).toString().replace('.', ',').match(regex1)[0]);
            }
            
        }
        
        */
    }
    
    
    $('.btn-personalizar-produto').each(function(){
        var idBtn = $(this).attr('id');
        var slugBtn = idBtn.replace('btn-', '').replace('-18k', '');
        var div = $('#div-'+slugBtn);
        
        $(this).on('click', function(){
            if($(this).attr('id') != 'btn-cor-do-ouro' && $(this).attr('id') != 'btn-cor-do-ouro-aneis') {
                div.toggleClass('hide');
            
                if(div.hasClass('hide')) {
                    $(this).find('img').attr('src', '{{ path("icon-plus-product.svg") }}');
                    $(this).css('border-color', '#bbbcbd');
                } else {
                    $(this).find('img').attr('src', '{{ path("icon-minus-product.png") }}');
                    $(this).css('border-color', 'transparent');
                }
            }
        });
    });
    
    setTimeout(function(){
      if($('#btn-cor-do-ouro').length > 0) {
        $('#btn-cor-do-ouro').find('#div-cores').children().first().click();
      }
      if($('#btn-cor-do-ouro-aneis').length > 0) {
        $('#btn-cor-do-ouro-aneis').find('#div-cores').children().first().click();
      }
    }, 400);
    
    
    $('.btn-cor').each(function(){
        $(this).on('click', function(){
            $('.btn-cor').removeClass('active');
            $('.btn-cor').css('background-image', 'none');
            $(this).addClass('active');
            var idBtnCor = $(this).attr('id');
            idBtnCor = idBtnCor.replace('cor-', '').replace('-18k', '');
            $(this).css('background-image', 'url(https://assets.betalabs.net/production/reisman/images/stores/1/icon-check-'+idBtnCor+'.png)');
            $('#nome-cor').html($(this).attr('nome'));
	        $(this).parent().parent().parent().removeClass('ficou-faltando');
	        
	        
	        if($(this).attr('data-price') != undefined) {
              alterarPrecoProduto(transNumber($('#price-p').html()), transNumber($(this).attr('data-price')), corSelecionada);
              corSelecionada = transNumber($(this).attr('data-price'));
            } else {
              alterarPrecoProduto(transNumber($('#price-p').html()), 0, corSelecionada);
              corSelecionada = 0;
            }
	        
        }); 
    });
    
    $('.btn-personalizar-produto-inner').each(function(){
        $(this).on('click', function(){
            $(this).parent().find('.active').removeClass('active');
            $(this).addClass('active');
	        $(this).parent().parent().removeClass('ficou-faltando');
	        $(this).parent().css('border-bottom', '1px solid #bbbcbd');
	        
	        if($(this).is('[class^="btn-pedra"]') || $(this).is('[class^="btn-grupo-pedra"]') || $(this).is('[class^="btn-diamante"]')) {
	          if($(this).attr('data-price') != undefined) {
	            alterarPrecoProduto(transNumber($('#price-p').html()), transNumber($(this).attr('data-price')), tipoDePedraSelecionada);
                tipoDePedraSelecionada = transNumber($(this).attr('data-price'));
	          } else {
	            alterarPrecoProduto(transNumber($('#price-p').html()), 0, tipoDePedraSelecionada);
	            tipoDePedraSelecionada = 0;
	          }
	        } else if($(this).hasClass('btn-conforto-interno') || $(this).is('[class^="btn-conforto"]')) {
	          if($(this).attr('data-price') != undefined) {
	            alterarPrecoProduto(transNumber($('#price-p').html()), transNumber($(this).attr('data-price')), confortoInternoSelecionado);
                confortoInternoSelecionado = transNumber($(this).attr('data-price'));
	          } else {
	            alterarPrecoProduto(transNumber($('#price-p').html()), 0, confortoInternoSelecionado);
	            confortoInternoSelecionado = 0;
	          }
	        } else if($(this).is('[class^="btn-largura"]')) {
	          if($(this).attr('data-price') != undefined) {
	            alterarPrecoProduto(transNumber($('#price-p').html()), transNumber($(this).attr('data-price')), larguraSelecionada);
                larguraSelecionada = transNumber($(this).attr('data-price'));
	          } else {
	            alterarPrecoProduto(transNumber($('#price-p').html()), 0, larguraSelecionada);
	            larguraSelecionada = 0;
	          }
	        }
        });
    });
    
     $('.select-personalizar-produto').each(function(){
        $(this).on('change', function(){
	        $(this).addClass('select-active');
	        if($(this).parent().find('select').length == $(this).parent().find('select.select-active').length) {
	            $(this).parent().parent().removeClass('ficou-faltando');
	            $(this).parent().css('border-bottom', '1px solid #bbbcbd');
	        }
	        
	        if($(this).find('option:selected').attr('data-group') == '82') {
	          if($(this).find('option:selected').attr('data-price') != undefined) {
	            alterarPrecoProduto(transNumber($('#price-p').html()), transNumber($(this).find('option:selected').attr('data-price')), aroFemininoSelecionado);
                aroFemininoSelecionado = transNumber($(this).find('option:selected').attr('data-price'));
	          } else {
	            alterarPrecoProduto(transNumber($('#price-p').html()), 0, aroFemininoSelecionado);
	            aroFemininoSelecionado = 0;
	          }
	        } else if($(this).find('option:selected').is('[class^="option-pedras"]') || $(this).find('option:selected').is('[class^="option-grupo-pedra"]') || $(this).find('option:selected').is('[class^="option-diamante"]')) {
	          if($(this).find('option:selected').attr('data-price') != undefined) {
	            alterarPrecoProduto(transNumber($('#price-p').html()), transNumber($(this).find('option:selected').attr('data-price')), tipoDePedraSelecionada);
                tipoDePedraSelecionada = transNumber($(this).find('option:selected').attr('data-price'));
	          } else {
	            alterarPrecoProduto(transNumber($('#price-p').html()), 0, tipoDePedraSelecionada);
	            tipoDePedraSelecionada = 0;
	          }
	        } else if($(this).find('option:selected').hasClass('option-conforto-interno')) {
	          if($(this).find('option:selected').attr('data-price') != undefined) {
	            alterarPrecoProduto(transNumber($('#price-p').html()), transNumber($(this).find('option:selected').attr('data-price')), confortoInternoSelecionado);
                confortoInternoSelecionado = transNumber($(this).find('option:selected').attr('data-price'));
	          } else {
	            alterarPrecoProduto(transNumber($('#price-p').html()), 0, confortoInternoSelecionado);
	            confortoInternoSelecionado = 0;
	          }
	        } else if($(this).find('option:selected').is('[class^="option-largura"]')) {
	          if($(this).find('option:selected').attr('data-price') != undefined) {
	            alterarPrecoProduto(transNumber($('#price-p').html()), transNumber($(this).find('option:selected').attr('data-price')), larguraSelecionada);
                larguraSelecionada = transNumber($(this).find('option:selected').attr('data-price'));
	          } else {
	            alterarPrecoProduto(transNumber($('#price-p').html()), 0, larguraSelecionada);
	            larguraSelecionada = 0;
	          }
	        }else if($(this).find('option:selected').is('[class^="option-conforto"]')) {
	          if($(this).find('option:selected').attr('data-price') != undefined) {
	            alterarPrecoProduto(transNumber($('#price-p').html()), transNumber($(this).find('option:selected').attr('data-price')), confortoInternoSelecionado);
              confortoInternoSelecionado = transNumber($(this).find('option:selected').attr('data-price'));
	          } else {
	            alterarPrecoProduto(transNumber($('#price-p').html()), 0, confortoInternoSelecionado);
	            confortoInternoSelecionado = 0;
	          }
	        } else if($(this).find('option:selected').is('[class^="select-largura"]')) {
	          if($(this).find('option:selected').attr('data-price') != undefined) {
	            alterarPrecoProduto(transNumber($('#price-p').html()), transNumber($(this).find('option:selected').attr('data-price')), larguraSelecionada);
              larguraSelecionada = transNumber($(this).find('option:selected').attr('data-price'));
	          } else {
	            alterarPrecoProduto(transNumber($('#price-p').html()), 0, larguraSelecionada);
	            larguraSelecionada = 0;
	          }
	        }
			 else if($(this).find('option:selected').is('[class^="option-aro"]')) {
	          if($(this).find('option:selected').attr('data-price') != undefined) {
	            alterarPrecoProduto(transNumber($('#price-p').html()), transNumber($(this).find('option:selected').attr('data-price')), aroTamanhos);
				aroTamanhos = transNumber($(this).find('option:selected').attr('data-price'));
	          } else {
	            alterarPrecoProduto(transNumber($('#price-p').html()), 0, aroTamanhos);
	            aroTamanhos = 0;
	          }
	        }


	        
	        
        });
    });
    
    // $('.select-personalizar-produto').each(function(){
    //     $(this).on('change', function(){
	   //     $(this).addClass('select-active');
	   //     if($(this).parent().find('select').length == $(this).parent().find('select.select-active').length) {
	   //         $(this).parent().parent().removeClass('ficou-faltando');
	   //         $(this).parent().css('border-bottom', '1px solid #bbbcbd');
	   //     }
	        
	   //     if($(this).find('option:selected').attr('data-group') == '82') {
	   //       if($(this).find('option:selected').attr('data-price') != undefined) {
	   //         alterarPrecoProduto(transNumber($('#price-p').html()), transNumber($(this).find('option:selected').attr('data-price')), aroFemininoSelecionado);
    //             aroFemininoSelecionado = transNumber($(this).find('option:selected').attr('data-price'));
	   //       } else {
	   //         alterarPrecoProduto(transNumber($('#price-p').html()), 0, aroFemininoSelecionado);
	   //         aroFemininoSelecionado = 0;
	   //       }
	   //     } else if($(this).find('option:selected').is('[class^="option-pedras"]') || $(this).find('option:selected').is('[class^="option-grupo-pedra"]') || $(this).find('option:selected').is('[class^="option-diamante"]')) {
	   //       if($(this).find('option:selected').attr('data-price') != undefined) {
	   //         alterarPrecoProduto(transNumber($('#price-p').html()), transNumber($(this).find('option:selected').attr('data-price')), tipoDePedraSelecionada);
    //             tipoDePedraSelecionada = transNumber($(this).find('option:selected').attr('data-price'));
	   //       } else {
	   //         alterarPrecoProduto(transNumber($('#price-p').html()), 0, tipoDePedraSelecionada);
	   //         tipoDePedraSelecionada = 0;
	   //       }
	   //     } else if($(this).find('option:selected').hasClass('option-conforto-interno')) {
	   //       if($(this).find('option:selected').attr('data-price') != undefined) {
	   //         alterarPrecoProduto(transNumber($('#price-p').html()), transNumber($(this).find('option:selected').attr('data-price')), confortoInternoSelecionado);
    //             confortoInternoSelecionado = transNumber($(this).find('option:selected').attr('data-price'));
	   //       } else {
	   //         alterarPrecoProduto(transNumber($('#price-p').html()), 0, confortoInternoSelecionado);
	   //         confortoInternoSelecionado = 0;
	   //       }
	   //     } else if($(this).find('option:selected').is('[class^="option-largura"]')) {
	   //       if($(this).find('option:selected').attr('data-price') != undefined) {
	   //         alterarPrecoProduto(transNumber($('#price-p').html()), transNumber($(this).find('option:selected').attr('data-price')), larguraSelecionada);
    //             larguraSelecionada = transNumber($(this).find('option:selected').attr('data-price'));
	          
	   //           console.log('preco alterado da largura');
	   //       } else {
	   //         alterarPrecoProduto(transNumber($('#price-p').html()), 0, larguraSelecionada);
	   //         larguraSelecionada = 0;
	   //       }
	   //     }else if($(this).find('option:selected').is('[class^="option-conforto"]')) {
	   //       if($(this).find('option:selected').attr('data-price') != undefined) {
	   //         alterarPrecoProduto(transNumber($('#price-p').html()), transNumber($(this).find('option:selected').attr('data-price')), confortoInternoSelecionado);
    //           confortoInternoSelecionado = transNumber($(this).find('option:selected').attr('data-price'));
	   //       } else {
	   //         alterarPrecoProduto(transNumber($('#price-p').html()), 0, confortoInternoSelecionado);
	   //         confortoInternoSelecionado = 0;
	   //       }
	   //     } else if($(this).find('option:selected').is('[class^="select-largura"]')) {
	   //       if($(this).find('option:selected').attr('data-price') != undefined) {
	   //         alterarPrecoProduto(transNumber($('#price-p').html()), transNumber($(this).find('option:selected').attr('data-price')), larguraSelecionada);
    //           larguraSelecionada = transNumber($(this).find('option:selected').attr('data-price'));
	   //       } else {
	   //         alterarPrecoProduto(transNumber($('#price-p').html()), 0, larguraSelecionada);
	   //         larguraSelecionada = 0;
	   //       }
	   //     }

	        
	        
    //     });
    // });
    
    var qntSelectsTotal = 0;
    $('.select-personalizar-produto').each(function(){
        qntSelectsTotal = qntSelectsTotal + 1;
    });
    
    if($('#saiba-mais-pedra').length > 0) {
        var saibaMais = $('#saiba-mais-pedra');
        var select = saibaMais.parent().find('select');
        var buttons = saibaMais.parent().find('button');
        if(select.length > 0) {
            saibaMais.parent().find('select').each(function(){
                if($(this).is('[id^="select-pedra"]')) {
                    $(this).find('option:eq(1)').prop('selected', 'selected');
                    $(this).trigger('change');
                }
            });
        } else if(buttons.length > 0) {
            buttons.first().click();
        }       
    }
    
    var qntComponentes = $('.div-pai-personalizar.div-pai-com-buttons').length + qntSelectsTotal;
    var qntComponentesPreenchidos = 0;
    var arrayPersonalizacoes = [];
    
    var modalFicouFaltando = $('.ficouFaltando');
    
    
    function ficouFaltando(divPai) {
        var div = divPai.find('.div-personalizar-produto');
        var btn = divPai.find('.btn-personalizar-produto');
        
        div.removeClass('hide');
        div.css('border-bottom', 'none');
        btn.find('img').attr('src', '{{ path("icon-minus-product.png") }}');
        btn.css('border-color', 'transparent');
        
        divPai.addClass('ficou-faltando');
    }
    
    var btnComprar = $('#btn-comprar');
    
    btnComprar.on('click', function(e){
        e.preventDefault();
        qntComponentesPreenchidos = 0;
        arrayPersonalizacoes = [];
        $('.div-pai-personalizar').each(function(){
            if($(this).hasClass('div-pai-com-buttons')) {
                if($(this).find('button.active').length == 0) {
                    ficouFaltando($(this));
                    
                    console.log('faltou button');
                } else {
                    var btnAtivo = $(this).find('button.active');
                    var idBtnAtivo = Number(btnAtivo.attr('data-id'));
                    var idGroupBtnAtivo = Number(btnAtivo.attr('data-group'));
                    qntComponentesPreenchidos++;
                    
                    arrayPersonalizacoes.push( { componentization_group_id: idGroupBtnAtivo, component_id: idBtnAtivo, quantity: 1 } );
                }
            } else if($(this).hasClass('div-pai-com-options')) {
                var qntSelects = $(this).find('select').length;
                if($(this).find('select.select-active').length != qntSelects) {
                    ficouFaltando($(this));
                    
                    console.log('faltou select');
                } else {
                    qntComponentesPreenchidos = qntComponentesPreenchidos + qntSelects;
                    $(this).find('select.select-active').each(function(){
                        var optionAtiva = $(this).find('option:selected');
                        var idOptionAtiva = Number(optionAtiva.attr('data-id'));
                        var idGroupOptionAtiva = Number(optionAtiva.attr('data-group'));
                        
                        arrayPersonalizacoes.push( { componentization_group_id: idGroupOptionAtiva, component_id: idOptionAtiva, quantity: 1 } );
                    });
                }
            }
        });
        if(qntComponentesPreenchidos == qntComponentes) {
            console.log('bora comprar');
            console.log(arrayPersonalizacoes);
            
            var arrayGravacoes = [];
            
            if($('#input-gravacao-feminina').length > 0) {
                if($('#input-gravacao-feminina').val() != '') arrayGravacoes.push( { slug: 'gravacao_feminina', value: $('#input-gravacao-feminina').val() } );
            }
            if($('#input-gravacao-masculina').length > 0) {
                if($('#input-gravacao-masculina').val() != '') arrayGravacoes.push( { slug: 'gravacao_masculina', value: $('#input-gravacao-masculina').val() } );
            }
            if($('#input-gravacao-single').length > 0) {
                if($('#input-gravacao-single').val() != '') arrayGravacoes.push( { slug: 'gravacao_single', value: $('#input-gravacao-single').val() } );
            }
            
            // Armazenar o array na local storage
            
            var arrayGravacoes1 = [];
            
            $('#div-personalizar-produto select').each(function() {
                const selectedValue = $(this).val();
                const cleanedValue = selectedValue.replace(/\s\+\sR\$\s\d{1,3}(?:\.\d{3})*,\d{2}/, '');
                arrayGravacoes1.push(cleanedValue);
            });
            
            // var combinedArray = arrayGravacoes1.concat(arrayGravacoes);
            // console.log("Combined Array: ", combinedArray);
            
            // var btnComprar1 = $('#btn-comprar');
            // var dataId = btnComprar1.attr('data-id') || 'default-id';
            // // localStorage.setItem('arrayGravacoes-' + dataId, JSON.stringify(arrayGravacoes));
            //  localStorage.setItem('arrayGravacoes-' + dataId, JSON.stringify(combinedArray));
            
            var combinedArray = arrayGravacoes1.concat(arrayGravacoes);
console.log("Combined Array: ", combinedArray);

var btnComprar1 = $('#btn-comprar');
var dataId = btnComprar1.attr('data-id') || 'default-id';
var baseKey = 'arrayGravacoes-' + dataId;

// Array de sufixos
var sufixos = ['primeiro', 'segundo', 'terceiro', 'quarto', 'quinto', 'sexto', 'sétimo', 'oitavo', 'nono', 'décimo'];

function getUniqueKey(baseKey) {
    if (!localStorage.getItem(baseKey)) {
        return baseKey;
    }
    
    for (var i = 0; i < sufixos.length; i++) {
        var newKey = baseKey + '-' + sufixos[i];
        if (!localStorage.getItem(newKey)) {
            return newKey;
        }
    }
    
    // Se chegarmos aqui, significa que todos os sufixos estão em uso
    throw new Error('Todas as chaves possíveis estão em uso no localStorage.');
}

try {
    var uniqueKey = getUniqueKey(baseKey);
    localStorage.setItem(uniqueKey, JSON.stringify(combinedArray));
    console.log("Data saved with key: ", uniqueKey);
} catch (error) {
    console.error(error.message);
}

            
            
            
            let url = window.location.origin + '/checkout/cart/item/add/' + btnComprar.attr('data-id') + '?quantity=1';
            
            if(arrayGravacoes.length > 0) {
                $.get(url, 
                    { components: arrayPersonalizacoes, extra_fields: arrayGravacoes }
                ).done(function() {
                    iziToast.success({
                        title: 'Produto adicionado!',
                        timeout: 3000
                    })
                    
                    // CanopusEventCenter.emitEvent('CheckoutCartPreview.build');
                    //  CanopusEventCenter.addListener('Checkout.Preview.Building', function(e) { e.preventDefault() })
                         setTimeout(() =>{
                         $('header .aside-box  .item.bag ').trigger('click');
                    },1000)
                    // window.location = window.location.origin + '/checkout'
              
                }).fail((err) => {
                    if( err ) {
                        iziToast.error({
                            title: 'Ocorreu um erro ao adicionar o produto',
                            timeout: 3000
                        })
                    }
                })
            } else {
                $.get(url, 
                    { components: arrayPersonalizacoes }
                ).done(function() {
                    iziToast.success({
                        title: 'Produto adicionado!',
                        timeout: 3000
                    })
                    setTimeout(() =>{
                         $('header .aside-box .item.bag').trigger('click');
                    },1000)
                    //  CanopusEventCenter.addListener('Checkout.Preview.Building', function(e) { e.preventDefault() })
                    // CanopusEventCenter.emitEvent('CheckoutCartPreview.build');
                    // window.location = window.location.origin + '/checkout'
              
                }).fail((err) => {
                    if( err ) {
                        iziToast.error({
                            title: 'Ocorreu um erro ao adicionar o produto',
                            timeout: 3000
                        })
                    }
                })
            }
        } else {
            modalFicouFaltando.addClass('active');
        }
    });
    
    
    
    if($('#texto-alert').length > 0) {
        var divAlert = $('#texto-alert');
        var tamanho = Number(divAlert.attr('tamanho'));
        var textoAlert = divAlert.html();
        var regexValAro = new RegExp('[0-9]+$');
        var totalAros = 0;
        var numeroAroFem = 0;
        var numeroAroMasc= 0;
        
        var modalTamanho = $('#modalTamanho');
        
        $('select').each(function(){
            if($(this).hasClass('aro-feminino')) {
                $(this).on('change', function(){
                    numeroAroFem = Number($(this).val().match(regexValAro)[0]);
                    totalAros = numeroAroFem + numeroAroMasc;
                    if(totalAros >= tamanho) {
                        modalTamanho.addClass('active');
                    }
                });
            } else if($(this).hasClass('aro-masculino')) {
                $(this).on('change', function(){
                    numeroAroMasc = Number($(this).val().match(regexValAro)[0]);
                    totalAros = numeroAroFem + numeroAroMasc;
                    if(totalAros >= tamanho) {
                        modalTamanho.addClass('active');
                    }
                });
            }
        });
    }
    
    
    var modalSaibaMais = $('#modalSaibaMais');
    
    $('.div-saiba-mais').on('click', function(){
        modalSaibaMais.find('.modal-body').html($(this).find('.texto-saiba-mais').text());
        modalSaibaMais.modal('show');
    })
    
    
    var arrayPerguntas = [];
    $('.div-pergunta').each(function(){
        arrayPerguntas.push($(this).attr('id'));
        $(this).on('click', function(){
            var numeroPergunta = $(this).attr('id').replace('pergunta-', '');
            var perguntaCorrespondente = $('#resposta-'+numeroPergunta);
            perguntaCorrespondente.toggleClass('hide');
            if(perguntaCorrespondente.hasClass('hide')) {
                $(this).find('img').attr('src', 'https://assets.betalabs.net/production/reisman/fonts/stores/1/icon-plus-faq.svg');
                perguntaCorrespondente.css('border-bottom', 'none');
                $(this).css('border-bottom', '1px solid #dededf');
            } else {
                $(this).find('img').attr('src', 'https://assets.betalabs.net/production/reisman/fonts/stores/1/icon-minus-faq.svg');
                perguntaCorrespondente.css('border-bottom', '1px solid #dededf');
                $(this).css('border-bottom', 'none');
            }
        });
    });
    
    var divPerguntas = $('#div-perguntas');
    var filhas = divPerguntas.children();
    filhas.addClass('hide');
    
    setTimeout(function(){
        for(var w = 0; w < 4; w++) {
            $('#'+arrayPerguntas[w]).parent().removeClass('hide');
        }
    }, 300);
</script>
@endpush
@push('scripts')
<script src="{{ script('produto.js') }}" defer></script>
@endpush

@endsection