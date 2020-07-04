# Home Page Content

´´´html
@include('shop::home.category', ['category' => 'popular-products'])
@include('shop::home.advertisements.advertisement-four', ['one' => 'women', 'four' => 'kids'])
@include('shop::home.category-with-custom-option', ['category' => ['popular-products','kids']])
@include('shop::home.hot-categories', ['category' => ['popular-products','kids']])
@include('shop::home.popular-categories', ['category' => ['popular-products','kids']])
´´´

# Pibar

´´´html
<div class="pitbar">
<ul class="row col-12 remove-padding-margin pitbar__items">
<li class="col-lg-3 col-sm-12 pitbar__item">
<div class="pitbar__icon"><span class="material-icons"> payment </span></div>
<div class="pitbar__infos">
<p class="pitbar__title">At&eacute; 12 Vezes</p>
<p class="pitbar__description">Nos cart&otilde;es de cr&eacute;dito</p>
</div>
</li>
<li class="col-lg-3 col-sm-12 pitbar__item">
<div class="pitbar__icon"><span class="material-icons"> emoji_events </span></div>
<div class="pitbar__infos">
<p class="pitbar__title">1 Ano de garantia</p>
<p class="pitbar__description">Para consoles e acessorios</p>
</div>
</li>
<li class="col-lg-3 col-sm-12 pitbar__item">
<div class="pitbar__icon"><span class="material-icons"> replay </span></div>
<div class="pitbar__infos">
<p class="pitbar__title">Troca gratuita</p>
<p class="pitbar__description">Troca e devolu&ccedil;&atilde;o sem custo!</p>
</div>
</li>
<li class="col-lg-3 col-sm-12 pitbar__item">
<div class="pitbar__icon"><span class="material-icons"> local_shipping </span></div>
<div class="pitbar__infos">
<p class="pitbar__title">&Aacute; Pronta entrega</p>
<p class="pitbar__description">Frete para todo Brasil</p>
</div>
</li>
</ul>
</div>
´´´html