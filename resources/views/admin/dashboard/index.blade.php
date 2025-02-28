@extends('dashboard_layout.layout')


@section('logout')
    <form method="POST" action="{{ route('admin.logout') }}">
        @csrf
        <button type="submit" class="btn">
            <a class="dropdown-item">
                <i class="bx bx-power-off me-2"></i>
                <span class="align-middle">Log Out</span>
            </a>
    </form>
@endsection



@section('content')
    <div class="row g-6">
        <!-- Card Border Shadow -->
        <div class="col-lg-3 col-sm-6">
            <div class="card card-border-shadow-primary h-100">
                <div class="card-body">
                    <p class="mb-2">Total Users</p>

                    <div class="d-flex align-items-center mt-4">
                        <div class="avatar me-4">
                            <span class="avatar-initial rounded bg-label-primary"><i
                                    class="icon-base bx bxs-user-detail icon-lg"></i></span>
                        </div>
                        <h4 class="mb-0">{{ $total_users }}</h4>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6">
            <div class="card card-border-shadow-primary h-100">
                <div class="card-body">
                    <p class="mb-2">Total Employer</p>
                    <div class="d-flex align-items-center mt-4">
                        <div class="avatar me-4">
                            <span class="avatar-initial rounded bg-label-success"><i
                                    class="icon-base bx bxs-briefcase-alt-2  icon-lg"></i></span>
                        </div>
                        <h4 class="mb-0">{{ $total_users }}</h4>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6">
            <div class="card card-border-shadow-primary h-100">
                <div class="card-body">
                    <p class="mb-2">Total Tickets</p>

                    <div class="d-flex align-items-center mt-4">
                        <div class="avatar me-4">
                            <span class="avatar-initial rounded bg-label-danger"><i
                                    class="icon-base bx bxs-discount icon-lg"></i></span>
                        </div>
                        <h4 class="mb-0">{{ $total_issues }}</h4>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6">
            <div class="card card-border-shadow-primary h-100">
                <div class="card-body">
                    <p class="mb-2">Total Polices</p>
                    <div class="d-flex align-items-center mt-4">
                        <div class="avatar me-4">
                            <span class="avatar-initial rounded bg-label-warning"><i
                                    class="icon-base bx bx-album  icon-lg"></i></span>
                        </div>
                        <h4 class="mb-0">{{ $total_polices }}</h4>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-lg-3 col-sm-6">
            <div class="card card-border-shadow-primary h-100">
                <div class="card-body">
                    <p class="mb-2">Total Tickets Solved</p>

                    <div class="d-flex align-items-center mt-4">
                        <div class="avatar me-4">
                            <span class="avatar-initial rounded bg-label-success">
                                <i class="icon-base bx bx-check icon-lg"></i>
                            </span>
                        </div>
                        <h4 class="mb-0">{{ $issus_solved }}</h4>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6">
            <div class="card card-border-shadow-primary h-100">
                <div class="card-body">
                    <p class="mb-2">Total Tickets Processing</p>
                    <div class="d-flex align-items-center mt-4">
                        <div class="avatar me-4">
                            <span class="avatar-initial rounded bg-label-warning">
                                <i class="icon-base bx bx-loader-circle  icon-lg"></i>
                            </span>
                        </div>
                        <h4 class="mb-0">{{ $issus_pending }}</h4>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-7 col-xxl-8 mb-6 mb-lg-0 mt-4">
            <div class="card">
                <h5 class="card-header">Last 5 Tickets</h5>
                <div class="table-responsive text-nowrap">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Id Card</th>
                                <th>Creat At</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            @foreach ($issus as $issu)
                                <tr>
                                    <td>
                                        {{ $issu->user->name }}
                                    </td>
                                    <td>
                                        {{ $issu->user->id_card }}
                                    </td>
                                    <td>
                                        {{ $issu->created_at->diffForHumans() }}
                                    </td>
                                    <td>
                                        @if ($issu->status == 0)
                                            <span class="badge bg-label-danger me-1">Not Solved yet</span>
                                        @else
                                            <span class="badge bg-label-success me-1">Solved</span>
                                        @endif
                                    </td>
                                    <td>
                                        <div class="dropdown">
                                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                                data-bs-toggle="dropdown" fdprocessedid="tii8dp"><i
                                                    class="icon-base bx bx-dots-vertical-rounded"></i></button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="{{ route('issue.detail', $issu->id) }}"><i
                                                        class="icon-base bx bx-edit-alt me-1"></i> View Details</a>

                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="col-lg-7 col-xxl-4 mb-6 mb-lg-0 mt-4">
            <div class="card card-border-shadow-primary h-100">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between">
                        <p class="mb-2">Solving Rate</p>
                        <span>{{ $solving_rate }} %</span>
                    </div>
                    <div class="d-flex align-items-center mt-4">
                        <canvas id="solvingRateChart"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection










@section('js')
    <script>
        var ctx = document.getElementById('solvingRateChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'doughnut',
            data: {
                labels: ['Solved', 'Pending'],
                datasets: [{
                    label: '{{$total_issues  }}',
                    data: [{{ $issus_solved }}, {{ $issus_pending }}],
                    backgroundColor: [
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 99, 132, 0.2)',
                    ],
                    borderColor: [
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 99, 132, 1)',
                    ],
                    borderWidth: 0.5
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });

    </script>
@endsection






@section('menu')
    @include('admin.dashboard.menu')
@endsection