<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>User List</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
   
</head>
<body>
    <div class="container">
        <h3 class="text-center">User List</h3>

        @if(Session::has('suc'))
            <div class="alert alert-info">
                {{Session::get('suc')}}
            </div>
        @endif
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                  <tr>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>
                        <button value="{{$user->id}}" class="btn btn-danger btn-xs bannedUser" data-toggle="modal" data-target="#myModal">Banned</button>
                    </td>
                  </tr>  
                @endforeach
            </tbody>
        </table>
    </div>

    <div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Are you sure to banned?</h4>
      </div>
      <div class="modal-body">
        <form action="{{url('/users')}}" method="POST">
            @csrf
            <input type="hidden" name="user_id" id="user_id">
            <button type="submit" class="btn btn-success" >Yes</button>
            <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
        </form>
      </div>
      
    </div>

  </div>
</div>
</body>
    <script>
        $(document).ready(function(){
            $(".bannedUser").click(function(){
                var user_id = $(this).val();
                $("#user_id").val(user_id);
                
            });
        });
    </script>
</html>