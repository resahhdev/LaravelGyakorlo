@extends( "layouts.master" )
@section( "content" )
<div class="row mt-5">
    <div class="col-lg-3 offset-lg-3">
        {{ $car->id }}
        <form class="form-control" action="/update-car" method="post">
            @csrf
            @method( "PUT" )
            <input class="form-control" type="hidden" name="id" value="{{ $car->id }}">
            <label for="plate">Rendszám:</label>
            <input class="form-control" type="text" name="plate" value="{{ $car->plate }}">
            <label for="brand">Márka:</label>
            <input class="form-control" type="text" name="brand" value="{{ $car->brand }}">
            <label for="price">Eladási ár</label>
            <input class="form-control" type="text" name="price" value="{{ $car->price }}">
            <button class="btn btn-outline-primary mt-2" type="submit">Küldés</button>
        </form>
    </div>
</div>
@endsection