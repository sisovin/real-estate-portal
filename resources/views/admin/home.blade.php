@extends('layouts.admin')
@section('content')
<div class="content">
    <!-- Page Header -->
    <div class="row mb-4">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h1 class="h3 mb-1">
                                <i class="fas fa-tachometer-alt text-primary mr-2"></i>
                                Admin Dashboard
                            </h1>
                            <p class="text-muted mb-0">Welcome back! Here's what's happening with VenueHub Cambodia today.</p>
                        </div>
                        <div class="text-right">
                            <small class="text-muted">{{ now()->format('l, F j, Y') }}</small>
                            <br>
                            <small class="text-muted">{{ now()->format('H:i A') }}</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Statistics Cards -->
    <div class="row mb-4">
        <div class="col-xl-3 col-lg-6 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Total Users
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ \App\Models\User::count() }}</div>
                            <div class="text-xs text-muted mt-1">
                                <i class="fas fa-users text-primary mr-1"></i>
                                Registered users
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-users fa-2x text-primary"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-lg-6 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Total Venues
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ \App\Models\Venue::count() }}</div>
                            <div class="text-xs text-muted mt-1">
                                <i class="fas fa-building text-success mr-1"></i>
                                Active venues
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-building fa-2x text-success"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-lg-6 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                Locations
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ \App\Models\Location::count() }}</div>
                            <div class="text-xs text-muted mt-1">
                                <i class="fas fa-map-marker-alt text-info mr-1"></i>
                                Cities covered
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-map-marker-alt fa-2x text-info"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-lg-6 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                Event Types
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ \App\Models\EventType::count() }}</div>
                            <div class="text-xs text-muted mt-1">
                                <i class="fas fa-calendar-alt text-warning mr-1"></i>
                                Categories available
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-calendar-alt fa-2x text-warning"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Charts and Analytics -->
    <div class="row mb-4">
        <div class="col-lg-8 mb-4">
            <div class="card shadow">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">
                        <i class="fas fa-chart-bar mr-2"></i>
                        Venue Distribution by Location
                    </h6>
                </div>
                <div class="card-body">
                    <div class="chart-area">
                        <canvas id="venueChart" width="100%" height="50"></canvas>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4 mb-4">
            <div class="card shadow">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">
                        <i class="fas fa-chart-pie mr-2"></i>
                        Event Types Distribution
                    </h6>
                </div>
                <div class="card-body">
                    <div class="chart-area">
                        <canvas id="eventTypeChart" width="100%" height="50"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Recent Activities and Quick Actions -->
    <div class="row mb-4">
        <div class="col-lg-6 mb-4">
            <div class="card shadow">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">
                        <i class="fas fa-clock mr-2"></i>
                        Recent Venues Added
                    </h6>
                </div>
                <div class="card-body">
                    @php
                        $recentVenues = \App\Models\Venue::latest()->take(5)->get();
                    @endphp

                    @if($recentVenues->count() > 0)
                        @foreach($recentVenues as $venue)
                            <div class="d-flex align-items-center mb-3 pb-2 border-bottom">
                                <div class="mr-3">
                                    <i class="fas fa-building text-success fa-lg"></i>
                                </div>
                                <div class="grow">
                                    <div class="font-weight-bold text-dark">{{ $venue->name }}</div>
                                    <div class="text-muted small">
                                        <i class="fas fa-map-marker-alt mr-1"></i>
                                        {{ $venue->location->name ?? 'Unknown Location' }}
                                    </div>
                                </div>
                                <div class="text-right">
                                    <small class="text-muted">{{ $venue->created_at->diffForHumans() }}</small>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <div class="text-center py-4">
                            <i class="fas fa-building fa-3x text-muted mb-3"></i>
                            <p class="text-muted">No venues added yet</p>
                        </div>
                    @endif
                </div>
            </div>
        </div>

        <div class="col-lg-6 mb-4">
            <div class="card shadow">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">
                        <i class="fas fa-bolt mr-2"></i>
                        Quick Actions
                    </h6>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-6 mb-3">
                            <a href="{{ route('admin.venues.create') }}" class="btn btn-success btn-block">
                                <i class="fas fa-plus-circle mr-2"></i>
                                Add Venue
                            </a>
                        </div>
                        <div class="col-6 mb-3">
                            <a href="{{ route('admin.users.create') }}" class="btn btn-primary btn-block">
                                <i class="fas fa-user-plus mr-2"></i>
                                Add User
                            </a>
                        </div>
                        <div class="col-6 mb-3">
                            <a href="{{ route('admin.locations.create') }}" class="btn btn-info btn-block">
                                <i class="fas fa-map-marker-alt mr-2"></i>
                                Add Location
                            </a>
                        </div>
                        <div class="col-6 mb-3">
                            <a href="{{ route('admin.event-types.create') }}" class="btn btn-warning btn-block">
                                <i class="fas fa-calendar-plus mr-2"></i>
                                Add Event Type
                            </a>
                        </div>
                    </div>

                    <hr>

                    <div class="text-center">
                        <a href="{{ route('home') }}" target="_blank" class="btn btn-outline-secondary btn-sm">
                            <i class="fas fa-external-link-alt mr-1"></i>
                            View Public Site
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- System Information -->
    <div class="row mb-4">
        <div class="col-lg-12">
            <div class="card shadow">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">
                        <i class="fas fa-server mr-2"></i>
                        System Information
                    </h6>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-3 mb-3">
                            <div class="text-center">
                                <i class="fas fa-code-branch fa-2x text-success mb-2"></i>
                                <div class="h6 mb-0">Laravel Version</div>
                                <small class="text-muted">{{ app()->version() }}</small>
                            </div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <div class="text-center">
                                <i class="fas fa-database fa-2x text-info mb-2"></i>
                                <div class="h6 mb-0">PHP Version</div>
                                <small class="text-muted">{{ PHP_VERSION }}</small>
                            </div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <div class="text-center">
                                <i class="fas fa-clock fa-2x text-warning mb-2"></i>
                                <div class="h6 mb-0">Server Time</div>
                                <small class="text-muted">{{ now()->format('H:i:s') }}</small>
                            </div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <div class="text-center">
                                <i class="fas fa-globe fa-2x text-primary mb-2"></i>
                                <div class="h6 mb-0">Environment</div>
                                <small class="text-muted">{{ app()->environment() }}</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Recent Activity Log -->
    <div class="row">
        <div class="col-lg-12">
            <div class="card shadow">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">
                        <i class="fas fa-history mr-2"></i>
                        Recent System Activity
                    </h6>
                </div>
                <div class="card-body">
                    <div class="timeline">
                        <div class="timeline-item">
                            <div class="timeline-marker bg-success"></div>
                            <div class="timeline-content">
                                <h6 class="timeline-title">System Started</h6>
                                <p class="text-muted mb-0">Admin dashboard accessed successfully</p>
                                <small class="text-muted">{{ now()->format('M j, Y \a\t H:i') }}</small>
                            </div>
                        </div>
                        <div class="timeline-item">
                            <div class="timeline-marker bg-info"></div>
                            <div class="timeline-content">
                                <h6 class="timeline-title">Database Connected</h6>
                                <p class="text-muted mb-0">All models and relationships loaded</p>
                                <small class="text-muted">{{ now()->format('M j, Y \a\t H:i') }}</small>
                            </div>
                        </div>
                        <div class="timeline-item">
                            <div class="timeline-marker bg-primary"></div>
                            <div class="timeline-content">
                                <h6 class="timeline-title">VenueHub Cambodia</h6>
                                <p class="text-muted mb-0">Real estate venue portal is running smoothly</p>
                                <small class="text-muted">{{ now()->format('M j, Y \a\t H:i') }}</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('styles')
