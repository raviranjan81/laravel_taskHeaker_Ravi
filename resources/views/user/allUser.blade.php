@include('user.layout.header')
<title>All User Data</title>
<div class="container">
    <div class="text-center h1 "> User Data </div>
    <div class="d-flex justify-content-between "><a href="{{route('user.dataexp')}}" class="btn btn-outline-success m-1">Export Data</a> <a href="{{('/')}}" class="px-3 btn btn-outline-warning m-1">Back</a></div>
    <table class="table table-bordered text-center">
        <thead>
          <tr class="bg-light">
            <th scope="col">Id</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Mobile</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($users as $user )
          <tr>
            <th>{{$user->id}}</th>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->mobile}}</td>
            <td>
                <a href="{{('/user/task/')}}{{$user->id}}"  class="btn btn-outline-warning">Add Task</a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
      <div class="d-flex justify-center align-self-center justify-content-center">
       <div class="">{!! $users->links() !!}</div> 
    </div>
    <div class="">&nbsp;</div>
</div>
@include('user.layout.footer')