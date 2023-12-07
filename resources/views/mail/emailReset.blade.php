<!-- resources/views/emails/send_reset_link.blade.php -->

<p>Hello {{ $user->name }},</p>

<p>Please click the following link to reset your password:</p>

<a href="{{ url('password/reset', ['token' => $token]) }}">Reset Password</a>
