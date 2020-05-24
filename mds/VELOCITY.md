# Home Page Content

´´´html
@include('shop::home.category', ['category' => 'popular-products'])
@include('shop::home.advertisements.advertisement-four', ['one' => 'women', 'four' => 'kids'])
@include('shop::home.category-with-custom-option', ['category' => ['popular-products','kids']])
@include('shop::home.hot-categories', ['category' => ['popular-products','kids']])
@include('shop::home.popular-categories', ['category' => ['popular-products','kids']])
´´´