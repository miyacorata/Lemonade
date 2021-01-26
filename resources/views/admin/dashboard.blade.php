@extends('app.layout',['title' => '管理コンソール'])

@section('main')
    <main>
        <h2>アカウント操作</h2>
        <div class="buttons three">
            <a href="{{ route('admin.logout') }}" class="button"
               onclick="event.preventDefault();document.getElementById('logout').submit();">ログアウト</a>
            <a href="{{ route('admin.password.change') }}" class="button">パスワード変更</a>
        </div>
        <form action="{{ route('admin.logout') }}" method="post" style="display: none" id="logout">
            @csrf
        </form>
        <h2>リリィデータ管理</h2>
        <div class="buttons three">
            <a href="{{ route('admin.lily.index') }}" class="button">データ一覧</a>
            <a href="{{ route('admin.lily.create') }}" class="button">新規登録</a>
            <a href="{{ route('admin.dashboard') }}" class="button">データ整合チェック</a>
        </div>
        <h2>トリプルデータ管理</h2>
        <div class="buttons three">
            <a href="{{ route('admin.dashboard') }}" class="button">データ一覧</a>
            <a href="{{ route('admin.dashboard') }}" class="button">新規登録</a>
            <a href="{{ route('admin.dashboard') }}" class="button">データ整合チェック</a>
        </div>
    </main>
@endsection
