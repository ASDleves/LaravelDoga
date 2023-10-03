<form action="/api/participate/{{$participate->participate_id}}" method="post">
    {{csrf_field()}}
    {{method_field('PUT')}}
    <input type="text" name="present" placeholder="present" value="{{$participate->present}}">
    <input type="text" name="event_id" placeholder="event_id" value="{{$participate->event_id}}">
    <input type="submit" value="Ok">
</form>