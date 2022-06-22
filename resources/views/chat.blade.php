<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>chat</title>
	 <meta name="csrf-token" content="{{ csrf_token() }}" />
	 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
	<style >
		.list-group{
			overflow-y: scroll;
			height: 200px;
		}

	</style>
</head>
<body>



	<div class="container">
		<div class="row" id="app">
			<div class="offset-md-4">
				 <li class="list-group-item">Chat Room</li>
				<ul class="list-group ">
			 
			  <message v-for='value in chat.message' :key='value.index' color='success'>
			  	
			  	@{{value}}
			  </message>
			  
			</ul>
			<input type="text" class="form-control" placeholder="Type your message" v-model="message"  @keyup.enter="send">
				
			</div>
			
			
		</div>
		
	</div>


<script src="{{asset('js/app.js')}}">
	

</script>

<script type="text/javascript">
	
		
</script>
</body>
</html>