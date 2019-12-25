<!DOCTYPE HTML>
<html>
<head>
    <link href="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.2.2/css/bootstrap-combined.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" media="screen"
          href="http://tarruda.github.com/bootstrap-datetimepicker/assets/css/bootstrap-datetimepicker.min.css">

</head>
<body>


<center>
    <div style="margin-top:150px;">
        <a href="/appointment_all" style="margin-bottom:20px;"><button type="submit" class="btn btn-primary">Back</button></a><br><br>
        <?php
        $id=$_GET['id'];
        $get_all=DB::table('appoinments')->where('id',$id)->first();
        ?>
        <form method="POST" action="{{ route('approve_appointment') }}" >
            @csrf
            <input type="hidden" name="id" value="{{$id}}">
            <div id="datetimepicker" class="input-append date">
                <input type="text" name="d_t"  value="{{$get_all->d_t}}" required>
                <span class="add-on"><i data-time-icon="icon-time" data-date-icon="icon-calendar"></i></span>
            </div>
            <br>
            <input type="text" name="notes" placeholder="Enter notes here" value="{{$get_all->notes}}" style="height: 100px;" required>
            <br>
            <button type="submit" class="btn btn-primary">
                Approve Appointment
            </button>
        </form>
    </div>


</center>

<script type="text/javascript"
        src="http://cdnjs.cloudflare.com/ajax/libs/jquery/1.8.3/jquery.min.js">
</script>
<script type="text/javascript"
        src="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.2.2/js/bootstrap.min.js">
</script>
<script type="text/javascript"
        src="http://tarruda.github.com/bootstrap-datetimepicker/assets/js/bootstrap-datetimepicker.min.js">
</script>
<script type="text/javascript"
        src="http://tarruda.github.com/bootstrap-datetimepicker/assets/js/bootstrap-datetimepicker.pt-BR.js">
</script>
<script type="text/javascript">
    $('#datetimepicker').datetimepicker({
        format: 'dd/MM/yyyy hh:mm:ss',
        language: 'pt-BR'
    });
</script>
</body>
<html>