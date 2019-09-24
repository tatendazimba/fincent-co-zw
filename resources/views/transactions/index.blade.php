@extends("layouts.panel")

@section('content')
    @include("partials.nav-admin")
    @include("partials.sidebar")

    <main class="" style="height: auto;">

        <div class="">
            <calculate-component></calculate-component>
        </div>

        @include("partials.linebreak")

        <div class="row">
            <div class="col s12">
                {{ $transactions->links() }}
            </div>
        </div>
    </main>
@endsection
