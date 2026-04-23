@extends(engine_view('base'))
@section('conteudo')
@section('title', $pagina->model->description)
@section('metadescription', $pagina->model->description)

@push('styles')
    <link rel="stylesheet" href="{{ stylesheet('style-antigo.css') }}">
@endpush
@if (starts_with(request()->path(), 'garantia'))
    <style>
        #conteudo-pagina-institucional .row p:last-of-type {
            margin-top: 40px;
        }

        #form-contato {
            margin-top: -55px;
        }
    </style>
@endif



@if (!starts_with(request()->path(), 'fabricacao'))
    <div id="title-institucional" class="text-center font-serif">
        <h1 style="font-size: 30px;">{{ $pagina->model->description }}</h1>
    </div>
@endif
@if (starts_with(request()->path(), 'insta-shop'))
    <script src='https://snapppt.com/widgets/widget_loader/ad989e76-889f-4067-a793-727bb1699d1d/grid.js' defer
        class='snapppt-widget'></script>
@else
    <div id="pagina-institucional-content" style="margin-top: 0px">
        @if (starts_with(request()->path(), 'loja-em-sao-paulo'))
            <div class="col-lg-85 offset-lg-2 col-sm-12">
            @else
                <div class="col-sm-12" style="max-width: 1268px; margin: auto">
        @endif
        <div id="content-institucional">
            <div id="conteudo-pagina-institucional">
                {!! $pagina->model->content !!}
            </div>
            @if (starts_with(request()->path(), 'contato') ||
                    starts_with(request()->path(), 'garantia') ||
                    starts_with(request()->path(), 'suporte') ||
                    starts_with(request()->path(), 'trabalhe-conosco'))
                <form id="form-contato" action="#" method="POST" onsubmit="return submitUserForm();">
                    <input type="text" class="form-control" name="nome" id="nome" placeholder="Seu nome"
                        required>
                    <input type="email" class="form-control" name="email" id="email" placeholder="Seu e-mail"
                        required>
                    <input type="phone" class="form-control" name="telephone" id="telephone"
                        placeholder="Seu telefone" required>
                    @if (starts_with(request()->path(), 'contato'))
                        <input type="text" class="form-control hide" name="assunto" id="assunto"
                            value="Fale Conosco">
                    @elseif(starts_with(request()->path(), 'garantia'))
                        <input type="text" class="form-control hide" name="assunto" id="assunto" value="Garantia">
                    @elseif(starts_with(request()->path(), 'suporte'))
                        <input type="text" class="form-control hide" name="assunto" id="assunto" value="Suporte">
                    @elseif(starts_with(request()->path(), 'trabalhe-conosco'))
                        <input type="text" class="form-control hide" name="assunto" id="assunto"
                            value="Trabalhe Conosco">
                    @endif
                    <textarea id="form-textarea" class="form-control" name="mensagem" id="mensagem" rows="8"
                        placeholder="Sua mensagem" required></textarea>
                    <div class="text-center test">
                        <div class="g-recaptcha" data-sitekey="6Leayb8qAAAAAFRsWsfcgqUCpijwf64723o4OA-N"></div>

                        <div id="g-recaptcha-error"></div>
                    </div>
                    <button type="submit" class="btn btn-enviar-mensagem">Enviar mensagem</button>
                </form>
            @elseif(starts_with(request()->path(), 'depoimentos'))
                @if ($pagdepoimentos->records->count() > 0)
                    <div id="pagina-depoimento" class="container text-center">
                        <div class="row">
                            @foreach ($pagdepoimentos->records->sortBy(function ($depoimento) {
        if ($depoimento->ordem_depoimento !== null) {
            return $depoimento->ordem_depoimento->values[0]->value;
        }
    }) as $depoimento)
                                @include(@engine_view('div-depoimentos'))
                            @endforeach
                        </div>
                    </div>
                @endif
            @elseif(starts_with(request()->path(), 'marque-seu-atendimento'))
                <div class="div-form">
                    <form id="form-agendamento" enctype="multipart/form-data" name="form-agendamento">
                        <input type="text" class="form-control" name="nome_agendamento" placeholder="Seu nome"
                            id="nome" required>
                        <input type="email" class="form-control" name="e_mail_agendamento" placeholder="Seu e-mail"
                            id="email" required>
                        <input type="phone" class="form-control" name="telefone_agendamento"
                            placeholder="Seu telefone" id="phone" required>
                        <input type="text" class="form-control" name="joia_de_interesse_agendamento"
                            placeholder="Joia de interesse" id="joia" required>
                        <input type="text" class="form-control" name="data_agendamento" placeholder="Data"
                            id="data" required>
                        @if ($horariosdeagendamento->records->count() > 0)
                            <select class="form-control" name="horario_agendamento" id="horario" required>
                                <option value="" hidden="true" default="true">Horário</option>
                                @foreach ($horariosdeagendamento->records as $horario)
                                    @if ($horario->horario_de_agendamento != null)
                                        <option
                                            value="{{ $horario->horario_de_agendamento->values->first->value->value }}">
                                            {{ $horario->horario_de_agendamento->values->first->value->value }}</option>
                                    @endif
                                @endforeach
                            </select>
                        @endif
                        <textarea class="form-control" name="observacao_agendamento" id="observacao" rows="8"
                            placeholder="Observação (opcional)"></textarea>
                        <button type="submit" class="btn btn-enviar-mensagem">Enviar solicitação de
                            agendamento</button>
                    </form>
                    <div class="text-center teste">
                        <div class="g-recaptcha" data-sitekey="6Leayb8qAAAAAFRsWsfcgqUCpijwf64723o4OA-N"></div>

                        <div id="g-recaptcha-error"></div>
                    </div>
                </div>
                <style>
                    .div-form {
                        position: relative;
                    }

                    .div-form .text-center {
                        position: absolute;
                        bottom: 70px;
                        right: 0;
                        left: 0;
                    }

                    .btn-enviar-mensagem {
                        margin-top: 115px;
                    }
                </style>
            @endif
            @if (
                !starts_with(request()->path(), 'depoimentos') &&
                    !starts_with(request()->path(), 'fabricacao') &&
                    !starts_with(request()->path(), 'trabalhe-conosco'))
                @if ($depoimentos->records->count() > 0)
                    <div id="pagina-depoimento" class="container text-center">
                        <div class="title">
                            Depoimentos
                        </div>
                        <div class="row">
                            @foreach ($depoimentos->records->sortBy(function ($depoimento) {
        if ($depoimento->ordem_depoimento !== null) {
            return $depoimento->ordem_depoimento->values[0]->value;
        }
    }) as $depoimento)
                                @include(@engine_view('div-depoimentos'))
                            @endforeach
                        </div>
                        <a href="/depoimentos" class="btn btn-ver-mais">Confira mais histórias</a>
                    </div>
                @endif
                <!--
                    <section class="insta py-5">
                        <div class="container">
                            <a href="https://instagram.com/reisman_aliancas" target="_blank">@Reisman_aliancas</a>
                            <h2>Siga-nos no Instagram</h2>
                            <img src="{{ path('instagram.png') }}" alt="" class="img-fluid">
                            <a href="/insta-shop" target="_blank" class="insta-btn">instagram shop</a>
                        </div>
                    </section>
                    -->
            @endif
        </div>
    </div>
    </div>
    </div>
