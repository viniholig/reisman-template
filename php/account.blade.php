@extends(engine_view('base-novo'))
@section('conteudo')
    <div id="div-title-minhaconta">
        <div class="center text-center">
            <div id="title-minhaconta">
                Informações da conta
            </div>
            <div id="subtitle-minhaconta">
                home / minha conta / informações da conta
            </div>
        </div>
    </div>

    <div class="center">
        @accountHeader()
        @accountBody()
    </div>



    @push('scripts')
        <script>
            $(document).ready(function() {
                $('link[rel="stylesheet"]').each(function() {
                    if (this.href === "https://checkout.betalabs.net/assets/css/bootstrap/bootstrap.min.css") {
                        $(this).remove();
                    }
                });
            });
        </script>

        <script>
            var link = $('a');
            var url = window.location.pathname;
            link.each(function() {
                if ($(this).attr('href') === url) {
                    $(this).addClass('active');
                }
            });
            var myFunc01 = function() {
                var intr = setInterval(function() {
                    /*
                    $('#list-gr-item-cards').after('<li class="list-group-item" id="list-gr-item-logout">'+
                        '<a href="javascript:;" canopus-logout>'+
                          '<span class="ml-sm">'+
                            'Sair'+
                          '</span>'+
                        '</a>'+
                    '</li>');
                    */

                    var link = $('a');
                    var url = window.location.pathname;
                    link.each(function() {
                        if ($(this).attr('href') === url) {
                            $(this).addClass('active');
                        }
                    });
                    if (url === '/account/subscriptions') {
                        $('#title-minhaconta').html('Minhas assinaturas');
                        $('#subtitle-minhaconta').html('home / minha conta / minhas assinaturas');
                    } else if (url === '/account/orders') {
                        $('#title-minhaconta').html('Meus pedidos');
                        $('#subtitle-minhaconta').html('home / minha conta / meus pedidos');
                    } else if (url === '/account/cards') {
                        $('#title-minhaconta').html('Meus cartões');
                        $('#subtitle-minhaconta').html('home / minha conta / meus cartões');
                    }

                    clearInterval(intr);
                }, 500)
            }

            myFunc01();
        </script>
    @endpush
@endsection
