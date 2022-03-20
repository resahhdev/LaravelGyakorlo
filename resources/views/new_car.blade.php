@extends( "layouts.master" )
@section( "content" )
<div class="row mt-5">
    <div class="col-lg-3 offset-lg-3">
        <form class="form-control" action="store-car" method="post">
            @csrf
            <label for="plate">Rendszám:</label>
            <input class="form-control" type="text" name="plate">
            <label for="brand">Márka:</label>
            <input class="form-control" type="text" name="brand">
            <label for="brand">Szín:</label>
            <input class="form-control" type="text" name="color">
            <label for="price">Eladási ár</label>
            <input class="form-control" type="text" name="price">
            <button class="btn btn-outline-primary mt-2" type="submit">Küldés</button>
        </form>
    </div>
</div>
@endsection