@foreach ($participates as $participate)
    <form action="/api/participate/{{$participate->participate_id}}" method="post">
        {{csrf_field()}}
        {{method_field('DELETE')}}
        <input type="submit" value="{{$participate->present}}">
    </form>
@endforeach