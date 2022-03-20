@extends( "layouts.master" )

@section( "content" )
<div class="container">
<div class="row mt-5">
    <div class="col-lg-3 col-md-6 col-sm-12 offset-lg-3">
        <select class="form-select" aria-label="Default select example">
            <option selected>Szín</option>
            <option value="kék">kék</option>
            <option value="sárga">sárga</option>
            <option value="piros">piros</option>
        </select>
        <a class="btn btn-outline-info btn-sm mt-2" href="/show-car/{{  }}">Keresés</a>
        <!-- <button class="btn btn-outline-info btn-sm mt-2" type="submit">Keresés</button> -->
    </div>
    <div class="col-lg-3 col-md-6 col-sm-12 text-end">
        <a href="/register">Regisztráció</a>
        <a href="/login">Bejelentkezés</a>
    </div>
</div>
<div class="row mt-5">
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
    <div class="col-lg-2 col-md-12 col-sm-12">
        <a href="/new-car"><button class="btn btn-primary">Új autó</button></a>
    </div>
</div>
</div>
@endsection