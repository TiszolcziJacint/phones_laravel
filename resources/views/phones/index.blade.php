<x-layout>

    <h1>Phones</h1>
    <ul>
    @foreach ($phones as $phone)
        <li><a href="{{route('phones.show', $phone->id)}}">{{ $phone->brand }} {{$phone->model}}</a></li>
    @endforeach
  </ul>
    <a href="{{route('phones.create')}}" class="btn btn-primary">New</a>
</x-layout>