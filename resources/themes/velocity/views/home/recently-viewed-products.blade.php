@inject ('velocityHelper', 'Webkul\Velocity\Helpers\Helper')
@inject ('productRatingHelper', 'Webkul\Product\Helpers\Review')
@inject ('productImageHelper', 'Webkul\Product\Helpers\ProductImage')

<recently-viewed-products
    add-class="{{ isset($addClass) ? $addClass : '' }}"
    quantity="{{ isset($quantity) ? $quantity : null }}"
    add-class-wrapper="{{ isset($addClassWrapper) ? $addClassWrapper : '' }}">
</recently-viewed-products>

@push('scripts')
    <script type="text/x-template" id="recently-viewed-products-template">
        <div class="new-products">
            <div class="shell rows-nm">
                <div class="row ltr">

                    <shimmer-component v-if="isLoading && !isMobileView"></shimmer-component>
                    <template v-else-if="recentlyProducts.length">

                        <div class="row remove-padding-margin">
                            <div class="col-12 no-padding">
                                <h2 class="fs20 fw6 mb15">{{ __('velocity::app.products.recently-viewed') }}</h2>
                            </div>
                        </div>

                        <div :class="`${addClass} col-12 no-padding carousel-products vc-full-screen with-recent-viewed`" v-if="!isMobileView">

                            <carousel-component
                                        slides-per-page="5"
                                        navigation-enabled="hide"
                                        pagination-enabled="hide"
                                        id="new-products-carousel"
                                        :slides-count="recentlyProducts.length">

                                        <slide
                                            :key="index"
                                            :slot="`slide-${index}`"
                                            v-for="(product, index) in recentlyProducts">
                                            <product-card
                                                :list="list"
                                                :product="product">
                                            </product-card>
                                        </slide>
                            </carousel-component>

                        </div>

                        <div class="col-12 no-padding carousel-products vc-small-screen" v-else>
                            <carousel-component
                                slides-per-page="2"
                                navigation-enabled="hide"
                                pagination-enabled="hide"
                                id="new-products-carousel"
                                :slides-count="recentlyProducts.length">

                                <slide
                                    :key="index"
                                    :slot="`slide-${index}`"
                                    v-for="(product, index) in recentlyProducts">
                                    <product-card
                                        :list="list"
                                        :product="product">
                                    </product-card>
                                </slide>
                            </carousel-component>
                        </div>

                    </template>
                </div>
            </div>
        </div>
    </script>

    <script type="text/javascript">
        (() => {
            Vue.component('recently-viewed-products', {
                template: '#recently-viewed-products-template',
                props: ['quantity', 'addClass', 'addClassWrapper'],
                data: function () {
                    return {
                        'list': false,
                        'isLoading': true,
                        'recentlyProducts': [],
                        'isMobileView': this.$root.isMobile(),
                        recentlyViewed: (() => {
                            let storedRecentlyViewed = window.localStorage.recentlyViewed;

                            if (storedRecentlyViewed) {
                                var slugs = JSON.parse(storedRecentlyViewed);
                                var updatedSlugs = {};

                                slugs = slugs.reverse();

                                slugs.forEach(slug => {
                                    updatedSlugs[slug] = {};
                                });

                                return updatedSlugs;
                            }
                        })(),
                    }
                },

                created: function () {
                    for (slug in this.recentlyViewed) {
                        if (slug) {
                            this.$http(`${this.baseUrl}/product-details/${slug}`)
                            .then(response => {
                                if (response.data.status)
                                    this.recentlyProducts.push(response.data.product[0]);

                                this.isLoading = false;
                            })
                            .catch(error => {
                                this.isLoading = false;
                            })
                        }
                    }
                },
            })
        })()
    </script>
@endpush