<style>
/* Additional dashboard-specific styles */
.h3, h3 {
    font-size: 1.75rem;
}

.h5, h5 {
    font-size: 1.25rem;
}

/* Custom dashboard card styling */
.card {
    transition: transform 0.2s ease-in-out, box-shadow 0.2s ease-in-out;
}

.card:hover {
    transform: translateY(-2px);
    box-shadow: 0 0.5rem 2rem 0 rgba(58, 59, 69, 0.2) !important;
}

/* Quick action buttons hover effect */
.btn:hover {
    transform: translateY(-1px);
    box-shadow: 0 0.125rem 0.25rem 0 rgba(58, 59, 69, 0.2);
}

/* Timeline marker animations */
.timeline-marker {
    animation: pulse 2s infinite;
}

@keyframes pulse {
    0% { box-shadow: 0 0 0 0 rgba(78, 115, 223, 0.7); }
    70% { box-shadow: 0 0 0 10px rgba(78, 115, 223, 0); }
    100% { box-shadow: 0 0 0 0 rgba(78, 115, 223, 0); }
}

/* Chart container responsive */
@media (max-width: 768px) {
    .chart-area {
        height: 250px !important;
    }
}
</style>
@endsection

@section('scripts')
@parent
<script src="https://cdn.jsdelivr.net/npm/chart.js@3.9.1/dist/chart.min.js"></script>
<script>
// Venue Distribution Chart
@php
    $venues = \App\Models\Venue::with('location')->get();
    $venueCounts = [];
    foreach($venues as $venue) {
        $locationName = $venue->location->name ?? 'Unknown';
        if (!isset($venueCounts[$locationName])) {
            $venueCounts[$locationName] = 0;
        }
        $venueCounts[$locationName]++;
    }
    $locations = array_keys($venueCounts);
    $counts = array_values($venueCounts);
