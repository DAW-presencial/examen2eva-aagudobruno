<div class="row">
    <label for="companyName" class="form-label col-3 align-self-center">{{__('tutorsForm.companyName')}}</label>
    <div class="col px-0">
        <input id="companyName" name="companyName" type="text" class="form-control" value="{{ old('companyName') }}" required>
        {!!$errors->first('companyName','<small class="text-danger">:message</small></br>')!!}
    </div>    
</div>
<div class="row">
    <label for="docType" class="form-label col-3 align-self-center">{{__('tutorsForm.docType')}}</label>
    <div class="col px-0">
        <input id="docType" name="docType" type="text" class="form-control" value="{{ old('docType') }}" required>
        {!!$errors->first('docType','<small class="text-danger">:message</small></br>')!!}
    </div>    
</div>
<div class="row">
    <label for="dni" class="form-label col-3 align-self-center">{{__('tutorsForm.dni')}}</label>
    <div class="col px-0">    
        <input id="dni" name="dni" type="text" class="form-control" value="{{ old('dni') }}" required>
        {!!$errors->first('dni','<small class="text-danger">:message</small></br>')!!}
    </div>    
</div>
<div class="row">
    <label for="tutorName" class="form-label col-3 align-self-center">{{__('tutorsForm.tutorName')}}</label>
    <div class="col px-0">
        <input id="tutorName" name="tutorName" type="text" class="form-control" value="{{ old('tutorName') }}" required>
        {!!$errors->first('tutorName','<small class="text-danger">:message</small></br>')!!}
    </div>    
</div>
<div class="row">
    <label for="tutorSurname1" class="form-label col-3 align-self-center">{{__('tutorsForm.tutorSurname1')}}</label>
    <div class="col px-0">
        <input id="tutorSurname1" name="tutorSurname1" type="text" class="form-control" value="{{ old('tutorSurname1') }}" required>
        {!!$errors->first('tutorSurname1','<small class="text-danger">:message</small></br>')!!}
    </div>    
</div>
<div class="row">
    <label for="tutorSurname2" class="form-label col-3 align-self-center">{{__('tutorSurname2')}}</label>
    <div class="col px-0">
        <input id="tutorSurname2" name="tutorSurname2" type="text" class="form-control" value="{{ old('tutorSurname2') }}">
        {!!$errors->first('tutorSurname2','<small class="text-danger">:message</small></br>')!!}
    </div>    
</div>
<div class="row">
    <label for="dniCountry" class="form-label col-3 align-self-center">{{__('dniCountry')}}</label>
    <div class="col px-0">
        <input id="dniCountry" name="dniCountry" type="text" class="form-control" value="{{ old('dniCountry') }}" required>
        {!!$errors->first('dniCountry','<small class="text-danger">:message</small></br>')!!}
    </div>    
</div>
<div class="row">
    <label for="province" class="form-label col-3 align-self-center">{{__('province')}}</label>
    <div class="col px-0">
        <input id="province" name="province" type="text" class="form-control" value="{{ old('province') }}" required>
        {!!$errors->first('province','<small class="text-danger">:message</small></br>')!!}
    </div>    
</div>
<div class="row">
    <label for="municipi" class="form-label col-3 align-self-center">{{__('municipi')}}</label>
    <div class="col px-0">
        <input id="municipi" name="municipi" type="text" class="form-control" value="{{ old('municipi') }}" required>
        {!!$errors->first('municipi','<small class="text-danger">:message</small></br>')!!}
    </div>    
</div>
<div class="row">
    <label for="status" class="form-label col-3 align-self-center">{{__('status')}}</label>
    <div class="col px-0">
        <select id="status" name="status" type="select" class="form-control" required>
            <option value="active" @if (old('status')=="active") selected @endif>{{__('active')}}</option>
            <option value="inactive" @if (old('status')=="inactive") selected @endif>{{__('inactive')}}</option>
        </select>    
        {!!$errors->first('status','<small class="text-danger">:message</small></br>')!!}
    </div>    
</div>
<div class="row">
    <label for="tlf" class="form-label col-3 align-self-center">{{__('tlf')}}</label>
    <div class="col px-0">
        <input id="tlf" name="tlf" type="text" class="form-control" value="{{ old('tlf') }}" required>
        {!!$errors->first('tlf','<small class="text-danger">:message</small></br>')!!}
    </div>    
</div>
<div class="row">
    <label for="email" class="form-label col-3 align-self-center">{{__('email')}}</label>
    <div class="col px-0">
        <input id="email" name="email" type="text" class="form-control" value="{{ old('email') }}" required>
        {!!$errors->first('email','<small class="text-danger">:message</small></br>')!!}
    </div>    
</div>