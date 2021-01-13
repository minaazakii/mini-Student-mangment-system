<form action="{{ url('/update/'.$student->id) }}" method="POST">
    @csrf
    <div class="mb-3">
      <label class="form-label">First Name</label>
      <input value="{{ $student->firstName }}" name="firstName" type="text" class="form-control" placeholder="Enter your First Name">
    </div>
    <div class="mb-3">
        <label class="form-label">Last Name</label>
        <input value="{{ $student->lastName }}" name="lastName" type="text" class="form-control" placeholder="Enter your last Name">
      </div>
      <div class="mb-3">
        <label class="form-label">Age</label>
        <input value="{{ $student->age }}" name="age" type="text" class="form-control" placeholder="Enter your age">
      </div>
      <div class="mb-3">
        <label class="form-label">Speciality</label>
        <input value="{{ $student->speciality }}" name="speciality" type="text" class="form-control" placeholder="Speciality">
      </div>
      <button type="submit" class="btn btn-info" value="Update">Update</button>
      <button type="reset" class="btn btn-warning" value="reset">Reset</button>
  </form>