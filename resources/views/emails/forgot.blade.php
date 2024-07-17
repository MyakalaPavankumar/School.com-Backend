@component('mail::message')
Hello {{$user->name}}

<p>We Understood ,it Happens..</p>

@component('mail::button',['url'=>url('reset',$user->remember_token)])
Reset Your Password
@endcomponent

<p>In case You any Issues while Reset your password , Please Contact us </p>

Thanks, <br>
{{config('app.name')}}
@endcomponent