<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <body>
        <div>
            <em><b>Choose option:</em></b>
            <div>
                <ol type = "1">
                <p> <li><a href = "http://itc-crud/news" >Get all</a> </li></p>
                <p> <li><a href = "http://itc-crud/news/create" >Create</a> </li></p>
                <p> <li><a href = "http://itc-crud/news/{newsId}" >Show</a> </li></p>
            </div>
        </div>
    </body>
</html>
