<form action="{{route('customer.store')}}" method="post">
    @csrf
    <input type="text" name="name">
    <input type="text" name="gender">
    <input type="text" name="address">
    <input type="text" name="phone_number">
    <input type="submit" value="submit">
</form>