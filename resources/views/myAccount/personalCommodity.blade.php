<!DOCTYPE html>
<html lang="en">
<head>
	<title>Table V01</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="accountOrder/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="accountOrder/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="accountOrder/vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="accountOrder/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="accountOrder/vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="accountOrder/css/util.css">
	<link rel="stylesheet" type="text/css" href="accountOrder/css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
				<div class="table100">
					<table>
						<thead>
							<tr class="table100-head">
								<th class="column2">commodity ID</th>
								<th class="column3">Name</th>
								<th class="column4">price</th>
								<th class="column5">Picture</th>
								<th class="column6">Quantity</th>
								<th class="column7">Action</th>
							</tr>
						</thead>
						<tbody>
						@for($i=0; $i < count($commodity); $i++)
								<tr id="{{$commodity[$i]['commoditiesId']}}">
									<td class="column2">{{$commodity[$i]['commoditiesId']}}</td>
									<td class="column3">{{$commodity[$i]['name']}}</td>
									<td class="column4">{{$commodity[$i]['price']}}</td>
									<td class="column5"><img class='centerIMG' src="{{asset('upload/'.$commodity[$i]['picture'])}}"width="50px" height="50px"></td>
									<td class="column6">{{$commodity[$i]['quantity']}}</td>
									<td><button class="column7 btn btn-danger deleteRecord" data-id="{{$commodity[$i]['commoditiesId']}}" >Delete</button></td>
								</tr>
						@endfor
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>


	

<!--===============================================================================================-->	
	<script src="accountOrder/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="accountOrder/vendor/bootstrap/js/popper.js"></script>
	<script src="accountOrder/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="accountOrder/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="accountOrder/js/main.js"></script>

</body>
</html>

<script>
    $(".deleteRecord").click(function(){
    var id = $(this).data("id");
    var token = $("meta[name='csrf-token']").attr("content");
   
    $.ajax(
    {
        url: "deletePersonalCommodity/"+id,
        type: 'get',
        data: {
            "id": id,
            "_token": token,
        },
        success: function (){
            $(`#${id}`).remove();
        }
    });
   
});
</script>