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
                <p>本の削除を行います</p>
            </div>
            <form action="/books/del" method="post">
            <table>
                @csrf
                <input type="hidden" name="id" value="{{$form->id}}">
                <tr class="table-head"><th>タイトル</th><th>著者</th></tr>
                <tr class="table-content">
                    <td id="title-td">{{$form->title}}</td>
                    <td id="author-td">{{$form->author}}</td>
                    <td id="update-td"><input type="submit" value="送信"></td>
                </tr>
            </table>
            </form>
        </div>
    </body>
</html>