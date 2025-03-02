@extends('dashboard_layout.layout')


<!-------Employer logout form-------->
@section('logout')
        <form method="POST" action="{{ route('logout') }}">
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
    @include('user.menu')
@endsection

<!-------End Employer side menu-------->






@section('content')


@endsection