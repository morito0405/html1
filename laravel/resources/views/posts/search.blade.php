<x-layout>
    <a href="{{ route('index.posts')}}" class="re">戻る</a>
    <h1>検索画面</h1>
    
    <form action="{{ route('search.posts')}}" method="get">
        <label>
            Title検索
            <input type="text" name='title' value = "{{ old('title')}}">
        </label>
        <button>検索</button>
    </form>
    <h2>検索結果</h2>
    <ul>
        @foreach ($posts as $post)
            <li>
                <a href="{{ route('text.posts', $post->id)}}">{{$post->title}}</a>
            </li>
        @endforeach

    </ul>
</x-layout>
