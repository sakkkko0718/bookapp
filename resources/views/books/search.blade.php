<html>
    <head>
        <title>本の管理システム</title>
        <style>
            * {
                color: #9FA0A0;
                margin: 0 auto;
                max-width: 1200vh;
            }
            .books-inner{
                width: 90%;
            }
            .books-title{
                margin: 30px;
                text-align: center;
            }
            table{
                width: 90%;
                height: 10vh;
                border: 2px solid #9FA0A0;
            }
            .table-head{
                height: 5vh;
                width: 300px;
                padding: 20px;
                font-size: 20px;
            }
            .table-content{
                height: 5vh;
            }
            #title-td,#author-td{
                width: 100px;
                padding: 20px;
            }
            #del-td,#update-td{
                width: 50px;
            }
        </style>
    </head>

    <body>
        <div class="books-inner">
            <div class="books-title">
                <h1>本の管理システム</h1>
                <p>検索結果を出力しました</p>
            </div>
            <form action="/books/search" method="post">
            <table>
                @csrf
                <tr class="table-head"><th>タイトル</th><th>著者</th></tr>
                @foreach ($items as $item)
                <tr class="table-content">
                    <td id="title-td">{{$item->title}}</td>
                    <td id="author-td">{{$item->author}}</td>
                    <td id="update-td"><a href="/books/edit?id={{$item->id}}"><input type="submit" name="update" value="更新"></a></td>
                    <td id="del-td"><a href="/books/del?id={{$item->id}}"><input type="submit" name="delete" value="削除"></a></td>
                </tr>
                @endforeach
            </table>
            </form>
        </div>
    </body>
</html>