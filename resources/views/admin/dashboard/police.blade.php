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




    @if(session('success'))
        <div class="position-fixed top-0 end-0 p-3" style="z-index: 2000">
            <div class="bs-toast toast fade show bg-success " role="alert" aria-live="assertive" aria-atomic="true">
                <div class="toast-header">
                    <i class="bx bx-bell me-2"></i>
                    <div class="me-auto fw-semibold">Done</div>
                    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
                <div class="toast-body">
                    {{ session('success') }}
                </div>
            </div>

        </div>
    @endif
    <div class="card">
        <h5 class="card-header">Table Polices</h5>

        <div class="table-responsive text-nowrap">

            <table class="table">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Adress</th>
                        <th>Tournnes</th>
                        <th>user Id card</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @if($polices->isEmpty())
                        <tr>
                            <td colspan="5" class="text-center">No data found</td>
                        </tr>
                    @else
                        @foreach ($polices as $police)
                            <tr>
                                <td>{{ $police->id }}</td>
                                <td>{{ $police->adress }}</td>
                                <td>
                                    {{ $police->tournnes }}
                                </td>
                                <td>{{ $police->id_card }}</td>
                                <td>
                                    <div class="dropdown">
                                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                            <i class="bx bx-dots-vertical-rounded"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="{{ route('polices.show', [$police->id]) }}"><i
                                                    class="bx bx-edit-alt me-1"></i>
                                                More</a>
                                            <form action="{{ route('polices.destroy', $police->id) }}" method="post">
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
                    @endif
                </tbody>
            </table>
        </div>
        <nav aria-label="Page navigation" class="mt-2 d-flex justify-content-center">
            <ul class="pagination">
                <!-- Display Previous Link -->
                @if ($polices->onFirstPage())
                    <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1"><i class="tf-icon bx bx-chevrons-left"></i></a>
                    </li>
                @else
                    <li class="page-item">
                        <a class="page-link" href="{{ $polices->previousPageUrl() }}" rel="prev"><i
                                class="tf-icon bx bx-chevrons-left"></i></a>
                    </li>
                @endif

                <!-- Display Pagination Links -->
                @foreach ($polices->getUrlRange(1, $polices->lastPage()) as $page => $url)
                    <li class="page-item {{ $polices->currentPage() == $page ? 'active' : '' }}">
                        <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                    </li>
                @endforeach

                <!-- Display Next Link -->
                @if ($polices->hasMorePages())
                    <li class="page-item">
                        <a class="page-link" href="{{ $polices->nextPageUrl() }}" rel="next"><i
                                class="tf-icon bx bx-chevrons-right"></i></a>
                    </li>
                @else
                    <li class="page-item disabled">
                        <a class="page-link" href="#"><i class="tf-icon bx bx-chevrons-right"></i></a>
                    </li>
                @endif
            </ul>
        </nav>
    </div>
@endsection