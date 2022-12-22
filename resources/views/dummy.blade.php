<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table class="table" style="margin-top: 40px">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Year</th>
            <th scope="col">Department</th>
            <th scope="col">Program</th>
            <th scope="col">Semester</th>
            <th scope="col">DOWNLOAD</th>
            </tr>
        </thead>
        <tbody>
            @if(!empty($articles))
            @foreach ($articles as $article)
                <tr>
                    <td>{{ $article->id  }}</td>
                    <td>{{ $article->Year_Regulate  }}</td>
                    <td>{{$article->Department  }}</td>
                    <td>{{ $article->Program  }}</td>
                    <td>{{ $article->Semester  }}</td>
                    <td>
                        <a href=<?=url( "../images/$article->File") ?> class="btn btn-success" download>Download pdf</a>
                    </td>
                </tr>
            @endforeach
        @endif

        </tbody>
    </table>

</body>
</html>
