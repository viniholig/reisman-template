@extends(engine_view('base'))
@section('conteudo')
@section('title', 'Onde Comprar')

@push('styles')
    <link rel="stylesheet" href="{{ stylesheet('style-antigo.css') }}">
@endpush
<section class="interna">
    <div class="container">
        <div class="row">
            <div class="col-md-5 col-12">
                <img src="{{ path('show.png') }}" alt="" class="img-fluid">
            </div>
            <div class="col-md-6 show">
                <h4>Showroom Reisman São Paulo, Higienópolis</h4>
                <p>Rua Dona Antônia de Queirós, 549 - cnj 1112</p>
                <p>Clássic Office Higienópolis</p>
                <p>São Paulo</p>
                <p class="telefones">TELEFONES <span>(11)3567-0617</span> <span>(11)3582-0617</span></p>
                <h4>Horário de Atendimento</h4>
                <p>Segunda a Sexta: 11h15 as 19h</p>
                <p>Sábados: 09h as 13h</p>
                <a href="#form" class="agende">AGENDE SUA VISITA</a>
                <div class="row mt-5">
                    <div class="col-xl-6 text-center">
                        <img class="" src="{{ path('estacionamento.png') }}" alt="">
                        <p>Estacionamento tercerizado <br>com manobrista</p>
                    </div>
                    <div class="col-xl-6 text-center">
                        <img class="img-fluid" src="{{ path('waze.png') }}" alt="">
                        <p>No Waze, procure<br> por Reisman</p>
                    </div>
                    <div class="col-xl-6 text-center">
                        <img class="img-fluid" src="{{ path('local.png') }}" alt="">
                        <p>Próximo a universidade<br> Mackenzie</p>
                    </div>
                    <div class="col-xl-6 text-center">
                        <img src="{{ path('metro.png') }}" alt="" class="img-fluid">
                        <p>A 200 m da estação<br> Higienópolis</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-9" id="form">
                <h4 class="mt-5">AGENDAMENTO DE VISITA - SHOWROOM SP</h4>
                <form method="POST" class="form-show" onsubmit="return submitUserForm();">
                    <input type="text" placeholder="Nome" required>
                    <input type="email" placeholder="Email" required>
                    <input type="phone" placeholder="Telefone" required>
                    <input placeholder="Joia de interesse" required>
                    <input type="date" name="" id="" required>
                    <select name="" id="" required>
                        <option value="">Horario</option>
                        <option value="12:00">12:00</option>
                    </select>
                    <textarea placeholder="Mensagem" name="" id="" cols="30" rows="10" required></textarea>
                    <div class="g-recaptcha" data-sitekey="6LcmyqoUAAAAAFQBpyxP9MkSkHCnswdbr7L85Y5u"
                        data-callback="verifyCaptcha"></div>
                    <div id="g-recaptcha-error"></div>
                    <button type="submit">enviar solicitação de agendamento</button>
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
