<html lang="ru-RU">
    <head>
        <meta charset="text/html">
    </head>
    <body>
        <h1><a href="https://jira.billing.ru/browse/{{$epickey}}">{{$epicname}}</a></h1>
        <p>{{$body}}</p>
        @foreach($issuesError as $issue)
        @if ($loop->first)
        <table>
            <tr><th>issue</th>
                <th>summary</th>
                <th>assignee</th>
                <th>updated</th>
            </tr>
            @endif
            <tr><td><a href="https://jira.billing.ru/browse/{{$issue["key"]}}">{{$issue["key"]}}</a></td>
                <td>{{$issue['fields']["summary"]}}</td>
                <td>{{$issue['fields']["assignee"]["key"]}}</td>
                <td>{{$issue['fields']["updated"]}}</td>
            </tr>
            @if ($loop->last)
        </table>
        @endif
        @endforeach

        @if (isset($epicCC))
        @foreach($epicCC as $c)
        @if ($loop->first)
        <p>Список текущих ответственных за задачи в эпике:
            @endif
            <a href="mailto:{{$c["emailAddress"]}}" title=""{{$c["displayName"]}}">{{$c["key"]}}</a>
            @if (!$loop->last)
            ,
            @else
        </p>
        @endif
        @endforeach
        @endif
        <p>Подробнее тут <a href="https://confluence.billing.ru/display/GFIMP/Epic">Jira - Epic</a></p>
    </body>
</html>