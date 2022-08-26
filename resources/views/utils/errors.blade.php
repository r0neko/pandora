@if ($errors->any())
    <div class="alert alert-danger">
        @if ($errors->count() > 1)
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @else
            <strong>Error:</strong>&nbsp;{{ $errors->first() }}
        @endif
    </div>
@endif