@endphp

document.addEventListener('DOMContentLoaded', function() {
    // Venue Distribution Chart
    const venueCtx = document.getElementById('venueChart');
    if (venueCtx) {
        new Chart(venueCtx.getContext('2d'), {
            type: 'bar',
            data: {
                labels: {!! json_encode($locations) !!},
                datasets: [{
                    label: 'Venues',
                    data: {!! json_encode($counts) !!},
                    backgroundColor: [
                        'rgba(78, 115, 223, 0.8)',
                        'rgba(28, 200, 138, 0.8)',
                        'rgba(54, 185, 204, 0.8)',
                        'rgba(246, 194, 62, 0.8)',
                        'rgba(231, 74, 59, 0.8)'
                    ],
                    borderColor: [
                        'rgba(78, 115, 223, 1)',
                        'rgba(28, 200, 138, 1)',
                        'rgba(54, 185, 204, 1)',
                        'rgba(246, 194, 62, 1)',
                        'rgba(231, 74, 59, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                scales: {
                    y: {
                        beginAtZero: true,
                        ticks: {
                            stepSize: 1
                        }
                    }
                },
                plugins: {
                    legend: {
                        display: false
                    }
                }
            }
        });
    }

    // Event Types Distribution Chart
    @php
        $eventTypes = \App\Models\EventType::withCount('venues')->get();
        $eventTypeNames = $eventTypes->pluck('name')->toArray();
        $eventTypeCounts = $eventTypes->pluck('venues_count')->toArray();
    @endphp

    const eventTypeCtx = document.getElementById('eventTypeChart');
    if (eventTypeCtx) {
        new Chart(eventTypeCtx.getContext('2d'), {
            type: 'doughnut',
            data: {
                labels: {!! json_encode($eventTypeNames) !!},
                datasets: [{
                    data: {!! json_encode($eventTypeCounts) !!},
                    backgroundColor: [
                        'rgba(78, 115, 223, 0.8)',
                        'rgba(28, 200, 138, 0.8)',
                        'rgba(54, 185, 204, 0.8)',
                        'rgba(246, 194, 62, 0.8)',
                        'rgba(231, 74, 59, 0.8)',
                        'rgba(133, 135, 150, 0.8)'
                    ],
                    borderColor: [
                        'rgba(78, 115, 223, 1)',
                        'rgba(28, 200, 138, 1)',
                        'rgba(54, 185, 204, 1)',
                        'rgba(246, 194, 62, 1)',
                        'rgba(231, 74, 59, 1)',
                        'rgba(133, 135, 150, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        position: 'bottom',
                        labels: {
                            boxWidth: 12,
                            font: {
                                size: 11
                            }
                        }
                    }
                }
            }
        });
    }
});
</script>
@endsection