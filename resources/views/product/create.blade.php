@extends('layout.layout')

@section('content')
<div class="container">
        <br></br>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header" dir="rtl">اضافه کردن محصول</div>

                    <form action="{{ route('products.store') }}" method="POST">
                        @csrf
                        <div class="card-body">
                            @include('layout.alerts')
                            <div class="mb-4">
                            <select class="form-select" name="category_id">
                              <option value="" selected>choose here</option>
                              @foreach ($category as $category)
                              <option value="{{ $category->id }}" dir="rtl">{{ $category->title}}</option>
                              @endforeach

                            </select> 
                            @error("category_id")
                              <span class="text-danger" dir="rtl">انتخاب دسته بندی الزامی میباشد</span>
                          @enderror

                          </div>

                          <div class="mb-4">
                            <input name="title" type="text" class="form-control" 
                            placeholder="نام محصول" value="{{ old('title') }}" dir="rtl">
                            @error("title")
                            <span class="text-danger">نام الزامی میباشد</span>
                            @enderror
                          </div>

                          <div class="mb-4">
                            <input name="price" type="text" class="form-control @error('price_product') is-invalid @enderror" id="newPasswordInput"
                            placeholder="قیمت" dir="rtl">
                            @error('price')
                            <span class="text-danger" dir="rtl">لطفا عدد وارد کنید</span>
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

