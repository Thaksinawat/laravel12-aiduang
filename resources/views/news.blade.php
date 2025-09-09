<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <title>ข่าวทั้งหมด</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 p-6">
    <h1 class="text-3xl font-bold mb-6">ข่าวทั้งหมด</h1>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach($news as $item)
        <x-news-card
            :title="$item->title"
            :content="Str::limit($item->content, 120)"
            :source-url="url('/news/'.$item->id)" />
        @endforeach
    </div>
</body>

</html>