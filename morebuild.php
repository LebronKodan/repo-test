<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>More Information</title>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/bootstrap-responsive.min.css" rel="stylesheet">
	</head>
	
	<body>
		<div class="container-fluid">
			<div class="row-fluid">
				<div class="span12">
					<h3>h3. 这是一套可视化布局系统.</h3>
					<div id="main">
						<table id="table_1" class="table table-bordered table-hover">
							<thead>
								<tr>
									<th>编号</th>
									<th>编号</th>
									<th>编号</th>
									<th>编号</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>编号</td>
									<td>编号</td>
									<td>编号</td>
									<td>编号</td>
								</tr>
								<tr>
									<td>编号</td>
									<td>编号</td>
									<td>编号</td>
									<td>编号</td>
								</tr>
							</tbody>
						</table>
					</div>
					<div id="pagination" class="pagination pagination-right">
						<ul>
							<li id="li_1" class="disabled"><a href="#">1</a></li>
							<li id="next"><a href="#">Next</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	<script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
	<script type="text/javascript">
		var num = 1;
		$(document).on('click','#next',function(){		
			var text = $('li.disabled a').html();
			text = parseInt(text);
			if(text<num) {
				text++;
				$('li.disabled').removeClass('disabled');
				$('#li_'+text).addClass('disabled');
				$('[id^="table_"]').hide();
				$('#table_'+text).show();
			} else {
				$.ajax({
					url:'test.php',
					data:{'number':num+1},
					type:'POST',
					success:function(request){
						$('[id^="table_"]').hide();
						$('li.disabled').removeClass('disabled');
						$('#main').append(request);
						$('#next').remove();
						num++;
						var $htmlLi = $('<li id="li_'+num+'" class="disabled"><a href="#">'+num+'</a></li><li id="next"><a href="#">Next</a></li>');
						$('#pagination ul').append($htmlLi);
					}
				});
			}
		});
		
		$(document).on('click','[id^="li_"]',function(){
			var text = $(this).children('a').html();
			if($('li.disabled a').html() === text);
			else {
				$('[id^="table_"]').hide();
				$('li.disabled').removeClass('disabled');
				$(this).addClass('disabled');
				$('#table_'+text).show();
			}
		});
	</script>
	</body>
</html>
