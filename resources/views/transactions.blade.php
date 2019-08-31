@extends("layouts.app")

@include("partials.customer-nav")

@section("content")
    <main class=""style="min-height: 100%;">

        @include("partials.linebreak")

        <div class="container">
            <h5 class="no-margin varela capitalise">View your TapCard payments.</h5>
            <strong class="container">Get control of your TapCards and spending.</strong>

            <p>
                <i class="small-text">Fetched <strong>{{ count($transactions) }}</strong> transactions.</i><br>
                @if($response->code !== "00")
                <div>

                </div>
                @endif
            </p>

            <div class="top-padding bottom-padding">
                <div class="small-btn joined-btns hide-on-small-only">
                    <a href="{{ route('customer.transactions', $today) }}" class="filter-today bordered btn left-outer">Today</a>
                    <a href="{{ route('customer.transactions', $yesterday) }}"  class="filter-yesterday bordered btn">Yesterday</a>
                    <a href="{{ route('customer.transactions', $thisWeek) }}"  class="filter-this-week bordered btn">This Week</a>
                    <a href="{{ route('customer.transactions', $thisMonth) }}"  class="filter-this-month bordered btn">This Month</a>
                    <a href="{{ route('customer.transactions', $lastMonth) }}"  class="filter-last-month right-outer bordered btn">Last Month</a>
                </div>

                <div class="hide-on-med-and-up">
                    <a href="{{ route('customer.transactions', $today) }}" class="filter-today primary-text"><strong>Today</strong></a> |
                    <a href="{{ route('customer.transactions', $yesterday) }}" class="filter-yesterday primary-text"><strong>Yesterday</strong></a> |
                    <a href="{{ route('customer.transactions', $thisWeek) }}" class="filter-this-week primary-text"><strong>This Week</strong></a> |
                    <a href="{{ route('customer.transactions', $thisMonth) }}" class="filter-this-month primary-text"><strong>This Month</strong></a> |
                    <a href="{{ route('customer.transactions', $lastMonth) }}" class="filter-last-month primary-text"><strong>Last Month</strong></a>
                </div>
            </div>
        </div>

        <div class="white">
            <div class="container left-align">
                <div class="row">
                    <div class="col s12 no-pad" style="">
                        <table class="responsive-table">
                            <thead>
                                <tr>
                                    <th>Ref</th>
                                    <th>Date</th>
                                    <th>Card</th>
                                    <th>Channel</th>
                                    <th>Description</th>
                                    <th class="right-align light-grey">Credit</th>
                                    <th class="right-align light-grey">Debit</th>
                                    <th class="right-align light-grey">Balance</th>
                                    <th class="center-align">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($transactions as $transaction)
                                    <tr>
                                        <td>{{ $transaction->id }}</td>
                                        <td>{{ $transaction->date }}</td>
                                        <td>
                                            @if ($transaction->transactionTypesId === 26)
                                                <span></span>
                                            @elseif ($transaction->transactionTypesId === 6)
                                                <span></span>
                                            @else
                                                <span>{{ substr_replace($transaction->billid, " ******* ", 6, 9) }}</span>
                                            @endif
                                        </td>
                                        <td>{{ $transaction->channel }}</td>
                                        <td>
                                            @if ($transaction->transactionTypesId === 23)
                                                <strong>Tap Payment</strong><br>
                                                <span>{{ $transaction->description }}</span>
                                            @elseif ($transaction->transactionTypesId === 20)
                                                <strong>TapCard Top-up</strong><br>
                                                <span>{{ $transaction->description }}</span>
                                            @elseif ($transaction->transactionTypesId === 26)
                                                <strong>TapCard Activation</strong><br>
                                                <span>{{ $transaction->description }}</span>
                                            @else
                                                <span>{{ $transaction->description }}</span>
                                            @endif
                                        </td>
                                        <td class="right-align light-grey">
                                            @if ($transaction->transactionTypesId === 20)
                                                <span>{{ number_format($transaction->credit / 100, 2) }}</span>
                                            @elseif ($transaction->transactionTypesId === 26)
                                                <span>{{ number_format($transaction->credit / 100, 2) }}</span>
                                            @endif
                                        </td>
                                        <td class="right-align light-grey">
                                            @if ($transaction->transactionTypesId === 23)
                                                <span>{{ number_format($transaction->debit / 100, 2) }}</span>
                                            @elseif ($transaction->transactionTypesId === 26)
                                                <span>{{ number_format($transaction->debit / 100, 2) }}</span>
                                            @endif
                                        </td>
                                        <td class="right-align light-grey">{{ number_format($transaction->balance / 100, 2) }}</td>
                                        <td class="center-align">
                                            @if($transaction->status === "COMPLETE")
                                                <strong class="teal-text">
                                                    {{ $transaction->status }}
                                                </strong>
                                            @else
                                                <strong class="red-text">
                                                    {{ $transaction->status }}
                                                </strong>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            @include("partials.linebreak")
            @include("partials.linebreak")

        </div>

    </main>
@endsection

