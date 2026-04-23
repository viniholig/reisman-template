<div class="canopus-cart-items px-4">
    <ul>
        @if (null !== $cartPreview->collection)
            @foreach ($cartPreview->collection as $item)
                <li class="row cart-item-row" data-id="{{ $item->id }}" data-type="{{ $item->options->type }}">
                    @if (null !== $item->model->extra_fields)
                        <p>Extra Fields</p>
                    @endif

                    <div class="canopus-cart-item-image col-2">
                        @if (null !== $item->model->images)
                            <img src="{{ thumb($item->model->images->first()->source, 50, 0) }}">
                        @endif



                    </div>
                    <div class="canopus-cart-item-name-qtd col-10">
                        <div class="canopus-cart-item-info row">
                            <h4 class="col-12 pl-0">{{ $item->name }}</h4>
                        </div>
                        <div
                            class="canopus-cart-item-extra-fields item-personalizacao arrayGravacoes-{{ $item->id }}">

                        </div>
                        <div class="canopus-cart-item-quantity d-flex row" id="{{ $item->id }}">
                            <div class="quantity col-4 pl-0">
                                <button class="btn-less-qtd-modal" data-id="{{ $item->id }}"
                                    data-type="{{ $item->options->type }}">
                                    <i class="fas fa-minus"></i>
                                </button>

                                <input type="text" readonly value="{{ $item->qty }}" maxlength="4"
                                    name="quantity-modal-input" class="quantity-modal-input"
                                    id="input-quantity-{{ $item->id }}" />

                                <button class="btn-more-qtd-modal" data-id="{{ $item->id }}"
                                    data-type="{{ $item->options->type }}">
                                    <i class="fas fa-plus"></i>
                                </button>
                            </div>
                            <div class="price col-6 p-0 text-center">
                                <p>R$ {{ number_format($item->price, 2, ',', '.') }}</p>
                            </div>
                            <div class="action col-2 pl-0 text-right">
                                <button class="btn btn-link btn-remove-item"
                                    data-personalizacao="arrayGravacoes-{{ $item->id }}"
                                    data-id="{{ $item->id }}" data-type="{{ $item->options->type }}">
                                    <i class="fa fa-trash"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </li>
            @endforeach
        @endif
        <!--<li class="row">-->

        <!--</li>-->
    </ul>
</div>
