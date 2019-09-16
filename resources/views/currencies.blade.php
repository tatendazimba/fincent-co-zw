@extends("layouts.panel");

@section('content')
    @include("partials.nav-admin")
    @include("partials.sidebar")

    <main class="full-height">

        @include("partials.linebreak")

        <div class="row">
            <div class="col s12">
                <h4>Currencies</h4>
                <p>Manage Supported Currencies</p>
            </div>
        </div>

        @include("partials.linebreak")

        <div class="">
            <div class="row">
                <div class="col s12">
                    <form action="{{ route('currencies.store') }}" method="POST">

                        @csrf

                        <div class="col s6">
                            <label for="code">Currency Code</label>
                            <select class="browser-default" id="code" name="code">
                                <option value="">Select Currency</option>
                                @foreach($currenciesList as $key => $value)
                                    <option value="{{ $key }}">{{ $value }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col s6">
                            <label for="submit"></label>
                            <button id="submit" class="btn-large primary" type="submit">Add Currency</button>
                        </div>
                    </form>
                </div>

                <p>&nbsp;</p>

                <div class="white col s12">
                    <table>
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Title</th>
                            {{--<th>Content</th>--}}
                            <th>Published On</th>
                            <th>Last Edited</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($currencies as $currency)
                            <tr>
                                <td>
                                    <strong>{{ $currency->code }}</strong>
                                </td>
                                <td>
                                    <span>{{ $currency->description }}</span>
                                </td>
                                <td>{{ $currency->created_at }}</td>
                                <td>{{ $currency->updated_at }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

            @include("partials.linebreak")

            <div class="row">
                <div class="col s12">
                    {{ $currencies->links() }}
                </div>
            </div>

        </div>
    </main>
@endsection
