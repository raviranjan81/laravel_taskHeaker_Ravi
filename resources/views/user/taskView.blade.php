@include('user.layout.header')
<title>All User Task</title>
<div class="container">
    <div class="text-center h1 "> User Task </div>
    <div class="d-flex justify-content-between "><a href="{{route('user.expTask')}}" class="btn btn-outline-success m-1">Export Data</a> <a href="{{('/')}}" class="px-3 btn btn-outline-warning m-1">Back</a></div>
    <table class="table table-bordered text-center">
        <thead>
          <tr class="bg-light">
            <th scope="col">Id</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Task</th>
            <th scope="col">Task Status</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($task as $tasks)
          <tr>
            <th>{{$tasks->id}}</th>
            <td>{{$tasks->name}}</td>
            <td>{{$tasks->email}}</td>
            <td>{{$tasks->task}}</td>
            <td>
                @if ($tasks->status == 'p')

                    <span class="btn btn-outline-danger p-2 m-0"  style="cursor:text">Pending</span>
                @else
                    <span class="btn btn-outline-success p-2 m-0" style="cursor:text">Done</span>
                @endif
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
      <div class="d-flex justify-center align-self-center justify-content-center">
       <div class="">{!! $task->links() !!}</div> 
    </div>
    <div class="">&nbsp;</div>
</div>
@include('user.layout.footer')