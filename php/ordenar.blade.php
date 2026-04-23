<select id="select-ordenar-por" name="listagem" class="form-control font-size-12" canopus-showcase-infinite-scroll-sort>
    <option value="" @if (request('_sort', '') === '') selected @endif>Ordenar por: Padrão</option>
    <option value="-id" @if (request('_sort', '') === '-id') selected @endif>Ordenar por: Lançamentos</option>
    <option value="price" @if (request('_sort', '') === 'price') selected @endif>Menor Preço</option>
    <option value="-price" @if (request('_sort', '') === '-price') selected @endif>Maior Preço</option>
    <!--
    <option value="valor_base"
        @if (request('_sort', '') === 'valor_base') selected @endif>Ordenar por: Menor Preço</option>
    <option value="-valor_base"
        @if (request('_sort', '') === '-valor_base') selected @endif>Ordenar por: Maior Preço</option>
    -->
</select>
