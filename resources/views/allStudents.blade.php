<!DOCTYPE html>
<html">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

        <title>DB</title>
    </head>

    <body>
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <h2 class="container text-center"> Student Data</h2>
                    <a href="/addStudent" class="btn btn-success btn-sm mt-4">
                        Add Student
                    </a>


                    <table class="table table-border table-striped mt-4">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>View</th>
                                <th>Update</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($data as $id => $students)
                                <tr>
                                    <td>{{ $students->name }}</td>

                                    <td>
                                        <a href="{{ route('view.student', $students->id) }}"
                                            class='btn btn-sm btn-primary'> View </a>
                                    </td>
                                    <td>
                                        <a href="{{ route('update.page', $students->id) }}" class='btn btn-sm btn-info'>
                                            update </a>
                                    </td>
                                    <td>
                                        <a href="{{ route('delete.student', $students->id) }}"
                                            class='btn btn-sm btn-danger'> Delete </a>

                                    </td>
                                </tr>
                            @endforeach
                            

                        </tbody>

                       
                    </table>
                    <div class="m-2">
                        {{$data->links()}}
                        </div>
                  
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
        </script>

    </body>

    </html>
