<nav class='white header-nav nav-extended z-depth-0' role="navigation">
    <div class='nav-wrapper container'>
        <ul class="icon-links-ul right">
            <li>
                <a class="social-icons-link facebook-icon-link" title="Facebook page" href = "https://facebook.com/{{config('constants.site_name')}}">
                    <i class = 'fa fa-facebook-f fa-lg social-icons'></i>
                </a>
            </li>
            <li>
                <a class="social-icons-link twitter-icon-link" title="Twitter handle" href = "https://twitter.com/{{config('constants.site_name')}}">
                    <i class = 'fa fa-twitter fa-lg social-icons'></i>
                </a>
            </li>
            <li>
                <a class="social-icons-link instagram-icon-link" title="Instagram handle" href = "https://instagram.com/{{config('constants.site_name')}}">
                    <i class = 'fa fa-instagram fa-lg social-icons'></i>
                </a>
            </li>

         </ul>

    </div>
    <div class="nav-wrapper container">
        <ul class="left hide-on-med-and-down">
        <li>
            <a id='logo-container' href='/'>
                <img class="header-logo-image brand-logo" title="{{config('constants.site_name_uppercase')}} logo" src="{{asset('/img/tinkshak.png')}}" height="45" />
            </a>
        </li>
        </ul>


        @php

        $product_types  = config('constants.products');
        $product_icons = config('constants.product_icons');

       // echo $product_icons['books'];
        @endphp

        <ul class='hide-on-med-and-down desktop-nav-links-container right'>

            @foreach($product_types as $product_type => $subcategories)


                @if(strtolower($product_type) == 'more')
                    <li>
                        <a class="dropdown-trigger" href = '#' data-target = 'desktop-{{strtolower($product_type)}}-dropdown' href='' title="{{$product_type}}">{{$product_type}}
                        <i class="material-icons right">arrow_drop_down</i>
                        </a>
                    </li>
                @else
                    <li>
                        <a class="dropdown-trigger" href = '#' data-target = 'desktop-{{strtolower($product_type)}}-dropdown' href='' title="{{$product_type}}">
                                {{$product_type}}
                        </a>
                    </li>
                @endif

                <ul id="desktop-{{strtolower($product_type)}}-dropdown" class="desktop-drop-down dropdown-content">
                        @foreach($subcategories as $subcategory)

                            <li><a class="header-subcategory-link" title="{{$subcategory}}" href="/products/{{strtolower(str_replace(' ' , '' , $subcategory))}}">{{$subcategory}}</a></li>
                        @endforeach

                            <li class="divider">
                            </li>

                            <li>

                                <a href="#" class="header-drop-down-product-type-close">
                                    Close
                                        <span class="material-icons small right">close</span>

                                </a>

                            </li>
                </ul>
            @endforeach

            <li class="hide-on-med-and-down">
                <a href = '/products/create' title="Add your product" class="btn rounded waves-effect waves-light blue-grey-text white border-info create-post-link">
                    <b>Sell</b>
                    <i class="material-icons header-create-icon small">add</i>
                </a>
            </li>
        </ul>
        <ul id='nav-mobile' class='sidenav'>
            <li>
                <a href = '/products/create' title="Write a new post" class="btn rounded waves-effect waves-light white blue-grey-text border-info create-post-link">
                    <b>Sell</b>
                    <i class="material-icons header-create-icon small">add</i>
                </a>
            </li>

            @foreach($product_types as $product_type => $subcategories)

                @if(strtolower($product_type) == 'more')
                    <li><a class="dropdown-trigger" href = '#' data-target = 'mobile-{{strtolower($product_type)}}-dropdown' href='' title="{{$product_type}}">{{$product_type}}
                            <i class="material-icons right">arrow_drop_down</i>
                        </a></li>
                @else
                    <li><a class="dropdown-trigger" href = '#' data-target = 'mobile-{{strtolower($product_type)}}-dropdown' href='' title="{{$product_type}}">{{$product_type}}</a></li>
                @endif

                    <ul id="mobile-{{strtolower($product_type)}}-dropdown" class="mobile-drop-down dropdown-content">
                        @foreach($subcategories as $subcategory)

                            <li><a title="{{$subcategory}}" href="/products/{{strtolower(str_replace(' ' , '' , $subcategory))}}">{{$subcategory}}</a></li>
                        @endforeach

                            <li class="divider"></li>
                            <li>
                                <a href="#" class="header-drop-down-product-type-close">
                                    Close
                                    <span class="material-icons small right">close</span>
                                </a>
                            </li>
                    </ul>

            @endforeach


        </ul>
        <a href='#' data-target='nav-mobile' class='sidenav-trigger header-navbar-trigger'>
            <i class='material-icons'>menu</i></a>
    </div>
</nav>



