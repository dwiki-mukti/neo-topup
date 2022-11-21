<nav class="main-header navbar navbar-expand">
    <div class="container" style="background-color: inherit">
        <div class="d-flex" style="width: 160px">
            <a href="{{ Route('client.landing') }}" class="my-brand">{{ env('APP_NAME') }}</a>
        </div>
        <div id="search-block">
            <form>
                <div class="input-group" id="nav-search">
                    {{-- <div class="input-group-prepend" style="border-right: 2px solid rgba(0, 0, 0, .5)">
                                <button class="btn btn-navbar pl-4 border-0" type="button"
                                    style="border-radius: 2rem 0 0 2rem">
                                    All Game
                                </button>
                            </div> --}}
                    <input id="seach-field" class="form-control form-control-navbar pl-3 border-0" placeholder="Search.."
                        aria-label="Search" style="border-radius: 2rem 0 0 2rem">
                    <div class="input-group-append">
                        <button class="btn btn-navbar pr-3 border-0" type="button" id="clear-search"
                            style="border-radius: 0 2rem 2rem 0">
                            <i class="bi bi-x"></i>
                        </button>
                    </div>
                    <div class="result-search">
                        @if (1)
                            <div class="result-search-item">
                                <div>Sample Item</div>
                                <div>example Mobile Legend</div>
                            </div>
                            <div class="result-search-item">
                                <div>Sample Item</div>
                                <div>example Mobile Legend</div>
                            </div>
                            <div class="result-search-item">
                                <div>Sample Item</div>
                                <div>example Mobile Legend</div>
                            </div>
                        @else
                            <div class="text-center py-3">
                                Hasil Tidak Ditemukan
                            </div>
                        @endif
                    </div>
                </div>
            </form>
        </div>
        <div class="nav-wrapper">
            <div id="btn-nav-search">
                <i class="bi bi-search"></i>
            </div>
            <div class="d-inline-block">
                <div class="my-btn-dropdown" style="cursor: pointer">
                    <i class="bi bi-person"></i>
                    <span>Dwiki</span>
                </div>
                <div class="my-dropdown" style="top: 55px; right: 15px;">
                    <div class="row">
                        <div class="col-3">
                            <div class="bg-my-image my-profile-full"
                                style="background-image: url('/adminlte/images/default_profile/1.jpg')"></div>
                        </div>
                        <div class="col-8">
                            <div>Dwiki</div>
                            <div>myemail.com</div>
                        </div>
                        <div class="col-1">
                            <a href="{{ Route('client.profile') }}" style="margin-left: -10px;">
                                <i class="bi bi-pencil-square"></i>
                            </a>
                        </div>
                    </div>
                    <a class="btn btn-block btn-outline-danger mt-3" href="{{ Route('client.login') }}">Logout</a>
                </div>
            </div>
        </div>
        {{-- <div class="menu-control">
                    <a class="d-md-none d-block" href="#">
                        <i class="bi bi-house"></i>
                    </a>
                    <a class="" href="#"
                        role="button">
                        <i class="bi bi-newspaper"></i>
                    </a>
                    <a class="" href="#">
                        <i class="bi bi-cart"></i>
                    </a>
                    <a href="#" class="active">
                        <i class="bi bi-person"></i>
                        <span>Dwiki</span>
                    </a>
                </div> --}}
    </div>
</nav>
