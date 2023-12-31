<div class="row w-100">
            <nav class="navbar navbar-expand-lg bg-transparent">
                <div class="container-fluid">
                    <a class="navbar-brand" href="/">
                        <img src="{{ asset('asset/image/logo.png') }}" height="25" alt="" />
                    </a>
                    <button
                        class="navbar-toggler"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent"
                        aria-expanded="false"
                        aria-label="Toggle navigation"
                    >
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div
                        class="collapse navbar-collapse"
                        id="navbarSupportedContent"
                        style="z-index: 4"
                    >
                        <div
                            class="w-100 d-flex justify-content-center"
                        >
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a
                                        class="nav-link fs-6 text-dark"
                                        href=""
                                        >Tentang</a
                                    >
                                </li>
                                <li class="nav-item">
                                    <a
                                        class="nav-link fs-6 text-dark"
                                        href="/update"
                                        >Update</a
                                    >
                                </li>
                                <li class="nav-item">
                                    <a
                                        class="nav-link fs-6 text-dark"
                                        href="/program"
                                        >Program</a
                                    >
                                </li>
                                <li class="nav-item">
                                    <a
                                        class="nav-link fs-6 text-dark"
                                        href="/zakat"
                                        >Zakat</a
                                    >
                                </li>
                                <li class="nav-item">
                                    <a
                                        class="nav-link fs-6 text-dark"
                                        href="/qurban"
                                        >Qurban</a
                                    >
                                </li>
                            </ul>
                        </div>
                        @include('content.component.molecules.dashboard.button-login')
                    </div>
                </div>
            </nav>
        </div>
