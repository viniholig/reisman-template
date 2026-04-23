    <div class="logo">
        <a href="/">
            @if (starts_with(request()->path(), '/'))
                <img src="{{ path('logo-novo-branco.svg') }}" width="130px" height="25px"
                    alt="Logo Reisman Alianças e Joias">
            @else
                <img src="{{ path('logo-novo-branco.svg') }}" width="130px" height="25px"
                    alt="Logo Reisman Alianças e Joias">
            @endif
        </a>
    </div>
