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
                    <form action="{{ route('rates.store') }}" method="POST">

                        @csrf

                        <div class="row">

                            <div class="col s3">
                                <label for="code">Currency Code</label>
                                <select class="browser-default" id="code" name="code">
                                    <option value="">Select Currency</option>
                                    @foreach($currencies as $currency)
                                        <option value="{{ $currency->code }}">{{ $currency->code }} {{ $currency->description }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="col s3">
                                <label for="code">BUY</label>
                                <input type="text" placeholder="Amount" name="buy" required>
                            </div>

                            <div class="col s3">
                                <label for="code">SELL</label>
                                <input type="text" placeholder="Amount" name="sell" required>
                            </div>

                            <div class="col s3">
                                <label for="code">CURRENCY</label>
                                <input type="text" value="ZWL" readonly>
                            </div>
                        </div>
                        <div class="col s6">
                            <label for="submit"></label>
                            <button id="submit" class="btn-large primary" type="submit">Update Rate</button>
                        </div>
                    </form>
                </div>

                <p>&nbsp;</p>

                <div class="white col s12">
                    <table>
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>CURRENCY</th>
                            <th>BUY</th>
                            <th>SELL</th>
                            <th>Published On</th>
                            <th>Last Edited</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($rates as $rate)
                            <tr>
                                <td>
                                    <strong>{{ $rate->id }}</strong>
                                </td>
                                <td>{{ $rate->from }}</td>
                                <td>{{ $rate->buy }}</td>
                                <td>{{ $rate->sell }}</td>
                                <td>{{ $rate->created_at }}</td>
                                <td>{{ $rate->updated_at }}</td>
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
