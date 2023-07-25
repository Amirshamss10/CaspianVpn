<form method="post" action="{{url('pay')}}">
    @csrf
    <input type="text" name="amount">
    <button type="submit">تکمیل خرید</button>
</form>