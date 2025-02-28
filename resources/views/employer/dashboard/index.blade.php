@extends('dashboard_layout.layout')


<!-------Employer logout form-------->
@section('logout')
        <form method="POST" action="{{ route('employer.logout') }}">
        @csrf
        <button type="submit" class="btn">
            <a class="dropdown-item">
                <i class="bx bx-power-off me-2"></i>
                <span class="align-middle">Log Out</span>
            </a>
    </form>
@endsection
<!-------End Employer logout form-------->


<!-------Employer side menu-------->

@section('menu')
    @include('employer.dashboard.menu')
@endsection

<!-------End Employer side menu-------->






@section('content')
    <div class="row g-6">
        <!-- Card Border Shadow -->
        <div class="col-lg-3 col-sm-6">
            <div class="card card-border-shadow-primary h-100">
                <div class="card-body">
                    <p class="mb-2">Total tickets</p>

                    <div class="d-flex align-items-center mt-4">
                        <div class="avatar me-4">
                            <span class="avatar-initial rounded bg-label-primary"><i
                                    class="icon-base bx bxs-user-detail icon-lg"></i></span>
                        </div>
                        <h4 class="mb-0">{{ $tickets }}</h4>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6">
            <div class="card card-border-shadow-primary h-100">
                <div class="card-body">
                    <p class="mb-2">Tickets Solved</p>
                    <div class="d-flex align-items-center mt-4">
                        <div class="avatar me-4">
                            <span class="avatar-initial rounded bg-label-success"><i
                                    class="icon-base bx bxs-briefcase-alt-2  icon-lg"></i></span>
                        </div>
                        <h4 class="mb-0">{{ $tickets_solved }}</h4>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6">
            <div class="card card-border-shadow-primary h-100">
                <div class="card-body">
                    <p class="mb-2">Total Pending</p>

                    <div class="d-flex align-items-center mt-4">
                        <div class="avatar me-4">
                            <span class="avatar-initial rounded bg-label-danger"><i
                                    class="icon-base bx bxs-discount icon-lg"></i></span>
                        </div>
                        <h4 class="mb-0">{{ $tickets_pending }}</h4>
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
                        <h4 class="mb-0"></h4>
                    </div>

                </div>
            </div>
        </div>
    </div>


@endsection