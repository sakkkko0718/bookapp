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
            .books-search{
                margin: 20px;
            }
        </style>
    </head>

    <body>
        <div class="books-inner">
            <div class="books-title">
                @csrf
                <h1>本の管理システム</h1>
                <p>本の表示・更新・削除を行います</p>
                <p>本の追加は<a href="/books/add" style="color: cornflowerblue">こちら</a>から</p>
                <div class="books-search">
                    <form action="books/search" method="get">
                    <p>検索したい本のタイトルを入力してください</p>
                        <td><input type="text" name="title"></td>
                        {{-- <td><a href="/books/search?=title"><input type="submit" name="search" value="検索"></a></td> --}}
                        <td><input type="submit" value="検索"></td>
                    </form>
                </div>
            </div>
            <table>
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
        </div>
    </body>
</html>