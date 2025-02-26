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
    <div class="card">
        <h5 class="card-header">Light Table head</h5>
        <div class="table-responsive text-nowrap">
            <table class="table">
                <thead class="table-light">
                    <tr>
                        <th>Id</th>
                        <th>Description</th>
                        <th>User name</th>
                        <th>Police Id</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @foreach ($issues as $issue)
                        <tr>
                            <td><strong>{{ $issue->id }}</strong></td>
                            <td>
                                {{  \Str::limit($issue->description,40) }}
                            </td>
                            <td>
                            {{ $issue->user->name }}
                            </td>
                            <td>
                            {{ $issue->police->id }}

                            </td>
                            <td>
                                @if ($issue->status == 0)
                                    <span class="badge bg-label-danger me-1">Not Solved yet</span>
                                @else
                                    <span class="badge bg-label-success me-1">Solved</span>
                                @endif
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="{{ route('issue.detail',$issue->id) }}"><i class="bx bx-file-find me-1"></i>
                                            Details</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection