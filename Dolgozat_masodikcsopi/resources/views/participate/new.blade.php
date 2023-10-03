<form action="/api/participate" method="post">
    {{csrf_field()}}
    <input type="text" name="present" placeholder="Present">
    <input type="text" name="user_id" placeholder="User id">
    <input type="submit" value="Ok">
</form>