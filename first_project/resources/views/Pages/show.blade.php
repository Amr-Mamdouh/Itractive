@extend ('master.page')

@section('content')
<h2>names</h2>
<div> @foreach($users as $user)
{{$user->name}}
@endforeach
</div>
@stop