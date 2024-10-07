<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latest News</title>
    <style>
        .news-container {
            display: flex;
            flex-wrap: wrap;
            gap: 1rem;
        }

        .news-card {
            background: #fff;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 300px;
        }

        .news-card h3 {
            font-size: 1.2rem;
            margin-bottom: 10px;
        }

        .news-card p {
            font-size: 1rem;
        }

        .news-card a {
            color: #007bff;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <h2>Latest News</h2>
    <div class="news-container">
        @if (isset($newsArticles))
            @foreach ($newsArticles as $article)
                <div class="news-card">
                    <h3>{{ $article['title'] }}</h3>
                    <p>{{ $article['description'] }}</p>
                    <a href="{{ $article['url'] }}" target="_blank">Read more</a>
                </div>
            @endforeach
        @else
            <p>No news articles found.</p>
        @endif
    </div>
</body>
</html>
