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
    <div class="row mb-6 gy-6">
        <div class="col-xl">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Basic Layout</h5>
                    <small class="text-body float-end">Default label</small>
                </div>
                <div class="card-body">
                    <form>
                        <div class="mb-6">
                            <label class="form-label" for="basic-default-fullname">Full Name</label>
                            <input type="text" class="form-control" id="basic-default-fullname" placeholder="John Doe"
                                fdprocessedid="gwdkao">
                        </div>
                        <div class="mb-6">
                            <label class="form-label" for="basic-default-company">Company</label>
                            <input type="text" class="form-control" id="basic-default-company" placeholder="ACME Inc."
                                fdprocessedid="jglh2q">
                        </div>
                        <div class="mb-6">
                            <label class="form-label" for="basic-default-email">Email</label>
                            <div class="input-group input-group-merge">
                                <input type="text" id="basic-default-email" class="form-control" placeholder="john.doe"
                                    aria-label="john.doe" aria-describedby="basic-default-email2" fdprocessedid="ri24uw">
                                <span class="input-group-text" id="basic-default-email2">@example.com</span>
                            </div>
                            <div class="form-text">You can use letters, numbers &amp; periods</div>
                        </div>
                        <div class="mb-6">
                            <label class="form-label" for="basic-default-phone">Phone No</label>
                            <input type="text" id="basic-default-phone" class="form-control phone-mask"
                                placeholder="658 799 8941" fdprocessedid="hjc3hs">
                        </div>
                        <div class="mb-6">
                            <label class="form-label" for="basic-default-message">Message</label>
                            <textarea id="basic-default-message" class="form-control"
                                placeholder="Hi, Do you have a moment to talk Joe?"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary" fdprocessedid="jbq1w9">Send</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection