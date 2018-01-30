@inject('request', 'Illuminate\Http\Request')
<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <ul class="sidebar-menu">

            <li>
                <select class="searchable-field form-control"></select>
            </li>

            <li class="{{ $request->segment(1) == 'home' ? 'active' : '' }}">
                <a href="{{ url('/') }}">
                    <i class="fa fa-wrench"></i>
                    <span class="title">@lang('global.app_dashboard')</span>
                </a>
            </li>

            <li> 
                <a href="{{url('admin/calendar')}}">
                  <i class="fa fa-calendar"></i>
                  <span class="title">
                    Calendar
                  </span>
                </a>
            </li>
        
            @can('member_service_access')
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-odnoklassniki"></i>
                    <span class="title">@lang('global.member-services.title')</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                
                @can('survey_status_access')
                <li class="{{ $request->segment(2) == 'survey_statuses' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.survey_statuses.index') }}">
                            <i class="fa fa-file-text-o"></i>
                            <span class="title">
                                @lang('global.survey-status.title')
                            </span>
                        </a>
                    </li>
                @endcan
                </ul>
            </li>
            @endcan
            @can('analysi_access')
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-line-chart"></i>
                    <span class="title">@lang('global.analysis.title')</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                
                @can('graph_set_1_access')
                <li class="{{ $request->segment(2) == 'graph_set_1s' ? 'active active-sub' : '' }}">
                        <a href="http://cars.com.au/p009_Graphing/001_Test_DashBoard/ltr-vertical/bubble2.php" target="_blank">
                            <i class="fa fa-chevron-circle-right"></i>
                            <span class="title">
                                @lang('global.graph-set-1.title')
                            </span>
                        </a>
                    </li>
                @endcan
                </ul>
            </li>
            @endcan
            @can('innovation_management_access')
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-rocket"></i>
                    <span class="title">@lang('global.innovation-management.title')</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                
                @can('task_access')
                <li class="{{ $request->segment(2) == 'tasks' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.tasks.index') }}">
                            <i class="fa fa-briefcase"></i>
                            <span class="title">
                                @lang('global.tasks.title')
                            </span>
                        </a>
                    </li>
                @endcan
                @can('task_calendar_access')
                <li class="{{ $request->segment(2) == 'task_calendars' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.task_calendars.index') }}">
                            <i class="fa fa-calendar"></i>
                            <span class="title">
                                @lang('global.task-calendar.title')
                            </span>
                        </a>
                    </li>
                @endcan
                </ul>
            </li>
            @endcan
            @can('entity_access')
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-cubes"></i>
                    <span class="title">@lang('global.entities.title')</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                
                @can('p5_hub_access')
                <li class="{{ $request->segment(2) == 'p5_hubs' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.p5_hubs.index') }}">
                            <i class="fa fa-building"></i>
                            <span class="title">
                                @lang('global.p5-hubs.title')
                            </span>
                        </a>
                    </li>
                @endcan
                @can('p5_organisation_access')
                <li class="{{ $request->segment(2) == 'p5_organisations' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.p5_organisations.index') }}">
                            <i class="fa fa-bank"></i>
                            <span class="title">
                                @lang('global.p5-organisations.title')
                            </span>
                        </a>
                    </li>
                @endcan
                @can('p5_hub_membership_access')
                <li class="{{ $request->segment(2) == 'p5_hub_memberships' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.p5_hub_memberships.index') }}">
                            <i class="fa fa-maxcdn"></i>
                            <span class="title">
                                @lang('global.p5-hub-memberships.title')
                            </span>
                        </a>
                    </li>
                @endcan
                @can('p5_org_pos_user_link_access')
                <li class="{{ $request->segment(2) == 'p5_org_pos_user_links' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.p5_org_pos_user_links.index') }}">
                            <i class="fa fa-link"></i>
                            <span class="title">
                                @lang('global.p5-org-pos-user-links.title')
                            </span>
                        </a>
                    </li>
                @endcan
                @can('p5_program_access')
                <li class="{{ $request->segment(2) == 'p5_programs' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.p5_programs.index') }}">
                            <i class="fa fa-graduation-cap"></i>
                            <span class="title">
                                @lang('global.p5-programs.title')
                            </span>
                        </a>
                    </li>
                @endcan
                @can('p5_intake_access')
                <li class="{{ $request->segment(2) == 'p5_intakes' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.p5_intakes.index') }}">
                            <i class="fa fa-users"></i>
                            <span class="title">
                                @lang('global.p5-intakes.title')
                            </span>
                        </a>
                    </li>
                @endcan
                @can('p5_investment_access')
                <li class="{{ $request->segment(2) == 'p5_investments' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.p5_investments.index') }}">
                            <i class="fa fa-bitcoin"></i>
                            <span class="title">
                                @lang('global.p5-investments.title')
                            </span>
                        </a>
                    </li>
                @endcan
                </ul>
            </li>
            @endcan
            @can('user_management_access')
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-users"></i>
                    <span class="title">@lang('global.user-management.title')</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                
                @can('permission_access')
                <li class="{{ $request->segment(2) == 'permissions' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.permissions.index') }}">
                            <i class="fa fa-briefcase"></i>
                            <span class="title">
                                @lang('global.permissions.title')
                            </span>
                        </a>
                    </li>
                @endcan
                @can('role_access')
                <li class="{{ $request->segment(2) == 'roles' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.roles.index') }}">
                            <i class="fa fa-briefcase"></i>
                            <span class="title">
                                @lang('global.roles.title')
                            </span>
                        </a>
                    </li>
                @endcan
                @can('user_access')
                <li class="{{ $request->segment(2) == 'users' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.users.index') }}">
                            <i class="fa fa-user"></i>
                            <span class="title">
                                @lang('global.users.title')
                            </span>
                        </a>
                    </li>
                @endcan
                @can('user_action_access')
                <li class="{{ $request->segment(2) == 'user_actions' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.user_actions.index') }}">
                            <i class="fa fa-th-list"></i>
                            <span class="title">
                                @lang('global.user-actions.title')
                            </span>
                        </a>
                    </li>
                @endcan
                </ul>
            </li>
            @endcan
            @can('enitity_lookup_access')
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-gears"></i>
                    <span class="title">@lang('global.enitity-lookups.title')</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                
                @can('p5_hub_model_access')
                <li class="{{ $request->segment(2) == 'p5_hub_models' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.p5_hub_models.index') }}">
                            <i class="fa fa-gears"></i>
                            <span class="title">
                                @lang('global.p5-hub-model.title')
                            </span>
                        </a>
                    </li>
                @endcan
                @can('p5_hub_role_access')
                <li class="{{ $request->segment(2) == 'p5_hub_roles' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.p5_hub_roles.index') }}">
                            <i class="fa fa-gears"></i>
                            <span class="title">
                                @lang('global.p5-hub-roles.title')
                            </span>
                        </a>
                    </li>
                @endcan
                @can('p5_state_access')
                <li class="{{ $request->segment(2) == 'p5_states' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.p5_states.index') }}">
                            <i class="fa fa-gears"></i>
                            <span class="title">
                                @lang('global.p5-states.title')
                            </span>
                        </a>
                    </li>
                @endcan
                @can('p5_tag_access')
                <li class="{{ $request->segment(2) == 'p5_tags' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.p5_tags.index') }}">
                            <i class="fa fa-gears"></i>
                            <span class="title">
                                @lang('global.p5-tags.title')
                            </span>
                        </a>
                    </li>
                @endcan
                @can('p5_position_access')
                <li class="{{ $request->segment(2) == 'p5_positions' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.p5_positions.index') }}">
                            <i class="fa fa-gears"></i>
                            <span class="title">
                                @lang('global.p5-positions.title')
                            </span>
                        </a>
                    </li>
                @endcan
                @can('p5_org_status_access')
                <li class="{{ $request->segment(2) == 'p5_org_statuses' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.p5_org_statuses.index') }}">
                            <i class="fa fa-gears"></i>
                            <span class="title">
                                @lang('global.p5-org-status.title')
                            </span>
                        </a>
                    </li>
                @endcan
                @can('p5_hub_membership_type_access')
                <li class="{{ $request->segment(2) == 'p5_hub_membership_types' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.p5_hub_membership_types.index') }}">
                            <i class="fa fa-gears"></i>
                            <span class="title">
                                @lang('global.p5-hub-membership-types.title')
                            </span>
                        </a>
                    </li>
                @endcan
                @can('task_tag_access')
                <li class="{{ $request->segment(2) == 'task_tags' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.task_tags.index') }}">
                            <i class="fa fa-server"></i>
                            <span class="title">
                                @lang('global.task-tags.title')
                            </span>
                        </a>
                    </li>
                @endcan
                @can('tasks_outcome_access')
                <li class="{{ $request->segment(2) == 'tasks_outcomes' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.tasks_outcomes.index') }}">
                            <i class="fa fa-gears"></i>
                            <span class="title">
                                @lang('global.tasks-outcomes.title')
                            </span>
                        </a>
                    </li>
                @endcan
                @can('task_status_access')
                <li class="{{ $request->segment(2) == 'task_statuses' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.task_statuses.index') }}">
                            <i class="fa fa-server"></i>
                            <span class="title">
                                @lang('global.task-statuses.title')
                            </span>
                        </a>
                    </li>
                @endcan
                </ul>
            </li>
            @endcan
            @can('system_admin_access')
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-cogs"></i>
                    <span class="title">@lang('global.system-admin.title')</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                
                @can('recent_history_access')
                <li class="{{ $request->segment(2) == 'recent_histories' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.recent_histories.index') }}">
                            <i class="fa fa-gears"></i>
                            <span class="title">
                                @lang('global.recent-history.title')
                            </span>
                        </a>
                    </li>
                @endcan
                @can('data_integrity_access')
                <li class="{{ $request->segment(2) == 'data_integrities' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.data_integrities.index') }}">
                            <i class="fa fa-gears"></i>
                            <span class="title">
                                @lang('global.data-integrity.title')
                            </span>
                        </a>
                    </li>
                @endcan
                @can('p012_survey_access')
                <li class="{{ $request->segment(2) == 'p012_surveys' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.p012_surveys.index') }}">
                            <i class="fa fa-file-text-o"></i>
                            <span class="title">
                                @lang('global.p012-survey.title')
                            </span>
                        </a>
                    </li>
                @endcan
                @can('p009_graph_access')
                <li class="{{ $request->segment(2) == 'p009_graphs' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.p009_graphs.index') }}">
                            <i class="fa fa-gears"></i>
                            <span class="title">
                                @lang('global.p009-graph.title')
                            </span>
                        </a>
                    </li>
                @endcan
                @can('p009_field_level_access')
                <li class="{{ $request->segment(2) == 'p009_field_levels' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.p009_field_levels.index') }}">
                            <i class="fa fa-gears"></i>
                            <span class="title">
                                @lang('global.p009-field-level.title')
                            </span>
                        </a>
                    </li>
                @endcan
                </ul>
            </li>
            @endcan
            @can('system_proc1_access')
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-gears"></i>
                    <span class="title">@lang('global.system-proc1.title')</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                
                @can('p012_survey_log_access')
                <li class="{{ $request->segment(2) == 'p012_survey_logs' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.p012_survey_logs.index') }}">
                            <i class="fa fa-gears"></i>
                            <span class="title">
                                @lang('global.p012-survey-log.title')
                            </span>
                        </a>
                    </li>
                @endcan
                </ul>
            </li>
            @endcan

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-line-chart"></i>
                    <span class="title">Generated Reports</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                   <li class="{{ $request->is('/reports/test1-users') }}">
                        <a href="{{ url('/admin/reports/test1-users') }}">
                            <i class="fa fa-line-chart"></i>
                            <span class="title">test1 users</span>
                        </a>
                    </li>   <li class="{{ $request->is('/reports/11-meeting-minutes') }}">
                        <a href="{{ url('/admin/reports/11-meeting-minutes') }}">
                            <i class="fa fa-line-chart"></i>
                            <span class="title">1:1 Meeting Minutes </span>
                        </a>
                    </li>
                </ul>
            </li>

            
            @php ($unread = App\MessengerTopic::countUnread())
            <li class="{{ $request->segment(2) == 'messenger' ? 'active' : '' }} {{ ($unread > 0 ? 'unread' : '') }}">
                <a href="{{ route('admin.messenger.index') }}">
                    <i class="fa fa-envelope"></i>

                    <span>Messages</span>
                    @if($unread > 0)
                        {{ ($unread > 0 ? '('.$unread.')' : '') }}
                    @endif
                </a>
            </li>
            <style>
                .page-sidebar-menu .unread * {
                    font-weight:bold !important;
                }
            </style>



            <li class="{{ $request->segment(1) == 'change_password' ? 'active' : '' }}">
                <a href="{{ route('auth.change_password') }}">
                    <i class="fa fa-key"></i>
                    <span class="title">@lang('global.app_change_password')</span>
                </a>
            </li>

            <li>
                <a href="#logout" onclick="$('#logout').submit();">
                    <i class="fa fa-arrow-left"></i>
                    <span class="title">@lang('global.app_logout')</span>
                </a>
            </li>
        </ul>
    </section>
</aside>

