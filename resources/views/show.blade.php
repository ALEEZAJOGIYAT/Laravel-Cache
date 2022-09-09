<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div>
        <br>
        <h2> Caching with redis </h2>
</div>
<br>
<br>

<div>
<table class="table table-bordered table-dark">
  <div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control input-sm" placeholder="Search...">
              <span class="input-group-btn-sm">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat">search</i>
                </button>
              </span>
        </div>
      </form>

</div>
<br>
<br>
      <!-- /.search form -->
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Country Name</th>
      <th scope="col">City Name</th>

    </tr>
  </thead>
  <tbody>
    @foreach ($result as $cities)
    <tr>
    <td>{{ $loop->index + 1 }}</td>
    <td>{{ $cities-> city }}</td>
    <td>{{ $cities-> country }}</td>
    <td><a href=""><span class="glyphicon glyphicon-edit">edit</span></a></td>
    </tr>
    @endforeach

  </tbody>
</table>
</div>    
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>