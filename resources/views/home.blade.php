@extends('layouts/app')

@section('main')

    <main>

        <div id="current-series-label">
            current series
        </div>

        <div class="container">

            <div class="row gy-5">
        
                @foreach($comics as $comic)
                    <div class="col-2" id="current-series-container">
                        <div class="current-series">
                            <img class="img-fluid" src=" {{ $comic['thumb'] }} " alt="comic-poster">
                            <div class='title pt-2'>
                                {{ $comic['series'] }} 
                            </div>
                        </div>
                    </div>
                @endforeach
        
            </div>
    
            <button class="mt-4">Load more</button>

        </div>

    </main>

@endsection

</body>

</html>