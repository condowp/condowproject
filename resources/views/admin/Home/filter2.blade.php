@extends('admin.layouts.app')

<!-- @section('title', 'Test Page') -->

@section('content')
    <!-- <div class="content-wrapper"> -->
        <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Report Details</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                <li class="breadcrumb-item active">Report Details</li>
                </ol>
            </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
        <div class="container">
            <div class="row">
                <!-- {{ $data[0] }} -->
                <h4 style="margin-left:20px;margin-top:20px;">TOP 10 SMALLEST CONDOS BY NUMBER OF UNITS</h4>
                <table class="table" style="margin-left:20px;">
                    <thead>
                        <tr>
                        <th scope="col">CONDO NAME</th>
                        <th scope="col">TOP YEAR</th>
                        <th scope="col">DISTRICT</th>
                        <th scope="col">TOTAL UNITS</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $data)
                        <tr>
                            <td>{{ $data->property_name }}</td>
                            <td>{{ $data->top_year }}</td>
                            <td>{{ $data->district_no }}</td>
                            <td>{{ $data->units_count }}</td>
                        </tr>
                        @endforeach
                        
                    </tbody>
                    </table>
            </div>
        </div>
    <!-- </div> -->
@endsection

@section('js')

@endsection
