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
    @if (Auth::guard()->name == 'admin')
        @include('admin.dashboard.menu')
    @elseif(Auth::guard()->name == 'employer')
        @include('employer.dashboard.menu')
    @endif
@endsection

<!-------End Employer side menu-------->




@section('content')
    <div class="card mb-4">
        <div class="d-flex justify-content-between align-items-center ">
            <h5 class="card-header">Ticket id : {{ $issue->id }}</h5>
            @if (Auth::guard()->name == 'admin' && $issue->status == 0)
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
                            <form id="transferForm" method="post" action="{{ route('issue.forward') }}">
                                @csrf
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col mb-3">
                                            <input type="hidden" name="issue_id" value="{{ $issue->id }}">
                                            <label for="role" class="form-label">Select Employer</label>
                                            <select id="role" name="employer_id" class="form-select">
                                                <option value="">-- Select Employer --</option>
                                                @foreach ($employer_list as $employer)
                                                    <option value="{{ $employer->id }}">{{ $employer->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                        Close
                                    </button>
                                    <button type="submit" class="btn btn-primary">Forward</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            @endif
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
                    <strong>Section :</strong> {{ $issue->role }}
                </div>
                <div>
                    <strong>Forwarded to :</strong>
                    @if ($issue->status == 1 && isset($forwarded_employer->employer))
                        {{ $forwarded_employer->employer->name }}
                    @else
                        No employer yet
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
        @if (Auth::guard()->name == 'employer')

            <div class="card-footer">
                <div class="mt-3">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary mx-auto d-block" data-bs-toggle="modal"
                        data-bs-target="#modalTop">
                        Solved
                    </button>

                    <!-- Modal -->
                    <div class="modal modal-top fade" id="modalTop" tabindex="-1" aria-hidden="true" style="display: none;">
                        <div class="modal-dialog">
                            <form class="modal-content" action="{{ route('issue.solved.employer', $issue->id) }}" method="post">
                                @csrf
                                <div class="modal-header">
                                    <h5 class="modal-title" id="modalTopTitle">Send A Message</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col mb-3">
                                            <label for="nameSlideTop" class="form-label">Message</label>
                                            <textarea id="nameSlideTop" class="form-control"
                                                placeholder="Enter Message"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                        Close
                                    </button>
                                    <button type="submit" class="btn btn-primary">Next</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        @endif
    </div>
@endsection