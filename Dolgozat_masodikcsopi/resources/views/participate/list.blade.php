@foreach ($participates as $participate)
    <form action="/api/participate/{{$participate->participate_id}}" method="post">
        {{csrf_field()}}
        {{method_field("GET")}}
        <div>
            <input type="submit" value="{{$participate->user_id}}">
        </div>
    </form>
@endforeach