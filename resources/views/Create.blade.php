<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Add Lessor</title>
</head>
<body>
	<h1>AGREGAR PROFESIONAL</h1>
	@if(count($errors) > 0)
		<div class="errors">
			<ul>
			@foreach($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
			</ul>
		</div>
    @endif
    
	<form action="{{ action('ProfessionalController@store') }}" method="post">
		{{ csrf_field() }}
		NOMBRE: <input type="text" name="name" value="{{old('name')}}">
        <br>
        <br>
		DNI: <input type="text" name="dni" value="{{old('dni')}}">
        <br>
        <br>
		<select name="profession">
                <optgroup label="PROFESIONES">
                    
                        <label>
                            <option id="Odontologo" type="checkbox" value="Odontologo">Odontologo</option>
                        </label>
                        <label>
                            <option id="Carpintero" type="checkbox" value="Carpintero">Carpintero</option>
                        </label>
                        <label>
                            <option id="Ingeniero de Sistema" type="checkbox" value="Ingeniero de Sistema">Ingeniero de Sistema</option>
                        </label>
                        <label>
                            <option id="Diseñador Web" type="checkbox" value="Diseñador Web">Diseñador Web</option>
                        </label>
                        <label>
                            <option id="Dentista" type="checkbox" value="Dentista">Dentista</option>
                        </label>
                        <label>
                            <option id="Profesor" type="checkbox" value="Profesor">Profesor</option>
                        </label>

                </optgroup>
            </select>
        <br>
        <br>
        
		<input type="submit" value="Crear">
	</form>
</body>
</html>