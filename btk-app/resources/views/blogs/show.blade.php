 @extends('layouts.layout')

@section('content')
    @if($active)
    @else        
        <div class="alert alert-warning">
            Blog bulunamadı.
        </div>
    @endif
@endsection


