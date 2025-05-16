helo
@foreach ($user as $users)
    {{ $users->name }}
    {{$users->description}} <br>
@endforeach
