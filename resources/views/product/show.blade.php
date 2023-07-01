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
      <td>{{number_format($data->price) }}</td>
      <td>  <b>{{ $data->category->title }}</b></td>  
      <td>1403/4/03</td>
      <td>1403/4/7</td>

      <td> 
        <a href="" class="edit btn btn-success"><li class="fas fa-edit"></li>بروزرسانی</a>                    
          <a href="" class="edit btn btn-danger"><li class="fas fa-skull-crossbones"></li>حذف</a>                  
        </td>
    </tr>
  </tbody>
</table>

</div>
@endsection