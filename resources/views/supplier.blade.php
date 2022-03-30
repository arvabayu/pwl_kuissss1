@extends('layout.main')

@section('breadcrump')
<section class="breadcrumbs">
    <div class="container">

        <div class="d-flex justify-content-between align-items-center">
            <h2>Supplier Page</h2>
            <ol>
                <li><a href="/">Home</a></li>
                <li>Supplier Page</li>
            </ol>
        </div>

    </div>
</section>
@endsection

@section('content')
<table class="table text-white">
    <thead>
        <th>No</th>
        <th>Name</th>
        <th>Address</th>
        <th>phone number</th>
        <th>gender</th>
    </thead>
    <tbody>
        @foreach ($supplier as $p)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $p->name }}</td>
            <td>{{ $p->address }}</td>
            <td>{{ $p->phone_number }}</td>
            <td>{{ $p->gender }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
<style>li.page-item span.page-link{
    color: black !important;
    background-color: white !important;
    border-color: black !important;
}
    li.page-item.active span.page-link {
    color: white !important;
    background-color: black !important;
    }</style>
{{ $supplier->links() }}
@endsection
