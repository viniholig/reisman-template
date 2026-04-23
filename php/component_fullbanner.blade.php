@desktop
    @foreach ($fullbanners->records as $home_fullbanners)
        @if ($home_fullbanners->exibir_video_fullbanners->values->first()->extraFieldOption->label == 'sim')
            <div class=" home-video">
                <div class="banner-top-home-sozinho-desktop home-video-main horizontal">
                    <a href='{{ $home_fullbanners->url_fullbanners->values->first()->value }}'>
                        <video width="100%" height="100%" autoplay loop muted playsinline>
                            <source src="https://assets.betalabs.net/production/reisman/videos/stores/1/may25banner.mp4"
                                type="video/mp4">
                        </video>
                    </a>
                    <div class="context-text">
                        <span
                            style="letter-spacing: 10px;">{{ $home_fullbanners->titulo_fullbanners->values->first()->value }}</span>
                        <small>{{ $home_fullbanners->texto_fullbanners->values->first()->value }}</small>
                    </div>
                </div>
            </div>
        @else
            <div class="fullbanner">
                <a href="{{ $home_fullbanners->url_fullbanners->values->first()->value }}">
                    <figure class="images -square">
                        <img src="{{ $home_fullbanners->imagem_desktop_fullbanners->values->first()->source }}"
                            alt="{{ $home_fullbanners->alt_fullbanners->values->first()->value }}"
                            title=" {{ $home_fullbanners->title_fullbanners->values->first()->value }}">
                    </figure>
                </a>
                <div class="context-text">
                    <span
                        style="letter-spacing: 10px;">{{ $home_fullbanners->titulo_fullbanners->values->first()->value }}</span>
                    <small>{{ $home_fullbanners->texto_fullbanners->values->first()->value }}</small>
                </div>
            </div>
        @endif
    @endforeach
@elsedesktop
    @foreach ($fullbanners->records as $home_fullbanners)
        @if ($home_fullbanners->exibir_video_fullbanners->values->first()->extraFieldOption->label == 'sim')
            <div class="home-video vertical">
                <div class=" home-video-main">
                    <a href='/aneis-de-noivado'>
                        <video width="100%" height="100%" autoplay loop muted playsinline>
                            <source src="https://assets.betalabs.net/production/reisman/videos/stores/1/may25banner.mp4"
                                type="video/mp4">
                        </video>
                    </a>
                    <div class="context-text">
                        <span
                            style="letter-spacing: 10px;">{{ $home_fullbanners->titulo_fullbanners->values->first()->value }}</span>
                        <small>{{ $home_fullbanners->texto_fullbanners->values->first()->value }}</small>
                    </div>
                </div>
            </div>
        @else
            <div class="fullbanner">
                <a href="{{ $home_fullbanners->url_fullbanners->values->first()->value }}">
                    <figure class="images -square">
                        <img src="{{ $home_fullbanners->imagem_mobile_fullbanners->values->first()->source }}"
                            alt="{{ $home_fullbanners->alt_fullbanners->values->first()->value }}"
                            title=" {{ $home_fullbanners->title_fullbanners->values->first()->value }}">
                    </figure>
                </a>
                <div class="context-text">
                    <span
                        style="letter-spacing: 10px;">{{ $home_fullbanners->titulo_fullbanners->values->first()->value }}</span>
                    <small>{{ $home_fullbanners->texto_fullbanners->values->first()->value }}</small>
                </div>
            </div>
        @endif
    @endforeach
@enddesktop
