<x-layout>
    <h1>{{ $phone->brand }} {{ $phone->model}}</h1>
        <p>Storage: {{$phone->storage}}</p>
        <p>RAM: {{$phone->ram}}</p>
        <p>Price: {{$phone->price}}</p>


    <a href="{{route('phones.edit', $phone->id)}}" class="btn btn-warning">Edit</a>

    <form action="{{route('phones.destroy',$phone->id)}}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Delete</button>
    </form>

</x-layout>