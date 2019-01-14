<label> <h5>Uso al dia del espacio</h5> </label>

@foreach(App\Tiempo::all() as $tiempo)
<div class="form-check">
    <input class="form-check-input" type="checkbox" value="{{ $tiempo->ID_TIEMPO }}" name="tiempo[]">
    <label class="form-check-label" for="">
     {{$tiempo->NOMBRE}}
     </label>
</div>
@endforeach
