<div class="sidebar">
    <nav class="sidebar-nav">
        <!-- Dashboard Section -->
        <div class="sidebar-section">
            <ul class="nav">
                <li class="nav-item">
                    <a href="{{ route("admin.home") }}" class="nav-link {{ request()->is('admin') && !request()->is('admin/*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <span class="nav-text">{{ trans('global.dashboard') }}</span>
                        <span class="badge badge-primary nav-badge">New</span>
                    </a>
                </li>
            </ul>
        </div>

        <!-- Venue Management Section -->
        <div class="sidebar-section">
            <div class="nav-title">
                <i class="fas fa-building mr-2"></i>
                Venue Management
            </div>
            <ul class="nav nav-section">
                @can('venue_access')
                    <li class="nav-item">
                        <a href="{{ route("admin.venues.index") }}" class="nav-link {{ request()->is('admin/venues') || request()->is('admin/venues/*') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-building"></i>
                            <span class="nav-text">{{ trans('cruds.venue.title') }}</span>
                            <span class="badge badge-info nav-badge">{{ \App\Models\Venue::count() }}</span>
                        </a>
                    </li>
                @endcan

                @can('location_access')
                    <li class="nav-item">
                        <a href="{{ route("admin.locations.index") }}" class="nav-link {{ request()->is('admin/locations') || request()->is('admin/locations/*') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-map-marker-alt"></i>
                            <span class="nav-text">{{ trans('cruds.location.title') }}</span>
                            <span class="badge badge-success nav-badge">{{ \App\Models\Location::count() }}</span>
                        </a>
                    </li>
                @endcan

                @can('event_type_access')
                    <li class="nav-item">
                        <a href="{{ route("admin.event-types.index") }}" class="nav-link {{ request()->is('admin/event-types') || request()->is('admin/event-types/*') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-calendar-alt"></i>
                            <span class="nav-text">{{ trans('cruds.eventType.title') }}</span>
                            <span class="badge badge-warning nav-badge">{{ \App\Models\EventType::count() }}</span>
                        </a>
                    </li>
                @endcan
            </ul>
        </div>

        <!-- User Management Section -->
        @can('user_management_access')
        <div class="sidebar-section">
            <div class="nav-title">
                <i class="fas fa-users-cog mr-2"></i>
                User Management
            </div>
            <ul class="nav nav-section">
                @can('user_access')
                    <li class="nav-item">
                        <a href="{{ route("admin.users.index") }}" class="nav-link {{ request()->is('admin/users') || request()->is('admin/users/*') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-users"></i>
                            <span class="nav-text">{{ trans('cruds.user.title') }}</span>
                            <span class="badge badge-primary nav-badge">{{ \App\Models\User::count() }}</span>
                        </a>
                    </li>
                @endcan

                @can('role_access')
                    <li class="nav-item">
                        <a href="{{ route("admin.roles.index") }}" class="nav-link {{ request()->is('admin/roles') || request()->is('admin/roles/*') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-user-shield"></i>
                            <span class="nav-text">{{ trans('cruds.role.title') }}</span>
                            <span class="badge badge-secondary nav-badge">{{ \App\Models\Role::count() }}</span>
                        </a>
                    </li>
                @endcan

                @can('permission_access')
                    <li class="nav-item">
                        <a href="{{ route("admin.permissions.index") }}" class="nav-link {{ request()->is('admin/permissions') || request()->is('admin/permissions/*') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-key"></i>
                            <span class="nav-text">{{ trans('cruds.permission.title') }}</span>
                            <span class="badge badge-dark nav-badge">{{ \App\Models\Permission::count() }}</span>
                        </a>
                    </li>
                @endcan
            </ul>
        </div>
        @endcan

        <!-- Analytics & Reports Section -->
        <div class="sidebar-section">
            <div class="nav-title">
                <i class="fas fa-chart-line mr-2"></i>
                Analytics & Reports
            </div>
            <ul class="nav nav-section">
                <li class="nav-item">
                    <a href="#" class="nav-link" onclick="alert('Analytics feature coming soon!')">
                        <i class="nav-icon fas fa-chart-bar"></i>
                        <span class="nav-text">Venue Analytics</span>
                        <i class="fas fa-external-link-alt nav-icon-right text-muted"></i>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link" onclick="alert('Reports feature coming soon!')">
                        <i class="nav-icon fas fa-file-alt"></i>
                        <span class="nav-text">Reports</span>
                        <i class="fas fa-external-link-alt nav-icon-right text-muted"></i>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link" onclick="alert('Export feature coming soon!')">
                        <i class="nav-icon fas fa-download"></i>
                        <span class="nav-text">Data Export</span>
                        <i class="fas fa-external-link-alt nav-icon-right text-muted"></i>
                    </a>
                </li>
            </ul>
        </div>

        <!-- Content Management Section -->
        <div class="sidebar-section">
            <div class="nav-title">
                <i class="fas fa-edit mr-2"></i>
                Content Management
            </div>
            <ul class="nav nav-section">
                <li class="nav-item">
                    <a href="#" class="nav-link" onclick="alert('Media library feature coming soon!')">
                        <i class="nav-icon fas fa-images"></i>
                        <span class="nav-text">Media Library</span>
                        <span class="badge badge-info nav-badge">{{ \Spatie\MediaLibrary\MediaCollections\Models\Media::count() }}</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link" onclick="alert('Content pages feature coming soon!')">
                        <i class="nav-icon fas fa-file-text"></i>
                        <span class="nav-text">Content Pages</span>
                        <i class="fas fa-external-link-alt nav-icon-right text-muted"></i>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link" onclick="alert('SEO settings feature coming soon!')">
                        <i class="nav-icon fas fa-search"></i>
                        <span class="nav-text">SEO Settings</span>
                        <i class="fas fa-external-link-alt nav-icon-right text-muted"></i>
                    </a>
                </li>
            </ul>
        </div>

        <!-- System Section -->
        <div class="sidebar-section">
            <div class="nav-title">
                <i class="fas fa-cogs mr-2"></i>
                System
            </div>
            <ul class="nav nav-section">
                <li class="nav-item">
                    <a href="#" class="nav-link" onclick="alert('Settings feature coming soon!')">
                        <i class="nav-icon fas fa-cog"></i>
                        <span class="nav-text">System Settings</span>
                        <i class="fas fa-external-link-alt nav-icon-right text-muted"></i>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link" onclick="alert('Logs feature coming soon!')">
                        <i class="nav-icon fas fa-list-alt"></i>
                        <span class="nav-text">System Logs</span>
                        <i class="fas fa-external-link-alt nav-icon-right text-muted"></i>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link" onclick="alert('Backup feature coming soon!')">
                        <i class="nav-icon fas fa-database"></i>
                        <span class="nav-text">Backup & Restore</span>
                        <i class="fas fa-external-link-alt nav-icon-right text-muted"></i>
                    </a>
                </li>
            </ul>
        </div>

        <!-- Quick Links Section -->
        <div class="sidebar-section">
            <div class="nav-title">
                <i class="fas fa-external-link-alt mr-2"></i>
                Quick Links
            </div>
            <ul class="nav nav-section">
                <li class="nav-item">
                    <a href="{{ route('home') }}" target="_blank" class="nav-link">
                        <i class="nav-icon fas fa-home"></i>
                        <span class="nav-text">View Public Site</span>
                        <i class="fas fa-external-link-alt nav-icon-right text-muted"></i>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('contact') }}" target="_blank" class="nav-link">
                        <i class="nav-icon fas fa-envelope"></i>
                        <span class="nav-text">Contact Page</span>
                        <i class="fas fa-external-link-alt nav-icon-right text-muted"></i>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ url('/search') }}" target="_blank" class="nav-link">
                        <i class="nav-icon fas fa-search"></i>
                        <span class="nav-text">Search Venues</span>
                        <i class="fas fa-external-link-alt nav-icon-right text-muted"></i>
                    </a>
                </li>
            </ul>
        </div>

        <!-- Account Section -->
        <div class="sidebar-section">
            <div class="nav-title">
                <i class="fas fa-user mr-2"></i>
                Account
            </div>
            <ul class="nav nav-section">
                <li class="nav-item">
                    <a href="#" class="nav-link" onclick="alert('Profile feature coming soon!')">
                        <i class="nav-icon fas fa-user-edit"></i>
                        <span class="nav-text">My Profile</span>
                        <i class="fas fa-external-link-alt nav-icon-right text-muted"></i>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link" onclick="event.preventDefault(); document.getElementById('logoutform').submit();">
                        <i class="nav-icon fas fa-sign-out-alt"></i>
                        <span class="nav-text">{{ trans('global.logout') }}</span>
                    </a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Sidebar Footer -->
    <div class="sidebar-footer">
        <div class="text-center p-3">
            <small class="text-muted">
                <i class="fas fa-code-branch mr-1"></i>
                VenueHub Cambodia v2.0
            </small>
            <br>
            <small class="text-muted">
                <i class="fas fa-heart text-danger mr-1"></i>
                Made with love in Cambodia
            </small>
        </div>
    </div>

    <button class="sidebar-minimizer brand-minimizer" type="button"></button>
</div>