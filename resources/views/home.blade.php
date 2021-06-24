@extends('layout.main')

@section('content')

    <section class="container mt-5">
        <table class="table table-bordered table-dark">
            <thead>

                <tr>
                    <th scope="col">name</th>
                    <th scope="col">city</th>
                    <th scope="col">state</th>
                    <th scope="col">address</th>
                    <th scope="col">postal_code</th>
                    <th scope="col">rooms</th>
                    <th scope="col">square_meters</th>
                    <th scope="col">wifi</th>
                    <th scope="col">kitchen</th>
                    <th scope="col">description</th>
                    <th scope="col">avaiable</th>
                    <th scope="col">price</th>
                    <th scope="col">vote</th>
                </tr>

            </thead>

        @foreach ($holiday_homes as $holiday_home)
            
            <tbody>
                
                <tr>
                    <td>{{ $holiday_home['name'] }}</td>
                    <td>{{ $holiday_home['city'] }}</td>
                    <td>{{ $holiday_home['state'] }}</td>
                    <td>{{ $holiday_home['address'] }}</td>
                    <td>{{ $holiday_home['postal_code'] }}</td>
                    <td>{{ $holiday_home['rooms'] }}</td>
                    <td>{{ $holiday_home['square_meters'] }}</td>
                    <td>{{ $holiday_home['wifi'] }}</td>
                    <td>{{ $holiday_home['kitchen'] }}</td>
                    <td>{{ $holiday_home['description'] }}</td>
                    <td>{{ $holiday_home['avaiable'] }}</td>
                    <td>{{ $holiday_home['price'] }}</td>
                    <td>{{ $holiday_home['vote'] }}</td>
                </tr>

            </tbody>    


        @endforeach
        </table>

    </section>

    <section class="container d-flex justify-content-center mt-3 mb-3">
        {{$holiday_homes->links()}}
    </section>

@endsection