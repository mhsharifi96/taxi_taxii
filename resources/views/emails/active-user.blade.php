@component('mail::message')
##ایمیل فعال سازی sfas

[لینک فعال سازی]({{route('activation.account',$code)}}) - The web framework used
     {{--<a href="{{route('activation.account',$code)}}">فعال سازی</a>--}}

@endcomponent
{{--@component('mail::button',['url'=>route('activation.account',$code)])--}}
{{--فعال سازی اکانت--}}
{{--@endcomponent--}}