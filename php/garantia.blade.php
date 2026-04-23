@extends(engine_view('base'))
@section('conteudo')
@section('title', 'Garantia')

@push('styles')
    <link rel="stylesheet" href="{{ stylesheet('style-antigo.css') }}">
@endpush
<section class="interna">
    <div class="container">
        <h2 class="text-center">
            garantia
        </h2>

        <div class="row">
            <div class="col-md-9">
                <p class="first">Uma joia para sempre</p>
                <p>Nossas joias são fabricadas com matérias-primas de alta qualidade e são rigorasamente inspecionadas
                    antes do envio. Tomamos todo o cuidado para que ao receber a sua joia, ela esteja livre de qualquer
                    problema e imperfeição</p>
                <p>Nossa garantia contempla qualquer defeito de fabricação pelo prazo de um ano. Este tempo é mais do
                    que suficiente para que, caso exista qualquer imperfeição na joia, ela se manifeste e seja
                    devidamente corrigida com toda a dedicação.</p>
                <p>Oferecemos também a garantia vitalícia referente a autenticidade das matérias-primas utlizida nas
                    joias, como o ouro 18 K 750 e diamantes naturais</p>
                <h4 class="t-none">Acione o Suporte</h4>
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
        <a href="https://instagram.com/reisman_aliancas" target="_blank" class="insta-btn">instagram shop</a>
    </div>
</section>
@endsection
