@foreach(auth()->user()->notifications as $notification)
    <div class="alert alert-info">
        {{ $notification->data['message'] }}
        <a href="{{ route('issue.detail', $notification->data['issue_id']) }}">View Issue</a>
    </div>
@endforeach