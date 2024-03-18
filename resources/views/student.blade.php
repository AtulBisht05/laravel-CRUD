<h2>User</h2>
@foreach ($data as $id =>$student )
<strong>Name:</strong><p>{{$student->name}}</p>
<strong>Email:</strong><p>{{$student->email}}</p>
@endforeach
