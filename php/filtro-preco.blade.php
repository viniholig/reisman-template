<div class="price-slider-wrapper">
    <div class="example">
        <div id="nonlinear"></div>
        <br>
        <div class="box-price-range">
            <p>Preço: R$
                <span class="example-val" id="lower-value">
                    {{ number_format($priceMin, 2, ',', '.') }}
                </span>
                <input type="text" class="hide example-val" canopus-showcase-infinite-scroll-price-min />
                - R$
                <span class="example-val" id="upper-value">
                    {{ number_format($priceMax, 2, ',', '.') }}
                </span>
                <input type="text" class="hide example-val" canopus-showcase-infinite-scroll-price-max />
            </p>
        </div>
        <div>
            <button class="filtrar preco">Filtrar</button>
        </div>
        @push('afterPageScripts')
            <script src="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/12.0.0/nouislider.min.js"></script>
            <script>
                $(document).ready(function() {
                    var nonLinearSlider = document.getElementById('nonlinear');
                    noUiSlider.create(nonLinearSlider, {
                        connect: true,
                        behaviour: 'tap',
                        start: [{{ $priceMin }}, {{ $priceMax }}],
                        range: {
                            //
                            'min': [{{ $priceMin }}],
                            'max': [{{ $priceMax }}]
                        }
                    });

                    var nodes = [
                        document.getElementById('lower-value'), // 0
                        document.getElementById('upper-value') // 1
                    ];

                    nonLinearSlider.noUiSlider.on('update', function(values, handle, unencoded, isTap, positions) {
                        var parent = nodes[handle].parentElement;
                        $(parent).find('input').val(values[handle]);
                        nodes[handle].innerHTML = values[handle];
                    });

                    $('.filtrar.preco').on('click', function(e) {
                        e.preventDefault();
                        var doc = document.location;
                        var min = parseFloat($('#lower-value').text());
                        var max = parseFloat($('#upper-value').text());

                        let url = doc.origin + doc.pathname + "?price-min=" + min + "&price-max=" + max;
                        document.location = url;
                    });
                })
            </script>
        @endpush
    </div>
</div>
