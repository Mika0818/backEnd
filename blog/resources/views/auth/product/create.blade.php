
<form method="post" action="/admin/news/store" enctype="multipart/form-data">
    @csrf
    <div class="form-group row">
        <label for="title" class="col-sm-2 col-form-label">最新消息標題</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="title" name="title">
        </div>
    </div>
    <div class="form-group row">
        <label for="sort" class="col-sm-2 col-form-label">sort</label>
        <div class="col-sm-10">
            <input type="number" class="form-control" id="inputEmail3" value="" name="sort">
        </div>
    </div>
    <div class="form-group row">
        <div class="col-sm-10">
            <button type="submit" class="btn btn-primary">SEND</button>
        </div>
    </div>
</form>
