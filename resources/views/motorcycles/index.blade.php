<html>
<head>
    <meta charset="UTF-8"/>
    <title>顯示所有重機資料</title>
</head>
<body>
<h1>顯示所有各品牌代表重機車系資料</h1>
<a href="motorcycles/create">新增重機</a>
<table border="1">
    <tr>
        <th>編號</th>
        <th>廠牌</th>
        <th>車名</th>
        <th>售價</th>
        <th>操作1</th>
        <th>操作2</th>
        <th>操作3</th>

    </tr>

    @foreach($motorcycles as $motorcycle)
        <tr>
            --
            <td>{{$motorcycle->id}}</td>
            <td>{{$motorcycle->bid}}</td>
            <td>{{$motorcycle->name}}</td>
            <td>{{$motorcycle->price}}</td>
            <td>
            <a href="motorcycles/{{$motorcycle->id}}">
                詳細資料
            </a>
            </td>
            <td>
                <a href="motorcycles/{{$motorcycle->id}}/edit">
                    修改
                </a>
            </td>

            <td>
                <form method="post" action="/motorcycles/{{$motorcycle->id}}">
                    @csrf
                    @method("delete")
                    <input type="submit" value="刪除"/>
                </form>
            </td>
        </tr>
    @endforeach
</table>
</body>
</html>
