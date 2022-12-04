@component('mail::message')

# Mountyへの登録完了しました

{{ $newUser->name }}さんこんにちは！

@component('mail::panel')
    Mountyで最高のMountain lifeを楽しみましょう！
@endcomponent

@component('mail::button', ['url' => route('tweet.index')])
    みんなの投稿を見に行く
@endcomponent

@endcomponent
