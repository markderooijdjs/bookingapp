@inject('request', 'Illuminate\Http\Request')
<div class="page-sidebar-wrapper">
    <div class="page-sidebar navbar-collapse collapse">
        <ul class="page-sidebar-menu"
            data-keep-expanded="false"
            data-auto-scroll="true"
            data-slide-speed="200">
            
            <li class="{{ $request->segment(1) == 'home' ? 'active' : '' }}">
                <a href="{{ url('/') }}">
                    <i class="fa fa-wrench"></i>
                    <span class="title">@lang('quickadmin.qa_dashboard')</span>
                </a>
            </li>
            
            @can('client_access')
            <li class="{{ $request->segment(2) == 'clients' ? 'active' : '' }}">
                <a href="{{ route('admin.clients.index') }}">
                    <i class="fa fa-user"></i>
                    <span class="title">Customers</span>
                </a>
            </li>
            @endcan
                      
            @can('appointment_access')
            <li class="{{ $request->segment(2) == 'appointments' ? 'active' : '' }}">
                <a href="{{ route('admin.appointments.index') }}">
                    <i class="fa fa-calendar"></i>
                    <span class="title">@lang('Bookings')</span>
                </a>
            </li>
            @endcan

            <li class="{{ $request->segment(1) == 'change_password' ? 'active' : '' }}">
                <a href="{{ route('auth.change_password') }}">
                    <i class="fa fa-key"></i>
                    <span class="title">Change password</span>
                </a>
            </li>

            <li>
                <a href="#logout" onclick="$('#logout').submit();">
                    <i class="fa fa-arrow-left"></i>
                    <span class="title">@lang('quickadmin.qa_logout')</span>
                </a>
            </li>
        </ul>
    </div>
</div>
{!! Form::open(['route' => 'auth.logout', 'style' => 'display:none;', 'id' => 'logout']) !!}
<button type="submit">@lang('quickadmin.logout')</button>
{!! Form::close() !!}
