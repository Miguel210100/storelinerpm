@extends('layouts.admin')

@section('title')
    Ordenes
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header bg-primary">
                        <h4 class="text-white">Nuevas Ordenes
                            <a href="{{ 'order-history' }}" class="btn btn-warning float-right">Ordenar</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Fecha</th>
                                    <th>No de compra</th>
                                    <th>Total </th>
                                    <th>Status</th>
                                    <th>Accion</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($orders as $item)
                                    <tr>
                                        <td>{{ date('d-m-Y', strtotime($item->created_at)) }}</td>
                                        <td>{{ $item->tracking_no }}</td>
                                        <td>{{ $item->total_price }}</td>
                                        <td>{{ $item->status == '0' ?'pending' : 'completed' }}</td>
                                        <td>
                                            <a href="{{ url('admin/view-order/'.$item->id) }}" class="btn btn-primary">View</a>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection


