<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">

    <title>School Mangement System</title>
  </head>

  <body>
    @include('navbar') <!-- navigation Bar -->
    <div class="row header-container justify-content-center"> 
        <div class="header">
            <h1>Student Management System</h1>
        </div>
    </div>
    <!------------------------------------------- Start Index View----------------------------------------------------------------->    
    @if ($layout == 'index')
        <div class="container-fluid mt-4">
            <div class="row">
                <section class="col-md-7">
                    @include('studentslist')
                </section>
                <section class="col"></section>
            </div>
        </div>
    <!------------------------------------------- End Index View--------------------------------------------------------------------> 
    
    <!------------------------------------------- Start Create View-----------------------------------------------------------------> 
    @elseif($layout == 'create')
        <div class="container-fluid mt-4">
            <div class="row">
                <section class="col-md-7">
                    @include('studentslist')
                </section>
                <section class="col">
                    @include('Forms.createForm')
                </section>
            </div>   
        </div>
    
    <!------------------------------------------- End Create View-----------------------------------------------------------------> 

    <!------------------------------------------- Start Show View-----------------------------------------------------------------> 
    @elseif($layout == 'show')
        <div class="container-fluid">
            <div class="row">
                <section class="col">
                    @include('studentslist')
                </section>
                <section class="col">
                    
                </section>
            </div>
        </div>
    <!------------------------------------------- End Show View-----------------------------------------------------------------> 

    <!------------------------------------------- Start edit View----------------------------------------------------------------> 

    @elseif($layout == 'edit')
        <div class="container-fluid mt-4">
            <div class="row">
                <section class="col-md-7">
                    @include('studentslist')
                </section>
                <section class="col-md-5">
                    @include('Forms.editForm')
                </section>
            </div>
        </div>   
    @endif
    <!------------------------------------------- End edit View-----------------------------------------------------------------> 
<footer></footer>  
</body>
</html>