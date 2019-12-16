
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Add Meal</title>
  <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.css" rel="stylesheet">
  <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
  <script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script>
  <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote.css" rel="stylesheet">
  <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote.js"></script>
  <script src='https://kit.fontawesome.com/a076d05399.js'></script>
</head>
<body>
  <div class="container" style="margin-top:80px;">
      <div class="row justify-content-center">
          <div class="col-md-12">
              <div class="card">
                  <div class="card-header">
                      <a href="{{ URL::previous() }}"><button class="btn btn-success"><i class="fa fa-arrow-left" ></i>&nbsp;Back</button></a>
                  </div>
                    <br>
                  <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if (session('error'))
                        <div class="alert alert-danger" role="alert">
                            {{ session('error') }}
                        </div>
                    @endif
                    <?php
                        $user_id=$_GET['id'];
                    ?>
                    <form method="POST" action="{{ route('add_meal') }}">

                        @csrf
                        <input type="hidden" name="user_id" value="{{$user_id}}"/>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Day</label>
                          <input type="text"  name="name_day"class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Day 1 " required>
                          <small id="emailHelp" class="form-text text-muted">Please Type the Day</small>
                        </div>
                        <div class="form-group">
                          <label for="exampleFormControlTextarea1">Details of Meal</label>
                          <textarea class="form-control" id="summernote" rows="10" name="meal" required></textarea>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Add Meal
                                </button>
                            </div>
                        </div>
                    </form>

                  </div>
              </div>
          </div>
      </div>
  </div>


  <script>
    $(document).ready(function() {
        $('#summernote').summernote();
    });
  </script>
</body>
</html>
