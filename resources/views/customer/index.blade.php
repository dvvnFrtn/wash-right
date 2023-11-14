@foreach ($customers as $customer)
    <b>{{$customer->id}}</b>
    <b>{{$customer->name}}</b>
    <b>{{$customer->gender}}</b>
    <b>{{$customer->address}}</b>
    <b>{{$customer->phone_number}}</b>
@endforeach