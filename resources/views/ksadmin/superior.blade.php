@extends('ksadmin.panel')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-6">
                <div class="form-group">
                    <label for="telefono">Teléfono</label>
                  <input type="text" class="form-control" name="telefono" value="{{$textos[0]['spanish']}}">
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" name="email" value="{{$textos[1]['spanish']}}">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <div class="form-group row">
                    <label for="linkedin" class="col-sm-2 col-form-label">LinkedIn</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="linkedin" value="{{$textos[5]['spanish']}}">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="facebook" class="col-sm-2 col-form-label">Facebook</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="facebook" value="{{$textos[2]['spanish']}}">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="instagram" class="col-sm-2 col-form-label">Instagram</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="instagram" value="{{$textos[3]['spanish']}}">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="youtube" class="col-sm-2 col-form-label">Youtube</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="youtube" value="{{$textos[4]['spanish']}}">
                    </div>
                  </div>
            </div>
        </div>
        <div class="row d-flex justify-content-center">
            <button type="submit" class="btn btn-primary">Actualizar</button>
        </div>
    </div>
@endsection