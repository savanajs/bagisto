<header class="sticky-header header" v-if="!isMobile()">
    <div class="shell">
        <div class="row velocity-divide-page header__container">
            <div id="logo-header" class="col-lg-2 col-md-12">
                <logo-component></logo-component>
            </div>
            <searchbar-component></searchbar-component>
            <div class="col-lg-2 col-md-12 welcome-header">
                @include('velocity::layouts.top-nav.login-section')
            </div>
            <actionsbar-component></actionsbar-component>
        </div>
    </div>
</header>

@push('scripts')
    <script type="text/javascript">
        (() => {
            document.addEventListener('scroll', e => {
                scrollPosition = Math.round(window.scrollY);

                if (scrollPosition > 50){
                    document.querySelector('header').classList.add('header-shadow');
                } else {
                    document.querySelector('header').classList.remove('header-shadow');
                }
            });
        })()
    </script>
@endpush
