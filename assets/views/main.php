<!DOCTYPE html>
<html>
	<head>
		<title>{{$title}}</title>
	</head>
	<body>
		<!-- Here is where we include a subtemplate -->
		{{$this->Insert($subview);}}
	</body>
</html>