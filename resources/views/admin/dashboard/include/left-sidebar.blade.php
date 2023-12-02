<aside class="sidebar-wrapper">
    <div class="iconmenu">
        <div class="nav-toggle-box">
            <div class="nav-toggle-icon"><i class="bi bi-list"></i></div>
        </div>
        <ul class="nav nav-pills flex-column">
            <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Dashboards">
                <button class="nav-link" data-bs-toggle="pill" data-bs-target="#pills-dashboards" type="button"><i class="bi bi-house-door-fill"></i></button>
            </li>
            <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="CATEGORIES">
                <button class="nav-link" data-bs-toggle="pill" data-bs-target="#pills-application" type="button"><i class="bi bi-grid-fill"></i></button>
            </li>
            <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Blogs">
                <button class="nav-link" data-bs-toggle="pill" data-bs-target="#pills-widgets" type="button"><i class="bi bi-briefcase-fill"></i></button>
            </li>
            <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="ShopProducts">
                <button class="nav-link" data-bs-toggle="pill" data-bs-target="#pills-ecommerce" type="button"><i class="bi bi-bag-check-fill"></i></button>
            </li>
            <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Sliders">
                <button class="nav-link" data-bs-toggle="pill" data-bs-target="#pills-components" type="button"><i class="bi bi-bookmark-star-fill"></i></button>
            </li>
            <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Our Teams">
                <button class="nav-link" data-bs-toggle="pill" data-bs-target="#pills-forms" type="button"><i class="bi bi-file-earmark-break-fill"></i></button>
            </li>
            <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="All Contacts">
                <button class="nav-link" data-bs-toggle="pill" data-bs-target="#pills-tables" type="button"><i class="bi bi-file-earmark-spreadsheet-fill"></i></button>
            </li>
            <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Order Lists">
                <button class="nav-link" data-bs-toggle="pill" data-bs-target="#pills-authentication" type="button"><i class="bi bi-lock-fill"></i></button>
            </li>
            <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title=" Icons">
                <button class="nav-link" data-bs-toggle="pill" data-bs-target="#pills-icons" type="button"><i class="bi bi-cloud-arrow-down-fill"></i></button>
            </li>
            <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Content">
                <button class="nav-link" data-bs-toggle="pill" data-bs-target="#pills-content" type="button"><i class="bi bi-cone-striped"></i></button>
            </li>
            <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Charts">
                <button class="nav-link" data-bs-toggle="pill" data-bs-target="#pills-charts" type="button"><i class="bi bi-pie-chart-fill"></i></button>
            </li>
            <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Maps">
                <button class="nav-link" data-bs-toggle="pill" data-bs-target="#pills-maps" type="button"><i class="bi bi-pin-map-fill"></i></button>
            </li>
            <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Pages">
                <button class="nav-link" data-bs-toggle="pill" data-bs-target="#pills-pages" type="button"><i class="bi bi-award-fill"></i></button>
            </li>
            <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Charts">
                <button class="nav-link" data-bs-toggle="pill" data-bs-target="#pills-charts" type="button"><i class="bi bi-pie-chart-fill"></i></button>
            </li>
            <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Maps">
                <button class="nav-link" data-bs-toggle="pill" data-bs-target="#pills-maps" type="button"><i class="bi bi-pin-map-fill"></i></button>
            </li>
            <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Pages">
                <button class="nav-link" data-bs-toggle="pill" data-bs-target="#pills-pages" type="button"><i class="bi bi-award-fill"></i></button>
            </li>
        </ul>
    </div>
    <div class="textmenu">
        <div class="brand-logo">
            <a href="{{route('dashboard')}}"><img src="{{asset('front-assets')}}/assets/images/menu/logo/1.png" width="140" alt=""/></a>

        </div>
        <div class="tab-content">
            <div class="tab-pane fade" id="pills-dashboards">
                <div class="list-group list-group-flush">
                    <div class="list-group-item">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-0">Dashboards</h5>
                        </div>
                        <small class="mb-0">Some placeholder content</small>
                    </div>
                    <a href="index.html" class="list-group-item"><i class="bi bi-cart-plus"></i>e-Commerce</a>
                    <a href="index2.html" class="list-group-item"><i class="bi bi-wallet"></i>Sales</a>
                    <a href="index3.html" class="list-group-item"><i class="bi bi-bar-chart-line"></i>Analytics</a>
                    <a href="index4.html" class="list-group-item"><i class="bi bi-archive"></i>Project Management</a>
                    <a href="index5.html" class="list-group-item"><i class="bi bi-cast"></i>CMS Dashboard</a>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-application">
                <div class="list-group list-group-flush">
                    <div class="list-group-item">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-0">CATEGORIES</h5>
                        </div>
                        <small class="mb-0">Some placeholder content</small>
                    </div>
                    <a href="{{route('catagories.create')}}" class="list-group-item"><i class="bi bi-envelope"></i>Add Catagories</a>
                    <a href="{{route('catagories.index')}}" class="list-group-item"><i class="bi bi-chat-left-text"></i>View Catagories</a>

                </div>
            </div>
            <div class="tab-pane fade" id="pills-widgets">
                <div class="list-group list-group-flush">
                    <div class="list-group-item">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-0">Blog</h5>
                        </div>
                        <small class="mb-0">Some placeholder content</small>
                    </div>
                    <a href="{{route('blogs.create')}}" class="list-group-item"><i class="bi bi-box"></i>Add New Blog</a>
                    <a href="{{route('blogs.index')}}" class="list-group-item"><i class="bi bi-bar-chart"></i> View Blogs</a>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-ecommerce">
                <div class="list-group list-group-flush">
                    <div class="list-group-item">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-0">SHOP</h5>
                        </div>
                        <small class="mb-0">Some placeholder content</small>
                    </div>
                    <a href="{{route('shops.create')}}" class="list-group-item"><i class="bi bi-box"></i>Add New Blog</a>
                    <a href="{{route('shops.index')}}" class="list-group-item"><i class="bi bi-bar-chart"></i> View Blogs</a>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-components">
                <div class="list-group list-group-flush">
                    <div class="list-group-item">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-0">Sliders</h5>
                        </div>
                        <small class="mb-0">Some placeholder content</small>
                    </div>
                    <a href="{{route('sliders.create')}}" class="list-group-item"><i class="bi bi-box"></i>Add New Slider</a>
                    <a href="{{route('sliders.index')}}" class="list-group-item"><i class="bi bi-bar-chart"></i> View Sliders</a>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-forms">
                <div class="list-group list-group-flush">
                    <div class="list-group-item">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-0">Our Teams</h5>
                        </div>
                        <small class="mb-0">Some placeholder content</small>
                    </div>
                    <a href="{{route('teams.create')}}" class="list-group-item"><i class="bi bi-box"></i>Add New Blog</a>
                    <a href="{{route('teams.index')}}" class="list-group-item"><i class="bi bi-bar-chart"></i> View Blogs</a>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-tables">
                <div class="list-group list-group-flush">
                    <div class="list-group-item">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-0">Tables</h5>
                        </div>
                        <small class="mb-0">Some placeholder content</small>
                    </div>

                    <a href="{{route('view.contact')}}" class="list-group-item"><i class="bi bi-bar-chart"></i> View all Contacts</a>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-authentication">
                <div class="list-group list-group-flush">
                    <div class="list-group-item">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-0">Order Lists</h5>
                        </div>
                        <small class="mb-0">Some placeholder content</small>
                    </div>
                    <a href="{{route('order.list')}}" class="list-group-item"><i class="bi bi-bar-chart"></i> View All Order Lists</a>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-icons">
                <div class="list-group list-group-flush">
                    <div class="list-group-item">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-0">Icons</h5>
                        </div>
                        <small class="mb-0">Some placeholder content</small>
                    </div>
                   </div>
            </div>
            <div class="tab-pane fade" id="pills-charts">
                <div class="list-group list-group-flush">
                    <div class="list-group-item">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-0">Charts</h5>
                        </div>
                        <small class="mb-0">Some placeholder content</small>
                    </div>
                    <a href="charts-chartjs.html" class="list-group-item"><i class="bi bi-bar-chart"></i>Chart JS</a>
                    <a href="charts-apex-chart.html" class="list-group-item"><i class="bi bi-pie-chart"></i>Apex Chart</a>
                    <a href="charts-highcharts.html" class="list-group-item"><i class="bi bi-graph-up"></i>Highcharts</a>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-maps">
                <div class="list-group list-group-flush">
                    <div class="list-group-item">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-0">Maps</h5>
                        </div>
                        <small class="mb-0">Some placeholder content</small>
                    </div>
                    <a href="map-google-maps.html" class="list-group-item"><i class="bi bi-geo-alt"></i>Google Map</a>
                    <a href="map-vector-maps.html" class="list-group-item"><i class="bi bi-geo"></i>Vector Map</a>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-pages">
                <div class="list-group list-group-flush">
                    <div class="list-group-item">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-0">Pages</h5>
                        </div>
                        <small class="mb-0">Some placeholder content</small>
                    </div>
                    <a href="pages-user-profile.html" class="list-group-item"><i class="bi bi-alarm"></i>User Profile</a>
                    <a href="pages-timeline.html" class="list-group-item"><i class="bi bi-archive"></i>Timeline</a>
                    <a href="pages-faq.html" class="list-group-item"><i class="bi bi-question-diamond"></i>FAQ</a>
                    <a href="pages-pricing-tables.html" class="list-group-item"><i class="bi bi-tags"></i>Pricing</a>
                    <a href="pages-errors-404-error.html" class="list-group-item"><i class="bi bi-bug"></i>404 Error</a>
                    <a href="pages-errors-500-error.html" class="list-group-item"><i class="bi bi-diagram-2"></i>500 Error</a>
                    <a href="pages-errors-coming-soon.html" class="list-group-item"><i class="bi bi-egg-fried"></i>Coming Soon</a>
                    <a href="pages-blank-page.html" class="list-group-item"><i class="bi bi-flag"></i>Blank Page</a>
                </div>
            </div>
        </div>
    </div>
</aside>
