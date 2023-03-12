<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Filters</title>
</head>
<body>

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
                        <td>{{ $employes->id }}</td>
                        <td>{{ $employes->name }}</td>
                        <td>{{ $employes->last_name }}</td>
                        <td>{{ $employes->gender }}</td>
                        <td>{{ $employes->email }}</td>
                        <td>{{ $employes->created_at ->format('Y-m-d H:i:s') }}</td>


                    </tr>

                    @endforeach
                </tbody>
            </table>


        </div>
    </div>

</body>
</html>
