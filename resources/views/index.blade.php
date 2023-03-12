@extends('layouts.app')
@section('content')
<div class="container">
    <h1 class="text-center" text-danger pt-4>Data Filters in Laravel</h1>
    <hr>

    <div class="row py-2">
        <div class="col-md-6">
            <h2>List of Employees</h2>
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <label for="data_filter">Filter by Date:</label>

                <form action="employee" method="get">
                    <div class="input-group">
                        <select name="data_filter" class="form-select">
                            <option value="">All Dates</option>
                            <option value="today">Today</option>
                            <option value="yesterday">Yesterday</option>
                            <option value="this_week">This week</option>
                            <option value="last_Week">Last Week</option>
                            <option value="this_Month">This Month</option>
                            <option value="last_Month">Last Month</option>
                            <option value="this_Year">This Year</option>
                            <option value="last_Year">Last Year</option>
                        </select>
                        <button type="button" class="btn btn-primary">Filter</button>
                    </div>
                </form>
            </div>
        </div>

        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Last Name</th>
                    <th>Postion</th>
                    <th>Gender</th>
                    <th>E-mail</th>
                    <th>Date Created</th>
                </tr>
            </thead>

            <tbody>

                @foreach ($employees as $employee)
                <tr>
                    <td>{{ $employee->id }}</td>
                    <td>{{ $employee->name }}</td>
                    <td>{{ $employee->last_name }}</td>
                    <td>{{ $employee->gender }}</td>
                    <td>{{ $employee->email }}</td>
                    <td>{{ $employee->created_at ->format('Y-m-d H:i:s') }}</td>


                </tr>

                @endforeach
            </tbody>
        </table>


    </div>
</div>
@endsection
