<form action="{{ url('/store') }}" method="POST">
    @csrf
    <div class="mb-3">
      <label class="form-label">First Name</label>
      <input name="firstName" type="text" class="form-control" placeholder="Enter your First Name">
    </div>
    <div class="mb-3">
        <label class="form-label">Last Name</label>
        <input name="lastName" type="text" class="form-control" placeholder="Enter your last Name">
      </div>
      <div class="mb-3">
        <label class="form-label">Age</label>
        <input name="age" type="text" class="form-control" placeholder="Enter your age">
      </div>
      <div class="mb-3">
        <label class="form-label">Speciality</label>
        <input name="speciality" type="text" class="form-control" placeholder="Speciality">
      </div>
      <button type="submit" class="btn btn-info" value="save">Submit</button>
      <button type="reset" class="btn btn-warning" value="reset">Reset</button>
  </form>