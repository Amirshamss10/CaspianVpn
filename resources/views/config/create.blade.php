@extends('layout.layout')

@section('content')
<div class="container">
        <br></br>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header" dir="rtl">اضافه کردن سرور</div>

                    <form action="{{ route('configs.store') }}" method="POST">
                        @csrf
                        <div class="card-body">
                            @include('layout.alerts')
                            <div class="mb-4">
                            </div>
                          <div class="mb-4">
                            <input name="name" type="text" class="form-control" 
                            placeholder="نام" value="{{ old('title') }}" dir="rtl">
                            @error("name")
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                          </div>

                          <div class="mb-4">
                            <input name="config" type="text" class="form-control @error('price_product') is-invalid @enderror" id="newPasswordInput"
                            placeholder="کانفیگ مورد نظر را وارد کنید" dir="rtl">
                            @error('config')
                            <span class="text-danger" dir="rtl">{{ $message }}</span>
                            @enderror
                          </div>
                        </div>
                        <div class="card-footer">
                            <button class="btn btn-success">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

