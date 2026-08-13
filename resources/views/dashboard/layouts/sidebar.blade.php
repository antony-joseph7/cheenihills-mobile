<div class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div>
            <img src="{{ asset('rock/images/logo-icon.png') }}" class="logo-icon" alt="logo icon">
        </div>
        <div>
            <h4 class="logo-text">Cheeni Hills</h4>
        </div>
        <div class="toggle-icon ms-auto"><i class='bx bx-arrow-back'></i>
        </div>
    </div>
    <!--navigation-->
    <ul class="metismenu" id="menu">
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class='bx bx-home-alt'></i>
                </div>
                <div class="menu-title">Dashboard</div>
            </a>
            <ul>
                <li> <a href="{{ route('dashboard.index') }}"><i class='bx bx-radio-circle'></i>Default</a>
                </li>

            </ul>
        </li>







        <li class="menu-label">CMS</li>
        <li>
            <a href="{{ route('dashboard.seo-data.index') }}">
                <div class="parent-icon"><i class='bx bxs-business'></i>
                </div>
                <div class="menu-title">SEO</div>
            </a>
        </li>


        <li>
            <a href="{{ route('dashboard.form-data.index') }}">
                <div class="parent-icon"><i class='bx bxs-business'></i>
                </div>
                <div class="menu-title">Enquiries</div>
            </a>
        </li>


    </ul>
    <!--end navigation-->
</div>
