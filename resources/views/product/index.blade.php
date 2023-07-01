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
<h1>product 8 </h1>
<div class="table-responsive" style="overflow-x:auto;">
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
      <td>{{ number_format($product->price) }}</td>
      <td> <b>{{ $category->title }}</b></td>
      
      <td> 
        
      <a href="{{route('products.show', $product->id)}}" class="edit btn btn-success btn-sm">مشاهده</a>                  

          @endforeach
        </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>

</div>
@endsection