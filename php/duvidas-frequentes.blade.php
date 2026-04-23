@extends(engine_view('base'))
@section('conteudo')
@section('title', 'Dúvidas frequentes')
@section('metadescription', 'Dúvidas frequentes da nossa loja - Reisman ')

@push('styles')
    <link rel="stylesheet" href="{{ stylesheet('page-custom.css') }}">
@endpush

@if ($duvidasfrequentesproduto->records->count() > 0)
    <div class="page-custom duvidas-frequentes">

        <div class="banner-page">
            @desktop
                <img src="{{ path('banner-desktop-faq.png') }}"
                    alt="Banner Desktop - Dúvidas frequentes da nossa loja - Reisman ">
            @elsedesktop
                <img src="{{ path('banner-mobile-faq.png') }}"
                    alt="Banner Mobile - Dúvidas frequentes da nossa loja - Reisman ">
            @enddesktop

        </div>

        <section class="faq" itemscope itemtype="https://schema.org/FAQPage">
            @foreach ($duvidasfrequentesproduto->records as $faq)
                @if ($faq->pergunta && $faq->resposta)
                    <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question" class="faq-context">

                        <h2 class="faq-question">
                            <button id="pergunta-{{ $faq->id }}" aria-expanded="false"
                                aria-controls="resposta-{{ $faq->id }}">
                                <span itemprop="name">
                                    {{ $faq->pergunta->values->first->value->value }}
                                </span>

                            </button>
                        </h2>

                        <div id="resposta-{{ $faq->id }}" class="faq-answer" hidden itemscope
                            itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                            <div itemprop="text" class="answer-faq">
                                {!! $faq->resposta->values->first->value->value !!}
                            </div>

                            @if ($faq->imagem_resposta)
                                <div class="div-img-resposta">
                                    <img src="https://assets.betalabs.net/production/reisman/{{ $faq->imagem_resposta->values->first->source->file_path }}"
                                        alt="Ilustração da resposta" loading="lazy">
                                </div>
                            @endif
                        </div>

                    </div>
                @endif
            @endforeach
        </section>

        @include(@engine_view('component_svg'))
    </div>
@endif

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const faqButtons = document.querySelectorAll('.faq-question button');

            faqButtons.forEach(button => {
                button.addEventListener('click', () => {
                    const expanded = button.getAttribute('aria-expanded') === 'true';
                    const answerId = button.getAttribute('aria-controls');
                    const answer = document.getElementById(answerId);
                    const wrapper = button.closest('[itemprop="mainEntity"]');

                    // Fecha todos
                    faqButtons.forEach(btn => {
                        btn.setAttribute('aria-expanded', 'false');

                        const id = btn.getAttribute('aria-controls');
                        const content = document.getElementById(id);
                        if (content) content.hidden = true;

                        const parent = btn.closest('[itemprop="mainEntity"]');
                        if (parent) parent.classList.remove('open');
                    });

                    // Abre o clicado
                    if (!expanded) {
                        button.setAttribute('aria-expanded', 'true');
                        answer.hidden = false;
                        if (wrapper) wrapper.classList.add('open');
                    }
                });
            });
        });
    </script>
@endpush

@endsection
