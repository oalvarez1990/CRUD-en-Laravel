@extends('layout')

@section('content')
    <style>
        .uper {
            margin-top: 40px;
        }

    </style>
    <div class="card uper">
        <div class="card-header">
            Editar categorias
        </div>
        <div class="card-body">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div><br />
            @endif
            <form method="post" action="{{ route('Categorias.update', $Categorias->id) }}">
                <div class="form-group">
                    @csrf

                    @method('PATCH')

                    <label for="country_name">El :</label>
                    <input type="text" class="form-control" name="name" value="{{ $game->name }}" />
                </div>

                <div class="form-group">
                    <label for="cases">Game Price :</label>
                    <input type="text" class="form-control" name="price" value="{{ $game->price }}" />
                </div>
                <button type="submit" class="btn btn-primary">Update Data</button>
            </form>
        </div>
    </div>
@endsection

{{-- 
	
si tiempo<=10 y sueldo<=300000 Entonces		
		incremento= sueldo*12/100
		totalIncremento=incremento
	SiNo		
		si sueldo>=300000 y sueldo<=500000 Entonces
			incremento= sueldo*10/100
			totalIncremento=incremento
		SiNo
			si sueldo>=500000 Entonces
				incremento=sueldo*14/100
				totalIncremento=incremento
			FinSi
		FinSi
		si tiempo>=10 y tiempo<=20 Entonces
			si sueldo<=300000 Entonces
				incremento=sueldo*14/100
				totalIncremento=incremento
			SiNo
				si sueldo>300000 y sueldo<=500000 Entonces
					incremento= sueldo*12/100
					totalIncremento=incremento
				SiNo
					si sueldo>500000 Entonces
						incremento=sueldo*10/100
						totalIncremento=incremento
					sino 
						si tiempo>20 Entonces
							incremento=sueldo*15/100
							totalIncremento=incremento
						FinSi
					FinSi
					
				FinSi
			FinSi
		FinSi
	FinSi

Algoritmo cicloMIentras
	//tabla de multiplicar 	
	Definir tabla, resultado,i Como Entero
	i=1
	Escribir "Ingresar valor tabla"
	leer tabla	
	Mientras i<=10 Hacer		
		resultado=tabla*i
		Mostrar "",tabla " * " i, " = ", resultado
		i=i+1
	Fin Mientras
FinAlgoritmo

 --}}