@endif


@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.js"></script>
    <script>
        $('input[type="phone"]').mask('(99) 99999-9999');
    </script>
@endpush

@if (starts_with(request()->path(), 'marque-seu-atendimento'))
    @push('scripts')
        <script>
            $(document).ready(function() {
                $('#data').mask('99/99/9999');
                console.log('novo script 1232222')
                CanopusEventCenter.addListener('ServerDataLoader.Loaded', function(data) {

                    if (typeof data.client !== undefined) {
                        //console.log(data.client)
                        var estaLogado = data.client !== null;
                        if (estaLogado) {
                            $("#form-agendamento :input").prop("disabled", false);
                        } else {
                            $("#form-agendamento :input").prop("disabled", true);
                            iziToast.info({
                                title: 'Aviso',
                                message: 'Para prosseguir é necessario estar logado!',
                                buttons: [
                                    ['<button><b>Criar conta</b></button>', function(instance,
                                        toast) {
                                        IdentificationModal.openModal();
                                        instance.hide({
                                            transitionOut: 'fadeOut'
                                        }, toast, 'button');
                                    }, true],
                                    ['<button>Logar</button>', function(instance, toast) {
                                        IdentificationModal.openModal();
                                        instance.hide({
                                            transitionOut: 'fadeOut'
                                        }, toast, 'button');
                                    }]
                                ],
                                timeout: false
                            });
                        }
                    }

                });

                $('#form-agendamento').on('submit', function(e) {
                    e.preventDefault();
                    var response = grecaptcha.getResponse();
                    console.log(response)
                    if (response.length == 0) {
                        document.getElementById('g-recaptcha-error').innerHTML =
                            '<span style="color:red;">Este campo é obrigatório.</span>';
                        return false;
                    } else {
                        var form = $('#form-agendamento')[0]; // Seleciona o elemento do formulário
                        var info = new FormData(form); // Cria um objeto FormData com o formulário atual

                        $.ajax({
                            'url': '/ecommerce/ve/agendamentos/records/40',
                            'method': 'POST',
                            'data': info,
                            'cache': false,
                            'processData': false,
                            'contentType': false,
                            'headers': {
                                Accept: "application/json",
                                Authorization: 'Bearer ' + OauthService.getToken()
                            },
                            'success': function(info) {
                                iziToast.success({
                                    title: 'Cadastro enviado!',
                                    message: 'Você receberá um retorno em breve, obrigado!'
                                })
                            },
                            'error': function(erro) {
                                iziToast.warning({
                                    title: 'Aviso',
                                    message: 'Erro ao enviar solicitação. Tente novamente mais tarde'
                                });
                            }
                        });
                    }
                });
            });
        </script>
    @endpush
@elseif(starts_with(request()->path(), 'contato') ||
        starts_with(request()->path(), 'garantia') ||
        starts_with(request()->path(), 'suporte') ||
        starts_with(request()->path(), 'trabalhe-conosco'))
    @push('scripts')
        <script>
            var $form = $('#form-contato');

            function submitUserForm() {
                var response = grecaptcha.getResponse();
                console.log(response)
                if (response.length == 0) {
                    document.getElementById('g-recaptcha-error').innerHTML =
                        '<span style="color:red;">Este campo é obrigatório.</span>';
                    return false;
                } else {
                    console.log('enviou')
                    TriggerCostumerMessage.trigger(
                        '',
                        //TriggerCostumerMessage.trigger(subject, name, telephone, email, message)
                        TriggerCostumerMessage.trigger(
                            $form.find('[name="assunto"]').val(),
                            $form.find('[name="nome"]').val(),
                            $form.find('[name="telephone"]').val(),
                            $form.find('[name="email"]').val(),
                            $form.find('[name="mensagem"]').val()
                        )
                    )
                }
                return true;
            }

            function verifyCaptcha() {
                document.getElementById('g-recaptcha-error').innerHTML = '';
            }

            var $form = $('#form-contato');
            $(document).ready(function() {
                //Form contato
                $form.submit(function(e) {
                    e.preventDefault();
                });
            });
        </script>
    @endpush
@endif

@endsection
