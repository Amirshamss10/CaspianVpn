  @extends('layout.layout')

  @section('content')
  <style>
    table,
    th, td {
      border-bottom: 1px solid #ddd;
    }

          th,
          td {
              border: 1px solid black;
              border-collapse: collapse;
              padding: 5px;
          }
  
          tr:nth-child(odd) {
              background-color: #f2f2f2;
          }
          tr:hover {background-color: coral;} 
  </style>
  <h1>product {{ $productCount }}</h1>
  <div class="table-responsive" style="overflow-x:auto;">
  @include('layout.alerts')
  <table class="table" dir="rtl">
  <thead>
      <tr>
        <th scope="col">محصول</th>
        <th scope="col">قیمت</th>
        <th scope="col">دسته بندی</th>
        <th scope="col">جزییات</th>

      </tr>
    </thead>

    @foreach ($data as $category) 
    @foreach ($category->prices as $product )
    <tbody>
      <tr>
          
        <th scope="row">{{ $product->title }}</th>
        <td style="color:green"><b>{{ number_format($product->price) }}</b></td>
        <td> <b>{{ $category->title }}</b></td>
        
        <td> 
          <div class="md">

            <a href="{{route('products.show', $product->id)}}" class="edit btn btn-success btn-sm">مشاهده</a>                  
          </div>

            @endforeach
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>

  </div>
  @endsection