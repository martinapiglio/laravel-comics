@extends('layouts/app')

@section('content')
    <ul>
        @foreach ($comics as $comic)
            <li>
                <span>{{ $comic['series'] }}</span>    
            </li>        
        @endforeach
    </ul>
@endsection

</body>

</html>