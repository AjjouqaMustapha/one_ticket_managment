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
        <h5 class="card-header">Table Admins</h5>
        <div class="table-responsive text-nowrap">
            <table class="table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Created AT</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @foreach ($admins as $admin)
                        <tr>
                            <td>{{ $admin->name }}</td>
                            <td>{{ $admin->email }}</td>
                            <td>
                                {{ $admin->created_at->diffForHumans() }}
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i>
                                            Edit</a>
                                        <form action="{{ route('users.admins.delete', $police->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button class="dropdown-item" type="submit"><i class="bx bx-trash me-1"></i>
                                                Delete</button>
                                        </form>
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