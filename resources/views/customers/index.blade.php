@extends("layouts.panel");

@section('content')
    @include("partials.nav-admin")
    @include("partials.sidebar")

    <main class="full-height">

        <div class="row">
            <div class="col s12">
                <h4>Customers</h4>
                <p>Manage KYC details.</p>
            </div>
        </div>

        @include("partials.linebreak")

        <div class="">
            <div class="row">
                <div class="white col s12">
                    <table>
                        <thead>
                        <tr>
                            <th>Full Name</th>
                            <th>ID Number</th>
                            <th>Mobile</th>
                            <th>Address</th>
                            <th>Company</th>
                            <th>Registered On</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($customers as $customer)
                            <tr>
                                <td>
                                    <strong>{{ $customer->surname }} {{ $customer->name }}</strong>
                                </td>
                                <td>{{ $customer->id_number }}</td>
                                <td>{{ $customer->mobile }}</td>
                                <td>{{ $customer->address }}</td>
                                <td>{{ $customer->company }}</td>
                                <td>{{ $customer->created_at }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

            @include("partials.linebreak")

            <div class="row">
                <div class="col s12">
                    {{ $customers->links() }}
                </div>
            </div>

        </div>
    </main>
@endsection
