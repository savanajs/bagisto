<template>
    <div class="shimmer-card-container">
        <div class="heading"><h2 class="fs20 fw6">&nbsp;</h2></div>
        <carousel-component
            id="shimmer-carousel"
            navigation-enabled="hide"
            pagination-enabled="hide"
            :slides-count="shimmerCountInt + 1"
            :slides-per-page="shimmerCountInt">

                <slide
                    :key="count"
                    :slot="`slide-${count}`"
                    v-for="count in shimmerCountInt">

                    <div class="shimmer-card">
                        <div class="shimmer-wrapper">
                            <div class="shimmer-product-image animate"></div>
                            <div class="comment animate"></div>
                            <div class="comment animate"></div>
                            <div class="comment animate"></div>
                            <div class="shimmer-product-price animate"></div>
                            <div class="shimmer-product-btn animate"></div>
                        </div>
                    </div>
                </slide>
        </carousel-component>
    </div>
</template>

<script>
    export default {
        props: {
            'shimmerCount': {
                default: 5,
            },
        },

        data: function () {
            return {
                shimmerCountInt: parseInt(this.shimmerCount),
            }
        }
    }
</script>

<style>
    .shimmer-card-container {
        width: 100%;
    }

    .shimmer-card {
        margin: 0px 10px 50px 10px;
        padding: 0px 0px 30px 0px;
    }

    .shimmer-product-image {
        width: 100%;
        height: 225px;
    }

    .shimmer-product-price {
        width: 100%;
        height: 14px;
    }

    .shimmer-product-btn {
        width: 100%;
        height: 38px;
        margin-top: 14px;
    }

    .comment {
        height: 10px;
        background: #f2f2f2;
        margin-top: 20px;
    }

    .shimmer-wrapper {
        width: 0px;
        animation: fullView 0.5s forwards linear;
    }

    @keyframes fullView {
        100% {
            width: 100%;
        }
    }

    .animate {
        animation : shimmer 2s infinite;
        background: linear-gradient(to right, #f2f2f2 4%, #e2e2e2 25%, #f2f2f2 36%);
        background-size: 1000px 100%;
    }

    @keyframes shimmer {
        0% {
            background-position: -1000px 0;
        }
        100% {
            background-position: 1000px 0;
        }
    }
</style>
