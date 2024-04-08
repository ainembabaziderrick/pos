@component('mail::message')

Hi, {{ $user->name}}. Forgot Password?

<p> It happens. Click the link bellow to reset your password.</p>

@component('mail::button', ['url'=>url('reset/'.$user->remember_token)])
          Reset Your Password
@endcomponent

! Incase of any issue recovering your password, please contact us using the form from contact us page
Thanks, <br>

{{ config('app.name')}}

@endcomponent