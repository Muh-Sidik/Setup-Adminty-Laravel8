@include('layouts.partials.header')

            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">

                    @include('layouts.partials.sidebar')

                    <div class="pcoded-content">
                        <div class="pcoded-inner-content">
                            <div class="main-body">
                                <div class="page-wrapper">

                                    <div class="page-body">
                                        @yield('content')
                                    </div>
                                </div>

                                <div id="styleSelector">

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

@include('layouts.partials.script')
