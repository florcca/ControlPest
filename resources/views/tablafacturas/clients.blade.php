<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>clients</title>
</head>
<body>
	<h1>lisssssssssss</h1>
	<table>
		<tr>
			<th>id</th>
			<th>name</th>
			<th>apellidos</th>
			<th>edad</th>
			<th>numero</th>
			<th>numero_emg</th>
			<th>domicilio</th>
			<th>email</th>
			<th>password</th>
		</tr>
		@foreach ($clients as $c)
			{{-- expr --}}
		<tr>
			<td>{{ $c -> id }}</td>
			<td>{{ $c -> name}}</td>
			<td>{{ $c -> apellidos}}</td>
			<td>{{ $c -> edad}}</td>
			<td>{{ $c -> numero }}</td>
			<td>{{ $c -> numero_emg}}</td>
			<td>{{ $c -> domicilio}}</td>
			<td>{{ $c -> email}}</td>
			<td>{{ $c -> password}}</td>
		</tr>
		@endforeach

	</table>

</body>
</html>