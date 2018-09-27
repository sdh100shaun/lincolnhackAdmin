@extends('layouts.site')

@section('content')
    <header>
        <div>
            <div class="navbar-header">
                <button type="button">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>

        </div>
    </header>

    <div class="main-nav">
        <!-- <div class="col-md-9 hidden-xs">

        </div> -->
        <div class="col-md-6 col-xs-12">
            <button class="close">
                <span></span>
                <span></span>
            </button>
            <nav>
                <ul class="">
                    <li role="presentation" class="dropdown">
                        <a data-nav-ref="" href="#what">What</a>
                    </li>

                    <li role="presentation" class="dropdown">
                        <a data-nav-ref="" href="#when">When</a>
                    </li>

                    <li role="presentation" class="dropdown">
                        <a data-nav-ref="" href="#where">Where</a>
                    </li>

                    <li role="presentation" class="dropdown">
                        <a data-nav-ref="" href="#sponsor">Sponsor</a>
                    </li>

                    <li role="presentation" class="dropdown">
                        <a data-nav-ref="" href="#digitaLincoln">Digital Lincoln</a>
                    </li>

                    <li role="presentation" class="dropdown">
                        <a data-nav-ref="" href="#faqs">FAQS</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
    <main id="content" role="main">

        <div class="main-sidebar hidden-xs">
            <ul class="">
                <li role="presentation" class="dropdown">
                    <a data-nav-ref="" href="#what"></a>
                    <span>What</span>
                </li>

                <li role="presentation" class="dropdown">
                    <a data-nav-ref="" href="#when"></a>
                    <span>When</span>
                </li>

                <li role="presentation" class="dropdown">
                    <a data-nav-ref="" href="#where"></a>
                    <span>Where</span>
                </li>

                <li role="presentation" class="dropdown">
                    <a data-nav-ref="" href="#sponsors"></a>
                    <span>Sponsor</span>
                </li>

                <li role="presentation" class="dropdown">
                    <a data-nav-ref="" href="#digitaLincoln"></a>
                    <span>Digital Lincoln</span>
                </li>

                <li role="presentation" class="dropdown">
                    <span>FAQS</span>
                    <a data-nav-ref="" href="#faqs"></a>
                </li>
            </ul>
        </div>

        <div class="banner">

            <video autoplay preload="auto" loop muted playsinline>
                <source src="/videos/edit2.mp4" type="video/mp4">

            </video>
            <div class="overlay">
                <img class="logo img-responsive" alt="Lincoln Hack Imp" src="/images/assets/logo.png">
            </div>

        </div>
