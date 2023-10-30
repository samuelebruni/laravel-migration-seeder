<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>

    <div class="container my-4">
        <div class="row">

            @forelse ($trains as $train)
                <div class="col-6 col-md-4 col-lg-4 g-3">
                    <div class="card">
                        <div class="card-header">
                            <h5>Company: {{ $train->azienda }}</h5>
                            <p class="m-0">from: {{ $train->stazione_di_partenza }}</p>
                            <p class="m-0">to: {{ $train->stazione_di_arrivo }}</p>
                        </div>
                        <div class="card-body">
                            <p class="m-0">start: <strong>{{ $train->orario_di_partenza }}</strong></p>
                            <p class="m-0">arrive: <strong>{{ $train->orario_di_arrivo }}</strong></p>
                            <p class="m-0">in time? <strong><?= $train->in_orario ? 'yes' : 'no' ?></strong></p>
                            <p class="m-0">deleted? <strong><?= $train->cancellato ? 'yes' : 'no' ?></strong></p>
                        </div>
                        <div class="card-footer">
                            <p>train code: {{ $train->codice_treno }}</p>
                        </div>


                    </div>
                </div>
            @empty
            @endforelse

        </div>
    </div>

</body>

</html>