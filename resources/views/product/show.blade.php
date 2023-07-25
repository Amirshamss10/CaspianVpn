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
</style>
@include('layout.alerts')
<div class="table-responsive" style="overflow-x:auto;">
<table class="table" dir="rtl">
<thead>
    <tr>
      <th scope="col">محصول</th>
      <th scope="col">قیمت</th>
      <th scope="col">دسته بندی</th>
      <th scope="col">زمان ایجاد</th>
      <th scope="col">اخرین بروزرسانی</th>
      <th scope="col">وضعیت</th>
    </tr>
  </thead>

  <tbody>
      <tr>       
      <th scope="row">{{$data->title}}</th>
      <td style="color:green"><b>{{number_format($data->price) }}</b></td>
      <td>  <b>{{ $data->category->title }}</b></td>  
      <td>{{ $data->created_at}}</td>
      <td>{{ $data->updated_at }}</td>

      <td> 
        <a href="{{ route('products.edit', $data->id) }}" class="edit btn btn-success"><li class="fas fa-edit"></li>بروزرسانی</a>              
        <form action="{{ route('products.destroy', $data->id) }}" method="post">
          @csrf
          <button class="edit btn btn-danger"><li class="fa fa-trash"></li>حذف</button>                  
        </form>      
        </td>
    </tr>
  </tbody>
</table>

</div>
@endsection