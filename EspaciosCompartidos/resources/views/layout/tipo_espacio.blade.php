
<label> <h5>Tipo de espacio</h5> </label>

@foreach(App\Tipo_Espacio::all() as $tp_espacio)
<div class="form-check">
    <input class="form-check-input" type="checkbox" value="{{ $tp_espacio->ID_TP_ESPACIO }}" name="tpEspacio[]">
    <label class="form-check-label" for="">
    {{$tp_espacio->NOMBRE}}
    </label>
</div>
@endforeach
