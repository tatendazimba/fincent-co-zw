@extends("layouts.panel")

@section('content')
    @include("partials.nav-admin")
    @include("partials.sidebar")

    <main class="" style="font-family: DejaVu Sans;">
            <div class="row">
                <div class="col s12">
                    <h3 class="secondary-text">EXCHANGE REPORTS</h3>

                    <strong class="uppercase">Generate report for:</strong> <br>

                </div>

                <p>&nbsp;</p>

                <div class="col s12 m8">
                    <form action="" method="GET">
                        <div class="col s4">
                            <div class="input-field">
                                <input class="datepicker" type="text" name="startDate">
                            </div>
                        </div>
                        <div class="col s4">
                            <div class="input-field">
                                <input class="datepicker" type="text" name="endDate">
                            </div>
                        </div>
                        <div class="col s4">
                            <div class="input-field">
                                <button type="submit" class="btn primary">Search</button>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="white col s12">
                    <table>
                        <thead>
                        <tr>
                            <th></th>
                            <th>REF</th>
                            <th>DATE</th>
                            <th class="lighten-1 right-align" class="lighten-1 right-align">FROM</th>
                            <th class="lighten-1 right-align">CURRENCY</th>
                            <th class="lighten-1 right-align">TO</th>
                            <th class="lighten-1 right-align">CURRENCY</th>
                            <th class="lighten-1 right-align">RATE</th>
                            <th class="center-align">TRANSACTION</th>
                            <th>RATE</th>
                            <th>STATUS</th>
                            <th>TELLER</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($transactions as $transaction)
                                <tr>
                                    <td>
                                        <img src="/images/flags/{{  $transaction->_from}}.svg" style="height: 32px;">
                                        <img src="/images/flags/{{ $transaction->_to }}.svg" style="height: 32px;">
                                    </td>
                                    <td>
                                        <strong>
                                            <a href="{{ route('pdf.receipt', $transaction->id) }}">{{ $transaction->id }}</a>
                                        </strong>
                                    </td>
                                    <td>{{ $transaction->created_at }}</td>
                                    <td class="lighten-1 right-align">{{ $transaction->from_amount }}</td>
                                    <td class="lighten-1 right-align">{{ $transaction->_from }}</td>
                                    <td class="lighten-1 right-align">{{ $transaction->to_amount }}</td>
                                    <td class="lighten-1 right-align">{{ $transaction->_to }}</td>
                                    <td class="lighten-1 right-align">{{ $transaction->rate }}</td>
                                    <td class="center-align">{{ $transaction->type }}</td>
                                    <td>{{ $transaction->rate }}</td>
                                    <td>{{ $transaction->status }}</td>
                                    <td>{{ $transaction->user }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

            @include("partials.linebreak")

            <div class="row">
                <div class="col s12">
                    {{ $transactions->links() }}
                </div>
            </div>
    </main>
@endsection
