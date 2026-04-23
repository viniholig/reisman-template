@extends(engine_view('base'))
@section('conteudo')
@section('title', 'Trabalhe Conosco')

@push('styles')
    <link rel="stylesheet" href="{{ stylesheet('style-antigo.css') }}">
@endpush
<section class="interna">
    <div class="container">
        <h2 class="text-center">
            trabalhe na reisman
        </h2>

        <div class="row">
            <div class="col-md-9">
                <h4>Ourives (1 vaga)</h4>
                <p>Estamos com vagas abertas para ourives em nossa fábrica localizada em São José dos Campos.</p>
                <p>É necessário 5 anos de experiência e referencias.</p>
                <p>Atividades: conserto de joias, confecção de joias, ajustes em geral, acabamento de joias.</p>

                <h4>Cravador (2 vagas)</h4>
                <p>Estamos com vagas abertas para ourives em nossa fábrica localizada em São José dos Campos.</p>
                <p>É necessário 5 anos de experiência e referencias.</p>
                <p>Atividades: conserto de joias, confecção de joias, ajustes em geral, acabamento de joias.</p>

                <form class="form-contato">
                    <input type="text" placeholder="Nome">
                    <input type="email" placeholder="Email">
                    <input type="phone" placeholder="Telefone">
                    <textarea placeholder="Mensagem" name="" id="" cols="30" rows="10"></textarea>
                    <div class="g-recaptcha" data-sitekey="6LcmyqoUAAAAAFQBpyxP9MkSkHCnswdbr7L85Y5u"
                        data-callback="verifyCaptcha"></div>
                    <div id="g-recaptcha-error"></div>
                    <button type="submit">enviar mensagem</button>
                </form>
            </div>
        </div>
    </div>
</section>
<div class="mais-historias">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <img class="img-fluid" src="{{ path('insta1.png') }}" alt="">
            </div>
            <div class="col-md-4">
                <img class="img-fluid" src="{{ path('insta2.png') }}" alt="">
            </div>
            <div class="col-md-4">
                <img class="img-fluid" src="{{ path('insta3.png') }}" alt="">
            </div>
            <a href="" class="mais-historias-btn">CONFIRA MAIS HISTORIAS</a>
        </div>
    </div>
</div>
<section class="insta py-5">
    <div class="container">
        <a href="instagram.com/reisman_aliancas" target="_blank">@Reisman_aliancas</a>
        <h2>Siga-nos no Instagram</h2>
        <img src="{{ path('instagram.png') }}" alt="" class="img-fluid">
        <a href="instagram.com/reisman_aliancas" target="_blank" class="insta-btn">instagram shop</a>
    </div>
</section>
@endsection
