@extends(engine_view('base'))
@section('conteudo')
@section('title', 'Fabricação')

@push('styles')
    <link rel="stylesheet" href="{{ stylesheet('style-antigo.css') }}">
@endpush
<section class="fabricacao">
    <div class="container">
        <div class="col-md-12 text-center mx-auto">
            <h1 style="font-size: 20px;color: #000;margin-top: 20px;">Processo de Fabricação Reisman</h1>
            <h2>alta tecnologia e profissionais renomados</h2>
            <div class="fab-img">
                <img src="{{ path('banca.png') }}" alt="" class="img-fluid">
                <p>HANDMADE<br> e muito amor</p>
            </div>

            <div class="row mt-5 relative" id="double">
                <div class="col-md-8">
                    <img src="{{ path('fogo.png') }}" alt="" class="img-fluid">
                </div>
                <div class="ml-auto col-md-10 por-cima">
                    <div class="text-por-cima relative">
                        <img src="{{ path('diamante.png') }}" alt="" class="img-fluid">
                        <p>Materias-Primas<br>Qualidade Premium</p>
                    </div>
                </div>
            </div>
            <div class="equipe relative">
                <img class="img-fluid" src="{{ path('cravador.png') }}" alt="">
                <p>Equipe Altamente<br>Renomada</p>
            </div>
            <div class="relative maq col-md-10">
                <img class="img-fluid" src="{{ path('torno.png') }}" alt="">
                <p>Maquinario com<br> Tecnologia de Ponta</p>
            </div>
            <div class="row justify-content-center mt-5 control">
                <div class="col-md-6">
                    <p>Controle de Qualidade e vistoria minuciosa em todas as joias.</p>
                </div>
                <div class="col-md-5">
                    <img src="{{ path('vistoria.png') }}" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</section>
<section class="insta py-5">
    <div class="container">
        <a href="instagram.com/reisman_aliancas" target="_blank">@Reisman_aliancas</a>
        <h2>Siga-nos no Instagram</h2>
        <img src="{{ path('instagram.png') }}" alt="" class="img-fluid">
        <a href="instagram.com/reisman_aliancas" target="_blank" class="insta-btn">instagram shop</a>
    </div>
</section>
@endsection
