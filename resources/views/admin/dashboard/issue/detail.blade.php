@extends('dashboard_layout.layout')

<!-------Employer logout form-------->
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
<!-------End Employer logout form-------->


<!-------Employer side menu-------->

@section('menu')
    @include('admin.dashboard.menu')
@endsection

<!-------End Employer side menu-------->






@section('content')
    <div class="card mb-4">
        <div class="d-flex justify-content-between align-items-center ">
            <h5 class="card-header">Ticket id : {{ $issue->id }}</h5>
            <div>
                <button type="button" class="btn btn-primary me-4" data-bs-toggle="modal" data-bs-target="#basicModal">
                    Forward To Employer
                </button>
            </div>
            <div class="modal fade" id="basicModal" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel1">Employers List</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form action="">
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col mb-3">
                                        <label for="employer" class="form-label">Select Employer</label>
                                        <select id="employer" class="form-select">
                                            <option>Default select</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                    Close
                                </button>
                                <button type="button" class="btn btn-primary">Forward</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <hr class="my-0">
        <div class="card-body ">
            <div class="d-flex justify-content-between mb-4 w-75 mx-auto">
                <div>
                    <strong>User Name :</strong> {{ $issue->user->name }}
                </div>
                <div>
                    <strong>Id Card :</strong> {{ $issue->user->id_card }}
                </div>
            </div>
            <hr class="my-0">
            <div class="d-flex justify-content-between mt-4 mb-4 w-75 mx-auto">
                <div>
                    <strong>Email :</strong> {{ $issue->user->email }}
                </div>
                <div>
                    <strong>Police Id :</strong> {{ $issue->police->id }}
                </div>
            </div>
            <hr class="my-0">
            <div class="d-flex justify-content-between mt-4 mb-4 w-75 mx-auto">
                <div>
                    <strong>Creation Date :</strong> {{ $issue->created_at }}
                </div>
                <div>
                    <strong>status :</strong>
                    @if ($issue->status == 0)
                        <span class="badge bg-label-danger me-1">Not Solved yet</span>
                    @else
                        <span class="badge bg-label-success me-1">Solved</span>
                    @endif
                </div>

            </div>
            <hr class="my-0">
            <div class="d-flex justify-content-between mt-4 mb-4 w-75 mx-auto">
                <div>
                    <strong>Description :</strong> {{ $issue->description }}
                </div>
            </div>

        </div>
        <!-- /Account -->
    </div>
@endsection