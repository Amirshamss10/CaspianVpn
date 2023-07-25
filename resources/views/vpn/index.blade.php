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
<h1>VPN server</h1>
<div class="table-responsive" style="overflow-x:auto;">
@include('layout.alerts')
<table class="table" dir="rtl">
<thead>
    <tr>
      <th scope="col">نام</th>
      <th>کاربر</th>
      <th scope="col">زمان ایجاد</th>
      <th scope="col">جزییات</th>

    </tr>
  </thead>

  <tbody>
    <tr>
        
      <th scope="row">test</th>
      <td><b>test2</b></td>
      <td><b>test3</b></td>
      <td> 
        <div class="md">


          <form action="" method="post">
          @csrf
          <button class="edit btn btn-danger"><li class="fa fa-trash"></li>حذف</button>                  

        </form>    
        </div>

        </form>
      </td>
    </tr>
      </tbody>
</table>

</div>
@endsection