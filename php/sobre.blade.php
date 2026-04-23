@extends(engine_view('base'))
@section('conteudo')
@section('title', 'Sobre')

@push('styles')
    <link rel="stylesheet" href="{{ stylesheet('style-antigo.css') }}">
@endpush
<section class="sobre">
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-md-10 col-12">
                <h3>Sobre</h3>
                <p>
                    Reisman é uma joalheria familiar, diferente de qualquer outra. Iniciamos o nosso trabalho no ano de
                    1967 em São Paulo, acreditando que os clientes devem ser tratados como familiares. Buscamos
                    relacionamentos além da venda e está é a filosofia central do trabalho de toda a quipe. Adoramos ter
                    a oportunidade de celebrar os momentos mais preciosos da vida de nossos clientes, oferecendo joias
                    únicas e de alta qualidade, que carregarão um lindo símbolo de amor, afeto e muito carinho.
                </p>
                <div class="row">
                    <div class="col-md-3">
                        <img src="{{ path('fundador.png') }}" alt="" class="img-fluid">
                    </div>
                    <div class="col-md-8">
                        <img src="{{ path('reisman.png') }}" alt="" class="img-fluid">
                    </div>
                </div>
                <h3>Nossa especialidade</h3>
                <p>Somos especialistas na criação e fabricação de joias finas, que são produzidas em uma mescla de alta
                    tecnologia e um lindo trabalho artesanal, desenvolvido por nossa equipe altamente qualificada e de
                    renome no setor. Temos como nosso objetivo central encantar nossos clientes, oferecendo uma
                    experiència agradável e diferenciada, seja ao comprar online de qualquer lugar do Brasil, ou mesmo
                    diretamente em nosso showroom de fábrica em São Paulo</p>
                <div class="row">
                    <div class="col-md-5">
                        <a href="fabricacao.php" class="img-text">
                            <img src="{{ path('torno.png') }}" alt="" class="img-fluid">
                            <p>Saiba como<br> fabricamos sua joia</p>
                        </a>
                    </div>
                    <div class="col-md-6">
                        <a href="fabricacao.php" class="img-text">
                            <img src="{{ path('fabricacao.png') }}" alt="" class="img-fluid">
                            <p>Conheça nosso<br> processo de fabricação</p>
                        </a>
                    </div>
                </div>
                <h3 class="mt-5">nossa loja fisica e online</h3>
                <p>Localizada no coração de São Paulo, no tradicional bairro Higienópolis, oferecemos um tranquilo e
                    aconchegante espaço para que nossos clientes possam conhecer nossas coleções de anéis de noivado,
                    alianças de casamento e joias finas. COntamos com vendedores comprometidos em oferecer a melhor
                    opção de acordo com as preferencias do cliente, por meio de um atendimento único e muito especial
                </p>
                <p>Oferecemos também toda a experiência da loja física, também online, por meio de nosso site. De
                    qualquer lugar do Brasil, é possivel conferir nossos modelos e falar diretamente com um de nossos
                    especialistas. Possuimos pagamentos facilitados via cartão de crédito e também o pagamento à vista
                    via boleto bancário, com desconto de 10%</p>
                <p>Por segurança, todas as joias são enviadas exclusivamente via Correios com seguro da joia. Nós
                    assumimos todos os custos deste seguro, de forma a garantir total segurança desde o início da
                    compra, até o recebimento da joia</p>
                <div class="row justify-content-center">
                    <div class="col-md-4">
                        <a href="" class="img-text">
                            <img class="img-fluid" src="https://via.placeholder.com/300" alt="">
                            <p>Entre em Contato</p>
                        </a>

                    </div>
                    <div class="col-md-4">
                        <a href="" class="img-text">
                            <img class="img-fluid" src="https://via.placeholder.com/300" alt="">
                            <p>Conheça nossa loja</p>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="" class="img-text">
                            <img class="img-fluid" src="https://via.placeholder.com/300" alt="">
                            <p>Marque sua visita</p>
                        </a>
                    </div>
                </div>
                <h3>histórias de amor</h3>
                <p>Não se encontra o amor de sua vida todos os dias. Não se compra joias todos os dias. Momentos
                    especiais demandam um presente especial, algo que o marque para sempre aquele momento lindo e
                    precioso vivido. E para a linda missão de fabricar e participar com joias únicas, é que nós
                    existimos. Desde 1967 até hoje muita coisa mudou, menos o nosso desejo de fazer parte e simbolizar
                    lindas histórias.
                </p>
                <p class="mb-5">Convidamos a você a fazer parte da nossa história também.</p>
                <div class="row mt-5 py-3">
                    <div class="col-md-4">
                        <img src="{{ path('insta1.png') }}" alt="" class="img-fluid">
                    </div>
                    <div class="col-md-4">
                        <img src="{{ path('insta2.png') }}" alt="" class="img-fluid">
                    </div>
                    <div class="col-md-4">
                        <img src="{{ path('insta3.png') }}" alt="" class="img-fluid">
                    </div>
                </div>
                <a href="" class="btn-historias">Confira mais historias</a>
            </div>
        </div>
    </div>
</section>



@endsection
