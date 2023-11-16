<!DOCTYPE html>
<html lang="en">
<head>
  <title>School-MS</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="jumbotron text-center">
  <h1>Add New Course</h1>
  <div class="float-right">
    <a href="" class="btn btn-success" data-toggle="modal" data-target="#myModal">Add New Course</a>
  </div>
</div>

<div class="container">
 <table class="table">
  <thead>
    <tr>
        <td>Id</td>
        <td>Course_Name</td>
        <td>Teacher_Name</td>
        <td>Batch_Time</td>
        <td>Teaching_Day</td>
        <td>Edit</td>
    </tr>

  </thead>


  <tbody>
    @foreach ($course as $course_value )

    <tr>
        <td>{{$course_value->id}}</td>
        <td>{{$course_value->Course_Name}}</td>
        <td>{{$course_value->Teacher_Name}}</td>
        <td>{{$course_value->Batch_Time}}</td>
        <td>{{$course_value->Teaching_Day}}</td>
         <td>Edit</td>
         <td>
            <form action="course/{{$course_value->id}}" method="POST">
                @csrf
                @method('DELETE')

                <input type="submit" value="delete" class="btn btn-primary">
            </form>
         </td>
    </tr>

    @endforeach
  </tbody>
 </table>
</div>











<div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Course Edit</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <!-- Modal body -->
        <div class="modal-body">
          <form id="form" action="course" method="POST">
           @csrf
               <div class="form-group">
                   <label for="">Course_Name</label>
                   <input type="text" class="form-control" name="Course_Name" id="Course_Name">
              </div>

              <div class="form-group">
                <label for="">Teacher_Name</label>
                <input type="text" class="form-control" name="Teacher_Name" id="Teacher_Name">
           </div>

           <div class="form-group">
            <label for="">Batch_Time</label>
            <input type="text" class="form-control" name="Batch_Time" id="Batch_Time">
       </div>

       <div class="form-group">
        <label for="">Teaching_day</label>
        <input type="text" class="form-control" name="Teaching_day" id="Teaching_day">
    </div>

    <div class="form-group">

        <input type="submit" class="form-control btn btn-danger" value="Add Course" id="submit" >
    </div>

          </form>
        </div>



      </div>
    </div>
  </div>


</body>
</html>
