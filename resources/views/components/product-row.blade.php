@foreach ($products as $product)
    <tr>
        <th >{{$product->id}}</th>
        <th >{{$product->name}}</th>
        <td >{{$product->description}}</td>
        <td >{{$product->price}}</td>
    </tr>
@endforeach