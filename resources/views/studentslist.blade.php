
<div class="card mb-3">
    <img src="https://images.unsplash.com/photo-1503676260728-1c00da094a0b?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1009&q=80" class="card-img-top" alt="Image Not Found">
    <div class="card-body">
      <h5 class="card-title">List of Students</h5>
      <p class="card-text">Those are Students That have been added</p>
      <table class="table">
        <thead>
        </thead>
        <tbody>
          <tr class="table-active">
            <th>First Name</th>
            <th>Last Name</th>
            <th>age</th>
            <th>speciality</th>
            <th></th>
          </tr>

          @foreach ($students as $stud)
          <tr>
            <td>{{ $stud->firstName }}</td>
            <td>{{ $stud->lastName }}</td>
            <td>{{ $stud->age }}</td>
            <td>{{ $stud->speciality }}</td>
            <td>

                <a href="{{ url('/edit/'.$stud->id) }}" class="btn btn-warning">Edit</a>
                <a href="{{ url('/destroy/'.$stud->id) }}" class="btn btn-danger">Delete</a>
            </td>
          </tr>
          @endforeach

        </tbody>
      </table>
    </div>
  </div>


