<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>Document</title>
</head>

<body class=''>
  

    <div class="container">
      <h2 class=" mt-4"> Add New Student</h2>
        <div class="row mt-4">
            <div class="col-6">
               
                <form action='{{ route('addStudent') }}' method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputName" class="form-label">Name</label>
                        <input type="text" value="{{old('studentName')}}" name ='studentName' class="form-control @error('studentName')
                        is-invalid
                        @enderror" id="exampleInputName">
                        <span class="text-danger">
                            @error('studentName')
                            {{$message}}
                            @enderror
                        </span>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1"  class="form-label">Email address</label>
                        <input type="email" value="{{old('studentEmail')}}" name='studentEmail'  class="form-control @error('studentName')
                        is-invalid
                        @enderror" id="exampleInputEmail1"
                            aria-describedby="emailHelp">
                            <span class="text-danger">
                                @error('studentEmail')
                                {{$message}}
                               @enderror
                            </span>
                    </div>
                    <button type="submit" class="btn btn-primary">Add Student</button>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
