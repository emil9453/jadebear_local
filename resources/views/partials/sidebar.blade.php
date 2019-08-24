@inject('request', 'Illuminate\Http\Request')
<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <ul class="sidebar-menu">

             

            <li class="{{ $request->segment(1) == 'home' ? 'active' : '' }}">
                <a href="{{ url('/') }}">
                    <i class="fa fa-wrench"></i>
                    <span class="title">@lang('quickadmin.qa_dashboard')</span>
                </a>
            </li>

            @can('user_management_access')
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-users"></i>
                    <span>@lang('quickadmin.user-management.title')</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    @can('role_access')
                    <li>
                        <a href="{{ route('admin.roles.index') }}">
                            <i class="fa fa-briefcase"></i>
                            <span>@lang('quickadmin.roles.title')</span>
                        </a>
                    </li>@endcan
                    
                    @can('user_access')
                    <li>
                        <a href="{{ route('admin.users.index') }}">
                            <i class="fa fa-user"></i>
                            <span>@lang('quickadmin.users.title')</span>
                        </a>
                    </li>@endcan
                    
                    @can('user_action_access')
                    <li>
                        <a href="{{ route('admin.user_actions.index') }}">
                            <i class="fa fa-th-list"></i>
                            <span>@lang('quickadmin.user-actions.title')</span>
                        </a>
                    </li>@endcan
                    
                </ul>
            </li>@endcan
            
            @can('team_member_access')
            <li>
                <a href="{{ route('admin.team_members.index') }}">
                    <i class="fa fa-address-book-o"></i>
                    <span>@lang('quickadmin.team-members.title')</span>
                </a>
            </li>@endcan


            @can('politic_access')
                <li>
                    <a href="{{ route('admin.politics.index') }}">
                        <i class="fa fa-gears"></i>
                        <span>@lang('quickadmin.politics.title')</span>
                    </a>
                </li>@endcan

            @can('medium_access')
                <li>
                    <a href="{{ route('admin.media.index') }}">
                        <i class="fa fa-gears"></i>
                        <span>@lang('quickadmin.media.title')</span>
                    </a>
                </li>@endcan

            @can('relationship_history_access')
                <li>
                    <a href="{{ route('admin.relationship_histories.index') }}">
                        <i class="fa fa-gears"></i>
                        <span>@lang('quickadmin.relationship-history.title')</span>
                    </a>
                </li>@endcan

            @can('special_offer_access')
                <li>
                    <a href="{{ route('admin.special_offers.index') }}">
                        <i class="fa fa-gears"></i>
                        <span>@lang('quickadmin.special-offers.title')</span>
                    </a>
                </li>@endcan

            @can('work_schema_access')
                <li>
                    <a href="{{ route('admin.work_schemas.index') }}">
                        <i class="fa fa-gears"></i>
                        <span>@lang('quickadmin.work-schema.title')</span>
                    </a>
                </li>@endcan

            @can('faq_access')
                <li>
                    <a href="{{ route('admin.faqs.index') }}">
                        <i class="fa fa-gears"></i>
                        <span>@lang('quickadmin.faq.title')</span>
                    </a>
                </li>@endcan


            @can('review_access')
                <li>
                    <a href="{{ route('admin.reviews.index') }}">
                        <i class="fa fa-gears"></i>
                        <span>@lang('quickadmin.reviews.title')</span>
                    </a>
                </li>@endcan

            @can('development_access')
                <li>
                    <a href="{{ route('admin.developments.index') }}">
                        <i class="fa fa-gears"></i>
                        <span>@lang('quickadmin.development.title')</span>
                    </a>
                </li>@endcan

            @can('why_exactly_we_access')
                <li>
                    <a href="{{ route('admin.why_exactly_wes.index') }}">
                        <i class="fa fa-gears"></i>
                        <span>@lang('quickadmin.why-exactly-we.title')</span>
                    </a>
                </li>@endcan




            <li class="{{ $request->segment(1) == 'change_password' ? 'active' : '' }}">
                <a href="{{ route('auth.change_password') }}">
                    <i class="fa fa-key"></i>
                    <span class="title">@lang('quickadmin.qa_change_password')</span>
                </a>
            </li>

            <li>
                <a href="#logout" onclick="$('#logout').submit();">
                    <i class="fa fa-arrow-left"></i>
                    <span class="title">@lang('quickadmin.qa_logout')</span>
                </a>
            </li>
        </ul>
    </section>
</aside>

