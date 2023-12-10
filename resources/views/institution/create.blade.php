<div>
    <h2>施設情報（新規）</h2>
</div>

<div>
    <a href="{{ route('institutions.index') }}"> 戻る</a>
</div>

hr>

<form action="{{ route('institutions.store') }}" method="POST">
    @csrf

    <div>
        <strong style="display:inline-block; width:80px;">施設名:</strong>
        <input type="text" name="name" placeholder="Name">
    </div>

    <div>
        <strong style="display:inline-block; width:80px;">市区町村:</strong>
        <select name="town_id">
           <option value="1">港区</option>
           <option value="2">新宿区</option>
        </select>
    </div>

    <hr>

    <div>
        <button type="submit">Submit</button>
    </div>

</form>