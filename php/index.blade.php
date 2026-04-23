@extends(engine_view('base-novo'))
@section('conteudo')
@section('title', 'Reisman Joias e Alianças')
@section('page', 'home')



@push('tags')
    <meta property="fb:admins" content="home " />
@endpush

@section('metadescription', 'Alianças de Casamento e Anéis de Noivado | Reisman 1967')


@include(@engine_view('component_fullbanner'))

<section class="container text-middle">
    <h1>Made with love by Reisman since 1967</h1>
    <span>Somos especialistas na criação e fabricação de joias finas, produzidas com uma combinação de alta tecnologia e
        um trabalho artesanal delicado, executado por uma equipe altamente qualificada e reconhecida por sua
        excelência.</span>
</section>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "WebSite",
  "url": "https://www.reisman.com.br/",
  "potentialAction": {
    "@type": "SearchAction",
    "target": "https://www.reisman.com.br/busca?term={search_term_string}",
    "query-input": "required name=search_term_string"
  }
}
</script>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Organization",
  "name": "reisman",
  "url": "https://www.reisman.com.br/",
  "logo": "https://assets.betalabs.net/production/reisman/images/stores/1/logo-novo-branco.svg",
  "description": "Alianças de Casamento e Anéis de Noivado | Reisman 1967",
  "sameAs": [
    "https://www.facebook.com/reisman.aliancas/?locale=pt_BR",
    "https://www.instagram.com/reisman_aliancas/?hl=pt",
    "https://www.youtube.com/reismanaliancas",
    "https://www.pinterest.com/reisman1967/_created/",
    "https://www.tiktok.com/@reisman_aliancas",
    "https://www.threads.net/@reisman_aliancas"
  ],
  "email": "rastreio@reisman.com.br"
}
</script>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "BreadcrumbList",
  "itemListElement": [
    {
      "@type": "ListItem",
      "position": 1,
      "item": {
        "@id": "https://www.reisman.com.br",
        "name": "Reisman",
        "@type": "Thing"
      }
    }
  ]
}
</script>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "ItemList",
  "itemListElement": [
    {
      "@type": "ListItem",
      "position": 1,
      "item": {
        "@id": "https://www.reisman.com.br/compra-segura",
        "name": "Compra Segura",
        "description": "Seguro para entregas em todo o Brasil"
      }
    },
    {
      "@type": "ListItem",
      "position": 2,
      "item": {
        "@id": "https://www.reisman.com.br/ajuste-gratuito",
        "name": "Ajuste Gratuito",
        "description": "Primeiro ajuste de medida gratuito* em até 12 meses"
      }
    },
    {
      "@type": "ListItem",
      "position": 3,
      "item": {
        "@id": "https://www.reisman.com.br/garantia",
        "name": "Garantia Reisman",
        "description": "Garantia de 1 ano contra defeito de fabricação"
      }
    },
    {
      "@type": "ListItem",
      "position": 4,
      "item": {
        "@id": "https://www.reisman.com.br/gravacao-laser",
        "name": "Gravação a Laser",
        "description": "Personalize suas peças com gravações exclusivas"
      }
    },
    {
      "@type": "ListItem",
      "position": 5,
      "item": {
        "@id": "https://www.reisman.com.br/diamantes-naturais",
        "name": "Diamantes Naturais",
        "description": "Qualidade garantida e brilho eterno"
      }
    },
    {
      "@type": "ListItem",
      "position": 6,
      "item": {
        "@id": "https://www.reisman.com.br/atelier",
        "name": "Reisman Atelier",
        "description": "Atendimento personalizado para uma experiência única"
      }
    }
  ]
}
</script>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "ItemList",
  "itemListElement": [
    {
      "@type": "ListItem",
      "position": 1,
      "item": {
        "@type": "SiteNavigationElement",
        "name": "Alianças",
        "url": "https://www.reisman.com.br/aliancas-de-casamento"
      }
    },
    {
      "@type": "ListItem",
      "position": 2,
      "item": {
        "@type": "SiteNavigationElement",
        "name": "Anéis de Noivado",
        "url": "https://www.reisman.com.br/aneis-de-noivado"
      }
    },
    {
      "@type": "ListItem",
      "position": 3,
      "item": {
        "@type": "SiteNavigationElement",
        "name": "Joias",
        "url": "https://www.reisman.com.br/joias"
      }
    },
    {
      "@type": "ListItem",
      "position": 4,
      "item": {
        "@type": "SiteNavigationElement",
        "name": "Aparadores",
        "url": "https://www.reisman.com.br/aparadores-de-aliancas"
      }
    },
    {
      "@type": "ListItem",
      "position": 5,
      "item": {
        "@type": "SiteNavigationElement",
        "name": "Showroom",
        "url": "https://www.reisman.com.br/loja-em-sao-paulo"
      }
    }
  ]
}
</script>


@include(@engine_view('component_home_product'))

@include(@engine_view('component_home_bannerscategoria'))

@include(@engine_view('component_home_product2'))

@include(@engine_view('component_home_middle'))

@include(@engine_view('component_clients'))

@include(@engine_view('component_home_rodape'))

@include(@engine_view('component_svg'))


@endsection
