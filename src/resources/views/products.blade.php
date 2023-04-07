@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">PRODUCTS</div>
                        <table>
                            @foreach($products as $product)
                            <tr>
                                <td>{{ $product -> id }}</td>
                                <td>{{ $product -> name }}</td>
                                <td>{{ $product -> category }}</td>
                                <td>{{ $product -> price }}</td>
                                <td>{{ $product -> description }}</td>
                            </tr>
                            @endforeach
                        </table>
                </div>
            </div>
        </div>
    </div>
@endsection
