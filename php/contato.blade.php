@extends(engine_view('base'))
@section('conteudo')
@section('title', 'Contato')
<section class="interna">
    <div class="container">
        <h2 class="text-center">
            contate-nos
        </h2>

        <div class="row">
            <div class="col-md-9">
                <h4>apoio e suporte</h4>
                <p>Caso precise acionar nosso suporte para tratar de qualquer assunto referente a sua joia, por
                    gentileza utilize nosso <a href="/suporte">formulário de suporte.</a></p>
                <p>Estamos prontos para auxiliar no que precisar</p>
                <h4 class="mt-4">telefone</h4>
                <p>Ligue para: (11) 3567-0617 ou <a href="https://wa.me/5511959646000" target="_blank">WhatsApp: (11) 9
                        5964-6000</a></p>
                <h4 class="mt-4"> endereço</h4>
                <p>Rua dona Antonia de Queirós, 549 - CNJ 1112 - São Paulo</p>
                <h4>Mensagem via email</h4>
                <p>Preencha os campos abaixo para falar diretamente com nossa equipe via email.</p>
                <form class="form-contato" onsubmit="return submitUserForm();">
                    <input type="text" placeholder="Nome">
                    <input type="email" placeholder="Email">
                    <input type="phone" placeholder="Telefone">
                    <textarea placeholder="Mensagem" name="" id="" cols="30" rows="10"></textarea>
                    <div class="g-recaptcha" data-sitekey="6LdlesQUAAAAAKZwLBGMamzNTTs5nt5lixMRkM8l"
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
