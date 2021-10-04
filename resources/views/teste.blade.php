<form action="{{url('teste')}}" method="post" enctype="multipart/form-data">
    @csrf
    <input type="file" name="image" id="">
    <button type="submit">Teste</button>
</form>
