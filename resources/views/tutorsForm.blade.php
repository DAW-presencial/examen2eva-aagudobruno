<div class="row">
    <label for="companyName" class="form-label col-3 align-self-center">Empresa</label>
    <div class="col px-0">
        <input id="companyName" name="companyName" type="text" class="form-control" value="{{ old('companyName') }}">
        {!!$errors->first('companyName','<small class="text-danger">:message</small></br>')!!}
    </div>    
</div>
<div class="row">
    <label for="docType" class="form-label col-3 align-self-center">Tipo de documento</label>
    <div class="col px-0">
        <input id="docType" name="docType" type="text" class="form-control" value="{{ old('docType') }}">
        {!!$errors->first('docType','<small class="text-danger">:message</small></br>')!!}
    </div>    
</div>
<div class="row">
    <label for="dni" class="form-label col-3 align-self-center">DNI</label>
    <div class="col px-0">    
        <input id="dni" name="dni" type="text" class="form-control" value="{{ old('dni') }}">
        {!!$errors->first('dni','<small class="text-danger">:message</small></br>')!!}
    </div>    
</div>
<div class="row">
    <label for="tutorName" class="form-label col-3 align-self-center">Nombre</label>
    <div class="col px-0">
        <input id="tutorName" name="tutorName" type="text" class="form-control" value="{{ old('tutorName') }}">
        {!!$errors->first('tutorName','<small class="text-danger">:message</small></br>')!!}
    </div>    
</div>
<div class="row">
    <label for="tutorSurname1" class="form-label col-3 align-self-center">Primer Apellido</label>
    <div class="col px-0">
        <input id="tutorSurname1" name="tutorSurname1" type="text" class="form-control" value="{{ old('tutorSurname1') }}">
        {!!$errors->first('tutorSurname1','<small class="text-danger">:message</small></br>')!!}
    </div>    
</div>
<div class="row">
    <label for="tutorSurname2" class="form-label col-3 align-self-center">Segundo Apellido</label>
    <div class="col px-0">
        <input id="tutorSurname2" name="tutorSurname2" type="text" class="form-control" value="{{ old('tutorSurname2') }}">
        {!!$errors->first('tutorSurname2','<small class="text-danger">:message</small></br>')!!}
    </div>    
</div>
<div class="row">
    <label for="dniCountry" class="form-label col-3 align-self-center">Pais documento de identidad</label>
    <div class="col px-0">
        <input id="dniCountry" name="dniCountry" type="text" class="form-control" value="{{ old('dniCountry') }}">
        {!!$errors->first('dniCountry','<small class="text-danger">:message</small></br>')!!}
    </div>    
</div>
<div class="row">
    <label for="province" class="form-label col-3 align-self-center">Província</label>
    <div class="col px-0">
        <input id="province" name="province" type="text" class="form-control" value="{{ old('province') }}">
        {!!$errors->first('province','<small class="text-danger">:message</small></br>')!!}
    </div>    
</div>
<div class="row">
    <label for="municipi" class="form-label col-3 align-self-center">Municipio</label>
    <div class="col px-0">
        <input id="municipi" name="municipi" type="text" class="form-control" value="{{ old('municipi') }}">
        {!!$errors->first('municipi','<small class="text-danger">:message</small></br>')!!}
    </div>    
</div>
<div class="row">
    <label for="status" class="form-label col-3 align-self-center">Estado</label>
    <div class="col px-0">
        <input id="status" name="status" type="select" class="form-control">
        {!!$errors->first('status','<small class="text-danger">:message</small></br>')!!}
    </div>    
</div>
<div class="row">
    <label for="tlf" class="form-label col-3 align-self-center">Teléfono</label>
    <div class="col px-0">
        <input id="tlf" name="tlf" type="text" class="form-control" value="{{ old('tlf') }}">
        {!!$errors->first('tlf','<small class="text-danger">:message</small></br>')!!}
    </div>    
</div>
<div class="row">
    <label for="email" class="form-label col-3 align-self-center">Email</label>
    <div class="col px-0">
        <input id="email" name="email" type="text" class="form-control" value="{{ old('email') }}">
        {!!$errors->first('email','<small class="text-danger">:message</small></br>')!!}
    </div>    
</div>