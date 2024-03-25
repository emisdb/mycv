<aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark"> <!--begin::Sidebar Brand-->
    <div class="sidebar-brand"> <!--begin::Brand Link--> <a href="../index.html" class="brand-link"> <!--begin::Brand Image--> <img src="../../../dist/assets/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image opacity-75 shadow"> <!--end::Brand Image--> <!--begin::Brand Text--> <span class="brand-text fw-light">AdminLTE 4</span> <!--end::Brand Text--> </a> <!--end::Brand Link--> </div> <!--end::Sidebar Brand--> <!--begin::Sidebar Wrapper-->
    <div class="sidebar-wrapper">
        <nav class="mt-2"> <!--begin::Sidebar Menu-->
            <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="menu" data-accordion="false">
                <li class="nav-item menu-open"> <a href="#" class="nav-link active"> <i class="nav-icon bi bi-layout-wtf"></i>
                        <p>
                            Projects
                            <i class="nav-arrow bi bi-chevron-right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item ">
                            <router-link class="nav-link" to="/admin/vue/examp" class="nav-link {{ $module == 0 ? 'active' : ''}}">
                                <i class="nav-icon bi bi-box-seam-fill  menu-icon"></i>
                                <span class="menu-title">Check vue</span>
                            </router-link>
                         </li>
                        <li class="nav-item">
                            <router-link class="nav-link" to="/admin/vue/sam" class="nav-link {{ $module == 0 ? 'active' : ''}}">
                                <i class="nav-icon bi bi-person-up menu-icon"></i>
                                <span class="menu-title">Project Sam</span>
                            </router-link>
                        </li>
                        <li class="nav-item ">
                            <router-link class="nav-link" to="/admin/vue/stand" class="nav-link {{ $module == 0 ? 'active' : ''}}">
                                <i class="nav-icon bi bi-reception-2 menu-icon"></i>
                                <span class="menu-title">Project Stand</span>
                            </router-link>
                        </li>
                        <li class="nav-item ">
                            <router-link class="nav-link" to="/admin/vue/lead" class="nav-link {{ $module == 0 ? 'active' : ''}}">
                                <i class="nav-icon bi bi-reception-3 menu-icon"></i>
                                <span class="menu-title">Project Topics</span>
                            </router-link>
                        </li>
                    </ul>
                </li>
             </ul> <!--end::Sidebar Menu-->
        </nav>
    </div> <!--end::Sidebar Wrapper-->
</aside> <!--end::Sidebar--> <!--begin::App Main-->
