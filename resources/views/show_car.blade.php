@extends( "layouts.master" )

@section( "content" )
<div class="row">
    <div class="col-12">
    <div class="col-lg-8 col-md-12 col-sm-12">
        <table class="table table-striped">
        <thead>
            <tr>
            <th scope="col">Id</th>
            <th scope="col">Rendszám</th>
            <th scope="col">Márka</th>
            <th scope="col">Szín</th>
            <th scope="col">Ár</th>
            <th scope="col">Művelet</th>
            </tr>
        </thead>
        <tbody>
            @foreach( $cars as $car )
                <tr>
                    <td>{{ $car->id }}</td>
                    <td>{{ $car->plate }}</td>
                    <td>{{ $car->brand }}</td>
                    <td>{{ $car->color }}</td>
                    <td>{{ $car->price }}</td>
                    <td>
                        <a class="btn btn-outline-primary btn-sm" href="/edit-car/{{ $car->id }}">Szerkesztés</a>
                        <a class="btn btn-outline-danger btn-sm" href="/delete-car/{{ $car->id }}">Törlés</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
        </table>
    </div>
    </div>
</div>
@endsection